<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkowanie</title>
    <link rel="stylesheet" href="styl_1.css">
</head>

<body>
    <section class="baner">
        <h1>Portal dla wedkarzy</h1>
    </section>
    <section class="siatka">
        <section class="left_side">
            <section class="lewy1">
                <h3>Ryby zamieszkujace rzeki</h3>
                <ol>
                    <?php
                    $con = mysqli_connect("localhost","root","","wedkowanie");
                    if (!$con) {
                        die("Połaczenie nieudane" . mysqli_error());
                    } else {
                        $q = "SELECT nazwa ,akwen,wojewodztwo from Ryby JOIN lowisko on Ryby.id = Ryby_id where rodzaj = 3;";
                        $res = mysqli_query($con, $q);
                        while ($row = mysqli_fetch_row($res)) {
                            echo "<li>$row[0]pływa w rzece $row[1]$row[2]</li>";
                        }
                    }
                    ?>



                </ol>
            </section>
            <section class="lewy2">
                <h3>Ryby drapiezne naszych wód</h3>
                <table>
                    <tr>
                        <th>L.P.</th>
                        <th>Gatunek</th>
                        <th>Wystepowanie</th>

                    </tr>
                    <?php
                    $query = "SELECT id,nazwa, wystepowanie from Ryby where styl_zycia = 1;";
                    $result = mysqli_query($con, $query);
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr><td>.$row[0].</td><td>.$row[1].</td><td>.$row[2].</td></tr>";
                    }
                    mysqli_close($con);
                    ?>
                </table>
            </section>
        </section>
        <section class="prawy">
            <div>
                <img src="ryba1.jpg" alt="Sum">
            </div>
            <a href="kwerendy.txt">Pobierz kwerendy</a>
        </section>

    </section>
    <section class="stopka">
        <p>strone wykonał Mariusz Was:00000000000</p>
    </section>
</body>

</html>