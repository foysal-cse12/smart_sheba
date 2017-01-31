<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	public $user = null;
	public function __construct()
	{
		parent::__construct();
		parse_str($_SERVER['QUERY_STRING'],$_REQUEST);
		$this->load->library('facebook',array("appId"=>'567898973416101',"secret"=>'bd9bc31082721001df7e2caed5704cc8'));
		$this->user = $this->facebook->getUser();
		$this->load->model('home_model');
		$this->load->library('form_validation');
		$this->load->library('pagination');
		$this->load->helper('text');
		
	}



	public function index()
	{		
		$this->load->view('index');
	}

	public function add_post_product($i)
	{
       if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['password'] = $session_data['password'];
			$result = $this->home_model->login($data);
			if($result!=FALSE)
			{
				 if($result['type']=='client')
					{
						redirect('home/add_product','refresh');
						
					}
				else if($result['type']=='g_client')
					{
						redirect('home/add_product_general','refresh');
						
					}
				 else if($result['type']=='admin')
					{
						redirect('home/add_product_admin','refresh');
						
					}
					else
					{
						$error['msg']="Invalid Type ";
						$error['k']=0;
					    $this->load->view('view_login',$error);
					}
			}
			
		}
		else
		{
			$this->login($i);
			//$this->load->view('view_login');

		}
	}


	public function add_post_information($i)
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['password'] = $session_data['password'];
			$result = $this->home_model->login($data);
			if($result!=FALSE)
			{
				 if($result['type']=='client')
					{
						redirect('home/add_information','refresh');
						
					}
				else if($result['type']=='g_client')
					{
						//redirect('home/general_client','refresh');
						$this->load->view('warning');
						
					}
				 else if($result['type']=='admin')
					{
						redirect('home/add_information_admin','refresh');
						
					}
					else
					{
						$error['msg']="Invalid Type ";
						$error['k']=0;
					    $this->load->view('view_login',$error);
					}
			}
			
		}
		else
		{
			$this->login($i);
			//$this->load->view('view_login');

		}
		
	}

	public function add_post_academy($i)
	{

		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['password'] = $session_data['password'];
			$result = $this->home_model->login($data);
			if($result!=FALSE)
			{
				 if($result['type']=='client')
					{
						redirect('home/create_academy','refresh');
						
					}
				else if($result['type']=='g_client')
					{
						//redirect('home/general_client','refresh');
						$this->load->view('warning');
						
					}
				 else if($result['type']=='admin')
					{
						redirect('home/create_academy_admin','refresh');
						
					}
					else
					{
						$error['msg']="Invalid Type ";
						$error['k']=0;
					    $this->load->view('view_login',$error);
					}
			}
			
		}
		else
		{
			$this->login($i);
			//$this->load->view('view_login');

		}
		
	}





	public function shop()
	{
		//$config['base_url'] = "http://localhost/smart_sheba/home/shop";
		$config['base_url'] = "/smart_sheba/home/shop";
		$config['per_page'] = 12;
	    $config['num_links'] = 5;
		$config["uri_segment"] = 3;
		$config['total_rows'] = $this->home_model->all_product_pagination();

        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		$this->pagination->initialize($config);
		$product['list'] = $this->home_model->all_product( $config['per_page'],$page);
		$product['links'] = $this->pagination->create_links();
		$this->parser->parse('shop',$product);
	}


	public function specific_product($category)//$category
	{
	
		$config['base_url'] = "/smart_sheba/home/specific_product/$category";
		$config['per_page'] = 12;
		$config['num_links'] = 5;
	    $config["uri_segment"] = 4;
	    $config['total_rows'] = $this->home_model->specific_product_pagination($category);

	    //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

	    $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

        $this->pagination->initialize($config);
	    $specific_product['list'] = $this->home_model->specific_product($category,$config['per_page'],$page);
		$specific_product['links'] = $this->pagination->create_links();
		$this->parser->parse('view_specific _category',$specific_product);

	}


	public function specific_info_with_loc()
	{
		if($this->input->get_post('submit'))
		{
			$category= $this->input->get_post('category');
			$location= $this->input->get_post('location');
			return redirect('home/specific_info_with_loc_data/'.$category.'/'.$location);


		}
	}

	public function specific_info_with_loc_data($category,$location)
	{
	
		   $config['base_url'] = "/smart_sheba/home/specific_info_with_loc_data/$category/$location";
			$config['per_page'] = 12;
			$config['num_links'] = 5;
		    $config["uri_segment"] = 5;
		    $config['total_rows'] = $this->home_model->specific_info_with_loc_pagination($category,$location);
		    //echo "num of rows: ".$config['total_rows'];
	        $config['full_tag_open'] = '<ul class="pagination">';
	        $config['full_tag_close'] = '</ul>';
	        $config['first_link'] = false;
	        $config['last_link'] = false;
	        $config['first_tag_open'] = '<li>';
	        $config['first_tag_close'] = '</li>';
	        $config['prev_link'] = '&laquo';
	        $config['prev_tag_open'] = '<li class="prev">';
	        $config['prev_tag_close'] = '</li>';
	        $config['next_link'] = '&raquo';
	        $config['next_tag_open'] = '<li>';
	        $config['next_tag_close'] = '</li>';
	        $config['last_tag_open'] = '<li>';
	        $config['last_tag_close'] = '</li>';
	        $config['cur_tag_open'] = '<li class="active"><a href="#">';
	        $config['cur_tag_close'] = '</a></li>';
	        $config['num_tag_open'] = '<li>';
	        $config['num_tag_close'] = '</li>';

		    $page = ($this->uri->segment(5)) ? $this->uri->segment(5) : 0;

	        $this->pagination->initialize($config);
		    $specific_product['list'] = $this->home_model->specific_info_with_loc($category,$location,$config['per_page'],$page);
			$specific_product['links'] = $this->pagination->create_links();
			$this->parser->parse('view_specific_category_information_with_loc',$specific_product);

	}



	public function specific_information($category)
	{

		$config['base_url'] = "/smart_sheba/home/specific_information/$category";
		$config['per_page'] = 12;
		$config['num_links'] = 5;
	    $config["uri_segment"] = 4;
	    $config['total_rows'] = $this->home_model->specific_information_pagination($category);

	    //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';


	    $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

        $this->pagination->initialize($config);
	    $specific_product['list'] = $this->home_model->specific_information($category,$config['per_page'],$page);
		$specific_product['links'] = $this->pagination->create_links();
		$this->parser->parse('view_specific_category_information',$specific_product);

	}


	public function information_contact($id)
	{
       //echo "information id: ".$id;
		$information = $this->home_model->individual_information_details($id);
		$this->parser->parse('information_contact_email',$information);
	}

	public function information_contact_email_send()
	{
		if($this->input->get_post('submit'))
		{
             $data['name'] = $this->input->get_post('name');
             $data['email'] = $this->input->get_post('email');
             $data['c_email'] = $this->input->get_post('c_email');
             $data['message'] = $this->input->get_post('message');
             $data['phone'] = $this->input->get_post('phone');

             /*echo "name: ".$data['name']."<br>";
             echo "email: ".$data['email']."<br>";
             echo "c_email: ".$data['c_email']."<br>";
             echo "message: ".$data['message']."<br>";
             echo "phone: ".$data['phone']."<br>";*/

            $seconde = $data['c_email'];

			$this->email->from($data['email'],$data['name']);
			$this->email->to("admin@smartsheba.com");
			$this->email->subject("Message from viewers");
			$this->email->message('Hello Sir/Madam, A customer named  '.$data['name'].' Contact no : '.$data['phone'].'. Email : '. $data['email']. 'has left the following message to you : '.$data['message']);


			//$to =  "esanalok@gmail.com";
			$subject = "Message from customer";
			$message= 'Hello Sir/Madam, A customer named  '.$data['name'].' Contact no : '.$data['mobile'].'. Email : '. $data['email']. 'has left the following message to you :  '.$data['message'];
			$headers = " ";
			mail($seconde  , $subject, $message, $headers);


			if($this->email->send())
			{
				//$data['msg'] = "email send successfully";
				$this->information();
			}
			else
			{
				$data['msg'] = "error in sending email";
				//$this->parser->parse('information_contact_email',$data);
				echo $data['msg'];
			}


		}
	}





	public function single_product($id,$client_id)
	{
		/*echo $id;
		echo $client_id;*/
		$product= $this->home_model->individual_product_details($id);
		$image = $this->home_model->client_image($client_id);
		$data = $product+$image ;
		$this->parser->parse('single_product',$data);
	
	}

	public function add_to_cart()
	{
		//echo $id;
		if($this->input->get_post('submit'))
		{
			//$this->form_validation->set_rules('quantity','Quantity','trim|requir');
			$data['id'] = $this->input->get_post('id');
			$data['qnty'] = $this->input->get_post('quantity');
			$data['price'] = $this->input->get_post('price');
			$data['total'] = $data['qnty']*$data['price'];
			$product= $this->home_model->individual_product_details($data['id']);
			$data = $data+$product;
		    $this->parser->parse('add_to_cart',$data);

		}
	}

	public function product_order_data()
	{
		if($this->input->get_post('submit'))
		{
          	$data['fullname'] = $this->input->get_post('fullname');
          	$data['address'] = $this->input->get_post('address');
          	$data['city'] = $this->input->get_post('city');
          	$data['zip_code'] = $this->input->get_post('zip_code');
          	$data['mobile'] = $this->input->get_post('mobile');
          	$data['email'] = $this->input->get_post('email');
          	$data['quantity'] = $this->input->get_post('quantity');
          	$data['total'] = $this->input->get_post('total');
          	$data['c_email'] = $this->input->get_post('c_email');

            $seconde = $data['c_email'];
			$this->email->from($data['email'],$data['fullname']);
			$this->email->to("admin@smartsheba.com");
			$this->email->subject("Message from customer");
			$this->email->message('Hello Sir/Madam, A customer named  '.$data['fullname'].' is order '.$data['quantity'].' pieces of product which you publish in smart_sheba.com recently. The total price is '.$data['total'].'. Address of the customer is '.$data['address'].'. City :'.$data['city'].'. Contact no : '.$data['mobile'].'. Email : '. $data['email']);

			$to =  "esanalok@gmail.com";
			$subject = "Message from customer";
			$message= 'Hello Sir/Madam, A customer named  '.$data['fullname'].' is order '.$data['quantity'].' pieces of product which you publish in smart_sheba.com recently. The total price is '.$data['total'].'. Address of the customer is '.$data['address'].'. City :'.$data['city'].'. Contact no : '.$data['mobile'].'. Email : '. $data['email'];
			$headers = " ";
			mail($seconde  , $subject, $message, $headers);


			if($this->email->send())
			{
				//$data['msg'] = "email send successfully";
				$this->shop();
			}
			else
			{
				$data['msg'] = "error in sending email";
				echo $data['msg'];
			}
          
		}
		else
		{

		}
	}

	public function success()
	{
		//$this->load->view('Dashboard/success');
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$result = $this->home_model->check_type($data);
			if($result['type'] =='admin')
			{
				redirect('home/success_admin','refresh');

			}
			else if($result['type'] =='client')
			{
				//$this->load->view('Dashboard/success');
				redirect('home/success_client','refresh');

			}
			else if($result['type'] =='g_client')
			{
				//$this->load->view('Dashboard/success');
				redirect('home/success_client_general','refresh');

			}
			else
			{
				//$this->load->view('Dashboard_admin/success');
				
			}
			
		}
		else
		{
			$this->login($j);
		}
	}

	public function success_client()
	{
       $this->load->view('Dashboard/success');
	}

	public function success_client_general()
	{
       $this->load->view('Dashboard_general/success');
	}

	public function success_admin()
	{
		$this->load->view('Dashboard_admin/success');
	}

	public function information()
	{
		//echo " information coming soon";
		//$config['base_url'] = "http://localhost/smart_sheba/home/information";
		$config['base_url'] = "/smart_sheba/home/information";
		$config['per_page'] = 12;
		$config['num_links'] = 5;
	    $config["uri_segment"] = 3;
		$config['total_rows'] = $this->home_model->all_information_pagination();


//config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';


		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		$this->pagination->initialize($config);
		$information['list'] = $this->home_model->all_information( $config['per_page'],$page);
		$information['links'] = $this->pagination->create_links();

		$this->parser->parse('information',$information);
	}

	public function single_info($id)
	{
		$information = $this->home_model->individual_information_details($id);
		$this->parser->parse('single_info',$information);
	}

	public function member()
	{

		$config['base_url'] = "/smart_sheba/home/member";
	    $config['per_page'] = 12;
		$config['num_links'] = 5;
	    $config["uri_segment"] = 3;
	    $config['total_rows'] = $this->home_model->all_member_pagination();

	    $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;



		$this->pagination->initialize($config);
		$member['list'] = $this->home_model->all_member( $config['per_page'],$page);
		$member['links'] = $this->pagination->create_links();
		$this->parser->parse('member',$member);
	}

	public function view_profile_member($id)
	{
		//echo "coming soon ".$id;

		$result = $this->home_model->specific_client_info($id);
		$this->parser->parse('client_profile',$result);

	}

	public function shop_discount()
	{

		$config['base_url'] = "/smart_sheba/home/shop_discount";
		$config['per_page'] = 12;
		$config['num_links'] = 5;
	    $config["uri_segment"] = 3;
		$config['total_rows'] = $this->home_model->all_product_discount_pagination();



        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
     

		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;



		$this->pagination->initialize($config);
		$discount['list'] = $this->home_model->all_product_discount( $config['per_page'],$page);
		$discount['links'] = $this->pagination->create_links();
		$this->parser->parse('shop_discount',$discount);
		//$this->load->view('shop_discount',$discount);

	}

	public function specific_product_discount($category)
	{

		$config['base_url'] = "/smart_sheba/home/specific_product_discount/$category";
		$config['per_page'] = 12;
		$config['num_links'] = 5;
	    $config["uri_segment"] = 4;
	    $config['total_rows'] = $this->home_model->specific_product_discount_pagination($category);

        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
 

	    $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

        $this->pagination->initialize($config);
	    $specific_product_discount['list'] = $this->home_model->specific_product_discount($category,$config['per_page'],$page);
		$specific_product_discount['links'] = $this->pagination->create_links();
		$this->parser->parse('view_specific _category_discount',$specific_product_discount);

	}

	public function about_us()
	{
		$this->parser->parse('about',array());

	}

	public function academy()
	{

	  $config['base_url'] = "/smart_sheba/home/academy";
	  $config['per_page'] = 15;
	  $config['num_links'] = 5;
	  $config["uri_segment"] = 3;
	  $config['total_rows'] = $this->home_model->academy_pagination();
	  //echo $config['total_rows'];
	  $config['full_tag_open'] = '<ul class="pagination">';
	  $config['full_tag_close'] = '</ul>';
	  $config['first_link'] = false;
	  $config['last_link'] = false;
      $config['first_tag_open'] = '<li>';
	  $config['first_tag_close'] = '</li>';
	  $config['prev_link'] = '&laquo';
	  $config['prev_tag_open'] = '<li class="prev">';
	  $config['prev_tag_close'] = '</li>';
	  $config['next_link'] = '&raquo';
	  $config['next_tag_open'] = '<li>';
      $config['next_tag_close'] = '</li>';
	  $config['last_tag_open'] = '<li>';
	  $config['last_tag_close'] = '</li>';
	  $config['cur_tag_open'] = '<li class="active"><a href="#">';
	  $config['cur_tag_close'] = '</a></li>';
	  $config['num_tag_open'] = '<li>';
	  $config['num_tag_close'] = '</li>';
	  $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	  $this->pagination->initialize($config);
	  $result['list'] = $this->home_model->academy($config['per_page'],$page);
      $result['links'] = $this->pagination->create_links();
      $this->parser->parse('academy_search',$result);

	}

	public function contact_us()
	{
		$this->parser->parse('contact',array());
		
	}

	public function contact_us_email()
	{
		if($this->input->get_post('submit'))
		{
			//echo "hello email";
			$this->form_validation->set_rules('name','Name','trim|required');
			$this->form_validation->set_rules('email','Email','trim|required|valid_email');
			$this->form_validation->set_rules('message','Message','trim|required');
			if($this->form_validation->run()==FALSE)
			{
				$this->contact_us();
			}
			else
			{
				$name = $this->input->get_post('name');
				$email = $this->input->get_post('email');
				$phone = $this->input->get_post('phone');
				$message = $this->input->get_post('message');
				$this->email->from($email,$name);
				$this->email->to("admin@smartsheba.com");
				$this->email->subject("Message from visitors");
				$this->email->message($message);

				/*echo $message;*/
				if($this->email->send())
				{
					$data['msg'] = "email send successfully";
				}
				else
				{
					$data['msg'] = "error in sending email";
				}
				$this->parser->parse('contact',$data);
			}
		}
	}



	public function login($i)
	{
		if(isset($_COOKIE['username']) && isset($_COOKIE['password']))
		{
			$data['username'] =  $_COOKIE['username'];
			$data['password'] =  $_COOKIE['password'];
			$result = $this->home_model->login($data);
			if($result!=FALSE)
			{
				$this->session->set_userdata(array('username'=>$_COOKIE['username']));
				 if($result['type']=='client')
					{
						redirect('home/client','refresh');
					}
				 else if($result['type']=='admin')
					{
						redirect('home/admin','refresh');
					}
				else if($result['type']=='g_client')
					{
						redirect('home/general_client','refresh');
					}
				else
					{
						$error['msg']="Invalid Type ";
						$error['k']=0;
					    $this->load->view('view_login',$error);
					}
			}


		}
		else if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['password'] = $session_data['password'];
			$result = $this->home_model->login($data);
			if($result!=FALSE)
			{
				//$this->session->set_userdata(array('username'=>$_COOKIE['username']));
				 if($result['type']=='client')
					{
						redirect('home/client','refresh');
					}
				else if($result['type']=='g_client')
					{
						redirect('home/general_client','refresh');
					}
				 else if($result['type']=='admin')
					{
						redirect('home/admin','refresh');
					}
					else
					{
						$error['msg']="Invalid Type ";
						$error['k']=0;

					    $this->load->view('view_login',$error);
					}
			}

		}
		else
		{
			//echo $i;
			$data['k']=$i;
			$this->load->view('view_login',$data);
		}
		
	}


	public function login_data()
	{
		if($this->input->get_post('submit'))
		{
			$this->form_validation->set_rules('username','Username','trim|required|min_length[5]');
			$this->form_validation->set_rules('password','Password','trim|required|min_length[5]');
			if($this->form_validation->run()==FALSE)
			{
				$this->login($j);
			}
			else
			{
				$data['username'] = $this->input->get_post('username');
				$data['password'] = md5($this->input->get_post('password'));
				$data['remember'] = $this->input->get_post('remember');
				$data['nav'] = $this->input->get_post('nav');

				$result = $this->home_model->login($data);

				if($result!=FALSE)
				{
					$session_user =  array('username' =>$this->input->get_post('username'),
				                       'password'=>md5($this->input->get_post('password'))
				                       );
					$this->session->set_userdata('logged_in',$session_user);
					if($data['remember']!=NULL)
					{
						setcookie('username',$data['username'], time() + (86400*30),"/");
						setcookie('password',$data['password'], time() + (86400*30),"/");
					}
					if($result['type']=='client' && $data['nav']==0)
					{
						redirect('home/client','refresh');
					}
					else if($result['type']=='g_client'  && $data['nav']==0)
					{
						redirect('home/general_client','refresh');
					}
					else if ($result['type']=='admin'  && $data['nav']==0)
					{
                        redirect('home/admin','refresh');
					}


					else if($result['type']=='client' && $data['nav']==1)
					{
						redirect('home/add_product','refresh');
					}
					else if($result['type']=='g_client'  && $data['nav']==1)
					{
						redirect('home/add_product_general','refresh');
					}
					else if ($result['type']=='admin'  && $data['nav']==1)
					{
                        redirect('home/add_product_admin','refresh');
					}

					else if($result['type']=='client' && $data['nav']==2)
					{
						redirect('home/add_information','refresh');
					}
					else if($result['type']=='g_client'  && $data['nav']==2)
					{
						$this->load->view('warning');
					}
					else if ($result['type']=='admin'  && $data['nav']==2)
					{
                        redirect('home/add_information_admin','refresh');
					}

					else if($result['type']=='client' && $data['nav']==3)
					{
						redirect('home/create_academy','refresh');
					}
					else if($result['type']=='g_client'  && $data['nav']==3)
					{
						$this->load->view('warning');
					}
					else if ($result['type']=='admin'  && $data['nav']==3)
					{
                        redirect('home/create_academy_admin','refresh');
					}


					else
					{
						$error['msg']="Invalid Type ";
						$error['k']=0;
					    $this->load->view('view_login',$error);
					}
				}
				else
				{
					$error['msg']="Wrong Username or Password";
					$error['k']=0;
					$this->load->view('view_login',$error);
				}

			}
		}
	}

   public function fb_login($j)
	{
		//echo $this->facebook->getLoginUrl();
		if($this->user)
		{
			try
			{
				$user_profile = $this->facebook->api('/me?locale=en_US&fields=name,email');
				$fb_user['email'] =  $user_profile['email'];
				$fb_user['name'] =  $user_profile['name'];
				$this->fb_login_data($fb_user);
				//echo $user_profile['email'];
			}catch (FacebookApiException $e) {

				print_r(e);
                $user = null;
            }
		}

		if($this->user)
		{
			$logout = $this->facebook->getLogoutUrl(array("next"=>base_url().'home/logout/'));
	
			
		}
		else
		{
            $login = $this->facebook->getLoginUrl(array("scope"=>'email'));
            
            echo "<h1 style=\"font-size: 30px;text-decoration: none; font-family: Verdana;text-align: center;margin-top: 30px; \">"."Are you sure that you want to login with Facebook ?"."</h1>"."<br/>";

            echo "<h1 style=\"font-size: 30px;text-decoration: none; font-family: Verdana;text-align: center;margin: 0 auto; background: #3b5998; padding: 30px; width: 90px; border-radius: 10px; color: #fff;\">"."<a href='$login'>Login</a>"."</h1>";
            //echo $login;
		}

	}

	public function fb_login_data($fb_user)
	{
		  $email = $fb_user['email'];
          $result = $this->home_model->fb_login_check($email);
          if($result!=FALSE)
          {
          	//echo "found";
              $data['username']=$result['username'];
              $data['password']=$result['password'];
              $result1 = $this->home_model->login($data);

              if($result1!=FALSE)
				{
					$session_user =  array('username' =>$result1['username'],
				                       'password'=>$result1['password']
				                       );
					$this->session->set_userdata('logged_in',$session_user);
					if($result1['type']=='client')
					{
						redirect('home/client','refresh');
					}
					else if($result['type']=='g_client')
					{
						redirect('home/general_client','refresh');
					}
					else if ($result1['type']=='admin')
					{
                        redirect('home/admin','refresh');
					}
					else
					{
						$error['msg']="Invalid Type ";
						$error['k']=0;
					    $this->load->view('view_login',$error);
					}
				}


          }
          else
          {
            //echo "not found";
            //$this->login($j);
            $this->registration_via_facebook($fb_user);
          }
	}

	public function registration_via_facebook($fb_user)
	{
		$this->load->view('view_registration_via_fb',$fb_user);
	}



	public function registration()
	{

		//$this->load->view('view_registration');

		if(isset($_COOKIE['username']) && isset($_COOKIE['password']))
		{
			$data['username'] =  $_COOKIE['username'];
			$data['password'] =  $_COOKIE['password'];
			$result = $this->home_model->login($data);
			if($result!=FALSE)
			{
				$this->session->set_userdata(array('username'=>$_COOKIE['username']));
				 if($result['type']=='client')
					{
						redirect('home/client','refresh');
					}
				 else if($result['type']=='admin')
					{
						redirect('home/admin','refresh');
					}
				else if($result['type']=='g_client')
					{
						redirect('home/general_client','refresh');
					}
				else
					{
						$error['msg']="Invalid Type ";
						$error['k']=0;
					    $this->load->view('view_login',$error);
					}
			}


		}
		else if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['password'] = $session_data['password'];
			$result = $this->home_model->login($data);
			if($result!=FALSE)
			{
				//$this->session->set_userdata(array('username'=>$_COOKIE['username']));
				 if($result['type']=='client')
					{
						redirect('home/client','refresh');
					}
				else if($result['type']=='g_client')
					{
						redirect('home/general_client','refresh');
					}
				 else if($result['type']=='admin')
					{
						redirect('home/admin','refresh');
					}
					else
					{
						$error['msg']="Invalid Type ";
						$error['k']=0;
					    $this->load->view('view_login',$error);
					}
			}

		}
		else
		{
			$this->load->view('view_registration');
		}


	}

	public function check_username($str)
	{
		$result = $this->home_model->check_username($str);
		if($result==TRUE)
		{
			echo "Username ".$str." is already exists...! Please enter new username";

		}
		else
		{

		}

	}

	public function pass_email($str)
	{

		$result = $this->home_model->pass_email($str);
		if($result==TRUE)
		{
			echo "Email ".$str." not valid....! try again";

		}
		else
		{

		}

	}

	public function registration_data()
	{
		if($this->input->get_post('submit'))
		{
			$this->form_validation->set_rules('fullname','Fullname','trim|required');


			$this->form_validation->set_rules('father_name','Father Name','trim|required');
			$this->form_validation->set_rules('mother_name','Mother Name','trim|required');
			$this->form_validation->set_rules('present_address','Present Address','trim|required');
			$this->form_validation->set_rules('permanent_address','Permanent Address','trim|required');
			$this->form_validation->set_rules('date_of_birth','Dath Of Birth','trim|required');
			$this->form_validation->set_rules('work_history','Profession','trim|required');
			$this->form_validation->set_rules('professional_address','Professional Address','trim|required');




			$this->form_validation->set_rules('username','Username','trim|required|min_length[5]');
			$this->form_validation->set_rules('password','Password','trim|required|min_length[5]');
			$this->form_validation->set_rules('cpassword','Confirm Password','trim|required|matches[password]');
			$this->form_validation->set_rules('email','Email','trim|required|valid_email');
			$this->form_validation->set_rules('gender','Gender','trim|required');
			$this->form_validation->set_rules('mobile','Mobile','trim|required|numeric|min_length[11]|max_length[11]');


			if($this->form_validation->run()==FALSE)
			{
				$this->registration();

			}
			else
			{
				$data['fullname'] = $this->input->get_post('fullname');

				$data['father_name'] = $this->input->get_post('fullname');
				$data['mother_name'] = $this->input->get_post('fullname');
				$data['present_address'] = $this->input->get_post('fullname');
				$data['permanent_address'] = $this->input->get_post('fullname');
				$data['date_of_birth'] = $this->input->get_post('fullname');
				$data['work_history'] = $this->input->get_post('fullname');
				$data['professional_address'] = $this->input->get_post('fullname');
				$data['blood_group'] = $this->input->get_post('fullname');
				$data['social_link'] = $this->input->get_post('fullname');



				$data['username'] = $this->input->get_post('username');
				$data['password'] = md5($this->input->get_post('password'));
				$data['email'] = $this->input->get_post('email');
				$email = $data['email'];
				$data['mobile'] = $this->input->get_post('mobile');
				$data['gender'] = $this->input->get_post('gender');
				$data['type'] = $this->input->get_post('member_type');

                $check_email = $this->home_model->check_email($email);
                if($check_email == FALSE)
                {
                   $data['msg1'] = 'email already exists ! enter new email address';
                   $this->load->view('view_registration',$data);
                }
                else
                {
                	$result = $this->home_model->registration_data($data);
					if($result == FALSE)
					{
					   $data['msg'] = 'username already exists';
	                   $this->load->view('view_registration',$data);
					}
                }
				
				/*$result = $this->home_model->registration_data($data);
				if($result == FALSE)
				{
				   $data['msg'] = 'username already exists';
                   $this->load->view('view_registration',$data);
				}*/



			}

		}
	}

	public function registration_data_via_fb()
	{
		if($this->input->get_post('submit'))
		{
			$this->form_validation->set_rules('fullname','Fullname','trim|required|min_length[5]');


			$this->form_validation->set_rules('father_name','Father Name','trim|required');
			$this->form_validation->set_rules('mother_name','Mother Name','trim|required');
			$this->form_validation->set_rules('present_address','Present Address','trim|required');
			$this->form_validation->set_rules('permanent_address','Permanent Address','trim|required');
			$this->form_validation->set_rules('date_of_birth','Dath Of Birth','trim|required');
			$this->form_validation->set_rules('work_history','Profession','trim|required');
			$this->form_validation->set_rules('professional_address','Professional Address','trim|required');




			$this->form_validation->set_rules('username','Username','trim|required|min_length[5]');
			$this->form_validation->set_rules('password','Password','trim|required|min_length[5]');
			$this->form_validation->set_rules('cpassword','Confirm Password','trim|required|matches[password]');
			$this->form_validation->set_rules('email','Email','trim|required|valid_email');
			$this->form_validation->set_rules('gender','Gender','trim|required');
			$this->form_validation->set_rules('mobile','Mobile','trim|required|numeric|min_length[11]|max_length[11]');


			if($this->form_validation->run()==FALSE)
			{
				$this->registration();

			}
			else
			{
				$data['fullname'] = $this->input->get_post('fullname');

				$data['father_name'] = $this->input->get_post('fullname');
				$data['mother_name'] = $this->input->get_post('fullname');
				$data['present_address'] = $this->input->get_post('fullname');
				$data['permanent_address'] = $this->input->get_post('fullname');
				$data['date_of_birth'] = $this->input->get_post('fullname');
				$data['work_history'] = $this->input->get_post('fullname');
				$data['professional_address'] = $this->input->get_post('fullname');
				$data['blood_group'] = $this->input->get_post('fullname');
				$data['social_link'] = $this->input->get_post('fullname');


				$data['username'] = $this->input->get_post('username');
				$data['password'] = md5($this->input->get_post('password'));
				$data['email'] = $this->input->get_post('email');
				$data['mobile'] = $this->input->get_post('mobile');
				$data['gender'] = $this->input->get_post('gender');
				$data['type'] = $this->input->get_post('member_type');
				
				$result = $this->home_model->registration_data($data);
				if($result == FALSE)
				{
				   $data['msg'] = 'username already exists';
                   $this->load->view('view_registration',$data);
				}

			}

		}
	}

	public function success_reg()
	{
		$this->load->view('Dashboard/success_reg');
	}






//.................................Customer Dashboard Functionality start..........................

	public function client()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$this->load->view('Dashboard/view_client',$data);
		}
		else
		{
			$this->login($j);
		}
		
	}

	public function general_client()
	{
		//echo "goung on";
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$this->load->view('Dashboard_general/view_client',$data);
		}
		else
		{
			$this->login($j);
		}
	}

	public function add_product()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$result = $this->home_model->users_info($data);
			//$this->load->view('view_add_product',array('error'=>''));
			$this->parser->parse('Dashboard/view_add_product',$result);
			//echo "hello add product";
		}
		else
		{
			$this->login($j);

		}

	}

	public function add_product_general()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$result = $this->home_model->users_info($data);
			//$this->load->view('view_add_product',array('error'=>''));
			$this->parser->parse('Dashboard_general/view_add_product',$result);
			//echo "hello add product";
		}
		else
		{
			$this->login($j);

		}

	}





	public function add_product_details()
	{
	
		if($this->input->get_post('submit'))
		{
			$this->form_validation->set_rules('title','Product title','trim|required');
			$this->form_validation->set_rules('pr_details','Product Details','trim|required');
			$this->form_validation->set_rules('pr_condition','Product Condition','trim|required');
			//$this->form_validation->set_rules('pr_discount','Product Discount','trim|numeric');
			$this->form_validation->set_rules('pr_price','Product Price','trim|required|numeric');
			//$this->form_validation->set_rules('pr_previous_price','Previous Price','trim|required|numeric');
			//$this->form_validation->set_rules('location','Location','trim|required');

			$this->form_validation->set_rules('division','Division','trim|required');
			$this->form_validation->set_rules('district','District','trim|required');
			$this->form_validation->set_rules('area','Area','trim|required');


			$this->form_validation->set_rules('email','Email','trim|required|valid_email');
			$this->form_validation->set_rules('mobile','Contact number','trim|required|numeric|max_length[11]|min_length[11]');
			//$this->form_validation->set_rules('pr_image','Product Image','callback_image_upload');
			//$this->form_validation->set_rules('pr_image','Product Image','required');pr_condition

			if($this->form_validation->run()==FALSE)
			{
				$this->add_product_general();

			}
			else
			{
				$config['upload_path'] = './assets/upload_images/';
		        $config['allowed_types'] = 'gif|jpg|jpeg|png';
		        $config['file_name']     = 'pr_image_'.substr(md5(rand()),0,7);
		        $config['max_size'] = '5000';
		        $this->load->library('upload', $config);
		        if ( ! $this->upload->do_upload('pr_image')) 
		        {

		           //echo $this->upload->display_errors();
		        	echo "<script language='javascript' type='text/javascript'>";
					echo "alert('Image must be gif | jpg | jpeg | png and size must be 5MB');";
					echo "</script>";
					$this->add_product_general();
					
							        	
		        	
		        } else {
		        	//here $file_data receives an array that has all the info
		            //pertaining to the upload, including 'file_name'
		            $file_data = $this->upload->data();
		            $product = array(
		               'pr_image'      => $file_data['file_name']
		            );

		            $session_data = $this->session->userdata('logged_in');
				    $data['username'] = $session_data['username'];
				    $result = $this->home_model->users_info($data);

					$product['title'] = $this->input->get_post('title');
					$product['c_id'] =  $result['id'];
					$product['pr_details'] = $this->input->get_post('pr_details');
					//$product['pr_discount'] = $this->input->get_post('pr_discount');
					$product['pr_condition'] = $this->input->get_post('pr_condition');
					$product['category'] = $this->input->get_post('category');
					$product['pr_price'] = $this->input->get_post('pr_price');
					$product['pr_previous_price'] = $this->input->get_post('pr_previous_price');
					$product['pr_commission'] = $this->input->get_post('pr_commission');
					//$product['location'] = $this->input->get_post('location');
					$product['division'] = $this->input->get_post('division');
					$product['district'] = $this->input->get_post('district');
					$product['thana'] = $this->input->get_post('thana');
					$product['area'] = $this->input->get_post('area');

					$product['mobile'] =   $this->input->get_post('mobile');
					$product['email'] =  $this->input->get_post('email');
					//$product['mobile'] =  $result['mobile'];
					//$product['email'] =  $result['email'];
					$product['location'] = $product['area'].','.$product['thana'].','.$product['district'].','.$product['division'];

					$this->home_model->add_client_product($product);
	
		        }
			}
		}

	}

	public function add_product_details_general()
	{
	
		if($this->input->get_post('submit'))
		{
			$this->form_validation->set_rules('title','Product title','trim|required');
			$this->form_validation->set_rules('pr_details','Product Details','trim|required');
			$this->form_validation->set_rules('pr_condition','Product Condition','trim|required');
			//$this->form_validation->set_rules('pr_discount','Product Discount','trim|numeric');
			$this->form_validation->set_rules('pr_price','Product Price','trim|required|numeric');
			//$this->form_validation->set_rules('pr_previous_price','Previous Price','trim|required|numeric');
			//$this->form_validation->set_rules('location','Location','trim|required');

			$this->form_validation->set_rules('division','Division','trim|required');
			$this->form_validation->set_rules('district','District','trim|required');
			$this->form_validation->set_rules('area','Area','trim|required');


			$this->form_validation->set_rules('email','Email','trim|required|valid_email');
			$this->form_validation->set_rules('mobile','Contact number','trim|required|numeric|max_length[11]|min_length[11]');
			//$this->form_validation->set_rules('pr_image','Product Image','callback_image_upload');
			//$this->form_validation->set_rules('pr_image','Product Image','required');pr_condition

			if($this->form_validation->run()==FALSE)
			{
				$this->add_product();

			}
			else
			{
				$config['upload_path'] = './assets/upload_images/';
		        $config['allowed_types'] = 'gif|jpg|jpeg|png';
		        $config['file_name']     = 'pr_image_'.substr(md5(rand()),0,7);
		        $config['max_size'] = '5000';
		        $this->load->library('upload', $config);
		        if ( ! $this->upload->do_upload('pr_image')) 
		        {

		           //echo $this->upload->display_errors();
		        	echo "<script language='javascript' type='text/javascript'>";
					echo "alert('Image must be gif | jpg | jpeg | png and size must be 5MB');";
					echo "</script>";
					$this->add_product();
					
							        	
		        	
		        } else {
		        	//here $file_data receives an array that has all the info
		            //pertaining to the upload, including 'file_name'
		            $file_data = $this->upload->data();
		            $product = array(
		               'pr_image'      => $file_data['file_name']
		            );

		            $session_data = $this->session->userdata('logged_in');
				    $data['username'] = $session_data['username'];
				    $result = $this->home_model->users_info($data);

					$product['title'] = $this->input->get_post('title');
					$product['c_id'] =  $result['id'];
					$product['pr_details'] = $this->input->get_post('pr_details');
					//$product['pr_discount'] = $this->input->get_post('pr_discount');
					$product['pr_condition'] = $this->input->get_post('pr_condition');
					$product['category'] = $this->input->get_post('category');
					$product['pr_price'] = $this->input->get_post('pr_price');
					$product['pr_previous_price'] = $this->input->get_post('pr_previous_price');
					$product['pr_commission'] = $this->input->get_post('pr_commission');
					//$product['location'] = $this->input->get_post('location');
					$product['division'] = $this->input->get_post('division');
					$product['district'] = $this->input->get_post('district');
					$product['thana'] = $this->input->get_post('thana');
					$product['area'] = $this->input->get_post('area');

					$product['mobile'] =   $this->input->get_post('mobile');
					$product['email'] =  $this->input->get_post('email');
					//$product['mobile'] =  $result['mobile'];
					//$product['email'] =  $result['email'];
					$product['location'] = $product['area'].','.$product['thana'].','.$product['district'].','.$product['division'];

					$this->home_model->add_client_product_general($product);
	
		        }
			}
		}

	}




	public function Uploaded_product()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
		    $result = $this->home_model->users_info($data);
		    $c_id = $result['id'];
		    //echo $c_id;
		   // $config['base_url'] = "http://localhost/smart_sheba/home/Uploaded_product";
		    $config['base_url'] = "/smart_sheba/home/Uploaded_product";
		    $config['per_page'] = 8;
		    $config['num_links'] = 5;
		    $config["uri_segment"] = 3;
		    $config['total_rows'] = $this->home_model->product_pagination($c_id);
		    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		    $this->pagination->initialize($config);

			$product['details']=$this->home_model->client_uploaded_product($c_id, $config['per_page'],$page);
			$product['links'] = $this->pagination->create_links();
			$this->parser->parse('view_client_product',$product);

		}
		else
		{
			$this->login($j);
		}
	}

	//..........................big bang.........................................


    public function upload_product_history_client()
	{
		if($this->session->userdata('logged_in'))
		{
		
			$session_data = $this->session->userdata('logged_in');
		    $data['username'] = $session_data['username'];
		    $result = $this->home_model->users_info($data);
		    $client_id = $result['id'];
		    $this->upload_product_history_list_client($client_id);
 

		}
		else
		{
			$this->login($j);
		}
	}

	public function upload_product_history_client_general()
	{
		if($this->session->userdata('logged_in'))
		{
		
			$session_data = $this->session->userdata('logged_in');
		    $data['username'] = $session_data['username'];
		    $result = $this->home_model->users_info($data);
		    $client_id = $result['id'];
		    $this->upload_product_history_list_client_general($client_id);



		}
		else
		{
			$this->login($j);
		}
	}

	public function upload_product_history_list_client_general($client_id)
	{

		   //$config['base_url'] = "http://localhost/smart_sheba/home/upload_product_history_list_client/$client_id";
		   $config['base_url'] = "/smart_sheba/home/upload_product_history_list_client_general/$client_id";
			$config['per_page'] = 12;
			$config['num_links'] = 5;
		    $config["uri_segment"] = 4;
			$config['total_rows'] = $this->home_model->client_uploaded_product_history_pagination_general($client_id);
	        $config['full_tag_open'] = '<ul class="pagination">';
	        $config['full_tag_close'] = '</ul>';
	        $config['first_link'] = false;
	        $config['last_link'] = false;
	        $config['first_tag_open'] = '<li>';
	        $config['first_tag_close'] = '</li>';
	        $config['prev_link'] = '&laquo';
	        $config['prev_tag_open'] = '<li class="prev">';
	        $config['prev_tag_close'] = '</li>';
	        $config['next_link'] = '&raquo';
	        $config['next_tag_open'] = '<li>';
	        $config['next_tag_close'] = '</li>';
	        $config['last_tag_open'] = '<li>';
	        $config['last_tag_close'] = '</li>';
	        $config['cur_tag_open'] = '<li class="active"><a href="#">';
	        $config['cur_tag_close'] = '</a></li>';
	        $config['num_tag_open'] = '<li>';
	        $config['num_tag_close'] = '</li>';
	     



			$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;



			$this->pagination->initialize($config);
			//$product['list'] = $this->home_model->admin_uploaded_product_history( $config['per_page'],$page,$client_id);
			$product['list'] = $this->home_model->client_uploaded_product_history_general( $config['per_page'],$page,$client_id);
			$product['links'] = $this->pagination->create_links();
			$this->parser->parse('Dashboard_general/uploaded_product',$product);

	}

	public function upload_product_history_list_client($client_id)
	{

		   //$config['base_url'] = "http://localhost/smart_sheba/home/upload_product_history_list_client/$client_id";
		   $config['base_url'] = "/smart_sheba/home/upload_product_history_list_client/$client_id";
			$config['per_page'] = 12;
			$config['num_links'] = 5;
		    $config["uri_segment"] = 4;
			$config['total_rows'] = $this->home_model->client_uploaded_product_history_pagination($client_id);
	        $config['full_tag_open'] = '<ul class="pagination">';
	        $config['full_tag_close'] = '</ul>';
	        $config['first_link'] = false;
	        $config['last_link'] = false;
	        $config['first_tag_open'] = '<li>';
	        $config['first_tag_close'] = '</li>';
	        $config['prev_link'] = '&laquo';
	        $config['prev_tag_open'] = '<li class="prev">';
	        $config['prev_tag_close'] = '</li>';
	        $config['next_link'] = '&raquo';
	        $config['next_tag_open'] = '<li>';
	        $config['next_tag_close'] = '</li>';
	        $config['last_tag_open'] = '<li>';
	        $config['last_tag_close'] = '</li>';
	        $config['cur_tag_open'] = '<li class="active"><a href="#">';
	        $config['cur_tag_close'] = '</a></li>';
	        $config['num_tag_open'] = '<li>';
	        $config['num_tag_close'] = '</li>';
	     



			$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;



			$this->pagination->initialize($config);
			//$product['list'] = $this->home_model->admin_uploaded_product_history( $config['per_page'],$page,$client_id);
			$product['list'] = $this->home_model->client_uploaded_product_history( $config['per_page'],$page,$client_id);
			$product['links'] = $this->pagination->create_links();
			$this->parser->parse('Dashboard/uploaded_product',$product);

	}

	public function delete_product_client($pr_id,$c_id)
	{
      $client_id = $c_id;
      $product_id= $pr_id;
      $this->home_model->delete_product_client($client_id,$product_id);
	}

	public function delete_product_client_general($pr_id,$c_id)
	{
      $client_id = $c_id;
      $product_id= $pr_id;
      $this->home_model->delete_product_client_general($client_id,$product_id);
	}




	public function upload_information_history_client()
	{
		//echo "coming soon";
		if($this->session->userdata('logged_in'))
		{
		
			$session_data = $this->session->userdata('logged_in');
		    $data['username'] = $session_data['username'];
		    $result = $this->home_model->users_info($data);
		    $client_id = $result['id'];
		    $this->upload_information_history_list_client($client_id);
 

		}
		else
		{
			$this->login($j);
		}
	}

	public function upload_information_history_list_client($client_id)
	{

		   //$config['base_url'] = "http://localhost/smart_sheba/home/upload_information_history_list_client/$client_id";
		   $config['base_url'] = "/smart_sheba/home/upload_information_history_list_client/$client_id";
			$config['per_page'] = 12;
			$config['num_links'] = 5;
		    $config["uri_segment"] = 4;
			$config['total_rows'] = $this->home_model->client_uploaded_information_history_pagination($client_id);
	        $config['full_tag_open'] = '<ul class="pagination">';
	        $config['full_tag_close'] = '</ul>';
	        $config['first_link'] = false;
	        $config['last_link'] = false;
	        $config['first_tag_open'] = '<li>';
	        $config['first_tag_close'] = '</li>';
	        $config['prev_link'] = '&laquo';
	        $config['prev_tag_open'] = '<li class="prev">';
	        $config['prev_tag_close'] = '</li>';
	        $config['next_link'] = '&raquo';
	        $config['next_tag_open'] = '<li>';
	        $config['next_tag_close'] = '</li>';
	        $config['last_tag_open'] = '<li>';
	        $config['last_tag_close'] = '</li>';
	        $config['cur_tag_open'] = '<li class="active"><a href="#">';
	        $config['cur_tag_close'] = '</a></li>';
	        $config['num_tag_open'] = '<li>';
	        $config['num_tag_close'] = '</li>';

			$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

			$this->pagination->initialize($config);
			//$product['list'] = $this->home_model->admin_uploaded_product_history( $config['per_page'],$page,$client_id);
			$info['list'] = $this->home_model->client_uploaded_information_history( $config['per_page'],$page,$client_id);
			$info['links'] = $this->pagination->create_links();
			$this->parser->parse('Dashboard/uploaded_information',$info);

	}

	public function delete_information_client($pr_id,$c_id)
	{
      $client_id = $c_id;
      $product_id= $pr_id;
      $this->home_model->delete_information_client($client_id,$product_id);
	}




	//.............................big bang end ............................................


	//.....................big bang update product/ information..........................




   public function edit_product_client($pr_id,$c_id)
	{
		if($this->session->userdata('logged_in'))
		{
	      $client_id = $c_id;
	      $product_id= $pr_id;
	      $result = $this->home_model->edit_product_client($client_id,$product_id);
	      $this->parser->parse('Dashboard/edit_product_admin',$result);
		}
		else
		{
	       $this->login($j);
		}
      
	}

	public function edit_product_client_general($pr_id,$c_id)
	{
		if($this->session->userdata('logged_in'))
		{
	      $client_id = $c_id;
	      $product_id= $pr_id;
	      $result = $this->home_model->edit_product_client_general($client_id,$product_id);
	      $this->parser->parse('Dashboard_general/edit_product_admin',$result);
		}
		else
		{
	       $this->login($j);
		}
      
	}


	public function edit_product_details_client()
	{
		if($this->input->get_post('submit'))
		{

         if($_FILES['pr_image']['size'] != 0)
			{
				$config['upload_path'] = './assets/upload_images/';
		        $config['allowed_types'] = 'gif|jpg|jpeg|png';
		        $config['file_name']     = 'image_'.substr(md5(rand()),0,7);
		        $config['max_size'] = '5000';
		        $this->load->library('upload', $config);
		        if ( ! $this->upload->do_upload('pr_image')) 
		         {

		           //echo $this->upload->display_errors();
		        	echo "<script language='javascript' type='text/javascript'>";
					echo "alert('Image must be gif | jpg | jpeg | png and size must be 5MB');";
					echo "</script>";
					$this->upload_product_history_client();
								        	
		        	
		         } 
		         else 
		        {
		        	//here $file_data receives an array that has all the info
		            //pertaining to the upload, including 'file_name'
		            $file_data = $this->upload->data();
				    $update_info = array(
				       'pr_image'      => $file_data['file_name']
				     );

					$update_info['title'] = $this->input->get_post('title');
			     	//$update_info['image'] =  $result['image'];
					$update_info['pr_details'] = $this->input->get_post('pr_details');
					$update_info['pr_condition'] = $this->input->get_post('pr_condition');
					$update_info['pr_previous_price'] = $this->input->get_post('pr_previous_price');
					$update_info['pr_price'] = $this->input->get_post('pr_price');
					$update_info['location'] = $this->input->get_post('location');
					$update_info['email'] = $this->input->get_post('email');
					$update_info['mobile'] = $this->input->get_post('mobile');
					$update_info['id'] = $this->input->get_post('id');
					$update_info['client_id'] = $this->input->get_post('client_id');
					$this->home_model->update_product_details_client($update_info);
	
		         }

				}
				    else
				    {
				    	$update_info['title'] = $this->input->get_post('title');
				     	//$update_info['image'] =  $result['image'];
						$update_info['pr_details'] = $this->input->get_post('pr_details');
						$update_info['pr_condition'] = $this->input->get_post('pr_condition');
						$update_info['pr_previous_price'] = $this->input->get_post('pr_previous_price');
						$update_info['pr_price'] = $this->input->get_post('pr_price');
						$update_info['location'] = $this->input->get_post('location');
						$update_info['email'] = $this->input->get_post('email');
						$update_info['mobile'] = $this->input->get_post('mobile');
						$update_info['id'] = $this->input->get_post('id');
						$update_info['client_id'] = $this->input->get_post('client_id');
						$result = $this->home_model->edit_product_client($update_info['client_id'],$update_info['id']);
						$update_info['pr_image'] = $result['pr_image'];
						$this->home_model->update_product_details_client($update_info);

				    }
				
	    	}
		else
		{
          $this->upload_product_history_client();
		}
	}

	public function edit_product_details_client_general()
	{
		if($this->input->get_post('submit'))
		{

     		

        if($_FILES['pr_image']['size'] != 0)
			{
				$config['upload_path'] = './assets/upload_images/';
		        $config['allowed_types'] = 'gif|jpg|jpeg|png';
		        $config['file_name']     = 'image_'.substr(md5(rand()),0,7);
		        $config['max_size'] = '5000';
		        $this->load->library('upload', $config);
		        if ( ! $this->upload->do_upload('pr_image')) 
		         {

		           //echo $this->upload->display_errors();
		        	echo "<script language='javascript' type='text/javascript'>";
					echo "alert('Image must be gif | jpg | jpeg | png and size must be 5MB');";
					echo "</script>";
					$this->upload_product_history_client_general();
								        	
		        	
		         } 
		         else 
		        {
		        	//here $file_data receives an array that has all the info
		            //pertaining to the upload, including 'file_name'
		            $file_data = $this->upload->data();
				    $update_info = array(
				       'pr_image'      => $file_data['file_name']
				     );

					$update_info['title'] = $this->input->get_post('title');
			     	//$update_info['image'] =  $result['image'];
					$update_info['pr_details'] = $this->input->get_post('pr_details');
					$update_info['pr_condition'] = $this->input->get_post('pr_condition');
					$update_info['pr_previous_price'] = $this->input->get_post('pr_previous_price');
					$update_info['pr_price'] = $this->input->get_post('pr_price');
					$update_info['location'] = $this->input->get_post('location');
					$update_info['email'] = $this->input->get_post('email');
					$update_info['mobile'] = $this->input->get_post('mobile');
					$update_info['id'] = $this->input->get_post('id');
					$update_info['client_id'] = $this->input->get_post('client_id');
					$this->home_model->update_product_details_client_general($update_info);
	
		         }

				}
				    else
				    {
				    	$update_info['title'] = $this->input->get_post('title');
				     	//$update_info['image'] =  $result['image'];
						$update_info['pr_details'] = $this->input->get_post('pr_details');
						$update_info['pr_condition'] = $this->input->get_post('pr_condition');
						$update_info['pr_previous_price'] = $this->input->get_post('pr_previous_price');
						$update_info['pr_price'] = $this->input->get_post('pr_price');
						$update_info['location'] = $this->input->get_post('location');
						$update_info['email'] = $this->input->get_post('email');
						$update_info['mobile'] = $this->input->get_post('mobile');
						$update_info['id'] = $this->input->get_post('id');
						$update_info['client_id'] = $this->input->get_post('client_id');
						$result = $this->home_model->edit_product_client($update_info['client_id'],$update_info['id']);
						$update_info['pr_image'] = $result['pr_image'];
						$this->home_model->update_product_details_client_general($update_info);

				    }


				
	    	}
		else
		{
          $this->upload_product_history_client_general();
		}
	}




	public function edit_information_client($pr_id,$c_id)
	{
	   if($this->session->userdata('logged_in'))
		 {
	       $client_id = $c_id;
	       $product_id= $pr_id;
	       //echo $client_id."  ".$product_id;
	       $result = $this->home_model->edit_information_client($client_id,$product_id);
	       $this->parser->parse('Dashboard/edit_information_admin',$result);
		 }
		 else
		 {
	       $this->login($j);
		 }
      
	}

	public function edit_information_details_client()
	{
		if($this->input->get_post('submit'))
		{

     		

        if($_FILES['info_image']['size'] != 0)
			{
				$config['upload_path'] = './assets/info_images/';
		        $config['allowed_types'] = 'gif|jpg|jpeg|png';
		        $config['file_name']     = 'image_'.substr(md5(rand()),0,7);
		        $config['max_size'] = '5000';
		        $this->load->library('upload', $config);
		        if ( ! $this->upload->do_upload('info_image')) 
		         {

		           //echo $this->upload->display_errors();
		        	echo "<script language='javascript' type='text/javascript'>";
					echo "alert('Image must be gif | jpg | jpeg | png and size must be 5MB');";
					echo "</script>";
					$this->upload_information_history_client();
								        	
		        	
		         } 
		         else 
		        {
		        	//here $file_data receives an array that has all the info
		            //pertaining to the upload, including 'file_name'
		            $file_data = $this->upload->data();
				    $update_info = array(
				       'info_image'      => $file_data['file_name']
				     );

					$update_info['info_title'] = $this->input->get_post('info_title');
			     	//$update_info['image'] =  $result['image'];
					$update_info['info_description'] = $this->input->get_post('info_description');
					$update_info['info_location'] = $this->input->get_post('info_location');
					$update_info['info_website'] = $this->input->get_post('info_website');
					$update_info['info_location'] = $this->input->get_post('info_location');
					$update_info['id'] = $this->input->get_post('id');
					$update_info['client_id'] = $this->input->get_post('client_id');
					$this->home_model->update_information_details_client($update_info);
	
		         }

				}
				    else
				    {
				    	 $update_info['info_title'] = $this->input->get_post('info_title');
			     	//$update_info['image'] =  $result['image'];
					     $update_info['info_description'] = $this->input->get_post('info_description');
					    $update_info['info_location'] = $this->input->get_post('info_location');
					    $update_info['info_website'] = $this->input->get_post('info_website');
					    $update_info['info_location'] = $this->input->get_post('info_location');
					    $update_info['id'] = $this->input->get_post('id');
					    $update_info['client_id'] = $this->input->get_post('client_id');
						$result = $this->home_model->edit_information_client($update_info['client_id'],$update_info['id']);
						$update_info['info_image'] = $result['info_image'];
						$this->home_model->update_information_details_client($update_info);

				    }


				
	    	}
		else
		{
          $this->upload_product_history_admin();
		}
	}



	//.....................big bang updfate product/information...........................


	public function add_information()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$result = $this->home_model->users_info($data);
			$this->parser->parse('Dashboard/view_add_information',$result);
		}
		else
		{
			$this->login($j);

		}
	}

	public function add_information_details()
	{
		if($this->input->get_post('submit'))
		{
			$this->form_validation->set_rules('title','Information title','trim|required');
			$this->form_validation->set_rules('description','Description','trim|required');
			$this->form_validation->set_rules('division','Division','trim|required');
			$this->form_validation->set_rules('district','District','trim|required');
			$this->form_validation->set_rules('area','Area','trim|required');
			//$this->form_validation->set_rules('thana','Thana','trim|required');
			//$this->form_validation->set_rules('website','Website','trim|required|valid_url');
			$this->form_validation->set_rules('mobile','Contact number','trim|required|min_length[5]|max_length[15]');
			//$this->form_validation->set_rules('pr_image','Product Image','callback_image_upload');
			//$this->form_validation->set_rules('pr_image','Product Image','required');

			if($this->form_validation->run()==FALSE)
			{
				$this->add_information();

			}
			else
			{
				if($_FILES['image']['size'] != 0)
				{
				$config['upload_path'] = './assets/info_images/';
		        $config['allowed_types'] = 'gif|jpg|jpeg|png';
		        $config['file_name']     = 'image_'.substr(md5(rand()),0,7);
		        $config['max_size'] = '5000';
		        $this->load->library('upload', $config);
		        if ( ! $this->upload->do_upload('image')) 
		        {

		           //echo $this->upload->display_errors();
		        	echo "<script language='javascript' type='text/javascript'>";
					echo "alert('Image must be gif | jpg | jpeg | png and size must be 5MB');";
					echo "</script>";
					$this->add_information();
								        	
		        	
		        } 
		        else 
		        {
		        	//here $file_data receives an array that has all the info
		            //pertaining to the upload, including 'file_name'
		            $file_data = $this->upload->data();
		            $information = array(
		               'image'      => $file_data['file_name']
		            );

		            $session_data = $this->session->userdata('logged_in');
				    $data['username'] = $session_data['username'];
				    $result = $this->home_model->users_info($data);

					$information['title'] = $this->input->get_post('title');
					$information['c_id'] =  $result['id'];
					$information['description'] = $this->input->get_post('description');
					$information['division'] = $this->input->get_post('division');
					$information['district'] = $this->input->get_post('district');
					$information['thana'] = $this->input->get_post('thana');
					$information['area'] = $this->input->get_post('area');
					$information['category'] = $this->input->get_post('category');
					$information['website'] = $this->input->get_post('website');
					$information['mobile'] = $this->input->get_post('mobile');
					$information['email'] = $this->input->get_post('email');
					$information['location'] = $information['area'].','.$information['thana'].','.$information['district'].','.$information['division'];
					$this->home_model->add_information($information);
	
		         }

				}
				else
				{
					$session_data = $this->session->userdata('logged_in');
				    $data['username'] = $session_data['username'];
				    $result = $this->home_model->users_info($data);

					$information['title'] = $this->input->get_post('title');
					$information['c_id'] =  $result['id'];
					$information['description'] = $this->input->get_post('description');
					$information['division'] = $this->input->get_post('division');
					$information['district'] = $this->input->get_post('district');
					$information['thana'] = $this->input->get_post('thana');
					$information['area'] = $this->input->get_post('area');
					$information['category'] = $this->input->get_post('category');
					$information['website'] = $this->input->get_post('website');
					$information['mobile'] = $this->input->get_post('mobile');
					$information['email'] = $this->input->get_post('email');
					$information['location'] = $information['area'].','.$information['thana'].','.$information['district'].','.$information['division'];
					$information['image'] = "";

					$this->home_model->add_information($information);

				}

			}
		}

	}

	public function uploaded_information()
	{

	 if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
		    $result = $this->home_model->users_info($data);
		    $c_id = $result['id'];
		    //echo $c_id;
		   // $config['base_url'] = "http://localhost/smart_sheba/home/uploaded_information";
		    $config['base_url'] = "/smart_sheba/home/uploaded_information";
		    $config['per_page'] = 12;
		    $config['num_links'] = 5;
		    $config["uri_segment"] = 3;
		    $config['total_rows'] = $this->home_model->information_pagination($c_id);
		    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		    $this->pagination->initialize($config);

			$information['details']=$this->home_model->client_uploaded_information($c_id, $config['per_page'],$page);
			$information['links'] = $this->pagination->create_links();
			$this->parser->parse('view_client_information',$information);

		}
		else
		{
			$this->login($j);
		}

	}

	public function profile_client()
	{
		//$this->parser->parse('Dashboard/profile',array());
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			//echo $data['username'];
			$result = $this->home_model->users_info($data);
			//echo $result['fullname'];
			//$this->parser->parse('view_update_profile',$result);
			$this->parser->parse('Dashboard/profile',$result);
		}
		else
		{
			$this->login($j);

		}
	}

	public function profile_client_general()
	{
		//$this->parser->parse('Dashboard/profile',array());
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			//echo $data['username'];
			$result = $this->home_model->users_info($data);
			//echo $result['fullname'];
			//$this->parser->parse('view_update_profile',$result);
			$this->parser->parse('Dashboard_general/profile',$result);
		}
		else
		{
			$this->login($j);

		}
	}

	public function update_client_information()
	{
		if($this->session->userdata('logged_in'))
		{
			$this->form_validation->set_rules('fullname','Fullname','trim|required|min_length[5]');
			$this->form_validation->set_rules('email','Email','trim|required|valid_email');
			$this->form_validation->set_rules('mobile','Mobile','trim|required|numeric|min_length[11]|max_length[11]');
			if($this->form_validation->run()==FALSE)
			{
				$this->profile_client();
				//echo "hello";
			}
			else
			{
				$session_data = $this->session->userdata('logged_in');
				$data['username'] = $session_data['username'];
				$result = $this->home_model->users_info($data);
				//..................................................................
				if($_FILES['image']['size'] != 0)
				{
				$config['upload_path'] = './assets/profile_images/';
		        $config['allowed_types'] = 'gif|jpg|jpeg|png';
		        $config['file_name']     = 'image_'.substr(md5(rand()),0,7);
		        $config['max_size'] = '5000';
		        $this->load->library('upload', $config);
		        if ( ! $this->upload->do_upload('image')) 
		        {

		           //echo $this->upload->display_errors();
		        	echo "<script language='javascript' type='text/javascript'>";
					echo "alert('Image must be gif | jpg | jpeg | png and size must be 5MB');";
					echo "</script>";
					$this->profile_client();
					
								        	
		        	
		        } 
		        else 
		        {
		        	//here $file_data receives an array that has all the info
		            //pertaining to the upload, including 'file_name'
		            $file_data = $this->upload->data();
				    $update_info = array(
				       'image'      => $file_data['file_name']
				     );

					$update_info['fullname'] = $this->input->get_post('fullname');
					//$update_info['image'] =  $result['image'];
					$update_info['father_name'] = $this->input->get_post('father_name');
					$update_info['mother_name'] = $this->input->get_post('mother_name');
					$update_info['permanent_address'] = $this->input->get_post('permanent_address');
					$update_info['professional_address'] = $this->input->get_post('professional_address');
					$update_info['date_of_birth'] = $this->input->get_post('date_of_birth');
					$update_info['social_link'] = $this->input->get_post('social_link');
					



					$update_info['email'] = $this->input->get_post('email');
					$update_info['mobile'] = $this->input->get_post('mobile');
					$update_info['blood_group'] = $this->input->get_post('blood_group');
					$update_info['age'] = $this->input->get_post('age');
					$update_info['work_history'] = $this->input->get_post('work_history');
					$update_info['study_background'] = $this->input->get_post('study_background');
					$update_info['describe_myself'] = $this->input->get_post('describe_myself');
					$update_info['address'] = $this->input->get_post('address');
					$session_data = $this->session->userdata('logged_in');
				    $update_info['username'] = $session_data['username'];
					$this->home_model->update_information($update_info);
					//echo "image: ".$update_info['image'];
	
		         }

				}
				    else
				    {
				    	$update_info['fullname'] = $this->input->get_post('fullname');

				    	$update_info['father_name'] = $this->input->get_post('father_name');
						$update_info['mother_name'] = $this->input->get_post('mother_name');
						$update_info['permanent_address'] = $this->input->get_post('permanent_address');
						$update_info['professional_address'] = $this->input->get_post('professional_address');
						$update_info['date_of_birth'] = $this->input->get_post('date_of_birth');
						$update_info['social_link'] = $this->input->get_post('social_link');



						$update_info['image'] =  $result['image'];
						$update_info['email'] = $this->input->get_post('email');
						$update_info['mobile'] = $this->input->get_post('mobile');
						$update_info['blood_group'] = $this->input->get_post('blood_group');
						$update_info['age'] = $this->input->get_post('age');
						$update_info['work_history'] = $this->input->get_post('work_history');
						$update_info['study_background'] = $this->input->get_post('study_background');
						$update_info['describe_myself'] = $this->input->get_post('describe_myself');
						$update_info['address'] = $this->input->get_post('address');
						$session_data = $this->session->userdata('logged_in');
				        $update_info['username'] = $session_data['username'];
				       // echo "image: ".$update_info['image'];
						$this->home_model->update_information($update_info);

				    }
			
			}

		}
		else
		{
			$this->login($j);

		}
	}


	public function update_general_client_information()
	{
		if($this->session->userdata('logged_in'))
		{
			$this->form_validation->set_rules('fullname','Fullname','trim|required|min_length[5]');
			$this->form_validation->set_rules('email','Email','trim|required|valid_email');
			$this->form_validation->set_rules('mobile','Mobile','trim|required|numeric|min_length[11]|max_length[11]');
			if($this->form_validation->run()==FALSE)
			{
				$this-> profile_client_general();
				//echo "hello";
			}
			else
			{
				$session_data = $this->session->userdata('logged_in');
				$data['username'] = $session_data['username'];
				$result = $this->home_model->users_info($data);
				//..................................................................
				if($_FILES['image']['size'] != 0)
				{
				$config['upload_path'] = './assets/profile_images/';
		        $config['allowed_types'] = 'gif|jpg|jpeg|png';
		        $config['file_name']     = 'image_'.substr(md5(rand()),0,7);
		        $config['max_size'] = '5000';
		        $this->load->library('upload', $config);
		        if ( ! $this->upload->do_upload('image')) 
		        {

		           //echo $this->upload->display_errors();
		        	echo "<script language='javascript' type='text/javascript'>";
					echo "alert('Image must be gif | jpg | jpeg | png and size must be 5MB');";
					echo "</script>";
					$this->profile_client_general();
					
								        	
		        	
		        } 
		        else 
		        {
		        	//here $file_data receives an array that has all the info
		            //pertaining to the upload, including 'file_name'
		            $file_data = $this->upload->data();
				    $update_info = array(
				       'image'      => $file_data['file_name']
				     );

					$update_info['fullname'] = $this->input->get_post('fullname');
					//$update_info['image'] =  $result['image'];
					$update_info['father_name'] = $this->input->get_post('father_name');
					$update_info['mother_name'] = $this->input->get_post('mother_name');
					$update_info['permanent_address'] = $this->input->get_post('permanent_address');
					$update_info['professional_address'] = $this->input->get_post('professional_address');
					$update_info['date_of_birth'] = $this->input->get_post('date_of_birth');
					$update_info['social_link'] = $this->input->get_post('social_link');
					



					$update_info['email'] = $this->input->get_post('email');
					$update_info['mobile'] = $this->input->get_post('mobile');
					$update_info['blood_group'] = $this->input->get_post('blood_group');
					$update_info['age'] = $this->input->get_post('age');
					$update_info['work_history'] = $this->input->get_post('work_history');
					$update_info['study_background'] = $this->input->get_post('study_background');
					$update_info['describe_myself'] = $this->input->get_post('describe_myself');
					$update_info['address'] = $this->input->get_post('address');
					$session_data = $this->session->userdata('logged_in');
				    $update_info['username'] = $session_data['username'];
					$this->home_model->update_information($update_info);
					//echo "image: ".$update_info['image'];
	
		         }

				}
				    else
				    {
				    	$update_info['fullname'] = $this->input->get_post('fullname');

				    	$update_info['father_name'] = $this->input->get_post('father_name');
						$update_info['mother_name'] = $this->input->get_post('mother_name');
						$update_info['permanent_address'] = $this->input->get_post('permanent_address');
						$update_info['professional_address'] = $this->input->get_post('professional_address');
						$update_info['date_of_birth'] = $this->input->get_post('date_of_birth');
						$update_info['social_link'] = $this->input->get_post('social_link');



						$update_info['image'] =  $result['image'];
						$update_info['email'] = $this->input->get_post('email');
						$update_info['mobile'] = $this->input->get_post('mobile');
						$update_info['blood_group'] = $this->input->get_post('blood_group');
						$update_info['age'] = $this->input->get_post('age');
						$update_info['work_history'] = $this->input->get_post('work_history');
						$update_info['study_background'] = $this->input->get_post('study_background');
						$update_info['describe_myself'] = $this->input->get_post('describe_myself');
						$update_info['address'] = $this->input->get_post('address');
						$session_data = $this->session->userdata('logged_in');
				        $update_info['username'] = $session_data['username'];
				       // echo "image: ".$update_info['image'];
						$this->home_model->update_information($update_info);

				    }
			
			}

		}
		else
		{
			$this->login($j);

		}
	}



	public function find_members()
	{
		if($this->session->userdata('logged_in'))
		{


		//$config['base_url'] = "http://localhost/smart_sheba/home/find_members";
		$config['base_url'] = "/smart_sheba/home/find_members";
	    $config['per_page'] = 12;
		$config['num_links'] = 5;
	    $config["uri_segment"] = 3;
	    $config['total_rows'] = $this->home_model->all_member_pagination();




	    $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';      



		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;



		$this->pagination->initialize($config);
		$member['list'] = $this->home_model->all_member( $config['per_page'],$page);
		$member['links'] = $this->pagination->create_links();
		$this->parser->parse('Dashboard/find_members',$member);
		//$this->parser->parse('Dashboard/find_members',array());
	 }
	 else
	 {
	 	$this->login($j);
	 }

	}

	public function send_friend_request($r_id)
	{
	  if($this->session->userdata('logged_in'))
	  {
        
        $session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$result = $this->home_model->users_info($data);
		$s_id = $result['id'];

        $data['r_id'] = $r_id;
		$resul1 = $this->home_model->users_info($data);
		$r_name = $result['fullname'];
         $this->home_model->send_friend_request($s_id,$r_id,$r_name);
		//echo "request id.: ".$r_id."<br>";
		//echo "sender id.: ".$s_id;
         //$this->home_model->send_friend_request($s_id,$r_id);
	    
	  }
	  else
	  {
	  	$this->login($j);
	  }
      
	}

    public function friend_request()
    {
       if($this->session->userdata('logged_in'))
    	{
           //$this->parser->parse('Dashboard/friend_request',array());
    		$session_data = $this->session->userdata('logged_in');
		    $data['username'] = $session_data['username'];
		    $result = $this->home_model->users_info($data);
		    $s_id = $result['id'];
    		$result['list'] = $this->home_model->pending_friend_request($s_id);
    		$this->parser->parse('Dashboard/friend_request',$result);

    	}
    	else
    	{
    		$this->login($j);
    	}
    }

    public function friend_request_approve($id)
    {
    	if($this->session->userdata('logged_in'))
    	{
           $this->home_model->friend_request_approve($id);
    	}
    	else
    	{
           $this->login($j);
    	}
        
    	//echo " id: ".$id;
    }

    public function friend_request_delete($id)
    {
    	if($this->session->userdata('logged_in'))
    	{
           $this->home_model->friend_request_delete($id);
    		//echo " id: ".$id;
    	}
    	else
    	{
           $this->login($j);
    	}
        
    	
    }

    public function friend_list()
    {
    	if($this->session->userdata('logged_in'))
    	{
    		$session_data = $this->session->userdata('logged_in');
		    $data['username'] = $session_data['username'];
		    $result = $this->home_model->users_info($data);
		    $s_id = $result['id'];
            $result['list'] = $this->home_model->friend_list($s_id);
            $this->parser->parse('Dashboard/friend_list',$result);
    	}
    	else
    	{
    		$this->login($j);
    	}
    }

    public function unfriend($id)
    {
      //echo "unfiend id: ".$id;
      if($this->session->userdata('logged_in'))
      {
      	 //echo "unfiend id: ".$id;
         $this->home_model->unfriend($id);
      }
      else
      {
      	$this->login($j);
      }
    }


	public function view_profile($id)
	{
		//echo "coming soon ".$id;
	 if($this->session->userdata('logged_in'))
	  {
		$result = $this->home_model->specific_client_info($id);
		$this->parser->parse('Dashboard/client_profile',$result);
	  }
	 else
	  {
		 	$this->login($j);
	   }
	}

	

	public function check_discount()
	{
		//echo "coming soon";
	 if($this->session->userdata('logged_in'))
	  {
         //$this->parser->parse('Dashboard/check_discount',array());
	  	 //$this->parser->parse('Dashboard/shop_discount_client',array());
		//$config['base_url'] = "http://localhost/smart_sheba/home/check_discount";
		$config['base_url'] = "/smart_sheba/home/check_discount";
		$config['per_page'] = 12;
		$config['num_links'] = 5;
	    $config["uri_segment"] = 3;
		$config['total_rows'] = $this->home_model->all_product_discount_pagination();



        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
     



		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;



		$this->pagination->initialize($config);
		$discount['list'] = $this->home_model->all_product_discount( $config['per_page'],$page);
		$discount['links'] = $this->pagination->create_links();
		$this->parser->parse('Dashboard/shop_discount_client',$discount);




	  }
	  else
	  {
        $this->login($j);
	  }
		
	}


	public function specific_product_discount_client($category)
	{
		//$config['base_url'] = "http://localhost/smart_sheba/home/specific_product_discount_client/$category";
		$config['base_url'] = "/smart_sheba/home/specific_product_discount_client/$category";
		$config['per_page'] = 12;
		$config['num_links'] = 5;
	    $config["uri_segment"] = 4;
	    $config['total_rows'] = $this->home_model->specific_product_discount_pagination($category);

        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
 



	    $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

        $this->pagination->initialize($config);
	    $specific_product_discount['list'] = $this->home_model->specific_product_discount($category,$config['per_page'],$page);
		$specific_product_discount['links'] = $this->pagination->create_links();
		$this->parser->parse('Dashboard/view_specific _category_discount_client',$specific_product_discount);

	}

	public function single_product_discount_client($id,$client_id)
	{
		 if($this->session->userdata('logged_in'))
		 {
		//echo "single product id: ".$id;
			$product= $this->home_model->individual_product_details($id);
			$image = $this->home_model->client_image($client_id);
			$data = $product+$image ;
			$this->parser->parse('Dashboard/single_product_discount_client',$data);
	    }  
	    else
	    {
	    	$this->login($j);
	    } 
	
	}

	public function add_to_cart_client()
	{
		if($this->input->get_post('submit'))
		{
			//$this->form_validation->set_rules('quantity','Quantity','trim|requir');
			$data['id'] = $this->input->get_post('id');
			$data['qnty'] = $this->input->get_post('quantity');
			$data['price'] = $this->input->get_post('price');
			$data['total'] = $data['qnty']*$data['price'];
			$product= $this->home_model->individual_product_details($data['id']);
			$data = $data+$product;
		    $this->parser->parse('Dashboard/add_to_cart_client',$data);

		}
	}

	public function product_order_data_client()
	{
		if($this->input->get_post('submit'))
		{
          	$data['fullname'] = $this->input->get_post('fullname');
          	$data['address'] = $this->input->get_post('address');
          	$data['city'] = $this->input->get_post('city');
          	$data['zip_code'] = $this->input->get_post('zip_code');
          	$data['mobile'] = $this->input->get_post('mobile');
          	$data['email'] = $this->input->get_post('email');
          	$data['quantity'] = $this->input->get_post('quantity');
          	$data['total'] = $this->input->get_post('total');
          	$data['c_email'] = $this->input->get_post('c_email');
          	$data['pr_title'] = $this->input->get_post('pr_title');

			$this->email->from($data['email'],$data['fullname']);
			$this->email->to("admin@smartsheba.com");
			$this->email->subject("Message from customer");
			$this->email->message('Hello Sir/Madam, A customer named  '.$data['fullname'].' is order '.$data['quantity'].' pieces of product which you publish in smart_sheba.com recently. The total price is '.$data['total'].' for'.$data['quantity'].'  pieces of products. Address of the customer is '.$data['address'].'. City :'.$data['city'].'. Contact no : '.$data['mobile'].'. Email : '. $data['email']);
			if($this->email->send())
			{
				//$data['msg'] = "email send successfully";
				$this->check_discount();
			}
			else
			{
				$data['msg'] = "error in sending email";
				echo $data['msg'];
			}
          
		}
		else
		{

		}
	}



	public function conversation()
	{
		//echo "coming soon";
	  if($this->session->userdata('logged_in'))
	  {
	  	$member['list'] = $this->home_model->member_list();
        $this->parser->parse('Dashboard/conversation',$member);
	  }
	  else
	  {
        $this->login($j);
	  }
		
	}

	public function conversation_ids($id)
	{
		//echo "coming soon";
	  if($this->session->userdata('logged_in'))
	  {

	  	$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$result = $this->home_model->users_info($data);
		//$list = $member['list'];
		$chat['my_id'] = $result['id'];
		$chat['to_id'] = $id;
		$my_id = $result['id'];
		$to_id = $id;

		//$chat['list'] = $this->home_model->message_list($my_id,$to_id);
		$chat['list'] = $this->home_model->message_list($my_id,$to_id);
		//echo 'num of rows: '.$chat['msg'];
		$this->parser->parse('Dashboard/conversation_data',$chat);

	  }
	  else
	  {
        $this->login($j);
	  }
		
	}

	public function conversation_data()
	{
		//echo "coming soon";
	     if($this->input->get_post('submit'))
	     {
	     	 
             $data['msg'] = $this->input->get_post('msg');
             $data['my_id'] = $this->input->get_post('my_id');
             $data['to_id'] = $this->input->get_post('to_id');
             $this->home_model->send_message($data);
             /*echo $msg;
             echo $my_id;
             echo $to_id;*/
	     }
	}

	

	public function invite_friend_request($r_id)
	{
	  if($this->session->userdata('logged_in'))
	  {
        
        $session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$result = $this->home_model->users_info($data);
		$s_id = $result['id'];

        $data['r_id'] = $r_id;
		$resul1 = $this->home_model->users_info($data);
		$r_name = $result['fullname'];
         $this->home_model->invite_friend_request($s_id,$r_id,$r_name);
		//echo "request id.: ".$r_id."<br>";
		//echo "sender id.: ".$s_id;
         //$this->home_model->send_friend_request($s_id,$r_id);
	    
	  }
	  else
	  {
	  	$this->login($j);
	  }
      
	}

	


	public function invite_friend_request_admin($r_id)
	{
	  if($this->session->userdata('logged_in'))
	  {
        
        $session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$result = $this->home_model->users_info($data);
		$s_id = $result['id'];

        $data['r_id'] = $r_id;
		$resul1 = $this->home_model->users_info($data);
		$r_name = $result['fullname'];
         $this->home_model->invite_friend_request_admin($s_id,$r_id,$r_name);
		//echo "request id.: ".$r_id."<br>";
		//echo "sender id.: ".$s_id;
         //$this->home_model->send_friend_request($s_id,$r_id);
	    
	  }
	  else
	  {
	  	$this->login($j);
	  }
      
	}







//.......................Admin Dashboard Functionality start..............................	

	public function admin()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$this->load->view('Dashboard_admin/view_client',$data);
		}
		else
		{
			$this->login($j);
		}
		
	}


	public function add_product_admin()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$result = $this->home_model->users_info($data);
			//$this->load->view('view_add_product',array('error'=>''));
			$this->parser->parse('Dashboard_admin/view_add_product',$result);
			//echo "hello add product";
		}
		else
		{
			$this->login($j);

		}

	}

	public function add_product_details_admin()
	{
	
		if($this->input->get_post('submit'))
		{
			$this->form_validation->set_rules('title','Product title','trim|required');
			$this->form_validation->set_rules('pr_details','Product Details','trim|required');
			$this->form_validation->set_rules('pr_condition','Product Condition','trim|required');
			//$this->form_validation->set_rules('pr_discount','Product Discount','trim|numeric');
			$this->form_validation->set_rules('pr_price','Product Price','trim|required|numeric');
			//$this->form_validation->set_rules('pr_previous_price','Previous Price','trim|required|numeric');
			//$this->form_validation->set_rules('location','Location','trim|required');
			$this->form_validation->set_rules('division','Division','trim|required');
			$this->form_validation->set_rules('district','District','trim|required');
			$this->form_validation->set_rules('area','Area','trim|required');

			$this->form_validation->set_rules('email','Email','trim|required|valid_email');
			$this->form_validation->set_rules('mobile','Contact number','trim|required|numeric|max_length[11]|min_length[11]');
			//$this->form_validation->set_rules('pr_image','Product Image','callback_image_upload');
			//$this->form_validation->set_rules('pr_image','Product Image','required');

			if($this->form_validation->run()==FALSE)
			{
				$this->add_product();

			}
			else
			{
				$config['upload_path'] = './assets/upload_images/';
		        $config['allowed_types'] = 'gif|jpg|jpeg|png';
		        $config['file_name']     = 'pr_image_'.substr(md5(rand()),0,7);
		        $config['max_size'] = '5000';
		        $this->load->library('upload', $config);
		        if ( ! $this->upload->do_upload('pr_image')) 
		        {

		           //echo $this->upload->display_errors();
		        	echo "<script language='javascript' type='text/javascript'>";
					echo "alert('Image must be gif | jpg | jpeg | png and size must be 5MB');";
					echo "</script>";
					$this->add_product_admin();
					
							        	
		        	
		        } else {
		        	//here $file_data receives an array that has all the info
		            //pertaining to the upload, including 'file_name'
		            $file_data = $this->upload->data();
		            $product = array(
		               'pr_image'      => $file_data['file_name']
		            );

		            $session_data = $this->session->userdata('logged_in');
				    $data['username'] = $session_data['username'];
				    $result = $this->home_model->users_info($data);

					$product['title'] = $this->input->get_post('title');
					$product['c_id'] =  $result['id'];
					$product['pr_details'] = $this->input->get_post('pr_details');
					$product['pr_condition'] = $this->input->get_post('pr_condition');
					//$product['pr_discount'] = $this->input->get_post('pr_discount');
					$product['category'] = $this->input->get_post('category');
					$product['pr_price'] = $this->input->get_post('pr_price');
					$product['pr_previous_price'] = $this->input->get_post('pr_previous_price');
					$product['pr_commission'] = $this->input->get_post('pr_commission');
					//$product['location'] = $this->input->get_post('location');
					$product['division'] = $this->input->get_post('division');
					$product['district'] = $this->input->get_post('district');
					$product['thana'] = $this->input->get_post('thana');
					$product['area'] = $this->input->get_post('area');

					$product['mobile'] =   $this->input->get_post('mobile');
					$product['email'] =  $this->input->get_post('email');
					//$product['mobile'] =  $result['mobile'];
					//$product['email'] =  $result['email'];
					$product['location'] = $product['area'].','.$product['thana'].','.$product['district'].','.$product['division'];

					$this->home_model->add_client_product($product);
	
		        }
			}
		}

	}

	public function Uploaded_product_admin()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
		    $result = $this->home_model->users_info($data);
		    $c_id = $result['id'];
		    //echo $c_id;
		   // $config['base_url'] = "http://localhost/smart_sheba/home/Uploaded_product_admin";
		    $config['base_url'] = "/smart_sheba/home/Uploaded_product_admin";
		    $config['per_page'] = 12;
		    $config['num_links'] = 5;
		    $config["uri_segment"] = 3;
		    $config['total_rows'] = $this->home_model->product_pagination($c_id);
		    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		    $this->pagination->initialize($config);

			$product['details']=$this->home_model->client_uploaded_product($c_id, $config['per_page'],$page);
			$product['links'] = $this->pagination->create_links();
			$this->parser->parse('view_client_product',$product);

		}
		else
		{
			$this->login($j);
		}
	}

	public function upload_product_history_admin()
	{
		if($this->session->userdata('logged_in'))
		{
		
			$session_data = $this->session->userdata('logged_in');
		    $data['username'] = $session_data['username'];
		    $result = $this->home_model->users_info($data);
		    $client_id = $result['id'];
		    $this->upload_product_history_list_admin($client_id);
 

		}
		else
		{
			$this->login($j);
		}
	}

	public function upload_product_history_list_admin($client_id)
	{

		   //$config['base_url'] = "http://localhost/smart_sheba/home/upload_product_history_list_admin/$client_id";
		$config['base_url'] = "/smart_sheba/home/upload_product_history_list_admin/$client_id";
			$config['per_page'] = 12;
			$config['num_links'] = 5;
		    $config["uri_segment"] = 4;
			$config['total_rows'] = $this->home_model->admin_uploaded_product_history_pagination($client_id);
	        $config['full_tag_open'] = '<ul class="pagination">';
	        $config['full_tag_close'] = '</ul>';
	        $config['first_link'] = false;
	        $config['last_link'] = false;
	        $config['first_tag_open'] = '<li>';
	        $config['first_tag_close'] = '</li>';
	        $config['prev_link'] = '&laquo';
	        $config['prev_tag_open'] = '<li class="prev">';
	        $config['prev_tag_close'] = '</li>';
	        $config['next_link'] = '&raquo';
	        $config['next_tag_open'] = '<li>';
	        $config['next_tag_close'] = '</li>';
	        $config['last_tag_open'] = '<li>';
	        $config['last_tag_close'] = '</li>';
	        $config['cur_tag_open'] = '<li class="active"><a href="#">';
	        $config['cur_tag_close'] = '</a></li>';
	        $config['num_tag_open'] = '<li>';
	        $config['num_tag_close'] = '</li>';
	     



			$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;



			$this->pagination->initialize($config);
			//$product['list'] = $this->home_model->admin_uploaded_product_history( $config['per_page'],$page,$client_id);
			$product['list'] = $this->home_model->admin_uploaded_product_history( $config['per_page'],$page,$client_id);
			$product['links'] = $this->pagination->create_links();
			$this->parser->parse('Dashboard_admin/uploaded_product',$product);

	}

	public function delete_product_admin($pr_id,$c_id)
	{
      $client_id = $c_id;
      $product_id= $pr_id;
      $this->home_model->delete_product_admin($client_id,$product_id);
	}

	public function delete_information_admin($pr_id,$c_id)
	{
      $client_id = $c_id;
      $product_id= $pr_id;
      $this->home_model->delete_information_admin($client_id,$product_id);
	}

	public function edit_product_admin($pr_id,$c_id)
	{
		if($this->session->userdata('logged_in'))
		{
	      $client_id = $c_id;
	      $product_id= $pr_id;
	      $result = $this->home_model->edit_product_admin($client_id,$product_id);
	      $this->parser->parse('Dashboard_admin/edit_product_admin',$result);
		}
		else
		{
	       $this->login($j);
		}
      
	}

	public function edit_product_details_admin()
	{
		if($this->input->get_post('submit'))
		{

     		

        if($_FILES['pr_image']['size'] != 0)
			{
				$config['upload_path'] = './assets/upload_images/';
		        $config['allowed_types'] = 'gif|jpg|jpeg|png';
		        $config['file_name']     = 'image_'.substr(md5(rand()),0,7);
		        $config['max_size'] = '5000';
		        $this->load->library('upload', $config);
		        if ( ! $this->upload->do_upload('pr_image')) 
		         {

		           //echo $this->upload->display_errors();
		        	echo "<script language='javascript' type='text/javascript'>";
					echo "alert('Image must be gif | jpg | jpeg | png and size must be 5MB');";
					echo "</script>";
					$this->upload_product_history_admin();
								        	
		        	
		         } 
		         else 
		        {
		        	//here $file_data receives an array that has all the info
		            //pertaining to the upload, including 'file_name'
		            $file_data = $this->upload->data();
				    $update_info = array(
				       'pr_image'      => $file_data['file_name']
				     );

					$update_info['title'] = $this->input->get_post('title');
			     	//$update_info['image'] =  $result['image'];
					$update_info['pr_details'] = $this->input->get_post('pr_details');
					$update_info['pr_condition'] = $this->input->get_post('pr_condition');
					$update_info['pr_previous_price'] = $this->input->get_post('pr_previous_price');
					$update_info['pr_price'] = $this->input->get_post('pr_price');
					$update_info['location'] = $this->input->get_post('location');
					$update_info['email'] = $this->input->get_post('email');
					$update_info['mobile'] = $this->input->get_post('mobile');
					$update_info['id'] = $this->input->get_post('id');
					$update_info['client_id'] = $this->input->get_post('client_id');
					$this->home_model->update_product_details_admin($update_info);
	
		         }

				}
				    else
				    {
				    	$update_info['title'] = $this->input->get_post('title');
				     	//$update_info['image'] =  $result['image'];
						$update_info['pr_details'] = $this->input->get_post('pr_details');
						$update_info['pr_condition'] = $this->input->get_post('pr_condition');
						$update_info['pr_previous_price'] = $this->input->get_post('pr_previous_price');
						$update_info['pr_price'] = $this->input->get_post('pr_price');
						$update_info['location'] = $this->input->get_post('location');
						$update_info['email'] = $this->input->get_post('email');
						$update_info['mobile'] = $this->input->get_post('mobile');
						$update_info['id'] = $this->input->get_post('id');
						$update_info['client_id'] = $this->input->get_post('client_id');
						$result = $this->home_model->edit_product_admin($update_info['client_id'],$update_info['id']);
						$update_info['pr_image'] = $result['pr_image'];
						$this->home_model->update_product_details_admin($update_info);

				    }


				
	    	}
		else
		{
          $this->upload_product_history_admin();
		}
	}




	public function edit_information_admin($pr_id,$c_id)
	{
		if($this->session->userdata('logged_in'))
		{
           $client_id = $c_id;
           $product_id= $pr_id;
          //echo $client_id."  ".$product_id;
           $result = $this->home_model->edit_information_admin($client_id,$product_id);
           $this->parser->parse('Dashboard_admin/edit_information_admin',$result);
		}
		else
		{
			$this->login($j);
		}
     
	}

	public function edit_information_details_admin()
	{
		if($this->input->get_post('submit'))
		{

     		

        if($_FILES['info_image']['size'] != 0)
			{
				$config['upload_path'] = './assets/info_images/';
		        $config['allowed_types'] = 'gif|jpg|jpeg|png';
		        $config['file_name']     = 'image_'.substr(md5(rand()),0,7);
		        $config['max_size'] = '5000';
		        $this->load->library('upload', $config);
		        if ( ! $this->upload->do_upload('info_image')) 
		         {

		           //echo $this->upload->display_errors();
		        	echo "<script language='javascript' type='text/javascript'>";
					echo "alert('Image must be gif | jpg | jpeg | png and size must be 5MB');";
					echo "</script>";
					$this->upload_information_history_admin();
								        	
		        	
		         } 
		         else 
		        {
		        	//here $file_data receives an array that has all the info
		            //pertaining to the upload, including 'file_name'
		            $file_data = $this->upload->data();
				    $update_info = array(
				       'info_image'      => $file_data['file_name']
				     );

					$update_info['info_title'] = $this->input->get_post('info_title');
			     	//$update_info['image'] =  $result['image'];
					$update_info['info_description'] = $this->input->get_post('info_description');
					$update_info['info_location'] = $this->input->get_post('info_location');
					$update_info['info_website'] = $this->input->get_post('info_website');
					$update_info['info_location'] = $this->input->get_post('info_location');
					$update_info['id'] = $this->input->get_post('id');
					$update_info['client_id'] = $this->input->get_post('client_id');
					$this->home_model->update_information_details_admin($update_info);
	
		         }

				}
				    else
				    {
				    	 $update_info['info_title'] = $this->input->get_post('info_title');
			     	//$update_info['image'] =  $result['image'];
					     $update_info['info_description'] = $this->input->get_post('info_description');
					    $update_info['info_location'] = $this->input->get_post('info_location');
					    $update_info['info_website'] = $this->input->get_post('info_website');
					    $update_info['info_location'] = $this->input->get_post('info_location');
					    $update_info['id'] = $this->input->get_post('id');
					    $update_info['client_id'] = $this->input->get_post('client_id');
						$result = $this->home_model->edit_information_admin($update_info['client_id'],$update_info['id']);
						$update_info['info_image'] = $result['info_image'];
						$this->home_model->update_information_details_admin($update_info);


				    }				
	    	}
		else
		{
          $this->upload_product_history_admin();
		}
	}




	public function upload_information_history_admin()
	{
		//echo "coming soon";
		if($this->session->userdata('logged_in'))
		{
		
			$session_data = $this->session->userdata('logged_in');
		    $data['username'] = $session_data['username'];
		    $result = $this->home_model->users_info($data);
		    $client_id = $result['id'];
		    $this->upload_information_history_list_admin($client_id);
 

		}
		else
		{
			$this->login($j);
		}
	}

	public function upload_information_history_list_admin($client_id)
	{

		  // $config['base_url'] = "http://localhost/smart_sheba/home/upload_information_history_list_admin/$client_id";
		  $config['base_url'] = "/smart_sheba/home/upload_information_history_list_admin/$client_id";
			$config['per_page'] = 12;
			$config['num_links'] = 5;
		    $config["uri_segment"] = 4;
			$config['total_rows'] = $this->home_model->admin_uploaded_information_history_pagination($client_id);
	        $config['full_tag_open'] = '<ul class="pagination">';
	        $config['full_tag_close'] = '</ul>';
	        $config['first_link'] = false;
	        $config['last_link'] = false;
	        $config['first_tag_open'] = '<li>';
	        $config['first_tag_close'] = '</li>';
	        $config['prev_link'] = '&laquo';
	        $config['prev_tag_open'] = '<li class="prev">';
	        $config['prev_tag_close'] = '</li>';
	        $config['next_link'] = '&raquo';
	        $config['next_tag_open'] = '<li>';
	        $config['next_tag_close'] = '</li>';
	        $config['last_tag_open'] = '<li>';
	        $config['last_tag_close'] = '</li>';
	        $config['cur_tag_open'] = '<li class="active"><a href="#">';
	        $config['cur_tag_close'] = '</a></li>';
	        $config['num_tag_open'] = '<li>';
	        $config['num_tag_close'] = '</li>';

			$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

			$this->pagination->initialize($config);
			//$product['list'] = $this->home_model->admin_uploaded_product_history( $config['per_page'],$page,$client_id);
			$info['list'] = $this->home_model->admin_uploaded_information_history( $config['per_page'],$page,$client_id);
			$info['links'] = $this->pagination->create_links();
			$this->parser->parse('Dashboard_admin/uploaded_information',$info);

	}

	





	public function add_information_admin()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$result = $this->home_model->users_info($data);
			$this->parser->parse('Dashboard_admin/view_add_information',$result);
		}
		else
		{
			$this->login($j);

		}
	}

	public function add_information_details_admin()
	{
		if($this->input->get_post('submit'))
		{
			$this->form_validation->set_rules('title','Information title','trim|required');
			$this->form_validation->set_rules('description','Description','trim|required');
			$this->form_validation->set_rules('division','Division','trim|required');
			$this->form_validation->set_rules('district','District','trim|required');
			$this->form_validation->set_rules('area','Area','trim|required');
			//$this->form_validation->set_rules('website','Website','trim|required|valid_url');
			$this->form_validation->set_rules('mobile','Contact number','trim|required|min_length[5]|max_length[15]');
			//$this->form_validation->set_rules('pr_image','Product Image','callback_image_upload');
			//$this->form_validation->set_rules('pr_image','Product Image','required');

			if($this->form_validation->run()==FALSE)
			{
				$this->add_information_admin();

			}
			else
			{
				if($_FILES['image']['size'] != 0)
				{
				$config['upload_path'] = './assets/info_images/';
		        $config['allowed_types'] = 'gif|jpg|jpeg|png';
		        $config['file_name']     = 'image_'.substr(md5(rand()),0,7);
		        $config['max_size'] = '5000';
		        $this->load->library('upload', $config);
		        if ( ! $this->upload->do_upload('image')) 
		        {

		           //echo $this->upload->display_errors();
		        	echo "<script language='javascript' type='text/javascript'>";
					echo "alert('Image must be gif | jpg | jpeg | png and size must be 5MB');";
					echo "</script>";
					$this->add_information_admin();
								        	
		        	
		        } 
		        else 
		        {
		        	//here $file_data receives an array that has all the info
		            //pertaining to the upload, including 'file_name'
		            $file_data = $this->upload->data();
		            $information = array(
		               'image'      => $file_data['file_name']
		            );

		            $session_data = $this->session->userdata('logged_in');
				    $data['username'] = $session_data['username'];
				    $result = $this->home_model->users_info($data);

					$information['title'] = $this->input->get_post('title');
					$information['c_id'] =  $result['id'];
					$information['description'] = $this->input->get_post('description');
					$information['division'] = $this->input->get_post('division');
					$information['district'] = $this->input->get_post('district');
					$information['thana'] = $this->input->get_post('thana');
					$information['area'] = $this->input->get_post('area');
					$information['category'] = $this->input->get_post('category');
					$information['website'] = $this->input->get_post('website');
					$information['mobile'] = $this->input->get_post('mobile');
					$information['email'] = $this->input->get_post('email');
					$information['location'] = $information['area'].','.$information['thana'].','.$information['district'].','.$information['division'];

					$this->home_model->add_information($information);					
					//echo 'Location : '.$information['location']."<br>";

	
		         }

				}
				else
				{
					$session_data = $this->session->userdata('logged_in');
				    $data['username'] = $session_data['username'];
				    $result = $this->home_model->users_info($data);

					$information['title'] = $this->input->get_post('title');
					$information['c_id'] =  $result['id'];
					$information['description'] = $this->input->get_post('description');
					$information['division'] = $this->input->get_post('division');
					$information['district'] = $this->input->get_post('district');
					$information['thana'] = $this->input->get_post('thana');
					$information['area'] = $this->input->get_post('area');
					$information['category'] = $this->input->get_post('category');
					$information['website'] = $this->input->get_post('website');
					$information['mobile'] = $this->input->get_post('mobile');
					$information['email'] = $this->input->get_post('email');
					$information['image'] = "";
					$information['location'] = $information['area'].','.$information['thana'].','.$information['district'].','.$information['division'];

					$this->home_model->add_information($information);	
					//echo 'Location : '.$information['location']."<br>";

				}

			}
		}

	}

	public function uploaded_information_admin()
	{

	 if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
		    $result = $this->home_model->users_info($data);
		    $c_id = $result['id'];
		    //echo $c_id;
		    //$config['base_url'] = "http://localhost/smart_sheba/home/uploaded_information_admin";
		    $config['base_url'] = "/smart_sheba/home/uploaded_information_admin";
		    $config['per_page'] = 12;
		    $config['num_links'] = 5;
		    $config["uri_segment"] = 3;
		    $config['total_rows'] = $this->home_model->information_pagination($c_id);
		    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		    $this->pagination->initialize($config);

			$information['details']=$this->home_model->client_uploaded_information($c_id, $config['per_page'],$page);
			$information['links'] = $this->pagination->create_links();
			$this->parser->parse('view_client_information',$information);

		}
		else
		{
			$this->login($j);
		}

	}

	public function profile_client_admin()
	{
		//$this->parser->parse('Dashboard/profile',array());
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			//echo $data['username'];
			$result = $this->home_model->users_info($data);
			//echo $result['fullname'];
			//$this->parser->parse('view_update_profile',$result);
			$this->parser->parse('Dashboard_admin/profile',$result);
		}
		else
		{
			$this->login($j);

		}
	}

	public function update_client_information_admin()
	{
		if($this->session->userdata('logged_in'))
		{
			$this->form_validation->set_rules('fullname','Fullname','trim|required|min_length[5]');
			$this->form_validation->set_rules('email','Email','trim|required|valid_email');
			$this->form_validation->set_rules('mobile','Mobile','trim|required|numeric|min_length[11]|max_length[11]');
			$this->form_validation->set_rules('describe_myself','Describe Yourself','trim|required');
			if($this->form_validation->run()==FALSE)
			{
				$this->profile_client_admin();
			}
			else
			{
				$session_data = $this->session->userdata('logged_in');
				$data['username'] = $session_data['username'];
				$result = $this->home_model->users_info($data);
				//..................................................................
				if($_FILES['image']['size'] != 0)
				{
				$config['upload_path'] = './assets/profile_images/';
		        $config['allowed_types'] = 'gif|jpg|jpeg|png';
		        $config['file_name']     = 'image_'.substr(md5(rand()),0,7);
		        $config['max_size'] = '5000';
		        $this->load->library('upload', $config);
		        if ( ! $this->upload->do_upload('image')) 
		        {

		           //echo $this->upload->display_errors();
		        	echo "<script language='javascript' type='text/javascript'>";
					echo "alert('Image must be gif | jpg | jpeg | png and size must be 5MB');";
					echo "</script>";
					$this->profile_client_admin();
								        	
		        	
		        } 
		        else 
		        {
		        	//here $file_data receives an array that has all the info
		            //pertaining to the upload, including 'file_name'
		            $file_data = $this->upload->data();
				    $update_info = array(
				       'image'      => $file_data['file_name']
				     );

					$update_info['fullname'] = $this->input->get_post('fullname');
					//$update_info['image'] =  $result['image'];

					$update_info['father_name'] = $this->input->get_post('father_name');
					$update_info['mother_name'] = $this->input->get_post('mother_name');
					$update_info['permanent_address'] = $this->input->get_post('permanent_address');
					$update_info['professional_address'] = $this->input->get_post('professional_address');
					$update_info['date_of_birth'] = $this->input->get_post('date_of_birth');
					$update_info['social_link'] = $this->input->get_post('social_link');


					$update_info['email'] = $this->input->get_post('email');
					$update_info['mobile'] = $this->input->get_post('mobile');
					$update_info['blood_group'] = $this->input->get_post('blood_group');
					$update_info['age'] = $this->input->get_post('age');
					$update_info['work_history'] = $this->input->get_post('work_history');
					$update_info['study_background'] = $this->input->get_post('study_background');
					$update_info['describe_myself'] = $this->input->get_post('describe_myself');
					$update_info['address'] = $this->input->get_post('address');
					$session_data = $this->session->userdata('logged_in');
				    $update_info['username'] = $session_data['username'];
					$this->home_model->update_information($update_info);
					//echo "image: ".$update_info['image'];
	
		         }

				}
				    else
				    {
				    	$update_info['fullname'] = $this->input->get_post('fullname');

				    	$update_info['father_name'] = $this->input->get_post('father_name');
						$update_info['mother_name'] = $this->input->get_post('mother_name');
						$update_info['permanent_address'] = $this->input->get_post('permanent_address');
						$update_info['professional_address'] = $this->input->get_post('professional_address');
						$update_info['date_of_birth'] = $this->input->get_post('date_of_birth');
						$update_info['social_link'] = $this->input->get_post('social_link');


						$update_info['image'] =  $result['image'];
						$update_info['email'] = $this->input->get_post('email');
						$update_info['mobile'] = $this->input->get_post('mobile');
						$update_info['blood_group'] = $this->input->get_post('blood_group');
						$update_info['age'] = $this->input->get_post('age');
						$update_info['work_history'] = $this->input->get_post('work_history');
						$update_info['study_background'] = $this->input->get_post('study_background');
						$update_info['describe_myself'] = $this->input->get_post('describe_myself');
						$update_info['address'] = $this->input->get_post('address');
						$session_data = $this->session->userdata('logged_in');
				        $update_info['username'] = $session_data['username'];
				       // echo "image: ".$update_info['image'];
						$this->home_model->update_information($update_info);

				    }
				//.................................................................
			}

		}
		else
		{
			$this->login($j);

		}
	}



	public function find_members_admin()
	{

      if($this->session->userdata('logged_in'))
      {
		//$config['base_url'] = "http://localhost/smart_sheba/home/find_members_admin";
		$config['base_url'] = "/smart_sheba/home/find_members_admin";
	    $config['per_page'] = 12;
		$config['num_links'] = 5;
	    $config["uri_segment"] = 3;
	    $config['total_rows'] = $this->home_model->all_member_pagination();




	    $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';      



		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;



		$this->pagination->initialize($config);
		$member['list'] = $this->home_model->all_member( $config['per_page'],$page);
		$member['links'] = $this->pagination->create_links();
		$this->parser->parse('Dashboard_admin/find_members',$member);
	  }
	  else
	  {
	  	$this->login($j);
	  }
		//$this->parser->parse('Dashboard/find_members',array());
	}

	public function send_friend_request_admin($r_id)
	{
	  if($this->session->userdata('logged_in'))
	  {
        
        $session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$result = $this->home_model->users_info($data);
		$s_id = $result['id'];

        $data['r_id'] = $r_id;
		$resul1 = $this->home_model->users_info($data);
		$r_name = $result['fullname'];
        $this->home_model->send_friend_request($s_id,$r_id,$r_name);
		//echo "request id.: ".$r_id."<br>";
		//echo "sender id.: ".$s_id;
	     //$this->home_model->send_friend_request_admin($s_id,$r_id);
	  }
	  else
	  {
	  	$this->login($j);
	  }
      
	}

	public function friend_request_admin()
    {
       if($this->session->userdata('logged_in'))
    	{
           //$this->parser->parse('Dashboard/friend_request',array());
    		$session_data = $this->session->userdata('logged_in');
		    $data['username'] = $session_data['username'];
		    $result = $this->home_model->users_info($data);
		    $s_id = $result['id'];
    		$result['list'] = $this->home_model->pending_friend_request_admin($s_id);
    		$this->parser->parse('Dashboard_admin/friend_request',$result);

    	}
    	else
    	{
    		$this->login($j);
    	}
    }

    public function friend_request_approve_admin($id)
    {
    	if($this->session->userdata('logged_in'))
    	{
           $this->home_model->friend_request_approve_admin($id);
    	}
    	else
    	{
           $this->login($j);
    	}
        
    	//echo " id: ".$id;
    }

    public function friend_request_delete_admin($id)
    {
    	if($this->session->userdata('logged_in'))
    	{
           $this->home_model->friend_request_delete_admin($id);
    		//echo " id: ".$id;
    	}
    	else
    	{
           $this->login($j);
    	}
        
    	
    }

    public function friend_list_admin()
    {
    	if($this->session->userdata('logged_in'))
    	{
    		$session_data = $this->session->userdata('logged_in');
		    $data['username'] = $session_data['username'];
		    $result = $this->home_model->users_info($data);
		    $s_id = $result['id'];
            $result['list'] = $this->home_model->friend_list_admin($s_id);
            $this->parser->parse('Dashboard_admin/friend_list',$result);
    	}
    	else
    	{
    		$this->login($j);
    	}
    }

    public function unfriend_admin($id)
    {
      //echo "unfiend id: ".$id;
      if($this->session->userdata('logged_in'))
      {
      	 //echo "unfiend id: ".$id;
         $this->home_model->unfriend_admin($id);
      }
      else
      {
      	$this->login($j);
      }
    }



	public function active_post()
	{
		if($this->session->userdata('logged_in'))
		{
		//echo "coming soon";
		 $this->parser->parse('Dashboard_admin/active_post',array());
		}
		else
		{
			$this->login($j);
		}
	}

	public function information_post()
	{
		if($this->session->userdata('logged_in'))
		{
		//echo "coming soon";
		//$config['base_url'] = "http://localhost/smart_sheba/home/information_post";
		$config['base_url'] = "/smart_sheba/home/information_post";
		$config['per_page'] = 12;
		$config['num_links'] = 5;
	    $config["uri_segment"] = 3;
		$config['total_rows'] = $this->home_model->all_information_pagination();


//config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

//......finish.......................................        



			$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;



			$this->pagination->initialize($config);
			$information['list'] = $this->home_model->all_information( $config['per_page'],$page);
			$information['links'] = $this->pagination->create_links();



		 $this->parser->parse('Dashboard_admin/information_post',$information);
		}
		else
		{
			$this->login($j);
		}
	}


	public function delete_information($id)
	{
      //echo 'coming soon';
		$this->home_model->delete_information($id);
	}

	public function delete_product($id)
	{
      //echo 'coming soon';
		$this->home_model->delete_product($id);
	}

	public function delete_information_pending($id)
	{
      //echo 'coming soon';
		$this->home_model->delete_information_pending($id);
	}

	public function delete_product_pending($id)
	{
      //echo 'coming soon';
		$this->home_model->delete_product_pending($id);
	}


	public function product_post()
	{
		if($this->session->userdata('logged_in'))
		{
		//echo "coming soon";
		//$config['base_url'] = "http://localhost/smart_sheba/home/product_post";
		$config['base_url'] = "/smart_sheba/home/product_post";
		$config['per_page'] = 12;
		$config['num_links'] = 5;
	    $config["uri_segment"] = 3;
		$config['total_rows'] = $this->home_model->all_product_pagination();


//config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

//......finish.......................................        



			$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;



			$this->pagination->initialize($config);
			$information['list'] = $this->home_model->all_product( $config['per_page'],$page);
			$information['links'] = $this->pagination->create_links();



		 $this->parser->parse('Dashboard_admin/product_post',$information);
		}
		else
		{
			$this->login($j);
		}
	}




	public function pending_post()
	{
	  if($this->session->userdata('logged_in'))
	  {
		 $this->parser->parse('Dashboard_admin/pending_post',array());
	  }
	  else
	  {
	  	$this->login($j);
	  }
		
	}

	public function information_pending_post()
	{
		if($this->session->userdata('logged_in'))
		{
		//echo "coming soon";

		//$config['base_url'] = "http://localhost/smart_sheba/home/information_pending_post";
		$config['base_url'] = "/smart_sheba/home/information_pending_post";
		$config['per_page'] = 12;
		$config['num_links'] = 5;
	    $config["uri_segment"] = 3;
		$config['total_rows'] = $this->home_model->all_information_pending_pagination();


//config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

//......finish.......................................        



			$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;



			$this->pagination->initialize($config);
			$information['list'] = $this->home_model->all_pending_information( $config['per_page'],$page);
			$information['links'] = $this->pagination->create_links();



		 $this->parser->parse('Dashboard_admin/pending_information_post',$information);
		}
		else
		{
			$this->login($j);
		}

	}

	public function information_publish($id)
	{
		//echo "coming soon";
		$this->home_model->information_publish($id);
	}

	public function product_pending_post()
	{
		if($this->session->userdata('logged_in'))
		{
		//echo "coming soon";
		//$config['base_url'] = "http://localhost/smart_sheba/home/product_pending_post";
		$config['base_url'] = "/smart_sheba/home/product_pending_post";
		$config['per_page'] = 12;
		$config['num_links'] = 5;
	    $config["uri_segment"] = 3;
		$config['total_rows'] = $this->home_model->all_product_pending_pagination();


//config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

//......finish.......................................        



			$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;



			$this->pagination->initialize($config);
			$information['list'] = $this->home_model->all_pending_product( $config['per_page'],$page);
			$information['links'] = $this->pagination->create_links();


		 $this->parser->parse('Dashboard_admin/pending_product_post',$information);
		}
		else
		{
			$this->login($j);
		}
		
	}

	public function product_publish($id)
	{
		//echo "coming soon";
		$this->home_model->product_publish($id);
	}


	public function active_user_all_type()
	{
       $this->load->view('Dashboard_admin/active_user_all_type');
	}

    public function active_user_general()
    {
    	//echo "work is going on";
    	if($this->session->userdata('logged_in'))
		{
		//echo "coming soon";
		//$config['base_url'] = "http://localhost/smart_sheba/home/active_user";
		$config['base_url'] = "/smart_sheba/home/active_user_general";
	    $config['per_page'] = 12;
		$config['num_links'] = 5;
	    $config["uri_segment"] = 3;
	    $config['total_rows'] = $this->home_model->all_member_pagination_general();



//config for bootstrap pagination class integration

	    $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
    
//......finish.......................................        



		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;



		$this->pagination->initialize($config);
		//$member['list'] = $this->home_model->all_member( $config['per_page'],$page);
		$member['list'] = $this->home_model->all_member_active_general( $config['per_page'],$page);
		$member['links'] = $this->pagination->create_links();
		//$this->parser->parse('member',$member);
		$this->parser->parse('Dashboard_admin/active_user_general',$member);
	 }
	 else
	 {
	 	$this->login($j);
	 }

    }


	public function active_user()
	{
		if($this->session->userdata('logged_in'))
		{
		//echo "coming soon";
		//$config['base_url'] = "http://localhost/smart_sheba/home/active_user";
		$config['base_url'] = "/smart_sheba/home/active_user";
	    $config['per_page'] = 12;
		$config['num_links'] = 5;
	    $config["uri_segment"] = 3;
	    $config['total_rows'] = $this->home_model->all_member_pagination();



//config for bootstrap pagination class integration

	    $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
    
//......finish.......................................        



		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;



		$this->pagination->initialize($config);
		//$member['list'] = $this->home_model->all_member( $config['per_page'],$page);
		$member['list'] = $this->home_model->all_member_active( $config['per_page'],$page);
		$member['links'] = $this->pagination->create_links();
		//$this->parser->parse('member',$member);
		$this->parser->parse('Dashboard_admin/active_user',$member);
	 }
	 else
	 {
	 	$this->login($j);
	 }

	}

	public function delete_user($id)
	{
		//echo "coming soon. :".$id;
		$this->home_model->delete_user($id);
	}
	public function delete_user_general($id)
	{
		//echo "coming soon. :".$id;
		$this->home_model->delete_user_general($id);
	}

	public function delete_user_pending($id)
	{
		//echo "coming soon. :".$id;
		$this->home_model->delete_user_pending($id);
	}

	public function delete_user_pending_general($id)
	{
		//echo "coming soon. :".$id;
		$this->home_model->delete_user_pending_general($id);
	}

	public function pending_user_all_type()
	{
       $this->load->view('Dashboard_admin/pending_user_all_type');
	}

	public function pending_user_general()
	{
		if($this->session->userdata('logged_in'))
	  {
		//echo "coming soon";
		//$config['base_url'] = "http://localhost/smart_sheba/home/pending_user";
		$config['base_url'] = "/smart_sheba/home/pending_user_general";
	    $config['per_page'] = 12;
		$config['num_links'] = 5;
	    $config["uri_segment"] = 3;
	    $config['total_rows'] = $this->home_model->all_member_pagination_pending_general();



//config for bootstrap pagination class integration

	    $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
    
//......finish.......................................        



		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;



		$this->pagination->initialize($config);
		$member['list'] = $this->home_model->all_member_pending_general( $config['per_page'],$page);
		$member['links'] = $this->pagination->create_links();
		$this->parser->parse('Dashboard_admin/pending_user_general',$member);
	 }
	 else
	 {
	 	$this->login($j);
	 }

	}


	public function pending_user()
	{
	  if($this->session->userdata('logged_in'))
	  {
		//echo "coming soon";
		//$config['base_url'] = "http://localhost/smart_sheba/home/pending_user";
		$config['base_url'] = "/smart_sheba/home/pending_user";
	    $config['per_page'] = 12;
		$config['num_links'] = 5;
	    $config["uri_segment"] = 3;
	    $config['total_rows'] = $this->home_model->all_member_pagination_pending();



//config for bootstrap pagination class integration

	    $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
    
//......finish.......................................        



		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;



		$this->pagination->initialize($config);
		$member['list'] = $this->home_model->all_member_pending( $config['per_page'],$page);
		$member['links'] = $this->pagination->create_links();
		$this->parser->parse('Dashboard_admin/pending_user',$member);
	 }
	 else
	 {
	 	$this->login($j);
	 }
	}

	public function active($id)
	{
      // echo "coming soon....active id: ".$id;
		$this->home_model->activation_user($id);
	}

	public function active_general($id)
	{
      // echo "coming soon....active id: ".$id;
		$this->home_model->activation_user_general($id);
	}


	public function view_profile_admin($id)
	{
		//echo "coming soon ".$id;
		 if($this->session->userdata('logged_in'))
		 {
		 	$result = $this->home_model->specific_client_info($id);
		    $this->parser->parse('Dashboard_admin/client_profile',$result);

		 }
		 else
		 {
		 	$this->login($j);
		 }
		
	}

	public function invite_members()
	{
		//echo "coming soon";
	  if($this->session->userdata('logged_in'))
	  {
         $this->parser->parse('Dashboard/invite',array());
	  }
	  else
	  {
        $this->login($j);
	  }
		
	}

	public function invite_client()
	{
		if($this->input->get_post('submit'))
		{
			$email = $this->input->get_post('email');
			//echo $email;
			$result = $this->home_model->invite_client($email);
			$this->parser->parse('Dashboard/invite_client',$result);
		}
	}


	public function invite_members_admin()
	{
		 if($this->session->userdata('logged_in'))
		 {
		 	$this->parser->parse('Dashboard_admin/invite',array());

		 }
		 else
		 {
		 	$this->login($j);
		 }
		
	}

	public function invite_admin()
	{


		if($this->input->get_post('submit'))
		{
			$email = $this->input->get_post('email');
			//echo $email;
			$result = $this->home_model->invite_admin($email);
			$this->parser->parse('Dashboard_admin/invite_client',$result);
			//return redirect('home/invite_admin_data/'.$result);

		}
	}


	public function check_discount_admin()
	{
		//echo "coming soon";
	 if($this->session->userdata('logged_in'))
	  {
         //$this->parser->parse('Dashboard/check_discount',array());
	  	 //$this->parser->parse('Dashboard/shop_discount_client',array());
		//$config['base_url'] = "http://localhost/smart_sheba/home/check_discount_admin";
		$config['base_url'] = "/smart_sheba/home/check_discount_admin";
		$config['per_page'] = 12;
		$config['num_links'] = 5;
	    $config["uri_segment"] = 3;
		$config['total_rows'] = $this->home_model->all_product_discount_pagination();



        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
     



		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;



		$this->pagination->initialize($config);
		$discount['list'] = $this->home_model->all_product_discount( $config['per_page'],$page);
		$discount['links'] = $this->pagination->create_links();
		$this->parser->parse('Dashboard_admin/shop_discount_client',$discount);




	  }
	  else
	  {
        $this->login($j);
	  }
		
	}


	public function specific_product_discount_admin($category)
	{
		//$config['base_url'] = "http://localhost/smart_sheba/home/specific_product_discount_admin/$category";
		$config['base_url'] = "/smart_sheba/home/specific_product_discount_admin/$category";
		$config['per_page'] = 12;
		$config['num_links'] = 5;
	    $config["uri_segment"] = 4;
	    $config['total_rows'] = $this->home_model->specific_product_discount_pagination($category);

        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
 



	    $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

        $this->pagination->initialize($config);
	    $specific_product_discount['list'] = $this->home_model->specific_product_discount($category,$config['per_page'],$page);
		$specific_product_discount['links'] = $this->pagination->create_links();
		$this->parser->parse('Dashboard_admin/view_specific _category_discount_client',$specific_product_discount);

	}

	public function single_product_discount_admin($id,$client_id)
	{
		 if($this->session->userdata('logged_in'))
		 {
		//echo "single product id: ".$id;
			$product= $this->home_model->individual_product_details($id);
			$image = $this->home_model->client_image($client_id);
			$data = $product+$image ;
			$this->parser->parse('Dashboard_admin/single_product_discount_client',$data);
	    }  
	    else
	    {
	    	$this->login($j);
	    } 
	
	}

	public function add_to_cart_admin()
	{
		if($this->input->get_post('submit'))
		{
			//$this->form_validation->set_rules('quantity','Quantity','trim|requir');
			$data['id'] = $this->input->get_post('id');
			$data['qnty'] = $this->input->get_post('quantity');
			$data['price'] = $this->input->get_post('price');
			$data['total'] = $data['qnty']*$data['price'];
			$product= $this->home_model->individual_product_details($data['id']);
			$data = $data+$product;
		    $this->parser->parse('Dashboard_admin/add_to_cart_client',$data);

		}
	}

	public function product_order_data_admin()
	{
		if($this->input->get_post('submit'))
		{
          	$data['fullname'] = $this->input->get_post('fullname');
          	$data['address'] = $this->input->get_post('address');
          	$data['city'] = $this->input->get_post('city');
          	$data['zip_code'] = $this->input->get_post('zip_code');
          	$data['mobile'] = $this->input->get_post('mobile');
          	$data['email'] = $this->input->get_post('email');
          	$data['quantity'] = $this->input->get_post('quantity');
          	$data['total'] = $this->input->get_post('total');
          	$data['c_email'] = $this->input->get_post('c_email');
          	$data['pr_title'] = $this->input->get_post('pr_title');

          	/*echo $data['fullname']."<br>";
          	echo $data['address']."<br>";
          	echo $data['city']."<br>";
          	echo $data['zip_code']."<br>";
          	echo $data['mobile']."<br>";
          	echo $data['email']."<br>";
          	echo $data['quantity']."<br>";
          	echo $data['total']."<br>";
          	echo $data['c_email']."<br>";*/

			$this->email->from($data['email'],$data['fullname']);
			$this->email->to("admin@smartsheba.com",$data['c_email']);
			$this->email->subject("Message from customer");
			$this->email->message('Hello Sir/Madam, A customer named  '.$data['fullname'].' is order '.$data['quantity'].' pieces of product which you publish in smart_sheba.com recently. The total price is '.$data['total'].' for'.$data['quantity'].'  pieces of products. Address of the customer is '.$data['address'].'. City :'.$data['city'].'. Contact no : '.$data['mobile'].'. Email : '. $data['email']);
			if($this->email->send())
			{
				//$data['msg'] = "email send successfully";
				$this->check_discount_admin();
			}
			else
			{
				$data['msg'] = "error in sending email";
				echo $data['msg'];
			}
          
		}
		else
		{

		}
	}


	
	public function conversation_admin()
	{
		//echo "coming soon";
	  if($this->session->userdata('logged_in'))
	  {
	  	$member['list'] = $this->home_model->member_list();
        $this->parser->parse('Dashboard_admin/conversation',$member);
	  }
	  else
	  {
        $this->login($j);
	  }
		
	}

	public function conversation_admin_ids($id)
	{
		//echo "coming soon";
	  if($this->session->userdata('logged_in'))
	  {

	  	$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$result = $this->home_model->users_info($data);
		//$list = $member['list'];
		$chat['my_id'] = $result['id'];
		$chat['to_id'] = $id;
		$my_id = $result['id'];
		$to_id = $id;

		//$chat['list'] = $this->home_model->message_list($my_id,$to_id);
		$chat['list'] = $this->home_model->message_list_admin($my_id,$to_id);
		//echo 'num of rows: '.$chat['msg'];
		$this->parser->parse('Dashboard_admin/conversation_data',$chat);

	  }
	  else
	  {
        $this->login($j);
	  }
		
	}

	public function conversation_data_admin()
	{
		//echo "coming soon";
	     if($this->input->get_post('submit'))
	     {
	     	 
             $data['msg'] = $this->input->get_post('msg');
             $data['my_id'] = $this->input->get_post('my_id');
             $data['to_id'] = $this->input->get_post('to_id');
             $this->home_model->send_message_admin($data);
             /*echo $msg;
             echo $my_id;
             echo $to_id;*/
	     }
	}



	public function pending_product_details_admin($id)
	{
       //echo 'pending product id: '.$id;
		if($this->session->userdata('logged_in'))
		 {
		 	$product = $this->home_model->individual_product_details($id);
		    $this->parser->parse('Dashboard_admin/single_product',$product);

		 }
		 else
		 {
		 	$this->login($j);
		 }
		
	}

	public function active_product_details_admin($id)
	{
       //echo 'active product id: '.$id;
		if($this->session->userdata('logged_in'))
		 {
		 	$product = $this->home_model->individual_product_details($id);
		   $this->parser->parse('Dashboard_admin/single_product',$product);

		 }
		 else
		 {
		 	$this->login($j);
		 }
		
	}

	public function pending_information_details_admin($id)
	{
       //echo 'pending information id: '.$id;
		if($this->session->userdata('logged_in'))
		 {
		 	$information = $this->home_model->individual_information_details($id);
		    $this->parser->parse('Dashboard_admin/single_info',$information);

		 }
		 else
		 {
		 	$this->login($j);
		 }
	}

	public function active_information_details_admin($id)
	{
       //echo 'active information id: '.$id;
		if($this->session->userdata('logged_in'))
		 {
		 	$information = $this->home_model->individual_information_details($id);
		   $this->parser->parse('Dashboard_admin/single_info',$information);

		 }
		 else
		 {
		 	$this->login($j);
		 }
		
	}




	public function change_password()
	{
		if($this->session->userdata('logged_in'))
		{
          $this->load->view("Dashboard/view_changed_password");
		}
		else
		{
			$this->login($j);
		}
		

	}

	public function change_password_admin()
	{
		if($this->session->userdata('logged_in'))
		{
          $this->load->view("Dashboard_admin/view_changed_password");
		}
		else
		{
			$this->login($j);
		}
		

	}

	public function change_password_data()
	{
       if($this->input->get_post('submit'))
       {
       	$this->form_validation->set_rules('o_password',' Old Password','trim|required|min_length[5]');
       	$this->form_validation->set_rules('n_password',' New Password','trim|required|min_length[5]');
       	$this->form_validation->set_rules('c_password',' Confirm Password','trim|required|min_length[5]|matches[n_password]');
       	if($this->form_validation->run()==FALSE)
       	{
       		$this->change_password();
       	}
       	else
       	{
           $data['o_password'] = md5($this->input->get_post('o_password'));
           $data['n_password'] = md5($this->input->get_post('n_password'));
           $data['c_password'] = md5($this->input->get_post('c_password'));

           $session_data = $this->session->userdata('logged_in');
		   $data['username'] = $session_data['username'];
		   $data['password'] = $session_data['password'];

           $result = $this->home_model->change_password($data);
           if($result == FALSE)
           {
              $data['msg'] = "old password not match";
           	  $this->load->view("Dashboard/view_changed_password",$data);
           	
           }
       	}

       }
	}

	public function change_password_data_admin()
	{
       if($this->input->get_post('submit'))
       {
       	$this->form_validation->set_rules('o_password',' Old Password','trim|required|min_length[5]');
       	$this->form_validation->set_rules('n_password',' New Password','trim|required|min_length[5]');
       	$this->form_validation->set_rules('c_password',' Confirm Password','trim|required|min_length[5]|matches[n_password]');
       	if($this->form_validation->run()==FALSE)
       	{
       		$this->change_password();
       	}
       	else
       	{
           $data['o_password'] = md5($this->input->get_post('o_password'));
           $data['n_password'] = md5($this->input->get_post('n_password'));
           $data['c_password'] = md5($this->input->get_post('c_password'));

           $session_data = $this->session->userdata('logged_in');
		   $data['username'] = $session_data['username'];
		   $data['password'] = $session_data['password'];

           $result = $this->home_model->change_password($data);
           if($result == FALSE)
           {
              $data['msg'] = "old password not match";
           	  $this->load->view("Dashboard_admin/view_changed_password",$data);
           	
           }
       	}

       }
	}

	public function check_password($str)
	{
		$data['password'] = md5($str);
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];

		$result = $this->home_model->check_password($data);
		if($result==TRUE)
		{
			echo "password match";

		}
		else
		{
            echo "password not match";

		}

	}

	public function forget_password()
	{
		//echo "recover password";
		$this->load->view('forget_password');
	}

	public function recover_password_data()
	{
		if($this->input->get_post('submit'))
		{
			/*$email = $this->input->get_post('email');
			$data['email'] = $email;*/

			$this->form_validation->set_rules('email', 'Email', 'trim|required');
			if($this->form_validation->run()==FALSE)
			{
                $this->forget_password();
			}
			else
			{
				$email = $this->input->get_post('email');
			    $data['email'] = $email;
				$result = $this->home_model->pass_email($email);
				if($result==TRUE)
				{
					
					$error['msg']="Email is invalid....! try again ";
					$error['email'] = $email ;
				    $this->load->view('forget_password',$error);
				}
				else
				{
					//echo "available";
					//.............create new password.....................
					$rand = rand(72891,92729);
					$new_pass = $rand;
					$email_pass = $new_pass;
					$new_pass = md5($new_pass);
					$data['new_pass'] = $new_pass;

					/*echo $email_pass."<br>";
					echo $new_pass."<br>";*/

					$this->email->from("admin@smartsheba.com");
					$this->email->to($email);
					$this->email->subject("Password recovery");
					$this->email->message('Your Passsword has been changed. Your new password is  '.$email_pass);
					if($this->email->send())
					{
					
						$this->home_model->recover_password($data);
					}
					else
					{
						$data['msg'] = "error in sending email";
						echo $data['msg'];
					}





				}
			}

			
		}
	}

	public function logout()
	{
		$this->load->library('facebook');
		$this->facebook->destroySession();
		 $this->session->unset_userdata('logged_in');
		 setcookie('username','', 0 ,"/");
		 setcookie('password','', 0 ,"/");
		  redirect('home/index', 'refresh');
        // redirect('home/login', 'refresh');
	}


	//..........................search..............................................

	public function search()
	{
		if($this->input->get_post('submit'))
		{
           $data['category'] = $this->input->get_post('category');
           $data['search'] = $this->input->get_post('search');
           $data['location'] = $this->input->get_post('location');
           $category = $data['category'];
           $search = $data['search'];
           $location = $data['location'];
           if($category == 'product')
           {
           	//echo "product";
	           	if($data['location']=='')
	           	{
	           		//$this->pr_srch_no_loc($search);
	           		return redirect('home/pr_srch_no_loc/'.$search);
	           	}
	           	else
	           	{
	           		//$this->pr_srch_loc($search,$location);
	           		return redirect('home/pr_srch_loc/'.$search.'/'.$location);

	           	}

           }



           else if ($category == 'information') 
           {
	           	if($data['location']=='')
	           	{

	           		//$this->info_srch_no_loc($search);
	           		return redirect('home/info_srch_no_loc/'.$search);
	           	}

	           	else
	           	{
	           		//$this->info_srch_loc($search,$location);
	           		return redirect('home/info_srch_loc/'.$search.'/'.$location);
	           		
	           	}
           }



           else if ($category == 'member') 
           {
	           	if($data['location']=='')
	           	{
	           		//$this->member_srch_no_loc($search);
	           		return redirect('home/member_srch_no_loc/'.$search);
	           	
	           	}
	           	else
	           	{
	           		//$this->member_srch_loc($search,$location);
	           		return redirect('home/member_srch_loc/'.$search.'/'.$location);
	           		
	           	}
           }

           else if ($category == 'discount') 
           {

	           if($data['location']=='')
	           	{
	           		//$this->dscnt_srch_no_loc($search);
	           		return redirect('home/dscnt_srch_no_loc/'.$search);
	           		
	           	}
	           	else
	           	{
	           		//$this->dscnt_srch_loc($search,$location);
	           		return redirect('home/dscnt_srch_loc/'.$search.'/'.$location);
	           		
	           	}
           }

           else if ($category == 'academy') 
           {

	           if($data['location']=='')
	           	{
	           		//$this->dscnt_srch_no_loc($search);
	           		return redirect('home/academy_srch_no_loc/'.$search);
	           		
	           	}
	           	else
	           	{
	           		//$this->dscnt_srch_loc($search,$location);
	           		return redirect('home/academy_srch_no_loc/'.$search);
	           		//return redirect('home/academy_srch_loc/'.$search.'/'.$location);
	           		
	           	}
           }

           else
           {

           }
		}
	}

	public function pr_srch_no_loc($search)
	{
		//echo "product no location";
	  $config['base_url'] = "/smart_sheba/home/pr_srch_no_loc/$search";
	  $config['per_page'] = 12;
	  $config['num_links'] = 5;
	  $config["uri_segment"] = 4;
	  $config['total_rows'] = $this->home_model->pr_srch_no_loc_pagination($search);
	  $config['full_tag_open'] = '<ul class="pagination">';
	  $config['full_tag_close'] = '</ul>';
	  $config['first_link'] = false;
	  $config['last_link'] = false;
      $config['first_tag_open'] = '<li>';
	  $config['first_tag_close'] = '</li>';
	  $config['prev_link'] = '&laquo';
	  $config['prev_tag_open'] = '<li class="prev">';
	  $config['prev_tag_close'] = '</li>';
	  $config['next_link'] = '&raquo';
	  $config['next_tag_open'] = '<li>';
      $config['next_tag_close'] = '</li>';
	  $config['last_tag_open'] = '<li>';
	  $config['last_tag_close'] = '</li>';
	  $config['cur_tag_open'] = '<li class="active"><a href="#">';
	  $config['cur_tag_close'] = '</a></li>';
	  $config['num_tag_open'] = '<li>';
	  $config['num_tag_close'] = '</li>';

	  if( $config['total_rows']>0)
	  {
          $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
		  $this->pagination->initialize($config);
		  $result['list'] = $this->home_model->pr_srch_no_loc($search,$config['per_page'],$page);
	      $result['links'] = $this->pagination->create_links();
	      $this->parser->parse('product_search',$result);
	  }
	  else
	  {
         // $this->load->view('warning_search');
	  	$this->pr_srch_rand();
	  }

	  /*$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
	  $this->pagination->initialize($config);
	  $result['list'] = $this->home_model->pr_srch_no_loc($search,$config['per_page'],$page);
      $result['links'] = $this->pagination->create_links();
      $this->parser->parse('product_search',$result);*/
	}

   public function pr_srch_loc($search,$location)
	{
		//echo "product location";
	  $config['base_url'] = "/smart_sheba/home/pr_srch_loc/$search/$location";
	  $config['per_page'] = 12;
	  $config['num_links'] = 5;
	  $config["uri_segment"] = 5;
	  $config['total_rows'] = $this->home_model->pr_srch_loc_pagination($search,$location);
	  $config['full_tag_open'] = '<ul class="pagination">';
	  $config['full_tag_close'] = '</ul>';
	  $config['first_link'] = false;
	  $config['last_link'] = false;
      $config['first_tag_open'] = '<li>';
	  $config['first_tag_close'] = '</li>';
	  $config['prev_link'] = '&laquo';
	  $config['prev_tag_open'] = '<li class="prev">';
	  $config['prev_tag_close'] = '</li>';
	  $config['next_link'] = '&raquo';
	  $config['next_tag_open'] = '<li>';
      $config['next_tag_close'] = '</li>';
	  $config['last_tag_open'] = '<li>';
	  $config['last_tag_close'] = '</li>';
	  $config['cur_tag_open'] = '<li class="active"><a href="#">';
	  $config['cur_tag_close'] = '</a></li>';
	  $config['num_tag_open'] = '<li>';
	  $config['num_tag_close'] = '</li>';

	  if( $config['total_rows']>0)
	  {
          $page = ($this->uri->segment(5)) ? $this->uri->segment(5) : 0;
	      $this->pagination->initialize($config);
	      $result['list'] = $this->home_model->pr_srch_loc($search,$location,$config['per_page'],$page);
          $result['links'] = $this->pagination->create_links();
          $this->parser->parse('product_search',$result);
	  }
	  else
	  {
         // $this->load->view('warning_search');
	  	$this->prch_rand();
	  }

	  /*$page = ($this->uri->segment(5)) ? $this->uri->segment(5) : 0;
	  $this->pagination->initialize($config);
	  $result['list'] = $this->home_model->pr_srch_loc($search,$location,$config['per_page'],$page);
      $result['links'] = $this->pagination->create_links();
      $this->parser->parse('product_search',$result);*/
	}

	public function pr_srch_rand()
	{
		$config['base_url'] = "/smart_sheba/home/pr_srch_rand";
		$config['per_page'] = 12;
	    $config['num_links'] = 5;
		$config["uri_segment"] = 3;
		$config['total_rows'] = $this->home_model->all_product_pagination();

        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		$this->pagination->initialize($config);
		$product['list'] = $this->home_model->all_product_rand( $config['per_page'],$page);
		$product['links'] = $this->pagination->create_links();
		$this->parser->parse('product_search',$product);
	}


   public function info_srch_no_loc($search)
	{

      $config['base_url'] = "/smart_sheba/home/info_srch_no_loc/$search";
	  $config['per_page'] = 12;
	  $config['num_links'] = 5;
	  $config["uri_segment"] = 4;
	  $config['total_rows'] = $this->home_model->info_srch_no_loc_pagination($search);
	  $config['full_tag_open'] = '<ul class="pagination">';
	  $config['full_tag_close'] = '</ul>';
	  $config['first_link'] = false;
	  $config['last_link'] = false;
      $config['first_tag_open'] = '<li>';
	  $config['first_tag_close'] = '</li>';
	  $config['prev_link'] = '&laquo';
	  $config['prev_tag_open'] = '<li class="prev">';
	  $config['prev_tag_close'] = '</li>';
	  $config['next_link'] = '&raquo';
	  $config['next_tag_open'] = '<li>';
      $config['next_tag_close'] = '</li>';
	  $config['last_tag_open'] = '<li>';
	  $config['last_tag_close'] = '</li>';
	  $config['cur_tag_open'] = '<li class="active"><a href="#">';
	  $config['cur_tag_close'] = '</a></li>';
	  $config['num_tag_open'] = '<li>';
	  $config['num_tag_close'] = '</li>';

     if( $config['total_rows']>0)
	  {
	      $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
		  $this->pagination->initialize($config);
		  $result['list'] = $this->home_model->info_srch_no_loc($search,$config['per_page'],$page);
	      $result['links'] = $this->pagination->create_links();
	      $this->parser->parse('information_search',$result); 
	  }
	  else
	  {
          //$this->load->view('warning_search');
	  	$this->info_rch_rand();
	  }

	  /*$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
	  $this->pagination->initialize($config);
	  $result['list'] = $this->home_model->info_srch_no_loc($search,$config['per_page'],$page);
      $result['links'] = $this->pagination->create_links();
      $this->parser->parse('information_search',$result); */  
	}

	public function info_srch_loc($search,$location)
	 {

      $config['base_url'] = "/smart_sheba/home/info_srch_loc/$search/$location";
	  $config['per_page'] = 12;
	  $config['num_links'] = 5;
	  $config["uri_segment"] = 5;
	  $config['total_rows'] = $this->home_model->info_srch_loc_pagination($search,$location);
	  $config['full_tag_open'] = '<ul class="pagination">';
	  $config['full_tag_close'] = '</ul>';
	  $config['first_link'] = false;
	  $config['last_link'] = false;
      $config['first_tag_open'] = '<li>';
	  $config['first_tag_close'] = '</li>';
	  $config['prev_link'] = '&laquo';
	  $config['prev_tag_open'] = '<li class="prev">';
	  $config['prev_tag_close'] = '</li>';
	  $config['next_link'] = '&raquo';
	  $config['next_tag_open'] = '<li>';
      $config['next_tag_close'] = '</li>';
	  $config['last_tag_open'] = '<li>';
	  $config['last_tag_close'] = '</li>';
	  $config['cur_tag_open'] = '<li class="active"><a href="#">';
	  $config['cur_tag_close'] = '</a></li>';
	  $config['num_tag_open'] = '<li>';
	  $config['num_tag_close'] = '</li>';

	  if( $config['total_rows']>0)
	  {
		  $page = ($this->uri->segment(5)) ? $this->uri->segment(5) : 0;
		  $this->pagination->initialize($config);
		  $result['list'] = $this->home_model->info_srch_loc($search,$location,$config['per_page'],$page);
	      $result['links'] = $this->pagination->create_links();
	      $this->parser->parse('information_search',$result); 
	  }
	  else
	  {
          //$this->load->view('warning_search');
	  	$this->info_rch_rand();
	  }

	  /*$page = ($this->uri->segment(5)) ? $this->uri->segment(5) : 0;
	  $this->pagination->initialize($config);
	  $result['list'] = $this->home_model->info_srch_loc($search,$location,$config['per_page'],$page);
      $result['links'] = $this->pagination->create_links();
      $this->parser->parse('information_search',$result); */
	 }


	public function info_rch_rand()
	{
		$config['base_url'] = "/smart_sheba/home/ info_rch_rand";
		$config['per_page'] = 12;
		$config['num_links'] = 5;
	    $config["uri_segment"] = 3;
		$config['total_rows'] = $this->home_model->all_information_pagination();

        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';


		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		$this->pagination->initialize($config);
		$information['list'] = $this->home_model->all_information_rand( $config['per_page'],$page);
		$information['links'] = $this->pagination->create_links();

		$this->parser->parse('information_search',$information);
	}

	public function member_srch_no_loc($search)
	 {
	  $config['base_url'] = "/smart_sheba/home/member_srch_no_loc/$search";
	  $config['per_page'] = 12;
	  $config['num_links'] = 5;
	  $config["uri_segment"] = 4;
	  $config['total_rows'] = $this->home_model->member_srch_no_loc_pagination($search);
	  $config['full_tag_open'] = '<ul class="pagination">';
	  $config['full_tag_close'] = '</ul>';
	  $config['first_link'] = false;
	  $config['last_link'] = false;
      $config['first_tag_open'] = '<li>';
	  $config['first_tag_close'] = '</li>';
	  $config['prev_link'] = '&laquo';
	  $config['prev_tag_open'] = '<li class="prev">';
	  $config['prev_tag_close'] = '</li>';
	  $config['next_link'] = '&raquo';
	  $config['next_tag_open'] = '<li>';
      $config['next_tag_close'] = '</li>';
	  $config['last_tag_open'] = '<li>';
	  $config['last_tag_close'] = '</li>';
	  $config['cur_tag_open'] = '<li class="active"><a href="#">';
	  $config['cur_tag_close'] = '</a></li>';
	  $config['num_tag_open'] = '<li>';
	  $config['num_tag_close'] = '</li>';

	  if( $config['total_rows']>0)
	  {
		  $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
		  $this->pagination->initialize($config);
		  $result['list'] = $this->home_model->member_srch_no_loc($search,$config['per_page'],$page);
	      $result['links'] = $this->pagination->create_links();
	      $this->parser->parse('member_search',$result); 
	  }
	  else
	  {
          $this->load->view('warning_search');
	  }


	  /*$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
	  $this->pagination->initialize($config);
	  $result['list'] = $this->home_model->member_srch_no_loc($search,$config['per_page'],$page);
      $result['links'] = $this->pagination->create_links();
      $this->parser->parse('member_search',$result);*/
	 }

	public function member_srch_loc($search,$location)
	{
	  $config['base_url'] = "/smart_sheba/home/member_srch_loc/$search/$location";
	  $config['per_page'] = 12;
	  $config['num_links'] = 5;
	  $config["uri_segment"] = 5;
	  $config['total_rows'] = $this->home_model->member_srch_loc_pagination($search,$location);
	  $config['full_tag_open'] = '<ul class="pagination">';
	  $config['full_tag_close'] = '</ul>';
	  $config['first_link'] = false;
	  $config['last_link'] = false;
      $config['first_tag_open'] = '<li>';
	  $config['first_tag_close'] = '</li>';
	  $config['prev_link'] = '&laquo';
	  $config['prev_tag_open'] = '<li class="prev">';
	  $config['prev_tag_close'] = '</li>';
	  $config['next_link'] = '&raquo';
	  $config['next_tag_open'] = '<li>';
      $config['next_tag_close'] = '</li>';
	  $config['last_tag_open'] = '<li>';
	  $config['last_tag_close'] = '</li>';
	  $config['cur_tag_open'] = '<li class="active"><a href="#">';
	  $config['cur_tag_close'] = '</a></li>';
	  $config['num_tag_open'] = '<li>';
	  $config['num_tag_close'] = '</li>';

	  if( $config['total_rows']>0)
	  {
		  $page = ($this->uri->segment(5)) ? $this->uri->segment(5) : 0;
		  $this->pagination->initialize($config);
		  $result['list'] = $this->home_model->member_srch_loc($search,$location,$config['per_page'],$page);
	      $result['links'] = $this->pagination->create_links();
	      $this->parser->parse('member_search',$result); 
	  }
	  else
	  {
          $this->load->view('warning_search');
	  }


	  /*$page = ($this->uri->segment(5)) ? $this->uri->segment(5) : 0;
	  $this->pagination->initialize($config);
	  $result['list'] = $this->home_model->member_srch_loc($search,$location,$config['per_page'],$page);
      $result['links'] = $this->pagination->create_links();
      $this->parser->parse('member_search',$result);*/
	}

	public function dscnt_srch_no_loc($search)
	 {
      //echo "discount location";
	  $config['base_url'] = "/smart_sheba/home/dscnt_srch_no_loc/$search";
	  $config['per_page'] = 12;
	  $config['num_links'] = 5;
	  $config["uri_segment"] = 4;
	  $config['total_rows'] = $this->home_model->dscnt_srch_no_loc_pagination($search);
	  $config['full_tag_open'] = '<ul class="pagination">';
	  $config['full_tag_close'] = '</ul>';
	  $config['first_link'] = false;
	  $config['last_link'] = false;
      $config['first_tag_open'] = '<li>';
	  $config['first_tag_close'] = '</li>';
	  $config['prev_link'] = '&laquo';
	  $config['prev_tag_open'] = '<li class="prev">';
	  $config['prev_tag_close'] = '</li>';
	  $config['next_link'] = '&raquo';
	  $config['next_tag_open'] = '<li>';
      $config['next_tag_close'] = '</li>';
	  $config['last_tag_open'] = '<li>';
	  $config['last_tag_close'] = '</li>';
	  $config['cur_tag_open'] = '<li class="active"><a href="#">';
	  $config['cur_tag_close'] = '</a></li>';
	  $config['num_tag_open'] = '<li>';
	  $config['num_tag_close'] = '</li>';

	  if( $config['total_rows']>0)
	  {
		  $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
		  $this->pagination->initialize($config);
		  $result['list'] = $this->home_model->dscnt_srch_no_loc($search,$config['per_page'],$page);
	      $result['links'] = $this->pagination->create_links();
	      $this->parser->parse('product_search',$result); 
	  }
	  else
	  {
          //$this->load->view('warning_search');
	  	$this->dscnt_srch_rand();
	  }


	  /*$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
	  $this->pagination->initialize($config);
	  $result['list'] = $this->home_model->dscnt_srch_no_loc($search,$config['per_page'],$page);
      $result['links'] = $this->pagination->create_links();
      $this->parser->parse('product_search',$result);*/
	 }

	public function dscnt_srch_loc($search,$location)
	 {
		//echo "discount no location";
		$config['base_url'] = "/smart_sheba/home/dscnt_srch_loc/$search/$location";
	  $config['per_page'] = 12;
	  $config['num_links'] = 5;
	  $config["uri_segment"] = 5;
	  $config['total_rows'] = $this->home_model->dscnt_srch_loc_pagination($search,$location);
	  $config['full_tag_open'] = '<ul class="pagination">';
	  $config['full_tag_close'] = '</ul>';
	  $config['first_link'] = false;
	  $config['last_link'] = false;
      $config['first_tag_open'] = '<li>';
	  $config['first_tag_close'] = '</li>';
	  $config['prev_link'] = '&laquo';
	  $config['prev_tag_open'] = '<li class="prev">';
	  $config['prev_tag_close'] = '</li>';
	  $config['next_link'] = '&raquo';
	  $config['next_tag_open'] = '<li>';
      $config['next_tag_close'] = '</li>';
	  $config['last_tag_open'] = '<li>';
	  $config['last_tag_close'] = '</li>';
	  $config['cur_tag_open'] = '<li class="active"><a href="#">';
	  $config['cur_tag_close'] = '</a></li>';
	  $config['num_tag_open'] = '<li>';
	  $config['num_tag_close'] = '</li>';

	  if( $config['total_rows']>0)
	  {
		  $page = ($this->uri->segment(5)) ? $this->uri->segment(5) : 0;
		  $this->pagination->initialize($config);
		  $result['list'] = $this->home_model->dscnt_srch_loc($search,$location,$config['per_page'],$page);
	      $result['links'] = $this->pagination->create_links();
	      $this->parser->parse('product_search',$result); 
	  }
	  else
	  {
          //$this->load->view('warning_search');
	  	$this->dscnt_srch_rand();
	  }


	  /*$page = ($this->uri->segment(5)) ? $this->uri->segment(5) : 0;
	  $this->pagination->initialize($config);
	  $result['list'] = $this->home_model->dscnt_srch_loc($search,$location,$config['per_page'],$page);
      $result['links'] = $this->pagination->create_links();
      $this->parser->parse('product_search',$result);*/
	 }


	 public function dscnt_srch_rand()
	 {
	 	$config['base_url'] = "/smart_sheba/home/dscnt_srch_rand";
		$config['per_page'] = 12;
		$config['num_links'] = 5;
	    $config["uri_segment"] = 3;
		$config['total_rows'] = $this->home_model->all_product_discount_pagination();



        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
     

		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;



		$this->pagination->initialize($config);
		$discount['list'] = $this->home_model->all_product_discount_rand( $config['per_page'],$page);
		$discount['links'] = $this->pagination->create_links();
		$this->parser->parse('product_search',$discount);



	 }



	 public function academy_srch_no_loc($search)
	 {
      //echo "discount location";
	  $config['base_url'] = "/smart_sheba/home/academy_srch_no_loc/$search";
	  $config['per_page'] = 12;
	  $config['num_links'] = 5;
	  $config["uri_segment"] = 4;
	  $config['total_rows'] = $this->home_model->academy_srch_no_loc_pagination($search);
	  $config['full_tag_open'] = '<ul class="pagination">';
	  $config['full_tag_close'] = '</ul>';
	  $config['first_link'] = false;
	  $config['last_link'] = false;
      $config['first_tag_open'] = '<li>';
	  $config['first_tag_close'] = '</li>';
	  $config['prev_link'] = '&laquo';
	  $config['prev_tag_open'] = '<li class="prev">';
	  $config['prev_tag_close'] = '</li>';
	  $config['next_link'] = '&raquo';
	  $config['next_tag_open'] = '<li>';
      $config['next_tag_close'] = '</li>';
	  $config['last_tag_open'] = '<li>';
	  $config['last_tag_close'] = '</li>';
	  $config['cur_tag_open'] = '<li class="active"><a href="#">';
	  $config['cur_tag_close'] = '</a></li>';
	  $config['num_tag_open'] = '<li>';
	  $config['num_tag_close'] = '</li>';

	  if( $config['total_rows']>0)
	  {
		  $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
		  $this->pagination->initialize($config);
		  $result['list'] = $this->home_model->academy_srch_no_loc($search,$config['per_page'],$page);
	      $result['links'] = $this->pagination->create_links();
	      $this->parser->parse('academy_search',$result); 
	  }
	  else
	  {
          $this->load->view('warning_search');
	  }


	  /*$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
	  $this->pagination->initialize($config);
	  $result['list'] = $this->home_model->academy_srch_no_loc($search,$config['per_page'],$page);
      $result['links'] = $this->pagination->create_links();
      $this->parser->parse('academy_search',$result);*/
	 }

	 public function member_list_srh($id)
	 {
         //echo "academy id: ".$id;
	 	 $config['base_url'] = "/smart_sheba/home/member_list_srh/$id";
		 $config['per_page'] = 12;
		 $config['num_links'] = 5;
	     $config["uri_segment"] = 4;
		 $config['total_rows'] = $this->home_model->academy_member_list_pagination($id);
		// echo $config['total_rows'];
		 $config['full_tag_open'] = '<ul class="pagination">';
         $config['full_tag_close'] = '</ul>';
         $config['first_link'] = false;
         $config['last_link'] = false;
         $config['first_tag_open'] = '<li>';
         $config['first_tag_close'] = '</li>';
         $config['prev_link'] = '&laquo';
         $config['prev_tag_open'] = '<li class="prev">';
         $config['prev_tag_close'] = '</li>';
         $config['next_link'] = '&raquo';
         $config['next_tag_open'] = '<li>';
         $config['next_tag_close'] = '</li>';
         $config['last_tag_open'] = '<li>';
         $config['last_tag_close'] = '</li>';
         $config['cur_tag_open'] = '<li class="active"><a href="#">';
         $config['cur_tag_close'] = '</a></li>';
         $config['num_tag_open'] = '<li>';
         $config['num_tag_close'] = '</li>';

         if( $config['total_rows']>0)
	      {
			 $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
	    	 $this->pagination->initialize($config);
	         $result['list'] = $this->home_model->academy_member_list($id,$config['per_page'],$page);
	         $result['links'] = $this->pagination->create_links();
	         $this->parser->parse('academy_member_list_search',$result); 
	      }
	    else
	      {
          $this->load->view('warning_search');
	      }


         /*$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
    	 $this->pagination->initialize($config);
         $result['list'] = $this->home_model->academy_member_list($id,$config['per_page'],$page);
         $result['links'] = $this->pagination->create_links();
         $this->parser->parse('academy_member_list_search',$result);*/


	 }

	 public function academy_details_srh($id)
	 {
        $result = $this->home_model->academy_details_srh($id);
        $this->parser->parse('academy_details_search',$result);
	 }

	 public function academy_details($id)
	 {
	 	if($this->session->userdata('logged_in'))
	 	{
            $result = $this->home_model->academy_details_srh($id);
            $this->parser->parse('Dashboard/academy_details',$result);
	 	}
	 	else
	 	{
	 		$this->login($j);
	 	}
        
	 }

	 public function academy_details_admin($id)
	 {
	 	if($this->session->userdata('logged_in'))
	 	{
           $result = $this->home_model->academy_details_srh($id);
           $this->parser->parse('Dashboard_admin/academy_details',$result);
	 	}
	    else
	    {
	    	$this->login($j);
	    }
        
	 }


	//..........................search  end .................................................

	 //......................Academy Start...........................................

    public function create_academy()
    {
      if($this->session->userdata('logged_in'))
		{
         //echo "work is going on";
		  $session_data = $this->session->userdata('logged_in');
		  $data['username'] = $session_data['username'];
		  $this->parser->parse('Dashboard/create_academy',$data);
		}
		else
		{
			$this->login($j);
		}
    }

    public function create_academy_details()
    {
    	if($this->input->get_post('submit'))
    	{
    		$academy['academy_name'] = $this->input->get_post('academy_name');
    		$academy['academy_details'] = $this->input->get_post('academy_details');
    		$academy['owner_name'] = $this->input->get_post('owner_name');
    		$this->home_model->create_academy_details($academy);
    	}
    }

    public function create_academy_admin()
    {
      if($this->session->userdata('logged_in'))
		{
         //echo "work is going on";
		  $session_data = $this->session->userdata('logged_in');
		  $data['username'] = $session_data['username'];
		  $this->parser->parse('Dashboard_admin/create_academy',$data);
		}
		else
		{
			$this->login($j);
		}
    }

    public function create_academy_details_admin()
    {
    	if($this->input->get_post('submit'))
    	{
    		$academy['academy_name'] = $this->input->get_post('academy_name');
    		$academy['academy_details'] = $this->input->get_post('academy_details');
    		$academy['owner_name'] = $this->input->get_post('owner_name');
    		$this->home_model->create_academy_details_admin($academy);
    	}
    }




    public function academy_list()
    {
    	if($this->session->userdata('logged_in'))
		{

		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
          //echo "work is going on";
		 $config['base_url'] = "/smart_sheba/home/academy_list";
		 $config['per_page'] = 15;
		 $config['num_links'] = 5;
	     $config["uri_segment"] = 3;
		 $config['total_rows'] = $this->home_model->academy_list_pagination($data);
		 //echo $config['total_rows'];
		 $config['full_tag_open'] = '<ul class="pagination">';
         $config['full_tag_close'] = '</ul>';
         $config['first_link'] = false;
         $config['last_link'] = false;
         $config['first_tag_open'] = '<li>';
         $config['first_tag_close'] = '</li>';
         $config['prev_link'] = '&laquo';
         $config['prev_tag_open'] = '<li class="prev">';
         $config['prev_tag_close'] = '</li>';
         $config['next_link'] = '&raquo';
         $config['next_tag_open'] = '<li>';
         $config['next_tag_close'] = '</li>';
         $config['last_tag_open'] = '<li>';
         $config['last_tag_close'] = '</li>';
         $config['cur_tag_open'] = '<li class="active"><a href="#">';
         $config['cur_tag_close'] = '</a></li>';
         $config['num_tag_open'] = '<li>';
         $config['num_tag_close'] = '</li>';
         $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		  
		  $this->pagination->initialize($config);
		  $result['list'] = $this->home_model->academy_list($data,$config['per_page'],$page);
		  $result['links'] = $this->pagination->create_links();
		  $this->parser->parse('Dashboard/academy_list',$result);


		}
		else
		{
			$this->login($j);
		}
    }

    public function academy_list_srh($id)
    {
       $data = $this->home_model->academy_details_srh($id);
       $this->parser->parse('academy_details',$data);
    }

    public function academy_list_admin()
    {
    	if($this->session->userdata('logged_in'))
		{
          $session_data = $this->session->userdata('logged_in');
		 $data['username'] = $session_data['username'];
          //echo "work is going on";
		 $config['base_url'] = "/smart_sheba/home/academy_list_admin";
		 $config['per_page'] = 15;
		 $config['num_links'] = 5;
	     $config["uri_segment"] = 3;
		 $config['total_rows'] = $this->home_model->academy_list_admin_pagination($data);
		 //echo $config['total_rows'];
		 $config['full_tag_open'] = '<ul class="pagination">';
         $config['full_tag_close'] = '</ul>';
         $config['first_link'] = false;
         $config['last_link'] = false;
         $config['first_tag_open'] = '<li>';
         $config['first_tag_close'] = '</li>';
         $config['prev_link'] = '&laquo';
         $config['prev_tag_open'] = '<li class="prev">';
         $config['prev_tag_close'] = '</li>';
         $config['next_link'] = '&raquo';
         $config['next_tag_open'] = '<li>';
         $config['next_tag_close'] = '</li>';
         $config['last_tag_open'] = '<li>';
         $config['last_tag_close'] = '</li>';
         $config['cur_tag_open'] = '<li class="active"><a href="#">';
         $config['cur_tag_close'] = '</a></li>';
         $config['num_tag_open'] = '<li>';
         $config['num_tag_close'] = '</li>';
         $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		  
		  $this->pagination->initialize($config);
		  $result['list'] = $this->home_model->academy_list_admin($data,$config['per_page'],$page);
		  $result['links'] = $this->pagination->create_links();
		  $this->parser->parse('Dashboard_admin/academy_list',$result);

		}
		else
		{
			$this->login($j);
		}
    }

    public function edit_academy($id)
    {
    	if($this->session->userdata('logged_in'))
		{
         //echo "academy id: ".$id;
    	$result = $this->home_model->academy_details($id);
    	$this->parser->parse('Dashboard/edit_academy',$result);
        }
        else
        {
        	$this->login($j);
        }
    
    }

    public function edit_academy_details()
    {
    	if($this->input->get_post('submit'))
    	{
    		$data['academy_name'] = $this->input->get_post('academy_name');
    		$data['academy_details'] = $this->input->get_post('academy_details');
    		$data['id'] = $this->input->get_post('id');
    		$this->home_model->update_academy($data);
    	}
    }


    public function edit_academy_admin($id)
    {
       //echo "academy id: ".$id;
    	if($this->session->userdata('logged_in'))
		{
         //echo "academy id: ".$id;
    	$result = $this->home_model->academy_details($id);
    	$this->parser->parse('Dashboard_admin/edit_academy',$result);
        }
        else
        {
        	$this->login($j);
        }
    }

    public function edit_academy_details_admin()
    {
    	if($this->input->get_post('submit'))
    	{
    		$data['academy_name'] = $this->input->get_post('academy_name');
    		$data['academy_details'] = $this->input->get_post('academy_details');
    		$data['id'] = $this->input->get_post('id');
    		$this->home_model->update_academy_admin($data);
    	}
    }

    public function add_academy_member($id,$name)
    {
      if($this->session->userdata('logged_in'))
      {
       $academy['academy_id'] = $id;
       $academy['academy_name'] = $name;
       $this->parser->parse('Dashboard/add_academy_member',$academy);
      }
      else
      {
        $this->login($j);
      }
     
    }

    public function add_academy_member_details()
    {
       if($this->input->get_post('submit'))
       {
  
       	$config['upload_path'] = './assets/academy_member_images/';
	    $config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['file_name']     = 'member_image_'.substr(md5(rand()),0,7);
		$config['max_size'] = '5000';
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('member_image')) 
		{

		    //echo $this->upload->display_errors();
		    echo "<script language='javascript' type='text/javascript'>";
		    echo "alert('Image must be gif | jpg | jpeg | png and size must be 5MB');";
		    echo "</script>";
			$this->academy_list();
			//header('Location: ' . $_SERVER['HTTP_REFERER']);
					
							        	
		        	
		 } else {
		    //here $file_data receives an array that has all the info
		    //pertaining to the upload, including 'file_name'
		    $file_data = $this->upload->data();
		    $member= array(
		         'member_image'      => $file_data['file_name']
		     );

		   $member['member_name'] = $this->input->get_post('member_name');
           $member['member_details'] = $this->input->get_post('member_details');
       	   $member['academy_id'] = $this->input->get_post('academy_id');
       	   $member['academy_name'] = $this->input->get_post('academy_name');

		   $this->home_model->add_acacademy_member($member);
	
	     }

       }
    }



    public function add_academy_member_admin($id,$name)
    {
      if($this->session->userdata('logged_in'))
      {
       $academy['academy_id'] = $id;
       $academy['academy_name'] = $name;
       $this->parser->parse('Dashboard_admin/add_academy_member',$academy);
      }
      else
      {
        $this->login($j);
      }
     
    }

    public function add_academy_member_details_admin()
    {
       if($this->input->get_post('submit'))
       {
  
       	$config['upload_path'] = './assets/academy_member_images/';
	    $config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['file_name']     = 'member_image_'.substr(md5(rand()),0,7);
		$config['max_size'] = '5000';
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('member_image')) 
		{

		    //echo $this->upload->display_errors();
		    echo "<script language='javascript' type='text/javascript'>";
		    echo "alert('Image must be gif | jpg | jpeg | png and size must be 5MB');";
		    echo "</script>";
			$this->academy_list_admin();
			//header('Location: ' . $_SERVER['HTTP_REFERER']);
					
							        	
		        	
		 } else {
		    //here $file_data receives an array that has all the info
		    //pertaining to the upload, including 'file_name'
		    $file_data = $this->upload->data();
		    $member= array(
		         'member_image'      => $file_data['file_name']
		     );

		   $member['member_name'] = $this->input->get_post('member_name');
           $member['member_details'] = $this->input->get_post('member_details');
       	   $member['academy_id'] = $this->input->get_post('academy_id');
       	   $member['academy_name'] = $this->input->get_post('academy_name');

		   //$this->home_model->add_cacademy_member_admin($member);
		   $this->home_model->add_acacademy_member($member);
	
	     }

       }

    }



    public function academy_member()
    {
    	if($this->session->userdata('logged_in'))
		{
         // echo "work is going on";
	
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
          //echo "work is going on";
		 $config['base_url'] = "/smart_sheba/home/academy_member";
		 $config['per_page'] = 15;
		 $config['num_links'] = 5;
	     $config["uri_segment"] = 3;
		 $config['total_rows'] = $this->home_model->academy_list_pagination($data);
		 //echo $config['total_rows'];
		 $config['full_tag_open'] = '<ul class="pagination">';
         $config['full_tag_close'] = '</ul>';
         $config['first_link'] = false;
         $config['last_link'] = false;
         $config['first_tag_open'] = '<li>';
         $config['first_tag_close'] = '</li>';
         $config['prev_link'] = '&laquo';
         $config['prev_tag_open'] = '<li class="prev">';
         $config['prev_tag_close'] = '</li>';
         $config['next_link'] = '&raquo';
         $config['next_tag_open'] = '<li>';
         $config['next_tag_close'] = '</li>';
         $config['last_tag_open'] = '<li>';
         $config['last_tag_close'] = '</li>';
         $config['cur_tag_open'] = '<li class="active"><a href="#">';
         $config['cur_tag_close'] = '</a></li>';
         $config['num_tag_open'] = '<li>';
         $config['num_tag_close'] = '</li>';
         $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		  
		  $this->pagination->initialize($config);
		  $result['list'] = $this->home_model->academy_list($data,$config['per_page'],$page);
		  $result['links'] = $this->pagination->create_links();
		  $this->parser->parse('Dashboard/academy_member',$result);


		}
		
		else
		{
			$this->login($j);
		}
    }

    public function academy_member_list($id)
    {
       //echo "academy id: ".$id;
    	if($this->session->userdata('logged_in'))
    	{

    	 $config['base_url'] = "/smart_sheba/home/academy_member_list/$id";
		 $config['per_page'] = 12;
		 $config['num_links'] = 5;
	     $config["uri_segment"] = 4;
		 $config['total_rows'] = $this->home_model->academy_member_list_pagination($id);
		// echo $config['total_rows'];
		 $config['full_tag_open'] = '<ul class="pagination">';
         $config['full_tag_close'] = '</ul>';
         $config['first_link'] = false;
         $config['last_link'] = false;
         $config['first_tag_open'] = '<li>';
         $config['first_tag_close'] = '</li>';
         $config['prev_link'] = '&laquo';
         $config['prev_tag_open'] = '<li class="prev">';
         $config['prev_tag_close'] = '</li>';
         $config['next_link'] = '&raquo';
         $config['next_tag_open'] = '<li>';
         $config['next_tag_close'] = '</li>';
         $config['last_tag_open'] = '<li>';
         $config['last_tag_close'] = '</li>';
         $config['cur_tag_open'] = '<li class="active"><a href="#">';
         $config['cur_tag_close'] = '</a></li>';
         $config['num_tag_open'] = '<li>';
         $config['num_tag_close'] = '</li>';
         $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;


    	   $this->pagination->initialize($config);
           $result['list'] = $this->home_model->academy_member_list($id,$config['per_page'],$page);
           $result['links'] = $this->pagination->create_links();
           $this->parser->parse('Dashboard/academy_member_list',$result);
    	}
    	else
    	{
    		$this->login($j);
    	}

    }


    public function academy_member_admin()
    {
    	if($this->session->userdata('logged_in'))
		{
         // echo "work is going on";
	
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
          //echo "work is going on";
		 $config['base_url'] = "/smart_sheba/home/academy_member_admin";
		 $config['per_page'] = 15;
		 $config['num_links'] = 5;
	     $config["uri_segment"] = 3;
		 $config['total_rows'] = $this->home_model->academy_list_pagination($data);
		 //echo $config['total_rows'];
		 $config['full_tag_open'] = '<ul class="pagination">';
         $config['full_tag_close'] = '</ul>';
         $config['first_link'] = false;
         $config['last_link'] = false;
         $config['first_tag_open'] = '<li>';
         $config['first_tag_close'] = '</li>';
         $config['prev_link'] = '&laquo';
         $config['prev_tag_open'] = '<li class="prev">';
         $config['prev_tag_close'] = '</li>';
         $config['next_link'] = '&raquo';
         $config['next_tag_open'] = '<li>';
         $config['next_tag_close'] = '</li>';
         $config['last_tag_open'] = '<li>';
         $config['last_tag_close'] = '</li>';
         $config['cur_tag_open'] = '<li class="active"><a href="#">';
         $config['cur_tag_close'] = '</a></li>';
         $config['num_tag_open'] = '<li>';
         $config['num_tag_close'] = '</li>';
         $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		  
		  $this->pagination->initialize($config);
		  $result['list'] = $this->home_model->academy_list($data,$config['per_page'],$page);
		  $result['links'] = $this->pagination->create_links();
		  $this->parser->parse('Dashboard_admin/academy_member',$result);


		}
		
		else
		{
			$this->login($j);
		}
    }

    public function academy_member_list_admin($id)
    {
       //echo "academy id: ".$id;
    	if($this->session->userdata('logged_in'))
    	{

    	 $config['base_url'] = "/smart_sheba/home/academy_member_list_admin/$id";
		 $config['per_page'] = 12;
		 $config['num_links'] = 5;
	     $config["uri_segment"] = 4;
		 $config['total_rows'] = $this->home_model->academy_member_list_pagination($id);
		// echo $config['total_rows'];
		 $config['full_tag_open'] = '<ul class="pagination">';
         $config['full_tag_close'] = '</ul>';
         $config['first_link'] = false;
         $config['last_link'] = false;
         $config['first_tag_open'] = '<li>';
         $config['first_tag_close'] = '</li>';
         $config['prev_link'] = '&laquo';
         $config['prev_tag_open'] = '<li class="prev">';
         $config['prev_tag_close'] = '</li>';
         $config['next_link'] = '&raquo';
         $config['next_tag_open'] = '<li>';
         $config['next_tag_close'] = '</li>';
         $config['last_tag_open'] = '<li>';
         $config['last_tag_close'] = '</li>';
         $config['cur_tag_open'] = '<li class="active"><a href="#">';
         $config['cur_tag_close'] = '</a></li>';
         $config['num_tag_open'] = '<li>';
         $config['num_tag_close'] = '</li>';
         $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;


    	   $this->pagination->initialize($config);
           $result['list'] = $this->home_model->academy_member_list($id,$config['per_page'],$page);
           $result['links'] = $this->pagination->create_links();
           $this->parser->parse('Dashboard_admin/academy_member_list',$result);
    	}
    	else
    	{
    		$this->login($j);
    	}


    }

    public function delete_academy_member($id)
    {
    	if($this->session->userdata('logged_in'))
    	{
          //echo "member id: ".$id;
    		$this->home_model->delete_academy_member($id);
    	}
    	else
    	{
    		$this->login($j);
    	}
       
    }

    public function edit_academy_member($id)
    {
    	if($this->session->userdata('logged_in'))
    	{
          //echo "member id: ".$id;
    		$result = $this->home_model->edit_academy_member($id);
    		$this->parser->parse('Dashboard/edit_academy_member',$result);
    	}
    	else
    	{
    		$this->login($j);
    	}
       
    }

    public function edit_academy_member_details()
    {
    	if($this->input->get_post('submit'))
    	{
    		$data['member_name'] = $this->input->get_post('member_name');
    		$data['member_details'] = $this->input->get_post('member_details');
    		$data['id'] = $this->input->get_post('id');
    		$this->home_model->update_academy_member($data);
    	}

    }

    public function edit_academy_member_admin($id)
    {
    	if($this->session->userdata('logged_in'))
    	{
          //echo "member id: ".$id;
    		$result = $this->home_model->edit_academy_member($id);
    		$this->parser->parse('Dashboard_admin/edit_academy_member',$result);
    	}
    	else
    	{
    		$this->login($j);
    	}
       
    }

    public function edit_academy_member_details_admin()
    {
    	if($this->input->get_post('submit'))
    	{
    		$data['member_name'] = $this->input->get_post('member_name');
    		$data['member_details'] = $this->input->get_post('member_details');
    		$data['id'] = $this->input->get_post('id');
    		$this->home_model->update_academy_member($data);
    	}

    }



    public function delete_academy_member_admin($id)
    {
       if($this->session->userdata('logged_in'))
    	{
          //echo "member id: ".$id;
    	$this->home_model->delete_academy_member($id);
    	}
    	else
    	{
    		$this->login($j);
    	}
    }

    public function delete_academy($id)
    {
      if($this->session->userdata('logged_in'))
    	{
           $this->home_model->delete_academy($id);
    	}
    	else
    	{
            $this->login($j);
    	}
    }

    public function delete_academy_admin($id)
    {
    	if($this->session->userdata('logged_in'))
    	{
           $this->home_model->delete_academy($id);
    	}
    	else
    	{
            $this->login($j);
    	}
      
    }

    public function member_details($id)
    {
       $result = $this->home_model->member_details($id);
       $this->parser->parse('Dashboard/academy_member_deatails',$result);
    }

    public function member_details_admin($id)
    {
       $result = $this->home_model->member_details($id);
       $this->parser->parse('Dashboard_admin/academy_member_deatails',$result);
    }

    public function member_details_srh($id)
    {
       $result = $this->home_model->member_details($id);
       $this->parser->parse('academy_member_deatails',$result);
    }





	 //......................Academy end..............................................


}
