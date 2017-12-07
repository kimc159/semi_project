<?php /* Template_ 2.2.8 2017/12/07 17:36:33 C:\phpuser\semi_project\_template\write.html 000002651 */ ?>
<!doctype html>
<html>

<head>
<?php $this->print_("head",$TPL_SCP,1);?>

    <link rel="stylesheet" type="text/css" href="css/list.css">
    <link rel="stylesheet" type="text/css" href="css/write.css">
</head>

<body>
<?php $this->print_("topbar",$TPL_SCP,1);?>

    <div class="bbs_main">
    	<h1 class="page_header">
    		<?php echo $TPL_VAR["bbs_config"]["name"]?> <small>새 글 쓰기</small>
    	</h1>
    	<hr>
    	<form class="new_write" method="post" action="write_ok.php" enctype="multipart/form-data">
            <input type="hidden" name="bbs_type" value="<?php echo $TPL_VAR["bbs_config"]["type"]?>">
<?php if($TPL_VAR["member_info"]===false){?>
            <div class="form-group">
                <label for="writer_name">작성자</label>
                <div>
                    <input type="text" name="writer_name" id="writer_name">
                </div>
            </div>
            <div class="form-group">
                <label for="writer_pw">비밀번호</label>
                <div>
                    <input type="password" name="writer_pw" id="writer_pw">
                </div>
            </div>
            <div class="form-group">
                <label for="email">이메일</label>
                <div>
                    <input type="email" name="email" id="email">
                </div>
            </div>
<?php }?>
            <div class="form-group">
                <label for="subject">제목</label>
                <div>
                    <input type="text" name="subject" id="subject">
                </div>
            </div>
            <div class="form-group content_wrap">
                <label for="content" class="content">내용</label>
                <div>
                    <textarea name="content" id="content" class="ckeditor" style="height: 300px;"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="file">파일첨부</label>
                <div>
                    <input type="file" name="file[]" id="file" multiple>
                </div>
            </div>
            <div class="form-group">
                <div class="submit_wrap">
                    <button type="submit">저장하기</button>
                    <button type="button" onclick="history.back();">작성취소</button>
                </div>
            </div>
        </form>
    </div>
<?php $this->print_("footer",$TPL_SCP,1);?>


</body>

</html>