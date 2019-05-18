<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<section class="content-header">
  <h1>
    <a href="<?php echo base_url(); ?>admin/progress" class="btn btn-primary btn-md"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
  </h1>
</section>

  <!-- Main content -->
  <section class="content container-fluid">
    
    <?php if ($this->session->flashdata('notif') != null): ?>
      <div class="alert alert-success"><?php echo $this->session->flashdata('notif'); ?></div>
    <?php endif ?>

   <div class="box box-warning direct-chat direct-chat-warning">
    <div class="box-header with-border">
      <h3 class="box-title">Tiket #<?php echo $aduan->ticket;?></h3>
      <?php if ($this->session->userdata('admin') == 1): ?>
        <div class="pull-right">

            <b>Ditangani Oleh : </b> 
             <?php if ($ditangani->d1 == 1): ?>
              <button class="btn btn-sm btn-info" style="cursor: default;">
              Deputi 1
              </button>
             <?php endif ?> 

             <?php if ($ditangani->d2 == 1): ?>
              <button class="btn btn-sm btn-info" style="cursor: default;">
              Deputi 2
              </button>
             <?php endif ?> 

             <?php if ($ditangani->d3 == 1): ?>
              <button class="btn btn-sm btn-info" style="cursor: default;">
              Deputi 3
              </button>
             <?php endif ?> 

             <?php if ($ditangani->d4 == 1): ?>
              <button class="btn btn-sm btn-info" style="cursor: default;">
              Deputi 4
              </button>
             <?php endif ?> 

             <?php if ($ditangani->p2 == 1): ?>
              <button class="btn btn-sm btn-info" style="cursor: default;">
              Pusat data dan informasi
              </button>
             <?php endif ?> 
          |
          <button class="btn btn-sm btn-success" style="margin-left: 10px" data-toggle="modal" data-target="#myModal">
            <i class="glyphicon glyphicon-plus"></i>
          Tambah operator</button></div>
      <?php endif ?>
    </div>

    <!-- /.box-header -->
    <div class="box-body">
      <!-- Conversations are loaded here -->
      <div class="direct-chat-messages" style="height: 400px">
        <!-- Message. Default to the left -->
        <div class="direct-chat-msg">
          <div class="direct-chat-info clearfix">
            <span class="direct-chat-name pull-left"><?php echo $aduan->nama_pelapor; ?></span>
            <span class="direct-chat-timestamp pull-right"><?php echo $aduan->waktu_laporan; ?></span>
          </div>
          <!-- /.direct-chat-info -->
          <img class="direct-chat-img" src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" alt="message user image">
          <!-- /.direct-chat-img -->
          <div class="direct-chat-text">
            <p><?php echo $aduan->deskripsi_umum; ?></p>
            <a href="<?php echo base_url(); ?>uploads/<?php echo $aduan->bukti; ?>" class="btn btn-primary btn-md" target="blank">Download Bukti</a>
          </div>
          <!-- /.direct-chat-text -->
        </div>
        <!-- /.direct-chat-msg -->

        <?php foreach ($chat as $data): ?>
          <?php if ($data->id_pelapor != null): ?>
              <div class="direct-chat-msg">
                <div class="direct-chat-info clearfix">
                  <span class="direct-chat-name pull-left"><?php echo $aduan->nama_pelapor; ?></span>
                  <span class="direct-chat-timestamp pull-right"><?php echo $data->datetime; ?></span>
                </div>
                <!-- /.direct-chat-info -->
                <img class="direct-chat-img" src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" alt="message user image">
                <!-- /.direct-chat-img -->
                <div class="direct-chat-text">
                  <p>
                  <?php if ($data->chat != null): ?>
                      <?php echo $data->chat; ?>
                    <?php else: ?>
                      <a href="<?php echo base_url(); ?>uploads/<?php echo $data->file; ?>" class="btn btn-primary btn-md" target="blank">Download Lampiran</a>
                  <?php endif ?>
                  </p>
                </div>
                <!-- /.direct-chat-text -->
              </div>
              <!-- /.direct-chat-msg -->
          <?php endif ?>
          <?php if ($data->id_pelapor == null): ?>
            <div class="direct-chat-msg right">
            <div class="direct-chat-info clearfix">
              <span class="direct-chat-name pull-right">
              <?php if ($data->tipe != null): ?>
                <?php echo $data->tipe;?>
              <?php endif ?>             
              <?php if ($data->tipe == null): ?>
                Pusopkamsinas
              <?php endif ?>   
              </span>
              <span class="direct-chat-timestamp pull-left"><?php echo $data->datetime; ?></span>
            </div>
            <img class="direct-chat-img" src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" alt="message user image">
            <div class="direct-chat-text">
                <p>
                  <?php if ($data->chat != null): ?>
                      <?php echo $data->chat; ?>
                    <?php else: ?>
                      <a href="<?php echo base_url(); ?>uploads/<?php echo $data->file; ?>" class="btn btn-primary btn-md" target="blank">Download Lampiran</a>
                  <?php endif ?>
                </p>

              <?php if($data->status == 0){
                echo '<br><p style="color: black"><b>Menunggu di setujui</b></p>';
              }?>

              <?php if ($this->session->userdata('admin') == 1 && $data->status == 0): ?>
                <a href="<?php echo base_url('index.php/admin/tampilChat/'); ?><?php echo $data->id; ?>" class="btn btn-success btn-sm">Tampilkan</a>
                <a href="<?php echo base_url('index.php/admin/deleteChat/'); ?><?php echo $data->id; ?>" class="btn btn-danger btn-sm">Hapus</a>  
              <?php endif ?>

            </div>
          </div>
          <?php endif ?>
          
        <?php endforeach ?>

      </div>
      <!-- /.direct-chat-pane -->
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      <form action="#" id="uploadFile" method="post" enctype="multipart/form-data">
        <div class="input-group" style="margin-bottom: 10px">
          <input type="file" name="bukti">
        </div>
      </form>
      <form action="<?php echo base_url('index.php/admin/chat'); ?>" method="post">
        <div class="input-group">
          <input type="text" name="chat" placeholder="Type Message ..." class="form-control" required>
          <span class="input-group-btn">
            <button type="submit" class="btn btn-warning btn-flat">Send</button>
          </span>
        </div>
      </form>
    </div>
    <!-- /.box-footer-->
  </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->


<div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Tambah Operator</h4>
          </div>
          <div class="modal-body">
            <p>
            <form method="post" action="<?php echo base_url('index.php/admin/updateDitangani/'); ?>">

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


<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/jquery/dist/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
        $('input[type="file"]').change(function(e){
            var fileName = e.target.files[0].name;
            var data = new FormData(document.getElementById("uploadFile"));

            $.ajax({
              url: '<?php echo base_url();?>beranda/uploadFile',
              data: data,
              type: 'POST',
              dataType: 'JSON',
              mimeType: 'multipart/form-data',
              processData: false,
              contentType: false,
              success: function(r) {
               
              },
            })

             window.location.reload();
        });
    });
</script>