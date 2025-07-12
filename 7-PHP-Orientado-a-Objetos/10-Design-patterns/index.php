<?php 

abstract class PaymentMethod 
{

    public abstract function pay();

}

class MercadoPago extends PaymentMethod
{
    public function pay()
    {
        return 'Pagando com Mercado Pago';
    }
}

class PayPal extends PaymentMethod
{
    public function pay()
    {
        return 'Pagando com PayPal';
    }
}

class PaymentFactory 
{

    public static function create($paymentMethod)
    {
        if (class_exists($paymentMethod)) {
            return new $paymentMethod;
        } 
            
        throw new RuntimeException('Método de Pagamento Não Existente!');
       
    }

}

if (isset($_POST['payment_order'])) {

    $metodosPermitidos = [
        'mercado_pago' => MercadoPago::class,
        'paypal' => PayPal::class
    ];

    $paymentMethod = $_POST['metodo_pagamento'];

    try {

        $payment = PaymentFactory::create($metodosPermitidos[$paymentMethod]);
        echo $payment->pay();

    } catch(RuntimeException $e) {
        echo $e;
    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagar</title>
</head>
<body>
    
    <form method="POST">
        <label for="metodo_pagamento">Método de Pagamento</label><br>
        <select name="metodo_pagamento" id="metodo_pagamento">
            <option value="mercado_pago">Mercado Pago</option>
            <option value="paypal">PayPal</option>
        </select><br>
        <input type="submit" value="Pagar" name="payment_order">
    </form>

</body>
</html>
