<?php
namespace kel6pbpu\ceksewa\Builder;
use kel6pbpu\ceksewa\Entity\Motor as Motor;
use kel6pbpu\ceksewa\Interface\BuilderMotor as BuilderMotor;

  class BuildMotorManual implements BuilderMotor{
    private $motor;
    public function __construct() {
      $this->motor = new Motor();
    }

    public function buildTipe() {
      $this->motor->setTipe("manual");
    }

    public function buildCcMesin() {
      $this->motor->setCcMesin("125cc");
    }

    public function buildBiayaSewa() {
      $this->motor->setBiayaSewa(49500);
    }

    public function buildBiayaDenda() {
      $this->motor->setBiayaDenda(100000);
    }

    public function getResult() {
      return $this->motor;
    }
  }
?>
