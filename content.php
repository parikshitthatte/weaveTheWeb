<?php
    if (isset($_POST['bc-1'])){
    $host="localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "weavetheweb";

    $conn= new mysqli($host,$dbusername,$dbpassword,$dbname);

    if(mysqli_connect_error()){
        die('Connect Error('. mysql_connect_error().')'. mysqli_connect_error());
    }
    $sql = "SELECT title,content,subpostid FROM posts";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "id: " . $row["subpostid"]. " - title: " . $row["title"]. "<br>" . $row["content"]. "<br>";
        }
    } else {
        echo "0 results";
    }

    mysqli_close($conn);
    
    echo "This Is post-1";
}
else{
    echo "Please Login Correctly!!";
} 

?>