
		<div id="content-wrapper">
		<div class="page-header">
			<h1><i class="fa fa-file-text-o page-header-icon"></i>&nbsp;&nbsp;Welcome <em class="label"><?=$this->session->userdata('user');?></em> to Admin Section</h1>
			
		</div> <!-- / .page-header -->	
			<div class="row">
				<div class="col-sm-11">
					<div class="panel panel-dark panel-light-info">
				<div class="panel-heading">
				<span class="panel-title">Projects <button type="button" class="btn btn-primary pull-right" id="edit_img"  data-toggle="modal" data-target="#add_project"> Add </button></span>
				<div class="panel-body">
					<?=$this->session->flashdata('msg');?>
				<table class="table">
					<thead>
					<tr>
						<td>#</td>
						<td>Project Name</td>
						<td>Category</td>
						<td>Image</td>
						<td>Details</td>
						<td>Actions</td>
					</tr>
					</thead>	
					<?php $s=1; foreach($projects as $row):?>
					<tr>
						<td><?=$s++;?></td>
					<td><?=$row->portfolio_name;?></td>
					<td><?=$row->category;?></td>
					<td>
					<img src="<?=base_url('assets/');?><?=$row->portfolio_img;?>" style="width:100px;height: px">
					</td>
					<td>
						<?=$row->portfolio_details;?>
					</td>
					<td>
					<button onClick="change_work(this.value);" class="btn btn-sm btn-warning" value="<?=$row->portfolio_id;?>"  data-toggle="modal" data-target="#edit_services">Change</button>
						<a href="#"><i class="glyphicon glyphicon-trash"></i></a>
					</td>

					<?php endforeach;?>


				</div>
				</div> 
				</div>
				</div>
			</div>
		</div>
	<div id="add_project" class="modal fade" tabindex="-1" role="dialog" style="display: none;">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header"> Add Work
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
								
							</div>
							<div class="modal-body">
								<form method="post" enctype="multipart/form-data" class="panel form-horizontal" action="<?=base_url('Admin/add_project');?>">
									<div class="panel-body">
										<div class="row">
											<div class="col-md-4">
												<select class="form-control" name="cat_id">
													<option>select category</option>
													<?php foreach($cat as $row){?>
													<option value="<?=$row->cat_id;?>">
													<?=$row->category;?>
													</option>
													<?php }?>
												</select>
											</div>
											<div class="col-md-4">
												<input type="text" name="name" placeholder="category name" class="form-control form-group-margin">
											</div>
											<div class="col-md-4">
												<input type="file" name="file"  class="form-control form-group-margin">
											</div>
										</div><!-- row -->
										<textarea name="work" class="form-control" rows="5" placeholder="Work Details......"></textarea>
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
			
			$.post("<?=base_url('admin/change_work');?>",{val:val},function(data){
				
					$('#data3').html(data);
				   });
		}
</script>	
		