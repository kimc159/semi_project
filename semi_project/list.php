<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php
	include_once 'inc/bbs_init.php';
	
	$bbs_type = get('bbs_type', false);
	/* 검색구문 만들기 */
	$where = "bbs_type='%s'";
	$input = array($bbs_type);
	/*검색어가 존재한다면, 검색구문 추가*/
	$keyword = get('keyword', false);

	if($keyword !== false){
		$where .= "AND (subject LIKE '%%%s%%' OR content LIKE '%%%s%%')";
		//subject와 content 두개 검사해야하니 input 배열에 두번 넣는다.
		$input[] = $keyword; // 배열에 데이터 추가
		$input[] = $keyword; // 배열에데이터 추가
	}
	/*페이지 구현*/
	$now_page = get('page',1);//현재 페이지수
	$list_count = 10;	// 한 페이지에 보여질 목록수
	$group_count = 5;	// 한 번에 표시될 페이지 번호 그룹 수
	if($bbs_type == 'event' || $bbs_type == 'great'){
		$list_count = 6;	// 한 페이지에 보여질 목록수
		$group_count = 3;	// 한 번에 표시될 페이지 번호 그룹 수
	}
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

	/*갤러리 형태의 게시판*/
	if($bbs_type == 'event' || $bbs_type == 'great'){
		for($i=0; $i<count($document_list); $i++){
			$document_id = $document_list[$i]['id'];


			/*$i 번째 게시물에 해당되는 이미지 형식의 첫 번째 첨부파일을 가져온다.*/
			/*파일중에서 image로 저장되는것만 불러옴*/
			$sql = "SELECT file_path FROM bbs_file WHERE bbs_document_id=%d AND LEFT(file_type, 5)='image' ORDER BY id ASC LIMIT 0,1";
			$file = db_query($sql, array($document_id));

			if($file !== FALSE && count($file) > 0){
				/*데이터가 있으면 썸네일 이미지 생성하기*/
				/*조회된 경로 C:\phpuser\semi_project\files\20171211/1512956242_1327.png*/
				$file_path = $file[0]['file_path'];

				/*경로에서 파일명과 파일이 저장된 폴더를 분리한다.*/
				$p = strrpos($file_path, '/');
				$file_name = substr($file_path, $p+1); // 1512956242_1327.png
				$file_dir = substr($file_path, 0, $p);//파일 경로 디렉토리
				// 썸네일이 저장될 파일 경로를 생성
				$thumbnail = $file_dir.'/thumb_'.$file_name;

				// 섬네일 이미지 만들기
				image_crop($document_root.$file_path, $document_root.$thumbnail, 480, 320);

				//생성된 썸네일 이미지를 게시물 목록에 추가한다.
				$document_list[$i]['thumbnail'] = $thumbnail;
			}
		}
	}

	$tpl->assign('document_list', $document_list);
	$tpl->assign('total_count', $total_count);
	$tpl->assign('keyword', $keyword);
	$tpl->assign('page_info', $page_info);
	$tpl->assign('bbs_type', $bbs_type);
	$skin = '';
	if($bbs_type == 'event' || $bbs_type == 'great'){
		$skin = 'event.html';
	}else{
		$skin = 'list.html';
	}
	$tpl->define('body',  $skin);

	$tpl->print_('body');
?>