<?php 
session_start();
include_once("../koneksi.php");
if ( !isset($_SESSION["login"]) ) {
      header("Location: login.php");
  }
///////////////////////////////////////////////////////////////////////////
function deleteJasa()
{
    global $conn;
    $id_jasa = $_GET["id_jasa"];
    mysqli_query($conn, "DELETE FROM jasa WHERE id_jasa = '$id_jasa'");

    return mysqli_affected_rows($conn);
}

if (deleteJasa($id_jasa) > 0) {
    echo ("
            <script> 
                alert ('Data successfully deleted');
                document.location.href = 'jasa.php';
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