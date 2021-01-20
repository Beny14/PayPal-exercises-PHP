<!-- ........... 1 ........... -->
<!-- PayPal -->
    <!-- <b>Nume produs</b><br>
    Acesta este sampon pentru par...<br>
    <img src=”imagineaMea.jpg” /><br>
    pret: 35$
    <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
        <input type="hidden" name="cmd" value="_xclick">
        <input type="hidden" name="business" value="TG849BEAFEREG">
        <input type="hidden" name="lc" value="US">
        <input type="hidden" name="item_name" value="mojproizvod">
        <input type="hidden" name="item_number" value="15">
        <input type="hidden" name="amount" value="50.00">
        <input type="hidden" name="currency_code" value="USD">
        <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
        <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" mce_src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
        <img alt="" border="0"src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" mce_src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
    </form> -->

<!-- ........... 1 ........... -->

<?php
    // $produse = array("sampon" => 10.10, "sapun" => 5.20, "deodorant" => 15.99);
    // foreach($produse as $nume => $pret){
?>
    <!-- <b><?php echo $nume; ?></b><br>
    pret: <?php echo $pret . "$"; ?>
    <input type="hidden" name="item_name" value="<?php echo $nume; ?>">
    <input type="hidden" name="amount" value="<?php echo $pret; ?>"> -->
<!-- SAU -->
    <!-- <input type="text" name="amount" value="<?php echo $pret; ?>"> -->
<?php
    // }
?>

<!-- <html>
    <body onload="document.paypalForma.submit();"> Cerere in curs de procesare, va rugam asteptati
    <form method="post" name="paypalForma" action="https://www.paypal.com/cgi-bin/webscr">
        <input type="hidden" name="business" value="utilizator@php.com" />
        <input type="hidden" name="cmd" value="_xclick" />
        <input type="hidden" name="amount" value="100" />
    </form>
    </body>
</html> -->

<?php
    // // read the post from PayPal system and add 'cmd'
    // $req = 'cmd=_notify-validate';
    // foreach ($_POST as $key => $value) {
    //     $value = urlencode(stripslashes($value));
    //     $req .= "&$key=$value";
    // }

    // // post back to PayPal system to validate
    // $header .= "POST /cgi-bin/webscr HTTP/1.0 ";
    // $header .= "Content-Type:application/x-www-form-urlencoded ";
    // $header .= "Content-Length: " . strlen($req) . " ";
    // $fp = fsockopen ('ssl://www.paypal.com', 443, $errno, $errstr, 30);

    // // assign posted variables to local variables
    // $item_name = $_POST['item_name'];
    // $item_number = $_POST['item_number'];
    // $payment_status = $_POST['payment_status'];
    // $payment_amount = $_POST['mc_gross'];
    // $payment_currency = $_POST['mc_currency'];
    // $txn_id = $_POST['txn_id'];
    // $receiver_email = $_POST['receiver_email'];
    // $payer_email = $_POST['payer_email'];

    // if (!$fp) {
    //     // HTTP ERROR
    // }else{
    //     fputs ($fp, $header . $req);
    //     while (!feof($fp)) {
    //         $res = fgets ($fp, 1024);
    //         if (strcmp ($res, "VERIFIED") == 0) {
    //             // check the payment_status is Completed
    //             // check that txn_id has not been previously processed
    //             // check that receiver_email is your Primary PayPal email
    //             // check that payment_amount/paymet_currency are correct
    //             // process payment
    //         }
    //         else if (strcmp ($res, "INVALID") == 0) {
    //             // log for manual investigation
    //         }
    //     }
    //     fclose ($fp);
    // }
?>