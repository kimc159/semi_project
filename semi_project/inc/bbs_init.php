<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php
	include_once 'init.php';

	/* 각 게시물을 구분할 수 있는 파라미터 받기 */
	$bbs_type = get('bbs_type', false);

	/* GET방식으로 전달된 값이 없다면 POST로 시도*/
	if($bbs_type === false){
		$bbs_type = post('bbs_type', false);
	}

	/* 값이 없다면 정상적인 접근이 아님 */
	if($bbs_type === false){
		redirect($home_url, '게시판 종류가 지정되지 않았습니다.');
	}

	/* 게시판 종류에 따른 이름 설정하기 */
	$bbs_name = '';
	switch($bbs_type){
		case 'notice':
		$bbs_name = '공지사항';
		break;
		case 'qna':
		$bbs_name = '문의하기';
		break;
		case 'event':
		$bbs_name = '이벤트';
		break;
		case 'info':
		$bbs_name = '생활정보';
		break;
		case 'great':
		$bbs_name = '우수매장';
		break;
	}

	/* 생성된 변수값을 template에 전달 */
	$bbs_config = array('name' => $bbs_name, 'type' => $bbs_type);
	
	$tpl->assign('bbs_config', $bbs_config)
?>