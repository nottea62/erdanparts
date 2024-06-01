<?

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];

$tocen = '6584025940:AAEWsQjPeuyTpvMSH20jLC7yIY1Yq0oNfC4';
$chat_id = '-4218881982';
// https://api.telegram.org/bot6584025940:AAEWsQjPeuyTpvMSH20jLC7yIY1Yq0oNfC4/getUpdates

$user = array(
    'Имя пользователя:' => $name,
    'Телефон:'          => $phone,
    'Email:'            => $email
);
 
foreach ($user as $key => $value) {
   $test .= "<b>  $key  </b> $value" . "%0A";
};

$telegram = fopen("https://api.telegram.org/bot{$tocen}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$test}","r");

if($telegram){
    header('Location: ../thank-you.html');
}
else {
    echo "ERROR";
}


?>