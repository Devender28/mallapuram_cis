<?php 

class Employeemodel extends CI_Model {
   
   function __construct()
    {
        parent::__construct();

    }

	
	
	  
	  function login(){
       if(isset($_POST['login'])){

        extract($_POST);
        $user = $this->db->get_where('corporate_employee', array('email'=>$email, 'phone'=>$password))->row();
        if($user){ 
         $this->session->set_userdata('employee_id',$user->employee_id);
		 $this->session->set_userdata('corporate_id',$user->corporate_id);
         redirect('employee/dashboard', 'refresh');

        }
		else
		{
		
		return $msg='<div class="alert alert-danger alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <p><i class="fa fa-check"></i> Invalid Login Details!</p>
                                    </div>'.$email.''.$password;
		}

      }

    }
	








function getMember()

    {
    
	return $this->db->get_where('corporate_employee',array('employee_id'=>$this->session->userdata('employee_id'),'corporate_id'=>$this->session->userdata('corporate_id'),'relation'=>'self'))->row();
   
   }







function all_family_members(){
	
	
	return $this->db->group_by('relation')->get_where('corporate_employee',array('employee_id'=>$this->session->userdata('employee_id'),'corporate_id'=>$this->session->userdata('corporate_id'),'relation !='=>'self'))->result();
   
  }



  


function all_policies()
  {
    return $this->db->get_where('corporate_employee',array('employee_id'=>$this->session->userdata('employee_id'),'corporate_id'=>$this->session->userdata('corporate_id'),'relation'=>'self'))->result();
  }

  


  function employee_feedback()
  {
    if(isset($_POST['feedback_submit']))
    {
      extract($_POST);

      $data = array( 'remark'     => $remark,
                     'suggestion' => $suggestion, 
                     'rating'     => $rating,
                     'flag'       => 'employee',
                     'client_id'  => $this->session->userdata('corporate_id'),
                     'employee_id'=> $this->session->userdata('employee_id'),
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


   function employee_feedbacks(){
    return $this->db->order_by('id','desc')->get_where('feedback',array('client_id'=>$this->session->userdata('corporate_id'),'employee_id'=>$this->session->userdata('employee_id')))->result();
   }


   function idcards_pdf()
   {

   
  $all = $this->db->group_by('relation')->get_where('corporate_employee',array('employee_id'=>$this->session->userdata('employee_id'),'corporate_id'=>$this->session->userdata('corporate_id'),'policy_id'=>$this->uri->segment(3)))->result();


  
   }







}
?>