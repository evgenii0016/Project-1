<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Администратирование");
?>
<html>
	<body>

		<p><a href="/admins/users.php"> Список пользователей</a></p> </br>
 		<p><a href="/admins/users24.php"> Список пользователей зарегистрированных за последние 24 часа</a></p>

	</body>
</html>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
