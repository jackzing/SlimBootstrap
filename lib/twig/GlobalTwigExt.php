<?php
namespace app\twig;

class GlobalTwigExt extends \Twig_Extension implements \Twig_Extension_GlobalsInterface
{
    public function getGlobals()
    {
        return array(
            'text' => "js",
        );
    }
}
