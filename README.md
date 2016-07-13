Sonata Admin bundle
===================

This library contains source files for the "Sonata Admin bundle" project.
"Admin Bundle" is a product of SONATA-PROJECT and is as third party tool that can be applied in Symfony.

"Sonata Admin bundle" project delivers an admin web interface for maintaining 8 tables.
Production tables are:
    - Controleverzoek
    - Controle
    - Controlegespreksverslag
    - Opdracht
Master tables are:
    - Controleur
    - Controleverzoektype
    - Klant
    - Werknemer

sonata_admin
------------
configured in:
    /app/config/config.yml, section "sonata_admin"
    /src/AppBundle/Resources/config/routing.yml

table views
-----------
configured in:
    - /vendor/sonata-project/admin-bundle/Resources/views (standard_layout)
    - /src/AppBundle/Resources/views

table admins
------------
configured in /src/AppBundle/Admin

table entities
--------------
configured in /src/AppBundle/Entity    

validation for table entity 'Werknemer'
---------------------------------------
configured in /src/AppBundle/Validator/Constraints

table orm files
---------------
configured in /src/AppBundle/Resources/config/doctrine
