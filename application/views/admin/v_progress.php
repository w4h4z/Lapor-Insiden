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
              <li class="active"><a href="<?php echo base_url(); ?>admin/progress">Sedang Ditangani</a></li>
              <?php if ($this->session->userdata('admin') == 1): ?>
                <li><a href="#">Pelapor</a></li>
              <?php endif ?>
            </ul>

            <table id="example1" class="table table-bordered table-striped table-hover">
              <thead>
                <tr>
                  <th>Ticket</th>
                  <th>Waktu Laporan</th>
                  <th>Jenis Laporan</th>
                  <th>Action</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($laporan as $data) {
                  echo '
                  <tr>
                  <td>'.$data->ticket.'</td>
                  <td>'.$data->waktu_laporan.'</td>
                  <td>'.$data->jenis_klasifikasi.'</td>
                  <td><a href="'.base_url('index.php/admin/lapor/').''.$data->ticket.'/'.$data->id_aduan.'" class="btn btn-primary">Diskusi</a></td>
                  <td>';
                  if ($data->status == 1) {
                    echo '
                    <select class="form-control" onchange="updateStatus('.$data->id_aduan.',this.value)">
                      <option value="1">Open</option>
                      <option value="2">Close Successful</option>
                      <option value="3">Close Unsuccessful</option>
                      <option value="4">Pending</option>
                    </select>
                    ';
                  } elseif ($data->status == 2) {
                    echo '
                    <select class="form-control" onchange="updateStatus('.$data->id_aduan.',this.value)">
                      <option value="2">Close Successful</option>
                      <option value="1">Open</option>                      
                      <option value="3">Close Unsuccessful</option>
                      <option value="4">Pending</option>
                    </select>
                    ';
                  } elseif($data->status == 3) {
                    echo '
                    <select class="form-control" onchange="updateStatus('.$data->id_aduan.',this.value)">
                      <option value="3">Close Unsuccessful</option>
                      <option value="1">Open</option>
                      <option value="2">Close Successful</option>                      
                      <option value="4">Pending</option>
                    </select>
                    ';
                  } elseif($data->status == 4){
                    echo '
                    <select class="form-control" onchange="updateStatus('.$data->id_aduan.',this.value)">
                      <option value="4">Pending</option>
                      <option value="1">Open</option>
                      <option value="2">Close Successful</option>
                      <option value="3">Close Unsuccessful</option>
                    </select>
                    ';
                  }
                  echo '</td>
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

    <script type="text/javascript">
      function updateStatus(id,a) {
        $.ajax({
          url: '<?php echo base_url(); ?>admin/updateStatusAduan/'+id+'/'+a,
          type: 'POST',
          dataType: 'json',
          data: '',
          success: function(r){

          }
        })
      }
    </script>