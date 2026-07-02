<?php
$DB_HOST="localhost";
$DB_USER="root";
$DB_PASS="";
$DB_NAME="sundarban";

$conn = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);
if (!$conn)
    {
       die("Connection failed: ".mysqli_connect_error());
    }

    //ans 1
    $sql1 = "SELECT CatagoryName , SUM(Revenue) AS TotalRevenue
    FROM sales_data
    GROUP BY CatagoryName";
    $result1 = mysqli_query($conn,$sql1);
    while ($row1 = mysqli_fetch_array($result1)){
        
            echo $row1["CatagoryName"].":".$row1["TotalRevenue"]."<br>";
    
    }
    //ans 2
    $sql2 = "UPDATE sales_data
            SET CatagoryName = 'Low Performing'
            WHERE  Revenue<40000";
            $result2=mysqli_query($conn,$sql2);

            //ans 3
     $sql3 ="UPDATE sales_data 
            SET Revenue=Revenue+(Revenue*0.1)
            WHERE Revenue>70000 ";
            $result3=mysqli_query($conn,$sql3);
?>