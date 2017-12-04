<?php /* Template_ 2.2.8 2017/02/11 13:56:10 C:\phpuser\source\_template\bbs\list.html 000005553 */ 
$TPL_document_list_1=empty($TPL_VAR["document_list"])||!is_array($TPL_VAR["document_list"])?0:count($TPL_VAR["document_list"]);?>
<!doctype html>
<html>

<head>
<?php $this->print_("head",$TPL_SCP,1);?>

</head>

<body>
<?php $this->print_("topbar",$TPL_SCP,1);?>

    <div class="container">
        <h1 class="page-header">
            <?php echo $TPL_VAR["bbs_config"]["name"]?>

        </h1>

        <!-- 글 목록 시작 -->
        <div class="table-responsive">
            <table class='table table-hover'>
                <thead>
                    <tr>
                        <th class='text-center' style='width: 100px'>번호</th>
                        <th class='text-center'>제목</th>
                        <th class='text-center' style='width: 120px'>작성자</th>
                        <th class='text-center' style='width: 100px'>조회수</th>
                        <th class='text-center' style='width: 120px'>작성일</th>
                    </tr>
                </thead>
                <tbody>
<?php if($TPL_VAR["document_list"]!=FALSE){?>
<?php if($TPL_document_list_1){foreach($TPL_VAR["document_list"] as $TPL_V1){?>
                    <tr>
                        <td class='text-center'><?php echo $TPL_V1["id"]?></td>
                        <td><a href='read.php?bbs_type=<?php echo $TPL_VAR["bbs_config"]["type"]?>&document_id=<?php echo $TPL_V1["id"]?>'><?php echo htmlspecialchars($TPL_V1["subject"])?></a></td>
                        <td class='text-center'><?php echo htmlspecialchars($TPL_V1["writer_name"])?></td>
                        <td class='text-center'><?php echo $TPL_V1["hit"]?></td>
                        <td class='text-center'><?php echo substr($TPL_V1["reg_date"], 0, 10)?></td>
                    </tr>
<?php }}?>
<?php }else{?>
                    <!-- 게시글이 없는 경우 -->
                    <tr>
                        <td colspan='5' class='text-center' style='line-height: 100px;'>
                            조회된 글이 없습니다.</td>
                    </tr>
<?php }?>
                </tbody>
            </table>
        </div>
        <!--// 글 목록 끝 -->

        <!-- 검색폼 + 글 쓰기 버튼 -->
        <div class='clearfix'>
            <div class='pull-left'>
                <form method='get' action='list.php' style='width: 200px'>
                    <div class="input-group">
                        <input type="hidden" name="bbs_type" value="<?php echo $TPL_VAR["bbs_config"]["type"]?>" />
                        <input type="text" name='keyword' class="form-control" 
                         placeholder="제목,내용 검색" value="<?php echo $TPL_VAR["keyword"]?>" />
                        <span class="input-group-btn">
                            <button class="btn btn-success" type="submit">
                                <i class='glyphicon glyphicon-search'></i>
                            </button>
                        </span>
                    </div>
                </form>
            </div>
            <div class='pull-right'>
                <a href="write.php?bbs_type=<?php echo $TPL_VAR["bbs_config"]["type"]?>" class="btn btn-primary"> <i class="glyphicon glyphicon-pencil"></i> 글쓰기 </a>
            </div>
        </div>

        <!-- 페이지 구현 -->
        <nav class="text-center">
            <ul class="pagination">
                <!-- 이전 페이지 그룹 이동 버튼 -->
<?php if($TPL_VAR["page_info"]["prev_group_last_page"]> 0){?>
                <li>
                    <a href="list.php?bbs_type=<?php echo $TPL_VAR["bbs_config"]["type"]?>&page=<?php echo $TPL_VAR["page_info"]["prev_group_last_page"]?>&keyword=<?php echo urlencode($TPL_VAR["keyword"])?>">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
<?php }else{?>
                <li class="disabled">
                    <span>
                        <span aria-hidden="true">&laquo;</span>
                    </span>
                </li>
<?php }?>

                <!-- 페이지 번호 -->
<?php if(is_array($TPL_R1=range($TPL_VAR["page_info"]["group_start"],$TPL_VAR["page_info"]["group_end"]))&&!empty($TPL_R1)){foreach($TPL_R1 as $TPL_V1){?>
<?php if($TPL_V1==$TPL_VAR["page_info"]["now_page"]){?>
                <li class="active"><a href="#"><?php echo $TPL_V1?></a></li>
<?php }else{?>
                <li><a href="list.php?bbs_type=<?php echo $TPL_VAR["bbs_config"]["type"]?>&page=<?php echo $TPL_V1?>&keyword=<?php echo urlencode($TPL_VAR["keyword"])?>"><?php echo $TPL_V1?></a></li>
<?php }?>
<?php }}?>

                <!-- 다음 페이지 그룹 이동 버튼 -->
<?php if($TPL_VAR["page_info"]["next_group_first_page"]> 0){?>
                <li>
                    <a href="list.php?bbs_type=<?php echo $TPL_VAR["bbs_config"]["type"]?>&page=<?php echo $TPL_VAR["page_info"]["next_group_first_page"]?>&keyword=<?php echo urlencode($TPL_VAR["keyword"])?>">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
<?php }else{?>
                <li class="disabled">
                    <span>
                        <span aria-hidden="true">&raquo;</span>
                    </span>
                </li>
<?php }?>
            </ul>
        </nav>
        <!--// 페이지 구현 -->

    </div>
<?php $this->print_("footer",$TPL_SCP,1);?>


</body>

</html>