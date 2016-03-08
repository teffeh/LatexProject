<?php
namespace spec\Latex;
use Latex\Statement;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FileBuilderSpec extends ObjectBehavior
{
  private $name;
  private $input;

  public function let() {
    $this->name = "testname.tex";
    $this->input = new Statement("documentclass", ["12pt"], ["article"]);

    $this->beConstructedWith($this->name, $this->input->getCommand()."\\begin{document}"."hello"."\\end{document}");
  }

  public function it_loads_a_file() {
    $this->loadFile($this->name)->shouldReturn("\\documentclass[12pt]{article}\\begin{document}hello\\end{document}");
  }
//
//  public function it_loads_a_different_file() {
//    file_put_contents("temp.tex", "\\documentclass{article}");
//    $this->loadFile()->shouldReturn("\\documentclass{article}");
//  }
//
//  public function it_saves_a_file() {
//    $input = new Statement("title", [], ["goodbye"]);
//    $this->beConstructedWith("temp.tex", $input->getCommand());
//
//    $this->loadFile()->shouldReturn("\\title{goodbye}");
//  }
}
