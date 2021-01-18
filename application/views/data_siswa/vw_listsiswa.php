<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>NIS</th>
        <th>Nama siswa</th>
        <th>No orangtua</th>
        <th>No siswa</th>
        <th>Alamat</th>
        <?php if ($this->session->userdata('status_login') !== FALSE AND $this->session->userdata('posisi_login') === "m" OR $this->session->userdata('posisi_login') === "a") : ?>

        <th>Action</th>

        <?php endif; ?>
        
      </tr>
    </thead>
    <tbody>
      <?php foreach ($list_siswa as $k) : ?>
      <tr>
        <th scope="row"><?php echo $k->nis; ?></th>
        <td><a href="<?php echo base_url("dashboard/detail_siswa/".$k->nis); ?>"><?php echo $k->nama_lengkap; ?></a></td>
        <td><?php echo $k->no_telp_ortu; ?></td>
        <td><?php echo $k->nis; ?></td>
        <td><?php echo $k->alamat; ?></td>
        <?php if ($this->session->userdata('status_login') !== FALSE AND $this->session->userdata('posisi_login') === "m" OR $this->session->userdata('posisi_login') === "a") : ?>

        <td><a href="<?php echo base_url(); ?>dashboard/update/<?php echo $k->nis; ?>" class="btn btn-warning">Edit</a>
          <a href="<?php echo base_url(); ?>dashboard/hapus/<?php echo $k->nis; ?>" class="btn btn-danger">Hapus</a></td>

        <?php endif; ?>
        
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>

<!-- <a href="<?php echo base_url(); ?>siswa/edit/<?php echo $row->kd_siswa; ?>" class="btn btn-warning">Edit</a>
              <a href="<?php echo base_url(); ?>siswa/delete/<?php echo $row->kd_siswa; ?>" class="btn btn-danger">Hapus</a> -->