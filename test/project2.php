<?php


function stroki () {
    $s='abdfabg';
    echo $s;
    $sm=$s[0];
    $sm+=$s[1];

    return $sm;

}

    function bd_connect(){
        $host='localhost'; // имя хоста (уточняется у провайдера)
        $database='n_today'; // имя базы данных, которую вы должны создать n_today
        $user='root'; // заданное вами имя пользователя, либо определенное провайдером
        $paswd='admin'; // заданный вами пароль
        $link = mysqli_connect($host,$user,$paswd,$database);
        mysqli_query($link, 'set names cp1251');
    }

    function xml1(){
        $dom = new DomDocument('1.0');
        $goods = $dom->appendChild($dom->createElement('Товары'));
        $good=$goods->appendChild($dom->createElement('Товар'));
        $cen=$good->appendChild($dom->createElement('Цена'));
        $cen2=$good->appendChild($dom->createElement('Цена'));
        $options=$good->appendChild($dom->createElement('Свойства'));
        $raz=$good->appendChild($dom->createElement('Разделы'));
        $dom->formatOutput = true;
        $test1 = $dom->saveXML();
        $dom->save('test1.xml');

    }
echo stroki();
//bd();
xml1();
