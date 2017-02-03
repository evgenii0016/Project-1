<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");

?><?php
$APPLICATION->IncludeComponent("bitrix:user.3c", ".default", array(),
    			        false);
?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>