<?php
$serverName = "roilfirstsqlserver.database.windows.net"; //serverName\instanceName, portNumber (default is 1433)
$connectionInfo = array( "Database"=>"RoilOperations", "UID"=>"roilservices", "PWD"=>"Roil111111");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
};


$stmt = sqlsrv_query( $conn, $sql);
if( $stmt === false ) {
     echo "no $stmt<br />";
     die( print_r( sqlsrv_errors(), true));
}else{
     echo "In here<br />";
    while( $obj = sqlsrv_fetch_object( $stmt)) {
      echo $obj->fName.", ".$obj->lName."<br />";
}
};
echo "now";

?>
