<?php

namespace spec\Latex;
use Latex\Statement;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StatementSpec extends ObjectBehavior
{
  public function it_has_a_command() {
    $this->beConstructedWith("title");
    $this->getCommand()->shouldReturn("title");
  }

  public function it_has_a_different_command() {
    $this->beConstructedWith("maketitle");
    $this->getCommand()->shouldReturn("maketitle");
  }

  public function it_has_an_optional_argument() {
    $this->beConstructedWith("documentclass", ["12pt"]);
    $this->getCommand()->shouldReturn("documentclass[12pt]");
  }

  public function it_has_two_optional_arguments() {
    $this->beConstructedWith("documentclass", ["12pt", "a4paper"]);
    $this->getCommand()->shouldReturn("documentclass[12pt,a4paper]");
  }

  public function it_has_a_required_argument() {
    $this->beConstructedWith("documentclass",["12pt", "a4paper"], ["article"]);
    $this->getCommand()->shouldReturn("documentclass[12pt,a4paper]{article}");
  }
}
