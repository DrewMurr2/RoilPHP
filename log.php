<?php
header("Access-Control-Allow-Origin: *");
$table = $_REQUEST["t"];
$column = $_REQUEST["c"];
$time = $_REQUEST["tt"];
$offset = $_REQUEST["o"];
$direction = $_REQUEST["d"];

$base = "SELECT TOP " . $offset . " " . $column. " FROM " . $table . " Where " . $column . " is not null and ";
$asc = $column . "T > " . $time . " Order by " . $column . "T Asc;";
$desc = $column . "T < " . $time . " Order by " . $column . "T Desc;";



if($direction == 'd'){
    $sql = $base . $asc;
}

    if($direction == 'u'){
  $sql = $base . $desc;
    }

    if($direction == 'z'){
  $sql = "Select * from ((" . $base . $asc . ") UNION (" . $base . $column . "T <= " . $time . " Order by " . $column . "T Desc));";
    }
// echo $sql;


$serverName = "roilfirstsqlserver.database.windows.net"; //serverName\instanceName, portNumber (default is 1433)
$connectionInfo = array( "Database"=>"RoilOperations", "UID"=>"roilservices", "PWD"=>"Roil111111");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
$stmt = sqlsrv_query( $conn, $sql);

if( $stmt === false ) {
     echo "<li><a>Nope</a></li>";
}else{
    echo '{"data":[';
    $firstTime = true;
    while($obj = sqlsrv_fetch_object( $stmt)){

foreach ($obj as $name => $value) {
      if($firstTime){
echo $value;
  $firstTime = false;

      }else{
  echo ", $value";
      };
    
  };


    };
    echo "]}";
};

?>