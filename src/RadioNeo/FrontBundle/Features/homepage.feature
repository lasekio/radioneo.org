@homepage
Feature: Homepage
    In order to get an overview of Radio Néo news
    As a visitor
    I want to be able to see the homepage

  Background:
    Given there are posts:
    | title    | body    |
    | title1   | body1   |
    | title2   | body2   |
    | title3   | body3   |
    | title4   | body4   |

    Scenario: Viewing the latest blog posts at website root
        Given I am on the homepage
         When I scroll to the latest blog posts section
         Then I should see latest blog posts
