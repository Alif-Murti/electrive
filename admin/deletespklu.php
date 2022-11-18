<?php 
session_start();
include_once("../koneksi.php");
if ( !isset($_SESSION["login"]) ) {
      header("Location: login.php");
  }
///////////////////////////////////////////////////////////////////////////
function deleteSpklu()
{
    global $conn;
    $id_spklu    = $_GET["id_spklu"];
    mysqli_query($conn, "DELETE FROM spklu WHERE id_spklu = '$id_spklu'");

    return mysqli_affected_rows($conn);
}

if (deleteSpklu($id_spklu) > 0) {
    echo ("
            <script> 
                alert ('Data successfully deleted');
                document.location.href = 'spklu.php';
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