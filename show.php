<?php
include_once"config.php";

  $_Query="select*from tbl_employe";
  $_run=$con->query($_Query);
  if($_run)
  {
    while($data=$_run->fetch_assoc())
  { 
   echo "<a href='del.php?id=" . $data["id"] . "'>Delete</a><br>";

    echo $data['name'];
    echo"<br>";
     echo $data['phone'];
     echo"<br>";
       echo $data['salary'];
         echo"<br>";
           echo $data['department'];          
  }
}
    else {
        echo "Error";
    }

?>