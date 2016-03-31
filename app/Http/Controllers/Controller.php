<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}


{
	function menu()
	{
		return view('index-1');
	}
	function prenotazioni()
	{
		return view('index-2');
	}

	function blog()
	{
		return view('index-3');
		
	function dovesiamo()
	{
		return view('index-4');
	}
}