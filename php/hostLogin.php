<?php
    session_start();
    include_once 'mySqlLogin.php';
    $userName = $_POST['username'];
    $true = true; 

    $sql_Participant = "INSERT INTO Participant (username, host) VALUES ('$userName', '$true');";
    mysqli_query($conn, $sql_Participant); 
     $sql_Room = "INSERT INTO Room (time_stamp) VALUES ('NULL');";
    mysqli_query($conn, $sql_Room); 

    include 'Session_Creation.php';

    //$_SESSION[]= $row['']
    // sleep(2);
    // $sql_select = "SELECT * FROM Participant WHERE username='$userName'";
    // $result = mysqli_query($conn, $sql_select);
    // $row = mysqli_fetch_assoc($result);

    // $sql_Connector = "INSERT INTO Session_Guest (UserID) VALUES ('1');";
    // mysqli_query($conn, $sql_Connector); 
    
    
    ?>
    
   