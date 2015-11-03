Feature: Drupal.org search
 As a ....
 I want to....
 So that....

Scenario: Searching for "behat"
	Given I go to "http://drupal.org"
	When I fill in "Search Drupal.org" with "behat"
	And I press "Search"
	Then I should see "Behat Drupal Extension"

