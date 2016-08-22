<?php
class Susy_Kwc_TextImage_Component extends Kwc_TextImage_Component
{
    public static function getSettings($param = null)
    {
        $ret = parent::getSettings($param);
        $ret['generators']['child']['component']['image'] = 'Susy_Kwc_TextImage_ImageEnlarge_Component';
        $ret['layoutClass'] = 'Susy_Kwc_TextImage_Layout';
        $ret['ownModel'] = 'Susy_Kwc_TextImage_Model';
        return $ret;
    }

    public function getTemplateVars(Kwf_Component_Renderer_Abstract $renderer)
    {
        $ret = parent::getTemplateVars($renderer);
        foreach ($this->getMasterLayoutContexts() as $c) {
            $ret['rootElementClass'] .= " kwfUp-$c[masterLayout]-$c[breakpoint]-spans$c[spans]";
        }
        $ret['rootElementClass'] .= " ".$this->_getBemClass('--imagewidth-'.$this->getRow()->image_width);
        return $ret;
    }
}
