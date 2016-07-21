<?php
/**
 * Created by PhpStorm.
 * User: aaz
 * Date: 21.07.16
 * Time: 15:50
 */
namespace app\models;

class Calc
{
    public static function sum($x, $y)
    {
        return $x + $y;
    }
    
    public static function minus($x, $y)
    {
        return $x - $y;
    }

    public static function multiply($x, $y)
    {
        return $x * $y;
    }
    public static function division($x, $y)
    {
        return $x / $y;
    }
}