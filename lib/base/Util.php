<?php
namespace app\base;

class Util {
    public static function conf($path, $default = null) {
        global $container;
        return self::path($container['config'], $path, $default);
    }

    public static function path($source, $path, $default = null, $delimiter = '/'){
        $ps = explode($delimiter, $path);
        foreach($ps as $p){
            if(is_array($source) && isset($source[$p])){
                $source = $source[$p];
            }else if(isset($source->$p)){
                $source = $source->$p;
            }else{
                //@TODO
                //$logger = LogFactory::get('Util::path');
                //if(is_null($default)){
                //    $logger->warn("[$path] not set, no default value either.");
                //}else{
                //    $logger->debug("[$path] not set, use default value.");
                //}
                return $default;
            }
        }
        return $source;
    }
}
