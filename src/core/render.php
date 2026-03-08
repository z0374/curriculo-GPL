<?php

$bgbody[]='#7E918E';

$data = [
        'individuo' => [
            'nome' => 'Seu Nome Completo Aqui',
            'endereco' => ['Seu bairro/provincia','Sua Cidade/Município-Estado','Seu CEP'],
            'contato' => ['+seu (numero) deTel-efone','SeuEmail@provedor.ext' ]
        ],
        'objetivo'=>'Buscar uma oportunidade desafiadora onde possa aplicar minhas habilidades e conhecimentos adquiridos ao longo da minha experiência, contribuindo para o crescimento da empresa. Tenho como objetivo aprimorar minhas competências, trabalhar em equipe e superar as metas estabelecidas, com foco em resultados e excelência no desempenho de minhas funções. Estou comprometido em aprender e evoluir continuamente, proporcionando soluções inovadoras e colaborando com o sucesso organizacional.',
        'formacao' => [
            ['Seu curso Acadêmico (ano de término)','Instituição de ensino'],
            ['Seu curso Acadêmico (ano de término)','Instituição de ensino'],
            ['Seu curso Acadêmico (ano de término)','Instituição de ensino']
        ],
        'experiencia' => [
            ['Empresa em que trabalhou','Cargo em que trabalhou (ano de ingresso | ano de saída)'],
            ['Empresa em que trabalhou','Cargo em que trabalhou (ano de ingresso | ano de saída)'],
            ['Empresa em que trabalhou','Cargo em que trabalhou (ano de ingresso | ano de saída)']
        ],
        'habilidade' => [
            ['Sua Habilidade','Descrição da habilidade'],
            ['Sua Habilidade','Descrição da habilidade'],
            ['Sua Habilidade','Descrição da habilidade']
        ],
        'outros' => [
            ['Seu curso/treinamento (ano de término)','Instituição de ensino'],
            ['Seu curso/treinamento (ano de término)','Instituição de ensino'],
            ['Seu curso/treinamento (ano de término)','Instituição de ensino']
        ]
    ];

    $fonts[]="
        @import url('https://fonts.googleapis.com/css2?family=IM+Fell+English+SC&family=Uncial+Antiqua&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Tenali+Ramakrishna&family=Ubuntu+Condensed&display=swap');
    ";

     $head[]="
        <script src='https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js'></script>
    ";

    $header[]="
        <h1>".$data['individuo']['nome']."</h1><br>
        <h5>".$data['individuo']['endereco'][0]." | ".$data['individuo']['endereco'][1]." | ".$data['individuo']['endereco'][2]."</h5>
        <h6>".$data['individuo']['contato'][0]." | <a href='mailto:".$data['individuo']['contato'][1]."'>".$data['individuo']['contato'][1]."</a>
</h6>
    
    ";

    $edu=[];$xpr=[];$hbl=[];$adc=[];
if(isset($data['objetivo'])){$obj=$data['objetivo'];}
if(isset($data['formacao'])){
foreach ($data['formacao'] as $k => $v) {$edu[]="<li><h3>{$v[0]}</h3><p>{$v[1]}</p></li>";}}
if(isset($data['experiencia'])){
foreach ($data['experiencia'] as $k => $v) {$xpr[]="<li><h3>{$v[0]}</h3><p>{$v[1]}</p></li>";}}
if(isset($data['habilidade'])){
foreach ($data['habilidade'] as $k => $v) {$hbl[]="<li><p><b>{$v[0]}:</b>&nbsp;{$v[1]}</p></li>";}}
if(isset($data['outros'])){
foreach ($data['outros'] as $k => $v) {$adc[]="<li><h3>{$v[0]}</h3><p>{$v[1]}</p></li>";}}

require_once ROOT_PATH_CURRICULO . "/src/components/main.php";

    html('real-time');