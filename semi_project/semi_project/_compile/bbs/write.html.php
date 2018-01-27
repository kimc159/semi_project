<?php /* Template_ 2.2.8 2017/03/07 15:47:28 C:\phpuser\source\_template\bbs\write.html 000003505 */ ?>
<!doctype html>
<html>
<head>
<?php $this->print_("head",$TPL_SCP,1);?>

</head>

<body>
<?php $this->print_("topbar",$TPL_SCP,1);?>

    <div class="container">

        <h1 class="page-header">
            <?php echo $TPL_VAR["bbs_config"]["name"]?> <small>새 글 쓰기</small>
        </h1>

        <form class="form-horizontal" method="post" action="write_ok.php" enctype="multipart/form-data">

            <!-- 게시판 구분값의 상태유지 처리 -->
            <input type="hidden" name="bbs_type" value="<?php echo $TPL_VAR["bbs_config"]["type"]?>" />

<?php if($TPL_VAR["member_info"]===FALSE){?>
            <!-- 작성자 -->
            <div class="form-group">
                <label for="writer_name" class="col-sm-2 control-label">
                    작성자</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="writer_name" 
                        name="writer_name">
                </div>
            </div>
            <!-- 비밀번호 -->
            <div class="form-group">
                <label for="writer_pw" class="col-sm-2 control-label">
                    비밀번호</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="writer_pw" 
                        name="writer_pw">
                </div>
            </div>
            <!-- 이메일 -->
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">
                    이메일</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" 
                        name="email">
                </div>
            </div>
<?php }?>

            <!-- 제목 -->
            <div class="form-group">
                <label for="subject" class="col-sm-2 control-label">
                    제목</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="subject" 
                        name="subject">
                </div>
            </div>
            <!-- 내용 -->
            <div class="form-group">
                <label for="content" class="col-sm-2 control-label">
                    내용</label>
                <div class="col-sm-10">
                    <textarea id="content" name="content" class="ckeditor" 
                        style="height: 300px"></textarea>
                </div>
            </div>
            <!-- 파일업로드 -->
            <div class="form-group">
                <label for="file" class="col-sm-2 control-label">
                    파일첨부</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="file" 
                        name="file[]" multiple>
                </div>
            </div>
            <!-- 버튼들 -->
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">
                        저장하기</button>
                    <button type="button" class="btn btn-danger" 
                        onclick="history.back();">작성취소</button>
                </div>
            </div>
        </form>

    </div>
<?php $this->print_("footer",$TPL_SCP,1);?>

</body>
</html>