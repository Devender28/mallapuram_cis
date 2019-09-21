<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Individual extends CI_Controller {

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

   
   public function index()
	{
		    
	if($this->session->userdata('login')){
           redirect('dashboard', 'refresh');
    }
    $data['msg']=$this->individualmodel->login();
	//$this->load->view('includes/header1.php');
	$this->load->view('index',$data);
    
	}

  
  
public function status()
  {
    $id=$_POST['x'];
    $st=$_POST['y'];
    $tb = $_POST['z'];
    $data = array( 'status' => $st);
    if($this->db->update($this->encrypt->decode($tb),$data,array('id' =>$id)))
    {
      echo '1';
    } else {
      echo '0';
    }
  }




public function delete()

  {  if (isset($_POST['x'])) {

    $id=$_POST['x'];
   
    $table=$_POST['bdr'];

    if ($this->db->delete($this->encrypt->decode($table),array('id'=>$id))) {

    echo 1;

  }else echo 0;
    
 }
}
  
  
  
  
  
  
 public function changepassword(){


    //	$this->load->model('adminmodel');

    	$data['msg']=$this->individualmodel->password_change();

    	$this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
        $this->load->view('changepassword',$data);
        $this->load->view('includes/footer');

    }  
  
  
  
  
  
  
  public function register()
    {
       
    
        $data['msg'] = $this->individualmodel->register();
        $this->load->view('register',$data);
       

} 

   public function forgot_password()
  {
    $data['msg'] = $this->individualmodel->forgot_password();
    $this->load->view('forgot_password',$data);
  }



 public function reset_password()
  {
    $data['msg'] = $this->individualmodel->reset_password();
    $this->load->view('reset_password',$data);
  }
  












public function logout(){
         //$this->session->unset_userdata('login');
           $this->session->sess_destroy();
         redirect('', 'refresh');
         }
	


public function dashboard()
    {
       
 		$data['dependents'] = $this->fun->dependentsCount();
        $data['policies'] = $this->fun->policiesCount();
        $data['requests'] = $this->fun->requestsCount();
        $data['shares'] = $this->fun->appsahreCount();

		$this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
        $this->load->view('dashboard',$data);
        $this->load->view('includes/footer');

}	




  public function profile()
    {
       
        //$data['member'] = $this->fun->getMember($this->session->userdata('login'));
        $data['member']=$this->db->get_where('ind_registration',array('max_id'=>$this->session->userdata('login')))->row();

        $this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
        $this->load->view('profile',$data);
        $this->load->view('includes/footer');

} 

public function edit_profile()
    {
        $data['msg']=$this->individualmodel->update_profile();
        $data['member']=$this->db->get_where('ind_registration',array('max_id'=>$this->session->userdata('login')))->row();
    
        $this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
        $this->load->view('profile_edit',$data);
        $this->load->view('includes/footer');

} 


  public function add_policy()
 {
        $data['msg'] = $this->individualmodel->add_policy();
        $data['inc_companies'] = $this->individualmodel->all_inccompanies();

        $this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
        $this->load->view('add_policy',$data);
        $this->load->view('includes/footer');
 }

 public function edit_policy()
 {
        $data['msg'] = $this->individualmodel->update_policy();
        $data['inc_companies'] = $this->individualmodel->all_inccompanies();
        $data['policy'] = $this->individualmodel->get_policy();

        $this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
        $this->load->view('edit_policy',$data);
        $this->load->view('includes/footer');
 }



public function getPolicy()
    {
         
         
         $cmp=$_POST['id'];
         

         $pcs=$this->db->get_where('insurance_policy', array('category' => 'Individual','company'=>$cmp,'status'=>1))->result();

         foreach($pcs as $pc){

            echo '<option value="'.$pc->id.'">'.$pc->name.'</option>';
         }
          


    }


    public function policies_view()
 {
        
        $data['policies'] = $this->individualmodel->ind_all_policies();

        $this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
        $this->load->view('policies_view',$data);
        $this->load->view('includes/footer');
 }


  public function viewindpolicy()
    {
         
         $id=$_POST['id'];
         $data['policy']=$this->db->get_where('ind_policy', array('id' => $id))->row();
         $this->load->view('popups/view_policy',$data);    


    }



public function family_members()
    {
      
	   
	   $data['family_members']=$this->individualmodel->all_family_members();
	   
	   $data['Table']='ind_family';
	   
 		$this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
        $this->load->view('family_members',$data);
        $this->load->view('includes/footer');

  }










public function add_family_member()
    {
       
 		
		$data['msg']=$this->individualmodel->add_family_member();
 		//$data['corporate_clients']=$this->mallapurammodel->all_corporate_clients();
		//$data['corporate_employees']=$this->mallapurammodel->all_corporate_employees();
	    //$data['corporate_employees_families']=$this->mallapurammodel->all_corporate_employees_family();
	    $data['Table']='ind_family';
		
		
		
		
		
		
		$this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
        $this->load->view('add_family_member',$data);
        $this->load->view('includes/footer');

}	



public function edit_family_member()
    {
       
 		
		$data['msg']=$this->individualmodel->update_family_member();
 		$data['family_member']=$this->individualmodel->get_family_member();
	    $data['Table']='ind_family';
		
		$this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
        $this->load->view('edit_family_member',$data);
        $this->load->view('includes/footer');

}	







public function view_family_member()
	{
		
		 $id=$_POST['id'];
		 $data['family_member']=$this->db->get_where('ind_family', array('id' => $id))->row();
		 $this->load->view('popups/view_family_member',$data);	

	 }






public function new_policy_request()
    {
       
 		
		$data['msg']=$this->individualmodel->new_policy_request();
 		
	    $data['Table']='ind_service_request';
		
		
		$this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
        $this->load->view('new_policy_request',$data);
        $this->load->view('includes/footer');

}	








public function existing_policy_request()
    {
       
 		$data['existing_policies']=$this->individualmodel->ind_all_policies();
		$data['msg']=$this->individualmodel->existing_policy_request();
 		
	    $data['Table']='ind_service_request';
		
		$this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
        $this->load->view('existing_policy_request',$data);
        $this->load->view('includes/footer');

}	














public function requests()
    {
       
 		
		 $data['requests']=$this->individualmodel->all_requests();
 		//$data['corporate_clients']=$this->mallapurammodel->all_corporate_clients();
		//$data['corporate_employees']=$this->mallapurammodel->all_corporate_employees();
	    //$data['corporate_employees_families']=$this->mallapurammodel->all_corporate_employees_family();
	    $data['Table']='ind_service_request';
		
		
		
		
		
		
		$this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
        $this->load->view('requests',$data);
        $this->load->view('includes/footer');

}	






public function share_app()
    {
       
 		
		$data['msg']=$this->individualmodel->share_app();
 		
	    $data['Table']='ind_share_app';
		
		$this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
        $this->load->view('share_app',$data);
        $this->load->view('includes/footer');

}	




public function share_app_details()
    {
       
 		
		 $data['share_app_details']=$this->individualmodel->all_share_app_details();
 		//$data['corporate_clients']=$this->mallapurammodel->all_corporate_clients();
		//$data['corporate_employees']=$this->mallapurammodel->all_corporate_employees();
	    //$data['corporate_employees_families']=$this->mallapurammodel->all_corporate_employees_family();
	    $data['Table']='ind_share_app';
		
		
		
		
		
		
		$this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
        $this->load->view('share_app_details',$data);
        $this->load->view('includes/footer');

}	




function brithdaysms()
{


  
     $date = new DateTime("now");

    $curr_date = $date->format('Y-m-d');
 
    $users = $this->db->get_where('ind_registration',array('actual_dob'=> $curr_date))->result(); 

   
   
     foreach($users as $u){
    $tele = $u->mobile1; 
        
        $message = "Happy Birthday ".$u->first_name;
    

    $this->fun->sendSMS($tele,$message);
}


}





}
?>