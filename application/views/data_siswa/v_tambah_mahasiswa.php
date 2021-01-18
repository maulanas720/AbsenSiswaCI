<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
<div class="container">
    <h2>Tambah Siswa</h2>
    
    <form action="<?php echo base_url()?>Dashboard/simpan_mahasiswa" method="post">
        <div class="form-group">
            <label>NIS:</label>
            <input type="text" name="nis" class="form-control" placeholder="NIS" required/>
        </div>
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama" required/>
        </div>
        <!--<div class="form-group">
            <label>Jenis Kelamin:</label>

            <div class="form-check">

                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="jk" value="1">Laki-laki
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="jk" value="2">Perempuan
                </label>
            </div>
        </div> -->
        <div class="form-group">
            <label>Tanggal Lahir:</label>
            <input type="date" name="tanggal_lhr" class="form-control" required/>
        </div>
        <div class="form-group">
            <label>Kelas:</label>
            <input type="number" id="quantity" name="kelas" min="10" max="12" class="form-control" placeholder="Kelas" required/>
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

        <button type="submit" class="btn btn-primary">Tambah</button>

    </form>
</div>
</main>