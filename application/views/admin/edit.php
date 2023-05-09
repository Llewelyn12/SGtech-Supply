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
            <a style="font-size:32px">ลงทะเบียนครุภัณฑ์</a>
        </div><br>
        <div class="row">
            <div class="col">
                <div class="container">
                    <a>อัพโหลดรูปภาพ</a> <br>
                    <input type="file" accept="image/*">
                </div>
            </div>
        </div>
        <form method="post" class="card-body"><br>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">รหัสครุภัณฑ์</div>
                            </div>
                            <input type="text" name="commodity_ID" class="form-control" id="inlineFormInputGroup">
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">ปีงบประมาณ</div>
                            </div>
                            <select id="inputState" name="receive_budget_type" class="form-control">
                                <option> เลือก </option>
                                <option>2559</option>
                                <option>2560</option>
                                <option>2561</option>
                                <option>2562</option>
                                <option>2563</option>
                                <option>2564</option>
                                <option>2565</option>
                                <option>2566</option>
                                <option>2567</option>
                                <option>2568</option>
                                <option>2569</option>
                                <option>2570</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">ชื่อครุภัณฑ์</div>
                            </div>
                            <input type="text" class="form-control" name="name_of_item" id="inlineFormInputGroup">
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">เกณฑ์อายุการใช้งาน</div>
                            </div>
                            <input type="text" class="form-control" name="useful_life" id="inlineFormInputGroup">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">ยี่ห้อ</div>
                            </div>
                            <input type="text" class="form-control" name="brand_of_item" id="inlineFormInputGroup">
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">รุ่น</div>
                            </div>
                            <input type="text" class="form-control" name="model_item" id="inlineFormInputGroup">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">หมายเลขเครื่อง</div>
                            </div>
                            <input type="text" class="form-control" name="serial_numberpk" id="inlineFormInputGroup">
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">ระยะเวลาประกัน</div>
                            </div>
                            <input type="text" class="form-control" name="warranty_period" id="inlineFormInputGroup">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">ราคาต่อหน่วย</div>
                            </div>
                            <input type="text" class="form-control" name="price" id="inlineFormInputGroup">
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">จำนวน</div>
                            </div>
                            <input type="text" class="form-control" name="quantity" id="inlineFormInputGroup">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">เลขที่ใบเบิก</div>
                            </div>
                            <input type="text" class="form-control" name="pickup_number" id="inlineFormInputGroup">
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">รายละเอียด(หมายเหตุ)</div>
                            </div>
                            <input type="text" class="form-control" name="comments" id="inlineFormInputGroup">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">วันที่ได้รับครุภัณฑ์</div>
                            </div>
                            <input type="date" class="form-control" name="receive_date_item" id="dateformat">
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">หน่วยงาน</div>
                            </div>
                            <input type="text" class="form-control" name="departments" id="inlineFormInputGroup">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">ผู้รับผิดชอบ</div>
                            </div>
                            <select id="inputState" name="supervisor" class="form-control">
                                <option>เลือก</option>
                                <option>รศ.ดร.ประพิธาริ์ ธนารักษ์</option>
                                <option>รศ.ดร.ธวัช สุริวงษ์</option>
                                <option>ผศ.ดร.มาลินี แก้วปัญหา</option>
                                <option>ดร.วิสุทธิ์ แช่มสะอาด</option>
                                <option>ดร.จักรกฤษ เติมฤทธิกุล</option>
                                <option>ดร.สุขฤดี สุขใจ</option>
                                <option>ผศ.ดร.สหัถยา ทองสาร</option>
                                <option>รศ.ดร.พิสิษฏ์ มณีโชติ</option>
                                <option>รศ.ดร.ศักดา สมกุล</option>
                                <option>ดร.พรทิพย์ เม่นสิน</option>
                                <option>ดร.พัชรินทร์ เยาวรัตน์</option>
                                <option>ดร.อัญชิษฐา ปราสาททรัพย์/option>
                                <option>นางสาวขวัญญานันท์ มากเหลือธัญวุฒิ</option>
                                <option>นางสาวเพ็ญนภา บุญเรือง</option>
                                <option>นางสาวิตรี เดชอัครา</option>
                                <option>นางสาวอิชยา นาคโต</option>
                                <option>นายศรันย์ อ่อนสมบูรณ์</option>
                                <option>ดร.บงกช ประสิทธิ์</option>
                                <option>นายสาธิต บรรทึก</option>
                                <option>นายวิกานต์ วันสูงเนิน</option>
                                <option>นางชุติมา ดรณ์ชญานิน</option>
                                <option>นางสาวจันจิรา คุ้มปากพิง</option>
                                <option>นางสาวอันธิกา เพชรี</option>
                                <option>นางชมัยพร คุ่ยเจริญ</option>
                                <option>นายธีระพล ปานโพธิ์</option>
                                <option>นายสุรนาท แซ่ย่าง</option>
                                <option>นางสาวชนนิกานต์ ยี่สุ่นแป้น</option>
                                <option>นายจำเริญ จันดี</option>
                                <option>นายไพโรจน์ พวงเงิน</option>
                                <option>นายสำเริง พูลทวี</option>
                                <option>นายนิตย์ เขียวใจดี</option>
                                <option>นางบุญตา ขววัญผ่อง</option>
                                <option>นางสาวกัญญาพัช มีไชโย</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">ระบบ 3 มิติ</div>
                            </div>
                            <input type="text" name="receive_budget_type" class="form-control" id="inlineFormInputGroup">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">สถานที่เก็บครุภัณฑ์</div>
                            </div>
                            <input type="text" class="form-control" name="currently_used" id="inlineFormInputGroup">
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">ผู้ดูแล</div>
                            </div>
                            <select id="inputState" name="user_in_used" class="form-control">
                                <option>เลือก</option>
                                <option>รศ.ดร.ประพิธาริ์ ธนารักษ์</option>
                                <option>รศ.ดร.ธวัช สุริวงษ์</option>
                                <option>ผศ.ดร.มาลินี แก้วปัญหา</option>
                                <option>ดร.วิสุทธิ์ แช่มสะอาด</option>
                                <option>ดร.จักรกฤษ เติมฤทธิกุล</option>
                                <option>ดร.สุขฤดี สุขใจ</option>
                                <option>ผศ.ดร.สหัถยา ทองสาร</option>
                                <option>รศ.ดร.พิสิษฏ์ มณีโชติ</option>
                                <option>รศ.ดร.ศักดา สมกุล</option>
                                <option>ดร.พรทิพย์ เม่นสิน</option>
                                <option>ดร.พัชรินทร์ เยาวรัตน์</option>
                                <option>ดร.อัญชิษฐา ปราสาททรัพย์/option>
                                <option>นางสาวขวัญญานันท์ มากเหลือธัญวุฒิ</option>
                                <option>นางสาวเพ็ญนภา บุญเรือง</option>
                                <option>นางสาวิตรี เดชอัครา</option>
                                <option>นางสาวอิชยา นาคโต</option>
                                <option>นายศรันย์ อ่อนสมบูรณ์</option>
                                <option>ดร.บงกช ประสิทธิ์</option>
                                <option>นายสาธิต บรรทึก</option>
                                <option>นายวิกานต์ วันสูงเนิน</option>
                                <option>นางชุติมา ดรณ์ชญานิน</option>
                                <option>นางสาวจันจิรา คุ้มปากพิง</option>
                                <option>นางสาวอันธิกา เพชรี</option>
                                <option>นางชมัยพร คุ่ยเจริญ</option>
                                <option>นายธีระพล ปานโพธิ์</option>
                                <option>นายสุรนาท แซ่ย่าง</option>
                                <option>นางสาวชนนิกานต์ ยี่สุ่นแป้น</option>
                                <option>นายจำเริญ จันดี</option>
                                <option>นายไพโรจน์ พวงเงิน</option>
                                <option>นายสำเริง พูลทวี</option>
                                <option>นายนิตย์ เขียวใจดี</option>
                                <option>นางบุญตา ขววัญผ่อง</option>
                                <option>นางสาวกัญญาพัช มีไชโย</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">วันที่ตรวจสอบ</div>
                            </div>
                            <input type="date" class="form-control" name="validation_date" id="inlineFormInputGroup">
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">สถานะ</div>
                            </div>
                            <select id="inputState" name="status" class="form-control">
                                <option>เลือก</option>
                                <option>ใช้ได้</option>
                                <option>ชำรุด</option>
                                <option>เสื่อมสภาพ</option>
                                <option>ไม่ใช้</option>
                                <option>สูญหาย</option>
                            </select>
                        </div>
                    </div>
                </div> <br>
                <div class="col text-center">
                    <button class="btn btn-success" style="font-size: 20px;" type="submit">บันทึก</button>
                </div><br>
            </div>
        </form>
        </form><br>
    </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</script>

</html>