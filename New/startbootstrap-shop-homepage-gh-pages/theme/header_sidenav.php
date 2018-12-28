<div class="col-lg-3 side-nav">

  <h1 class="my-4 header-side-nav">ER Computer</h1>
  <div class="card">
    
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Kategori
        </button>
      </h5>
    
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">

        <div class="list-group">
          <?php
          $kat = $db->select('kategori');
          foreach ($kat as $key => $value) {
            echo '<a href="?p=kategori&id='.$value["id_kategori"].'" class="list-group-item">'.$value["nama_kategori"].'</a>';
          }?>

        </div>
      </div>
    </div>
  </div>

</div>
