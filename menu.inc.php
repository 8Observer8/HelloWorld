<?php
require_once 'core.inc.php';
?>

<ul id="menu">
    <li>
        <a href="index.php">Главная</a>
    </li>
    <li>
        <a href="#">Примеры</a>
        <ul>
            <li>
                <a href="examples_php.php">PHP</a>
            </li>

            <li>
                <a href="examples_jquery.php">jQuery</a>
            </li>

            <li>
                <a href="#">C++</a>
                <ul>
                    <li>
                        <a href="examples_cpp.php">Примеры</a>
                    </li>

                    <li>
                        <a href="algorithms_cpp.php">Алгоритмы</a>
                    </li>

                    <li>
                        <a href="solutions_cpp.php">Решения</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="examples_qt.php">Qt</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="<?php echo currentPage(); ?>">Английский</a>
        <ul>
            <li><a href="AssimilEasyEnglish.php">Английский (Assimil)</a></li>
            <li><a href="YanaGrausova.php">Ссылки на видео Яны Граусовой</a></li>
<!--            <li><a href="tense_table.php">Таблицы времён</a></li>-->
        </ul>
    </li>
<!--    <li>
        <a href="<?php echo currentPage(); ?>">Примеры программ</a>
        <ul>
            <li><a href="cpp_examples.php">Примеры на С++</a></li>
            <li><a href="alg_cpp_examples.php">Примеры алгоритмов (на С++)</a></li>
            <li><a href="qt_examples.php">Примеры на Qt</a></li>
            <li><a href="qwt_examples.php">Примеры на Qwt</a></li>
            <li><a href="qt_openGL_examples.php">Примеры на OpenGL (Qt C++)</a></li>
            <li><a href="php_examples.php">Примеры на PHP</a></li>
            <li><a href="jquery_examples.php">Примеры на jQuery</a></li>
            <li><a href="api_linux_examples.php">Примеры API Linux на C</a></li>
            <li><a href="api_windows_examples.php">Примеры API Windows на C</a></li>
        </ul>
    </li>-->
</ul>
