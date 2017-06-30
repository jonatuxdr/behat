@homepage
Feature: Homepage default behavior

  Scenario: The dynamic Page
    Given I am on "/dynamic.php"
    Then I should see "continuousphp 42"
    Then print last response
