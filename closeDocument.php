<?php
    session_start();
    include "bin/src/Latex/LatexBuilder.php";
    include "bin/src/Latex/Statement.php";
    include "bin/src/Latex/FileBuilder.php";
    use Latex\LatexBuilder;
    use Latex\FileBuilder;
    $latexB = new LatexBuilder();
    file_put_contents("Output/".$_SESSION['newFilename'].".tex", $latexB->endTag("document") . PHP_EOL, FILE_APPEND);
    $fileB = new FileBuilder($_SESSION['newFilename'], file_get_contents($_SESSION['newFilename'].".tex"));
    $fileB->convert();
