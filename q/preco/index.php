<?php 
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, 'https://www.mercadoniobiocash.com.br/cotacao.php?chave=NIOBIOCASH');
$result = curl_exec($ch);
$obj = json_decode($result, TRUE);
curl_close($ch);
//print_r($obj);
$preco_double = $obj['preco_double'];
print_r($preco_double);
?>