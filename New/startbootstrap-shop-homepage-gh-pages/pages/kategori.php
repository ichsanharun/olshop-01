<div class="col-lg-9 mb-5">
<section id="content">
  <div class="inside" style="padding:0;">
    <?php
    if(!empty($_GET['id'])){
          $kat=$_GET['id'];

          $sqlkat = "SELECT * FROM kategori WHERE id_kategori = '$kat'";
          $querykat= mysqli_query($mysqli,$sqlkat);
          //while (
          $datakat = $querykat->fetch_array();
        }
     ?>
    <h2 class="my-4">Result Of <span><?php echo $datakat['nama_kategori']; ?> Books</span></h2>
    <div class="row" id="kat">
      <?php
      /*$x = array('id_kategori'=>$kat);
      foreach ($x as $key => $value) {
        $c = $key;
      }echo $c;*/
      $index = $db->select_where('*','item',array('id_kategori'=>$kat));
      $n=0;
      $m=1;
      //echo $index;
      foreach ($index as $key => $value) {
        $n++;
        if ($n%9 == 0) {
          $m++;
        }
        echo '
        <div class="col-lg-4 col-md-6 mb-4 page" id="page'.$m.'">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="images/item/'.$value["gambar"].'" alt=""></a>
            <div class="card-body">
              <h6 class="card-title" style="white-space:nowrap; overflow:hidden; text-overflow: ellipsis" title="'.$value["nama_item"].'">
                <a href="#">'.$value["nama_item"].'</a>
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
      }

      ?>
      <ul id="pagination-demo" class="pagination-lg pull-right"></ul>
    </div>
    <!--h2>Move Forward <span>With Your Education</span></h2>
    <p><span class="txt1">Eusus consequam</span> vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a non laorem lacingilla wisi. </p>
    <div class="img-box"><img src="images/1page-img.jpg">Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a non laorem lacingilla wisi. Nuncrhoncus eros <a href="#">maurien ulla</a> facilis tor mauris tincidunt et vitae morbi. Velelit condimentes in laorem quis nullamcorper nam fauctor feugiat pellent sociis.</div>
    <p class="p0">Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a <a href="#">non laorem</a> lacingilla wisi.</p-->
  </div>
</section>
</div>
<script type="text/javascript">


$('#pagination-demo').twbsPagination({
totalPages: 5,
// the current page that show on start
startPage: 1,

// maximum visible pages
visiblePages: 5,

initiateStartPageClick: true,

// template for pagination links
href: false,

// variable name in href template for page number
hrefVariable: '{{number}}',

// Text labels
first: 'First',
prev: 'Previous',
next: 'Next',
last: 'Last',

// carousel-style pagination
loop: false,

// callback function
onPageClick: function (event, page) {
$('.page-active').removeClass('page-active');
$('#page'+page).addClass('page-active');
},

// pagination Classes
paginationClass: 'pagination',
nextClass: 'next',
prevClass: 'prev',
lastClass: 'last',
firstClass: 'first',
pageClass: 'page',
activeClass: 'active',
disabledClass: 'disabled'

});




</script>
