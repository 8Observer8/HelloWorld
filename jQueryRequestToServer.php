<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Запрос к удалённому серверу на jQuery</title>
    </head>
    <body>
        <?php
        require 'libs.inc.php';
        require 'menu.inc.php';
        ?>
        
        <h1>Запрос к удалённому серверу на jQuery</h1>
        
        <p class="content">В инструкции будет использоваться бесплатная среда разработки с открытым исходным кодом - NetBeans</p>
        
        <ul class="content">
            <li>Устанавливаем Java (это нужно для работы среды NetBeans):  <a href="http://java.com/">http://java.com/</a></li>
            <li>Скачиваем и устанавливаем среду NetBeans (перед скачиванием выбираем английскую версию и лучше скачать полную версию "All"): <a href="https://netbeans.org/downloads/">https://netbeans.org/downloads/</a></li>
            <li>Нам надо установить и запусить (специально не исправил слово, так как оно смешное!) локальный сервер Apache, для этого скачиваем и устанавливаем XAMPP (при установке оставляем путь поумолчанию C:/xampp): <a href="http://www.apachefriends.org/download.html">http://www.apachefriends.org/download.html</a></li>
            <li>Запускаем XAMPP</li>
            <li>Запускаем локальный сервер Apache, для этого нажимаем "Start" на панели XAMPP, как показано на рисунке:</li>
            <table class="content">
                <tr><td><img src="img/jQueryRequestToServer/001.png" /></td></tr>
            </table>
            <li>Запускаем среду NetBeans</li>
            <li>Создаём новый проект, для этого выбираем в меню "File" -> "New Project..." -> "PHP" -> "PHP Application" -> "Next", как показано на рисунке:</li>
            <table class="content">
                <tr><td><img src="img/jQueryRequestToServer/002.png" /></td></tr>
            </table>
            <li>В текстовом поле "Project Name" вводим имя проекта: jQueryRequest</li>
            <li>Выбираем каталог, где будут храниться файлы проекта (наш проект обязательно должен располагаться в каталоге "C:\xampp\htdocs\"), как показано на рисунке:</li>
            <table class="content">
                <tr><td><img src="img/jQueryRequestToServer/003.png" /></td></tr>
            </table>
            <li>Добавим главный файл сайта - "index.php", для этого это нажимаем правой кнопкой мыши (ПКМ) по имени проекта (на панели "Projects") и выбираем: "New" -> "PHP Web Page...", как показано на рисунке:</li>
            <table class="content">
                <tr><td><img src="img/jQueryRequestToServer/004.png" /></td></tr>
            </table>
            <li>В открывшимся окне в текстовом поле "File Name" вводим имя файла: index -> нажимаем кнопку "Finish", как показано на рисунке:</li>
            <table class="content">
                <tr><td><img src="img/jQueryRequestToServer/005.png" /></td></tr>
            </table>
            <li>Теперь наша задача создать кнопку, после нажания на которой наш сайт отправит запрос на удалённый сервер погоды</li>
            <p>Примечание. Далее мы будем использовать мой "ключ", который я создал по инструкции "How to get access to free weather API?" на ресурсе: <a href="http://www.worldweatheronline.com/free-weather-feed.aspx">http://www.worldweatheronline.com/free-weather-feed.aspx</a></p>
            <li>Протестируем, что ключ рабочий, для этого скопируем ключ: ca94f06c9f5eedc355a426b72c93b42ab289be22 в текстовое поле "API Key", как показано на рисунке:</li>
            <table class="content">
                <tr><td><img src="img/jQueryRequestToServer/006.png" /></td></tr>
            </table>
            <li>Нажимаем кнопку "GET", как показано на рисунке:</li>
            <table class="content">
                <tr><td><img src="img/jQueryRequestToServer/007.png" /></td></tr>
            </table>
            <li>Нажимаем кнопку "Try it!", как показано на рисунке:</li>
            <table class="content">
                <tr><td><img src="img/jQueryRequestToServer/008.png" /></td></tr>
            </table>
            <li>В поле "Response Body" мы видим ответ в Json-формате, как показано на рисунке:</li>
            <table class="content">
                <tr><td><img src="img/jQueryRequestToServer/009.png" /></td></tr>
            </table>
            <li>Примечание. Чтобы создать свой ключ надо выполнить инструкцию "How to get access to free weather API?" <a href="http://www.worldweatheronline.com/free-weather-feed.aspx">http://www.worldweatheronline.com/free-weather-feed.aspx</a></li>
            <li>Перед тем как вернуться к нашей программе скопируем вызов из текстового поля "Call", который мы будем отправлять серверу (а сервер пришлёт нам Json-ответ показанный выше), как показано на ризунке:</li>
            <table class="content">
                <tr><td><img src="img/jQueryRequestToServer/010.png" /></td></tr>
            </table>
            <li>И так, в файле "index.php" пишем код кнопки, при нажатии на которую будет отправляться запрос на удалённый сервер. Весь код в файле "index.php" теперь выглядит следующим образом:</li>
            <p><strong>index.php</strong></p>
            <pre>
<code class="language-php">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset="UTF-8"&gt;
        &lt;title&gt;Запрос к удалённому серверу&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;input id="requestButton" type="button" value="Показать температуру в Лондоне за 5 дней" /&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code>
            </pre>

            <li>Ниже кнопки напишем элемент для вывода ответа от сервера:</li>
            <p><strong>index.php</strong></p>
            <pre>
<code class="language-php">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset="UTF-8"&gt;
        &lt;title&gt;Запрос к удалённому серверу&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;input id="requestButton" type="button" value="Показать температуру в Лондоне за 5 дней" /&gt;&lt;br /&gt;
        &lt;span id="output"&gt;&lt;/span&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code>
            </pre>

            <li>Создадим обработчик кнопки в файле "request.js", для этого создадим папку с именем "js", где будет располагаться файл "request.js"</li>
            <p><strong>request.js</strong></p>
            <pre>
<code class="language-php">
$( document ).ready( function( ) {
    $( '#requestButton' ).click( function() {
        var city = "London";
        var format = "json";
        var keyValue = "ca94f06c9f5eedc355a426b72c93b42ab289be22";
        $.get( 'https://api.worldweatheronline.com/free/v1/weather.ashx', { q: city, format: format, num_of_days: 5, key: keyValue }, function( data ) {
            $("#output").html("<pre>" + JSON.stringify(data, null, 2) + "</pre>");
        } );
    } );
} );
</code>
            </pre>
            
            <li>Скачиваем библиотеку jQuery: <a href="http://jquery.com/">http://jquery.com/</a> и добавляем её в папку libs, как показано на рисунке:</li>
            <img src="img/jQueryRequestToServer/011.png" />
            <li>Подключаем в файле "index.php" скрипты "jquery.min.js" и "request.js"</li>
            <p><strong>index.php</strong></p>
            <pre>
<code class="language-php">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset="UTF-8"&gt;
        &lt;title&gt;Запрос к удалённому серверу&lt;/title&gt;
        &lt;script type="text/javascript" src="js/libs/jquery-1.9.0/jquery.min.js"&gt;&lt;/script&gt;
        &lt;script type="text/javascript" src="js/request.js"&gt;&lt;/script&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;input id="requestButton" type="button" value="Показать температуру в Лондоне за 5 дней" /&gt;&lt;br /&gt;
        &lt;div id="output"&gt;&lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code>
            </pre>
            
            <li>Запускаем приложение (F6)</li>
            <li>Нажимаем на кнопку "Показать температуру в Лондоне за 5 дней" и мы видим на экране ответ от сервера:</li>
            <img src="img/jQueryRequestToServer/012.png" />
            

<!--            <li> ...и мы получим ответ и покажем его на экране. Для начала, прочитайте инструкцию "How to get access to free weather API?" на ресурсе: <a href="http://www.worldweatheronline.com/free-weather-feed.aspx">http://www.worldweatheronline.com/free-weather-feed.aspx</a></li>
            <li>Согласно инструкции, надо зарегистрироваться: <a href="https://developer.worldweatheronline.com/auth/register">https://developer.worldweatheronline.com/auth/register</a></li>
            <li>Зайти: <a href="https://developer.worldweatheronline.com/auth/login">https://developer.worldweatheronline.com/auth/login</a></li>
            <li></li>-->
        </ul>
        
    </body>
</html>
