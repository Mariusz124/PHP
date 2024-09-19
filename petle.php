<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            font-family: sans-serif;
            text-align: center;
        }
         body
         {
            display:flex;
            flex-direction: column;
            text-align: center;
            align-items: center;
         }
         table
         {
            border-collapse: collapse;
            margin-top: 20px;
            height: 100px;
            width: 100px;
         }
         th,td
         {
            border:1px solid black;
            padding :10px;
            
         }
       
        
    </style>
</head>
<body>
    
    <h1>Srednia arytmetyczna !</h1>
    <form action="" method="get">
        Podaj liczbe
        <input type="text" name="num" id="">
        <input type="submit" value="wyslij">  
    </form>
    <?php
    
    if(isset($_GET['num']) and is_numeric($_GET['num']))
    {
        $a =$_GET['num'];
        echo "<br> = $a<br><br>";
        echo "<table><tr><th>WHILE</th><th>DO WHILE</th><th>FOR</th></tr>";
      
        echo "<tr>";
        echo "<td>";
        //WHILE
        $i = $a;
        while($i>0)
        {
            echo "$i";
            echo "<br>";
            $i--;
        }

        echo"</td>";

        echo "<td>";
        $i = $a;
          do
          {
            echo $i;
            echo "<br>";
            $i--;
          }while($i>0);

        echo"</td>";

        echo "<td>";
        for(; $a>0;$a--)
        {
            echo $a;
            echo "<br>";
        }

        echo"</td>";
        echo "</tr>";
        echo "</table>";
        


    }   
     

    
    ?>
 
</body>
</html>
