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
            <p>Примечание. Имя, электронная почта и окончания строк указываются один раз после установки Git</p>

            <p>Для работы с консолью, рекомендую скачать и установить Far Manager: <a href="http://www.farmanager.com/download.php">http://www.farmanager.com/download.php</a></p>

            <li>запускаем Far Manager</li>

            <li>с помощью Far'а переходим в папку проекта, файлы которого хотим сохранить на удалённый сервер</li>

            <p>Допустим у нас в папке с проектом лежат три файла: main.cpp, person.h, person.cpp</p>

            <p>Примечание. Чтобы в Far'е переключаться между новигацией по папкам и окном вывода консоли, нужно нажимать: Ctrl+O</p>

            <li>нажимаем Ctlr+O</li>

            <li>в корне проекта создаём файл: .gitignore</li>
            <li>открываем файл .gitignore и добавляем в него названия файлов, которые мы не хотим добавлять под контроль git, к примеру:</li>
            <p>
                *pro.user<br />
                *.txt
            </p>
            <li>вводим команды:</li>
            <ul>
                <li>git init</li>
                <li>git add .gitignore</li>
                <li>git add .</li>
            </ul>

            <p>Примечание. Мы можем посмотреть в любой момент текущее состояние наших файлов, набрав: git status</p>

            <li>сохраняем файлы проекта на удалённый репозитарий, для этого вводим команды:</li>
            <ul>
                <li>git commit -am "First Commit"</li>
                <li>git branch</li>
                <li>git remote -v</li>
            </ul>

            <p>Примечание. При вводе следующей команду нужно ввести ссылку на Ваш удалённый репозитарий</p>
            <ul>
                <li>git push https://github.com/8Observer8/HelloGit.git refs/heads/master:refs/heads/master</li>
            </ul>

            <li>вводим логин и пароль</li>

            <p>Проект сохранён на <a href="https://github.com/">https://github.com/</a></p>

            <p>Произведём изменения в файле проекта и сохраним эти изменения на <a href="https://github.com/">https://github.com/</a></p>

            <li>git commit -m "Добавил строку для вывода \"Hello, World!\" на экран" main.cpp</li>
            <li>git branch</li>
            <li>git remote -v</li>
            <li>git push https://github.com/8Observer8/HelloGit.git refs/heads/master:refs/heads/master</li>

            <p>Добавим новую ветку развития проекта:</p>
            <li>git checkout -b MyStyle</li>

            <p>Примечание (важно!). Если в Qt Creator Вы не видите рядом с названием проекта название ветки, то нужно перезапустить Qt Creator.</p>

            <p>Примечания:</p>
            <ol>
                <li>Вместо предыдущей команды можно написать две следующих:</li>
                <ul>
                    <li>git branch <имяветки></li>
                    <li>git checkout <имяветки></li>
                    <p>См. здесь: <a href="http://githowto.com/ru/creating_a_branch">http://githowto.com/ru/creating_a_branch</a></p>
                </ul>

                <li>Мы можем переключаться между ветками развития следующим образом:</li>
                <ul>
                    <li>git checkout master</li>
                    <li>git checkout MyStyle</li>
                </ul>

                <li>Мы можем узнавать список веток и имя текущую ветки с помощью команды:</li>
                <ul>
                    <li>git branch</li>
                </ul>
                
                <li>Мы можем удалить локальную ветку:</li>
                <ul>
                    <li>git branch -d the_local_branch</li>
                </ul>

                <li>Чтобы удалить файл из контроля git нужно выполнить:</li>
                <ul>
                    <li>git rm file1.txt</li>
                    <li>git commit -am "remove file1.txt"</li>
                </ul>

                <li>Мы можем посмотреть имена файлов в указаной ветке (здесь master - это имя ветки):</li>
                <ul>
                    <li>git ls-tree -r master --name-only</li>
                </ul>
            </ol>

            <p>Допустим в новой ветке мы удаляем несколько файлов, несколько добавляем, а несколько изменяем. И хотим сохранить все изменения на удалённый репозитарий.</p>

            <li>git rm shape.cpp circle.cpp</li>
            <li>git add rectangle.h</li>

            <p>
                Удалили: shape.cpp, circle.cpp<br />
                Добавили: rectangle.h<br />
                Изменили: main.cpp, shape.h, circle.h, rectangle.h<br />
            </p>

            <li>git commit -am "Удалили: shape.cpp circle.cpp. Добавили: rectangle.h. Изменили что-либо в: main.cpp, shape.h, circle.h, rectangle.h"</li>

            <p>Сохраним нашу новую ветку на удалённый репозитарий:</p>
            <ul>
                <li>git branch</li>
                <li>git remote -v</li>
                <li>git push https://github.com/8Observer8/HelloGit.git refs/heads/MyStyle:refs/heads/MyStyle</li>
            </ul>

            <p>Примечание. Обратите внимание, что в предыдущей команде мы написали имя текущей ветки: refs/heads/MyStyle:refs/heads/MyStyle</p>

            <li>вводим логин и пароль</li>
            <p>Новая ветка сохранена на <a href="https://github.com/">https://github.com/</a></p>
        </ul>

        <p>Подробное описание работы с Git: <a href="http://githowto.com/ru/">http://githowto.com/ru/</a></p>

        <p>Обратная связь: 8observer8@gmail.com</p>
        <p>Вопросы и комментарии пишите в моей теме: <a href="http://www.prog.org.ru/topic_26393_0.html">http://www.prog.org.ru/topic_26393_0.html</a></p>
        <p>Материальная благодарность:</p>
        <p>Яндекс Деньги: 410011677695050</p>
        <p>WebMoney (WMR): R302523642986</p>
    </body>
</html>
