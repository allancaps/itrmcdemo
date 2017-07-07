<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class Controller1 extends Controller{
    public function home(){
		return view('dbms/login');
	}

	public function page1(){
		//computation
		$lname="Capistrano";
		$fname="Allan George N.";
		$data['firstname']=$fname;
		$data['lastname']=$lname;
		$data['fullname']=$lname.", ".$fname;

		return view('set1/page1')->with('mydata',$data);
	}
    
	public function page2(){
		return view('set1/page2');
	}
    
	public function page3(){

		$data=Input::all();

		if(isset($data['txt_name'])){
			return view('set1/page3')->with('data',$data);
		}
		return redirect ('page2');
	}

	public function menu(){
		return view('set1/menu');
	}
	
	public function page4(){
		return view('set1/page4');
	}

	public function page5(){

		$data=Input::all();

		if(isset($data['txt_fname'])){
			return view('set1/page5')->with('checkdata',$data);
		}
		return redirect ('page4');
	}

	public function first(){
		return view('activity1/first');
	}

	public function second(){

		$content=Input::all();
		
		if(isset($content['int_val1'])){
			$total=$content['int_val1']+$content['int_val2'];
			return view('activity1/second')->with('total',$total);
		}
		return redirect('first');
	}

	public function third(){

		$data=Input::get('txt_total');

		if(isset($data)){
			return view('activity1/third')->with('data',$data);
		}
		return redirect('first');
	}
	
	public function child1(){

		$data['a']="Test Data <1>";
		$data['b']="Test Data <2>";
		$data['c']="Test Data <3>";

		return view('day2/child1')->with('testdata',$data);
	}

	public function child2(){
		return view('day2/child2');
	}

	public function child3(Request $request){

		$data['fname']=$request->input('fname');
		$data['mname']=$request->input('mname');
		$data['lname']=$request->input('lname');
		$data['token']=$request->input('_token');
		
		if(isset($data['token'])){
			return view('day2/child3')->with('content',$data);
		}
		return redirect('child2');
	}

	public function child4(){

		$grade=59;

		return view('day2/child4')->with('status',$grade);
	}

	public function child5(){
		return view('day2/child5');
	}

	public function register(){
		return view('activity2/register');
	}

	public function registersummary(Request $request){

		$reginfo=$request->all();

		/*

		$reginfo['fname']=$request->input('fname');
		$reginfo['mname']=$request->input('mname');
		$reginfo['lname']=$request->input('lname');
		$reginfo['gender']=$request->input('gender');
		$reginfo['cstat']=$request->input('cstat');
		$reginfo['bdate']=$request->input('bdate');
		$reginfo['dept']=$request->input('dept');
		$reginfo['pos']=$request->input('pos');
		$reginfo['token']=$request->input('_token');

		*/

		if($reginfo['gender']=="male"){
			$information['gender']="Mr. ";
		}else{
			if ($reginfo['cstat']=="married") {
				$information['gender']="Mrs. ";
			}else{
				$information['gender']="Ms. ";
			}
		}

		$information['fullname']=$information['gender'].$reginfo['fname']." ".$reginfo['mname']." ".$reginfo['lname'];
		$information['bdate']=$reginfo['bdate'];
		$information['dept']=$reginfo['dept'];
		$information['pos']=$reginfo['pos'];

		$information['path']=$request->path();
		$information['url']=$request->url();
		$information['full url']=$request->fullUrl();

		if(isset($reginfo['_token'])){
			return view('activity2/registersummary')->with('reginfo',$information);
		}else{
			return redirect('register');
		}
	}

	public function upload(){
		return view('day2/upload');
	}

	public function uploadprocess(Request $request){

		//$path=$request->file('file1')->store('myuploads');
		
		$filename=$request->file('file1')->getClientOriginalName();
		//$path=$request->file('file1')->storeAs('myuploads', $filename);
		
		$path=$request->file('file1')->move(public_path('public_uploads'), date('Y-m-d-h-s')."_".$filename);

		//File Properties
		$data['filename']=$request->file('file1')->getClientOriginalName();
		$data['extension']=$request->file('file1')->getClientOriginalExtension();
		$data['size']=($request->file('file1')->getClientSize())/1024;
		$data['type']=$request->file('file1')->getClientMimeType();
		$data['valid']=$request->file('file1')->isValid();

		return view('day2/uploadprocess')->with('data',$data)->with('path',$path);
	}
}