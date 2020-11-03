## Dev environments
- Docker Engine 19.03
- Docker desktop for MacOS
- Docker Image: php:7.2-apache

## Setup
- Install Docker desktop https://www.docker.com/get-started


## Build & Run 

```
docker build -t demo-app-image .
docker run --name demo-app -p 8080:80 demo-app-image
```

or
```
docker build -t demo-app-image . && docker run --name demo-app -p 8080:80 demo-app-image
```

Open browser at http://localhost:8080/contact.php
