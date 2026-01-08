<?php

$projectRoot = getcwd();
$packageRoot = dirname(__DIR__);

$files = [
    $packageRoot . '/config/.php-cs-fixer.php' => $projectRoot . '/.php-cs-fixer.php',
    $packageRoot . '/config/.prettierrc'       => $projectRoot . '/.prettierrc',
    $packageRoot . '/config/.bladeformatterrc' => $projectRoot . '/.bladeformatterrc',
];

foreach ($files as $from => $to) {
    if (!file_exists($to)) {
        copy($from, $to);
        echo "✔ Criado: {$to}\n";
    } else {
        echo "• Já existe: {$to}\n";
    }
}

$vscodeSource = $packageRoot . '/config/.vscode';
$vscodeTarget = $projectRoot . '/.vscode';

if (!is_dir($vscodeTarget)) {
    mkdir($vscodeTarget, 0777, true);
}

foreach (['settings.json', 'extensions.json'] as $file) {
    $from = "{$vscodeSource}/{$file}";
    $to   = "{$vscodeTarget}/{$file}";

    if (!file_exists($to)) {
        copy($from, $to);
        echo "✔ Criado: .vscode/{$file}\n";
    }
}
