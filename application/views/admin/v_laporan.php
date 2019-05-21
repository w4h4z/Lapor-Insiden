    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

      <!-- Main content -->
      <section class="content container-fluid">

        <div class="box box-solid">

          <div class="box-body">

            <ul class="nav nav-pills nav-justified" style="margin-bottom: 10px">
              <li><a href="<?php echo base_url(); ?>admin">Dashboard</a></li>
              <?php if ($this->session->userdata('admin') == 1): ?>
                <li  class="active"><a href="<?php echo base_url(); ?>admin/laporan">Laporan</a></li>
              <?php endif ?>
              <li><a href="<?php echo base_url(); ?>admin/progress">Sedang Ditangani</a></li>
              <?php if ($this->session->userdata('admin') == 1): ?>
                <li><a href="<?php echo base_url(); ?>admin/pelapor">Pelapor</a></li>
              <?php endif ?>
            </ul>

            <table id="example1" class="table table-bordered table-striped table-hover">
              <thead>
                <tr>
                  <th>Ticket</th>
                  <th>Waktu Laporan</th>
                  <th>Jenis Laporan</th>
                  <th>Action</th>
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
                  <td>
                  
                  <button class="btn btn-warning btn-flat" data-toggle="modal" data-target="#myModal'.$data->id_aduan.'">Verifikasi</button>
                  </td>
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

<?php
foreach ($laporan as $data) {
  echo '
    <div id="myModal'.$data->id_aduan.'" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Verifikasi</h4>
          </div>
          <div class="modal-body">
            <p>
            <form method="post" action="'.base_url('index.php/admin/verif_lapor/').''.$data->id_aduan.'">
            <div class="form-group row">
            <label for="inputEmail3" class="col-sm-12 col-form-label">Jenis Klasifikasi</label>
            <div class="col-sm-12">
            <select class="form-control" name="jenis" id="jenisAduan">
                <option value="Account Comoromise">Account Comoromise (Pembajakan Akun)</option>
                <option value="Data Theft">Data Theft (Pencurian Data)</option>
                <option value="Exploitaion of Weak Configuration">Exploitaion of Weak Configuration (Eksploitasi pada sistem yang lemah)</option>
                <option value="Exploitaion of Weak Network Architecture">Exploitaion of Weak Network Architecture (Eksploitasi pada arsitektur jaringan yang lemah)</option>
                <option value="Patched Software Exploitation">Patched Software Exploitation (Eksploitasi pada Perangkat Lunak yang telah di Patch)</option>
                <option value="Network Penetration">Network Penetration (Penetrasi Jaringan)</option>
                <option value="Service Disruption">Service Disruption (Gangguan Layanan)</option>
                <option value="Spoofing or DNS Poisoning">Spoofing or DNS Poisoning (Pengalihan DNS)</option>
                <option value="Unauthorized System Access">Unauthorized System Access (Akses sistem yang ilegal/tidak sah)</option>
                <option value="Unintentional Information System Exposure">Unintentional Information System Exposure (Pembukaan Informasi yang tidak disengaja)</option>
                <option value="Unpatched Vulnerable Software Exploitation">Unpatched Vulnerable Software Exploitation (Eksploitasi Kerentanan Software yang tidak di Patch)</option>
                <option value="Website Defacement">Website Defacement (Perusakan Tampilan Situs Web)</option>
                <option value="Wireless Access Point Exploitation">Wireless Access Point Exploitation (Eksploitasi pada WAP)</option>
                <option value="Kerentanan">Kerentanan (Vulnerability Disclosure)</option>
                <option value="Phising">Phising</option>
                <option value="Indikator Serangan">Indikator Serangan</option>
                <option value="Malware">Malware</option>
                <option value="Konten Negatif">Konten Negatif</option>
              </select>
            </div>
            </div>

          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-12 col-form-label">Ditangani :</label>
            <div class="col-sm-12">
              <select class="form-control" name="ditangani">
                <option value="d1">Deputi 1</option>
                <option value="d2">Deputi 2</option>
                <option value="d3">Deputi 3</option>
                <option value="d4">Deputi 4</option>
                <option value="p2">Pusat Data dan Informasi</option>
              </select>
            </div>
            </div>

            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
        </form>
      </div>
    </div>
  ';
}?>

    <script>
        $('#example1').DataTable({
          'paging'      : true,
          'lengthChange': true,
          'searching'   : true,
          'ordering'    : true,
          'info'        : true,
          'autoWidth'   : true
        })
    </script>