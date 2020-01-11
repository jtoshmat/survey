<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
      <title>Categories</title>
      <script src="resource/js/jquery-3.4.1.min.js" type="text/javascript"></script>
  </head>
  <body>

    <!--Create categories with bootsrap,
        different colors
        On-click redirects to survey
      -->

    <div class="container-fluid">
      <div id="myContainer">
        <div class="myTitle">
          <h3 style="margin: 1px; padding: 1px; text-align: center;">Categories</h3><hr>
        </div>

        <div class="myCategories">
            @foreach ($categories as $category)
                <div class="list-group">
                 <a href="company" class="list-group-item list-group-item-action active">{{$category->category_1}}</a>
                 <a href="#" class="list-group-item list-group-item-action">{{$category->category_2}}</a>
                 <a href="#" class="list-group-item list-group-item-action">{{$category->category_3}}</a>
                 <a href="#" class="list-group-item list-group-item-action">{{$category->category_4}}</a>
                </div>
            @endforeach
             </div>
        </div>
      </div>
    </div>


  <style>
      .list-group{
          border: 2px solid black !important;
          text-align: center;
          margin: 1px;
          padding: 1px;
      }
  </style>

  <script>
      $(".list-group-item").click(function() {
          var listItems = $(".list-group-item");

          for (let i = 0; i < listItems.length; i++){
              listItems[i].classList.remove("active");
          }
          $(this).classList.add("active");
      });
  </script>
  </body>
</html>
