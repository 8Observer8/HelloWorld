<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Fortune Server</title>
    </head>
    <body>
        <?php
        require 'libs.inc.php';
        require 'menu.inc.php';
        ?>
        
        <h1>Fortune Server</h1>
        
        <p>Этот пример находится в самом Qt</p>
        
        <p>Начнём разбор с файла "main.cpp"</p>
        
    <p><strong>main.cpp</strong></p>
    <pre>
<code class="language-cpp">
#include &lt;QApplication&gt;
#include &lt;QtCore&gt;

#include &lt;stdlib.h&gt;

#include "server.h"

int main(int argc, char *argv[])
{
    QApplication app(argc, argv);
    Server server;
    server.show();
    qsrand(QTime(0,0,0).secsTo(QTime::currentTime()));
    return app.exec();
}
</code>
    </pre>

    <p>
        QTime(0,0,0) - это временный объект QTime, который инициализирован
        временем: 00:00:00
    </p>
    
    <p>
        QTime::currentTime()) - статический метод, который возвращает объект
        QTime, инициализированный текущим временем
    </p>
    
    <p>
        QTime(0,0,0).secsTo(QTime::currentTime()) - статический метод, который
        возвращает количество секунд (типа int)
    </p>
    
    <p>
        qsrand(QTime(0,0,0).secsTo(QTime::currentTime())) - устранавливает
        отсчёт для генератора случайных чисел qrand()
    </p>
<!--
    <p><strong>main.cpp</strong></p>
    <pre>
<code class="language-cpp">
</code>
    </pre>
-->
    </body>
</html>
