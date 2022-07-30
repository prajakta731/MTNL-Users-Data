<?php
require("db.php");
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
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                      <th scope="col">User id</th>

                      <th scope="col">Static IP</th>
                      <th scope="col">Sub. No.</th>
                      <th scope="col">Telephone no.</th>
                      <th scope="col">Vlan</th>
                      <th scope="col">Olt IP</th>
                      <th scope="col">ONU</th>
                      <th scope="col">Olt mac</th>
                      <th scope="col">Plan</th>
                      <th scope="col">Customer name</th>
                      <th scope="col">Mobile no.</th>
                      <th scope="col">Address</th>
                      <th scope="col">Area</th>
                      <th scope="col">Work Order no.</th>
                      <th scope="col">Work Order date</th>
                      <th scope="col">Work Order Type</th>
                      <th scope="col">Exchange code</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $query = mysqli_query($con, "SELECT * FROM `users` ") or die(mysqli_error($con));
                    
                    while($data = mysqli_fetch_assoc($query)):
                    ?>
                    <tr>
                      <td><?php  echo $data['user_id'] ?></td>
                      <td><?php  echo $data['static_ip'] ?></td>
                      <td><?php  echo $data['subs_no'] ?></td>
                      <td><?php  echo $data['telephone_no'] ?></td>
                      <td><?php  echo $data['vlan'] ?></td>
                      <td><?php  echo $data['olt_ip'] ?></td>
                      <td><?php  echo $data['onu'] ?></td>
                      <td><?php  echo $data['olt_mac'] ?></td>
                      <td><?php  echo $data['plan'] ?></td>
                      <td><?php  echo $data['cust_name'] ?></td>
                      <td><?php  echo $data['mobile'] ?></td>
                      <td><?php  echo $data['address'] ?></td>
                      <td><?php  echo $data['area'] ?></td>
                      <td><?php  echo $data['work_order_no'] ?></td>
                      <td><?php  echo $data['work_order_date'] ?></td>
                      <td><?php  echo $data['work_order_type'] ?></td>
                      <td><?php  echo $data['exchange_code'] ?></td>
                    </tr>
                    <?php
                    endwhile;
                    ?>
                    
                    </tbody>
              </table>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
</body>
</html>