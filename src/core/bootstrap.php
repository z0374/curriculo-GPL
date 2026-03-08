<?php

define("ROOT_PATH_CURRICULO", dirname(__DIR__, 2));

define("WARANAS_LIB", dirname(ROOT_PATH_CURRICULO, 3) . "/lib/index.php");

define("INTERNAL_WARANAS_LIB", ROOT_PATH_CURRICULO . "/lib");

if(!file_exists(WARANAS_LIB)) {
    require_once INTERNAL_WARANAS_LIB ;
}else {
    require_once WARANAS_LIB ;
}

require_once ROOT_PATH_CURRICULO . "/src/api/config.php";

$title[] = 'Currículo - Victor Macedo';

$pathFavicon = '/images/' . basename(FAVICON);
    $favicon[] = $pathFavicon;
//cachePage($title[0],'','verify',false);

require_once ROOT_PATH_CURRICULO . "/src/core/render.php";