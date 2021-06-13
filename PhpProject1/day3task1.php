<html>

    <form action="process.php" method="post">
    <table>
        <tr> 
            <td>NAME :</td>
            <td><input type="text" name="txt1"></td>
        </tr>
        <tr> 
            <td>ENROLLMENT NUMBER:</td>
            <td><input type="text" name="txt2"></td>
        </tr>

        <tr>
            <td>COURSE:</td>
            <td><input type="text" name="txt3"></td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td> <input type="radio" name="rdo1" >MALE<BR></td>
            <td> <input type="radio" name="rdo1" >Female<br></td>
        </tr>
        <tr>
            <td>
                SEMESTER:
            </td>
            <td>
                <input type="text" name="txt4">
            </td>           
        </tr>
        <tr>
            <td>
                <input type ="submit" ><!-- comment -->
            </td>
            <td>
                <input type ="reset">
            </td>
        </tr>
    </table>
</form>

</html>