<?php

/**
 * Description of Conn
 *
 * @copyright (c) year, Eunir Kaiser Celke
 */
class Conn {

    //put your code here
    public static $Host = "localhost";
    public static $User = "root";
    public static $Pass = "";
    public static $Dbname = "celke";
    private static $connect = null;

    private static function Conectar() {

        try {
            if (self::$connect == null):
                self::$connect = new PDO('mysql:host=' . self::$Host . ';dbname' . self::$Dbname, self::$User, self::$Pass);
            endif;


            return self::$connect;
        } catch (Exception $ex) {
            echo 'Mensagem:' . $ex->getMessage();
            die;
        }
    }

    public function getConn() {
        return self::Conectar();
    }

}
