<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php
	/* 게시판 공통 설정파일을 참조 */
    // init.php는 이 파일에서 이미 참조중이다.
    include_once('bbs_init.php');

    /* 게시물 일련번호 받기 */
    $file_id = get('file_id', false);
    if (!$file_id) {
        redirect(false, '게시물 일련번호가 없습니다. 정상적인 경로로 접근해 주세요.');
    }

    /* 파일이름에 따른 파일정보 조회하기 */
    $sql = 'SELECT id, bbs_document_id, file_name, file_type,
				file_size, file_path, reg_date, edit_date
			FROM bbs_file
			WHERE id=%d';

    $input = array($file_id);
    $file_item = db_query($sql, $input);

    if ($file_item === false) {
        redirect(false, '파일정보 조회에 실패했습니다.');
    }

    if (count($file_item) < 1) {
        redirect(false, '파일정보 조회에 실패했습니다.');
    }

    /** 다운로드 정보 생성하기 */
    $file_name = $file_item[0]['file_name'];
    $file_type = $file_item[0]['file_type'];
    $file_size = $file_item[0]['file_size'];
    $file_path = $document_root.$file_item[0]['file_path'];

    /** 다운로드 정보를 웹 브라우저에게 전달하기 위한 Http Header 설정 */
    header('Pragma: public');
    header('Expires: 0');
    header('Content-Type: '.$file_type);
    header('Content-Disposition: attachment; filename='.$file_name);
    header('Content-Transfer-Encoding: binary');
    header('Content-Length: '.$file_size);

    /** 파일 열기 => 다운로드 */
    readfile($file_path);
?>
