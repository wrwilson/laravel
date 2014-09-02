@extends('admin/layout')

@section('content')
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
	<div class="page-content">
		<div class="row">
			<div class="col-md-12">
				<!-- BEGIN PAGE TITLE & BREADCRUMB-->
				<h3 class="page-title">
				<?php if (isset($product)) { echo "Edit Product"; } else {echo "Add Product";} ?>
				
				</h3>
		     

		    	<?php $messages =  $errors->all('<p style="color:red">:message</p>') ?>
		    	<?php foreach ($messages as $msg): ?>
		    		<?= $msg ?>
		    	<?php endforeach; ?>
				
				<?= Form::open(array('class' => 'form-horizontal')) ?>
					<div class="form-body">
						<div class="form-group">
							<label class="control-label col-md-3">Title
							<span class="required">
								 *
							</span>
							</label>
							<div class="col-md-4">
								<input type="text" name="title" data-required="1" class="form-control" value="<?php if (isset($product)) { echo $product['title']; } else {echo Input::old('title'); } ?>" />
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3">Sub-title
							<span class="required">
								 *
							</span>
							</label>
							<div class="col-md-4">
								<input type="text" name="subtitle" data-required="1" class="form-control input-xlarge" value="<?php if (isset($product)) { echo $product['subtitle']; } else {echo Input::old('subtitle'); } ?>" />
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3">Headline price
							<span class="required">
								 *
							</span>
							</label>
							<div class="col-md-4">
								<input type="text" name="headline_price" data-required="1" class="form-control input-xsmall" value="<?php if (isset($product)) { echo $product['headline_price']; } else {echo Input::old('headline_price'); } ?>" />
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3">Line Rental price
							<span class="required">
								 *
							</span>
							</label>
							<div class="col-md-4">
								<input type="text" name="linerental_price" data-required="1" class="form-control input-xsmall" value="<?php if (isset($product)) { echo $product['linerental_price']; } else {echo Input::old('linerental_price'); } ?>" />
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3">Summary
							<span class="required">
								 *
							</span>
							</label>
							<div class="col-md-4">
								<textarea class="form-control input-xlarge" rows="4" name="summary"><?php if (isset($product)) { echo $product['summary']; } else {echo Input::old('summary'); } ?></textarea>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3">Supplier
							<span class="required">
								 *
							</span>
							</label>
							<div class="col-md-4">
								<select name="supplier_id" class="form-control input-lg">
									<option>Select a supplier...</option>
									<?php
										foreach ($suppliers as $supplier) {
											$selected = "";
											if (isset($product) && $product['supplier_id'] == $supplier['id']) {
												$selected = "selected";
											}
											echo '<option value="'.$supplier['id'].'"'.$selected.'>'.$supplier['name'].'</option>';
										}
									?>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3">Category
							<span class="required">
								 *
							</span>
							</label>
							<div class="col-md-4">
								<select name="category_id" class="form-control input-lg">
									<option>Select a category...</option>
									<?php
										foreach ($categories as $category) {
											$selected = "";
											if (isset($product) && $product['category_id'] == $category['id']) {
												$selected = "selected";
											}
											echo '<option value="'.$category['id'].'"'.$selected.'>'.$category['category'].'</option>';
										}
									?>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3">Affiliate URL
							<span class="required">
								 *
							</span>
							</label>
							<div class="col-md-4">
								<input type="text" name="url" data-required="1" class="form-control" value="<?php if (isset($product)) { echo $product['url']; } else {echo Input::old('url'); } ?>" />
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3">Description
							<span class="required">
								 *
							</span>
							</label>
							<div class="col-md-4">
								<textarea class="form-control input-xlarge" rows="4" name="description"><?php if (isset($product)) { echo $product['description']; } else {echo Input::old('description'); } ?></textarea>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3">Promotion Conditions
							</label>
							<div class="col-md-4">
								<textarea class="form-control input-xlarge" rows="4" name="promotion_conditions"><?php if (isset($product)) { echo $product['promotion_conditions']; } else {echo Input::old('promotion_conditions'); } ?></textarea>
							</div>
						</div>
						
						<div class="form-actions fluid">
							<div class="row">
								<div class="col-md-12">
									<div class="col-md-offset-3 col-md-9">
										<button type="submit" onclick="fillTextarea();" class="btn <?php if (isset($product)) { echo "blue"; } else {echo "green";} ?>" value="<?php if (isset($product)) { echo "Update"; } else {echo "Submit";} ?>"><i class="fa fa-check"></i> <?php if (isset($product)) { echo "Update"; } else {echo "Submit";} ?></button>
										<a href="{{ URL::to('admin/categories') }}">
											<button type="button" class="btn default">Cancel</button>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?= Form::close() ?>
			</div>
		</div>		
	</div>
</div>
<!-- END CONTENT -->

<script>
 public function fillTextarea() {
 	$('#description-editable').value(); = $('#description').value();
 	return true;
 }
</script>
@stop