<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Разработка ПО на C++</title>
    </head>
    <body>
        <?php
        require 'libs.inc.php';
        require 'menu.inc.php';
        ?>

        <h1>Разработка ПО на C++</h1>

        <ul>
            <li>скачиваем и запускаем setup-x86.exe или setup-x86_64.exe по ссылке http://cygwin.com/</li>
            <li>на этапе установки раскрываем узел "Devel" и отмечаем:
                <ul>
                    <li>gcc-g++</li>
                    <li>make</li>
                    <li>gdb</li>
                    <li>cppunit</li>
                    <li>git</li>
                    <li>git GUI</li>
                    <li>doxygen</li>
                    <li>doxygen GUI</li>
                </ul>
            </li>
            <li>скачаваем и устанавливаем среду NetBeans https://netbeans.org/downloads/ (я предпочитаю английскую версию)</li>
            <li>дожидаемся окончания установок</li>
            <li>запускаем NetBeans</li>
            <li>в меню нажимаем "Tools" -> нажимаем "Options"</li>
            <li>выбираем вкладку "Build Tools"</li>
            <li>нажимаем кнопку "Add..." -> нажимаем кнопку "Browse" и выбираем "C:\cygwin64\bin"</li>
            <li>нажимаем кнопку "OK"</li>
            <li>Создаём новый проект, для этого в меню нажимаем "File" -> нажимаем "New Project..." -> выбираем "C/C++" -> выбираем "C/C++ Application"</li>
            <li>нажимаем кнопку "Next" -> вводим имя поекта "FirstApplication" (без ковычек)</li>
            <li>нажимаем кнопку "Finish"</li>
        </ul>
    </body>
</html>
