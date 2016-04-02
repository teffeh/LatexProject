<?php
echo "<html><body>";
include "bin/src/Latex/LatexBuilder.php";
include "bin/src/Latex/Statement.php";
include "bin/src/Latex/FileBuilder.php";
use Latex\FileBuilder;
use Latex\LatexBuilder;
use Latex\Statement;

$latexBuilder = new LatexBuilder();
$preambleDocumentName = $_POST['preambleDocumentName'];
$preambleDocumentType = $_POST['preambleDocumentType'];
$filenameTex = $preambleDocumentName . ".tex";
$preambleDocumentFont = $_POST['preambleDocumentFont'];
$preambleDocumentPaperType = $_POST['preambleDocumentPaperType'];
$preambleDocumentOrientation = $_POST['preambleDocumentOrientation'];
$preambleDocumentTitleSameAsName = $_POST['preambleDocumentTitleSameAsName'];
$preambleDocumentMakeTitle = $_POST['preambleDocumentMakeTitle'];
$preambleDocumentNewTitle = $_POST['preambleDocumentNewTitle'];
$preambleDocumentAuthor = $_POST['preambleDocumentAuthor'];
$preambleDocumentSignAuthor = $_POST['preambleDocumentSignAuthor'];
$preambleTitlePage = $_POST['preambleDocumentTitlePage'];
$preambleDocumentTwoColumn= $_POST['preambleDocumentTwoColumn'];

$latexBuilder->beginTag(new Statement(
        'documentclass', [
        $preambleDocumentFont . "pt" . "," .
        $preambleDocumentPaperType . "," .
        $preambleDocumentOrientation], [$preambleDocumentType])
);

$fileBuilder = new FileBuilder("Output/" . $filenameTex, "");
