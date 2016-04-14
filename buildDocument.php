<?php
    session_start();
    include "bin/src/Latex/LatexBuilder.php";
    include "bin/src/Latex/Statement.php";
    include "bin/src/Latex/FileBuilder.php";
    use Latex\LatexBuilder;
    use Latex\Statement;

    $latexBuilder = new LatexBuilder();
    $inputs = array(
        "type"     => isset($_POST['inputType']) ? $_POST['inputType'] : null,
        "typeName" => isset($_POST['inputTypeName']) ? $_POST['inputTypeName'] : "",
        "text"     => isset($_POST['ssText']) ? $_POST['ssText'] : null
    );
    file_put_contents("Output/" . $_SESSION['newFilename'] . ".tex", $latexBuilder->beginTag(new Statement($inputs['type'], [], [$inputs['typeName']])), FILE_APPEND);
    file_put_contents("Output/" . $_SESSION['newFilename'] . ".tex", $inputs['text'] . PHP_EOL, FILE_APPEND);

