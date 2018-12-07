<?php
namespace LynnDigital\RequestRules\Rules;

abstract class BaseRule {

	public abstract function passes();

	public abstract function message();
}