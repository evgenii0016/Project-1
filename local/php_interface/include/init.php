<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();

CAgent::AddAgent("agent();");


AddEventHandler("main", "OnBeforeUserRegister", "OnBeforeUserRegisterHandler");
AddEventHandler("main", "OnAfterUserRegister", "blockyandexmail");

    function OnBeforeUserRegisterHandler(&$arFields)
    {
                if (strpos($arFields["EMAIL"],'@mail.ru' )  === FALSE and (strpos($arFields["EMAIL"],'@list.ru' ) === FALSE ))
                {
                    echo 'SUCCESS';

                }
                else{
                    $GLOBALS['APPLICATION']->ThrowException('Please, use another domain');
                    return false;
                }

    }

    function blockyandexmail(&$arFields)
    {

        if (strpos($arFields["EMAIL"],'@yandex.ru' )  === false)
            {

            $mess = 'email received';
            $arEventFields = array(
                "ID" => 's1',
                "MESSAGE" => $mess,
                "EMAIL_TO" => implode(",", $arFields['EMAIL']),
            );
            CEvent::Send("EMAIL_SEND_REG", 's1', $arEventFields);
            }
        else{
            $GLOBALS['APPLICATION']->ThrowException('Email from @yandex do not send');

        }
    }

    function agent()
    {
       
            mail('evgenii0016@gmail.com','last24','ID пользователя: '.
                'Имя пользователя: '.
                'Login пользователя: '.
                'Email пользователя: '..
                'Дата регистрации пользователя: '
        );

    

        return "agent()";
    }

function testAgent()
{
    mail('evgenii0016@gmail.com', 'Агент', 'Агент');
    return "testAgent();";
}

