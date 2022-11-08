<?php
use Illuminate\Support\Facades\DB;

function g(){
    $count=DB::table('posts')->count();
    return $count;
}
function a($id){
    $particularData=DB::table('posts')->where('id',$id)->first();
    return $particularData;
}



