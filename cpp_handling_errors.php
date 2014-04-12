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

        <h1>Обработка ошибок</h1>

        <p>Сам долго для себя выбирал стратегию ловли ошибок. Остановился на исключениях. Точнее даже на создании своих классов исключений, которые наследуют стандартные:</p>

        <img src="img/cpp_handling_errors/001.png" />

        <p>Настоятельно рекомендую прочитать главу "Chapter 10. Handling Errors" (особенно параграф "Writing Your Own Exception Classes") из книги:</p>
        <p>
            Название: Professional C++<br />
            Год: 2011<br />
            Автор: Marc Gregoire, Nicholas A. Solter, Scott J. Kleper<br />
            Количество страниц: 1104<br />
            Язык: английский<br />
            Скачать: <a href="http://kickass.to/wrox-professional-c-plus-plus-2nd-edition-2011-retail-ebook-debt-t7461950.html">http://kickass.to/wrox-professional-c-plus-plus-2nd-edition-2011-retail-ebook-debt-t7461950.html</a><br />
            Исходники: <a href="http://www.wrox.com/WileyCDA/WroxTitle/Professional-C-2nd-Edition.productCd-0470932449,descCd-DOWNLOAD.html">http://www.wrox.com/WileyCDA/WroxTitle/Professional-C-2nd-Edition.productCd-0470932449,descCd-DOWNLOAD.html</a><br />
        </p>

        Специально для демонстрации сделал два примера со стратегиями:
        <ul>
            <li>с исключениями (как в книге выше): <a href="https://github.com/8Observer8/FiveAndFive">https://github.com/8Observer8/FiveAndFive</a></li>
            <li>без исключений: <a href="https://github.com/8Observer8/text_file">https://github.com/8Observer8/text_file</a></li>
        </ul>

        <p>Стратегию "без исключений" мне подсказал "Igors" в одной из тем на форуме: <a href="http://www.prog.org.ru/index.php?action=forum">http://www.prog.org.ru/index.php?action=forum</a></p>

        <p>Потом я создал тему, где пытался выбрать стратегию для себя. В результате остановился на исключениях (на создании своих классов исключений, как в демо-примерах выше и указанном выше параграфе книги). Тема на форуме по Qt: <a href="http://www.prog.org.ru/topic_26723_0.html">http://www.prog.org.ru/topic_26723_0.html</a></p>

        <p>P.S. Здесь проект, как тестировать класс с исключениями FiveAndFive (выше). Только надо чтобы папка с проектом FiveAndFive и FiveAndFiveTests лежали в одном каталоге. Этот проект создаётся в Qt 5.2.1 так: File -> New File or Project... -> Other Project -> Qt Unit Test: <a href="https://github.com/8Observer8/FiveAndFiveTests">https://github.com/8Observer8/FiveAndFiveTests</a></p>
    </body>
</html>
