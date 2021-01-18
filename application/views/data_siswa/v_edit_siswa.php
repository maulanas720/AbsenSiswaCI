<!DOCTYPE html>
<html>
<body>
<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">

<div class="container">
    <h2>Edit Data Siswa</h2>
<form action="<?php echo base_url('dashboard/Update'); ?>" method="POST">

<?php foreach ($query->result() as $baris) { ?>

    <div class="form-group">
            <label>NIS:</label>
            <input type="text" name="nis" value="<?php echo $baris->nis; ?>" class="form-control" placeholder="NIS" required/>
    </div>
    <div class="form-group">
            <label>Nama Lengkap:</label>
            <input type="text" name="nama_lengkap" value="<?php echo $baris->nama_lengkap; ?>" class="form-control" placeholder="Nama" required/>
    </div>
    <div class="form-group">
            <label>Tanggal Lahir:</label>
            <input type="date" name="tgl_lahir" value="<?php echo $baris->tgl_lahir; ?>" class="form-control" placeholder="NIS" required/>
    </div>
    <div class="form-group">
            <label>Kelas:</label>
            <input type="number" id="quantity" name="kelas" value="<?php echo $baris->kelas; ?>" min="10" max="12" class="form-control" placeholder="Kelas" required/>
        </div> 
    <div class="form-group">
            <label>Pilih Jurusan:</label>
            <select class="form-control" name="jurusan">
                <option value="RPL">Rekayasa Perangkat Lunak</option>
                <option value="TKJ">Teknik Komputer Jaringan</option>
                <option value="AK">Akutansi</option>
                <option value="AP">Adm. Perkantoran</option>
                <option value="AN">Animasi</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>

    </form>
</div>
</main>
<?php } ?>
</form> 
</body>
</html>
</main>