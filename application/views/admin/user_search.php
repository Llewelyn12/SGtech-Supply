<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500');

    body {
        overflow-x: hidden;
        font-family: 'Roboto', sans-serif;
        font-size: 16px;
    }

    /* Toggle Styles */

    #viewport {
        padding-left: 135px;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    #content {
        position: relative;
        width: 100%;
        margin-right: 0;
    }

    #topbar {

        position: fixed;
        left: auto;
        width: 100%;
        height: 5%;
        margin-left: -130px;
        overflow-y: 100px;
        background: #FA7F25;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    /* Sidebar Styles */

    #sidebar {
        z-index: 200;
        position: fixed;
        left: 150px;
        width: 150px;
        height: 100%;
        margin-left: -150px;
        overflow-y: auto;
        background: #FA7F25;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    #sidebar header {
        background-color: #FA7F25;
        font-size: 40px;
        line-height: 52px;
        text-align: center;
    }

    #sidebar header a {
        color: #fff;
        display: block;
        text-decoration: none;
    }

    #sidebar header a:hover {
        color: #fff;
    }



    #sidebar .nav a {
        background: none;

        color: #CFD8DC;
        font-size: 14px;
        padding: 16px 24px;
    }

    #sidebar .nav a:hover {
        background: none;
        color: #ECEFF1;
    }

    #sidebar .nav a i {
        margin-right: 16px;
    }
    #htb {
        
        background-color: #CACACA;
        color: #000000;

    }

    #icon {
        display: flex;
        align-items: center;
        justify-content: center;
        position: auto;

    }

    .nav-item {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .logo {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .buttom {
        position: absolute;
        bottom: 8px;
        left: 16px;
    }

    .header {
        position: auto;
    }

    .card-body {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  margin: 0;
  
}
    
.container {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  
}

form {
  color: #555;
  display: flex;
  padding: 2px;
  border: 1px solid currentColor;
  border-radius: 5rem;
  margin: 0 0 30px;
  width: 350px;
  height: 80px
}

input[type="search"] {
  border: none;
  background: transparent;
  margin: 0;
  padding: 7px 8px;
  font-size: 22px;
  color: inherit;
  border: 1px solid transparent;
  border-radius: inherit;
}

input[type="search"]::placeholder {
  color: #bbb;
}

button[type="submit"] {
  text-indent: -999px;
  overflow: hidden;
  width: 80px;
  padding: 0;
  margin: 0;
  border: 1px solid transparent;
  border-radius: inherit;
  background: transparent url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' class='bi bi-search' viewBox='0 0 16 16'%3E%3Cpath d='M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z'%3E%3C/path%3E%3C/svg%3E") no-repeat center;
  cursor: pointer;
  opacity: 0.7;
}

button[type="submit"]:hover {
  opacity: 1;
}

button[type="submit"]:focus,
input[type="search"]:focus {
  box-shadow: 0 0 3px 0 #1183d6;
  border-color: #1183d6;
  outline: none;
}

.bt {
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 5rem;
}

.bt1 {
  background-color: white;
  color: black;
  border: 2px solid #4CAF50;
  
}

.bt1:hover {
  background-color: #4CAF50;
  color: white;
}

.bt2 {
    background-color: white;
    color: black;
    border: 2px solid #008CBA;
}

.bt2:hover {
  background-color: #008CBA;
  color: white;
}

</style>

<body>
    <div id="viewport">
        <!-- Sidebar -->
        <div id="sidebar">
            <header>
                <a href="#">SGtech</a>
            </header>
            <div class="container-fluid">
                <div class="row flex-nowrap">
                    <div class=" col-auto col-auto ">
                        <div class="logo">
                        </div>
                        <ul class="nav nav-pills flex-column mt-4">
                            <li class="nav-item">
                                <a href="#" class="nav-link text-white">
                                    <i class='fas fa-house-user ' id="icon" style='font: size 24px;'></i>

                                    <span class="fs-6 d-none d-sm-inline">Home</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-white">
                                    <i class="fa fa-registered" id="icon" style="font-size:24px"></i>

                                    <span class="fs-6 d-none d-sm-inline">Register</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-white">
                                    <i class="fa fa-qrcode" id="icon" style="font-size:24px"></i>

                                    <span class="fs-6 d-none d-sm-inline">QR Code</span>
                                </a>
                            </li>
                            <div class="buttom">
                                <li class="nav-item">
                                    <a href="#" class="nav-link text-white">
                                        <i class='fas fa-user-circle' id="icon" style='font-size:24px'></i>

                                        <span class="fs-6 d-none d-sm-inline mt-2">User</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link text-white">
                                        <i class="fas fa-sign-out-alt" id="icon" style="font-size:24px"></i>

                                        <span class="fs-6 d-none d-sm-inline mt-2">Sign out</span>
                                    </a>
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div id="topbar">
            <div class="header">
                <nav class="navbar navbar-light" style="background-color:#FA7F25;">
                    <div class="container-fluid">
                        <h1 class="navbar-brand ">SGtech</h1>
                    </div>
                </nav>
            </div>
        </div>
        <div class="card-body">
        <div class="container">
  <form>
  <input type="search" placeholder="Search...">
  <button type="submit">Search</button>
</form>
    <button class="bt bt1">ค้นหา</button> 
    <button class="bt bt2 ">ค้นหาด้วยคิวอาร์โค้ด</button>

</div>
        </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</html>