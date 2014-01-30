    <!DOCTYPE html>
    <!--
    To change this license header, choose License Headers in Project Properties.
    To change this template file, choose Tools | Templates
    and open the template in the editor.
    -->
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Как собрать статически Qt 5.2.0 на Windows XP</title>
        </head>
        <body>
            <?php
            require 'libs.inc.php';
            require 'menu.inc.php';
            ?>

            <h1>Инструкция для сборки приложений на Qt в один exe без зависимостей от libstdc++-6.dll, libgcc_s_dw2-1.dll, Qt5Core.dll, Qt5Gui.dll и т.д.</h1>

            <p>Инструментарий:</p>
        <li>Версия Qt: Qt 5.2.0 for Windows 32-bit (MinGW 4.8, OpenGL, 689 MB)</li>

            <p><strong>Примечание:</strong> после сборки можно будет создавать статические приложения, которые не требуют библиотек Qt и MinGW. Можно будет переключаться между сборками (которая по умолчанию и статической) через QtCreator.</p>

            <li>скачиваем и устанавливаем <strong>Qt 5.2.0 for Windows 32-bit (MinGW 4.8, OpenGL, 689 MB)</strong> (при установке ставим галочку <strong>Source Components</strong>) http://qt-project.org/downloads</li>

        <li>переходим в каталог C:\Qt\Qt5.2.0\5.2.0\Src\qtbase\mkspecs\win32-g++ и открываем файл qmake.conf</li>

        <li>в файле qmake.conf отыскиваем переменную QMAKE_LFLAGS и приравниваем ей значение, вот так:</li>

        <p><strong>QMAKE_LFLAGS = -static -static-libgcc</strong><p>

        <li>отрываем терминал Пуск -> Qt 5.2.0 -> 5.2.0 -> MinGW 4.8 (32-bit) -> Qt 5.2.0 for Desktop (MinGW 4.8 32 bit)</li>

        <li>переходим в каталог с исходниками Qt, для этого вводим команду и нажимаем Enter:</li>

        <p><strong>cd c:\Qt\Qt5.2.0\5.2.0\Src\qtbase</strong></p>

        <li>конфигурируем этапы установки, для этого вводим команду и нажимаем Enter:</li>

        <p><strong>configure -static -prefix "C:\Qt\Qt5.2.0_static" -opengl desktop -nomake examples -nomake tests</strong></p>

        <li>выбираем тип лицензии "Open Source Edition" и подтверждаем лицензию</li>

        <li>ожидаем окончания конфигурирования</li>

        <li>производим компиляцию исходников Qt, для этого вводим команду и нажимаем Enter:</li>

        <p><strong>mingw32-make</strong></p>

        <li>ожидаем окончания компиляции исходников (на моей машине это заняло 1 час 20 минут)</li>

        <li>копируем файлы в каталог установки (каталог установки мы указали на этапе конфигурирования C:\Qt\Qt5.2.0_static), для этого вводим команду и нажимаем Enter:</li>

        <p><strong>mingw32-make install</strong></p>

        <li>ожидаем окончания копирования</li>

        <li>запускаем QtCreator</li>

        <li>в меню нажимаем <strong>Инструменты</strong> -> нажимаем <strong>Параметры</strong></li>

        <li>слева выбираем <strong>Сборка и запуск</strong>, а справа выбираем вкладку <strong>Профили Qt</strong></li>

        <li>нажимаем кнопку <strong>Добавить</strong> и указываем путь до qmake.exe "C:\Qt\Qt5.2.0_static\bin\qmake.exe"</li>

        <li>нажимаем кнопку <strong>Применить</strong></li>

        <li>переходим на вкладку <strong>Комплекты</strong> и нажимаем кнопку <strong>Добавить</strong></li>

        <li>в поле <strong>Название</strong> вводим имя <strong>Desktop Qt 5.2.0 Static MinGW 32 bit</strong></li>

        <li>если поле <strong>Отладчик</strong> пусто, то нажимаем кнопку <strong>Управление</strong></li>

        <li>нажимаем кнопку <strong>Добавить</strong>, вводим название (например gdb) и указываем путь к отладчику "C:\Qt\Qt5.2.0\Tools\mingw48_32\bit\gdb.exe"</li>

        <li>нажимаем кнопку <strong>Применить</strong></li>

        <li>возвращаемся на на вкладку <strong>Комплекты</strong></li>

        <li>в выпадающем списке <strong>Профиль Qt</strong> выбираем тот, которые мы указали на вкладке <strong>Профили Qt</strong></li>

        <li>выделяем комплект <strong>Desktop Qt 5.2.0 Static MinGW 32 bit</strong> и нажимаем кнопку <strong>Сделать по умолчанию</strong></li>

        <li>нажимаем кнопку <strong>OK</strong></li>

        <li>протестируем, что приложения собираются статически</li>

        <li>создадим проект, для этого в меню нажимаем <strong>Файл</strong> -> нажимаем <strong>Новый файл или проект...</strong></li>

        <li>слева в списке <strong>Проекты</strong> выбираем <strong>Приложения</strong> -> справа выбираем <strong>Приложения Qt Widgets</strong></li>

        <li>в поле <strong>Название</strong> вводим <strong>Hello_Static_Qt</strong></li>

        <li>в поле <strong>Создать в</strong> вводим путь к папке с проектами, например I:\QtProjects</li>

        <li>нажимаем кнопку <strong>Далее</strong></li>

        <li>ставим галочки (по умолчанию должно быть выбрано) на два комплекта:</li>

        <p><strong>Desktop Qt 5.2.0 MinGW 32 bit</strong></p>
        <p><strong>Desktop Qt 5.2.0 Static MinGW 32 bit</strong></p>

        <li>нажимаем кнопку <strong>Далее</strong> и <strong>Завершить</strong></li>

        <li>на панели слева нажимаем <strong>Проекты</strong></li>

        <li>в верхней части экрана нажимаем <strong>Desktop Qt 5.2.0 Static MinGW 32 bit</strong></li>

        <li>в разделе <strong>Настройки сборки</strong> в выпадающем списке <strong>Изменить конфигурацию сборки</strong> выбираем <strong>Выпуск</strong></li>

        <li>находим раздел <strong>Этапы сборки</strong></li>

        <li>напротив qmake выбираем <strong>Подробнее</strong></li>

        <li>в выпадающем списке <strong>Конфигурация сборки qmake</strong> выбираем <strong>Выпуск</strong></li>

        <li>в поле <strong>Дополнительные параметры</strong> вводим (с двойными кавычками) <strong>CONFIG += release</strong></li>

        <li>на панели слева нажимаем <strong>Редактор</strong></li>

        <li>в меню нажимаем <strong>Сборка</strong> и нажимаем <strong>Собрать проект "Hello_Static_Qt"</strong></li>

        <li>переходим с папку с exe-файлом и запускаем его: I:\QtProjects\build-Hello_Static_Qt-Desktop_Qt_5_2_0_Static_MinGW_32bit-Выпуск\release</li>

        <p>Большое спасибо форумчанам за помощь: http://www.prog.org.ru/topic_26164_0.html</p>

        <p>Обратная связь: 8observer8@gmail.com</p>
        <p>Материальная благодарность:</p>
        <p>Яндекс Деньги: 410011677695050</p>
        <p>WebMoney (WMID): 416161350356</p>
    </body>
    </html>
