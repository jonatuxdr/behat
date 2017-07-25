<?php

use Behat\Behat\Context\Context;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends \Behat\MinkExtension\Context\MinkContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Then /^Env "(?P<text>(?:[^"]|\\")*)" should not be empty$/
     */
    public function assertCphpEnvText($varName)
    {
        $content = $this->getSession()->getPage()->getContent();

        if (1 !== preg_match("/$varName:([^\n]+)\n/i", $content, $match)) {
            throw new AssertionError(sprintf('Environment variables %s should not be empty', $varName));
        }

        if (empty($match[1])) {
            throw new AssertionError(sprintf('Environment variables %s should not be empty', $varName));
        }
    }

}
