<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Pagination\CursorPaginator;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Validation\ValidationData;
use App\Models\Post;
use App\Models\News;
use DataTables;


class PostController extends Controller
{
public function index(Request $request){
    $Data['userData']=DB::table('posts')->get();
if ($request->ajax()) {
    $data=DB::table('posts')->get();
       return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){

                   $btn = '<a href="#editModal'.$row->id.'" class="edit btn btn-primary btn-sm" data-toggle="modal" title="edit data" id="modal-edit"><i class="fas fa-pen"></i></a>';
                  $btn= $btn.'<a class="add btn btn-secondary btn-sm text-white" data-toggle="modal" data-target="#myModal"><i class="fas fa-plus"></i></a>';
                  $btn= $btn.'<a class=" btn btn-danger btn-sm text-white" onClick="delete_data(' . $row->id . ')" > <i class="fas fa-trash-alt"></i></a>';



                    return $btn;
            })



            ->rawColumns(['action'])
            ->make(true);
}
return view('/data',$Data);
}

public function store(Request $request)
{
    $pathToFile = "public/images/";
    $validator=Validator::make($request->all(),[
        'title'=>'required',
        'description'=>'required'
    ]);
        $post=new Post();
        $post->title=$request->title;
        $post->description=$request->description;
        $post->save();

        return redirect()->back()->with('Message','Data Add Successfully');
    // }
}

public function editDataStore(Request $request)
{

    $validator=Validator::make($request->all(),[
        'title'=>'required',
        'description'=>'required'
    ]);
        $post=Post::find($request->userid);
        $post->title=$request->title;
        $post->description=$request->description;
        $post->save();

        return redirect()->back()->with('Message','Data Edit Successfully');
    // }
}


public function form1(){
    return view('/form1');
}
public function form2(){
    return view('/form2');
}
public function form3(){
    return view('/form3');
}
public function popupform1(){
    return view('/popupform1');
}
public function multistepform1(){
    return view('/multistepform1');
}
public function multistepform2(){
    return view('/multistepform2');
}
public function pagination1(){
    return view('/pagination1');
}
public function card1(){
    return view('/card1');
}
public function card2(){
    return view('/card2');
}
public function card3(){
    return view('/card3');
}
public function card4rotate(){
    return view('/card4rotate');
}
public function card5(){
    return view('/card5');
}
public function card6(){
    return view('/card6');
}
public function loginregistration(){
    return view('/loginregistration');
}
public function pricecard1(){
    return view('/pricecard1');
}
public function contactusform1(){
    return view('/contactusform1');
}
public function contactusform2(){
    return view('/contactusform2');
}
public function imageprogressbar(){
    return view('/imageprogressbar');
}
public function searchbox1(){
    return view('/searchbox1');
}
public function allbuttons(){
    return view('/allbuttons');
}
public function design(){
    return view('/design');
}

public function modaldata(){
    $modaldata['data']=Post::getModalDataById();
    return view('modaldata', $modaldata);
}
public function getData(Post $key=null){
    //return $key;
 $data=$key?$key:$key->all();
    // $data=$key?$key:$key->all();
     return response()->json(['msg'=>'success', 'data'=>$data]);
}
public function getDataAll(){

 $data=Post::all('id','title','description');

     return response()->json(['msg'=>'success', 'data'=>$data]);
}
public function editData(Request $request,  $id){

    $data=(['title'=>$request->title, 'description'=>$request->description]);
       DB::table('posts')->where('id',$id)->update($data);
        return response()->json(['msg'=>'success', 'data'=>'Data Updated']);
   }

   public function deleteData(Request $request, $id){

       DB::table('posts')->where('id', $id)->delete();
        return response()->json(['msg'=>'success', 'data'=>'Data Deleted']);
   }
   public function insertData(Request $request){

    DB::table('posts')->insert(['title'=>$request->title, 'description'=>$request->description]);
     return response()->json(['msg'=>'success', 'data'=>'Data Save Successfully']);
}
   public function login(Request $request){

        return view('login');
   }
   public function toHome(Request $request){

    return view('card1');
}

public function getNews(){
    $post=Post::all();
    $news=News::find(11);
    //   $data=News::first();
      dd($news->post_id->post);

}
public function getRoles(){
     $data=DB::table('roles')->get();
     return response()->json(['status'=>true, 'data'=>$data]);


}
public function employeeByRoles(Request $request){
    $data=DB::table('employees')->where('role_id', $request->id)->get();
    return response()->json(['status'=>true, 'data'=>$data]);
}
public function userImage(Request $request){

    if($request->hasFile('image')){
        $image=$request->image;
        $filename = time().'.'.$request->image->extension();
        $image->move('Profile', $filename);
        }
    DB::table('employees')->insert([
        'role_id'=> $request->role_id,
        'name'=>$request->name,
        'image'=>$filename
    ]);
    return response()->json(['status'=>true, 'message'=>'data store successfully']);
}
public function editUserImage(Request $request){
    if($request->hasFile('image')){
        $image=$request->image;
        $filename = time().'.'.$request->image->extension();
        $path=$image->move('Profile', $filename);
        }
    DB::table('employees')->where('id', $request->id)->update([
        'role_id'=> $request->role_id,
        'name'=>$request->name,
        'image'=>$path
    ]);
    return response()->json(['status'=>true, 'message'=>'data update successfully']);
}

public function allEmployee(){
    $data=DB::table('employees')->join('roles', 'roles.id', 'employees.role_id')
          ->select('employees.name as name', 'employees.image as image', 'employees.id as id', 'roles.role as role')->get();
          return response(['data'=>$data]);
}

public function editEmployee(Request $request){
    $data=DB::table('employees')->join('roles', 'roles.id', 'employees.role_id')->where('employees.id', $request->id)
          ->select('employees.name as name', 'employees.image as image', 'employees.id as id', 'roles.role as role')->get();
          return response(['data'=>$data]);
}


public function GetDataa(Post $post){
    return $post->all();
}
public function EditDataa(Post $post){
    return $post;
}
public function UpdateDataa(Post $post){

    return $update= $post->update(['title'=>'Anuj','description'=>'GoddBoy']);
}
public function AddDataa(PostRequest $request,Post $post){

  $validated = (array)$request->safe()->merge(['description'=>$request->description]);
//return gettype($request->validated());

    Post::insert($validated);

    return redirect()->back()->withErrors(['message'=>'Data inserted Suceessfully']);
}
}
