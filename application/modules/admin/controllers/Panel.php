<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//use Dompdf\Dompdf;
use chillerlan\QRCode\QRCode;

/**
 * Admin Panel management, includes: 
 * 	- Admin Users CRUD
 * 	- Admin User Groups CRUD
 * 	- Admin User Reset Password
 * 	- Account Settings (for login user)
 */
class Panel extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_builder');
	}

	// Admin Users CRUD
	public function admin_user()
	{
		$crud = $this->generate_crud('admin_users');
		$crud->columns('groups', 'username', 'first_name', 'last_name', 'active');
		$this->unset_crud_fields('ip_address', 'last_login');

		// cannot change Admin User groups once created
		if ($crud->getState()=='list')
		{
			$crud->set_relation_n_n('groups', 'admin_users_groups', 'admin_groups', 'user_id', 'group_id', 'name');
		}

		// only webmaster can reset Admin User password
		if ( $this->ion_auth->in_group(array('webmaster', 'admin')) )
		{
			$crud->add_action('Reset Password', '', $this->mModule.'/panel/admin_user_reset_password', 'fa fa-repeat');
		}
		
		// disable direct create / delete Admin User
		$crud->unset_add();
		$crud->unset_delete();

		$this->mPageTitle = 'Admin Users';
		$this->render_crud();
	}

	// Create Admin User
	public function admin_user_create()
	{
		// (optional) only top-level admin user groups can create Admin User
		//$this->verify_auth(array('webmaster'));

		$form = $this->form_builder->create_form();

		if ($form->validate())
		{
			// passed validation
			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$additional_data = array(
				'first_name'	=> $this->input->post('first_name'),
				'last_name'		=> $this->input->post('last_name'),
			);
			$groups = $this->input->post('groups');

			// create user (default group as "members")
			$user = $this->ion_auth->register($username, $password, $email, $additional_data, $groups);
			if ($user)
			{
				// success
				$messages = $this->ion_auth->messages();
				$this->system_message->set_success($messages);
			}
			else
			{
				// failed
				$errors = $this->ion_auth->errors();
				$this->system_message->set_error($errors);
			}
			refresh();
		}

		$groups = $this->ion_auth->groups()->result();
		unset($groups[0]);	// disable creation of "webmaster" account
		$this->mViewData['groups'] = $groups;
		$this->mPageTitle = 'Create Admin User';

		$this->mViewData['form'] = $form;
		$this->render('panel/admin_user_create');
	}

	// Admin User Groups CRUD
	public function admin_user_group()
	{
		$crud = $this->generate_crud('admin_groups');
		$this->mPageTitle = 'Admin User Groups';
		$this->render_crud();
	}
	
	// Admin User Groups CRUD
	public function pdf_gen()
	{
		$crud = $this->generate_crud('ins_lists');
		$crud->set_subject('Insurance');
		//$crud->add_action('Photos', '', '','ui-icon-image',array($this,'view_pdf'));
		//$crud->add_action('Photos', '', '','fa fa-repeat',array($this,'view_pdf'));
		$crud->field_type('destination','dropdown',
            array(
				'SULTANATE OF OMAN' => 'SULTANATE OF OMAN', 
				'KINGDOM OF SAUDI ARABIA' => 'KINGDOM OF SAUDI ARABIA',
				'UNITED ARAB EMIRATES' => 'UNITED ARAB EMIRATES' , 
				'KINGDOM OF BAHRAIN' => 'KINGDOM OF BAHRAIN' , 
				'STATE OF QATAR' => 'STATE OF QATAR' , 
				'STATE OF KUWAIT' => 'STATE OF KUWAIT' , 
				'STATE OF MALAYSIA' => 'STATE OF MALAYSIA' , 
				'STATE OF ROMANIA' => 'STATE OF ROMANIA'
			));
		//$crud->field_type('home_country', 'readonly');
		$crud->field_type('date','invisible');
		$crud->field_type('policy_no','invisible');
		$crud->callback_before_insert(array($this,'policy_no_callback'));
		$crud->add_action('More', '', $this->mModule.'/panel/view_pdf','fa fa-file-pdf-o');
		$this->mPageTitle = 'PDF Gen';
		$this->render_crud();
	}
	function policy_no_callback($post_array, $primary_key = null)
	{
		$query = $this->db->query("SELECT * FROM ins_lists ORDER BY id DESC LIMIT 1");
		$result = $query->result_array();
		if(isset($result[0]) && !empty($result[0]['policy_no'])){
			$post_array['policy_no'] = $result[0]['policy_no']+1;
		}else{
			$post_array['policy_no'] = 153000+1;
		}
		return $post_array;
	}
	public function view_pdf($row)
	{
		$this->load->model('ins_list');
		$data['ins_list'] = $this->ins_list->get($row);
		$this->load->library('pdf');
		$url = base_url().'admin/panel/view_pdf/'.$data['ins_list']->id;
		// quick and simple:
		$data['image'] = '<img src="'.(new QRCode)->render($url).'" alt="QR Code" />';
		$html = '<link rel="stylesheet" href="'.base_url().'assets/dist/frontend/bootstrap.min.css" />';
		$html .= $this->load->view('GeneratePdfView', $data, true);
		//echo $html;exit;
        $this->pdf->createPDF($html, str_replace(' ', '_', $data['ins_list']->full_name), false);
		print_r($html);
		exit;
	}

	// Admin User Reset password
	public function admin_user_reset_password($user_id)
	{
		// only top-level users can reset Admin User passwords
		$this->verify_auth(array('webmaster'));

		$form = $this->form_builder->create_form();
		if ($form->validate())
		{
			// pass validation
			$data = array('password' => $this->input->post('new_password'));
			if ($this->ion_auth->update($user_id, $data))
			{
				$messages = $this->ion_auth->messages();
				$this->system_message->set_success($messages);
			}
			else
			{
				$errors = $this->ion_auth->errors();
				$this->system_message->set_error($errors);
			}
			refresh();
		}

		$this->load->model('admin_user_model', 'admin_users');
		$target = $this->admin_users->get($user_id);
		$this->mViewData['target'] = $target;

		$this->mViewData['form'] = $form;
		$this->mPageTitle = 'Reset Admin User Password';
		$this->render('panel/admin_user_reset_password');
	}

	// Account Settings
	public function account()
	{
		// Update Info form
		$form1 = $this->form_builder->create_form($this->mModule.'/panel/account_update_info');
		$form1->set_rule_group('panel/account_update_info');
		$this->mViewData['form1'] = $form1;

		// Change Password form
		$form2 = $this->form_builder->create_form($this->mModule.'/panel/account_change_password');
		$form1->set_rule_group('panel/account_change_password');
		$this->mViewData['form2'] = $form2;

		$this->mPageTitle = "Account Settings";
		$this->render('panel/account');
	}

	// Submission of Update Info form
	public function account_update_info()
	{
		$data = $this->input->post();
		if ($this->ion_auth->update($this->mUser->id, $data))
		{
			$messages = $this->ion_auth->messages();
			$this->system_message->set_success($messages);
		}
		else
		{
			$errors = $this->ion_auth->errors();
			$this->system_message->set_error($errors);
		}

		redirect($this->mModule.'/panel/account');
	}

	// Submission of Change Password form
	public function account_change_password()
	{
		$data = array('password' => $this->input->post('new_password'));
		if ($this->ion_auth->update($this->mUser->id, $data))
		{
			$messages = $this->ion_auth->messages();
			$this->system_message->set_success($messages);
		}
		else
		{
			$errors = $this->ion_auth->errors();
			$this->system_message->set_error($errors);
		}

		redirect($this->mModule.'/panel/account');
	}
	
	/**
	 * Logout user
	 */
	public function logout()
	{
		$this->ion_auth->logout();
		redirect($this->mConfig['login_url']);
	}
}
