<?php
function Conexion(){

   // $serverName = "127.0.0.1";
  //  $connectionOptions = array("Database"=>"sade22","Uid"=>"root", "PWD"=>"", "CharacterSet"=>"UTF-8");
    $conn = mysqli_connect("127.0.0.1", "root", "", "sade22");
   //  mysqli_connect($serverName, $connectionOptions);

    return $conn;
}	


function getRoles(){
    $conn = Conexion();
    $query = 'SELECT * FROM troles';

    $result = mysqli_query($conn,$query);
    $listas = '<option value="0"> Seleccione rol</option>';

    while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
        $listas .= "<option value= '$row[id]'> $row[Rol]</option>";
    }
    return $listas;
}

echo getRoles();

?>