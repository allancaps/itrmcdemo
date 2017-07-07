<?php

namespace App\Http\Controllers;

use App\authentication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class eloq extends Controller
{
    public function viewall(){

    	$records=authentication::paginate(5);

    	//$count=authentication::all()
    	//	->max('user_id');

    	return view('eloq/viewall')->with('records',$records);
    	//return $count;
    }

    public function insert(){

    	$authentication = new authentication;

    	$authentication->username="bing";
    	$authentication->password="go";
    	$authentication->save();

    	return "Record added".

        "<script type='text/javascript'>
            setTimeout(\"location.href='/eloqview';\",2000)
        </script>";
    }

    public function update(){

    	$authentication = authentication::find(16);

    	$authentication->password="54321";

    	$authentication->save();

    	return "Record saved".

        "<script type='text/javascript'>
            setTimeout(\"location.href='/eloqview';\",2000)
        </script>";
    }

    public function delete(){
    	
    	$authentication = authentication::find(16);

    	$authentication->delete();
    	
    	return "Record deleted".

        "<script type='text/javascript'>
            setTimeout(\"location.href='/eloqview';\",2000)
        </script>";
    }

    public function createfile(){

    	$file=storage::disk('local')->put('sample/errlog.log','Error Logs here...');

    	if($file){
    		return "Create Ok.";
    	}else{
    		return "Create Failed.";
    	}
    }

    public function write(){

    	$content="Adding this to the file's ending...";
    	storage::append('textFile.txt',$content);

    	return "File edited.";
    }

    public function read(){

    	$content=storage::disk('local')->get('textFile.txt');

    	return $content;
    }

    public function getsize(){

    	$size=storage::size('textFile.txt');
    	return "Size: ".$size." Bytes";
    }

    public function deletefile(){
    	storage::delete('sample/textFile.txt');

    	return "File Deleted.";
    }

    public function createfolder(){
    	storage::makeDirectory('folder1');
    	return "Folder 1 Created...";
    }

    public function deletefolder(){
    	storage::deleteDirectory('folder1');
    	return "Folder 1 Deleted..."; 	
    }
}
