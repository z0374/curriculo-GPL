<?php

$css_files [] = ROOT_PATH_CURRICULO . "/assets/css/header.css";

  $individuo = [
    'nome' => 'Victor Augusto Macedo Pereira',
    'endereco' => ['', 'Aparecida de Goiânia', '74970-420'],
    'contato' => ['+55 (62) 9 9480-5555', 'victormacedo2001@hotmail.com']
  ];


$headerHTML = file_get_contents(ROOT_PATH_CURRICULO . "/assets/html/header/nome.html");
$header [] = appendHTML($headerHTML, "nome", ($individuo['nome']));

$headerString = $individuo['endereco'][0] . " | " . $individuo['endereco'][1] . " | " .$individuo['endereco'][2];
$headerHTML = file_get_contents(ROOT_PATH_CURRICULO . "/assets/html/header/endereco.html");
$header [] = appendHTML($headerHTML, "endereco", $headerString);

$headerString = $individuo['contato'][0] . " | <a href='mailto:" . $individuo['contato'][1] . "'>" . $individuo['contato'][1] . "</a>";
$headerHTML = file_get_contents(ROOT_PATH_CURRICULO . "/assets/html/header/contato.html");
$header [] = appendHTML($headerHTML, "contato", $headerString );