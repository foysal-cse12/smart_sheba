<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model {

	public function login($data)
	{
		//echo "normal :".$data['password']."<br>";
		$data['status']=1;
		$login_data = array('username'=>$data['username'],'password'=>$data['password'],'status'=>$data['status']);
		$this->db->select('*');
		$this->db->where($login_data);
		$result = $this->db->get('users');
		
		if($result->num_rows==1)
		{
			return $result->row_array();
		}
		else
		{
			return false;
		}
	}

	public function check_type($data)
	{
		$this->db->select('type');
		$this->db->where('username',$data['username']);
		$result = $this->db->get('users');
		return $result->row_array();
	}

	public function check_username($str)
	{
		$this->db->select('*');
		$this->db->where('username',$str);
		$result = $this->db->get('users');
		if($result->num_rows==1)
		{
          return true;
		}
		else
		{
			return false;

		}

	}

	public function pass_email($str)
	{
		$this->db->select('*');
		$this->db->where('email',$str);
		$result = $this->db->get('users');
		if($result->num_rows==0)
		{
          return true;
		}
		else
		{
			return false;

		}

	}

	

	public function check_password($data)
	{
		$rule = array('username'=>$data['username'],'password'=>$data['password']);
		$this->db->select('*');
		$this->db->where($rule);
		$result = $this->db->get('users');
		if($result->num_rows==1)
		{
          return true;
		}
		else
		{
			return false;

		}

	}

	public function change_password($data)
	{
		$current_password = $data['password'];
		$old_password = $data['o_password'];
		$new_password = $data['n_password'];
		$confirm_password = $data['c_password'];
		$username = $data['username'];
		$rule = array('username'=>$data['username'],'password'=>$data['password']);
		$pass_update = array('password'=>$new_password );
		if($current_password === $old_password)
		{
			//echo "continue";
			$this->db->select('*');
		    $this->db->where($rule);
		    $result = $this->db->get('users');
			if($result->num_rows==1)
			{
              //echo "continue";
			$this->db->where($rule);
		    $this->db->update('users',$pass_update);
		    redirect('home/logout','refresh');
			}
			else
			{
				//echo "old password not match";
				return false;

			}
		}
		else
		{
           //echo "old password not match";
			return false;
		}
		
	}

	public function recover_password($data)
	{
      $rule = array('email'=>$data['email']);
      $pass_update = array('password'=>$data['new_pass'] );
      $this->db->where($rule);
	  $this->db->update('users',$pass_update);
	  redirect('home/login','refresh');
	}



	public function check_email($email)
	{

		$this->db->select('*');
		$this->db->where('email',$email);
		$result = $this->db->get('users');
		if($result->num_rows==1)
		{
			return false;			
		}
  
	}

	public function registration_data($data)
	{
		//$data['type'] = 'client';
		date_default_timezone_set("Asia/Dhaka"); 
        $date =  date('Y-m-d');
		$username = $data['username'];
		$reg_data = array('fullname'=>$data['fullname'],'username'=>$data['username'],'password'=>$data['password'],'email'=>$data['email'],'mobile'=>$data['mobile'],'type'=>$data['type'],'date'=>$date,'gender'=>$data['gender'],'father_name'=>$data['father_name'],'mother_name'=>$data['mother_name'],'address'=>$data['present_address'],'permanent_address'=>$data['permanent_address'],'date_of_birth'=>$data['date_of_birth'],'work_history'=>$data['work_history'],'professional_address'=>$data['professional_address'],'blood_group'=>$data['blood_group'],'social_link'=>$data['social_link'],);
		$this->db->select('*');
		$this->db->where('username',$username);
		$result = $this->db->get('users');
		//$this->db->insert('users',$reg_data);
		//redirect('home/index','refresh');	
		if($result->num_rows==1)
		{
			//redirect('home/registration','refresh');
			return false;
			
		}	
		else
		{
			$this->db->insert('users',$reg_data);
			//redirect('http://localhost/smart_sheba/home/index','refresh');
			//redirect('home/index','refresh');
			redirect('home/success_reg','refresh');
		}

	}

	public function users_info($data)
	{
		$data['status']=1;
		$rule = array('username'=>$data['username'],'status'=>$data['status']);
		$this->db->select('*');
		$this->db->where($rule);
		$result = $this->db->get('users');
		return $result->row_array();
	}

	public function fb_login_check($email)
	{
		$status=1;
		$rule = array('email'=>$email,'status'=>$status);
		$this->db->select('*');
		$this->db->where($rule);
		$result = $this->db->get('users');
		if($result->num_rows==1)
		{
            return $result->row_array();
		}
		else
		{
           return false;
		}
	}

	public function add_client_product($product)
	{

		$pr_title=$product['title'];
		$client_id=$product['c_id'];
		$pr_details = $product['pr_details'];
		$pr_condition = $product['pr_condition'];
		$pr_category=$product['category'];
		//$pr_discount=$product['pr_discount'];
		$pr_price=$product['pr_price'];
		$pr_previous_price=$product['pr_previous_price'];
		$pr_commission=$product['pr_commission'];
		$location=$product['location'];
		$mobile=$product['mobile'];
		$email=$product['email'];
		$pr_image=$product['pr_image'];
		date_default_timezone_set("Asia/Dhaka"); 
       $date =  date('Y-m-d');

		$product = array('client_id'=>$client_id,'pr_title'=>$pr_title,'pr_category'=>$pr_category,'pr_details'=>$pr_details,'pr_price'=>$pr_price,'location'=>$location,'mobile'=>$mobile,'email'=>$email,'pr_image'=>$pr_image,'date'=>$date,'pr_condition'=>$pr_condition,'pr_commission'=>$pr_commission,'pr_previous_price'=>$pr_previous_price);

		$this->db->insert('product_client',$product);
		//redirect('home/client','refresh');
		redirect('home/success','refresh');
	}

	public function add_client_product_general($product)
	{

		$pr_title=$product['title'];
		$client_id=$product['c_id'];
		$pr_details = $product['pr_details'];
		$pr_condition = $product['pr_condition'];
		$pr_category=$product['category'];
		//$pr_discount=$product['pr_discount'];
		$pr_price=$product['pr_price'];
		$pr_previous_price=$product['pr_previous_price'];
		$pr_commission=$product['pr_commission'];
		$location=$product['location'];
		$mobile=$product['mobile'];
		$email=$product['email'];
		$pr_image=$product['pr_image'];
		date_default_timezone_set("Asia/Dhaka"); 
       $date =  date('Y-m-d');

		$product = array('client_id'=>$client_id,'pr_title'=>$pr_title,'pr_category'=>$pr_category,'pr_details'=>$pr_details,'pr_price'=>$pr_price,'location'=>$location,'mobile'=>$mobile,'email'=>$email,'pr_image'=>$pr_image,'date'=>$date,'pr_condition'=>$pr_condition,'pr_commission'=>$pr_commission,'pr_previous_price'=>$pr_previous_price);

		$this->db->insert('product_client',$product);
		//redirect('home/client','refresh');
		redirect('home/general_client','refresh');
	}

	public function client_uploaded_product($c_id,$limit, $start)
	{
		$data['status']=1;
		$rule = array('client_id'=>$c_id,'status'=>$data['status']);
		$this->db->select('*');
		$this->db->where($rule);
		$this->db->limit($limit, $start);
		$this->db->order_by('id','desc');
		$result = $this->db->get('product_client');
		return $result->result_array();
	}

	public function product_pagination($id)
	{
		$data['status']=1;
		$rule = array('client_id'=>$id,'status'=>$data['status']);
		$this->db->select('*');
		$this->db->where($rule);
		$result = $this->db->get('product_client');
		return $result->num_rows();

	}

	public function add_information($information)
	{
		$info_title=$information['title'];
		$client_id=$information['c_id'];
		$info_description = $information['description'];
		$info_location=$information['location'];
		$info_image=$information['image'];
		$info_email=$information['email'];

		$info_category=$information['category'];
		$info_mobile=$information['mobile'];
		$info_website=$information['website'];
		date_default_timezone_set("Asia/Dhaka"); 
        $date =  date('Y-m-d');

		$information = array('client_id'=>$client_id,'info_title'=>$info_title,'info_description'=>$info_description,'info_location'=>$info_location,'info_image'=>$info_image,'info_category'=>$info_category,'info_mobile'=>$info_mobile,'info_website'=>$info_website,'date'=>$date,'email'=>$info_email);

		$this->db->insert('information_client',$information);
		//redirect('home/client','refresh');
		redirect('home/success','refresh');

	}


	public function specific_info_with_loc_pagination($category,$location)
    {
    	/*$location = $data['location'];
    	$category = $data['category'];*/
    	//echo $location.$category;
        $sql = "SELECT * FROM information_client WHERE  (info_location LIKE '%$location%') AND
			 (info_category LIKE '%$category%') AND status='1' GROUP BY id ORDER BY id DESC ";
		$result = $this->db->query($sql);
		return $result->num_rows();


    }

    public function specific_info_with_loc($category,$location,$limit,$start)
    {
    	/*$location = $data['location'];
    	$category = $data['category'];*/
    	
    	$sql = "SELECT * FROM information_client WHERE  (info_location LIKE '%$location%') AND
			 (info_category LIKE '%$category%') AND status='1' GROUP BY id ORDER BY id DESC LIMIT $start, $limit";
		$result = $this->db->query($sql);
		//return $result->num_rows();
    	return $result->result_array();

    }








	public function information_pagination($id)
	{
		$data['status']=1;
		$rule = array('client_id'=>$id,'status'=>$data['status']);
		$this->db->select('*');
		$this->db->where($rule);
		$result = $this->db->get('information_client');
		return $result->num_rows();
	}

	public function client_uploaded_information($c_id,$limit, $start)
	{
		$data['status']=1;
		$rule = array('client_id'=>$c_id,'status'=>$data['status']);
		$this->db->select('*');
		$this->db->where($rule);
		$this->db->limit($limit, $start);
		$this->db->order_by('id','desc');
		$result = $this->db->get('information_client');
		return $result->result_array();
	}

	public function admin_uploaded_product_history_pagination($id)
	{
		//$data['status']=1;
		$rule = array('client_id'=>$id);
		$this->db->select('*');
		$this->db->where($rule);
		$result = $this->db->get('product_client');
		return $result->num_rows();
	}

	public function admin_uploaded_product_history($limit, $start,$c_id)
	{
		//$data['status']=1;
		//echo $c_id;
		//echo $limit;
		//echo $start;
		$rule = array('client_id'=>$c_id,);
		$this->db->select('*');
		$this->db->where($rule);
		$this->db->limit($limit, $start);
		$this->db->order_by("id", "desc");
		$result = $this->db->get('product_client');
		return $result->result_array();
	}

	public function admin_uploaded_information_history_pagination($id)
	{
		//$data['status']=1;
		$rule = array('client_id'=>$id);
		$this->db->select('*');
		$this->db->where($rule);
		$result = $this->db->get('information_client');
		return $result->num_rows();
	}

	public function admin_uploaded_information_history($limit, $start,$c_id)
	{
		//$data['status']=1;
		//echo $c_id;
		//echo $limit;
		//echo $start;
		$rule = array('client_id'=>$c_id,);
		$this->db->select('*');
		$this->db->where($rule);
		$this->db->limit($limit, $start);
		$this->db->order_by("id", "desc");
		$result = $this->db->get('information_client');
		return $result->result_array();
	}

	public function delete_product_admin($client_id,$product_id)
	{
		$rule = array('client_id'=>$client_id,'id'=>$product_id);
		$this->db->where($rule);
		$this->db->delete('product_client'); 
		redirect('home/upload_product_history_admin','refresh');
	}

	public function edit_product_admin($client_id,$product_id)
	{
		
		$rule = array('id'=>$product_id,'client_id'=>$client_id);
		$this->db->select('*');
		$this->db->where($rule);
		$result = $this->db->get('product_client');
		return $result->row_array();
	}

	public function update_product_details_admin($update_info)
	{
		$status = 0;
		$pr_id = $update_info['id'];
		$client_id = $update_info['client_id'];
		$pr_title = $update_info['title'];
		$pr_details = $update_info['pr_details'];
		$pr_condition = $update_info['pr_condition'];
		$pr_previous_price = $update_info['pr_previous_price'];
		$pr_price = $update_info['pr_price'];
		$location = $update_info['location'];
		$email = $update_info['email'];
		$mobile = $update_info['mobile'];
		$pr_image = $update_info['pr_image'];
		$condition = array('id'=>$pr_id,'client_id'=>$client_id);
		$update_info = array('pr_title'=>$pr_title,'pr_details'=>$pr_details,'pr_condition'=>$pr_condition,'pr_previous_price'=>$pr_previous_price,'pr_price'=>$pr_price,'location'=>$location,'mobile'=>$mobile,'pr_image'=>$pr_image,'status'=>$status);
		//echo 'product details: '.$pr_details;
		$this->db->where($condition);
		$this->db->update('product_client',$update_info);
		redirect('home/upload_product_history_admin','refresh');
	}


	public function edit_information_admin($client_id,$product_id)
	{
		
		$rule = array('id'=>$product_id,'client_id'=>$client_id);
		$this->db->select('*');
		$this->db->where($rule);
		$result = $this->db->get('information_client');
		return $result->row_array();
	}

	public function update_information_details_admin($update_info)
	{
		$status = 0;
		$pr_id = $update_info['id'];
		$client_id = $update_info['client_id'];
		$info_title = $update_info['info_title'];
		$info_description = $update_info['info_description'];
		$info_location = $update_info['info_location'];
		$info_website = $update_info['info_website'];
		$info_location = $update_info['info_location'];	
		$info_image = $update_info['info_image'];

		$condition = array('id'=>$pr_id,'client_id'=>$client_id);

		$update_info = array('info_title'=>$info_title,'info_description'=>$info_description,'info_location'=>$info_location,'info_website'=>$info_website,'info_image'=>$info_image,'status'=>$status);
		//echo 'product details: '.$pr_details;
		$this->db->where($condition);
		$this->db->update('information_client',$update_info);
		redirect('home/upload_information_history_admin','refresh');
	}

	//.........................big bang update product/info........................

   public function edit_product_client($client_id,$product_id)
	{
		
		$rule = array('id'=>$product_id,'client_id'=>$client_id);
		$this->db->select('*');
		$this->db->where($rule);
		$result = $this->db->get('product_client');
		return $result->row_array();
	}

	public function edit_product_client_general($client_id,$product_id)
	{
		
		$rule = array('id'=>$product_id,'client_id'=>$client_id);
		$this->db->select('*');
		$this->db->where($rule);
		$result = $this->db->get('product_client');
		return $result->row_array();
	}

	public function update_product_details_client($update_info)
	{
		$status = 0;
		$pr_id = $update_info['id'];
		$client_id = $update_info['client_id'];
		$pr_title = $update_info['title'];
		$pr_details = $update_info['pr_details'];
		$pr_condition = $update_info['pr_condition'];
		$pr_previous_price = $update_info['pr_previous_price'];
		$pr_price = $update_info['pr_price'];
		$location = $update_info['location'];
		$email = $update_info['email'];
		$mobile = $update_info['mobile'];
		$pr_image = $update_info['pr_image'];
		$condition = array('id'=>$pr_id,'client_id'=>$client_id);
		$update_info = array('pr_title'=>$pr_title,'pr_details'=>$pr_details,'pr_condition'=>$pr_condition,'pr_previous_price'=>$pr_previous_price,'pr_price'=>$pr_price,'location'=>$location,'mobile'=>$mobile,'pr_image'=>$pr_image,'status'=>$status);
		//echo 'product details: '.$pr_details;
		$this->db->where($condition);
		$this->db->update('product_client',$update_info);
		redirect('home/upload_product_history_client','refresh');
	}

	public function update_product_details_client_general($update_info)
	{
		$status = 0;
		$pr_id = $update_info['id'];
		$client_id = $update_info['client_id'];
		$pr_title = $update_info['title'];
		$pr_details = $update_info['pr_details'];
		$pr_condition = $update_info['pr_condition'];
		$pr_previous_price = $update_info['pr_previous_price'];
		$pr_price = $update_info['pr_price'];
		$location = $update_info['location'];
		$email = $update_info['email'];
		$mobile = $update_info['mobile'];
		$pr_image = $update_info['pr_image'];
		$condition = array('id'=>$pr_id,'client_id'=>$client_id);
		$update_info = array('pr_title'=>$pr_title,'pr_details'=>$pr_details,'pr_condition'=>$pr_condition,'pr_previous_price'=>$pr_previous_price,'pr_price'=>$pr_price,'location'=>$location,'mobile'=>$mobile,'pr_image'=>$pr_image,'status'=>$status);
		//echo 'product details: '.$pr_details;
		$this->db->where($condition);
		$this->db->update('product_client',$update_info);
		redirect('home/upload_product_history_client_general','refresh');
	}


	public function edit_information_client($client_id,$product_id)
	{
		
		$rule = array('id'=>$product_id,'client_id'=>$client_id);
		$this->db->select('*');
		$this->db->where($rule);
		$result = $this->db->get('information_client');
		return $result->row_array();
	}

	public function update_information_details_client($update_info)
	{
		$status = 0;
		$pr_id = $update_info['id'];
		$client_id = $update_info['client_id'];
		$info_title = $update_info['info_title'];
		$info_description = $update_info['info_description'];
		$info_location = $update_info['info_location'];
		$info_website = $update_info['info_website'];
		$info_location = $update_info['info_location'];	
		$info_image = $update_info['info_image'];

		$condition = array('id'=>$pr_id,'client_id'=>$client_id);

		$update_info = array('info_title'=>$info_title,'info_description'=>$info_description,'info_location'=>$info_location,'info_website'=>$info_website,'info_image'=>$info_image,'status'=>$status);
		//echo 'product details: '.$pr_details;
		$this->db->where($condition);
		$this->db->update('information_client',$update_info);
		redirect('home/upload_information_history_client','refresh');
	}

    //............................big bang update product/info...................

	public function delete_information_admin($client_id,$product_id)
	{
		$rule = array('client_id'=>$client_id,'id'=>$product_id);
		$this->db->where($rule);
		$this->db->delete('information_client'); 
		redirect('home/upload_information_history_admin','refresh');
	}


	//..........................big bang.............................................

   public function client_uploaded_product_history_pagination($id)
	{
		//$data['status']=1;
		$rule = array('client_id'=>$id);
		$this->db->select('*');
		$this->db->where($rule);
		$result = $this->db->get('product_client');
		return $result->num_rows();
	}

	public function client_uploaded_product_history_pagination_general($id)
	{
		//$data['status']=1;
		$rule = array('client_id'=>$id);
		$this->db->select('*');
		$this->db->where($rule);
		$result = $this->db->get('product_client');
		return $result->num_rows();
	}

	public function client_uploaded_product_history($limit, $start,$c_id)
	{
		//$data['status']=1;
		//echo $c_id;
		//echo $limit;
		//echo $start;
		$rule = array('client_id'=>$c_id,);
		$this->db->select('*');
		$this->db->where($rule);
		$this->db->limit($limit, $start);
		$this->db->order_by("id", "desc");
		$result = $this->db->get('product_client');
		return $result->result_array();
	}

	public function client_uploaded_product_history_general($limit, $start,$c_id)
	{
		//$data['status']=1;
		//echo $c_id;
		//echo $limit;
		//echo $start;
		$rule = array('client_id'=>$c_id,);
		$this->db->select('*');
		$this->db->where($rule);
		$this->db->limit($limit, $start);
		$this->db->order_by("id", "desc");
		$result = $this->db->get('product_client');
		return $result->result_array();
	}

	public function client_uploaded_information_history_pagination($id)
	{
		//$data['status']=1;
		$rule = array('client_id'=>$id);
		$this->db->select('*');
		$this->db->where($rule);
		$result = $this->db->get('information_client');
		return $result->num_rows();
	}

	public function client_uploaded_information_history($limit, $start,$c_id)
	{
		//$data['status']=1;
		//echo $c_id;
		//echo $limit;
		//echo $start;
		$rule = array('client_id'=>$c_id,);
		$this->db->select('*');
		$this->db->where($rule);
		$this->db->limit($limit, $start);
		$this->db->order_by("id", "desc");
		$result = $this->db->get('information_client');
		return $result->result_array();
	}

	public function delete_product_client($client_id,$product_id)
	{
		$rule = array('client_id'=>$client_id,'id'=>$product_id);
		$this->db->where($rule);
		$this->db->delete('product_client'); 
		redirect('home/upload_product_history_client','refresh');
	}
	public function delete_product_client_general($client_id,$product_id)
	{
		$rule = array('client_id'=>$client_id,'id'=>$product_id);
		$this->db->where($rule);
		$this->db->delete('product_client'); 
		redirect('home/upload_product_history_client_general','refresh');
	}

	public function delete_information_client($client_id,$product_id)
	{
		$rule = array('client_id'=>$client_id,'id'=>$product_id);
		$this->db->where($rule);
		$this->db->delete('information_client'); 
		redirect('home/upload_information_history_client','refresh');
	}





	//..........................big bang end............................................




	public function update_information($update_info)
	{
		$fullname = $update_info['fullname'];
		$image = $update_info['image'];
		$email = $update_info['email'];
		$mobile = $update_info['mobile'];

		$father_name = $update_info['father_name'];
		$mother_name = $update_info['mother_name'];
		$permanent_address = $update_info['permanent_address'];
		$professional_address = $update_info['professional_address'];
		$date_of_birth = $update_info['date_of_birth'];
		$social_link = $update_info['social_link'];

		$blood_group = $update_info['blood_group'];
		$age = $update_info['age'];
		$work_history = $update_info['work_history'];
		$study_background = $update_info['study_background'];
		$describe_myself = $update_info['describe_myself'];
		$address = $update_info['address'];
		$username = $update_info['username'];

		$info_update = array('fullname'=>$fullname,'email'=>$email,'mobile'=>$mobile,'image'=>$image,'blood_group'=>$blood_group,'age'=>$age,'work_history'=>$work_history,'study_background'=>$study_background,'describe_myself'=>$describe_myself,'address'=>$address,'father_name'=>$father_name,'mother_name'=>$mother_name,'permanent_address'=>$permanent_address,'professional_address'=>$professional_address,'date_of_birth'=>$date_of_birth,'social_link'=>$social_link,);
		$condition = array('username'=>$update_info['username']);
		$this->db->where($condition);
		$this->db->update('users',$info_update);
		//redirect('home/client','refresh');
		redirect('home/success','refresh');

	}

	public function all_product_pagination()
	{
		$data['status']=1;
		$this->db->select('*');
		$this->db->where('status',$data['status']);
		$result = $this->db->get('product_client');
		return $result->num_rows();

	}

	public function all_product($limit, $start)
	{
		$data['status']=1;
		$this->db->select('*');
		$this->db->where('status',$data['status']);
		$this->db->limit($limit, $start);
		$this->db->order_by('id','desc');
		$product = $this->db->get('product_client');
		return $product->result_array();
	}

	public function all_product_rand($limit, $start)
	{
		$data['status']=1;
		$this->db->select('*');
		$this->db->where('status',$data['status']);
		$this->db->limit($limit, $start);
		$this->db->order_by('id','RANDOM');
		$product = $this->db->get('product_client');
		return $product->result_array();
	}


	public function all_product_pending_pagination()
	{
		$data['status']=0;
		$this->db->select('*');
		$this->db->where('status',$data['status']);
		$result = $this->db->get('product_client');
		return $result->num_rows();

	}

	public function all_pending_product($limit, $start)
	{
		$data['status']=0;
		$this->db->select('*');
		$this->db->where('status',$data['status']);
		$this->db->limit($limit, $start);
		$product = $this->db->get('product_client');
		return $product->result_array();
	}





	public function individual_product_details($p_id)
	{
	    $condition  = array('id'=>$p_id);
	    $this->db->select('*');
	    $this->db->where($condition);
	    $p=$this->db->get('product_client');
	    return $p->row_array();
	   

	}

	public function client_image($client_id)
	{
		$condition2  = array('id'=>$client_id);
		$this->db->select('image,fullname');
	    $this->db->where($condition2);
	    $c=$this->db->get('users');
	    return $c->row_array();
	}


	public function specific_product_pagination($category)
	{
		$data['status']=1;
		$rule = array('pr_category'=>$category,'status'=>$data['status']);
		$this->db->select('*');
		$this->db->where($rule);
		$result = $this->db->get('product_client');
		return $result->num_rows();
	}

	public function specific_information_pagination($category)
	{
		$data['status']=1;
		$rule = array('info_category'=>$category,'status'=>$data['status']);
		$this->db->select('*');
		$this->db->where($rule);
		$result = $this->db->get('information_client');
		return $result->num_rows();
	}

	public function specific_product($category,$limit, $start)
	{
		//echo "from model specific category: ".$category;
		$data['status']=1;
		$rule = array('pr_category'=>$category,'status'=>$data['status']);
		$this->db->select('*');
		$this->db->where($rule);
		$this->db->limit($limit, $start);
		$this->db->order_by('id','desc');
		$result = $this->db->get('product_client');
		return $result->result_array();
	}

	public function specific_information($category,$limit, $start)
	{
		//echo "from model specific category: ".$category;
		$data['status']=1;
		$rule = array('info_category'=>$category,'status'=>$data['status']);
		$this->db->select('*');
		$this->db->where($rule);
		$this->db->limit($limit, $start);
		$this->db->order_by('id','desc');
		$result = $this->db->get('information_client');
		return $result->result_array();
	}

	public function all_information_pagination()
	{
		$data['status']=1;
		$this->db->select('*');
		$this->db->where('status',$data['status']);
		$result = $this->db->get('information_client');
		return $result->num_rows();

	}

	public function all_information($limit, $start)
	{
		$data['status']=1;
		$this->db->select('*');
		$this->db->where('status',$data['status']);
		$this->db->limit($limit, $start);
		$this->db->order_by('id','desc');
		$information = $this->db->get('information_client');
		return $information->result_array();
	}

	public function all_information_rand($limit, $start)
	{
		$data['status']=1;
		$this->db->select('*');
		$this->db->where('status',$data['status']);
		$this->db->limit($limit, $start);
		$this->db->order_by('id','RANDOM');
		$information = $this->db->get('information_client');
		return $information->result_array();
	}

	public function all_information_pending_pagination()
	{
		$data['status']=0;
		$this->db->select('*');
		$this->db->where('status',$data['status']);
		$result = $this->db->get('information_client');
		return $result->num_rows();

	}

	public function all_pending_information($limit, $start)
	{
		$data['status']=0;
		$this->db->select('*');
		$this->db->where('status',$data['status']);
		$this->db->limit($limit, $start);
		$information = $this->db->get('information_client');
		return $information->result_array();
	}




	public function individual_information_details($info_id)
	{
		$condition  = array('id'=>$info_id);
	    $this->db->where($condition);
	    $result=$this->db->get('information_client');
	    return $result->row_array();

	}

	public function all_member_pagination()
	{
		$data['status']=1;
		$data['type']='client';
		$this->db->select('*');
		$this->db->where('status',$data['status']);
		$this->db->where('type',$data['type']);
		$result = $this->db->get('users');
		return $result->num_rows();
	}

	public function all_member_pagination_general()
	{
		$data['status']=1;
		$data['type']='g_client';
		$this->db->select('*');
		$this->db->where('status',$data['status']);
		$this->db->where('type',$data['type']);
		$result = $this->db->get('users');
		return $result->num_rows();
	}

	public function all_member( $limit, $start)
	{
		$data['status']=1;
		$rule=array('type'=>'client','status'=>$data['status']);
		//$rule=array('status'=>$data['status']);
		$this->db->select('id,type,fullname,image,email,mobile,blood_group,work_history,study_background,describe_myself,address,date');
		//$this->db->select('*');
		$this->db->where($rule);
		$this->db->limit($limit, $start);
		$this->db->order_by('id','desc');
		$member = $this->db->get('users');
		return $member->result_array();
	}

	public function all_member_pagination_pending()
	{
		$data['status']=0;
		$data['type'] = 'client';
		$this->db->select('*');
		$this->db->where('status',$data['status']);
		$this->db->where('type',$data['type']);
		$result = $this->db->get('users');
		return $result->num_rows();
	}

	public function all_member_pagination_pending_general()
	{
		$data['status']=0;
		$data['type'] = 'g_client';
		$this->db->select('*');
		$this->db->where('status',$data['status']);
		$this->db->where('type',$data['type']);
		$result = $this->db->get('users');
		return $result->num_rows();
	}

	public function all_member_pending( $limit, $start)
	{
		$data['status']=0;
		$rule=array('type'=>'client','status'=>$data['status']);
		$this->db->select('id,type,fullname,image,email,mobile,blood_group,work_history,study_background,describe_myself,address,date');
		//$this->db->select('*');
		$this->db->where($rule);
		$this->db->limit($limit, $start);
		$this->db->order_by('id','desc');
		$member = $this->db->get('users');
		return $member->result_array();
	}

	public function all_member_pending_general( $limit, $start)
	{
		$data['status']=0;
		$rule=array('type'=>'g_client','status'=>$data['status']);
		$this->db->select('id,type,fullname,image,email,mobile,blood_group,work_history,study_background,describe_myself,address,date');
		//$this->db->select('*');
		$this->db->where($rule);
		$this->db->limit($limit, $start);
		$this->db->order_by('id','desc');
		$member = $this->db->get('users');
		return $member->result_array();
	}

	public function all_member_active( $limit, $start)
	{
		$data['status']=1;
		$rule=array('type'=>'client','status'=>$data['status']);
		$this->db->select('id,type,fullname,image,email,mobile,blood_group,work_history,study_background,describe_myself,address,date');
		//$this->db->select('*');
		$this->db->where($rule);
		$this->db->limit($limit, $start);
		$this->db->order_by('id','desc');
		$member = $this->db->get('users');
		return $member->result_array();
	}

	public function all_member_active_general( $limit, $start)
	{
		$data['status']=1;
		$rule=array('type'=>'g_client','status'=>$data['status']);
		$this->db->select('id,type,fullname,image,email,mobile,blood_group,work_history,study_background,describe_myself,address,date');
		//$this->db->select('*');
		$this->db->where($rule);
		$this->db->limit($limit, $start);
		$this->db->order_by('id','desc');
		$member = $this->db->get('users');
		return $member->result_array();
	}

	public function activation_user($id)
	{
		//echo "hello from model id : ".$id;
		$status = 1;
		$active = array('status'=>$status);
		$condition = array('id'=>$id);
		$this->db->where($condition);
		$this->db->update('users',$active);
		//redirect('home/client','refresh');
		redirect('home/pending_user','refresh');


	}

	public function activation_user_general($id)
	{
		//echo "hello from model id : ".$id;
		$status = 1;
		$active = array('status'=>$status);
		$condition = array('id'=>$id);
		$this->db->where($condition);
		$this->db->update('users',$active);
		//redirect('home/client','refresh');
		redirect('home/pending_user_general','refresh');


	}

	public function product_publish($id)
	{
		$status = 1;
		$active = array('status'=>$status);
		$condition = array('id'=>$id);
		$this->db->where($condition);
		$this->db->update('product_client',$active);
		redirect('home/product_pending_post','refresh');
	}

	public function information_publish($id)
	{
		$status = 1;
		$active = array('status'=>$status);
		$condition = array('id'=>$id);
		$this->db->where($condition);
		$this->db->update('information_client',$active);
		
		redirect('home/information_pending_post','refresh');
	}

	public function all_product_discount_pagination()
	{

        /*$status=1;
        $discount=0;
        $prev_price=0;
		$sql = "SELECT * FROM product_client WHERE (status = '$status')
			AND ((pr_discount > '$discount' AND pr_previous_price > '$prev_price') OR pr_discount > '$discount' OR pr_previous_price > '$prev_price')";
		$result = $this->db->query($sql);
		return $result->num_rows();*/
		$data['status']=1;		
		$this->db->select('*');
		$this->db->where('pr_previous_price >',0);
		$this->db->where('status',$data['status']);
		$result = $this->db->get('product_client');
		return $result->num_rows();
	}

	public function all_product_discount($limit, $start)
	{
		/*$status=1;
        $discount=0;
        $prev_price=0;
		$sql = "SELECT * FROM product_client WHERE (status = '$status')
			AND ((pr_discount > '$discount' AND pr_previous_price > '$prev_price') OR pr_discount > '$discount' OR pr_previous_price > '$prev_price') ORDER BY id DESC LIMIT $start, $limit";
		$result = $this->db->query($sql);
		return $result->result_array();*/
		$data['status']=1;
		$this->db->select('*');
		$this->db->where('pr_previous_price >',0);
		$this->db->where('status',$data['status']);
		$this->db->limit($limit, $start);
		$this->db->order_by('id','desc');
		$product = $this->db->get('product_client');
		return $product->result_array();
	}

	public function all_product_discount_rand($limit, $start)
	{
		/*$status=1;
        $discount=0;
        $prev_price=0;
		$sql = "SELECT * FROM product_client WHERE (status = '$status')
			AND ((pr_discount > '$discount' AND pr_previous_price > '$prev_price') OR pr_discount > '$discount' OR pr_previous_price > '$prev_price') ORDER BY id DESC LIMIT $start, $limit";
		$result = $this->db->query($sql);
		return $result->result_array();*/
		$data['status']=1;
		$this->db->select('*');
		$this->db->where('pr_previous_price >',0);
		$this->db->where('status',$data['status']);
		$this->db->limit($limit, $start);
		$this->db->order_by('id','RANDOM');
		$product = $this->db->get('product_client');
		return $product->result_array();
	}

	public function specific_product_discount_pagination($category)
	{
		$data['status']=1;
		//$rule = array('pr_category'=>$category,'pr_discount >',0);
		$this->db->select('*');
		//$this->db->where($rule);
		$this->db->where('pr_category',$category);
		//$this->db->where('pr_discount >',0);
		$this->db->where('pr_previous_price >',0);
		$this->db->where('status',$data['status']);
		$result = $this->db->get('product_client');
		return $result->num_rows();
	}

	public function specific_product_discount($category,$limit, $start)
	{
		$data['status']=1;
		$discount = 0;
		$rule = array('pr_category'=>$category,'pr_previous_price !='=>$discount,'status'=>$data['status']);
		$this->db->select('*');
		$this->db->where($rule);
		//$this->db->where('pr_category',$category);
		//$this->db->where('pr_discount >',0);
		$this->db->limit($limit, $start);
		$this->db->order_by('id','desc');
		$result = $this->db->get('product_client');
		return $result->result_array();
	}

	public function specific_client_info($id)
	{
		$rule = array('id'=>$id);
		$this->db->select('fullname,image,email,mobile,blood_group,work_history,study_background,describe_myself,address,age');
		$this->db->where($rule);
		$result = $this->db->get('users');
		return $result->row_array();
	}

	public function delete_user($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('users'); 
		redirect('home/active_user','refresh');
	}

	public function delete_user_general($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('users'); 
		redirect('home/active_user_general','refresh');
	}

	public function delete_user_pending($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('users'); 
		redirect('home/pending_user','refresh');
	}

	public function delete_user_pending_general($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('users'); 
		redirect('home/pending_user_general','refresh');
	}

	public function delete_information($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('information_client'); 
		redirect('home/information_post','refresh');
	}

	public function delete_product($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('product_client'); 
		redirect('home/product_post','refresh');
	}

	public function delete_information_pending($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('information_client'); 
		redirect('home/information_pending_post','refresh');
	}

	public function delete_product_pending($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('product_client'); 
		redirect('home/product_pending_post','refresh');
	}

	//....................................conversation..............................

	public function member_list()
	{
		$type = 'g_client';

		$this->db->select('*');
		$this->db->where('status',1);
		$this->db->where('type !=',$type);
		$this->db->order_by('fullname','asc');
		$result = $this->db->get('users');
		return $result->result_array(); 

	}

	public function send_message($data)
	{
		$to = $data['to_id'];
		date_default_timezone_set("Asia/Dhaka"); 
        $date =  date('Y-m-d h:i:s');
		$msg = array('my_id'=>$data['my_id'],'to_id'=>$data['to_id'],'msg'=>$data['msg'],'time'=>$date);
		$this->db->insert('message',$msg);
		//redirect('home/conversation','refresh');
		//redirect('home/conversation_ids_again/'.$to,'refresh');
		redirect('home/conversation_ids/'.$to,'refresh');
	}

	public function message_list($my_id,$to_id)
	{

       /*$sql = "SELECT * FROM message WHERE (my_id = '$my_id' OR my_id = '$to_id' )
			AND (to_id = '$my_id' OR to_id = '$to_id') ORDER BY id";
		    $result = $this->db->query($sql);
		    return $result->result_array();*/

            $sql = "SELECT * FROM message WHERE (my_id = '$my_id' OR my_id = '$to_id' )
			AND (to_id = '$my_id' OR to_id = '$to_id') ORDER BY id DESC";
		    $result = $this->db->query($sql);
		    //return $result->result_array();
		    return $result->result();
		    //return $result->num_rows();



        }

   public function send_message_admin($data)
	{
		$to = $data['to_id'];
		date_default_timezone_set("Asia/Dhaka"); 
        $date =  date('Y-m-d h:i:s');
		$msg = array('my_id'=>$data['my_id'],'to_id'=>$data['to_id'],'msg'=>$data['msg'],'time'=>$date);
		$this->db->insert('message',$msg);
		//redirect('home/conversation','refresh');
		//redirect('home/conversation_ids_again/'.$to,'refresh');
		redirect('home/conversation_admin_ids/'.$to,'refresh');
	}

	public function message_list_admin($my_id,$to_id)
	{

       /*$sql = "SELECT * FROM message WHERE (my_id = '$my_id' OR my_id = '$to_id' )
			AND (to_id = '$my_id' OR to_id = '$to_id') ORDER BY id";
		    $result = $this->db->query($sql);
		    return $result->result_array();*/

            $sql = "SELECT * FROM message WHERE (my_id = '$my_id' OR my_id = '$to_id' )
			AND (to_id = '$my_id' OR to_id = '$to_id') ORDER BY id DESC";
		    $result = $this->db->query($sql);
		    //return $result->result_array();
		    return $result->result();
		    //return $result->num_rows();



    }


//...........................friend request part start..........................................

    public function send_friend_request($s_id,$r_id,$r_name)
    {
       if($s_id==$r_id)
      	{
      		redirect('home/find_members','refresh');
      	}
      	else
      	{
      		$sql = "SELECT * FROM friends WHERE (sender_id = '$s_id' AND request_id = '$r_id' )
			OR (sender_id = '$r_id' AND request_id = '$s_id' )";
			$result = $this->db->query($sql);
			$status = 0;
	    	if($result->num_rows==1)
	    	{
	    		//echo "already send";
	    		redirect('home/find_members','refresh');
	    	}
	    	else
	    	{
	    	$status=0;
	    	$data = array('sender_id'=>$s_id,'request_id'=>$r_id,'status'=>$status,'request_name'=>$r_name);
	    	$this->db->insert('friends',$data);
	    	redirect('home/find_members','refresh');
	    	}
      	}
    	
    }

    public function invite_friend_request($s_id,$r_id,$r_name)
    {
    	if($s_id==$r_id)
      	{
      		redirect('home/invite_members','refresh');
      	}
      	else
      	{
           $sql = "SELECT * FROM friends WHERE (sender_id = '$s_id' AND request_id = '$r_id' )
			OR (sender_id = '$r_id' AND request_id = '$s_id' )";
			$result = $this->db->query($sql);
			$status = 0;
	    	if($result->num_rows==1)
	    	{
	    		//echo "already send";
	    		redirect('home/invite_members','refresh');
	    	}
	    	else
	    	{
	    	$status=0;
	    	$data = array('sender_id'=>$s_id,'request_id'=>$r_id,'status'=>$status,'request_name'=>$r_name);
	    	$this->db->insert('friends',$data);
	    	redirect('home/invite_members','refresh');
	    	}
      	}
    
    	
    }

    public function send_friend_request_admin($s_id,$r_id,$r_name)
    {
    	if($s_id==$r_id)
      	{
      		redirect('home/find_members','refresh');
      	}
      	else
      	{
      		$sql = "SELECT * FROM friends WHERE (sender_id = '$s_id' AND request_id = '$r_id' )
			OR (sender_id = '$r_id' AND request_id = '$s_id' )";
			$result = $this->db->query($sql);
			$status = 0;
	    	if($result->num_rows==1)
	    	{
	    		//echo "already send";
	    		redirect('home/find_members_admin','refresh');
	    	}
	    	else
	    	{
	    	$status=0;
	    	$data = array('sender_id'=>$s_id,'request_id'=>$r_id,'status'=>$status,'request_name'=>$r_name);
	    	$this->db->insert('friends',$data);
	    	redirect('home/find_members_admin','refresh');
	    	}
      	}
    	
    	
    	
    }

    public function invite_friend_request_admin($s_id,$r_id,$r_name)
    {
    	if($s_id==$r_id)
      	{
      		redirect('home/invite_members_admin','refresh');
      	}
      	else
      	{
            $sql = "SELECT * FROM friends WHERE (sender_id = '$s_id' AND request_id = '$r_id' )
			OR (sender_id = '$r_id' AND request_id = '$s_id' )";
			$result = $this->db->query($sql);
			$status = 0;
	    	if($result->num_rows==1)
	    	{
	    		//echo "already send";
	    		redirect('home/invite_members_admin','refresh');
	    	}
	    	else
	    	{
	    	$status=0;
	    	$data = array('sender_id'=>$s_id,'request_id'=>$r_id,'status'=>$status,'request_name'=>$r_name);
	    	$this->db->insert('friends',$data);
	    	redirect('home/invite_members_admin','refresh');
	    	}
      	}
    
    	
    }




    public function  pending_friend_request($s_id)
    {
    	$status=0;
    	$rule = array('request_id'=>$s_id,'status'=>$status);
    	$this->db->select('*');
    	$this->db->where($rule);
    	$result = $this->db->get('friends');
    	return $result->result_array();
    }

    public function friend_request_approve($id)
    {
    	//echo " id from model: ".$id;
    	$status = 1;
    	$update = array('status'=>$status);
    	$rule = array('cid'=>$id);
    	$this->db->where($rule);
    	$this->db->update('friends',$update);
    	redirect('home/friend_request','refresh');
    }

    public function friend_request_delete($id)
    {
       $rule = array('cid'=>$id);
       $this->db->where($rule);
       $this->db->delete('friends');
       redirect('home/friend_request','refresh');
    }

    public function friend_list($s_id)
    {
    	$status = 1;
    	$sql = "SELECT * FROM friends WHERE (sender_id = '$s_id' OR request_id = '$s_id' )
			AND (status = '$status' )";
		$result = $this->db->query($sql);
		return $result->result_array();
    }

    public function unfriend($id)
    {
       $rule = array('cid'=>$id);
       $this->db->where($rule);
       $this->db->delete('friends');
       redirect('home/friend_list','refresh');
    }



    public function  pending_friend_request_admin($s_id)
    {
    	$status=0;
    	$rule = array('request_id'=>$s_id,'status'=>$status);
    	$this->db->select('*');
    	$this->db->where($rule);
    	$result = $this->db->get('friends');
    	return $result->result_array();
    }

    public function friend_request_approve_admin($id)
    {
    	//echo " id from model: ".$id;
    	$status = 1;
    	$update = array('status'=>$status);
    	$rule = array('cid'=>$id);
    	$this->db->where($rule);
    	$this->db->update('friends',$update);
    	redirect('home/friend_request_admin','refresh');
    }

    public function friend_request_delete_admin($id)
    {
       $rule = array('cid'=>$id);
       $this->db->where($rule);
       $this->db->delete('friends');
       redirect('home/friend_request_admin','refresh');
    }

    public function friend_list_admin($s_id)
    {
    	$status = 1;
    	$sql = "SELECT * FROM friends WHERE (sender_id = '$s_id' OR request_id = '$s_id' )
			AND (status = '$status' )";
		$result = $this->db->query($sql);
		return $result->result_array();
    }

    public function unfriend_admin($id)
    {
       $rule = array('cid'=>$id);
       $this->db->where($rule);
       $this->db->delete('friends');
       redirect('home/friend_list_admin','refresh');
    }


    //..................search.............................................

    public function pr_srch_no_loc_pagination($search)
    {
    	$sql = "SELECT * FROM product_client WHERE 
			 (pr_title LIKE '%$search%' OR pr_category LIKE '%$search%' OR pr_details LIKE '%$search%') AND status='1' GROUP BY id";
		$result = $this->db->query($sql);
		return $result->num_rows();
    }
    public function pr_srch_no_loc($search,$limit,$start)
    {   	
     	$sql = "SELECT * FROM product_client WHERE 
			 (pr_title LIKE '%$search%' OR pr_category LIKE '%$search%' OR pr_details LIKE '%$search%') AND status='1' GROUP BY id ORDER BY id DESC LIMIT $start, $limit";
		$result = $this->db->query($sql);
		return $result->result_array();
		 	
    }

    public function pr_srch_loc_pagination($search,$location)
	{	
    	$sql = "SELECT * FROM product_client WHERE (location LIKE '%$location%')
			AND (pr_title LIKE '%$search%' OR pr_category LIKE '%$search%' OR pr_details LIKE '%$search%') AND status='1' GROUP BY id";
		$result = $this->db->query($sql);
		return $result->num_rows();
	}


    public function pr_srch_loc($search,$location,$limit,$start)
    {
    	$sql = "SELECT * FROM product_client WHERE (location LIKE '%$location%')
			AND (pr_title LIKE '%$search%' OR pr_category LIKE '%$search%' OR pr_details LIKE '%$search%') AND status='1' GROUP BY id ORDER BY id DESC LIMIT $start, $limit";
		$result = $this->db->query($sql);
		//return $result->num_rows();
    	return $result->result_array();
    }


    public function info_srch_no_loc_pagination($search)
	{
    	$sql = "SELECT * FROM information_client WHERE 
			 (info_title LIKE '%$search%' OR info_category LIKE '%$search%' OR info_description LIKE '%$search%') AND status='1' GROUP BY id";
		$result = $this->db->query($sql);
		return $result->num_rows();
	}

    public function info_srch_no_loc($search,$limit,$start)
    {
    	$sql = "SELECT * FROM information_client WHERE 
			 (info_title LIKE '%$search%' OR info_category LIKE '%$search%' OR info_description LIKE '%$search%') AND status='1' GROUP BY id ORDER BY id DESC LIMIT $start, $limit";
		$result = $this->db->query($sql);
		//return $result->num_rows();
    	return $result->result_array();
    }

    public function info_srch_loc_pagination($search,$location)
	{	
    	$sql = "SELECT * FROM information_client WHERE (info_location LIKE '%$location%')
			AND (info_title LIKE '%$search%' OR info_category LIKE '%$search%' OR info_description LIKE '%$search%') AND status='1' GROUP BY id";
		$result = $this->db->query($sql);
		return $result->num_rows();
	}

    public function info_srch_loc($search,$location,$limit,$start)
    {
    	$sql = "SELECT * FROM information_client WHERE (info_location LIKE '%$location%')
			AND (info_title LIKE '%$search%' OR info_category LIKE '%$search%' OR info_description LIKE '%$search%') GROUP BY id ORDER BY id DESC LIMIT $start, $limit";
		$result = $this->db->query($sql);
		//return $result->num_rows();
    	return $result->result_array();
    }

    public function member_srch_no_loc_pagination($search)
    {
        $sql = "SELECT * FROM users WHERE 
			 (fullname LIKE '%$search%' OR work_history LIKE '%$search%' OR study_background LIKE '%$search%') AND status='1' GROUP BY id ORDER BY id DESC ";
		$result = $this->db->query($sql);
		return $result->num_rows();
    }

    public function member_srch_no_loc($search,$limit,$start)
    {
    	
    	$sql = "SELECT * FROM users WHERE 
			 (fullname LIKE '%$search%' OR work_history LIKE '%$search%' OR study_background LIKE '%$search%' OR address LIKE '%$search%') AND status='1' GROUP BY id ORDER BY id DESC LIMIT $start, $limit";
		$result = $this->db->query($sql);
		//return $result->num_rows();
    	return $result->result_array();

    }

    public function member_srch_loc_pagination($search,$location)
    {
        $sql = "SELECT * FROM users WHERE  (address LIKE '%$location%') AND
			 (fullname LIKE '%$search%' OR work_history LIKE '%$search%' OR study_background LIKE '%$search%') AND status='1' GROUP BY id ORDER BY id DESC ";
		$result = $this->db->query($sql);
		return $result->num_rows();
    }

    public function member_srch_loc($search,$location,$limit,$start)
    {
    	
    	$sql = "SELECT * FROM users WHERE (address LIKE '%$location%') AND
			 (fullname LIKE '%$search%' OR work_history LIKE '%$search%' OR study_background LIKE '%$search%' OR address LIKE '%$search%'  OR address LIKE '%$search%') AND status='1' GROUP BY id ORDER BY id DESC LIMIT $start, $limit";
		$result = $this->db->query($sql);
		//return $result->num_rows();
    	return $result->result_array();

    }
 

    public function dscnt_srch_no_loc_pagination($search)
    {
    	$sql = "SELECT * FROM product_client WHERE 
			 (pr_title LIKE '%$search%' OR pr_category LIKE '%$search%' OR pr_details LIKE '%$search%') AND (status='1' AND pr_previous_price > 0) GROUP BY id";
		$result = $this->db->query($sql);
		return $result->num_rows();
    }

    public function dscnt_srch_no_loc($search,$limit,$start)
    {
    	$sql = "SELECT * FROM product_client WHERE 
			 (pr_title LIKE '%$search%' OR pr_category LIKE '%$search%' OR pr_details LIKE '%$search%') AND (status='1' AND pr_previous_price > 0) GROUP BY id ORDER BY id DESC LIMIT $start, $limit";
		$result = $this->db->query($sql);
		//return $result->num_rows();
    	return $result->result_array();
    }

    public function dscnt_srch_loc_pagination($search,$location)
	{	
    	$sql = "SELECT * FROM product_client WHERE (location LIKE '%$location%')
			AND (pr_title LIKE '%$search%' OR pr_category LIKE '%$search%' OR pr_details LIKE '%$search%') AND (status='1' AND pr_previous_price > 0) GROUP BY id";
		$result = $this->db->query($sql);
		return $result->num_rows();
	}

    public function dscnt_srch_loc($search,$location,$limit,$start)
    {

    	$sql = "SELECT * FROM product_client WHERE (location LIKE '%$location%') AND
			(pr_title LIKE '%$search%' OR pr_category LIKE '%$search%' OR pr_details LIKE '%$search%') AND (status='1' AND pr_previous_price > 0) GROUP BY id ORDER BY id DESC LIMIT $start, $limit";
		$result = $this->db->query($sql);
		//return $result->num_rows();
    	return $result->result_array();
    }


    public function academy_srch_no_loc_pagination($search)
    {
    	$sql = "SELECT * FROM academy WHERE 
			 (academy_name LIKE '%$search%') GROUP BY id";
		$result = $this->db->query($sql);
		return $result->num_rows();
    }

    public function academy_srch_no_loc($search,$limit,$start)
    {
    	$sql = "SELECT * FROM academy WHERE 
			 (academy_name LIKE '%$search%') GROUP BY id ORDER BY id DESC LIMIT $start, $limit";
		$result = $this->db->query($sql);
		//return $result->num_rows();
    	return $result->result_array();
    }



    public function invite_client($email)
    {
    	$rule = array('email'=>$email);
    	$this->db->select('*');
    	$this->db->where($rule);
    	$result = $this->db->get('users');
    	if($result->num_rows==0)
    	{
            redirect('home/invite_members','refresh');
    	}
    	else
    	{
    		return $result->row_array();
    	}

    }
    public function invite_admin($email)
    {
    	$rule = array('email'=>$email);
    	$this->db->select('*');
    	$this->db->where($rule);
    	$result = $this->db->get('users');
    	if($result->num_rows==0)
    	{
            redirect('home/invite_members_admin','refresh');
    	}
    	else
    	{
    		return $result->row_array();
    	}
    	

    }

    public function academy_details_srh($id)
    {
    	$this->db->select('*');
    	$this->db->where('id',$id);
    	$result = $this->db->get('academy');
    	return $result->row_array();
    }


    //................................Academy Start................................
 
     public function create_academy_details($academy)
     {
     	$academy_name = $academy['academy_name'];
     	$academy_details = $academy['academy_details'];
     	$owner_name = $academy['owner_name'];
      
        $academy_data = array('owner_name'=>$owner_name,'academy_name'=>$academy_name,'academy_details'=>$academy_details);
     	$this->db->insert('academy',$academy_data);
		redirect('home/client','refresh');
     }

     public function create_academy_details_admin($academy)
     {
     	$academy_name = $academy['academy_name'];
     	$academy_details = $academy['academy_details'];
     	$owner_name = $academy['owner_name'];
      
        $academy_data = array('owner_name'=>$owner_name,'academy_name'=>$academy_name,'academy_details'=>$academy_details);
     	$this->db->insert('academy',$academy_data);
		redirect('home/admin','refresh');
     }

     public function academy_list_pagination($data)
     {
     	$owner_name = $data['username'];
		$this->db->select('*');
		$this->db->where('owner_name',$owner_name);
		$result = $this->db->get('academy');
		return $result->num_rows();

     }


     public function academy_list($data,$limit, $start)
     {
       //echo "working going on";
     	$owner_name = $data['username'];
     	$this->db->select('*');
     	$this->db->where('owner_name',$owner_name);
     	$this->db->limit($limit, $start);
     	$result = $this->db->get('academy');
     	return $result->result_array();
     }

     public function academy_list_admin_pagination($data)
     {
     	$owner_name = $data['username'];
		$this->db->select('*');
		$this->db->where('owner_name',$owner_name);
		$result = $this->db->get('academy');
		return $result->num_rows();

     }

      public function academy_list_admin($data,$limit, $start)
     {
       //echo "working going on";
     	$owner_name = $data['username'];
     	$this->db->select('*');
     	$this->db->where('owner_name',$owner_name);
     	$this->db->limit($limit, $start);
     	$result = $this->db->get('academy');
     	return $result->result_array();
     }

     public function update_academy($data)
     {
     	$academy_name = $data['academy_name'];
     	$academy_details = $data['academy_details'];
     	$academy_id = $data['id'];
     	$update = array('academy_name'=>$academy_name,'academy_details'=>$academy_details);
     	$this->db->where('id',$academy_id);
     	$this->db->update('academy',$update);
     	redirect('home/academy_list','refresh');
     }

     public function update_academy_admin($data)
     {
     	$academy_name = $data['academy_name'];
     	$academy_details = $data['academy_details'];
     	$academy_id = $data['id'];
     	$update = array('academy_name'=>$academy_name,'academy_details'=>$academy_details);
     	$this->db->where('id',$academy_id);
     	$this->db->update('academy',$update);
     	redirect('home/academy_list_admin','refresh');
     }

     public function academy_details($id)
     {
     	$this->db->select('*');
     	$this->db->where('id',$id);
     	$result = $this->db->get('academy');
     	return $result->row_array();
     }

     public function add_acacademy_member($member)
     {
     	$member_name = $member['member_name'];
     	$member_details = $member['member_details'];
     	$member_image = $member['member_image'];
     	$academy_id = $member['academy_id'];
     	$academy_name = $member['academy_name'];  

     	$member_details = array('member_name'=>$member_name,'member_details'=>$member_details,'member_image'=>$member_image,'academy_id'=>$academy_id);	
     	$this->db->insert('academy_member',$member_details);

     	header('Location: ' . $_SERVER['HTTP_REFERER']);
     }

     public function academy_member_list_pagination($id)
     {
        //$owner_name = $data['username'];
		$this->db->select('*');
		$this->db->where('academy_id',$id);
		$result = $this->db->get('academy_member');
		return $result->num_rows();
     }

     public function academy_member_list($id,$limit, $start)
     {
     	$this->db->select('*');
     	$this->db->where('academy_id',$id);
     	$this->db->limit($limit, $start);
     	$data = $this->db->get('academy_member');
     	return $data->result_array();
     }

     public function delete_academy_member($id)
     {
     	$rule = array('id'=>$id);
		$this->db->where($rule);
		$this->db->delete('academy_member'); 
		header('Location: ' . $_SERVER['HTTP_REFERER']);
     }

     public function edit_academy_member($id)
     {
     	$this->db->select('*');
     	$this->db->where('id',$id);
     	$data = $this->db->get('academy_member');
     	return $data->row_array();
     }


     public function update_academy_member($data)
	{
		
		
		$name = $data['member_name'];
		$details = $data['member_details'];
		$id = $data['id'];
		$condition = array('id'=>$id,);
		$update_info = array('member_name'=>$name,'member_details'=>$details);
		//echo 'product details: '.$pr_details;
		$this->db->where($condition);
		$this->db->update('academy_member',$update_info);
		//redirect('home/academy_member','refresh');
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}







     public function delete_academy($id)
     {
     	$rule = array('id'=>$id);
     	$rule1 = array('academy_id'=>$id);
     	
		$this->db->where($rule);
		$this->db->delete('academy');

		$this->db->where($rule1);
		$this->db->delete('academy_member');
		header('Location: ' . $_SERVER['HTTP_REFERER']);
     }

     public function member_details($id)
     {
     	$this->db->select('*');
     	$this->db->where('id',$id);
     	$data = $this->db->get('academy_member');
     	return $data->row_array();
     }

     public function academy_pagination()
     {
     	$this->db->select('*');
		$result = $this->db->get('academy');
		return $result->num_rows();
     }

     public function academy($limit, $start)
     {
        $this->db->select('*');
        $this->db->limit($limit, $start);
		$result = $this->db->get('academy');
		return $result->result_array();
     }

    //................................Academy Start................................


 }
