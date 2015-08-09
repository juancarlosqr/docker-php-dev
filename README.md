# Docker for PHP Developers

![Docker](https://www.docker.com/sites/all/themes/docker/assets/images/logo.png)

## About

Files to setup an isolated PHP dev enviroment using [Docker](https://www.docker.com/)

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

# Issues

[Deleting containers created with docker-compose](https://github.com/docker/compose/issues/1113)