<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	//
    public  function  about(){
        $name = "pplegend";
	return view("pages.about")->with([
          'first' => 'yongzhen',
          'last'  => 'zhang'
     ]);
    }

    public function contact($name = 'zhang'){
    	return view("pages.contact")->withName($name);
    }
}
