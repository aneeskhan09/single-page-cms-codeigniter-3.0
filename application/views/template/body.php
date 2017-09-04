
<!-- 9. $JQUERY_SELECT2 ============================================================================

				jQuery Select2
-->
				<!-- Javascript -->
				<script>
					function movieFormatResult(movie) {
						var markup = "<table class='movie-result'><tr>";
						if (movie.posters !== undefined && movie.posters.thumbnail !== undefined) {
							markup += "<td class='movie-image' style='vertical-align: top'><img src='" + movie.posters.thumbnail + "' style='max-width: 60px; display: inline-block; margin-right: 10px; margin-left: 10px;' /></td>";
						}
						markup += "<td class='movie-info'><div class='movie-title' style='font-weight: 600; color: #000; margin-bottom: 6px;'>" + movie.title + "</div>";
						if (movie.critics_consensus !== undefined) {
							markup += "<div class='movie-synopsis'>" + movie.critics_consensus + "</div>";
						}
						else if (movie.synopsis !== undefined) {
							markup += "<div class='movie-synopsis'>" + movie.synopsis + "</div>";
						}
						markup += "</td></tr></table>";
						return markup;
					}

					function movieFormatSelection(movie) {
						return movie.title;
					}

					init.push(function () {
						// Single select
						$("#jquery-select2-example").select2({
							allowClear: true,
							placeholder: "Select a Charges"
						});

						// Multiselect
						$("#jquery-select2-multiple").select2({
							placeholder: "Select a Charges"
						});

						// External source
						$("#jquery-select2-external").select2({
							placeholder: "Search for a movie",
							minimumInputLength: 1,
							ajax: { // instead of writing the function to execute the request we use Select2's convenient helper
								url: "http://api.rottentomatoes.com/api/public/v1.0/movies.json",
								dataType: 'jsonp',
								data: function (term, page) {
									return {
										q: term, // search term
										page_limit: 10,
										apikey: "ju6z9mjyajq2djue3gbvv26t" // please do not use so this example keeps working
									};
								},
								results: function (data, page) { // parse the results into the format expected by Select2.
									// since we are using custom formatting functions we do not need to alter remote JSON data
									return {results: data.movies};
								}
							},
							initSelection: function(element, callback) {
								// the input tag has a value attribute preloaded that points to a preselected movie's id
								// this function resolves that id attribute to an object that select2 can render
								// using its formatResult renderer - that way the movie name is shown preselected
								var id=$(element).val();
								if (id!=="") {
									$.ajax("http://api.rottentomatoes.com/api/public/v1.0/movies/"+id+".json", {
										data: {
											apikey: "ju6z9mjyajq2djue3gbvv26t"
										},
										dataType: "jsonp"
									}).done(function(data) { callback(data); });
								}
							},
							formatResult: movieFormatResult, // omitted for brevity, see the source of this page
							formatSelection: movieFormatSelection,  // omitted for brevity, see the source of this page
							dropdownCssClass: "bigdrop", // apply css that makes the dropdown taller
							escapeMarkup: function (m) { return m; } // we do not want to escape markup since we are displaying html in results
						});

						// Disabled state
						$(".select2-disabled-examples select").select2({ placeholder: 'Select option...' });

						// Colors
						$(".select2-colors-examples select").select2();
					});
				</script>
              <script>
					init.push(function () {
						var options = {
							todayBtn: "linked",
							orientation: $('body').hasClass('right-to-left') ? "auto right" : 'auto auto'
						}
						$('#bs-datepicker-example').datepicker(options);

						$('#bs-datepicker-component').datepicker();

						var options2 = {
							orientation: $('body').hasClass('right-to-left') ? "auto right" : 'auto auto'
						}
						$('#bs-datepicker-range').datepicker(options2);

						$('#bs-datepicker-inline').datepicker();
					});
					///////////////////////////////////////////////////////////////
					function get_value_invoice(id)
					{
						//alert(id);
						$.post('<?=base_url()?>Welcome/get_invoice_data',{id:id},function(data){
							//alert(data);
							$('#datatab').html(data);
						})
					}
					
					function Clickheretoprint()
{ 
  var disp_setting="toolbar=no,location=no,directories=yes,menubar=no,"; 
      disp_setting+="scrollbars=yes,width=800"; 
  var content_vlue = document.getElementById("datatab").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
            docprint.document.write('<link href="<?php echo base_url("assets/stylesheets/bootstrap.min.css")?>" rel="stylesheet" type="text/css">');
   docprint.document.write('</head><body onLoad="self.print()">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
   document.getElementById(this).style.visibility='hidden';
}

				</script>
				<!-- / Javascript -->
				
	

	<div id="content-wrapper">
		<div class="page-header">
			<h1><i class="fa fa-file-text-o page-header-icon"></i>&nbsp;&nbsp;Welcome <em class="label"><?=$this->session->userdata('user');?></em> to Admin Section</h1>
			
		</div> <!-- / .page-header -->	
		<div class="row">
			
<!-- 12. $slider setting ==========================================================================

			New users table
-->
			<div class="col-md-4">
				<div class="panel panel-dark panel-light-green">
					<div class="panel-heading">
						<span class="panel-title">Slider Images <button type="button" class="btn btn-primary pull-right" id="add_img"  data-toggle="modal" data-target="#add_image">Add Image to slider </button></span>
						
					</div> <!-- / .panel-heading -->
					<div class="panel-body">
					<?=$this->session->flashdata('msg');?>
					<table class="table" id="q-datatables-example">
						<thead>
							<tr>
								<th></th>
								<th>images</th>
								
								<th>action</th>
								<th></th>
							</tr>
						</thead>
						<tbody class="valign-middle">
						<?php $s = 1; foreach($slider as $row):?>
							<tr>
								<td></td>
								<td>
									<img src="<?=base_url('assets/');?><?=$row->slider_img;?>" alt="" style="width:60px;height:56px;" class="img">&nbsp;&nbsp;
									<?php if($max > 3){?>
									<a href="<?=base_url('admin/delete_slider');?>/<?=$row->slider_id;?>" onClick="return false confirm('Are You Sure ?')"><i class="glyphicon glyphicon-trash"></i></a>
								<?php }?> </a>
								</td>
								
								<td><button class="btn btn-warning" id="edit_img"  data-toggle="modal" data-target="#modal-sizes-2" value="<?=$row->slider_id;?>" onClick="edit_slider(this.value);">Edit</button>
								
								</td>
							</tr>
							<?php endforeach;?>
					</table>
					</div>
				</div> <!-- / .panel -->
			</div>
<!-- /12. $slider setting -->
				<div class="col-sm-8">
				<div class="panel panel-dark panel-light-info">
					<div class="panel-heading">
						<span class="panel-title">About Us <button type="button" class="btn btn-primary pull-right" id="edit_img"  data-toggle="modal" data-target="#modal-sizes-2"> Add </button></span>
						<div class="panel-body">
							<?=$this->session->flashdata('msg2');?>
							<?php foreach($about as $row):?>
							<h3><?=$row->company_name;?></h3>
							<p><?=$row->company_details;?></p>
							<button onClick="edit_about(this.value);" class="btn btn-sm btn-warning" value="<?=$row->about_us_id;?>"  data-toggle="modal" data-target="#edit_about_us">Change</button>
							<?php endforeach;?>
						</div>
					</div> 
					
					</div>
				</div>





	</div> <!-- / #content-wrapper -->
		<div class="row">
			<div class="col-sm-9">
				<div class="panel panel-dark panel-light-info">
					<div class="panel-heading">
						<span class="panel-title">Services <button type="button" class="btn btn-primary pull-right" id="edit_img"  data-toggle="modal" data-target="#modal-sizes-2"> Add </button></span>
						<div class="panel-body">
							<?=$this->session->flashdata('msg3');?>
						<table class="table">
							<thead>
							<tr>
								<td>#</td>
								<td>Services Name</td>
								<td>Details</td>
								<td>Actions</td>
							</tr>
							</thead>	
							<?php $s=1; foreach($services as $row):?>
							<tr>
								<td><?=$s++;?></td>
							<td><?=$row->services;?></td>
							<td>
							<p><?=$row->services_details;?></p>
							</td>
							<td>
							<button onClick="edit_services(this.value);" class="btn btn-sm btn-warning" value="<?=$row->services_id;?>"  data-toggle="modal" data-target="#edit_services">Change</button>
							</td>
							
							<?php endforeach;?>
							
							
						</div>
					</div> 
				</div>
			</div>
			</div>
			
		</div>
	<div id="main-menu-bg"></div>
</div> <!-- / #main-wrapper -->
<!-- edit slider img modal -->
				<div id="modal-sizes-2" class="modal fade" tabindex="-1" role="dialog" style="display: none;">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
								<h4 class="modal-title">Edit Image</h4>
							</div>
							<div class="modal-body">
								<div id="data1"></div>
							</div>
						</div> <!-- / .modal-content -->
					</div> <!-- / .modal-dialog -->
				</div> <!-- / .modal -->
		<!-- / <!-- edit slider img modal --> 
		<!-- edit slider img modal -->
				<div id="add_image" class="modal fade" tabindex="-1" role="dialog" style="display: none;">
					<div class="modal-dialog modal-sm">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
								<h4 class="modal-title">Add Image</h4>
							</div>
							<div class="modal-body">
								<form method="post" enctype="multipart/form-data" class="form-inline" action="<?=base_url('Admin/add_slider');?>">
										<input type="file" name="file" class="form-control"><br>
										<button type="submit" class="btn btn-info"> Add Slider </button>
								</form>
							</div>
						</div> <!-- / .modal-content -->
					</div> <!-- / .modal-dialog -->
				</div> <!-- / .modal -->
		<!-- / <!-- edit slider img modal --> -->
		<!-- edit slider about us modal -->
				<div id="edit_about_us" class="modal fade" tabindex="-1" role="dialog" style="display: none;">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
								<h4 class="modal-title">Edit Image</h4>
							</div>
							<div class="modal-body">
								<div id="data2"></div>
							</div>
						</div> <!-- / .modal-content -->
					</div> <!-- / .modal-dialog -->
				</div> <!-- / .modal -->
		<!-- / <!-- edit about modal --> 
		<!-- edit services modal -->
				<div id="edit_services" class="modal fade" tabindex="-1" role="dialog" style="display: none;">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
								<h4 class="modal-title">Edit </h4>
							</div>
							<div class="modal-body">
								<div id="data3"></div>
							</div>
						</div> <!-- / .modal-content -->
					</div> <!-- / .modal-dialog -->
				</div> <!-- / .modal -->
		<!-- / <!-- edit services modal --> 
<style>
.cancelled{
	pointer-events: none;
   cursor: default;
	}
.height {
    min-height: 200px;
}

.icon {
    font-size: 47px;
    color: #5CB85C;
}

.iconbig {
    font-size: 77px;
    color: #5CB85C;
}

.table > tbody > tr > .emptyrow {
    border-top: none;
}

.table > thead > tr > .emptyrow {
    border-bottom: none;
}

.table > tbody > tr > .highrow {
    border-top: 3px solid;
}
</style>

<!-- Simple Invoice - END -->       
<!-- Javascript -->
				<script>
					init.push(function () {
						$('#jq-datatables-example').dataTable();
						$('#jq-datatables-example_wrapper .table-caption').text('Generated Charges');
						$('#jq-datatables-example_wrapper .dataTables_filter input').attr('placeholder', 'Search...');
					});
				</script>
				<!-- / Javascript -->
	<script>
		/*slider edit script*/
		function edit_slider(val)
		{
			$.post("<?=base_url('admin/change_slider');?>",{val:val},function(data){
				
					$('#data1').html(data);
				   });
		}
		
		/**  About us edit script */
		function edit_about(val)
		{
			$.post("<?=base_url('admin/change_about');?>",{val:val},function(data){
				
					$('#data2').html(data);
				   });
		}
		/*     edit about */
		/**  About us edit script */
		function edit_services(val)
		{
			
			$.post("<?=base_url('admin/change_service');?>",{val:val},function(data){
				
					$('#data3').html(data);
				   });
		}
	</script>
	



