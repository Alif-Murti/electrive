<?php 
session_start();
include_once("../koneksi.php");
if ( !isset($_SESSION["login"]) ) {
      header("Location: login.php");
  }
///////////////////////////////////////////////////////////////////////////
function deleteMobil()
{
    global $conn;
    $id_mbl = $_GET["id_mbl"];
    mysqli_query($conn, "DELETE FROM mobil WHERE id_mbl = '$id_mbl'");

    return mysqli_affected_rows($conn);
}

if (deleteMobil($id_mbl) > 0) {
    echo ("
            <script> 
                alert ('Data successfully deleted');
                document.location.href = 'mobil.php';
            </script>
        
        ");
    }
else {
    echo (
    "Error description:" .$conn -> error
    );
}
//////////////////////////////////////////////////////////////////////////////
function deletePesan()
{
    global $conn;
    $id_pesan   = $_GET["id_pesan"];
    mysqli_query($conn, "DELETE FROM pesan WHERE id_pesan = '$id_pesan'");

    return mysqli_affected_rows($conn);
}

if (deletePesan($id_pesan) > 0) {
    echo ("
            <script> 
                alert ('Data telah dihapus');
                document.location.href = 'pesan.php';
            </script>
        
        ");
    }
else {
    echo (
    "Error description:" .$conn -> error
    );
}
?>