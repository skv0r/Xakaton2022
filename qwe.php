<DOCTYPE html>
<html>
<head>
    <title>Table with database</title>
</head>
<table>
    <tr>
        <th>Id</th>
        <th>status</th>
    </tr>
    <?php
    $conn= data.db("localhost", "root", "","company");
    if ($conn-> connect_error) {
        die("Connection failed:". $conn-> connect_error);
    }


    $sql = "SELECT Id, status from login";
    $result = $conn-> query($sql);



    if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_assoc()) {
            echo "<tr><td>". $row["Id"] ."</td><td>". $row["status"] ."</td></tr>"
        }
        echo "/table>";
    }
    else {
        echo "0 result";
    }

    $conn-> close();



    ?>
    </table>
    </body>
    </html>