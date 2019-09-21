<?php 

class Individualmodel extends CI_Model {
   
   function __construct()
    {
        parent::__construct();

    }
	
	
	
	
	function login(){


      if(isset($_POST['login'])){

        extract($_POST);
        $user = $this->db->get_where('ind_registration', array('email1'=>$email, 'password'=>$password))->row();
        if($user){ 
         $this->session->set_userdata('login',$user->max_id);
         $this->session->set_userdata('email',$user->email1);
         redirect('dashboard', 'refresh');

        }
		else
		{
		
		return $msg='<div class="alert alert-danger alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <p><i class="fa fa-check"></i> Invalid Login Details!</p>
                                    </div>';
		
		}

      }

    }

    function register(){


      if(isset($_POST['register'])){

        extract($_POST);

        $user = $this->db->get_where('ind_registration', array('email1'=>$email, 'password'=>$password))->row();
        if($user){ 
         
         return $msg='<div class="alert alert-danger alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <p><i class="fa fa-check"></i> Email ID Already Exist!</p>
                                    </div>';

        }
    else
    {

      $maxid = mt_rand();
    
    $data = array(    'first_name'  => $first_name,
                       'last_name'   => $last_name,
                       'middle_name' => $middle_name,
                       'email1'      => $email,
                       'mobile1'     => $mobile,
                       //'username'    =>$username, 
                       'max_id'     => $maxid,
                       'password'    =>$password,
                       'status'      =>1

        );

    if($this->db->insert('ind_registration',$data))
    {
         $tmaxid = mt_rand();
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

                       'ticket_from' => "individual",
                       'status'      =>0

        );

      //$this->db->insert('tickets',$tdata);
      $this->db->insert('ticket_bucket',$tdata);

      $message = "Thank you for registering with Mallapuram Personal Insurance Portfolio. We request you to please update your personal insurance policies and complete your profile details.";

                    $this->fun->sendSMS($mobile,$message);

        $message1=  $this->load->view('email_template1',array('name'=>$first_name),true);

             $this->fun->sendMail($message1,$email);             

        return $msg='<div class="alert alert-success alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <p><i class="fa fa-check"></i> Registered Successfully</p>
                                    </div>';
    }
    
    }

      }

    }


   
	
	
	
	
function password_change()
   {

    if(isset($_POST['passchange'])){

      extract($_POST);
      echo $cpw;
      $chk=$this->db->get_where('ind_registration',array('password'=>$cpw))->num_rows();
      if(!$chk){
        return $msg = '<div class="alert alert-danger col-md-7">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    Entered Wrong Password
                  </div>';
      } else if($npd != $rnpd){

        return $msg = '<div class="alert alert-danger col-md-7">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    Password Not Matched
                  </div>';
      } else {

        $data = array('password' => $npd);

        if($this->db->update('ind_registration',$data,array('email1'=>$this->session->userdata('email')))) {

         //$smsmessage="your password has been changed successfully,New password:-".$npd;
         //$this->sendSMS($this->session->userdata('admin_login'),$smsmessage); 
        return $msg = '<div class="alert alert-success col-md-7">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    Password Updated Successfully
                  </div>';
        }
      }

    }
   }



    function forgot_password()
    {
      if(isset($_POST['fpassword']))
      {
        extract($_POST);

        $chkemail = $_POST['email'];

        if($this->db->get_where('ind_registration',array('email1'=>$chkemail))->row())
        {
            $hash = base64_encode($chkemail);
            $message = "Password Reset Link: ".base_url('reset_password').'?a='.$hash;
            $this->fun->sendMail($chkemail,$message);


             return $msg='<div class="alert alert-danger alert-dismissable">
                                        
                                        <p><i class="fa fa-check"></i> Password Reset Link Sent Your Mail</p>
                                    </div>';




        } else {

          return $msg='<div class="alert alert-danger alert-dismissable">
                                        
                                        <p><i class="fa fa-check"></i> Entered Wrong Email ID</p>
                                    </div>';
        }
      }
    }







function reset_password()
    {
      if(isset($_POST['fpassword']))
      {
        extract($_POST);

        $chkemail = base64_decode($_GET['a']);
		
		$data = array('password' => $new_password);

        if($this->db->get_where('ind_registration',array('email1'=>$chkemail))->row())
        {
            
             $this->db->update('ind_registration',$data,array('email1'=>$chkemail));
			 return $msg='<div class="alert alert-success alert-dismissable">
                                        
                                        <p><i class="fa fa-check"></i> Your password has been changed successfully!..</p>
                                    </div>';
			
			
        } else {

          return $msg='<div class="alert alert-danger alert-dismissable">
                                        
                                        <p><i class="fa fa-check"></i> Entered Wrong Email ID</p>
                                    </div>';
        }
      }
    }














   
  function update_profile(){


      if(isset($_POST['update_profile'])){

        extract($_POST);

      $scanchk = $this->db->get_where('ind_registration',array('max_id'=>$this->session->userdata('login')))->row();

       if($_FILES['aadhar_scan']['name']){
        $aadhar = $_FILES['aadhar_scan']['name'];

       $aadharcopy = $this->session->userdata('login')."_"."aadhar".".".pathinfo($aadhar, PATHINFO_EXTENSION); ;

      $config = array(
        'upload_path' => "uploads/individual/aadhar/",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite' => TRUE,
        'file_name' => $aadharcopy
        );
        
        //$this->load->library('upload', $config);
      $this->upload->initialize($config);
        $this->upload->do_upload('aadhar_scan');
        
     } else {      
      $aadharcopy = $scanchk->aadhar_scan;
     }

     if($_FILES['pan_scan']['name']){
        $pan = $_FILES['pan_scan']['name'];

       $pancopy = $this->session->userdata('login')."_"."pan".".".pathinfo($pan, PATHINFO_EXTENSION); 

      $config1 = array(
        'upload_path' => "uploads/individual/pan/",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite' => TRUE,
        'file_name' => $pancopy
        );
        
        //$this->load->library('upload', $config1);
      $this->upload->initialize($config1);
         $this->upload->do_upload('pan_scan');

       } else {        
        $pancopy = $scanchk->pan_scan;
       }

       if($_FILES['voter_scan']['name']){
        $voter = $_FILES['voter_scan']['name'];

       $votercopy = $this->session->userdata('login')."_"."voterid".".".pathinfo($voter, PATHINFO_EXTENSION); 

      $config2 = array(
        'upload_path' => "uploads/individual/voterid/",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite' => TRUE,
        'file_name' => $votercopy
        );
        
       // $this->load->library('upload', $config2);
      $this->upload->initialize($config2);
         $this->upload->do_upload('voter_scan');

       } else {
        $votercopy =$scanchk->voterid_scan;
       }

       if($_FILES['license_scan']['name']){
        $license = $_FILES['license_scan']['name'];

       $licensecopy = $this->session->userdata('login')."_"."license".".".pathinfo($license, PATHINFO_EXTENSION); 

       $licensecopy1 = $this->session->userdata('login')."_"."license";

      $config3 = array(
        'upload_path' => "uploads/individual/license/",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite' => TRUE,
        'file_name' => $licensecopy1
        );
        
       // $this->load->library('upload', $config2);
      $this->upload->initialize($config3);
         $this->upload->do_upload('license_scan');

       } else {
        $licensecopy =$scanchk->license_scan;
       }

       if($_FILES['passport_scan']['name']){
        $passport = $_FILES['passport_scan']['name'];

       $passportcopy = $this->session->userdata('login')."_"."passport".".".pathinfo($passport, PATHINFO_EXTENSION); 

      $config4 = array(
        'upload_path' => "uploads/individual/passport/",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite' => TRUE,
        'file_name' => $passportcopy
        );
        
       // $this->load->library('upload', $config2);
      $this->upload->initialize($config4);
         $this->upload->do_upload('passport_scan');

       } else {
        $passportcopy =$scanchk->passport_scan;
       }

     
    $data = array(    'first_name'               => $first_name,
                       'last_name'               => $last_name,
                       'middle_name'             => $middle_name,
                       'email1'                  => $email1,
                       'mobile1'                 => $mobile1,
                       'email2'                  => $email2,
                       'mobile2'                 => $mobile2,
                       'mobile3'                 => $mobile3,
                       'recorded_dob'            => $r_dob,
                       'actual_dob'              => $a_dob,
                       'aadhar_no'               => $aadhar_no,
                       'aadhar_scan'             => $aadharcopy,
                       'pan_no'                  => $pan_no,
                       'pan_scan'                => $pancopy,
                       'voterid_no'              => $voter_no,
                       'voterid_scan'            => $votercopy,
                       'license_no'              => $license_no,
                       'license_expiry_date'     => $license_expiry,
                       'license_scan'            => $licensecopy,
                       'passport_no'             => $passport_no,
                       'passport_expiry_date'    => $passport_expiry,
                       'passport_scan'           => $passportcopy,  
                       'state'                   => $state,
                       'district'                => $district,
                       'address'                 => $address,
                       'pincode'                 => $pincode, 
                       'status'                  => 1

        );

    if($this->db->update('ind_registration',$data,array('max_id'=>$this->session->userdata('login'))))
    {
       $pfd=$this->db->list_fields('ind_registration');
       $pchk=$this->db->get_where('ind_registration',array('max_id'=>$this->session->userdata('login')))->row();
       foreach($pfd as $fd){
       if($pchk->$fd=='')
        { 
          $message = "Thank you for details provided. Please complete your profile for the finest services from Mallapuram Insurance & Allied Services.";

                    
          break;
        } else {
          $message = "Thank you for updating your profile.";
        }
       } //echo $message;
         $this->fun->sendSMS($pchk->mobile1,$message);
       
        return $msg='<div class="alert alert-success alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <p><i class="fa fa-check"></i> Profile Updated Successfully</p>
                                    </div>';
    } else {

    }
    
       return $msg='<div class="alert alert-danger alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <p><i class="fa fa-check"></i> Failed to Update Profile</p>
                                    </div>';
   

    }

  }

   function all_inccompanies()
  {
    return $this->db->get_where('insurance_companies',array('status'=>1))->result();
  }

  function add_policy()
  {
    if(isset($_POST['add_policy']))
    {
      extract($_POST);

      
        $pcopy = $_FILES['policy_copy']['name'];

       $policycopy = $this->session->userdata('login')."_"."policy_".rand(1,99999).".".pathinfo($pcopy, PATHINFO_EXTENSION); 

      $config = array(
        'upload_path' => "./uploads/individual/policies/",
        'allowed_types' => "gif|jpg|png|jpeg|pdf",
        'overwrite' => false,
        'file_name' => $policycopy
        );
        
        //$this->load->library('upload', $config);
       $this->upload->initialize($config);
        $this->upload->do_upload('policy_copy');
        
     $policy_max_id = mt_rand();

      $data = array('member_id'              => $this->session->userdata('login'),
                    'policy_max_id'          => $policy_max_id, 
                    'insurance_company'      => $inc_company,
                    'policy_name'            => $policy_name,
                    'policy_number'          => $policy_no,
                    'policy_holder_name'     => $policy_holder_name,
                    'policy_start_date'      => $start_date,
                    'policy_period'          => $policy_period,
                    'policy_sum_insured'     => $sum_insured,
                    'policy_premium'         => $premium,
                    'premium_payment_mode'   => $payment_mode,
                    'policy_copy'            => $policycopy,
                    'nominee1_name'          => $nominee1_name,
                    'nominee1_relation'      => $nominee1_relation,
                    'nominee1_dob'           => $nominee1_dob,
                    'nomination1_percentage' => $nomination1_percentage,
                    'nominee2_name'          => $nominee2_name,
                    'nominee2_relation'      => $nominee2_relation,
                    'nominee2_dob'           => $nominee2_dob,
                    'nomination2_percentage' => $nomination2_percentage,
                    'nominee3_name'          => $nominee3_name,
                    'nominee3_relation'      => $nominee3_relation,
                    'nominee3_dob'           => $nominee3_dob,
                    'nomination3_percentage' => $nomination3_percentage,
                    'status'                 => 1
                      );

      if($this->db->insert('ind_policy',$data))
      {
        $member_name = $this->fun->getnewfieldvalue('ind_registration','first_name','id',$this->session->userdata('login'));
        $message = "Dear ".$member_name.", We thank you for uploading your policy no ".$policy_no." You shall receive a call for any missing information. Operations@mallapuram.com";
          
          $member_mobile = $this->fun->getnewfieldvalue('ind_registration','mobile1','id',$this->session->userdata('login'));

          $this->fun->sendSMS($member_mobile,$message);

        
		
	
		
		
		
		$tmaxid = mt_rand();
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
                       'points' => $tp->points,
                       'type' => $this->fun->getnewfieldvalue('ticket_type','id','name','Registration'),
                       'process_status' => "Not Initiated",
                       'ticket_from' => "individual",
                       'status'      =>0

        );

     
      $this->db->insert('ticket_bucket',$tdata);

       $member_name = $this->fun->getnewfieldvalue('ind_registration','first_name','max_id',$this->session->userdata('login'));
        $message = "Dear ".$member_name.", We thank you for uploading your policy no ".$policy_no." You shall receive a call for any missing information. Operations@mallapuram.com";
          
          $member_mobile = $this->fun->getnewfieldvalue('ind_registration','mobile1','max_id',$this->session->userdata('login'));

          $this->fun->sendSMS($member_mobile,$message);
		
		
	
		
		
		
		
		return $msg = '<div class="alert alert-success alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <p><i class="fa fa-check"></i> Policy Added Successfully</p>
                                    </div>';
      } else {
        return $msg = '<div class="alert alert-danger alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <p><i class="fa fa-check"></i> Failed to Add Policy</p>
                                    </div>';
      }
    }
  }

  function update_policy()
  {
    if(isset($_POST['update_policy']))
    {
      extract($_POST);

      if($_FILES['policy_copy']['name']){
        $pcopy = $_FILES['policy_copy']['name'];

       $policycopy = $this->session->userdata('login')."_"."policy_".$policy_no.".".pathinfo($pcopy, PATHINFO_EXTENSION); 
        
        $config = array(
        'upload_path' => "./uploads/individual/policies/",
        'allowed_types' => "gif|jpg|png|jpeg|pdf",
        'overwrite' => false,
        'file_name' => $policycopy
        );
        
        //$this->load->library('upload', $config);
      $this->upload->initialize($config);
        $this->upload->do_upload('policy_copy');

     } else {
      $policycopy = $old_policy_copy;
     }

      
        
     

      $data = array('insurance_company'      => $inc_company,
                    'policy_name'            => $policy_name,
                    'policy_number'          => $policy_no,
                    'policy_holder_name'     => $policy_holder_name,
                    'policy_start_date'      => $start_date,
                    'policy_period'          => $policy_period,
                    'policy_sum_insured'     => $sum_insured,
                    'policy_premium'         => $premium,
                    'premium_payment_mode'   => $payment_mode,
                    'policy_copy'            => $policycopy,
                    'nominee1_name'          => $nominee1_name,
                    'nominee1_relation'      => $nominee1_relation,
                    'nominee1_dob'           => $nominee1_dob,
                    'nomination1_percentage' => $nomination1_percentage,
                    'nominee2_name'          => $nominee2_name,
                    'nominee2_relation'      => $nominee2_relation,
                    'nominee2_dob'           => $nominee2_dob,
                    'nomination2_percentage' => $nomination2_percentage,
                    'nominee3_name'          => $nominee3_name,
                    'nominee3_relation'      => $nominee3_relation,
                    'nominee3_dob'           => $nominee3_dob,
                    'nomination3_percentage' => $nomination3_percentage,
                    'status'                 => 1
                      );

      if($this->db->update('ind_policy',$data,array('id'=>$this->uri->segment(2))))
      {
        return $msg = '<div class="alert alert-success alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <p><i class="fa fa-check"></i> Policy Updated Successfully</p>
                                    </div>';
      } else {
        return $msg = '<div class="alert alert-danger alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <p><i class="fa fa-check"></i> Failed to Update Policy</p>
                                    </div>';
      }
    }
  }


  function ind_all_policies()
  {
    return $this->db->get_where('ind_policy',array('member_id'=>$this->session->userdata('login')))->result();
  }

  function get_policy()
  {
    return $this->db->get_where('ind_policy',array('id'=>$this->uri->segment(2)))->row();
  }



function add_family_member() {

    if(isset($_POST['add_family_member'])  or  isset($_POST['save_add_family_member'])) 
    {
       extract($_POST);

   
      
	 $aadhar_scan = $this->session->userdata('login').'_'.$relationship.'_'.$first_name.time().rand().'.jpg';
	 $pan_scan = $this->session->userdata('login').'_'.$relationship.'_'.$first_name.time().rand().'.jpg';
	 $voterid_scan = $this->session->userdata('login').'_'.$relationship.'_'.$first_name.time().rand().'.jpg';
	 $license_scan = $this->session->userdata('login').'_'.$relationship.'_'.$first_name.time().rand().'.jpg';
	 $passport_scan = $this->session->userdata('login').'_'.$relationship.'_'.$first_name.time().rand().'.jpg';
	   
	   
	  
	 
	   

        $config = array(
						
		'upload_path'     => APPPATH."../../uploads/individual/aadhar",				
		'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite' => TRUE,
        'file_name' => $aadhar_scan
        );
        $this->load->library('upload', $config);
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
		
  
	  // $member_id=$this->fun->getnewfieldvalue('ind_registration','id','username',$this->session->userdata('login'));
      $member_id=$this->session->userdata('login');
	  
	  $maxid = mt_rand();	
	  $data = array('family_member_max_id'     => $maxid,
        					'member_max_id'            => $member_id,
        					'relationship'             => $relationship,
                  'first_name'               => $first_name,
                  'middle_name'              => $middle_name,
                  'last_name'                => $last_name,
                  'mobile1'                  => $mobile1,
                  'mobile2'                  => $mobile2,
                  'mobile3'                  => $mobile3,
                  'actual_dob'               => $actual_dob,
        					'recorded_dob'             => $recorded_dob,
        					'aadhar_no'                => $aadhar_no,
        					'pan_no'                   => $pan_no,
        					'voterid_no'               => $voterid_no,
        					'license_no'               => $license_no,
        					'license_expiry_date'      => $license_expiry_date,
        					'passport_no'              => $passport_no,
        					'passport_expiry_date'     => $passport_expiry_date,
        					'aadhar_scan'              => $aadhar_scan,
        					'pan_scan'                 => $pan_scan,
        					'voterid_scan '            => $voterid_scan,
        					'license_scan'             => $license_scan,
        					'passport_scan'            => $passport_scan,
                  'status'                   => 0

        );
     
        

      if($this->db->insert('ind_family',$data)) 
          {
            
		
			
         $tmaxid = "TC".mt_rand();
         $tid    = mt_rand();

        $tp= $this->db->get_where('ticket_process',array('ticket_type_id'=>$this->fun->getnewfieldvalue('ticket_type','id','name','Family Member Add'),'order'=>1))->row();

      $tdata = array(  'family_member_max_id'     => $maxid,
		                   'member_max_id'            => $member_id,
                       'ticket_max_id'            => $tmaxid,
                       'ticket_id'                => $tid,
                       'priority'                 => $tp->priority,
                       'est_time'                 => $tp->est_time,
                       'ticket_type_id'           => $tp->ticket_type_id, 
                       'responsibility'           => $tp->responsibility,
                       'ticket_process_id'        => $tp->id,
                       'order'                    => $tp->order,
                       'points'                   => $tp->points,
                       'type'                     => $this->fun->getnewfieldvalue('ticket_type','id','name','Family Member Add'),
                       'process_status'           => "Not Initiated",
                       'ticket_from'              => "individual",
                       'status'                   => 0

        );

      //$this->db->insert('tickets',$tdata);
      $this->db->insert('ticket_bucket',$tdata);
			
			
			
			
			
			
			
			
			$message = "You have added your ". $relationship." to your Personal Insurance Portfolio. Please update their complete details & upload their documents to avail finest services.";
            $member_mobile = $this->fun->getnewfieldvalue('ind_registration','mobile1','max_id',$this->session->userdata('login'));
            $this->fun->sendSMS($member_mobile,$message);
				
			 if(isset($_POST['add_family_member']))
			 {
			   redirect('family_members', 'refresh');
			   
			   return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong> Family  Member Added Successfully</strong>
                  </div>';
			 }
			 else
			 {
			
			 return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong> Family  Member Added Successfully</strong>
                  </div>';
          
		  
			 }
		  
		  
		  
		  } else {
            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Family  Member</strong>
                  </div>';
          }

    }
  }




function get_family_member(){
	
	

      return $this->db->get_where('ind_family',array('id'=>$this->uri->segment(2)))->row();
    }





function all_family_members(){
	
	$member_id=$this->session->userdata('login');
	return $this->db->get_where('ind_family',array('member_max_id'=>$member_id))->result();
   
  }









function update_family_member() {

    if(isset($_POST['edit_family_member'])) 
    {
       extract($_POST);

     
	   
	   $config = array(
						
    		'upload_path'   => APPPATH."../../uploads/individual/aadhar",				
    		'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite'     => TRUE,
        'file_name'     => $aadhar_scanold
        );

        $this->load->library('upload', $config);
	      $this->upload->initialize($config);
		    $this->upload->do_upload('aadhar_scan');
		
		
		
		$config1 = array(
        'upload_path' => APPPATH."../../uploads/individual/pan",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite' => TRUE,
        'file_name' => $pan_scanold
        );
        
        $this->load->library('upload', $config1);
		    $this->upload->initialize($config1);
        $this->upload->do_upload('pan_scan');
		
		
		$config2 = array(
        'upload_path' => APPPATH."../../uploads/individual/voterid",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite' => TRUE,
        'file_name' => $voterid_scanold
        );
        
        $this->load->library('upload', $config2);
		$this->upload->initialize($config2);
        $this->upload->do_upload('voterid_scan');
		
		
		
		$config3 = array(
        'upload_path' => APPPATH."../../uploads/individual/license",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite' => TRUE,
        'file_name' => $license_scanold
        );
        
        $this->load->library('upload', $config3);
		$this->upload->initialize($config3);
        $this->upload->do_upload('license_scan');
		
		
		
		$config4 = array(
        'upload_path' => APPPATH."../../uploads/individual/passport",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite' => TRUE,
        'file_name' => $passport_scanold
        );
        
        $this->load->library('upload', $config4);
		$this->upload->initialize($config4);
        $this->upload->do_upload('passport_scan');
		
	  
	  
	  
	  $data = array(   'relationship' => $relationship,
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
          					 'passport_expiry_date'=>$passport_expiry_date
					 
                     
					 
                     
        );
     
        
if($this->db->update('ind_family',$data,array('id'=>$this->uri->segment(2))))
{
       $pfd=$this->db->list_fields('ind_family');
       $pchk=$this->db->get_where('ind_family',array('id'=>$this->uri->segment(2)))->row();
       foreach($pfd as $fd){
       if($pchk->$fd=='')
        { 
          $message = "Thank you for details provided. Please complete your ".$relationship." details for the finest services from Mallapuram Insurance & Allied Services. ";

                    
          break;
        } else {
          $message = "Thank you for updating your ".$relationship." details.";
        }
       } 
       $member_mobile = $this->fun->getnewfieldvalue('ind_registration','mobile1','max_id',$this->session->userdata('login'));
         $this->fun->sendSMS($member_mobile,$message);
			
            return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Family Member Updated Successfully</strong>
                  </div>';
          } else {
            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Family Member</strong>
                  </div>';
          }

    }
  }









function all_existing_policies(){
	
	$member_id=$this->fun->getnewfieldvalue('ind_registration','id','username',$this->session->userdata('login'));
	return $this->db->get_where('ind_policy',array('member_id'=>$member_id))->result();
   
  }



function new_policy_request() {

    if(isset($_POST['new_policy_request'])) 
    {
       extract($_POST);

   
	  $member_id=$this->session->userdata('login');
	  $service_type="new";
	  $max_id="NSR".mt_rand();
	  
	  
	  $data = array( 'member_id'    => $member_id,
            			 'max_id'       => $max_id,
            			 'service_type' => $service_type,
            			 'category'     => $category,
                   'comments'     => $comments,
                   'status'       => 0
              );
     
        

      if($this->db->insert('ind_service_request',$data)) 
          {
            
	     $tmaxid = mt_rand();
         $tid  = mt_rand();
 
@$tp= $this->db->get_where('ticket_process',array('ticket_type_id'=>$this->fun->getnewfieldvalue('ticket_type','id','name','New Policy Request'),'order'=>1))->row();

    
	  $tdata = array( 'member_max_id'     => $member_id,
		                'ticket_max_id'     => $max_id,
                    'ticket_id'         => $tid,
                    'priority'          => $tp->priority,
                    'est_time'          => $tp->est_time,
                    'ticket_type_id'    => $tp->ticket_type_id, 
                    'responsibility'    => $tp->responsibility,
                    'ticket_process_id' => $tp->id,
                    'order'             => $tp->order,
                    'points'            => $tp->points,
                    'type'              => $this->fun->getnewfieldvalue('ticket_type','id','name','New Policy Request'),
                    'process_status'    => "Not Initiated",
                    'ticket_from'       => "individual",
                    'status'            =>0
     );
      //$this->db->insert('tickets',$tdata);
      $this->db->insert('ticket_bucket',$tdata);
				
				
				
				
				
				
				
				
				
				
		$message = "We thank you for providing us an opportunity to service your New Policy Request. We shall contact you shortly.";
    $member_mobile = $this->fun->getnewfieldvalue('ind_registration','mobile1','id',$this->session->userdata('login'));

			 $this->fun->sendSMS($member_mobile,$message);
			   
			   return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong> New Policy Request Added Successfully</strong>
                  </div>';
			
			 
		  
		  
		  
		  } else {
            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to New Policy Request</strong>
                  </div>';
          }

    }
  }







function existing_policy_request() {

    if(isset($_POST['existing_policy_request'])) 
    {
       extract($_POST);

  
	   $member_id=$this->session->userdata('login');
	 // $user=$this->db->get_where('ind_registration',array('id'=>$member_id))->row();
	   $service_type="existing";
	   $max_id=mt_rand();
	  
	  $data = array( 'member_id'    => $member_id,
            			 'max_id'       => $max_id,
            			 'service_type' => $service_type,
            			 'policy_id'    => $policy_id,
            			 'category'     => $category,
                   'comments'     => $comments,
                   'status'       => 0

        );
     
        

      if($this->db->insert('ind_service_request',$data)) 
          {
            
				
				
         
         $tid = mt_rand();
           $tp= $this->db->get_where('ticket_process',array('ticket_type_id'=>$this->fun->getnewfieldvalue('ticket_type','id','name','Existing Policy Request'),'order'=>1))->row();

    
	  $tdata = array(  'member_max_id'     => $member_id,
		                 'ticket_max_id'     => $max_id,
                     'ticket_id'         => $tid,
                     'priority'          => $tp->priority,
                     'est_time'          => $tp->est_time,
                     'ticket_type_id'    => $tp->ticket_type_id,
                     'policy_max_id'     => $policy_id, 
                     'responsibility'    => $tp->responsibility,
                     'ticket_process_id' => $tp->id,
                     'order'             => $tp->order,
                     'points'            => $tp->points,
                     'type'              => $this->fun->getnewfieldvalue('ticket_type','id','name','Existing Policy Request'),
                     'process_status'    => "Not Initiated",
                     'ticket_from'       => "individual",
                     'status'            => 0
     );
      
      $this->db->insert('ticket_bucket',$tdata);		
				
				
				
				
				
				$message = "We thank you for providing us an opportunity to service your Existing Policy Request. We shall contact you shortly.";
    $member_mobile = $this->fun->getnewfieldvalue('ind_registration','mobile1','id',$this->session->userdata('login'));
       $this->fun->sendSMS($member_mobile,$message);
			 
			   
			   return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong> Existing Policy Request Added Successfully</strong>
                  </div>';
			
			 
		  
		  
		  
		  } else {
            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Existing Policy</strong>
                  </div>';
          }

    }
  }




function all_requests(){
	
	$member_id=$this->fun->getnewfieldvalue('ind_registration','max_id','max_id',$this->session->userdata('login'));
	return $this->db->order_by('id','desc')->get_where('ind_service_request',array('member_id'=>$member_id))->result();
   
  }





function share_app() {

    if(isset($_POST['share_app'])) 
    {
       extract($_POST);

   
	  $member_id=$this->session->userdata('login');
	  
	  
	 
	  
	  $data = array( 'member_id' => $member_id,
        					 'name'      => $name,
        					 'email'     => $email,
        					 'mobile'    => $mobile,
                   'status'    => 0

        );
     
        

      if($this->db->insert('ind_share_app',$data)) 
          {
            
				

$message = "Hi,to get finest services & maintain all your insurance policies at one single place I strongly recommend you to load Mallapuram Personal Insurance Portfolio APP. http://mallapuram.co.in/cis/individual/";
           
		   $this->fun->sendMail1($email,$message);	




$message = "Hi,to get finest services & maintain all your insurance policies at one single place I strongly recommend you to load Mallapuram Personal Insurance Portfolio APP. http://mallapuram.co.in/cis/individual/";
    
       $this->fun->sendSMS($mobile,$message);
			 
			   
			   return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>App Link Shared Successfully with '.$name.'</strong>
                  </div>';
			
			 
		  
		  
		  
		  } else {
            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Share App</strong>
                  </div>';
          }

    }
  }



function all_share_app_details(){
	
	$member_id=$this->session->userdata('login');
	return $this->db->get_where('ind_share_app',array('member_id'=>$member_id))->result();
   
  }






function userregister(){
      
	  header('Content-Type: application/json');
      $response = array();
      if(isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['password'])){ 
     
       extract($_POST);

       
	   if ( ! isset($first_name))    $first_name = '';
	   if ( ! isset($last_name))     $last_name= '';
	   if ( ! isset($middle_name))    $middle_name = '';
	   if ( ! isset($email))          $email = '';
	   if ( ! isset($password))       $password = '';
	   if ( ! isset($mobile))         $mobile = '';
	   
	   
	   
	   
	   
        
		$data = array( 'first_name'  => $first_name,
                       'last_name'   => $last_name,
                       'middle_name' => $middle_name,
                       'email1'      => $email,
                       'mobile1'     => $mobile,
                       
                       'password'    =>$password,
                       'status'      =>1
                      );
		
		
		
		
		
		
		

        //$chk=$this->db->get_where('registrations',array('email'=>$email))->row();
        $chk1 = $this->db->get_where('ind_registration', array('email1'=>$email))->row();

        if(!$chk1){

        if($this->db->insert('ind_registration', $data)){
		
		
		
		//$smsmessage="Thank You For Registering with ACE TO MEF ENRICHING OPPORTUNITY";
       // $this->sendSMS($mobile,$smsmessage);
			
			
        $user = $this->db->get_where('ind_registration', array('email1'=>$email, 'password'=>$password))->row();
		
		 
        
        $response["error"] = FALSE;
        $response["first_name"] = $user->first_name;
        $response["last_name"] = $user->last_name;
        $response["middle_name"] = $user->middle_name;
        
        $response["email"] = $user->email1;
        $response["mobile"] = $user->mobile1;
        
		
        
       
        echo json_encode($response);
    }
        else {
        
        $response["error"] = TRUE;
        $response["error_msg"] = "Registration Failed";
        echo json_encode($response);
    }
     
}       else {
    
    $response["error"] = TRUE;
    $response["error_msg"] = "Email already exists";
    echo json_encode($response);
}
   
        
      }
	  




else {
    $response["error"] = TRUE;
    $response["error_msg"] = "Required parameters (email,mobile,password) is missing!";
    echo json_encode($response);
     }
}













}
?>