<?php
require_once 'ContactInfo1.php';
require_once 'ContactInfo2.php';

$ci1Instance = new ContactInfo1();
$ci1Instance->email = 'test@gmail.com';
$ci1Instance->phone = '9999999999';

$email_test_ci1 = $ci1Instance->email_is_valid();
$phone_test_ci1 = $ci1Instance->phone_is_valid();

$email_test_ci2 = ContactInfo2::email_is_valid('test@gmail.com');
$phone_test_ci2 = ContactInfo2::phone_is_valid('9999999999');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>CI 1</h2>
    Email: <?= $email_test_ci1 ?><br>
    Phone: <?= $phone_test_ci1 ?><br>

    <h2>CI 2</h2>
    Email: <?= $email_test_ci2 ?><br>
    Phone: <?= $phone_test_ci2 ?><br>
</body>
</html>

 