<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

//
// Require 3rd-party libraries here:
//
//   require_once 'PHPUnit/Autoload.php';
//   require_once 'PHPUnit/Framework/Assert/Functions.php';
//

/**
 * Features context.
 */
class FeatureContext extends BehatContext
{
    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     *
     * @param array $parameters context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        // Initialize your context here
    }

    /**
     * @Given /^there is an attest group called "([^"]*)" with the members:$/
     */
    public function thereIsAnAttestGroupCalledWithTheMembers($arg1, PyStringNode $string)
    {
        throw new PendingException();
    }

    /**
     * @Given /^the attest group "([^"]*)" has transaction types:$/
     */
    public function theAttestGroupHasTransactionTypes($arg1, TableNode $table)
    {
        throw new PendingException();
    }

    /**
     * @Given /^I am an attestor in attest group "([^"]*)"$/
     */
    public function iAmAnAttestorInAttestGroup($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When /^I select the attest group "([^"]*)" and the month "([^"]*)" to register transactions on$/
     */
    public function iSelectTheAttestGroupAndTheMonthToRegisterTransactionsOn($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @Given /^I enter a transaction of "([^"]*)" with "([^"]*)" to "([^"]*)"$/
     */
    public function iEnterATransactionOfWithTo($arg1, $arg2, $arg3)
    {
        throw new PendingException();
    }

    /**
     * @Given /^I save the transaction$/
     */
    public function iSaveTheTransaction()
    {
        throw new PendingException();
    }

    /**
     * @Then /^I should see that the transaction was successfully saved$/
     */
    public function iShouldSeeThatTheTransactionWasSuccessfullySaved()
    {
        throw new PendingException();
    }

    /**
     * @When /^I approve the saved transaction$/
     */
    public function iApproveTheSavedTransaction()
    {
        throw new PendingException();
    }

    /**
     * @Then /^I should see that the transaction was successfully approved$/
     */
    public function iShouldSeeThatTheTransactionWasSuccessfullyApproved()
    {
        throw new PendingException();
    }
}
