<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Přehled účastníků</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include "nav.html"; ?>

<div class="container">
    <h1>Registrovaní účastníci</h1>

    <form method="get">
        <select name="akce">
            <option value="">Všechny akce</option>
            <option value="Workshop">Workshop</option>
            <option value="Turnaj">Turnaj</option>
            <option value="Výlet">Výlet</option>
        </select>
        <button type="submit">Filtrovat</button>
    </form>

    <table>
        <tr>
            <th>Jméno</th>
            <th>Věk</th>
            <th>Email</th>
            <th>Akce</th>
            <th>Datum</th>
            <th>Poznámka</th>
        </tr>

        <?php
        if (isset($_GET["akce"])) {
            $filtr = $_GET["akce"];
        } else {
            $filtr = "";
        }
        if (file_exists("data.txt")) {
            foreach (file("data.txt") as $radek) {
                list($jmeno, $vek, $email, $akce, $datum, $poznamka) = explode("|", $radek);

                if ($filtr == "" || $filtr == $akce) {
                    echo "<tr>
                        <td>$jmeno</td>
                        <td>$vek</td>
                        <td>$email</td>
                        <td>$akce</td>
                        <td>$datum</td>
                        <td>$poznamka</td>
                    </tr>";
                }
            }
        }else{
            echo "<h2>Chyba načtení souboru!</h2>";
        }
        ?>
    </table>
</div>

<?php include "footer.html"; ?>

</body>
</html>

