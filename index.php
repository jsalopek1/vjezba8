<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automobili</title>

</head>
<body>
    <h3>Odaberi marku automobila</h3>
    <form method="post">
        <?php
        $markeAutomobila = ["BMW", "AUDI", "VW", "Peugeot"];


        foreach ($markeAutomobila as $marka) {
            echo "<p><input type='radio' id='$marka' name='odabranaMarka' value='$marka' required>";
            echo "<label for='$marka'>$marka</label></p>";
        }
        ?>
        <button type="submit">Odaberi</button>
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST['odabranaMarka'])) {
        $odabranaMarka = htmlspecialchars($_POST['odabranaMarka']);
        echo "<h3>Odabrali ste: $odabranaMarka</h3>";
    }
    ?>

        <!-- vježba 8 - Odabir automobila-->
</body>
</html>
