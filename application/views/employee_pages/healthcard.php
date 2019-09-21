<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Health card</title>
<style>

.healthcard {
	width: 221px;
	height: auto;
	background: #fff;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	border-radius: 5px;
	border: 1px solid #ccc;
	padding:3px;
  display: inline-block;
  margin: 30px 10px 10px 0px;
}
.healthcard .logo {
	width: 100%;
	/*background: #ff004c;*/
	padding: 10px 0px;
	text-align: center;
	margin-bottom: 5px;
	border-radius: 5px 5px 0px 0px
}
.healthcard .logo img {
	width: 70%;
	height: auto;
}
.healthcard .title {
	width: 100%;
	background: #548fd5;
	padding: 10px 0px;
	text-align: center;
	margin-bottom: 5px;
	font-size: 14px;
	color: #fff;
	font-weight: bold;
}
.healthcard .healthcard-details {
	margin: 0px 0px 10px 0px;
	padding: 0px;
	border-collapse: collapse;
	border: none;
	width: 100%;
	height: auto;
	clear:both;
}
.healthcard .healthcard-details .label {
	color: #ff004c;
	font-weight: bold;
	width: 35%;
	float: left;
	margin: 0 5% 5px 0;
	text-align: left;
}
.healthcard .healthcard-details .details {
	color: #548fd5;
	font-weight: normal;
	width: 60%;
	float: left;
	margin: 0;
	text-align: left;
}
.clearboth {
	clear:both;
}
.strip {
	height:8px;
	background-color: #ffd96a;
	border-radius: 0px 0px 5px 5px;
}
.healthcard12 {
  width: 980px;
  display: inline-block;
 
}
</style>
</head>
<body>
<div class="healthcard1">
<?php 
foreach($ids as $id)
{

$pol=$this->db->get_where('sales_booking',array('policy_number'=>$id->policy_id))->row();
$inc_company = $this->db->get_where('insurance_companies', array('id' => $pol->company))->row();
$poln=$this->db->get_where('insurance_policy',array('id'=>$pol->policy_name))->row();
?>
<div class="healthcard">
  <div class="logo"><img src="uploads/company/<?php echo $inc_company->logo;?>" alt="" /></div>
  <div class="title"><?php echo $inc_company->name;?></div>
  <div class="clearboth"></div>
  <div class="healthcard-details">
    <div class="label">Product Name</div>
    <div class="details"><?php echo $poln->name;?></div>
  </div>
  <div class="clearboth"></div>
 <!-- <div class="healthcard-details">
    <div class="label">TPA Name</div>
    <div class="details">Paramount Health Services TPA Pvt Ltd</div>
  </div>-->
  <div class="clearboth"></div> 
  <div class="healthcard-details">
    <div class="label">Policy Number</div>
    <div class="details"><?php echo $id->policy_id;?></div>
  </div>
  <div class="clearboth"></div>
 <!-- <div class="healthcard-details">
    <div class="label">Group Name</div>
    <div class="details">State Bank of India</div>
  </div>-->
  <div class="clearboth"></div> 
  <div class="healthcard-details">
    <div class="label">Person Name</div>
    <div class="details"><?php echo $id->name;?></div>
  </div>
  <div class="clearboth"></div>
  <div class="healthcard-details">
    <div class="label">Member ID</div>
    <div class="details"><?php echo $id->id_card_no;?></div>
  </div>
  <div class="clearboth"></div>
  <div class="healthcard-details">
    <div class="label">Start Date</div>
    <div class="details"><?php echo $pol->start_date;?></div>
  </div>
  <div class="clearboth"></div>
  <div class="healthcard-details">
    <div class="label">Member Relation</div>
    <div class="details"><?php echo $id->relation;?></div>
  </div>
  <div class="clearboth"></div>
  <div class="healthcard-details">
    <div class="label">Gender</div>
    <div class="details"><?php echo $id->gender;?></div>
  </div>
  <div class="clearboth"></div>
  <div class="healthcard-details">
    <div class="label">Date Of Birth, Age</div>
    <div class="details"><?php echo $id->date_of_birth;?>, <?php echo $id->age;?></div>
  </div>
  <div class="clearboth"></div>
  <div class="strip"></div>
</div>


<?php } ?>

<div class="healthcard">
  <div class="logo"><img src="uploads/company/<?php echo $inc_company->logo;?>" alt="" /></div>
  <div class="title"><?php echo $inc_company->name;?></div>
  <div class="clearboth"></div>
  <div class="healthcard-details">
    <div class="label">Product Name</div>
    <div class="details"><?php echo $poln->name;?></div>
  </div>
  <div class="clearboth"></div>
 <!-- <div class="healthcard-details">
    <div class="label">TPA Name</div>
    <div class="details">Paramount Health Services TPA Pvt Ltd</div>
  </div>-->
  <div class="clearboth"></div> 
  <div class="healthcard-details">
    <div class="label">Policy Number</div>
    <div class="details"><?php echo $id->policy_id;?></div>
  </div>
  <div class="clearboth"></div>
 <!-- <div class="healthcard-details">
    <div class="label">Group Name</div>
    <div class="details">State Bank of India</div>
  </div>-->
  <div class="clearboth"></div> 
  <div class="healthcard-details">
    <div class="label">Person Name</div>
    <div class="details"><?php echo $id->name;?></div>
  </div>
  <div class="clearboth"></div>
  <div class="healthcard-details">
    <div class="label">Member ID</div>
    <div class="details"><?php echo $id->id_card_no;?></div>
  </div>
  <div class="clearboth"></div>
  <div class="healthcard-details">
    <div class="label">Start Date</div>
    <div class="details"><?php echo $pol->start_date;?></div>
  </div>
  <div class="clearboth"></div>
  <div class="healthcard-details">
    <div class="label">Member Relation</div>
    <div class="details"><?php echo $id->relation;?></div>
  </div>
  <div class="clearboth"></div>
  <div class="healthcard-details">
    <div class="label">Gender</div>
    <div class="details"><?php echo $id->gender;?></div>
  </div>
  <div class="clearboth"></div>
  <div class="healthcard-details">
    <div class="label">Date Of Birth, Age</div>
    <div class="details"><?php echo $id->date_of_birth;?>, <?php echo $id->age;?></div>
  </div>
  <div class="clearboth"></div>
  <div class="strip"></div>
</div>




</div>

</body>
</html>
