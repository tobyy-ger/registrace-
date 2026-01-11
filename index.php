<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Registrace účastníků</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include "nav.html"; ?>

<div class="container">
    <h1>Registrace účastníků akce</h1>

    <?php
    if (isset($_GET["chyba"])) {
        echo "<p class='error'>Hesla se neshodují!</p>";
    }
    ?>

    <form action="uloz.php" method="post">

        <div class="form-row">
            <div class="form-group">
                <label for="jmeno">Jméno</label>
                <input type="text" id="jmeno" name="jmeno" required>
            </div>

            <div class="form-group">
                <label for="prijmeni">Příjmení</label>
                <input type="text" id="prijmeni" name="prijmeni" required>
            </div>
        </div>

        <div class="form-group">
            <label for="vek">Věk</label>
            <input type="number" id="vek" name="vek" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="akce">Typ akce</label>
            <select id="akce" name="akce">
                <option value="Workshop">Workshop</option>
                <option value="Turnaj">Turnaj</option>
                <option value="Výlet">Výlet</option>
            </select>
        </div>

        <div class="form-group">
            <label for="heslo1">Heslo</label>
            <input type="password" id="heslo1" name="heslo1" required>
        </div>

        <div class="form-group">
            <label for="heslo2">Heslo znovu</label>
            <input type="password" id="heslo2" name="heslo2" required>
        </div>

        <div class="form-group checkbox-group">
            <label>
                <input type="checkbox" name="souhlas" required>
                Souhlasím s <a href="podminky.html" target="_blank">podmínkami</a>
            </label>
        </div>

        <div class="form-group">
            <label for="poznamka">Poznámka</label>
            <textarea id="poznamka" name="poznamka"></textarea>
        </div>

        <button type="submit">Odeslat registraci</button>

    </form>

</div>

<?php include "footer.html"; ?>

</body>
</html>
