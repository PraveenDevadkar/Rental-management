<?php
include ("dbconnection.php");


if (isset($_GET['id']) && isset($_GET['userid'])) {
    $id = intval($_GET['id']); 
    $userid=intval($_GET['userid']);


    $query = "SELECT deposit.pid,deposit.recordimg,bookdom.startdate,bookdom.enddate ,deposit.status
              FROM deposit
              JOIN bookdom ON deposit.pid=bookdom.did AND deposit.userid=bookdom.userid
              WHERE deposit.pid=$id AND deposit.userid=$userid AND deposit.ptype='d'";
    $result = mysqli_query($conn, $query);

     // Initialize an empty array to store fetched data
     $data = [];

     // Check if the query executed successfully
      if ($result) {
      while ($row = mysqli_fetch_assoc($result)) 
      {
        // Push each row to the $data array
      $data[] = $row;
      }
      }

} else {
    echo "No ID provided";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <div class="table-responsive mb-3">
    <table class="table table-striped table-bordered">
    <tr>
    <th scope="col" style="background-color:black; color:white">Property ID</th>
    <th scope="col" style="background-color:black; color:white">Property photo</th>
    <th scope="col" style="background-color:black; color:white">Starting date</th>
    <th scope="col" style="background-color:black; color:white">End date</th>
    <th scope="col" style="background-color:black; color:white">Mark as Paid</th>
    <th scope="col" style="background-color:black; color:white">Deposit</th>
  </tr>
  <tr>
    <td><?php echo isset($data[0]['pid']) ? $data[0]['pid'] : ''; ?></td>
    <td><?php echo isset($data[0]['recordimg']) ? '<img src="' . $data[0]['recordimg'] . '" alt="Property Image" width="50" height="50">' : ''; ?></td>
    <td><?php echo isset($data[0]['startdate']) ? $data[0]['startdate'] : ''; ?></td>
    <td><?php echo isset($data[0]['enddate']) ? $data[0]['enddate'] : ''; ?></td>
    <td class="text-center"><a href="rentstatus.php?id=<?php echo $id; ?>&userid=<?php echo $userid; ?>&ptype=<?php echo 'd'; ?>&ty=<?php echo 'deposit'; ?>&startdate=<?php echo $data[0]['startdate']; ?>&enddate=<?php echo $data[0]['enddate']; ?> " class="btn "><i class="fa fa-check-circle" style="font-size:48px;color:green"></i></a> </td> 
    <td class="text-center "><?php echo  $data[0]['status']; ?></td>
              
    
  </tr>


    </table>

  </div>


  <div class="table-responsive mb-3">
  <?php
include ("dbconnection.php");


if (isset($_GET['id']) && isset($_GET['userid'])) {
    $id = intval($_GET['id']); 
    $userid=intval($_GET['userid']);

    $query = "SELECT pid,userid,recordimg,startdate,enddate,status
              FROM rent
              WHERE pid=$id AND userid=$userid AND ptype='d'";
    $result = mysqli_query($conn, $query);

     // Initialize an empty array to store fetched data
     $data1 = [];

     // Check if the query executed successfully
      if ($result) {
      while ($row1 = mysqli_fetch_assoc($result)) 
      {
        // Push each row to the $data array
      $data1[] = $row1;
      }
      }

} else {
    echo "No ID provided";
}
?>

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col" style="background-color:black; color:white">Property ID</th>
                    <th scope="col" style="background-color:black; color:white">User ID</th>
                    <th scope="col" style="background-color:black; color:white">Property Photo</th>
                    <th scope="col" style="background-color:black; color:white">Starting Date</th>
                    <th scope="col" style="background-color:black; color:white">End Date</th>
                    <th scope="col" style="background-color:black; color:white">Mark as Paid</th>
                    <th scope="col" style="background-color:black; color:white">Rent</th>
                </tr>
            </thead>
            <tbody>
                <?php

                if (!empty($data1)) {
                    foreach ($data1 as $row1) {
                        echo '<tr>';
                        echo '<td>' . $row1['pid'] . '</td>';
                        echo '<td>' . $row1['userid'] . '</td>';
                        echo '<td><img src="' . $row1['recordimg'] . '" alt="Property Image" width="50" height="50"></td>';
                        echo '<td>' . $row1['startdate'] . '</td>';
                        echo '<td>' . $row1['enddate'] . '</td>';
                    
                        $ty="rent";
                        $d='d';
                        echo '<td class="text-center">
                                <a href="rentstatus.php?id=' . urlencode($row1['pid']) . '&userid=' . urlencode($row1['userid']) . '&ty='. urlencode($ty) .'&startdate=' . urlencode($row1['startdate']) . '&enddate=' . urlencode($row1['enddate']) . '&ptype=' . urlencode($d) . '" class="btn btn-primary">' . '<i class="fa fa-check-circle" style="font-size:48px;color:green"></i>'. '</a>
                              </td>';
                        echo '<td class="text-center">' . $row1['status'] . '</td>';
                        echo '</tr>';
                
                    }
                } else {
                    echo '<tr><td colspan="6">No data available</td></tr>';
                }
                ?>
            </tbody>
        </table>
    

  </div>



  <div class="table-responsive mb-3">
    <?php
    include ("dbconnection.php");

    if (isset($_GET['id']) && isset($_GET['userid'])) {
        $id = intval($_GET['id']); 
        $userid = intval($_GET['userid']);

        $query = "SELECT pid, userid, recordimg, startdate, enddate ,status
                  FROM water
                  WHERE pid = $id AND userid = $userid AND ptype = 'd'";
        $result = mysqli_query($conn, $query);

        // Initialize an empty array to store fetched data
        $data2 = [];

        // Check if the query executed successfully
        if ($result) {
            while ($row2 = mysqli_fetch_assoc($result)) {
                // Push each row to the $data array
                $data2[] = $row2;
            }
        }
    } else {
        echo "No ID provided";
    }
    ?>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col" style="background-color:black; color:white">Property ID</th>
                <th scope="col" style="background-color:black; color:white">User ID</th>
                <th scope="col" style="background-color:black; color:white">Property Photo</th>
                <th scope="col" style="background-color:black; color:white">Starting Date</th>
                <th scope="col" style="background-color:black; color:white">End Date</th>
                <th scope="col" style="background-color:black; color:white">Mark as Paid</th>
                <th scope="col" style="background-color:black; color:white">Water Bill</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (!empty($data2)) {
                foreach ($data2 as $row2) {
                    echo '<tr>';
                    echo '<td>' . htmlspecialchars($row2['pid']) . '</td>';
                    echo '<td>' . htmlspecialchars($row2['userid']) . '</td>';
                    echo '<td><img src="' . htmlspecialchars($row2['recordimg']) . '" alt="Property Image" width="50" height="50"></td>';
                    echo '<td>' . htmlspecialchars($row2['startdate']) . '</td>';
                    echo '<td>' . htmlspecialchars($row2['enddate']) . '</td>';
                    $status2="Pending";
                    $ty="water";
                    $d='d';
                    echo '<td class="text-center">
                            <a href="rentstatus.php?id=' . urlencode($row2['pid']) . '&userid=' . urlencode($row2['userid']) . '&ty='. urlencode($ty) .'&startdate=' . urlencode($row2['startdate']) . '&enddate=' . urlencode($row2['enddate']) . '&ptype=' . urlencode($d) . '" class="btn ">' . '<i class="fa fa-check-circle" style="font-size:48px;color:green"></i>' . '</a>
                          </td>';
                          echo '<td class="text-center">' . $row2['status'] . '</td>';
                    echo '</tr>';
                }
            } else {
                echo '<tr><td colspan="6">No data available</td></tr>';
            }
            ?>
        </tbody>
    </table>
</div>

 






  <div class="table-responsive mb-3">
  <?php
include ("dbconnection.php");


if (isset($_GET['id']) && isset($_GET['userid'])) {
    $id = intval($_GET['id']); 
    $userid=intval($_GET['userid']);

    $query = "SELECT pid,userid,recordimg,startdate,enddate,status 
              FROM current
              WHERE pid=$id AND userid=$userid AND ptype='d'";
    $result = mysqli_query($conn, $query);

     // Initialize an empty array to store fetched data
     $data2 = [];

     // Check if the query executed successfully
      if ($result) {
      while ($row2 = mysqli_fetch_assoc($result)) 
      {
        // Push each row to the $data array
      $data2[] = $row2;
      }
      }

} else {
    echo "No ID provided";
}
?>

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col" style="background-color:black; color:white">Property ID</th>
                    <th scope="col" style="background-color:black; color:white">User ID</th>
                    <th scope="col" style="background-color:black; color:white">Property Photo</th>
                    <th scope="col" style="background-color:black; color:white">Starting Date</th>
                    <th scope="col" style="background-color:black; color:white">End Date</th>
                    <th scope="col" style="background-color:black; color:white">Mark as Paid</th>
                    <th scope="col" style="background-color:black; color:white">Current bill</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!empty($data2)) {
                    foreach ($data2 as $row2) {
                        echo '<tr>';
                        echo '<td>' . $row2['pid'] . '</td>';
                        echo '<td>' . $row2['userid'] . '</td>';
                        echo '<td><img src="' . $row2['recordimg'] . '" alt="Property Image" width="50" height="50"></td>';
                        echo '<td>' . $row2['startdate'] . '</td>';
                        echo '<td>' . $row2['enddate'] . '</td>';
                        $ty="current";
                        $d='d';
                        echo '<td class="text-center">
                                <a href="rentstatus.php?id=' . urlencode($row2['pid']) . '&userid=' . urlencode($row2['userid']) . '&ty='. urlencode($ty) .'&startdate=' . urlencode($row2['startdate']) . '&enddate=' . urlencode($row2['enddate']) . '&ptype=' . urlencode($d) . '" class="btn ">' . '<i class="fa fa-check-circle" style="font-size:48px;color:green"></i>' . '</a>
                              </td>';
                        echo '<td>' . $row2['status'] . '</td>';
                        echo '</tr>';
                        
                    }
                } else {
                    echo '<tr><td colspan="6">No data available</td></tr>';
                }
                ?>
            </tbody>
        </table>

  </div>




  <div class="table-responsive mb-3">
  <?php
include ("dbconnection.php");


if (isset($_GET['id']) && isset($_GET['userid'])) {
    $id = intval($_GET['id']); 
    $userid=intval($_GET['userid']);

    $query = "SELECT pid,userid,recordimg,startdate,enddate,status
              FROM maintainance
              WHERE pid=$id AND userid=$userid AND ptype='d'";
    $result = mysqli_query($conn, $query);

     // Initialize an empty array to store fetched data
     $data2 = [];

     // Check if the query executed successfully
      if ($result) {
      while ($row2 = mysqli_fetch_assoc($result)) 
      {
        // Push each row to the $data array
      $data2[] = $row2;
      }
      }

} else {
    echo "No ID provided";
}
?>

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col" style="background-color:black; color:white">Property ID</th>
                    <th scope="col" style="background-color:black; color:white">User ID</th>
                    <th scope="col" style="background-color:black; color:white">Property Photo</th>
                    <th scope="col" style="background-color:black; color:white">Starting Date</th>
                    <th scope="col" style="background-color:black; color:white">End Date</th>
                    <th scope="col" style="background-color:black; color:white">Mark as Paid</th>
                    <th scope="col" style="background-color:black; color:white">Maintainance charge</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!empty($data2)) {
                    foreach ($data2 as $row2) {
                        echo '<tr>';
                        echo '<td>' . $row2['pid'] . '</td>';
                        echo '<td>' . $row2['userid'] . '</td>';
                        echo '<td><img src="' . $row2['recordimg'] . '" alt="Property Image" width="50" height="50"></td>';
                        echo '<td>' . $row2['startdate'] . '</td>';
                        echo '<td>' . $row2['enddate'] . '</td>';
                        $ty="maintainance";
                        $d='d';
                        echo '<td class="text-center">
                                <a href="rentstatus.php?id=' . urlencode($row2['pid']) . '&userid=' . urlencode($row2['userid']) . '&ty='. urlencode($ty) .'&startdate=' . urlencode($row2['startdate']) . '&enddate=' . urlencode($row2['enddate']) . '&ptype=' . urlencode($d) . '" class="btn ">' . '<i class="fa fa-check-circle" style="font-size:48px;color:green"></i>' . '</a>
                              </td>';
                        echo '<td>' . $row2['status'] . '</td>';
                        echo '</tr>';
                    }
                } else {
                    echo '<tr><td colspan="6">No data available</td></tr>';
                }
                ?>
            </tbody>
        </table>

  </div>
</body>
</html>