<?php
class Security
{
    public static function generate_token()
    {
        $token = '';
        //cero arguments, token without nickname
        if (func_num_args() == 0) {
            $token = sha1(date('Ymd'));
        }
        //one argument, token with nickname
        if (func_num_args() == 1) {
            $args = func_get_args();
            $token = sha1($args[0] . date('Ymd'));
        }
        return $token;
    }
}
?>