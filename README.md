lessREST
========
A simple "less" than fully fleshed REST framework for minimal projects.
The main goal of this project is performance for high volumes of tiny requests
suitable for supplying data to a Javascript MVC.

Usage
========
edit or copy sample.htaccess to .htaccess and place it where your webroot points to.  If that is a different directory
than the lessREST folder, update the path to index.php in the file.
mkdir publish/post publish/get
In the post and the get directory any class you create will be accessible via a REST interface.
You can extend the provided base object or possibly traits and extend your own base object.  This
readme shall be updated eventually, but in any event, you need a public process() method in your class that
will be executed, and a constructor that takes an array of params and a payload.

Tests
=======
Make sure the machine you are running the unit / functional tests has an entry in the hosts file for lessRest.local 127.0.0.1
and an apache or equivilant vhost pointing to the tests directory
