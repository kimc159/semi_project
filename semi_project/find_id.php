<?php
 	
    include_once 'inc/init.php';
 
    $user_name = $_POST['user_name'];
    $email = $_POST['user_email'];
 	
 	if(!$user_name){
		redirect(false, 'ㅁㄴㅇㅁㄴ 입력하세요.');
	}
	if(!$email){
		redirect(false, '이메일을 입력하세요.');
	}

    $sql = "SELECT * FROM user WHERE user_name ='%s' AND email='%s'";
    $input = array($user_name, $email);
    $result = db_query($sql, $input);
    //var_dump($result[0]['user_id']);
 	if($result === FALSE){
        redirect(false, '아이디 찾기에 실패했습니다.');
    }

	echo json_encode($result[0], JSON_UNESCAPED_UNICODE);	

?>