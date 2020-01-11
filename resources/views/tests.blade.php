<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
    <title>Document</title>
</head>
<body>
@foreach($tests as $test)
{{$test->question_text}}<hr>
@endforeach


<!--
Basic skeleton - div, container,
button (redirects to survey)
-->
<div>
<div class="container-fluid">
    <h4>The Personalisation Survey for Enterprises</h4>
    <p><pre>
        As a successful enterprise, it is important to deliver personalized experiences for customers
        in order to achieve success in today's digital world.
        This short survey will find out customer pain points, experiences, suggestions, etc:
       </pre>
        <ul>
            <li>
                <p>Discover what you learn about customer and their behavior</p>
            </li>
            <li>
                <p>Get detailed customer analysis which will help the business.</p>
            </li>
        </ul>
        <form method="GET" action="/company">
            {{csrf_field()}}
            <button class="btn btn-primary" type="submit" name="submit">Get Started</button>
        </form>
    </pre>



    </p>




</div>




</div>
</div>

</body>
</html>
