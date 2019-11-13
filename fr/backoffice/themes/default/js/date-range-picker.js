/* =========================================================
 * bootstrap-datepicker.js 
 * http://www.eyecon.ro/bootstrap-datepicker
 * =========================================================
 * Copyright 2012 Stefan Petre
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * ========================================================= */

//click action
!function( $ ) {
	var click, switched, val, start, end, over, compare, startCompare, endCompare;

	// Picker object
	var DateRangePicker = function(element, options){
		this.element = $(element);
		compare = false;

		if (typeof options.dates !== 'undefined'){
			DPGlobal.dates = options.dates;
		}

		if (typeof options.start !== 'undefined'){
			if (options.start.constructor === String){
				start = DPGlobal.parseDate(options.start, DPGlobal.parseFormat('Y-m-d')).getTime();
			} else if (options.start.constructor === Number){
				start = options.start;
			} else if (options.start.constructor === Date){
				start = options.start.getTime();
			}
		}

		if (typeof options.end !== 'undefined'){
			if (options.end.constructor === String){
				end = DPGlobal.parseDate(options.end, DPGlobal.parseFormat('Y-m-d')).getTime();
			} else if (options.end.constructor === Number) {
				end = options.end;
			} else if (options.end.constructor === Date) {
				end = options.end.getTime();
			}
		}

		if (typeof options.compare !== 'undefined'){
			compare = options.compare;
		}

		this.format  = DPGlobal.parseFormat(options.format||this.element.data('date-format')||'Y-m-d');
		this.picker  = $(DPGlobal.template).appendTo(this.element).show()
			.on({
				click: $.proxy(this.click, this),
				mouseover: $.proxy(this.mouseover, this),
				mouseout: $.proxy(this.mouseout, this)
			});

		this.minViewMode = options.minViewMode||this.element.data('date-minviewmode')||0;
		if (typeof this.minViewMode === 'string') {
			switch (this.minViewMode) {
				case 'months':
					this.minViewMode = 1;
					break;
				case 'years':
					this.minViewMode = 2;
					break;
				default:
					this.minViewMode = 0;
					break;
			}
		}
		this.viewMode = options.viewMode||this.element.data('date-viewmode')||0;
		if (typeof this.viewMode === 'string') {
			switch (this.viewMode) {
				case 'months':
					this.viewMode = 1;
					break;
				case 'years':
					this.viewMode = 2;
					break;
				default:
					this.viewMode = 0;
					break;
			}
		}
		this.startViewMode = this.viewMode;
		this.weekStart = options.weekStart||this.element.data('date-weekstart')||0;
		this.weekEnd = this.weekStart === 0 ? 6 : this.weekStart - 1;
		this.onRender = options.onRender;
		this.fillDow();
		this.fillMonths();
		this.update();
		this.showMode();
	};

	DateRangePicker.prototype = {
		constructor: DateRangePicker,

		show: function(e) {
			this.picker.show();

			if (e ) {
				e.stopPropagation();
				e.preventDefault();
			}
			var that = this;
			$(document).on('mousedown', function(ev){
				if ($(ev.target).closest('.daterangepicker').length === 0) {
					that.hide();
				}
			});
			this.element.trigger({
				type: 'show',
				date: this.date
			});
		},

		set: function() {
			var formated = DPGlobal.formatDate(this.date, this.format);
			this.element.data('date', formated);
		},

		setCompare: function(value) {
			compare = value;
			this.updateRange();
		},

		setStart: function(date) {
			if (date.constructor === String) {
				start = DPGlobal.parseDate(date, DPGlobal.parseFormat('Y-m-d')).getTime();
			} else if (date.constructor === Number){
				start = date;
			} else if (date.constructor === Date){
				start = date.getTime();
			}
		},

		setEnd: function(date) {
			if (date.constructor === String){
				end = DPGlobal.parseDate(date, DPGlobal.parseFormat('Y-m-d')).getTime();
			} else if (date.constructor === Number){
				end = date;
			} else if (date.constructor === Date){
				end = date.getTime();
			}
		},

		setStartCompare: function(date) {
			if (date === null){
				startCompare = date;
			}
			else if (date.constructor === String){
				startCompare = DPGlobal.parseDate(date, DPGlobal.parseFormat('Y-m-d')).getTime();
			}
			else if (date.constructor === Number){
				startCompare = date;
			}
			else if (date.constructor === Date){
				startCompare = date.getTime();
			}
		},

		setEndCompare: function(date) {
			if (date === null){
				endCompare = date;
			} else if (date.constructor === String){
				endCompare = DPGlobal.parseDate(date, DPGlobal.parseFormat('Y-m-d')).getTime();
			} else if (date.constructor === Number){
				endCompare = date;
			} else if (date.constructor === Date){
				endCompare = date.getTime();
			}
		},

		setValue: function(newDate) {
			if (typeof newDate === 'string') {
				this.date = DPGlobal.parseDate(newDate, this.format);
			} else {
				this.date = new Date(newDate);
			}
			this.set();
			this.viewDate = new Date(this.date.getFullYear(), this.date.getMonth(), 1, 0, 0, 0, 0);
			this.fill();
		},

		update: function(newDate){
			this.date = DPGlobal.parseDate(
				typeof newDate === 'string' ? newDate : (this.isInput ? this.element.prop('value') : this.element.data('date')),
				this.format
			);
			this.viewDate = new Date(this.date.getFullYear(), this.date.getMonth(), 1, 0, 0, 0, 0);
			this.fill();
		},

		fillDow: function(){
			var dowCnt = this.weekStart;
			var html = '<tr>';
			while (dowCnt < this.weekStart + 7) {
				html += '<th class="dow">'+DPGlobal.dates.daysMin[(dowCnt++)%7]+'</th>';
			}
			html += '</tr>';
			this.picker.find('.daterangepicker-days thead').append(html);
		},

		fillMonths: function(){
			var html = '';
			var i = 0;
			while (i < 12) {
				html += '<span class="month">'+DPGlobal.dates.monthsShort[i++]+'</span>';
			}
			this.picker.find('.daterangepicker-months td').append(html);
		},

		fill: function() {
			var d = new Date(this.viewDate),
				year = d.getFullYear(),
				month = d.getMonth(),
				currentDate = this.date.valueOf();
			this.picker.find('.daterangepicker-days th:eq(1)')
						.text(year+' / '+DPGlobal.dates.months[month]).append('&nbsp;<small><i class="icon-angle-down"></i><small>');
			var prevMonth = new Date(year, month-1, 28,0,0,0,0),
				day = DPGlobal.getDaysInMonth(prevMonth.getFullYear(), prevMonth.getMonth());
			prevMonth.setDate(day);
			prevMonth.setDate(day - (prevMonth.getDay() - this.weekStart + 7)%7);
			var nextMonth = new Date(prevMonth);
			nextMonth.setDate(nextMonth.getDate() + 42);
			nextMonth = nextMonth.valueOf();
			var html = [];
			var clsName, prevY, prevM;
			while(prevMonth.valueOf() < nextMonth) {
				if (prevMonth.getDay() === this.weekStart) {
					html.push('<tr>');
				}
				clsName = this.onRender(prevMonth);
				prevY = prevMonth.getFullYear();
				prevM = prevMonth.getMonth();
				if ((prevM < month &&  prevY === year) ||  prevY < year) {
					clsName += ' old';
				} else if ((prevM > month && prevY === year) || prevY > year) {
					clsName += ' new';
				}
				if (!clsName){
					html.push('<td class="day" data-val="'+prevMonth.getTime()+'">' + prevMonth.getDate() + '</td>');
				} else {
					html.push('<td class="'+clsName+'"></td>');
				}

				if (prevMonth.getDay() === this.weekEnd) {
					html.push('</tr>');
				}
				prevMonth.setDate(prevMonth.getDate()+1);
			}
			this.picker.find('.daterangepicker-days tbody').empty().append(html.join(''));
			var currentYear = this.date.getFullYear();

			var months = this.picker.find('.daterangepicker-months')
						.find('th:eq(1)')
							.text(year)
							.end()
						.find('span').removeClass('active');
			if (currentYear === year) {
				months.eq(this.date.getMonth()).addClass('active');
			}

			html = '';
			year = parseInt(year/10, 10) * 10;
			var yearCont = this.picker.find('.daterangepicker-years')
								.find('th:eq(1)')
									.text(year + '-' + (year + 9))
									.end()
								.find('td');
			year -= 1;
			for (var i = -1; i < 11; i++) {
				html += '<span class="year'+(i === -1 || i === 10 ? ' old' : '')+(currentYear === year ? ' active' : '')+'">'+year+'</span>';
				year += 1;
			}
			yearCont.html(html);
			this.updateRange();
			//click = 2;
		},

		click: function(e) {
			e.stopPropagation();
			e.preventDefault();
			var target = $(e.target).closest('span, td, th');
			if (target.length === 1) {
				switch(target[0].nodeName.toLowerCase()) {
					case 'th':
						switch(target[0].className) {
							case 'month-switch':
								this.showMode(1);
								break;
							case 'prev':
							case 'next':
								this.viewDate['set'+DPGlobal.modes[this.viewMode].navFnc].call(
									this.viewDate,
									this.viewDate['get'+DPGlobal.modes[this.viewMode].navFnc].call(this.viewDate) +
									DPGlobal.modes[this.viewMode].navStep * (target[0].className === 'prev' ? -1 : 1)
								);

								this.date = new Date(this.viewDate);
								this.element.trigger({
									type: 'changeDate',
									date: this.date,
									viewMode: DPGlobal.modes[this.viewMode].clsName
								});

								this.fill();
								this.set();
								break;
						}
						break;

					case 'span':
						if (target.is('.month')) {
							var month = target.parent().find('span').index(target);
							this.viewDate.setMonth(month);
						} else {
							var year = parseInt(target.text(), 10)||0;
							this.viewDate.setFullYear(year);
						}
						if (this.viewMode !== 0) {
							this.date = new Date(this.viewDate);
							this.element.trigger({
								type: 'changeDate',
								date: this.date,
								viewMode: DPGlobal.modes[this.viewMode].clsName
							});
						}
						this.showMode(-1);
						this.fill();
						this.set();
						break;

					case 'td':
						//reset
						if (target.is('.day') && !target.is('.disabled')){
							// reset process for a new range
							if (start && end) {
								if (!compare) {
									click = 2 ;
									$(".range").removeClass('range');
									$(".start-selected").removeClass("start-selected");
									$(".end-selected").removeClass("end-selected");
								}
							}
							if(click === 2) {
								if (compare) {
									startCompare = null;
									endCompare = null;
								}
								else {
									start = null;
									end = null;
								}
								click = null;
								switched = false;
								if (compare) {
									$("td.day").removeClass("start-selected-compare").removeClass("end-selected-compare");
									$(".date-input").removeClass("input-selected").removeClass("input-complete");
									$(".range-compare").removeClass("range-compare");
								} else {
									$("td.day").removeClass("start-selected").removeClass("end-selected");
									$(".date-input").removeClass("input-selected").removeClass("input-complete");
									$(".range").removeClass("range");
								}
							}
							//define start with first click or switched one
							if (!click || switched === true) {
								if (compare) {
									$(".start-selected-compare").removeClass("start-selected-compare");
									target.addClass("start-selected-compare");
									startCompare = target.data("val");
									$("#date-start-compare").val(DPGlobal.formatDate(new Date(startCompare), DPGlobal.parseFormat('Y-m-d')));
								} else {
									$(".start-selected").removeClass("start-selected");
									target.addClass("start-selected");
									start = target.data("val");
									$("#date-start").val(DPGlobal.formatDate(new Date(start), DPGlobal.parseFormat('Y-m-d')));
									$('#date-start').trigger('change');
								}
																	
								if(!switched) {click = 1;} else {click = 2;}
								if(!switched) {
									if (compare) {
										$("#date-end-compare").val(null).focus().addClass("input-selected");
										target.addClass("start-selected-compare").addClass("end-selected-compare");
									} else {
										$("#date-end").val(null).focus().addClass("input-selected");
										target.addClass("start-selected").addClass("end-selected");
									}
								}

								if (compare) {
									$("#date-start-compare").removeClass("input-selected").addClass("input-complete");
								}
								else {
									$("#date-start").removeClass("input-selected").addClass("input-complete");
								}
							}
							//define end
							else {
								if (compare) {
									$(".end-selected-compare").removeClass("end-selected-compare");
									target.addClass("end-selected-compare");
									endCompare = target.data("val");
									$("#date-end-compare").val(DPGlobal.formatDate(new Date(endCompare), DPGlobal.parseFormat('Y-m-d')));
									click = 2;
									$("#date-end-compare").removeClass("input-selected").addClass("input-complete");
								} else {
									$(".end-selected").removeClass("end-selected");
									target.addClass("end-selected");
									end = target.data("val");
									$("#date-end").val(DPGlobal.formatDate(new Date(end), DPGlobal.parseFormat('Y-m-d')));
									click = 2;
									$("#date-end").removeClass("input-selected").addClass("input-complete");
									$('#date-end').trigger('change');
								}
							}
						}
						break;
				}
			}
		},

		updateRange: function() {
			$("#datepicker .day").each(function(){
				var date_val = parseInt($(this).data('val'),10);

				if (end && start) {
					if(date_val > start && date_val < end) {
						$(this).addClass("range");
					}
					if(date_val === start) {
						$(this).addClass("start-selected");
					}
					if(date_val === end) {
						$(this).addClass("end-selected");
					}
				}

				if (endCompare && startCompare) {
					$(this).removeClass("range-compare").removeClass("start-selected-compare").removeClass("end-selected-compare");

					if(date_val > startCompare && date_val < endCompare) {
						$(this).addClass("range-compare");
					}
					if(date_val === startCompare) {
						$(this).addClass("start-selected-compare");
					}
					if(date_val === endCompare) {
						$(this).addClass("end-selected-compare");
					}
				} else {
					$(this).removeClass("range-compare").removeClass("start-selected-compare").removeClass("end-selected-compare");
				}
			});
		},

		mouseoverRange: function(){
			//range
			$("#datepicker .day").each(function(){
				var date_val = parseInt($(this).data('val'),10);
				if (compare) {
					if (!endCompare && date_val > startCompare && date_val < over) {
						$(this).not(".old").not(".new").addClass("range-compare");
					}
					else if (!startCompare && date_val > over && date_val < endCompare) {
						$(this).not(".old").not(".new").addClass("range-compare");
					}
					else if (startCompare && endCompare) {
						$(this).addClass("range-compare");
					}
				}
				else {
					if (!end && date_val > start && date_val < over) {
						$(this).not(".old").not(".new").addClass("range");
					}
					else if (!start && date_val > over && date_val < end) {
						$(this).not(".old").not(".new").addClass("range");
					}
				}
			});
		},

		mouseover: function(e){
			//data-val from day overed
			over = $(e.target).data("val");

			//action when one of two dates has been set
			if(click === 1 && over){
				if (compare) {
					$("#datepicker .range-compare").removeClass("range-compare");

					if (startCompare && over < startCompare) {
						endCompare = startCompare;
						$("#date-end-compare").val(DPGlobal.formatDate(new Date(startCompare), DPGlobal.parseFormat('Y-m-d'))).removeClass("input-selected");
						$("#date-start-compare").val(n