<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api extends CI_Controller {


	
	

    public function userregister(){
   
      $this->apimodel->userregister();
        
    }

    public function userlogin()
    {
    	$this->apimodel->userlogin();
    }

    public function updateprofile()
    {
    	$this->apimodel->updateprofile();
    }

    public function changepassword()
    {
    	$this->apimodel->changepassword();
    }

    public function forgotpassword()
    {
    	$this->apimodel->forgotpassword();
    }


    public function adduserpolicy()
    {
    	$this->apimodel->adduserpolicy();
    }

    public function updateuserpolicy()
    {
    	$this->apimodel->updateuserpolicy();
    }

    public function viewuserpolicy()
    {
    	$this->apimodel->viewuserpolicy();
    }

    public function userallpolicies()
    {
    	$this->apimodel->userallpolicies();
    }





   
      




       public function add_family_member(){
   
      $this->apimodel->add_family_member();
        
    }
	
	
	
	
	public function edit_family_member(){
   
      $this->apimodel->edit_family_member();
        
    }
	
	
	
	public function all_family_members(){
   
      $this->apimodel->all_family_members();
        
    }
	
	
	
	public function view_family_member(){
   
      $this->apimodel->view_family_member();
        
    }
	
	
	
	
	
	
	
	
	public function new_policy_service_request(){
   
      $this->apimodel->new_policy_service_request();
        
    }
	
	
	
	
   
   
   public function existing_policy_service_request(){
   
      $this->apimodel->existing_policy_service_request();
        
    }


  public function all_service_support_requests(){
   
      $this->apimodel->all_service_support_requests();
        
    }







 public function advertisements()
    {
    	$this->apimodel->advertisements();
    }
	
	
	
	 public function all_insurance_companies()
    {
    	$this->apimodel->all_insurance_companies();
    }
	
	
	
	public function all_insurance_policies()
    {
    	$this->apimodel->all_insurance_policies();
    }
	













}


