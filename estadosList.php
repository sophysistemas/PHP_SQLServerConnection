<?php

  require_once 'database/Connection.php';

  $con = Connection::connect();

  $sql = "SELECT * FROM Estado;";


  $result = sqlsrv_query($con, $sql);

  $response = array();

  $i = 0;

  while ($row = sqlsrv_fetch_object($result)) {
    $response[$i]["id"] = $row->id;
    $response[$i]["nome"] = $row->Nome;
    $response[$i]["uf"] = $row->Uf;
    $i++;
  }

  echo json_encode($response);

?>