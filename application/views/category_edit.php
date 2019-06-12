<?php
	$id = $category['categories_id'];
	$name = $category['categories_name'];
	$photo = $category['categories_photo'];
	$description = $category['categories_description'];
?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800 mb-5">
    Category
</h1>


<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h4 class="m-0 font-weight-bold text-primary"> Update Category 

        <a href="<?= base_url('category') ?>" class="btn btn-outline-dark float-right"> 
        	<i class="fas fa-backward"></i> Go Back 
        </a>

      </h4>
    </div>
	<div class="card-body">
		<form action="<?= base_url('category/update') ?>" method="POST" enctype="multipart/form-data">

			<input type="hidden" name="id" value="<?= $id ?>">
			<input type="hidden" name="oldPhoto" value="<?= $photo ?>">
			
			<div class="form-group row">
				<label for="name" class="col-sm-2 col-form-label"> 
					<b> Name </b>
				</label>
				<div class="col-sm-10">
					<input type="text" name="name" class="form-control" id="name" value="<?= $name; ?>">

					<div class="text-danger"> 
						<?= form_error('name'); ?> 
					</div>
				</div>

			</div>

			<div class="form-group row">
				<label for="photo" class="col-sm-2 col-form-label">  
					<b> Photo </b> 
				</label>

				<div class="col-sm-10">
					
					<nav>
						<div class="nav nav-tabs" id="nav-tab" role="tablist">
					    	<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Old Photo </a>
					    
					    	<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">New Photo </a>
					  </div>
					</nav>
					<div class="tab-content mt-3" id="nav-tabContent">
					  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
					  	<img src="<?= $photo ?>" class="img-fluid">
					  </div>

					  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
					  	
					  	<input type="file" name="newPhoto" id="photo">
						
					  </div>
					</div>
				</div>
			</div>

			<div class="form-group row">
				<label for="description" class="col-sm-2 col-form-label"> 
					<b> Description </b> 
				</label>

				<div class="col-sm-10">
					<textarea class="form-control" id="description" name="description" rows="5">
						<?= $description; ?>
					</textarea>
				</div>
			</div>
			
			<div class="form-group row">
				<div class="col-sm-2"></div>
				<div class="col-sm-10">
					<button class="btn btn-primary" type="submit">
						<i class="fa fa-upload"></i>
						&nbsp; Update
					</button>
				</div>
			</div>

		</form>
	</div>

</div>

