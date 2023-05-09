<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&family=Prompt:wght@300&family=Rubik:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.bootstrap5.min.css">
</head>
<style>
    span.c1 {
        color: black;
    }

    .font {
        font-family: 'Kanit', sans-serif;
        background-color: #CACACA;
        /* font-size:14px; */

    }

    .sub-font {
        font-family: 'Prompt', sans-serif;
    }

    .table,
    td,
    th {
        text-align: center;
        border: 1px solid black;
    }

    .card {
        border: 0px solid black;
        align-items: center;
    }

    .body {
        height: 10000px;

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

    <div class="container-fluid">
        <table class="table" id="datatable">
            <thead>
                <tr class="font">
                    <th scope="col" style="width: 10em;">รายการ</th>
                    <th scope="col" style="width: 2em;">หมายเลขเครื่อง</th>
                    <th scope="col" style="width: 10em;">เลขครุภัณฑ์</th>
                    <th scope="col" style="width: 2em;">เลขที่ใบเบิก</th>
                    <th scope="col" style="width: 4em;">วันที่ได้มา</th>
                    <th scope="col" style="width: 2em;">ประเภทงบประมาณ</th>
                    <th scope="col" style="width: 2em;">ราคาต่อหน่วย</th>
                    <th scope="col" style="width: 10em;">ผู้ดูแล</th>
                    <th scope="col" style="width: 2em;">สถานที่</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($items as $row) : ?>
                    <tr class="sub-font">
                        <td><?= $row->name_of_item ?></td>
                        <td><?= $row->serial_numberpk ?></td>
                        <td><?= $row->commodity_ID ?></td>
                        <td><?= $row->pickup_number ?></td>
                        <td><?= $row->receive_date_item ?></td>
                        <td><?= $row->receive_budget_type ?></td>
                        <td><?= $row->price ?></td>
                        <td><?= $row->user_in_used ?></td>
                        <td><?= $row->currently_used ?></td>
                        <td><a class="btn btn-primary" href="<?php echo site_url('detail') ?>" role="button">รายละเอียด</a></td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.bootstrap5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.colVis.min.js"></script>
<script>
    $(document).ready(function() {
        $('#datatable').DataTable();
    });
</script><br>

</html>