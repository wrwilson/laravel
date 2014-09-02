@extends('admin/layout')

@section('content')
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
	<div class="page-content">
		<div class="row">
			<div class="col-md-12">
				<!-- BEGIN PAGE TITLE & BREADCRUMB-->
				<h3 class="page-title">
				Products
				</h3>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
			<div class="btn-group">
				<a href="{{ URL::to('admin/product') }}">
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
							 Title
						</th>
						<th>
							 Headline price
						</th>
						<th>
							 Line Rental Price
						</th>
						<th>
							 Supplier
						</th>
						<th>
							 Category
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
						foreach ($products as $product) {

							echo "<tr>";
							// Product ID
							echo "<td>" . $product['id'] . "</td>";
 
							// Product Title
							echo "<td>" . $product['title'] . "</td>";

							// Headline price
							echo "<td>" . $product['headline_price'] . "</td>";

							// Headline price
							echo "<td>" . $product['linerental_price'] . "</td>";

							// Supplier
							echo "<td>" . Supplier::find($product['supplier_id'])->name . "</td>";

							// Supplier
							echo "<td>" . Category::find($product['category_id'])->category . "</td>";

							// created
							echo "<td>" . date_format($product['created_at'], "d M Y") . "</td>";
							// To output time: "N M Y h:i a"

							echo "<td>
										<a href='" . URL::to('admin/product') . "/" . $product['id'] . "' class='btn default btn-xs purple'>
											<i class='fa fa-edit'></i> Edit
										</a>&nbsp;
										<a href='" . URL::to('admin/product/delete') . "/" . $product['id'] . "' class='btn default btn-xs black'>
											<i class='fa fa-trash-o'></i> Delete
										</a>
									</td>";

							echo "</tr>";
						}	

						if (count($products) == 0) {
							echo "<tr><td colspan='8' style='text-align:center;padding:20px;'>It looks like the suppliers table is empty</td></tr>";
						}
						?>
					</tbody>
          		</table>
			</div>
		</div>
	</div>
</div>

@stop