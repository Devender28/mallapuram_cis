<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		    
	if($this->session->userdata('mallapuram_admin')){
           redirect('admin/dashboard', 'refresh');
    }
    $data['msg']=$this->mallapurammodel->login();
	//$this->load->view('includes/header1.php');
	$this->load->view('index',$data);
    
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

  function status()
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



public function logout(){
         $this->session->unset_userdata('mallapuram_admin');
         redirect('admin', 'refresh');
         }



	
	
	


public function dashboard()
    {
       
 		
		$this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
        $this->load->view('admin_pages/dashboard');
        $this->load->view('includes/footer');

}	


public function employees()
{
 $cat_id=$_POST['get_id'];

$data['corporate_employees']=$this->db->get_where('corporate_employee', array('corporate_id' => $cat_id))->result();
$this->load->view('employees_display',$data);

}



public function branches()
{
 $cat_id=$_POST['get_id'];

$data['branches']=$this->db->get_where('corporate_client_branches', array('company' => $cat_id))->result();
$this->load->view('branches_display',$data);

}





public function changepassword()
	{
		$data['msg'] = $this->mallapurammodel->password_change();

        $this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
        $this->load->view('admin_pages/changepassword',$data);
        $this->load->view('includes/footer');
	}	




public function insurance_companies()
    {
       $data['msg'] = $this->mallapurammodel->add_insurance_company();
 	   $data['companies']	= $this->mallapurammodel->all_insurance_companies();
       $data['Table'] = "insurance_companies";

		$this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
        $this->load->view('admin_pages/insurance_companies_view',$data);
        $this->load->view('includes/footer');

}

 public function add_insurance_companies()
    {
       $data['msg'] = $this->mallapurammodel->add_insurance_company();
       // $data['companies']   = $this->mallapurammodel->all_insurance_companies();
       // $data['Table'] = "insurance_companies";

        $this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
        $this->load->view('admin_pages/insurance_companies',$data);
        $this->load->view('includes/footer');

}


public function edit_insurance_company()
    {
        $data['msg'] = $this->mallapurammodel->update_insurance_company();
        $data['company']   = $this->mallapurammodel->get_insurance_company();
       

        $this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
        $this->load->view('admin_pages/insurance_companies_edit',$data);
        $this->load->view('includes/footer');

}


public function viewinscompany()
    {
         
         $id=$_POST['id'];
         $data['company']=$this->db->get_where('insurance_companies', array('id' => $id))->row();
         $this->load->view('popups/view_ins_company',$data);    


    }




public function insurance_policy_type()
    {
       $data['msg'] = $this->mallapurammodel->add_policy_type();
       $data['types']   = $this->mallapurammodel->policy_types();
       $data['Table'] = 'policy_types';
 		
		$this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
        $this->load->view('admin_pages/insurance_policy_type_view',$data);
        $this->load->view('includes/footer');

}

public function add_insurance_policy_type()
    {
       $data['msg'] = $this->mallapurammodel->add_policy_type();
       $data['types']   = $this->mallapurammodel->policy_types();
       $data['Table'] = 'policy_types';
        
        $this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
        $this->load->view('admin_pages/insurance_policy_type',$data);
        $this->load->view('includes/footer');

}

public function edit_insurance_policy_type()
    {
        $data['msg'] = $this->mallapurammodel->update_policy_type();
        $data['type']   = $this->mallapurammodel->get_policy_type();
       
        
        $this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
        $this->load->view('admin_pages/insurance_policy_type_edit',$data);
        $this->load->view('includes/footer');

}

public function viewtype()
    {
         
         $id=$_POST['id'];
         $data['type']=$this->db->get_where('policy_types', array('id' => $id))->row();
         $this->load->view('popups/view_type',$data);    


    }



public function insurance_policies()
    {
       
        $data['msg'] = $this->mallapurammodel->add_policy();
 		$data['companies'] = $this->mallapurammodel->insurance_companies();
        $data['policies'] = $this->mallapurammodel->all_policies();
        $data['Table'] = 'insurance_policy';

		$this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
        $this->load->view('admin_pages/insurance_policies_view',$data);
        $this->load->view('includes/footer');

}

public function getType()
    {
         
         $cat=$_POST['id'];
         $types=$this->db->get_where('policy_types', array('category' => $cat,'status'=>1))->result();
          echo '<option>select Type</option>';
         foreach($types as $type){
            echo '<option value="'.$type->id.'">'.$type->name.'</option>';
         }
          


    }


public function add_insurance_policies()
    {
       
        $data['msg'] = $this->mallapurammodel->add_policy();
        $data['companies'] = $this->mallapurammodel->insurance_companies();
        $data['policies'] = $this->mallapurammodel->all_policies();
        $data['Table'] = 'insurance_policy';

        $this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
        $this->load->view('admin_pages/insurance_policies',$data);
        $this->load->view('includes/footer');

}

    public function edit_insurance_policy()
    {
       
         $data['msg'] = $this->mallapurammodel->update_policy();
         $data['companies'] = $this->mallapurammodel->all_insurance_companies();
         $data['policy'] = $this->mallapurammodel->get_policy();

        $this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
        $this->load->view('admin_pages/insurance_policies_edit',$data);
        $this->load->view('includes/footer');

}

public function viewpolicy()
    {
         
         $id=$_POST['id'];
         $data['policy']=$this->db->get_where('insurance_policy', array('id' => $id))->row();
         $this->load->view('popups/view_policy',$data);    


    }







public function corporate_client()
    {
    	$data['msg']=$this->mallapurammodel->add_corporate_client();
		$data['corporate_clients']=$this->mallapurammodel->all_corporate_clients();
		$this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
		$data['Table']='corporate_client';
        $this->load->view('admin_pages/corporate_client',$data);
        $this->load->view('includes/footer');

     }



public function add_corporate_client()
    {
    	$data['msg']=$this->mallapurammodel->add_corporate_client();
		$data['corporate_clients']=$this->mallapurammodel->all_corporate_clients();
		$this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
		$data['Table']='corporate_client';
        $this->load->view('admin_pages/add_corporate_client',$data);
        $this->load->view('includes/footer');

     }











public function edit_corporate_client()
    {
        $data['corporate_client']=$this->mallapurammodel->get_corporate_client();
 		$data['msg']=$this->mallapurammodel->update_corporate_client();
		 //$data['cats']=$this->mefmodel->get_allcats();
		$data['corporate_client']=$this->mallapurammodel->get_corporate_client();
		$this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
		$data['Table']='corporate_client';
        $this->load->view('admin_pages/edit_corporate_client',$data);
        $this->load->view('includes/footer');
  }




public function view_corporate_client()
	{
		
		 $id=$_POST['id'];
		 $data['corporate_client']=$this->db->get_where('corporate_client', array('id' => $id))->row();
		 $this->load->view('popups/view_corporate_client',$data);	

	 }



//corporate client End




public function corporate_employees()
    {
        $data['msg']=$this->mallapurammodel->add_corporate_employee();
 		$data['corporate_clients']=$this->mallapurammodel->all_corporate_clients();
		$data['corporate_employees']=$this->mallapurammodel->all_corporate_employees();
        $data['branches']=$this->mallapurammodel->all_corporate_client_branches();
		$this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
		$data['Table']='corporate_employee';
        $this->load->view('admin_pages/corporate_employees',$data);
        $this->load->view('includes/footer');

}



public function add_corporate_employees()
    {
        $data['msg']=$this->mallapurammodel->add_corporate_employee();
 		$data['corporate_clients']=$this->mallapurammodel->all_corporate_clients();
		$data['corporate_employees']=$this->mallapurammodel->all_corporate_employees();
                 $data['branches']=$this->mallapurammodel->all_corporate_client_branches();
		$this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
		$data['Table']='corporate_employee';
        $this->load->view('admin_pages/add_corporate_employees',$data);
        $this->load->view('includes/footer');

}



public function edit_corporate_employee()
    {
        
		$data['corporate_employee']=$this->mallapurammodel->get_corporate_employee();
		
		$data['msg']=$this->mallapurammodel->update_corporate_employee();
 		$data['corporate_clients']=$this->mallapurammodel->all_corporate_clients();
		$data['corporate_employees']=$this->mallapurammodel->all_corporate_employees();
		$data['corporate_employee']=$this->mallapurammodel->get_corporate_employee();
$data['branches']=$this->mallapurammodel->all_corporate_client_branches();
		$this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
		$data['Table']='corporate_employee';
        $this->load->view('admin_pages/edit_corporate_employee',$data);
        $this->load->view('includes/footer');

}



public function view_corporate_employee()
	{
		
		 $id=$_POST['id'];
		 $data['corporate_employee']=$this->db->get_where('corporate_employee', array('id' => $id))->row();
		 $this->load->view('popups/view_corporate_employee',$data);	

	 }
	 
	 
	 
public function view_emp_policies()
	{
		
		 $id=$_POST['id'];
		 $corporate_id=$_POST['corporate_id'];
		 $employee_id=$this->fun->getnewfieldvalue("corporate_employee","employee_id","id",$id);
		 $data['emp_policies']=$this->db->group_by('policy_id')->get_where('corporate_employee', array('employee_id' => $employee_id,'corporate_id' => $corporate_id))->result();
		 $this->load->view('popups/view_emp_policies',$data);	

	 }	 
	 
	 
	 
	 
	 
public function view_emp_dependents()
	{
		
		 $id=$_POST['id'];
		 $corporate_id=$_POST['corporate_id'];
		 $employee_id=$this->fun->getnewfieldvalue("corporate_employee","employee_id","id",$id);
		 $data['emp_dependents']=$this->db->group_by('relation')->get_where('corporate_employee', array('employee_id' => $employee_id,'corporate_id' => $corporate_id,'relation !='=>'self'))->result();
		 $this->load->view('popups/view_emp_dependents',$data);	

	 }	 



public function corporate_branches()
    {
   		$data['msg']=$this->mallapurammodel->add_branches();
		$data['corporate_clients']=$this->mallapurammodel->all_corporate_clients();
		$data['branches']=$this->mallapurammodel->all_corporate_client_branches();
		$data['Table']='corporate_client_branches';
		$this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
        $this->load->view('admin_pages/corporate_branches',$data);
        $this->load->view('includes/footer');

}







public function add_corporate_branches()
    {
   		$data['msg']=$this->mallapurammodel->add_branches();
		$data['corporate_clients']=$this->mallapurammodel->all_corporate_clients();
		$data['branches']=$this->mallapurammodel->all_corporate_client_branches();
		$data['Table']='corporate_client_branches';
		$this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
        $this->load->view('admin_pages/add_corporate_branches',$data);
        $this->load->view('includes/footer');

}









public function edit_corporate_branches()
    {
       
 		$data['msg']=$this->mallapurammodel->update_branches();
		$data['corporate_branch']=$this->mallapurammodel->get_corporate_branch();
		$data['corporate_clients']=$this->mallapurammodel->all_corporate_clients();
		$data['branches']=$this->mallapurammodel->all_corporate_client_branches();
		$data['Table']='corporate_client_branches';
		$this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
        $this->load->view('admin_pages/edit_corporate_branches',$data);
        $this->load->view('includes/footer');

}



public function employee_family_members()
    {
      
	    $data['msg']=$this->mallapurammodel->add_corporate_employee_family();
 		$data['corporate_clients']=$this->mallapurammodel->all_corporate_clients();
		$data['corporate_employees']=$this->mallapurammodel->all_corporate_employees();
	    $data['corporate_employees_families']=$this->mallapurammodel->all_corporate_employees_family();
	   $data['Table']='corporate_employee_family';
	   
 		$this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
        $this->load->view('admin_pages/employee_family_members',$data);
        $this->load->view('includes/footer');

  }










public function  add_employee_family_members()
    {
      
	    $data['msg']=$this->mallapurammodel->add_corporate_employee_family();
 		$data['corporate_clients']=$this->mallapurammodel->all_corporate_clients();
		$data['corporate_employees']=$this->mallapurammodel->all_corporate_employees();
	    $data['corporate_employees_families']=$this->mallapurammodel->all_corporate_employees_family();
	   $data['Table']='corporate_employee_family';
	   
 		$this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
        $this->load->view('admin_pages/add_employee_family_members',$data);
        $this->load->view('includes/footer');

  }



public function edit_corporate_employee_family()
    {
      
	    $data['msg']=$this->mallapurammodel->update_corporate_employee_family();
		$data['corporate_employee_family']=$this->mallapurammodel->get_corporate_employee_family();
 		$data['corporate_clients']=$this->mallapurammodel->all_corporate_clients();
		$data['corporate_employees']=$this->mallapurammodel->all_corporate_employees();
	    $data['corporate_employees_families']=$this->mallapurammodel->all_corporate_employees_family();
	   $data['Table']='corporate_employee_family';
	   
 		$this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
        $this->load->view('admin_pages/edit_corporate_employee_family',$data);
        $this->load->view('includes/footer');

  }







public function view_corporate_employee_family()
	{
		
		 $id=$_POST['id'];
		 $data['corporate_employee_family']=$this->db->get_where('corporate_employee_family', array('id' => $id))->row();
		 $this->load->view('popups/view_corporate_employee_family',$data);	

	 }

 




















public function sales_booking()
    {
       
        $data['msg'] = $this->mallapurammodel->add_sale_booking();
        $data['companies'] = $this->mallapurammodel->insurance_companies();
        $data['sales'] = $this->mallapurammodel->all_sales();
        $data['corporate_clients']=$this->mallapurammodel->corporate_clients();
        $data['Table'] = 'sales_booking';

        $this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
        $this->load->view('admin_pages/sales_booking_view',$data);
        //$this->load->view('includes/footer');

}


public function add_sales_booking()
    {
       
        $data['msg'] = $this->mallapurammodel->add_sale_booking();
        $data['companies'] = $this->mallapurammodel->insurance_companies();
        $data['sales'] = $this->mallapurammodel->all_sales();
        $data['corporate_clients']=$this->mallapurammodel->corporate_clients();
        $data['Table'] = 'sales_booking';

        $this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
        $this->load->view('admin_pages/sales_booking',$data);
        //$this->load->view('includes/footer');

}

public function edit_sales_booking()
    {
       
        $data['msg'] = $this->mallapurammodel->update_sale_booking();
        $data['companies'] = $this->mallapurammodel->all_insurance_companies();
        $data['corporate_clients']=$this->mallapurammodel->all_corporate_clients();
        $data['sale'] = $this->mallapurammodel->get_sale();

        $this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
        $this->load->view('admin_pages/sales_booking_edit',$data);
        //$this->load->view('includes/footer');

}


public function viewsale()
    {
         
         $id=$_POST['id'];
         $data['sale']=$this->db->get_where('sales_booking', array('id' => $id))->row();
         $this->load->view('popups/view_sale',$data);    


    }


public function getPolicy()
    {
         
         $cat=$_POST['cat'];
         $comp=$_POST['comp'];
         $type=$_POST['type'];
         

         $pcs=$this->db->get_where('insurance_policy', array('category' => $cat,'type'=>$type,'company'=>$comp,'status'=>1))->result();
         //$pcs=$this->db->get_where('insurance_policy', array('type'=>$type,'company'=>$comp))->result();

         foreach($pcs as $pc){
            echo '<option value="'.$pc->id.'">'.$pc->name.'</option>';
         }
          


    }


  public function getClientPolicy()
    {
         
         $cid=$_POST['get_id'];
        

         $pcs=$this->db->get_where('sales_booking', array('client' => $cid,'status'=>1))->result();
         //$pcs=$this->db->get_where('insurance_policy', array('type'=>$type,'company'=>$comp))->result();

         foreach($pcs as $pc){
            echo '<option value="'.$pc->id.'">'.$this->fun->getPolicy($pc->policy_name).'</option>';
         }
          


    }




public function employee_sales_booking()
    {
       
       

        $data['corporate_clients']=$this->mallapurammodel->all_corporate_clients();

        $this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
        $this->load->view('admin_pages/employee_sales_booking_add',$data);
        $this->load->view('includes/footer');

}




public function getFamily()
    {
         
         $cid=$_POST['get_id'];
        

         $pcs=$this->db->get_where('corporate_employee_family', array('employee_id' => $cid,'status'=>1))->result();
         //$pcs=$this->db->get_where('insurance_policy', array('type'=>$type,'company'=>$comp))->result();
            
		echo '<option value="'.$cid.'">Employee</option>';
         foreach($pcs as $pc){
            
			echo '<option value="'.$pc->id.'">'.$pc->name.'&nbsp;(&nbsp;'.$pc->relation.'&nbsp;)</option>';
        
		}
          


    }	








function addsale(){
  
        extract($_POST);
       
      
        $data = array('corporate_id' => $corporate_id,
                      'employee_id'=> $employee_id,
					  'policy_id'=> $policy_id,
					  'individual_policy_id'=> $individual_policy_id,
					  'sum_insured'=> $sum_insured,
					  'family_floater'=> $family_floater,
					  'nominee'=> $nominee,
					  'nominee_relationship'=> $nominee_relationship,
					  'nominee_dob'=> $nominee_dob,
					 
                    
                     'status'=> 1
        );

       

      $this->db->insert('dummy_individual_slaes_booking',$data);

       

     }
 
 
 
 
 
 
 
  public function get_dummy(){

     	extract($_POST);
     	//print_r($_POST);
		
		 $data['dummy']= $this->db->get_where('dummy_individual_slaes_booking',array('employee_id'=>$id))->result();

         $this->load->view('aj_pages/individual_sales_data',$data);    
     
	 }









public function add_employee_sales_booking()
    {
       
       $data['corporate_clients']=$this->mallapurammodel->all_corporate_clients();

        $this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
        $this->load->view('employee_sales_booking_add',$data);
        $this->load->view('includes/footer');

}


//29th Nov 2017

     
       public function add_addition()
       {

        $this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
        $this->load->view('additions_add');
        $this->load->view('includes/footer');
       }


      
       public function add_ticket_type()
       {

        $this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
        $this->load->view('ticket_pages/ticket_type');
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






    public function promotions()
    {
      
	   
	   $data['promotions']=$this->mallapurammodel->all_promotions();
	   
	   $data['Table']='promotions';
	   
 		$this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
        $this->load->view('admin_pages/promotions',$data);
        $this->load->view('includes/footer');

  }






public function add_promotions()
    {
       
 		
		$data['msg']=$this->mallapurammodel->add_promotions();
 		$data['Table']='promotions';
		
		$this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
        $this->load->view('admin_pages/add_promotions',$data);
        $this->load->view('includes/footer');

}	
	
	
public function employees_deletion()
    {
        $data['msg']=$this->mallapurammodel->employees_deletion();
 		$data['corporate_clients']=$this->mallapurammodel->all_corporate_clients();
		$data['corporate_employees']=$this->mallapurammodel->all_corporate_employee_deletion();
        $data['branches']=$this->mallapurammodel->all_corporate_client_branches();
		$this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
		$data['Table']='corporate_employee';
        $this->load->view('admin_pages/employees_deletion',$data);
        $this->load->view('includes/footer');

}	
	
	
	
	
public function employees_addition()
    {
        $data['msg']=$this->mallapurammodel->add_employees_addition();
 		
		$data['corporate_clients']=$this->mallapurammodel->all_corporate_clients();
		$data['corporate_employees']=$this->mallapurammodel->all_corporate_employees();
		$data['insurance_companies']=$this->mallapurammodel->all_insurance_companies();
		$data['branches']=$this->mallapurammodel->all_corporate_client_branches();
		
		$this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
		$data['Table']='corporate_employee';
        $this->load->view('admin_pages/employees_addition',$data);
        $this->load->view('includes/footer');

}
	
	
	
	
public function employees_deleted()
    {
        $data['msg']=$this->mallapurammodel->add_corporate_employee();
 		$data['corporate_clients']=$this->mallapurammodel->all_corporate_clients();
		$data['corporate_employees']=$this->mallapurammodel->all_corporate_employees_deleted();
        $data['branches']=$this->mallapurammodel->all_corporate_client_branches();
		$this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
		$data['Table']='corporate_employee';
        $this->load->view('admin_pages/employees_deleted',$data);
        $this->load->view('includes/footer');

}




public function add_claim_dump()
    {
        $data['msg']=$this->mallapurammodel->add_claim_dump();
 		$data['corporate_clients']=$this->mallapurammodel->all_corporate_clients();
		$data['companies'] = $this->mallapurammodel->insurance_companies();
		
		$this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
		$this->load->view('admin_pages/add_claim_dump',$data);
        $this->load->view('includes/footer');

}







public function cd_account()
    {
        $data['msg']=$this->mallapurammodel->add_cd_account();
 		$data['corporate_clients']=$this->mallapurammodel->all_corporate_clients();
		$data['companies'] = $this->mallapurammodel->insurance_companies();
		$this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
		$this->load->view('admin_pages/cd_account',$data);
        $this->load->view('includes/footer');

}






public function cd_account_details()
    {
        
 		$data['cd_account_details']=$this->mallapurammodel->cd_account_details();
		$data['companies'] = $this->mallapurammodel->insurance_companies();
		
		$this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
		$this->load->view('admin_pages/cd_account_details',$data);
        $this->load->view('includes/footer');

}

















public function claim_dump()
    {
     	$data['claim_dumps']=$this->mallapurammodel->all_claim_dump();
     	$this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
		$data['Table']='claim_dump';
        $this->load->view('admin_pages/claim_dump',$data);
        $this->load->view('includes/footer');

   }




public function add_account_statements()
    {
        $data['msg']=$this->mallapurammodel->add_account_statements();
 		$data['corporate_clients']=$this->mallapurammodel->all_corporate_clients();
		$data['companies'] = $this->mallapurammodel->insurance_companies();
		$this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
        $this->load->view('admin_pages/add_account_statements',$data);
        $this->load->view('includes/footer');

 }








public function account_statements()
    {
     	$data['account_statements']=$this->mallapurammodel->all_account_statements();
     	$this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
		$data['Table']='account_statements';
        $this->load->view('admin_pages/account_statements',$data);
        $this->load->view('includes/footer');

   }
	
	
	
	
	public function add_endorsement_charges()
    {
        
		$data['msg']=$this->mallapurammodel->add_endorsement_charges();
		$data['corporate_clients']=$this->mallapurammodel->all_corporate_clients();
		$data['corporate_employees']=$this->mallapurammodel->all_corporate_employees();
		$data['insurance_companies']=$this->mallapurammodel->all_insurance_companies();
		
		$this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
        $this->load->view('admin_pages/add_endorsement_charges',$data);
        $this->load->view('includes/footer');

 }





public function endorsement_charges()
    {
     	$data['endorsement_charges']=$this->mallapurammodel->all_endorsement_charges();
     	$this->load->view('includes/header');
        $this->load->view('includes/leftmenubar');
        $this->load->view('includes/righttopbar');
		$data['Table']='claim_dump';
        $this->load->view('admin_pages/endorsement_charges',$data);
        $this->load->view('includes/footer');

   }









public function getpolices()
{
 $cat_id=$_POST['id'];
 
$data['policies']=$this->db->get_where('sales_booking',array('client' => $cat_id))->result();
$this->load->view('policies_display',$data);

}







}
?>