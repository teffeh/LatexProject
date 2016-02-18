<?php
namespace Latex;
class FileBuilder
{

  private $shell_exec_return;
  private $name;
  private $input;

  public function __construct($name, $input) {
    $this->name = $name;
    $this->input = $input;
    $this->saveFile();
  }

  public function saveFile() {
//    shell_exec('md E:\Work\php\LatexProject\Output');
    file_put_contents('E:\Work\php\LatexProject\Output\\' . $this->name, $this->input);
  }

  public function loadFile($file) {
    return file_get_contents($file);
  }

  public function convert() {
    shell_exec("cd E:\\Work\\php\\LatexProject\\Output");
    $this->shell_exec_return =
      shell_exec('E:\Work\php\LatexProject\miktex\bin\pdflatex.exe E:\Work\php\LatexProject\Output\\'
        . $this->name
        . ' -output-directory E:\Work\php\LatexProject\Output 2>&1'
      );

    return $this->shell_exec_return;
  }

}

