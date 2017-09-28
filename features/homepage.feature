@homepage
Feature: Testing htaccess ini values change

  Scenario: The post_max_size set by htaccess
    Given I am on "/main.php"
    Then print last response
    Then I should see "post_max_size: 1234M"
