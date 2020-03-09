<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Todolist_C extends Controller
{
    function main(){
    	$catatan = DB::table('todolist_tbl')->get();

    	return view('main', ['catatan' => $catatan]);	
    }

    function add(Request $r) {
    	DB::table('todolist_tbl')->insert(
    		[
    			'todolist_tanggal' => $r->tanggal,
    			'todolist_catatan' => $r->catatan,
    			'todolist_status' => $r->status
    		]
    	);

    	return redirect('/');
    }

    function edit($id){

    	$list = DB::table('todolist_tbl')->where('todolist_ID', $id)->get();

    	return view('edit', ['list' => $list]);
    }

    function change(Request $r) {

    	DB::table('todolist_tbl')->where('todolist_ID', $r->id_todolist)->update([
    		'todolist_catatan' => $r->catatan,
    		'todolist_tanggal' => $r->tanggal,
    		'todolist_status' => $r->status
    	]);

    	return redirect('/');

    }
}
