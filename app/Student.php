<?php
/**
 * Created by PhpStorm.
 * User: 谢欣冉
 * Date: 2018/5/7
 * Time: 23:26
 */
namespace App;
use Illuminate\Database\Eloquent\Model;

class Student extends Model{

    protected $table = 'student';

    protected $primaryKey ='id';
}