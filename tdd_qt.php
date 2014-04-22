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

        <p>TDD работает так:</p>
        <ul>
            <li>Сначала пишем заглушку для метода класса</li>
            <li>Пишем несколько тестов по принципу: входные значения метода, ожидаемый результат, вызов метода, сравнение выходного значения метода и ожидаемого результата. На это уходит пара десятков секунд (при условии, что человек это уже делал не раз)</li>
            <li>Запускаем тестирование и убеждаемся, что ни один тест не выполнился (метод же пока без реализации). Как говорят поклонники методологии TDD - полоса на 100% красная</li>
            <li>Возвращаемся к методу и пишем его реализацию</li>
            <li>Запускаем тестирование и убеждаемся, что полоса полностью зелёная</li>
            <li>Если нам требуется ещё функциональность от нашего метода, то мы пишем ещё несколько тестов, запускаем тестирование, убеждаемся, что полоса не на 100% зелёная, дописываем реализацию метода, чтобы удовлетворить новые тесты, запускаем тестирование, убеждаемся, что полоса на 100% зелёная</li>
            <li>Теперь мы можем при желании отрефакторить код внутри метода. После внесённых изменений опять запускаем тесты и убеждаемся, что мы ничего не испортили</li>
            <li>Это удобно, когда кто-то из команды неправильно понял внутреннюю работу метода, внес изменения (например для оптимизации или\и улучшения читабельности) и нечаянно испортил функциональность. Этот же человек может запустить тесты и убедиться, что он испортил</li>
            <li>Это так же удобно, если от метода требуется новая функциональность, или надо добавить какую-то защиту (чтобы метод ожидаемо реагировал на некорректные входные данные) Мы можем дописать новые тесты, запустить тесты, дописать функциональность в метод, запустить тесты</li>
            <li>А то что к концу разработки класса(ов) создаётся небольшой набор тестов, который демонстрирует (хотя бы минимальную) работоспособность системы - я так понимаю, это приятный бонус</li>
            <li>Разработчик изначально проектирует методы, которые "можно будет тестировать". Это облегчает работу отделу тестирования</li>
        </ul>

        <p>Такой способ разработки позволяет:</p>
        <ul>
            <li>описывать функциональность до написания самой функции</li>
            <li>демонстрировать, что функциональность реализована, как это и требовалось (заказчику, пользователю и\или самому себе)</li>
            <li>проводить рефакторинг (усовершенствовать код с целью оптимизации и/или для улучшения читабельности) без опасения нарушения функциональности</li>

            <li>выполняем инструкцию <a href="pure_cpp_in_qt.php">Первая программа на чистом C++ в Qt</a>, только на этапе ввода имени проекта вводим: acmp_0025_less_more</li>

            <p>Для примера разработаем программу, которая решает задачу: <a href="http://acmp.ru/index.asp?main=task&id_task=25">http://acmp.ru/index.asp?main=task&id_task=25</a></p>

            <li>копируем в "main.cpp" следующий код:</li>

            <p><strong>main.cpp</strong></p>
            <pre>
<code class="language-cpp">
#include &lt;string&gt;
#include &lt;fstream&gt;
#include &lt;iostream&gt;

#define TESTING

#ifndef TESTING
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
#endif

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
    int result = 0;

    return result;
}
</code>
            </pre>

            <li>в каталоге "build-acmp_0025_less_more-Desktop_Qt_5_2_0_MinGW_32bit-Debug" создаём файл с именем "input.txt" и записываем в него два числа: 7 7</li>

            <li>содержательную часть выполняет функция:</li>
            <pre>
<code class="language-cpp">
int less_or_more(int first, int second) {
    int result = 0;

    return result;
}
</code>
            </pre>

            <p>Функцию выше мы и будем тестировать. Создадим сначала тесты, а потом реализацию функции, которая удовлетворит все тесты.</p>

            <li>в разделе "Projects" выбираем "Other Project" -> во второй колонке выбираем "Qt Unit Test"</li>

            <li>нажимаем кнопку "Choose"</li>

            <li>в поле "Name" вводим: acmp_0025_less_more_Tests</li>

            <li>в поле "Create in" нужно указать путь, где лежит "main.cpp"</li>

            <li>нажимаем "Next" -> "Next" -> "Next" -> "Finish"</li>

            <li>открываем файл "acmp_0025_less_more_Tests.pro" и добавляем строку: SOURCES += ../main.cpp</li>

            <li>открываем файл "tst_acmp_0025_less_more_teststest.cpp" и копируем в него код:</li>

            <pre>
<code class="language-cpp">
#include &lt;QString&gt;
#include &lt;QtTest&gt;

class Acmp_0025_less_more_TestsTest : public QObject
{
    Q_OBJECT

public:
    Acmp_0025_less_more_TestsTest();

private Q_SLOTS:
    void testCase1_data();
    void testCase1();
};

Acmp_0025_less_more_TestsTest::Acmp_0025_less_more_TestsTest()
{
}

void Acmp_0025_less_more_TestsTest::testCase1_data()
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

int less_or_more(int first, int second);

void Acmp_0025_less_more_TestsTest::testCase1()
{
    QFETCH(int, first);
    QFETCH(int, second);
    QFETCH(int, expected);

    int actual = less_or_more(first, second);
    QCOMPARE(actual, expected);
}

QTEST_APPLESS_MAIN(Acmp_0025_less_more_TestsTest)

#include "tst_acmp_0025_less_more_teststest.moc"
</code>
            </pre>

            <li>запускаем тесты, для этого выбираем в меню "Build" -> "Run" (или Ctlr+R)</li>

            <p>Мы видим, что тесты завершились отрицательно.</p>

            <li>копируем следующаю реализацию в функцию:</li>

            <p><strong>myclass.cpp</strong></p>
            <pre>
<code class="language-cpp">
int less_or_more(int first, int second) {
    int result = 0;

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

            <li>снова запускаем тесты, для этого выбираем в меню "Build" -> "Run" (или Ctlr+R)</li>
        </ul>


        <p>Теперь мы видим, что тесты завершились положительно</p>

        <p><strong>Примечание:</strong> Чтобы отформатировать код (выровнить), нужно нажать Ctrl+A (чтобы выделить), потом нажать Ctrl+I.</p>

        <p>Подробнее о TDD можно почитать здесь: <a href="ru.wikipedia.org/wiki/Разработка_через_тестирование">ru.wikipedia.org/wiki/Разработка_через_тестирование</a></p>
        <p>Обратная связь: 8observer8@gmail.com</p>
        <!--<p>Вопросы и комментарии пишите в моей теме: <a href="http://programmersforum.ru/showthread.php?t=225824">http://programmersforum.ru/showthread.php?t=225824</a></p>-->
        <p>Материальная благодарность:</p>
        <p>Яндекс Деньги: 410011677695050</p>
        <p>WebMoney (WMR): R302523642986</p>
    </body>
</html>
