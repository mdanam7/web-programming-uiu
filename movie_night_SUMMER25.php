<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label for="">ATTENDEES</label>
    <input type="number" name="ATTENDEES">
    <br>
    <br>
    <label for="">SEAT CAPACITY</label>
    <input type="number" name="SEAT_CAPACITY">
    <br>
    <br>
    <label for="">TICKET PRICE</label>
    <input type="number" name="TICKET_PRICE">
    <br>
    <br>
    <input type="submit" value="submit">
    </form>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $ATTENDEES=$_POST["ATTENDEES"];
        $SEAT_CAPACITY=$_POST["SEAT_CAPACITY"];
        $TICKET_PRICE=$_POST["TICKET_PRICE"];
        $TOTAL_SCREEN=ceil($ATTENDEES / $SEAT_CAPACITY);
        
        $TOTAL_SEAT=$SEAT_CAPACITY * $TOTAL_SCREEN;
        $EMPTY_SEAT=$TOTAL_SEAT-$ATTENDEES;
        $WASTED_MONEY=$EMPTY_SEAT*$TICKET_PRICE;
        echo "TOTAL SCREEN ".$TOTAL_SCREEN."<br>";
        echo "EMPTY SEAT ".$EMPTY_SEAT."<br>";
        echo "WASTED MONEY ".$WASTED_MONEY."<br>";

    }
?>