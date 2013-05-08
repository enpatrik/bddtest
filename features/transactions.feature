Feature: Register transactions

  Scenario: This will be the background
    Given there is an attest group called "PO" with the members:
      """
      Mikael Hammarin
      Björn Bergqvist
      """
    And there is an attest group called "Developers" with the members:
      """
      Patrik Nilsson
      """
    And the attest group "PO" has transaction types:
      | name  | type     |
      | Bonus | Quantity |
      | Notes | Message  |

  Scenario: I register transactions
    Given I am an attestor in attest group "PO"
    When I select the attest group "PO" and the month "January 2013" to register transactions on
    And I enter a transaction of "Bonus" with "10000" to "Patrik Nilsson"
    And I save the transaction
    Then I should see that the transaction was successfully saved
    When I approve the saved transaction
    Then I should see that the transaction was successfully approved