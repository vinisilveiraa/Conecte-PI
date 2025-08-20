<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo ?? APP_NAME ?></title>

    <!-- Reset CSS -->
    <link rel="stylesheet" href="<?= CSS ?>/reset.css">

    <!-- CSS específico da página -->
    <?php if(isset($css_pagina)): ?>
        <link rel="stylesheet" href="<?= CSS ?>/<?= $css_pagina ?>">
    <?php endif; ?>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= CSS ?>/bootstrap.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
