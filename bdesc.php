<?php

// //database $csernection file
include 'dbconfig.php';


if (isset($_POST['submit'])) {
    $result = mysqli_query($cser, "SELECT B From products ORDER BY B DESC");
    echo
    "<p>
    <strong>
    Fifth Button when pressed should display B table values in Descending order. 
    </strong>
    </p>";

    while ($row = mysqli_fetch_array($result)) {

        echo "<p>" . $row['B'] . "</p>";
    }

    mysqli_close($cser);
}
