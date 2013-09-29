<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Summary extends CI_Controller {

	/**
	 * Show module controller.
	 */
	public function index($id)
	{
		
		$this->output->enable_profiler(TRUE);
		
		# Load Admin Initialization Model
		$this->load->model('admin_init');
		$this->load->model('tabs');
		$this->load->model('orders_m' , 'orders');
		
		$this->orders->Order_ID = $id;
		# Load Admin Language File
		$this->lang->load('users', $this->admin_init->Admin_Language);
		
		# Load Page Title From Language File
		$page_title = $this->lang->line('show_search_users');
		
		# Check Admin Already Logged In 
		if( $this->admin_init->Admin_Logged_In() )
		{
			# Load Header Template
			$this->admin_init->show_header($page_title);	
			
			# Check Admin Have Enough Permission
			if( $this->admin_init->Have_Permission() )
			{
				$query = $this->db->get_where('orders', array('id' => $id));
				$invoice = $query->row();
				
				$data = $invoice;
				
				$this->form_validation->set_rules('desc','desc', '');
				
				
				if ($this->form_validation->run() == FALSE)
				{

					$data = $this->orders->show($id);
					# Load SHOW USERS Template
					$this->load->view('admin/summary', $data); 
				}
				else
				{
					if( isset($_POST['action']) )
					{
						switch($_POST['action'])
						{
							case 'cancel':
								$this->orders->cancel($id);
								break;
								
							case 'accept':
								$this->orders->accept($id);
								break;
							
							case 'pending':
								$this->orders->pending($id);
								break;
						}
						
					}
					
			
				
					
					
					
					# Show Success Page
					//$this->admin_init->Show_Success_Page($this->lang->line('edit_post_success'), base_url().'admin/orders/summary/'.$id);
				}
			}
			else
			{
				# Show Error
				$this->admin_init->Show_Access_Is_Denied();
			}
			
			# Load Footer Template
			$this->admin_init->show_footer();
		}
		else
		{
			# Redirect To Login Page
			$this->admin_init->Redirect('admin/login');
		}
	
	}
	
}
