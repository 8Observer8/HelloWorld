<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Таблицы Времён</title>
        <style>
            .table {
                margin: auto;
            }
        </style>
        <?php
        require 'libs.inc.php';
        ?>
    </head>
    <body>
        <?php
        require 'menu.inc.php';
        ?>

        <h1>Таблицы времён английского языка</h1>

        <form action="#" method="POST">
            <table class="table">
                <!--Voice-->
                <tr>
                    <td>
                        <label>Select Voice:</label>
                        <select name="voice">
                            <option>Active</option>
                            <option>Passive</option>
                        </select>
                    </td>
                </tr>

                <!--Group-->
                <tr>
                    <td>
                        <label>Select Group:</label>
                        <select name="group">
                            <option>Infinitive</option>
                            <option>Continuos</option>
                            <option>Perfect</option>
                            <option>Perfect</option>
                        </select>
                    </td>

                </tr>

                <!--Tense-->
                <tr>
                    <td>
                        <label>Select Tense:</label>
                        <select name="tense">
                            <option>Past</option>
                            <option>Present</option>
                            <option>the-Future-in-the-Past</option>
                            <option>Future</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" value="A submit button" /><br />
                        <input type="submit" value="Show table" /><br />
                        <button>Submit</button>
                    </td>
                </tr>
            </table>
        </form>

    </body>
</html>
