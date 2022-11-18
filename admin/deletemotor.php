<?php 
session_start();
include_once("../koneksi.php");
if ( !isset($_SESSION["login"]) ) {
      header("Location: login.php");
  }
///////////////////////////////////////////////////////////////////////////
function deleteMotor()
{
    global $conn;
    $id_mtr = $_GET["id_mtr"];
    mysqli_query($conn, "DELETE FROM motor WHERE id_mtr = '$id_mtr'");

    return mysqli_affected_rows($conn);
}

if (deleteMotor($id_mtr) > 0) {
    echo ("
            <script> 
                alert ('Data successfully deleted');
                document.location.href = 'motor.php';
            </script>
        
        ");
    }
else {
    echo (
    "Error description:" .$conn -> error
    );
}
//////////////////////////////////////////////////////////////////////////////
?>