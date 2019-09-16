<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['body'];

    $sqlHandler = new mysqli('sql205.epizy.com','epiz_24459971','Fuckyou210','epiz_24459971_messages');
	if($sqlHandler){
	    if(isset($name)){
		    if(isset($email)){
			    if(isset($phone)){
				    if(isset($message)){
                        $query = $sqlHandler->query("INSERT INTO client_messages(name,email,phone,comment) VALUES('".$name."','".$email."','".$phone."','".$message."')");
                        if($query){
                            echo json_encode(array('status'=>'success'));
                        }
                        else{
                            echo json_encode(array('status'=>'fail'));
                        }
				    }
                    else{
                        echo json_encode(array('status'=>'fail'));
                    }
			    }
                else{
                    echo json_encode(array('status'=>'fail'));
                }
		    }
            else{
                echo json_encode(array('status'=>'fail'));
            }
	    }
        else{
            echo json_encode(array('status'=>'fail'));
        }
    }
	else{
		echo json_encode(array('status'=>'fail'));
	}
?>