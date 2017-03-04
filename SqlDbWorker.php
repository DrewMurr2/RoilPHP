<!DOCTYPE html>
<html>
<body>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1
        <span class="caret"></span></a>
        <ul class="dropdown-menu">

<?php
$serverName = "roilfirstsqlserver.database.windows.net"; //serverName\instanceName, portNumber (default is 1433)
$connectionInfo = array( "Database"=>"RoilOperations", "UID"=>"roilservices", "PWD"=>"Roil111111");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

$sql = "SELECT TABLE_NAME
FROM INFORMATION_SCHEMA.TABLES;";
$stmt = sqlsrv_query( $conn, $sql);
if( $stmt === false ) {
     echo "<li><a>Nope</a></li>";
}else{
    while($obj = sqlsrv_fetch_object( $stmt)){
    $json = json_encode($obj);
      echo "<li><a>".$json."</a></li>";
    }
};


?>

        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>



</body>
</html>


