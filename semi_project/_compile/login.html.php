<?php /* Template_ 2.2.8 2018/03/12 05:09:21 C:\phpuser\semi_project\_template\login.html 000009576 */ ?>
<!DOCTYPE html>
<html>
<head>
<?php $this->print_("head",$TPL_SCP,1);?>

	<link rel="stylesheet" type="text/css" href="css/login.css">
<style type="text/css">
	.find_id> a, .find_pw>a{
		color: #111;
	}
    .div_wrap{
        position: fixed;left: 50%;top: 50%; width: 450px; height: 400px; margin-left: -226px; margin-top: -200px; border: 1px solid #ccc; text-align: center; background-color: #fff;
        z-index:200;display: none;
    }
    .div_wrap2{
        position: fixed;left: 50%;top: 50%; width: 450px; height: 450px; margin-left: -226px; margin-top: -200px; border: 1px solid #ccc; text-align: center; background-color: #fff;
        z-index:200;display: none;
    }
    #find_form2 > h3{
        font-size: 25px;
        color: #8a8a8a;
    }
    #find_form > h3{
        padding-top: 30px;
        font-size: 25px;
        color: #8a8a8a;
    }
    .find_user_wrap{
        width: 90%;
        margin: 10px;
        padding: 10px;
        border: 1px solid #ccc;
        margin-left: 15px;
    }
    #find_form > div:nth-child(2){
        margin-top: 50px;
    }

    .find_email{
        width: 90%;
        margin: 10px;
        padding: 10px;
        border: 1px solid #ccc;
        margin-left: 15px;
    }
    .find_user_name, .pass_name{
        width: 85%;
        padding: 10px;
        border: 0; 
        margin-left: 10px;
    }
    .find_user_email, .pass_email, .pass_id{
        width: 85%;
        padding: 10px;
        border: 0
    }
    .sub_btn, .sub_btn2{
        width: 95%;
        height: 55px;
        padding: 10px;
        color: #fff;
        background-color: #111;
        cursor: pointer;
        transition: all 0.3s;
        margin-top: 20px;
    }
</style>
</head>
<body>
<?php $this->print_("topbar",$TPL_SCP,1);?>

	<div class="p_container">
        <div class="p_img">
            <img src="img/sv01.jpg">
        </div>
        <div class="page_path">
            <span class="page_home">
                <img src="img/btn_home.jpg">
            </span>
            <ul class="page_nav">
                <li class="page_nav_li"><a href="#">STORE
                    <ul class="lnb">
                        <li class="lnb_list"><a href="">PRODUCT</a></li>
                        <li class="lnb_list"><a href="">COMMUNITY</a></li>
                        <li class="lnb_list"><a href="">STORE</a></li>
                        <li class="lnb_list"><a href="">SERVICE CENTER</a></li>
                        <li class="lnb_list"><a href="">COMPANY</a></li>
                    </ul>
                </a></li>
                <li class="page_nav_li"><a href="#">매장찾기
                    <ul class="lnb">
                        <li class="lnb_list"><a href="">매장찾기</a></li>
                        <li class="lnb_list"><a href="">우수매장</a></li>
                        <li class="lnb_list"><a href="">대리점 개설안내</a></li>
                        <li class="lnb_list"><a href="">대리점 개설문의</a></li>
                    </ul>
                </a></li>
            </ul>
        </div>
    </div>
    <div class="login_text">
    	<p></p>
    	<hr>
    	<p>로그인</p>
    	<p>알레르망, 홈페이지에 오신 것을 환영합니다.</p>
    </div>
	<form action="<?php echo $TPL_VAR["home_url"]?>/login_ok.php" method="post">
		<div class="login">
			<h3>MEMBER LOGIN</h3>
			<fieldset class="login_wrap">
				<legend>회원 로그인</legend>
				<div class="id">
					<span>ID</span>
					<input type="text" name="member_id" placeholder="아이디">
				</div>
				<div class="pw">
					<span>pw</span>
					<input type="password" name="member_pw" placeholder="비밀번호">
				</div>
				<button type="submit" class="login_btn">LOGIN</button>
				<ul class="find_wrap clearfix">
					<li class="find_id_wrap fl"><a href="#" id="find_id">아이디찾기</a></li>
					<li class="find_pw fl"><a href="<?php echo $TPL_VAR["home_url"]?>/password_reset.php" class="pass_btn">&nbsp;비밀번호찾기</a></li>
				</ul>
				<p class="link">
					<a class="join_btn" href="<?php echo $TPL_VAR["home_url"]?>/register.php">JOIN</a>
				</p>
			</fieldset>
		</div>
	</form>
    <div class="back_black" style="position: fixed; left: 0; top: 0; width: 100%; height: 100%;
        background-color: black; z-index: 100; opacity: 0.6;display: none;"></div>
    <div class="div_wrap">
        <form action="<?php echo $TPL_VAR["home_url"]?>/id_find.php"  method="post" id="find_form2" style="margin-top: 50px;">
            <h3>ID 찾기</h3>
            <div class="find_user_wrap">
                <span>이름</span>
                <input type="text" name="find_user_name" class="find_user_name" placeholder="이름을 입력하세요." style="    ">
            </div>
            <div class="find_email">
                <span>이메일</span>
                <input type="text" name="find_user_email" class="find_user_email" placeholder="이메일을 입력하세요.">
            </div>
            <button type="submit" class="sub_btn">확인</button>
        </form>
    </div>
    <div class="div_wrap2">
        <form action="<?php echo $TPL_VAR["home_url"]?>/pass_find.php"  method="post" id="find_form">
            <h3>비밀번호 찾기</h3>
            <div class="find_user_wrap">
                <span>아이디</span>
                <input type="text" name="pass_id" class="pass_id" placeholder="아이디를 입력하세요." style="">
            </div>
            <div class="find_user_wrap">
                <span>이름</span>
                <input type="text" name="pass_name" class="pass_name" placeholder="이름을 입력하세요." style="">
            </div>
            <div class="find_email">
                <span>이메일</span>
                <input type="text" name="pass_email" class="pass_email" placeholder="이메일을 입력하세요.">
            </div>
            <button type="submit" class="sub_btn2">확인</button>
        </form>
    </div>
<?php $this->print_("footer",$TPL_SCP,1);?>

    <script type="text/javascript">
        $(function(){
            $("#find_id").click(function(e){
                e.preventDefault();
                $(".div_wrap").css("display","block");
                $(".back_black").css("display","block");
                console.log("find id in");
            });
            $(".pass_btn").click(function(e){
                e.preventDefault();
                $(".div_wrap2").css("display","block");
                $(".back_black").css("display","block");
            })
            $(".sub_btn").click(function(e){
                e.preventDefault();                 
                $.ajax({
                    type: 'post',
                    dataType: 'json',
                    url: '<?php echo $TPL_VAR["home_url"]?>/find_id.php',
                    data: {user_name: $('.find_user_name').val(),
                            user_email : $('.find_user_email').val()},
         
                    success: function (json) {
                        console.log(json);
                        console.log(json.user_id);
                        console.log(json['user_id']);
                        alert(json.user_name +"님의 아이디는 " + json.user_id + "입니다.");
                        $(".div_wrap").css("display","none");
                        $(".back_black").css("display","none");
                        $(".find_user_name").val("");
                        $(".find_user_email").val("");
                    },
         
                    error: function(request,status,error){
                      console.log('failed');
                     alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
                    }
                })
            });
            $(".sub_btn2").click(function(e){
                e.preventDefault();                 
                $.ajax({
                    type: 'post',
                    dataType: 'json',
                    url: '<?php echo $TPL_VAR["home_url"]?>/pass_find.php',
                    data: {user_name: $('.pass_name').val(),
                            user_email : $('.pass_email').val(),user_id : $('.pass_id').val()},
         
                    success: function (json) {
                        console.log(json);
                        console.log(json.user_id);
                        console.log(json['user_id']);
                        alert(json.user_name +"님의 아이디는 " + json.user_id + "입니다.");
                        $(".div_wrap2").css("display","none");
                        $(".back_black").css("display","none");
                    },
         
                    error: function(request,status,error){
                      console.log('failed');
                     alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
                    }
                })
            });
            $(".back_black").click(function(){
                $(".div_wrap").css("display","none");
                $(".div_wrap2").css("display","none");
                $(this).css("display","none");
            })
        });
    </script>
</body>
</html>