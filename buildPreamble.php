<?php
    session_start();
    include "bin/src/Latex/LatexBuilder.php";
    include "bin/src/Latex/Statement.php";
    include "bin/src/Latex/FileBuilder.php";
    use Latex\FileBuilder;
    use Latex\LatexBuilder;
    use Latex\Statement;

    $latexBuilder = new LatexBuilder();
    $preambleInputs = array(
        "name"      => isset($_POST['preambleDocumentName']) ? $_POST['preambleDocumentName'] : null,
        "sameTitle" => isset($_POST['preambleDocumentTitleSameAsName']) ? $_POST['preambleDocumentTitleSameAsName'] : null,
        "makeTitle" => isset($_POST['preambleDocumentMakeTitle']) ? $_POST['preambleDocumentMakeTitle'] : null,
        "newTitle"  => isset($_POST['preambleDocumentNewTitle']) ? $_POST['preambleDocumentNewTitle'] : null,
        "author"    => isset($_POST['preambleDocumentAuthor']) ? $_POST['preambleDocumentAuthor'] : null,
        "signed"    => isset($_POST['preambleDocumentSignAuthor']) ? $_POST['preambleDocumentSignAuthor'] : null,
        "type"      => isset($_POST['preambleDocumentType']) ? $_POST['preambleDocumentType'] : null,
    );
    $_SESSION["newFilename"] = $preambleInputs["name"];
    $documentClassOptionalInputs = array(
        "font"        => isset($_POST['preambleDocumentFont']) ? $_POST['preambleDocumentFont'] : null,
        "paper"       => isset($_POST['preambleDocumentPaperType']) ? $_POST['preambleDocumentPaperType'] : null,
        "twoColumn"   => isset($_POST['preambleDocumentTwoColumn']) ? $_POST['preambleDocumentTwoColumn'] : null,
        "orientation" => isset($_POST['preambleDocumentOrientation']) ? $_POST['preambleDocumentOrientation'] : null,
        "titlePage"   => isset($_POST['preambleDocumentTitlePage']) ? $_POST['preambleDocumentTitlePage'] : null,
    );
    //build documentclass inputs
    $documentClassOptionalInputString = "";
    foreach ($documentClassOptionalInputs as $input => $inputValue) {
        if ($inputValue == "on") {
            if ($input == "twoColumn") {
                $documentClassOptionalInputString .= "twocolumn,";
            } elseif ($input == "orientation") {
                $documentClassOptionalInputString .= "landscape,";
            } elseif ($input == "titlePage") {
                $documentClassOptionalInputString .= "titlepage,";
            }
        } elseif ($inputValue == "off") {
            $documentClassOptionalInputString .= "";
        }
        if ($input == "font") {
            $documentClassOptionalInputString .= $inputValue .= "pt,";
        } elseif ($input == "paper")
            $documentClassOptionalInputString .= $inputValue . ",";
    }
    $fileBuilder = new FileBuilder($preambleInputs["name"],
        $latexBuilder->beginTag(new Statement(
                'documentclass', [$documentClassOptionalInputString], [$preambleInputs["type"]])
        )
    );
    $fileBuilder->saveFile();
    //build begin document tag
    file_put_contents("Output/" . $preambleInputs["name"] . ".tex", $latexBuilder->beginTag(new Statement('begin', [], ['document'])), FILE_APPEND);
    //build preambleinputs
    foreach ($preambleInputs as $input => $inputValue) {
        if ($input == "sameTitle") {
            if ($inputValue == "on") {
                file_put_contents("Output/" . $preambleInputs['name'] . ".tex", $latexBuilder->beginTag(new Statement('title', [], [$preambleInputs['name']])), FILE_APPEND);
            } else {
                file_put_contents("Output/" . $preambleInputs['name'] . ".tex", $latexBuilder->beginTag(new Statement('title', [], [$preambleInputs['newTitle']])), FILE_APPEND);
            }
        }
        if ($input == "makeTitle") {
            if ($inputValue == "on") {
                file_put_contents("Output/" . $preambleInputs['name'] . ".tex", $latexBuilder->beginTag(new Statement('maketitle', [], [])), FILE_APPEND);
            }
        }
        if ($input == "signed") {
            if ($inputValue == "on") {
                file_put_contents("Output/" . $preambleInputs['name'] . ".tex", $latexBuilder->beginTag(new Statement('author', [], [$preambleInputs['author']])), FILE_APPEND);
            }
        }
    }
