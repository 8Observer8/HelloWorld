<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Работа с Git</title>
    </head>
    <body>
        <?php
        require 'libs.inc.php';
        require 'menu.inc.php';
        ?>
        
        <h1>Работа с Git</h1>
        
        <h3>Как сохранить файлы проекта на удалённый сервер (github.com)</h3>
        <ul>
            <li>регистрируемся на <a href="https://github.com/">https://github.com/</a></li>
            <li>создаём удалённый репозитарий для хранения проекта, для этого: вправом верхнем углу сайта нажимаем значок "+" -> выбираем "New repository"</li>
            <li>в поле "Repository name" пишем имя проекта, например: HelloGit</li>
            <li>в поле "Description" пишем описание проекта, например: Первый проект</li>
            <li>нажимаем кнопку "Create repository"</li>
            <li>скачиваем и устанавливаем Git: <a href="http://msysgit.github.io/">http://msysgit.github.io/</a></li>
            <li>указываем имя и электронную почту, для этого запускаем консоль и вводим команды:</li>
            <ul>
                <li>git config --global user.name "Your Name"</li>
                <li>git config --global user.email "your_email@whatever.com"</li>
            </ul>
            <li>указываем окончания строк, для этого вводим команды:</li>
            <ul>
                <li>git config --global core.autocrlf true</li>
                <li>git config --global core.safecrlf true</li>
            </ul>
            <li><strong>Примечание:</strong> имя, электронная почта и окончания строк указываются один раз после установки Git</li>
            
        </ul>
        
        <h3>Полезные ссылки</h3>
        <p>Подробное описание работы с Git: <a href="http://githowto.com/ru/">http://githowto.com/ru/</a></p>
    </body>
</html>
