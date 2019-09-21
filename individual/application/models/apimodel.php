<?php 

class Apimodel extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

  



	function userregister(){
      
	  header('Content-Type: application/json');
	  
      $response = array();
      if(isset($_POST['password']) && isset($_POST['mobile1']) && isset($_POST['email1'])){ 
     
       extract($_POST);

       
	   if ( ! isset($first_name))    $first_name = '';
	   if ( ! isset($middle_name))   $middle_name= '';
	   if ( ! isset($last_name))     $last_name = '';
	   if ( ! isset($email1))        $email1 = '';
	   if ( ! isset($password))      $password = '';
	   if ( ! isset($mobile1))       $mobile1 = '';
	   
	   
	  
        $maxid = rand().rand(); 
		$data = array('first_name'  => $first_name,
                      'middle_name' => $middle_name, 
                      'last_name'   => $last_name,
                      'email1'      => $email1,
                      'password'    => $password,
					  'max_id'     => $maxid,
		              'mobile1'     => $mobile1,
                      'status'      => 1  
                      );
		

        
        $chk1 = $this->db->get_where('ind_registration', array('email1'=>$email1))->row();

        if(!$chk1){

        if($this->db->insert('ind_registration', $data)){




         $tmaxid = "TC".mt_rand();
      $tid = mt_rand();

       $tp= $this->db->get_where('ticket_process',array('ticket_type_id'=>$this->fun->getnewfieldvalue('ticket_type','id','name','Registration'),'order'=>1))->row();

      $tdata = array(  'member_max_id'  => $maxid,
                       'ticket_max_id'   => $tmaxid,
                       'ticket_id' => $tid,
                       'priority'      => $tp->priority,
                       'est_time'     =>$tp->est_time,
                       'ticket_type_id'    =>$tp->ticket_type_id, 
                       'responsibility'    =>$tp->responsibility,
                       'ticket_process_id'=>$tp->id,
                       'order' => $tp->order,
                       'points' => $tp->points, 
                       'type' => $this->fun->getnewfieldvalue('ticket_type','id','name','Registration'),
                       'process_status' => "Not Initiated",
                       'status'      =>0

        );

      //$this->db->insert('tickets',$tdata);
      $this->db->insert('ticket_bucket',$tdata);




$message = "Thank you for registering with Mallapuram Personal Insurance Portfolio. We request you to please update your personal insurance policies and complete your profile details.";

   $this->fun->sendSMS($mobile1,$message);
			
        $user = $this->db->get_where('ind_registration', array('mobile1'=>$mobile1, 'email1'=>$email1))->row();
		
		 
        
        $response["error"]           = FALSE;
        $response["first_name"]      = $user->first_name;
        $response["middle_name"]     = $user->middle_name;
        $response["last_name"]       = $user->last_name;
        $response["mobile1"]         = $user->mobile1;
        $response["email1"]          = $user->email1;
        $response["password"]        = $user->password;        
	$response["registered_date"] = $user->crdate;
	$response["member_id"]       = $user->max_id;

       
        echo json_encode($response);
    }
        else {
        
        $response["error"]     = TRUE;
        $response["error_msg"] = "Registration Failed";
        echo json_encode($response);
    }
     
}       else {
    
    $response["error"]     = TRUE;
    $response["error_msg"] = "Email ID already exists";
    echo json_encode($response);
}
   
        
      }

else {
    $response["error"]     = TRUE;
    $response["error_msg"] = "Required parameters (first_name  or  email1  or  mobile1  or password) missing!";
    echo json_encode($response);
     }
}

    

function userlogin(){
  
   header('Content-Type: application/json');
   $response = array( );
	
  
  if (isset($_POST['email1']) && isset($_POST['password'])) {
  
    $email1 = $_POST['email1'];
    $password = $_POST['password'];

    $user = $this->db->get_where('ind_registration', array('email1'=>$email1, 'password'=>$password))->row();

    if ($user) {
        
        $response["error"]         = FALSE;
        $response["first_name"]    = $user->first_name;
        $response["middle_name"]   = $user->middle_name;
        $response["last_name"]     = $user->last_name;
		$response["mobile1"]       = $user->mobile1;
		$response["mobile2"]       = $user->mobile2;
		$response["mobile3"]       = $user->mobile2;
	    $response["email1"]        = $user->email1;
	    $response["email2"]        = $user->email2;
        $response["password"]      = $user->password;       
        $response["recorded_dob"]  = $user->recorded_dob;
        $response["actual_dob"]    = $user->actual_dob;
        $response["aadhar_no"]     = $user->aadhar_no;
        $response["member_id"]     = $user->max_id;

        if($user->aadhar_scan){
              $response["aadhar_scan"] = base_url()."uploads/individual/aadhar/".$user->aadhar_scan;       
        } else {
        	 $response["aadhar_scan"]  = base_url()."uploads/individual/dummy.jpg";   
        }
             $response["pan_no"]       = $user->pan_no;
       
        if($user->pan_scan){
            $response["pan_scan"]      = base_url()."uploads/individual/pan/".$user->pan_scan;       
        } else {
        	$response["pan_scan"]      = base_url()."uploads/individual/dummy.jpg";   
        }

            $response["voterid_no"]    = $user->voterid_no;
        
        if($user->voterid_scan){
            $response["voterid_scan"]  = base_url()."uploads/individual/voterid/".$user->voterid_scan;       
        } else {
        	$response["voterid_scan"]  = base_url()."uploads/individual/dummy.jpg";   
        }

	        $response["license_no"]    = $user->license_no;        
	        $response["license_expiry_date"] = @date('Y-m-d',strtotime($user->license_expiry_date));

        if($user->license_scan){
            $response["license_scan"]  = base_url()."uploads/individual/license/".$user->license_scan;       
        } else {
        	$response["license_scan"]  = base_url()."uploads/individual/dummy.jpg";   
        }

	        $response["passport_no"]   = $user->passport_no;               
	        $response["passport_expiry_date"] = $user->passport_expiry_date;

        if($user->passport_scan){
            $response["passport_scan"] = base_url()."uploads/individual/passport/".$user->passport_scan;       
        } else {
        	$response["passport_scan"] = base_url()."uploads/individual/dummy.jpg";   
        }

        $response["address"]         = $user->address;
        $response["state"]           = $user->state;
        $response["district"]        = $user->district;
        $response["pincode"]         = $user->pincode;
        $response["registered_date"] = $user->crdate;


        echo json_encode($response);
   
    
    } else {
        
        $response["error"] = TRUE;
        $response["error_msg"] = "Login credentials are wrong. Please try again!";
        echo json_encode($response);
    }
} else {
   
    $response["error"] = TRUE;
    $response["error_msg"] = "Required parameters( email1 or password )is missing!";
    echo json_encode($response);
}

}



function updateprofile(){
      
      header('Content-Type: application/json');
      $response = array();
      
      if(isset($_POST['member_id'])){ 
      
      extract($_POST);
     
       
       if ( ! isset($first_name))     $first_name  = '';
	   if ( ! isset($middle_name))    $middle_name = '';
	   if ( ! isset($last_name))      $last_name   = '';
	   if ( ! isset($email2))         $email2      = '';
	   if ( ! isset($mobile2))        $mobile2     = '';
       if ( ! isset($mobile3))        $mobile3     = '';   

       if ( ! isset($aadhar_no))      $aadhar_no   = '';
       if ( ! isset($pan_no))         $pan_no      = '';
       if ( ! isset($voterid_no))     $voterid_no  = '';
       if ( ! isset($passport_no))    $passport_no = '';
       if ( ! isset($license_no))     $license_no  = '';

       if($_FILES['aadhar_scan']['name']){
        $aadhar = $_FILES['aadhar_scan']['name'];

       $aadhar_scan = $member_id."_aadhar".".".pathinfo($aadhar, PATHINFO_EXTENSION); ;

      $config = array(
        'upload_path' => "uploads/individual/aadhar/",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite' => TRUE,
        'file_name' => $aadhar_scan
        );
        
	        //$this->load->library('upload', $config);
	      $this->upload->initialize($config);
	        $this->upload->do_upload('aadhar_scan');
	        
	     } else {      
	      $aadhar_scan =$old_aadhar_scan;
	     }

       
       if($_FILES['pan_scan']['name']){
        $pan = $_FILES['pan_scan']['name'];

       $pan_scan = $member_id."_pan".".".pathinfo($pan, PATHINFO_EXTENSION); ;

      $config2 = array(
        'upload_path' => "uploads/individual/pan/",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite' => TRUE,
        'file_name' => $pan_scan
        );
        
	        //$this->load->library('upload', $config);
	      $this->upload->initialize($config2);
	        $this->upload->do_upload('pan_scan');
	        
	     } else {      
	      $pan_scan =$old_pan_scan;
	     }

       if($_FILES['voterid_scan']['name']){
        $voterid = $_FILES['voterid_scan']['name'];

       $voterid_scan = $member_id."_voterid".".".pathinfo($voterid, PATHINFO_EXTENSION); ;

      $config3 = array(
        'upload_path' => "uploads/individual/voterid/",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite' => TRUE,
        'file_name' => $voterid_scan
        );
        
	        //$this->load->library('upload', $config);
	      $this->upload->initialize($config3);
	        $this->upload->do_upload('voterid_scan');
	        
	     } else {      
	      $voterid_scan =$old_voterid_scan;
	     }

       if($_FILES['passport_scan']['name']){
        $passport = $_FILES['passport_scan']['name'];

       $passport_scan = $member_id."_passport".".".pathinfo($passport, PATHINFO_EXTENSION); ;

      $config4 = array(
        'upload_path' => "uploads/individual/passport/",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite' => TRUE,
        'file_name' => $passport_scan
        );
        
	        //$this->load->library('upload', $config);
	      $this->upload->initialize($config4);
	        $this->upload->do_upload('passport_scan');
	        
	     } else {      
	      $passport_scan =$old_passport_scan;
	     }

	     if($_FILES['license_scan']['name']){
        $license = $_FILES['license_scan']['name'];

       $license_scan = $member_id."_license".".".pathinfo($license, PATHINFO_EXTENSION); ;

      $config5 = array(
        'upload_path' => "uploads/individual/license/",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite' => TRUE,
        'file_name' => $license_scan
        );
        
	        //$this->load->library('upload', $config);
	      $this->upload->initialize($config5);
	        $this->upload->do_upload('license_scan');
	        
	     } else {      
	      $license_scan =$old_license_scan;
	     }

       if ( ! isset($license_expiry_date))     $license_expiry_date  = '';
       if ( ! isset($passport_expiry_date))    $passport_expiry_date = '';

       if ( ! isset($actual_dob))              $actual_dob           = '';
       if ( ! isset($recorded_dob))            $recorded_dob         = '';
       if ( ! isset($state))                   $state                = '';
       if ( ! isset($district))                $district             = '';
       if ( ! isset($city))                    $city                 = '';
       if ( ! isset($pincode))                 $pincode              = '';
	 
	      
         
        $data = array('first_name'           => $first_name,
        	          'middle_name'          => $middle_name,
        	          'last_name'            => $last_name, 
        	          'email1'               => $email1,
        	          'mobile1'              => $mobile1,
        	          'email2'               => $email2,
        	          'mobile2'              => $mobile2,
        	          'mobile3'              => $mobile3,
                      'aadhar_no'            => $aadhar_no,
                      'aadhar_scan'          => $aadhar_scan,
                      'pan_scan'             => $pan_scan,
                      'voterid_scan'         => $voterid_scan,
                      'license_scan'         => $license_scan,
                      'passport_scan'        => $passport_scan,
                      'pan_no'               => $pan_no, 
                      'voterid_no'           => $voterid_no,
                      'passport_no'          => $passport_no,
                      'license_no'           => $license_no,
                      'license_expiry_date'  => $license_expiry_date,
                      'passport_expiry_date' => $passport_expiry_date,
                      'actual_dob'           => $actual_dob,
                      'recorded_dob'         => $recorded_dob,
                      'address'              => $address,
                      'state'                =>  $state,
                      'district'             => $district,
                      'pincode'              => $pincode,
                      'status'               => 1  
                      );

        
        
        if($this->db->update('ind_registration',$data,array('max_id'=>$member_id)))
        {

         $pfd=$this->db->list_fields('ind_registration');
       $pchk=$this->db->get_where('ind_registration',array('max_id'=>$member_id))->row();
       foreach($pfd as $fd){
       if($pchk->$fd=='')
        { 
          $message = "Thank you for details provided. Please complete your profile for the finest services from Mallapuram Insurance & Allied Services.";

                    
          break;
        } else {
          $message = "Thank you for updating your profile.";
        }
       } 
         $this->fun->sendSMS($pchk->mobile1,$message);

             $user=$this->db->get_where('ind_registration',array('id'=>$member_id))->row();
                 
        $response["error"]          = FALSE;
        $response["sucess_message"] = "Sucessfully Updated";
        $response["first_name"]     = $user->first_name;
        $response["middle_name"]    = $user->middle_name;
        $response["last_name"]      = $user->last_name;
		$response["mobile1"]        = $user->mobile1;
		$response["mobile2"]        = $user->mobile2;
		$response["mobile3"]        = $user->mobile2;
	    $response["email1"]         = $user->email1;
	    $response["email2"]         = $user->email2;
        $response["password"]       = $user->password;
       
        $response["recorded_dob"]   = $user->recorded_dob;
        $response["actual_dob"]     = $user->actual_dob;
        $response["aadhar_no"]      = $user->aadhar_no;
        $response["member_id"]      = $user->id;

        if($user->aadhar_scan){
        $response["aadhar_scan"]     = base_url()."uploads/individual/aadhar/".$user->aadhar_scan;       
        } else {
        	$response["aadhar_scan"] = base_url()."uploads/individual/dummy.jpg";   
        }

        $response["pan_no"]          = $user->pan_no;
       
        if($user->pan_scan){
        $response["pan_scan"]        = base_url()."uploads/individual/pan/".$user->pan_scan;       
        } else {
        	$response["pan_scan"]    = base_url()."uploads/individual/dummy.jpg";   
        }

        $response["voterid_no"]      = $user->voterid_no;
        
        if($user->voterid_scan){
        $response["voterid_scan"]    = base_url()."uploads/individual/voterid/".$user->voterid_scan;       
        } else {
        	$response["voterid_scan"] = base_url()."uploads/individual/dummy.jpg";   
        }

        $response["license_no"]       = $user->license_no;        
        $response["license_expiry_date"] = $user->license_expiry_date;

        if($user->license_scan){
        $response["license_scan"] = base_url()."uploads/individual/license/".$user->license_scan;       
        } else {
        	$response["license_scan"] = base_url()."uploads/individual/dummy.jpg";   
        }

        $response["passport_no"] = $user->passport_no;               
        $response["passport_expiry_date"] = $user->passport_expiry_date;

        if($user->passport_scan){
        $response["passport_scan"] = base_url()."uploads/individual/passport/".$user->passport_scan;       
        } else {
        	$response["passport_scan"] = base_url()."uploads/individual/dummy.jpg";   
        }

        $response["address"]         = $user->address;
        $response["state"]           = $user->state;
        $response["district"]        = $user->district;
        $response["pincode"]         = $user->pincode;
        $response["registered_date"] = $user->crdate;

        echo json_encode($response);
        }
        
        else
        {
        $response["error"]        = FALSE;
        $response["erro_message"] = "Profile Not Updated";  
        echo json_encode($response);    
        }

     }

       else {
    $response["error"]     = TRUE;
    $response["error_msg"] = "Required parameters (member id) is missing!";
    echo json_encode($response);
     }
  } 








function changepassword(){
	header('Content-Type: application/json');
     $response = array( );

    if(isset($_POST['member_id']) && isset($_POST['oldpassword']) && isset($_POST['newpassword'])){

      extract($_POST);	  
	  
      $user = $this->db->get_where('ind_registration',array('max_id'=>$member_id))->row();
      if($user->password!=$oldpassword){
        $response["error"]     = TRUE;
        $response["error_msg"] = "Entered Wrong password";
        echo json_encode($response);
     
	 } 
	 else {
		 
		  if($newpassword)
		  {
        
		$data = array('password' => $newpassword );
        $this->db->update('ind_registration',$data,array('id'=>$member_id));
        $response["error"]     = FALSE;
        $response["error_msg"] = "Password Changed Successfully";
        echo json_encode($response);
		
		}
		 else
		 {
		 $response["error"]     = TRUE;
         $response["error_msg"] = "Please Enter New Password";	
		 echo json_encode($response);	
		 }

	}

      

}
else
{
$response["error"]     = TRUE;
$response["error_msg"] = "Required parameters (Member ID, Current Password & New Password) missing!";	
echo json_encode($response);	
	
}
}



 function forgotpassword(){

 	header('Content-Type: application/json');
     $response = array( );

   if(isset($_POST['email'])){
      extract($_POST);
      
        $user = $this->db->get_where('ind_registration',array('email1'=>$email))->row();
        if(@$user->id){
          $data = array('name'    => @$user->name,
                        'email1'  => @$user->email1,
                        'password'=> @$user->password
        );
        
        //$message=  $this->load->view('pwsent_page',$data,true);
        //$this->apimodel->sendMail($message,$email);

        $response["error"]     = FALSE;
        $response["error_msg"] = "Password sent to registered email successfully";
        echo json_encode($response);
      } else {
        
            $response["error"] = TRUE;
        $response["error_msg"] = "Email Not Registered";
        echo json_encode($response);
        

      }
    } else {
	        
	            $response["error"] = TRUE;
	        $response["error_msg"] = "Required Paramers Missing!";
	        echo json_encode($response);
	        

	      }
}


function adduserpolicy()
    {
  
   header('Content-Type: application/json');
   $response = array( );
	
  
    if(isset($_POST['member_id'])) 
       {
  
       extract($_POST);
     



           if ( ! isset($insurance_company_id))                 $insurance_company_id         = '';
           if ( ! isset($policy_id))                 $policy_id           = '';
	   if ( ! isset($policy_number))              $policy_number       = '';
	   if ( ! isset($policy_holder_name))          $policy_holder_name            = '';
	   if ( ! isset($policy_start_date))           $policy_start_date  = '';

	   if ( ! isset($policy_period))                $policy_period           = '';
	   if ( ! isset($policy_sum_insured))           $policy_sum_insured       = '';
           if ( ! isset($policy_premium))               $policy_premium            = '';
	   if ( ! isset($premium_payment_mode))         $premium_payment_mode            = '';
	   if ( ! isset($policy_copy))                   $policy_copy  = '';    










       
      
	   if ( ! isset($nominee1_name))             $nominee1_name           = '';
	   if ( ! isset($nominee1_relation))         $nominee1_relation       = '';
	   if ( ! isset($nominee1_dob))              $nominee1_dob            = '';
	   if ( ! isset($nomination1_percentage))    $nomination1_percentage  = '';


	   if ( ! isset($nominee2_name))             $nominee2_name           = '';
	   if ( ! isset($nominee2_relation))         $nominee2_relation       = '';
	   if ( ! isset($nominee2_dob))              $nominee2_dob            = '';
	   if ( ! isset($nomination2_percentage))    $nomination2_percentage  = '';

	   if ( ! isset($nominee3_name))             $nominee3_name           = '';
	   if ( ! isset($nominee3_relation))         $nominee3_relation       = '';
	   if ( ! isset($nominee3_dob))              $nominee3_dob            = '';
	   if ( ! isset($nomination3_percentage))    $nomination3_percentage  = '';

       
       
        $policy = $_FILES['policy_copy']['name'];

        $policy_copy = $member_id."_policy_".$policy_number.".".pathinfo($policy, PATHINFO_EXTENSION);

        $config = array(
                      'upload_path'   => "uploads/individual/policies/",
                      'allowed_types' => "gif|jpg|png|jpeg",
                      'overwrite'     => TRUE,
                      'file_name'     => $policy_copy
                       );

       
	   $policy_max_id = 'PC'.rand().rand();
	   
	       $data = array('member_id'             => $member_id,
        	      'insurance_company'     => $insurance_company_id,
				  'policy_max_id'          => $policy_max_id,
                      'policy_name'           => $policy_id,
                      'policy_number'         => $policy_number,
                      'policy_holder_name'    => $policy_holder_name,
                      'policy_start_date'     => $policy_start_date,
                      'policy_period'         => $policy_period,
                      'policy_sum_insured'    => $policy_sum_insured,
                      'policy_premium'        => $policy_premium,
                      'premium_payment_mode'  => $premium_payment_mode,
                      'policy_copy'           => $policy_copy,
                      'nominee1_name'         => $nominee1_name,
                      'nominee1_relation'     => $nominee1_relation,
                      'nominee1_dob'          => $nominee1_dob,
                      'nomination1_percentage'=> $nomination1_percentage,
                      'nominee2_name'         => $nominee2_name,
                      'nominee2_relation'     => $nominee2_relation,
                      'nominee2_dob'          => $nominee2_dob,
                      'nomination2_percentage'=> $nomination2_percentage,
                      'nominee3_name'         => $nominee3_name,
                      'nominee3_relation'     => $nominee3_relation,
                      'nominee3_dob'          => $nominee3_dob,
                      'nomination3_percentage'=> $nomination3_percentage,
                      'status'                => 0

        );
             if(!$this->db->get_where('ind_policy',array('member_id'=>$member_id,'insurance_company'=>$insurance_company_id,'policy_number'=>$policy_number))->row())
                 {
		        if($this->db->insert('ind_policy', $data))
			         {


$member_name = $this->fun->getnewfieldvalue('ind_registration','first_name','id',$member_id);
        $message = "Dear ".$member_name.", We thank you for uploading your policy no ".$policy_number." You shall receive a call for any missing information. Operations@mallapuram.com";
          
          $member_mobile = $this->fun->getnewfieldvalue('ind_registration','mobile1','id',$member_id);

         
		 
		 
		 
		 
		 $tmaxid = "TC".mt_rand();
         $tid = mt_rand();
    $tp= $this->db->get_where('ticket_process',array('ticket_type_id'=>$this->fun->getnewfieldvalue('ticket_type','id','name','Policy Addition'),'order'=>1))->row();

      $tdata = array(  'member_max_id'  => $this->session->userdata('login'),
                       'ticket_max_id'   => $tmaxid,
                       'ticket_id' => $tid,
                       'policy_max_id'          => $policy_max_id,
                       'priority'      => $tp->priority,
                       'est_time'     =>$tp->est_time,
                       'ticket_type_id'    =>$tp->ticket_type_id, 
                       'responsibility'    =>$tp->responsibility,
                       'ticket_process_id'=>$tp->id,
                       'order' => $tp->order,
                       'type' => $this->fun->getnewfieldvalue('ticket_type','id','name','Registration'),
                       'process_status' => "Not Initiated",
                       'status'      =>0

        );

     
      $this->db->insert('ticket_bucket',$tdata);
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 $this->fun->sendSMS($member_mobile,$message);


			         $this->upload->initialize($config);
	                 $this->upload->do_upload('policy_copy');
			        // referral sent
			        $response["error"]     = FALSE;
                                $response["policy_number"] = $policy_number;
                                $response["single_record_id"] = $policy_number;
			        $response["error_msg"] = "New Policy Added Successfully";
			       
			        echo json_encode($response);
				    }
			        else {
			        
			        $response["error"]     = TRUE;
			        $response["error_msg"] = "Failed to Add New Policy";
			        echo json_encode($response);

			             }
			       } else {
                            $response["error"]     = TRUE;
			                $response["error_msg"] = "Policy with this number already exists";
			                echo json_encode($response);
			               }      
	    }
			         else {
			         	$response["error"]     = TRUE;
			            $response["error_msg"] = "Required Parameters Missing!";
			            echo json_encode($response);
			              }
	}


	function updateuserpolicy()
    {
  
   header('Content-Type: application/json');
   $response = array( );
	
  
    if(isset($_POST['member_id']) && isset($_POST['single_record_id'])) 
       {
  
       extract($_POST);
     
       $old_data=$this->db->get_where('ind_policy',array('member_id'=>$member_id,'id'=>$single_record_id))->row();
      
	   if ( ! isset($nominee1_name))             $nominee1_name           = $old_data->nominee1_name;
	   if ( ! isset($nominee1_relation))         $nominee1_relation       = $old_data->nominee1_relation;
	   if ( ! isset($nominee1_dob))              $nominee1_dob            = $old_data->nominee1_dob;
	   if ( ! isset($nomination1_percentage))    $nomination1_percentage  = $old_data->nomination1_percentage;

	   if ( ! isset($nominee2_name))             $nominee2_name           = $old_data->nominee2_name;
	   if ( ! isset($nominee2_relation))         $nominee2_relation       = $old_data->nominee2_relation;
	   if ( ! isset($nominee2_dob))              $nominee2_dob            = $old_data->nominee2_dob;
	   if ( ! isset($nomination2_percentage))    $nomination2_percentage  = $old_data->nomination2_percentage;

	   if ( ! isset($nominee3_name))             $nominee3_name           = $old_data->nominee3_name;
	   if ( ! isset($nominee3_relation))         $nominee3_relation       = $old_data->nominee3_relation;
	   if ( ! isset($nominee3_dob))              $nominee3_dob            = $old_data->nominee3_dob;
	   if ( ! isset($nomination3_percentage))    $nomination3_percentage  = $old_data->nomination3_percentage;

       
       if(@$_FILES['policy_copy']['name'])
       {
        $policy = $_FILES['policy_copy']['name'];

        $policy_copy= $member_id."_policy_".$policy_number.".".pathinfo($policy, PATHINFO_EXTENSION);

        $config = array(
                      'upload_path'   => "uploads/individual/policies/",
                      'allowed_types' => "gif|jpg|png|jpeg",
                      'overwrite'     => TRUE,
                      'file_name'     => $policy_copy
                       );
       } else {
              $policy_copy = $old_data->policy_copy;  
             }

        $data = array('insurance_company'     => $insurance_company_id,
                      'policy_name'           => $policy_id,
                      'policy_number'         => $policy_number,
                      'policy_holder_name'    => $policy_holder_name,
                      'policy_start_date'     => $policy_start_date,
                      'policy_period'         => $policy_period,
                      'policy_sum_insured'    => $policy_sum_insured,
                      'policy_premium'        => $policy_premium,
                      'premium_payment_mode'  => $premium_payment_mode,
                      'policy_copy'           => $policy_copy,
                      'nominee1_name'         => $nominee1_name,
                      'nominee1_relation'     => $nominee1_relation,
                      'nominee1_dob'          => $nominee1_dob,
                      'nomination1_percentage'=> $nomination1_percentage,
                      'nominee2_name'         => $nominee2_name,
                      'nominee2_relation'     => $nominee2_relation,
                      'nominee2_dob'          => $nominee2_dob,
                      'nomination2_percentage'=> $nomination2_percentage,
                      'nominee3_name'         => $nominee3_name,
                      'nominee3_relation'     => $nominee3_relation,
                      'nominee3_dob'          => $nominee3_dob,
                      'nomination3_percentage'=> $nomination3_percentage,
                      'status'                => 0

        );
             
		        if($this->db->update('ind_policy', $data,array('id'=>$single_record_id)))
			         {
			         	if($_FILES['policy_copy']['name']){
			         $this->upload->initialize($config);
	                 $this->upload->do_upload('policy_copy');
	                }
			        // referral sent
			        $response["error"]     = FALSE;
			        $response["error_msg"] = "Policy Data Udded Successfully";
			       
			        echo json_encode($response);
				    }
			        else {
			        
			        $response["error"]     = TRUE;
			        $response["error_msg"] = "Failed to Update Policy Data";
			        echo json_encode($response);

			             }
			        
	    }
			         else {
			         	$response["error"]     = TRUE;
			            $response["error_msg"] = "Required Parameters Missing!";
			            echo json_encode($response);
			              }
	}

	function viewuserpolicy()
	{
		header('Content-Type: application/json');
		$response = array();

		if(isset($_POST['id']))
		{
			extract($_POST);

			$policy_data=$this->db->get_where('ind_policy',array('policy_number'=>$id))->row();

			if($policy_data)
			{
               
               $response['error']  = FALSE;
               $response['id']  = $policy_data->id;
               $response['member_id']  = $policy_data->member_id;
               $response['insurance_company'] = $policy_data->insurance_company;
               $response['policy_name'] = $policy_data->policy_name;
               $response['policy_number'] = $policy_data->policy_number;
               $response['policy_holder_name'] = $policy_data->policy_holder_name;
               $response['policy_start_date'] = $policy_data->policy_start_date;
               $response['policy_period'] = $policy_data->policy_period;
               $response['policy_sum_insured'] = $policy_data->policy_sum_insured;
               $response['policy_premium'] = $policy_data->policy_premium;
               $response['premium_payment_mode'] = $policy_data->premium_payment_mode;
               $response['policy_copy'] = base_url()."uploads/individual/policies/".$policy_data->policy_copy;
               $response['nominee1_name'] = $policy_data->nominee1_name;
               $response['nominee1_relation'] = $policy_data->nominee1_relation;
               $response['nominee1_dob'] = $policy_data->nominee1_dob;
               $response['nomination1_percentage'] = $policy_data->nomination1_percentage;
               $response['nominee2_name'] = $policy_data->nominee2_name;
               $response['nominee2_relation'] = $policy_data->nominee2_relation;
               $response['nominee2_dob'] = $policy_data->nominee2_dob;
               $response['nomination2_percentage'] = $policy_data->nomination2_percentage;
               $response['nominee3_name'] = $policy_data->nominee3_name;
               $response['nominee3_relation'] = $policy_data->nominee3_relation;
               $response['nominee3_dob'] = $policy_data->nominee3_dob;
               $response['nomination3_percentage'] = $policy_data->nomination3_percentage;
             
               echo json_encode($response);

			} else 
			{
				$response['error'] = TRUE;
				$response['erro_message'] = 'Data Not Available';

				echo json_encode($response);
			}

		} else 
		{
			$response['error'] = TRUE;
			$response['error_message'] = 'Required Parameters Missing!';

			echo json_encode($response);
		}
	}


   function userallpolicies()
	{
		header('Content-Type: application/json');
		$response = array();

		if(isset($_POST['member_id']))
		{
			extract($_POST);

			$policy_data1=$this->db->get_where('ind_policy',array('member_id'=>$member_id));

			if($policy_data1->num_rows)
			{
               $all_policy_data = $policy_data1->result();

               foreach($all_policy_data as $k => $policy_data)
              {
              
               $allpolicies[$k]['id']  = $policy_data->id;
               $allpolicies[$k]['member_id']  = $policy_data->member_id;
               $allpolicies[$k]['insurance_company'] = $policy_data->insurance_company;
               $allpolicies[$k]['policy_name'] = $policy_data->policy_name;
               $allpolicies[$k]['single_record_id'] = $policy_data->id;
               $allpolicies[$k]['policy_number'] = $policy_data->policy_number;
               $allpolicies[$k]['policy_holder_name'] = $policy_data->policy_holder_name;
               $allpolicies[$k]['policy_start_date'] = $policy_data->policy_start_date;
               $allpolicies[$k]['policy_period'] = $policy_data->policy_period;
               $allpolicies[$k]['policy_sum_insured'] = $policy_data->policy_sum_insured;
               $allpolicies[$k]['policy_premium'] = $policy_data->policy_premium;
               $allpolicies[$k]['premium_payment_mode'] = $policy_data->premium_payment_mode;
               $allpolicies[$k]['policy_copy'] = base_url()."uploads/individual/policies/".$policy_data->policy_copy;
               $allpolicies[$k]['nominee1_name'] = $policy_data->nominee1_name;
               $allpolicies[$k]['nominee1_relation'] = $policy_data->nominee1_relation;
               $allpolicies[$k]['nominee1_dob'] = $policy_data->nominee1_dob;
               $allpolicies[$k]['nomination1_percentage'] = $policy_data->nomination1_percentage;
               $allpolicies[$k]['nominee2_name'] = $policy_data->nominee2_name;
               $allpolicies[$k]['nominee2_relation'] = $policy_data->nominee2_relation;
               $allpolicies[$k]['nominee2_dob'] = $policy_data->nominee2_dob;
               $allpolicies[$k]['nomination2_percentage'] = $policy_data->nomination2_percentage;
               $allpolicies[$k]['nominee3_name'] = $policy_data->nominee3_name;
               $allpolicies[$k]['nominee3_relation'] = $policy_data->nominee3_relation;
               $allpolicies[$k]['nominee3_dob'] = $policy_data->nominee3_dob;
               $allpolicies[$k]['nomination3_percentage'] = $policy_data->nomination3_percentage;
              $allpolicies[$k]['status'] = $policy_data->status;
               

			}
			
				$response['error'] = FALSE;
				$response['allpolicies'] = $allpolicies;

				echo json_encode($response);
			}

		 else 
		{
			$response['error'] = TRUE;
			$response['error_message'] = 'Data Not Available';

			echo json_encode($response);
		}
	} else 
	{
		$response['error'] = TRUE;
			$response['error_message'] = 'Required Parameters Missing!';

			echo json_encode($response);
	}
}

























function add_family_member(){
      
	  header('Content-Type: application/json');
      $response = array();
      if(isset($_POST['member_id']) && isset($_POST['relationship']) && isset($_POST['first_name'])){ 
       extract($_POST);
	 
	 
if(@$_FILES['aadhar_scan']['name'])
{
$aadhar_scan =  $relationship.'_'.$first_name.'_'.$member_id.time().rand().".".pathinfo($_FILES['aadhar_scan']['name'], PATHINFO_EXTENSION);
}
else
{
$aadhar_scan="";	 
		 
}
		   
		   
		   
	
	
	
	
if(@$_FILES['pan_scan']['name']!="")
{
$pan_scan = $relationship.'_'.$first_name.'_'.$member_id.time().rand().".".pathinfo($_FILES['pan_scan']['name'], PATHINFO_EXTENSION);
}
else
{
$pan_scan="";	 
}
	  
	  
	  
	  
	  
	  
	  
if(@$_FILES['voterid_scan']['name']!="")
{
$voterid_scan = $relationship.'_'.$first_name.'_'.$member_id.time().rand().".".pathinfo($_FILES['voterid_scan']['name'], PATHINFO_EXTENSION);
}
else
{
$voterid_scan="";	 
}
	   
	   
	   
	   

if(@$_FILES['license_scan']['name']!="")
{	   
$license_scan = $relationship.'_'.$first_name.'_'.$member_id.time().rand().".".pathinfo($_FILES['license_scan']['name'], PATHINFO_EXTENSION);
}
else
{
$license_scan="";		 
}
	 
	 
	 
if(@$_FILES['passport_scan']['name']!="")
{	   
$passport_scan = $relationship.'_'.$first_name.'_'.$member_id.time().rand().".".pathinfo($_FILES['passport_scan']['name'], PATHINFO_EXTENSION);
}
else
{
$passport_scan="";		 
}	   
	   

/*

$temp = $_FILES['aadhar_scan']['tmp_name'];
move_uploaded_file($temp,"../uploads/individual/aadhar/$aadhar_scan");


$temp1 = $_FILES['pan_scan']['tmp_name'];
move_uploaded_file($temp1,"../uploads/individual/pan/$pan_scan");


$temp2 = $_FILES['voterid_scan']['tmp_name'];
move_uploaded_file($temp2,"../uploads/individual/voterid/$voterid_scan");


$temp3 = $_FILES['license_scan']['tmp_name'];
move_uploaded_file($temp3,"../uploads/individual/license/$license_scan");


$temp4 = $_FILES['passport_scan']['tmp_name'];
move_uploaded_file($temp4,"../uploads/individual/passport/$passport_scan");

*/




      


	   
	   $config = array(
		'upload_path'     => APPPATH."../../uploads/individual/aadhar",				
		'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite' => TRUE,
        'file_name' => $aadhar_scan
        );
        $this->load->library('upload', $config);
		$this->upload->initialize($config);
	    $this->upload->do_upload('aadhar_scan');
		
	  
        
		
		
		$config1 = array(
        'upload_path' => APPPATH."../../uploads/individual/pan",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite' => TRUE,
        'file_name' => $pan_scan
        );
        
        $this->load->library('upload', $config1);
		$this->upload->initialize($config1);
        $this->upload->do_upload('pan_scan');
		
		
		$config2 = array(
        'upload_path' => APPPATH."../../uploads/individual/voterid",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite' => TRUE,
        'file_name' => $voterid_scan
        );
        
        $this->load->library('upload', $config2);
		$this->upload->initialize($config2);
        $this->upload->do_upload('voterid_scan');
		
		
		
		$config3 = array(
        'upload_path' => APPPATH."../../uploads/individual/license",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite' => TRUE,
        'file_name' => $license_scan
        );
        
        $this->load->library('upload', $config3);
		$this->upload->initialize($config3);
        $this->upload->do_upload('license_scan');
		
		
		
		$config4 = array(
        'upload_path' => APPPATH."../../uploads/individual/passport",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite' => TRUE,
        'file_name' => $passport_scan
        );
        
        $this->load->library('upload', $config4);
		$this->upload->initialize($config4);
        $this->upload->do_upload('passport_scan');
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   if ( ! isset($middle_name))                $middle_name= '';
	   if ( ! isset($last_name))                  $last_name = '';
	   if ( ! isset($mobile1))                    $mobile1 = '';
	   if ( ! isset($mobile2))                    $mobile2 = '';
	   if ( ! isset($mobile3))                    $mobile3 = '';
	   if ( ! isset($actual_dob))                 $actual_dob= '';
	   if ( ! isset($recorded_dob))               $recorded_dob = '';
	   if ( ! isset($aadhar_no))                  $aadhar_no = '';
	   if ( ! isset($pan_no))                     $pan_no = '';
	   if ( ! isset($voterid_no))                 $voterid_no = '';
	   if ( ! isset($license_no))                 $license_no= '';
	   if ( ! isset($license_expiry_date))        $license_expiry_date = '';
	   if ( ! isset($passport_no))                $passport_no = '';
	   if ( ! isset($passport_expiry_date))       $passport_expiry_date = '';
	   if ( ! isset($aadhar_scan))                $aadhar_scan = '';
	   if ( ! isset($pan_scan))                   $pan_scan = '';
	   if ( ! isset($voterid_scan))               $voterid_scan = '';
	   if ( ! isset($license_scan))               $license_scan = '';
	   if ( ! isset($passport_scan))              $passport_scan = '';
	   
	   
	   
	    $maxid = rand().rand();
        
		$data = array( 'family_member_max_id'     => $maxid,
					  'member_max_id' => $member_id,
					  'relationship' => $relationship,
                     'first_name'=> $first_name,
                     'middle_name'=> $middle_name,
                     'last_name'=> $last_name,
                     'mobile1'=>$mobile1,
                     'mobile2'=>$mobile2,
                     'mobile3'=>$mobile3,
                     'actual_dob'=>$actual_dob,
					 'recorded_dob'=>$recorded_dob,
					 'aadhar_no'=>$aadhar_no,
					 'pan_no'=>$pan_no,
					 'voterid_no'=>$voterid_no,
					 'license_no'=>$license_no,
					 'license_expiry_date'=>$license_expiry_date,
					 'passport_no'=>$passport_no,
					 'passport_expiry_date'=>$passport_expiry_date,
					
					 'aadhar_scan'=>$aadhar_scan,
					 'pan_scan'=>$pan_scan,
					 'voterid_scan '=>$voterid_scan,
					 'license_scan'=>$license_scan,
					 'passport_scan'=>$passport_scan,
					 
                     'status'=> 0
                      
					  );
		
		
		
		
		
		
		

       
       

        if($this->db->insert('ind_family',$data)){
		
		
		
		
		
		$tmaxid = "TC".mt_rand();
         $tid = mt_rand();

        $tp= $this->db->get_where('ticket_process',array('ticket_type_id'=>$this->fun->getnewfieldvalue('ticket_type','id','name','Family Member Add'),'order'=>1))->row();

      $tdata = array(  'family_member_max_id'     => $maxid,
		       'member_max_id' => $member_id,
                       'ticket_max_id'   => $tmaxid,
                       'ticket_id' => $tid,
                       'priority'      => $tp->priority,
                       'est_time'     =>$tp->est_time,
                       'ticket_type_id'    =>$tp->ticket_type_id, 
                       'responsibility'    =>$tp->responsibility,
                       'ticket_process_id'=>$tp->id,
                       'order' => $tp->order,
                       'points' => $tp->points,
                       'type' => $this->fun->getnewfieldvalue('ticket_type','id','name','Family Member Add'),
                       'process_status' => "Not Initiated",
                       'status'      =>0

        );

      //$this->db->insert('tickets',$tdata);
      $this->db->insert('ticket_bucket',$tdata);
			
		
		
		
		
		
		
		
		
		
		
		
		
		
		$message = "You have added your ". $relationship." to your Personal Insurance Portfolio. Please update their complete details & upload their documents to avail finest services.";
            $member_mobile = $this->fun->getnewfieldvalue('ind_registration','mobile1','id',$member_id);
            $this->fun->sendSMS($member_mobile,$message);
	  
        $response["error"] = FALSE;
        $response["sucess_msg"] = "Family Member Added Sucessfully";
        echo json_encode($response);



}
else {
        $response["error"] = TRUE;
        $response["error_msg"] = "Failed To Add Family Member";
        echo json_encode($response);
    }
     
      
        
      
	  
}
else {
    $response["error"] = TRUE;
    $response["error_msg"] = "Required parameters (member_id,relationship,first_name) missing!";
    echo json_encode($response);
     }




}








function edit_family_member(){
      
	  header('Content-Type: application/json');
      $response = array();
      if(isset($_POST['member_id']) && isset($_POST['relationship']) && isset($_POST['first_name']) &&  isset($_POST['family_member_id']) ){ 
      
        $aadhar_scanold="";
	    $pan_scanold="";
	    $voterid_scanold="";
		$license_scanold="";
		$passport_scanold="";
	  
	  extract($_POST);
	 
	 
$family_member = $this->db->get_where('ind_family',array('id'=>$family_member_id))->row(); 


if($family_member->aadhar_scan==""  and @$_FILES['aadhar_scan']['name']!="")
{
$aadhar_scanold =  $relationship.'_'.$first_name.'_'.$member_id.time().rand().".".pathinfo($_FILES['aadhar_scan']['name'], PATHINFO_EXTENSION);

 //$data1 = array('aadhar_scan' =>$aadhar_scanold);
 //$this->db->update('ind_family',$data1,array('id'=>$family_member_id));

}
else if($family_member->aadhar_scan!=""  and @$_FILES['aadhar_scan']['name']=="")
{
$aadhar_scanold=$family_member->aadhar_scan;	 
		 
}
else if($family_member->aadhar_scan!=""  and @$_FILES['aadhar_scan']['name']!="")
{
$aadhar_scanold=$family_member->aadhar_scan;	
}
else
{
$aadhar_scanold=="";	
}

$config = array(
		'upload_path'     => APPPATH."../../uploads/individual/aadhar",				
		'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite' => TRUE,
        'file_name' => $aadhar_scanold
        );
        $this->load->library('upload', $config);
	    $this->upload->initialize($config);
		$this->upload->do_upload('aadhar_scan');
	   
	   
	   
	   
	   
	   
	
if($family_member->pan_scan==""  and @$_FILES['pan_scan']['name']!="")
{
$pan_scanold =  $relationship.'_'.$first_name.'_'.$member_id.time().rand().".".pathinfo($_FILES['pan_scan']['name'], PATHINFO_EXTENSION);

// $data1 = array('pan_scan' =>$pan_scanold);
 //$this->db->update('ind_family',$data1,array('id'=>$family_member_id));

}
else if($family_member->pan_scan!=""  and @$_FILES['pan_scan']['name']=="")
{
$pan_scanold=$family_member->pan_scan;	 
		 
}
else if($family_member->pan_scan!=""  and @$_FILES['pan_scan']['name']!="")
{
$pan_scanold=$family_member->pan_scan;	
}
else
{
$pan_scanold=="";	
}


$config = array(
		'upload_path'     => APPPATH."../../uploads/individual/pan",				
		'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite' => TRUE,
        'file_name' => $pan_scanold
        );
        $this->load->library('upload', $config);
	    $this->upload->initialize($config);
		$this->upload->do_upload('pan_scan');
		
		
		
		
		
		
		
if($family_member->voterid_scan==""  and @$_FILES['voterid_scan']['name']!="")
{
$voterid_scanold =  $relationship.'_'.$first_name.'_'.$member_id.time().rand().".".pathinfo($_FILES['voterid_scan']['name'], PATHINFO_EXTENSION);

 //$data1 = array('voterid_scan' =>$voterid_scanold);
 //$this->db->update('ind_family',$data1,array('id'=>$family_member_id));

}
else if($family_member->voterid_scan!=""  and @$_FILES['voterid_scan']['name']=="")
{
$voterid_scanold=$family_member->voterid_scan;	 
		 
}
else if($family_member->voterid_scan!=""  and @$_FILES['voterid_scan']['name']!="")
{
$voterid_scanold=$family_member->voterid_scan;	
}
else
{
$voterid_scanold=="";	
}


$config = array(
		'upload_path'     => APPPATH."../../uploads/individual/voterid",				
		'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite' => TRUE,
        'file_name' => $voterid_scanold
        );
        $this->load->library('upload', $config);
	    $this->upload->initialize($config);
		$this->upload->do_upload('voterid_scan');	
		
	   
	   
	   


if($family_member->license_scan==""  and @$_FILES['license_scan']['name']!="")
{
$license_scanold =  $relationship.'_'.$first_name.'_'.$member_id.time().rand().".".pathinfo($_FILES['license_scan']['name'], PATHINFO_EXTENSION);

// $data1 = array('license_scan' =>$license_scanold);
 //$this->db->update('ind_family',$data1,array('id'=>$family_member_id));

}
else if($family_member->license_scan!=""  and @$_FILES['license_scan']['name']=="")
{
$license_scanold=$family_member->license_scan;	 
		 
}
else if($family_member->license_scan!=""  and @$_FILES['license_scan']['name']!="")
{
$license_scanold=$family_member->license_scan;	
}
else
{
$license_scanold=="";	
}


$config = array(
		'upload_path'     => APPPATH."../../uploads/individual/license",				
		'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite' => TRUE,
        'file_name' => $license_scanold
        );
        $this->load->library('upload', $config);
	    $this->upload->initialize($config);
		$this->upload->do_upload('license_scan');
		
		
		
		
		
		


if($family_member->passport_scan==""  and @$_FILES['passport_scan']['name']!="")
{
$passport_scanold =  $relationship.'_'.$first_name.'_'.$member_id.time().rand().".".pathinfo($_FILES['passport_scan']['name'], PATHINFO_EXTENSION);

 //$data1 = array('passport_scan' =>$passport_scanold);
 //$this->db->update('ind_family',$data1,array('id'=>$family_member_id));

}
else if($family_member->passport_scan!=""  and @$_FILES['passport_scan']['name']=="")
{
$passport_scanold=$family_member->passport_scan;	 
		 
}
else if($family_member->passport_scan!=""  and @$_FILES['passport_scan']['name']!="")
{
$passport_scanold=$family_member->passport_scan;	
}
else
{
$passport_scanold=="";	
}


$config = array(
		'upload_path'     => APPPATH."../../uploads/individual/passport",				
		'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite' => TRUE,
        'file_name' => $passport_scanold
        );
        $this->load->library('upload', $config);
	    $this->upload->initialize($config);
		$this->upload->do_upload('passport_scan');




	   
	   
	   
	   
	   
	   
	   
	   
	   
	   if ( ! isset($middle_name))                $middle_name= '';
	   if ( ! isset($last_name))                  $last_name = '';
	   if ( ! isset($mobile1))                    $mobile1 = '';
	   if ( ! isset($mobile2))                    $mobile2 = '';
	   if ( ! isset($mobile3))                    $mobile3 = '';
	   if ( ! isset($actual_dob))                 $actual_dob= '';
	   if ( ! isset($recorded_dob))               $recorded_dob = '';
	   if ( ! isset($aadhar_no))                  $aadhar_no = '';
	   if ( ! isset($pan_no))                     $pan_no = '';
	   if ( ! isset($voterid_no))                 $voterid_no = '';
	   if ( ! isset($license_no))                 $license_no= '';
	   if ( ! isset($license_expiry_date))        $license_expiry_date = '';
	   if ( ! isset($passport_no))                $passport_no = '';
	   if ( ! isset($passport_expiry_date))       $passport_expiry_date = '';
	   if ( ! isset($aadhar_scan))                $aadhar_scan = '';
	   if ( ! isset($pan_scan))                   $pan_scan = '';
	   if ( ! isset($voterid_scan))               $voterid_scan = '';
	   if ( ! isset($license_scan))               $license_scan = '';
	   if ( ! isset($passport_scan))              $passport_scan = '';
	   
	   
	   
	   
        
		$data = array(
					  'relationship' => $relationship,
                     'first_name'=> $first_name,
                     'middle_name'=> $middle_name,
                     'last_name'=> $last_name,
                     'mobile1'=>$mobile1,
                     'mobile2'=>$mobile2,
                     'mobile3'=>$mobile3,
                     'actual_dob'=>$actual_dob,
					 'recorded_dob'=>$recorded_dob,
					 'aadhar_no'=>$aadhar_no,
					 'pan_no'=>$pan_no,
					 'voterid_no'=>$voterid_no,
					 'license_no'=>$license_no,
					 'license_expiry_date'=>$license_expiry_date,
					 'passport_no'=>$passport_no,
					 'passport_expiry_date'=>$passport_expiry_date,
					 
					 'aadhar_scan' =>$aadhar_scanold,
					 'pan_scan' =>$pan_scanold,
					 'passport_scan' =>$passport_scanold,
					 'license_scan' =>$license_scanold,
					 'voterid_scan' =>$voterid_scanold
					 
				    
                     );
		
		
		
		
		
		
		

       
       

        if($this->db->update('ind_family',$data,array('id'=>$family_member_id))){
		
		//$smsmessage="Thank You For Registering with ACE TO MEF ENRICHING OPPORTUNITY";
       // $this->sendSMS($mobile,$smsmessage);
			
	  
        $response["error"] = FALSE;
        $response["sucess_msg"] = "Family Member Updated Sucessfully";
        echo json_encode($response);



}
else {
        $response["error"] = TRUE;
        $response["error_msg"] = "Failed To Add Updated Member";
        echo json_encode($response);
    }
     
      
        
      
	  
}
else {
    $response["error"] = TRUE;
    $response["error_msg"] = "Required parameters (member_id,family_member_id,relationship,first_name) missing!";
    echo json_encode($response);
     }




}




















function all_family_members(){
    
	  header('Content-Type: application/json');
      $response = array();
	  
    if(isset($_POST['member_id'])){ 	  
	  extract($_POST);

   $family_member_count = $this->db->get_where('ind_family',array('member_max_id'=>$member_id))->num_rows();  
	

    if($family_member_count!="")
	   {
	   $family_members = $this->db->get_where('ind_family',array('member_max_id'=>$member_id))->result();   
	   foreach($family_members as $k=>$family_member)
	   {
		  $family_member_info[$k]['member_id']=$family_member->member_max_id; 
		  $family_member_info[$k]['family_member_id']=$family_member->id; 
		  
		  
		  $family_member_info[$k]['relationship']=$family_member->relationship;
		  $family_member_info[$k]['first_name']=$family_member->first_name;   
		  $family_member_info[$k]['middle_name']=$family_member->middle_name;
		  $family_member_info[$k]['last_name']=$family_member->last_name;   
		  $family_member_info[$k]['mobile1']=$family_member->mobile1;
		  $family_member_info[$k]['mobile2']=$family_member->mobile2;   
		  $family_member_info[$k]['mobile3']=$family_member->mobile3;
		  $family_member_info[$k]['actual_dob']=$family_member->actual_dob;   
		  $family_member_info[$k]['recorded_dob']=$family_member->recorded_dob;
		  $family_member_info[$k]['aadhar_no']=$family_member->aadhar_no;   
		  $family_member_info[$k]['pan_no']=$family_member->pan_no;
		  $family_member_info[$k]['voterid_no']=$family_member->voterid_no;   
		  $family_member_info[$k]['license_no']=$family_member->license_no;
		  $family_member_info[$k]['license_expiry_date']=$family_member->license_expiry_date;   
		  $family_member_info[$k]['passport_no']=$family_member->passport_no;
		  $family_member_info[$k]['passport_expiry_date']=$family_member->passport_expiry_date;
		   
		 
		 
		  
		  
		  if($family_member->aadhar_scan!="")
		  {
		 
		   $family_member_info[$k]['aadhar_scan']=str_replace('individual/', '',base_url())."uploads/individual/aadhar/".$family_member->aadhar_scan;
		   
		  }
		  else
		  {
		   $family_member_info[$k]['aadhar_scan']=str_replace('individual/', '',base_url())."uploads/dummy_images/mallapuram.png";  
		  }
		   
		  
		  
		  
		  
		  if($family_member->pan_scan!="")
		  {
		  
		  $family_member_info[$k]['pan_scan']=str_replace('individual/', '',base_url())."uploads/individual/pan/".$family_member->pan_scan;
		  }
		  else
		  {
		   $family_member_info[$k]['pan_scan']=str_replace('individual/', '',base_url())."uploads/dummy_images/mallapuram.png";  
		 }
		 
		 
		 
		 
		 if($family_member->voterid_scan!="")
		  {
		 $family_member_info[$k]['voterid_scan']=str_replace('individual/', '',base_url())."uploads/individual/voterid/".$family_member->voterid_scan;
		  }
		  else
		 {
		 $family_member_info[$k]['voterid_scan']=str_replace('individual/', '',base_url())."uploads/dummy_images/mallapuram.png";  
		 }
		 
		 
		 
		 
		 
		 if($family_member->license_scan!="")
		 {
		 $family_member_info[$k]['license_scan']=str_replace('individual/', '',base_url())."uploads/individual/license/".$family_member->license_scan;
		 }
		 else
		 {
		  $family_member_info[$k]['license_scan']=str_replace('individual/', '',base_url())."uploads/dummy_images/mallapuram.png";  
		 }
		
		
		 
		 
	  if($family_member->passport_scan!="")
		 {
		$family_member_info[$k]['passport_scan']=str_replace('individual/', '',base_url())."uploads/individual/passport/".$family_member->passport_scan;
		 }
		 else
		 {
		 $family_member_info[$k]['passport_scan']=str_replace('individual/', '',base_url())."uploads/dummy_images/mallapuram.png";  
		 }
		
		
		
		
		$family_member_info[$k]['status']=$family_member->status;
		  
	   }
	  $response["error"] = FALSE;
	  $response['family_member_info']=$family_member_info;
	  
	  echo json_encode($response);
	  
	 
	  }
	  else 
	  {
	 $response["error"] = FALSE;
     $response["no_family_memeber_message"] = "No Records!";
     echo json_encode($response);
      }




}
else {
    $response["error"] = TRUE;
    $response["error_msg"] = "Required parameters (member_id) is missing!";
    echo json_encode($response);
     }







}	
	





function view_family_member(){
    
	  header('Content-Type: application/json');
      $response = array();
	  
    if(isset($_POST['member_id']) and isset($_POST['family_member_id'])){ 	  
	  extract($_POST);

   $family_member_count = $this->db->get_where('ind_family',array('member_max_id'=>$member_id,'id'=>$family_member_id))->num_rows();  
	

    if($family_member_count!="")
	   {
	   $family_member = $this->db->get_where('ind_family',array('id'=>$family_member_id))->row();   
	    $response["error"] = FALSE;
        
		
		
		  $response['member_id']=$family_member->member_max_id; 
		  $response['family_member_id']=$family_member->id; 
		  
		  
		  $response['relationship']=$family_member->relationship;
		  $response['first_name']=$family_member->first_name;   
		  $response['middle_name']=$family_member->middle_name;
		  $response['last_name']=$family_member->last_name;   
		  $response['mobile1']=$family_member->mobile1;
		  $response['mobile2']=$family_member->mobile2;   
		  $response['mobile3']=$family_member->mobile3;
		  $response['actual_dob']=$family_member->actual_dob;   
		  $response['recorded_dob']=$family_member->recorded_dob;
		  $response['aadhar_no']=$family_member->aadhar_no;   
		  $response['pan_no']=$family_member->pan_no;
		  $response['voterid_no']=$family_member->voterid_no;   
		  $response['license_no']=$family_member->license_no;
		  $response['license_expiry_date']=$family_member->license_expiry_date;   
		  $response['passport_no']=$family_member->passport_no;
		  $response['passport_expiry_date']=$family_member->passport_expiry_date;
        
		   
		 
		 
		  
		  
		  if($family_member->aadhar_scan!="")
		  {
		 
		   $response['aadhar_scan']=str_replace('individual/', '',base_url())."uploads/individual/aadhar/".$family_member->aadhar_scan;
		   
		  }
		  else
		  {
		   $response['aadhar_scan']=str_replace('individual/', '',base_url())."uploads/dummy_images/mallapuram.png";  
		  }
		   
		  
		  
		  
		  
		  if($family_member->pan_scan!="")
		  {
		  
		  $response['pan_scan']=str_replace('individual/', '',base_url())."uploads/individual/pan/".$family_member->pan_scan;
		  }
		  else
		  {
		   $response['pan_scan']=str_replace('individual/', '',base_url())."uploads/dummy_images/mallapuram.png";  
		 }
		 
		 
		 
		 
		 if($family_member->voterid_scan!="")
		  {
		 $response['voterid_scan']=str_replace('individual/', '',base_url())."uploads/individual/voterid/".$family_member->voterid_scan;
		  }
		  else
		 {
		 $response['voterid_scan']=str_replace('individual/', '',base_url())."uploads/dummy_images/mallapuram.png";  
		 }
		 
		 
		 
		 
		 
		 if($family_member->license_scan!="")
		 {
		 $response['license_scan']=str_replace('individual/', '',base_url())."uploads/individual/license/".$family_member->license_scan;
		 }
		 else
		 {
		  $response['license_scan']=str_replace('individual/', '',base_url())."uploads/dummy_images/mallapuram.png";  
		 }
		
		
		 
		 
	  if($family_member->passport_scan!="")
		 {
		$response['passport_scan']=str_replace('individual/', '',base_url())."uploads/individual/passport/".$family_member->passport_scan;
		 }
		 else
		 {
		 $response['passport_scan']=str_replace('individual/', '',base_url())."uploads/dummy_images/mallapuram.png";  
		 }
		
		
		
		
		$response['status']=$family_member->status;
	  
	  
	  $response["error"] = FALSE;
	  echo json_encode($response);
	  
	 
	  }
	  else 
	  {
	 $response["error"] = FALSE;
     $response["no_family_memeber_message"] = "No Records!";
     echo json_encode($response);
      }




}
else {
    $response["error"] = TRUE;
    $response["error_msg"] = "Required parameters (member_id) is missing!";
    echo json_encode($response);
     }




}





function new_policy_service_request(){
      
	  header('Content-Type: application/json');
      $response = array();
      if(isset($_POST['member_id'])  and  isset($_POST['category'])){ 
      extract($_POST);
	 
	   
	   
	   if ( ! isset($category))                   $category= '';
	  
	   if ( ! isset($comments))                   $comments = '';
	  
        $service_type="new";
		$max_id="NSR".mt_rand();
		$data = array('member_id' => $member_id,
					  'max_id'=>$max_id,
					  'category' => $category,
                      'service_type'=> $service_type,
                      'comments'=> $comments,
                      'status'=> 0
                  	  );
		
	   

        if($this->db->insert('ind_service_request',$data)){
			
			
			
			
			$tmaxid = "TC".mt_rand();
         $tid = "TICKET".mt_rand();
 
@$tp= $this->db->get_where('ticket_process',array('ticket_type_id'=>$this->fun->getnewfieldvalue('ticket_type','id','name','New Policy Request'),'order'=>1))->row();

    
	  $tdata = array(  'member_max_id'  =>$max_id,
		               'ticket_max_id'   => $tmaxid,
                       'ticket_id' => $tid,
                       'priority'      => $tp->priority,
                       'est_time'     =>$tp->est_time,
                       'ticket_type_id'    =>$tp->ticket_type_id, 
                       'responsibility'    =>$tp->responsibility,
                       'ticket_process_id'=>$tp->id,
                       'order' => $tp->order,
					   'points' => $tp->points,
                       'type' => $this->fun->getnewfieldvalue('ticket_type','id','name','New Policy Request'),
                       'process_status' => "Not Initiated",
                       'status'      =>0
     );
      //$this->db->insert('tickets',$tdata);
      $this->db->insert('ticket_bucket',$tdata);
				
			
			
			
		
		$message = "We thank you for providing us an opportunity to service your New Policy Request. We shall contact you shortly.";
    $member_mobile = $this->fun->getnewfieldvalue('ind_registration','mobile1','id',$member_id);
			 $this->fun->sendSMS($member_mobile,$message);
			
	  
        $response["error"] = FALSE;
        $response["sucess_msg"] = "We thank you for providing us an opportunity to service your New Policy Request. We shall contact you shortly. ";
        echo json_encode($response);



}
else {
        $response["error"] = TRUE;
        $response["error_msg"] = "Failed To New Policy Request";
        echo json_encode($response);
    }
     
      
        
      
	  
}
else {
    $response["error"] = TRUE;
    $response["error_msg"] = "Required parameters (member_id,category) missing!";
    echo json_encode($response);
     }




}





function existing_policy_service_request(){
      
	  header('Content-Type: application/json');
      $response = array();
     
	 if(isset($_POST['member_id'])  and  isset($_POST['policy_id'])){ 
      extract($_POST);
	 
	   
	   
	   if ( ! isset($category))                   $category= '';
	  
	   if ( ! isset($comments))                   $comments = '';
	  
        $service_type="existing";
		$max_id="ESR".mt_rand();
		$data = array('member_id' => $member_id,
					  'max_id'=>$max_id,
					  'policy_id' => $policy_id,
					  'category' => $category,
                      'service_type'=> $service_type,
                      'comments'=> $comments,
                      'status'=> 0
                  	  );
		
	   

        if($this->db->insert('ind_service_request',$data)){
			
			
			
			$tmaxid = "TC".mt_rand();
         $tid = "TICKET".mt_rand();
 $tp= $this->db->get_where('ticket_process',array('ticket_type_id'=>$this->fun->getnewfieldvalue('ticket_type','id','name','Existing Policy Request'),'order'=>1))->row();

    
	  $tdata = array(  'member_max_id'  =>$max_id,
		               'ticket_max_id'   => $tmaxid,
                       'ticket_id' => $tid,
                       'priority'      => $tp->priority,
                       'est_time'     =>$tp->est_time,
                       'ticket_type_id'    =>$tp->ticket_type_id, 
                       'responsibility'    =>$tp->responsibility,
                       'ticket_process_id'=>$tp->id,
                       'order' => $tp->order,
                       'type' => $this->fun->getnewfieldvalue('ticket_type','id','name','Existing Policy Request'),
                       'process_status' => "Not Initiated",
                       'status'      =>0
     );
      $this->db->insert('tickets',$tdata);
      $this->db->insert('ticket_bucket',$tdata);		
				
			
			
			
			
			
			
			
			
		
		$message = "We thank you for providing us an opportunity to service your Existing Policy Request. We shall contact you shortly.";
    $member_mobile = $this->fun->getnewfieldvalue('ind_registration','mobile1','id',$member_id);
       $this->fun->sendSMS($member_mobile,$message);
			
	  
        $response["error"] = FALSE;
        $response["sucess_msg"] = "We thank you for providing us an opportunity to service your New Policy Request. We shall contact you shortly. ";
        echo json_encode($response);



}
else {
        $response["error"] = TRUE;
        $response["error_msg"] = "Failed To New Policy Request";
        echo json_encode($response);
    }
     
      
        
      
	  
}
else {
    $response["error"] = TRUE;
    $response["error_msg"] = "Required parameters (member_id,policy_id) missing!";
    echo json_encode($response);
     }




}










function all_service_support_requests(){
    
	  header('Content-Type: application/json');
      $response = array();
	  
    if(isset($_POST['member_id'])){ 	  
	  extract($_POST);

   $service_support_count = $this->db->get_where('ind_service_request',array('member_id'=>$member_id))->num_rows();  
	

    if($service_support_count!="")
	   {
	   $service_support_requests = $this->db->get_where('ind_service_request',array('member_id'=>$member_id))->result();   
	   foreach($service_support_requests as $k=>$service_support_request)
	   {
$service_support_request_info[$k]['date']=$service_support_request->crdate; 		  
$service_support_request_info[$k]['member_id']=$service_support_request->member_id; 
		  $service_support_request_info[$k]['service_type']=$service_support_request->service_type; 
		  $service_support_request_info[$k]['category']=$service_support_request->category;
		  $service_support_request_info[$k]['comments']=$service_support_request->comments;   
		  $service_support_request_info[$k]['status']=$service_support_request->status;
		
		
		  
	   }
	   $response["error"] = FALSE;
	   $response['service_support_request_info']=$service_support_request_info;
	   echo json_encode($response);
	  
	 
	  }
	  else 
	  {
	 $response["error"] = FALSE;
     $response["no_requests_message"] = "No Records!";
     echo json_encode($response);
      }




}
else {
    $response["error"] = TRUE;
    $response["error_msg"] = "Required parameters (member_id) is missing!";
    echo json_encode($response);
     }







}	





















function advertisements(){
    
	  header('Content-Type: application/json');
      $response = array();
 
    $advertisements_count = $this->db->get_where('advertisements')->num_rows();  
	

    if($advertisements_count!="")
	   {
	   $advertisements = $this->db->get_where('advertisements')->result();   
	   foreach($advertisements as $k=>$advertisement)
	   {
		  $advertisement_info[$k]['name']=$advertisement->name; 
		  $advertisement_info[$k]['url']=$advertisement->url; 
		  $advertisement_info[$k]['image']=str_replace('individual/', '',base_url())."uploads/advertisements/".$advertisement->image;
		
		  
	   }
	  $response["error"] = FALSE;
	  $response['family_member_info']=$advertisement_info;
	  
	  echo json_encode($response);
	  
	 
	  }
	  else 
	  {
	 $response["error"] = TRUE;
     $response["no_records_message"] = "No Records!";
     echo json_encode($response);
      }












}	








function all_insurance_companies(){
    
	  header('Content-Type: application/json');
      $response = array();
 
    $insurance_companies_count = $this->db->get_where('insurance_companies')->num_rows();  
	

    if($insurance_companies_count!="")
	   {
	   $insurance_companies = $this->db->get_where('insurance_companies')->result();   
	   foreach($insurance_companies as $k=>$insurance_companie)
	   {
		  $insurance_companie_info[$k]['id']=$insurance_companie->id; 
		  $insurance_companie_info[$k]['name']=$insurance_companie->name; 
		  $insurance_companie_info[$k]['status']=$insurance_companie->status;;
		
		  
	   }
	  $response["error"] = FALSE;
	  $response['insurance_companie_info']=$insurance_companie_info;
	  
	  echo json_encode($response);
	  
	 
	  }
	  else 
	  {
	 $response["error"] = TRUE;
     $response["no_records_message"] = "No Records!";
     echo json_encode($response);
      }












}	









function all_insurance_policies(){
    
	  header('Content-Type: application/json');
      $response = array();
 
    $insurance_policies_count = $this->db->get_where('insurance_policy')->num_rows();  
	

    if($insurance_policies_count!="")
	   {
	   $insurance_policies = $this->db->get_where('insurance_policy',array('category'=>'Individual'))->result();   
	   foreach($insurance_policies as $k=>$insurance_policie)
	   {
		  $insurance_policie_info[$k]['id']=$insurance_policie->id; 
		  $insurance_policie_info[$k]['name']=$insurance_policie->name; 
		  $insurance_policie_info[$k]['status']=$insurance_policie->status;;
		
		  
	   }
	  $response["error"] = FALSE;
	  $response['insurance_policie_info']=$insurance_policie_info;
	  
	  echo json_encode($response);
	  
	 
	  }
	  else 
	  {
	 $response["error"] = TRUE;
     $response["no_records_message"] = "No Records!";
     echo json_encode($response);
      }












}	

	    

	

	}
?>