<!doctype html>
<html>

<head>
    <title>Multiplication table</title>
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            background-image: url('https://png.pngtree.com/background/20220731/original/pngtree-little-flower-rabbit-colorful-cute-tile-seamless-kids-doodle-background-picture-image_1897540.jpg')
        }

        .container {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            text-align: center;
            height: 100%;
        }

        .content {
            margin-top: 20px;
        }

        label {
            font-size: 20px;
            /* เพิ่มขนาดตัวหนังสือ */
            margin-right: 10px;
        }

        button {
            font-size: 16px;
            padding: 10px 20px;
            /* ปรับขนาดและระยะห่างของปุ่ม */
            border-radius: 5px;
            /* ทำให้มีเส้นรอบตัว */
            background-color: #f5dc6f;
            /* เปลี่ยนสีพื้นหลัง */
            color: rgb(10, 9, 9);
            /* เปลี่ยนสีตัวหนังสือ */
            border: none;
            /* ลบเส้นขอบ */
            cursor: pointer;
        }

        button:hover {
            background-color: #f1ea8f;
            /* เปลี่ยนสีพื้นหลังเมื่อชี้เม้าส์ */
        }

        table {
            margin-top: 40px;
            border-collapse: collapse;
            width: 100%;
            background-color: #f5b3e5;
        }

        th,
        td {
            padding: 12px;
            border: 1px solid #cf03c5;
            text-align: center;
            font-size: 17px;
        }

        th {
            background-color: #e201d7;
            color: white;
        }

        input[type="text"] {
            font-size: 16px;
            padding: 8px;
            border-radius: 7px;
            border: 1px solid #faa8fa;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="content">
            <h1>ตารางสูตรคูณ</h1>
            <h1>Multiplication table</h1>
            <label for="my_number">Put number :</label>
            <input type="text" id="my_number" placeholder="Put number">
            <button onclick="myFunction2()">submit</button>
            <br>
            <table id="my_table">
                <thead>
                    <tr>
                        <td>#</td>
                        <td>result</td>
                    </tr>
                </thead>
                <tbody id="my_tbody">

                </tbody>
            </table>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        function myFunction2() {
            let my_number = parseInt($('#my_number').val())
            let my_code_tr = ``
            for (let i = 1; i <= 12; i++) {
                my_code_tr += `<tr><td>${i}</td><td>${generateMultiplicationTable(my_number, i)}</td></tr>`;
            }
            $('#my_tbody').html(my_code_tr)
        }

        function generateMultiplicationTable(number, multiplier) {
            return `${number} * ${multiplier} = ${number * multiplier}`;
        }
    </script>
</body>

</html>
