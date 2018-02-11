<?php
/**
 * Created by PhpStorm.
 * User: Trendy_Devs_1
 * Date: 2/11/2018
 * Time: 5:10 PM
 */

class Connection
{
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