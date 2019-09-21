<div class="block-content">
          <table class="table table-borderless table-striped table-vcenter" width="100%">
           <tbody>
           
                <th class="text-left" width="7%"> Policy ID</th>
                <th class="text-left" width="10%">Sum Insured</th>
                <th class="text-left" width="12%">Family Floater</th>
                <th class="text-left" width="10%">Nominee Name</th>
                <th class="text-left" width="10%">Relationship</th>
                <th class="text-left" width="10%">Date Of Birth</th>
           
           
   
<?php              
foreach($dummy as $ds)
{ 
?>	   
				   
           <tr> 
                
                
               
                <td class="text-left" width="7%"><input class="form-control" type="text" value="<?php echo $ds->individual_policy_id;?>" name="cost"></td>
                <td class="text-left" width="10%"><input class="form-control" type="text" value="<?php echo $ds->sum_insured;?>" name="warranty"></td>
                <td class="text-left" width="12%"><input class="form-control" type="text" value="<?php echo $ds->family_floater;?>" name="duedate"></td>
                <td class="text-left" width="10%"><input class="form-control" type="text" value="<?php echo $ds->nominee;?>" name="amount"></td>
                <td class="text-left" width="10%"><input class="form-control" type="text" value="<?php echo $ds->nominee_relationship;?>" name="amount"></td>
                <td class="text-left" width="10%"><input class="form-control" type="text" value="<?php echo $ds->nominee_dob;?>" name="amount"></td>
          </tr>      
 
   <?php            
     } 
	 ?>
     
   </tbody>
          </table>   
          
          
     <!--     
          
          <div class="block-content block-content-full text-center">
          <input type="submit" name="final_sale" value="Submit" class="btn btn-sm btn-primary">
            
          </div>
          
      -->    
          
          
     
 </div> 