<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Success</title>
</head>
<body>
    <h1><?php echo htmlspecialchars($_GET['message'] ?? 'Payment Successful'); ?></h1>
    <p>Thank you for your payment! Your transaction has been successfully completed.</p>
</body>
</html>
