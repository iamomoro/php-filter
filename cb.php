<?php

// //database $csernection file
include 'dbconfig.php';


if (isset($_POST['submit'])) {
    $result = mysqli_query($cser, "SELECT A,B,C From products ");
    echo "
    <p>
    <strong>
    Third Button when pressed should display C and B table values, in that order
    </strong>
    </p>";

    while ($row = mysqli_fetch_array($result)) {

        echo "<p>" . $row['C'] . "</p>";
        echo "<p>" . $row['B'] . "</p>";
    }

    mysqli_close($cser);
}
