<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require 'libs.inc.php';
        require 'menu.inc.php';
        ?>

        <h1>Первая программа на чистом C++ в Qt</h1>

        <ul>Инструментарий:
            <li>Операционная система: Windows 7</li>
            <li>Среда разработки: Qt Creator (входит в Qt SDK)</li>
        </ul>

    <li>скачиваем и устанавливаем Qt (я предпочитаю: MinGW 4.8, OpenGL): <a href="http://qt-project.org/downloads">http://qt-project.org/downloads</a></li>
    <li>запускаем Qt Creator, для этого в меню "Пуск" (в поиске) набираем: qt creator</li>
    <li>если у Вас Qt Creator на русском, то я рекомендовал бы переключиться на английский. Для этого выбираем в меню "Инструменты" -> "Параметры..."</li>
    <li>в окне "Параметры" слева выбираем "Среда" -> открываем вкладку "Основные" -> выбираем в выпадающем списке "English" -> нажимаем кнопку "OK" -> перезапускаем Qt Creator</li>
    <li>в меню Qt Creator'а выбираем "File" -> "New File or Project..." (Ctrl+N)</li>
    <li>в разделе "Projects" выбираем "Other Project" -> во второй колонке выбираем "Empty Qt Project"</li>
    <li>нажимаем кнопку "Choose"</li>
    <li>в поле "Name" вводим: HelloWorld</li>
    <li>нажимаем "Next" -> "Next" -> "Finish"</li>
    <li>нажимаем правой кнопкой мыши по проекту в разделе "Projects" -> нажимаем "Add New...", как показано на рисунке:</li><br />
    <img src="img/pure_cpp_in_qt/001.png" />
    <li>в разделе "Files and Clases" выбираем "C++" -> во втором разделе выбираем "C++ Source File"</li>
    <li>нажимаем кнопку "Choose"</li>

    <li>в поле "Name" вводим: main.cpp</li>

    <li>нажимаем кнопку "Next" -> нажимаем кнопку "Finish"</li>

    <li>копируем в main.cpp следующий текст:</li>

    <p><strong>main.cpp</strong></p>
    <pre>
<code class="language-cpp">
#include &lt;iostream&gt;

int main() {
    std::cout << "Hello, World!" << std::endl;
    return 0;
}
</code>
    </pre>

    <li>запускаем приложение, для этого в меню выбираем "Run" -> "Run Project" (или F6)</li>

    <li>если мы хотим выровнить код, нужно выделить его, нажав Ctrl+A -> нажать Ctrl+I</li>
</body>
</html>
