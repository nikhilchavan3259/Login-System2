<?php
session_start();
include 'header.php';
$dae=date('Y/m/d');
$month = date('F', strtotime($dae));
if(isset($_SESSION['u_id'])){
  if ($month=="July" || $month=="August") {
      echo '    <div class="pr">
                    <form action="include/logout.inc.php" method="POST">
                        <button type="submit" name="submit" class="bt1">Logout</button>
                    </form>
                    <div class="pr2"> <form action="include/period.inc.php" method="POST">
                        <h3 style="padding-top:10px;">Select the Class</h3><br>
                        <select name="passclass" class="s1">
                            <option value="secondclass">II Class</option>
                            <option value="firstclass">I Class</option>
                        </select><br>
                        <h3>Select the Period</h3><br>
                        <select name="passperiod" class="s2">
                            <option value="Monthly">Monthly</option>
                        </select><br>
                        <form>
                            <button name="submit" value="submit" class="bt2">Next</button><br>
                        </form>
                    </div>
                </div>
        ';  }
  else{
	echo '      <div class="pr">
                    <form action="include/logout.inc.php" method="POST">
                        <button type="submit" name="submit" class="bt1">Logout</button>
                    </form>
                    <div class="pr2"> <form action="include/period.inc.php" method="POST">
                        <h3 style="padding-top:10px;">Select the Class</h3><br>
                        <select name="passclass" class="s1">
                            <option value="secondclass">II Class</option>
                            <option value="firstclass">I Class</option>
                        </select><br>
                        <h3>Select the Period</h3><br>
                        <select name="passperiod" class="s2">
                            <option value="Monthly">Monthly</option>
                            <option value="Quaterly">Quaterly</option>
                        </select><br>
                        <form>
                            <button name="submit" value="submit" class="bt2">Next</button><br>
                        </form>
                    </div>
                </div>
        ';
      }
}else{
  echo '<script>alert("You are not log in")</script>';
	echo '<p style="text-align:center;font-size:50px;"> <b>You are not log in</b></p>';
	
}

