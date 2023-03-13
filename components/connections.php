<?php
// Create connection
$conn = new mysqli("localhost", "root", "", "bankoflincoln");
if (!$conn) {
    die('Could not connect: ' . mysqli_connect_error());
}
