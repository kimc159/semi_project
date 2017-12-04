<?php /* Template_ 2.2.8 2017/03/07 15:47:26 C:\phpuser\source\_template\bbs\read.html 000003456 */ 
$TPL_file_list_1=empty($TPL_VAR["file_list"])||!is_array($TPL_VAR["file_list"])?0:count($TPL_VAR["file_list"]);?>
<!doctype html>
<html>
<head>
<?php $this->print_("head",$TPL_SCP,1);?>

</head>

<body>
<?php $this->print_("topbar",$TPL_SCP,1);?>

	<div class="container">
		<h1 class="page-header">
			<?php echo $TPL_VAR["bbs_config"]["name"]?> <small>글 읽기</small>
		</h1>

		<!-- 제목, 작성자, 작성일시, 조회수 -->
		<div class="alert alert-info" role="alert">
			<h3 style='margin: 0'>
		    	<?php echo $TPL_VAR["document"]["subject"]?><br/>
		        <small>
		            <?php echo $TPL_VAR["document"]["writer_name"]?>

		            <a href='#'><i class='glyphicon glyphicon-envelope'></i></a>
		            / 조회수 : <?php echo $TPL_VAR["document"]["hit"]?> / 작성일시 : <?php echo $TPL_VAR["document"]["reg_date"]?>

		        </small>
		    </h3>
		</div>

		<!-- 첨부파일 목록 -->
<?php if($TPL_file_list_1> 0){?>
		<table class='table table-bordered'>
			<tbody>
				<tr>
					<th class='warning' style='width: 100px'>첨부파일</th>
					<td>
<?php if($TPL_file_list_1){foreach($TPL_VAR["file_list"] as $TPL_V1){?>
						<a href="download.php?bbs_type=<?php echo $TPL_VAR["bbs_config"]["type"]?>&file_id=<?php echo $TPL_V1["id"]?>" class='btn btn-link btn-xs'><?php echo $TPL_V1["file_name"]?></a>
<?php }}?>
					</td>
				</tr>
			</tbody>
		</table>
<?php }?>

		<!-- 내용 -->
		<section style='padding: 0 10px 20px 10px'>
			<?php echo $TPL_VAR["document"]["content"]?>

		</section>

		<!-- 이전, 다음글 -->
		<table class='table table-bordered'>
			<tbody>
				<tr>
					<th class='warning' style='width: 100px'>다음글</th>
					<td>
<?php if($TPL_VAR["next_document"]!==FALSE){?>
						<a href="read.php?bbs_type=<?php echo $TPL_VAR["bbs_config"]["type"]?>&document_id=<?php echo $TPL_VAR["next_document"]["id"]?>"><?php echo $TPL_VAR["next_document"]["subject"]?></a>
<?php }else{?>
						다음 글이 없습니다.
<?php }?>
					</td>
				</tr>
				<tr>
					<th class='warning' style='width: 100px'>이전글</th>
					<td>
<?php if($TPL_VAR["prev_document"]!==FALSE){?>
						<a href="read.php?bbs_type=<?php echo $TPL_VAR["bbs_config"]["type"]?>&document_id=<?php echo $TPL_VAR["prev_document"]["id"]?>"><?php echo $TPL_VAR["prev_document"]["subject"]?></a>
<?php }else{?>
						이전 글이 없습니다.
<?php }?>
					</td>
				</tr>
			</tbody>
		</table>


		<!-- 버튼들 -->
		<div class='clearfix'>
			<div class='pull-right'>
				<a href='list.php?bbs_type=<?php echo $TPL_VAR["bbs_config"]["type"]?>' class='btn btn-info'>목록보기</a>
				<a href='write.php?bbs_type=<?php echo $TPL_VAR["bbs_config"]["type"]?>' class='btn btn-primary'>글쓰기</a>

				<!-- 수정 대상을 지정하기 위하여 게시물 일련번호를 전달한다. -->
				<a href='edit.php?bbs_type=<?php echo $TPL_VAR["bbs_config"]["type"]?>&document_id=<?php echo $TPL_VAR["document"]["id"]?>' class='btn btn-warning'>수정하기</a>

				<!-- 삭제 대상을 지정하기 위하여 게시물 일련번호를 전달한다. -->
				<a href='delete.php?bbs_type=<?php echo $TPL_VAR["bbs_config"]["type"]?>&document_id=<?php echo $TPL_VAR["document"]["id"]?>' class='btn btn-danger'>삭제하기</a>
			</div>
		</div>

	</div>
<?php $this->print_("footer",$TPL_SCP,1);?>

</body>
</html>