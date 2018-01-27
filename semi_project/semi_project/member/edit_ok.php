<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php
/* 모든 페이지에서 사용해야 하는 공통 파일 참조 */
include_once '../inc/init.php';

/* 파라미터 받기 */
$user_pw = post('user_pw', FALSE);
$new_user_pw = post('new_user_pw', FALSE);
$new_user_pw_re = post('new_user_pw_re', FALSE);
$user_name = post('user_name', FALSE);
$email = post('email', FALSE);
$tel = post('tel', FALSE);
$postcode = post('postcode', FALSE);
$addr1 = post('addr1', FALSE);
$addr2 = post('addr2', FALSE);
$addr = post('addr', FALSE);

/* 필수 입력값 검사 */
if (!$user_pw) {
    redirect(false, '현재 비밀번호를 입력하세요.');
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
if ($new_user_pw != $new_user_pw_re) {
    redirect(false, '비밀번호 확인이 잘못되었습니다.');
}

/* 비밀번호가 변경되는 경우와 변경되지 않는 경우를 구분하여 수행할 SQL문 생성 */
// IF문으로 분기하여 SQL문과 입력값이 저장될 경우
$sql = false;
$input = false;

if ($new_user_pw === false) {
    // SQL UPDATE 구문 구성 (비밀번호를 변경하지 않을 경우)
    $sql = "UPDATE member SET
					user_name='%s',
					email='%s',
					tel='%s',
					postcode='%s',
					addr1='%s',
					addr2='%s',
					edit_date=now()
				WHERE id=%d AND user_pw=password('%s')";

	// SQL문의 "%s"에 치환될 값을 저장하는 배열 구성하기.
    $input = array($user_name, $email, $tel, $postcode, $addr1, $addr2, 
    				$member_info['id'], $user_pw);
} else {
    // SQL UPDATE 구문 구성 (비밀번호를 변경할 경우)
    $sql = "UPDATE member SET
					user_pw=password('%s'),
					user_name='%s',
					email='%s',
					tel='%s',
					postcode='%s',
					addr1='%s',
					addr2='%s',
					edit_date=now()
				WHERE id=%d AND user_pw=password('%s')";

	// SQL문의 "%s"에 치환될 값을 저장하는 배열 구성하기.
    $input = array($new_user_pw, $user_name, $email, $tel, $postcode, 
    				$addr1, $addr2, $member_info['id'], $user_pw);
}

/* SQL문 실행 및 성공, 실패 여부 검사하기 */
$result = db_query($sql, $input);

if ($result === false) {
    redirect(false, '회원정보 수정에 실패했습니다.');
}

if ($result < 1) {
    redirect(false, '현재 비밀번호가 잘못되었습니다.');
}

/* 페이지 이동 */
redirect($home_url, '회원정보가 변경되었습니다.');
?>
