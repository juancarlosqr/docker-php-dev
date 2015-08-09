# Docker for PHP Developers

![docker image](logo.png) ![php image](php.png)

## About

Files to setup an isolated PHP dev enviroment on Ubuntu using [Docker](https://www.docker.com/)

## How to use

- Clone this repo
- Install [docker](https://docs.docker.com/docker/installation/ubuntulinux/) and [docker-compose](http://docs.docker.com/compose/install/)
- Run `echo '\n127.0.0.1       docker.dev' | sudo tee -a /etc/hosts`
- Run `docker-compose up -d`
- Go to `http://docker.dev` on your browser
- Refactor settings according to your needs
- Happy coding!

## Sources

[http://www.newmediacampaigns.com/blog/docker-for-php-developers](http://www.newmediacampaigns.com/blog/docker-for-php-developers)

[http://docs.docker.com/linux/started/](http://docs.docker.com/linux/started/)

## Commands

List images

```javascript
docker images
```

Deleting images

```javascript
docker rmi -f REPOSITORY|IMAGE-ID
```

Build image from Dockerfile

```javascript
docker build -t REPOSITORY .
```

Tag image

```javascript
docker tag IMAGE-ID REPOSITORY:TAG
```

Pull image from Docker Hub

```javascript
docker pull REPOSITORY
```

Push image to Docker Hub

```javascript
docker push REPOSITORY
```

List running containers

```javascript
docker ps
```

```javascript
docker ps -a
```

Run a container from command line

```javascript
docker run REPOSITORY [ARGS]
```

Stop container from command line

```javascript
docker stop CONTAINER-ID
```

Run several containers with docker-compose

```javascript
docker-compose up -d
```

Stop containers witj docker-compose

```javascript
docker-compose stop
```

View containers logs

```javascript
docker-compose logs
```

##### Docker Hub

[https://hub.docker.com/u/juancarlosqr/](https://hub.docker.com/u/juancarlosqr/)

# Issues

[Deleting containers created with docker-compose](https://github.com/docker/compose/issues/1113)