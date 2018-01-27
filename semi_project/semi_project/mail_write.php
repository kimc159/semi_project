<? header('Content-Type: text/html; charset=UTF-8'); ?>
<!doctype html>
<html>
<head>
    <? include_once 'inc/head.php'; ?>
    <!-- jQuery 플러그인 참조 -->
    <script src="http://cdn.ckeditor.com/4.4.7/standard/ckeditor.js"></script>
</head>

<body>
	<div class="container">
		<!-- 제목 -->
		<div class="page-header">
			<h1>PHP 메일 발송 연습</h1>
		</div>
		<!--// 제목 -->

		<!-- 메일 폼 영역 시작 -->
		<form class="form-horizontal" method="post" action="mail_send.php">
			<div class="form-group">
                <label class="control-label col-sm-2" for="sender">
                    보내는주소</label>
                <div class="col-sm-10">
                    <input type="text" name="sender" id="sender" 
                        class="form-control" placeholder="보내는 분의 이메일 주소를 입력하세요."/>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="sender_name">
                    보내는 사람 이름</label>
                <div class="col-sm-10">
                    <input type="text" name="sender_name" id="sender_name" 
                        class="form-control" placeholder="보내는 분의 이름을 입력하세요."/>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="receiver">
                    받는주소</label>
                <div class="col-sm-10">
                    <input type="text" name="receiver" id="receiver" 
                        class="form-control" placeholder="받는 분의 이메일 주소를 입력하세요." />
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="receiver_name">
                    받는사람 이름</label>
                <div class="col-sm-10">
                    <input type="text" name="receiver_name" id="receiver_name" 
                        class="form-control" placeholder="받는 분의 이름을 입력하세요." />
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="subject">
                    메일 제목</label>
                <div class="col-sm-10">
                    <input type="text" name="subject" id="subject" class="form-control"
                        placeholder="이메일의 제목을 입력하세요." />
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="content">
                    내용입력</label>
                <div class="col-sm-10">
                    <textarea name="content" id="content" class="ckeditor" ></textarea>
                </div>
            </div>

            <div class="col-sm-10 col-sm-offset-2 text-right">
                <input type="submit" class="btn btn-primary" value="메일보내기" />
                <input type="reset" class="btn btn-default" value="다시작성" />
            </div>
		</form>
		<!--// 메일 폼 영역 끝 -->

	</div>
</body>

</html>
