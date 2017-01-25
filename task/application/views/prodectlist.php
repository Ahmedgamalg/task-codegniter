<!DOCTYPE html>
<html>
<head>
	<title> admin panal </title>

  
</head>
<body>


<?php


$username=$this->session->userdata['username'];
echo "Hello admin <b id='welcome'><i>" . $username. "</i> !</b>";
?>
<center>
	<h2>prodect List </h2>
	
	<a href="<?php echo base_url('admincontroller/addform');?>"> add anew prodect </a>
  <?php
if(!empty($row)){

  ?>
	<table border="1">
		
		<th>prodect name</th>
		<th> prodect discreption</th>
    <th>prodect image<th>
    
		<?php 

foreach ($row as $rows) {
	echo " <tr>";
     echo form_open('admincontroller/edit');
    echo "<td>";
    echo form_hidden('id',$rows->id);
     echo form_input('prodect_name',$rows->prodect_name); 
     echo "</td>";  
    echo "<td>";
     echo form_textarea('prodect_disc',$rows->prodect_disc);
     echo "</td>";
     echo "<td>";?>
       <img style='width: 118px; height: 149px;' src="http://localhost:80/task/img/<?php echo $rows->image_prodect;?>" alt="">
      <?php
       echo "</td>";
    echo "<td>";
      echo form_submit('update','updata');
       
    echo form_close(); 
echo form_open('admincontroller/delete/'.$rows->id);
echo form_submit('delete','delete');
echo form_close();

          
echo "</td>";
          
          
   echo "</tr>";       

	
}

		?>
	</table>
  <?php  }?>
</center>
<a href='<?php echo base_url()."usercontroller/logout";?>'> Logout</a>
</body>

</html>
