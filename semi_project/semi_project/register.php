<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php
    include_once $document_root . '../inc/inc.php';

	$conn = mysqli_connect("localhost", "root", "", "site" );
	// 에러가 존재한다면?
    if (mysqli_connect_errno()) {
        // 에러메시지 출력하기
       vardump(mysqli_connect_error());
        // 웹 페이지 실행중단
        exit();
    } else {
        // 케릭터셋 설정하기
        @mysqli_set_charset($_DB, $db_charset);
    }
    $id = $_POST['id'];
    $pw = $_POST['pw'];
    $pw_conf = $_POST['pw_conf'];
    $name = $_POST['name'];
    $postcode = $_POST['postcode'];
    $addr1 = $_POST['addr1'];
    $addr2 = $_POST['addr2'];
    $email = $_POST['email'];
    $tel4 = $_POST['tel4'];
    $tel5 = $_POST['tel5'];
    $tel6 = $_POST['tel6'];
    $email_ck = $_POST['email_ck'];

    if(!$id){redirect(false, '아이디를 입력하세요.');}
    if(!$pw){redirect(false, '비밀번호를 입력하세요.');}
    if(!$pw_conf){redirect(false, '비밀번호 확인값을 입력하세요.');}
    if(!$name){redirect(false, '이름을 입력하세요.');}
    if(!$email){redirect(false, '이메일을 입력하세요.');}
    if(!$tel4 || !$tel5 || !$tel6){redirect(false, '전화번호를 입력하세요.');}
    if(!$email_ck){redirect(false, '이메일 수신 체크를 해주세요.');}

    $sql = "INSERT INTO user(user_id, user_pw, user_pw_conf, user_name, postcode, addr1, addr2, email, tem4, tel5, tel6, email_ck, reg_date, edit_date) VALUES('%s', password('%s'), '%s', '%s', '%s', '%s', '%s', '%s', now(), now())";
    
    // 사용자 입력값을 배열로 구성
    $input = array();
?>