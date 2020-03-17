<?php
namespace App\Core;

class Config
{
    
    public static function get($path = null)
    {
        if ($path)
        {
            $config = self::getConfigArr();
            
            $path = explode('.', $path);

            foreach ($path as $bit)
            {
                if (isset($config[$bit]))
                {
                    $config = $config[$bit];
                }
            }

            return $config;
        }

        return false;
    }

    private static function getConfigArr(){
        if(file_exists(BASE_PATH . '/config/config.php'))
        return include BASE_PATH . '/config/config.php';
        echo "Plaese make file config/config.php and return array variable";
        die;
    }
}



