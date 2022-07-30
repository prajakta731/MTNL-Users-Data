<?php
require("db.php");
if (isset($_POST['submit'])) {

$q = mysqli_query($con, "INSERT INTO `users` (`id`, `user_id`, `static_ip`, `subs_no`, `telephone_no`, `vlan`, `olt_ip`, `onu`, `olt_mac`, `plan`, `cust_name`, `mobile`, `address`, `area`, `work_order_no`, `work_order_date`, `work_order_type`, `exchange_code`) VALUES (NULL, '".$_POST['user_id']."', '".$_POST['static_ip']."', '".$_POST['subs_no']."', '".$_POST['tel_no']."', '".$_POST['vlan']."', '".$_POST['olt_ip']."', '".$_POST['onu']."', '".$_POST['olt_mac']."', '".$_POST['plan']."', '".$_POST['user_name']."', '".$_POST['mob_no']."', '".$_POST['address']."', '".$_POST['area']."', '".$_POST['work_order_no']."', 'work_order_date', '".$_POST['work_order_type']."', '".$_POST['exchange_code']."');") or die(mysqli_error($con));
header("Location: index.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MTNL Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <form action="adduser.php" method="POST">
                  <div class="mb-3">
                    <label for="InputText1" class="form-label">User id</label>
                    <input type="text" class="form-control" id="InputText1" name="user_id">
                    </div>
                    
                      <div class="mb-3">
                        <label for="InputNumber1" class="form-label">Static IP</label>
                        <input type="phone" class="form-control" id="InputNumber1" name="static_ip">
                        </div>
                        <div class="mb-3">
                          <label for="InputNumber6" class="form-label">Subscriber no</label>
                          <input type="number" class="form-control" id="InputNumber6" name="subs_no">
                          </div>
                          <div class="mb-3">
                          <label for="InputNumber7" class="form-label">Telephone no</label>
                          <input type="number" class="form-control" id="InputNumber7" name="tel_no">
                          </div>
                        <div class="mb-3">
                        <label for="InputNumber2" class="form-label">Vlan</label>
                        <input type="number" class="form-control" id="InputNumber2" name="vlan">
                        </div>
                        <div class="mb-3">
                        <label for="InputNumber3" class="form-label">Olt IP</label>
                        <input type="number" class="form-control" id="InputNumber3" name="olt_ip">
                        </div>
                        <div class="mb-3">
                          <label for="InputNumber9" class="form-label">Olt MAC</label>
                          <input type="number" class="form-control" id="InputNumber9" name="olt_mac">
                          </div>
                        <div class="mb-3">
                        <label for="InputNumber4" class="form-label">Onu</label>
                        <input type="number" class="form-control" id="InputNumber4" name="onu">
                        </div>
                        <div class="mb-3">
                        <label for="InputText3" class="form-label">Plan</label>
                        <input type="text" class="form-control" id="InputText3" name="plan">
                        </div>
                        <div class="mb-3">
                          <label for="InputText2" class="form-label">Username</label>
                          <input type="text" class="form-control" id="InputText2" name="user_name">
                          </div>
                        <div class="mb-3">
                        <label for="InputNumber5" class="form-label">Mobile No</label>
                        <input type="number" class="form-control" id="InputNumber5" name="mob_no">
                        </div>
                        <div class="mb-3">
                        <label for="InputText4" class="form-label">Address</label>
                        <input type="textarea" class="form-control" id="InputText4" name="address">
                        </div>
                        <div class="mb-3">
                        <label for="InputText6" class="form-label">Area</label>
                        <input type="textarea" class="form-control" id="InputText4" name="area">
                        </div>
                        <div class="mb-3">
                        <label for="InputNumber8" class="form-label">Work Order No</label>
                        <input type="number" class="form-control" id="InputNumber8" name="work_order_no">
                        </div>
                        <div class="mb-3">
                        <label for="InputDate1" class="form-label">Work Order date</label>
                        <input type="date" class="form-control" id="InputDate1" name="work_order_date">
                        </div>
                        <div class="mb-3">
                        <label for="InputText5" class="form-label">Work Order Type</label>
                        <input type="text" class="form-control" id="InputText5" name="work_order_type">
                        </div>
                        <div class="mb-3">
                          <label for="InputNumber10" class="form-label">Exchange Code</label>
                          <input type="number" class="form-control" id="InputNumber10" name="exchange_code">
                          </div>

                    <!--<div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>-->
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                  </form>
            </div>
        </div>
        
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
</body>
</html>