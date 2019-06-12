<!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800 mb-5">
      Country
  </h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h4 class="m-0 font-weight-bold text-primary"> All Country 

        <a href="<?= base_url('country/create') ?>" class="btn btn-outline-info float-right"> 
          <i class="fas fa-plus"></i> Add Row 
        </a>

      </h4>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            
            <?php 
              $i = 0;
              foreach($countries as $country):

              $id = $country->countries_id;
              $name = $country->countries_name;
              $i++; 

            ?>

              <tr>
                <td> <?= $i; ?> </td>
                <td> <?= $name ?> </td>
                <td>

                  <a href="" class="btn btn-outline-warning"> 
                    <i class="fas fa-edit"></i> Edit 
                  </a>

                  <a href="" class="btn btn-outline-danger"> 
                    <i class="fas fa-trash-alt"></i> Delete 
                  </a>


                </td>
              </tr>

            <?php endforeach; ?>

          </tbody>

        </table>

      </div>
    </div>
  </div>

