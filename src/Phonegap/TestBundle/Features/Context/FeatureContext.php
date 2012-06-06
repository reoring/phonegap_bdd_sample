<?php

namespace Phonegap\TestBundle\Features\Context;

use Behat\BehatBundle\Context\BehatContext,
    Behat\BehatBundle\Context\MinkContext;

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Exception\PendingException;

use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

/**
 * Feature context.
 *
 * BehatContext or MinkContext
 */
class FeatureContext extends MinkContext
{
  public function __construct($parameters)
  {
    parent::__construct($parameters);
  }
}