<?php
$connect = mysqli_connect("localhost", "root", "","db_student");
$edit=$_GET['eid'];
$x= mysqli_query($connect,"select * tb_student where st_id='{eid}'") or die(mysqli_error($connect));
$q= mysqli_fetch_array($x);
?>
<htmL>
    <form method="post">
        <table>
            <tr>
                <td>
                    NAME :<input type="text" value="<?php echo $q['st_name'] ?>" name="txt1">
                </td>
            </tr>
            <tr>
                <td>
                    BRANCH:<input type="text" value="<?php echo $q['st_branch'] ?>" name="txt2"><!-- comment -->
                </td>
            </tr>
            <tr>
                <td>
                    MOBILE NUMBER:<input type="text" value="<?php echo $q['st_mobile'] ?>" name="txt3">
                </td>
            </tr>
            <tr>
                <td>
                    ADDRESS:<input type="text" value="<?php echo $q['st_address'] ?>"name="txt4">
                </td>
            </tr>
            <tr>
                <td>
                    EMAIL:<input type="email"value="<?php echo $q['st_email'] ?>" name="txt5">
                </td>
            </tr>
            <tr>
                <td>
                    DOB:<input type="date" value="<?php echo $q['st_dob'] ?>"name="txt6">
                </td>
            </tr>
            <tr>
                <td>
                    BLOOD GROUP: <input type="txt" value="<?php echo $q['st_bloodgroup'] ?>"  name="txt7"><!-- comment -->
                </td>
            </tr>
            <tr>
                <td>
                    SEMESTER:<input type="txt" value="<?php echo $q['st_sem'] ?>"name="txt8"><!-- comment -->
                </td>
            </tr>
            <tr>
                <td>
                    ENROLLMENT:<input type="txt"value="<?php echo $q['st_enrollment'] ?>" name="txt9">
                </td>
            </tr>
            <tr>
                <td>
                    <input type ="submit"><!-- comment -->
                    <input type ="reset">
                </td>
            </tr>
        </table>