<?php
$error=NULL;
if(isset($_POST['submit'])){
    $u=$_POST['u'];
    $u=$_POST['p'];
    $u=$_POST['p2'];
    $u=$_POST['e'];
    if(strlen($u)<5){
        $error="<p>Your username must be at least 5 characters</p>";
    }
    else if($p2 != $p){
        $error ="<p>Your Passwords do not match</p>";
    }else{
        $mysqli= NEW MySQLi('localhost','root','','test');
        $u=$mysqli->real_escape_string($u);
    }
}
?>
<html>
    <head>
        <link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <form method="POST" action="">
        <table border="0" align="center" cellpadding="5">
            <tr>
                <td align="right">Username: </td>
                <td><input type="TEXT" name="u" required/></td>
            </tr>
            <tr>
                <td align="right">Password: </td>
                <td><input type="PASSWORD" name="p" required/></td>
            </tr>
            <tr>
                <td align="right">Repeat Password: </td>
                <td><input type="PASSWORD" name="p2" required/></td>
            </tr>
            <tr>
                <td align="right">Email Address: </td>
                <td><input type="EMAIL" name="e" required/></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                <input type="SUBMIT" name="submit" value="Registered" required/></td>
            </tr>
        </table>
    </form>
    <center>
        <?php
        echo $error ;
        ?>
    </center>
</body>
</html>
