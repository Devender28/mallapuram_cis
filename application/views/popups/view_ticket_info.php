<?php
 $ticket_from=$this->fun->getnewfieldvalue("ticket_bucket","ticket_from","ticket_id",$info->ticket_id);
if($ticket_from=='individual')
{
@$member_max_id=$this->fun->getnewfieldvalue("ticket_bucket","member_max_id","ticket_id",$info->ticket_id);
@$person_details=$this->db->get_where('ind_registration',array('max_id'=>$member_max_id))->row();
@$name=$person_details->first_name.'&nbsp'.$person_details->middle_name.'&nbsp'.$person_details->last_name;
@$mobile=$person_details->mobile1;
}

if($ticket_from=='corporate')
{
@$claims_id=$this->fun->getnewfieldvalue("ticket_bucket","claims_max_id","ticket_id",$info->ticket_id);
@$claims_intimation_details=$this->db->get_where('claims_intimation',array('claims_id'=>$claims_id))->row();

@$endorse_id=$this->fun->getnewfieldvalue("ticket_bucket","endorsement_max_id","ticket_id",$info->ticket_id);
@$endreq_details=$this->db->get_where('endorsement_request',array('endorsement_max_id'=>$endorse_id))->row();
if(@$claims_id)
{
    $clnt_id = $claims_intimation_details->corporate_id;
    @$name=$this->fun->getnewfieldvalue("corporate_employee","name","employee_id",$claims_intimation_details->employee_id);
@$mobile=$this->fun->getnewfieldvalue("corporate_employee","phone","employee_id",$claims_intimation_details->employee_id);

} else if(@$endorse_id)
{
    $clnt_id = @$endreq_details->client;
    @$name=$this->fun->getnewfieldvalue("corporate_client","authorised_contact_person1_name","id",$clnt_id);
@$mobile=$this->fun->getnewfieldvalue("corporate_client","authorised_contact_person1_phone","id",$clnt_id);
}

//@$name=$this->fun->getnewfieldvalue("corporate_employee","name","employee_id",$claims_intimation_details->employee_id);
//@$mobile=$this->fun->getnewfieldvalue("corporate_employee","phone","employee_id",$claims_intimation_details->employee_id);
@$company=$this->fun->getnewfieldvalue("corporate_client","name","id",$clnt_id);
}
?>




<div class="block">

<div class="block-content">
                             
                           
 
                 <table class="table table-bordered">
                                        
                                        <tbody>
                                            
<?php                                           
if($ticket_from=='corporate')
{                               
?>                                           
                                            
                                           <tr class="info">
                                                
                                                <td class="text-primary">Corporate Client</td>
                                                <td class="hidden-xs">
                                                    <span ><?php echo $company;?></span>
                                                </td>
                                                
                                            </tr> 
                                            
<?php
}
?>
                                            
                                            
                                            
                                            
                                            <tr class="active">
                                                
                                                <td class="text-primary">Person Name</td>
                                                <td class="hidden-xs">
                                                    <span ><?php echo @$name;?></span>
                                                </td>
                                                
                                            </tr>
                                           
                                            
                                            
                                            <tr class="danger">
                                                
                                                <td class="text-primary">Phone Number</td>
                                                <td class="hidden-xs">
                                                    <span ><?php echo @$mobile;?></span>
                                                </td>
                                                
                                            </tr>
                                            
                                            
                                            
                                            
                                           
                                           
                                           
                                            
                                                        
                                            
                                            
                                            
                                            
                                            
                                            
                                        </tbody>
                                    </table>
 
 
                             
                        </div>
                        
     </div>