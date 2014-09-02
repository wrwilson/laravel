@extends('admin/layout')

@section('content')
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
	<div class="page-content">
		<div class="row">
			<div class="col-md-12">
				<!-- BEGIN PAGE TITLE & BREADCRUMB-->
				<h3 class="page-title">
				Suppliers
				</h3>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
			<div class="btn-group">
				<a href="{{ URL::to('admin/supplier') }}">
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
							 Supplier
						</th>
						<th>
							 Base URL
						</th>
						<th>
							 Description
						</th>
						<th>
							 Rating
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
						foreach ($suppliers as $supplier) {

							echo "<tr>";
							// User ID
							echo "<td>" . $supplier['id'] . "</td>";
 
							// Supplier Name
							echo "<td>" . $supplier['name'] . "</td>";

							// URL
							echo "<td>" . $supplier['baseurl'] . "</td>";

							// Description
							echo "<td>" . $supplier['description'] . "</td>";

							// Rating
							echo "<td>" . $supplier['rating'] . "</td>";

							// created
							echo "<td>" . date_format($supplier['created_at'], "d M Y") . "</td>";
							// To output time: "N M Y h:i a"

							echo "<td>
										<a href='" . URL::to('admin/supplier') . "/" . $supplier['id'] . "' class='btn default btn-xs purple'>
											<i class='fa fa-edit'></i> Edit
										</a>&nbsp;
										<a href='" . URL::to('admin/supplier/delete') . "/" . $supplier['id'] . "' class='btn default btn-xs black'>
											<i class='fa fa-trash-o'></i> Delete
										</a>
									</td>";

							echo "</tr>";
						}
						if (count($suppliers) == 0) {
							echo "<tr><td colspan='7' style='text-align:center;padding:20px;'>It looks like the suppliers table is empty</td></tr>";
						}
						?>
					</tbody>
          		</table>
			</div>
		</div>
	</div>
</div>

@stop