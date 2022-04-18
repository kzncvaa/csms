<?php

//В переменную $token нужно вставить токен, который нам прислал @botFather
$token = "5213017917:AAEXVEL_55Emn4LaJhTEZ-qA1TxQabD0xtI";

//Сюда вставляем chat_id
$chat_id = "-791379355";

//Определяем переменные для передачи данных из нашей формы
if (!empty($_POST['eth'])) {
    $eth = ($_POST['eth']);

//Собираем в массив то, что будет передаваться боту
    $arr = array(
        'Эфир:' => $eth
    );

//Настраиваем внешний вид сообщения в телеграме
    foreach($arr as $key => $value) {
        $txt .= "<b>".$key."</b> ".$value."%0A";
    };

//Передаем данные боту
    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
	if ($sendToTelegram) {

	header ("Location: /get-atom.html");

	}

}

?>