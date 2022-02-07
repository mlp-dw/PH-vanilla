<?php
include "connexion_bdd.php";

$data = $mysqlConnection->prepare("INSERT INTO `products`(`name`, `category`, `description`, `created_at`, `images`) 
VALUES ('Ruby on Rails',
'Ruby',
'Ruby on Rails is an extremely productive web application framework written by David Heinemeier Hansson. One can develop an application at least ten times faster with Rails than a typical Java framework. Moreover, Rails includes everything needed to create a database-driven web application, using the Model-View-Controller pattern.',
CURRENT_TIMESTAMP(),
'https://img2.freepng.fr/20180824/gfo/kisspng-ruby-on-rails-logo-software-framework-unicorn-ruby-on-rails-5-5b804d22a1d260.3011829915351350106628.jpg')");
$data->execute();

?>