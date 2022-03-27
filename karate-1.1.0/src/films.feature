Feature: Tests sur la partie des films

Background:
    * url 'http://localhost:'    
    * def filmSchema = 
    """

    """

    Scenario: Récupération des films
        Given path '/films'
        When method get
        Then status 200
        And match response == "#[_ >= 0 && _ <= 10] #(filmSchema)"