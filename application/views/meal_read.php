<!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800 mb-5">
      Meal
  </h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h4 class="m-0 font-weight-bold text-primary"> All Meal 

        <a href="<?= base_url('meal/create') ?>" class="btn btn-outline-info float-right"> 
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
              foreach($meals as $meal):

              $id = $meal->meals_id;
              $name = $meal->meals_name;
              $i++; 

            ?>

              <tr>
                <td> <?= $i; ?> </td>
                <td> <?= $name ?> </td>
                <td>
                  
                  <a href="" class="btn btn-outline-primary"> 
                    <i class="fas fa-eye"></i> Detail 
                  </a>

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

