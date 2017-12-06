<?php /* Template_ 2.2.8 2017/11/23 10:22:53 C:\phpuser\source\_template\common\topbar.html 000003385 */ ?>
<!-- 메뉴바 -->
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <!-- 로고 영역 -->
        <div class="navbar-header">
            <!-- 반응형 메뉴 버튼 -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- 로고 -->
            <a class="navbar-brand" href="<?php echo $TPL_VAR["home_url"]?>">My Site</a>
        </div>
        <!-- 메뉴+로그인 폼 영역 -->
        <div class="navbar-collapse collapse">
            <!-- 사이트 메뉴 -->
            <ul class="nav navbar-nav">
                <li><a href="<?php echo $TPL_VAR["home_url"]?>/bbs/list.php?bbs_type=notice">공지사항</a></li>
                <li><a href="<?php echo $TPL_VAR["home_url"]?>/bbs/list.php?bbs_type=free">자유게시판</a></li>
                <li><a href="<?php echo $TPL_VAR["home_url"]?>/bbs/list.php?bbs_type=qna">문의하기</a></li>
            </ul>
            <!--// 사이트 메뉴 -->

<?php if($TPL_VAR["member_info"]===FALSE){?>
            <!-- 로그인 폼(메뉴 우측) -->
            <form class="navbar-form navbar-right" method="post" action="<?php echo $TPL_VAR["home_url"]?>/member/login_ok.php">
                <div class="form-group">
                    <input type="text" name="user_id" placeholder="User Id" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" name="user_pw" placeholder="Password" class="form-control">
                </div>
                <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-user"></i></button>
                <a href="<?php echo $TPL_VAR["home_url"]?>/member/join.php" class="btn btn-warning"><i
                        class="glyphicon glyphicon-plus"></i></a>
                <a href="<?php echo $TPL_VAR["home_url"]?>/member/password_reset.php" class="btn btn-info"><i
                        class="glyphicon glyphicon-search"></i></a>
            </form>
<?php }else{?>
            <!-- 로그인 된 경우 -->
            <div class="navbar-right">
                <p class="navbar-text"><?php echo $TPL_VAR["member_info"]["user_name"]?>님</p>
                <!-- 로그아웃 버튼 -->
                <a href="<?php echo $TPL_VAR["home_url"]?>/member/logout.php" class="btn navbar-btn btn-primary">
                    <i class="glyphicon glyphicon-off"></i></a>
                <!-- 회원정보 수정 버튼 -->
                <a href="<?php echo $TPL_VAR["home_url"]?>/member/edit.php" class="btn navbar-btn btn-info">
                    <i class="glyphicon glyphicon glyphicon-edit"></i></a>
                <!-- 회원 탈퇴 버튼 -->
                <a href="<?php echo $TPL_VAR["home_url"]?>/member/out.php" class="btn navbar-btn btn-danger">
                    <i class="glyphicon glyphicon-remove-circle"></i></a>
            </div>
<?php }?>
        </div>
        <!--// 메뉴 영역 -->
    </div>
</div>
<!--// 메뉴바 -->