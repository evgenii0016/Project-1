<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Пользователи");
$APPLICATION->SetTitle("Пользователи");

$filter = array();
$rsUsers = CUser::GetList(($by="ID"), ($order="asc"), $filter);
while ($arUser = $rsUsers->Fetch()) 
{
   echo '<p>ID пользователя:  ';echo $arUser["ID"]; echo '</p></br>';
   echo '<p>Имя пользователя:  ';echo $arUser["NAME"]; echo '</p></br>';
   echo '<p>Login пользователя:  ';echo $arUser["LOGIN"]; echo '</p></br>';
   echo '<p>Email пользователя:  ';echo $arUser["EMAIL"]; echo '</p></br>';
   echo '<p>Дата регистрации пользователя:  ';echo $arUser["DATE_REGISTER"]; echo '</p></br>';
   echo '<hr>';
   
}


require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
