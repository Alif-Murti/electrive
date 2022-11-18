<?php
//memasukkan koneksi database
require("../koneksi.php");

    

//jika berhasil/ada post['id'], jika tidak ada ya tidak dijalankan
if($_POST['id_mbl']){
	//membuat variabel id berisi post['id']
	$id_mbl = $_POST['id_mbl'];
	//query standart select where id
	$view = mysqli_query($conn, "SELECT * FROM mobil WHERE id_mbl='$id_mbl'");
	//jika ada datanya
	if(mysqli_num_rows($view)){
		//fetch data ke dalam veriabel $row_view
		$update = mysqli_fetch_assoc($view);

?>

<form method="post" action="" enctype="multipart/form-data">
<input type="hidden" name="id_mbl" value="<?php echo $update['id_mbl'];?>">
<input type="hidden" name="gambarlama" value="<?php echo $update['gambar_mbl'];?>">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Merek</label>
                    <input type="text" name="merek_mbl" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $update['merek_mbl'] ?>">
                </div>
               <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tipe</label>
                    <input type="text" name="tipe_mbl" class="form-control" id="exampleInputPassword1" value="<?php echo $update['tipe_mbl'] ?>">
                </div>
               <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Jenis</label>
                    <input type="text" name="jenis_mbl" class="form-control" id="exampleInputPassword1" value="<?php echo $update['jenis_mbl'] ?>">
                </div>
                <div class="mb-3">
                    <label for="gambar">Gambar</label><br>
                    <input type="file" name="gambar_mbl" id="gambar">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tangki Bensin</label>
                    <input type="text" name="kapasitas_mbl" class="form-control" id="exampleInputPassword1" value="<?php echo $update['kapasitas_mbl'] ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Baterai Mobil</label>
                    <input type="text" name="baterai_mbl" class="form-control" id="exampleInputPassword1" value="<?php echo $update['baterai_mbl'] ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Daya</label>
                    <input type="text" name="daya_mbl" class="form-control" id="exampleInputPassword1" value="<?php echo $update['daya_mbl'] ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Torsi</label>
                    <input type="text" name="torsi_mbl" class="form-control" id="exampleInputPassword1" value="<?php echo $update['torsi_mbl'] ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Harga</label>
                    <input type="text" name="harga_mbl" class="form-control" id="exampleInputPassword1" value="<?php echo $update['harga_mbl'] ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Deskripsi Mobil</label>
                    <input type="textarea" name="desk_mbl" class="form-control" id="exampleInputPassword1" value="<?php echo $update['desk_mbl'] ?>">
                </div>
                <button type="submit" name="update" class="btn btn-primary">Update</button>
            </form>

<?php
    }
}

?>