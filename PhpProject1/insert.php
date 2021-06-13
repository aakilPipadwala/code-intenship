<?php
$connect= mysqli_connect("localhost","root","","db_student");
if($_POST)
{
    $a=$_POST['txt1'];
    $b=$_POST['txt2'];
    $c=$_POST['txt3'];
    $d=$_POST['txt4'];
    $e=$_POST['txt5'];
    $f=$_POST['txt6'];
    $g=$_POST['txt7'];
    $h=$_POST['txt8'];
    $i=$_POST['txt9'];
    
    $j= mysqli_query($connect,
            "insert into tb_student(st_name,st_branch,st_mobile,st_address,st_email,st_dob,st_bloodgroup,st_sem,st_enrollment)"
            ."value('{$a}','{$b}','{$c}','{$d}','{$e}','{$f}','{$g}','{$h}','{$i}')") 
            or die(mysqli_error($connect));
            
}

?>
<html>
    <form method ="post">
        <table>
            <tr>
                <td>
                    NAME:<input type="txt" name="txt1">
                </td>
            </tr>
             <tr>
                <td>
                    BRANCH:<input type="txt" name="txt2">
                </td>
            </tr>
             <tr>
                <td>
                    MOBILE NUMBER:<input type="txt" name="txt3">
                </td>
             </tr>
             <tr>
                <td>
                    ADDRESS:<input type="txt" name="txt4">
                </td>
            </tr>  <tr>
                <td>
                    EMAIL:<input type="txt" name="txt5">
                </td>
            </tr>
             <tr>
                <td>
                    DOB:<input type="date" name="txt6">
                </td>
            </tr>
             <tr>
                <td>
                    BLOOD GROUP:<input type="txt" name="txt7">
                </td>
            </tr>
             <tr>
                <td>
                    SEM:<input type="txt" name="txt8">
                </td>
            </tr>
             <tr>
                <td>
                    ENROLLMENT NO:<input type="txt" name="txt9">
                </td>
            </tr>
            
        </table>
        
    </form>
</html>