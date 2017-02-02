<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Администратирование");
?>
<html>
	<body>

		<p><a href="/admins/users.php" id="some_link"> Список пользователей</a></p> </br>
 		<p><a href="/admins/users24.php" id="some_link"> Список пользователей зарегистрированных за последние 24 часа</a></p>

	<script>
		var myLink = document.getElementById('some_link');
		myLink.onclick = function(){
			myLink.style.backgroundColor = '#c2c2a3';
		}
	</script>

	</body>
</html>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
