# Instructions to run

This git ships without a CSS file as SASS is being used.

To generate CSS run the following command:

`sass --watch [filename].scss:[filename].css`

where `filename` is usually the same as the page name. This project uses `style.css` for its homepage, therefore the
two commands you need to run are:

`sass --watch style.scss:style.css`

`sass --watch planet.scss:planet.css`


To run the tests, navigate to the root folder of the project and run:

`./vendor/bin/phpunit ./src/test/PlanetTest.php `