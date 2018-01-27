<?php /* Template_ 2.2.8 2017/12/06 11:17:04 C:\phpuser\semi_project\_template\read.html 000004140 */ 
$TPL_file_list_1=empty($TPL_VAR["file_list"])||!is_array($TPL_VAR["file_list"])?0:count($TPL_VAR["file_list"]);?>
<!doctype html>
<html>

<head>
<?php $this->print_("head",$TPL_SCP,1);?>

    <link rel="stylesheet" type="text/css" href="css/list.css">
    <link rel="stylesheet" type="text/css" href="css/read.css">
    <style type="text/css">
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 10px;
            font-size: 15px;
        }

        tr:nth-child(even) {
            background-color: #fff;
        }
    </style>
</head>

<body>
<?php $this->print_("topbar",$TPL_SCP,1);?>

    <div class="bbs_main">
    	<h1 class="page_header">
    		<?php echo $TPL_VAR["bbs_config"]["name"]?> <small>글 읽기</small>
    	</h1>
    	<div class="bbs_list">
            <h3 style="margin: 0">
                <?php echo $TPL_VAR["document"]["subject"]?><br>
                <small>
                    <?php echo $TPL_VAR["document"]["writer_name"]?>

                    <a href="#">조회수 : <?php echo $TPL_VAR["document"]["hit"]?> / 작성일시 : <?php echo $TPL_VAR["document"]["reg_date"]?></a>
                </small>
            </h3>
        </div>
        <!--첨부파일 목록-->
<?php if($TPL_file_list_1> 0){?>
        <table class="table">
            <tbody>
                <tr>
                    <th class="warning" style="width: 100px;">첨부파일</th>
                    <td>
<?php if($TPL_file_list_1){foreach($TPL_VAR["file_list"] as $TPL_V1){?>
                        <a href="download.php?bbs_type=<?php echo $TPL_VAR["bbs_config"]["type"]?>&file_id=<?php echo $TPL_V1["id"]?>"><?php echo $TPL_V1["file_name"]?></a>
<?php }}?>
                    </td>
                </tr>
            </tbody>
        </table>
<?php }?>
        <section style="padding: 0 10px 20px 10px; width: 1100px; height: 400px;">
            <?php echo $TPL_VAR["document"]["content"]?>

        </section>
        <!-- 이전, 다음글 -->
        <table class='table2'>
            <tbody class="search">
                <tr>
                    <th class='warning' style='width: 100px'>다음글</th>
                    <td>
<?php if($TPL_VAR["next_document"]!==FALSE){?>
                        <a href="read.php?bbs_type=<?php echo $TPL_VAR["bbs_config"]["type"]?>&document_id=<?php echo $TPL_VAR["next_document"]["id"]?>"><?php echo $TPL_VAR["next_document"]["subject"]?></a>
<?php }else{?>
                        다음 글이 없습니다.
<?php }?>
                    </td>
                </tr>
                <tr>
                    <th class='warning' style='width: 100px'>이전글</th>
                    <td>
<?php if($TPL_VAR["prev_document"]!==FALSE){?>
                        <a href="read.php?bbs_type=<?php echo $TPL_VAR["bbs_config"]["type"]?>&document_id=<?php echo $TPL_VAR["prev_document"]["id"]?>"><?php echo $TPL_VAR["prev_document"]["subject"]?></a>
<?php }else{?>
                        이전 글이 없습니다.
<?php }?>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="select">
            <div>
                <a href="list.php?bbs_type=<?php echo $TPL_VAR["bbs_config"]["type"]?>">목록보기</a>
                <a href="write.php?bbs_type=<?php echo $TPL_VAR["bbs_config"]["type"]?>">글쓰기</a>
                <a href="edit.php?bbs_type=<?php echo $TPL_VAR["bbs_config"]["type"]?>&document_id=<?php echo $TPL_VAR["document"]["id"]?>">수정하기</a>
                <a href="delete.php?bbs_type=<?php echo $TPL_VAR["bbs_config"]["type"]?>&document_id=<?php echo $TPL_VAR["document"]["id"]?>">삭제하기</a>
            </div>
        </div>
    </div>
<?php $this->print_("footer",$TPL_SCP,1);?>


</body>

</html>