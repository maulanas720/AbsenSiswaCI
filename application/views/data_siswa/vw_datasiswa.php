<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
<h2>Data Siswa</h2>
<br>
<?php if ($this->session->userdata('status_login') !== FALSE AND $this->session->userdata('posisi_login') === "m"
      OR $this->session->userdata('posisi_login') === "a") : ?>

<a class="btn btn-info" href="<?php echo base_url('dashboard/tambah_siswa'); ?>" role="button" style="margin-bottom: 8px">Tambah Data</a>

<?php endif; ?>

 <?php if($this->session->flashdata('success')){ ?>
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
        </div>

    <?php } else if($this->session->flashdata('error')){  ?>

        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
        </div>
  <?php } ?>
<table class="table"></script>
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">KELAS 10</th>
      <th scope="col">KELAS 11</th>
      <th scope="col">KELAS 12</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><a class="btn btn-primary" href="<?php echo base_url('dashboard/list_siswa/10/rpl'); ?>" role="button">X RPL</a></td>
      <td><a class="btn btn-primary" href="<?php echo base_url('dashboard/list_siswa/11/rpl'); ?>" role="button">XI RPL</a></td>
      <td><a class="btn btn-primary" href="<?php echo base_url('dashboard/list_siswa/12/rpl'); ?>" role="button">XII RPL</a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><a class="btn btn-danger" href="<?php echo base_url('dashboard/list_siswa/10/tkj'); ?>" role="button">X TKJ</a></td>
      <td><a class="btn btn-danger" href="<?php echo base_url('dashboard/list_siswa/11/tkj'); ?>" role="button">XI TKJ</a></td>
      <td><a class="btn btn-danger" href="<?php echo base_url('dashboard/list_siswa/12/tkj'); ?>" role="button">XII TKJ</a></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td><a class="btn btn-success" href="<?php echo base_url('dashboard/list_siswa/10/ak'); ?>" role="button">X AK</a></td>
      <td><a class="btn btn-success" href="<?php echo base_url('dashboard/list_siswa/11/ak'); ?>" role="button">XI AK</a></td>
      <td><a class="btn btn-success" href="<?php echo base_url('dashboard/list_siswa/12/ak'); ?>" role="button">XII AK</a></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td><a class="btn btn-secondary" href="<?php echo base_url('dashboard/list_siswa/10/an'); ?>" role="button">X AN</a></td>
      <td><a class="btn btn-secondary" href="<?php echo base_url('dashboard/list_siswa/11/an'); ?>" role="button">XI AN</a></td>
      <td><a class="btn btn-secondary" href="<?php echo base_url('dashboard/list_siswa/12/an'); ?>" role="button">XII AN</a></td>
    </tr>
  </tbody>
</table>


</main>
