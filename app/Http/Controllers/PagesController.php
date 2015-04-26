<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	//
    public  function  about(){
        $name = "pplegend";
        $first = 'zhang';
        $last = 'feng';

    //return view('pages.about',compact('first','last')); 
    //return view('pages.about',$array); 
	return view("pages.about")->with([
          'first' => 'yongzhen',
          'last'  => 'zhang'
     ]);


    }

    public function contact($name = 'zhang'){
    	return view("pages.contact")->withName($name);
    	//eturn view("pages.contact")->with('name',$name);
    }
}
