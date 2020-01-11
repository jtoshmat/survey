<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>


<div class="container-fluid">
    @foreach($options as $option)
    <div class="mywrapper" id="mywrapper{{$option->id}}">
        <div class="title">
            <h2 class="h2" >{{$option->id}}:{{$option->question_text}}</h2>
        </div>

        <div class="answers">
               <table class="table table-bordered">
                   <tr>
                       <th>&nbsp;</th>
                       <th>Very Good</th>
                       <th>Awesome</th>
                       <th>Worst</th>
                       <th>Cool</th>
                       <th>Bad</th>
                   </tr>

                   <tr>
                       <td>{{$option->option1}}</td>
                       <td><input type="radio" name="answer1"></td>
                       <td><input type="radio" name="answer1"></td>
                       <td><input type="radio" name="answer1"></td>
                       <td><input type="radio" name="answer1"></td>
                       <td><input type="radio" name="answer1"></td>
                   </tr>

                   <tr>
                       <td>{{$option->option2}}</td>
                       <td><input type="radio" name="answer2"></td>
                       <td><input type="radio" name="answer2"></td>
                       <td><input type="radio" name="answer2"></td>
                       <td><input type="radio" name="answer2"></td>
                       <td><input type="radio" name="answer2"></td>
                   </tr>

                   <tr>
                       <td>{{$option->option3}}</td>
                       <td><input type="radio" name="answer3"></td>
                       <td><input type="radio" name="answer3"></td>
                       <td><input type="radio" name="answer3"></td>
                       <td><input type="radio" name="answer3"></td>
                       <td><input type="radio" name="answer3"></td>
                   </tr>

                   <tr>
                       <td>{{$option->option4}}</td>
                       <td><input type="radio" name="answer4"></td>
                       <td><input type="radio" name="answer4"></td>
                       <td><input type="radio" name="answer4"></td>
                       <td><input type="radio" name="answer4"></td>
                       <td><input type="radio" name="answer4"></td>
                   </tr>

                   <tr>
                       <td>{{$option->option5}}</td>
                       <td><input type="radio" name="answer5"></td>
                       <td><input type="radio" name="answer5"></td>
                       <td><input type="radio" name="answer5"></td>
                       <td><input type="radio" name="answer5"></td>
                       <td><input type="radio" name="answer5"></td>
                   </tr>

                   <tr>
                       <td>{{$option->option6}}</td>
                       <td><input type="radio" name="answer6"></td>
                       <td><input type="radio" name="answer6"></td>
                       <td><input type="radio" name="answer6"></td>
                       <td><input type="radio" name="answer6"></td>
                       <td><input type="radio" name="answer6"></td>
                   </tr>

               </table>

                <div class="prev_button">
                    <button class="btn btn-primary" value="1" name="previous">Previous</button>
                </div>

                <div class="next_button">
                    <button class="btn btn-primary" value="1" name="next">Next</button>
                </div><br>

            @endforeach
            <div class="clearfix"></div>
        </div>

    </div>
</div>


<style>

.title h2{
    color: white;
    font-family: "American Typewriter";
    font-size: 25px;
    margin: 10px;
    padding: 10px;
}


    td{
        text-align: center;
    }

    table tr td:first-child{
        background-color: #dbdbdb;
        text-align: left;
    }



    .answers{
    }

    .prev_button{
        float: left;
    }

    .next_button{
        float: right;
    }


    body{
        background-color: #0c223f;
    }
    table{
        width: 90%;
        height: 500px;
        background-color: #eaeaea;
        border: 1px solid black;
        margin: auto;
        color: white;
    }

    tr:first-child{
        background-color: #1f6994;
        color:white;
    }
    .mywrapper{
      display:none;
    }
    #mywrapper1{
      display: block;
    }

</style>

<script>
var id = 2;
$(function () {
  $(".btn").click(function(){
    callHttp("api/company", {id: id});
$("#mywrapper"+id-1).hide();
    $("#mywrapper"+id).show();

    id =id+1;


  });

});

function callHttp(url, data){
               $.post(url, data, function(result){

                 //$(".h2").empty().text(result)
                 console.log(result)

           })
         }
</script>

</body>
</html>
