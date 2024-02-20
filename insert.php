<?php
        include "koneksi.php";
        if (isset($_POST["ok"]))
        {
            $id_barang = $_POST["id_barang"];
            $nama_barang = $_POST["nama_barang"];
            $jumlah_barang = $_POST["jumlah_barang"];
            $jenis_barang = $_POST["jenis_barang"];
            $kondisi = $_POST["kondisi"];
            $deskripsi = $_POST["deskripsi"];

            $simpan = mysqli_query($koneksi, "insert into barang set 
                id_barang='$id_barang',
                nama_barang='$nama_barang',
                jumlah_barang='$jumlah_barang',
                jenis_barang='$jenis_barang',
                kondisi='$kondisi',
                deskripsi='$deskripsi'");
                if ($simpan) {
                    echo "<div class = 'alert alert-success'>Sukses menambah barang</div>";
                  }  
                else {
                    echo "<div class = 'alert alert-danger'>Gagal Menambah Data</div>";
                  }
        }
    ?>
    <div class="container">
        <div class="d-flex justify-content-center align-items-center" style="height: 100vh">
            <div class="text-center">
                <h2>Inpu Alat Praktik</h2>
                <form method="post" action="">
                    <div class="form-grup">
                        <label><b>Id Barang</b></label>
                        <input type="text" class="form-control" placeholder="id barang" name="id_barang">
                    </div>
                    <div class="form-grup">
                        <label><b>Nama Barang</b></label>
                        <input type="text" class="form-control" placeholder="nama barang" name="nama_barang">
                    </div>
                    <div class="form-grup">
                        <label><b>Jumlah Barang</b></label>
                        <input type="text" class="form-control" placeholder="jumlah barang" name="jumlah_barang">
                    </div>
                    <div class="form-grup">
                        <label><b>Jenis Barang</b></label>
                        <input type="text" class="form-control" placeholder="Jenis barang" name="jenis_barang">
                    </div>
                    <div class="form-grup">
                        <label><b>Kondisi</b></label>
                        <input type="text" class="form-control" placeholder="kondisi" name="kondisi">
                    </div>
                    <div class="form-grup">
                        <label><b>deskripsi</b></label>
                        <input type="text" class="form-control" placeholder="deskripsi" name="deskripsi">
                    </div>
                    <br>
                    <button type="submit" name="ok" class="btn btn-success">SIMPAN</button>
                    <button type="reset" class="btn btn-danger">CANCEL</button>
                </form>
            </div>
        </div>
    </div>