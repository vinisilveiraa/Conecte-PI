<?php

// Caminho físico do projeto
define('BASE_DIR', __DIR__);

// URL base para navegador
define('BASE_URL', 'http://localhost/Conecte-PI');

// Caminhos das views
define('VIEWS', BASE_DIR . '/app/views');       // para require_once
define('VIEWS_URL', BASE_URL . '/app/views');   // se precisar acessar direto

// Caminhos para assets
define('CSS', BASE_URL . '/app/assets/css');
define('IMAGE', BASE_URL . '/app/assets/imgs');

// Nome da aplicação
define('APP_NAME', 'Conecte');

// Banco de dados
define('HOST', 'localhost');
define('DBNAME', 'nome do banco de dados');
define('USER', 'root');
define('PASS', '');
