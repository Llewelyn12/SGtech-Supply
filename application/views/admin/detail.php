<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addmin Home page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&family=Prompt:wght@300&family=Rubik:wght@500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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

    #detail {
        font-family: 'Kanit', sans-serif;
    }

    .material-symbols-outlined {
        font-variation-settings:
            'FILL' 0,
            'wght' 400,
            'GRAD' 0,
            'opsz' 48
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
    <div class="container" id="detail">
        <div class="container">
            <a style="font-size:32px">รายละเอียดครุภัณฑ์</a>
        </div><br>
        <div class="row">
            <div class="col">
                <div class="see a photo">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal" style="font-size: 20px;">
                        ดูรูปภาพ
                        <i class="material-icons">&#xe3b6;</i>
                    </button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <a style="font-size: 20px;">รูปครุภัฑณ์</a>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="text-start">
                                        <img src="https://media-cldnry.s-nbcnews.com/image/upload/t_fit-1240w,f_auto,q_auto:best/newscms/2020_07/3231366/200214-fat-cat-santa-fe-animal-shelter-2012-ac-531p.jpg" width="250px" height="250px">
                                    </div><br>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">ปิด</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col text-end">
                <div class="col dropdown">
                    <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 20px;">
                        ประวัติ
                    </button>
                    <ul class="dropdown-menu dropdown-menu" aria-labelledby="dropdownMenuButton2">
                        <li><a class="btn" style="font-size: 17px;" href="<?php echo site_url('transfer') ?>" role="button">ประวัติการย้าย</a></li>
                        <li><a class="btn" style="font-size: 17px;" href="<?php echo site_url('repair') ?>" role="button">ประวัติการซ่อม</a></li>
                        <li><a class="btn" style="font-size: 17px;" href="<?php echo site_url('check') ?>" role="button">ประวัติการตรวจสอบ</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
            <div class="card"><br>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">รหัสครุภัณฑ์</div>
                                </div>
                                <label type="text" class="form-control" id="inlineFormInputGroup">
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">ปีงบประมาณ</div>
                                </div>
                                <label type="text" class="form-control" id="inlineFormInputGroup">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">ชื่อครุภัณฑ์</div>
                                </div>
                                <label type="text" class="form-control" id="inlineFormInputGroup">
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">เกณฑ์อายุการใช้งาน</div>
                                </div>
                                <label type="text" class="form-control" id="inlineFormInputGroup">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">ยี่ห้อ</div>
                                </div>
                                <label type="text" class="form-control" id="inlineFormInputGroup">
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">รุ่น</div>
                                </div>
                                <label type="text" class="form-control" id="inlineFormInputGroup">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">หมายเลขเครื่อง</div>
                                </div>
                                <label type="text" class="form-control" id="inlineFormInputGroup">
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">ระยะเวลาประกัน</div>
                                </div>
                                <label type="text" class="form-control" id="inlineFormInputGroup">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">ราคาต่อหน่วย</div>
                                </div>
                                <label type="text" class="form-control" id="inlineFormInputGroup">
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">จำนวน</div>
                                </div>
                                <label type="text" class="form-control" id="inlineFormInputGroup">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">เลขที่ใบเบิก</div>
                                </div>
                                <label type="text" class="form-control" id="inlineFormInputGroup">
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">รายละเอียด(หมายเหตุ)</div>
                                </div>
                                <label type="text" class="form-control" id="inlineFormInputGroup">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">วันที่ได้รับครุภัณฑ์</div>
                                </div>
                                <label type="text" class="form-control" id="inlineFormInputGroup">
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">หน่วยงาน</div>
                                </div>
                                <label type="text" class="form-control" id="inlineFormInputGroup">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">ผู้รับผิดชอบ</div>
                                </div>
                                <label type="text" class="form-control" id="inlineFormInputGroup">
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">ระบบ 3 มิติ</div>
                                </div>
                                <label type="text" class="form-control" id="inlineFormInputGroup">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">สถานที่เก็บครุภัณฑ์</div>
                                </div>
                                <label type="text" class="form-control" id="inlineFormInputGroup">
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">ผู้ดูแล</div>
                                </div>
                                <label type="text" class="form-control" id="inlineFormInputGroup">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">วันที่ตรวจสอบ</div>
                                </div>
                                <label type="text" class="form-control" id="inlineFormInputGroup">
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">สถานะ</div>
                                </div>
                                <label type="text" class="form-control" id="inlineFormInputGroup">
                            </div>
                        </div>
                    </div> <br>
                
                <div class="col text-center">
                    <a class="btn btn-danger" style="font-size: 20px;" href="<?php echo site_url('edit') ?>" role="button">แก้ไข</a>
                </div><br>
                </div>
            </div><br>
    </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>