<?php
require 'send2tg.php';

  $title_content = "MSB PARTNER - официальный партнер UBER/BOLT/FREE NOW в Варшаве | Аренда авто | Работа водителем в Польше";
  $description_content = "MSB PARTNER - официальный партнер UBER/BOLT/FREE NOW в Варшаве. Аренда авто. Работа водителем в Польше";
  $keywords_content = "MSB PARTNER, официальный партнер UBER/BOLT/FREE NOW, аренда авто, работа водителем в Польше, работа водителем в Варшаве";
  
  $address = "Medic777@ukr.net";

if (isset($_POST['send_forma'])) {	

if (isset($_POST['not_spam']) AND $_POST['not_spam']==1) {echo "<meta http-equiv='refresh' content='0; url=index.php'>"; exit;}
else { 
  $name_form = $_POST['name'];
  $fam_form = $_POST['number'];
  #$tel_form = $_POST['tel_form'];
  #$email_form = $_POST['email_form'];
  #$lg_form = $_POST['lg_form'];


if($name_form != '' AND $fam_form != '')
{
$sub ="Сообщение с сайта msb-partner.pl";
$message="Сообщение с сайта msb-partner.pl: \n Имя: $name_form \n Телефон: $fam_form \n";


$verify = mail($address,$sub,$message,"Content-type:text/plain; charset = utf-8\r\nFrom:msb-partner.pl<No-Reply@msb-partner.pl>");
message_to_telegram($message);

echo "<script>alert('Ваше сообщение успешно отправлено!')</script><meta http-equiv='refresh' content='0; url=index.php'>";  exit;
}
else {echo "<script>alert('Форма заполнена неверно!')</script><meta http-equiv='refresh' content='0; url=index.php'>";  exit;}
}

}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo $title_content; ?></title>
<meta name="description" content="<?php echo $description_content; ?>">
<meta name="keywords" content="<?php echo $keywords_content; ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NV92WK3');</script>
<!-- End Google Tag Manager -->
<?php
$dir_style = "style.css";
$dir_style_min = "style_min.css";
?>
<link rel='stylesheet' media='(min-width: 1040px)' href="style.css?<?php echo filemtime($dir_style); ?>" type="text/css">
<link rel='stylesheet' media='(max-width: 1040px)' href="style_min.css?<?php echo filemtime($dir_style_min); ?>" type="text/css">
<meta http-equiv="Expires" content="<?php $rDate = new DateTime('+3600 seconds'); echo $rDate->format('D, j M Y h:i:s'); ?>">
<link rel="canonical" href="http://msb-partner.pl">
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NV92WK3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class='site'>

<!--Header-->
<div class="top">

<div class="top_block">

    <div class='text_top'>Аренда авто</div>
    <div class='tel_top_number'><a href="tel:+48508541089" style="color: #16374e">+48 508 541 089</a></div>
    <div class='tel_top_img'><a href="https://wa.me/48508541089"><img src='img/whatsapp_top.png' width='100%' alt="WhatsApp"></a></div>
    <div class='tel_top_img'><a href="viber://chat?number=+380937677770"><img src='img/viber_top.png' width='100%' alt="Viber"></a></div>
    <div class='tel_top_img'><a href="https://t.me/+380937677770"><img src='img/telegram_top.png' width='100%' alt="Telegram"></a></div>
<div class='clear'></div>

</div>

<div class="top_lg">
<div class='text_lg_akt'><a href='index.php'>RU</a></div>
<div class='text_lg'><a href='pl'>PL</a></div>
<div class='text_lg'><a href='en'>EN</a></div>
</div>

<div class="block_img">
<img src='img/1.jpg' width='100%' alt="MSB PARTNER">

<div class='logo_block'><div class='top_logo'><img src='img/logo.png' width='100%' alt="MSB PARTNER"></div>
<div class="logo_text">
<div class="logo_text_0">аренда авто для работы в такси,</div>
<div class="logo_text_1">официальный партнер</div>
<div class="logo_text_2">UBER/BOLT/FREE NOW</div>
<div class="logo_text_1">в Варшаве</div>
</div>
</div>
</div>

</div>


<div class='block_content'>

<!--Block 1-->
<div class='content_zag'>Работа водителем в Польше</div>
<div class="block_img">
<img src='img/2.jpg?777' width='100%' alt="Работа водителем в Польше">

<div class="block_img_text">
<div class="text_1">Работа водителем в Польше достаточно перспективное направление, которое может принести водителю хороший доход. Однако, чтобы приступить к работе и стать партнером Uber или Bolt в Варшаве необходимо иметь комфортный автомобиль и легализовать свою деятельность.</div>

<div class="text_2">Если у вас нет собственного автомобиля и не знаете, как стать партнером UBER в Варшаве, то наша компания MSB PARTNER станет вашим лучшим партнером в данном вопросе. Мы предоставляем автомобили в аренду на длительный срок для работы водителем в Польше. Сотрудничая с нами, можно будет оперативно стать партнером <strong>UBER, BOLT, FreeNow</strong> Варшава.</div>
</div>
</div>

<!--Block 2-->
<div class='content_zag'>Особенности сотрудничества с нами</div>
<div class="block2">
<div class="block2_left">
<div class="text_3">Наша компания имеет большую команду опытных специалистов, которые длительное время являются партнерами <strong>Uber, Bolt и FreeNow</strong>. Поэтому каждый водитель может рассчитывать на оперативное оформление аккаунта и возможность приступить к работе. Мы возьмем на себя все основные обязанности, оформим документы, а также предоставим автомобиль в аренду на длительный срок в Польше.</div>

<div class="text_4">К кандидатам у нас имеются следующие критерии:</div>

<div class="block2_cikl">
<div class="block2_cikl_foto"><img src='img/3_2.png' class="block2_cikl_img" alt="Наличие действующих водительских удостоверений"></div>
<div class="block2_cikl_name">Наличие действующих водительских удостоверений</div>
</div>

<div class="block2_cikl">
<div class="block2_cikl_foto"><img src='img/3_3.png?777' class="block2_cikl_img" alt="Паспорт"></div>
<div class="block2_cikl_name">Паспорт</div>
</div>

<div class="block2_cikl">
<div class="block2_cikl_foto"><img src='img/3_4.png' class="block2_cikl_img" alt="Справка о несудимости"></div>
<div class="block2_cikl_name">Справка о несудимости</div>
</div>

<div class="text_5">Таким образом, стать партнером UBER с нами может каждый желающий.</div>

</div>
</div>

<!--Block 3-->
<div class='content_zag'>Автопарк автомобилей для аренды</div>
<div class="block_img">
<img src='img/4.jpg' width='100%' alt="Автопарк автомобилей для аренды MSB PARTNER">

<div class="block_img_text">
<div class="text_6">Сотрудничая с нами, вы можете рассчитывать на долгосрочный аренд автомобиля в Варшаве для работы водителем. На выбор предоставлен достаточно большой автопарк легковых автомобилей марки Toyota и Skoda. дополнительный бесплатный технический осмотр. При выявлении любой неисправности, она будет в кратчайшие сроки решена. После выбора и аренды автомобиля, можно будет стать партнером <strong>Uber, Bolt, FreeNow</strong>.</div>
</div>
</div>

<!--Block 4-->
<div class='content_zag'>Преимущества компании и список услуг</div>
<div class="block_img"><img src='img/5.png' width='100%' alt="Преимущества компании MSB PARTNER и список услуг"></div>

<div class="text_7">Помимо широкого выбора автомобилей для аренды, наша компания MSB PARTNER предоставляет своим партнерам и другие преимущества и услуги:</div>

<div class="block4">
<div class="block4_cikl" style="background-image: url(img/5_1_11.png)"></div>
<div class="block4_cikl" style="background-image: url(img/5_1_2.png)"></div>
<div class="block4_cikl" style="background-image: url(img/5_1_51.png)"></div>
</div>

<!--Block 5-->
<div class="block5">

<div class="block5_1">
<div class="text_8">В случае проблем с аккаунтом, можно будет обратиться в отдел помощи. Специалист данного отдела помогут оперативно решить возникшие вопросы.</div>
<div class="text_8">Активное использование автомобиля приводит к необходимости проведения регулярного ТО и ремонта. MSB PARTNER предоставляет доступ к собственному и качественному автосервису. Сотрудники СТО оперативно и качество проведут все регламентные и внештатные работы.</div>
<div class="text_8">Чтобы самостоятельно не заниматься подсчетом расходов и доходов, наши опытные специалисты выполнят все требуемые процедуры и предоставят подробный отчет. Также активные партнеры могут рассчитывать на различные поощрения и скидки.</div>
</div>

<div class="block5_2">
<div class="block_forma">

<form action='' name="forma" method='post' enctype='multipart/form-data'>
 
 <div class="forma_pole_block"><label><div class="forma_name">Имя</div><input name="name_form" type="text" class="forma_pole" required></label></div>
 
 <div class="forma_pole_block"><label><div class="forma_name">Фамилия</div><input name="fam_form" type="text" class="forma_pole" required></label></div>
 
  <div class="forma_text">Предпочтительный язык:</div>
  <div class="forma_lg_block">
  <img src='img/ua.png' width='100%' alt="UA" class="forma_radio_img"><input type="radio" name="lg_form" value="UA" class="forma_radio" checked>
  <img src='img/pl.png' width='100%' alt="PL" class="forma_radio_img"><input type="radio" name="lg_form" value="PL" class="forma_radio">
  <img src='img/en.png' width='100%' alt="EN" class="forma_radio_img"><input type="radio" name="lg_form" value="EN" class="forma_radio">
  <img src='img/ru.png?666' width='100%' alt="RU" class="forma_radio_img"><input type="radio" name="lg_form" value="RU" class="forma_radio">
  
  </div>
  
 <div class="forma_pole_block"><label><div class="forma_name">Номер телефона</div><input name="tel_form" type="text" class="forma_pole" required></label></div>
 
<div class="forma_pole_block"><label><div class="forma_name">E-mail</div><input name="email_form" type="text" class="forma_pole" required></label></div>

<div class='clear'></div>

<label id="formus"><input type='checkbox' name='not_spam' value='1'> Не спам</label>

<input name="send_forma" class="forma_button" type='submit' value='Отправить'>
</form>

</div>
</div>

</div>

</div>


<!--Footer-->
<div class='niz'>
<div class='niz_block'>

<div class='niz_left'><img src='img/logo.png' width='100%' alt="MSB PARTNER"></div>

<div class='niz_center'>
<div class="logo_text_0">аренда авто для работы в такси,</div>
<div class="logo_text_1">официальный партнер</div>
<div class="logo_text_2">UBER/BOLT/FREE NOW</div>
<div class="logo_text_1">в Варшаве</div>
</div>


<div class='niz_right'>
<div class="text_right">Для&nbsp;аренды авто&nbsp;звоните</div>
<style>
    .tel_niz_img:hover{
        opacity: 0.5;
        filter: alpha(opacity=50);
    }
</style>
<div class='tel_niz_number'><a href="tel:+48508541089" style="color: #F6F6F6">+48 508 541 089</a></div>
    <div><div class='tel_niz_img'><a href="viber://chat?number=+380937677770"><img src="img/viber_niz.png" width='150%' alt="Пример"></a></div>
    <div class='tel_niz_img'><a href="https://wa.me/48508541089"><img src="img/whatsapp_niz.png" width='150%' alt="Пример"></a></div>
    <div class='tel_niz_img'><a href="https://t.me/+380937677770"><img src="img/telegram_niz.png" width='150%' alt="Пример"></a></div></div>
<div class='niz_adres'>
ul.Arkuszowa 176,<br>
01-935 Warszawa,
</div>
<div class='niz_adres'>
Пн-Пт 09:00-18:00<br>
Сб-Вс 10:00-15:00
</div>

</div>

</div>
<div class='niz_niz'></div>
</div>

</div>

</body>
</html>