<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Создание юнит-тестов на C++ (TDD)</title>
    </head>
    <body>
        <?php
        require 'libs.inc.php';
        require 'menu.inc.php';
        ?>

        <h1>Создание юнит-тестов на C++. Разработка ПО на C++ по методике TDD (разработка ПО через тестирование)</h1>

        <p>Принцип TDD (test-driven development) - сначала пишем тесты для пустого модуля (модуль - это функция или класс), а потом реализацию для этого модуля.</a></p>

        <p>Такой способ разработки позволяет:</p>
    <li>описывать функциональность до написания самой функции</li>
    <li>демонстрировать, что функциональность реализована, как это и требовалось (заказчику, пользователю и\или самому себе)</li>
    <li>проводить рефакторинг (усовершенствовать код с целью оптимизации и/или для улучшения читабельности) без опасения нарушения функциональности</li>

    <p>Такой способ разработки идеально подходит для решения задач, например здесь: <a href="http://acmp.ru/">http://acmp.ru/</a></p>

    <p>Процесс установки не требует сборки cppunit вручную, так как этот пакет входит в состав Cygwin (Cygwin - набор инструментария для разработчика). Нам нужно будет только установить пакеты из набора Cygwin и среду NetBeans (которая позволяет автоматически создавать cppunit-тесты). Ещё создадим проект для демонстрации разработки через тестирование. Опишу пошагово весь процесс. Начну с самого начала. Допустим у нас нет ничего для разработки.</p>

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

    <li>теперь протестируем, для этого решим задачу: <a href="http://acmp.ru/index.asp?main=task&id_task=25">http://acmp.ru/index.asp?main=task&id_task=25</a></li>

    <li>в меню выбираем "File" -> "New Project..."</li>

    <li>выбираем, как на рисунке:</li>

    <img src="http://i.pixs.ru/storage/9/8/2/009png_8806402_10291982.png" />

    <li>нажимаем кнопку "Next" -> вводим имя проекта: acmp_0025_less_more -> нажимаем кнопку "Finish"</li>

    <li>в файл "main.cpp" копируем (на данном этапе, функция для решения задачи (т.е. "less_or_more()") - это просто "заглушка", т.е. она не обрабатывает входные данные, а просто возвращает фиксированный результат):</li>

    <p><strong>main.cpp</strong></p>
    <pre>
<code class="language-cpp">
#include &lt;string&gt;
#include &lt;fstream&gt;
#include &lt;iostream&gt;
using namespace std;

int less_or_more(int first, int second) {
    return 0;
}

int main(int argc, char** argv) {
    string inFileName = "input.txt";
    ifstream in;
    in.open(inFileName.c_str());
    if (!in.is_open()) {
        cerr << "Error: Could not open file " << inFileName.c_str() << endl;
        return 1;
    }

    string outFileName = "output.txt";
    ofstream out;
    out.open(outFileName.c_str());
    if (!out.is_open()) {
        cerr << "Error: Could not open file " << outFileName.c_str() << endl;
        in.close();
        return 1;
    }
    
    int first, second;
    
    if (in >> first >> second) {
        int result = less_or_more(first, second);
        if (result > 0) {
            out << ">" << endl;
        } else if (result < 0) {
            out << "<" << endl;
        } else {
            out << "=" << endl;
        }
    } else {
        cerr << "Error: incorrect data in the file " << inFileName.c_str() << endl;
        in.close();
        out.close();
        return 1;
    }
    
    in.close();
    out.close();
    return 0;
}
</code>
    </pre>

    <li>кликаем правой кнопкой мыши по файлу "main.cpp" -> выбираем "Create Test" -> "New CppUnit Test...", как на рисунке:</li>

    <img src="http://i7.pixs.ru/storage/1/6/3/010png_2207023_10292163.png" />

    <li>ставим галочку напротив функции "less_or_more(int,int)", как на рисунке:</li>

    <img src="http://i7.pixs.ru/storage/2/8/4/012png_1490573_10292284.png" />

    <li>нажимаем кнопку "Next" -> нажимаем кнопку "Finish"</li>

    <li>заменяем содержимое файлов "newtestclass.h" и "newtestclass.cpp" следующим:</li>

    <p><strong>newtestclass.h</strong></p>
    <pre><code class="language-cpp">
#ifndef NEWTESTCLASS_H
#define	NEWTESTCLASS_H

#include &lt;cppunit/extensions/HelperMacros.h&gt;

class newtestclass : public CPPUNIT_NS::TestFixture {
    CPPUNIT_TEST_SUITE(newtestclass);

    CPPUNIT_TEST(testLess_or_more_001);
    CPPUNIT_TEST(testLess_or_more_002);
    CPPUNIT_TEST(testLess_or_more_003);
    CPPUNIT_TEST(testLess_or_more_004);
    CPPUNIT_TEST(testLess_or_more_005);
    CPPUNIT_TEST(testLess_or_more_006);
    CPPUNIT_TEST(testLess_or_more_007);
    CPPUNIT_TEST(testLess_or_more_008);
    CPPUNIT_TEST(testLess_or_more_009);
    CPPUNIT_TEST(testLess_or_more_010);

    CPPUNIT_TEST_SUITE_END();

public:
    newtestclass();
    virtual ~newtestclass();
    void setUp();
    void tearDown();

private:
    void testLess_or_more_001();
    void testLess_or_more_002();
    void testLess_or_more_003();
    void testLess_or_more_004();
    void testLess_or_more_005();
    void testLess_or_more_006();
    void testLess_or_more_007();
    void testLess_or_more_008();
    void testLess_or_more_009();
    void testLess_or_more_010();
};

#endif	/* NEWTESTCLASS_H */
</code></pre>

    <p><strong>newtestclass.cpp</strong></p>
    <pre><code class="language-cpp">
#include "newtestclass.h"


CPPUNIT_TEST_SUITE_REGISTRATION(newtestclass);

newtestclass::newtestclass() {
}

newtestclass::~newtestclass() {
}

void newtestclass::setUp() {
}

void newtestclass::tearDown() {
}

int less_or_more(int first, int second);

void newtestclass::testLess_or_more_001() {
    int first = 0;
    int second = 0;
    int actual = less_or_more(first, second);
    int expected = 0;
    CPPUNIT_ASSERT_EQUAL(expected, actual);
}

void newtestclass::testLess_or_more_002() {
    int first = 5;
    int second = 10;
    int actual = less_or_more(first, second);
    int expected = -1;
    CPPUNIT_ASSERT_EQUAL(expected, actual);
}

void newtestclass::testLess_or_more_003() {
    int first = 10;
    int second = 5;
    int actual = less_or_more(first, second);
    int expected = 1;
    CPPUNIT_ASSERT_EQUAL(expected, actual);
}

void newtestclass::testLess_or_more_004() {
    int first = -5;
    int second = -10;
    int actual = less_or_more(first, second);
    int expected = 1;
    CPPUNIT_ASSERT_EQUAL(expected, actual);
}

void newtestclass::testLess_or_more_005() {
    int first = -10;
    int second = -5;
    int actual = less_or_more(first, second);
    int expected = -1;
    CPPUNIT_ASSERT_EQUAL(expected, actual);
}

void newtestclass::testLess_or_more_006() {
    int first = 5;
    int second = -10;
    int actual = less_or_more(first, second);
    int expected = 1;
    CPPUNIT_ASSERT_EQUAL(expected, actual);
}

void newtestclass::testLess_or_more_007() {
    int first = -5;
    int second = 10;
    int actual = less_or_more(first, second);
    int expected = -1;
    CPPUNIT_ASSERT_EQUAL(expected, actual);
}

void newtestclass::testLess_or_more_008() {
    int first = 2000000000;
    int second = 10;
    int actual = less_or_more(first, second);
    int expected = 1;
    CPPUNIT_ASSERT_EQUAL(expected, actual);
}

void newtestclass::testLess_or_more_009() {
    int first = -10;
    int second = 2000000000;
    int actual = less_or_more(first, second);
    int expected = -1;
    CPPUNIT_ASSERT_EQUAL(expected, actual);
}

void newtestclass::testLess_or_more_010() {
    int first = 10;
    int second = -2000000000;
    int actual = less_or_more(first, second);
    int expected = 1;
    CPPUNIT_ASSERT_EQUAL(expected, actual);
}
</code></pre>

    <li>выбираем в меню "Run" -> "Test Project (acmp_0025_less_more)" или нажимаем Alt+F6</li>

    <li>мы увидим результаты тестов:</li>

    <img src="http://i7.pixs.ru/storage/2/1/5/011png_2577842_10292215.png" />

    <li>отрываем файл "main.cpp" и пишем реализацию функции:</li>

    <pre><code class="language-cpp">
int less_or_more(int first, int second) {
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
</code></pre>

    <li>выбираем в меню "Run" -> "Test Project (acmp_0025_less_more)" или нажимаем Alt+F6</li>

    <li>результаты тестов:</li>

    <img src="http://i.pixs.ru/storage/3/0/0/013png_5154808_10292300.png" />
    
    <p>Подробнее о TDD можно почитать здесь: <a href="ru.wikipedia.org/wiki/Разработка_через_тестирование">ru.wikipedia.org/wiki/Разработка_через_тестирование</a></p>
    <p>Обратная связь: 8observer8@gmail.com</p>
    <p>Вопросы и комментарии пишите в моей теме: <a href="http://programmersforum.ru/showthread.php?t=225824">http://programmersforum.ru/showthread.php?t=225824</a></p>
    <p>Материальная благодарность:</p>
    <p>Яндекс Деньги: 410011677695050</p>
    <p>WebMoney (WMID): 416161350356</p>
</body>
</html>
