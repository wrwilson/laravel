@extends('admin/layout')

@section('content')
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
	<div class="page-content">
		<div class="row">
			<div class="col-md-12">
				<!-- BEGIN PAGE TITLE & BREADCRUMB-->
				<h3 class="page-title">
				<?php if (isset($user)) { echo "Change user details"; } else {echo "User Registration";} ?>
				
				</h3>
		     

		    	<?php $messages =  $errors->all('<p style="color:red">:message</p>') ?>
		    	<?php foreach ($messages as $msg): ?>
		    		<?= $msg ?>
		    	<?php endforeach; ?>
				
				<?= Form::open(array('class' => 'form-horizontal')) ?>
					<div class="form-body">
						<div class="form-group">
							<label class="control-label col-md-3">Username
							<span class="required">
								 *
							</span>
							</label>
							<div class="col-md-4">
								<input type="text" name="username" data-required="1" class="form-control" value="<?php if (isset($user)) { echo $user['username']; } ?>" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Name
							<span class="required">
								 *
							</span>
							</label>
							<div class="col-md-4">
								<input type="text" name="name" data-required="1" class="form-control" value="<?php if (isset($user)) { echo $user['name']; } ?>" />
							</div>
						</div>
						<div class="form-group last password-strength">
							<label class="control-label col-md-3">Password
							<span class="required">
								 *
							</span>
							</label>
							<div class="col-md-4">
								<input type="text" class="form-control" name="password" id="password_strength" placeholder="<?php if (isset($user)) { echo "Change password"; } ?>">
								<span class="help-block">
									 Type a password to check its strength
								</span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Administrator</label>
							<div class="col-md-4">
								<input type="checkbox" name="admin" class="make-switch" <?php if (isset($user)) { echo ($user['admin'] ? "Checked" : ""); } ?>>
							</div>
						</div>


						<div class="form-actions fluid">
							<div class="row">
								<div class="col-md-12">
									<div class="col-md-offset-3 col-md-9">
										<button type="submit" class="btn <?php if (isset($user)) { echo "blue"; } else {echo "green";} ?>" value="<?php if (isset($user)) { echo "Update"; } else {echo "Submit";} ?>"><i class="fa fa-check"></i> <?php if (isset($user)) { echo "Update"; } else {echo "Submit";} ?></button>
										<a href="{{ URL::to('admin/users') }}">
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