<?php /* Template_ 2.2.8 2017/02/11 13:56:34 C:\phpuser\source\_template\member\join.html 000003588 */ ?>
<!doctype html>
<html>
<head>
<?php $this->print_("head",$TPL_SCP,1);?>

</head>

<body>
<?php $this->print_("topbar",$TPL_SCP,1);?>

<div class='container'>
    <div class='page-header'>
        <h1>회원가입</h1>
    </div>
    <!-- 가입폼 시작 -->
    <form class="form-horizontal" name="myform" method="post" action="join_ok.php">

        <div class="form-group">
            <label for='user_id' class="col-md-2">아이디</label>
            <div class="col-md-10">
                <input type="text" name="user_id" id="user_id"
                       class="form-control"/>
            </div>
        </div>

        <div class="form-group">
            <label for='user_pw' class="col-md-2">비밀번호</label>
            <div class="col-md-10">
                <input type="password" name="user_pw" id="user_pw"
                       class="form-control"/>
            </div>
        </div>

        <div class="form-group">
            <label for='user_pw' class="col-md-2">비밀번호 확인</label>
            <div class="col-md-10">
                <input type="password" name="user_pw_re" id="user_pw_re"
                       class="form-control"/>
            </div>
        </div>

        <div class="form-group">
            <label for='user_name' class="col-md-2">이름</label>
            <div class="col-md-10">
                <input type="text" name="user_name" id="user_name"
                       class="form-control"/>
            </div>
        </div>

        <div class="form-group">
            <label for='email' class="col-md-2">이메일</label>
            <div class="col-md-10">
                <input type="email" name="email" id="email" class="form-control"/>
            </div>
        </div>

        <div class="form-group">
            <label for='tel' class="col-md-2">연락처</label>
            <div class="col-md-10">
                <input type="tel" name="tel" id="tel" class="form-control"/>
            </div>
        </div>

        <div class="form-group">
            <label for='postcode' class="col-md-2">우편번호</label>
            <div class="col-md-10 clearfix">
                <input type="text" name="postcode" id="postcode"
                       class="form-control pull-left"
                       style='width: 100px; margin-right: 5px'/>
                <!-- 클릭 시, Javascript 함수 호출 : openDaumPostcode() -->
                <input type='button' value='우편번호 찾기'
                       class='btn btn-warning' onclick='daumPostCode()'/>
            </div>
        </div>

        <div class="form-group">
            <label for='addr1' class="col-md-2">주소</label>
            <div class="col-md-10">
                <input type="text" name="addr1" id="addr1" class="form-control"/>
            </div>
        </div>

        <div class="form-group">
            <label for='addr2' class="col-md-2">상세주소</label>
            <div class="col-md-10">
                <input type="text" name="addr2" id="addr2" class="form-control"/>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
                <button type="submit" class="btn btn-primary">가입하기</button>
                <button type="reset" class="btn btn-danger">다시작성</button>
            </div>
        </div>
    </form>
    <!-- 가입폼 끝 -->
</div>
<?php $this->print_("footer",$TPL_SCP,1);?>

</body>
</html>