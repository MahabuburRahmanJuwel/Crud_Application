<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    private static $student;
    private static $imageName;
    private static $imageUrl;
    private static $directory;

    public static function getImageUrl($image)
    {
        self::$imageName = $image->getClientOriginalName();
        self::$directory = 'student-images/';
        $image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory . self::$imageName;
        return self::$imageUrl;

    }

    public static function newStudent($request)
    {
        self::$student = new Student();
        self::$student->name = $request->name;
        self::$student->email = $request->email;
        self::$student->mobile = $request->mobile;
        self::$student->address = $request->address;
        self::$student->district_name = $request->district_name;
        self::$student->dat_of_birth = $request->dat_of_birth;
        self::$student->gender = $request->gender;
        self::$student->image = self::getImageUrl($request->file('image'));
        self::$student->subject = implode(',', $request->subject_name);
        self::$student->save();

    }

    public static function updateStudent($request, $id)
    {

        self::$student = Student::find($id);
        if ($request->file('image')) {
            if (file_exists(self::$student->image)) {
                unlink(self::$student->image);
            }
            self::$imageUrl = self::getImageUrl($request->file('image'));
        } else {

            self::$imageUrl = self:: $student->image;

        }
        self::$student->name = $request->name;
        self::$student->email = $request->email;
        self::$student->mobile = $request->mobile;
        self::$student->address = $request->address;
        self::$student->district_name = $request->district_name;
        self::$student->dat_of_birth = $request->dat_of_birth;
        self::$student->gender = $request->gender;
        self::$student->image = self::$imageUrl;
        self::$student->subject = implode(',', $request->subject_name);
        self::$student->save();
    }

    public static function deleteStudent($id){
        self::$student = Student::find($id);
        if(file_exists(self::$student->image)){
            unlink(self::$student->image);
        }
        self::$student->delete();
    }


}
