<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
// echo '<pre>'; print_r($arParams); echo '</pre>';
CModule::IncludeModule('iblock');
if ($this->StartResultCache(3600))
{
    $iblock_id = $arParams['IBLOCK_ID'];
    $arFilter = array('IBLOCK_ID'=>$iblock_id);
    $db_list = CIBlockSection::GetList(array('ART'=>'ASC'), $arFilter, true, array("CHARESTERISTIC", "ART", "DESCRIOTION"));
    while($ar_result = $db_list->GetNext())
    {
        $arResult[] = array(
                    "CHARESTERISTIC" => $ar_result['CHARESTERISTIC'],
                    "ART" => $ar_result['ART'],
                    "DESCRIOTION" => $ar_result['DESCRIOTION'] 
                   );
    }
    // echo '<pre>'; print_r($arResult); echo '</pre>';
    $this->IncludeComponentTemplate();
}
?>


