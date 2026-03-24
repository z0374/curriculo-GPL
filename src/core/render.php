<?php

$bgbody[]='#121212';

    $fonts[]="
        @import url('https://fonts.googleapis.com/css2?family=IM+Fell+English+SC&family=Uncial+Antiqua&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Tenali+Ramakrishna&family=Ubuntu+Condensed&display=swap');
    ";

     $head[]="
        <script src='https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js'></script>
    ";

require_once ROOT_PATH_CURRICULO . "/src/components/header.php";
require_once ROOT_PATH_CURRICULO . "/src/components/main.php";

    html('real-time');