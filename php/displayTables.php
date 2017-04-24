<!--
/**
 * Created by PhpStorm.
 * User: carlos
 * Date: 3/27/2017
 * Time: 7:57 PM
 */-->

<!DOCTYPE html>
<html>
    <title>Books</title>
</html>
<body>

<link rel="stylesheet" href="../css/sloa.css">
<script type="text/javascript" src="../scripts/sorttable.js"></script>
<?php
    $con = mysqli_connect("personal.c1jqfnm7lsqk.us-east-1.rds.amazonaws.com", "programmer", "CK8p1h15erbnttKU", "Capstone_SLOA");
    if(mysqli_connect_errno()){
        echo "Failed to connect to My SQL: " . mysqli_connect_error();
    }

    $stmt = mysqli_query($con, "Select * FROM Books");
    echo "<div style ='float: left'>
          <table id='bookTable' class ='sortable'>
          <thead>
          <tr>
            <th>Year</th>
            <th>Author</th>
            <th>Book Title</th>
            <th>Edition</th>
            <th>ISBN</th>
            <th>Publisher</th>
            <th>Comments</th>
          </tr>
          </thead>";

    while($row = mysqli_fetch_array($stmt)){
        echo "
            <tbody>
            <tr>
                <td >".$row['Year']."</td>
                <td>".$row['Author']."</td>
                <td>".$row['Book Title']."</td>
                <td>".$row['Edition']."</td>
                <td>".$row['ISBN']."</td>
                <td>".$row['Publisher']."</td>
                <td>".$row['Comment']."</td>
            </tr>
            </tbody>
        ";
    }
    echo "</table></div>";
    $con->close();
?>
</body>
