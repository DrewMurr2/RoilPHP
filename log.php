<?php
echo 'Go'
// $table = $_REQUEST["t"];
// $column = $_REQUEST["c"];
// $time = $_REQUEST["tt"];
// $offset = $_REQUEST["o"];
// $direction = $_REQUEST["d"];

// $base = "SELECT TOP " + $offset + " " + $column + ";
// FROM " + $table + ";
// Where " + $column + " is not null and ";
// $asc = $column + "T > " + $time + " Order by " + $column + "T Asc;";
// $desc = $column + "T < " + $time + " Order by " + $column + "T Desc;";



// if($direction == 'd'){
//     $sql = $base + $asc;
// }

//     if($direction == 'u'){
//   $sql = $base + $desc;
//     }

//     if($direction == 'z'){
//   $sql = "Select * from ((" + $base + $asc + ") UNION (" + $base + $column + "T <= " + $time + " Order by " + $column + "T Desc));";
//     }

// $serverName = "roilfirstsqlserver.database.windows.net"; //serverName\instanceName, portNumber (default is 1433)
// $connectionInfo = array( "Database"=>"RoilOperations", "UID"=>"roilservices", "PWD"=>"Roil111111");
// $conn = sqlsrv_connect( $serverName, $connectionInfo);



// $stmt = sqlsrv_query( $conn, $sql);
// if( $stmt === false ) {
//      echo "<li><a>Nope</a></li>";
// }else{
//     echo json_encode($stmt);
//    //  while($obj = sqlsrv_fetch_object( $stmt)){
// // $json = json_encode($obj);
//      // echo "<li><a>";
//      // echo $obj->TABLE_NAME;
//      // echo "</a></li>";
//     //}
// };

?>