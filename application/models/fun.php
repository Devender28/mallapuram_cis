<?php 



class Fun extends CI_Model {



    function __construct()

    {

        parent::__construct();

    }




 function getnewfieldvalue($table,$field,$id,$id1)

    {

      $row = $this->db->get_where($table,array($id=>$id1))->row();

      return $row->$field;

    }



function getCorporateEmployee($id)

    {

      $row = $this->db->get_where('corporate_employee',array('employee_id'=>$id))->row();

      return ucwords($row->name);

    }






  function getCompany($id)

    {

      $row = $this->db->get_where('insurance_companies',array('id'=>$id))->row();

      return ucwords($row->name);

    }

    function getHospitals($id)

    {

      $row = $this->db->get_where('insurance_companies',array('id'=>$id))->row();

      return ucwords($row->hospitals_link);

    }

    function getClaimform($id)

    {

      $row = $this->db->get_where('insurance_companies',array('id'=>$id))->row();

      return ucwords($row->otherlink1);

    }

    function getChecklist($id)

    {

      $row = $this->db->get_where('insurance_companies',array('id'=>$id))->row();

      return ucwords($row->otherlink2);

    }


    function getHospitals_emp($id)

    {

      $emp=$this->db->get_where('corporate_employee',array('employee_id'=>$id))->row();
      $inc_cmp=$this->db->get_where('sales_booking',array('policy_number'=>$emp->policy_id))->row();

      $row = $this->db->get_where('insurance_companies',array('id'=>$inc_cmp->company))->row();

      return $row->hospitals_link;

    }

    function getClaimform_emp($id)

    {

      $emp=$this->db->get_where('corporate_employee',array('employee_id'=>$id))->row();
      $inc_cmp=$this->db->get_where('sales_booking',array('policy_number'=>$emp->policy_id))->row();

      $row = $this->db->get_where('insurance_companies',array('id'=>$inc_cmp->company))->row();

      return $row->otherlink1;

    }

    function getChecklist_emp($id)

    {

      $emp=$this->db->get_where('corporate_employee',array('employee_id'=>$id))->row();
      $inc_cmp=$this->db->get_where('sales_booking',array('policy_number'=>$emp->policy_id))->row();

      $row = $this->db->get_where('insurance_companies',array('id'=>$inc_cmp->company))->row();

      return $row->otherlink2;

    }

    function getHospitals_emp1()

    {

      $this->db->select('hospitals_link');
$this->db->from('insurance_companies');
$this->db->join('sales_booking','sales_booking.company=insurance_companies.id','inner');
$this->db->join('corporate_employee',
            'corporate_employee.policy_id=sales_booking.policy_number','corporate_employee.employee_id=$id','inner');
$query=$this->db->get();
$data=$query->row();

     

      return $data->hospitals_link;

    }

    function getType($id)

    {

      $row = $this->db->get_where('policy_types',array('id'=>$id))->row();

      return ucwords($row->name);

    }

    function getPolicy($id)

    {

      $row = $this->db->get_where('insurance_policy',array('id'=>$id))->row();

      return ucwords($row->name);

    }


    function getClient($id)

    {

      $row = $this->db->get_where('corporate_client',array('id'=>$id))->row();

      return ucwords($row->name);

    }

 
    function getClientPolicy($id)

    {
      $pid = $this->db->get_where('sales_booking',array('policy_number'=>$id))->row()->policy_name;

      $row = $this->db->get_where('insurance_policy',array('id'=>$pid))->row();

      return ucwords($row->name);

    }


    function getTicketType($id)

    {

      $row = $this->db->get_where('ticket_type',array('id'=>$id))->row();

      return ucwords($row->name);

    }


   
   function totalScore($id)
    {
      $this->db->select_sum('points');
$result = $this->db->get_where('ticket_points',array('emp_id'=>$id))->row();  
if($result->points != ''){
return $result->points;
} else { return "0";}
    }


    function todayScore($id)
    {
      $today= date('Y-m-d');
      $this->db->select_sum('points');
      $this->db->like('crdate',$today);
$result = $this->db->get_where('ticket_points',array('emp_id'=>$id))->row();  
if($result->points !='')  
{

return $result->points;
} else { return "0";}
  
    }
    


   function bestScore($id)
    {
      
      
     $result= $this->db->query("SELECT crdate, sum(points) as points FROM `ticket_points` where emp_id = ".$id." group by date(crdate) order by points desc limit 1")->row();
     if($result){
     return @$result->points;
   } else { return "0";}
    }


    function avgScore($id)
    {
            
     $result= $this->db->query("SELECT sum(points) as points, count(distinct(date(crdate))) as ct FROM `ticket_points` where emp_id = ".$id." ")->row();
  
    if(@$result->ct){
     return round(@$result->points/@$result->ct,2);
   } else { return "0"; }
     
    }



function cMonthScore($id)
    {
       $cmnth= date('m');
       $cyr= date('Y');
      $this->db->select_sum('points');
      $this->db->where('MONTH(crdate)',$cmnth);
      $this->db->where('YEAR(crdate)',$cyr);
$result = $this->db->get_where('ticket_points',array('emp_id'=>$id))->row();  
if($result->points !='')  
{

return $result->points;
} else { return "0";}
  
    }

    function lMonthScore($id)
    {
      $today= date('m')-1;
      $cyr= date('Y');
      $this->db->select_sum('points');
      $this->db->where('MONTH(crdate)',$today);
      $this->db->where('YEAR(crdate)',$cyr);
$result = $this->db->get_where('ticket_points',array('emp_id'=>$id))->row();  
if($result->points !='')  
{

return $result->points;
} else { return "0";}
  
    }

    function yearlyScore($id)
    {
      $today= date('Y');
      $this->db->select_sum('points');
      $this->db->where('YEAR(crdate)',$today);
$result = $this->db->get_where('ticket_points',array('emp_id'=>$id))->row();  
if($result->points !='')  
{

return $result->points;
} else { return "0";}
  
    }






function userinfo($mobile)
  {
    $row=$this->db->get_where('registrations',array('mobile' =>$mobile))->row();
    
    return ucwords($row->name);
  }



function sendMail($file)
{
   $this->load->library('email');
      $this->email->set_newline("\r\n");
      $this->email->from('devender@elefontdesign.com','Test Mail'); // change it to yours
      $this->email->to('devender@elefontdesign.com');// change it to yours
      $this->email->subject('Total Count');
      $this->email->set_mailtype('html');
      $this->email->message('Test Message');
      $this->email->attach($file);
      $this->email->send();
    

}


function sendDevMail($from,$email,$subject,$message,$cc)
{
   $this->load->library('email');
      $this->email->set_newline("\r\n");
      $this->email->from($from,'Mallapuram Insurance Servicing Portal'); // change it to yours
      $this->email->to($email);// change it to yours
      $this->email->cc($cc);
      $this->email->subject($subject);
      $this->email->set_mailtype('html');      
      $this->email->message($message);
   
      $this->email->send();
    

}


function sendDevMail1($from,$email,$subject,$message,$cc,$file)
{
   $this->load->library('email');
      $this->email->set_newline("\r\n");
      $this->email->from($from,'Mallapuram Insurance Servicing Portal'); // change it to yours
      $this->email->to($email);// change it to yours
      $this->email->cc($cc);
      $this->email->subject($subject);
      $this->email->set_mailtype('html');      
      $this->email->message($message);
      $this->email->attach($file);
      $this->email->send();
    

}




function sendSMS($phone,$message)
    {
  $url='http://www.metamorphsystems.com/index.php/api/bulk-sms?username=mallapuram&password=123456&from=MALLAP&to='.$phone.'&message='.urlencode($message).'&sms_type=2';
  
  $ch = curl_init();

  curl_setopt($ch,CURLOPT_URL,$url);

  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  curl_setopt($ch, CURLOPT_POST, false);

  $resuponce=curl_exec($ch);

  curl_close($ch);
    

  }
    



}



?>