<?php
/**
 * Created by PhpStorm.
 * User: dev48
 * Date: 11.08.15
 * Time: 10:03
 */
header("Content-type:text/html; charset=utf-8"); // кодировка проекта
ob_start();  // cтартуем буфферизацию контента
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home61</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">

    <link href="css/bootstrap.css" rel="stylesheet" media="screen"> <!-- подключ. css-файл Bootstrapа-->
    <link href="css/style.css" rel="stylesheet" media="screen"> <!-- подключ.свой основной css-файл-->
    <link href="css/respons_style.css" rel="stylesheet" media="screen"> <!-- подключ.свой css-файл для респонса-->
    <link href="css/font-awesome.css" rel="stylesheet"> <!-- подключ.css-файл font-awesome со шрифт.иконками-->
</head>
<body>

<div class='container-fluid'>


<!----------------------------------------------------------------------------------------------------------------------------------------------->
    <div class="row ver"> <!-- Гориз.НавБар- НАЧАЛО-->

        <div class='navbar navbar-inverse'> <!--navbar-inverse__START-->

            <div class='col-sm-2 col-sm-offset-1' id='col_sm_2_navbar_res'> <!-- col-2__START-->
                <div class='navbar-header'>     <!--Нeader Нав.Бар НАЧАЛО-->
                    <h3 class='grey_text'>
                        <img src="main_images/homik.gif" alt=""> HOME<span class='_61'>61</span>
                        <div class='small_text'> &nbsp; <img src="main_images/flag_english.jpg" alt="">
                            English <em class="caret"></em>
                        </div>
                    </h3>
                    <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#responsive-menu'> <!--ID c diva(nav)-->
                        <span class='sr-only'>Открыть навигацию</span>
                        <span class='icon-bar'></span>
                        <span class='icon-bar'></span>
                        <span class='icon-bar'></span>
                        <span class='icon-bar'></span>
                    </button>
                </div>                        <!--Нeader Нав.Бар КОНЕЦ -->
            </div>                 <!-- col-2__END-->

            <div class='col-sm-9' id='col_sm_9_navbar_res'> <!-- col-9__START-->
                <nav class='navbar-collapse collapse' id='responsive-menu'>
                    <ul id="myTab" class="nav nav-tabs" >
                        <li class="active respon_li_ver" id="active"><a href="#home" role="tab" data-toggle="tab"><em class='glyphicon glyphicon-home'></em>&nbsp Rentals </a></li>
                        <li class="respon_li_ver"><a href="#profile" role="tab" data-toggle="tab"><em class='glyphicon glyphicon-user'></em>&nbsp; Sales </a></li>
                        <li class="respon_li_ver"><a href="#market" role="tab" data-toggle="tab"><em class='glyphicon glyphicon-shopping-cart'></em>&nbsp; My Visits </a></li>
                        <li class="respon_li_ver"><a href="#aboutus" role="tab" data-toggle="tab"><em class='glyphicon glyphicon-folder-open'></em> &nbsp; My Calendar </a></li>
                        <li class="disabled respon_li_ver" id="dizz"><a href="#neighborhood" role="tab" data-toggle="tab"><em class='glyphicon glyphicon-folder-open'></em> &nbsp; Neighborhood </a></li>
                        <li class="dropdown respon_li_ver"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" id='dropdown_link'>Dropdown <em class="caret"></em></a>
                            <ul class="dropdown-menu respon_li_ver">     <!--Выпад.МЕНЮ 1 Ур.НАЧАЛО-->
                                <li><a href="#dropdown1">Link_1</a></li>
                                <li><a href="#dropdown2">Link_2</a></li>
                                <li class='divider'></li> <!-- визуальный разделитель -->
                                <li class='dropdown-submenu'><a href="#dropdown3">Link_3</a>
                                    <ul class='dropdown-menu'>   <!--Выпад.МЕНЮ 2 Ур.НАЧАЛО-->
                                        <li><a href="#subdropdown_1">SUBdropdown 1</a></li>
                                        <li><a href="#subdropdown_2">SUBdropdown 2</a></li>
                                        <li><a href="#subdropdown_3">SUBdropdown 3</a></li>
                                        <li><a href="#subdropdown_4">SUBdropdown 4</a></li>
                                    </ul>                         <!--Выпад.МЕНЮ 2 Ур.КОНЕЦ-->
                                </li>
                            </ul>                          <!--Выпад.МЕНЮ 1 Ур.КОНЕЦ-->
                        <li role="tab" data-toggle="tab" id="logo_and_img">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <img class="elipse_img" src="main_images/sign_photo.jpg" alt="">&nbsp; <span class="hey_silviu">Hey Silviu &nbsp;</span>
                        </li>
                        <li><a href="#listings" role="tab" data-toggle="tab"><em class='glyphicon glyphicon-folder-open'></em> &nbsp; My Listings </a></li>
                    </ul>
                </nav>
            </div>                 <!-- col-9__END-->
        </div> <!--navbar-inverse__END-->
    </div> <!-- Гориз.НавБар- КОНЕЦ-->
    <!----------------------------------------------------------------------------------------------------------------------------------------------------->
    <br>
    <!----------------------------------------------------------------------------------------------------------------------------------------------------->
    <div class='row'> <!-- -->

        <div class='col-xs-4'>
            <p class='text-muted'> Ваш комментарий" на <abbr class='initialism' title='google ruls'>Google Chrome</abbr> галочку не как не поставить он кнопку(checkbox) не видит, пришлось с другого браузера комментарий писать. галочку не как не поставить он кнопку(checkbox) не видит, пришлось с другого браузера комментарий писать <a href="http://i.ua" title='E-Mail I.UA'>E-mail I.UA &raquo;</a>.
            </p>
        </div>

        <div class='col-xs-4 delete_border'>
            <div class='col-xs-12'>
                <p> Ваш комментарий" на Google Chrome галочку <a href='#'><em class='glyphicon glyphicon-heart' style='font-size:56px;' ></em></a> не как не поставить он кнопку(checkbox) не видит, пришлось с другого браузера комментарий писать.
                </p>
                <p> <code>Выделен в строке. Выделен в строке.</code>
                </p>
                <i class="fa fa-key fa-lg"></i> <i class="fa fa-camera-retro" style="font-size:30px; color:red;"> </i>  <i class="fa fa-cog fa-4x fa-spin"></i>

            </div>
        </div>

        <div class='col-xs-4'>
            <p> Тем не менее, в некоторых ситуациях может быть желанным отключения этой функции . Таким образом, мы также предоставляем возможность отключить API-атрибуты, через отвязке всех событий в пространстве имен (namespaced) документа, при помощи Ваш комментарий" на галочку не как не поставить он кнопку(checkbox) не видит, пришлось с другого браузера комментарий писать. галочку не как не поставить он кнопку(checkbox) не видит, пришлось с другого браузера комментарий писать </a>.<br>
            </p>
        </div>

    </div>
    &nbsp

</div> <!--<div class='container-fluid'>__END-->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins)
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> это онлайновая библиотека jQuery,она будет работать и выполнять
             скрипты только при подключ.INTERNET. Чтобы добавить и подкл.эту библ.jQuery,нужно скопировать эту ссылку,и загрузить в адрес.строке браузера,
             затем весь текст, что появится(это и есть сама библиотека) сохранить(сохранить как прав.клав.на нем) как /jquery.min.js/-файл в папке /js/
             и потом тут(важно именно тут и выше строки:<script src="js/bootstrap.min.js" type="text/javascript"></script>) подключить эту библиотеку,
             прописав строку: <script src="js/jquery.min.js" type="text/javascript"></script> -->

<script src="js/jquery.min.js" type="text/javascript"></script> <!-- Include lib.jQuery из он-лайновой ссылки-->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js" type="text/javascript"></script> <!-- Include lib.Javascript из исходника Бутстрап-->


</body>
</html>
