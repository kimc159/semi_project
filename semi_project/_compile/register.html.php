<?php /* Template_ 2.2.8 2017/12/04 16:09:20 C:\phpuser\semi_project\_template\register.html 000007982 */ ?>
<!DOCTYPE html>
<html>
<head>
<?php $this->print_("head",$TPL_SCP,1);?>

</head>
<body>
<?php $this->print_("topbar",$TPL_SCP,1);?>

<form class="frm2" action="<?php echo $TPL_VAR["home_url"]?>/register_ok.php"  method="post">
	<table width="100%;" border="1">
		<caption>Join us</caption>
		<tbody>
			<tr>
				<th>아이디<img src="img/ico.png" alt="필수"></th>
				<td class="id_wrap"><input type="text" class="form-control" id="id" name="id" placeholder="(영문소문자/숫자,4~16자)">
				<span class="id_check"></span></td>
			</tr>
			<tr>
				<th>비밀번호<img src="img/ico.png" alt="필수"></th>
				<td class="pw_wrap"><input type="password" class="form-control" id="pw" name="pw" placeholder="(영문 대소문자/숫자/특수문자 중 2가지 이상 조합, 8자~16자)">
				<span class="pw_check"></span></td>
			</tr>
			<tr>
				<th>비밀번호 확인<img src="img/ico.png" alt="필수"></th>
				<td class="pw_conf_wrap"><input type="password" class="form-control" id="pw_conf" name="pw_conf" placeholder="Password">
				<span class="pw_conf_check"></span></td>
			</tr>
			<tr>
				<th>이름<img src="img/ico.png" alt="필수"></th>
				<td class="name_wrap"><input type="text" class="form-control" id="name" name="name" placeholder="이름"></td>
			</tr>
			<tr>
				<th>우편번호<img src="img/ico.png" alt="필수"></th>
				<td class="pc_wrap"><input type="text" name="postcode" id="postcode"
                   class="form-control"/>
            <!-- 클릭 시, Javascript 함수 호출 : openDaumPostcode() -->
            	<input type='button' value='우편번호 찾기' class='btn btn-warning' onclick='daumPostCode()'/></td>
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
				<th>Email<img src="img/ico.png" alt="필수"></th>
				<td class="email_wrap"><input type="text" name="email" id="email" class="email form-control"/>
				<span class="email_check"></span></td>
			</tr>
			<tr>
				<th>일반전화<img src="img/ico.png" alt="필수"></th>
				<td class="tel1_wrap">
				<select name="tel1" class="tel1">
					<option value="selected">--</option>
					<option value="031">031</option>
					<option value="032">032</option>
					<option value="033">033</option>
				</select>
			<input type="text" class="tel2" name="tel2" >
			<input type="text" class="tel3" name="tel3" >
			</td>
			</tr>
			<tr>
				<th>휴대전화<img src="img/ico.png" alt="필수"></th>
				<td class="tel4_wrap">
					<select name="tel4" class=" tel4">
						<option value="selected">--</option>
						<option value="010">010</option>
						<option value="011">011</option>
						<option value="012">012</option>
					</select>
					<input type="text" class="tel5" name="tel5" >
					<input type="text" class="tel6" name="tel6" >
				</td>
			</tr>
			<tr>
				<th>이메일 수신 동의<img src="img/ico.png" alt="필수"></th>
				<td class="email_ck_wrap"><input type="checkbox" name="email_ck" class="email_ck"></td>
			</tr>
			<hr>
			<tr>
				<th>생년월일<img src="img/ico.png" alt="필수"></th>
				<td class="ymd_wrap">
					<input type="text" class="ymd_s" name="year" >
					<label class="la_year">년</label>
					<input type="text" class="ymd_s" name="month" >
					<label class="la_mon">월</label>
					<input type="text" class="ymd_s" name="day" >
					<label class="la_day">일</label>
					<div class="radio">
						<label class="ra_label">
					    	<input type="radio" name="optionsRadios" id="op_radio" value="option2"><span class="select1">양력</span>
						</label>
						<label class="ra_label">
					    	<input type="radio" name="optionsRadios" id="op_radio" value="option2"><span class="select2">음력</span>
						</label>
					</div>
				</td>
			</tr>
			<tr>
				<th>이용약관동의<img src="img/ico.png" alt="필수"></th>
				<td class="textarea_wrap">
				<textarea class="form-control" rows="5" >제1조(목적)
이 약관은 한국도자기(주)가 운영하는 쇼핑몰(이하 “몰”이라 한다)에서 제공하는 인터넷 관련 서비스(이하 “서비스”라 한다)를 이용함에 있어 사이버 몰과 이용자의 권리․의무 및 책임사항을 규정함을 목적으로 합니다.
※「PC통신, 무선 등을 이용하는 전자상거래에 대해서도 그 성질에 반하지 않는 한 이 약관을 준용합니 </textarea>
				<textarea class="form-control" rows="5">제1조(목적)
이 약관은 한국도자기(주)가 운영하는 쇼핑몰(이하 “몰”이라 한다)에서 제공하는 인터넷 관련 서비스(이하 “서비스”라 한다)를 이용함에 있어 사이버 몰과 이용자의 권리․의무 및 책임사항을 규정함을 목적으로 합니다.
※「PC통신, 무선 등을 이용하는 전자상거래에 대해서도 그 성질에 반하지 않는 한 이 약관을 준용합니다.」
제2조(정의) </textarea>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">모두동의
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<button type="button" class="btn btn-default btn_register">가입</button>
				</td>
			</tr>
		</tbody>
	</table>
</form>
<?php $this->print_("footer",$TPL_SCP,1);?>

    <link rel="stylesheet" type="text/css" href="css/register.css">
	<script src="js/register.js"></script>
<script type="text/javascript">
function daumPostCode() {
    new daum.Postcode({
        oncomplete: function(data) {
            // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

            // 각 주소의 노출 규칙에 따라 주소를 조합한다.
            // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
            var fullAddr = ''; // 최종 주소 변수
            var extraAddr = ''; // 조합형 주소 변수

            // 사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
            if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
                fullAddr = data.roadAddress;

            } else { // 사용자가 지번 주소를 선택했을 경우(J)
                fullAddr = data.jibunAddress;
            }

            // 사용자가 선택한 주소가 도로명 타입일때 조합한다.
            if(data.userSelectedType === 'R'){
                //법정동명이 있을 경우 추가한다.
                if(data.bname !== ''){
                    extraAddr += data.bname;
                }
                // 건물명이 있을 경우 추가한다.
                if(data.buildingName !== ''){
                    extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                }
                // 조합형주소의 유무에 따라 양쪽에 괄호를 추가하여 최종 주소를 만든다.
                fullAddr += (extraAddr !== '' ? ' ('+ extraAddr +')' : '');
            }

            // 우편번호와 주소 정보를 해당 필드에 넣는다.
            document.getElementById('postcode').value = data.zonecode; //5자리 새우편번호 사용
            document.getElementById('addr1').value = fullAddr;

            // 커서를 상세주소 필드로 이동한다.
            document.getElementById('addr2').focus();
        }
    }).open();
}
</script>
</body>
</html>