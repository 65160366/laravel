<html>

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
</head>

<body>
    <br>
    <div>
    <h1>แม่สูตรคูณ</h1>
    <form method="post" class="mal" action="/my-display">
        @csrf
        <label for="NumberInput">ป้อนตัวเลข : </label>
        <input type ="number" name ="myinputnumber">
        <button type ="submit">แสดง</button>
    </form>
    </div>
    <style>
        body {
            font-family: 'Itim', sans-serif;
            background : url('https://i.pinimg.com/originals/16/fe/ff/16feffae06fd3f41d8c409007ae89d41.jpg');
            /* สีพื้นหลัง */
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            text-align: center;
            color: #f9fc34;
            text-shadow: 0.1em 0.1em #000000;
            font-size: 90px;
        }

        form {
            margin-bottom: 50px;
            text-align: center;
        }

        label {
            display: block;
        }

        input[type="number"] {
            padding: 8px;
            border: 1px solid #ccc;
            /* สีขอบของ input */
            border-radius: 5px;
        }

        button {
            padding: 10px;
            cursor: pointer;
            background-color: #a0a0a0;
            color: #ffffff;
            border: none;
            border-radius: 5px;
        }
        .mal{
            display: flex;
            gap: 20px;
            align-items: center;
        }
    </style>
</body>

</html>
