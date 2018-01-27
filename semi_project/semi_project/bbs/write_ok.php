<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php
	/* 게시판 공통 설정파일을 참조 */
    // init.php는 이 파일에서 이미 참조중이다.
    include_once 'bbs_init.php';

    /* 사용자 입력값 받기 */
    $writer_name = post('writer_name', false);
    $writer_pw = post('writer_pw', false);
    $email = post('email', false);
    $subject = post('subject', false);
    $content = post('content', false);

    // 회원의 일련번호값 --> 비회원인 경우 0으로 저장한다.
    $member_id = 0;

    // 로그인한 경우 세션의 정보로 데이터 처리
    if ($member_info !== false) {
        $member_id = $member_info['id'];
        $writer_name = $member_info['user_name'];
        $writer_pw = $member_info['user_pw'];
        $email = $member_info['email'];
    }

    /* 입력값 검사 */
    if (!$writer_name) { redirect(false, '작성자 이름을 입력하세요.'); }
    if (!$writer_pw) { redirect(false, '비밀번호를 입력하세요.'); }
    if (!$email) { redirect(false, '이메일을 입력하세요.'); }
    if (!$subject) { redirect(false, '글 제목을 입력하세요.'); }
    if (!$content) { redirect(false, '글 내용을 입력하세요.'); }

    /* 게시물 데이터 저장하기 */
    $sql = '';
    $input = false;

    if ($member_info !== false) {
        // 로그인한 경우에 대한 SQL처리
        $sql = "INSERT INTO bbs_document (
					bbs_type, member_id, writer_name, writer_pw,
					email, subject, content, hit, reg_date, edit_date
				) VALUES (
					'%s', %d, '%s', '%s',
					'%s', '%s', '%s', 0, now(), now()
				)";

        $input = array($bbs_type, $member_id, $writer_name, $writer_pw, 
                        $email, $subject, $content);
    } else {
        // 로그인 하지 않은 경우
        $sql = "INSERT INTO bbs_document (
					bbs_type, member_id, writer_name, writer_pw,
					email, subject, content, hit, reg_date, edit_date
				) VALUES (
					'%s', NULL, '%s', password('%s'),
					'%s', '%s', '%s', 0, now(), now()
				)";

        $input = array($bbs_type, $writer_name, $writer_pw, $email, $subject, $content);
    }

    // SQL구문 실행하기 --> 글 저장 (성공시 게시물의 일련번호가 리턴됨)
    $document_id = db_query($sql, $input);

    if ($document_id === false) {
        redirect(false, '게시물 저장에 실패했습니다. 관리자에게 문의하세요.');
    }

    /* 첨부파일 업로드 처리 */
    // <input type="file"> 요소의 name 속성값을 파라미터로 전달
    $file = do_upload('file');

    // 업로드 된 파일 정보를 저장하기
    if (is_array($file)) {
        // 업로드 된 파일 수 만큼 반복
        for ($i = 0; $i < count($file); ++$i) {
            $sql = "INSERT INTO bbs_file (
                        bbs_document_id, file_name, file_type,
                        file_size, file_path, reg_date, edit_date
                    ) VALUES (
                        %d, '%s', '%s', %d, '%s', now(), now()
                    )";
            // SQL구문에 매 반복시마다 적용될 값.
            $input = array($document_id, $file[$i]['name'],
                        $file[$i]['type'], $file[$i]['size'],
                        $file[$i]['upload_uri'] );

            // 저장한다.
            db_query($sql, $input);
        }
    }

    /* 저장이 완료되었다면 읽기 페이지로 이동한다. */
    // 읽을 대상을 지정해야 하므로, 게시물의 일련번호를
    // GET 파라미터로 전달한다.
    $url = 'read.php?bbs_type=%s&document_id=%d';
    $url = sprintf($url, $bbs_type, $document_id);
    redirect($url, false);
?>
