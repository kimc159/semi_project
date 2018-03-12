<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php
	include_once 'inc/init.php';

	$email = post('email', false);
	die();
	if(!$email){
		redirect(false, '이메일을 입력하세요.');
	}

	/* 가입된 이메일인지 검사 */
	$sql = "SELECT count(id) as `cnt` FROM user WHERE email='%s'";
	$input = array($email);
	$result = db_query($sql,$input);

	if(!$result){
		redirect(false, '이메일 검사에 실패했습니다.');
	}

	$email_count = $result[0]['cnt'];

	if($email_count < 1){
		redirect(false, '가입된 이메일이 아닙니다.');
	}

	/* 임의의 비밀번호 생성하기 */
	$new_password = '';

	/** 임의의 비밀번호 생성하기 */
	// 모든 글자를 나열한다. 이 문장에서 무작위로 한 글자씩 추출한다.
	$word = 'ABCDEFGHIJLKLMNOPQRSTUVWXYZabcdefghijlklmnopqrstuvwxyz0123456789!@#';

	// 생성할 글자 수 만큼 반복
	for ($i = 0; $i < 8; ++$i) {
	    // 0~글자수-1 만큼의 랜덤값 생성
	    $r = rand(0, mb_strlen($word) - 1);
	    // 생성된 랜덤값 위치에서 한 글자 추출
	    $w = substr($word, $r, 1);
	    // 새로운 비밀번호에 추출한 한 글자를 누적한다.
	    $new_password .= $w;
	}
	$sql = "UPDATE user SET user_pw=password('%s'), edit_date=now() WHERE email='%s'";
	$input = array($new_password, $email);
	$result = db_query($sql, $input);

	if($result === false){
		redirect(false, '비밀번호 갱신에 실패했습니다.');
	}

	if($result < 1){
		redirect(false, '일치하는 이메일이 없습니다.');
	}
	// $mail_ok = send_mail('kimc159@naver.com','관리자', false, '회원님의 비밀번호가 변경되엇습니다.', sprintf("<h1>회원님의 임시 비밀번호는 <font color='red'>[%s]</font>입니다.</h1>", $new_password));

	if($mail_ok === false){
		//redirect(false, '이메일 발송에 실패했습니다.');
	}

	//redirect($home_url.'/allerman.php', '이메일로 비밀번호를 전송해 드렸습니다.');
?>