<?php
namespace Latex;
class LatexBuilder
{

  public function beginTag(Statement $tag) {
    return $tag->getCommand() . PHP_EOL;
  }

  public function endTag($tag) {
    $statement = new Statement("end", [], [$tag]);

    return $statement->getCommand() . PHP_EOL;
  }
}















