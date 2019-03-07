<section class="content-header">
  <h1>
    Beranda
    <small>Lapor Insiden</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url();?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Lapor</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <div class="box box-warning" id="box-laporan">
    <div class="box-header with-border">
      <h3 class="box-title">From Laporan Insiden</h3>
    </div>
    <div class="box-body" style="font-size: 1.0em">
      <div class="col-sm-8">
        <form class="form-horizontal" id="form-lapor">
          <div class="form-group">
            <label class="col-sm-4 control-label">Perkiraan Waktu Kejadian</label>
            <div class="col-sm-8">
              <input type="date" name="waktu_kejadian" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Deskripsi Umum</label>
            <div class="col-sm-8">
              <textarea class="form-control" placeholder="Deskripsi Umum" style="height: 150px"></textarea>
            </div>
          </div>  
          <div class="form-group">
            <label class="col-sm-4 control-label">Deskripsi Aset</label>
            <div class="col-sm-8">
              <hr>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Nama Keterangan</label>
            <div class="col-sm-8">
              <select class="form-control">
                <option value="">Pilih Jenis Aduan Siber</option>
                <option value="">Account Comoromise (Pembajakan Akun)</option>
                <option value="">Data Theft (Pencurian Data)</option>
                <option value="">Exploitaion of Weak Configuration (Eksploitasi pada sistem yang lemah)</option>
                <option value="">Exploitaion of Weak Network Architecture (Eksploitasi pada arsitektur jaringan yang lemah)</option>
                <option value="">Patched Software Exploitation (Eksploitasi pada Perangkat Lunak yang telah di Patch)</option>
                <option value="">Network Penetration (Penetrasi Jaringan)</option>
                <option value="">Service Disruption (Gangguan Layanan)</option>
                <option value="">Spoofing or DNS Poisoning (Pengalihan DNS)</option>
                <option value="">Unauthorized System Access (Akses sistem yang ilegal/tidak sah)</option>
                <option value="">Unintentional Information System Exposure (Pembukaan Informasi yang tidak disengaja)</option>
                <option value="">Unpatched Vulnerable Software Exploitation (Eksploitasi Kerentanan Software yang tidak di Patch)</option>
                <option value="">Website Defacement (Perusakan Tampilan Situs Web)</option>
                <option value="">Wireless Access Point Exploitation (Eksploitasi pada WAP)</option>
                <option value="">Kerentanan (Vulnerability Disclosure)</option>
                <option value="">Phising</option>
                <option value="">Indikator Serangan</option>
                <option value="">Malware</option>
                <option value="">Konten Negatif</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Lokasi</label>
            <div class="col-sm-8">
              <input type="text" name="lokasi" class="form-control" placeholder="Lokasi">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Identitas Pemilik/Penanggung Jawab</label>
            <div class="col-sm-8">
              <input type="text" name="id_pemilik" class="form-control" placeholder="Identitas Pemilik">
            </div>
          </div>
          <button class="btn btn-success btn-flat btn-block" style="margin-left: auto;margin-right: auto; width: 400px; margin-bottom: 10px" id="btn-submit" >Submit Form</button>
          <button class="btn btn-warning btn-flat btn-block" style="margin-left: auto;margin-right: auto; width: 400px; margin-bottom: 10px" id="btn-reset" onclick="resetForm()">Reset Form</button> 
        </form>
      </div>
      <div class="col-sm-4">
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Info</h3>
          </div>
          <div class="box-body">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris at dignissim odio. Duis sit amet congue mi. Donec hendrerit a velit sit amet vehicula. In tristique est vel nunc mattis iaculis. Quisque et tortor finibus, dictum sapien et, vulputate ipsum. Vivamus aliquet ante scelerisque, ultrices lorem dapibus, dictum felis. Mauris lobortis mi vitae fringilla tempor. Cras in blandit felis. Morbi quis metus ut turpis luctus congue ac sit amet justo. Pellentesque semper, orci quis vestibulum vehicula, sem velit dapibus odio, sed dapibus erat lorem quis dolor. Duis suscipit ornare ornare. Donec eget nibh lacinia, maximus tortor interdum, sollicitudin lectus. Sed sit amet tortor vitae mi dignissim ultrices ac in orci.
            </p>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>


    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->

</section>
      <!-- /.content -->

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/jquery/dist/jquery.min.js"></script>
<script type="text/javascript">
    function resetForm(){
      $('#form-lapor').trigger("reset");
    }
</script>