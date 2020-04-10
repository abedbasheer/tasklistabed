<?php

namespace App\Http\Controllers;
use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index(){
        //$tasks=DB::table('tasks')->get();
        $tasks= Task::orderBy('created_at')->get();
        return view('tasks.index',compact('tasks'));   
}
public function show($id){
//task = DB::table('tasks')->find($id);
$task = Task::where('id',$id)->get();
return view('tasks.show',compact('task'));    
}
public function store(Request $request){
//DB::table('tasks')->insert([
    //'name'=>$request->name,
  //  'created_at'=> now(),
  //  'updated_at'=> now(),
//]);
$request->validate([
    'name'=>'required|min:10|max:255',

]);
$task = new Task();
$task -> name = $request->name;
$task -> save();
return redirect()->back();
}
public function destroy($id){
    //DB::table('tasks')->where('id','=',$id)->delete(); 
    
    $task = Task::find($id);
    Task::delete($id);
    return redirect()->back();
}
public function edit(Request $request){
    DB::table('tasks')->update([
        'name'=>$request->name,
        'created_at'=> now(),
        'updated_at'=> now(),
    ]);
    return redirect()->back();
}
}