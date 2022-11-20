<?php
//memasukkan koneksi database
require("../koneksi.php");

    

//jika berhasil/ada post['id'], jika tidak ada ya tidak dijalankan
if($_POST['id_jasa']){
	//membuat variabel id berisi post['id']
	$id_jasa = $_POST['id_jasa'];
	//query standart select where id
	$view = mysqli_query($conn, "SELECT * FROM jasa WHERE id_jasa='$id_jasa'");
	//jika ada datanya
	if(mysqli_num_rows($view)){
		//fetch data ke dalam veriabel $row_view
		$update = mysqli_fetch_assoc($view);

?>

<form method="post" action="" enctype="multipart/form-data">
<input type="hidden" name="id_jasa" value="<?php echo $update['id_jasa'];?>">
<input type="hidden" name="gambarlama" value="<?php echo $update['gambar_jasa'];?>">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                    <input type="text" name="nama_jasa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $update['nama_jasa'] ?>">
                </div>
               <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Penyedia</label>
                    <input type="text" name="penyedia_jasa" class="form-control" id="exampleInputPassword1" value="<?php echo $update['penyedia_jasa'] ?>">
                </div>

                <div class="mb-3">
                    <label for="gambar">Gambar</label><br>
                    <input type="file" name="gambar_jasa" id="gambar">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Alamat</label>
                    <input type="text" name="alamat_jasa" class="form-control" id="exampleInputPassword1" value="<?php echo $update['alamat_jasa'] ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Kontak</label>
                    <input type="text" name="kontak_jasa" class="form-control" id="exampleInputPassword1" value="<?php echo $update['kontak_jasa'] ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Deskripsi Jasa</label>
                    <input type="text" name="desk_jasa" class="form-control" id="formJasa" value="<?php echo $update['desk_jasa'] ?>"></input>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Status</label>
                    <input type="text" name="status_jasa" class="form-control" id="exampleInputPassword1" value="<?php echo $update['status_jasa'] ?>">
                </div>
                <button type="submit" name="update" class="btn btn-primary">Update</button>
            </form>

<?php
    }
}

?>