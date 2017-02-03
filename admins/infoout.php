<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Вывод инфоблоков");
?><?php
$APPLICATION->IncludeComponent("bitrix:info.out", ".default", array(
    "IBLOCK_ID" => 1
    ),
    false);
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>