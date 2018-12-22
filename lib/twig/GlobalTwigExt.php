<?php
namespace app\twig;
use app\base\Util; 

class GlobalTwigExt extends \Twig_Extension implements \Twig_Extension_GlobalsInterface
{
    public function getGlobals()
    {
        return array(
            'site_phone' => Util::conf("site_phone"),
            'site_address' => Util::conf("site_address"),
            'site_copyright' => Util::conf("site_copyright"),
            'site_url' => Util::conf("site_url"),
            'site_name' => Util::conf("site_name"),
            'site_email' => Util::conf("site_email"),
            'site_whatsup' => Util::conf("site_whatsup"),
            'site_wechat' => Util::conf("site_wechat"),
        );
    }
}
