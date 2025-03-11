<?php

use Crefito11\PdfGenerator\PdfGenerator;
use Crefito11\PdfGenerator\TemplateRenderer;

require '../vendor/autoload.php';

date_default_timezone_set('America/Sao_Paulo');

$data = [
    'title' => 'Solicitação Primeiro Registro',
    'nome' => 'RUBENS MATIAS DIMAS DA SILVA JÚNIOR',
    'estado_civil' => 'Solteiro',
    'genero' => 'Masculino',
    'data_nascimento' => '20/11/1999',
];

$templateFile = '../templates/example.html';
$outputPath = '../public/files/';

$renderer = new TemplateRenderer($templateFile, $data);
$pdfGenerator = new PdfGenerator($renderer, $outputPath);
$pdfFile = $pdfGenerator->generatePdf('relatorio.pdf');

echo "PDF gerado com sucesso: <a href='files/relatorio.pdf'>Baixar PDF</a>";