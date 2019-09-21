<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Client extends CI_Controller {

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
        
  if($this->session->userdata('client_admin')){
           redirect('hr/dashboard', 'refresh');
    }
    $data['msg']=$this->mallapurammodel->hr_login();
  //$this->load->view('includes/header1.php');
  $this->load->view('hr_pages/login',$data);
    
  }

	
	public function logout(){
         $this->session->unset_userdata('client_admin');
         redirect('hr', 'refresh');
         }



  public function changepassword()
  {
    $data['msg'] = $this->mallapurammodel->hr_password_change();

        $this->load->view('includes/hr/header');
        $this->load->view('includes/hr/leftmenubar');
        $this->load->view('includes/hr/righttopbar');
        $this->load->view('hr_pages/changepassword',$data);
        $this->load->view('includes/footer');
  }        
	


public function dashboard()
    {
       
 		
		$this->load->view('includes/hr/header');
        $this->load->view('includes/hr/leftmenubar');
        $this->load->view('includes/hr/righttopbar');
        $this->load->view('hr_pages/dashboard');
        $this->load->view('includes/footer');

}	




     
       public function addition_request()
       {

        $this->load->model('clientmodel');
        $data['client_policies']= $this->clientmodel->client_policies();
        $data['msg'] = $this->clientmodel->addition();

        $this->load->view('includes/hr/header');
        $this->load->view('includes/hr/leftmenubar');
        $this->load->view('includes/hr/righttopbar');
        $this->load->view('hr_pages/additions_add',$data);
        $this->load->view('includes/footer');
       }


       public function addition_view()
       {
           $this->load->model('clientmodel');
        $data['additions'] = $this->clientmodel->all_additions();

        $this->load->view('includes/hr/header');
        $this->load->view('includes/hr/leftmenubar');
        $this->load->view('includes/hr/righttopbar');
        $this->load->view('hr_pages/additions_view',$data);
        $this->load->view('includes/footer');
       }

       public function deletion_request()
       {

        $this->load->view('includes/hr/header');
        $this->load->view('includes/hr/leftmenubar');
        $this->load->view('includes/hr/righttopbar');
        $this->load->view('hr_pages/deletion');
        $this->load->view('includes/footer');
       }

       public function correction_request()
       {

        $this->load->view('includes/hr/header');
        $this->load->view('includes/hr/leftmenubar');
        $this->load->view('includes/hr/righttopbar');
        $this->load->view('hr_pages/corrections_add');
        $this->load->view('includes/footer');
       }

       public function corrections_view()
       {

        $this->load->view('includes/hr/header');
        $this->load->view('includes/hr/leftmenubar');
        $this->load->view('includes/hr/righttopbar');
        $this->load->view('hr_pages/corrections_view');
        $this->load->view('includes/footer');
       }

       public function claims_intimation()
       {

        $this->load->view('includes/hr/header');
        $this->load->view('includes/hr/leftmenubar');
        $this->load->view('includes/hr/righttopbar');
        $this->load->view('hr_pages/claims_intimation_add');
        $this->load->view('includes/footer');
       }

       



}
?>