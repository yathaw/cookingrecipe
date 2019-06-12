<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800 mb-5">
    Meal
</h1>


<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h4 class="m-0 font-weight-bold text-primary"> New Meal 

        <a href="<?= base_url('meal') ?>" class="btn btn-outline-dark float-right"> 
        	<i class="fas fa-backward"></i> Go Back 
        </a>

      </h4>
    </div>
	<div class="card-body">
		<form action="<?= base_url('meal/store') ?>" method="POST" enctype="multipart/form-data">
			
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
				<label for="photo" class="col-sm-2 col-form-label">  
					<b> Category </b> 
				</label>

				<div class="col-sm-10">
					<select class="form-control" name="category">
						<option value="0"> Choose Category </option>
						
						<?php 
							foreach($categories as $category): 
							$c_id = $category->categories_id;
							$c_name = $category->categories_name;
						?>
							<option value="<?= $c_id ?>"> 
								<?= $c_name; ?>  
							</option>
						<?php endforeach; ?>
					</select>
				</div>
			</div>
			
			<div class="form-group row">
				<label for="photo" class="col-sm-2 col-form-label">  
					<b> Country </b> 
				</label>

				<div class="col-sm-10">
					<select class="form-control" name="country">
						<option value="0"> Choose Country </option>
						
						<?php 
			            	foreach($countries as $country):

			            	$country_id = $country->countries_id;
			              	$country_name = $country->countries_name;
			            ?>
							<option value="<?= $country_id ?>"> 
								<?= $country_name; ?>  
							</option>
						<?php endforeach; ?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label for="link" class="col-sm-2 col-form-label">  
					<b> Youtube Link </b> 
				</label>

				<div class="col-sm-10">
					<input type="text" name="link" id="link" class="form-control">
				</div>
			</div>

			
			
			<div class="form-group row">
				<label for="instructions" class="col-sm-2 col-form-label">  
					<b> Instructions </b> 
				</label>

				<div class="col-sm-10">
					<textarea class="form-control" rows="5" name="instruction" id="instructions" ></textarea>
				</div>
			</div>

			<div class="form-group row">
				<div class="col-sm-2">
					<p> <b> Ingredients </b> </p>
				</div>

				<div class="col-sm-10" style="overflow-y: scroll; height: 270px">
					
					<div class="row">
						<?php 
			            	foreach($ingredients as $ingredient):

			            	$i_id = $ingredient->ingredients_id;
			              	$i_name = $ingredient->ingredients_name;
			              	$i_photo = $ingredient->ingredients_photo;
			            ?>
						
						<div class="col-lg-3 col-md-3 col-sm-6 card-group form-group">
							<div class="card">
								<div class="card-header">
	    							<h5 class="card-title text-center">
	    								<input class="form-check-input" type="checkbox" id="<?= $i_id ?>ingredients" name="ingredients[]" value="<?= $i_name ?>">
    							
		    							<label class="form-check-label" for="<?= $i_id ?>ingredients">
		      								<?= $i_name; ?> 
		    							</label>
	    							</h5>
								</div>

								<div class="card-body text-center">
								    <img src="<?= $i_photo ?>" class="card-img-top img-fluid" style="width: 100px; height: 100px;">
								</div>

								<div class="card-footer">
							    	<div class="form-row">

									    <div class="col">
									    	<input type="text" class="form-control" placeholder="Amount" name="amount[]">
									    </div>

									    <div class="col">
									    	<input type="text" class="form-control" placeholder="Unit" name="unit[]">
									    </div>
									</div>
							    </div>
							</div>
						</div>

					<?php endforeach; ?>

					</div>


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

