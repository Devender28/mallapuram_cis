<option value="">Please Select Corporate Employee</option>


<?php 

foreach($corporate_employees as $corporate_employee){?>             
                                                   
                                                    <option value="<?php echo $corporate_employee->id;?>"><?php echo $corporate_employee->name;?></option>
                                                    
 <?php

}
?>   