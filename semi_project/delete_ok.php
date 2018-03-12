<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php
	include_once 'inc/bbs_init.php';
	
	$pw = post('pwd', false);
	$document_id = post('document_id', false);

	if(!$document_id){
		redirect(false, '글 번호가 지정되지 않았습니다.');
	}

	$is_mine = FALSE;
	if($member_info !== FALSE){// 로그인 상태라면?
		$sql = "SELECT count(id) AS `cnt` FROM bbs_document WHERE id = '%d' AND member_id=%d";
		$input = array($document_id, $member_info['id']);
		$result = db_query($sql, $input);

		if($result !== FALSE){
			if($result[0]['cnt'] > 0){
				$is_mine = TRUE;
			}
		}
	}
	if($is_mine === FALSE){
		$sql = "SELECT count(id) as `cnt` FROM bbs_document WHERE id=%d AND writer_pw=password('%s')";
		$input = array($document_id, $pw);
		$result = db_query($sql, $input);

		if($result === false){
			redirect(false, '비밀번호 검사에 실패했습니다.');
		}
		$cnt = $result[0]['cnt'];
		if($cnt < 1){
			redirect(false, '잘못된 비밀번호를 입력하셨습니다.');
		}
		$sql = "SELECT file_path FROM bbs_file WHERE bbs_document_id=%d";
		$input = array($document_id);
		$file_list = db_query($sql, $input);

		// 첨부파일이 있다면?
		if($file_list !== FALSE){
			for($i=0; $i<count($file_list); $i++){
				// 저장되어 있는 원본파일 삭제
				$fname = $document_root.$file_list[$i]['file_path'];
				if(is_file($fname)){
					unlink($fname);
				}

        		// 썸네일 이미지의 이름을 추출하여 삭제한다.
				$p = strrpos($fname, '/');
	            $dir = substr($fname, 0, $p);
	            $fname = substr($fname, $p+1);
	            $thumb_path = $dir."/thumb_".$fname;
	            if (is_file($thumb_path)) {
	                unlink($thumb_path);
	            }
			}
		}
	}
		// 2) 참조키 제약조건에 의해서 첨부된 파일의 목록을 먼저 삭제해야 한다.
		$sql = "DELETE FROM bbs_file WHERE bbs_document_id=%d";
		$input = array($document_id);
		db_query($sql, $input);

		// 3) 게시물 삭제
		$sql = "DELETE FROM bbs_document WHERE id=%d";
		$input = array($document_id);
		db_query($sql, $input);

		redirect('list.php?bbs_type='.$bbs_type, '삭제되었습니다.');


?>