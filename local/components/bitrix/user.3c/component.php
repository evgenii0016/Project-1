<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
// echo '<pre>'; print_r($arParams); echo '</pre>';
CModule::IncludeModule();
if ($this->StartResultCache(1200))
{
    //$iblock_id = $arParams['IBLOCK_ID'];
    $filter = array();
    $rsUsers = CUser::GetList(($by="ID"), ($order="desc"), $filter);
    //while($ar_result = $db_list->GetNext())
    for ($i=1; $i<=3; $i++)
    {
        $arResult[] = array(
                    "ID" => $arUser["ID"],
                    "LOGIN" => $arUser["LOGIN"]
                   );
    }
    // echo '<pre>'; print_r($arResult); echo '</pre>';
    $this->IncludeComponentTemplate();
}
?>

