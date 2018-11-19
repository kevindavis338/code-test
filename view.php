<!DOCTYPE html>
<html>
<head>
<title>PHP Coding Test</title>
<link rel="stylesheet" href="styles.css">
 <?php
   include ('/database/database.php');
   
   $rowperpage = 10;
   $row = 0;
   
   //This will be the previous button
   if(isset($_POST['prev'])){
        $row = $_POST['row'];
        $row -= $rowperpage;
        if( $row < 0 ){
            $row = 0;
        }
    }
	
	//This will be the next button
	if(isset($_POST['next'])){
        $row = $_POST['row'];
        $allcount = $_POST['allcount'];

        $val = $row + $rowperpage;
        if( $val < $allcount ){
            $row = $val;
        }
    }
	
	//This will generate the order by and sort for table header.
    function sortorder($fieldname){
        $sorturl = "?order_by=".$fieldname."&sort=";
        $sorttype = "asc";
        if(isset($_GET['order_by']) && $_GET['order_by'] == $fieldname){
            if(isset($_GET['sort']) && $_GET['sort'] == "asc"){
                $sorttype = "asc";
            }
        }
        $sorturl .= $sorttype;
        return $sorturl;
    }
 
 ?>
</head>
<body>
<h1>PHP Coding Test</h1>

<div id="content">
<table width="100%" id="emp_table" border="0">
  <tr class="tr_header">
      <th ><a href="<?php echo sortorder('name'); ?>" class="sort">Name</a></th>
	  <th ><a href="<?php echo sortorder('email'); ?>" class="sort">E-mail Address</a></th>
	   <th >Message</th>
	    <th ><a href="<?php echo sortorder('date'); ?>" class="sort">Date and Time Submitted</a></th>
	</tr>
	<?php
	  $sql = "SELECT COUNT(*) AS cntrows FROM tbl_message";
	  
	  $result = mysqli_query($con,$sql);
      $fetchresult = mysqli_fetch_array($result);
      $allcount = $fetchresult['cntrows'];
	  
	  $orderby = " ORDER BY message_id desc ";
	  
	  $sql = "SELECT * FROM tbl_message ".$orderby." limit $row,".$rowperpage;
      $result = mysqli_query($con,$sql);
      $sno = $row + 1;
	  
	  if (!$result) {
        printf("Error: %s\n", mysqli_error($con));
        exit();
      }
	  
	  while($data = mysqli_fetch_array($result)){
		  $name    = $data['name'];
		  $email   = $data['email'];
		  $message = $data['message'];
		  $dt      = $data['date-entered'];
		  
	  ?>
	    <tr>
           
                <td align='center'><?php echo $name; ?></td>
                <td align='center'><?php echo $email; ?></td>
                <td align='center'><?php echo $message; ?></td>
                <td align='center'><?php echo $dt; ?></td>
				</tr>
		

    <?php
       $sno ++;	
	  }
	  
	
	
	
	?>
</table>
 <form method="post" action="">
        <div id="div_pagination">
            <input type="hidden" name="row" value="<?php echo $row; ?>">
            <input type="hidden" name="allcount" value="<?php echo $allcount; ?>">
            <input type="submit" class="button" name="prev" value="Previous">
            <input type="submit" class="button" name="next" value="Next">
        </div>
    </form>
</div>


</body>
</html>

