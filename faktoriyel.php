<form method="post">
<input type="text" name="sayi">
<input type="submit" name="faktoriyeli" value="faktoriyeli">
</form>
<?php
if(isset($_POST['faktoriyeli']))
$sayi=$_POST['sayi'];
$fakt=1;
for($i=1;$i<=$sayi;$i++)
    $fakt=$fakt*$i;
    echo $fakt;




?>    