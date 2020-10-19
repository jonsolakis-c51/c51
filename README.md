# C51 Assignment

single page web application to show a list of offers, and their cashback values

###Technology Used
- [Lumen](https://lumen.laravel.com/docs).
- [Phpunit](https://phpunit.de/).
- [Php](https://www.php.net/).
- [Docker](https://www.docker.com/).
- [Bootstrap](https://getbootstrap.com/).

### Requirements
To run this application all you need is
- docker
- docker-compose

### Setup
To Setup this appliation all you need to do is run
``docker-compose up -d --build``
the application will sleep for 60 seconds (DB should be created at this time) then it will
migrate and seed the database before starting apache. you should be able to access the site
at http://localhost:8080/


### Design Decisions

#### Code Design
I wanted to try something different by implementing the repository pattern with lumen
instead of using symfony which I was already comfortable with. Lumen is also a MVC architecture,
Its just a slimmed down version of laravel. the repository pattern works very well
with lumens's container. You are easily able to bind the concrete class to the abstraction.
Doing this I able to easily inject the repository into the required classes with ease.

#### Test Framework
I Used phpunit for testing which comes prepackaged with most frameworks and is industry standard


#### Virtualization 
I choose docker to run the application because of familiarity with it beforehand

#### Web server
I used apache for the web sever because originally i was just going to host with Php's built in webserver
but was having issues originally, so I switched over to apache because of the easy setup

### Unit Testing
I have included 2 tests (1 integration and 1 unit) in this app. The integration test is a
example of how you would have to integrate with the database to test out the controller.
The Unit test also tests the same functionality but instead the repository is mocked and
injected into the controller forcing it to return a certain set of data. This is an 
example of how to test individual components without relying on 3rd party dependancies.

To Run the Unit Tests you will have to ssh into the container
```docker exec -it {containerID} bash``` and once inside the container Run:
``./vendor/bin/phpunit``
