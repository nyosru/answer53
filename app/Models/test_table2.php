<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class test_table2 extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function getPoleTest1Attribute()
    {
        return $this->attributes['pole_test1'];
    }

    // мутатор для сохранения
    public function setPoleTest1Attribute($value)
    {
        $this->attributes['pole_test1'] = $value;
    }
}
