<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php
    include_once 'inc/init.php';
    
    $user_id = post('id', FALSE);
    $user_pw = post('pw', FALSE);
    $user_pw_conf = post('pw_conf', FALSE);
    $user_name = post('name', FALSE);
    $postcode = post('postcode', FALSE);
    $addr1 = post('addr1', FALSE);
    $addr2 = post('addr2', FALSE);
    $email = post('email', FALSE);
    $tel4 = post('tel4', FALSE);
    $tel5 = post('tel5', FALSE);
    $tel6 = post('tel6', FALSE);
    $email_ck = post('email_ck', FALSE);

    if(!$user_id){redirect(false, '아이디를 입력하세요.');}
    if(!$user_pw){redirect(false, '비밀번호를 입력하세요.');}
    if(!$user_pw_conf){redirect(false, '비밀번호 확인값을 입력하세요.');}
    if(!$user_name){redirect(false, '이름을 입력하세요.');}
    if(!$email){redirect(false, '이메일을 입력하세요.');}
    if(!$tel4 || !$tel5 || !$tel6){redirect(false, '전화번호를 입력하세요.');}
    if(!$email_ck){redirect(false, '이메일 수신 체크를 해주세요.');}

    if($user_pw != $user_pw_conf){
        redirect(false, '비밀번호 확인이 잘못되었습니다.');
    }
    /*아이디 중복 검사*/
    $sql = "SELECT count(user_id) as `cnt` FROM user WHERE user_id='%s'";
    $input = array($user_id);
    $result = db_query($sql, $input);
    /* SQL 구문 에러가 있는지 여부*/
    if($result === FALSE){
        redirect(false, '아이디 중복검사에 실패했습니다.');
    }
    /* 동일한 아이디가 1개 이상인 경우 */

    if($result[0]['cnt'] > 0){
        redirect(false, '이미 사용중인 아이디입니다.');
    }

    /*이메일 중복 검사*/
    $sql = "SELECT count(email) as `cnt` FROM user WHERE email='%s'";
    $input = array($email);
    $result = db_query($sql, $input);
    if($result === FALSE){
        redirect(false, '이메일 중복검사에 실패했습니다.');
    }
    /* 동일한 이메일이 1개 이상인 경우 */

    if($result[0]['cnt'] > 0){
        redirect(false, '이미 사용중인 이메일 입니다.');
    }
    /* 가입을 위한 INSERT 처리 */
    $sql = "INSERT INTO user(user_id, user_pw, user_pw_conf, user_name, postcode, addr1, addr2, email, tel4, tel5, tel6, email_ck, reg_date, edit_date) VALUES('%s', password('%s'), password('%s'), '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', now(), now())";
    
    // 사용자 입력값을 배열로 구성
    $input = array($user_id, $user_pw , $user_pw_conf, $user_name, $postcode, $addr1 ,$addr2 , $email, $tel4, $tel5, $tel6, $email_ck);
    // 내부적으로 SQL 구문 시행후, INSERT의 경우는 자동증가 일련번호 리턴
    $result = db_query($sql, $input);
    
    /*가입 실패 (SQL 구문 에러 )*/
     if($result === FALSE){
        redirect(false, '회원가입에 실패했습니다.');
    }
    /* 가입 실패 (입력값 형식 에러) */
    if($result < 1){
        redirect(false, '가입된 데이터가 없습니다.');
    }

    /* 가입 완료 후, 페이지 이동 */
    redirect('../allerman.php', '가입이 완료되었습니다. 로그인해 주세요.');
?>