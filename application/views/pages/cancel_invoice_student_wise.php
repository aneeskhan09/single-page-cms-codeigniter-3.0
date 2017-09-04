
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
						$("#student_id").select2({
							allowClear: true,
							placeholder: "Select a student"
						});
						$("#REG_ID").select2({
							allowClear: true,
							placeholder: "Enter Student ID"
						});

						// Multiselect
						$("#jquery-select2-multiple").select2({
							placeholder: "Select a student"
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
						//var $std_id = $('#REG_ID').val();
						//alert($std_id);
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
	<div class="row">
    	<div class="col-sm-11">
       	<?php if($this->session->flashdata('msg')){
			echo $this->session->flashdata('msg');
			}?>
        <fieldset class="well" style="border: #F33 solid 1px">
        <legend class=""> Cancel Invoice</legend>
        <form class="form-inline" method="post" action="<?=base_url('welcome/create_invoice');?>">
        	
            	<div class="col-sm-12">
                			<label>Search By Student ID </label><br>
                			
                            <select  id="REG_ID" class="form-control" name= "REG_ID" style="width:300px">
                            <option value=""></option>
                            <?php foreach ($student_no as $row):?>
								<option value="<?=$row->REGISTERATION_NO?>"><?=$row->REGISTERATION_NO;?></option>
							<?php endforeach;?>	
							</select>
                            <br>
                			<label>Select Student</label><br>
							<select  id="student_id" class="form-control" name= "student_id" style="width:300px">
                            <option value=""></option>
                            <?php foreach ($student as $row):?>
								<option value="<?=$row->STUDENT_ID?>"><?=$row->STUDENT_NAME;?></option>
							<?php endforeach;?>	
							</select>
						
       					<br>
						
                 
                            
                        	<br>
                         	<button type="button" id="search_invoice" class="btn btn-danger" onClick="search_invoice_data()">Search Invoice</button>
                         </div>
						
                        
                        
            </form>            
        </div>
        </fieldset>
        
        
        
     

        
        
        
        
        
    </div>
	</div> <!-- / #content-wrapper -->
    <div class="col-sm-12">
   		 <div class="panel">
					<div class="panel-body">
    					 <div class="table-success">
							<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="">
								<thead>
									<tr>
										
										<th>Invoice No.</th>
										<th>Student Name</th>
                                        <th>Department</th>
										<th>Transiction Date</th>
                                        <th>Due Date</th>
                                        <th>Status</th>
                                        <th>Actions</th>
									</tr>
								</thead>
								<tbody id="get_it_here">
                                	<tr><td colspan="6" align="center"><img style="display:none" id="loader" src="<?=base_url();?>assets/images/loader.gif"</td></tr>
								</tbody>
							</table>
						</div>
                     </div>
                  </div>
    </div>
      <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
  	
    <div class="modal-content" >
    	<div class="model-header">
    	<button class="btn btn-info btn-dark pull-left" onClick="Clickheretoprint()"><span class="fa fa-print"></span&> &nbsp;Print</button>
    </div>
   <div id="datatab">
   </div>
		
    
    </div>
  </div>
</div>  
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
				function search_invoice_data()
				{
					
					var student_id =  $('#student_id').val();
					var student_no	= $('#REG_ID').val(); //alert(student_no);
					$('#loader').show();
					$.post('<?=base_url();?>Welcome/get_invoice_for_canceling',{student_id:student_id,student_no:student_no},function(data){
						//alert(data);
						$('#loader').hide();
						$('#get_it_here').html(data);
						});
				}
				function cancel_the_list(student_id)
				{
					//alert(id);
					$('#loader').show();
					$.post('<?=base_url();?>Welcome/cancel_invoice_old_style',{student_id:student_id},function(data){
						//alert(data);
						$('#loader').hide();
						$('#get_it_here').html(data);
						});
					
				}
				</script>
				<!-- / Javascript -->