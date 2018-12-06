
<div id="page-wrapper">

    <div class="container-fluid">


      <div class="row">
          <div class="col-lg-12">

              <form class="form-horizontal" action="index.php" method="get">
                <input type="hidden" name="hal" value="category_add_act">

                  <div class="form-group">
                      <label class="control-label col-lg-2" style="text-align:left">Category ID</label>
                      <div class="col-lg-6"><input name="id" class="form-control col-lg-6" value=""></div>
                  </div>

                  <div class="form-group">
                      <label class="control-label col-lg-2" style="text-align:left">Category Name</label>
                      <div class="col-lg-10"><input name="nama" class="form-control col-lg-10" value=""></div>
                  </div>


                  <button type="submit" class="btn btn-default">Save</button>
                  <button type="reset" onclick="window.location.href = 'index.php?hal=category';" class="btn btn-default">Cancel</button>

              </form>

          </div>
      </div>
