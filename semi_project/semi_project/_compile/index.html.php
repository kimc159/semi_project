<?php /* Template_ 2.2.8 2017/11/21 16:19:36 C:\phpuser\source\_template\index.html 000000558 */ ?>
<!DOCTYPE html>
<html>
<head>
<?php $this->print_("head",$TPL_SCP,1);?>

</head>
<body>
<?php $this->print_("topbar",$TPL_SCP,1);?>

	<div class="container">
		<h1> Hello MySite</h1>

<?php if($TPL_VAR["member_info"]==false){?>
		<h2>로그인 되지 않음</h2>
<?php }else{?>
		<h2>로그인 성공</h2>
		<?php echo debug($TPL_VAR["member_info"])?>

<?php }?>
	</div>
<?php $this->print_("footer",$TPL_SCP,1);?>

	
</body>
</html>