<?php include('perch/runtime.php'); ?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Think Better Workshops</title>
    <?php include ( './common/common-head.php' ) ; ?>
</head>

<body>
    
    <?php include ( './components/navbar.php' ) ; ?>
    <?php perch_content('Header'); ?>
    
    <div class="page">
        <div class="section">
             <div class="content top-content">
                 
                 <?php
                    $return_url = 'http://thinkbetter.ie/payment.php';
                    $cancel_url = 'http://mysite.com/home.php';

                      perch_shop_checkout('paypal-express', [
                        'return_url' => $return_url,
                        'cancel_url' => $cancel_url,
                      ]);
                 
                 ?>
            </div>
        </div>
            
        
    </div>
    
    <?php include ( './components/footer.php' ) ; ?>

</body>
    
<?php include ( './common/common-body.php' ) ; ?>    
</html>