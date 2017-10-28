<?php
session_start();
include 'header.php';
date_default_timezone_set('Asia/Kolkata'); 
if(isset($_SESSION['u_id'])){
    $dta=date('Y/m/d');
    $expdt=$_SESSION['u_passexpiraydate'];
    $d1=strtotime($dta);
    $d2=strtotime($expdt);
    $diff=$d1-$d2;
    $day=abs(floor($diff/(60*60*24)));
    $dateOfBirth = $_SESSION['u_dob'];
    $today = date('Y/m/d');
    $diff = date_diff(date_create($dateOfBirth), date_create($today));
    $age=$diff->format('%y');
    if($age>24){
        echo ' <div class="pr"><form action="include/logout.inc.php" method="POST">
           <button type="submit" name="submit" class="bt1" >Logout</button>
           </form></div>';
        echo '<script>alert("Your age is invalid for concession")</script>';
    echo '<p style="text-align:center;font-size:50px;"> <b>Your age is invalid for concession</b></p>';
    }
    else{ if ($d1 < $d2) 
        {


	echo ' <div class="pr"><form action="include/logout.inc.php" method="POST">
           <button type="submit" name="submit" class="bt1" >Logout</button>
           </form></div>
           <div id="toprint">
       <nav class="main">
			<div class="main-heading">
				Central Railway 
			</div>
 	  		<div class="block-container">
	 	    	<div class="block1">
					<form>
						Sr.No.01-<input type="text" id="Recipet" name="Recipet" value='.$_SESSION['u_id'].' disabled>				
					</form>
				</div>
				<div class="block2">
					Com.485-B<br>REV.72
				</div>
		   </div>
		   <div class="main-heading1">
		   	
		   </div>
	   	</nav>
	   	<div class="main-heading1">
	   		<b>School Certificate to be issued only to Students of not more than 25 years of age except otherwise permitted under the Rules</b>
	   	</div>
	   	<section class="container">
	   		<form>
	   			I HEREBY CERTIFY that* <input type="text" name="firstname" value='. $_SESSION['u_first'].'  disabled> <input type="text" name="lastname" value='. $_SESSION['u_last'].'  disabled> regularly attend this College for the purpose of receiving education, the Instituation of which I am the Principal/Head Master and her/his age this day, according to my belief and from equiries I have made, his age is <input class="age" type="text" name="age" value='.$age.' disabled> and date of birth as entered in the College Register being <input type="text" name="dob" id="dob" value='.$_SESSION['u_dob'].' disabled><br><br>
	   				<div class="sub">
                        <p>The Particulars of the recognised course he/she is studying is given below:</p>
	   				    <p>(a) Name of the course  <input type="text" id="course" name="course"  value='.$_SESSION['u_branch'].' disabled></p>
                        <p>(b) Duration of the Course 4years.</p>
                        <p>(c) Hours of Instructions per day 8 Hours</p>
                        <p>(d)Caste : <input type="text" name="station" value='.$_SESSION['u_cast'].' disabled></p>
	   				</div>
                    <div class="sub1">
                        <p>He/She is, therefore, entitled to the Season Ticket as detailed below at the concession rate:-</p><br>
                        <table style="text-align: left; width: 70%; height: 100px;" border="1" cellpadding="0" cellspacing="0">
                                <tr style="height: 50px;">
                                
                                    <th style="text-align: center;">Period</td>
                                    <th style="text-align: center;">From</th>
                                    <th style="text-align: center;">To</th>
                                    <th style="text-align: center;">Date of issued</th>
                                    <th style="text-align: center;">Class</th>
                                </tr>

                                <tr style="height: 50px;">
                                
                                    <td style="text-align: center;"><input type="text" name="station" value='.$_SESSION['u_pperiod'].' disabled></td>
                                    <td style="text-align: center;"><input type="text" name="station" value='.$_SESSION['u_station'].' disabled></td>
                                    <td style="text-align: center;" >Kharghar</td>
                                    <td style="text-align: center;" ><input type="text" name="station" value='.$_SESSION['u_passtakendate'].' disabled></td>
                                    <td style="text-align: center;"><input type="text" name="station" value='.$_SESSION['u_pclass'].' disabled></td>
                                </tr>
                        </table>
                    </div>
                    <div class="sub2">
                        <div class="cer1">
                            Dated  <input type="text" name="station" value='.$_SESSION['u_passtakendate'].' disabled><br>
                        </div>
                    </div>
            </form>
	   	</section>
        </div>
        <div id="print" class="print"><button onclick="printContent()">Print</button></div>
                
        ';
   }
  else{
        echo '<script>alert("Pass not expire days remaining "+'.$day.')</script>';
        exit();
 }
}}else{
echo '<script>alert("You are not log in")</script>';
    echo '<p style="text-align:center;font-size:50px;"> <b>You are not log in</b></p>';

	
}
