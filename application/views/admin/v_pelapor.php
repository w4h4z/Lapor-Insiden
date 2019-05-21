    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

      <!-- Main content -->
      <section class="content container-fluid">

        <div class="box box-solid">
          <div class="box-body">

            <ul class="nav nav-pills nav-justified" style="margin-bottom: 10px">
              <li><a href="<?php echo base_url(); ?>admin">Dashboard</a></li>
              <?php if ($this->session->userdata('admin') == 1): ?>
                <li><a href="<?php echo base_url(); ?>admin/laporan">Laporan</a></li>
              <?php endif ?>
              <li><a href="<?php echo base_url(); ?>admin/progress">Sedang Ditangani</a></li>
              <?php if ($this->session->userdata('admin') == 1): ?>
                <li class="active"><a href="<?php echo base_url(); ?>admin/pelapor">Pelapor</a></li>
              <?php endif ?>
            </ul>

            <table id="example1" class="table table-bordered table-striped table-hover">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>No Telp</th>
                  <th>Email</th>
                  <th>No KTP/KK/SIM</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                foreach ($pelapor as $data) {
                  echo '
                    <tr>
                    <td>'.$data->nama_pelapor.'</td>
                    <td>'.$data->no_telp.'</td>
                    <td>'.$data->email.'</td>
                    <td>'.$data->no_id.'</td>
                    </tr>
                  ';
                }
               ?>
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
