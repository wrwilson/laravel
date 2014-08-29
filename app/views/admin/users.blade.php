@extends('admin/layout')

@section('content')
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
	<div class="page-content">
		<div class="row">
			<div class="col-md-12">
				<!-- BEGIN PAGE TITLE & BREADCRUMB-->
				<h3 class="page-title">
				Users
				</h3>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
			<div class="btn-group">
				<a href="{{ URL::to('admin/register') }}">
				<button id="sample_editable_1_new" class="btn green">
				Add New <i class="fa fa-plus"></i>
				</button>
				</a>
			</div>
			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<thead>
					<tr>
						<th>
							 #
						</th>
						<th>
							 Username
						</th>
						<th>
							 Name
						</th>
						<th>
							 Admin
						</th>
						<th>
							 Created
						</th>
						<th>
							 Actions
						</th>
					</tr>
					</thead>
					<tbody>
						<?php 
						foreach ($users as $user) {

							echo "<tr>";
							// User ID
							echo "<td>" . $user['id'] . "</td>";
 
							// Name
							echo "<td>" . $user['username'] . "</td>";

							// Username
							echo "<td>" . $user['name'] . "</td>";

							// Admin
							echo "<td>" . ($user['admin'] ? "Yes" : "No") . "</td>";

							// created
							echo "<td>" . date_format($user['created_at'], "d M Y") . "</td>";
							// To output time: "N M Y h:i a"

							echo "<td>
										<a href='" . URL::to('admin/user') . "/" . $user['id'] . "' class='btn default btn-xs purple'>
											<i class='fa fa-edit'></i> Edit
										</a>&nbsp;
										<a href='" . URL::to('admin/user/delete') . "/" . $user['id'] . "' class='btn default btn-xs black'>
											<i class='fa fa-trash-o'></i> Delete
										</a>
									</td>";

							echo "</tr>";
						}
						if (count($users) == 0) {
							echo "<tr><td colspan='6' style='text-align:center;padding:20px;'>It looks like the users table is empty</td></tr>";
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@stop