<html>
    <head> 
    </head>
    <style>
        th{
            border: 2px solid;
            padding: 10px;
            background: #04d3dd;
        }
        table{
            border: 2px solid;
            margin-left: 80px;
        }
        td{
            border: 2px solid;
            text-align: center;
            background: #eeeeee;
        }
    </style>
    <body>
    <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assignstud.css" />
    <link rel="icon" type="image/x-icon" href="../../images/favicon.ico" />
    <script src="assgnstud.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>DuoPort</title>
  </head>
  <body>
    <div class = header>

      <div class = nav>
          <img class = "logo" src="../../images/lightMode.svg" alt="logo">
          <ul class = "navList">
              <li class = "navItem"> <a href="#"> (Name) </a></li>
              <li class = "navItem"> <a href="#"> Logout </a></li>
          </ul>
      </div>
      <div class = "stuNav">
          <ul class = "stuNavList">
              <li class = "stuNavItem"> <a href="../studentDash/stuDash.html"> Dashboard </a></li>
              <li class = "stuNavItem"> <a href="../StudentCal/calendar.html"> Calender </a></li>
              <li class = "stuNavItem"> <a href="#"> Assignments </a></li>
              <li class = "stuNavItem"> <a href="../StudentLib/lib.html"> Library </a></li>
          </ul>
      </div>

  </div>

    <h1 class="assgns-title">Assignments</h1>
    <div class="assgns">
      <div class="info">
        <h3 class="assn_name">Assignment_name</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
          minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat. Duis aute irure dolor in
          reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur. Excepteur sint occaecat cupidatat non
        </p>
      </div>
      <span class="deadline">
        <h3>Deadline</h3>
        
      </span>
    </div>
  </body>
</html>

        <table border="2">
        <tr>
        <th>Assignment Name</th>
        <th>Subject</th>
        <th>Description</th>
        <th>Submission Date</th>
        </tr>
        


<?php

    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    $sql = "SELECT * FROM `csh`.`assignments`";
    $data = mysqli_query($con, $sql);
    $total = mysqli_num_rows($data);


    

    if($total > 0){
        while($row = mysqli_fetch_assoc($data)){
            echo "<tr><td>" . $row['name'] . "</td><td>" . $row['subject'] . "</td><td>" . $row['description'] . "</td><td>" . $row['date'] . "</td></tr>";
            echo "<br>";
        }
    }

    $con->close();

?>
</table>
    </body>
    
</html>


