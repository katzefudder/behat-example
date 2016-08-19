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