<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Установка NetBeans (C++)</title>
    </head>
    <body>
        <?php
        require 'libs.inc.php';
        require 'menu.inc.php';
        ?>

        <h1>Установка Netbeans для разработки консольных приложений на C++</h1>

        <ul class="content">
            <li>скачиваем и запускаем "setup-x86.exe" (или "setup-x86_64.exe"): <a href="http://cygwin.com/">http://cygwin.com/</a></li>

            <li>на следующих рисунках показаны этапы установки (к последнему рисунку прилагается список пакетов, которые нужно выбрать для установки)</li>

            <img src="http://i.pixs.ru/storage/4/8/3/001png_8498779_10291483.png" /><br />

            <img src="http://i.pixs.ru/storage/4/8/5/002png_4484180_10291485.png" /><br />
            <img src="http://i.pixs.ru/storage/4/8/7/003png_6210665_10291487.png" /><br />
            <img src="http://i7.pixs.ru/storage/4/8/9/004png_9701947_10291489.png" /><br />
            <img src="http://i.pixs.ru/storage/4/9/4/005png_5792513_10291494.png" /><br />
            <img src="http://i.pixs.ru/storage/4/9/5/006png_2053067_10291495.png" /><br />

            <p>Список пакетов, которые нужно выбрать как на следующем рисунке (mingw-gcc-g++ - выбирать не нужно! он выбран для примера)</p>

            <li>cppunit: C++ unit testing framework</li>
            <li>gcc-core: GNU Compiler Collection (C, OpenMP)</li>
            <li>gcc-g++: GNU Compiler Collection (C++)</li>
            <li>gdb: The GNU Debugger</li>
            <li>make: The GNU version of the 'make' utility</li>

            <img src="http://i7.pixs.ru/storage/4/9/7/007png_9232396_10291497.png" />

            <li>нажимаем кнопку "Next" и соглашаемся с установкой всех зависимостей</li>

            <li>дожимаемся окончания установки</li>

            <li>для работы среды NetBeans нужно Java-окружение. Устанавливаем: <a href="http://java.com/">http://java.com/</a></li>

            <li>скачиваем и устанавливаем NetBeans (я предпочитаю английскую версию) <a href="https://netbeans.org/downloads/">https://netbeans.org/downloads/</a></li>

            <li>запускаем NetBeans и в меню выбираем "Tools" -> "Options" -> в верхней части выбираем "C/C++"</li>

            <li>нажимаем кнопку "Add..." -> нажимаем кнопку "Browser" и выбираем путь "C:\cygwin64\bin" (при необходимости выбираем из выпадающего списка с названием "Tool Collection Family" - выбираем "Cygwin 4.x") Выглядит это так:</li>

            <img src="http://i.pixs.ru/storage/5/4/7/008png_2043333_10291547.png" />

            <li>в меню выбираем "File" -> "New Project..."</li>

            <li>выбираем, как на рисунке:</li>

            <img src="http://i.pixs.ru/storage/9/8/2/009png_8806402_10291982.png" />

            <li>нажимаем кнопку "Next" -> вводим имя проекта: HelloWorld -> нажимаем кнопку "Finish"</li>

            <p><strong>main.cpp</strong></p>
            <pre>
<code class="language-cpp">
#include &lt;iostream&gt;

int main(int argc, char *argv[]) {

    std::cout << "Hello, World!" << std::endl;

    return 0;
}
</code>
            </pre>

            <li>запускаем приложение, для этого в меню выбираем "Run" -> "Run Project" (или F6)</li>

            <li>если мы хотим выровнить код, то надо нажать Shift+Alt+F</li>

        </ul>
    </body>
</html>
