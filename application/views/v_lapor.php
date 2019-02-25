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
            <label class="col-sm-4 control-label">Tipe *</label>
            <div class="col-sm-8">
              <select class="form-control" onchange="tipe()" id="tipe1">
                <option>Pilih Tipe</option>
                <option value="bisnis">Bisnis</option>
                <option value="perorangan">Perorangan</option>
                <option value="pemerintahan">Pemerintahan</option>
              </select>
            </div>
          </div>
          <p id="individual-ans" style="display: none">
            Individual Australians should report cyber security incidents to the Australian Cybercrime Online Reporting Network (ACORN). ACORN is a secure reporting and referral service for cybercrime and any online incidents that may be in breach of Australian law.
          </p>
          <div class="form-group" id="tipe-bisnis1" style="display: none">
            <label class="col-sm-4 control-label">Tipe Bisnis *</label>
            <div class="col-sm-8">
              <select class="form-control" id="select-tipe-bisnis" onchange="tipeBisnis()">
                <option value="">Pilih Tipe Bisnis</option>
                <option value="kecil">Kecil (Di bawah 20 pegawai)</option>
                <option value="sedang">Sedang (20 sampai 200 pegawai)</option>
                <option value="besar">Besar (Lebih dari 200 pegawai)</option>
                <option value="keamananIndustri">Program Keamanan Industri Pertahanan</option>
              </select>
            </div>
          </div>
          <div class="form-group" id="tipe-pemerintahan" style="display: none">
            <label class="col-sm-4 control-label">Tipe Pemerintahan *</label>
            <div class="col-sm-8">
              <select class="form-control" id="select-tipe-pemerintahan" onchange="tipePemerintahan()">
                <option value="">Pilih Tipe Pemerintahan</option>
                <option value="federal">Federal</option>
                <option value="state">State</option>
                <option value="local">Local</option>
              </select>
            </div>
          </div>
          <div class="form-group bisnis-form" style="display: none" id="abnacn">
            <label class="col-sm-4 control-label">ABN/ACN</label>
            <div class="col-sm-8">
              <input type="text" name="abn" class="form-control">
            </div>
          </div>
          <div class="form-group bisnis-form" style="display: none">
            <label class="col-sm-4 control-label">Given Name *</label>
            <div class="col-sm-8">
              <input type="text" name="" class="form-control">
            </div>
          </div>
          <div class="form-group bisnis-form" style="display: none">
            <label class="col-sm-4 control-label">Family Name *</label>
            <div class="col-sm-8">
              <input type="text" name="" class="form-control">
            </div>
          </div>
          <div class="form-group bisnis-form" style="display: none">
            <label class="col-sm-4 control-label">Organisation *</label>
            <div class="col-sm-8">
              <input type="text" name="" class="form-control">
            </div>
          </div>
          <div class="form-group bisnis-form" style="display: none">
            <label class="col-sm-4 control-label">Position *</label>
            <div class="col-sm-8">
              <input type="text" name="" class="form-control">
            </div>
          </div>
          <div class="form-group bisnis-form" style="display: none">
            <label class="col-sm-4 control-label">Phone *</label>
            <div class="col-sm-8">
              <input type="text" name="" class="form-control">
            </div>
          </div>
          <div class="form-group bisnis-form" style="display: none">
            <label class="col-sm-4 control-label">Mobile *</label>
            <div class="col-sm-8">
              <input type="text" name="" class="form-control">
            </div>
          </div>
          <div class="form-group bisnis-form" style="display: none">
            <label class="col-sm-4 control-label">Email *</label>
            <div class="col-sm-8">
              <input type="email" name="" class="form-control">
            </div>
          </div>
          <div class="form-group bisnis-form" style="display: none">
            <label class="col-sm-4 control-label">Incident Details *</label>
            <div class="col-sm-8">
              <textarea class="form-control" style="height: 200px"></textarea>
            </div>
          </div>
          <div class="form-group bisnis-form" style="display: none">
            <label class="col-sm-4 control-label">Time and date of incident *</label>
            <div class="col-sm-8">
              <input type="date" name="" class="form-control">
            </div>
          </div>
          <div class="form-group bisnis-form" style="display: none">
            <label class="col-sm-4 control-label">Has the incident been resolved? *</label>
            <div class="col-sm-8">
              <div class="row">
                <div class="radio col-sm-6">
                <label>
                  <input type="radio" name="optionsRadios" id="optionsRadios1" value="Yes">
                  Yes
                </label>
              </div>
              <div class="radio col-sm-6">
                <label>
                  <input type="radio" name="optionsRadios" id="optionsRadios2" value="No">
                  No
                </label>
              </div>
              </div>
            </div>
          </div>
          <div class="form-group bisnis-form" style="display: none">
            <label class="col-sm-4 control-label">Has the matter been reported to law enforcement? *</label>
            <div class="col-sm-8">
              <div class="row">
                <div class="radio col-sm-6">
                <label>
                  <input type="radio" name="optionsRadios" id="optionsRadios1" value="Yes">
                  Yes
                </label>
              </div>
              <div class="radio col-sm-6">
                <label>
                  <input type="radio" name="optionsRadios" id="optionsRadios2" value="No">
                  No
                </label>
              </div>
              </div>
            </div>
          </div>
          <div class="form-group bisnis-form" style="display: none">
            <label class="col-sm-4 control-label">Do you require assistance from the ACSC? *</label>
            <div class="col-sm-8">
              <div class="row">
                <div class="radio col-sm-6">
                <label>
                  <input type="radio" name="optionsRadios" id="optionsRadios1" value="Yes">
                  Yes
                </label>
              </div>
              <div class="radio col-sm-6">
                <label>
                  <input type="radio" name="optionsRadios" id="optionsRadios2" value="No">
                  No
                </label>
              </div>
              </div>
            </div>
          </div>
          <div class="form-group bisnis-form" style="display: none">
            <label class="col-sm-4 control-label">Notifiable data breaches</label>
            <div class="col-sm-8">
              <p>
                Under the Notifiable Data Breaches scheme, your organisation may have notification obligations when a data breach is likely to result in serious harm to any individuals whose personal information is involved in the breach.
              </p>
              <p>
                To understand your obligations under the Notifiable Data Breaches scheme, and to separately report a data breach to the Office of the Australian Information Commissioner, see their Notifiable Data Breaches scheme page.
              </p>
            </div>
          </div>
          <div class="form-group bisnis-form" style="display: none">
            <label class="col-sm-4 control-label">Human test:</label>
            <div class="col-sm-8">
              <input type="text" name="" class="form-control">
            </div>
          </div>

          <button class="btn btn-success btn-flat" style="display: none;margin-left: auto;margin-right: auto; width: 400px; margin-bottom: 10px" id="btn-submit" >Submit Form</button>
          <button class="btn btn-warning btn-flat" style="display: none;margin-left: auto;margin-right: auto; width: 400px; margin-bottom: 10px" id="btn-reset" onclick="resetForm()">Reset Form</button>
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
      $('#tipe-bisnis1').css('display','none');
      $('.bisnis-form').css('display','none');
      $('#individual-ans').css('display','none');
      $('#btn-submit').css('display','none');
    }

    function tipe() {
      var tipe = $('#tipe1').val();
      if (tipe == 'bisnis') {
        $('#btn-reset').css('display', 'block');
        $('#tipe-bisnis1').css('display','block');
        $('#individual-ans').css('display','none');
        $('#tipe-pemerintahan').css('display','none');
        $('#btn-submit').css('display','none');
      } else if (tipe == 'perorangan'){
        $('#btn-reset').css('display', 'block');
        $('#individual-ans').css('display','block');
        $('.bisnis-form').css('display','none');
        $('#tipe-bisnis1').css('display','none');
        $('#tipe-pemerintahan').css('display','none');
        $('#btn-submit').css('display','none');
      } else if(tipe == 'pemerintahan') {
        $('#btn-reset').css('display', 'block');
        $('#tipe-pemerintahan').css('display','block');
        $('#individual-ans').css('display','none');
        $('#tipe-bisnis1').css('display','none');
        $('#btn-submit').css('display','none');
      } else {
        $('#tipe-bisnis1').css('display','none');
        $('#tipe-pemerintahan').css('display','none');
        $('#individual-ans').css('display','none');
        $('.bisnis-form').css('display','none');
        $('#btn-submit').css('display','none');
      }
    }

    function tipeBisnis() {
      var tipeBisnis = $('#select-tipe-bisnis').val();
      if (tipeBisnis != '') {
        $('.bisnis-form').css('display', 'block');
        $('#btn-submit').css('display','block');
      } else {
        $('.bisnis-form').css('display','none');
        $('#btn-submit').css('display','none');
      }
    }

    function tipePemerintahan() {
      var tipePemerintahan = $('#select-tipe-pemerintahan').val();
      if (tipePemerintahan != '') {
        $('.bisnis-form').css('display', 'block');
        $('#abnacn').css('display','none');
        $('#btn-submit').css('display','block');
      } else {
        $('.bisnis-form').css('display','none');
        $('#btn-submit').css('display','none');
      }
    }
</script>