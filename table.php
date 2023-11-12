<!DOCTYPE html>
<html>
<head>
    <title>Dynamisk tabell</title>
    <style>
        table{
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <label for="firstname">Förnamn:</label>
        <input type="text" name="firstname" id="firstname" required><br>
        
        <label for="lastname">Efternamn:</label>
        <input type="text" name="lastname" id="lastname" required><br>
        
        <label for="age">Ålder:</label>
        <input type="text" name="age" id="age" required><br>

        <input type="submit" value="Skicka">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Hämta och säkra POST-data
        $firstname = htmlspecialchars($_POST["firstname"]);
        $lastname = htmlspecialchars($_POST["lastname"]);
        $age = htmlspecialchars($_POST["age"]);

        // Visa data i en tabell
        echo "<table>";
        echo "<tr><th>Förnamn</th><th>Efternamn</th><th>Ålder</th></tr>";
        echo "<tr><td>$firstname</td><td>$lastname</td><td>$age</td></tr>";
        echo "</table>";
    }
    ?>
</body>
</html>