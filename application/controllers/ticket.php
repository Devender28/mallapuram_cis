<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ticket extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

   
   


      
       public function add_ticket_type()
       {
          
        $data['msg']  = $this->ticketmodel->add_ticket_type();

        $this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
        $this->load->view('ticket_pages/ticket_type',$data);
        $this->load->view('includes/footer');
       } 

       public function edit_ticket_type()
       {
          
        $data['msg']  = $this->ticketmodel->edit_ticket_type();
        $data['type'] = $this->ticketmodel->get_ticket_type();

        $this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
        $this->load->view('ticket_pages/edit_ticket_type',$data);
        $this->load->view('includes/footer');
       } 

       public function ticket_types()
       {
          
        $data['types']  = $this->ticketmodel->all_ticket_types();
        $data['Table'] = "ticket_type";

        $this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
        $this->load->view('ticket_pages/ticket_type_list',$data);
        $this->load->view('includes/footer');
       } 


       public function add_ticket_process()
       {
          
        $data['msg']  = $this->ticketmodel->add_ticket_process();
        $data['types']  = $this->ticketmodel->all_ticket_types();

        $this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
        $this->load->view('ticket_pages/ticket_process',$data);
        $this->load->view('includes/footer');
       } 

       public function edit_ticket_process()
       {
          
        $data['msg']  = $this->ticketmodel->edit_ticket_process();
        $data['types']  = $this->ticketmodel->all_ticket_types();
        $data['pro']  = $this->ticketmodel->get_ticket_process();

        $this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
        $this->load->view('ticket_pages/edit_ticket_process',$data);
        $this->load->view('includes/footer');
       } 


       public function ticket_process()
       {
          
        $data['process']  = $this->ticketmodel->all_ticket_process();
        $data['Table'] = "ticket_process";

        $this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
        $this->load->view('ticket_pages/ticket_process_list',$data);
        $this->load->view('includes/footer');
       } 


       public function profileticket()
       {

        $this->load->view('includes/ticket/header');
        //$this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
        $this->load->view('admin_pages/profile-ticket-details');
        $this->load->view('includes/ticket/footer');
       }



       public function index()
	{
		    
	if($this->session->userdata('ticketsystem_login')){
           redirect('ticket/dashboard', 'refresh');
    }
    $data['msg']=$this->ticketmodel->login();
	//$this->load->view('includes/header1.php');
	$this->load->view('ticket_pages/index',$data);
    
	}

  

	


public function dashboard()
    {
      
 		
		$this->load->view('includes/ticket/header');
        //$this->load->view('includes/leftmenubar');
        $this->load->view('includes/ticket/righttopbar');
        $this->load->view('ticket_pages/dashboard');
        $this->load->view('includes/footer');

}	


       


public function dashboard_notickets()
    {
      
 		
		$this->load->view('includes/ticket/header');
        //$this->load->view('includes/leftmenubar');
        $this->load->view('includes/ticket/righttopbar');
        $this->load->view('ticket_pages/dashboard_notickets');
        $this->load->view('includes/footer');

}










public function pick_ticket()
       {
          
        $data['msg']  = $this->ticketmodel->ticket_welcome();

		    $this->load->view('includes/ticket/header');
        $this->load->view('ticket_pages/welcome',$data);
        
		
        $this->load->view('includes/footer');
       } 
        
		
		
public function logout(){

        $this->session->unset_userdata('ticketsystem_login');
           //$this->session->sess_destroy();
         redirect('ticket', 'refresh');

         }



public function add_individual() 
  {

        $data['msg'] = $this->mallapurammodel->add_individual_user();

       
        $this->load->view('includes/manager/header');
        $this->load->view('includes/manager/leftmenubar');
        
        $this->load->view('manager_pages/add_individual_user',$data);
        $this->load->view('includes/footer');

  }


  public function add_individual_policy() 
  {

        $data['msg'] = $this->mallapurammodel->add_ind_policy();
        $data['registered_members']=$this->mallapurammodel->all_registered_members();
        $data['inc_companies'] = $this->mallapurammodel->all_insurance_companies();

        $this->load->view('includes/manager/header');
        $this->load->view('includes/manager/leftmenubar');
        
        $this->load->view('manager_pages/add_policy_individual',$data);
        $this->load->view('includes/footer');

  }


  public function getIndPolicy()
    {
         
         
         $cmp=$_POST['id'];
         

         $pcs=$this->db->get_where('insurance_policy', array('category' => 'Individual','company'=>$cmp,'status'=>1))->result();

         foreach($pcs as $pc){

            echo '<option value="'.$pc->id.'">'.$pc->name.'</option>';
         }
          


    }









}





?>