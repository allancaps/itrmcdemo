<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\employees;
use App\authentication;
use DB;

class dbmsController extends Controller
{
    public function viewall(Request $request){

    	if($request->session()->exists('user')){
	    	$records=employees::paginate(3);

	    	$visibile="true";

	    	return view('dbms/viewall')->with('records',$records);
    	}else{
    		return redirect('/login');
    	}

    }

    public function testview(){
            
            $records=DB::table('employees')
            //->select('lastname','firstname')
            //->where('department','like','%c%')
            //->whereNotBetween('emp_id',[2,5])
            //->whereIn('emp_id',[2,5,7])
            //->whereNotIn('emp_id',[2,5,7])
            //->whereNull('pic')
            //->orderBy('emp_id','asc')
            //->take(3)
            //->max('emp_id');
            ->paginate(5);
            //->get();
            
            //return $records;

            return view('dbms/viewall')->with('records',$records);
    }

    public function testinsert(){

        DB::table('employees')
            ->insert(
                [
                ['firstname'=>'Lolita','lastname'=>Crypt::encryptString('Shields')],
                ['firstname'=>'Yi-Sun','lastname'=>Crypt::encryptString('Shin')]
                ]
            );

        return "Record added".

        "<script type='text/javascript'>
            setTimeout(\"location.href='/testview';\",2000)
        </script>";
    }

    public function testdecrypt(){

        $surname20=DB::table('employees')
                ->where('emp_id','=',20)
                ->select('lastname')
                ->get();

        $decrypted=Crypt::decryptString($surname20[0]->lastname);
        
        //return $surname20['0']->lastname;

        return $decrypted;
    }
    
    public function testupdate(){

        DB::table('employees')
            ->where('emp_id','=',18)
            ->update(
                ['department'=>'GunBound','position'=>'Malefic Gunner']
                );

        return "Record Updated".

        "<script type='text/javascript'>
            setTimeout(\"location.href='/testview';\",2000)
        </script>";
    }

    public function testdelete(){

        DB::table('employees')
            ->whereBetween('emp_id',[9,15])
            ->delete();

        return "Record Deleted".

        "<script type='text/javascript'>
            setTimeout(\"location.href='/testview';\",2000)
        </script>";
    }

    public function searchdb(Request $request){
        if($request->session()->exists('user')){
            return view('dbms/search');
        }else{
            return redirect('/login');
        }
    }

    public function searchresult(Request $request){

    	$data=$request->all();
    	
    	$sql="select * from employees where ".$data['cbo_key']." like '%".$data['txt_search']."%'";

    	$records=DB::select($sql);

    	return view('dbms/searchresult')->with('records',$records);
    }

    public function insertrecord(Request $request){
    	if($request->session()->exists('user')){
	    	return view('dbms/insert');
    	}else{
    		return redirect('/login');
    	}
    }

    public function insertprocess(Request $request){
    	
    	$data=$request->except('file_pic');

    	$file_pic=$request->file('file_pic')->getClientOriginalName();

    	$sql="INSERT INTO employees (firstname, lastname, department, position, pic) VALUES ('".
    		$data['txt_fname']."', '".
    		$data['txt_lname']."', '".
    		$data['cbo_dept']."', '".
    		$data['cbo_pos']."', '".
    		$file_pic."')";

    	DB::insert($sql);

    	$path=$request->file('file_pic')->move(public_path('profile_pic'),$file_pic);

    	return "Record ".$data['txt_fname']." ".$data['txt_lname']." added. <br />Picture saved to: ".$path.

    	"<script type='text/javascript'>
    		setTimeout(\"location.href='/viewall';\",2000)
    	</script>";
    }

    public function deleterecord(Request $request){
    	if($request->session()->exists('user')){
	    	return view('dbms/delete');
    	}else{
    		return redirect('/login');
    	}
    }

    public function deleteprocess(Request $request){
    	
    	$data=$request->all();

    	$sql="DELETE FROM employees WHERE emp_id='".$data['txt_delete']."'";

    	DB::delete($sql);

    	return "Record Deleted.
    	
    	<script type='text/javascript'>
    		setTimeout(\"location.href='/viewall';\",2000)
    	</script>";

    }

    public function deletequick($id){
    	$sql="DELETE FROM employees WHERE emp_id='".$id."'";

    	DB::delete($sql);

    	return "Record Deleted.
    	
    	<script type='text/javascript'>
    		setTimeout(\"location.href='/viewall';\",2000)
    	</script>";
    }

    public function updaterecord(Request $request){
    	if($request->session()->exists('user')){
	    	return view('dbms/update');
    	}else{
    		return redirect('/login');
    	}
    }

    public function updatedisplay(Request $request){
    	$data=$request->all();

    	$sql="SELECT * FROM employees WHERE ".$data['cbo_editkey']." = '".$data['txt_updateby']."'";
    	
    	$records=DB::select($sql);

    	return view('dbms/updatedisplay')->with('record',$records);
    }

    public function updateprocess(Request $request){
    	$data=$request->all();

    	$sql="UPDATE employees SET
    		firstname='".$data['txt_fname']."',
    		lastname='".$data['txt_lname']."',
    		department='".$data['txt_dept']."',
    		position='".$data['txt_pos']."' where emp_id='".$data['txt_empid']."'";
    	
    	DB::update($sql);

    	return "Record Updated.
    	
    	<script type='text/javascript'>
    		setTimeout(\"location.href='/viewall';\",2000)
    	</script>";
    }

    public function updatequick($id){
    	$sql="SELECT * FROM employees WHERE emp_id = '".$id."'";
    	
    	$record=DB::select($sql);
    	return view('dbms/updatedisplay')->with('record',$record);
    }

    public function login(){
    	return view('dbms/login');
    }

    public function loginprocess(Request $request){
    	$login=$request->all();

    	$sql="SELECT * FROM authentication where username='".$login['txt_uname']."' AND password='".$login['txt_pword']."'";

    	$record=DB::select($sql);

    	if($record){
    		$request->session()->put('user',$login['txt_uname']);

            return "Welcome, you will be redirected shortly...
    		<script type='text/javascript'>
    			setTimeout(\"location.href='/viewall';\",2000)
    		</script>";

    	}else{
    		$request->session()->flush();
    		return "Sorry! Access denied, you will be redirected to the Login page shortly...
    		<script type='text/javascript'>
    			setTimeout(\"location.href='/login';\",2000)
    		</script>";
    	}
    }

    public function logout(Request $request){
    	$request->session()->flush();

		return "Successfully logged out...
		<script type='text/javascript'>
			setTimeout(\"location.href='/login';\",2000)
		</script>";
    }
}
