<?php
session_start();
if(isset($_POST['login']) and isset($_POST['pass']))
{
    $_SESSION['user'] = $_POST['login'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
     *{font-family: sans-serif;text-align: center;}
     table{display: inline-block;border:1px solid#999;border-collapse: collapse;}
     td,th{border:1px solid #999;padding: 5px;}
     a{text-decoration: none;color:#5482f8;}
    </style>
<?php
 if(!isset($_SESSION['user']))
 {
?>
    <table>
    <tr>
    <td>
        <p>Zaloguj</p>
        <form action="sesje.php" method="post">
        <p>Login:<input type="text" name="login" id=""></p>
        <p>Hasło:<input type="password" name="pass" id=""></p>
        <input type="submit" value="Zaloguj">
        </form>
    </td>
    </tr>
 </table>
 <?php
 }
 ?>
 <br><br>
 <table>
    <tr>
    <td>
    <?php
    if(isset($_SESSION['user']))
    {   
        echo '<b>Zalogowano</b><br><br>';
        echo 'Login';
        echo $_SESSION['user'];
        echo '<br><br><a href="logout.php">Wyloguj</a>';


    }
     else
     {
        echo 'niezalogowany';
     }   
    
    ?>

    </td>


    </tr>


 </table>
</body>
</html>