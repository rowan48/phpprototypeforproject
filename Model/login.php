<?php


class login
{
    public static $flag =-1;

    static function check_Login(){
        if (isset($_SESSION["id"])&&is_numeric($_SESSION["id"])){
            echo "done session";
           return true;
         }elseif(isset($_COOKIE["remember_me"])&&is_numeric(dbconnection::select_cookie($_COOKIE["remember_me"]))){
            dbconnection::update_cookie($_COOKIE["remember_me"]);
            $_SESSION["id"] =5;
            echo "done cookeki";
            return true ;

        }else{
            return false;
            echo"false";

        }
        //return $flag;

    }

}