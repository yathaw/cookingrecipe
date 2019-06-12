<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800 mb-5">
    Country
</h1>


<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h4 class="m-0 font-weight-bold text-primary"> New Country 

        <a href="<?= base_url('country') ?>" class="btn btn-outline-dark float-right"> 
        	<i class="fas fa-backward"></i> Go Back 
        </a>

      </h4>
    </div>
	<div class="card-body">
		<form action="<?= base_url('country/store') ?>" method="POST" enctype="multipart/form-data">
			
			<div class="form-group row">
				<label for="name" class="col-sm-2 col-form-label"> 
					<b> Name </b>
				</label>
				<div class="col-sm-10">
					<input type="text" name="name" class="form-control" id="name">

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
					<input type="file" name="photo" id="photo">
				</div>
			</div>
			
			<div class="form-group row">
				<div class="col-sm-2"></div>
				<div class="col-sm-10">
					<button class="btn btn-primary" type="submit">
						<i class="fa fa-save"></i>
						&nbsp; SAVE
					</button>
				</div>
			</div>

		</form>
	</div>

</div>

