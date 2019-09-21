<?php 

class Mallapurammodel extends CI_Model {
   
   function __construct()
    {
        parent::__construct();
    }
	
	
	
	
	function login(){


      if(isset($_POST['login'])){

        extract($_POST);
        $user = $this->db->get_where('admin', array('username'=>$username, 'password'=>$password))->row();
        if($user){ 
         $this->session->set_userdata('mallapuram_admin',$user->username);
         redirect('admin/dashboard', 'refresh');

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


    function hr_login(){


      if(isset($_POST['hr_login'])){

        extract($_POST);
        $user = $this->db->get_where('corporate_client', array('authorised_contact_person1_email'=>$username, 'password'=>$password))->row();
        if($user){ 
          $client_data = array( 'client_admin' => $user->authorised_contact_person1_email,
                                'client_id' => $user->id,
                                'client_max_id' => $user->client_max_id
                                   );

         $this->session->set_userdata($client_data);
         redirect('hr/dashboard', 'refresh');

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
	
	
	
	
	function password_change()
   {

    if(isset($_POST['passchange'])){

      extract($_POST);
      echo $cpw;
      $chk=$this->db->get_where('admin',array('password'=>$cpw))->num_rows();
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

        if($this->db->update('admin',$data,array('username'=>'admin'))) {

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


   function hr_password_change()
   {

    if(isset($_POST['hr_passchange'])){

      extract($_POST);
      echo $cpw;
      $chk=$this->db->get_where('corporate_client',array('authorised_contact_person1_email'=>$this->session->userdata('client_admin'),'password'=>$cpw))->num_rows();
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

        if($this->db->update('corporate_client',$data,array('authorised_contact_person1_email'=>$this->session->userdata('client_admin')))) {

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
	


  







function add_insurance_company() {

    if(isset($_POST['add_ins_company']) || isset($_POST['add_ins_company_red'])) 
    {
       extract($_POST);

      
       $iname = $_FILES['logo']['name'];
	   
	   if($iname=="")
	   {
		   
		$filename="";   
	   }
	   
	   else
	   {

       $filename = "MCA".time().".".pathinfo($iname, PATHINFO_EXTENSION);
	   
	    $config = array(
        'upload_path'   => "./uploads/company/",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite'     => TRUE,
        'file_name'     => $filename
        );
        
        $this->load->library('upload', $config);
	   
	   }

      

       if(!$this->db->get_where('insurance_companies',array('name'=>$company))->num_rows())
       {

      $data = array( 'name'                      => $company,
                     'branch_name'               => $branch,
                     'branch_address'            => $branch_address,
                     'headoffice_address'        => $head_address,
                     'gstn_number'               => $gstin,
                     'logo'                      => $filename,
                     'website'                   => $website,
                     'relationship_manager_name' => $r_manager_name,
                     'relationship_manager_phone'=> $r_manager_number,
                     'relationship_manager_email'=> $r_manager_email,
                     'branch_manager_name'       => $b_manager_name,
                     'branch_manager_phone'      => $b_manager_number,
                     'branch_manager_email'      => $b_manager_email,
                     'regional_head_name'        => $regonal_head_name,
                     'regional_head_phone'       => $regional_head_number,
                     'regional_head_email'       => $regional_head_email,
                     'helpline_number'           => $help_line_number,
                     'service_forms_link'        => $service_forms_link,
                     'renewal_payment_link'      => $renewal_link,
                     'grievance_redressal_link'  => $grievance_redressal,
                     'branch_locations_link'     => $all_branch_links,
                     'hospitals_link'            => $nw_hospital_links,
                     'otherlink1'                => $other_link1,
                     'otherlink2'                => $other_link2,
                     'status'                    => 1

        );
     
        

      if($this->db->insert('insurance_companies',$data)) 
          {
           
		   
		      if($iname!="")
	          {
		   
		      $this->upload->do_upload('logo');
		   
		      }
    
       	 
			 
			 if(isset($_POST['add_ins_company_red'])){
              return $msg= "<script>location.href='".base_url('admin/insurance_companies')."'</script>";
            } else {


            return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Company Information Added Successfully</strong>
                  </div>';
          } } else {
            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Add Company Information</strong>
                  </div>';
          } 
         } else {
          return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Insurance Company Information Already Exists</strong>
                  </div>';
        }

    }
  }

  function all_insurance_companies(){
    return $this->db->get_where('insurance_companies')->result();
  }

  function insurance_companies(){
    return $this->db->get_where('insurance_companies',array('status'=>1))->result();
  }

  function get_insurance_company(){
    return $this->db->get_where('insurance_companies',array('id'=>$this->uri->segment(3)))->row();
  }


  


function update_insurance_company() {

    if(isset($_POST['update_ins_company'])) 
    {
       extract($_POST);

      $iname = $_FILES['logo']['name'];
      
     
	 
	    if($oldlogo=="" and $iname=="")
	    {
	    $oldlogo="";	 
	    }
	    else if($oldlogo=="" and $iname!="")
	    {
		 
	     $oldlogo = "MCA".time().".".pathinfo($iname, PATHINFO_EXTENSION);
	    }
	    else 
	   {
	    $oldlogo=$oldlogo;	
	    }
	 
	 
	 
	 $config = array(
        'upload_path'   => "./uploads/company/",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite'     => TRUE,
        'file_name'     => $oldlogo
        );
        
        $this->load->library('upload', $config);

       

      $data = array( 'name'                       => $company,
                     'branch_name'                => $branch,
                     'branch_address'             => $branch_address,
                     'headoffice_address'         => $head_address,
                     'gstn_number'                => $gstin,
                     'logo'                       => $oldlogo,
                     'website'                    => $website,
                     'relationship_manager_name'  => $r_manager_name,
                     'relationship_manager_phone' => $r_manager_number,
                     'relationship_manager_email' => $r_manager_email,
                     'branch_manager_name'        => $b_manager_name,
                     'branch_manager_phone'       => $b_manager_number,
                     'branch_manager_email'       => $b_manager_email,
                     'regional_head_name'         => $regonal_head_name,
                     'regional_head_phone'        => $regional_head_number,
                     'regional_head_email'        => $regional_head_email,
                     'helpline_number'            => $help_line_number,
                     'service_forms_link'         => $service_forms_link,
                     'renewal_payment_link'       => $renewal_link,
                     'grievance_redressal_link'   => $grievance_redressal,
                     'branch_locations_link'      => $all_branch_links,
                     'hospitals_link'             => $nw_hospital_links,
                     'otherlink1'                 => $other_link1,
                     'otherlink2'                 => $other_link2

        );
     
        

      if($this->db->update('insurance_companies',$data,array('id'=>$this->uri->segment(3)))) 
          {
            if(@$_FILES['logo']['name']){
            $this->upload->do_upload('logo');
          }
            return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Company Information Updated Successfully</strong>
                  </div>';
          } else {
            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Update Company Information</strong>
                  </div>';
          }

    }
  }


  function add_policy_type() {

    if(isset($_POST['add_policy_type']) || isset($_POST['add_policy_type_red'])) 
    {
       extract($_POST);
       
    if(!$this->db->get_where('policy_types',array('category'=>$category,'name'=>$type))->num_rows())
       {

      $data = array( 'name'     => $type,
                     'category' => $category,                   
                     'status'   => 1

        );
     
        

      if($this->db->insert('policy_types',$data)) 
          {
           if(isset($_POST['add_policy_type_red'])){
              return $msg= "<script>location.href='".base_url('admin/insurance_policy_type')."'</script>";
            } else {
           
           
            return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Policy Type Added Successfully</strong>
                  </div>';
          } } else {
            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Add Policy Type</strong>
                  </div>';
          }
       } else {
      return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Policy Type Already Exists</strong>
                  </div>';
    }

    }
  }

  function policy_types(){
    return $this->db->get_where('policy_types')->result();
  }

  



     function update_policy_type() {

    if(isset($_POST['update_policy_type'])) 
    {
       extract($_POST);
       

      $data = array( 'name'     => $type,
                     'category' => $category

        );
     
        

      if($this->db->update('policy_types',$data,array('id'=>$this->uri->segment(3)))) 
          {
           
            return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Policy Type Updated Successfully</strong>
                  </div>';
          } else {
            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Update Policy Type</strong>
                  </div>';
          }

    }
  }

function get_policy_type(){
    return $this->db->get_where('policy_types',array('id'=>$this->uri->segment(3)))->row();
  }
    


  
function add_policy() {

    if(isset($_POST['add_policy']) || isset($_POST['add_policy_red'])) 
    {
       extract($_POST);
       
    if(!$this->db->get_where('insurance_policy',array('company'=>$company,'category'=>$category,'type'=>$type,'name'=>$name))->num_rows())
       {

      $data = array( 'name'     => $name,
                     'category' => $category,
                     'company'  => $company,
                     'type'     => $type,                 
                     'status'   => 1

        );
     
        

      if($this->db->insert('insurance_policy',$data)) 
          {
             if(isset($_POST['add_policy_red'])){
              return $msg= "<script>location.href='".base_url('admin/insurance_policies')."'</script>";
            } else {
           
            return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Policy Added Successfully</strong>
                  </div>';
          } } else {
            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Add Policy </strong>
                  </div>';
          }
       } else {
          return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Policy Details Already Exists</strong>
                  </div>';
        }

    }
  }


  function update_policy() {

    if(isset($_POST['update_policy'])) 
    {
       extract($_POST);
       

      $data = array( 'name'     => $name,
                     'category' => $category,
                     'company'  => $company,
                     'type'     => $type
        );
     
        

      if($this->db->update('insurance_policy',$data,array('id'=>$this->uri->segment(3)))) 
          {
           
            return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Policy Updated Successfully</strong>
                  </div>';
          } else {
            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Update Policy </strong>
                  </div>';
          }

    }
  }

  function all_policies(){
    return $this->db->get_where('insurance_policy')->result();
  }

  function get_policy(){
    return $this->db->get_where('insurance_policy',array('id'=>$this->uri->segment(3)))->row();
  }


  function add_sale_booking() {

    if(isset($_POST['sale_booking']) || isset($_POST['sale_booking_red'])) 
    {
       extract($_POST);
          
      
        $pcopy = $_FILES['policy_copy']['name'];

        $filename1 = "PC".time().".".pathinfo($pcopy, PATHINFO_EXTENSION); 

       $config = array(
         'upload_path'   => "./uploads/sales/",
         'allowed_types' => "gif|jpg|png|jpeg|pdf",
         'overwrite'     => TRUE,
         'file_name'     => $filename1
         );
        
         $this->load->library('upload', $config);
         $this->upload->do_upload('policy_copy');

         $pbenf = $_FILES['policy_benefits']['name'];

        $filename2 = "PB".time().".".pathinfo($pbenf, PATHINFO_EXTENSION); 

       $config1 = array(
         'upload_path'   => "./uploads/sales/",
         'allowed_types' => "gif|jpg|png|jpeg|pdf",
         'overwrite'     => TRUE,
         'file_name'     => $filename2
         );
        
         $this->load->library('upload', $config1);

       $this->upload->initialize($config1);
        $this->upload->do_upload('policy_benefits');

       $data = array('client'              => $client,
                     'company'             => $company,
                     'category'            => $category,
                     'type'                => $type,
                     'policy_name'         => $policy_name,
                     'policy_number'       => $policy_number,
                     'premium_without_tax' => $premium_without_tax,
                     'premium_with_tax'    => $premium_with_tax,
                     'tax_percentage'      => $tax,
                     'sum_insured'         => $sum_insured,
                     'start_date'          => $policy_start_date,
                     'end_date'            => 'end date',
                     'policy_term'         => $policy_term,
                     'payment_term'        => $premium_payment_term,
                     'payment_mode'        => $payment_mode,
                     'policy_copy'         => $filename1,
                     'policy_benefits'     => $filename2,
                     'remarks'             => $remarks,
                     'status'              => 0

        );



         $cd=$this->db->get_where('cd_account',array('corporate_id'=>$client,'insurance_id'=>$company))->row();
	 $amt=$cd->amount-$premium_with_tax;

     
        

      if($this->db->insert('sales_booking',$data)) 
          {
            

$message = "We thank you for given opportunity to serve your Policy: ".$this->fun->getnewfieldvalue('insurance_policy','name','id',$policy_name)." of your esteemed Organisation. More details @ 'Insurance Servicing Portal' login http://mallapuram.co.in/cis/hr";

$message1 = "There is an Policy transaction with amount ".$premium_with_tax." recorded under CD Account Tracking with ".$this->fun->getnewfieldvalue('insurance_companies','name','id',$company).".Avl balance:".$amt.". More details @ 'Insurance Servicing Portal' login http://mallapuram.co.in/cis/hr";

    $this->fun->sendSMS($this->fun->getnewfieldvalue('corporate_client','authorised_contact_person1_phone','id',$client),$message);
$this->fun->sendSMS($this->fun->getnewfieldvalue('corporate_client','authorised_contact_person1_phone','id',$client),$message1);


$toemail=$this->fun->getnewfieldvalue('corporate_client','authorised_contact_person1_email','id',$client);
$client_name=$this->fun->getnewfieldvalue('corporate_client','name','id',$client);
$person=$this->fun->getnewfieldvalue('corporate_client','authorised_contact_person1_name','id',$client);
$incmp=$this->fun->getnewfieldvalue('insurance_companies','name','id',$company);
$pname=$this->fun->getnewfieldvalue('insurance_policy','name','id',$policy_name);
$renDate=@date('d/m/Y', strtotime('+1 year', strtotime($policy_start_date)) );

$subject="Intimation - Purchase of Insurance Policy - ".$pname." - ".$policy_number." - ".$incmp." - ".$policy_start_date;

$emailmsg="We wish to inform that we have uploaded the Insurance Policy Copy of your company at your 'Insurance Servicing Portal'.<br><br>The Details are as follows:<br>1) Policy Name - ".$pname."<br>2) Policy Number - ".$policy_number."<br>3) Insurance Company Name - ".$incmp."<br>4) Effective Date - ".$policy_start_date."<br>5) Renewal Date - ".$renDate;

$message_email=  $this->load->view('email_templates/email_template1',array('name'=>$person,'message'=>$emailmsg),true);
$cc="dasharath@elefontdesign.com";
$this->fun->sendDevMail('operations@mallapuram.com',$toemail,$subject,$message_email,$cc);



$data1 = array('amount' => $amt);
               $this->db->update('cd_account',$data1,array('corporate_id'=>$client,'insurance_id'=>$company)); 


if(isset($_POST['sale_booking_red'])){
              return $msg= "<script>location.href='".base_url('admin/sales_booking')."'</script>";
            } else {
           
            return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Sale Booking Added Successfully</strong>
                  </div>';
          } } else {
            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Add Sale Booking</strong>
                  </div>';
          }

    }
  }


  function update_sale_booking() {

    if(isset($_POST['update_sale_booking'])) 
    {
       extract($_POST);
          
      
        

       $config = array(
         'upload_path'   => "./uploads/sales/",
         'allowed_types' => "gif|jpg|png|jpeg|pdf",
         'overwrite'     => TRUE,
         'file_name'     => $old_policy_copy
         );
        
         $this->load->library('upload', $config);
         if($_FILES['policy_copy']['name']){
         $this->upload->do_upload('policy_copy');
       }

         

       $config1 = array(
         'upload_path'   => "./uploads/sales/",
         'allowed_types' => "gif|jpg|png|jpeg|pdf",
         'overwrite'     => TRUE,
         'file_name'     => $old_policy_benefits
         );
        
         $this->load->library('upload', $config1);

       $this->upload->initialize($config1);
       if($_FILES['policy_benefits']['name']){
        $this->upload->do_upload('policy_benefits');
      }

       $data = array('client'              => $client,
                     'company'             => $company,
                     'category'            => $category,
                     'type'                => $type,
                     'policy_name'         => $policy_name,
                     'policy_number'       => $policy_number,
                     'premium_without_tax' => $premium_without_tax,
                     'premium_with_tax'    => $premium_with_tax,
                     'tax_percentage'      => $tax,
                     'sum_insured'         => $sum_insured,
                     'start_date'          => @date('m/d/Y',strtotime($policy_start_date)),
                     'end_date'            => 'end date',
                     'policy_term'         => $policy_term,
                     'payment_term'        => $premium_payment_term,
                     'payment_mode'        => $payment_mode,
                     'policy_copy'         => $old_policy_copy,
                     'policy_benefits'     => $old_policy_benefits,
                     'remarks'             => $remarks

        );
     
        

      if($this->db->update('sales_booking',$data,array('id'=>$this->uri->segment(3)))) 
          {
            
           
            return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Sale Booking Updated Successfully</strong>
                  </div>';
          } else {
            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Update Sale Booking</strong>
                  </div>';
          }

    }
  }

  function all_sales(){
    return $this->db->get_where('sales_booking')->result();
  }

  function get_sale(){
    return $this->db->get_where('sales_booking',array('id'=>$this->uri->segment(3)))->row();
  }















function add_corporate_client() {

    if(isset($_POST['add_corporate_client'])  or isset($_POST['save_add_corporate_client'])) 
    {
       extract($_POST);

      
      $filename = 'pro_'.rand().rand().'.jpg';

       $cpc_logo = "cpc_logo".time().rand().rand().'.jpg';;
	   $cpc_gstn_scan = "cpc_gstn_scan".rand().rand().'.jpg';;
	   $cpc_pan_scan = "cpc_pan_scan".rand().rand().'.jpg';;
	   $cpc_cheque_scan = "cpc_cheque_scan".time().rand().rand().'.jpg';
	  
	  
	 
	   

        $config = array(
        'upload_path'   => "./uploads/corporate_client/logo",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite'     => TRUE,
        'file_name'     => $cpc_logo
        );
        $this->load->library('upload', $config);
	    $this->upload->do_upload('logo');
		
	  
        
		
		
		$config1 = array(
        'upload_path'   => "./uploads/corporate_client/gstn",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite'     => TRUE,
        'file_name'     => $cpc_gstn_scan
        );
        
        $this->load->library('upload', $config1);
		$this->upload->initialize($config1);
        $this->upload->do_upload('gstn_scan');
		
		
		$config2 = array(
        'upload_path'   => "./uploads/corporate_client/pan",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite'     => TRUE,
        'file_name'     => $cpc_pan_scan
        );
        
        $this->load->library('upload', $config2);
		$this->upload->initialize($config2);
        $this->upload->do_upload('pan_scan');
		
		
		
		$config3 = array(
        'upload_path'   => "./uploads/corporate_client/cheque",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite'     => TRUE,
        'file_name'     => $cpc_cheque_scan
        );
        
        $this->load->library('upload', $config3);
		$this->upload->initialize($config3);
        $this->upload->do_upload('cheque_scan');
	  
		
	  
	  
	  
      $data = array( 'name'                                   => $name,
                     'address'                                => $address,
                     'pincode'                                => $pincode,
                     'contact_number'                         => $contact_number,
                     'gstn_number'                            => $gstn_number,
                     'gstn_scan'                              => $cpc_gstn_scan,
                     'logo'                                   => $cpc_logo,
                     'website'                                => $website,
                     'username'                               => $username,
                     'password'                               => $password,
                     'pan_number'                             => $pan_number,
                     'pan_scan'                               => $cpc_pan_scan,
                     'bank_account_name'                      => $bank_account_name,
                     'bank_account_number'                    => $bank_account_number, 
		     'bank_name'                              => $bank_name,
                     'bank_branch'                            => $bank_branch,
                     'ifsc_code'                              => $ifsc_code,
                     'cheque_scan'                            => $cpc_cheque_scan,
                     'authorised_contact_person1_name'        => $authorised_contact_person1_name,
                     'authorised_contact_person1_designation' => $authorised_contact_person1_designation,
                     'authorised_contact_person1_phone'       => $authorised_contact_person1_phone,
                     'authorised_contact_person1_email'       => $authorised_contact_person1_email,
                     'authorised_contact_person2_name'        => $authorised_contact_person2_name,
                     'authorised_contact_person2_designation' => $authorised_contact_person2_designation,
                     'authorised_contact_person2_phone'       => $authorised_contact_person2_phone,
		     'authorised_contact_person2_email'       => $authorised_contact_person2_email,
		     'superior_contact_person1_name'          => $superior_contact_person1_name,
		     'superior_contact_person1_designation'   => $superior_contact_person1_designation,
		     'superior_contact_person1_phone'         => $superior_contact_person1_phone,
		     'superior_contact_person1_email'         => $superior_contact_person1_email,
		     'superior_contact_person2_name'          => $superior_contact_person2_name,
		     'superior_contact_person2_designation'   => $superior_contact_person2_designation,
		     'superior_contact_person2_phone'         => $superior_contact_person2_phone,
		     'superior_contact_person2_email'         => $superior_contact_person2_email,
		     'support_contact_person1_name'           => $support_contact_person1_name,
		     'support_contact_person1_designation'    => $support_contact_person1_designation,
		     'support_contact_person1_phone'          => $support_contact_person1_phone,
		     'support_contact_person1_email'          => $support_contact_person1_email,
		     'support_contact_person2_name'           => $support_contact_person2_name,
		     'support_contact_person2_designation'    => $support_contact_person2_designation,
		     'support_contact_person2_phone'          => $support_contact_person2_phone,
		     'support_contact_person2_email'          => $support_contact_person2_email,
		     'status'                                 => 1

        );
     
        

      if($this->db->insert('corporate_client',$data)) 
          {



$message = "We welcome you to the 'Insurance Servicing Portal' of Mallapuram Insurance & Allied Services, its you 'One stop Portal' for all your organisational Insurance Policy services. Your User name is ".$authorised_contact_person1_email." and Password is:  ".$password.". Pls follow the link http://mallapuram.co.in/cis/hr ";

$this->fun->sendSMS($authorised_contact_person1_phone,$message);

$subject="Welcome to your Insurance Servicing Portal - ".$authorised_contact_person1_name;

$emailmsg="We welcome you to the One Stop Portal for all your Organisational Insurance Policy Servicing needs.<br><br>At Mallapuram Insurance and Allied Services, we always look for the opportunities to serve our clients with betterment of the systems and process in providing a worldclass insurance service experience. Providing 'Insurance Servicing Portal' to esteemed client like you is a one step further in our successful journey path.<br><br>You are given secured access to all your Insurance Policies in one single place with ease of going through all the details. Call to actions like Endorsements, Claims, CD account Tracking etc., can be initiated through the portal and can be tracked along with the recorded followups till the end result through our Ticketing System. Regular communication will be processed through SMS and emails.<br><br>Employee Benefit oriented group insurance policies are serviced better by providing a seperate access to each of your employees. Insurance Servicing Portal will directly communicate through experienced professionals in educating on the Policy Coverages, Correction requests, Claims Processing help and many more. In case of any Emergency situation the Employee will have all his required details at one single place at Insurance Servicing Portal and more over it not only reduces the pressure and tension for the Employee but also reduces pressure and tension for you and your organisation in helping your Employee. This will definitely help in enhancing employees satisfaction towards the Insurance Policies and inturn your long term relation with him.<br><br> For more details login <a href='http://mallapuram.co.in/cis/hr'>Here</a>";

$message1=  $this->load->view('email_templates/email_template1',array('name'=>$authorised_contact_person1_name,'message'=>$emailmsg),true);
$cc="dasharath@elefontdesign.com";
$this->fun->sendDevMail('info@mallapuram.com',$authorised_contact_person1_email,$subject,$message1,$cc);


             if(isset($_POST['add_corporate_client']))
			 {
			   redirect('admin/corporate_client', 'refresh');	 
			 }
			 else
			 {
				 
				 return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Corporate Client Added Successfully</strong>
                  </div>';
          
				 
			 }
			
              
		  
		       
		  
		  
		  } else {
            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Corporate Client</strong>
                  </div>';
          }

    }
  }

  
  
  
  
  function update_corporate_client()
    {
     if(isset($_POST['edit_corporate_client'])){

       extract($_POST);
           
	 
		 $config = array(
        'upload_path'   => "./uploads/corporate_client/logo",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite'     => TRUE,
        'file_name'     => $logoold
        );
        $this->load->library('upload', $config);
	    $this->upload->do_upload('logo');
		 
		 
		 
		 
		 $config1 = array(
        'upload_path'   => "./uploads/corporate_client/gstn",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite'     => TRUE,
        'file_name'     => $gstn_scanold
        );
        
        $this->load->library('upload', $config1);
		$this->upload->initialize($config1);
        $this->upload->do_upload('gstn_scan');
		
		
		$config2 = array(
        'upload_path'   => "./uploads/corporate_client/pan",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite'     => TRUE,
        'file_name'     => $pan_scanold
        );
        
        $this->load->library('upload', $config2);
		$this->upload->initialize($config2);
        $this->upload->do_upload('pan_scan');
		
		
		
		$config3 = array(
        'upload_path'   => "./uploads/corporate_client/cheque",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite'     => TRUE,
        'file_name'     => $cheque_scanold
        );
        
        $this->load->library('upload', $config3);
		$this->upload->initialize($config3);
        $this->upload->do_upload('cheque_scan');
		 
	


      $data = array( 'name'                                   => $name,
                     'address'                                => $address,
                     'pincode'                                => $pincode,
                     'contact_number'                         => $contact_number,
                     'gstn_number'                            => $gstn_number,
                     //'gstn_scan'                            => $cpc_gstn_scan,
                    // 'logo'                                 => $cpc_logo,
                     'website'                                => $website,
                     'username'                               => $username,
                     'password'                               => $password,
                     'pan_number'                             => $pan_number,
                     //'pan_scan'                             => $cpc_pan_scan,
                     'bank_account_name'                      => $bank_account_name,
                     'bank_account_number'                    => $bank_account_number,
		     'bank_name'                              => $bank_name,
                     'bank_branch'                            => $bank_branch,
                     'ifsc_code'                              => $ifsc_code,
                     //'cheque_scan'                          => $cpc_cheque_scan,
                     'authorised_contact_person1_name'        => $authorised_contact_person1_name,
                     'authorised_contact_person1_designation' => $authorised_contact_person1_designation,
                     'authorised_contact_person1_phone'       => $authorised_contact_person1_phone,
                     'authorised_contact_person1_email'       => $authorised_contact_person1_email,
                     'authorised_contact_person2_name'        => $authorised_contact_person2_name,
                     'authorised_contact_person2_designation' => $authorised_contact_person2_designation,
                     'authorised_contact_person2_phone'       => $authorised_contact_person2_phone,
		     'authorised_contact_person2_email'       => $authorised_contact_person2_email,
		     'superior_contact_person1_name'          => $superior_contact_person1_name,
		     'superior_contact_person1_designation'   => $superior_contact_person1_designation,
		     'superior_contact_person1_phone'         => $superior_contact_person1_phone,
		     'superior_contact_person1_email'         => $superior_contact_person1_email,
		     'superior_contact_person2_name'          => $superior_contact_person2_name,
		     'superior_contact_person2_designation'   => $superior_contact_person2_designation,
		     'superior_contact_person2_phone'         => $superior_contact_person2_phone,
		     'superior_contact_person2_email'         => $superior_contact_person2_email,
		     'support_contact_person1_name'           => $support_contact_person1_name,
		     'support_contact_person1_designation'    => $support_contact_person1_designation,
		     'support_contact_person1_phone'          => $support_contact_person1_phone,
		     'support_contact_person1_email'          => $support_contact_person1_email,
		     'support_contact_person2_name'           => $support_contact_person2_name,
		     'support_contact_person2_designation'    => $support_contact_person2_designation,
		     'support_contact_person2_phone'          => $support_contact_person2_phone,
		     'support_contact_person2_email'          => $support_contact_person2_email,
		     'status'                                 => 0

        );

      if($this->db->update('corporate_client',$data,array('id'=>$this->uri->segment(3)))){
         
       return $msg = '<div class="alert alert-success col-md-7">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    Corporate Client  Updated Successfully.
                  </div>';
      } else{
      return  $msg ='<div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    Something Went Wrong  
                  </div>';
      }
     }
    }
  
  
  
  
  
  
  
  
  

  
  
  function all_corporate_clients(){
    return $this->db->get_where('corporate_client')->result();
  }

  function corporate_clients(){
    return $this->db->get_where('corporate_client',array('status'=>1))->result();
  }


function all_corporate_client_branches(){
    return $this->db->get_where('corporate_client_branches')->result();
  }


function all_corporate_employees_family(){
    return $this->db->get_where('corporate_employee_family')->result();
  }





function get_corporate_client(){

      return $this->db->get_where('corporate_client',array('id'=>$this->uri->segment(3)))->row();
    }


function get_corporate_branch(){

      return $this->db->get_where('corporate_client_branches',array('id'=>$this->uri->segment(3)))->row();
    }






function add_branches() {

    if(isset($_POST['add_branches']) or isset($_POST['save_add_branches'])) 
    {
       extract($_POST);

      $data = array( 'name'    => $name1,
                     'company' => $company,
                     
                     'status'  => 0

        );
     
        

      if($this->db->insert('corporate_client_branches',$data)) 
          {
            if(isset($_POST['add_branches']))
			 {
			   redirect('corporate_branches', 'refresh');	 
			 }
			 else
			 {
			
            return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Corporate Client Branch Added Successfully</strong>
                  </div>';
          
			 }
		  
		  
		  } else {
            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Corporate Client Branch</strong>
                  </div>';
          }

    }
  }







function update_branches() {

    if(isset($_POST['edit_branches'])) 
    {
      
	  extract($_POST);
     $data = array( 'name'     => $name1,
                     'company' => $company
      );
     
        
if($this->db->update('corporate_client_branches',$data,array('id'=>$this->uri->segment(2)))){
      
			
            return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Corporate Client Branch Updated Successfully</strong>
                  </div>';
          } else {
            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Update</strong>
                  </div>';
          }

    }
  }














function add_corporate_employee() {

    if(isset($_POST['add_corporate_employee'])  or isset($_POST['save_add_corporate_employee']) ) 
    {
       extract($_POST);

      
    

       $cpe_photo = "cpe_photo".time().rand().rand().'.jpg';
	   $cpe_aadhaar_scan = "cpe_aadhaar_scan".time().rand().rand().'.jpg';
	   $cpe_pan_scan = "cpe_pan_scan".time().rand().rand().'.jpg';
	   $cpe_voterid_scan = "cpe_voterid_scan".time().rand().rand().'.jpg';
	   $cpe_driving_license_scan = "cpe_driving_license_scan".time().rand().rand().'.jpg';
	   $cpe_cheque_scan = "cpe_cheque_scan".time().rand().rand().'.jpg';
	   $cpe_passpot_scan = "cpe_passpot_scan".time().rand().rand().'.jpg';
	   
	  
	 
	   

        $config = array(
        'upload_path'   => "./uploads/corporate_employee/photo",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite'     => TRUE,
        'file_name'     => $cpe_photo
        );
        $this->load->library('upload', $config);
	    $this->upload->do_upload('photo');
		
	  
        
		
		
		$config1 = array(
        'upload_path'   => "./uploads/corporate_employee/aadhaar_scan",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite'     => TRUE,
        'file_name'     => $cpe_aadhaar_scan
        );
        
        $this->load->library('upload', $config1);
		$this->upload->initialize($config1);
        $this->upload->do_upload('aadhaar_scan');
		
		
		$config2 = array(
        'upload_path'   => "./uploads/corporate_employee/pan_scan",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite'     => TRUE,
        'file_name'     => $cpe_pan_scan
        );
        
        $this->load->library('upload', $config2);
		$this->upload->initialize($config2);
        $this->upload->do_upload('pan_scan');
		
		
		
		$config3 = array(
        'upload_path'   => "./uploads/corporate_employee/voterid_scan",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite'     => TRUE,
        'file_name'     => $cpe_voterid_scan
        );
        
        $this->load->library('upload', $config3);
		$this->upload->initialize($config3);
        $this->upload->do_upload('voterid_scan');
		
		
		
		$config4 = array(
        'upload_path'   => "./uploads/corporate_employee/driving_license_scan",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite'     => TRUE,
        'file_name'     => $cpe_driving_license_scan
        );
        
        $this->load->library('upload', $config4);
		$this->upload->initialize($config4);
        $this->upload->do_upload('driving_license_scan');
		
		
		$config5 = array(
        'upload_path'   => "./uploads/corporate_employee/cheque_scan",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite'     => TRUE,
        'file_name'     => $cpe_cheque_scan
        );
        
        $this->load->library('upload', $config5);
		$this->upload->initialize($config5);
        $this->upload->do_upload('cheque_scan');
		
		
		$config6 = array(
        'upload_path'   => "./uploads/corporate_employee/passpot_scan",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite'     => TRUE,
        'file_name'     => $cpe_passpot_scan
        );
        
        $this->load->library('upload', $config6);
		$this->upload->initialize($config6);
        $this->upload->do_upload('passpot_scan');
	  
		
	  
	  
	  
      $data = array( 'corporate_id'         => $corporate_id,
                     'insurance_company_id' => $insurance_company_id,
                     'employee_id'          => $employee_id,
                     'name'                 => $name,
                     'designation'          => $designation,
                     'date_of_birth'        => $date_of_birth,
                     'age'                  => $age,
                     'age_band'             => $age_band,
                     'date_of_joining'      => $date_of_joining,
                     'gender'               => $gender,
                     'bank_account_name'    => $bank_account_name,
                     'bank_account_number'  => $bank_account_number,
                     'bank_name'            => $bank_name,
                     'bank_branch'          => $bank_branch,
		     'ifsc_code'            => $ifsc_code,
                     'branch'               => $branch,
                     'phone'                => $phone,
                     'email'                => $email,
                     'sum_insured'          => $sum_insured,
                     'family_floater'       => $family_floater,
                     'nominee_name'         => $nominee_name,
                     'nominee_relationship' => $nominee_relationship,
                     'nominee_dob'          => $nominee_dob,
                     'policy_id'            => $policy_id,
		     'photo'                => $cpe_photo,
		     'aadhaar_scan'         => $cpe_aadhaar_scan,
		     'pan_scan'             => $cpe_pan_scan,
		     'voterid_scan '        => $cpe_voterid_scan,
		     'driving_license_scan' => $cpe_driving_license_scan,
		     'cheque_scan'          => $cpe_cheque_scan,
		     'passpot_scan'         => $cpe_passpot_scan,
		     'status'               => 1

        );
     
        

      if($this->db->insert('corporate_employee',$data)) 
          {
             if(isset($_POST['add_corporate_employee']))
			 {
			   redirect('corporate_employees', 'refresh');	 
			 }
			 else
			 {
			
            return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Corporate Employee Added Successfully</strong>
                  </div>';
				  
			 }
          } else {
            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Corporate Employee</strong>
                  </div>';
          }

    }
  }



function update_corporate_employee() {

    if(isset($_POST['edit_corporate_employee'])) 
    {
       extract($_POST);

       $config = array(
        'upload_path' => "./uploads/corporate_employee/photo",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite' => TRUE,
        'file_name' => $photoold
        );
        $this->load->library('upload', $config);
	    $this->upload->do_upload('photo');
		
	  
        
		
		$config1 = array(
        'upload_path'   => "./uploads/corporate_employee/aadhaar_scan",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite'     => TRUE,
        'file_name'     => $aadhaar_scanold
        );
        
        $this->load->library('upload', $config1);
		$this->upload->initialize($config1);
        $this->upload->do_upload('aadhaar_scan');
		
		
		$config2 = array(
        'upload_path'   => "./uploads/corporate_employee/pan_scan",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite'     => TRUE,
        'file_name'     => $pan_scanold
        );
        
        $this->load->library('upload', $config2);
		$this->upload->initialize($config2);
        $this->upload->do_upload('pan_scan');
		
		
		
		$config3 = array(
        'upload_path'   => "./uploads/corporate_employee/voterid_scan",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite'     => TRUE,
        'file_name'     => $voterid_scanold
        );
        
        $this->load->library('upload', $config3);
		$this->upload->initialize($config3);
        $this->upload->do_upload('voterid_scan');
		
		
		
		$config4 = array(
        'upload_path'   => "./uploads/corporate_employee/driving_license_scan",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite'     => TRUE,
        'file_name'     => $driving_license_scanold
        );
        
        $this->load->library('upload', $config4);
		$this->upload->initialize($config4);
        $this->upload->do_upload('driving_license_scan');
		
		
		$config5 = array(
        'upload_path'   => "./uploads/corporate_employee/cheque_scan",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite'     => TRUE,
        'file_name'     => $cheque_scanold
        );
        
        $this->load->library('upload', $config5);
		$this->upload->initialize($config5);
        $this->upload->do_upload('cheque_scan');
		
		
		$config6 = array(
        'upload_path'   => "./uploads/corporate_employee/passpot_scan",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite'     => TRUE,
        'file_name'     => $passpot_scanold
        );
        
        $this->load->library('upload', $config6);
		$this->upload->initialize($config6);
        $this->upload->do_upload('passpot_scan');
	  
		
	  
	  
	  
if($_FILES['photo']['name']!="")
{
$data1 = array( 'photo'=> $_FILES['photo']['name']);
$this->db->update('corporate_employee',$data1,array('id'=>$this->uri->segment(3)));	
}
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 $data = array( 'corporate_id'         => $corporate_id,
                     'insurance_company_id' => $insurance_company_id,
                     'employee_id'          => $employee_id,
                     'name'                 => $name,
                     'designation'          => $designation,
                     'date_of_birth'        => $date_of_birth,
                     'age'                  => $age,
                     'age_band'             => $age_band,
                     'date_of_joining'      => $date_of_joining,
                     'gender'               => $gender,
                     'bank_account_name'    => $bank_account_name,
                     'bank_account_number'  => $bank_account_number,
                     'bank_name'            => $bank_name,
                     'bank_branch'          => $bank_branch,
		     'ifsc_code'            => $ifsc_code,
                     
                     'phone'                => $phone,
                     'email'                => $email,
                     'sum_insured'          => $sum_insured,
                     'family_floater'       => $family_floater,
                     'nominee_name'         => $nominee_name,
                     'nominee_relationship' => $nominee_relationship,
                     'nominee_dob'          => $nominee_dob,
		     //'policy_id'            => $policy_id,		 
		   //'photo'                => $cpe_photo,
		   //'aadhaar_scan'         => $cpe_aadhaar_scan,
		   //'pan_scan'             => $cpe_pan_scan,
		   //'voterid_scan '        => $cpe_voterid_scan,
		   //'driving_license_scan' => $cpe_driving_license_scan,
		  // 'cheque_scan'          => $cpe_cheque_scan,
		  // 'passpot_scan '        => $cpe_passpot_scan,
		     'status'               => 1

        );
     
        
if($this->db->update('corporate_employee',$data,array('id'=>$this->uri->segment(3)))){
      
			
            return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Corporate Employee Updated Successfully</strong>
                  </div>';
          } else {
            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Corporate Employee</strong>
                  </div>';
          }

    }
  }





function all_corporate_employees(){
	
	
	if(isset($_POST['corporate_id']) and $_POST['corporate_id']!="all")
	{
	 extract($_POST);
	 $this->session->set_userdata('corporate_company',$corporate_id);
	 $this->session->userdata('corporate_company');
	 return $this->db->group_by('employee_id')->order_by('id','asc')->get_where('corporate_employee',array('status'=>'1','relation'=>'self','corporate_id'=>$this->session->userdata('corporate_company')))->result();
	 }
	 else
	 {
	  
	  if(isset($_POST['corporate_id'])=="all")
	  {
	  extract($_POST);	
	  $this->session->set_userdata('corporate_company',$corporate_id);
	  $this->session->userdata('corporate_company');
	  }
	 
     return $this->db->group_by('employee_id')->order_by('id','asc')->get_where('corporate_employee',array('status'=>'1','relation'=>'self'))->result();


	 }
  
  
  }
  
  
function all_corporate_employee_deletion(){
    return $this->db->get_where('corporate_employee',array('relation'=>'self','status'=>'1'))->result();
  }  
  
  
 function all_corporate_employees_deleted(){
    return $this->db->order_by('id','asc')->get_where('corporate_employee',array('status'=>'0'))->result();
  } 
  

function get_corporate_employee(){

      return $this->db->get_where('corporate_employee',array('id'=>$this->uri->segment(3)))->row();
    }


function get_corporate_employee_family(){

      return $this->db->get_where('corporate_employee_family',array('id'=>$this->uri->segment(3)))->row();
    }



function add_corporate_employee_family() {

    if(isset($_POST['add_corporate_employee_family'])  or  isset($_POST['save_add_corporate_employee_family'])) 
    {
       extract($_POST);

      
    

       $cpe_photo = "cpe_photo".time().rand().rand().'.jpg';
	   $cpe_aadhaar_scan = "cpe_aadhaar_scan".time().rand().rand().'.jpg';
	   $cpe_pan_scan = "cpe_pan_scan".time().rand().rand().'.jpg';
	   $cpe_voterid_scan = "cpe_voterid_scan".time().rand().rand().'.jpg';
	   $cpe_driving_license_scan = "cpe_driving_license_scan".time().rand().rand().'.jpg';
	   $cpe_cheque_scan = "cpe_cheque_scan".time().rand().rand().'.jpg';
	   $cpe_passpot_scan = "cpe_passpot_scan".time().rand().rand().'.jpg';
	   
	  
	 
	   

        $config = array(
        'upload_path'   => "./uploads/corporate_employee_family/photo",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite'     => TRUE,
        'file_name'     => $cpe_photo
        );
        $this->load->library('upload', $config);
	    $this->upload->do_upload('photo');
		
	  
        
		
		
		$config1 = array(
        'upload_path'   => "./uploads/corporate_employee_family/aadhaar_scan",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite'     => TRUE,
        'file_name'     => $cpe_aadhaar_scan
        );
        
        $this->load->library('upload', $config1);
		$this->upload->initialize($config1);
        $this->upload->do_upload('aadhaar_scan');
		
		
		$config2 = array(
        'upload_path'   => "./uploads/corporate_employee_family/pan_scan",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite'     => TRUE,
        'file_name'     => $cpe_pan_scan
        );
        
        $this->load->library('upload', $config2);
		$this->upload->initialize($config2);
        $this->upload->do_upload('pan_scan');
		
		
		
		$config3 = array(
        'upload_path'   => "./uploads/corporate_employee_family/voterid_scan",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite'     => TRUE,
        'file_name'     => $cpe_voterid_scan
        );
        
        $this->load->library('upload', $config3);
		$this->upload->initialize($config3);
        $this->upload->do_upload('voterid_scan');
		
		
		
		$config4 = array(
        'upload_path'   => "./uploads/corporate_employee_family/driving_license_scan",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite'     => TRUE,
        'file_name'     => $cpe_driving_license_scan
        );
        
        $this->load->library('upload', $config4);
		$this->upload->initialize($config4);
        $this->upload->do_upload('driving_license_scan');
		
		
		
		
		
		$config6 = array(
        'upload_path'   => "./uploads/corporate_employee_family/passpot_scan",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite'     => TRUE,
        'file_name'     => $cpe_passpot_scan
        );
        
        $this->load->library('upload', $config6);
		$this->upload->initialize($config6);
        $this->upload->do_upload('passpot_scan');
	  
		
	  
	  
	  
	  $data = array( 'corporate_id' => $corporate_id,
                     //'policy_id' => $policy_id,
                     'employee_id'=> $employee_id,
                     'name'=> $name,
                     //'designation'=> $designation,
                     'date_of_birth'=> $date_of_birth,
                     'age'=>$age,
                     'age_band'=>$age_band,
                     //'date_of_joining'=>$date_of_joining,
                     'gender'=>$gender,
                     //'bank_account_name'=>$bank_account_name,
                     //'bank_account_number'=>$bank_account_number,
                     //'bank_name'=>$bank_name,
                    // 'bank_branch'=>$bank_branch,
		    //'ifsc_code'=>$ifsc_code,
                    // 'branch'=>$branch,
                    // 'phone'=>$phone,
                    // 'email'=>$email,
                     //'sum_insured'=>$sum_insured,
                     //'family_floater'=>$family_floater,
                    // 'nominee_name'=>$nominee_name,
                     //'nominee_relationship'=>$nominee_relationship,
                     //'nominee_dob'=>$nominee_dob,
		       'relation'=>$relation,
					  
					 
					 'photo'=>$cpe_photo,
					 'aadhaar_scan'=>$cpe_aadhaar_scan,
					 'pan_scan'=>$cpe_pan_scan,
					 'voterid_scan '=>$cpe_voterid_scan,
					 'driving_license_scan'=>$cpe_driving_license_scan,
					 'cheque_scan'=>$cpe_cheque_scan,
					 'passpot_scan '=>$cpe_passpot_scan,
					 
                     
					 
                     'status'=> 0

        );
     
        

      if($this->db->insert('corporate_employee_family',$data)) 
          {
            
				
			 if(isset($_POST['add_corporate_employee_family']))
			 {
			   redirect('employee_family_members', 'refresh');	 
			 }
			 else
			 {
			
			 return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Corporate Employee Family Added Successfully</strong>
                  </div>';
          
		  
			 }
		  
		  
		  
		  } else {
            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Add Corporate Employee Family</strong>
                  </div>';
          }

    }
  }







function update_corporate_employee_family() {

    if(isset($_POST['edit_corporate_employee_family'])) 
    {
       extract($_POST);

       $config = array(
        'upload_path' => "./uploads/corporate_employee_family/photo",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite' => TRUE,
        'file_name' => $photoold
        );
        $this->load->library('upload', $config);
	    $this->upload->do_upload('photo');
		
	  
        
		
		
		$config1 = array(
        'upload_path' => "./uploads/corporate_employee_family/aadhaar_scan",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite' => TRUE,
        'file_name' => $aadhaar_scanold
        );
        
        $this->load->library('upload', $config1);
		$this->upload->initialize($config1);
        $this->upload->do_upload('aadhaar_scan');
		
		
		$config2 = array(
        'upload_path' => "./uploads/corporate_employee_family/pan_scan",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite' => TRUE,
        'file_name' => $pan_scanold
        );
        
        $this->load->library('upload', $config2);
		$this->upload->initialize($config2);
        $this->upload->do_upload('pan_scan');
		
		
		
		$config3 = array(
        'upload_path' => "./uploads/corporate_employee_family/voterid_scan",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite' => TRUE,
        'file_name' => $voterid_scanold
        );
        
        $this->load->library('upload', $config3);
		$this->upload->initialize($config3);
        $this->upload->do_upload('voterid_scan');
		
		
		
		$config4 = array(
        'upload_path' => "./uploads/corporate_employee_family/driving_license_scan",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite' => TRUE,
        'file_name' => $driving_license_scanold
        );
        
        $this->load->library('upload', $config4);
		$this->upload->initialize($config4);
        $this->upload->do_upload('driving_license_scan');
		
		
		
		
		
		$config6 = array(
        'upload_path' => "./uploads/corporate_employee_family/passpot_scan",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite' => TRUE,
        'file_name' => $passpot_scanold
        );
        
        $this->load->library('upload', $config6);
		$this->upload->initialize($config6);
        $this->upload->do_upload('passpot_scan');
	  
		
	  
	  
	  
	  $data = array( 'corporate_id' => $corporate_id,
                    // 'policy_id' => $policy_id,
                     'employee_id'=> $employee_id,
                     'name'=> $name,
                     //'designation'=> $designation,
                     'date_of_birth'=> $date_of_birth,
                     'age'=>$age,
                     'age_band'=>$age_band,
                     //'date_of_joining'=>$date_of_joining,
                     'gender'=>$gender,
                     //'bank_account_name'=>$bank_account_name,
                     //'bank_account_number'=>$bank_account_number,
                     //'bank_name'=>$bank_name,
                    // 'bank_branch'=>$bank_branch,
					 
					 //'ifsc_code'=>$ifsc_code,
                    // 'branch'=>$branch,
                    // 'phone'=>$phone,
                    // 'email'=>$email,
                     //'sum_insured'=>$sum_insured,
                     //'family_floater'=>$family_floater,
                    // 'nominee_name'=>$nominee_name,
                     //'nominee_relationship'=>$nominee_relationship,
                     
                     //'nominee_dob'=>$nominee_dob,
					  'relation'=>$relation,
					  
					 
					// 'photo'=>$cpe_photo,
					 //'aadhaar_scan'=>$cpe_aadhaar_scan,
					//'pan_scan'=>$cpe_pan_scan,
					// 'voterid_scan '=>$cpe_voterid_scan,
					 //'driving_license_scan'=>$cpe_driving_license_scan,
					// 'cheque_scan'=>$cpe_cheque_scan,
					// 'passpot_scan '=>$cpe_passpot_scan,
					 
                     
					 
                     'status'=> 0
        );
     
        
if($this->db->update('corporate_employee_family',$data,array('id'=>$this->uri->segment(2)))){
      
			
            return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Corporate Employee Family Updated Successfully</strong>
                  </div>';
          } else {
            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Update Corporate Employee Family</strong>
                  </div>';
          }

    }
  }









function add_promotions() {

    if(isset($_POST['add_promotions'])) 
    {
       extract($_POST);
       $image="";	     
	       
if($_FILES['image']['name']!="")
{	   
$image = 'promotions_'.time().rand().".".pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
}
    
	    $config1 = array(
        'upload_path' => APPPATH."../uploads/promotions",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite' => TRUE,
        'file_name' => $image
        );
        
        $this->load->library('upload', $config1);
		$this->upload->initialize($config1);
        $this->upload->do_upload('image');
	  
	  $data = array( 'name'        =>$name,
			 'url'         => $url,
       			 'image'       =>$image,
                         'description' => $desc, 
			 'status'      => 0

                        );
     
  
      if($this->db->insert('promotions',$data)) 
          {
       	  if(isset($_POST['add_promotions']))
			 {
			   redirect('admin/promotions', 'refresh');
			   
			   return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong> Promotions Added Successfully</strong>
                  </div>';
			 }
			 else
			 {
			
			 return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong> Promotions  Added  Successfully</strong>
                  </div>';
     		 }
		  
		  
		  
		  } else {
            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Promotions</strong>
                  </div>';
          }

    }
  }





function all_promotions(){
	return $this->db->get_where('promotions')->result();
  }



function all_interested_promotions(){
	return $this->db->get_where('ticket_picking_history',array('promoting_policy'=>'1'))->result();
  }



function add_employees_addition(){

    if(isset($_POST['add_employees_addition'])) 
    {

    extract($_POST);

       
	  $fname = rand().$_FILES['sel_file']['name'];

     $chk_ext = explode(".",$fname);
	 
	 
	 
	 if(strtolower($chk_ext[1]) == "csv")
     {
     $date=date("Y-m-d");
     $filename = $_FILES['sel_file']['tmp_name'];
     $handle = fopen($filename, "r");
	  
     while (($data = fgetcsv($handle)) !== FALSE)
     {
     if($data[0]!="NAME"  && $data[0]!="")
     {
     $name=$data[0];
	   $relation=$data[1];
	   $date_of_birth=$data[2];
	   $age=$data[3];
     $gender=$data[4];
	   $id_card_no=$data[5];
	   $employee_id=$data[6];
	   $designation=$data[7];
     $email=$data[8];
     $phone=$data[9];
     $age_band=$data[10];
     $doj=$data[11];
     $floater=$data[12];
	
	 $data= array( 'corporate_id'    => $corporate_id,
                 'policy_id'       => $policy_id,
				         'name'            => $name,
                 'relation'        => $relation,
                 'date_of_birth'   => $date_of_birth,
                 'age'             => $age,
                 'gender'          => $gender,
				         'id_card_no'      => $id_card_no,
                 'employee_id'     => $employee_id,
				         'designation'     => $designation,
                 'email'           => $email,
                 'phone'           => $phone,
                 'age_band'        => $age_band,
                 'date_of_joining' => $doj,
                 'family_floater'  => $floater,
                 'status'          => 1

                     );
   $echk = $this->db->get_where('corporate_employee', array('policy_id' => $policy_id,'name' => $name,'relation' => $relation,'date_of_birth' => $date_of_birth))->num_rows();

      if($echk == 0)
      {
   
    $insert=$this->db->insert('corporate_employee',$data);


$message = "We welcome you to the 'Insurance Servicing Portal' of Mallapuram Insurance & Allied Services, its you 'One stop Portal' for all your organisational Insurance Policy services. Your User name is ".$email." and Password is ".$phone.". Pls follow the link http://mallapuram.co.in/cis/employee";

    $this->fun->sendSMS($phone,$message);



$toemail=$email;
$client=$this->fun->getnewfieldvalue('corporate_client','name','id',$corporate_id);


$subject="Welcome to your Insurance Servicing Portal - ".$client." - ".$name;

$emailmsg="We welcome you to the One Stop Portal for all your Organisational Insurance Policy Servicing needs.<br>At Mallapuram Insurance and Allied Services, we always look for the opportunities to serve our clients with betterment of the systems and process in providing a worldclass insurance service experience. Providing 'Insurance Servicing Portal' to esteemed client like you is a one step further in our successful journey path.<br>You are given secured access to all your Insurance Policies in one single place with ease of going through all the details. Details of policy Benefits like Amount of Coverage, Conditions of Coverage, Exclusions etc., can be obtained through the portal.<br> A step further towards educating the available Employee Benefit insurance policies Insurance Servicing Portal will directly communicate with you through experienced professionals in educating on the Policy Coverages, Correction requests, Claims Processing help and many more. In case of any Emergency situation you and your family members will have all the required details at one single place at Insurance Servicing Portal which reduces lots of pressure and tension.<br>90% of our esteemed clients are providing minimum of 6 referrals in an year, we request you to help us in serving more number of esteemed clients like you through your 'Referrals Section'.<br>'Your FeedBack' is of Most Valuable Resource for our betterment and is of High Importance for us, Please help through the feedback section provided in the 'Insurance Servicing Portal'.<br>Unique Facility, We have our services on Missed call @ 7569645645. we shall call back and service your requirement. You may also consider using the 'Request to Call' button under your login screen at your Insurance Servicing Portal.<br>For your login Link, Please CLICK '<a href='http://mallapuram.co.in/cis/employee'>Insurance Servicing Portal</a>' ";

$message1=  $this->load->view('email_templates/email_template1',array('name'=>$name,'message'=>$emailmsg),true);
$cc="dasharath@elefontdesign.com";
$this->fun->sendDevMail('info@mallapuram.com',$toemail,$subject,$message1,$cc);

         
} else { $insert =1;}
}
}
	  
	 } 
	  
	  
	  
	  
	  
	  if($insert) 
        {
           
           if(isset($_POST['add_employees_addition']))
		      {
				  
				$temp = $_FILES['sel_file']['tmp_name'];
	             move_uploaded_file($temp,"uploads/employees_addition/$fname");   
				  
              return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Employees Added Successfully</strong>
                  </div>';
              }
			  else 
			  {
				  
				 $temp = $_FILES['sel_file']['tmp_name'];
	             move_uploaded_file($temp,"uploads/employees_addition/$fname");
				  
              return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Employees Added Successfully</strong>
                  </div>';
               } 
		 } 
		 else 
		 {
          return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Add Employees</strong>
                  </div>';
        }

    
	
  
  }
 }
 
  


function employees_deletion(){
  
  
  if(isset($_POST['employees_deletion'])){

      if(!empty($_POST['check_list'])){

         foreach($_POST['check_list'] as $selected)
		   {
		 
		   $data = array('status'=>0);
	       $delete= $this->db->update('corporate_employee',$data,array('employee_id'=>$selected));
		   
	       }
        
		     if($delete)
			 {
				 return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Employees information deleted Successfully</strong>
                  </div>';
			  }
		
		
		
		}      

      
	  
	  
	  
}
}
	
	
	
	
	
	


  
  
  
 function add_claim_dump() {

    if(isset($_POST['add_claim_dump'])) 
    {
       extract($_POST);

      
       $iname = $_FILES['pdf']['name'];

       $filename = $corporate_id.'_'.time().".".pathinfo($iname, PATHINFO_EXTENSION); ;

      $config = array(
        'upload_path' => "./uploads/claim_dump/",
        'allowed_types' => "gif|jpg|png|jpeg|pdf",
        'overwrite' => TRUE,
        'file_name' => $filename
        );
        
        $this->load->library('upload', $config);

       

      $data = array( 'company' => $corporate_id,
					'insurance_company_id' => $insurance_company_id,
                     'pdf' => $filename,
                     'date'=> $date,
                     
                     'status'=> 1

        );
     
        

        if($this->db->insert('claim_dump',$data)) 
            {


$message = "Your Claim dump as on ".$date." received from ".$this->fun->getnewfieldvalue('insurance_companies','name','id',$insurance_company_id)." and has been Uploaded into your 'Insurance Servicing Portal'. More details login http://mallapuram.co.in/cis/hr";

    $this->fun->sendSMS($this->fun->getnewfieldvalue('corporate_client','authorised_contact_person1_phone','id',$corporate_id),$message);


$toemail=$this->fun->getnewfieldvalue('corporate_client','authorised_contact_person1_email','id',$corporate_id);
$client=$this->fun->getnewfieldvalue('corporate_client','name','id',$corporate_id);
$person=$this->fun->getnewfieldvalue('corporate_client','authorised_contact_person1_name','id',$corporate_id);

$subject="Intimation - Claims Dump Copy Upload - ".$client." - ".$this->fun->getnewfieldvalue('insurance_companies','name','id',$insurance_company_id)." - ".$date;

$emailmsg="We wish to inform that we have uploaded the Claims Dump Copy of your company as on ".$date." received from the ".$this->fun->getnewfieldvalue('insurance_companies','name','id',$insurance_company_id).".<br><br>For more details, Pls login at your '<a href='http://mallapuram.co.in/cis/hr'>Insurance Service Portal</a>'";

$message1=  $this->load->view('email_templates/email_template1',array('name'=>$person,'message'=>$emailmsg),true);
$cc="dasharath@elefontdesign.com";
$this->fun->sendDevMail('operations@mallapuram.com',$toemail,$subject,$message1,$cc);


            $this->upload->do_upload('pdf');
            return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Claim Dump Added Successfully</strong>
                  </div>';
            }
		   else
		    {
              return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Add Claim Dump</strong>
                     </div>';
            }

    
	
	}
  }
  
  
  
  
  
  
  
 function all_claim_dump(){
    return $this->db->get_where('claim_dump',array('status'=>1))->result();
  }
 
  
  
  
  
  
  
  
  function add_account_statements() {

    if(isset($_POST['add_account_statement'])) 
    {
       extract($_POST);

      
       $iname = $_FILES['pdf']['name'];

       $filename = $corporate_id.'_'.time().".".pathinfo($iname, PATHINFO_EXTENSION); ;

      $config = array(
        'upload_path' => "./uploads/account_statement/",
        'allowed_types' => "gif|jpg|png|jpeg|pdf",
        'overwrite' => TRUE,
        'file_name' => $filename
        );
        
        $this->load->library('upload', $config);

       

      $data = array( 'company' => $corporate_id,
		     'insurance_company_id' => $insurance_company_id,
                     'pdf' => $filename,
                     'date'=> $date,
                     'status'=> 1

        );
     
        

        if($this->db->insert('account_statements',$data)) 
            {


$message = "Your CD Statement as on ".$date." received from ".$this->fun->getnewfieldvalue('insurance_companies','name','id',$insurance_company_id)." and has been Uploaded into your 'Insurance Servicing Portal'. More details login http://mallapuram.co.in/cis/hr";

    $this->fun->sendSMS($this->fun->getnewfieldvalue('corporate_client','authorised_contact_person1_phone','id',$corporate_id),$message);



$toemail=$this->fun->getnewfieldvalue('corporate_client','authorised_contact_person1_email','id',$corporate_id);
$client=$this->fun->getnewfieldvalue('corporate_client','name','id',$corporate_id);
$person=$this->fun->getnewfieldvalue('corporate_client','authorised_contact_person1_name','id',$corporate_id);

$subject="Intimation - CD Account Statement Upload - ".$client." - ".$this->fun->getnewfieldvalue('insurance_companies','name','id',$insurance_company_id);

$emailmsg="We wish to inform that we have uploaded the your company CD Account Statement as on ".$date." received from the ".$this->fun->getnewfieldvalue('insurance_companies','name','id',$insurance_company_id).".<br><br>For more details, Pls login at your '<a href='http://mallapuram.co.in/cis/hr'>Insurance Service Portal</a>'";

$message1=  $this->load->view('email_templates/email_template1',array('name'=>$person,'message'=>$emailmsg),true);
$cc="dasharath@elefontdesign.com";
$this->fun->sendDevMail('operations@mallapuram.com',$toemail,$subject,$message1,$cc);



            $this->upload->do_upload('pdf');
            return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Account Statements Added Successfully</strong>
                  </div>';
            }
		   else
		    {
              return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Add Account Statements</strong>
                     </div>';
            }

    
	
	}
  }
  
  
  
  
  
  
  
 function all_account_statements(){
    return $this->db->get_where('account_statements',array('status'=>1))->result();
  } 
  
   







 function add_cd_account() {

    if(isset($_POST['add_cd_account'])) 
    {
       extract($_POST);

      
       
    $cd=$this->db->get_where('cd_account',array('insurance_id'=>$company,'corporate_id'=>$corporate_id))->row();
       

   if($cd)
   {
	   
	 return $msg = '<div class="alert alert-danger col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Already   Account Created</strong>
                     </div>';	   
	   
   }
	else
	{
	   
 
	 $data = array( 'insurance_id' => $company,
                     'corporate_id' => $corporate_id,
                     'amount'=> 0,
                     'status'=> 1

        );
     
        

          if($this->db->insert('cd_account',$data)) 
             {

    $message = "Your CD account Tracking has been created for Cross Verification of CD Statements provided by ". $this->fun->getnewfieldvalue('insurance_companies','name','id',$company).". More details @ 'Insurance Servicing Portal' login http://mallapuram.co.in/cis/hr";

    $this->fun->sendSMS($this->fun->getnewfieldvalue('corporate_client','authorised_contact_person1_phone','id',$corporate_id),$message);

$toemail=$this->fun->getnewfieldvalue('corporate_client','authorised_contact_person1_email','id',$corporate_id);
$client=$this->fun->getnewfieldvalue('corporate_client','name','id',$corporate_id);
$person=$this->fun->getnewfieldvalue('corporate_client','authorised_contact_person1_name','id',$corporate_id);

$subject="Intimation - Creation of CD Account Tracking - ".$client." - ".$this->fun->getnewfieldvalue('insurance_companies','name','id',$company);

$emailmsg="We wish to inform you that we have created an CD Account Tracking in your 'Insurance Servicing Portal'.<br><br>Benefits of this tracking system are as follows:<br><br>1) On a single Click we will know the Total amount of Premium paid to the Insurance Company<br>2) We will know per transaction of endorsement, how much of Premium Used / reverted back during the entire policy period<br>3) We will know the Balance available with the Insurance Company, If Any<br>4) Most Importantly, it helps us to do the auditing of the CD account statement provided by the Insrance Company<br><br>For your login Link, Please CLICK <a href='http://mallapuram.co.in/cis/hr'>Insurance Servicing Portal</a> ";

$message1=  $this->load->view('email_templates/email_template1',array('name'=>$person,'message'=>$emailmsg),true);
$cc="dasharath@elefontdesign.com";
$this->fun->sendDevMail('operations@mallapuram.com',$toemail,$subject,$message1,$cc);

            
             return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>CD Account Created Successfully</strong>
                  </div>';
             }
		     else
		     {
              return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Create Account</strong>
                     </div>';
              }

	
	 }
	
	
	
	
	}
  }





function add_cd_account_amount() {

    if(isset($_POST['add_cd_account_amount'])) 
    {
       extract($_POST);

      
       
 
	 $data = array( 'insurance_id' => $company,
                     'corporate_id' => $corporate_id,
                     'amount'=> $amount,
					 'payment_methods'=> $payment_methods,
					 'number'=> $number,
					 'remarks'=> $remarks,
					 'date'=> $date,
					 
                     'status'=> 1

        );
     
        

          
		  
		  
		  
	   $cd=$this->db->get_where('cd_account',array('corporate_id'=>$corporate_id,'insurance_id'=>$company))->row();
	   $amt=$amount+$cd->amount;
		  
		  
		  
		  
		  if($this->db->insert('cd_amount',$data)) 
             {



$message = "Your CD account with ". $this->fun->getnewfieldvalue('insurance_companies','name','id',$company)." has a credit of Rs.".$amount.". Available balance: Rs.".$amt.". More details @ 'Insurance Servicing Portal' login http://mallapuram.co.in/cis/hr";

    $this->fun->sendSMS($this->fun->getnewfieldvalue('corporate_client','authorised_contact_person1_phone','id',$corporate_id),$message);

$toemail=$this->fun->getnewfieldvalue('corporate_client','authorised_contact_person1_email','id',$corporate_id);
$client=$this->fun->getnewfieldvalue('corporate_client','name','id',$corporate_id);
$person=$this->fun->getnewfieldvalue('corporate_client','authorised_contact_person1_name','id',$corporate_id);

$subject="Intimation - Creation of CD Account Tracking - ".$client." - ".$this->fun->getnewfieldvalue('insurance_companies','name','id',$company);

$emailmsg="We wish to inform that there is an updation happened to your CD Account Tracking with ".$this->fun->getnewfieldvalue('insurance_companies','name','id',$company).".<br><br>For more details, Pls login at your '<a href='http://mallapuram.co.in/cis/hr'>Insurance Service Portal</a>'";

$message1=  $this->load->view('email_templates/email_template1',array('name'=>$person,'message'=>$emailmsg),true);
$cc="dasharath@elefontdesign.com";
$this->fun->sendDevMail('operations@mallapuram.com',$toemail,$subject,$message1,$cc);

				 
		       $data1 = array('amount' => $amt);
               $this->db->update('cd_account',$data1,array('corporate_id'=>$corporate_id,'insurance_id'=>$company));	 
			 
            
             return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>CD Amount Added Successfully</strong>
                  </div>';
             }
		     else
		     {
              return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Amount Added</strong>
                     </div>';
              }

	
	 
	
	
	
	
	}
  }




function cd_account_details(){
    return $this->db->order_by('corporate_id','desc')->get_where('cd_account',array('status'=>1))->result();
  } 
  
  
  function cd_amount_details(){
    return $this->db->order_by('corporate_id','desc')->get_where('cd_amount',array('status'=>1))->result();
  } 
  
  
  
  
  
  
  function add_endorsement_charges() {

    if(isset($_POST['add_endorsement_charges'])) 
    {
       extract($_POST);

      
       $iname = $_FILES['pdf']['name'];

       $filename = $corporate_id.'_'.time().".".pathinfo($iname, PATHINFO_EXTENSION); ;

      $config = array(
        'upload_path' => "./uploads/endorsement_copy/",
        'allowed_types' => "gif|jpg|png|jpeg|pdf",
        'overwrite' => TRUE,
        'file_name' => $filename
        );
        
        $this->load->library('upload', $config);

      
        $ins=$this->db->get_where('sales_booking',array('client'=>$corporate_id,'policy_number'=>$policy_id))->row();
	  
	  
	  

      $data = array( 'corporate_id' => $corporate_id,
		     'policy_id' => $policy_id,
		     'insurance_company_id' => $ins->company,
		     'addition_amount' => $addition_amount,
		     'deletion_amount' => $deletion_amount,
		     'endorsement_number' => $endorsement_number,
		     'endorsement_copy' => $filename,
                     'status'=> 1

        );
	  
	    $cd=$this->db->get_where('cd_account',array('corporate_id'=>$corporate_id,'insurance_id'=>$ins->company))->row();
	  
     
       
	     $amt=($cd->amount+$deletion_amount)-$addition_amount;

        if($this->db->insert('endorsement_charges',$data)) 
            {
            $this->upload->do_upload('pdf');


$message = "Your Endorsement Copy received from ".$this->fun->getnewfieldvalue('insurance_companies','name','id',$ins->company)." and has been Uploaded into your 'Insurance Servicing Portal'. More details login http://mallapuram.co.in/cis/hr";

$message1 = "Available balance in your CD Account with ".$this->fun->getnewfieldvalue('insurance_companies','name','id',$ins->company)." is: Rs.".$amt.". More details login http://mallapuram.co.in/cis/hr";
    $this->fun->sendSMS($this->fun->getnewfieldvalue('corporate_client','authorised_contact_person1_phone','id',$corporate_id),$message);
$this->fun->sendSMS($this->fun->getnewfieldvalue('corporate_client','authorised_contact_person1_phone','id',$corporate_id),$message1);

	

		
			
			$data1 = array('amount' => $amt);
           $this->db->update('cd_account',$data1,array('corporate_id'=>$corporate_id,'insurance_id'=>$ins->company));



$toemail=$this->fun->getnewfieldvalue('corporate_client','authorised_contact_person1_email','id',$corporate_id);
$client=$this->fun->getnewfieldvalue('corporate_client','name','id',$corporate_id);
$person=$this->fun->getnewfieldvalue('corporate_client','authorised_contact_person1_name','id',$corporate_id);

$subject="Intimation - Endorsement Copy Upload - ".$client." - ".$this->fun->getnewfieldvalue('insurance_companies','name','id',$ins->company);

$emailmsg="We wish to inform that we have uploaded Endorsement Copy of Policy Number ".$policy_id." with ".$this->fun->getnewfieldvalue('insurance_companies','name','id',$ins->company).".<br><br>For more details, Pls login at your '<a href='http://mallapuram.co.in/cis/hr'>Insurance Service Portal</a>'";

$message1=  $this->load->view('email_templates/email_template1',array('name'=>$person,'message'=>$emailmsg),true);
$cc="dasharath@elefontdesign.com";
$this->fun->sendDevMail('operations@mallapuram.com',$toemail,$subject,$message1,$cc);
			
			
			
            return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Endorsement Information Added Successfully'.$ins->company.'</strong>
                  </div>';
            }
		   else
		    {
              return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Endorsement Information</strong>
                     </div>';
            }

    
	
	}
  }
  
  
  
  
 function all_endorsement_charges(){
    return $this->db->order_by('corporate_id','desc')->get_where('endorsement_charges',array('status'=>1))->result();
  }
  
  
  
  

//Claim Intimation Reports Start

  function corporate_claims()
  {
    return $this->db->get_where('claims_intimation',array('employee_id ='=>''))->result();
  }

  function corporate_emp_claims()
  {
    return $this->db->get_where('claims_intimation',array('employee_id !='=>''))->result();
  }
 
//Claim Intimation Reports End  


  // Mallapuram Employee Start

  function add_mallapuram_emp() {

    if(isset($_POST['emp_add']))
    {
       extract($_POST);
       
    if(!$this->db->get_where('mallapuram_employees',array('username'=>$email,'emp_type'=>$role))->num_rows())
       {

      $data = array( 'name'      => $name,
                     'email'     => $email,
                     'username'     => $email,
                     'password'  => $password,
                     'emp_type'   => $role,                 
                     'status'    => 1

        );
     
        

      if($this->db->insert('mallapuram_employees',$data)) 
          {
             
           
            return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Employee Added Successfully</strong>
                  </div>';
           } else {
            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Add Employee </strong>
                  </div>';
          }
       } else {
          return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Employee Already Exists</strong>
                  </div>';
        }

    }
  }


  function update_mallapuram_emp() {

    if(isset($_POST['emp_edit']))
    {
       extract($_POST);
       
    
      $data = array( 'name'      => $name,
                     'email'     => $email,
                     'password'  => $password,
                     'emp_type'  => $role,                 
                     'status'    => 1

        );
     
        

      if($this->db->update('mallapuram_employees',$data,array('id'=>$this->uri->segment(3)))) 
          {
             
           
            return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Employee Details Updated Successfully</strong>
                  </div>';
           } else {
            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Update Employee Details </strong>
                  </div>';
          }
      

    }
  }


  function all_mallapuram_emp()
  {
    return $this->db->get_where('mallapuram_employees')->result();
  }

  function select_mallapuram_emp()
  {
    return $this->db->get_where('mallapuram_employees',array('id'=>$this->uri->segment(3)))->row();
  }











function all_registered_members(){
	
	
     return $this->db->order_by('status','desc')->get_where('ind_registration')->result();
	
  
  
  }




function all_family_member_reports_details(){
	
	
     return $this->db->order_by('status','desc')->get_where('ind_family',array('member_max_id'=>$this->uri->segment(3)))->result();
	
  
  
  }



function all_member_policies_report_details(){
	
	
     return $this->db->order_by('status','desc')->get_where('ind_policy',array('member_id'=>$this->uri->segment(3)))->result();
	
  
  
  }
  
  
  
  
  
 function new_policy_requests(){
	
	
	return $this->db->order_by('id','desc')->get_where('ind_service_request',array('service_type'=>'new'))->result();
   
  } 
  
  
  
  function existing_policy_requests(){
	
	
	return $this->db->order_by('id','desc')->get_where('ind_service_request',array('service_type'=>'existing'))->result();
   
  } 
  
  
  
 
 function all_share_app_details(){
	
	
	return $this->db->get_where('ind_share_app')->result();
   
  }
 
 
 
 
 function all_ticket_reports(){
	
	
	return @$this->db->order_by('ticket_from',desc)->get_where('ticket_bucket')->result();
   
  }
  
  function all_mallapuram_employees(){
	
	
	return $this->db->get_where('mallapuram_employees')->result();
   
  }
 



    function add_individual_user(){


      if(isset($_POST['add_individual'])){

        extract($_POST);

        $user = $this->db->get_where('ind_registration', array('email1'=>$email))->row();
        if($user){ 
         
         return $msg='<div class="alert alert-danger alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <p><i class="fa fa-check"></i> Email ID Already Exist!</p>
                                    </div>';

        }
    else
    {

      $maxid = rand().rand();
    
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
         
        return $msg='<div class="alert alert-success alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <p><i class="fa fa-check"></i>Individual Registered Successfully</p>
                                    </div>';
    } else {
            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Something Went Wrong </strong>
                  </div>';
          }
    
    }

      }

    }



    function add_ind_policy()
  {
    if(isset($_POST['add_ind_policy']))
    {
      extract($_POST);

      
        $pcopy = $_FILES['policy_copy']['name'];

       $policycopy = $individual."_".$policy_no."_".now().".".pathinfo($pcopy, PATHINFO_EXTENSION); 

      $config = array(
        'upload_path' => APPPATH."../individual/uploads/individual/policies/",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite' => false,
        'file_name' => $policycopy
        );
        
        
        $this->load->library('upload', $config);
        
     $policy_max_id = 'PC'.rand().rand();

      $data = array('member_id'              => $individual,
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
       $this->upload->do_upload('policy_copy');
    
    
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







 function insurance_companies_count()
    {
      return $this->db->get_where('insurance_companies')->num_rows();
    }
	 
 function policy_types_count()
    {
      return $this->db->get_where('policy_types')->num_rows();
    }
  
function  insurance_policy_count()
    {
      return $this->db->get_where('insurance_policy')->num_rows();
    }
	
	
function  corporate_client_count()
    {
      return $this->db->get_where('corporate_client')->num_rows();
    }
	function  sales_booking_count()
    {
      return $this->db->get_where('sales_booking')->num_rows();
    }
	function  cd_account_count()
    {
      return $this->db->get_where('cd_account')->num_rows();
    }
	
	function  cd_amount_count()
    {
      return $this->db->get_where('cd_amount')->num_rows();
    }
	
	function  corporate_employees_count()
    {
      return $this->db->get_where('corporate_employee',array('relation'=>'self','status'=>'1'))->num_rows();
    }
	
	
	function ticket_process_status_done_count()
    {
      return $this->db->get_where('ticket_bucket',array('process_status'=>'DONE'))->num_rows();
    }
	
	function ticket_process_status_skip_count()
    {
      return $this->db->get_where('ticket_bucket',array('process_status'=>'SKIP'))->num_rows();
    }
	
	
	function ticket_process_status_postpone_count()
    {
      return $this->db->get_where('ticket_bucket',array('process_status'=>'POSTPONE'))->num_rows();
    }
	
	
	function ticket_process_status_not_count()
    {
      return $this->db->get_where('ticket_bucket',array('process_status'=>'Not Initiated'))->num_rows();
    }
	




function feedback_list(){
    return $this->db->order_by('id','desc')->get_where('feedback',array('flag'=>'employee'))->result();
   }





  

// Mallapuram Employee End


}
?>