<?php


function stroki () {
    $s='abdfabg';
    echo $s;
    $sm=$s[0]+$s[1];
    return $sm;

}

    function bd(){
        $host='127.0.0.1'; // имя хоста (уточняется у провайдера)
        $database='n_today'; // имя базы данных, которую вы должны создать
        $user='root'; // заданное вами имя пользователя, либо определенное провайдером
        $pswd='admin'; // заданный вами пароль
        $dbh = mysqli_connect($host,$user,$pswd,$database);
    }

echo stroki();
bd();