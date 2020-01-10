<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
<div class="container-fluid">
    <div>
        <h3>How did You like your experience with Agent?</h3>
        <div class="answer">
            <table>
                <th></th>
                <th>Good</th>
                <th>Very Good</th>
                <th>Excellent</th>
                <th>Not Good</th>
                <th>Bad</th>

                <tr>
                    <td><b>Greeting</b></td>
                    <td><input type="radio"></td>
                    <td><input type="radio"></td>
                    <td><input type="radio"></td>
                    <td><input type="radio"></td>
                    <td><input type="radio"></td>
                </tr>
                <tr>
                    <td><b>Knowlage</b></td>
                    <td><input type="radio"></td>
                    <td><input type="radio"></td>
                    <td><input type="radio"></td>
                    <td><input type="radio"></td>
                    <td><input type="radio"></td>
                </tr>
                <tr>
                    <td><b>Servise</b></td>
                    <td><input type="radio"></td>
                    <td><input type="radio"></td>
                    <td><input type="radio"></td>
                    <td><input type="radio"></td>
                    <td><input type="radio"></td>
                </tr>
                <tr>
                    <td><b>Delivery</b></td>
                    <td><input type="radio"></td>
                    <td><input type="radio"></td>
                    <td><input type="radio"></td>
                    <td><input type="radio"></td>
                    <td><input type="radio"></td>
                </tr>
            </table>
            <button class="next">Next</button>


        </div>
    </div>



</div>
</body>
</html>
<style>
    .container-fluid{
        height: 400px;
        width: 100%;
        background-color: #00cc00;
        margin-top: 5%;
        border: 2px black solid;
        padding: 5%;
    }
    table th{
        border: 1px solid black;
    }
    .next{
        position: relative;
        float: right;

    }

</style>
