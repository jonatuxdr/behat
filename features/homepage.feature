@homepage
Feature: Homepage default behavior

  Scenario: The environments variables
    Given I am on "/index.php"
    Then I should see "continuousphp 42"
    Then I should see "MY_FIRST_VAR:MY_FIRST_VALUE"
    Then I should see "MY_SECOND_VAR:MY_SECOND_VALUE"
    Then I should see "MY_SECURE_VAR:MY_SECURE_VALUE"
    Then I should see "CONTINUOUSPHP:CONTINUOUSPHP"
    Then Env "GITHUB_TOKEN" should not be empty
    Then Env "CPHP_BUILD_ID" should not be empty
    Then Env "CPHP_GIT_COMMIT" should not be empty
    Then Env "CPHP_GIT_REF" should not be empty
    Then Env "CPHP_BUILT_BY" should not be empty
    Then Env "CPHP_TOKEN" should not be empty
    Then print last response
