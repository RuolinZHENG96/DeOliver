<?php
/**
* 2007-2017 PrestaShop
*
* Jms Page Builder
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2017 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

if (!defined('_PS_VERSION_')) {
    exit;
}
include_once(_PS_MODULE_DIR_.'jmspagebuilder/addons/addonbase.php');

class JmsAddonBanner extends JmsAddonBase
{
    public function __construct()
    {
        $this->addonname = 'banner';
        $this->modulename = 'jmspagebuilder';
        $this->addontitle = 'Image Banner';
        $this->addondesc = 'Easy to add Banner Image';
        $this->overwrite_tpl = '';
        $this->context = Context::getContext();

    }
    public function getInputs()
    {
        $inputs = array(
            array(
                'type' => 'text',
                'name' => 'box_class',
                'label' => $this->l('Banner Class'),
                'lang' => '0',
                'desc' => 'Use this class to style for banner box',
                'default' => ''
            ),
            array(
                'type' => 'image',
                'name' => 'banner',
                'label' => $this->l('Banner Image'),
                'lang' => '0',
                'desc' => 'Banner Image',
                'default' => ''
            ),
            array(
                'type' => 'text',
                'name' => 'alt_text',
                'label' => $this->l('Alt Text'),
                'lang' => '0',
                'desc' => 'Insert Alt text, which is an important for SEO purposes and part of making a site accessible.',
                'default' => 'Joommasters.com'
            ),
            array(
                'type' => 'text',
                'name' => 'banner_link',
                'label' => $this->l('Banner Link'),
                'lang' => '0',
                'desc' => 'The absolute URL of the banner that will be linked.',
                'default' => 'http://www.joommasters.com'
            ),
            array(
                'type' => 'select',
                'name' => 'target',
                'label' => $this->l('Target for Link'),
                'lang' => '0',
                'desc' => 'Open link in same or in new window',
                'options' => array('same window', 'new window'),
                'default' => 'new window'
            ),
            array(
                'type' => 'editor',
                'name' => 'html_content',
                'rows' => '20',
                'cols' => '60',
                'lang' => '1',
                'label' => $this->l('Html Content'),
                'desc' => 'Enter texts for the content.'
            ),
            array(
                'type' => 'text',
                'name' => 'overwrite_tpl',
                'label' => $this->l('Overwrite Tpl File'),
                'lang' => '0',
                'desc' => 'Use When you want overwrite template file'
            )
        );
        return $inputs;
    }
    public function returnValue($addon)
    {
        $id_lang = $this->context->language->id;
        $html_content = JmsPageBuilderHelper::decodeHTML($addon->fields[5]->value->$id_lang);
        $this->context->smarty->assign(
            array(
                'link' => $this->context->link,
                'banner'    => $addon->fields[1]->value,
                'box_class' => $addon->fields[0]->value,
                'alt_text'  => $addon->fields[2]->value,
                'banner_link' => $addon->fields[3]->value,
                'target' => $addon->fields[4]->value,
                'html_content' => $html_content,
                'root_url' => $this->root_url
            )
        );
        $this->overwrite_tpl = $addon->fields[count($addon->fields)-1]->value;
        $template_path = $this->loadTplPath();
        return $this->context->smarty->fetch($template_path);
    }
}
