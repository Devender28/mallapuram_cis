<?php 

class Ticketmodel extends CI_Model {
   
   function __construct()
    {
        parent::__construct();
    }
	
	
	
	
	
	function login(){


      if(isset($_POST['login'])){

        extract($_POST);
        $user = $this->db->get_where('mallapuram_employees', array('username'=>$username, 'password'=>$password))->row();
        if($user){ 
         $this->session->set_userdata('ticketsystem_login',$user->username);
		  $this->session->set_userdata('emp_id',$user->id);
		  $this->session->set_userdata('emp_type',$user->emp_type);
         



$login_time=date("g:i a");
		   $login_date=date("F j, Y");
		  $data = array( 'login_time' => $login_time,'login_date' => $login_date,'emp_id' => $this->session->userdata('emp_id'),'status'=> 1);
          $this->db->insert('emp_login',$data);		


redirect('ticket/dashboard', 'refresh');

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
	
	


  function add_ticket_type() {

    if(isset($_POST['add_ticket_type']) || isset($_POST['add_ticket_type_red'])) 
    {
       extract($_POST);


      $data = array( 'name' => $name,                     
                     'status'=> 1

        );
     
        

      if($this->db->insert('ticket_type',$data)) 
          {
            
    
           if(isset($_POST['add_ticket_type_red'])){
              return $msg= "<script>location.href='".base_url('ticket/add_ticket_type')."'</script>";
            } else {


            return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Ticket Type Added Successfully</strong>
                  </div>';
          } } else {
            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Add Ticket Type</strong>
                  </div>';
          }

    }
  }


  function edit_ticket_type() {

    if(isset($_POST['edit_ticket_type'])) 
    {
       extract($_POST);


      $data = array( 'name' => $name

        );
     
        

      if($this->db->update('ticket_type',$data,array('id'=>$this->uri->segment(3)))) 
          {
            
    
           


            return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Ticket Type Updated Successfully</strong>
                  </div>';
          } else {
            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Update Ticket Type</strong>
                  </div>';
          }

    }
  }


  function all_ticket_types()
  {
    return $this->db->order_by('id','asc')->get_where('ticket_type')->result();
  }

  function get_ticket_type()
  {
    return $this->db->get_where('ticket_type',array('id'=>$this->uri->segment(3)))->row();
  }


  function add_ticket_process() {

    if(isset($_POST['add_ticket_process']) || isset($_POST['add_ticket_process_red'])) 
    {
       extract($_POST);


      $data = array( 'name' => $name,
                     'ticket_type_id' => $type,
                     'responsibility' => $resp,
                     'priority'       => $priority,
                     'description'    => $desc, 
                     'order'          => $order,
					 'points'         => $points,
                     'status'=> 1

        );
     
        

      if($this->db->insert('ticket_process',$data)) 
          {
            
    
           if(isset($_POST['add_ticket_process_red'])){
              return $msg= "<script>location.href='".base_url('ticket/add_ticket_process')."'</script>";
            } else {


            return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Ticket Process Added Successfully</strong>
                  </div>';
          } } else {
            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Add Ticket Process</strong>
                  </div>';
          }

    }
  }


  function edit_ticket_process() {

    if(isset($_POST['edit_ticket_process'])) 
    {
       extract($_POST);


      $data = array( 'name' => $name,
                     'ticket_type_id' => $type,
                     'responsibility' => $resp,
                     'priority'       => $priority,
                     'description'    => $desc,
					 'points'         => $points,
                     'order'          => $order

        );
     
        

      if($this->db->update('ticket_process',$data,array('id'=>$this->uri->segment(3)))) 
          {
            
    
           


            return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Ticket Process Updated Successfully</strong>
                  </div>';
           } else {
            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Update Ticket Process</strong>
                  </div>';
          }

    }
  }

  
function all_ticket_process()
  {
    return $this->db->order_by('id','asc')->get_where('ticket_process')->result();
  }

  function get_ticket_process()
  {
    return $this->db->get_where('ticket_process',array('id'=>$this->uri->segment(3)))->row();
  }




 
 
 
 
 
 
 
function ticket_welcome()
 {
		
		

//existing_request code-----------------

if(isset($_POST['existing_request_done'])) 
        {
         extract($_POST);
     	
		 $data = array('emp_id'         => $this->session->userdata('emp_id'),
                     'ticket_id'        => $ticket_id,
                     'remark'           => $remarks,
                     'process_status'   => "DONE",
                     'promoting_policy' => $promoting_policy,
                     'points'           => $points,
                     'promotion_id'    => $this->fun->getnewfieldvalue('promotions','id','status','1'),
		     'status'           => 1
                     );

     	if($this->db->insert('ticket_picking_history',$data))
          {
          $tid = mt_rand();

       
	 //$this->db->update('tickets',array('process_status'=>'DONE'),array('ticket_id'=>$ticket_id));
      $this->db->update('ticket_bucket',array('process_status'=>'DONE','status'=>'1'),array('ticket_id'=>$ticket_id));

      $this->db->insert('ticket_points',$data);
     
      $this->db->delete('ticket_picking',array('emp_id'=>$this->session->userdata('emp_id')));
      redirect('ticket/dashboard','refresh');

           } 
		   else {
            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Process Ticket </strong>
                  </div>';
           }
	 }
	  








if(isset($_POST['existing_request_skip'])) 
          {
         extract($_POST);        
     
    $data_history = array( 'emp_id'           => $this->session->userdata('emp_id'),
                           'ticket_id'        => $ticket_id,
                           'remark'           => $remarks,
                           'process_status'   => "SKIP",
                           'promoting_policy' => $promoting_policy,
                           'promotion_id'    => $this->fun->getnewfieldvalue('promotions','id','status','1'),
                           'status'           => 1
                   );

        
    
  if($this->db->insert('ticket_picking_history',$data_history))
          {
              
          
      $this->db->update('ticket_bucket',array('process_status'=>'SKIP','status'=>'0'),array('ticket_id'=>$ticket_id,'order'=>1));
          
   
      $this->db->delete('ticket_picking',array('emp_id'=>$this->session->userdata('emp_id')));

      redirect('ticket/dashboard','refresh');

           } 
       else
       {
            
      
      return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Process Ticket </strong>
                  </div>';
           }
         
}










if(isset($_POST['existing_request_escalate'])) 
          {
         extract($_POST);        
     
                  
    $data_history = array( 'emp_id'           => $this->session->userdata('emp_id'),
                           'ticket_id'        => $ticket_id,
                           'remark'           => $remarks,
                           'process_status'   => "ESCALATE",
                           'promoting_policy' => $promoting_policy,
                           'promotion_id'    => $this->fun->getnewfieldvalue('promotions','id','status','1'),
                           'status'           => 1
                   );

        $emp_type=$this->session->userdata('emp_type');
        if($emp_type=='executive')
        {
          $resp='Manager';
        } elseif($emp_type=='manager')
        {
          $resp = 'Admin';
        }
    
    
    if($this->db->insert('ticket_picking_history',$data_history))
          {
              
          
      $this->db->update('ticket_bucket',array('process_status'=>'ESCALATE','status'=>'0','responsibility'=>$resp),array('ticket_id'=>$ticket_id,'order'=>1));
          
   
      $this->db->delete('ticket_picking',array('emp_id'=>$this->session->userdata('emp_id')));

      redirect('ticket/dashboard','refresh');

           } 
       else
       {
            
      
      return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Process Ticket </strong>
                  </div>';
           }
 }






if(isset($_POST['existing_request_postpone'])) 
          {
         extract($_POST);        
     
  $data_history = array( 'emp_id'           => $this->session->userdata('emp_id'),
                           'ticket_id'        => $ticket_id,
                           'remark'           => $remarks,
                           'process_status'   => "POSTPONE",
                           'postpone'         => $postpone,
                           'promoting_policy' => $promoting_policy,
                           'promotion_id'    => $this->fun->getnewfieldvalue('promotions','id','status','1'),
                           'status'           => 1
                   );

    
    
    if($this->db->insert('ticket_picking_history',$data_history))
          {
              
          
      $this->db->update('ticket_bucket',array('process_status'=>'POSTPONE','status'=>'0','postpone'=>$postpone),array('ticket_id'=>$ticket_id,'order'=>1));
          
   
      $this->db->delete('ticket_picking',array('emp_id'=>$this->session->userdata('emp_id')));

      redirect('ticket/dashboard','refresh');

           } 
       else
       {
            
      
      return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Process Ticket </strong>
                  </div>';
           }
         
         
 }




//existing_request code End-----------------














//Registration---- Start--------------------------	
		
		
	//New Request Done Start ---	
		
		if(isset($_POST['new_request_done'])) 
        {
         extract($_POST);
     	
		 $data = array('emp_id'           => $this->session->userdata('emp_id'),
                               'ticket_id'        => $ticket_id,
                               'remark'           => $remarks,
                               'process_status'   => "DONE",
                               'promoting_policy' => $promoting_policy,
                               'points'           => $points,
                               'promotion_id'    => $this->fun->getnewfieldvalue('promotions','id','status','1'),
			       'status'           => 1
                     );

     	if($this->db->insert('ticket_picking_history',$data))
          {
          $tid = mt_rand();

       
	 //$this->db->update('tickets',array('process_status'=>'DONE'),array('ticket_id'=>$ticket_id));
      $this->db->update('ticket_bucket',array('process_status'=>'DONE','status'=>'1'),array('ticket_id'=>$ticket_id));
      
       $this->db->insert('ticket_points',$data);
     
      $this->db->delete('ticket_picking',array('emp_id'=>$this->session->userdata('emp_id')));
      redirect('ticket/dashboard','refresh');

           } 
		   else {
            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Process Ticket </strong>
                  </div>';
           }

      
	  
	  
	  
	 }
	  


     //New Request End ----
		
		
      //New Request Skip start ---


           if(isset($_POST['new_request_skip'])) 
        {
         extract($_POST);
     	
		 $data = array('emp_id'           => $this->session->userdata('emp_id'),
                               'ticket_id'        => $ticket_id,
                               'remark'           => $remarks,
                               'process_status'   => "SKIP",
                               'promoting_policy' => $promoting_policy,
                               'promotion_id'    => $this->fun->getnewfieldvalue('promotions','id','status','1'),
			       'status'           => 1
                     );

     	if($this->db->insert('ticket_picking_history',$data))
          {
          
      $this->db->update('ticket_bucket',array('process_status'=>'SKIP','status'=>'0'),array('ticket_id'=>$ticket_id));
     
      $this->db->delete('ticket_picking',array('emp_id'=>$this->session->userdata('emp_id')));
      redirect('ticket/dashboard','refresh');

           } 
		   else {
            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Process Ticket </strong>
                  </div>';
           }

      
	  
	  
	  
	 }

      //New Request Skip End -----		



      //New Request Escalate start ---


           if(isset($_POST['new_request_escalate'])) 
        {
         extract($_POST);
     	
		 $data = array('emp_id'           => $this->session->userdata('emp_id'),
                               'ticket_id'        => $ticket_id,
                               'remark'           => $remarks,
                               'process_status'   => "ESCALATE",
                               'promoting_policy' => $promoting_policy,
                               'promotion_id'    => $this->fun->getnewfieldvalue('promotions','id','status','1'),
			       'status'           => 1
                     );

               $emp_type=$this->session->userdata('emp_type');
        if($emp_type=='executive')
        {
          $resp='Manager';
        } elseif($emp_type=='manager')
        {
          $resp = 'Admin';
        }

     	if($this->db->insert('ticket_picking_history',$data))
          {
          
      $this->db->update('ticket_bucket',array('process_status'=>'ESCALATE','status'=>'0','responsibility'=>$resp),array('ticket_id'=>$ticket_id));
     
      $this->db->delete('ticket_picking',array('emp_id'=>$this->session->userdata('emp_id')));
      redirect('ticket/dashboard','refresh');

           } 
		   else {
            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Process Ticket </strong>
                  </div>';
           }

      
	  
	  
	  
	 }

      //New Request Escalate End -----	










		
		
		if(isset($_POST['done'])) 
        {
         extract($_POST);
        
		
		
		
		$data = array('emp_id'         => $this->session->userdata('emp_id'),
                     'ticket_id'      => $ticket_id,
                     'remark'         => $remarks,
                     'process_status' => "DONE",
                     'promoting_policy' => $promoting_policy,
                     'promotion_id'    => $this->fun->getnewfieldvalue('promotions','id','status','1'),
					 'status'         => 1

           );

        if($this->db->insert('ticket_picking_history',$data))
          {
            
              
          $tid = mt_rand();

        $tp= $this->db->get_where('ticket_process',array('ticket_type_id'=>$this->fun->getnewfieldvalue('ticket_type','id','name','Registration'),'order'=>2))->row();

          $tdata = array('member_max_id'  => $member_max_id,
                        'ticket_max_id'   => $ticket_max_id,
                        'ticket_id' => $tid,
                        'priority'      => $tp->priority,
                        'est_time'     =>$tp->est_time,
                        'ticket_type_id'    =>$tp->ticket_type_id, 
                        'responsibility'    =>$tp->responsibility,
                        'ticket_process_id'=>$tp->id,
                        'order' => $tp->order,
                        'points' => $tp->points,
                        'ticket_from' => 'individual',
                        'type' => $this->fun->getnewfieldvalue('ticket_type','id','name','Registration'),
                        'process_status' => "Not Initiated",
                        'status'      =>0

        );
		  
		  
		  $dp= $this->db->get_where('ticket_process',array('ticket_type_id'=>$this->fun->getnewfieldvalue('ticket_type','id','name','Registration'),'order'=>1))->row();
		  
		 $pdata = array('emp_id'         => $this->session->userdata('emp_id'),
                     'ticket_id'      => $ticket_id,
                     'remark'         => $remarks,
                     'process_status' => "DONE",
                     'promoting_policy' => $promoting_policy,
					 'points'=>$dp->points,
					 'status'         => 1

        ); 
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  

      //$this->db->update('tickets',array('process_status'=>'DONE'),array('ticket_id'=>$ticket_id));
      $this->db->update('ticket_bucket',array('process_status'=>'DONE','status'=>'1'),array('ticket_id'=>$ticket_id));
      $this->db->insert('ticket_bucket',$tdata);
	  $this->db->insert('ticket_points',$pdata);
      $this->db->delete('ticket_picking',array('emp_id'=>$this->session->userdata('emp_id')));
      redirect('ticket/dashboard','refresh');

           } else {
            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Process Ticket </strong>
                  </div>';
           }

      }




    if(isset($_POST['skip'])) 
        {
         extract($_POST);
        
		
		
		
		$data = array('emp_id'         => $this->session->userdata('emp_id'),
                     'ticket_id'      => $ticket_id,
                     'remark'         => $remarks,
                     'process_status' => "SKIP",
                     'promoting_policy' => $promoting_policy,
                     'promotion_id'    => @$this->fun->getnewfieldvalue('promotions','id','status','1'),
					 'status'         => 1

           );

        if($this->db->insert('ticket_picking_history',$data))
          {
            
              
     
      $this->db->update('ticket_bucket',array('process_status'=>'SKIP','status'=>'0'),array('ticket_id'=>$ticket_id));
      
	 
      $this->db->delete('ticket_picking',array('emp_id'=>$this->session->userdata('emp_id')));
      redirect('ticket/dashboard','refresh');

           } else {
            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Process Ticket </strong>
                  </div>';
           }

      }




     //Welcome ESCALATE Start ----


if(isset($_POST['escalate'])) 
        {
         extract($_POST);
        
    
        
    $data = array('emp_id'         => $this->session->userdata('emp_id'),
                     'ticket_id'      => $ticket_id,
                     'remark'         => $remarks,
                     'process_status' => "ESCALATE",
                     'promoting_policy' => $promoting_policy,
                     'promotion_id'    => $this->fun->getnewfieldvalue('promotions','id','status','1'),
           'status'         => 1

           );

    $emp_type=$this->session->userdata('emp_type');
        if($emp_type=='executive')
        {
          $resp='Manager';
        } elseif($emp_type=='manager')
        {
          $resp = 'Admin';
        }

        if($this->db->insert('ticket_picking_history',$data))
          {
            
              
                  
      $this->db->update('ticket_bucket',array('process_status'=>'ESCALATE','status'=>'0','responsibility'=>$resp),array('ticket_id'=>$ticket_id));
      
   // $this->db->insert('ticket_points',$pdata);
      $this->db->delete('ticket_picking',array('emp_id'=>$this->session->userdata('emp_id')));
      redirect('ticket/dashboard','refresh');

           } else {
            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Process Ticket </strong>
                  </div>';
           }

      }

//Welcome ESCALATE End---



  //Welcome Postpone Start ---


   if(isset($_POST['postpone_done'])) 
          {
         extract($_POST);        
     
  $data_history = array(   'emp_id'           => $this->session->userdata('emp_id'),
                           'ticket_id'        => $ticket_id,
                           'remark'           => $remarks,
                           'process_status'   => "POSTPONE",
                           'postpone'         => $postpone,
                           'promoting_policy' => $promoting_policy,
                           'promotion_id'    => $this->fun->getnewfieldvalue('promotions','id','status','1'),
                           'status'           => 1
                   );

    
    
    if($this->db->insert('ticket_picking_history',$data_history))
          {
              
          
      $this->db->update('ticket_bucket',array('process_status'=>'POSTPONE','status'=>'0','postpone'=>$postpone),array('ticket_id'=>$ticket_id));
          
   
      $this->db->delete('ticket_picking',array('emp_id'=>$this->session->userdata('emp_id')));

      redirect('ticket/dashboard','refresh');

           } 
       else
       {
            
      
      return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Process Ticket </strong>
                  </div>';
           }
         
         
 }

//Welcome Postpone End----





//Profile--CheckProcess------Start-----------------	




if(isset($_POST['profile_check_done'])) 
          {
         extract($_POST);

         $tid = mt_rand();
     	
		$data_check = array('emp_id'         => $this->session->userdata('emp_id'),
                       'ticket_id'      => $tid,
                       //'remark'         => $remarks,
                       //'process_status' => "DONE",
                       //'promoting_policy' => $promoting_policy,
					 'ticket_max_id'      => $ticket_max_id,
                     'member_max_id'         => $member_max_id,
					 'first_name'      => $first_name_radio,
                     'middle_name'         => $middle_name_radio,
                     'last_name'         => $last_name_radio,
					 'email1'      => $email1_radio,
                     'email2'         => $email2_radio,
					 'mobile1'      => $mobile1_radio,
                     'mobile2'         => $mobile2_radio,
					 'mobile3'      => $mobile3_radio,
                     'recorded_dob'         => $recorded_dob_radio,
					 'actual_dob'      => $actual_dob_radio,
                     'aadhar_no'         => $aadhar_no_radio,
					 'aadhar_scan'      => $aadhar_scan_radio,
                     'pan_no'         => $pan_no_radio,
					 'pan_scan'      => $pan_scan_radio,
                     'voterid_no'         => $voterid_no_radio,
					 'voterid_scan'      => $voterid_scan_radio,
                     'license_no'         => $license_no_radio,
					 'license_expiry_date'      => $license_expiry_date_radio,
                     'license_scan'         => $license_scan_radio,
					 'passport_no'      => $passport_no_radio,
                     'passport_expiry_date'         => $passport_expiry_date_radio,
					 'passport_scan'      => $passport_scan_radio,
                     'state'         => $state_radio,
					 'district'      => $district_radio,
                                         'address'      => $address_radio,
                                         'pincode'      => $pincode_radio,
					 'status'         => 1

            );
		 
		       
			   
			   
			   
		$data_history = array('emp_id'         => $this->session->userdata('emp_id'),
                     'ticket_id'      => $ticket_id,
                     'remark'         => $remarks,
                     'process_status' => "DONE",
                     'promoting_policy' => $promoting_policy,
                     'promotion_id'    => @$this->fun->getnewfieldvalue('promotions','id','status','1'),
					 'status'         => 1
             );

        
		
		
		
		if($this->db->insert('ticket_picking_history',$data_history))
          {
              
          

        $tp= $this->db->get_where('ticket_process',array('ticket_type_id'=>$this->fun->getnewfieldvalue('ticket_type','id','name','Registration'),'order'=>3))->row();

          $tdata = array('member_max_id'  => $member_max_id,
                        'ticket_max_id'   => $ticket_max_id,
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
		  
		  
		  $pdata = array('emp_id'         => $this->session->userdata('emp_id'),
                     'ticket_id'      => $ticket_id,
                     'remark'         => $remarks,
                     'process_status' => "DONE",
                     'promoting_policy' => $promoting_policy,
					 'points'=>$tp->points,
					 'status'         => 1

        ); 
		  
		 

      //$this->db->update('tickets',array('process_status'=>'DONE'),array('ticket_id'=>$ticket_id));
      $this->db->update('ticket_bucket',array('process_status'=>'DONE','status'=>'1'),array('ticket_id'=>$ticket_id));
      
	  $this->db->insert('ticket_bucket',$tdata);
	 
	  $this->db->insert('check_ind_registration',$data_check);
	  $this->db->insert('ticket_points',$pdata);
      $this->db->delete('ticket_picking',array('emp_id'=>$this->session->userdata('emp_id')));
      redirect('ticket/dashboard','refresh');

           } 
		   else
		   {
            
			
			return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Process Ticket </strong>
                  </div>';
           }
			   
			   
		   
			   
			   
 }



//Profile--CheckProcess------End-----------------	





//Profile--Check SKIP Process------Start-----------------	




if(isset($_POST['profile_check_skip'])) 
          {
         extract($_POST);

         $tid = mt_rand();
     	
		$data_check = array('emp_id'         => $this->session->userdata('emp_id'),
                       'ticket_id'      => $tid,
                       //'remark'         => $remarks,
                       //'process_status' => "DONE",
                       //'promoting_policy' => $promoting_policy,
					 'ticket_max_id'      => $ticket_max_id,
                     'member_max_id'         => $member_max_id,
					 'first_name'      => $first_name_radio,
                     'middle_name'         => $middle_name_radio,
                     'last_name'         => $last_name_radio, 
					 'email1'      => $email1_radio,
                     'email2'         => $email2_radio,
					 'mobile1'      => $mobile1_radio,
                     'mobile2'         => $mobile2_radio,
					 'mobile3'      => $mobile3_radio,
                     'recorded_dob'         => $recorded_dob_radio,
					 'actual_dob'      => $actual_dob_radio,
                     'aadhar_no'         => $aadhar_no_radio,
					 'aadhar_scan'      => $aadhar_scan_radio,
                     'pan_no'         => $pan_no_radio,
					 'pan_scan'      => $pan_scan_radio,
                     'voterid_no'         => $voterid_no_radio,
					 'voterid_scan'      => $voterid_scan_radio,
                     'license_no'         => $license_no_radio,
					 'license_expiry_date'      => $license_expiry_date,
                     'license_scan'         => $license_scan_radio,
					 'passport_no'      => $passport_no_radio,
                     'passport_expiry_date'         => $passport_expiry_date_radio,
					 'passport_scan'      => $passport_scan_radio,
                     'state'         => $state_radio,
					 'district'      => $district_radio,
                                         'address'      => $address_radio,
                                         'pincode'      => $pincode_radio, 
					 'status'         => 1

            );
		 
		       
			   
			   
			   
		$data_history = array('emp_id'         => $this->session->userdata('emp_id'),
                     'ticket_id'      => $ticket_id,
                     'remark'         => $remarks,
                     'process_status' => "SKIP",
                     'promoting_policy' => $promoting_policy,
                     'promotion_id'    => @$this->fun->getnewfieldvalue('promotions','id','status','1'),
					 'status'         => 1
             );

        
		
		
		
		if($this->db->insert('ticket_picking_history',$data_history))
          {
              
          

        $tp= $this->db->get_where('ticket_process',array('ticket_type_id'=>$this->fun->getnewfieldvalue('ticket_type','id','name','Registration'),'order'=>3))->row();

          $tdata = array('member_max_id'  => $member_max_id,
                        'ticket_max_id'   => $ticket_max_id,
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
		  
		  
		  
		  
		 

      //$this->db->update('tickets',array('process_status'=>'DONE'),array('ticket_id'=>$ticket_id));
      $this->db->update('ticket_bucket',array('process_status'=>'SKIP','status'=>'0'),array('ticket_id'=>$ticket_id));
      
	
	 
	 // $this->db->insert('check_ind_registration',$data_check);
	 // $this->db->insert('ticket_points',$pdata);
      $this->db->delete('ticket_picking',array('emp_id'=>$this->session->userdata('emp_id')));
      redirect('ticket/dashboard','refresh');

           } 
		   else
		   {
            
			
			return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Process Ticket </strong>
                  </div>';
           }
			   
			   
			   
			   
			   
			   
 }



//Profile--Check SKIP Process------End-----------------	



   //Profile Check ESCALATE Process------Start----------------- 


if(isset($_POST['profile_check_escalate'])) 
          {
         extract($_POST);

           
             
    $data_history = array('emp_id'         => $this->session->userdata('emp_id'),
                     'ticket_id'      => $ticket_id,
                     'remark'         => $remarks,
                     'process_status' => "ESCALATE",
                     'promoting_policy' => $promoting_policy,
                     'promotion_id'    => @$this->fun->getnewfieldvalue('promotions','id','status','1'),
                     'status'         => 1
             );

        $emp_type=$this->session->userdata('emp_type');
        if($emp_type=='executive')
        {
          $resp='Manager';
        } elseif($emp_type=='manager')
        {
          $resp = 'Admin';
        }

    if($this->db->insert('ticket_picking_history',$data_history))
          {
              
          
      
      $this->db->update('ticket_bucket',array('process_status'=>'ESCALATE','status'=>'0','responsibility'=>$resp),array('ticket_id'=>$ticket_id));
      
    
      $this->db->delete('ticket_picking',array('emp_id'=>$this->session->userdata('emp_id')));
      redirect('ticket/dashboard','refresh');

           } 
       else
       {
            
      
      return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Process Ticket </strong>
                  </div>';
           }
         
         
     
         
         
 }



//Profile Check ESCALATE Process------End----------------- 


// Profile Check Postpone Start---

if(isset($_POST['profile_check_postpone'])) 
          {
         extract($_POST);        
     
  $data_history = array('emp_id'         => $this->session->userdata('emp_id'),
                     'ticket_id'      => $ticket_id,
                     'remark'         => $remarks,
                     'process_status' => "POSTPONE",
                     'promoting_policy' => $promoting_policy,
                     'promotion_id'    => @$this->fun->getnewfieldvalue('promotions','id','status','1'),
                     'status'         => 1
             );

    
    
    if($this->db->insert('ticket_picking_history',$data_history))
          {
              
          
      $this->db->update('ticket_bucket',array('process_status'=>'POSTPONE','status'=>'0','postpone'=>$postpone),array('ticket_id'=>$ticket_id));
          
   
      $this->db->delete('ticket_picking',array('emp_id'=>$this->session->userdata('emp_id')));

      redirect('ticket/dashboard','refresh');

           } 
       else
       {
            
      
      return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Process Ticket </strong>
                  </div>';
           }
         
         
 }


// Profile Check Postpone End ----



//Profile Update Process------Start-----------------	




if(isset($_POST['profile_update_done'])) 
          {
         extract($_POST);
     	
		$data_check = array('emp_id'         => $this->session->userdata('emp_id'),
                       'ticket_id'      => $ticket_id,
                       //'remark'         => $remarks,
                       //'process_status' => "DONE",
                       //'promoting_policy' => $promoting_policy,
					 'ticket_max_id'      => $ticket_max_id,
           'member_max_id'         => $member_max_id,
					 'first_name'      => $first_name_radio,
           'middle_name'         => $middle_name_radio,
           'last_name' => $last_name_radio,
					 'email1'      => $email1_radio,
           'email2'         => $email2_radio,
					 'mobile1'      => $mobile1_radio,
           'mobile2'         => $mobile2_radio,
					 'mobile3'      => $mobile3_radio,
           'recorded_dob'         => $recorded_dob_radio,
					 'actual_dob'      => $actual_dob_radio,
           'aadhar_no'         => $aadhar_no_radio,
					 'aadhar_scan'      => $aadhar_scan_radio,
           'pan_no'         => $pan_no_radio,
					 'pan_scan'      => $pan_scan_radio,
           'voterid_no'         => $voterid_no_radio,
					 'voterid_scan'      => $voterid_scan_radio,
           'license_no'         => $license_no_radio,
					 'license_expiry_date'      => $license_expiry_date_radio,
           'license_scan'         => $license_scan_radio,
					 'passport_no'      => $passport_no_radio,
           'passport_expiry_date'         => $passport_expiry_date_radio,
					 'passport_scan'      => $passport_scan_radio,
           'address' => $address_radio,
           'pincode' => $pincode_radio,
           'state'         => $state_radio,
					 'district'      => $district_radio,
           'status'         => 1

            );

    
		 
		       
			   $data_ind = array(
                      
           'first_name'      => $first_name,
           'middle_name'         => $middle_name,
           'email1'      => $email1,
           'email2'         => $email2,
           'mobile1'      => $mobile1,
           'mobile2'         => $mobile2,
           'mobile3'      => $mobile3,
           'recorded_dob'         => $recorded_dob,
           'actual_dob'      => $actual_dob,
           'aadhar_no'         => $aadhar_no,
           //'aadhar_scan'      => $aadhar_scan,
           'pan_no'         => $pan_no,
          // 'pan_scan'      => $pan_scan,
           'voterid_no'         => $voterid_no,
           //'voterid_scan'      => $voterid_scan,
           'license_no'         => $license_no,
           'license_expiry_date'      => $license_expiry_date,
           //'license_scan'         => $license_scan,
           'passport_no'      => $passport_no,
           'passport_expiry_date'         => $passport_expiry_date,
           //'passport_scan'      => $passport_scan,
           'address' => $address,
           'pincode' => $pincode,
           'state'         => $state,
           'district'      => $district_radio,
           'status'         => 1

            );
     
			   
			   
		$data_history = array('emp_id'         => $this->session->userdata('emp_id'),
                     'ticket_id'      => $ticket_id,
                     'remark'         => $remarks,
                     'process_status' => "DONE",
                     'promoting_policy' => $promoting_policy,
                    'promotion_id'    => @$this->fun->getnewfieldvalue('promotions','id','status','1'),
					           'status'         => 1
             );

        
		
		
		
		if($this->db->insert('ticket_picking_history',$data_history))
          {
              
         

        $tp= $this->db->get_where('ticket_process',array('ticket_type_id'=>$this->fun->getnewfieldvalue('ticket_type','id','name','Registration'),'order'=>3))->row();

          $tdata = array('member_max_id'  => $member_max_id,
                        'ticket_max_id'   => $ticket_max_id,
                        'ticket_id' => $ticket_id,
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
		  
		  
		  $pdata = array('emp_id'         => $this->session->userdata('emp_id'),
                     'ticket_id'      => $ticket_id,
                     'remark'         => $remarks,
                     'process_status' => "DONE",
                     'promoting_policy' => $promoting_policy,
					 'points'=>$tp->points,
					 'status'         => 1

        ); 
		  
		 

      //$this->db->update('tickets',array('process_status'=>'DONE'),array('ticket_id'=>$ticket_id));
          if(in_array('No',$data_check))
          {
      $this->db->update('ticket_bucket',array('process_status'=>'Pending','status'=>'0'),array('ticket_id'=>$ticket_id,'order'=>3));
    } else {
      $this->db->update('ticket_bucket',array('process_status'=>'DONE','status'=>'1'),array('ticket_id'=>$ticket_id,'order'=>3));
    }
      
	 // $this->db->insert('ticket_bucket',$tdata);
	 
	 $this->db->update('check_ind_registration',$data_check,array('ticket_id'=>$ticket_id));
	 $this->db->update('ind_registration',$data_ind,array('max_id'=>$member_max_id));

     $this->db->insert('ticket_points',$pdata);

      $this->db->delete('ticket_picking',array('emp_id'=>$this->session->userdata('emp_id')));
      redirect('ticket/dashboard','refresh');

           } 
		   else
		   {
            
			
			return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Process Ticket </strong>
                  </div>';
           }
			   
			   
			   
			   
			   
			   
			   
			   
			   
			   
			   
 }



//Profile Update Process------End-----------------	



  //Profile Update SKIP Process------Start----------------- 


if(isset($_POST['profile_update_skip'])) 
          {
         extract($_POST);
      
    
         
    $data_history = array('emp_id'         => $this->session->userdata('emp_id'),
                     'ticket_id'      => $ticket_id,
                     'remark'         => $remarks,
                     'process_status' => "SKIP",
                     'promoting_policy' => $promoting_policy,
                     'promotion_id'    => @$this->fun->getnewfieldvalue('promotions','id','status','1'),
                     'status'         => 1
             );

    
    if($this->db->insert('ticket_picking_history',$data_history))
          {
                   
                           
      $this->db->update('ticket_bucket',array('process_status'=>'SKIP','status'=>'0'),array('ticket_id'=>$ticket_id,'order'=>3));
   
      
  
      $this->db->delete('ticket_picking',array('emp_id'=>$this->session->userdata('emp_id')));
      redirect('ticket/dashboard','refresh');

           } 
       else
       {
            
      
      return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Process Ticket </strong>
                  </div>';
           }
         
         
        
         
 }



//Profile Update SKIP Process------End-----------------



 //Profile Update Escalate Process------Start----------------- 


if(isset($_POST['profile_update_escalate'])) 
          {
         extract($_POST);
      
    
         
    $data_history = array('emp_id'         => $this->session->userdata('emp_id'),
                     'ticket_id'      => $ticket_id,
                     'remark'         => $remarks,
                     'process_status' => "ESCALATE",
                     'promoting_policy' => $promoting_policy,
                     'promotion_id'    => @$this->fun->getnewfieldvalue('promotions','id','status','1'),
                     'status'         => 1
             );


          $emp_type=$this->session->userdata('emp_type');
        if($emp_type=='executive')
        {
          $resp='Manager';
        } elseif($emp_type=='manager')
        {
          $resp = 'Admin';
        }
    
    if($this->db->insert('ticket_picking_history',$data_history))
          {
                   
                           
      $this->db->update('ticket_bucket',array('process_status'=>'ESCALATE','status'=>'0','responsibility'=>$resp),array('ticket_id'=>$ticket_id,'order'=>3));
   
      
  
      $this->db->delete('ticket_picking',array('emp_id'=>$this->session->userdata('emp_id')));
      redirect('ticket/dashboard','refresh');

           } 
       else
       {
            
      
      return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Process Ticket </strong>
                  </div>';
           }
         
         
        
         
 }



//Profile Update Escalate Process------End-----------------



//Family Profile Check Process - Start ---


if(isset($_POST['family_profile_check_done'])) 
          {
         extract($_POST);

         $tid = mt_rand();
      
    $data_check = array('emp_id'            => $this->session->userdata('emp_id'),
                       'ticket_id'          => $tid,
                       //'remark'         => $remarks,
                       //'process_status' => "DONE",
                       //'promoting_policy' => $promoting_policy,
                      'ticket_max_id'       => $ticket_max_id,
                     'member_max_id'        => $member_max_id,
                     'family_member_max_id'        => $family_member_max_id,
                     'relationship'         => $relationship_radio,
                     'first_name'           => $first_name_radio,
                     'middle_name'          => $middle_name_radio,
                     'last_name'          => $last_name_radio, 
                    // 'email1'               => $email1_radio,
                    // 'email2'               => $email2_radio,
                     'mobile1'              => $mobile1_radio,
                     'mobile2'              => $mobile2_radio,
                     'mobile3'              => $mobile3_radio,
                     'recorded_dob'         => $recorded_dob_radio,
                     'actual_dob'           => $actual_dob_radio,
                     'aadhar_no'            => $aadhar_no_radio,
                     'aadhar_scan'          => $aadhar_scan_radio,
                     'pan_no'               => $pan_no_radio,
                     'pan_scan'             => $pan_scan_radio,
                     'voterid_no'           => $voterid_no_radio,
                     'voterid_scan'         => $voterid_scan_radio,
                     'license_no'           => $license_no_radio,
                     'license_expiry_date'  => $license_expiry_date_radio,
                     'license_scan'         => $license_scan_radio,
                     'passport_no'          => $passport_no_radio,
                     'passport_expiry_date' => $passport_expiry_date_radio,
                     'passport_scan'        => $passport_scan_radio,
                     //'state'                => $state_radio,
                    // 'district'             => $district_radio,
                     'status'               => 1

            );
     
           
         
         
         
    $data_history = array('emp_id'           => $this->session->userdata('emp_id'),
                          'ticket_id'        => $ticket_id,
                          'remark'           => $remarks,
                          'process_status'   => "DONE",
                          'promoting_policy' => $promoting_policy,
                          'promotion_id'    => @$this->fun->getnewfieldvalue('promotions','id','status','1'),
                          'status'           => 1
             );

        
    
    
    
    if($this->db->insert('ticket_picking_history',$data_history))
          {
              
          

        $tp= $this->db->get_where('ticket_process',array('ticket_type_id'=>$this->fun->getnewfieldvalue('ticket_type','id','name','Family Member Add'),'order'=>2))->row();

          $tdata = array('member_max_id'  => $member_max_id,
                         'family_member_max_id'  => $family_member_max_id,
                        'ticket_max_id'   => $ticket_max_id,
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
                        'ticket_from'   => 'individual',
                        'status'      =>0

        );
      
      
      $pdata = array('emp_id'         => $this->session->userdata('emp_id'),
                     'ticket_id'      => $ticket_id,
                     'remark'         => $remarks,
                     'process_status' => "DONE",
                     'promoting_policy' => $promoting_policy,
					 'points'=>$tp->points,
					 'status'         => 1

        ); 
      
     

      //$this->db->update('tickets',array('process_status'=>'DONE'),array('ticket_id'=>$ticket_id));
      $this->db->update('ticket_bucket',array('process_status'=>'DONE','status'=>'1'),array('ticket_id'=>$ticket_id));
      
    $this->db->insert('ticket_bucket',$tdata);
   
    $this->db->insert('check_family_registration',$data_check);
    $this->db->insert('ticket_points',$pdata);
      $this->db->delete('ticket_picking',array('emp_id'=>$this->session->userdata('emp_id')));
      redirect('ticket/dashboard','refresh');

           } 
       else
       {
            
      
      return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Process Ticket </strong>
                  </div>';
           }
         
         
         
         
         
         
         
         
         
         
         
 }




//Family Profile Check Process - End ---


//Family Profile Check SKIP Process - Start ---


if(isset($_POST['family_profile_check_skip'])) 
          {
         extract($_POST);

         
         
    $data_history = array('emp_id'           => $this->session->userdata('emp_id'),
                          'ticket_id'        => $ticket_id,
                          'remark'           => $remarks,
                          'process_status'   => "SKIP",
                          'promoting_policy' => $promoting_policy,
                          'promotion_id'    => @$this->fun->getnewfieldvalue('promotions','id','status','1'),
                          'status'           => 1
             );

        
    
    
    
    if($this->db->insert('ticket_picking_history',$data_history))
          {
              
          
      
      $this->db->update('ticket_bucket',array('process_status'=>'SKIP','status'=>'0'),array('ticket_id'=>$ticket_id));
      
    
      $this->db->delete('ticket_picking',array('emp_id'=>$this->session->userdata('emp_id')));
      redirect('ticket/dashboard','refresh');

           } 
       else
       {
            
      
      return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Process Ticket </strong>
                  </div>';
           }
         
         
         
         
 }


//Family Profile Check SKIP Process - End ---


 //Family Profile Check ESCALATE Process - Start ---


if(isset($_POST['family_profile_check_escalate'])) 
          {
         extract($_POST);

         
         
    $data_history = array('emp_id'           => $this->session->userdata('emp_id'),
                          'ticket_id'        => $ticket_id,
                          'remark'           => $remarks,
                          'process_status'   => "ESCALATE",
                          'promoting_policy' => $promoting_policy,
                          'promotion_id'    => @$this->fun->getnewfieldvalue('promotions','id','status','1'),
                          'status'           => 1
             );

        
    
        $emp_type=$this->session->userdata('emp_type');
        if($emp_type=='executive')
        {
          $resp='Manager';
        } elseif($emp_type=='manager')
        {
          $resp = 'Admin';
        }
    
    
    if($this->db->insert('ticket_picking_history',$data_history))
          {
              
          
      
      $this->db->update('ticket_bucket',array('process_status'=>'ESCALATE','status'=>'0','responsibility'=>$resp),array('ticket_id'=>$ticket_id));
      
    
      $this->db->delete('ticket_picking',array('emp_id'=>$this->session->userdata('emp_id')));
      redirect('ticket/dashboard','refresh');

           } 
       else
       {
            
      
      return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Process Ticket </strong>
                  </div>';
           }
         
         
         
         
 }


//Family Profile Check ESCALATE Process - End ---


//Family Profile Update Process -- Start--

if(isset($_POST['family_profile_update_done'])) 
          {
         extract($_POST);
      
    $data_check = array('emp_id'            => $this->session->userdata('emp_id'),
                       'ticket_id'          => $ticket_id,
                      'ticket_max_id'       => $ticket_max_id,
                     'member_max_id'        => $member_max_id,
                     'family_member_max_id'  => $family_member_max_id,
                     'relationship'         => $relationship_radio,
                     'first_name'           => $first_name_radio,
                     'middle_name'          => $middle_name_radio,
                     'last_name'            => $last_name_radio,
                     'mobile1'              => $mobile1_radio,
                     'mobile2'              => $mobile2_radio,
                     'mobile3'              => $mobile3_radio,
                     'recorded_dob'         => $recorded_dob_radio,
                     'actual_dob'           => $actual_dob_radio,
                     'aadhar_no'            => $aadhar_no_radio,
                     'aadhar_scan'          => $aadhar_scan_radio,
                     'pan_no'               => $pan_no_radio,
                     'pan_scan'             => $pan_scan_radio,
                     'voterid_no'           => $voterid_no_radio,
                     'voterid_scan'         => $voterid_scan_radio,
                     'license_no'           => $license_no_radio,
                     'license_expiry_date'  => $license_expiry_date_radio,
                     'license_scan'         => $license_scan_radio,
                     'passport_no'          => $passport_no_radio,
                     'passport_expiry_date' => $passport_expiry_date_radio,
                     'passport_scan'        => $passport_scan_radio,
                     'status'               => 1

            );

    
     
           
         $data_ind = array('first_name'           => $first_name,
                           'middle_name'          => $middle_name,
                           'last_name'            => $last_name,
                           'mobile1'              => $mobile1,
                           'mobile2'              => $mobile2,
                           'mobile3'              => $mobile3,
                           'recorded_dob'         => $recorded_dob,
                           'actual_dob'           => $actual_dob,
                           'aadhar_no'            => $aadhar_no,
                           'pan_no'               => $pan_no,
                           'voterid_no'           => $voterid_no,
                           'license_no'           => $license_no,
                           'license_expiry_date'  => $license_expiry_date,
                           'passport_no'          => $passport_no,
                           'passport_expiry_date' => $passport_expiry_date,
                           'status'               => 1

                            );
     
         
         
    $data_history = array( 'emp_id'           => $this->session->userdata('emp_id'),
                           'ticket_id'        => $ticket_id,
                           'remark'           => $remarks,
                           'process_status'   => "DONE",
                           'promoting_policy' => $promoting_policy,
                           'promotion_id'    => @$this->fun->getnewfieldvalue('promotions','id','status','1'),
                           'status'           => 1
                   );

        
    
    
    
    if($this->db->insert('ticket_picking_history',$data_history))
          {
              
         

        $tp= $this->db->get_where('ticket_process',array('ticket_type_id'=>$this->fun->getnewfieldvalue('ticket_type','id','name','Registration'),'order'=>3))->row();

          $tdata = array('member_max_id'  => $member_max_id,
                         'family_member_max_id'  => $family_member_max_id,
                        'ticket_max_id'   => $ticket_max_id,
                        'ticket_id' => $ticket_id,
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
      
      
      
      $pdata = array('emp_id'         => $this->session->userdata('emp_id'),
                     'ticket_id'      => $ticket_id,
                     'remark'         => $remarks,
                     'process_status' => "DONE",
                     'promoting_policy' => $promoting_policy,
					 'points'=>$tp->points,
					 'status'         => 1

        ); 
     

      //$this->db->update('tickets',array('process_status'=>'DONE'),array('ticket_id'=>$ticket_id));
          if(in_array('No',$data_check))
          {
      $this->db->update('ticket_bucket',array('process_status'=>'Pending','status'=>'0'),array('ticket_id'=>$ticket_id,'order'=>2));
    } else {
      $this->db->update('ticket_bucket',array('process_status'=>'DONE','status'=>'1'),array('ticket_id'=>$ticket_id,'order'=>2));
    }
      
   // $this->db->insert('ticket_bucket',$tdata);
   
   $this->db->update('check_family_registration',$data_check,array('ticket_id'=>$ticket_id));
   $this->db->update('ind_family',$data_ind,array('family_member_max_id'=>$family_member_max_id));

$this->db->insert('ticket_points',$pdata);

      $this->db->delete('ticket_picking',array('emp_id'=>$this->session->userdata('emp_id')));
      redirect('ticket/dashboard','refresh');

           } 
       else
       {
            
      
      return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Process Ticket </strong>
                  </div>';
           }
         
         
 }

 //Family Profile Update Process -- End ---


//Family Profile Update Skip Process -- Start--

if(isset($_POST['family_profile_update_skip'])) 
          {
         extract($_POST);
         
    $data_history = array( 'emp_id'           => $this->session->userdata('emp_id'),
                           'ticket_id'        => $ticket_id,
                           'remark'           => $remarks,
                           'process_status'   => "SKIP",
                           'promoting_policy' => $promoting_policy,
                           'promotion_id'    => @$this->fun->getnewfieldvalue('promotions','id','status','1'),
                           'status'           => 1
                   );

        
    
    
    
    if($this->db->insert('ticket_picking_history',$data_history))
          {
          
      $this->db->update('ticket_bucket',array('process_status'=>'SKIP','status'=>'0'),array('ticket_id'=>$ticket_id,'order'=>2));
   
      
        $this->db->delete('ticket_picking',array('emp_id'=>$this->session->userdata('emp_id')));
      redirect('ticket/dashboard','refresh');

           } 
       else
       {
            
      
      return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Process Ticket </strong>
                  </div>';
           }
         
         
 }

 //Family Profile Update Skip Process -- End ---


  //Family Profile Update Escalate Process -- Start--

if(isset($_POST['family_profile_update_escalate'])) 
          {
         extract($_POST);
         
    $data_history = array( 'emp_id'           => $this->session->userdata('emp_id'),
                           'ticket_id'        => $ticket_id,
                           'remark'           => $remarks,
                           'process_status'   => "ESCALATE",
                           'promoting_policy' => $promoting_policy,
                           'promotion_id'    => @$this->fun->getnewfieldvalue('promotions','id','status','1'),
                           'status'           => 1
                   );

        
    
        $emp_type=$this->session->userdata('emp_type');
        if($emp_type=='executive')
        {
          $resp='Manager';
        } elseif($emp_type=='manager')
        {
          $resp = 'Admin';
        }
    
    
    if($this->db->insert('ticket_picking_history',$data_history))
          {
          
      $this->db->update('ticket_bucket',array('process_status'=>'ESCALATE','status'=>'0','responsibility'=>$resp),array('ticket_id'=>$ticket_id,'order'=>2));
   
      
        $this->db->delete('ticket_picking',array('emp_id'=>$this->session->userdata('emp_id')));
      redirect('ticket/dashboard','refresh');

           } 
       else
       {
            
      
      return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Process Ticket </strong>
                  </div>';
           }
         
         
 }

 //Family Profile Update Escalate Process -- End ---


//Policy Check Done Process -- Start--

if(isset($_POST['policy_check_done'])) 
          {
         extract($_POST);        
     
         //print_r($_POST);
         
    $data_history = array( 'emp_id'           => $this->session->userdata('emp_id'),
                           'ticket_id'        => $ticket_id,
                           'remark'           => $remarks,
                           'process_status'   => "DONE",
                           'promoting_policy' => $promoting_policy,
                           'promotion_id'    => @$this->fun->getnewfieldvalue('promotions','id','status','1'),
                           'status'           => 1
                   );

        
    
    
    
    if($this->db->insert('ticket_picking_history',$data_history))
          {
              
         

     
          
      $this->db->update('ticket_bucket',array('process_status'=>'DONE','status'=>'1'),array('ticket_id'=>$ticket_id,'order'=>1));
          
   
      $this->db->delete('ticket_picking',array('emp_id'=>$this->session->userdata('emp_id')));

      redirect('ticket/dashboard','refresh');

           } 
       else
       {
            
      
      return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Process Ticket </strong>
                  </div>';
           }
         
         
 }

 //Policy Check Done Process -- End ---


 //Policy Check SKIP Process -- Start--

if(isset($_POST['policy_check_skip'])) 
          {
         extract($_POST);        
     
                  
    $data_history = array( 'emp_id'           => $this->session->userdata('emp_id'),
                           'ticket_id'        => $ticket_id,
                           'remark'           => $remarks,
                           'process_status'   => "SKIP",
                           'promoting_policy' => $promoting_policy,
                           'promotion_id'    => @$this->fun->getnewfieldvalue('promotions','id','status','1'), 
                           'status'           => 1
                   );

        
    
    
    
    if($this->db->insert('ticket_picking_history',$data_history))
          {
              
          
      $this->db->update('ticket_bucket',array('process_status'=>'SKIP','status'=>'0'),array('ticket_id'=>$ticket_id,'order'=>1));
          
   
      $this->db->delete('ticket_picking',array('emp_id'=>$this->session->userdata('emp_id')));

      redirect('ticket/dashboard','refresh');

           } 
       else
       {
            
      
      return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Process Ticket </strong>
                  </div>';
           }
         
         
 }

 //Policy Check SKIP Process -- End ---



  //Policy Check Escalate Process -- Start--

if(isset($_POST['policy_check_escalate'])) 
          {
         extract($_POST);        
     
                  
    $data_history = array( 'emp_id'           => $this->session->userdata('emp_id'),
                           'ticket_id'        => $ticket_id,
                           'remark'           => $remarks,
                           'process_status'   => "ESCALATE",
                           'promoting_policy' => $promoting_policy,
                           'promotion_id'    => @$this->fun->getnewfieldvalue('promotions','id','status','1'),
                           'status'           => 1
                   );

        $emp_type=$this->session->userdata('emp_type');
        if($emp_type=='executive')
        {
          $resp='Manager';
        } elseif($emp_type=='manager')
        {
          $resp = 'Admin';
        }
    
    
    if($this->db->insert('ticket_picking_history',$data_history))
          {
              
          
      $this->db->update('ticket_bucket',array('process_status'=>'ESCALATE','status'=>'0','responsibility'=>$resp),array('ticket_id'=>$ticket_id,'order'=>1));
          
   
      $this->db->delete('ticket_picking',array('emp_id'=>$this->session->userdata('emp_id')));

      redirect('ticket/dashboard','refresh');

           } 
       else
       {
            
      
      return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Process Ticket </strong>
                  </div>';
           }
         
         
 }

 //Policy Check Escalate Process -- End ---



 //Policy Check POSTPONE Process -- Start--

if(isset($_POST['policy_check_postpone'])) 
          {
         extract($_POST);        
     
                  
    $data_history = array( 'emp_id'           => $this->session->userdata('emp_id'),
                           'ticket_id'        => $ticket_id,
                           'remark'           => $remarks,
                           'process_status'   => "POSTPONE",
                           'postpone'         => $postpone,
                           'promoting_policy' => $promoting_policy,
                           'promotion_id'    => @$this->fun->getnewfieldvalue('promotions','id','status','1'),
                           'status'           => 1
                   );

        
    
    
    
    if($this->db->insert('ticket_picking_history',$data_history))
          {
              
          
      $this->db->update('ticket_bucket',array('process_status'=>'POSTPONE','status'=>'0','postpone'=>$postpone),array('ticket_id'=>$ticket_id,'order'=>1));
          
   
      $this->db->delete('ticket_picking',array('emp_id'=>$this->session->userdata('emp_id')));

      redirect('ticket/dashboard','refresh');

           } 
       else
       {
            
      
      return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Process Ticket </strong>
                  </div>';
           }
         
         
 }

 //Policy Check POSTPONE Process -- End ---




 //HR Tickets Start

  if(isset($_POST['endorsement_done'])) 
          {
         extract($_POST); 

    $data_history = array( 'emp_id'           => $this->session->userdata('emp_id'),
                           'ticket_id'        => $ticket_id,
                           'remark'           => $remarks,
                           'process_status'   => "DONE",
                            'points'=>$points,
                           'promoting_policy' => $promoting_policy,
                           'promotion_id'    => @$this->fun->getnewfieldvalue('promotions','id','status','1'), 
                           'status'           => 1
                   );

        
    
    
    
    if($this->db->insert('ticket_picking_history',$data_history))
          {
              
$message = "Your Endorsement (".$ticket_id.") has been processed. More details @ 'Insurance Servicing Portal' login http://mallapuram.co.in/cis/hr";

  $this->fun->sendSMS($this->fun->getnewfieldvalue('corporate_client','authorised_contact_person1_phone','id',$client_id),$message);          

      $this->db->update('ticket_bucket',array('process_status'=>'DONE','status'=>'1'),array('ticket_id'=>$ticket_id,'order'=>1));
          
   $this->db->insert('ticket_points',$data_history);

      $this->db->delete('ticket_picking',array('emp_id'=>$this->session->userdata('emp_id')));

      redirect('ticket/dashboard','refresh');

           } 
       else
       {
            
      
      return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Process Ticket </strong>
                  </div>';
           }
         
         
 }


 if(isset($_POST['endorsement_skip'])) 
          {
         extract($_POST);        
     
                  
    $data_history = array( 'emp_id'           => $this->session->userdata('emp_id'),
                           'ticket_id'        => $ticket_id,
                           'remark'           => $remarks,
                           'process_status'   => "SKIP",
                           'promoting_policy' => $promoting_policy,
                           'promotion_id'    => @$this->fun->getnewfieldvalue('promotions','id','status','1'),
                           'status'           => 1
                   );

        
    
    
    
    if($this->db->insert('ticket_picking_history',$data_history))
          {
              
          
      $this->db->update('ticket_bucket',array('process_status'=>'SKIP','status'=>'0'),array('ticket_id'=>$ticket_id,'order'=>1));
          
   
      $this->db->delete('ticket_picking',array('emp_id'=>$this->session->userdata('emp_id')));

$message = "Your Endorsement (".$ticket_id.") is been followed up for completion with Insurance Company. More details @ 'Insurance Servicing Portal' login http://mallapuram.co.in/cis/hr";

  $this->fun->sendSMS($this->fun->getnewfieldvalue('corporate_client','authorised_contact_person1_phone','id',$client_id),$message);


      redirect('ticket/dashboard','refresh');

           } 
       else
       {
            
      
      return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Process Ticket </strong>
                  </div>';
           }
         
         
 }


 

if(isset($_POST['endorsement_escalate'])) 
          {
         extract($_POST);        
     
                  
    $data_history = array( 'emp_id'           => $this->session->userdata('emp_id'),
                           'ticket_id'        => $ticket_id,
                           'remark'           => $remarks,
                           'process_status'   => "ESCALATE",
                           'promoting_policy' => $promoting_policy,
                           'promotion_id'    => @$this->fun->getnewfieldvalue('promotions','id','status','1'),
                           'status'           => 1
                   );

        $emp_type=$this->session->userdata('emp_type');
        if($emp_type=='executive')
        {
          $resp='Manager';
        } elseif($emp_type=='manager')
        {
          $resp = 'Admin';
        }
    
    
    if($this->db->insert('ticket_picking_history',$data_history))
          {
              
          
      $this->db->update('ticket_bucket',array('process_status'=>'ESCALATE','status'=>'0','responsibility'=>$resp),array('ticket_id'=>$ticket_id,'order'=>1));
          
$message = "Your Endorsement (".$ticket_id.") is been followed up for completion with Insurance Company. More details @ 'Insurance Servicing Portal' login http://mallapuram.co.in/cis/hr";

  $this->fun->sendSMS($this->fun->getnewfieldvalue('corporate_client','authorised_contact_person1_phone','id',$client_id),$message);

   
      $this->db->delete('ticket_picking',array('emp_id'=>$this->session->userdata('emp_id')));

      redirect('ticket/dashboard','refresh');

           } 
       else
       {
            
      
      return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Process Ticket </strong>
                  </div>';
           }
         
         
 }


 if(isset($_POST['endorsement_postpone'])) 
          {
         extract($_POST);        
     
    // var_dump($_POST); exit();
                  
    $data_history = array( 'emp_id'           => $this->session->userdata('emp_id'),
                           'ticket_id'        => $ticket_id,
                           'remark'           => $remarks,
                           'process_status'   => "POSTPONE",
                           'postpone'         => $postpone,
                           'promoting_policy' => $promoting_policy,
                           'promotion_id'    => @$this->fun->getnewfieldvalue('promotions','id','status','1'),
                           'status'           => 1
                   );

        
    
    
    
    if($this->db->insert('ticket_picking_history',$data_history))
          {
              
          
      $this->db->update('ticket_bucket',array('process_status'=>'POSTPONE','status'=>'0','postpone'=>$postpone),array('ticket_id'=>$ticket_id,'order'=>1));
          
   
$message = "Your Endorsement (".$ticket_id.") is been followed up for completion with Insurance Company. More details @ 'Insurance Servicing Portal' login http://mallapuram.co.in/cis/hr";

  $this->fun->sendSMS($this->fun->getnewfieldvalue('corporate_client','authorised_contact_person1_phone','id',$client_id),$message);


      $this->db->delete('ticket_picking',array('emp_id'=>$this->session->userdata('emp_id')));

      redirect('ticket/dashboard','refresh');

           } 
       else
       {
            
      
      return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Process Ticket </strong>
                  </div>';
           }
         
         
 }


 if(isset($_POST['claim_done'])) 
          {
         extract($_POST); 

    $data_history = array( 'emp_id'           => $this->session->userdata('emp_id'),
                           'ticket_id'        => $ticket_id,
                           'remark'           => $remarks,
                           'process_status'   => "DONE",
                           'promoting_policy' => $promoting_policy,
                           'promotion_id'    => @$this->fun->getnewfieldvalue('promotions','id','status','1'),
                           'points' => $points, 
                           'status'           => 1
                   );

        
    
    
    
    if($this->db->insert('ticket_picking_history',$data_history))
          {
              
          
      $this->db->update('ticket_bucket',array('process_status'=>'DONE','status'=>'1'),array('ticket_id'=>$ticket_id,'order'=>1));
          
          $this->db->insert('ticket_points',$data_history);
   
      $this->db->delete('ticket_picking',array('emp_id'=>$this->session->userdata('emp_id')));

      redirect('ticket/dashboard','refresh');

           } 
       else
       {
            
      
      return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Process Ticket </strong>
                  </div>';
           }
         
         
 }


 if(isset($_POST['claim_skip'])) 
          {
         extract($_POST);        
     
                  
    $data_history = array( 'emp_id'           => $this->session->userdata('emp_id'),
                           'ticket_id'        => $ticket_id,
                           'remark'           => $remarks,
                           'process_status'   => "SKIP",
                           'promoting_policy' => $promoting_policy,
                           'promotion_id'    => @$this->fun->getnewfieldvalue('promotions','id','status','1'),
                           'status'           => 1
                   );

        
    
    
    
    if($this->db->insert('ticket_picking_history',$data_history))
          {
              
          
      $this->db->update('ticket_bucket',array('process_status'=>'SKIP','status'=>'0'),array('ticket_id'=>$ticket_id,'order'=>1));
          
   
      $this->db->delete('ticket_picking',array('emp_id'=>$this->session->userdata('emp_id')));

      redirect('ticket/dashboard','refresh');

           } 
       else
       {
            
      
      return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Process Ticket </strong>
                  </div>';
           }
         
         
 }


 

if(isset($_POST['claim_escalate'])) 
          {
         extract($_POST);        
     
                  
    $data_history = array( 'emp_id'           => $this->session->userdata('emp_id'),
                           'ticket_id'        => $ticket_id,
                           'remark'           => $remarks,
                           'process_status'   => "ESCALATE",
                           'promoting_policy' => $promoting_policy,
                           'promotion_id'    => @$this->fun->getnewfieldvalue('promotions','id','status','1'),
                           'status'           => 1
                   );

        $emp_type=$this->session->userdata('emp_type');
        if($emp_type=='executive')
        {
          $resp='Manager';
        } elseif($emp_type=='manager')
        {
          $resp = 'Admin';
        }
    
    
    if($this->db->insert('ticket_picking_history',$data_history))
          {
              
          
      $this->db->update('ticket_bucket',array('process_status'=>'ESCALATE','status'=>'0','responsibility'=>$resp),array('ticket_id'=>$ticket_id,'order'=>1));
          
   
      $this->db->delete('ticket_picking',array('emp_id'=>$this->session->userdata('emp_id')));

      redirect('ticket/dashboard','refresh');

           } 
       else
       {
            
      
      return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Process Ticket </strong>
                  </div>';
           }
         
         
 }


 if(isset($_POST['claim_postpone'])) 
          {
         extract($_POST);        
     
    // var_dump($_POST); exit();
                  
    $data_history = array( 'emp_id'           => $this->session->userdata('emp_id'),
                           'ticket_id'        => $ticket_id,
                           'remark'           => $remarks,
                           'process_status'   => "POSTPONE",
                           'postpone'         => $postpone,
                           'promoting_policy' => $promoting_policy,
                           'promotion_id'    => @$this->fun->getnewfieldvalue('promotions','id','status','1'),
                           'status'           => 1
                   );

        
    
    
    
    if($this->db->insert('ticket_picking_history',$data_history))
          {
              
          
      $this->db->update('ticket_bucket',array('process_status'=>'POSTPONE','status'=>'0','postpone'=>$postpone),array('ticket_id'=>$ticket_id,'order'=>1));
          
   
      $this->db->delete('ticket_picking',array('emp_id'=>$this->session->userdata('emp_id')));

      redirect('ticket/dashboard','refresh');

           } 
       else
       {
            
      
      return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Process Ticket </strong>
                  </div>';
           }
         
         
 }

 

 //HR Tickets End



























   //Endorsement Ticket Start


  if(isset($_POST['create_endorsment'])) 
    {
       extract($_POST);

  
     $member_id=$this->session->userdata('login');
   // $user=$this->db->get_where('ind_registration',array('id'=>$member_id))->row();
     $service_type="existing";
     $max_id=mt_rand();
    
    $data = array( 'member_id' => $member_max_id,
           'max_id'=>$max_id,
           'service_type' => $service_type,
           'policy_id' => $policy_max_id,
           'category' => $endorsement_text,
                     'comments'=> $endorsement_text,
                     'status'=> 0

        );
     
        

      if($this->db->insert('ind_service_request',$data)) 
          {
            
        
        
         $tmaxid = mt_rand();
         $tid = mt_rand();
         $endmaxid = mt_rand();
 $tp= $this->db->get_where('ticket_process',array('ticket_type_id'=>$this->fun->getnewfieldvalue('ticket_type','id','name','Existing Policy Request'),'order'=>1))->row();

    
    $tdata = array(  'member_max_id'  =>$member_max_id,
                   'ticket_max_id'   => $tmaxid,
                       'ticket_id' => $tid,
                       'policy_max_id' => $policy_max_id,
                       'endorsement_max_id'  =>$endmaxid,
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
      
      $this->db->insert('ticket_bucket',$tdata);    
                
              
         
         return $emsg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong> Existing Policy Request Added Successfully</strong>
                  </div>';
      
       
      
      
      
      } else {
            return $emsg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Create Existing Policy Request</strong>
                  </div>';
          }

    }

 //Endorsement Ticket End



}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 function ticket_check()
  {
    $chk = $this->db->get_where('ticket_picking',array('emp_id'=>$this->session->userdata('emp_id')))->row();
                      
            if($chk){
                       
            
                        $info = $this->db->get_where('ticket_picking',array('ticket_max_id'=>$chk->ticket_max_id))->row();

                      }else{
                      
                                             $info = $this->db->order_by('id','asc')->get_where('ticket_bucket',array('status'=>0))->row();
                                             if(@$info->id){
                                              $data=array('emp_id'=>$this->session->userdata('emp_id'),
                                                'member_max_id'=>$info->member_max_id,
                                                'ticket_max_id' =>$info->ticket_max_id,
                                                'ticket_process_id' => $info->ticket_process_id,
                                                'ticket_id' => $info->ticket_id);

                                              if($this->db->insert('ticket_picking',$data)){

                                                $this->db->update('tickets',array('status'=>1),array('ticket_max_id'=>$info->ticket_max_id));
                                                $this->db->update('ticket_bucket',array('status'=>1),array('ticket_max_id'=>$info->ticket_max_id));
                                              }
                                          }
                                        } return $info;
  
  
  
  
  
  
  
  
  
  
  
  }



























}
?>