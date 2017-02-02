<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("последнее 3 пользователя");
?>

<? $APPLICATION->IncludeComponent(
"dv:user.3c",
".default",
Array(
),
false
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
