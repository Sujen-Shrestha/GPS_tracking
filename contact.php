<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--for reloading-->
  <meta http-equiv="Cache-control" content="no-cache">
  <!--css for whole website-->
  <link rel="stylesheet" href=".\css\style.css">
  <!--css for responsive-->
  <link rel="stylesheet" href=".\css\responsive.css">
  <!--css for animations-->
  <link rel="stylesheet" href=".\css\animate.css">
  <!--link to use google fonts-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400&display=swap" rel="stylesheet">
  <!--for favicon-->
  <link rel="icon" type="images/logo.png" href="images/logo.png">
  
  <title>GPS tracking and Scheduling System</title>
</head>
<body>
    <!--This will add the upper navigation to the website-->
    <?php include './frontend/menu.php';?>
    <div class="contact-body">
        <div class="table-contact">
            <h3 class="question_inverse">Manager Contact-info</h3>
            <table width="100%">
                <thead>
                    <tr>
                        <td>Manager</td>
                        <td>Area</td>
                        <td>Contact Number</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Sujen Shrestha</td>
                        <td>Gongabu</td>
                        <td>9846873239</td>
                    </tr>
                    <tr>
                        <td>Sagar Rimal</td>
                        <td>Kalanki</td>
                        <td>9860291188</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="table-contact">
            <h3 class="question_inverse">Super-Admin Contact-info</h3>
            <table width="100%">
                <thead>
                    <tr>
                        <td>Super-Admin</td>
                        <td>Contact Number</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Sujen Shrestha</td>
                        <td>9846873239</td>
                    </tr>
                    <tr>
                        <td>Sagar Rimal</td>
                        <td>9860291188</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <?php include './frontend/footer.php';?>
  
</body>
<script src="./js/script.js"></script>
</html>