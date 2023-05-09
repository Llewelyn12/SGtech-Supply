<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History Log</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&family=Prompt:wght@300&family=Rubik:wght@500&display=swap" rel="stylesheet">
</head>
<style>
    span.c1 {
        color: black;
    }

    .font {
        font-family: 'Kanit', sans-serif;
        background-color: #CACACA;
    }

    .sub-font {
        font-family: 'Prompt', sans-serif;
    }

    .table,
    td,
    th {
        border: 1px solid black;
        text-align: center;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-light sticky-top " style="background-color:#FA7F25;">
        <div class="container-fluid">
            <i class='fas fa-boxes me-3' style='font-size:36px;color:white;'></i>
            <a class="navbar-brand " href="<?php echo site_url('index') ?>" style="color: white;font-size:36px;font-family: 'Rubik', sans-serif;">S<span class="c1">G</span>tech Supply</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item me-2">
                        <a class="nav-link " aria-current="page" href="<?php echo site_url('index') ?>" style="color:white;font-size:20px;font-family: 'Kanit', sans-serif;">หน้าแรก</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3" href="<?php echo site_url('insert') ?>" style="color: white;font-size:20px;font-family: 'Kanit', sans-serif;">ลงทะเบียนครุภัณฑ์</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3" href="<?php echo site_url('qrcode') ?>" style="color: white;font-size:20px;font-family: 'Kanit', sans-serif;">QR code</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3" href="#" style="color: white;font-size:20px;font-family: 'Kanit', sans-serif;">เกี่ยวกับ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3" href="#" style="color: white;font-size:20px;font-family: 'Kanit', sans-serif;">แอดมิน</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="<?php echo site_url('login') ?>" style="color: white;font-size:20px;font-family: 'Kanit', sans-serif;">ออกจากระบบ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> <br>
    <div class="container">
        <a style="color: black;font-size:32px;font-family: 'Kanit', sans-serif;">ประวัติการตรวจสอบ</a><br><br>
        <div class="row">
            <div class="col text-start">
                <a style="color: black;font-size:18px;font-family: 'Kanit', sans-serif;">ชื่อครุภัณฑ์:</a>
            </div>
            <div class="col text- center">
                <a style="color: black;font-size:18px;font-family: 'Kanit', sans-serif;">เลขครุภัณฑ์:</a>
            </div>
        </div><br>
    </div>
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr class="font">
                    <th scope="col">วันที่ตรวจสอบ</th>
                    <th scope="col">เวลา</th>
                    <th scope="col">ผู้ตรวจสอบ</th>
                    <th scope="col">แก้ไข</th>
                </tr>
            </thead>
            <tbody class="sub-font">
                <tr>
                    <th>ว/ด/ป</th>
                    <td>12.00</td>
                    <td>เฟรม</td>
                    <td>----</td>
                </tr>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</html>