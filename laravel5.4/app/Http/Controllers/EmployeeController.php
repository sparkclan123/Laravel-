<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct(){
          $this->middleware('auth')
          //เข้าไม่ได้เฉพาะ create edit
          ->only(['create', 'edit']);
         //เข้าได้หมดยกเว้นindex

         //->except(['index']);
     }


    public function index()
    {
       
        $query = request()->query();
        if (isset($query['gender'])){
        $gender = strtoupper($query['gender']);

        $employees = DB::table('employees')
        ->where('gender', $gender)
        ->get();
      }
      else{
        $employees = DB::table('employees')
        ->paginate(5);
}

        return view ('employess.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('employess.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'first_name'=> 'required',
            'last_name' => 'required'
        ];

        $input = request()->except(['_token']);
     //validate คือการกำหนดข้อมูลที่จะทำการบันทึกให้มีเงื่อนไขในการกรอก
        $this->validate($request, $rules);

    try{
    DB::table('employees')
        ->insert($input);
        

    return redirect('/employee');

    } catch(Exception $e){
        abort(500);


    }}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = DB::table('employees')
        ->where ('id',$id)
        ->first();
        return view('employess.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $employee = DB::table('employees')
         ->where('id',$id)
         ->first();

    return view('employess.edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $rules = [
            'first_name'=> 'required',
            'last_name' => 'required'
        ];

        $input = request()->except(['_token','_method']);
     //validate คือการกำหนดข้อมูลที่จะทำการบันทึกให้มีเงื่อนไขในการกรอก
        $this->validate($request, $rules);

    
       try {
            DB::table('employees')
                ->where('id',$id)
                ->update($input );

                return redirect('/employee');


       }catch (Exception $e){
           abort(500);
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        try{
            DB::table('employees')
            ->where('id',$id)
            ->delete();

            session()->flash('message','Delete sucess');

            return redirect('/employee');
        
        }catch (Exception $e){
            abort(500);
        }
    }
}
