<html>
<head>
  <title>PHP Information Gathered:</title>
</head>
<body>
  
  <?php
    $usersName = $_POST['name'];
    $addressName = $_POST['address'];
    $cityName = $_POST['city'];

    echo $usersName . "<br />";
    echo $addressName . "<br />";
    echo $cityName . "<br />";

    echo "<br />";

    $dataString = 
    <<<EOD
      The customers name is 
      $usersName, 
      and the customer lives in 
      $addressName, $cityName<br />
EOD;

    echo $dataString;

    define('PI', 3.14);
    echo PI;
  ?>

</body>
</html>