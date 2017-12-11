<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php
	include_once 'inc/init.php';

	$document_id = post('document_id', false);
	$writer_name = post('writer_name', false);
	$writer_pw = post('writer_pw', false);
	$email = post('email', false);
	$subject = post('subject', false);
	$content = post('content', false);
	$bbs_type = post('bbs_type', false);
	
	$member_id = 0;

	$is_mine = FALSE;
	if($member_info !== FALSE){// 로그인했을경우 init.php에서 조회됨
		$sql = "SELECT count(id) AS `cnt` FROM bbs_document WHERE id=%d AND member_id=%d";
		$input = array($document_id, $member_info['id']);
		$result = db_query($sql, $input);

		if($result !== FALSE){
			if($result[0]['cnt'] > 0){
				//자신의 글이 맞다면, 작성자 기본 정보로 설정한다.
				$is_mine = TRUE;
				$member_id = $member_info['id'];
				$writer_name = $member_info['user_name'];
				$writer_pw = $member_info['user_name'];
				$email = $member_info['email'];

				if(!$document_id){redirect(false, '글 번호가 지정되지 않았습니다.');}
				if(!$writer_name){redirect(false, '작성자 이름을 입력하세요.');}
				if(!$writer_pw){redirect(false, '비밀번호를 입력하세요.');}
				if(!$email){redirect(false, '이메일을 입력하세요.');}
				if(!$subject){redirect(false, '글 제목을 입력하세요.');}
				if(!$content){redirect(false, '글 내용을 입력하세요.');}
			}
		}
	}
	/*자신의 글이 아닐 경우 비밀번호 검사하기*/
	if($is_mine === FALSE){
		$sql = "SELECT count(id) as `cnt` FROM bbs_document WHERE id=%d AND writer_pw=password('%s')";

		$input = array($document_id, $writer_pw);
		$result = db_query($sql,$input);
		if ($result === FALSE) {
            redirect(FALSE, '비밀번호 검사에 실패했습니다. 관리자에게 문의 바랍니다.');
        }

        // 카운트 결과 얻기 --> 비밀번호가 일치하는 데이터의 수가 0이면 비밀번호 틀림
        $cnt = $result[0]['cnt'];
        if ($cnt < 1) {
            redirect(FALSE, '잘못된 비밀번호를 입력하셨습니다.');
            
        }
	}
	/*게시물 데이터 수정을 위한 SQL처리*/
	$sql = "UPDATE bbs_document SET writer_name='%s', email='%s', subject='%s', content='%s', edit_date=now() WHERE id=%d";
	$input = array($writer_name, $email, $subject, $content, $document_id);
	$result = db_query($sql, $input);

	if($result === false || $result < 1){
		redirect(false, '게시물 수정에 실패했습니다.');
	}
	/* 새롭게 등록된 첨부파일의 업로드 처리 */
    // <input type="file"> 요소의 name 속성값을 파라미터로 전달
    $file = do_upload('file');

    // 업로드 된 파일 정보를 저장하기
    if (is_array($file)) {
        // 업로드 된 파일 수 만큼 반복
        for ($i = 0; $i < count($file); ++$i) {
            $sql = "INSERT INTO bbs_file ( bbs_document_id, file_name, file_type,
						file_size, file_path, reg_date, edit_date )
                    VALUES ( %d, '%s', '%s', %d, '%s', now(), now() )";

            // SQL구문에 매 반복시마다 적용될 값.
            $input = array($document_id, $file[$i]['name'], $file[$i]['type'], 
                        $file[$i]['size'], $file[$i]['upload_uri'], );

            // 저장한다.
            db_query($sql, $input);
        }
    }
    /* 삭제가 체크된 첨부파일의 처리 */
    $file_delete = post('file_delete', FALSE);  // 체크박스의 선택값

    if (is_array($file_delete)) {
        // 선택값이 저장된 배열을 콤마를 사용하여 하나의 문자열로 묶는다.
        $file_in = implode(',', $file_delete);
        // SQL의 In절을 사용한다.
        $sql = "SELECT file_path FROM bbs_file WHERE id IN (%s)";
        $result = db_query($sql, array($file_in));

        // 조회결과가 있다면 조회된 파일의 경로에 대한 삭제 처리를 수행한다.
        if ($result) {
            for ($i=0; $i<count($result); $i++) {
                $fname = $document_root.$result[$i]['file_path'];
                if (is_file($fname)) { unlink($fname); }
            }
        }

        // 삭제된 파일에 대한 정보를 DATABASE에서 삭제한다.
        db_query("DELETE FROM bbs_file WHERE id IN (%s)", array($file_in));
    }
    /* 읽기페이지로 이동 */
    // 읽을 대상을 지정해야 하므로, 게시물의 일련번호를
    // GET 파라미터로 전달한다.
    $url = sprintf('read.php?bbs_type=%s&document_id=%d', $bbs_type, $document_id);
    redirect($url, "수정되었습니다.");
?>