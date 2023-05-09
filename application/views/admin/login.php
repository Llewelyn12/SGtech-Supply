<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta charset="utf-8">
  <title>SGtech</title>

  <style type="text/css">
    .container {
      justify-content: center;
      align-items: right;
      position: fixed;
      left: 500px;
    }

    .text {
      color: white;
      justify-content: center;
      font-size: 85px;
      padding: 10px 100px;
      position: absolute;
      bottom: 200px;
      left: 100px;


    }

    span.c1 {
      color: black;
    }

    .icon {
      font-size: 85px;
      padding: 10px 130px;
      position: absolute;
      bottom: 150px;
      left: 100px;

    }

    .card-block {
      background-color: rgba(245, 245, 245, 0.5);
      border-radius: 1rem;

    }
  </style>
</head>

<body>

  <section class="vh-100" style="background-color: #FA7F25;">
    <div class="text">
      <div class="icon"><i style='font-size:254px' class='fas'>&#xf468;</i></div>
      <span class="c1">SG</span>tech Supply
    </div>
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100 ">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card-block card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <h3 class="mb-5" style="color:white">Login</h3>

              <div class="form-outline mb-4" style="color:grey">
                <input type="email" id="typeidX-2" class="form-control form-control-lg" placeholder="Username" required />
                <br>
              </div>

              <div class="form-outline mb-4" style="color:grey">
                <input type="password" id="typePasswordX-2" class="form-control form-control-lg" placeholder="Password" required />
                <br>
              </div>


              <button href="test_login.php" class="btn btn-primary btn-lg btn-block " style="background-color: #FA7F25;  border: none; border-radius: 10rem; " type="submit">Sign Up</button>





            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</body>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'>
</script>

</html>