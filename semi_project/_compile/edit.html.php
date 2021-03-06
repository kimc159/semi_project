<?php /* Template_ 2.2.8 2017/12/04 15:39:52 C:\phpuser\semi_project\_template\edit.html 000004185 */ ?>
<!doctype html>
<html>

<head>
<?php $this->print_("head",$TPL_SCP,1);?>

    <link rel="stylesheet" type="text/css" href="css/edit.css">
</head>

<body>
<?php $this->print_("topbar",$TPL_SCP,1);?>

<form class="frm3" action="<?php echo $TPL_VAR["home_url"]?>/edit_ok.php"  method="post">
	<table width="100%;" border="1">
		<caption>회원 정보 수정</caption>
		<tbody>
			<tr>
				<th>아이디<img src="img/ico.png" alt="필수"></th>
				<td class="id_wrap"><?php echo $TPL_VAR["member_info"]["user_id"]?></td>
			</tr>
			<tr>
				<th>현재 비밀번호<img src="img/ico.png" alt="필수"></th>
				<td class="pw_wrap"><input type="password" class="form-control" id="pw" name="pw" placeholder="(영문 대소문자/숫자/특수문자 중 2가지 이상 조합, 8자~16자)">
				<span class="pw_check"></span></td>
			</tr>
			<tr>
				<th>변경할 비밀번호<img src="img/ico.png" alt="필수"></th>
				<td class="pw_conf_wrap"><input type="password" class="form-control" id="pw_conf" name="new_user_pw" placeholder="Password">
				<span class="pw_conf_check"></span></td>
			</tr>
			<tr>
				<th>비밀번호 확인<img src="img/ico.png" alt="필수"></th>
				<td class="pw_conf_wrap"><input type="password" class="form-control" id="pw_conf" name="new_user_pw_re" placeholder="Password">
				<span class="pw_conf_check"></span></td>
			</tr>
			<tr>
				<th>이름<img src="img/ico.png" alt="필수"></th>
				<td class="name_wrap"><input type="text" class="form-control" id="name" name="name" placeholder="이름" value="<?php echo $TPL_VAR["member_info"]["user_name"]?>"></td>
			</tr>
			<tr>
				<th>우편번호<img src="img/ico.png" alt="필수"></th>
				<td class="pc_wrap"><input type="text" name="postcode" id="postcode"
                   class="form-control" value="<?php echo $TPL_VAR["member_info"]["postcode"]?>"/>
            <!-- 클릭 시, Javascript 함수 호출 : openDaumPostcode() -->
            	<input type='button' value='우편번호 찾기' class='btn btn-warning' onclick='daumPostCode()'/></td>
			</tr>
			<tr>
				<th>주소<img src="img/ico.png" alt="필수"></th>
				<td><input type="text" name="addr1" id="addr1" class="form-control" value="<?php echo $TPL_VAR["member_info"]["addr1"]?>"/></td>
			</tr>
			<tr>
				<th>상세주소<img src="img/ico.png" alt="필수"></th>
				<td><input type="text" name="addr2" id="addr2" class="form-control" value="<?php echo $TPL_VAR["member_info"]["addr2"]?>"/></td>
			</tr>
			<tr>
				<th>Email<img src="img/ico.png" alt="필수"></th>
				<td class="email_wrap"><input type="text" name="email" id="email" class="email form-control" value="<?php echo $TPL_VAR["member_info"]["email"]?>"/>
				<span class="email_check" ></span></td>
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
					<select name="tel4" class="tel4" value="<?php echo $TPL_VAR["member_info"]["tel4"]?>">
						<option value="selected">--</option>
						<option value="010">010</option>
						<option value="011">011</option>
						<option value="012">012</option>
					</select>
					<input type="text" class="tel5" name="tel5" value="<?php echo $TPL_VAR["member_info"]["tel5"]?>">
					<input type="text" class="tel6" name="tel6" value="<?php echo $TPL_VAR["member_info"]["tel6"]?>">
				</td>
			</tr>
			<hr>
			<tr>
				<td></td>
				<td>
					<button type="submit" class="btn btn-default btn_register">수정</button>
				</td>
			</tr>
		</tbody>
	</table>
</form>
<?php $this->print_("footer",$TPL_SCP,1);?>

</body>

</html>