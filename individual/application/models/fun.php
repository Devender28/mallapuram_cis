<?php 



class Fun extends CI_Model {



    function __construct()

    {

        parent::__construct();

    }




 function getnewfieldvalue($table,$field,$id,$id1)

    {

      $row = $this->db->get_where($table,array($id=>$id1))->row();

      return @$row->$field;

    }









  function getMember($name)

    {

      $row= $this->db->get_where('ind_registration',array('max_id'=>$name))->row();
 
      return ucwords($row->first_name);

    }

  
     function getCompany($id)

    {

      $row = $this->db->get_where('insurance_companies',array('id'=>$id))->row();

      return ucwords($row->name);

    }

    function getPolicy($id)

    {

      $row = $this->db->get_where('insurance_policy',array('id'=>$id))->row();

      return ucwords($row->name);

    }


    function dependentsCount()
    {

      return $this->db->get_where('ind_family',array('member_max_id' => $this->session->userdata('login')))->num_rows();

    }

    function policiesCount()
    {
      
      return $this->db->get_where('ind_policy',array('member_id' => $this->session->userdata('login')))->num_rows();

    }

    function requestsCount()
    {
      
      return $this->db->get_where('ind_service_request',array('member_id' => $this->session->userdata('login')))->num_rows();

    }

    function appsahreCount()
    {
      
      return $this->db->get_where('ind_share_app',array('member_id' => $this->session->userdata('login')))->num_rows();

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


  function sendMail($email,$message)
{
   $this->load->library('email');
      $this->email->set_newline("\r\n");
      $this->email->from('info@mallapuram.com','Password Recovery Form'); // change it to yours
      $this->email->to($email);// change it to yours
      $this->email->subject('Thank you for Recovering');
      $this->email->set_mailtype('html');
      $this->email->message($message);
      $this->email->send();
    

}




function sendMail1($email,$message)
{
   $this->load->library('email');
      $this->email->set_newline("\r\n");
      $this->email->from('info@mallapuram.com','Mallapuram Personal Insurance Portfolio Application'); // change it to yours
      $this->email->to($email);// change it to yours
      $this->email->subject('Thank you for Sharing');
      $this->email->set_mailtype('html');
      $this->email->message($message);
      $this->email->send();
    

}





    



}



?>