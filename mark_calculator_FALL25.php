<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST">
        <label for="">CT 1:</label>
    <input type="number" name="CT_1">
    <br><br>
     <label for="">CT 2:</label>
    <input type="number" name="CT_2">
    <br><br>
     <label for="">CT 3:</label>
    <input type="number" name="CT_3">
    <br><br>
     <label for="">Midterm Marks:</label>
    <input type="number" name="MIDTERM_MARKS">
    <br><br>
     <label for="">Final marks:</label>
    <input type="number" name="FINAL_MARKS">
    <br><br>
    <input type="submit" name="Calculate Total" id="" value="Calculate Total">

</form>
</body>
</html>


<?php
   if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $CT_1=$_POST["CT_1"];
        $CT_2=$_POST["CT_2"];
        $CT_3=$_POST["CT_3"];
        $MIDTERM_MARKS=$_POST["MIDTERM_MARKS"];
        $FINAL_MARKS=$_POST["FINAL_MARKS"];
        if($CT_1<$CT_2 && $CT_3)
            {
                $total=$CT_2+$CT_3;
                echo "Best two ct total:".$total."<br>"; 
            }
            else if($CT_2<$CT_1 && $CT_3)
            {
                $total=$CT_1+$CT_3;
                echo "Best two ct total:".$total."<br>"; 
            }
            echo "Midterm Marks".$MIDTERM_MARKS."<br>";
             echo "Final Marks".$FINAL_MARKS."<br>";
             $total_marks=$total+$MIDTERM_MARKS+$FINAL_MARKS;
             echo "Total Marks".$total_marks."<br>";
             if($total_marks>54)
                {
                    echo "Status:PASSED"."<br>";
                }
                else{
                    echo "Status:FAILED"."<br>";
                }

    }
?>