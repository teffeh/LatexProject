<?php
namespace Latex;
class FileBuilder
{

  private $shell_exec_return;
  private $name;
  private $input;
  private $loadedFile;

  public function __construct($name, $input) {
    $this->name = $name;
    $this->input = $input;
    $this->saveFile();
  }

  public function saveFile() {
    file_put_contents('E:\Work\php\LatexProject\Output\\' . $this->name, $this->input);
  }

  public function loadFile($file) {
    $this->loadedFile = file_get_contents("E:\\Work\\php\\LatexProject\\Output\\" . $file);

    return $this->loadedFile;
  }

  public function convert() {
    $this->shell_exec_return =
      shell_exec(
        'chdir E:\Work\php\LatexProject\Output & E:\Work\php\LatexProject\miktex\bin\pdflatex.exe E:\Work\php\LatexProject\Output\\'
        . $this->name
        . ' -output-directory E:\Work\php\LatexProject\Output 2>&1'
      );
    return $this->shell_exec_return;
  }

}

