<?php
include "bin/src/Latex/LatexBuilder.php";
include "bin/src/Latex/Statement.php";
include "bin/src/Latex/FileBuilder.php";
use Latex\FileBuilder;
use Latex\LatexBuilder;
$latexbuilder = new LatexBuilder();
$filebuilder = new FileBuilder("test1.tex", "\\documentclass[12pt]{article}\\begin{document}test2\\end{document}");
echo $filebuilder->convert();
?>

<!doctype html>
<html>

</html>