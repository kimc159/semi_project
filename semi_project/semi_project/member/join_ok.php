<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php
/** 모든 페이지에서 사용해야 하는 공통 파일 참조 */
include_once '../inc/init.php';

/** 사용자의 입력값 받기 */
$user_id = post('user_id', FALSE);
$user_pw = post('user_pw', FALSE);
$user_pw_re = post('user_pw_re', FALSE);
$user_name = post('user_name', FALSE);
$email = post('email', FALSE);
$tel = post('tel', FALSE);
$postcode = post('postcode', FALSE);
$addr1 = post('addr1', FALSE);
$addr2 = post('addr2', FALSE);


/* 필수 입력값 검사 */
if (!$user_id) {
    redirect(false, '아이디를 입력하세요.');
}
if (!$user_pw) {
    redirect(false, '비밀번호를 입력하세요.');
}
if (!$user_pw_re) {
    redirect(false, '비밀번호 확인값을 입력하세요.');
}
if (!$user_name) {
    redirect(false, '이름을 입력하세요.');
}
if (!$email) {
    redirect(false, '이메일 주소를 입력하세요.');
}
if (!$tel) {
    redirect(false, '전화번호를 입력하세요.');
}

/* 비밀번호 확인 */
// 두 개의 비밀번호가 동일하지 않으면 입력에 문제가 있는 것으로 판단.
if ($user_pw != $user_pw_re) {
    redirect(false, '비밀번호 확인이 잘못되었습니다.');
}

/** 아이디 중복검사 */
$sql = "SELECT count(id) as `cnt` FROM member WHERE user_id='%s'";
$input = array($user_id);
$result = db_query($sql, $input);

// SQL구문에 에러가 있는 경우.
if ($result === FALSE) {
    redirect(false, '아이디 중복검사에 실패했습니다.');
}

// 동일한 아이디가 1개 이상인 경우
if ($result[0]['cnt'] > 0) {
    redirect(false, '이미 사용중인 아이디 입니다.');
}


/** 이메일 중복검사 */
$sql = "SELECT count(id) as `cnt` FROM member WHERE email='%s'";
$input = array($email);
$result = db_query($sql, $input);

// SQL구문에 에러가 있는 경우.
if ($result === FALSE) {
    redirect(false, '이메일 중복검사에 실패했습니다.');
}

// 동일한 이메일이 1개 이상인 경우
if ($result[0]['cnt'] > 0) {
    redirect(false, '이미 사용중인 이메일 입니다.');
}


/** 가입을 위한 INSERT 처리 */
$sql = "INSERT INTO member (
				user_id, user_pw, user_name, email, tel,
				postcode, addr1, addr2, reg_date, edit_date
			) VALUES (
				'%s', password('%s'), '%s', '%s', '%s',
				'%s', '%s', '%s', now(), now()
			)";

// 사용자 입력값을 배열로 구성
$input = array($user_id, $user_pw, $user_name, $email, $tel,
    $postcode, $addr1, $addr2);

// 내부적으로 SQL구문 시행후, INSERT의 경우는 자동증가 일련번호를 리턴
$result = db_query($sql, $input);

// 가입 실패 (SQL구문 에러)
if ($result === false) {
    redirect(false, '회원가입에 실패했습니다. 관리자에게 문의 바랍니다.');
}

// 가입 실패 (입력값 형식 에러)
if ($result < 1) {
    redirect(false, '가입된 데이터가 없습니다. 관리자에게 문의 바랍니다.');
}

/** 가입 완료 후, 페이지 이동 */
redirect('/index.php', '가입이 완료되었습니다. 로그인해 주세요.');
?>
