@extends('admin/layout')

@section('content')
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
	<div class="page-content">
		<div class="row">
			<div class="col-md-12">
				<!-- BEGIN PAGE TITLE & BREADCRUMB-->
				<h3 class="page-title">
				<?php if (isset($category)) { echo "Edit Category"; } else {echo "Add Category";} ?>
				
				</h3>
		     

		    	<?php $messages =  $errors->all('<p style="color:red">:message</p>') ?>
		    	<?php foreach ($messages as $msg): ?>
		    		<?= $msg ?>
		    	<?php endforeach; ?>
				
				<?= Form::open(array('class' => 'form-horizontal')) ?>
					<div class="form-body">
						<div class="form-group">
							<label class="control-label col-md-3">Category Name
							<span class="required">
								 *
							</span>
							</label>
							<div class="col-md-4">
								<input type="text" name="category" data-required="1" class="form-control" value="<?php if (isset($category)) { echo $category['category']; } ?>" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Base URL
							<span class="required">
								 *
							</span>
							</label>
							<div class="col-md-4">
								<input type="text" name="baseurl" data-required="1" class="form-control" value="<?php if (isset($category)) { echo $category['baseurl']; } ?>" />
							</div>
						</div>


						<div class="form-actions fluid">
							<div class="row">
								<div class="col-md-12">
									<div class="col-md-offset-3 col-md-9">
										<button type="submit" class="btn <?php if (isset($category)) { echo "blue"; } else {echo "green";} ?>" value="<?php if (isset($category)) { echo "Update"; } else {echo "Submit";} ?>"><i class="fa fa-check"></i> <?php if (isset($category)) { echo "Update"; } else {echo "Submit";} ?></button>
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
@stop