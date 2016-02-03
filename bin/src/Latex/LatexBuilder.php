<?php
namespace Latex;
class LatexBuilder
{

  const BEGIN = '\\begin{';
  const CLOSE_BRACKET = '}';
  const END = '\\end{';
  const BEGIN_STATEMENT = '\\';
  const OPEN_BRACKET = '{';

  public function beginTag($tag) {
    return self::BEGIN . $tag . self::CLOSE_BRACKET;
  }

  public function endTag($tag) {
    return self::END . $tag . self::CLOSE_BRACKET;
  }

  public function openStatement($command, $option = null) {
    if ($option == null) {
      return $this->openStatementWithNoOptions($command);
    } else return self::BEGIN_STATEMENT . $command . self::OPEN_BRACKET . $option . self::CLOSE_BRACKET;
  }

  /**
   * @param string $command
   * @return string
   */
  public function openStatementWithNoOptions($command) {
    return self::BEGIN_STATEMENT . $command;
  }
}

