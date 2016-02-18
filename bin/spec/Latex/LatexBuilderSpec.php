<?php

namespace spec\Latex;
use Latex\Statement;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LatexBuilderSpec extends ObjectBehavior
{
  public function it_opens_a_tag() {
    $statement = new Statement("begin", [], ["paragraph"]);
    $this->beginTag($statement)->shouldReturn('\begin{paragraph}');
  }

  public function it_opens_a_different_tag() {
    $statement = new Statement("begin", [], ["document"]);
    $this->beginTag($statement)->shouldReturn('\begin{document}');
  }

  public function it_ends_a_tag() {
    $this->endTag("document")->shouldReturn('\end{document}');
  }

  public function it_ends_a_different_tag() {
    $this->endTag('paragraph')->shouldReturn('\end{paragraph}');
  }

  public function it_opens_a_statement_with_an_option() {
    $statement = new Statement("documentclass", [], ["article"]);
    $this->beginTag($statement)->shouldReturn('\documentclass{article}');
  }

  public function it_opens_a_different_statement_with_an_option() {
    $statement = new Statement("title", [], ["my document"]);
    $this->beginTag($statement)->shouldReturn('\title{my document}');
  }

  public function it_opens_a_statement_with_optional_parameters_and_required_parameters() {
    $statement = new Statement("documentclass", ["12pt"], ["article"]);
    $this->beginTag($statement)->shouldReturn('\documentclass[12pt]{article}');
  }

}
