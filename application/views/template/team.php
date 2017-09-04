
		<div id="content-wrapper">
		<div class="page-header">
			<h1><i class="fa fa-file-text-o page-header-icon"></i>&nbsp;&nbsp;Welcome <em class="label"><?=$this->session->userdata('user');?></em> to Admin Section</h1>
			
		</div> <!-- / .page-header -->	
			<div class="row">
				<div class="col-sm-1">
				 <button type="button" class="btn btn-success pull-left" id="edit_img"  data-toggle="modal" data-target="#add_project"> Add Team Member </button></span><br>
				 </div><hr>
			</div>	
			<div class="row">
					<?=$this->session->flashdata('msg');?>
					<?php $s=1; foreach($team as $row):?>
					<div class="col-sm-4">
						
						<div class="panel panel-info panel-dark widget-profile">
							<div class="panel-heading">
							 <button type="button" class="btn btn-sm btn-warning pull-right" id="edit_img"  data-toggle="modal" data-target="#edit_member" onClick="edit_member(this.value);" value="<?=$row->member_id;?>"> Edit </button></span>
								<img src="<?=base_url('assets/');?><?=$row->member_pic;?>" alt="" class="widget-profile-avatar">
								<div class="widget-profile-header">
									<span><?=$row->member_name;?></span><br>
									<a href="#"><?=$row->member_designation;?></a>
								</div>
							</div>
							<!-- / .panel-heading -->
							<div class="widget-profile-counters">
								<div class="col-xs-3"><a href="<?=$row->twiter_link;?>"><span> twitter</span><br>FOLLER</a></div>
								<div class="col-xs-3"><a href="<?=$row->fb;?>"><span>Facebook</span><br>LIKES</a></div>
								<div class="col-xs-3"><a href="<?=$row->linkedin;?>"><span>Linked </span><br>FOLLWORS</a></div>
								<div class="col-xs-3"><span>Google+</span><a href="<?=$row->gplus;?>"><br>EMAIL</a></div>
							</div>
							
							<div class="widget-profile-text">
								<?=$row->member_details;?>
							</div>
						</div>
					</div>
						
					
						
					<?php endforeach;?>
						
				
				
			</div>
		</div>
	<div id="add_project" class="modal fade" tabindex="-1" role="dialog" style="display: none;">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header"> Add Team
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
								
							</div>
							<div class="modal-body">
								<form method="post" enctype="multipart/form-data" class="panel form-horizontal" action="<?=base_url('Admin/add_members');?>">
									<div class="panel-body">
										<div class="row">
											
											<div class="col-md-4">
												<input type="text" name="name" placeholder="name...." class="form-control form-group-margin">
											</div>
											<div class="col-md-4">
												<input type="text" name="designation" placeholder="Designation...." class="form-control form-group-margin">
											</div>
											<div class="col-md-4">
												<input type="file" name="file"  class="form-control form-group-margin">
											</div>
										</div><!-- row -->
										<div class="row">
											
											<div class="col-md-3">
												<input type="text" name="linkedin" placeholder="Linked ...." class="form-control form-group-margin">
											</div>
											<div class="col-md-3">
												<input type="tex" name="fb"  class="form-control form-group-margin" placeholder="facebook ....">
											</div>
											<div class="col-md-3">
												<input type="text" name="twitter"  class="form-control form-group-margin" placeholder="twitter ....">
											</div>
											<div class="col-md-3">
												<input type="text" name="gplus"  class="form-control form-group-margin" placeholder="Google+ ....">
											</div>
										</div><
										<textarea name="work" class="form-control" rows="5" placeholder="Member Details......"></textarea>
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

	<div id="edit_member" class="modal fade" tabindex="-1" role="dialog" style="display: none;">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
								<h4 class="modal-title">Edit Member </h4>
							</div>
							<div class="modal-body">
								<div id="data"></div>
							</div>
						</div> <!-- / .modal-content -->
					</div> <!-- / .modal-dialog -->
				</div> <!-- / .modal -->
		<!-- <!-- edit services modal --> 
<script type="application/javascript">
			/**     edit projects   */
	function edit_member(val)
		{
			
			$.post("<?=base_url('admin/edit_member');?>",{val:val},function(data){
					
					$('#data').html(data);
				   });
		}
</script>	
		