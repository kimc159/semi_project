<?php /* Template_ 2.2.8 2018/01/24 16:56:46 C:\phpuser\semi_project\_template\read.html 000017380 */ 
$TPL_file_list_1=empty($TPL_VAR["file_list"])||!is_array($TPL_VAR["file_list"])?0:count($TPL_VAR["file_list"]);?>
<!doctype html>
<html>

<head>
<?php $this->print_("head",$TPL_SCP,1);?>


    <link rel="stylesheet" type="text/css" href="css/list.css">
    <link rel="stylesheet" type="text/css" href="css/read.css?cs">

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
        .bbs_list{
            margin-bottom: 20px;
            width: 1078px;
        }
        .media-body div, .media-body p{
            font-size: 15px;
        }
        .modal-header{
            width: 100%;
            text-align: center;
            font-size: 25px;
        }
        .modal-title{
            font-size: 25px;
            color: #474747;
            margin-top: 50px;
        }
        .modal-body{
            width: 100%;
            text-align: center;
            font-size: 13px;
            margin-top: 50px;
        }
        .modal-body .form-group input{
            width: 250px;
            height: 30px;
        }
        .modal-body .form-group{
            margin-bottom: 50px;
        }
        .modal-footer{
            width: 100%;
            text-align: center;
        }
        .modal-footer button{
            display: inline-block;
            width: 70px;
            height: 40px;
            background-color: #474747;
            color: #fff;
            text-align: center;
            line-height: 35px;
            border-radius: 5px;
            font-size: 15px;
        }
        .modal-footer button:hover{
            cursor: pointer;
            background-color: #fff;
            color: #474747;
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
<?php if(($TPL_VAR["member_info"]["user_id"]!=='admin'&&$TPL_VAR["bbs_type"]==='qna')||$TPL_VAR["member_info"]["user_id"]==='admin'){?>
                <a href="write.php?bbs_type=<?php echo $TPL_VAR["bbs_config"]["type"]?>">글쓰기</a>
                <a href="bbs_edit.php?bbs_type=<?php echo $TPL_VAR["bbs_config"]["type"]?>&document_id=<?php echo $TPL_VAR["document"]["id"]?>">수정하기</a>
                <a href="delete.php?bbs_type=<?php echo $TPL_VAR["bbs_config"]["type"]?>&document_id=<?php echo $TPL_VAR["document"]["id"]?>">삭제하기</a>
<?php }?>
            </div>
        </div>
    </div>
    <div class="container">
        <!-- 댓글 수정 시작 -->
        <form id="comment_edit_form" method="post" action="<?php echo $TPL_VAR["home_url"]?>/comment_edit_ok.php" style="position: fixed;left: 50%; top: 50%; display: none; width: 450px; height: 600px;margin-left: -225px;
        margin-top: -300px; border: 1px solid #ccc; z-index: 50; background-color: #fff;">
            <!-- 수정할 대상을 위한 상태유지 -->
            <input type="hidden" name="bbs_type" value="<?php echo $TPL_VAR["bbs_config"]["type"]?>" />
            <input type="hidden" name="comment_id" id="comment_edit_id" value="" />
            <!-- 모달의 제목 영역 -->
            <div class="modal-header">
                <h4 class="modal-title">덧글 수정</h4>
            </div>
            <!-- 모달의 본문 영역 -->
            <div class="modal-body">
                <!-- 로그인중이 아니거나 자신의 글이 아닌 경우 -->
<?php if($TPL_VAR["member_info"]===FALSE||$TPL_VAR["comment"]["member_id"]!=$TPL_VAR["member_info"]["id"]){?>
                    <div class="form-group">
                        <input type="text"  name="writer_name" id="writer_name" class="form-control" 
                            placeholder="작성자" value="" style="height: 20px;" />
                    </div>
                    <div class="form-group" style="margin-top: -30px;">
                        <input type="password"  name="writer_edit_pw" id="writer_edit_pw" class="form-control" 
                            placeholder="작성시 설정한 비밀번호" style="height: 20px;"/>
                    </div>
                    <div class="form-group" style="margin-top: -30px;">
                        <input type="email"  name="email" id="email" class="form-control" 
                            placeholder="이메일" value="" style="height: 20px;"/>
                    </div>
<?php }?>
                <!-- 덧글 내용 -->
                <div class="form-group" style="margin-top: -30px;">
                    <textarea class="form-control" name="content" rows="5" style="width: 274px; height: 80px;" id="content"></textarea>
                </div>
            </div>
            <!-- 모달의 하단 영역 -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" id="edit_cancel">취소</button>
                <button type="submit" class="btn btn-danger">수정</button>
            </div>
        </form>
        <!-- 댓글 수정 끝 -->
        <form id="comment_delete_form" method="post" action="<?php echo $TPL_VAR["home_url"]?>/comment_delete_ok.php" style="position: fixed;left: 50%; top: 50%; display: none; width: 450px; height: 400px;margin-left: -225px;
        margin-top: -200px; border: 1px solid #ccc; z-index: 50; background-color: #fff;">
            <!-- 삭제할 덧글에 대한 상태유지 -->
            <input type="hidden" name="bbs_type" value="<?php echo $TPL_VAR["bbs_config"]["type"]?>" />
            <input type="hidden" name="comment_id" id="comment_id" value="" />
            <!-- 모달창의 제목영역 -->
            <div class="modal-header">
                <h4 class="modal-title">덧글 삭제</h4>
            </div>
            <!-- 모달창의 본문영역 -->
            <div class="modal-body">
<?php if($TPL_VAR["is_mine"]==true){?>
                    <!-- 자신의 글에 대한 삭제 -->
                    <p>정말 이 덧글을 삭제하시겠습니까?</p>
<?php }else{?>
                    <!-- 자신의 글이 아닌 경우 -->
                    <p style="margin-bottom: 50px;">삭제하시려면 비밀번호를 입력하세요</p>
                    <div class="form-group">
                        <input type="password" name="writer_pw" id="writer_pw" style="height: 20px;" />
                    </div>
<?php }?>
            </div>
            <!-- 모달창의 하단 버튼 영역 -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" id="cancel" data-dismiss="modal">취소</button>
                <button type="submit" class="btn btn-danger" id="comment_delete">삭제</button>
            </div>
        </form>
        <hr>
        <br>
        <form id="comment_form" method="post" action="<?php echo $TPL_VAR["home_url"]?>/comment_insert.php">
            <input type="hidden" name="bbs_type" value="<?php echo $TPL_VAR["bbs_config"]["type"]?>">
            <input type="hidden" name="document_id" value="<?php echo $TPL_VAR["document"]["id"]?>">
<?php if(!$TPL_VAR["member_info"]){?>
                <div class="form-group form-inline clearfix">
                    <div class="form-group fl">
                        <input type="text" name="writer_name" class="form-control" placeholder="작성자" style="width: 200px;">
                    </div>
                    <div class="form-group fl">
                        <input type="password" name="writer_pw" class="form-control" placeholder="비밀번호" style="width: 200px; margin: 0 10px;">
                    </div>
                    <div class="form-group fl">
                        <input type="email" name="email" class="form-control" placeholder="이메일" style="width: 200px;">
                    </div>
                </div>
<?php }?>
            <br>
            <div class="form-group">
                <div class="input-group clearfix">
                    <textarea class="form-control custom-control fl" name='content' 
                        style="resize:none; width: 1040px; height: 80px"></textarea>     
                    <span class="input-group-btn fl">
                        <button type="submit"
                            style="width:50px; height: 80px">저장</button>
                    </span>
                </div>
            </div>
        </form>
        <ul class="media-list" id="comment_list">
            
        </ul>
    </div>
    
<?php $this->print_("footer",$TPL_SCP,1);?>

<script type="text/javascript">
    $(function(){
        $("html,body").width($(document).width());
        $("html,body").height($(document).height());

        $("#comment_form").ajaxForm(function(json){
            if(json.rt != "OK"){
                alert(json.rt);
                return false;
            }
            var template = Handlebars.compile($("#tmpl_comment_item").html());
            var html = template(json.item);
            $("#comment_list").append(html);
            $("#comment_form").trigger('reset');
        });

        $.get("<?php echo $TPL_VAR["home_url"]?>/comment_list.php", {bbs_type : "<?php echo $TPL_VAR["bbs_config"]["type"]?>", document_id: "<?php echo $TPL_VAR["document"]["id"]?>"}, function(json){
            if(json.rt != "OK"){
                alert(json.rt);
                return false;
            }
            var template = Handlebars.compile($("#tmpl_comment_item").html());
            for(var i=0; i<json.item.length; i++){
                var html = template(json.item[i]);
                $("#comment_list").append(html);
            }

        });
        $("#comment_delete_form").submit(function(e){
            e.preventDefault();
            console.log("delete in");
            $.ajax({
                type: 'post',
                dataType: 'json',
                url: '<?php echo $TPL_VAR["home_url"]?>/comment_delete_ok.php',
                data: $("#comment_delete_form").serialize(),
     
                success: function (json) {
                    console.log("json : "+json);
                    var comment_id = json.comment_id;
                    $("#comment_"+comment_id).remove();
                    alert("삭제되었습니다.");
                    $("#comment_delete_form").css("display","none");
                    $("#writer_pw").val("");
                },
     
                error: function(request,status,error){
                    alert("비밀번호가 다릅니다.");
                }
            })
        });
        $("#comment_edit_form").submit(function(e){
            e.preventDefault();
            console.log("edit in");
            $.ajax({
                type: 'post',
                dataType: 'json',
                url: '<?php echo $TPL_VAR["home_url"]?>/comment_edit_ok.php',
                data: $("#comment_edit_form").serialize(),
     
                success: function (json) {
                    if(json.rt != "OK"){
                        alert(json.rt);
                        return false;
                    }
                    console.log(json);
                    var template = Handlebars.compile($("#tmpl_comment_item").html());
                    var html = template(json.item);
                    $("#comment_" + json.item.id).replaceWith(html);
                    $("#comment_edit_form").css("display","none");
                    $("#writer_edit_pw").val("");
                },
     
                error: function(request,status,error){
                    console.log('failed');
                    alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
                }
            })
        });

        $("#cancel").click(function(){
            $("#writer_pw").val("");
            $("#comment_delete_form").css("display","none");
        });
        $("#edit_cancel").click(function(){
            $("#comment_edit_form").css("display","none");
        });
    });

    function comment_del(comment_id){
        $("#comment_delete_form").css("display","block");
        $("#comment_id").val(comment_id);
    }
    function comment_edit(comment_id, writer_name, email, content){
        console.log("edit in");
        $("#comment_edit_form").css("display","block");
        $("#comment_edit_id").val(comment_id);
        $("#writer_name").val(writer_name);
        $("#email").val(email);
        $("#content").val(content);
    }
</script>
<script id="tmpl_comment_item" type="text/x-handlebars-template">
    <li class="media" style="border-top: 1px dotted #ccc; padding-top: 15px" id="comment_{{id}}">
        <div class="media-body">
            <h4 class="media-heading clearfix">
                <div class="fl">
                    {{writer_name}}
                    <small>
                        <a href="mailto:{{email}}">
                            <i class="fa fa-envelope" aria-hidden="true" style="font-size: 20px; color: #0044a5"></i>
                        </a> / {{reg_date}}
                    </small>
                </div>
                <div class="fr">
                    <a data-toggle="modal" data-target="#comment_edit_modal" clas
                    s="btn btn-warning btn-xs" onclick="comment_edit({{id}},'{{writer_name}}','{{email}}','{{content}}');">
                    <i class="fa fa-pencil-square-o" aria-hidden="true" style="font-size: 20px; color: orange;cursor: pointer;"></i>
                    </a>
                    <a data-toggle="modal" data-target="#comment_delete_modal" class="btn btn-danger btn-xs" id="comment_del" onclick="comment_del({{id}})" >
                    <i class="fa fa-times" aria-hidden="true" style="font-size: 20px; color: #db0000; cursor: pointer;"></i>
                    </a> 
                    <!-- <a data-toggle="modal" data-target="#comment_delete_modal" class="btn btn-danger btn-xs" id="comment_del" >
                     -->   
                </div>
            </h4>
            <p>{{{content}}}</p>
        </div>
    </li>
</script>
</body>

</html>