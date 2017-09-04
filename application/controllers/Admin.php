<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('My_model');
		$this->load->library('upload');
	}

	public function header()
	{
		$this->load->view('template/header');
	}
	public function footer()
	{
		$this->load->view('template/footer');
	}
	public function index()
	{
		//print_r($this->session->all_userdata()); exit;
		$data['slider'] = $this->My_model->select_any_table('slider');
		$data['about'] = $this->My_model->select_any_table('about_us'); //echo "<pre>".print_r($data); die;
		$data['services'] = $this->My_model->select_any_table('services');//echo "
		$data['max'] = $this->My_model->all_slider();
		//var_dump( $data['max']); die;
	
		$this->header();
		$this->load->view('template/body',$data);
		$this->footer();

	}
	///////////////////////////
	function projects()
	{
		
		$data['projects'] = $this->My_model->get_works(); //print_r($data); exit;
		$data['cat'] = $this->My_model->select_any_table('portfolio_category');
		$this->header();
		$this->load->view('template/admin2view',$data);
		$this->footer();
	}
	///////// testimonials /////////////////
	function testimonials()
	{
		$data['testimonial'] = $this->My_model->select_any_table('testimonials');
		$this->header();
		$this->load->view('template/testimonial',$data);
		$this->footer();
	}
		///////// teams /////////////////
	function team()
	{
		$data['team'] = $this->My_model->get_member();
		$this->header();
		$this->load->view('template/team',$data);
		$this->footer();
	}
	//////////////login ////////////////////
	public function login()
	{
		$this->load->view('pages/login');
	}
	/////////////////////////////////////
	public function user_auth()
	{
		extract($_POST); //print_r($_POST);
		//$pass = 'superadmin';
		//$user = 'superadmin';
		$data['users'] = $this->My_model->check_user(array('USER_NAME' => $signin_username),array('U_PASSWORD' => md5($signin_password))); //print_r($data); die;
		if($data['users'] == true)
		 {

			$this->session->set_flashdata('error_msg','<div class="alert alert-danger alert-dark">Wrong Username Or Password!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button></div>');
			redirect('Admin/login');
			
		}else{
			$this->session->set_userdata('user',$signin_username);
		redirect('admin');
			
		}
		

	}
	////////////////////// Create Invoice ///////////////////
	public function change_slider()
	{
		extract($_POST); //print_r($_POST);
		$data['slider'] = $this->My_model->select_any_table('slider',array('slider_id' => $val)); 
		$output = "";
			
			foreach($data['slider'] as $row){
									echo '<form method = "post" class="form-inline" action  ="'.base_url().'Admin/change_slider_img" enctype="multipart/form-data">';
					
								$output .= '<img src="'.base_url('assets/').$row->slider_img.'" class= "img" width="800" height="480">';
								echo '<input type="hidden" value="'.$row->slider_img.'" name="slider_img">';
								echo '<input type="hidden" value="'.$val.'" name="id">';
								echo '<input type="file" class="form-control" name="file"><button
											class="btn btn-warning" type="submit" >Change ? </button><br><br>';
								echo '</form>';
								
					
			}
		
		echo $output; 
		//var_dump($output);

	}
	///////////////////////////////////////////
	function change_slider_img()
	{
		extract($_POST); extract($_FILES); //print_r($_POST); die();
		$uploaddir = "./assets/images/";
		$img_file = $_FILES['file']['name'];
		$filename = 'images/'.$img_file;
		$data_upload = $uploaddir .basename($img_file); //echo($data_upload); die();
		if (move_uploaded_file($_FILES['file']['tmp_name'], $data_upload)) 
		{
			$delete_old_one = './assets/'.$slider_img;
			if(unlink($delete_old_one)) 
			{
				$this->My_model->update_any_table('slider',array('slider_img' => $filename),array('slider_id' => $id));
				$this->session->set_flashdata('msg','<div class= "alert alert-warning">Slider updated Successfully</div>');
				redirect('Admin');
			}
		}
	}
	////////////// Add Slider ///////////////////////
	function add_slider()
	{
		extract($_POST);
		extract($_FILES);
		$uploaddir = "./assets/images/";
		$img_file = $_FILES['file']['name'];
		$filename = 'images/'.$img_file;
		$data_upload = $uploaddir .basename($img_file); //echo($data_upload); die();
		if (move_uploaded_file($_FILES['file']['tmp_name'], $data_upload)) 
		{
				$this->My_model->insert_data('slider',array('slider_img' => $filename));
				$this->session->set_flashdata('msg','<div class= "alert alert-success">Slider Added Successfully</div>');
				redirect('Admin');
		}
	}
	////////// Delete slider //////////////
	function delete_slider($id)
	{
		$data['slider'] = $this->My_model->select_any_row('slider',array('slider_id' => $id));
		$delete_old_one = 'assets/'.$data['slider']->slider_img;
			if(unlink($delete_old_one)) 
			{
				$this->My_model->delete_any_row('slider',array('slider_id' => $id));
				$this->session->set_flashdata('msg','<div class= "alert alert-danger">Slider Deleted Successfully</div>');
				redirect('Admin');
			}
	}
	///////// Change about us /////////////
	public function change_about()
	{
		extract($_POST); //print_r($_POST);
		$data['about'] = $this->My_model->select_any_table('about_us',array('about_us_id' => $val)); 
		$output = "";
			
		foreach($data['about'] as $row){
		echo'  <form method = "post" class="form" action  ="'.base_url().'Admin/change_about_us" enctype="multipart/form-data">';
		
			echo '<table class="table"><tr><td> ';
					echo '<label>Company Name</label>
							<input type="text" value="'.$row->company_name.'" name="company">
							</td>
							</tr>';
							echo '<tr>
							<td>
							<label>Company Description</label>
							<textarea colspan="4" class="form-control" name="details">'.$row->company_details.'</textarea>';
							echo '<input type="hidden" value="'.$val.'" name="id" class="form-control">';
							
							
							echo '<button class="btn btn-warning pull-left" type="submit" >Save Changes </button><br><br>';
							echo '
							</td>
							</tr>
							</table></form>';


			}
		
	}
	///////////////// change_about_us ///////////////
	function change_about_us()
	{
		extract($_POST); //print_r($_POST);
		$this->My_model->update_any_table('about_us',array('company_name' => $company,'company_details' => $details),array('about_us_id'=> $id));
		$this->session->set_flashdata('msg2','<div class= "alert alert-success">Data Updated Successfully</div>');
				redirect('Admin');
	}
	//////////////// edit_services //////////////////
	function change_service()
	{
		extract($_POST); //print_r($_POST); exit;
		$data['services'] = $this->My_model->select_any_table('services',array('services_id' => $val)); 
		foreach($data['services'] as $row){
		echo'  <form method = "post" class="form" action="'.base_url().'Admin/change_services_data" enctype="multipart/form-data">';
		
			echo '<table class="table"><tr><td> ';
					echo '<label>Services</label>
							<input type="text" value="'.$row->services.'" name="services">
							</td>
							</tr>';
					echo '<tr>
							<td>
							<label>Service Description</label>
							<textarea colspan="4" class="form-control" name="details">'.$row->services_details.'</textarea>';
					echo '<input type="hidden" value="'.$val.'" name="id" class="form-control">';
					echo '<button class="btn btn-warning pull-left" type="submit" >Save Changes </button><br><br>';
					echo '
							</td>
							</tr>
							</table></form>';


			}
		
	}
	///////////////////// update db about us //////////
	
	function change_services_data()
	{
		extract($_POST); 
		$this->My_model->update_any_table('services',array('services' => $services,'services_details' => $details),array('services_id'=> $id));
		$this->session->set_flashdata('msg3','<div class= "alert alert-success">Data Updated Successfully</div>');
				redirect('Admin');
	}
	////////////// add_project ////////////
	function add_project()
	{
		extract($_POST); extract($_FILES);
		$uploaddir = "./assets/images/recent_work/";
		$img_file = $_FILES['file']['name'];
		$data_upload = $uploaddir .basename($img_file); //echo($data_upload); die();
		if (move_uploaded_file($_FILES['file']['tmp_name'], $data_upload)) 
		{
			//echo 'uploaded'; die;
			$pic = 'images/recent_work/'.$img_file;
			$data = array(
			'portfolio_name' => $name,
			'cat_id'		=>	$cat_id,
			'portfolio_img'	=> $pic,
			'portfolio_details' => $work);
			$this->My_model->insert_data('portfolio',$data);
			$this->session->set_flashdata('msg','<div class= "alert alert-success">Data Added Successfully</div>');
			redirect('Admin/projects');
		}else echo('error');
	}
	//////// change_work //////////////////
	function change_work()
	{
		extract($_POST); //print_r($_POST); exit;
		$data['services'] = $this->My_model->get_works_single($val); 
		$data['cat'] = $this->My_model->select_any_table('portfolio_category'); 
		foreach($data['services'] as $row){
			echo '<div class="modal-body">
								<form method="post" enctype="multipart/form-data" class="panel form-horizontal" action="'.base_url('Admin/update_project').'">
									<div class="panel-body">
										<div class="row">
											<div class="col-md-4">
												<select class="form-control" name="cat_id">
													';
											echo    '<option class="bg-info" value="'.$row->cat_id.'">'.
													$row->category.'
													</option>';
													foreach($data['cat'] as $cat){
											echo    '<option value="'.$cat->cat_id.'">'.
													$cat->category.'
													</option>';
													 }
											echo	'</select>
											</div>
											<div class="col-md-4">
												<input type="text" name="name" placeholder="category name" value ="'.$row->portfolio_name.'" class="form-control form-group-margin">
											</div>
											<div class="col-md-1">
												<img class="img" src="'.base_url('assets/').$row->portfolio_img.'" width ="50px" hieght="50px">
											</div>
											<div class="col-md-3">
												<input  type="file" name="file"  class="form-control form-group-margin">
											</div>
										</div><!-- row -->
										<input type="hidden" value="'.$val.'" name = "id">
										<input type="hidden" value="'.$row->portfolio_img.'" name="slider_img">
										<textarea name="work" class="form-control" rows="5" >'.$row->portfolio_details.'</textarea>
									</div>
									<div class="panel-footer text-right">
										<button class="btn btn-primary">Save</button>
									</div>
							
								</form>
							</div>';

			}
	}
	////////// update_project ///////////////
	function update_project()
	{
		extract($_POST); extract($_FILES); //print_r($_POST); die();
		$uploaddir = "./assets/images/recent_work/";
		$img_file = $_FILES['file']['name'];
		$filename = 'images/recent_work/'.$img_file;
		$data_upload = $uploaddir .basename($img_file); //echo($data_upload); die();
		if (move_uploaded_file($_FILES['file']['tmp_name'], $data_upload)) 
		{
			$delete_old_one = './assets/'.$slider_img;
			if(unlink($delete_old_one)) 
			{
				$this->My_model->update_any_table('portfolio',array('portfolio_img' => $filename,'portfolio_details' => $work,'portfolio_name' => $work ),array('portfolio_id' => $id));
				$this->session->set_flashdata('msg','<div class= "alert alert-warning">Data updated Successfully</div>');
				redirect('Admin/projects');
			}
		}
	}

	////////////////    ////////////
	function edit_testimonials()
	{
		extract($_POST); //var_dump($_POST); //echo 'hhhhhhhhhhh'.$val; die('ddddddddd'); 
		$data['testimonials'] = $this->My_model->select_any_table('testimonials',array('testimonials_id' => $val)); 
		foreach($data['testimonials'] as $row){
			echo '<div class="modal-body">
								<form method="post" enctype="multipart/form-data" class="panel form-horizontal" action="'.base_url('Admin/update_testimonials').'">
									<div class="panel-body">
										<div class="row">
											
											<div class="col-md-4">
												<input type="text" name="name" placeholder="category name" value ="'.$row->testimonials_name.'" class="form-control form-group-margin">
											</div>
											<div class="col-md-4">
												<img class="img img-thumbnail" src="'.base_url('assets/').$row->testimonials_pic.'" width ="80px" hieght="80px">
											</div>
											<div class="col-md-4">
												<input  type="file" name="file"  class="form-control form-group-margin">
											</div>
										</div><!-- row -->
										<input type="hidden" value="'.$val.'" name = "id">
										<input type="hidden" value="'.$row->testimonials_pic.'" name="slider_img">
										<textarea name="work" class="form-control" rows="5" >'.$row->testimonials_details.'</textarea>
									</div>
									<div class="panel-footer text-right">
										<button class="btn btn-primary">Save Changes</button>
									</div>
							
								</form>
							</div>';

			}

	}
	///////// update_testimonials ////////////
	function update_testimonials()
	{
		extract($_POST); extract($_FILES); ///print_r($_POST); die();
		$uploaddir = "./assets/images/";
		$img_file = $_FILES['file']['name'];
		$filename = 'images/'.$img_file;
		$data_upload = $uploaddir .basename($img_file); //echo($data_upload); die();
		if (move_uploaded_file($_FILES['file']['tmp_name'], $data_upload)) 
		{
			$delete_old_one = './assets/'.$slider_img;
			if(unlink($delete_old_one)) 
			{
				$this->My_model->update_any_table('testimonials',array('testimonials_pic' => $filename,'testimonials_details' => $work,'testimonials_name' => $name ),array('testimonials_id' => $id));
				$this->session->set_flashdata('msg','<div class= "alert alert-warning">Data updated Successfully</div>');
				redirect('Admin/projects');
			}
		}
	}
	//////////// add_testimonials ////////
	function add_testimonials()
	{
		extract($_POST); extract($_FILES); ///print_r($_POST); die();
		$uploaddir = "./assets/images/";
		$img_file = $_FILES['file']['name'];
		$filename = 'images/'.$img_file;
		$data_upload = $uploaddir .basename($img_file); //echo($data_upload); die();
		$data = array(
			'testimonials_pic' => $filename,
			'testimonials_details' => $work,
			'testimonials_name' => $name ); //print_r($data); exit;
		if (move_uploaded_file($_FILES['file']['tmp_name'], $data_upload)) 
		{
		
				$this->My_model->insert_data('testimonials',$data);
				$this->session->set_flashdata('msg','<div class= "alert alert-warning">Data updated Successfully</div>');
				//redirect('Admin/projects');
			
		}
	}
	
	///////////add_members.////////////
	function add_members()
	{
		extract($_POST); extract($_FILES); //print_r($_POST); //print_r($_FILES); die();
		
		$member_id=$this->My_model->select_query('SELECT * FROM `team` ORDER BY `team`.`member_id` DESC LIMIT 1')->member_id; //echo($member_id); die();
		$uploaddir = "./assets/images/";
		$img_file = $_FILES['file']['name'];
		$data_upload = $uploaddir .basename($img_file); //echo($data_upload); die();
		if (move_uploaded_file($_FILES['file']['tmp_name'], $data_upload)) 
		{
			//echo 'uploaded'; die;
			$pic = 'images/'.$img_file;
			$data['members'] = array(
				'member_name' => $name,
				'member_id' => $member_id+1,
				'member_details' => $work,
				'member_designation' => $designation,
				'member_pic' => $pic
			);
			$data['social'] = array(
			'fb'		=>	$fb,
			'twiter_link'	=> $twitter,
			'linkedin' => $linkedin,
			'gplus'   => $gplus,
			'member_id' => $member_id+1);
			$this->My_model->insert_data('team',$data['members']);
			$this->My_model->insert_data('social_links',$data['social']);
			$this->session->set_flashdata('msg','<div class= "alert alert-success">Data Added Successfully</div>');
			redirect('Admin/team');
		}else echo('error');
	}
	////////////  edit_member ////
	function edit_member()
	{
		extract($_POST);
		$data['member'] = $this->My_model->get_member_data($val);
		foreach($data['member'] as $row){
		echo '<div class="modal-body">
								<form method="post" enctype="multipart/form-data" class="panel form-horizontal" action="'.base_url("Admin/update_members").'">
									<div class="panel-body">
										<div class="row">
											
											<div class="col-md-3">
												<input type="text" name="name" value="'.$row->member_name.'" class="form-control form-group-margin">
											</div>
											<div class="col-md-3">
												<input type="text" name="designation" value="'.$row->member_designation.'" class="form-control form-group-margin">
											</div>
											<div class="col-md-1">
												<img src="'.base_url('assets/').$row->member_pic.'" class="img img-responsive" width="80px" width="80px">
											</div>
											<div class="col-md-3">
												<input type="file" name="file"  class="form-control form-group-margin">
											</div>
										</div><!-- row -->
										<div class="row">
											
											<div class="col-md-3">
												<input type="text" name="linkedin" value="'.$row->linkedin.'" class="form-control form-group-margin">
											</div>
											<div class="col-md-3">
												<input type="tex" name="fb"  class="form-control form-group-margin" value="'.$row->fb.'">
											</div>
											<div class="col-md-3">
												<input type="text" name="twitter"  class="form-control form-group-margin"value="'.$row->twiter_link.'">
											</div>
											<div class="col-md-3">
												<input type="text" name="gplus"  class="form-control form-group-margin" value="'.$row->gplus.'">
											</div>
										</div>
										<textarea name="work" class="form-control" rows="5">
											'.$row->member_details.'
										</textarea>
									</div>
									<div class="panel-footer text-right">
									<input type="hidden" value="'.$row->member_id.'" name="val">
									<input type="hidden" value="'.$row->member_pic.'" name="old_pic">
										<button class="btn btn-primary">Save</button>
									</div>
							
								</form>
							</div>';
		}
	}
	/////////////////  update_members /////////
	function update_members()
	{
		extract($_POST); extract($_FILES); ///print_r($_POST); die();
		$uploaddir = "./assets/images/";
		$img_file = $_FILES['file']['name'];
		$filename = 'images/'.$img_file;
		$data_upload = $uploaddir .basename($img_file); //echo($data_upload); die();
		if (move_uploaded_file($_FILES['file']['tmp_name'], $data_upload)) 
		{
			$delete_old_one = './assets/'.$old_pic;
			if(unlink($delete_old_one)) 
			{
				$pic = 'images/'.$img_file;
			$data['members'] = array(
				'member_name' => $name,
				'member_details' => $work,
				'member_designation' => $designation,
				'member_pic' => $pic
			);
			$data['social'] = array(
			'fb'		=>	$fb,
			'twiter_link'	=> $twitter,
			'linkedin' => $linkedin,
			'gplus'   => $gplus,
			);
			$this->My_model->update_any_table('team',$data['members'],array('member_id'=>$val));
			$this->My_model->update_any_table('social_links',$data['social'],array('member_id'=>$val));
			$this->session->set_flashdata('msg','<div class= "alert alert-success">Data Updated Successfully</div>');
				redirect('Admin/team');
			}
		}
	}
 	//////////////////////logout ////////////////////////////
	public function logout()
	{
	$this->session->sess_destroy();
	redirect('admin/login');
	}
}
