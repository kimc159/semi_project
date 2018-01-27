<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php
	include_once 'inc/init.php';

    $user_pw = post('pw', FALSE);
    $new_user_pw = post('new_user_pw', FALSE);
    $new_user_pw_re = post('new_user_pw_re', FALSE);
    $user_name = post('name', FALSE);
    $postcode = post('postcode', FALSE);
    $addr1 = post('addr1', FALSE);
    $addr2 = post('addr2', FALSE);
    $email = post('email', FALSE);
    $tel4 = post('tel4', FALSE);
    $tel5 = post('tel5', FALSE);
    $tel6 = post('tel6', FALSE);

    if(!$user_pw){redirect(false, '현재 비밀번호를 입력하세요.');}
    if(!$user_name){redirect(false, '이름을 입력하세요.');}
    if(!$email){redirect(false, '이메일을 입력하세요.');}
    if(!$tel4 || !$tel5 || !$tel6){redirect(false, '전화번호를 입력하세요.');}
    if($new_user_pw != $new_user_pw_re){
        redirect(false, '비밀번호 확인이 잘못되었습니다.');
    }

    $sql = false;
    $input = false;
    // 비밀번호 변경하지 않을 경우
    if($new_user_pw === false){
    	$sql = "UPDATE user SET user_name='%s', email='%s', tel4='%s', tel5='%s', tel6='%s', postcode='%s', addr1='%s', addr2='%s', edit_date=now() WHERE id=%d AND user_pw=password('%s')";
    	$input = array($user_name,$email, $tel4, $tel5, $tel6, $postcode, $addr1, $addr2, $member_info['id'], $user_pw);
    }else{
    	// 비밀번호 변경할 경우
    	$sql = "UPDATE user SET user_pw=password('%s'), user_name='%s', email='%s', tel4='%s', tel5='%s', tel6='%s', postcode='%s', addr1='%s', addr2='%s', edit_date=now() WHERE id=%d AND user_pw=password('%s')";
    	$input = array($new_user_pw, $user_name,$email, $tel4, $tel5, $tel6, $postcode, $addr1, $addr2, $member_info['id'], $user_pw);
    }
    $result = db_query($sql, $input);

    if($result === FALSE){
    	redirect(false, '회원정보 수정에 실패했습니다.');
    }
    if($result < 1){
    	redirect(false, '현재 비밀번호가 잘못되었습니다.');
    }
    redirect($home_url.'/allerman.php', '회원정보가 변경되었습니다.');
?>