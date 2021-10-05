# Docker: Nginx, PHP and PostgreSQL

Services container infrastructure integrated by NGINX, PostgreSQL and PHP, designed to implement applications made with Laravel under a microservices structure. In consequence, the frontend enviroment must be deploy from other service container.

## Description

This project is a simple container services infrastructure designed to deploy applications made with Laravel. It is integrated by:

- NGINX
- PHP
- PostgreSQL

As a developer looking to improve my skils and abilities in the domain of the Laravel framework, I share this container structure in interest of making it easier to deploy both development and production environments.

## Getting Started

### Dependencies

Docker Compose relies on Docker Engine, so make sure you have Docker Engine installed. For more information related to the installation process, check the [official Docker page](https://docs.docker.com/compose/install/).

### How to use

1.  Navigate to the main github page of the repository
2.  Above the file list, click **Use this Template** to [create a new github repository from this template](https://docs.github.com/en/repositories/creating-and-managing-repositories/creating-a-repository-from-a-template#creating-a-repository-from-a-template)
3.  Clone your new repository
4.  Customize the names of your services, replacing the patterns "service-" and "\_service" by "app-name-" and "\_app_name" respectively, replacing the matches found in ./docker-compose.yml and ./php/app.conf files.
5.  From your local copy and under root directory:
    1. Create an .env file from .env.example file and set the environment varibles.
    2. Run `docker-compose up -d`
6.  Inside the container identified as "app_service" (unless you have renamed it), in the `/var/www` directory, run `composer create-project laravel / laravel .`

<!--
 ### Executing program

 * How to run the program
 * Step-by-step bullets
 ```
 code blocks for commands
 ```

 ## Help

 Any advise for common problems or issues.
 ```
 command to run if program contains helper info
 ```

 ## Authors

 Contributors names and contact info

 ex. Dominique Pizzie
 ex. [@DomPizzie](https://twitter.com/dompizzie)
-->

## License

This project is licensed under the MIT License - see the LICENSE.md file for details
