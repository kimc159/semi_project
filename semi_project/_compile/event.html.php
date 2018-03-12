<?php /* Template_ 2.2.8 2018/01/24 16:49:30 C:\phpuser\semi_project\_template\event.html 000004535 */ 
$TPL_document_list_1=empty($TPL_VAR["document_list"])||!is_array($TPL_VAR["document_list"])?0:count($TPL_VAR["document_list"]);?>
<!DOCTYPE html>
<html>
<head>
<?php $this->print_("head",$TPL_SCP,1);?>

<link rel="stylesheet" type="text/css" href="css/event.css?css">
</head>
<body>
<?php $this->print_("topbar",$TPL_SCP,1);?>

<div class="event_wrap">
	<h1><?php echo $TPL_VAR["bbs_config"]["name"]?></h1>

	<!-- 글 목록 시작 -->
	<div class="thumbnail_wrap clearfix">
<?php if(count($TPL_VAR["document_list"])> 0){?>
<?php if($TPL_document_list_1){foreach($TPL_VAR["document_list"] as $TPL_V1){?>
			<div class="thumbnail pull-left">
				<a href="read.php?bbs_type=<?php echo $TPL_VAR["bbs_config"]["type"]?>&document_id=<?php echo $TPL_V1["id"]?>"><img src="<?php echo $TPL_V1["thumbnail"]?>" class="img-responsive"></a>
				<div class="item">
					<h4><?php echo htmlspecialchars($TPL_V1["subject"])?></h4>
					<div><?php echo htmlspecialchars($TPL_V1["writer_name"])?></div>
					<div class="clearfix">
						<div class="pull-left"><?php echo substr($TPL_V1["reg_date"], 0, 10)?></div>
						<div class="pull-right"><?php echo $TPL_V1["hit"]?> view</div>
					</div>
				</div>
            <a href="read.php?bbs_type=<?php echo $TPL_VAR["bbs_config"]["type"]?>&document_id=<?php echo $TPL_V1["id"]?>" class="thum_black"><div class="thum_text">more</div></a>
			</div>
<?php }}?>
<?php }else{?>
		<div>
			<p>조회된 글이 없습니다.</p>
		</div>
<?php }?>
	</div>
	<!-- 페이지 구현 -->
	<div class="search_wrap">
        <form method="get" action="list.php" style="width: 1070px;">
            <div class="input_wrap" style="margin-top: 10px;">
                <input type="hidden" name="bbs_type" value="<?php echo $TPL_VAR["bbs_config"]["type"]?>">
                <input type="text" name="keyword" value="<?php echo $TPL_VAR["keyword"]?>" placeholder="제목, 내용 검색" style="padding: 7px;">
                <span class="search_btn">
                    <button type="submit" style="padding: 2.5px;"><i class="fa fa-search" aria-hidden="true"></i></button>
                </span>
            </div>
        </form>
    </div>
        <nav class="page_container">
            <ul class="pagination clearfix">
                <!-- 이전 페이지 그룹 이동 버튼 -->
<?php if($TPL_VAR["page_info"]["prev_group_last_page"]> 0){?>
                <li class="pull-left">
                    <a href="list.php?bbs_type=<?php echo $TPL_VAR["bbs_config"]["type"]?>&page=<?php echo $TPL_VAR["page_info"]["prev_group_last_page"]?>&keyword=<?php echo urlencode($TPL_VAR["keyword"])?>">
                       이전
                    </a>
                </li>
<?php }else{?>
                <li class="disabled pull-left">
                        <a>이전</a>
                </li>
<?php }?>

                <!-- 페이지 번호 -->
<?php if(is_array($TPL_R1=range($TPL_VAR["page_info"]["group_start"],$TPL_VAR["page_info"]["group_end"]))&&!empty($TPL_R1)){foreach($TPL_R1 as $TPL_V1){?>
<?php if($TPL_V1==$TPL_VAR["page_info"]["now_page"]){?>
                <li class="active pull-left"><a href="#"><?php echo $TPL_V1?></a></li>
<?php }else{?>
                <li class="pull-left"><a href="list.php?bbs_type=<?php echo $TPL_VAR["bbs_config"]["type"]?>&page=<?php echo $TPL_V1?>&keyword=<?php echo urlencode($TPL_VAR["keyword"])?>"><?php echo $TPL_V1?></a></li>
<?php }?>
<?php }}?>

                <!-- 다음 페이지 그룹 이동 버튼 -->
<?php if($TPL_VAR["page_info"]["next_group_first_page"]> 0){?>
                <li class="pull-left">
                    <a href="list.php?bbs_type=<?php echo $TPL_VAR["bbs_config"]["type"]?>&page=<?php echo $TPL_VAR["page_info"]["next_group_first_page"]?>&keyword=<?php echo urlencode($TPL_VAR["keyword"])?>">
                        다음
                    </a>
                </li>
<?php }else{?>
                <li class="disabled pull-left">
                    다음
                </li>
<?php }?>
            </ul>
        </nav>
<?php if($TPL_VAR["member_info"]["user_id"]==='admin'){?>
    	<div class="write">
    		<a href="write.php?bbs_type=<?php echo $TPL_VAR["bbs_config"]["type"]?>" class="write_now" style>
    		글쓰기
    		</a>
    	</div>
<?php }?>
</div>
<?php $this->print_("footer",$TPL_SCP,1);?>


</body>
</html>