<?php
$connect = mysqli_connect("localhost", "root", "","db_student");

$z =mysqli_query($connect,
        "select * from  tb_student where is_delete=0") or die(mysqli_error($connect));
echo "<table border='1'>";
echo"<tr>";
echo"<th>ID</th>";
echo"<th>NAME</th>";
echo"<th>BRANCH</th>";
echo"<th>MOBILE NUMBER</th>";
echo"<th>ADDRESS</th>";
echo"<th>EMAIL</th>";
echo"<th>DOB</th>";
echo"<th>BLOOD GROUP</th>";
echo"<th>SEM</th>";
echo"<th>ENROLLMENT</th>";
echo"<th> ACTION</th>";
echo"<th> EDIT <th>";
echo"<tr>";
$i=0;
while($e= mysqli_fetch_array($z)){
    $i++;
    echo"<tr>";
    
        echo "<td> $i</td>";
        echo"<td> {$e['st_name']}</td>";
        echo"<td> {$e['st_branch']}</td>";
       echo"<td> {$e['st_mobile']}</td>";
       echo"<td> {$e['st_address']}</td>";
       echo"<td> {$e['st_email']}</td>";
       echo"<td> {$e['st_dob']}</td>";
       echo"<td> {$e['st_bloodgroup']}</td>";
       echo"<td> {$e['st_sem']}</td>";
       echo"<td> {$e['st_enrollment']}</td>";
       echo"<td> <a href='delete1.php?deleteid={$e['st_id']}' >  DELETE </a></td>";
           echo"<td> <a href='edit.php?eid={$e['st_id']}' >  EDIT </a></td>";   
       echo"</tr>";
}
echo "</table>";
 echo "<a href='practice.php'> ADD RECORD </a>";

