<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">ER Computer</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="?">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#myModal_pay" data-toggle="modal">Payment</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#myModal_cont" data-toggle="modal">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" data-toggle="modal">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div class="modal" id="myModal_pay">
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
              <h2>How to <span>Take a Payment</span></h2>
              <img src="images/Mandiri.png" width="200px"></br>
              <strong>You can Transfer to Our Mandiri Account @ 1230006663886 a.n/ Rizaldi Fathul Barri</strong></br></br>
              <strong> OR </strong></br></br>
              <img src="images/cimb.png" width="200px"></br></br>
              <strong>You can Transfer to Our CIMB Account @ 761166952900 a.n/ Rizaldi Fathul Barri</strong>
            </div>
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
<div class="modal" id="myModal_cont">
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
            <div class="card-body">
              <h2>Our <span>Contacts</span></h2>
              <div class="address">
                <address>
                <strong>Zip Code:</strong>17411<br>
                <strong>Country:</strong>Indonesia<br>
                <strong>WhatsApp:</strong> +6285722794262<br>
                <strong>LINE ID:</strong> Rizaldi
                </address>
              </div>
            </div>
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
<div class="modal" id="myModal_login">
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
            <div class="card-body">
              <h2>Our <span>Contacts</span></h2>
              <div class="address">
                <address>
                <strong>Zip Code:</strong>17411<br>
                <strong>Country:</strong>Indonesia<br>
                <strong>WhatsApp:</strong> +6285722794262<br>
                <strong>LINE ID:</strong> Rizaldi
                </address>
              </div>
            </div>
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
