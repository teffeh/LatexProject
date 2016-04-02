<?php
echo "<html><body>";
include "bin/src/Latex/LatexBuilder.php";
include "bin/src/Latex/Statement.php";
include "bin/src/Latex/FileBuilder.php";
use Latex\FileBuilder;
use Latex\LatexBuilder;
use Latex\Statement;

$latexBuilder = new LatexBuilder();
$filename = $_POST['preambleDocumentName'];
$filenameTex = $filename . ".tex";
$subSectionText = $_POST['ssText'];
$subSectionTag = $_POST['inputType'];
$beginDocument = $latexBuilder->beginTag(new Statement('documentclass', [$_POST['preambleDocumentFont'] . "pt"], [$_POST['preambleDocumentType']]));
file_put_contents('Output/' . $filenameTex, $beginDocument . PHP_EOL);
updateDocument($filenameTex, $latexBuilder->beginTag(new Statement("begin", [], ["document"])) . PHP_EOL);
updateDocument($filenameTex, $latexBuilder->beginTag(new Statement($subSectionTag, [], [$subSectionText])) . PHP_EOL);
updateDocument($filenameTex, $latexBuilder->endTag("document") . PHP_EOL);
print_r2(file_get_contents("Output/" . $filenameTex));
$fileBuilder = new FileBuilder($filename, file_get_contents("Output/" . $filenameTex));
$fileBuilder->convert();
/**
 * @param string $filename
 * @param string $input
 */
function updateDocument($filename, $input)
{
    $file_get_contents = file_get_contents("Output\\" . $filename);
    file_put_contents('Output\\' . $filename, $file_get_contents . $input);
}

function print_r2($val)
{
    echo '<pre>';
    print_r($val);
    echo '</pre>';
}

echo "</body></html>";
