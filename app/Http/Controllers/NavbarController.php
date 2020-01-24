<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavbarController extends Controller
{
    public function live(){
    	$total = 4;
    	return view('live',['total' => $total]);
	}
 
	public function shopping(){
		return view('shopping');
	}
 
	public function sosmed(){
		return view('sosmed');
    }
    
    public function info(){
		return view('info');
	}

	public function barang(){
		return view('barang');
	}
}
