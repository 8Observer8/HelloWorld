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

        <h1>Примеры на Qt</h1>
        
        <h3>База данных SQLite</h3>
        <ul>
            <li><a href="">Контакты</a></li>
        </ul>
<!--        <p><strong>Описание. </strong> Здесь представлены примеры на Qt. Каждый пример содержит:</p>
        <ul>
            <li>краткое описание</li>
            <li>исходный текст примера</li>
            <li>исходный текст тестового проекта</li>
            <li>пошаговую инструкцию по его запуску</li>
            <li>набор тестов c инструкцией по запуску тестов</li>
        </ul>

        <div id="list">
            <h3>Текущий путь к рабочей директории</h3>
            <div>
                <p>
                    <strong id="brown">Описание.</strong> Выводит на экран путь к рабочей директории
                </p>
                
                <p>
                    <strong id="brown">Исходники: </strong><a></a>
                </p>
            </div>

            <h3>Пример разработки ПО через тестирование (Test Driven Development) с помощью QTest</h3>
            <div>
                <p>
                    <strong id="brown">Описание.</strong> Представлен пример разработки ПО по методологии TDD.
                </p>

                <p><strong>Задание на разработку.</strong> Написать класс с именем FiveAndFive. В этом классе должен быть метод fiveAndFive(), который возвращает квадрат своего аргумента.</p>

                <p><strong>Соглашения вызова метода:</strong></p>
                <ol>
                    <li>Метод работает с аргументом из диапазона: [5, 4*10^5]. Если нарушено это соглашение, то метод выбрасывает исключение.</li>
                    <li>Метод работает с аргументом кратным пяти. Если нарушено это соглашение, то метод выбрасывает исключение.</li>
                </ol>

                <p><strong>Инструкция:</strong></p>
                <ul>
                    <li>создаём консольное приложение "Qt Console Application"</li>
                </ul>
                <p>Имя папки: FiveAndFiveProject</p>
                <p>Имя проекта: FiveAndFive</p>

                <ul>
                    <li>создаём проект "Qt Unit Test" в той же папке: FiveAndFiveProject</li>
                </ul>
                <p>Имя проекта: FiveAndFiveTests</p>
                <p>Имя класса с тестами: FiveAndFiveTests</p>
                <p>Имя исходного файла с тестами: tst_FiveAndFiveTests.cpp</p>

                <ul>
                    <li>в проекте FiveAndFive создаём класс с тем же именем: FiveAndFive, а так же создаём заглушку для метода fiveAndFive(). Так же добавляем классы исключений (код проекта см. ниже)</li>
                </ul>

                <p><strong id="brown">Исходники проекта (FiveAndFive):</strong> <a href="https://github.com/8Observer8/FiveAndFive">
                        https://github.com/8Observer8/FiveAndFive
                    </a>
                </p>

                <p><strong id="brown">Исходники проекта с тестами (FiveAndFiveTests):</strong> <a href="https://github.com/8Observer8/FiveAndFiveTests">
                        https://github.com/8Observer8/FiveAndFiveTests
                    </a>
                </p>
            </div>

            <h3>Консольный ввод/вывод текста</h3>
            <div>
                <p>
                    <strong id="brown">Исходники:</strong>
                    <a href="https://github.com/8Observer8/ConsoleInputOutput">
                        https://github.com/8Observer8/ConsoleInputOutput
                    </a>
                </p>
            </div>

            <h3>Реализация сервера для чата</h3>
            <div>
                <p>
                    <strong id="brown">Исходники:</strong>
                    <a href="https://github.com/8Observer8/MyChatServer">
                        https://github.com/8Observer8/MyChatServer
                    </a>
                </p>
            </div>

            <h3>Реализация клиента для чата</h3>
            <div>
                <p>
                    <strong id="brown">Исходники:</strong>
                    <a href="https://github.com/8Observer8/MyChatClient">
                        https://github.com/8Observer8/MyChatClient
                    </a>
                </p>
            </div>

                        <h3>Запись и чтение бинарного файла</h3>
            <div>
                <p>
                    <strong id="brown">Исходники:</strong>
                    <a href="">
                        
                    </a>
                </p>
            </div>

            <h3>Запись и чтение текстового файла</h3>
            <div>
                <p>
                    <strong id="brown">Исходники:</strong>
                    <a href="">
                        
                    </a>
                </p>
            </div>

            <h3>Список друзей на vk.com</h3>
            <div>
                <p>
                    <strong id="brown">Исходники:</strong>
                    <a href="https://github.com/8Observer8/vk_full_list_of_friends">
                        https://github.com/8Observer8/vk_full_list_of_friends
                    </a>
                </p>
            </div>

            <h3>Список друзей на vk.com с кнопкой "Refresh" ("Обновить")</h3>
            <div>
                <p>
                    <strong id="brown">Исходники:</strong>
                    <a href="https://github.com/8Observer8/vk_friends_full_list_with_refresh">
                        https://github.com/8Observer8/vk_friends_full_list_with_refresh
                    </a>
                </p>
            </div>

            <h3>Создание трёхмерной фигуры в OpenGL</h3>
            <div>
                <p>
                    <strong id="brown">Источник:</strong>
                    <a href="http://www.gamedev.ru/code/articles/OpenGL_Qt4">
                        http://www.gamedev.ru/code/articles/OpenGL_Qt4
                    </a>
                    
                    <strong id="brown">Исходники:</strong>
                    <a href="https://github.com/8Observer8/Icosahedron">
                        https://github.com/8Observer8/Icosahedron
                    </a>
                </p>
            </div>

            <h3>Создание анимации в OpenGL</h3>
            <div>
                <p>
                    <strong id="brown">Источник:</strong>
                    <a href="http://www.gamedev.ru/code/articles/OpenGL_Qt4_part2">
                        http://www.gamedev.ru/code/articles/OpenGL_Qt4_part2
                    </a>
                    
                    <strong id="brown">Исходники:</strong>
                    <a href="https://github.com/8Observer8/Animation">
                        https://github.com/8Observer8/Animation
                    </a>
                </p>
            </div>
        </div>-->
    </body>
</html>
