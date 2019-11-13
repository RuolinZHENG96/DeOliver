<?php
/**
 * PHPExcel
 *
 * Copyright (c) 2006 - 2014 PHPExcel
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   PHPExcel
 * @package	PHPExcel
 * @copyright  Copyright (c) 2006 - 2014 PHPExcel (http://www.codeplex.com/PHPExcel)
 * @license	http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt	LGPL
 * @version	##VERSION##, ##DATE##
 */


/**
 * PHPExcel_ReferenceHelper (Singleton)
 *
 * @category   PHPExcel
 * @package	PHPExcel
 * @copyright  Copyright (c) 2006 - 2014 PHPExcel (http://www.codeplex.com/PHPExcel)
 */
class PHPExcel_ReferenceHelper
{
	/**	Constants				*/
	/**	Regular Expressions		*/
	const REFHELPER_REGEXP_CELLREF		= '((\w*|\'[^!]*\')!)?(?<![:a-z\$])(\$?[a-z]{1,3}\$?\d+)(?=[^:!\d\'])';
	const REFHELPER_REGEXP_CELLRANGE	= '((\w*|\'[^!]*\')!)?(\$?[a-z]{1,3}\$?\d+):(\$?[a-z]{1,3}\$?\d+)';
	const REFHELPER_REGEXP_ROWRANGE		= '((\w*|\'[^!]*\')!)?(\$?\d+):(\$?\d+)';
	const REFHELPER_REGEXP_COLRANGE		= '((\w*|\'[^!]*\')!)?(\$?[a-z]{1,3}):(\$?[a-z]{1,3})';

	/**
	 * Instance of this class
	 *
	 * @var PHPExcel_ReferenceHelper
	 */
	private static $_instance;

	/**
	 * Get an instance of this class
	 *
	 * @return PHPExcel_ReferenceHelper
	 */
	public static function getInstance() {
		if (!isset(self::$_instance) || (self::$_instance === NULL)) {
			self::$_instance = new PHPExcel_ReferenceHelper();
		}

		return self::$_instance;
	}

	/**
	 * Create a new PHPExcel_ReferenceHelper
	 */
	protected function __construct() {
	}

	/**
	 * Compare two column addresses
	 * Intended for use as a Callback function for sorting column addresses by column
	 *
	 * @param   string   $a  First column to test (e.g. 'AA')
	 * @param   string   $b  Second column to test (e.g. 'Z')
	 * @return  integer
	 */
	public static function columnSort($a, $b) {
		return strcasecmp(strlen($a) . $a, strlen($b) . $b);
	}

	/**
	 * Compare two column addresses
	 * Intended for use as a Callback function for reverse sorting column addresses by column
	 *
	 * @param   string   $a  First column to test (e.g. 'AA')
	 * @param   string   $b  Second column to test (e.g. 'Z')
	 * @return  integer
	 */
	public static function columnReverseSort($a, $b) {
		return 1 - strcasecmp(strlen($a) . $a, strlen($b) . $b);
	}

	/**
	 * Compare two cell addresses
	 * Intended for use as a Callback function for sorting cell addresses by column and row
	 *
	 * @param   string   $a  First cell to test (e.g. 'AA1')
	 * @param   string   $b  Second cell to test (e.g. 'Z1')
	 * @return  integer
	 */
	public static function cellSort($a, $b) {
		sscanf($a,'%[A-Z]%d', $ac, $ar);
		sscanf($b,'%[A-Z]%d', $bc, $br);

		if ($ar == $br) {
			return strcasecmp(strlen($ac) . $ac, strlen($bc) . $bc);
		}
		return ($ar < $br) ? -1 : 1;
	}

	/**
	 * Compare two cell addresses
	 * Intended for use as a Callback function for sorting cell addresses by column and row
	 *
	 * @param   string   $a  First cell to test (e.g. 'AA1')
	 * @param   string   $b  Second cell to test (e.g. 'Z1')
	 * @return  integer
	 */
	public static function cellReverseSort($a, $b) {
		sscanf($a,'%[A-Z]%d', $ac, $ar);
		sscanf($b,'%[A-Z]%d', $bc, $br);

		if ($ar == $br) {
			return 1 - strcasecmp(strlen($ac) . $ac, strlen($bc) . $bc);
		}
		return ($ar < $br) ? 1 : -1;
	}

	/**
	 * Test whether a cell address falls within a defined range of cells
	 *
	 * @param   string     $cellAddress        Address of the cell we're testing
	 * @param   integer    $beforeRow          Number of the row we're inserting/deleting before
	 * @param   integer    $pNumRows           Number of rows to insert/delete (negative values indicate deletion)
	 * @param   integer    $beforeColumnIndex  Index number of the column we're inserting/deleting before
	 * @param   integer    $pNumCols           Number of columns to insert/delete (negative values indicate deletion)
	 * @return  boolean
	 */
	private static function cellAddressInDeleteRange($cellAddress, $beforeRow, $pNumRows, $beforeColumnIndex, $pNumCols) {
		list($cellColumn, $cellRow) = PHPExcel_Cell::coordinateFromString($cellAddress);
		$cellColumnIndex = PHPExcel_Cell::columnIndexFromString($cellColumn);
		//	Is cell within the range of rows/columns if we're deleting
		if ($pNumRows < 0 &&
			($cellRow >= ($beforeRow + $pNumRows)) &&
			($cellRow < $beforeRow)) {
			return TRUE;
		} elseif ($pNumCols < 0 &&
			($cellColumnIndex >= ($beforeColumnIndex + $pNumCols)) &&
			($cellColumnIndex < $beforeColumnIndex)) {
			return TRUE;
		}
		return FALSE;
	}

	/**
	 * Update page breaks when inserting/deleting rows/columns
	 *
	 * @param   PHPExcel_Worksheet  $pSheet             The worksheet that we're editing
	 * @param   string              $pBefore            Insert/Delete before this cell address (e.g. 'A1')
	 * @param   integer             $beforeColumnIndex  Index number of the column we're inserting/deleting before
	 * @param   integer             $pNumCols           Number of columns to insert/delete (negative values indicate deletion)
	 * @param   integer             $beforeRow          Number of the row we're inserting/deleting before
	 * @param   integer             $pNumRows           Number of rows to insert/delete (negative values indicate deletion)
	 */
	protected function _adjustPageBreaks(PHPExcel_Worksheet $pSheet, $pBefore, $beforeColumnIndex, $pNumCols, $beforeRow, $pNumRows)
	{
		$aBreaks = $pSheet->getBreaks();
		($pNumCols > 0 || $pNumRows > 0) ?
			uksort($aBreaks, array('PHPExcel_ReferenceHelper','cellReverseSort')) :
			uksort($aBreaks, array('PHPExcel_ReferenceHelper','cellSort'));

		foreach ($aBreaks as $key => $value) {
			if (self::cellAddressInDeleteRange($key, $beforeRow, $pNumRows, $beforeColumnIndex, $pNumCols)) {
				//	If we're deleting, then clear any defined breaks that are within the range
				//		of rows/columns that we're deleting
				$pSheet->setBreak($key, PHPExcel_Worksheet::BREAK_NONE);
			} else {
				//	Otherwise update any affected breaks by inserting a new break at the appropriate point
				//		and removing the old affected break
				$newReference = $this->updateCellReference($key, $pBefore, $pNumCols, $pNumRows);
				if ($key != $newReference) {
					$pSheet->setBreak($newReference, $value)
					    ->setBreak($key, PHPExcel_Worksheet::BREAK_NONE);
				}
			}
		}
	}

	/**
	 * Update cell comments when inserting/deleting rows/columns
	 *
	 * @param   PHPExcel_Worksheet  $pSheet             The worksheet that we're editing
	 * @param   string              $pBefore            Insert/Delete before this cell address (e.g. 'A1')
	 * @param   integer             $beforeColumnIndex  Index number of the column we're inserting/deleting before
	 * @param   integer             $pNumCols           Number of columns to insert/delete (negative values indicate deletion)
	 * @param   integer             $beforeRow          Number of the row we're inserting/deleting before
	 * @param   integer             $pNumRows           Number of rows to insert/delete (negative values indicate deletion)
	 */
	protected function _adjustComments($pSheet, $pBefore, $beforeColumnIndex, $pNumCols, $beforeRow, $pNumRows)
	{
		$aComments = $pSheet->getComments();
		$aNewComments = array(); // the new array of all comments

		foreach ($aComments as $key => &$value) {
			// Any comments inside a deleted range will be ignored
			if (!self::cellAddressInDeleteRange($key, $beforeRow, $pNumRows, $beforeColumnIndex, $pNumCols)) {
				//	Otherwise build a new array of comments indexed by the adjusted cell reference
				$newReference = $this->updateCellReference($key, $pBefore, $pNumCols, $pNumRows);
				$aNewComments[$newReference] = $value;
			}
		}
		//	Replace the comments array with the new set of comments
		$pSheet->setComments($aNewComments);
	}

	/**
	 * Update hyperlinks when inserting/deleting rows/columns
	 *
	 * @param   PHPExcel_Worksheet  $pSheet             The worksheet that we're editing
	 * @param   string              $pBefore            Insert/Delete before this cell address (e.g. 'A1')
	 * @param   integer             $beforeColumnIndex  Index number of the column we're inserting/deleting before
	 * @param   integer             $pNumCols           Number of columns to insert/delete (negative values indicate deletion)
	 * @param   integer             $beforeRow          Number of the row we're inserting/deleting before
	 * @param   integer             $pNumRows           Number of rows to insert/delete (negative values indicate deletion)
	 */
	protected function _adjustHyperlinks($pSheet, $pBefore, $beforeColumnIndex, $pNumCols, $beforeRow, $pNumRows)
	{
		$aHyperlinkCollection = $pSheet->getHyperlinkCollection();
		($pNumCols > 0 || $pNumRows > 0) ?
			uksort($aHyperlinkCollection, array('PHPExcel_ReferenceHelper','cellReverseSort')) :
			uksort($aHyperlinkCollection, array('PHPExcel_ReferenceHelper','cellSort'));

		foreach ($aHyperlinkCollection as $key => $value) {
			$newReference = $this->updateCellReference($key, $pBefore, $pNumCols, $pNumRows);
			if ($key != $newReference) {
				$pSheet->setHyperlink( $newReference, $value );
				$pSheet->setHyperlink( $key, null );
			}
		}
	}

	/**
	 * Update data validations when inserting/deleting rows/columns
	 *
	 * @param   PHPExcel_Worksheet  $pSheet             The worksheet that we're editing
	 * @param   string              $pBefore            Insert/Delete before this cell address (e.g. 'A1')
	 * @param   integer             $beforeColumnIndex  Index number of the column we're inserting/deleting before
	 * @param   integer             $pNumCols           Number of columns to insert/delete (negative values indicate deletion)
	 * @param   integer             $beforeRow          Number of the row we're inserting/deleting before
	 * @param   integer             $pNumRows           Number of rows to insert/delete (negative values indicate deletion)
	 */
	protected function _adjustDataValidations($pSheet, $pBefore, $beforeColumnIndex, $pNumCols, $beforeRow, $pNumRows)
	{
		$aDataValidationCollection = $pSheet->getDataValidationCollection();
		($pNumCols > 0 || $pNumRows > 0) ?
			uksort($aDataValidationCollection, array('PHPExcel_ReferenceHelper','cellReverseSort')) :
			uksort($aDataValidationCollection, array('PHPExcel_ReferenceHelper','cellSort'));
		foreach ($aDataValidationCollection as $key => $value) {
			$newReference = $this->updateCellReference($key, $pBefore, $pNumCols, $pNumRows);
			if ($key != $newReference) {
				$pSheet->setDataValidation( $newReference, $value );
				$pSheet->setDataValidation( $key, null );
			}
		}
	}

	/**
	 * Update merged cells when inserting/deleting rows/columns
	 *
	 * @param   PHPExcel_Worksheet  $pSheet             The worksheet that we're editing
	 * @param   string              $pBefore            Insert/Delete before this cell address (e.g. 'A1')
	 * @param   integer             $beforeColumnIndex  Index number of the column we're inserting/deleting before
	 * @param   integer             $pNumCols           Number of columns to insert/delete (negative values indicate deletion)
	 * @param   integer             $beforeRow          Number of the row we're inserting/deleting before
	 * @param   integer             $pNumRows           Number of rows to insert/delete (negative values indicate deletion)
	 */
	protected function _adjustMergeCells($pSheet, $pBefore, $beforeColumnIndex, $pNumCols, $beforeRow, $pNumRows)
	{
		$aMergeCells = $pSheet->getMergeCells();
		$aNewMergeCells = array(); // the new array of all merge cells
		foreach ($aMergeCells as $key => &$value) {
			$newReference = $this->updateCellReference($key, $pBefore, $pNumCols, $pNumRows);
			$aNewMergeCells[$newReference] = $newReference;
		}
		$pSheet->setMergeCells($aNewMergeCells); // replace the merge cells array
	}

	/**
	 * Update protected cells when inserting/deleting rows/columns
	 *
	 * @param   PHPExcel_Worksheet  $pSheet             The worksheet that we're editing
	 * @param   string              $pBefore            Insert/Delete before this cell address (e.g. 'A1')
	 * @param   integer             $beforeColumnIndex  Index number of the column we're inserting/deleting before
	 * @param   integer             $pNumCols           Number of columns to insert/delete (negative values indicate deletion)
	 * @param   integer             $beforeRow          Number of the row we're inserting/deleting before
	 * @param   integer             $pNumRows           Number of rows to insert/delete (negative values indicate deletion)
	 */
	protected function _adjustProtectedCells($pSheet, $pBefore, $beforeColumnIndex, $pNumCols, $beforeRow, $pNumRows)
	{
		$aProtectedCells = $pSheet->getProtectedCells();
		($pNumCols > 0 || $pNumRows > 0) ?
			uksort($aProtectedCells, array('PHPExcel_ReferenceHelper','cellReverseSort')) :
			uksort($aProtectedCells, array('PHPExcel_ReferenceHelper','cellSort'));
		foreach ($aProtectedCells as $key => $value) {
			$newReference = $this->updateCellReference($key, $pBefore, $pNumCols, $pNumRows);
			if ($key != $newReference) {
				$pSheet->protectCells( $newReference, $value, true );
				$pSheet->unprotectCells( $key );
			}
		}
	}

	/**
	 * Update column dimensions when inserting/deleting rows/columns
	 *
	 * @param   PHPExcel_Worksheet  $pSheet             The worksheet that we're editing
	 * @param   string              $pBefore            Insert/Delete before this cell address (e.g. 'A1')
	 * @param   integer             $beforeColumnIndex  Index number of the column we're inserting/deleting before
	 * @param   integer             $pNumCols           Number of columns to insert/delete (negative values indicate deletion)
	 * @param   integer             $beforeRow          Number of the row we're inserting/deleting before
	 * @param   integer             $pNumRows           Number of rows to insert/delete (negative values indicate deletion)
	 */
	protected function _adjustColumnDimensions($pSheet, $pBefore, $beforeColumnIndex, $pNumCols, $beforeRow, $pNumRows)
	{
		$aColumnDimensions = array_reverse($pSheet->getColumnDimensions(), true);
		if (!empty($aColumnDimensions)) {
			foreach ($aColumnDimensions as $objColumnDimension) {
				$newReference = $this->updateCellReference($objColumnDimension->getColumnIndex() . '1', $pBefore, $pNumCols, $pNumRows);
				list($newReference) = PHPExcel_Cell::coordinateFromString($newReference);
				if ($objColumnDimension->getColumnIndex() != $newReference) {
					$objColumnDimension->setColumnIndex($newReference);
				}
			}
			$pSheet->refreshColumnDimensions();
		}
	}

	/**
	 * Update row dimensions when inserting/deleting rows/columns
	 *
	 * @param   PHPExcel_Worksheet  $pSheet             The worksheet that we're editing
	 * @param   string              $pBefore            Insert/Delete before this cell address (e.g. 'A1')
	 * @param   integer             $beforeColumnIndex  Index number of the column we're inserting/deleting before
	 * @param   integer             $pNumCols           Number of columns to insert/delete (negative values indicate deletion)
	 * @param   integer             $beforeRow          Number of the row we're inserting/deleting before
	 * @param   integer             $pNumRows           Number of rows to insert/delete (negative values indicate deletion)
	 */
	protected function _adjustRowDimensions($pSheet, $pBefore, $beforeCol