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

        <ul>
            <li>
                <a href = "#to_know_avoice">Indefinite tens, Active voice</a>
            </li>

            <li>
                <a href = "#to_know_pvoice">Indefinite tens, Passive voice</a>
            </li>

            <li>
                <a href = "#to_be">Indefinite tens (<em>to be</em>)</a>
            </li>

            <li>
                <a href = "#to_have">Indefinite tens (<em>to have</em>)</a>
            </li>

            <li>
                <a href = "#wh_words">WH-words</a>
            </li>

            <li>
                <a href = "#aa_to_be">Continuous tens. Active voice</a>
            </li>

            <li>
                <a href = "#ap_to_be">Continuous tens. Passive voice</a>
            </li>

            <li>
                <a href = "#aa_to_have">Perfect tens. Active voice</a>
            </li>

            <li>
                <a href = "#ap_to_have">Perfect tens. Passive voice</a>
            </li>

            <li>
                <a href = "#pct_to_have">Perfect Continuous tens. Active voice</a>
            </li>
        </ul>

        <h3><a name = "to_know_avoice"></a>Indefinite tens, Active voice</h3>
        <table border = "1">
            <tr>
                <th></th><th>Question</th> <th>Answer: <em>"Yes"</em></th> <th>Answer: <em>"No"</em></th>
            </tr>
            <tr>
                <th rowspan = "7">Future</th>
            </tr>
            <tr>
                <td>Will I know?</td> <td>I will know</td> <td>I will not know <div id = "concise_form">(I won't know)</div></td>
            </tr>
            <tr>
                <td>Will she know?</td> <td>She will know</td> <td>She will not know <div id = "concise_form">(she won't know)</div></td>
            </tr>
            <tr>
                <td>Will he know?</td> <td>He will know</td> <td>He will not know <div id = "concise_form">(he won't know)</div></td>
            </tr>
            <tr>
                <td>Will we know?</td> <td>We will know</td> <td>We will not know <div id = "concise_form">(we won't know)</div></td>
            </tr>
            <tr>
                <td>Will you know?</td> <td>You will know</td> <td>You will not know <div id = "concise_form">(you won't know)</div></td>
            </tr>
            <tr>
                <td>Will they know?</td> <td>They will know</td> <td>They will not know <div id = "concise_form">(they won't know)</div></td>
            </tr>

            <tr>
                <th rowspan = "7">Future-in-the-Past</th>
            </tr>
            <tr>
                <td>Would I know?</td> <td>I would know</td> <td>I would not know <div id = "concise_form">(I wouldn't know)</div></td>
            </tr>
            <tr>
                <td>Would she know?</td> <td>She would know</td> <td>She would not know <div id = "concise_form">(she wouldn't know)</div></td>
            </tr>
            <tr>
                <td>Would he know?</td> <td>He would know</td> <td>He would not know <div id = "concise_form">(he wouldn't know)</div></td>
            </tr>
            <tr>
                <td>Would we know?</td> <td>We would know</td> <td>We would not know <div id = "concise_form">(we wouldn't know)</div></td>
            </tr>
            <tr>
                <td>Would you know?</td> <td>You would know</td> <td>You would not know <div id = "concise_form">(you wouldn't know)</div></td>
            </tr>
            <tr>
                <td>Would they know?</td> <td>They would know</td> <td>They would not know <div id = "concise_form">(they wouldn't know)</div></td>
            </tr>

            <tr>
                <th rowspan = "7">Present</th>
            </tr>
            <tr>
                <td>Do I know?</td> <td>I know</td> <td>I do not know <div id = "concise_form">(I don't know)</div></td>
            </tr>
            <tr>
                <td>Does she know?</td> <td>She knows</td> <td>She does not know <div id = "concise_form">(she doesn't know)</div></td>
            </tr>
            <tr>
                <td>Does he know?</td> <td>He knows</td> <td>He does not know <div id = "concise_form">(he doesn't know)</div></td>
            </tr>
            <tr>
                <td>Do we know?</td> <td>We know</td> <td>We do not know <div id = "concise_form">(we don't know)</div></td>
            </tr>
            <tr>
                <td>Do you know?</td> <td>You know</td> <td>You do not know <div id = "concise_form">(you don't know)</div></td>
            </tr>
            <tr>
                <td>Do they know?</td> <td>They know</td> <td>They do not know <div id = "concise_form">(they don't know)</div></td>
            </tr>

            <tr>
                <th rowspan = "7">Past</th>
            </tr>
            <tr>
                <td>Did I know?</td> <td>I knew</td> <td>I did not know <div id = "concise_form">(I didn't know)</div></td>
            </tr>
            <tr>
                <td>Did she know?</td> <td>She knew</td> <td>She did not know <div id = "concise_form">(she didn't know)</div></td>
            </tr>
            <tr>
                <td>Did he know?</td> <td>He knew</td> <td>He did not know <div id = "concise_form">(he didn't know)</div></td>
            </tr>
            <tr>
                <td>Did we know?</td> <td>We knew</td> <td>We did not know <div id = "concise_form">(we didn't know)</div></td>
            </tr>
            <tr>
                <td>Did you know?</td> <td>You knew</td> <td>You did not know <div id = "concise_form">(you didn't know)</div></td>
            </tr>
            <tr>
                <td>Did they know?</td> <td>They knew</td> <td>They did not know <div id = "concise_form">(they didn't know)</div></td>
            </tr>
        </table>

        <h3><a name = "to_know_pvoice"></a>Indefinite tens, Passive voice</h3>
        <table border = "1">
            <tr>
                <th></th><th>Question</th> <th>Answer: <em>"Yes"</em></th> <th>Answer: <em>"No"</em></th>
            </tr>
            <tr>
                <th rowspan = "7">Future</th>
            </tr>
            <tr>
                <td>Will I be known?</td> <td>I will be known</td> <td>I will not be known <div id = "concise_form">(I won't be known)</div></td>
            </tr>
            <tr>
                <td>Will she be known?</td> <td>She will be known</td> <td>She will not be known <div id = "concise_form">(she won't be known)</div></td>
            </tr>
            <tr>
                <td>Will he be known?</td> <td>He will be known</td> <td>He will not be known <div id = "concise_form">(he won't be known)</div></td>
            </tr>
            <tr>
                <td>Will we be known?</td> <td>We will be known</td> <td>We will not be known <div id = "concise_form">(we won't be known)</div></td>
            </tr>
            <tr>
                <td>Will you be known?</td> <td>You will be known</td> <td>You will not be known <div id = "concise_form">(you won't be known)</div></td>
            </tr>
            <tr>
                <td>Will they be known?</td> <td>They will be known</td> <td>They will not be known <div id = "concise_form">(they won't be known)</div></td>
            </tr>

            <tr>
                <th rowspan = "7">Future-in-the-Past</th>
            </tr>
            <tr>
                <td>Would I be known?</td> <td>I would known</td> <td>I would not known <div id = "concise_form">(I wouldn't known)</div></td>
            </tr>
            <tr>
                <td>Would she be known?</td> <td>She would known</td> <td>She would not known <div id = "concise_form">(she wouldn't known)</div></td>
            </tr>
            <tr>
                <td>Would he be known?</td> <td>He would known</td> <td>He would not known <div id = "concise_form">(he wouldn't known)</div></td>
            </tr>
            <tr>
                <td>Would we be known?</td> <td>We would known</td> <td>We would not known <div id = "concise_form">(we wouldn't known)</div></td>
            </tr>
            <tr>
                <td>Would you be known?</td> <td>You would known</td> <td>You would not known <div id = "concise_form">(you wouldn't known)</div></td>
            </tr>
            <tr>
                <td>Would they be known?</td> <td>They would known</td> <td>They would not known <div id = "concise_form">(they wouldn't known)</div></td>
            </tr>

            <tr>
                <th rowspan = "7">Present</th>
            </tr>
            <tr>
                <td>Am I known?</td> <td>I am known</td> <td>I am not known <div id = "concise_form">(I'm not known)</div></td>
            </tr>
            <tr>
                <td>Is she known?</td> <td>She is known</td> <td>She is not known <div id = "concise_form">(she's not known)</div></td>
            </tr>
            <tr>
                <td>Is he known?</td> <td>He is known</td> <td>He is not known <div id = "concise_form">(he's not known)</div></td>
            </tr>
            <tr>
                <td>Are we known?</td> <td>We are known</td> <td>We are not known <div id = "concise_form">(we're not known)</div></td>
            </tr>
            <tr>
                <td>Are you known?</td> <td>You are known</td> <td>You are not known <div id = "concise_form">(you're not known)</div></td>
            </tr>
            <tr>
                <td>Are they known?</td> <td>They are known</td> <td>They are not known <div id = "concise_form">(they're not known)</div></td>
            </tr>

            <tr>
                <th rowspan = "7">Past</th>
            </tr>
            <tr>
                <td>Was I known?</td> <td>I was known</td> <td>I was not known <div id = "concise_form">(I wasn't know)</div></td>
            </tr>
            <tr>
                <td>Was she known?</td> <td>She was known</td> <td>She was not known <div id = "concise_form">(she wasn't know)</div></td>
            </tr>
            <tr>
                <td>Was he known?</td> <td>He was known</td> <td>He was not known <div id = "concise_form">(he wasn't know)</div></td>
            </tr>
            <tr>
                <td>Were we known?</td> <td>We were known</td> <td>We were not known <div id = "concise_form">(we weren't know)</div></td>
            </tr>
            <tr>
                <td>Were you known?</td> <td>You were known</td> <td>You were not known <div id = "concise_form">(you weren't know)</div></td>
            </tr>
            <tr>
                <td>Were they known?</td> <td>They were known</td> <td>They were not known <div id = "concise_form">(they weren't know)</div></td>
            </tr>
        </table>

        <h3><a name = "to_be"></a>Indefinite tens (<em>to be</em>)</h3>
        <table border = "1">
            <tr>
                <th></th><th>Question</th> <th>Answer: <em>"Yes"</em></th> <th>Answer: <em>"No"</em></th>
            </tr>
            <tr>
                <th rowspan = "7">Future</th>
            </tr>
            <tr>
                <td>Will I be?</td> <td>I will be</td> <td>I will not be <div id = "concise_form">(I won't be)</div></td>
            </tr>
            <tr>
                <td>Will she be?</td> <td>She will be</td> <td>She will not be <div id = "concise_form">(she won't be)</div></td>
            </tr>
            <tr>
                <td>Will he be?</td> <td>He will be</td> <td>He will not be <div id = "concise_form">(he won't be)</div></td>
            </tr>
            <tr>
                <td>Will we be?</td> <td>We will be</td> <td>We will not be <div id = "concise_form">(we won't be)</div></td>
            </tr>
            <tr>
                <td>Will you be?</td> <td>You will be</td> <td>You will not be <div id = "concise_form">(you won't be)</div></td>
            </tr>
            <tr>
                <td>Will they be?</td> <td>They will be</td> <td>They will not be <div id = "concise_form">(they won't be)</div></td>
            </tr>

            <tr>
                <th rowspan = "7">Future-in-the-Past</th>
            </tr>
            <tr>
                <td>Would I be?</td> <td>I would be</td> <td>I would not be <div id = "concise_form">(I wouldn't be)</div></td>
            </tr>
            <tr>
                <td>Would she be?</td> <td>She would be</td> <td>She would not be <div id = "concise_form">(she wouldn't be)</div></td>
            </tr>
            <tr>
                <td>Would he be?</td> <td>He would be</td> <td>He would not be <div id = "concise_form">(he wouldn't be)</div></td>
            </tr>
            <tr>
                <td>Would we be?</td> <td>We would be</td> <td>We would not be <div id = "concise_form">(we wouldn't be)</div></td>
            </tr>
            <tr>
                <td>Would you be?</td> <td>You would be</td> <td>You would not be <div id = "concise_form">(you wouldn't be)</div></td>
            </tr>
            <tr>
                <td>Would they be?</td> <td>They would be</td> <td>They would not be <div id = "concise_form">(they wouldn't be)</div></td>
            </tr>

            <tr>
                <th rowspan = "7">Present</th>
            </tr>
            <tr>
                <td>Am I here?</td> <td>I am here(I'm here)</td> <td>I am not here <div id = "concise_form">(I'm not here)</div></td>
            </tr>
            <tr>
                <td>Is she here?</td> <td>She is here</td> <td>She is not here <div id = "concise_form">(she isn't here)</div></td>
            </tr>
            <tr>
                <td>Is he here?</td> <td>He is here</td> <td>He is not here <div id = "concise_form">(he isn't here)</div></td>
            </tr>
            <tr>
                <td>Are we here?</td> <td>We are here</td> <td>We are not here <div id = "concise_form">(we aren't here)</div></td>
            </tr>
            <tr>
                <td>Are you here?</td> <td>You are here</td> <td>You are not here <div id = "concise_form">(you aren't here)</div></td>
            </tr>
            <tr>
                <td>Are they here?</td> <td>They are here</td> <td>They are not here <div id = "concise_form">(they aren't here)</div></td>
            </tr>

            <tr>
                <th rowspan = "7">Past</th>
            </tr>
            <tr>
                <td>Was I here?</td> <td>I was here</td> <td>I was not here <div id = "concise_form">(I wasn't here)</div></td>
            </tr>
            <tr>
                <td>Was she here?</td> <td>She was here</td> <td>She was not here <div id = "concise_form">(she wasn't here)</div></td>
            </tr>
            <tr>
                <td>Was he here?</td> <td>He was here</td> <td>He was not here <div id = "concise_form">(he wasn't here)</div></td>
            </tr>
            <tr>
                <td>Were we here?</td> <td>We were here</td> <td>We were not here <div id = "concise_form">(we weren't here)</div></td>
            </tr>
            <tr>
                <td>Were you here?</td> <td>You were here</td> <td>You were not here <div id = "concise_form">(you weren't here)</div></td>
            </tr>
            <tr>
                <td>Were they here?</td> <td>They were here</td> <td>They were not here <div id = "concise_form">(they weren't here)</div></td>
            </tr>
        </table>

        <h3><a name = "to_have"></a>Indefinite tens (<em>to have</em>)</h3>
        <table border = "1">
            <tr>
                <th></th><th>Question</th> <th>Answer: <em>"Yes"</em></th> <th>Answer: <em>"No"</em></th>
            </tr>
            <tr>
                <th rowspan = "7">Future</th>
            </tr>
            <tr>
                <td>Will I have?</td> <td>I will have</td> <td>I will not have <div id = "concise_form">(I won't have)</div></td>
            </tr>
            <tr>
                <td>Will she have?</td> <td>She will have</td> <td>She will have <div id = "concise_form">(she won't have)</div></td>
            </tr>
            <tr>
                <td>Will he have?</td> <td>He will have</td> <td>He will not have <div id = "concise_form">(he won't have)</div></td>
            </tr>
            <tr>
                <td>Will we have?</td> <td>We will have</td> <td>We will not have <div id = "concise_form">(we won't have)</div></td>
            </tr>
            <tr>
                <td>Will you have?</td> <td>You will have</td> <td>You will not have <div id = "concise_form">(you won't have)</div></td>
            </tr>
            <tr>
                <td>Will they have?</td> <td>They will have</td> <td>They will not have <div id = "concise_form">(they won't have)</div></td>
            </tr>

            <tr>
                <th rowspan = "7">Future-in-the-Past</th>
            </tr>
            <tr>
                <td>Would I have?</td> <td>I would have</td> <td>I would not have <div id = "concise_form">(I wouldn't have)</div></td>
            </tr>
            <tr>
                <td>Would she have?</td> <td>She would have</td> <td>She would have <div id = "concise_form">(she wouldn't have)</div></td>
            </tr>
            <tr>
                <td>Would he have?</td> <td>He would have</td> <td>He would not have <div id = "concise_form">(he wouldn't have)</div></td>
            </tr>
            <tr>
                <td>Would we have?</td> <td>We would have</td> <td>We would not have <div id = "concise_form">(we wouldn't have)</div></td>
            </tr>
            <tr>
                <td>Would you have?</td> <td>You would have</td> <td>You would not have <div id = "concise_form">(you wouldn't have)</div></td>
            </tr>
            <tr>
                <td>Would they have?</td> <td>They would have</td> <td>They would not have <div id = "concise_form">(they wouldn't have)</div></td>
            </tr>

            <tr>
                <th rowspan = "7">Present</th>
            </tr>
            <tr>
                <td>Have I?</td> <td>I have</td> <td>I have not <div id = "concise_form">(I haven't)</div></td>
            </tr>
            <tr>
                <td>Has she?</td> <td>She has</td> <td>She has not <div id = "concise_form">(she haven't)</div></td>
            </tr>
            <tr>
                <td>Has he?</td> <td>He has</td> <td>He has not <div id = "concise_form">(he haven't)</div></td>
            </tr>
            <tr>
                <td>Have we?</td> <td>We have</td> <td>We have not <div id = "concise_form">(we haven't)</div></td>
            </tr>
            <tr>
                <td>Have you?</td> <td>You have</td> <td>You have not <div id = "concise_form">(you haven't)</div></td>
            </tr>
            <tr>
                <td>Have they?</td> <td>They have</td> <td>They have not <div id = "concise_form">(they haven't)</div></td>
            </tr>

            <tr>
                <th rowspan = "7">Past</th>
            </tr>
            <tr>
                <td>Had I?</td> <td>I had</td> <td>I had not <div id = "concise_form">(I hadn't)</div></td>
            </tr>
            <tr>
                <td>Had she?</td> <td>She had</td> <td>She had not <div id = "concise_form">(she hadn't)</div></td>
            </tr>
            <tr>
                <td>Had he?</td> <td>He had</td> <td>He had not <div id = "concise_form">(he hadn't)</div></td>
            </tr>
            <tr>
                <td>Had we?</td> <td>We had</td> <td>We had not <div id = "concise_form">(we hadn't)</div></td>
            </tr>
            <tr>
                <td>Had you?</td> <td>You had</td> <td>You had not <div id = "concise_form">(you hadn't)</div></td>
            </tr>
            <tr>
                <td>Had they?</td> <td>They had</td> <td>They had not <div id = "concise_form">(they hadn't)</div></td>
            </tr>
        </table>

        <h3><a name = "wh_words"></a>WH-words</h3>
        <table border = "1">
            <tr>
                <th>WH-word</th> <th>Example</th>
            </tr>
            <tr>
                <td>What?</td> <td>What do you eat?</td>
            </tr>
            <tr>
                <td>Where?</td> <td>Where do you live?</td>
            </tr>
            <tr>
                <td>When?</td> <td>When do you work?</td>
            </tr>
            <tr>
                <td>Why?</td> <td>Why do not you listen?</td>
            </tr>
            <tr>
                <td>How?</td> <td>How do you work?</td>
            </tr>
            <tr>
                <td>How much?</td> <td>How much pizza you ate?</td>
            </tr>
        </table>

        <h3><a name = "aa_to_be"></a>Continuous tens. Active voice</h3>
        <table border = "1">
            <tr>
                <th></th><th>Question</th> <th>Answer: <em>"Yes"</em></th> <th>Answer: <em>"No"</em></th>
            </tr>
            <tr>
                <th rowspan = "7">Future</th>
            </tr>
            <tr>
                <td>Will I be knowing?</td> <td>I will be knowing</td> <td>I will not be knowing <div id = "concise_form">(I won't be knowing)</div></td>
            </tr>
            <tr>
                <td>Will she be knowing?</td> <td>She will be knowing</td> <td>She will not be knowing <div id = "concise_form">(she won't be knowing)</div></td>
            </tr>
            <tr>
                <td>Will he be knowing?</td> <td>He will be knowing</td> <td>He will not be knowing <div id = "concise_form">(he won't be knowing)</div></td>
            </tr>
            <tr>
                <td>Will we be knowing?</td> <td>We will be knowing</td> <td>We will not be knowing <div id = "concise_form">(we won't be knowing)</div></td>
            </tr>
            <tr>
                <td>Will you be knowing?</td> <td>You will be knowing</td> <td>You will not be knowing <div id = "concise_form">(you won't be knowing)</div></td>
            </tr>
            <tr>
                <td>Will they be knowing?</td> <td>They will be knowing</td> <td>They will not be knowing <div id = "concise_form">(they won't be knowing)</div></td>
            </tr>

            <tr>
                <th rowspan = "7">Future-in-the-Past</th>
            </tr>
            <tr>
                <td>Would I be knowing?</td> <td>I would be knowing</td> <td>I would not be knowing <div id = "concise_form">(I wouldn't be knowing)</div></td>
            </tr>
            <tr>
                <td>Would she be knowing?</td> <td>She would be knowing</td> <td>She would not be knowing <div id = "concise_form">(she wouldn't be knowing)</div></td>
            </tr>
            <tr>
                <td>Would he be knowing?</td> <td>He would be knowing</td> <td>He would not be knowing <div id = "concise_form">(he wouldn't be knowing)</div></td>
            </tr>
            <tr>
                <td>Would we be knowing?</td> <td>We would be knowing</td> <td>We would not be knowing <div id = "concise_form">(we wouldn't be knowing)</div></td>
            </tr>
            <tr>
                <td>Would you be knowing?</td> <td>You would be knowing</td> <td>You would not be knowing <div id = "concise_form">(you wouldn't be knowing)</div></td>
            </tr>
            <tr>
                <td>Would they be knowing?</td> <td>They would be knowing</td> <td>They would not be knowing <div id = "concise_form">(they wouldn't be knowing)</div></td>
            </tr>

            <tr>
                <th rowspan = "7">Present</th>
            </tr>
            <tr>
                <td>Am I knowing?</td> <td>I am knowing</td> <td>I am not knowing <div id = "concise_form">(I'm not knowing)</div></td>
            </tr>
            <tr>
                <td>Is she knowing?</td> <td>She is knowing</td> <td>She is not knowing <div id = "concise_form">(she isn't knowing)</div></td>
            </tr>
            <tr>
                <td>Is he knowing?</td> <td>He is knowing</td> <td>He is not knowing <div id = "concise_form">(he isn't knowing)</div></td>
            </tr>
            <tr>
                <td>Are we knowing?</td> <td>We are knowing</td> <td>We are not knowing <div id = "concise_form">(we aren't knowing)</div></td>
            </tr>
            <tr>
                <td>Are you knowing?</td> <td>You are knowing</td> <td>You are not knowing <div id = "concise_form">(you aren't knowing)</div></td>
            </tr>
            <tr>
                <td>Are they knowing?</td> <td>They are knowing</td> <td>They are not knowing <div id = "concise_form">(they aren't knowing)</div></td>
            </tr>

            <tr>
                <th rowspan = "7">Past</th>
            </tr>
            <tr>
                <td>Was I knowing?</td> <td>I was knowing</td> <td>I was not knowing <div id = "concise_form">(I wasn't knowing)</div></td>
            </tr>
            <tr>
                <td>Was she knowing?</td> <td>She was knowing</td> <td>She was not knowing <div id = "concise_form">(she wasn't knowing)</div></td>
            </tr>
            <tr>
                <td>Was he knowing?</td> <td>He was knowing</td> <td>He was not knowing <div id = "concise_form">(he wasn't knowing)</div></td>
            </tr>
            <tr>
                <td>Were we knowing?</td> <td>We were knowing</td> <td>We were not knowing <div id = "concise_form">(we weren't knowing)</div></td>
            </tr>
            <tr>
                <td>Were you knowing?</td> <td>You were knowing</td> <td>You were not knowing <div id = "concise_form">(you weren't knowing)</div></td>
            </tr>
            <tr>
                <td>Were they knowing?</td> <td>They were knowing</td> <td>They were not knowing <div id = "concise_form">(they weren't knowing)</div></td>
            </tr>
        </table>

        <h3><a name = "ap_to_be"></a>Continuous tens. Passive voice</h3>
        <table border = "1">
            <tr>
                <th></th><th>Question</th> <th>Answer: <em>"Yes"</em></th> <th>Answer: <em>"No"</em></th>
            </tr>
            <tr>
                <th rowspan = "7">Future</th>
            </tr>
            <tr>
                <td>-</td> <td>-</td> <td>-</td>
            </tr>
            <tr>
                <td>-</td> <td>-</td> <td>-</td>
            </tr>
            <tr>
                <td>-</td> <td>-</td> <td>-</td>
            </tr>
            <tr>
                <td>-</td> <td>-</td> <td>-</td>
            </tr>
            <tr>
                <td>-</td> <td>-</td> <td>-</td>
            </tr>
            <tr>
                <td>-</td> <td>-</td> <td>-</td>
            </tr>

            <tr>
                <th rowspan = "7">Future-in-the-Past</th>
            </tr>
            <tr>
                <td>-</td> <td>-</td> <td>-</td>
            </tr>
            <tr>
                <td>-</td> <td>-</td> <td>-</td>
            </tr>
            <tr>
                <td>-</td> <td>-</td> <td>-</td>
            </tr>
            <tr>
                <td>-</td> <td>-</td> <td>-</td>
            </tr>
            <tr>
                <td>-</td> <td>-</td> <td>-</td>
            </tr>
            <tr>
                <td>-</td> <td>-</td> <td>-</td>
            </tr>

            <tr>
                <th rowspan = "7">Present</th>
            </tr>
            <tr>
                <td>Am I being known?</td> <td>I am being known</td> <td>I am not being known <div id = "concise_form">(I'm not being known)</div></td>
            </tr>
            <tr>
                <td>Is she being known?</td> <td>She is being known</td> <td>She is not being known <div id = "concise_form">(she isn't being known)</div></td>
            </tr>
            <tr>
                <td>Is he being known?</td> <td>He is being known</td> <td>He is not being known <div id = "concise_form">(he isn't being known)</div></td>
            </tr>
            <tr>
                <td>Are we being known?</td> <td>We are being known</td> <td>We are not being known <div id = "concise_form">(we aren't being known)</div></td>
            </tr>
            <tr>
                <td>Are you being known?</td> <td>You are being known</td> <td>You are not being known <div id = "concise_form">(you aren't being known)</div></td>
            </tr>
            <tr>
                <td>Are they being known?</td> <td>They are being known</td> <td>They are not being known <div id = "concise_form">(they aren't being known)</div></td>
            </tr>

            <tr>
                <th rowspan = "7">Past</th>
            </tr>
            <tr>
                <td>Was I being known?</td> <td>I was being known</td> <td>I was not being known <div id = "concise_form">(I wasn't being known)</div></td>
            </tr>
            <tr>
                <td>Was she being known?</td> <td>She was being known</td> <td>She was not being known <div id = "concise_form">(she wasn't being known)</div></td>
            </tr>
            <tr>
                <td>Was he being known?</td> <td>He was being known</td> <td>He was not being known <div id = "concise_form">(he wasn't being known)</div></td>
            </tr>
            <tr>
                <td>Were we being known?</td> <td>We were being known</td> <td>We were not being known <div id = "concise_form">(we weren't being known)</div></td>
            </tr>
            <tr>
                <td>Were you being known?</td> <td>You were being known</td> <td>You were not being known <div id = "concise_form">(you weren't being known)</div></td>
            </tr>
            <tr>
                <td>Were they being known?</td> <td>They were being known</td> <td>They were not being known <div id = "concise_form">(they weren't being known)</div></td>
            </tr>
        </table>

        <h3><a name = "aa_to_have"></a>Perfect tens. Active voice</h3>
        <table border = "1">
            <tr>
                <th></th><th>Question</th> <th>Answer: <em>"Yes"</em></th> <th>Answer: <em>"No"</em></th>
            </tr>
            <tr>
                <th rowspan = "7">Future</th>
            </tr>
            <tr>
                <td>Will I have known?</td> <td>I will have known</td> <td>I will not have known <div id = "concise_form">(I won't have known)</div></td>
            </tr>
            <tr>
                <td>Will she have known?</td> <td>She will have known</td> <td>She will have known <div id = "concise_form">(she won't have known)</div></td>
            </tr>
            <tr>
                <td>Will he have known?</td> <td>He will have known</td> <td>He will not have known <div id = "concise_form">(he won't have known)</div></td>
            </tr>
            <tr>
                <td>Will we have known?</td> <td>We will have known</td> <td>We will not have known <div id = "concise_form">(we won't have known)</div></td>
            </tr>
            <tr>
                <td>Will you have known?</td> <td>You will have known</td> <td>You will not have known <div id = "concise_form">(you won't have known)</div></td>
            </tr>
            <tr>
                <td>Will they have known?</td> <td>They will have known</td> <td>They will not have known <div id = "concise_form">(they won't have known)</div></td>
            </tr>

            <tr>
                <th rowspan = "7">Future-in-the-Past</th>
            </tr>
            <tr>
                <td>Would I have known?</td> <td>I would have known</td> <td>I would not have known <div id = "concise_form">(I wouldn't have known)</div></td>
            </tr>
            <tr>
                <td>Would she have known?</td> <td>She would have known</td> <td>She would have known <div id = "concise_form">(she wouldn't have known)</div></td>
            </tr>
            <tr>
                <td>Would he have known?</td> <td>He would have known</td> <td>He would not have known <div id = "concise_form">(he wouldn't have known)</div></td>
            </tr>
            <tr>
                <td>Would we have known?</td> <td>We would have known</td> <td>We would not have known <div id = "concise_form">(we wouldn't have known)</div></td>
            </tr>
            <tr>
                <td>Would you have known?</td> <td>You would have known</td> <td>You would not have known <div id = "concise_form">(you wouldn't have known)</div></td>
            </tr>
            <tr>
                <td>Would they have known?</td> <td>They would have known</td> <td>They would not have known <div id = "concise_form">(they wouldn't have known)</div></td>
            </tr>

            <tr>
                <th rowspan = "7">Present</th>
            </tr>
            <tr>
                <td>Have I known?</td> <td>I have known</td> <td>I have not known <div id = "concise_form">(I haven't known)</div></td>
            </tr>
            <tr>
                <td>Has she known?</td> <td>She has known</td> <td>She has not known <div id = "concise_form">(she hasn't known)</div></td>
            </tr>
            <tr>
                <td>Has he known?</td> <td>He has known</td> <td>He has not known <div id = "concise_form">(he hasn't known)</div></td>
            </tr>
            <tr>
                <td>Have we known?</td> <td>We have known</td> <td>We have not known <div id = "concise_form">(we haven't known)</div></td>
            </tr>
            <tr>
                <td>Have you known?</td> <td>You have known</td> <td>You have not known <div id = "concise_form">(you haven't known)</div></td>
            </tr>
            <tr>
                <td>Have they known?</td> <td>They have known</td> <td>They have not known <div id = "concise_form">(they haven't known)</div></td>
            </tr>

            <tr>
                <th rowspan = "7">Past</th>
            </tr>
            <tr>
                <td>Had I known?</td> <td>I had known</td> <td>I had not known <div id = "concise_form">(I hadn't known)</div></td>
            </tr>
            <tr>
                <td>Had she known?</td> <td>She had known</td> <td>She had not known <div id = "concise_form">(she hadn't known)</div></td>
            </tr>
            <tr>
                <td>Had he known?</td> <td>He had known</td> <td>He had not known <div id = "concise_form">(he hadn't known)</div></td>
            </tr>
            <tr>
                <td>Had we known?</td> <td>We had known</td> <td>We had not known <div id = "concise_form">(we hadn't known)</div></td>
            </tr>
            <tr>
                <td>Had you known?</td> <td>You had known</td> <td>You had not known <div id = "concise_form">(you hadn't known)</div></td>
            </tr>
            <tr>
                <td>Had they known?</td> <td>They had known</td> <td>They had not known <div id = "concise_form">(they hadn't known)</div></td>
            </tr>
        </table>

        <h3><a name = "ap_to_have"></a>Perfect tens. Passive voice</h3>
        <table border = "1">
            <tr>
                <th></th><th>Question</th> <th>Answer: <em>"Yes"</em></th> <th>Answer: <em>"No"</em></th>
            </tr>
            <tr>
                <th rowspan = "7">Future</th>
            </tr>
            <tr>
                <td>Will I have been known?</td> <td>I will have been known</td> <td>I will not have been known <div id = "concise_form">(I won't have been known)</div></td>
            </tr>
            <tr>
                <td>Will she have been known?</td> <td>She will have been known</td> <td>She will not have been known <div id = "concise_form">(she won't have been known)</div></td>
            </tr>
            <tr>
                <td>Will he have been known?</td> <td>He will have been known</td> <td>He will not have been known <div id = "concise_form">(he won't have been known)</div></td>
            </tr>
            <tr>
                <td>Will we have been known?</td> <td>We will have been known</td> <td>We will not have been known <div id = "concise_form">(we won't have been known)</div></td>
            </tr>
            <tr>
                <td>Will you have been known?</td> <td>You will have been known</td> <td>You will not have been known <div id = "concise_form">(you won't have been known)</div></td>
            </tr>
            <tr>
                <td>Will they have been known?</td> <td>They will have been known</td> <td>They will not have been known <div id = "concise_form">(they won't have been known)</div></td>
            </tr>

            <tr>
                <th rowspan = "7">Future-in-the-Past</th>
            </tr>
            <tr>
                <td>Would I have been known?</td> <td>I would have been known</td> <td>I would not have been known <div id = "concise_form">(I wouldn't not have been known)</div></td>
            </tr>
            <tr>
                <td>Would she have been known?</td> <td>She would have been known</td> <td>She would not have been known <div id = "concise_form">(she wouldn't have been known)</div></td>
            </tr>
            <tr>
                <td>Would he have been known?</td> <td>He would have been known</td> <td>He would not have been known <div id = "concise_form">(he wouldn't have been known)</div></td>
            </tr>
            <tr>
                <td>Would we have been known?</td> <td>We would have been known</td> <td>We would not have been known <div id = "concise_form">(we wouldn't have been known)</div></td>
            </tr>
            <tr>
                <td>Would you have been known?</td> <td>You would have been known</td> <td>You would not have been known <div id = "concise_form">(you wouldn't have been known)</div></td>
            </tr>
            <tr>
                <td>Would they have been known?</td> <td>They would have been known</td> <td>They would not have been known <div id = "concise_form">(they wouldn't have been known)</div></td>
            </tr>

            <tr>
                <th rowspan = "7">Present</th>
            </tr>
            <tr>
                <td>Have I been known?</td> <td>I have been known</td> <td>I have not been known <div id = "concise_form">(I haven't been known)</div></td>
            </tr>
            <tr>
                <td>Has she been known?</td> <td>She has been known</td> <td>She has not been known <div id = "concise_form">(she hasn't been known)</div></td>
            </tr>
            <tr>
                <td>Has he been known?</td> <td>He has been known</td> <td>He has not been known <div id = "concise_form">(he hasn't been known)</div></td>
            </tr>
            <tr>
                <td>Have we been known?</td> <td>We have been known</td> <td>We have not been known <div id = "concise_form">(we haven't been known)</div></td>
            </tr>
            <tr>
                <td>Have you been known?</td> <td>You have been known</td> <td>You have not been known <div id = "concise_form">(you haven't been known)</div></td>
            </tr>
            <tr>
                <td>Have they been known?</td> <td>They have been known</td> <td>They have not been known <div id = "concise_form">(they haven't been known)</div></td>
            </tr>

            <tr>
                <th rowspan = "7">Past</th>
            </tr>
            <tr>
                <td>Had I been known?</td> <td>I had been known</td> <td>I had not been known <div id = "concise_form">(I hadn't been known)</div></td>
            </tr>
            <tr>
                <td>Had she been known?</td> <td>She had been known</td> <td>She had not been known <div id = "concise_form">(she hadn't been known)</div></td>
            </tr>
            <tr>
                <td>Had he been known?</td> <td>He had been known</td> <td>He had not been known <div id = "concise_form">(he hadn't been known)</div></td>
            </tr>
            <tr>
                <td>Had we been known?</td> <td>We had been known</td> <td>We had not been known <div id = "concise_form">(we hadn't been known)</div></td>
            </tr>
            <tr>
                <td>Had you been known?</td> <td>You had been known</td> <td>You had not been known <div id = "concise_form">(you hadn't been known)</div></td>
            </tr>
            <tr>
                <td>Had they been known?</td> <td>They had been known</td> <td>They had not been known <div id = "concise_form">(they hadn't been known)</div></td>
            </tr>
        </table>

        <h3><a name = "pct_to_have"></a>Perfect Continuous tens. Active voice</h3>
        <table border = "1">
            <tr>
                <th></th><th>Question</th> <th>Answer: <em>"Yes"</em></th> <th>Answer: <em>"No"</em></th>
            </tr>
            <tr>
                <th rowspan = "7">Future</th>
            </tr>
            <tr>
                <td>Will I have been knowing?</td> <td>I will have been knowing</td> <td>I will not have been knowing <div id = "concise_form">(I won't have been knowing)</div></td>
            </tr>
            <tr>
                <td>Will she have been knowing?</td> <td>She will have been knowing</td> <td>She will not have been knowing <div id = "concise_form">(she won't have been knowing)</div></td>
            </tr>
            <tr>
                <td>Will he have been knowing?</td> <td>He will have been knowing</td> <td>He will not have been knowing <div id = "concise_form">(he won't have been knowing)</div></td>
            </tr>
            <tr>
                <td>Will we have been knowing?</td> <td>We will have been knowing</td> <td>We will not have been knowing <div id = "concise_form">(we won't have been knowing)</div></td>
            </tr>
            <tr>
                <td>Will you have been knowing?</td> <td>You will have been knowing</td> <td>You will not have been knowing <div id = "concise_form">(you won't have been knowing)</div></td>
            </tr>
            <tr>
                <td>Will they have been knowing?</td> <td>They will have been knowing</td> <td>They will not have been knowing <div id = "concise_form">(they won't have been knowing)</div></td>
            </tr>

            <tr>
                <th rowspan = "7">Future-in-the-Past</th>
            </tr>
            <tr>
                <td>Would I have been knowing?</td> <td>I would have been knowing</td> <td>I would not have been knowing <div id = "concise_form">(I wouldn't have been knowing)</div></td>
            </tr>
            <tr>
                <td>Would she have been knowing?</td> <td>She would have been knowing</td> <td>She would not have been knowing <div id = "concise_form">(she wouldn't have been knowing)</div></td>
            </tr>
            <tr>
                <td>Would he have been knowing?</td> <td>He would have been knowing</td> <td>He would not have been knowing <div id = "concise_form">(he wouldn't have been knowing)</div></td>
            </tr>
            <tr>
                <td>Would we have been knowing?</td> <td>We would have been knowing</td> <td>We would not have been knowing <div id = "concise_form">(we wouldn't have been knowing)</div></td>
            </tr>
            <tr>
                <td>Would you have been knowing?</td> <td>You would have been knowing</td> <td>You would not have been knowing <div id = "concise_form">(you wouldn't have been knowing)</div></td>
            </tr>
            <tr>
                <td>Would they have been knowing?</td> <td>They would have been knowing</td> <td>They would not have been knowing <div id = "concise_form">(they wouldn't have been knowing)</div></td>
            </tr>

            <tr>
                <th rowspan = "7">Present</th>
            </tr>
            <tr>
                <td>Have I been knowing?</td> <td>I have been knowing</td> <td>I have not been knowing <div id = "concise_form">(I haven't been knowing)</div></td>
            </tr>
            <tr>
                <td>Has she been knowing?</td> <td>She has been knowing</td> <td>She has not been knowing <div id = "concise_form">(she hasn't been knowing)</div></td>
            </tr>
            <tr>
                <td>Has he been knowing?</td> <td>He has been knowing</td> <td>He has not been knowing <div id = "concise_form">(he hasn't been knowing)</div></td>
            </tr>
            <tr>
                <td>Have we been knowing?</td> <td>We have been knowing</td> <td>We have not been knowing <div id = "concise_form">(we haven't been knowing)</div></td>
            </tr>
            <tr>
                <td>Have you been knowing?</td> <td>You have been knowing</td> <td>You have not been knowing <div id = "concise_form">(you haven't been knowing)</div></td>
            </tr>
            <tr>
                <td>Have they been knowing?</td> <td>They have been knowing</td> <td>They have not been knowing <div id = "concise_form">(they haven't been knowing)</div></td>
            </tr>

            <tr>
                <th rowspan = "7">Past</th>
            </tr>
            <tr>
                <td>Had I been knowing?</td> <td>I had been knowing</td> <td>I had not been knowing <div id = "concise_form">(I hadn't been knowing)</div></td>
            </tr>
            <tr>
                <td>Had she been knowing?</td> <td>She had been knowing</td> <td>She had not been knowing <div id = "concise_form">(she hadn't been knowing)</div></td>
            </tr>
            <tr>
                <td>Had he been knowing?</td> <td>He had been knowing</td> <td>He had not been knowing <div id = "concise_form">(he hadn't been knowing)</div></td>
            </tr>
            <tr>
                <td>Had we been knowing?</td> <td>We had been knowing</td> <td>We had not been knowing <div id = "concise_form">(we hadn't been knowing)</div></td>
            </tr>
            <tr>
                <td>Had you been knowing?</td> <td>You had been knowing</td> <td>You had not been knowing <div id = "concise_form">(you hadn't been knowing)</div></td>
            </tr>
            <tr>
                <td>Had they been knowing?</td> <td>They had been knowing</td> <td>They had not been knowing <div id = "concise_form">(they hadn't been knowing)</div></td>
            </tr>
        </table>

    </div>
    <div class="clear">
    </div>
</div>
<div class="footer">

</div>


</body>
</html>
