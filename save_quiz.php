<?php 

include 'db_connect.php';

extract($_POST);


if(empty($id)){
	$data=  " title='".mysqli_real_escape_string($conn,$title)."'";
	$data .=  ", user_id='".$user_id."'";
	$data .=  ", qpoints='".$qpoints."'";
	$data .=  ", duration='".($hrs*60 + $mins)."'";
	$data .=  ", quiz_id='".$title.'-'.$user_id."'";
	$insert_user = $conn->query('INSERT INTO quiz_list set  '.$data);
	$lastId = $conn->insert_id;
	$qdata = " quiz_id='".clean($title)."-".$lastId."'";
	$insert_qid = $conn->query('UPDATE quiz_list set '.$qdata.' where id= '.$lastId);

	if($insert_user && $insert_qid){
			echo json_encode(array('status'=>1,'id'=>$lastId));
	}
}else{
	$data=  " title='".mysqli_real_escape_string($conn,$title)."'";
	$data .=  ", user_id='".$user_id."'";
	$data .=  ", qpoints='".$qpoints."'";
	$data .=  ", duration='".($hrs*60 + $mins)."'";
	$update = $conn->query('UPDATE quiz_list set  '.$data.' where id= '.$id);
	$qdata = " quiz_id='".clean($title)."-".$id."'";
	$update_qid = $conn->query('UPDATE quiz_list set '.$qdata.' where id= '.$id);

	if($update && $update_qid){
			echo json_encode(array('status'=>1,'id'=>$id));
		
	}
}

function clean($string) {
	$string = str_replace(' ', '-', $string); 
 
	return substr(preg_replace('/[^A-Za-z\-0-9]/', '', $string),0, 50);
 }