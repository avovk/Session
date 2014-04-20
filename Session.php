<?php
/**
 * Class Session
 * Manage and keep track of your sessions.
 *
 * Benefits of the session class
 * - Keeps track of which session variables the code can assign.
 * - Returns an empty string if the session variable is not found.
 * - Looks much more readable
 * - Tries to start the session if the code has not done so already
 *
 * @version 1.00
 * @copyright Alex Vovk avcoding.com
 */


//Start the session if it has not yet been started
//Should only be used as a last resort.
if(!isset($_SESSION)){ session_start(); }
class Session{
    //Keeps track of all the possible session variables
    private static $_config = [
        'user' => 'user',
        'admin' => 'admin'
    ];

    public static function inConfig($sessionName){
        if(in_array($sessionName,self::$_config)){
            return true;
        }else{
            throw new Exception("Class Session name doesn't exist");
        }
    }

    public static function set($sessionName, $value){
        if(self::inConfig($sessionName)){
            $_SESSION[$sessionName] = $value;
        }
    }


    public static function get($sessionName){
        if(self::inConfig($sessionName)){
            return (isset($_SESSION[$sessionName]))? $_SESSION[$sessionName] : '';
        }
    }

    public static function exists($sessionName){
        if(self::inConfig($sessionName)){
            return isset($_SESSION[$sessionName]);
        }
    }

    public static function delete($sessionName){
        if(self::inConfig($sessionName)){
            unset($_SESSION[$sessionName]);
        }
    }

    public static function deleteAll(){
        session_destroy();
    }

}