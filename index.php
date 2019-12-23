<?php
function createMySql(): mysqli
{
    $mysqli = new mysqli("localhost", "root", "", "user12");
    if ($mysqli->connect_errno) {
        throw new Exception("Filed to connect to MySql(" . $mysqli->connect_errno . ")" . $mysqli->connect_errno);
    }
    return $mysqli;

    function createUser(string $log, string $nam, string $dat, string $inf)
    {
        $mysqli = createMySql();
        $query = "INSERT INTO 'user12'('logo', 'name', 'date', 'info') VALUES ('$log','$nam','$dat', '$inf')";
        return $mysqli->query($query);
    }

    if (isset($_POST['butt'])) ;
    {
        $log = $_POST['logo'];

        if (isset($_POST['butt'])) ;
        {
            $nam = $_POST['name'];
        }
        if (isset($_POST['butt'])) ;
        {
            $dat = $_POST['date'];
        }
        if (isset($_POST['butt'])) ;
        {
            $inf = $_POST['info'];
        }
    }



    $err = [];

    if (isset($_POST['butt'])) {
        $err = [];
        if (empty($_POST['logo'])) {
            $err[] = "<div style='color:red> Вставьте ссылку </div>";
        }
        if (empty($_POST['name'])) {
            $err[] = "<div style='color:red> Введите название компании </div>";
        }
        if (empty($_POST['date'])) {
            $err[] = "<div style='color:red> Введите дату создания компании </div>";
        }
        if (empty($_POST['info'])) {
            $err[] = "<div style='color:red> Поделитесь информацией </div>";
        }

        if (chek("SELECT*FROM 'user12' WHERE 'logo' = " . "\" " . $_POST['logo'] . "\"") > 0) {
            $err[] = "<div style='color:red'> Такой логотип уже добавлен</div>";
        }
        if (chek("SELECT*FROM 'user12' WHERE 'logo' = " . "\" " . $_POST['name'] . "\"") > 0) {
            $err[] = "<div style='color:red'> Название этой компании уже добавлено</div>";
        }
//        if (proverka("SELECT*FROM 'user12' WHERE 'logo' = " . "\" " . $_POST['date'] . "\"") > 0) {
//            $err[] = "<div style='color:red'> </div>"
//}
        if (chek("SELECT*FROM 'user12' WHERE 'logo' = " . "\" " . $_POST['info'] . "\"") > 0) {
            $err[] = "<div style='color:red'> Информация написана</div>";
        }
    }
}
