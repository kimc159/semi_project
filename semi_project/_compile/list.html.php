<?php /* Template_ 2.2.8 2017/12/07 17:06:53 C:\phpuser\semi_project\_template\list.html 000007127 */ 
$TPL_document_list_1=empty($TPL_VAR["document_list"])||!is_array($TPL_VAR["document_list"])?0:count($TPL_VAR["document_list"]);?>
<!doctype html>
<html>

<head>
<?php $this->print_("head",$TPL_SCP,1);?>

    <link rel="stylesheet" type="text/css" href="css/list.css">
<style>
    td, th {
        border: 1px solid #dddddd;
        border-left: 0px;
        border-right: 0px;
    }
    th{
        text-align: center;
    }
    td{
        color: #666;
    }
    td > a{
        color: #666;
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
                <li class="page_nav_li"><a href="#">COMMUNITY
                    <ul class="lnb">
                        <li class="lnb_list"><a href="">PRODUCT</a></li>
                        <li class="lnb_list"><a href="">COMMUNITY</a></li>
                        <li class="lnb_list"><a href="">STORE</a></li>
                        <li class="lnb_list"><a href="">SERVICE CENTER</a></li>
                        <li class="lnb_list"><a href="">COMPANY</a></li>
                    </ul>
                </a></li>
                <li class="page_nav_li"><a href="#">공지사항
                    <ul class="lnb">
                        <li class="lnb_list"><a href="">공지사항</a></li>
                        <li class="lnb_list"><a href="">뉴스</a></li>
                        <li class="lnb_list"><a href="">이벤트</a></li>
                        <li class="lnb_list"><a href="">생활정보</a></li>
                        <li class="lnb_list"><a href="">대리점 멤버십</a></li>
                    </ul>
                </a></li>
            </ul>
        </div>
    </div>
    <div class="bbs_main">
    	<h1 class="page_header">
    		<?php echo $TPL_VAR["bbs_config"]["name"]?>

    	</h1>
        <hr style="margin-bottom: 50px; border: 1px solid #111;">
        <!-- 글 목록 시작 -->
        <table>
            <thead>
                <tr><th>번호</th><th>제목</th><th>작성자</th><th>조회수</th><th>작성일</th></tr>
            </thead>
            <tbody>
<?php if($TPL_VAR["document_list"]!=FALSE){?>
<?php if($TPL_document_list_1){foreach($TPL_VAR["document_list"] as $TPL_V1){?>
                    <tr>
                        <td style="text-align: center; width: 100px;"><?php echo $TPL_V1["id"]?></td>
                        <td width="700px;"><a href="read.php?bbs_type=<?php echo $TPL_VAR["bbs_config"]["type"]?>&document_id=<?php echo $TPL_V1["id"]?>"><?php echo htmlspecialchars($TPL_V1["subject"])?></a></td>
                        <td style="text-align: center;"><?php echo htmlspecialchars($TPL_V1["writer_name"])?></td>
                        <td style="text-align: center;"><?php echo $TPL_V1["hit"]?></td>
                        <td style="text-align: center;"><?php echo substr($TPL_V1["reg_date"], 0, 10)?></td>
                    </tr>
<?php }}?>
<?php }else{?>
                <tr>
                    <td colspan="5">조회된 글이 없습니다.</td>
                </tr>
<?php }?>
            </tbody>
        </table>
        <div class="search_wrap">
            <form method="get" action="list.php" style="width: 400px;">
                <div class="input_wrap" style="margin-top: 10px;">
                    <input type="hidden" name="bbs_type" value="<?php echo $TPL_VAR["bbs_config"]["type"]?>">
                    <input type="text" name="keyword" value="<?php echo $TPL_VAR["keyword"]?>" placeholder="제목, 내용 검색" style="padding: 3px;">
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
    	<div class="write">
    		<a href="write.php?bbs_type=<?php echo $TPL_VAR["bbs_config"]["type"]?>" class="write_now" style>
    		글쓰기
    		</a>
    	</div>
    </div>
<?php $this->print_("footer",$TPL_SCP,1);?>

<script>
    $(function(){
        $(".pagination > li").click(function(){ 
            $(this).addClass(".active");
            $(this).not(this).removeClass('.active');
        });
        $('.page_nav_li').hover(function(){
        console.log('hover in');
        $(this).find('.lnb').css('display','block');
    },function(){
        $(this).find('.lnb').css('display','none');
    });
     /*헤더 스크롤 */
    $(window).scroll(function(){
        if($('.page_path').hasClass('m_gnb2')== false){
            var offset = $('.page_path').offset();
            if($(document).scrollTop() > offset.top){
                $('.page_path').addClass('m_gnb2');
            }
        }else{
            if($(document).scrollTop() < 445){
                $('.page_path').removeClass('m_gnb2');
                
            }
        }
    });
    });
</script>
</body>

</html>