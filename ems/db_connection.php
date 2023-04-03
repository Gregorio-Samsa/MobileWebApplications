<?php
    $conn = new mysqli("localhost","root","","ems_db");
                if($conn->connect_errno)
                {
                    die("Could not connect: ".$conn->connect_errno);
                }
?>