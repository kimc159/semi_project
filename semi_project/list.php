<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php
	include_once 'inc/bbs_init.php';

	/* 검색구문 만들기 */
	$where = "bbs_type='%s'";
	$input = array($bbs_type);
	/*검색어가 존재한다면, 검색구문 추가*/
	$keyword = get('keyword', false);

	if($keyword !== false){
		$where .= "AND (subject LIKE '%%%s%%' OR content LIKE '%%%s%%')";
		//subject와 content 두개 검사해야하니 input 배열에 두번 넣는다.
		$input[] = $keyword; //배열에 데이터 추가
		$input[] = $keyword; // 배열에데이터 추가
	}
	/*페이지 구현*/
	$now_page = get('page',1);//현재 페이지수
	$list_count = 10;	// 한 페이지에 보여질 목록수
	$group_count = 5;	// 한 번에 표시될 페이지 번호 그룹 수

	/*게시물 수 가져오기*/
	$sql = 'SELECT COUNT(id) `cnt` FROM bbs_document WHERE '.$where;
	$document_count = db_query($sql, $input);
	if($document_count === false){
		redirect(false, '게시물 수 조회에 실패했습니다.');
	}
	$total_count = $document_count[0]['cnt'];

	/*페이지 계산*/
	$page_info = get_page_info($total_count, $now_page, $list_count, $group_count);

	/*게시물 목록 가져오기*/
	$sql = "SELECT id, subject, writer_name, hit, reg_date FROM bbs_document WHERE ".$where." ORDER BY id DESC LIMIT %d, %d";
	$input[] = $page_info['offset'];
	$input[] = $page_info['list_count'];

	$document_list = db_query($sql, $input);

	if($document_list === false){
		redirect(false, '게시물 목록 조회에 실패했습니다.');
	}

	$tpl->assign('document_list', $document_list);
	$tpl->assign('keyword', $keyword);
	$tpl->assign('page_info', $page_info);

	$tpl->define('body', 'list.html');

	$tpl->print_('body');
?>