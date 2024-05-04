<?php

class Utility {

    public static function getBase(){
        //  return 'http://localhost/portfolio/';
        //  return "https://panamed.com.ph/dev/panamed/";
        
        https://jerome2028.github.io/portfolio/;
    }
   public static function generateRandomString($length = 5) {
        $characters = '0123456789abcdefghkmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}