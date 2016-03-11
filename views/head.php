<noscript>
<div id="noscript">Vous devez activez JavaScript pour le bon fonctionnement du site !</div>
</noscript>
<head>
    <title><?= $title; ?></title>
    <meta name="description" content="Portfolio"/>
    <meta name="author" content="Florian Paturaux"/>
    <link rel="stylesheet" type="text/css" href="ressources/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="ressources/css/font-awesome.min.css"/>
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">-->
    <?php foreach ($import as $file): ?>
        <?php if (substr($file, -3) === '.js'): ?>
            <script type="text/javascript" src="resources/js/<?= $file; ?>"></script>
        <?php endif; ?>
    <?php endforeach; ?>
</head>