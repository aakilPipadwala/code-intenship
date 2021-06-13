<html>
    <form method ="post">
        <table>
            <tr>
            <td> NAME: <input type="text" name ="txt1"><br></td>
            </tr><!-- comment -->
            <tr>
            <td> BRANCH: <input type="text" name ="txt2"><br></td>
            </tr><!-- comment -->
            <tr>
            <td> ENROLLMENT NUMBER: <input type="text" name ="txt3"><br></td><!-- comment -->
            </tr>
            <tr>
            <td> GENDER:<select name="txt4">
             <option>MALE</option>
            <option>FEMALE</option>
            <option>OTHER</option>
        </select></td>
            </tr><!-- comment -->
            <tr>
        <td> MOBILE NUMBER: <input type="number" name ="txt5"><br></td>
            </tr><!-- comment -->
            <tr>
        <td> ADDRESS: <input type="number" name ="txt6"><br><!-- comment --></td>
            </tr><!-- comment -->
            <tr>
        <td>PASSWORD: <input type="password" name ="txt7"><br><!-- comment --></td>
            </tr><!-- comment -->
            <tr>
        <td>BLOOD GROUP: <input type="text" name ="txt8"><br><!-- comment --></td>
            </tr><!-- comment -->
            <tr>
        <td>DOB: <input type="date" name ="txt9"><br></td>
            </tr><!-- comment -->
            <tr>
                <td>
                    <input type="submit"><!-- comment -->
                    
                </td>
            </tr>
            
        </table>
        
    </form> 
</html>
<?php
$host="localhost";
$username="root";
$passwd="";
$dbname="db_intership";
$connection = mysqli_connect($host, $username, $passwd, $dbname);
                if($_POST){ 
                $name =$_POST[txt1];
                $branch =$_POST[txt2];
                $enrollment =$_POST[txt3];
                $gender=$_POST[txt4];
                $mobile=$_POST[tx5];
                $address=$_POST[txt6];
                $passwd=$_POST[txt7];
                $bloodgroup=$_POST[txt8];
                $dob=$_POST[txt9];
                
                 $g= mysqli_query($connection,
                "insert into tbl_student( st_name,st_branch,st_enrollment,st_gender,st_mobile,st_address,st_password,st_bloodgroup,st_dob) "
                 . "value('{$name}','{$branch}','{$enrollment}','{$gender}','{$mobile}','$address','{$passwd}','{$passwd}','{$bloodgroup}''{$dob}')") 
                or die("Error".mysqli_error($connection));
                 if($g)
                 {
                    echo"<script>alert('RECORD ADDED '); </script> ";                    
                 }
                }
?>

