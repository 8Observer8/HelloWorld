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

    <li>устанавливаем NetBeans, как написано в этой инструкции: <a href="instulling_netbeans.php">установка NetBeans</a></li>
    
    <li>теперь протестируем, для этого решим задачу: <a href="http://acmp.ru/index.asp?main=task&id_task=25">http://acmp.ru/index.asp?main=task&id_task=25</a></li>

    <li>в файл "main.cpp" копируем (на данном этапе, функция для решения задачи (т.е. "less_or_more()") - это просто "заглушка", т.е. она не обрабатывает входные данные, а просто возвращает фиксированный результат):</li>

    <p><strong>main.cpp</strong></p>
    <pre>
<code class="language-cpp">
#include &lt;string&gt;
#include &lt;fstream&gt;
#include &lt;iostream&gt;

int readData(const std::string &iFileName, int &first, int &second);
int writeResult(const std::string& oFileName, int result);
int showError(int err, const std::string& fileName);
int less_or_more(int first, int second);

int main(int argc, char** argv) {

    // Входные данные
    int first;
    int second;

    // Имя входного файла
    std::string iFileName = "input.txt";

    // Читаем данные из файла
    int err = readData(iFileName, first, second);
    if (err) return showError(err, iFileName);

    // Выполняем содержательную часть
    int result = less_or_more(first, second);

    // Записываем выходной файл
    std::string oFileName = "output.txt";
    err = writeResult(oFileName, result);
    if (err) return showError(err, oFileName);

    return 0;
}

/**
 * Читаем данные из файла
 * 
 * @param iFileName Имя входного файла
 * @param vec Массив, в который будут считаны входные данные
 * @return Код ошибки: 0 - если ошибок нет
 *                     1 - если файл не удалось открыть
 *                     2 - если в файле некорректные данные
 */
int readData(const std::string& iFileName, int &first, int &second) {

    // Код ошибки
    int err = 0;

    // Открываем файл с входными данными
    std::ifstream in;
    in.open(iFileName.c_str());
    if (!in.is_open()) {
        err = 1;
        return err;
    }

    // Считываем данные из файла
    if (in >> first >> second) {
        err = 0;
        return err;
    } else {
        err = 2;
        return err;
    }

    // Закрываем файл и возвращаем нулевой код ошибки
    in.close();
    return err;
}

/**
 * Записываем результат выходной в файл
 * 
 * @param iFileName Имя выходного файла
 * @param vec Массив, который нужно записать в файл
 * @return Код ошибки: 0 - если ошибок нет
 *                     1 - если файл не удалось открыть
 *                     2 - если в файле не удалось записать
 */
int writeResult(const std::string& oFileName, int result) {

    // Открываем файл для записи
    std::ofstream out;
    out.open(oFileName.c_str());
    if (!out.is_open()) {
        return 1;
    }

    // Записываем данные в файл
    if (result > 0) {
        out << ">" << std::endl;
    } else if (result < 0) {
        out << "<" << std::endl;
    } else {
        out << "=" << std::endl;
    }

    // Закрываем файл и возвращаем код ошибки
    out.close();
    return 0;
}

/**
 * Выводит текст с ошибкой на экран
 * 
 * @param err Код ошибки
 * @param iFileName Имя файла, в котором произошла ошибка
 */
int showError(int err, const std::string& fileName) {
    switch (err) {
        case 1:
            std::cerr << "Error: could not open the file " << fileName.c_str() << std::endl;
            break;
        case 2:
            std::cerr << "Error: incorrect data in the file " << fileName.c_str() << std::endl;
            break;
        default:
            std::cerr << "Error code: " << err << "; file name: " << fileName.c_str() << std::endl;
            break;
    }

    return err;
}

/**
 * Проверяет больше или меньше
 * 
 * @param first Первое число
 * @param second Второе число
 * @return Возвращает:  1 - если первое число больше второго
 *                     -1 - если второе число больше первого
 *                      0 - если числа равны
 */
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
    <p>WebMoney (WMR): R302523642986</p>
</body>
</html>
