<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ListController extends Controller
{


	public function index(){
		$items = Item::all();
		return view('welcome',compact("items"));
	}

    public function create(request $request){

    	$item = new Item;
    	$item->item = $request->text;
    	$item->save();
    	return ("DONE");
    }

    public function delete(request $request){

    	Item::where('id',$request->id)->delete();
    }
    
}
