<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $student=DB::select('select * from users');
        return view('admin.adashboard',['da'=>$student]);
    }
    public function delete(string $id)
    {
        $student=DB::table('users')
               ->where('id',$id)
               ->delete();
      if($student){
         return redirect()->route('admin.adashboard');
      }
    }
   
}
