<?php

namespace Latex;
class Statement
{
  var $command;
  var $oArgs = array();
  var $rArgs = array();

  /**
   * @param string $command
   * @param array null $oArgs
   * @param array null $rArgs
   */
  public function __construct($command, $oArgs = null, $rArgs = null) {
    $this->command = $command;
    $this->rArgs = $rArgs;
    $this->oArgs = $oArgs;
  }

  public function getCommand() {
    if ($this->oArgs != null && $this->rArgs != null) {
      return $this->buildCommandWithBothArgs();
    }

    return $this->buildCommandWithEitherArgs();
  }

  /**
   * @return string
   */
  private function buildCommandWithBothArgs() {
    return $this->buildCommand() . $this->buildOptionalArgs() . $this->buildReqArgs();
  }

  /**
   * @return mixed
   */
  public function buildCommand() {
    return $this->command;
  }

  /**
   * @return string
   */
  private function buildOptionalArgs() {
    return '[' . $this->buildArguments($this->oArgs) . ']';
  }

  /**
   * @param array $args
   * @return string
   */
  private function buildArguments(array $args) {
    $items = "";
    foreach ($args as $item) {
      $items .= $this->concatenateArguments($item, $args);
    }

    return $items;
  }

  /**
   * @param $item
   * @param array $args
   * @internal param $temp
   * @return string
   */
  private function concatenateArguments($item, array $args) {
    $this->tempCount++;
    if ($this->tempCount <= count($args) - 1) {
      $item .= ',';

      return $item;
    }
    $this->tempCount = 0;

    return $item;
  }

  /**
   * @return string
   */
  private function buildReqArgs() {
    return "{" . $this->buildArguments($this->rArgs) . "}";
  }

  /**
   * @return mixed|string
   */
  private function buildCommandWithEitherArgs() {
    if ($this->oArgs == null) {
      return $this->determineIfRequiredArgs();
    } else {
      return $this->buildCommand() . $this->buildOptionalArgs();
    }
  }

  /**
   * @return mixed|string
   */
  private function determineIfRequiredArgs() {
    if ($this->rArgs == null) {
      return $this->buildCommand();
    } else {
      return $this->buildCommand() . $this->buildReqArgs();
    }
  }
}
