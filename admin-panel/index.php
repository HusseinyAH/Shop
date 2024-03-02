<?php
include "includes/templates/header.php";
include "includes/languages/eng.php";
include "connect.php"

?>

<form action="" class="login">
    <input class="form-control" type="text" name="user" placeholder="username">
    <input class="form-control" type="password" name="pass" placeholder="password">
    <input class="btn btn-primary" type="submit" value="login">


</form>
<?php
include "includes/templates/footer.php"
?>

<?php 
// echo lang('Message')."   ".lang('Admin');
?>  