<!DOCTYPE html>
<html lang="en">
    <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Multiplication Table</title>
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <style>
       body {
            background: url('https://img.freepik.com/free-vector/fruits-background-vector-cute-desktop-wallpaper_53876-140210.jpg?w=2000');
            background-size: cover;
            background-color: rgba(255, 255, 255, 10);
            color: #000000;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin:0;
            font-family: 'Itim', cursive;
        }


        h1 {
            color: #a5eca8;
            text-shadow: 3px 3px rgb(0, 0, 0);
            font-size: 40px;
            font-weight: bold;
        }

        table {
            width:45%;
            margin:auto;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);

        }

        th, td {
            border: 1px solid #000000;
            padding: 10px;
        }

        div.HW {
            width:50%;
            max-height: 500px;
            overflow-y: scroll;
            text-align: center;
            margin: auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            border-radius: 20px 50px;

        }
    </style>
</head>
<body>
    <div class="HW">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $x = $_POST["myinputnumber"];
            echo "<h1>ตารางสูตรคูณแม่ $x</h1>";
            echo "<table>";
            echo "<thead><tr><th>Multiplier</th><th>Result</th></tr></thead>";
            echo "<tbody>";
            for ($i = 1; $i <= 24; $i++) {
                echo "<tr><td>$x x $i</td><td>" . ($x * $i) . "</td></tr>";
            }
            echo "</tbody></table>";
        }
        ?>
    </div>

</body>
</html>
