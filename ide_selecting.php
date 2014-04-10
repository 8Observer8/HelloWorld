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

        <h1>Выбор среды разработки</h1>

        <p>Выбор среды зависит прежде всего от того в какую фирму человек намерен идти работать (какие крупные фирмы есть в его городе). По-моему, сейчас Visual C++ мягко сказать - непопулярен. И её надо покупать, так как в бесплатной Express версии отсутствует, к примеру, создание GUI.  А вот C# сейчас крайне популярен. В Express  версии есть формошлёпки Windows Forms и WPF. Так что, если выбирать Visual Studio, то надо изучать C#.</p>

        <p>Если речь идёт об изучении стандартного консольного C++, то Visual C++ Express Edition вполне подойдёт.</p>

        <p>Если планируете изучать несколько языков, к примеру: Java, C++ (Netbeans можно настроить с Qt), web-программирование: Java Web, PHP, JavaScript, HTML5 и т.д., то лучший выбор - NetBeans: <a href="https://netbeans.org/downloads/">https://netbeans.org/downloads/</a></p>

        <p>NetBeans на уровне среды поддерживает работу с системами контроля версиями (с удобным GUI интерфейсом): Git, Mercurial, Subversion</p>

        <p>Есть встроенная в среду поддержка методологии разработки через тестирование (Test Driven Development): CppUnit, JUnit (для Java), PHPUnit, QUnit (независимо от среды; для JavaScript и jQuery). В Qt тоже есть поддержка: QTest</p>

        <p>Ещё в NetBeans есть гибкая система настройки форматирования кода по нажатию Ctrl+Alt+F (Qt Creator тоже есть - Ctrl+I) - это очень удобно.</p>

        <p>Вот тут моя инструкция, как установить и настроить NetBeans для C++: <a href="http://notes.orgfree.com/instulling_netbeans.php">http://notes.orgfree.com/instulling_netbeans.php</a></p>

        <p>Я рекомендую лучше начать сразу с Qt. Там можно и на стандартном C++ писать. Вот моя инструкция: <a href="http://notes.orgfree.com/pure_cpp_in_qt.php">http://notes.orgfree.com/pure_cpp_in_qt.php</a></p>

        <p>Qt и NetBeans - бесплатные. Правда сейчас популярность в России Qt - крайне низкая, если сравнивать с популярностью Java, C# и web-разработкой. Я сужу по своему городу, в котором десяток крупных контор с Java и C# (в том числе зарубежные филиалы) И парочка очень мелких с Qt. Есть один крупный филиал в нашем городе компании Artezio (<a href="http://artezio.ru/">http://artezio.ru/</a>), где есть команда Qt программистов (примерно из 10 человек), но эта вакансия всегда закрыта: <a href="http://artezio.ru/career/vacancies/saratov">http://artezio.ru/career/vacancies/saratov</a></p>

        <p>Если Вы уверенно владеете английским и Qt, то можно найти удалённую работу за рубежом (или фрилансить). Официально оформиться в России, как ИП (индивидуальный предприниматель).</p>
</body>
</html>
