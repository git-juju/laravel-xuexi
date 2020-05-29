<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class SStudent extends Model
{
    protected $table = 'sstudent';
    public $timestamps = true;

    protected function getDateFormat()
    {
        return time();
    }
    protected function asDateTime($val)
    {
        return $val;
    }
}
