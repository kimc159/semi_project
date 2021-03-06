<?php /* Template_ 2.2.8 2018/01/03 17:37:18 C:\phpuser\semi_project\_template\store3.html 000005630 */ ?>
<!DOCTYPE html>
<html>
<head>
<?php $this->print_("head",$TPL_SCP,1);?>

    <link rel="stylesheet" type="text/css" href="css/store.css">
    <link rel="stylesheet" type="text/css" href="css/store3.css?cs">
<style type="text/css">
.find_store{
    width: 1100px;
    height: 100px;
    margin: 50px auto;
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
                <li class="page_nav_li"><a href="#">대리점 개설안내
                    <ul class="lnb">
                        <li class="lnb_list"><a href="">매장찾기</a></li>
                        <li class="lnb_list"><a href="">우수매장</a></li>
                        <li class="lnb_list"><a href="">대리점 개설안내</a></li>
                        <li class="lnb_list"><a href="">대리점 개설문의</a></li>
                    </ul>
                </a></li>
            </ul>
        </div>
        <div class="content">
            <div class="content_text clearfix">
                <h1 class="fl">대리점 개설문의</h1>
                <div class="area2 fr">
                    <ul class="clearfix">
                        <li class="fr">> 대리점 개설문의</li>
                        <li class="fr">&nbsp;> STORE&nbsp;</li>
                        <li class="fr">home</li>
                    </ul>
                </div>
            </div>
            <form class="frm3" action="<?php echo $TPL_VAR["home_url"]?>/"  method="post">
                <table width="100%" cellpadding="0" cellspacing="0">
                    <tbody>
                        <tr>
                            <th>작성자<img src="img/ico.png" alt="필수"></th>
                            <td class="name_wrap"><input type="text" class="form-control" id="name" name="name">
                            <span class="id_check"></span></td>
                        </tr>
                        <tr>
                            <th>전화번호<img src="img/ico.png" alt="필수"></th>
                            <td class="phone_wrap"><input type="password" class="form-control" id="phone" name="phone">
                            <span class="pw_check"></span></td>
                        </tr>
                        <tr>
                            <th>Email<img src="img/ico.png" alt="필수"></th>
                            <td class="email_wrap"><input type="text" name="email" id="email" class="email form-control"/></td>
                        </tr>
                        <tr>
                            <th>우편번호<img src="img/ico.png" alt="필수"></th>
                            <td class="pc_wrap"><input type="text" name="postcode" id="postcode"
                               class="form-control"/>
                        <!-- 클릭 시, Javascript 함수 호출 : openDaumPostcode() -->
                            <input type='button' value='우편번호 찾기' class='btn btn-warning post' onclick='daumPostCode()'/></td>
                        </tr>
                        <tr>
                            <th>주소<img src="img/ico.png" alt="필수"></th>
                            <td><input type="text" name="addr1" id="addr1" class="form-control"/></td>
                        </tr>
                        <tr>
                            <th>상세주소<img src="img/ico.png" alt="필수"></th>
                            <td><input type="text" name="addr2" id="addr2" class="form-control"/></td>
                        </tr>
                        <tr>
                            <th>희망지역<img src="img/ico.png" alt="필수"></th>
                            <td><input type="text" name="addr2" id="addr2" class="form-control"/></td>
                        </tr>
                        <tr>
                            <th>문의내용<img src="img/ico.png" alt="필수"></th>
                            <td class="textarea_wrap">
                                <textarea class="form-control" rows="5"  placeholder="문의할 내용 입력하세요."></textarea>
                            </td>
                        </tr>
                        <hr>
                        <tr>
                            <th></th>
                            <th>
                                <button type="button" class="btn btn-default btn_register">문의</button>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>

    </div>
<?php $this->print_("footer",$TPL_SCP,1);?>

    <script src="js/store.js?js"></script>
</body>
</html>