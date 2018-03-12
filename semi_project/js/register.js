$(function(){
$('.sub_li').hover(function(){
    console.log("sub_li hover");
    $(this).css('backgroundColor','#4974bc');
    $(this).find('a').css('color','#fff');
},function(){
    $(this).css('backgroundColor','#fff');
    $(this).find('a').css('color','#000');
});
$("#pw").keyup(function(){
    var str = $(this).val();
    if(checkPasswordPattern(str)){
        $(".pw_check").text('비밀번호는 8자리 이상 문자, 숫자, 특수문자로 구성하여야 합니다.').css({'color':'red','fontSize':'11px'});
    }else{
        $(".pw_check").text('사용 가능한 아이디입니다.').css({'color':'blue','fontSize':'11px'});
    }
});
$("#pw_conf").keyup(function(){
    var str = $(this).val();
        if($("#pw").val() != str){
            $(".pw_conf_check").text('비밀번호가 일치하지 않습니다.').css({'color':'red','fontSize':'11px'});
        }else{
            $(".pw_conf_check").text('사용 가능한 비밀번호입니다.').css({'color':'blue','fontSize':'11px'});
        }
        if(str == ''){
            $(".pw_conf_check").text('비밀번호가 일치하지 않습니다.').css({'color':'red','fontSize':'11px'});
        }
});

$("#email").keyup(function(){
    var regex=/([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    var email = $(this).val();
    if(!regex.test(email)) {
        $(".email_check").text('잘못된 이메일 형식입니다.').css({'color':'red','fontSize':'11px'});   
    } else {
        $(".email_check").text('사용 가능한 이메일 입니다.').css({'color':'blue','fontSize':'11px'});
    }
});
$("#email").blur(function(){
    var regex=/([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    var email = $(this).val();
    if(!regex.test(email)) {
        $(".email_check").text('잘못된 이메일 형식입니다.').css({'color':'red','fontSize':'11px'});   
    } else {
        $(".email_check").text('사용 가능한 이메일 입니다.').css({'color':'blue','fontSize':'11px'});
    }
});
// 전송 버튼 마지막에 submit줘야됨
$(".btn_register").click(function(){
    console.log("btn in");
    var id = $("#id").val();
    var pw = $("#pw").val();
    var pw_conf = $("#pw_conf").val();
    var tel1 = $(".tel1").val();
    var tel2 = $(".tel2").val();
    var tel3 = $(".tel3").val();
    var tel4 = $(".tel4").val();
    var tel5 = $(".tel5").val();
    var tel6 = $(".tel6").val();
    
    if(tel1 == "" || tel2 == "" || tel3 ==""){
        alert("전화번호를 입력해 주세요.");
        return false;
    }else if( tel4 == "" || tel5 == "" || tel6 == "" ){
        alert("휴대폰번호를 입력해 주세요.");
        return false;
    }else if($(".email_ck").is(":checked") != true){
        alert("이메일 수신동의에 체크해 주세요.");
        return false;
    }
    if(tel2 != "" && tel3 != "") {
        var rgEx = /(03[123])[-](\d{4}|\d{3})[-]\d{4}$/g;
       var strValue = tel1+"-"+tel2+"-"+tel3;
       var chkFlg = rgEx.test(strValue);   
       if(!chkFlg){
        alert("올바른 전화번호가 아닙니다.");
        $(".tel1").val("");
        $(".tel2").val("");
        $(".tel3").val("");
        $(".tel2").focus();
        return false; 
        }
    }else if(tel5 != "" && tel6 != ""){
        var rgEx = /(01[016789])[-](\d{4}|\d{3})[-]\d{4}$/g;
       var strValue = tel4+"-"+tel5+"-"+tel6;
       var chkFlg = rgEx.test(strValue);   
       if(!chkFlg){
        alert("올바른 휴대폰번호가 아닙니다.");
        $(".tel4").val(" ");
        $(".tel5").val(" ");
        console.log();
        $(".tel6").val(" ");
        $(".tel5").focus();
        return false; 
        }
    }
    $(".frm2").submit();
});

function hanCheck(str){
    var check = /[ㄱ-ㅎ|ㅏ-ㅣ|가-힣]/;   //한글 체크
    if(check.test(str)){
        return true;
    }else{
        return false;
    }
}
function specialCheck(str){
    var special_pattern = /[`~!@#$%^&*|\\\'\";:\/?]/gi; // 특수문자
    if(special_pattern.test(str) == true){
        return true;
    }else{
        return false;
    }
}
function spaceCheck(str){   // 공백체크
    if(str.search(/\s/) != -1){
        return true;
    }else{
        return false;
    }
}
// 비밀번호 패턴 체크 (8자 이상, 문자, 숫자, 특수문자 포함여부 체크) 
function checkPasswordPattern(str) { 
    var pattern1 = /[0-9]/;    // 숫자
    var pattern2 = /[a-zA-Z]/;    // 문자
    var pattern3 = /[~!@#$%^&*()_+|<>?:{}]/;  // 특수문자
    if(!pattern1.test(str) || !pattern2.test(str) || !pattern3.test(str) || str.length < 8) {
        return true;
    } else {
        return false;
    }
}

});
