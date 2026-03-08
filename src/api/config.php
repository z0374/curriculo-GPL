<?php

if (basename(__FILE__) === basename($_SERVER["SCRIPT_FILENAME"])) {
    http_response_code(403);
    exit("Acesso direto proibido.");
}

$envFile = ROOT_PATH . "/src/config/.env";
if (!file_exists($envFile)) {
    $envFile = ROOT_PATH_PORTIFOLIO . "/src/config/.env";
}
if (!file_exists($envFile)) {
    throw new Exception("Arquivo de configuração ausente.");
}

loadEnv($envFile);

// 1. Define a primeira constante
define('DATA_CONFIG', getJsonData(
    url: $_ENV["config_url"] ?? '',
    parametro: ['config', 'linksfera'],
    authToken: $_ENV["config_auth"] ?? '',
    pageToken: $_ENV["config_page"] ?? null
));

// 2. Usa a primeira constante para definir a segunda
// Note que para acessar constant, não se usa $
define('FAVICON', getJsonData(
    url: $_ENV["config_url"] ?? '',
    parametro: ['assets', DATA_CONFIG["favicon"]], // Acessa DATA_CONFIG direto
    authToken: $_ENV["config_auth"] ?? '',
    pageToken: $_ENV["config_page"] ?? null
));
//var_dump(DATA_CONFIG);

define('TITULO', DATA_CONFIG["title"]);

define('LOGO', getJsonData(
    url: $_ENV["config_url"] ?? '',
    parametro: ['assets', DATA_CONFIG["logo"]], // Acessa DATA_CONFIG direto
    authToken: $_ENV["config_auth"] ?? '',
    pageToken: $_ENV["config_page"] ?? null
));
define('LINK1', getJsonData(
    url: $_ENV["config_url"] ?? '',
    parametro: ['assets', DATA_CONFIG["links1"]], // Acessa DATA_CONFIG direto
    authToken: $_ENV["config_auth"] ?? '',
    pageToken: $_ENV["config_page"] ?? null
));

define('LINK2', getJsonData(
    url: $_ENV["config_url"] ?? '',
    parametro: ['assets', DATA_CONFIG["links2"]], // Acessa DATA_CONFIG direto
    authToken: $_ENV["config_auth"] ?? '',
    pageToken: $_ENV["config_page"] ?? null
));

define('LINK3', getJsonData(
    url: $_ENV["config_url"] ?? '',
    parametro: ['assets', DATA_CONFIG["links3"]], // Acessa DATA_CONFIG direto
    authToken: $_ENV["config_auth"] ?? '',
    pageToken: $_ENV["config_page"] ?? null
));

define('TEXT_FOOTER', DATA_CONFIG["text"]);
define('COLOR1', DATA_CONFIG["colorP"]);
define('COLOR2', DATA_CONFIG["colorS"]);
define('COLOR3', DATA_CONFIG["colorD"]);