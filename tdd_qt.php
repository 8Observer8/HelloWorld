<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Создание юнит-тестов (модульных тестов) на Qt C++ (TDD).</title>
    </head>
    <body>
        <?php
        require 'libs.inc.php';
        require 'menu.inc.php';
        ?>

        <h1>Создание юнит-тестов на Qt C++. Разработка ПО на Qt C++ по методике TDD (разработка ПО через тестирование)</h1>

        <p>Принцип TDD (test-driven development) - сначала пишем тесты для пустого модуля (модуль - это функция или класс), а потом реализацию для этого модуля.</p>

        <p>Такой способ разработки позволяет:</p>

    <li>описывать функциональность до написания самой функции</li>
    <li>демонстрировать, что функциональность реализована, как это и требовалось (заказчику, пользователю и\или самому себе)</li>
    <li>проводить рефакторинг (усовершенствовать код с целью оптимизации и/или для улучшения читабельности) без опасения нарушения функциональности</li>

    <li>скачиваем и устанавливаем "Qt 5.2.0 for Windows 32-bit (MinGW 4.8, OpenGL, 689 MB)" <a href="http://qt-project.org/downloads">http://qt-project.org/downloads</a></li>

    <li>запускаем Qt Creator</li>

    <li>если у Вас Qt Creator на русском, то я рекомендовал бы переключиться на английский. Для этого перейдите в папку: C:\Qt\Qt5.2.0\Tools\QtCreator\share\qtcreator\translations и удалить все файлы в именах которых встречается "_ru"</li>

    <p>Для примера разработаем программу, которая решает задачу: <a href="http://acmp.ru/index.asp?main=task&id_task=25">http://acmp.ru/index.asp?main=task&id_task=25</a></p>

    <li>в меню Qt Creator'а выбираем "File" -> "New File or Project..."</li>

    <li>в разделе "Projects" выбираем "Other Project" -> во второй колонке выбираем "Qt Unit Test"</li>

    <li>нажимаем кнопку "Choose"</li>

    <li>в поле "Name" вводим: MyFirstUnit</li>

    <li>нажимаем "Next" -> "Next" -> "Next" -> "Finish"</li>

    <li>нажимаем правой кнопкой мыши по проекту в разделе "Projects" -> нажимаем "Add New...", как показано на рисунке:</li><br />

    <img src="img/tdd_qt_imgs/001.png" />

    <li>в разделе "Files and Clases" выбираем "C++" -> во втором разделе выбираем "C++ Class"</li>

    <li>нажимаем кнопку "Choose"</li>

    <li>в поле "Class name" вводим: MyClass</li>

    <li>нажимаем кнопку "Next" -> нажимаем кнопку "Finish"</li>

    <li>открываем файл "myclass.h" и меняем его содержимое на следующее:</li>

    <p><strong>myclass.h</strong></p>
    <pre>
<code class="language-cpp">
#ifndef MYCLASS_H
#define MYCLASS_H

class MyClass
{
public:
    int compare(int first, int second);
};

#endif // MYCLASS_H
</code>
    </pre>

    <li>нажимаем правой кнопкой по функции compare() -> выбираем "Refactor" -> выбираем "Add Definition in myclass.cpp", как показано на рисунке:</li>

    <img src="img/tdd_qt_imgs/002.png" />

    <li>открываем файл "myclass.cpp" и меняем его содержимое на следующее:</li>

    <p><strong>myclass.cpp</strong></p>
    <pre>
<code class="language-cpp">
#include "myclass.h"

int MyClass::compare(int first, int second)
{
    return 0;
}
</code>
    </pre>

    <li>открываем файл "tst_myfirstunittest.cpp"</li>

    <p>Файле "tst_myfirstunittest.cpp" нам нужно в класс "MyFirstUnitTest" добавить функцию для инициализации данных testCase1_data() (данные - это входные данные и ожидаемый результат)</p>

    <p>Ещё нам нужно написать реализацию для функций testCase1_data() и testCase1()</p>

    <p>testCase1_data() - инициализирует данные (входные данные и ожидаемый результат)</p>

    <p>testCase1() - запускает тесты, то есть производит вызовы тестируемой функции и сравнивает каждый результат вызова с соответствующим ожидаемым результатом</p>

    <p>По условию задачи, нужно написать функцию, которая возвращает: -1 - если первый аргумент меньше второе, 1 - если первый аргумент больше второе и 0 - если оба аргумента равны друг другу</p>

    <p>Напишем 10 тестов. В данном случае мы могли бы обойтись и меньшем количеством</p>

    <li>меняем содержимое файла "tst_myfirstunittest.cpp" на следующее:</li>

    <p><strong>tst_myfirstunittest.cpp</strong></p>
    <pre>
<code class="language-cpp">
#include &lt;QString&gt;
#include &lt;QtTest&gt;
#include "myclass.h"

class MyFirstUnitTest : public QObject
{
    Q_OBJECT

public:
    MyFirstUnitTest();

private Q_SLOTS:
    void testCase1_data();
    void testCase1();
};

MyFirstUnitTest::MyFirstUnitTest()
{
}

void MyFirstUnitTest::testCase1_data()
{
    QTest::addColumn<int>("first");
    QTest::addColumn<int>("second");
    QTest::addColumn<int>("expected");

    QTest::newRow("compare01") << 0 << 0 << 0;
    QTest::newRow("compare02") << 5 << 10 << -1;
    QTest::newRow("compare03") << 10 << 5 << 1;
    QTest::newRow("compare04") << -5 << -10 << 1;
    QTest::newRow("compare05") << -10 << -5 << -1;
    QTest::newRow("compare06") << 5 << -10 << 1;
    QTest::newRow("compare07") << -5 << 10 << -1;
    QTest::newRow("compare08") << 2000000000 << 10 << 1;
    QTest::newRow("compare09") << -10 << 2000000000 << -1;
    QTest::newRow("compare10") << 10 << -2000000000 << 1;
}

void MyFirstUnitTest::testCase1()
{
    MyClass mc;

    QFETCH(int, first);
    QFETCH(int, second);
    QFETCH(int, expected);

    int actual = mc.compare(first, second);
    QCOMPARE(actual, expected);
}

QTEST_APPLESS_MAIN(MyFirstUnitTest)

#include "tst_myfirstunittest.moc"
</code>
    </pre>

    <li>нажимаем Ctrl+Shift+S, чтобы сохранить всё</li>

    <li>нажимаем Ctrl+R для построения и запуска программы</li>

    <li>в окне "Application Output" мы можем видеть, что удачно завершился только первый тест, так как функция compare() всегда возвращает ноль. Мы передали два нуля и ожидали ноль в первом тесте.

        <img src="img/tdd_qt_imgs/003.png" />

        <p>Пишем функционал compare() в файле "myclass.cpp", чтобы она делала, то что мы ожидаем. С помощью тестов мы описали, что мы ожидаем от работы функции compare(). Если мы реализуем неправильно, то тесты нам это покажут.</p>

    <li>меняем содержимое файла "myclass.cpp" на следующее:</li>

    <p><strong>myclass.cpp</strong></p>
    <pre>
<code class="language-cpp">
#include "myclass.h"

int MyClass::compare(int first, int second)
{
    int result;
    
    if (first > second) {
        result = 1;
    } else if (first < second) {
        result = -1;
    } else {
        result = 0;
    }

    return result;
}
</code>
    </pre>

    <li>нажимаем Ctrl+R для построения и запуска программы</li>

    <p>Теперь мы видим, что тесты пройдены успешно:</p>

    <img src="img/tdd_qt_imgs/004.png" />

    <p><strong>Примечание:</strong> Чтобы отформатировать код (выровнить), нужно нажать Ctrl+A (чтобы выделить), потом нажать Ctrl+I.</p>

    <p>Подробнее о TDD можно почитать здесь: <a href="ru.wikipedia.org/wiki/Разработка_через_тестирование">ru.wikipedia.org/wiki/Разработка_через_тестирование</a></p>
    <p>Обратная связь: 8observer8@gmail.com</p>
    <!--<p>Вопросы и комментарии пишите в моей теме: <a href="http://programmersforum.ru/showthread.php?t=225824">http://programmersforum.ru/showthread.php?t=225824</a></p>-->
    <p>Материальная благодарность:</p>
    <p>Яндекс Деньги: 410011677695050</p>
    <p>WebMoney (WMID): 416161350356</p>
</body>
</html>
