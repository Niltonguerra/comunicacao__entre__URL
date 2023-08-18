<?php
// $dado = "ativar"; // Dado a ser enviado
// $esp32IP = "10.13.37.2"; // IP do ESP32

// // $url = "http://" . $esp32IP . "/?dado=" . urlencode($dado);
// $url = "http://localhost:8180/?dado=" . urlencode($dado);
// // Envia a requisição POST para o ESP32
// $ch = curl_init($url);
// curl_setopt($ch, CURLOPT_POST, true);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// $response = curl_exec($ch);
// curl_close($ch);

// echo "Resposta do ESP32: " . $response;


$esp32IP = "10.13.37.2"; // IP do ESP32

$url = 'http://localhost:8180/rota';

// $response = file_get_contents($url);

// if ($response === false) {
//   echo "Falha ao obter a resposta do ESP32";
// } else {
//   echo "Resposta do ESP32: " . $response;
// }



$data = "ativar";

// Configuração do contexto de stream com o dado e o método POST
$options = array(
    'http' => array(
      'method' => 'POST',
      'content' => $data,
    )
  );
  
  $context = stream_context_create($options);
  
  // Envio da solicitação POST
  $result = file_get_contents($url, false, $context);
  
  if ($result === false) {
    echo "Falha ao enviar a solicitação POST.";
  } else {
    echo "Solicitação POST enviada com sucesso.";
  }







?>