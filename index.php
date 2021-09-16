<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KPS</title>
</head>
<body>
<?php   
$submit = filter_input(INPUT_POST, 'submit');
$radio = filter_input(INPUT_POST, 'currency');
   if(isset($submit)&&(isset($radio)))
   {
    $amount = $_POST['amount'];
    $currency = $_POST['currency'];
        if($currency == "czk_eur")
        {
            $exchange_rate = 0.04;
        }
        if($currency == "eur_czk")
        {
            $exchange_rate = 25;
        }
        $result = $amount * $exchange_rate;
        if ($currency == "czk_eur")
        {
            echo "$amount KČ bylo přeměněno na $result EUR";
            }
        if ($currency == "eur_czk")
        {
            echo "$amount EUR bylo přeměněno na $result KČ";
            }
   }
     else {?>
    <h1>Kokešova Pirátská Směnárna</h1>
    <b>"KPS - Měníme vaší měnu pomocí magie již od roku 2021"</b>
    <hr >
    <form method="post">
    <input type="radio" name="currency" id="czk_eur" value="czk_eur"> <label for="currency">Proměň Koruny na Euro</label> </br>
    <input type="radio" name="currency" id="eur_czk" value="eur_czk"> <label for="currency">Euro, transformuj se!</label><br>
    <hr>
    <input type="number" min="0" id="amount" name="amount"> <label for="amount"> Částka </label>
  </select>
  <hr >
    <input type="submit" name="submit"> <label for="submit">Odeslat požadavek</label>
    <?php } ?>

</body>
</html>