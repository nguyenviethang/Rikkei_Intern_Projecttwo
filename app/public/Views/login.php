<?php
echo $_SESSION['error'];
unset($_SESSION['error']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
  body {
    background-image: linear-gradient(#dbdbdb, #dbdbdb);
  }

  #box {
    border: 1px solid rgb(200, 200, 200);
    box-shadow: rgba(0, 0, 0, 0.1) 0px 5px 5px 2px;
    background: rgba(200, 200, 200, 0.1);
    border-radius: 4px;
    top: 50px;
  }

  h2 {
    text-align: center;
    color: #000000;
  }
</style>

<body>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="col-md-offset-4 col-md-4" id="box">
        <?php

        ?>
        <h2>Login</h2>
        <hr>
        <form class="form-horizontal" action="?url=login" method="POST">
          <fieldset>
            <div class="form-group">
              <div class="col-md-12">
                <div class="input-group"> <span class="input-group-addon">
                    <i class="glyphicon glyphicon-user"></i></span> <input name="username" placeholder="Username" class="form-control" type="text">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-12">
                <div class="input-group"> <span class="input-group-addon">
                    <i class="glyphicon glyphicon-lock"></i></span> <input name="password" placeholder="Password" class="form-control" type="text">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-12">
                <button type="submit" class="btn btn-md btn-danger pull-right">Đăng nhập </button>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>

</body>
<!-- JavaScript Bundle with Popper -->
<script src="js/jquery-1.11.1.min.js"></script>

</html>