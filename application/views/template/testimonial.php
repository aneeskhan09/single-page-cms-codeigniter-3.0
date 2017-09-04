
		<div id="content-wrapper">
		<div class="page-header">
			<h1><i class="fa fa-file-text-o page-header-icon"></i>&nbsp;&nbsp;Welcome <em class="label"><?=$this->session->userdata('user');?></em> to Admin Section</h1>
			
		</div> <!-- / .page-header -->	
			<div class="row">
				<div class="col-sm-1">
				 <button type="button" class="btn btn-success pull-left" id="edit_img"  data-toggle="modal" data-target="#add_project"> Add testimonials </button></span><br>
				 </div><hr>
			</div>	
			<div class="row">
					<?=$this->session->flashdata('msg');?>
					<?php $s=1; foreach($testimonial as $row):?>
					<div class="col-sm-4">
						
						<div class="panel panel-danger panel-dark panel-body-colorful widget-profile widget-profile-centered">
							<div class="panel-heading">
							<button onClick="change_work(this.value);" class="btn btn-sm btn-warning" value="<?=$row->testimonials_id;?>"  data-toggle="modal" data-target="#edit_services">Edit</button>
								<img src="<?=base_url('assets/');?><?=$row->testimonials_pic;?>" alt="" class="widget-profile-avatar">
								<div class="widget-profile-header">
									<span><?=$row->testimonials_name;?></span><br>

								</div>
							</div> <!-- / .panel-heading -->
							<div class="panel-body">
								<div class="widget-profile-text" style="padding: 0;">
									<?=$row->testimonials_details;?>
								</div>
							</div>
						</div>
					</div>
						
					
						
					<?php endforeach;?>
						
				
				
			</div>
		</div>
	<div id="add_project" class="modal fade" tabindex="-1" role="dialog" style="display: none;">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header"> Add Work
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
								
							</div>
							<div class="modal-body">
								<form method="post" enctype="multipart/form-data" class="panel form-horizontal" action="<?=base_url('Admin/add_testimonials');?>">
									<div class="panel-body">
										<div class="row">
											
											<div class="col-md-4">
												<input type="text" name="name" placeholder="name...." class="form-control form-group-margin">
											</div>
											<div class="col-md-4">
												<input type="file" name="file"  class="form-control form-group-margin">
											</div>
										</div><!-- row -->
										<textarea name="work" class="form-control" rows="5" placeholder="Testimonials Details......"></textarea>
									</div>
									<div class="panel-footer text-right">
										<button class="btn btn-primary">Save</button>
									</div>
							
								</form>
							</div>
								
							</div>
						</div> <!-- / .modal-content -->
					</div> <!-- / .modal-dialog -->
				</div> <!-- / .modal -->
		<!-- / <!-- edit services modal --> 
		
		

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
		<!-- <!-- edit services modal --> 
<script>
			/**     edit projects   */
	function change_work(val)
		{
			
			$.post("<?=base_url('admin/edit_testimonials');?>",{val:val},function(data){
				
					$('#data3').html(data);
				   });
		}
</script>	
		