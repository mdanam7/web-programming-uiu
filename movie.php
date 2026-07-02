<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label for="">Attendees</label>
        <input type="number" name="attendees"><br><br>

        <label for="">Seat Capacity</label>
        <input type="number" name="seat_capacity"><br><br>

        <label for="">Ticket Price</label>
        <input type="number" name="ticket_price"><br><br>

        <input type="submit" value="submit">

    </form>
</body>
</html>

<?php
     if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            $attendees=$_POST["attendees"];
            $seat_capacity=$_POST["seat_capacity"];
            $ticket_price=$_POST["ticket_price"];

            $total_screen=ceil($attendees/$seat_capacity);
            $empty_seats=($total_screen*$seat_capacity)-$attendees;
            $wasted_money=($ticket_price*$empty_seats);

            echo "Total Screens:". $total_screen."<br>";
            echo "Empty Seats:". $empty_seats ."<br>";
            echo "Wasted Money:". $wasted_money."<br>";

        }