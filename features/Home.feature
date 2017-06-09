Feature: Testing
	Scenario: Home Page
		Given I am on the homepage
		Then I should see "Laravel"
		Then I should see "Laracast"
	Scenario: Login Page
		When I go to "home"
		Then the url should match "login"
		Then the print current URL
		When press "login"


