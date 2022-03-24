# Instructions to run

This git ships without a CSS file as SASS is being used.

To generate CSS run the following command:

`sass --watch [filename].scss:[filename].css`

where `filename` is usually the same as the page name. In the case of homepage (index.php) the file is
called `style.scss` and therefore to generate CSS your command should look like this:

`sass --watch style.scss:style.css`  


To run the tests, navigate to the root folder of the project and run:

`./vendor/bin/phpunit ./src/test/PlanetTest.php `