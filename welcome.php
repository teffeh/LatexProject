<html>
<body>
<?php
include "bin/src/Latex/LatexBuilder.php";
include "bin/src/Latex/Statement.php";
include "bin/src/Latex/FileBuilder.php";
use Latex\FileBuilder;
use Latex\LatexBuilder;
use Latex\Statement;

$latexBuilder = new LatexBuilder();
$filename = $_POST['docName'] . ".tex";
$beginDocument = $latexBuilder->beginTag(new Statement('documentclass', [$_POST['docFont'] . "pt"], [$_POST['docType']]));
file_put_contents('E:\Work\php\LatexProject\Output\\' . $filename, $beginDocument);
updateDocument($filename, $latexBuilder->beginTag(new Statement("begin", [], ["document"])));
updateDocument($filename, 'asdasd');
updateDocument($filename, $latexBuilder->endTag("document"));
print_r(file_get_contents("E:\\Work\\php\\LatexProject\\Output\\" . $filename));
$fileBuilder = new FileBuilder($filename, file_get_contents("E:\\Work\\php\\LatexProject\\Output\\" . $filename));
$fileBuilder->convert();
/**
 * @param $filename
 * @param $input
 */
function updateDocument($filename, $input) {
  $file_get_contents = file_get_contents("E:\\Work\\php\\LatexProject\\Output\\" . $filename);
  file_put_contents('E:\Work\php\LatexProject\Output\\' . $filename, $file_get_contents . $input);
}

function downloadPDF() {
  header('Content-type: application/pdf');
  header('Content-Disposition: attachment; filename="' . $_POST['docName'] . '.pdf"');
  readfile($_POST['docName'] . '.pdf');
}

downloadPDF();

?>
</body>
</html>
