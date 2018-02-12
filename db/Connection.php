<?php

/**
 * Class Connection to Database
 */
class Connection
{
    /**
     * create
     *
     * @return void PDO nstance
     */
    public static function create()
    {

        try
        {
            return $pdo = new PDO('mysql:host=localhost;dbname=td_ems', 'root', '');
        }

        catch(PDOException $e)
        {
            die('<div id="db-warning">' . 'Connection Failed. Reason: ' . '<mark>' . $e->getMessage() . '</mark> </div>');
        }
    }
}


