<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>KALAM REGISTRATION</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv='cache-control' content='no-cache'>
<meta http-equiv='expires' content='0'>
<meta http-equiv='pragma' content='no-cache'>
</head>
<body>
<?php
$res=mysqli_query($link,"select * from `users`");
while($result = mysqli_fetch_assoc($res))
{
echo $result['id'].'----'.$result['name'].'----'.$result['email'].'----'.$result['phone'].'----'.$result['college'].'----'.$result['events'];
echo '<br>';
}

echo '<h1>noo</h1>';
?>
mm
</body>
</html>