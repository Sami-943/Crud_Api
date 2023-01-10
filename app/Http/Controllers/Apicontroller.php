<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Apicontroller extends Controller
{
    public function create(Request $request){
         $student = new Student;

         $student->fname=$request->input('fname');
         $student->lname=$request->input('lname');
         $student->email=$request->input('email');
         $student->password=Hash::make($request->input('password'));

         $student->save();
         return response()->json($student);
    }
    public function showdata()
    {
        $readdata= Student::all();
        return response()->json($readdata);
    }
    public function showdataid($id)
    {
        $readdata= Student::find($id);
        return response()->json($readdata);
    }
    public function updatedataid(Request $request, $id)
    {
        $stdupdate = Student::find($id);
        $stdupdate->fname=$request->input('fname');
        $stdupdate->lname=$request->input('lname');
        $stdupdate->email=$request->input('email');
        $stdupdate->password=Hash::make($request->input('password'));

        $stdupdate->save();
        return response()->json($stdupdate);
    }
    public function deletedataid(Request $request,$id)
    {
        $deletedata= Student::find($id);
        $deletedata->delete();
        return response()->json($deletedata);
    }
    
}
 