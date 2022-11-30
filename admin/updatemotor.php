<?php
//memasukkan koneksi database
require("../koneksi.php");

    

//jika berhasil/ada post['id'], jika tidak ada ya tidak dijalankan
if($_POST['id_mtr']){
	//membuat variabel id berisi post['id']
	$id_mtr = $_POST['id_mtr'];
	//query standart select where id
	$view = mysqli_query($conn, "SELECT * FROM motor WHERE id_mtr='$id_mtr'");
	//jika ada datanya
	if(mysqli_num_rows($view)){
		//fetch data ke dalam veriabel $row_view
		$update = mysqli_fetch_assoc($view);

?>

<form method="post" action="" enctype="multipart/form-data">
<input type="hidden" name="id_mtr" value="<?php echo $update['id_mtr'];?>">
<input type="hidden" name="gambarlama" value="<?php echo $update['gambar_mtr'];?>">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Merek</label>
                    <input type="text" name="merek_mtr" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $update['merek_mtr'] ?>">
                </div>
               <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tipe</label>
                    <input type="text" name="tipe_mtr" class="form-control" id="exampleInputPassword1" value="<?php echo $update['tipe_mtr'] ?>">
                </div>

                <div class="mb-3">
                    <label for="gambar">Gambar</label><br>
                    <input type="file" name="gambar_mtr" id="gambar">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Baterai Motor</label>
                    <input type="text" name="baterai_mtr" class="form-control" id="exampleInputPassword1" value="<?php echo $update['baterai_mtr'] ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Kecepatan Maksimal</label>
                    <input type="text" name="maks_mtr" class="form-control" id="exampleInputPassword1" value="<?php echo $update['maks_mtr'] ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Jarak Tempuh</label>
                    <input type="text" name="jt_mtr" class="form-control" id="exampleInputPassword1" value="<?php echo $update['jt_mtr'] ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Harga</label>
                    <input type="text" name="harga_mtr" class="form-control" id="exampleInputPassword1" value="<?php echo $update['harga_mtr'] ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Link Marketplace</label>
                    <input type="text" name="situs_mtr" class="form-control" id="exampleInputPassword1" value="<?php echo $update['situs_mtr'] ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Deskripsi Motor</label>
                    <input type="textarea" name="desk_mtr" class="form-control" id="exampleInputPassword1" value="<?php echo $update['desk_mtr'] ?>">
                </div>
                <button type="submit" name="update" class="btn btn-primary">Update</button>
            </form>

<?php
    }
}

?>