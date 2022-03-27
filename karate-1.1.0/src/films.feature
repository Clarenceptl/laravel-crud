Feature: Tests sur la partie des films

Background:
    * url 'http://localhost:80'
    * def filmSchema =
    """
        {
            "id_film": "#number",
            "id_genre": "#present",
            "id_distributeur": "#present",
            "titre": "#string",
            "resum": "#present",
            "date_debut_affiche": "##regex ([1-2][0-9]{3})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])",
            "date_fin_affiche": "##regex ([1-2][0-9]{3})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])",
            "duree_minutes": "#number",
            "annee_production": "#number",
            "price": "#number",
            "created_at": "##regex ([1-2][0-9]{3})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])T(0[1-9]|1[0-9]|2[0-3]):(0[1-9]|[1-5][0-9]):(0[1-9]|[1-5][0-9]).([0-9]{6})Z",
            "updated_at": "##regex ([1-2][0-9]{3})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])T(0[1-9]|1[0-9]|2[0-3]):(0[1-9]|[1-5][0-9]):(0[1-9]|[1-5][0-9]).([0-9]{6})Z",
            "reserved": "#number",
            "Rate": "#number",
            "image_path": "##string"
        }
    """

    Scenario: Récupération des films
        Given path '/api/films'
        When method get
        Then status 200
        And match response ==
        """
            {
                films: "#[_ > 0] #(filmSchema)"
            }
        """