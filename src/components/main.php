<?php

$css_files[] = ROOT_PATH_CURRICULO . "/assets/css/reset.css";
$css_files[] = ROOT_PATH_CURRICULO . "/assets/css/main.css";
$css_files[] = ROOT_PATH_CURRICULO . "/assets/css/desktopL.css";
$css_files[] = ROOT_PATH_CURRICULO . "/assets/css/mobileP.css";

$data = [
  'objetivo' => 'Buscar uma oportunidade desafiadora onde possa aplicar minhas habilidades e conhecimentos adquiridos ao longo da minha experiência, contribuindo para o crescimento da empresa. Tenho como objetivo aprimorar minhas competências, trabalhar em equipe e superar as metas estabelecidas, com foco em resultados e excelência no desempenho de minhas funções. Estou comprometido em aprender e evoluir continuamente, proporcionando soluções inovadoras e colaborando com o sucesso organizacional.',
  'formacao' => [
    ['Ensino mádio (2018)', 'Colégio da Polícia Militar do Estado de Goiás - Unidade Colina Azul'],
    ['Bacharelado em Ciências da Computação ( CURSANDO )', 'Estácio de sá - Polo Campinas'],
    //['Seu curso Acadêmico (ano de término)', 'Instituição de ensino']
  ],
  'experiencia' => [
    ['Adjel - Terceirizado no Tribunal Regional Eleitoral do Estado de Goiás', 'Auxiliar de Estatística (2020 | 2022)'],
    ['Tribunal de Contas dos Municípios do Estado de Goiás', 'Estagiário - Suporte de TI (2024 | 2026)'],
    //['Empresa em que trabalhou', 'Cargo em que trabalhou (ano de ingresso | ano de saída)']
  ],
  'habilidade' => [
    ['CNH', 'A/B'],
    ['Java Scrypt', 'Intermediário'],
    ['HTML ', 'Intermediário']
    //['Sua Habilidade', 'Descrição da habilidade']
  ],
  'outros' => [
    ['T-Ini, Curso de Treinamento para o mercado de trabalho(2013)', 'Cedaspy'],
    ['Curso Profissionalizante em Informática (2016)', 'Cedaspy'],
    //['Seu curso/treinamento (ano de término)', 'Instituição de ensino'],
    //['Seu curso/treinamento (ano de término)', 'Instituição de ensino']
  ]
];

$edu = [];
$xpr = [];
$hbl = [];
$adc = [];
if (isset($data['objetivo'])) {
  $obj = $data['objetivo'];
}
if (isset($data['formacao'])) {
  foreach ($data['formacao'] as $k => $v) {
    $edu[] = "<li><h3>{$v[0]}</h3><p>{$v[1]}</p></li>";
  }
}
if (isset($data['experiencia'])) {
  foreach ($data['experiencia'] as $k => $v) {
    $xpr[] = "<li><h3>{$v[0]}</h3><p>{$v[1]}</p></li>";
  }
}
if (isset($data['habilidade'])) {
  foreach ($data['habilidade'] as $k => $v) {
    $hbl[] = "<li><p><b>{$v[0]}:</b>   {$v[1]}</p></li>";
  }
}
if (isset($data['outros'])) {
  foreach ($data['outros'] as $k => $v) {
    $adc[] = "<li><h3>{$v[0]}</h3><p>{$v[1]}</p></li>";
  }
}

$mainHTML = file_get_contents(ROOT_PATH_CURRICULO . "/assets/html/main/objSection.html");
$main[] = appendHTML($mainHTML, "objective", ($obj ?? ''));

$mainHTML = file_get_contents(ROOT_PATH_CURRICULO . "/assets/html/main/eduSection.html");
$main[] = appendHTML($mainHTML, "education", (implode('',$edu)));

$mainHTML = file_get_contents(ROOT_PATH_CURRICULO . "/assets/html/main/prfSection.html");
$main[] = appendHTML($mainHTML, "experience", (implode('',$xpr)));

$mainHTML = file_get_contents(ROOT_PATH_CURRICULO . "/assets/html/main/hblSection.html"); 
$main[] = appendHTML($mainHTML, "skills", (implode('',$hbl)));

$mainHTML = file_get_contents(ROOT_PATH_CURRICULO . "/assets/html/main/adcSection.html");
$main[] = appendHTML($mainHTML, "certifications", (implode('',$adc)));