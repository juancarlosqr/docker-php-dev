# PHP Development with Docker

![docker image](src/assets/docker.png)

## About

> This environment was created to work for vanilla PHP only. It might not work for frameworks

- PHP development environment running on Docker
- Includes Nginx and MariaDB
- Each service runs on its own docker container

## How to use

1. Install __docker__ and __docker-compose__. Read how on the [docker docs](https://docs.docker.com/)
2. Clone this repo
3. Put your `php` code inside the `src` folder
4. Run `docker-compose up` (Add `-d` to run in background)
5. Go to `http://localhost` on your browser
6. Enjoy!
7. Type `Ctrl+C` to stop containers (or `docker-compose stop`)

## Images used

- [PHP](https://hub.docker.com/_/php)
- [Nginx](https://hub.docker.com/_/nginx)
- [MariaDB](https://hub.docker.com/_/mariadb)

## Sources

- [A docker-compose PHP environment from scratch](https://x-team.com/blog/docker-compose-php-environment-from-scratch/)
- [Dockerise your PHP application with Nginx and PHP7-FPM](http://geekyplatypus.com/dockerise-your-php-application-with-nginx-and-php7-fpm/)
- [Making your dockerised PHP application even better](http://geekyplatypus.com/making-your-dockerised-php-application-even-better/)
- [Docker for PHP developers](http://www.newmediacampaigns.com/blog/docker-for-php-developers)

## Commands

```sh
# list images/containers
docker image ls
docker container ls

# run docker containers
docker-compose up

# run docker containers in detached mode
docker-compose up -d

# re-build images
docker-compose up --build

# start containers
docker-compose start

# stop containers
docker-compose stop

# stop and delete containers
docker-compose down

# view containers logs
docker-compose logs
```
