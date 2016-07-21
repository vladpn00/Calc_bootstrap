<?php
/**
 * Created by PhpStorm.
 * User: aaz
 * Date: 21.07.16
 * Time: 15:50
 */
namespace app\models;

use yii\base\Model;

class TestForm extends Model
{
    public $x;
    public $y;
    public $mode = 0;

    public function rules()
    {
        return [
            [['x', 'y'], 'required', 'message' => 'Не все поля заполнены'],
            [['x', 'y'], 'number', 'min' => 0, 'max' => 100, 'message' => 'Не верный формат или число больше 100'],
            ['mode', 'integer', 'max' => 3],
        ];
    }
    
    public function calc()
    {
        if ($this->mode == 0)
        {
            return Calc::sum($this->x, $this->y);
        }
        elseif ($this->mode == 1)
        {
            return Calc::minus($this->x, $this->y);
        }
        elseif ($this->mode == 2)
        {
            return Calc::multiply($this->x, $this->y);
        }
        elseif ($this->mode == 3)
        {
            return Calc::division($this->x, $this->y);
        }
    }
    
}