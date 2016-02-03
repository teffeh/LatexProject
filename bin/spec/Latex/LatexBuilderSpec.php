<?php

namespace spec\Latex;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LatexBuilderSpec extends ObjectBehavior
{
  public function it_opens_a_tag() {
    $this->beginTag('paragraph')->shouldReturn('\\begin{paragraph}');
  }

  public function it_opens_a_different_tag() {
    $this->beginTag('document')->shouldReturn('\\begin{document}');
  }

  public function it_ends_a_tag() {
    $this->endTag('document')->shouldReturn('\\end{document}');
  }

  public function it_ends_a_different_tag() {
    $this->endTag('paragraph')->shouldReturn('\\end{paragraph}');
  }

  public function it_opens_a_statement_with_an_option() {
    $this->openStatement('documentclass', 'article')->shouldReturn('\\documentclass{article}');
  }

  public function it_opens_a_different_statement_with_an_option() {
    $this->openStatement('title', 'my document')->shouldReturn('\\title{my document}');
  }

  public function it_opens_a_statement_with_no_options() {
    $this->openStatement('maketitle')->shouldReturn('\\maketitle');
  }

  public function it_opens_a_different_statement_with_no_options() {
    $this->openStatement('newpage')->shouldReturn('\\newpage');
  }
}
