<div class="col-lg-9">

  <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox" style="height:10%">
      <?php
      $home = $db->select('index_gambar');
      $n=0;
      foreach ($home as $key => $value) {
        $n++;
        if ($n == 1) {
          $active = 'active';
        }else {
          $active = '';
        }
        echo '<div class="carousel-item '.$active.'">
                <img class="d-block img-fluid" src="'.$value["lokasi"].'" alt="First slide">
              </div>';
      }?>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="row">

    <?php
    $index = $db->select('item LIMIT 6');
    $n=0;
    foreach ($index as $key => $value) {
      $n++;
      if ($n == 1) {
        $active = 'active';
      }else {
        $active = '';
      }
      echo '
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="images/item/'.$value["gambar"].'" alt=""></a>
          <div class="card-body">
            <h6 class="card-title" style="white-space:nowrap; overflow:hidden; text-overflow: ellipsis" title="'.$value["nama_item"].'">
              <a data-toggle="modal" href="#myModal'.$value["id_item"].'">'.$value["nama_item"].'</a>
            </h6>
            <h5><span id="getharga">Rp '.formatnomor($value["harga_item"]).'</span></h5>
            <p class="card-text">
            Model : '.$value["model_item"].'<br>
            Jenis &nbsp&nbsp : '.$value["jenis_item"].'<br>
            Tipe  &nbsp&nbsp&nbsp&nbsp: '.$value["tipe_item"].'<br>
            </p>
          </div>
          <div class="card-footer">
            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
          </div>
        </div>
      </div>
      ';
    }?>



  </div>
  <!-- /.row -->

</div>

<?php foreach ($index as $key => $value) { ?>
<!-- The Modal -->
<div class="modal" id="myModal<?= $value["id_item"]?>">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Detail</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="col-lg-12">

          <div class="card mt-4">
            <img class="card-img-top img-fluid" src="images/item/<?= $value["gambar"]?>" alt="">
            <div class="card-body">
              <h3 class="card-title"><?= $value["nama_item"]?></h3>
              <h4><?= $value["harga_item"]?></h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente dicta fugit fugiat hic aliquam itaque facere, soluta. Totam id dolores, sint aperiam sequi pariatur praesentium animi perspiciatis molestias iure, ducimus!</p>
              <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
              4.0 stars
            </div>
            <a type="button" class="btn btn-success text-white" href="pages/aksi_beli.php?act=add&id=<?= $value['id_item']; ?>">Click to Buy</a>
          </div>
          <!-- /.card -->



        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<?php }?>
