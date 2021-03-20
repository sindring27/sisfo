<div class="container-fluid">
        <div class="alert alert-success" role="alert">
        <i class="fas fa-tachometer-alt"></i> Dashboard
        </div>
    
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">السلام عليكم ورحمة الله وبركاته </h4>
  <p>Selamat Datang <strong> <?php echo $username; ?> </strong>
  di Sistem Informasi Akademik Yayasan Pondok Pesantern Hidayatullah Bontang, 
  Anda login Sebagai <Strong><?php echo $level; ?></Strong>
  .</p>
  <hr>
  <!-- Button trigger modal -->
    <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <i class="fas fa-cogs"></i>Control Panel
    </button>
</div>


<!-- Modal Belum muncul -->
<div class="modal fade" id="exampleModal" tabindex="-1" 
    aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-cogs"></i>Control Panel</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

</div>