<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="main.css">
        <script>
          $(document).ready(function(){
              $("#blockchain1").click(function(){
                  $("#here1").load("$result");
              });
              $("#blockchain2").click(function(){
                  $("#here2").load("content.html");
              });
              $("#blockchain3").click(function(){
                  $("#here3").load("content.html");
              });
              $("#blockchain4").click(function(){
                  $("#here4").load("content.html");
              });
          });
        </script>
        
    </head>
    <body>
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
          
          
      }
      
    ?>
        <div>
            <div class="links">
              <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <ul>
                  <li><button type="submit" id="bc-1" name="bc-1" class="button">1. Blockchain-Based Protocol Tachyon Network Releases White Paper</button></li>
                  <div id="here1"></div>
                  <li><button type="submit" id="blockchain2" name="bc-2" class="button">2. Animoca Brands to Develop Blockchain-Based MotoGP Manager Game</button></li>
                  <div id="here2"></div>
                  <li><button type="submit" id="blockchain3" name="bc-3" class="button">3. Scalability on Blockchain: Is There a Solution?</button></li>
                  <div id="here3"></div>
                  <li><button type="submit" id="blockchain4" name="bc-4" class="button">4. AI Firm Core Scientific Acquires Creator of Mining Program Honeyminer</button></li>
                  <div id="here4"></div>
                </ul>
              </form>
            </div>
         </div>
    </body>
</html>
