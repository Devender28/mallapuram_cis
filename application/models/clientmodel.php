<?php 

class Clientmodel extends CI_Model {
   
   function __construct()
    {
        parent::__construct();
    }
	
	
	
	function getProfile()
  {
    return $this->db->get_where('corporate_client',array('authorised_contact_person1_email'=>$this->session->userdata('client_admin'),'id' =>$this->session->userdata('client_id')))->row();
  }


  function update_profile()
    {
     if(isset($_POST['update_profile'])){

       extract($_POST);
           
   
     $config = array(
        'upload_path'   => "uploads/corporate_client/logo",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite'     => TRUE,
        'file_name'     => $logoold
        );
        $this->load->library('upload', $config);
      $this->upload->do_upload('logo');
     
     
     
     
     $config1 = array(
        'upload_path'   => "uploads/corporate_client/gstn",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite'     => TRUE,
        'file_name'     => $gstn_scanold
        );
        
        $this->load->library('upload', $config1);
    $this->upload->initialize($config1);
        $this->upload->do_upload('gstn_scan');
    
    
    $config2 = array(
        'upload_path'   => "uploads/corporate_client/pan",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite'     => TRUE,
        'file_name'     => $pan_scanold
        );
        
        $this->load->library('upload', $config2);
    $this->upload->initialize($config2);
        $this->upload->do_upload('pan_scan');
    
    
    
    $config3 = array(
        'upload_path'   => "uploads/corporate_client/cheque",
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

      if($this->db->update('corporate_client',$data,array('id'=>$this->session->userdata('client_id')))){
         
       return $msg = '<div class="alert alert-success col-md-7">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    Profile Info  Updated Successfully.
                  </div>';
      } else{
      return  $msg ='<div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    Something Went Wrong  
                  </div>';
      }
     }
    }


    function employees()
    {
      return $this->db->get_where('corporate_employee',array('corporate_id'=>$this->session->userdata('client_id')))->result();
    }

    function employees_count()
    {
      return $this->db->get_where('corporate_employee',array('corporate_id'=>$this->session->userdata('client_id')))->num_rows();
    }
	 

  function client_policies(){
    return $this->db->get_where('sales_booking',array('client'=>$this->session->userdata('client_id')))->result();
  }

  function client_policy_count(){
    return $this->db->get_where('sales_booking',array('client'=>$this->session->userdata('client_id')))->num_rows();
  }


   function claims_intimation() {

    if(isset($_POST['claim_intimation'])) 

    {
       extract($_POST);
       
          $cid = now();

      $data = array( 'claims_id'               => $cid,
                     'corporate_id'            => $this->session->userdata('client_id'),
                     'employee_id'             => $employee,
                     'policy_id'               => $policy,
                     'date_of_hospitalization' => $hosp_date,
                     'reason'                  => $hosp_reason,
                     'status'                  => 1

        );
     
            
        

      if($this->db->insert('claims_intimation',$data)) 
          {


            $tmaxid = mt_rand();
         $tid = mt_rand();
    $tp= $this->db->get_where('ticket_process',array('ticket_type_id'=>$this->fun->getnewfieldvalue('ticket_type','id','name','Claim Intimation'),'order'=>1))->row();

      $tdata = array(  'member_max_id'  => $this->session->userdata('client_max_id'),
                       'ticket_max_id'   => $tmaxid,
                       'ticket_id' => $tid,
                       'claims_max_id'          => $cid,
                       //'policy_max_id'          => $policy,
                       'priority'      => $tp->priority,
                       'est_time'     =>$tp->est_time,
                       'ticket_type_id'    =>$tp->ticket_type_id, 
                       'responsibility'    =>$tp->responsibility,
                       'ticket_process_id'=>$tp->id,
                       'order' => $tp->order,
                       'points' => $tp->points,
                       'type' => $this->fun->getnewfieldvalue('ticket_type','id','name','Endorsement'),
                       'process_status' => "Not Initiated",
                       'ticket_from' => "corporate",
                       'status'      =>0

        );


                 
     
      $this->db->insert('ticket_bucket',$tdata);

     
$message = "The Claim request (".$tid.") is initiated under the policy number ".$policy.". More details @ 'Insurance Servicing Portal' login http://mallapuram.co.in/cis/hr";

    $this->fun->sendSMS($this->fun->getnewfieldvalue('corporate_client','authorised_contact_person1_phone','id',$this->session->userdata('client_id')),$message);


$client_name=$this->fun->getnewfieldvalue('corporate_client','name','id',$this->session->userdata('client_id'));

$client_email=$this->fun->getnewfieldvalue('corporate_client','authorised_contact_person1_email','id',$this->session->userdata('client_id'));

$pid=$this->db->get_where('sales_booking',array('client'=>$this->session->userdata('client_id'),'policy_number'=>$policy))->row();
$incmpmanager_email=$this->fun->getnewfieldvalue('insurance_companies','relationship_manager_email','id',$pid->company);
$incmpmanager_name=$this->fun->getnewfieldvalue('insurance_companies','relationship_manager_name','id',$pid->company);
$pname=$this->fun->getnewfieldvalue('insurance_policy','name','id',$pid->policy_name);


$subject="Req. for Claim Processing - ".$tid." - ".$client_name." - ".$pname." - ".$policy." - ".@date('d/m/Y');


$emailmsg="We request for Claim registration under our ".$pname." ".$policy." with your company.<br><br>The Details are as follows:<br>1) Claim Date - ".$hosp_date."<br>2) Cleint Name - ".$client_name."<br>3) Claim Description - ".$hosp_reason;

$message_email=  $this->load->view('email_templates/email_template1',array('name'=>$incmpmanager_name,'message'=>$emailmsg),true);
$cc="dasharath@elefontdesign.com";
//$this->fun->sendDevMail($client_email,$incmpmanager_email,$subject,$message_email,$cc);
       
           
            return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Claim Intimation Sent Successfully</strong>
                  </div>';
          }  else {
            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to send Claim Intimation</strong>
                  </div>';
          }
      

    }
  }


  function claims_intimation_list(){
    return $this->db->get_where('claims_intimation',array('corporate_id'=>$this->session->userdata('client_id'),'employee_id !='=>''))->result();
  }

  function claims_intimation_count(){
    return $this->db->get_where('claims_intimation',array('corporate_id'=>$this->session->userdata('client_id')))->num_rows();
  }


  function client_cd_amount(){
    return $this->db->get_where('cd_account',array('corporate_id'=>$this->session->userdata('client_id')))->result();
  }



  function claims_intimation_company() {

    if(isset($_POST['claim_intimation_company'])) 

    {
       extract($_POST);
       
          $cid = now();

      $data = array( 'claims_id'               => $cid,
                     'corporate_id'            => $this->session->userdata('client_id'),
                     'policy_id'               => $policy,
                     'date_of_hospitalization' => $hosp_date,
                     'reason'                  => $hosp_reason,
                     'status'                  => 1

        );
     
        

      if($this->db->insert('claims_intimation',$data)) 
          {

            $tmaxid = mt_rand();
         $tid = mt_rand();
    $tp= $this->db->get_where('ticket_process',array('ticket_type_id'=>$this->fun->getnewfieldvalue('ticket_type','id','name','Claim Intimation'),'order'=>1))->row();

      $tdata = array(  'member_max_id'  => $this->session->userdata('client_max_id'),
                       'ticket_max_id'   => $tmaxid,
                       'ticket_id' => $tid,
                       'claims_max_id'          => $cid,
                       //'policy_max_id'          => $policy,
                       'priority'      => $tp->priority,
                       'est_time'     =>$tp->est_time,
                       'ticket_type_id'    =>$tp->ticket_type_id, 
                       'responsibility'    =>$tp->responsibility,
                       'ticket_process_id'=>$tp->id,
                       'order' => $tp->order,
                       'points' => $tp->points,
                       'type' => $this->fun->getnewfieldvalue('ticket_type','id','name','Endorsement'),
                       'process_status' => "Not Initiated",
                       'ticket_from' => "corporate",
                       'status'      =>0

        );

  

     
      $this->db->insert('ticket_bucket',$tdata);

      
$message = "The Claim request (".$tid.") is initiated under the policy number ".$policy.". More details @ 'Insurance Servicing Portal' login http://mallapuram.co.in/cis/hr";

    $this->fun->sendSMS($this->fun->getnewfieldvalue('corporate_client','authorised_contact_person1_phone','id',$this->session->userdata('client_id')),$message);


$client_name=$this->fun->getnewfieldvalue('corporate_client','name','id',$this->session->userdata('client_id'));

$client_email=$this->fun->getnewfieldvalue('corporate_client','authorised_contact_person1_email','id',$this->session->userdata('client_id'));

$pid=$this->db->get_where('sales_booking',array('client'=>$this->session->userdata('client_id'),'policy_number'=>$policy))->row();
$incmpmanager_email=$this->fun->getnewfieldvalue('insurance_companies','relationship_manager_email','id',$pid->company);
$incmpmanager_name=$this->fun->getnewfieldvalue('insurance_companies','relationship_manager_name','id',$pid->company);
$pname=$this->fun->getnewfieldvalue('insurance_policy','name','id',$pid->policy_name);


$subject="Req. for Claim Processing - ".$tid." - ".$client_name." - ".$pname." - ".$policy." - ".@date('d/m/Y');


$emailmsg="We request for Claim registration under our ".$pname." ".$policy." with your company.<br><br>The Details are as follows:<br>1) Claim Date - ".$hosp_date."<br>2) Cleint Name - ".$client_name."<br>3) Claim Description - ".$hosp_reason;

$message_email=  $this->load->view('email_templates/email_template1',array('name'=>$incmpmanager_name,'message'=>$emailmsg),true);
$cc="dasharath@elefontdesign.com";
//$this->fun->sendDevMail($client_email,$incmpmanager_email,$subject,$message_email,$cc);


           
            return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Claim Intimation Sent Successfully</strong>
                  </div>';
          }  else {
            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to send Claim Intimation</strong>
                  </div>';
          }
      

    }
  }


   function claims_intimation_list_company(){
    return $this->db->get_where('claims_intimation',array('corporate_id'=>$this->session->userdata('client_id'),'employee_id ='=>''))->result();
  }



  function endorsement_request()
  {
    if(isset($_POST['endorse_request']))
    {

      extract($_POST);

   //print_r($_POST);

     $filename = "end_".$this->session->userdata('client_id')."_".mt_rand()."_".date("d_m_Y").".xls";

     $end_maxid = 'end'.rand().rand();

     $config = array(
        'upload_path'   => "./uploads/corporate_client/endorsement_files",
        'allowed_types' => "xls|xlsx",
        'overwrite'     => TRUE,
        'file_name'     => $filename
        );
        $this->load->library('upload', $config);
      
      if($this->upload->do_upload('endorse_file'))
      {

            $data = array('client'                   => $this->session->userdata('client_id'),
                          'endorsement_max_id'       => $end_maxid,
                          'policy'                   => $policy,
                          'additions'                => $additions,
                          'deletions'                => $deletions,
                          'corrections'              => $corrections,
                          'file_name'                => $filename,
                          'status'                   => 1
                           );

            if($this->db->insert('endorsement_request',$data))
            {


               $tmaxid = mt_rand();
         $tid = mt_rand();
    $tp= $this->db->get_where('ticket_process',array('ticket_type_id'=>$this->fun->getnewfieldvalue('ticket_type','id','name','Endorsement'),'order'=>1))->row();

      $tdata = array(  'member_max_id'  => $this->session->userdata('client_max_id'),
                       'ticket_max_id'   => $tmaxid,
                       'ticket_id' => $tid,
                       'endorsement_max_id'          => $end_maxid,
                       //'policy_max_id'          => $policy,
                       'priority'      => $tp->priority,
                       'est_time'     =>$tp->est_time,
                       'ticket_type_id'    =>$tp->ticket_type_id, 
                       'responsibility'    =>$tp->responsibility,
                       'ticket_process_id'=>$tp->id,
                       'order' => $tp->order,
                        'points' => $tp->points,
                       'type' => $this->fun->getnewfieldvalue('ticket_type','id','name','Endorsement'),
                       'process_status' => "Not Initiated",
                       'ticket_from' => "corporate",
                       'status'      =>0

        );

     
      $this->db->insert('ticket_bucket',$tdata);

       
$message = "The Endorsement request (".$tid.") is initiated under the policy number ".$policy.". More details @ 'Insurance Servicing Portal' login http://mallapuram.co.in/cis/hr";

    $this->fun->sendSMS($this->fun->getnewfieldvalue('corporate_client','authorised_contact_person1_phone','id',$this->session->userdata('client_id')),$message);




$client_name=$this->fun->getnewfieldvalue('corporate_client','name','id',$this->session->userdata('client_id'));

$client_email=$this->fun->getnewfieldvalue('corporate_client','authorised_contact_person1_email','id',$this->session->userdata('client_id'));

$pid=$this->db->get_where('sales_booking',array('client'=>$this->session->userdata('client_id'),'policy_number'=>$policy))->row();
$incmpmanager_email=$this->fun->getnewfieldvalue('insurance_companies','relationship_manager_email','id',$pid->company);
$incmpmanager_name=$this->fun->getnewfieldvalue('insurance_companies','relationship_manager_name','id',$pid->company);
$pname=$this->fun->getnewfieldvalue('insurance_policy','name','id',$pid->policy_name);


$subject=$end_count." Req. for Endorsement - ".$tid." - ".$client_name." - ".$pname." - ".$policy." - ".@date('d/m/Y');

$file="uploads/corporate_client/endorsement_files/".$filename;

$emailmsg="We request for Endorsment under our ".$pname." ".$policy." with your company.<br><br>The Details are as follows:<br>1) No. of Additions - ".$additions."<br>2) No. of Deletions - ".$deletions."<br>3) No. of Corrections / Changes - ".$corrections;

$message_email=  $this->load->view('email_templates/email_template1',array('name'=>$incmpmanager_name,'message'=>$emailmsg),true);
$cc="dasharath@elefontdesign.com";
$this->fun->sendDevMail1($client_email,$incmpmanager_email,$subject,$message_email,$cc,$file);





               return $msg = '<div class="alert alert-success col-md-7">
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                              Endorsement Request Sent Successfully.
                             </div>';
      } else {
             return  $msg ='<div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    Something Went Wrong  
                   </div>';
      }
            }
           else {
            return  $msg = '<div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            Something Went Wrong  
                            </div>' ;
          }
        }
    }


    function client_end_requests()
    {
      return $this->db->get_where('endorsement_request',array('client'=>$this->session->userdata('client_id')))->result();
    }
  


    function client_cd_statements()
    {
    return $this->db->get_where('account_statements',array('company'=>$this->session->userdata('client_id')))->result();
    }

  function client_claims_dump()
  {
    return $this->db->get_where('claim_dump',array('company'=>$this->session->userdata('client_id')))->result();
  }
 
  

   public function addition()
    {

      $msg ='';
  if(isset($_POST['add_request'])){
extract($_POST);

$addid = 'add'.rand();

$x = str_replace(' ','_',$_FILES['add_file']['name']);

 $config['upload_path'] = APPPATH.'/hruploads';
    $config['allowed_types'] = 'xlsx|xls';
    $config['max_size']= '1000';
    $config['filename']= $x;
    $config['overwrite']= 'true';
    $this->load->library('upload', $config);
    
    if($this->upload->do_upload('add_file')){

  $file = APPPATH.'/hruploads/'.$x;
}

$this->load->library('excel');

$objPHPExcel = PHPExcel_IOFactory::load($file);

$cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();

foreach ($cell_collection as $cell) {
    $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
    $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
    $data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();
   
    if ($row == 1) {
        $header[$row][$column] = $data_value;
    } else {
        $arr_data[$row][$column] = $data_value;
    }
}

 $data['header'] = $header;
 
$data['values'] = $arr_data;



for($x=2;$x<=$row;$x++){


 @$empid = $data['values'][$x]['A'];

 @$empname = $data['values'][$x]['B'];
 @$desig   = $data['values'][$x]['C'];
 @$dob     = $data['values'][$x]['D'];
 @$doj     = $data['values'][$x]['E'];
 @$gen     = $data['values'][$x]['F'];
 @$rela    = $data['values'][$x]['G'];
 @$phone   = $data['values'][$x]['H'];
 @$email   = $data['values'][$x]['I'];
 

 

  if($this->db->get_where('corporate_employee',array('employee_id'=>$empid,'relation'=>$rela))->num_rows())
  {
 $msg = '<div class="alert alert-danger col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Employees Data Already Added</strong>
                  </div>';
 } else {

date_default_timezone_set('Asia/Kolkata');
    $crdate = @date('Y-m-d H:i:s');

       $data1 = array( 'corporate_id'     => $this->session->userdata('client_id'),
                       'employee_id'      => $empid,
                       'policy_id'        => $policy,
                       'addition_id'      => $addid,
                       'name'             => $empname,
                       'designation'      => $desig, 
                       'date_of_birth'    => $dob,                     
                       'date_of_joining'  => $doj, 
                       'gender'           => $gen, 
                       'relation'         => $rela, 
                       'phone'            => $phone, 
                       'email'            => $email, 
                       'remarks'          => $remark,
                       'status'           => 0

        );

       $data2 = array( 'corporate_id'     => $this->session->userdata('client_id'),
                       'employee_id'      => $empid,
                       'policy_id'        => $policy,
                       'name'             => $empname,
                       'designation'      => $desig, 
                       'date_of_birth'    => $dob,                     
                       'date_of_joining'  => $doj, 
                       'gender'           => $gen, 
                       'relation'         => $rela, 
                       'phone'            => $phone, 
                       'email'            => $email,
                       'status'           => 0

        );

        $this->db->insert('addition', $data1);
          if($rela =='Self'){
        $this->db->insert('corporate_employee', $data2);
            } if($rela !='Self') {
        $this->db->insert('corporate_employee_family', $data2);
              }
        $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Employees Added Successfully</strong>
                  </div>';
} 
}
 //$this->fun->sendMail($_FILES['add_file']['name']);
       return $msg;

 }
 


}




   function all_additions(){
    return $this->db->get_where('addition')->result();
   }



  function client_feedback()
  {
    if(isset($_POST['feedback_submit']))
    {
      extract($_POST);

      $data = array( 'remark'     => $remark,
                     'suggestion' => $suggestion, 
                     'rating'     => $rating,
                     'flag'       => 'client',
                     'client_id'      => $this->session->userdata('client_id'),
                     'status'   => 1

        );
     
        

      if($this->db->insert('feedback',$data)) 
          {
           
            return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Feedback Sent Successfully</strong>
                  </div>';
          }  else {
            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Send Feedback</strong>
                  </div>';
          }
       

    }
  }


   function client_feedbacks(){
    return $this->db->get_where('feedback',array('client_id'=>$this->session->userdata('client_id')))->result();
   }


   function client_endorsement_charges(){
    return $this->db->order_by('id','desc')->get_where('endorsement_charges',array('corporate_id'=>$this->session->userdata('client_id')))->result();
  }









}
?>