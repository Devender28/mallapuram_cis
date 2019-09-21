<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee extends CI_Controller {

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
		    
	if($this->session->userdata('employee_id')){
           redirect('employee/dashboard', 'refresh');
    }
    $data['msg']=$this->employeemodel->login();
	//$this->load->view('includes/header1.php');
	$this->load->view('employee_pages/index',$data);
    
	}

  
  


public function dashboard()
    {
    	
		
		$this->load->view('includes/employee/header');
        $this->load->view('includes/employee/leftmenubar');
        $this->load->view('includes/employee/righttopbar');
        $this->load->view('employee_pages/dashboard');
        $this->load->view('includes/employee/footer');
    }	






public function profile()
    {
        
		$data['member'] = $this->employeemodel->getMember();;
        $this->load->view('includes/employee/header');
        $this->load->view('includes/employee/leftmenubar');
        $this->load->view('includes/employee/righttopbar');
        $this->load->view('employee_pages/profile',$data);
        $this->load->view('includes/employee/footer');

} 




public function family_members()
    {
  	    $data['family_members']=$this->employeemodel->all_family_members();
		$this->load->view('includes/employee/header');
        $this->load->view('includes/employee/leftmenubar');
        $this->load->view('includes/employee/righttopbar');
        $this->load->view('employee_pages/family_members',$data);
        $this->load->view('includes/employee/footer');
   }



public function policies_view()
 {
      $data['policies'] = $this->employeemodel->all_policies();
       $this->load->view('includes/employee/header');
       $this->load->view('includes/employee/leftmenubar');
       $this->load->view('includes/employee/righttopbar');
       $this->load->view('employee_pages/policies_view',$data);
       $this->load->view('includes/employee/footer');
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

    	$data['msg']=$this->employeemodel->password_change();

    	$this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
        $this->load->view('changepassword',$data);
        $this->load->view('includes/footer');

    }  
  
  
  
  
public function forgot_password()
  {
    $data['msg'] = $this->employeemodel->forgot_password();
    $this->load->view('forgot_password',$data);
  }



 public function reset_password()
  {
    $data['msg'] = $this->employeemodel->reset_password();
    $this->load->view('reset_password',$data);
  }
  







public function logout(){
         //$this->session->unset_userdata('login');
           $this->session->sess_destroy();
           redirect('employee', 'refresh');
         }
	




 public function feedback()
          {
             
              $data['msg'] = $this->employeemodel->employee_feedback();

              $this->load->view('includes/employee/header');
              $this->load->view('includes/employee/leftmenubar');
              $this->load->view('includes/employee/righttopbar');
              $this->load->view('employee_pages/add_feedback',$data);
              $this->load->view('includes/footer');

      } 

    
  public function feedback_details()
          {
             
              $data['fds'] = $this->employeemodel->employee_feedbacks();

              $this->load->view('includes/employee/header');
              $this->load->view('includes/employee/leftmenubar');
              $this->load->view('includes/employee/righttopbar');
              $this->load->view('employee_pages/feedback_details',$data);
              $this->load->view('includes/footer');

      }  


      public function idcardspdf(){

       
      
        
       $data['ids'] = $this->db->group_by('relation')->get_where('corporate_employee',array('employee_id'=>$this->session->userdata('employee_id'),'corporate_id'=>$this->session->userdata('corporate_id'),'policy_id'=>str_replace('_','/',$this->uri->segment(3))))->result();
        
         $html = $this->load->view('employee_pages/healthcard',$data,true);
        
        // Load pdf library
        $this->load->library('pdf');
        
        // Load HTML content
        $this->pdf->loadHtml($html);
        
        // (Optional) Setup the paper size and orientation
        $this->pdf->setPaper('DEFAULT_PDF_PAPER_SIZE', 'portrait');

        //$dompdf->set_paper(DEFAULT_PDF_PAPER_SIZE, 'portrait');
        
        // Render the HTML as PDF
        $this->pdf->render();
        
        // Output the generated PDF (1 = download and 0 = preview)
        $this->pdf->stream("dev.pdf", array("Attachment"=>0));
    }


    public function idcards()
 {
      $data['policies'] = $this->employeemodel->all_policies();
       $this->load->view('includes/employee/header');
       $this->load->view('includes/employee/leftmenubar');
       $this->load->view('includes/employee/righttopbar');
       $this->load->view('employee_pages/idcards',$data);
       $this->load->view('includes/employee/footer');
 }


public function idcarddesign()
 {
      
      
      
       $this->load->view('employee_pages/idcardsdesign');
    
 }





}
?>