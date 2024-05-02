<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <link rel="stylesheet" href="<?php echo e(public_path('pdf.css')); ?>" type="text/css"></head>
<body>
    <table class="w-full">
        <tr>
            <td class="w-1/2"> 
                    <div><h4>To: </h4></div>
                    <div><?php echo e(auth()->user()->name); ?></div>
                    <div>123 Acme Str.</div>
                </td>
                <td class="w-1/2">
                    <div><h4>From:</h4></div>
                    <div>FlyEase</div>
                    <div>Morocco</div>
                </td>
            </tr>
        </table>
    </div>
 
    <div class="margin-top">
        <table class="w-full">
            <tr>
                <th class="w-1/4">Airport</th>
                <th class="w-1/4">Service</th>
                <th class="w-1/4">Date</th>
                <th class="w-1/4">Time</th>
                <th class="w-1/4">Total Price</th>
            </tr>
            <tr class="items">
                <td class="w-1/4">
                    <?php echo e($booking['airport']['name']); ?>

                </td>
                <td class="w-1/4">
                    <?php echo e($booking['service']['price'] ?? 'N/A'); ?>

                </td>
                <td class="w-1/4">
                    <?php echo e($booking['date']); ?>

                </td>
                <td class="w-1/4">
                    <?php echo e($booking['time']); ?>

                </td>
                <td class="w-1/4">
                    $267<?php echo e($booking['totalPrice']); ?>

                </td>
            </tr>
        </table>
    </div>
 
    <div class="total">
        Total: $267<?php echo e($booking['totalPrice']); ?> USD
    </div>
 
    <div class="footer margin-top">
        <div>Thank you</div>
        <div>&copy; FlyEase</div>
    </div>
</body>
</html>
<?php /**PATH /var/www/html/resources/views/pages/pdf.blade.php ENDPATH**/ ?>