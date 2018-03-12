<?php /* Template_ 2.2.8 2018/01/09 00:50:30 C:\phpuser\semi_project\_template\location.html 000002569 */ ?>
<!DOCTYPE html>
<html>
<head>
<?php $this->print_("head",$TPL_SCP,1);?>

    <link rel="stylesheet" type="text/css" href="css/company.css">
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
                <li class="page_nav_li"><a href="#">COMPANY
                    <ul class="lnb">
                        <li class="lnb_list"><a href="">PRODUCT</a></li>
                        <li class="lnb_list"><a href="">COMMUNITY</a></li>
                        <li class="lnb_list"><a href="">STORE</a></li>
                        <li class="lnb_list"><a href="">SERVICE CENTER</a></li>
                        <li class="lnb_list"><a href="">COMPANY</a></li>
                    </ul>
                </a></li>
                <li class="page_nav_li"><a href="#">기업정보
                    <ul class="lnb">
                        <li class="lnb_list"><a href="">기업정보</a></li>
                        <li class="lnb_list"><a href="">브랜드스토리</a></li>
                        <li class="lnb_list"><a href="">사이버 홍보실</a></li>
                        <li class="lnb_list"><a href="">찾아오시는길</a></li>
                    </ul>
                </a></li>
            </ul>--
        </div>
    </div>
    <div class="company_wrap" style="height: 700px;">
    	<div class="company_info">
    		<h1>위치정보</h1>
    		<hr>
            <br>
            <div id="map" style="width:100%;height:500px"></div>
    	</div>
    </div>
<?php $this->print_("footer",$TPL_SCP,1);?>

    <script type="text/javascript">
    function myMap() {
      var myCenter = new google.maps.LatLng(37.5790910, 126.8934150);
      var mapCanvas = document.getElementById("map");
      var mapOptions = {center: myCenter, zoom: 18};
      var map = new google.maps.Map(mapCanvas, mapOptions);
      var marker = new google.maps.Marker({position:myCenter});
      marker.setMap(map);
    }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB81qPRMRzX8t02IqIZNUeo845Ad5BnIhQ&callback=myMap"></script>
    <script src="js/company.js?j"></script>
</body>
</html>