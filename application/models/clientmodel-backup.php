<?php 

class Clientmodel extends CI_Model {
   
   function __construct()
    {
        parent::__construct();
    }
	
	
	
	
	 

  function client_policies(){
    return $this->db->get_where('sales_booking',array('client'=>$this->session->userdata('client_id')))->result();
  }

 
  

   public function addition()
    {

      $msg ='';
  if(isset($_POST['add_request'])){
extract($_POST);

$addid = 'add'.rand();

$x = str_replace(' ','_',$_FILES['add_file']['name']);

 $config['upload_path'] = APPPATH.'/hruploads';
    $config['allowed_types'] = 'xlsx|xls';
    $config['max_size']= '1000';
    $config['filename']= $x;
    $config['overwrite']= 'true';
    $this->load->library('upload', $config);
    
    if($this->upload->do_upload('add_file')){

  $file = APPPATH.'/hruploads/'.$x;
}

$this->load->library('excel');

$objPHPExcel = PHPExcel_IOFactory::load($file);

$cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();

foreach ($cell_collection as $cell) {
    $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
    $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
    $data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();
   
    if ($row == 1) {
        $header[$row][$column] = $data_value;
    } else {
        $arr_data[$row][$column] = $data_value;
    }
}

 $data['header'] = $header;
 
$data['values'] = $arr_data;



for($x=2;$x<=$row;$x++){


 @$empid = $data['values'][$x]['A'];

 @$empname = $data['values'][$x]['B'];
 @$desig = $data['values'][$x]['C'];
 @$dob = $data['values'][$x]['D'];
 @$doj = $data['values'][$x]['E'];
 @$gen = $data['values'][$x]['F'];
 @$rela = $data['values'][$x]['G'];
 @$phone = $data['values'][$x]['H'];
 @$email = $data['values'][$x]['I'];
 

 

  if($this->db->get_where('corporate_employee',array('employee_id'=>$empid,'relation'=>$rela))->num_rows())
  {
 $msg = '<div class="alert alert-danger col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Employees Data Already Added</strong>
                  </div>';
 } else {

date_default_timezone_set('Asia/Kolkata');
    $crdate = @date('Y-m-d H:i:s');

       $data1 = array( 'corporate_id' => $this->session->userdata('client_id'),
                       'employee_id'  => $empid,
                       'policy_id' => $policy,
                       'addition_id' => $addid,
                       'name'         => $empname,
                       'designation'  =>$desig, 
                       'date_of_birth'  =>$dob,                     
                       'date_of_joining'  =>$doj, 
                       'gender'  =>$gen, 
                       'relation'  =>$rela, 
                       'phone'  =>$phone, 
                       'email'  =>$email, 
                       'remarks' => $remark,
                       'status'       =>0

        );

       $data2 = array( 'corporate_id' => $this->session->userdata('client_id'),
                       'employee_id'  => $empid,
                       'policy_id' => $policy,
                       'name'         => $empname,
                       'designation'  =>$desig, 
                       'date_of_birth'  =>$dob,                     
                       'date_of_joining'  =>$doj, 
                       'gender'  =>$gen, 
                       'relation'  =>$rela, 
                       'phone'  =>$phone, 
                       'email'  =>$email,
                       'status'       =>0

        );

        $this->db->insert('addition', $data1);
          if($rela =='Self'){
        $this->db->insert('corporate_employee', $data2);
            } if($rela !='Self') {
        $this->db->insert('corporate_employee_family', $data2);
              }
        $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Employees Added Successfully</strong>
                  </div>';
} 
}
 //$this->fun->sendMail($_FILES['add_file']['name']);
       return $msg;

 }
 


}




   function all_additions(){
    return $this->db->get_where('addition')->result();
   }
















}
?>