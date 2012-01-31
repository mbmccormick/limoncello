# Limoncello

Limoncello is a lightweight PHP web application framework based on [Limonade](http://www.limonade-php.net/) and [Bootstrap](http://twitter.github.com/bootstrap/). Limoncello combines the power of Limonade's application framework with the style and standards of Twitter's Bootstrap toolkit, and adds a few goodies of it's own.


## Installation

Setting up Limoncello is fast and easy. You will need one MySQL database and a PHP hosting provider in order to run Limoncello. Once that is all set, follow the steps below:

1. Create the necessary tables in your database by running the SQL script at `db/database.sql`. 

2. Enter your database connection information in the `config/config.php` file, you can look at `config/config.php.sample` for an example.

3. Upload this framework to the root of your website and voila! You are now running Limoncello!


## Development

Developing with Limoncello is extremely simple, since it's built on the idea of a MVC framework, without the models. This makes developing an application with Limoncello lightning fast. The controllers for your application are located in the `controllers/` folder and the views are located in the `views` folder. Take a look at the stock Users controllers and views to get a better understanding.

Routes for the web application are defined in the `index.php` file and can be tailored to fit your application's needs. Again, take a look at the stock Users routes to see how it's done.


## License

Limoncello is available free of charge and licensed under the GNU General Public License v3. For more information about this license and the terms of use of this software, please review the LICENSE.txt file.