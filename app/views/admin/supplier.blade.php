@extends('admin/layout')

@section('content')
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
	<div class="page-content">
		<div class="row">
			<div class="col-md-12">
				<!-- BEGIN PAGE TITLE & BREADCRUMB-->
				<h3 class="page-title">
				<?php if (isset($supplier)) { echo "Edit Supplier"; } else {echo "Add Supplier";} ?>
				
				</h3>
		     

		    	<?php $messages =  $errors->all('<p style="color:red">:message</p>') ?>
		    	<?php foreach ($messages as $msg): ?>
		    		<?= $msg ?>
		    	<?php endforeach; ?>
				
				<?= Form::open(array('class' => 'form-horizontal')) ?>
					<div class="form-body">
						<div class="form-group">
							<label class="control-label col-md-3">Supplier Name
							<span class="required">
								 *
							</span>
							</label>
							<div class="col-md-4">
								<input type="text" name="name" data-required="1" class="form-control" value="<?php if (isset($supplier)) { echo $supplier['name']; } else {echo Input::old('name'); } ?>" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Base URL
							<span class="required">
								 *
							</span>
							</label>
							<div class="col-md-4">
								<input type="text" name="baseurl" data-required="1" class="form-control" value="<?php if (isset($supplier)) { echo $supplier['baseurl']; } else {echo Input::old('baseurl'); } ?>" />
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3">Inline Editing</label>
							<div class="col-md-9">
								<div id="description-editable" data-provide="markdown-editable" class="well">
									<?php if (isset($supplier)) { echo $supplier['description']; } else {echo Input::old('description');} ?>
								</div>
								<span class="help-block">
									 Click above content to edit it
								</span>
								<textarea id="description" name="description"><?php if (isset($supplier)) { echo $supplier['description']; } else {echo Input::old('description');} ?></textarea>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3">Rating
							<span class="required">
								 *
							</span>
							</label>
							<div class="col-md-4">
								<input type="range" value="<?php if (isset($supplier)) { echo $supplier['rating']; } elseif (Input::old('rating') !== 0) {echo Input::old('rating');} {echo 0;} ?>" name="rating" step="0.25" id="backing4">
								<div class="rateit" data-rateit-backingfld="#backing4" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5">
							</div>
						</div>

						<br>
						<div class="form-actions fluid">
							<div class="row">
								<div class="col-md-12">
									<div class="col-md-offset-3 col-md-9">
										<button type="submit" onclick="fillTextarea();" class="btn <?php if (isset($supplier)) { echo "blue"; } else {echo "green";} ?>" value="<?php if (isset($supplier)) { echo "Update"; } else {echo "Submit";} ?>"><i class="fa fa-check"></i> <?php if (isset($supplier)) { echo "Update"; } else {echo "Submit";} ?></button>
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