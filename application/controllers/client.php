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
                
                $data['emp_count'] = $this->clientmodel->employees_count();
                $data['policy_count'] = $this->clientmodel->client_policy_count();
                $data['ci_count'] = $this->clientmodel->claims_intimation_count();
         		    
        		    $this->load->view('includes/hr/header');
                $this->load->view('includes/hr/leftmenubar');
                $this->load->view('includes/hr/righttopbar');
                $this->load->view('hr_pages/dashboard',$data);
                $this->load->view('includes/footer');

        }	

        public function profile()
            {
               
                $data['profile'] = $this->clientmodel->getprofile();

                $this->load->view('includes/hr/header');
                $this->load->view('includes/hr/leftmenubar');
                $this->load->view('includes/hr/righttopbar');
                $this->load->view('hr_pages/company_profile',$data);
                $this->load->view('includes/footer');

        } 



      public function profile_edit()
          {
             $data['msg'] = $this->clientmodel->update_profile();
              $data['profile'] = $this->clientmodel->getprofile();

              $this->load->view('includes/hr/header');
              $this->load->view('includes/hr/leftmenubar');
              $this->load->view('includes/hr/righttopbar');
              $this->load->view('hr_pages/company_profile_edit',$data);
              $this->load->view('includes/footer');

      } 


      public function employees_list()
          {
             
              $data['emps'] = $this->clientmodel->employees();

              $this->load->view('includes/hr/header');
              $this->load->view('includes/hr/leftmenubar');
              $this->load->view('includes/hr/righttopbar');
              $this->load->view('hr_pages/employee_list',$data);
              $this->load->view('includes/footer');

      } 


      public function view_employee()
      {
         $id=$_POST['id'];
     $data['emp']=$this->db->get_where('corporate_employee', array('id' => $id))->row();
     $this->load->view('hr_pages/view_employee',$data); 

      }


       public function endorsement()
          {
             
             $data['msg'] = $this->clientmodel->endorsement_request();
              $data['policies'] = $this->clientmodel->client_policies();

              $this->load->view('includes/hr/header');
              $this->load->view('includes/hr/leftmenubar');
              $this->load->view('includes/hr/righttopbar');
              $this->load->view('hr_pages/endorsement_request',$data);
              $this->load->view('includes/footer');

      } 

      public function endorsement_list()
          {
             
             
              $data['requests'] = $this->clientmodel->client_end_requests();

              $this->load->view('includes/hr/header');
              $this->load->view('includes/hr/leftmenubar');
              $this->load->view('includes/hr/righttopbar');
              $this->load->view('hr_pages/endorsement_request_list',$data);
              $this->load->view('includes/footer');

      } 

     
      public function getEndCount()
    {
         
         
         $policy=$_POST['id'];
         $client = $this->session->userdata('client_id');
         
 
         $endc=$this->db->get_where('endorsement_request', array('client' => $client,'policy'=>$policy))->num_rows();

         

            echo $endc+1;
         
          


    }


      public function policy_list()
          {
             
             
              $data['policies'] = $this->clientmodel->client_policies();

              $this->load->view('includes/hr/header');
              $this->load->view('includes/hr/leftmenubar');
              $this->load->view('includes/hr/righttopbar');
              $this->load->view('hr_pages/policy_list',$data);
              $this->load->view('includes/footer');

      } 


      public function view_policy()
      {
         $id=$_POST['id'];
     $data['pol']=$this->db->get_where('sales_booking', array('id' => $id))->row();
     $this->load->view('hr_pages/view_policy',$data); 

      }


      public function cdstatements()
          {
             
             $data['cds'] = $this->clientmodel->client_cd_statements();

              $this->load->view('includes/hr/header');
              $this->load->view('includes/hr/leftmenubar');
              $this->load->view('includes/hr/righttopbar');
              $this->load->view('hr_pages/cdstatements_list',$data);
              $this->load->view('includes/footer');

      } 

      public function claimsdump()
          {
             
             $data['claims'] = $this->clientmodel->client_claims_dump();

              $this->load->view('includes/hr/header');
              $this->load->view('includes/hr/leftmenubar');
              $this->load->view('includes/hr/righttopbar');
              $this->load->view('hr_pages/claimsdump_list',$data);
              $this->load->view('includes/footer');

      } 

      public function claimintimation()
          {
             
             $data['msg'] = $this->clientmodel->claims_intimation();
             $data['emps'] = $this->clientmodel->employees();
             $data['policies'] = $this->clientmodel->client_policies();

              $this->load->view('includes/hr/header');
              $this->load->view('includes/hr/leftmenubar');
              $this->load->view('includes/hr/righttopbar');
              $this->load->view('hr_pages/claim_intimation',$data);
              $this->load->view('includes/footer');

      } 

      public function claimintimation_list()
          {
             
             $data['claims_list'] = $this->clientmodel->claims_intimation_list();

              $this->load->view('includes/hr/header');
              $this->load->view('includes/hr/leftmenubar');
              $this->load->view('includes/hr/righttopbar');
              $this->load->view('hr_pages/claim_intimation_list',$data);
              $this->load->view('includes/footer');

      } 



      public function claimintimation_company()
          {
             
             $data['msg'] = $this->clientmodel->claims_intimation_company();
             $data['emps'] = $this->clientmodel->employees();
             $data['policies'] = $this->clientmodel->client_policies();

              $this->load->view('includes/hr/header');
              $this->load->view('includes/hr/leftmenubar');
              $this->load->view('includes/hr/righttopbar');
              $this->load->view('hr_pages/claim_intimation_company',$data);
              $this->load->view('includes/footer');

      } 

      public function claimintimation_list_company()
          {
             
             $data['claims_list'] = $this->clientmodel->claims_intimation_list_company();

              $this->load->view('includes/hr/header');
              $this->load->view('includes/hr/leftmenubar');
              $this->load->view('includes/hr/righttopbar');
              $this->load->view('hr_pages/claim_intimation_list_company',$data);
              $this->load->view('includes/footer');

      } 


      public function cdamount()
          {
             
             $data['cdamount'] = $this->clientmodel->client_cd_amount();

              $this->load->view('includes/hr/header');
              $this->load->view('includes/hr/leftmenubar');
              $this->load->view('includes/hr/righttopbar');
              $this->load->view('hr_pages/cdamount_list',$data);
              $this->load->view('includes/footer');

      } 


      public function feedback()
          {
             
              $data['msg'] = $this->clientmodel->client_feedback();

              $this->load->view('includes/hr/header');
              $this->load->view('includes/hr/leftmenubar');
              $this->load->view('includes/hr/righttopbar');
              $this->load->view('hr_pages/add_feedback',$data);
              $this->load->view('includes/footer');

      } 
       
      public function feedback_details()
          {
             
              $data['fds'] = $this->clientmodel->client_feedbacks();

              $this->load->view('includes/hr/header');
              $this->load->view('includes/hr/leftmenubar');
              $this->load->view('includes/hr/righttopbar');
              $this->load->view('hr_pages/feedback_details',$data);
              $this->load->view('includes/footer');

      }  



      public function processed_endorsement_list()
          {
             
             
             $data['endorsement_charges']=$this->clientmodel->client_endorsement_charges();

              $this->load->view('includes/hr/header');
              $this->load->view('includes/hr/leftmenubar');
              $this->load->view('includes/hr/righttopbar');
              $this->load->view('hr_pages/processed_endorsement_list',$data);
              $this->load->view('includes/footer');

      } 

       



}
?>