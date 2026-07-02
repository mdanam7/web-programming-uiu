<?php
$DB_HOST="localhost";
$DB_USER="root";
$DB_PASS="";
$DB_NAME="campus_library";

$conn = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);
if (!$conn)
    {
       die("Connection failed: ".mysqli_connect_error());
    }

    //ans 1 - show total number of books for each status, only include statuses with more than 1 entry
    $sql1 = "SELECT Status, COUNT(*) AS BookCount
    FROM book_loans
    GROUP BY Status";
    $result1 = mysqli_query($conn,$sql1);
    while ($row1 = mysqli_fetch_array($result1)){
        if($row1["BookCount"]>1){
            echo $row1["Status"].":".$row1["BookCount"]."<br>";
    }
    }

    //ans 2 - for any student with status Overdue and DaysOverdue less than 7, change status to Grace Period and set PenaltyFee to 0
    $sql2 = "UPDATE book_loans 
            SET Status = 'Grace Period',PenaltyFee =0
            WHERE Status ='Overdue' AND DaysOverdue<7";
            $result2=mysqli_query($conn,$sql2);

    //ans 3 - for students with PenaltyFee between 20 and 100, increase fee by 10% as processing charge, but only if final fee does not exceed 50
    $sql3 ="UPDATE book_loans 
            SET PenaltyFee=PenaltyFee+(PenaltyFee*0.1)
            WHERE PenaltyFee>20 AND (PenaltyFee+(PenaltyFee*0.1))<=50";
            $result3=mysqli_query($conn,$sql3); 
    
    //ans 4 - display each BookTitle and the total PenaltyFee collected for that book, sort by the top performing book first
     $sql4="SELECT BookTitle,SUM(PenaltyFee) AS TotalPenalty
                  FROM book_loans 
                  GROUP BY BookTitle
                  ORDER BY  TotalPenalty DESC";

                  $result4=mysqli_query($conn,$sql4);
                  while($row = mysqli_fetch_assoc($result4)){
                    echo "Book Title:".$row["BookTitle"].",Total Penalty Fee:" . $row['TotalPenalty'] ."<br>";
                  }
                  mysqli_close($conn);

?>