<?php

namespace spec\Latex;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FileBuilderSpec extends ObjectBehavior
{
  public function it_loads_a_file() {
    file_put_contents("temp.tex", "/title{hello}");
    $this->loadFile()->shouldReturn("/title{hello}");
  }

  public function it_loads_a_different_file() {
    file_put_contents("temp.tex", "/documentclass{article}");
    $this->loadFile()->shouldReturn("/documentclass{article}");
  }

  public function it_saves_a_file() {
    $this->saveFile("/title{goodbye}");
    $this->loadFile()->shouldReturn("/title{goodbye}");
  }
}
