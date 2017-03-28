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
<?php
    $con = mysqli_connect("localhost", "SLOA", "CK8p1h15erbnttKU", "Capstone_SLOA");
    if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $stmt = mysqli_query($con, "Select * FROM Books");
    echo "<div style ='float: left'>
          <table id='bookTable'>
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
            <tr>
                <td>".$row['Year']."</td>
                <td>".$row['Author']."</td>
                <td>".$row['Book Title']."</td>
                <td>".$row['Edition']."</td>
                <td>".$row['ISBN']."</td>
                <td>".$row['Publisher']."</td>
                <td>".$row['Comment']."</td>
            </tr>
        ";
    }
    echo "</table></div>";
    $con->close();
?>
</body>