<?php

// //database $csernection file
include 'dbconfig.php';


if (isset($_POST['submit'])) {
    $result = mysqli_query($cser, "SELECT A From products");
    echo
    "<p>
    <strong>
    First Button when pressed should display the A table values.
    </strong>
    </p>";

    while ($row = mysqli_fetch_array($result)) {

        echo "<p>" . $row['A'] . "</p>";
    }

    mysqli_close($cser);
}
