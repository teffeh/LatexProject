<?php

namespace Latex;
class FileBuilder
{

  private $shell_exec_return;

  public function saveFile($input) {
    file_put_contents("temp.tex", $input);
  }

  public function loadFile() {
    return file_get_contents("temp.tex");
  }

  public function convert($shell_command) {
    $this->shell_exec_return =
      shell_exec('E:\Work\php\LatexProject\miktex\bin\pdflatex.exe E:\Work\php\LatexProject\bin\\'
        . $shell_command
        . ' -output-directory E:\Work\php\LatexProject\output 2>&1'
      );

    return $this->shell_exec_return;
  }
}
