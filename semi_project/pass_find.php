<?php
 	
    include_once 'inc/init.php';

    $conn = mysqli_connect("localhost","root","","kimc159");
 
    $user_name = $_POST['user_name'];
    $email = $_POST['user_email'];
    $user_id = $_POST['user_id'];
 	if(!$user_id){
        redirect(false, '아이디를 입력하세요.');
    }
 	if(!$user_name){
		redirect(false, '이름을 입력하세요.');
	}
	if(!$email){
		redirect(false, '이메일을 입력하세요.');
	}

    $sql = "SELECT count(id) AS `cnt` FROM user WHERE user_name ='%s' AND email='%s' AND user_id='%s'";
    $input = array($user_name, $email, $user_id);
    $result = db_query($sql, $input);
    var_dump($result[0]['cnt']);

    if($result !== false){
            if($result[0]['cnt'] > 0){
                $ran_pass = 
            }
        }

 	if($result === FALSE){
        redirect(false, '아이디 찾기에 실패했습니다.');
    }

	echo json_encode($result[0], JSON_UNESCAPED_UNICODE);	

?>