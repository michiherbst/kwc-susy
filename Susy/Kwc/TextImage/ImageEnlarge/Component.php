<?php
class Susy_Kwc_TextImage_ImageEnlarge_Component extends Kwc_TextImage_ImageEnlarge_Component
{
    public static function getSettings($param = null)
    {
        $ret = parent::getSettings($param);
        $ret['defineWidth'] = false;
        $ret['dimensions'] = array(
            'fullWidth'=>array(
                'text' => trlKwfStatic('full width'),
                'width' => self::CONTENT_WIDTH,
                'height' => 0,
                'cover' => true
            ),
        );
        return $ret;
    }
}
