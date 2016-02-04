<?php



namespace Latex;
class LatexBuilder
{

  public function beginTag(Statement $tag) {
    return '\\' . $tag->getCommand();
  }

  public function endTag($tag) {
    $statement = new Statement("end", [], [$tag]);

    return '\\' . $statement->getCommand();
  }
}







