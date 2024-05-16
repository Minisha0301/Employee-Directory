<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function getEmployee(){
        try{
           

            $employees =   DB::table('users')->join('departments','users.Fk_department','departments.id')
            ->join('designations','users.Fk_designation','designations.id')
            ->select('users.*','departments.Name as department','designations.Name as designation')
            ->get();
               
            return view('dashboard',compact('employees'));
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }
}
