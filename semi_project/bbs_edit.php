<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php 
	include_once 'inc/init.php';
	include_once 'inc/bbs_init.php';

	/* 게시물 일련번호 받기 */
	$document_id = get('document_id', false);
	if(!$document_id){
		redirect(false ,'게시물 일련번호가 없습니다.');
	}
	/* 게시물 일련번호와 일치하는 본문 데이터 조회하기 */
	 /* 게시물 일련번호와 일치하는 본문 데이터 조회하기 */
    $sql = 'SELECT id, bbs_type, member_id, writer_name, email, subject, 
            content, hit, reg_date, edit_date FROM bbs_document WHERE id=%d';
    $input = array($document_id);

    $document = db_query($sql, $input);

    // SQL 처리 에러인 경우
    if ($document === false) {
        redirect(false, '게시물 읽기에 실패했습니다. 관리자에게 문의 바랍니다.');
    }

    // 조회된 결과가 없는 경우
    if (count($document) < 1) {
        redirect(false, '존재하지 않는 게시물 입니다.');
    }

     /* 첨부파일 데이터 조회하기 */
    $sql = 'SELECT id, bbs_document_id, file_name, file_type, file_size, file_path,
            reg_date, edit_date FROM bbs_file WHERE bbs_document_id=%d';
    $input = array($document_id);

    $file_list = db_query($sql, $input);

    // SQL 처리 에러인 경우.
    // 파일이 업로드 되지 않은 게시물도 있으므로 데이터가 0건인 경우는
    // 에러로 간주하지 않는다.
    if ($file_list === false) {
        redirect(false, '첨부파일 조회에 실패했습니다. 관리자에게 문의 바랍니다.');
    } else if (count($file_list) < 1) {
        $file_list = false;
    }

    $is_mine = FALSE;
    if($member_info !== FALSE){
    	if($document['member_id'] == $member_info['id']){
    		$is_mine = TRUE;
    	}
    }

    $tpl->assign('is_mine', $is_mine);

    $tpl->assign('document', $document);
    $tpl->assign('file_list', $file_list);

	$tpl->define('body', 'bbs_edit.html');

	$tpl->print_('body');
?>