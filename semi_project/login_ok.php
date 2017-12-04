<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php
	include_once 'inc/init.php';

	$user_id = post('member_id', false);
	$user_pw = post('member_pw', false);

	if(!$user_id){
		redirect(false, '아이디를 입력하세요.');
	}
	if(!$user_pw){
		redirect(false, '비밀번호를 입력하세요.');
	}

	/*로그인을 위한 SQL 실행하기*/
	$sql = "SELECT id, user_name FROM user WHERE user_id='%s' AND user_pw=password('%s')";
	// %s에 치환될 변수를 배열로 묶기
	$input = array($user_id, $user_pw);
	// 조회 결과는 2차 배열로 넘어온다.
	$result = db_query($sql, $input);

	if($result === FALSE){
        redirect(false, '로그인에 실패했습니다.');
    }

    /* 조회결과가 없다면 - 아이디나 비밀번호가잘못된 경우 */
    if( count($result) < 1){
        redirect(false, '아이디나 비밀번호가 맞지 않습니다.');
    }
    /* 조회결과를 기반으로 로그인 처리 -> 세션생성 */
    $member_id = $result[0]['id'];
    $member_name = $result[0]['user_name'];

    // 회원 일련번호를 세션에 저장-> 모든 페이지에서 이 값을 인식할 수 있다.
    // init.php에서 session_start()를 했기 때문에 사용가능함.
    $_SESSION['member_id'] = $member_id;

    /* 로그인 완료 후 페이지 이동 */
    redirect('../allerman.php', $member_name.'님 안녕하세요.');
?>