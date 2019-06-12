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
      <h4 class="m-0 font-weight-bold text-primary"> Detail  

        <a href="<?= base_url('category') ?>" class="btn btn-outline-dark float-right"> 
        	<i class="fas fa-backward"></i> Go Back 
        </a>

      </h4>
    </div>
	<div class="card-body">
		
		<div class="row">
			<div class="col-lg-10 col-md-8 col-sm-12">
				<h1> <?= $name; ?> </h1>
				<p>
					<b> Description : </b>
					 
						<?= $description; ?>
				</p>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-12">
				<img src="<?= $photo ?>" class="img-fluid">
			</div>
		</div>
	
	</div>


</div>