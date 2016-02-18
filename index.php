<?php
include "bin/src/Latex/LatexBuilder.php";
include "bin/src/Latex/Statement.php";
include "bin/src/Latex/FileBuilder.php";
use Latex\FileBuilder;
use Latex\LatexBuilder;

$latexbuilder = new LatexBuilder();
$fileBuilder = new FileBuilder();
$fileBuilder->convert("temp.tex");
?>
<!doctype html>
<html>
<form action = "">
  <input type = "submit" value="convert document"/>
</form>
</html>