<?php
/**
 * Created by PhpStorm.
 * User: 谢欣冉
 * Date: 2018/5/7
 * Time: 22:17
 */

namespace App\Http\Controllers;
use App\Student;
use Illuminate\Support\Facades\DB;
class StudentController extends Controller{

    public function test1()
    {
//        $student=DB::select('select * from student');
//        var_dump($student);
//       $num=DB::update('update student set age=20 where name=?',
//            [20,'liu']);
//        var_dump($num);
 //           $num= DB::insert('insert into student(name,age)values (?,?)',['imooc',20]);
           $num=DB::delete('delete from student where id = ?',[1002]);
            var_dump($num);
    }

    public function query1()
    {
//        $bool=DB::table('student')->insert(['name' => 'xie','age' => 18]);
//        var_dump($bool);
//        $id=DB::table('student')->insertGetid(['name' => 'xiexin','age' => 20]);
//        var_dump($id);
        $bool=DB::table('student')
            ->where('id',1005)
            ->update(['name' =>'ran']);
        var_dump($bool);
    }

    public function orm1(){

//        $student=Student::all();

//         $student=Student::where('id', '>','1001')
//            ->orderBy('age','desc')
//             ->first();
//        echo '<pre>';
//        Student::chunk(2,function($student){
//
//            var_dump($student);
//        });

//        $num=Student::count();
//        var_dump($num);

        $max=Student::where('id','>','1001')
            ->max('age');

        var_dump($max);


    }

}