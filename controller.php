<?php
session_start();
include('./db.php');


//prevent unauthorized access
function authnredir(){
if( isset($_SESSION['id']) ){



	if( basename($_SERVER['PHP_SELF']) == 'index.php' ){

		if($_SERVER['userdata']['type'] == 0 ){
			header('Location:./browse.php');
		}else{
			header('Location:./upload.php');
		}

	}


}else{

	if( basename($_SERVER['PHP_SELF']) != 'index.php' ){
	header('Location:./index.php');
	return false;
	die();
}

}
 
if( isset($_SESSION['id']) ){
if( $_SESSION['userdata']['type'] == 0 ){
	if( basename($_SERVER['PHP_SELF']) != 'browse.php' ){
		header('Location:./browse.php');
	}
}

}

}
authnredir();




$intent = isset($_REQUEST['intent']) ? $_REQUEST['intent'] : 'blank';

switch($intent){

	case 'login':

	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = ' SELECT * FROM `user` WHERE `email` = "'.$email.'" AND `password` = "'.$password.'" ';

	if(!$result = $db->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
	}


		if( $result->num_rows == 0 ){
			//mismatch
			//redirect 
    		header('Location:./?message=invalidcredentials');
		}

	while($row = $result->fetch_assoc()){


    $id = $row['id'];

    //start session
    $_SESSION['id'] = $row['id'];
    $_SESSION['userdata'] = $row;

    //redirect 
    header('Location:./');

    break;

}

	break;

	case 'upload':

	if( $_POST['type'] == 'file' ){
		//file upload
		$measure = $_POST['title'];
		$title = $_POST['title'];
		//move file 
		 if(isset($_FILES['userfile'])){
      $errors= array();
      $file_name = $_FILES['userfile']['name'];
      $file_size =$_FILES['userfile']['size'];
      $file_tmp =$_FILES['userfile']['tmp_name'];
      $file_type=$_FILES['userfile']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['userfile']['name'])));
      
      $expensions= array("xml");

      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a xml file file.";
      }
      
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"./files/".$file_name);
         //push the info to database
         
         $xml_string = file_get_contents('./files/'.$file_name);
         $xml = simplexml_load_string($xml_string);

         $data = json_encode($xml);
         $data = $db->real_escape_string($data);
         $sql = ' INSERT INTO `data`(`userid`, `filepath` , `data`, `type`) VALUES ( "'.$_SESSION['id'].'" , "'.$file_name.'" , "'.$data.'" , 0)';

        if(!$result = $db->query($sql)){
    		die('There was an error running the query [' . $db->error . ']');
			} else{
				header('Location:./');
			}

         


      }else{
         print_r($errors);
         echo '<h2>Please go back and try again </h2>';
      }
   }
		echo $measure;

	}else{
		//text upload
	}

	break;


	default:

	//redirect

	break;

}



function getReports($db){

$sql = 'SELECT * FROM `data` WHERE 1';



	if(!$result = $db->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
	}


		if( $result->num_rows == 0 ){
			//mismatch
			//redirect 
    		return array();
		}
$data = array();
	while($row = $result->fetch_assoc()){

		array_push($data, $row);
    

}

return $data;


}
