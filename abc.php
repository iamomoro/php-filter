<?php

// //database $csernection file
include 'dbconfig.php';


if (isset($_POST['submit'])) {
    $result = mysqli_query($cser, "SELECT A,B,C From products ");
    echo "
    <p>
    <strong>
    Second Button when pressed should display A, B, C table values, in that order.
    </strong>
    </p>";

    while ($row = mysqli_fetch_array($result)) {

        echo "<p>" . $row['A'] . "</p>";
        echo "<p>" . $row['B'] . "</p>";
        echo "<p>" . $row['C'] . "</p>";
    }

    mysqli_close($cser);
}
