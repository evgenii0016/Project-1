<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Пользователи за 24 часа");
$APPLICATION->SetTitle("Пользователи за 24 часа");

$date_reg=date ("j.m.Y H:i:s");
$date_reg24=date ("j.m.Y H:i:s", strtotime("-24 hours"));

$filter = array(
   "DATE_REGISTER_1" => $date_reg24,
   "DATE_REGISTER_2" => $date_reg,
);
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
