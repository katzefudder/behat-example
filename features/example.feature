Feature: Greeting
  As a user I want to be greeted by my name

  Scenario:
    Given a name
    Then the script should greet that name

  Scenario:
    Given the name "Harry Hirsch"
    Then the script should say "Hello Harry Hirsch"

  Scenario:
    Given no name
    Then the script should say "Hello unknown stranger"
  
  Scenario: User enters their Name
    Given I visit "greeting.php"
    When I enter "John Doe" in the "Name" field
    And I press "Say Hello"
    Then I should see "Hello John Doe"
  
  Scenario: User enters no Name
    Given I visit "greeting.php"
    When I don't enter anything in the "Name" field
    And I press "Say Hello"
    Then I should see "Hello unknown stranger"