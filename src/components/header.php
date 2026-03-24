<?php

$css_files [] = ROOT_PATH_CURRICULO . "/assets/css/header.css";

  $individuo = [
    'nome' => 'Seu Nome Completo Aqui',
    'endereco' => ['Seu bairro/provincia', 'Sua Cidade/Município-Estado', 'Seu CEP'],
    'contato' => ['+55 62 9 9999-9999', 'SeuEmail@provedor.ext']
  ];


$headerHTML = file_get_contents(ROOT_PATH_CURRICULO . "/assets/html/header/nome.html");
$header [] = appendHTML($headerHTML, "nome", ($individuo['nome']));

$headerString = $individuo['endereco'][0] . " | " . $individuo['endereco'][1] . " | " .$individuo['endereco'][2];
$headerHTML = file_get_contents(ROOT_PATH_CURRICULO . "/assets/html/header/endereco.html");
$header [] = appendHTML($headerHTML, "endereco", $headerString);

$headerString = $individuo['contato'][0] . " | <a href='mailto:" . $individuo['contato'][1] . "'>" . $individuo['contato'][1] . "</a>";
$headerHTML = file_get_contents(ROOT_PATH_CURRICULO . "/assets/html/header/contato.html");
$header [] = appendHTML($headerHTML, "contato", $headerString );