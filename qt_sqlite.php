<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Работа с базой данных SQLite на Qt C++</title>
    </head>
    <body>
        <?php
        require 'libs.inc.php';
        require 'menu.inc.php';
        ?>

        <h1>Работа с базой данных SQLite на Qt C++</h1>

        <h3>Инструментарий</h3>
        <ul>
            <li>SDK Qt 5.2.0</li>
            <li>ОС Windows 7</li>
        </ul>

        <p>Примечание. Инструкция составлена по видео: <a href="http://www.youtube.com/watch?v=cc06D3wuTn4">http://www.youtube.com/watch?v=cc06D3wuTn4</a></p>

        <h3>Инструкция</h3>
        <ul>
            <li>открываем браузер Mozilla Firefox</li>
            <li>в меню браузера выбираем "Web Developer" -> выбираем "SQLite Manager"</li>
            <li>в меню "SQLite Manager" выбираем "Database" -> выбираем "New Database"</li>
            <li>в открывшемся окне вводим имя базы данных, к примеру: Accounts</li>

            <p>Примечание. При выборе пути для сохранения базы данных, нужно учитывать, что этот путь должен совпадать с тем путём, который вернёт статический метод QDir::currentPath()</p>

            <li>в меню выбираем "Table" -> "Create Table"</li>

            <li>заполняем форму, как показано на рисунке:</li>
            <img src="img/qt_sqlite/001.png" />

            <li>заполняем таблицу, как показано на рисунке:</li>
            <img src="img/qt_sqlite/002.png" />

            <li>запускаем Qt Creator</li>
            <li>если у Вас Qt Creator на русском, то я рекомендовал бы переключиться на английский. Для этого выбираем в меню "Инструменты" -> "Параметры..."</li>
            <li>в окне "Параметры" слева выбираем "Среда" -> открываем вкладку "Основные" -> выбираем в выпадающем списке "English" -> нажимаем кнопку "OK" -> перезапускаем Qt Creator</li>
            <li>в меню Qt Creator'а выбираем "File" -> "New File or Project..." (Ctrl+N)</li>
            <li>в разделе "Projects" выбираем "Applications" -> во второй колонке выбираем "Qt Widgets Application"</li>
            <li>нажимаем кнопку "Choose"</li>
            <li>в поле "Name" вводим: DatabaseLoginForm и нажимаем "Next" (2 раза)</li>
            <li>в поле "Base Class" выбираем "QDialog" -> нажимаем "Next" -> нажимаем "Finish"</li>
            <li>скачиваем исходный код проекта (кнопка "Download ZIP" справа-внизу): <a href="https://github.com/8Observer8/DatabaseLoginForm">https://github.com/8Observer8/DatabaseLoginForm</a></li>
            <li>заменяем файлы текущего проекта на файлы из скаченного</li>
            <li>нажимаем Ctrl+R, чтобы запустить программу</li>
        </ul>

        <p>P.S. На всякий случай привожу все файлы проекта здесь</p>
        <p><strong>DatabaseLoginForm.pro</strong></p>
        <pre>
<code class="language-cpp">
QT += core gui sql

greaterThan(QT_MAJOR_VERSION, 4): QT += widgets

TARGET = DatabaseLoginForm
TEMPLATE = app


SOURCES += main.cpp \
           dialog.cpp

HEADERS += dialog.h

FORMS += dialog.ui
</code>
        </pre>

        <p><strong>main.cpp</strong></p>
        <pre>
<code class="language-cpp">
#include "dialog.h"
#include &lt;QApplication&gt;

int main(int argc, char *argv[])
{
    QApplication a(argc, argv);
    Dialog w;
    w.show();
    
    return a.exec();
}
</code>
        </pre>

        <p><strong>dialog.h</strong></p>
        <pre>
<code class="language-cpp">
#ifndef DIALOG_H
#define DIALOG_H

#include &lt;QDialog&gt;
#include &lt;QDebug&gt;
#include &lt;QtSql&gt;
#include &lt;QFileInfo&gt;
#include &lt;QMessageBox&gt;

namespace Ui {
class Dialog;
}

class Dialog : public QDialog
{
    Q_OBJECT
    
public:
    explicit Dialog(QWidget *parent = 0);
    ~Dialog();
    
private slots:
    void on_btnLogin_clicked();
    void on_btnClear_clicked();

private:
    Ui::Dialog *ui;
    QSqlDatabase myDB;
};

#endif // DIALOG_H
</code>
        </pre>

        <p><strong>dialog.cpp</strong></p>
        <pre>
<code class="language-cpp">
#include "dialog.h"
#include "ui_dialog.h"

Dialog::Dialog(QWidget *parent) :
    QDialog(parent),
    ui(new Ui::Dialog)
{
    ui->setupUi(this);

    myDB = QSqlDatabase::addDatabase("QSQLITE");

    QString pathToDB = QDir::currentPath()+QString("/Accounts.sqlite");
    myDB.setDatabaseName(pathToDB);

    QFileInfo checkFile(pathToDB);

    if (checkFile.isFile()) {
        if (myDB.open()) {
            ui->lblResult->setText("[+] Connected to Database File");
        }
        else {
            ui->lblResult->setText("[!] Database File was not opened");
        }
    }
    else {
        ui->lblResult->setText("[!] Database File does not exist");
    }
}

Dialog::~Dialog()
{
    delete ui;
    qDebug() << "Closing the connection to Database file on exist";
    myDB.close();
}

void Dialog::on_btnClear_clicked()
{
    ui->txtUser->setText("");
    ui->txtPass->setText("");
}

void Dialog::on_btnLogin_clicked()
{
    QString Username, Password;

    Username = ui->txtUser->text();
    Password = ui->txtPass->text();

    if (!myDB.isOpen()) {
        qDebug() << "No connection to Database";
        return;
    }

    QSqlQuery qry;

    if (qry.exec("SELECT Username, Password, Role FROM Users WHERE Username=\'" + Username +
                 "\' AND Password=\'" + Password + "\'"))
    {
        if (qry.next()) {
            ui->lblResult->setText("[+] Valid Username and Password");
            QString msg = "Username = " + qry.value(0).toString() + "\n" +
                    "Password = " + qry.value(1).toString() + "\n" +
                    "Role = " + qry.value(2).toString() + "\n";
            QMessageBox::warning(this, "Login was successful", msg);
        }
        else {
            ui->lblResult->setText("[-] Wrong Username or Password");
        }
    }
    else {
        ui->lblResult->setText("[-] Wrong query");
    }
}
</code>
        </pre>

        <p><strong>dialog.ui</strong></p>
        <pre>
<code class="language-cpp">
&lt;?xml version="1.0" encoding="UTF-8"?&gt;
&lt;ui version="4.0"&gt;
 &lt;class&gt;Dialog&lt;/class&gt;
 &lt;widget class="QDialog" name="Dialog"&gt;
  &lt;property name="geometry"&gt;
   &lt;rect&gt;
    &lt;x&gt;0&lt;/x&gt;
    &lt;y&gt;0&lt;/y&gt;
    &lt;width&gt;306&lt;/width&gt;
    &lt;height&gt;106&lt;/height&gt;
   &lt;/rect&gt;
  &lt;/property&gt;
  &lt;property name="windowTitle"&gt;
   &lt;string&gt;Dialog&lt;/string&gt;
  &lt;/property&gt;
  &lt;layout class="QGridLayout" name="gridLayout"&gt;
   &lt;item row="0" column="0"&gt;
    &lt;layout class="QVBoxLayout" name="verticalLayout"&gt;
     &lt;item&gt;
      &lt;layout class="QHBoxLayout" name="horizontalLayout"&gt;
       &lt;item&gt;
        &lt;widget class="QLabel" name="label"&gt;
         &lt;property name="text"&gt;
          &lt;string&gt;Username:&lt;/string&gt;
         &lt;/property&gt;
        &lt;/widget&gt;
       &lt;/item&gt;
       &lt;item&gt;
        &lt;widget class="QLineEdit" name="txtUser"/&gt;
       &lt;/item&gt;
      &lt;/layout&gt;
     &lt;/item&gt;
     &lt;item&gt;
      &lt;layout class="QHBoxLayout" name="horizontalLayout_2"&gt;
       &lt;item&gt;
        &lt;widget class="QLabel" name="label_2"&gt;
         &lt;property name="text"&gt;
          &lt;string&gt;Password:&lt;/string&gt;
         &lt;/property&gt;
        &lt;/widget&gt;
       &lt;/item&gt;
       &lt;item&gt;
        &lt;widget class="QLineEdit" name="txtPass"&gt;
         &lt;property name="echoMode"&gt;
          &lt;enum&gt;QLineEdit::Password&lt;/enum&gt;
         &lt;/property&gt;
        &lt;/widget&gt;
       &lt;/item&gt;
      &lt;/layout&gt;
     &lt;/item&gt;
    &lt;/layout&gt;
   &lt;/item&gt;
   &lt;item row="0" column="1"&gt;
    &lt;layout class="QVBoxLayout" name="verticalLayout_2"&gt;
     &lt;item&gt;
      &lt;widget class="QPushButton" name="btnLogin"&gt;
       &lt;property name="text"&gt;
        &lt;string&gt;Login&lt;/string&gt;
       &lt;/property&gt;
      &lt;/widget&gt;
     &lt;/item&gt;
     &lt;item&gt;
      &lt;widget class="QPushButton" name="btnClear"&gt;
       &lt;property name="text"&gt;
        &lt;string&gt;Crear&lt;/string&gt;
       &lt;/property&gt;
      &lt;/widget&gt;
     &lt;/item&gt;
    &lt;/layout&gt;
   &lt;/item&gt;
   &lt;item row="1" column="0"&gt;
    &lt;widget class="QLabel" name="lblResult"&gt;
     &lt;property name="frameShape"&gt;
      &lt;enum&gt;QFrame::Box&lt;/enum&gt;
     &lt;/property&gt;
     &lt;property name="frameShadow"&gt;
      &lt;enum&gt;QFrame::Raised&lt;/enum&gt;
     &lt;/property&gt;
     &lt;property name="text"&gt;
      &lt;string&gt;[+] Status&lt;/string&gt;
     &lt;/property&gt;
    &lt;/widget&gt;
   &lt;/item&gt;
  &lt;/layout&gt;
 &lt;/widget&gt;
 &lt;layoutdefault spacing="6" margin="11"/&gt;
 &lt;resources/&gt;
 &lt;connections/&gt;
&lt;/ui&gt;
</code>
        </pre>
    </body>
</html>
