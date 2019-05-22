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
                <li><a href="<?php echo base_url(); ?>admin/pelapor">Manajemen User</a></li>
              <?php endif ?>
            </ul>

            <table id="pelapor" class="table table-bordered table-striped table-hover">
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
                  if ($this->session->userdata('tipe') == 'd1') {
                    if ($data->d1 == 1) {
                      echo '
                      <tr>
                      <td>'.$data->ticket.'</td>
                      <td>'.$data->waktu_laporan.'</td>
                      <td>'.$data->jenis_klasifikasi.'</td>
                      <td><a href="'.base_url('index.php/admin/lapor/').''.$data->ticket.'/'.$data->id_aduan.'" class="btn btn-primary btn-flat">Diskusi</a></td>
                      <td style="text-align: center">';
                      echo '</td>
                      </tr>
                      ';
                    }
                  }

                  if ($this->session->userdata('tipe') == 'd2') {
                    if ($data->d2 == 1) {
                      echo '
                      <tr>
                      <td>'.$data->ticket.'</td>
                      <td>'.$data->waktu_laporan.'</td>
                      <td>'.$data->jenis_klasifikasi.'</td>
                      <td><a href="'.base_url('index.php/admin/lapor/').''.$data->ticket.'/'.$data->id_aduan.'" class="btn btn-primary btn-flat">Diskusi</a></td>
                      <td style="text-align: center">';
                      echo '</td>
                      </tr>
                      ';
                    }
                  }

                  if ($this->session->userdata('tipe') == 'd3') {
                    if ($data->d3 == 1) {
                      echo '
                      <tr>
                      <td>'.$data->ticket.'</td>
                      <td>'.$data->waktu_laporan.'</td>
                      <td>'.$data->jenis_klasifikasi.'</td>
                      <td><a href="'.base_url('index.php/admin/lapor/').''.$data->ticket.'/'.$data->id_aduan.'" class="btn btn-primary btn-flat">Diskusi</a></td>
                      <td style="text-align: center">';
                      echo '</td>
                      </tr>
                      ';
                    }
                  }

                  if ($this->session->userdata('tipe') == 'd4') {
                    if ($data->d4 == 1) {
                      echo '
                      <tr>
                      <td>'.$data->ticket.'</td>
                      <td>'.$data->waktu_laporan.'</td>
                      <td>'.$data->jenis_klasifikasi.'</td>
                      <td><a href="'.base_url('index.php/admin/lapor/').''.$data->ticket.'/'.$data->id_aduan.'" class="btn btn-primary btn-flat">Diskusi</a></td>
                      <td style="text-align: center">';
                      echo '</td>
                      </tr>
                      ';
                    }
                  }

                  if ($this->session->userdata('tipe') == 'p2') {
                    if ($data->p2 == 1) {
                      echo '
                      <tr>
                      <td>'.$data->ticket.'</td>
                      <td>'.$data->waktu_laporan.'</td>
                      <td>'.$data->jenis_klasifikasi.'</td>
                      <td><a href="'.base_url('index.php/admin/lapor/').''.$data->ticket.'/'.$data->id_aduan.'" class="btn btn-primary btn-flat">Diskusi</a></td>
                      <td style="text-align: center">';
                      echo '</td>
                      </tr>
                      ';
                    }
                  }


                if ($this->session->userdata('admin') == 1) {
                  echo '
                  <tr>
                  <td>'.$data->ticket.'</td>
                  <td>'.$data->waktu_laporan.'</td>
                  <td>'.$data->jenis_klasifikasi.'</td>
                  <td><a href="'.base_url('index.php/admin/lapor/').''.$data->ticket.'/'.$data->id_aduan.'" class="btn btn-primary btn-flat">Diskusi</a></td>
                  <td style="text-align: center">';
                if ($this->session->userdata('tipe') == null) {
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
                  } else {
                    if ($data->status == 1) {
                      echo '<h4>Open</h4>';
                    } elseif ($data->status == 2) {
                      echo '<h4>Close Successful</h4>';
                    }elseif ($data->status == 3) {
                      echo '<h4>Close Unsuccessful</h4>';
                    }elseif ($data->status == 4) {
                      echo '<h4>Pending</h4>';
                    }
                  }
                  echo '</td>
                  </tr>
                  ';
                  }

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