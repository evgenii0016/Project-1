<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$filter = array();
$rsUsers = CUser::GetList(($by="ID"), ($order="desc"), $filter);
for ($i=1;i<=3;i++) {
$arResult['USERS'] = $arUser["LOGIN"];
}
$this->IncludeComponentTemplate();
?>
