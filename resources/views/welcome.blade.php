<!DOCTYPE html>
<html lang="en">
<head>
    <title>Javascript 101</title>
</head>
<body>
    <h1>Before</h1>
    <h1 id = "myh1">
        <h1>Prepend</h1>Javascript</h1>Append</h1>
    </h1>
    <button onclick="alert('Hello World!')">Click Me!</button>
    <input type = "text" id = "my_number" value="10">
    <button onclick="myFunction()">submit number</button>
    <br>
    <button onclick=""
    <table id = "my_table">
        <thead>
            <tr>
    
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            console.log("Hello World - document.ready")
            console.log($('#myh1').text())
            console.log($('#my_number').val())
            $('#myh1').text("Javascript 101")
            $('#my_number').val(100)
            // setInterval(() => {
            //     $('#myh1').after(<h1 class="my_gen_number">setInterval</h1>)
            // }, 2000);
        });

        function myFunction2() {

        }
        function myFunction() {
            let my_number = parseInt($('#my_number').val())
            for(let i=0; i<my_number; i++){
                $('#myh1').after(<h1 class="my_gen_number">${i}</h1>)
            }
            console.log(document.getElementById('my_number').value);
            console.log('Click submit number')
            setTimeout(function() {
                $('.my_gen_number').each(function(index, val) {
                    $(val).remove();
                    //val.remove()
                })
            }, 2000);
            $('.my_gen_number').each(function(index, val) {
                $(val).remove();
                //val.remove()
            })
        }
        console.log("Hello World!")
        let myval;
        myval = '10';
        myval2 = '2';
        console.log(myval, myval2)
        myval3 = parseInt(myval) + myval2
        console.log(myval3)
        myval3 = myval - myval2
        console.log(myval3)
        myval3 = myval * myval2
        console.log(myval3)
        myval3 = myval / myval2
        console.log(myval3)

    </script>
    <script>
        let myval4 = [1, 2, 3, 4];

        myval4[5] = 5;
        myval4[6] = [6, 5, 4, 5]
        console.log(myval4)

        for (i = 0; i < myval4.length; i++) {
            console.log("in for", myval4[i])
        }
        myval4.forEach(function(value, index) {
            console.log("in forEach",value,index)
        });

        console.log(document.getElementById('myh1').innerHTML)
        /*
        //php
        foreach($myval4 as $index => $value){

        }
        */
    </script>
</body>
</html>
