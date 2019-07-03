<?php
    $candidateName = $_POST["name"]; 
    $candidateGender = $_POST["gender"]; 
    $candidateAge = $_POST["age"];  
    $candidateEmail = $_POST["email"]; 
    $candidatePhone = $_POST["phone"]; 
    $candidateState = $_POST["state"]; 
    $candidateMembership = $_POST["membership"];  
    $candidateStudent = $_POST["student"];  
    $candidateInstitution = $_POST["institution"];
    $candidateOffice = $_POST["office"]; 
    $candidateHave = $_POST["have"];  
    
    $candidateWorkshop = $_POST["workshop"]; 
    $candidateWhat = $_POST["what"]; 

    $conn= new mysqli ("127.0.0.1", 'root', '', 'look2019form');
    if ($conn->connect_error){
    	die("Failed: " . $connect->connect_error);
    }
    $regQuery="INSERT INTO registrationform (name, Gender, phone, state, membership, student,workshop,) VALUES ('$candidateName','$candidateGender','$candidateAge','$candidatePhone','$candidateState','$candidateMembership','$candidateStudent','$candidateInstitution','$candidateWorkshop',)";
    $regResult=$conn->query($regQuery);

    $sql="select * from registrationform where Phone = $candidatePhone";
    $sqlResult= $conn->query($sql);
    
  if ($sqlResult->num_rows > 0) {
  	$row = $sqlResult->fetch_array(0);
  }
$conn->close();
?>
<html>
    <head>
    
    </head>
    <body>
    	<div id="johnson">
    <div>
    	<img src="image/smc.png" alt="" width="120%">
       
    </div>
    <center>
      <table class="table">
      	<h4>Registration details</h4>
            <tr class="me" style="border: 2px">
            	 <tr style="border: 5px solid blue" >
                <td>Registration Id:</td>
                <td><?php echo $row['id']; ?></td>
            </tr>
            <tr>
                <td>Name:</td>
                <td><?php echo $row['Name']; ?></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td><?php echo $candidateGender; ?></td>
            </tr>
          
            <tr>
                <td >Email:</td>
                <td><?php echo $candidateEmail; ?></td>
            </tr>
            <tr>
                <td>Phone:</td>
                <td><?php echo $candidatePhone; ?></td>
            </tr>
            <tr>
                <td>State:</td>
                <td><?php echo $candidateState; ?></td>
            </tr>
            <tr>
                <td>Membership:</td>
                <td><?php echo $candidateMembership; ?></td>
            </tr>
            <tr>
                <td> Student:</td>
                <td><?php echo $candidateStudent; ?></td>
            </tr>
           
                       <tr>
                <td>Worshop:</td>
                <td><?php echo $candidateWorkshop; ?></td>
            </tr>
            <tr>
                <td>what is your expectation:</td>
                <td><?php echo $candidateWhat; ?></td>
            </tr>
        </table>
   
   </div>     
      
      <center> <button style="background-color: green; color:white; padding: px; width:30%" onclick="printDiv('johnson')"><h1>print</button></center>
       <script>
		function printDiv(johnson){
			var printContents = document.getElementById('johnson').innerHTML;
			var originalContents = document.body.innerHTML;
			document.body.innerHTML = printContents;
			window.print();
			document.body.innerHTML = originalContents;
		}
	</script>
        
    </body>
</html>