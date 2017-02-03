<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Вывод инфоблоков");
?><?$APPLICATION->IncludeComponent(
	"bitrix:info.out",
	".default",
	Array(
		"IBLOCK_ID" => 1
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>