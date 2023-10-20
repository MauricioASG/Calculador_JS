
# Ejecutar la calculadora.

Utilizar docker para ejecutar un programa en JavaScript
- [Ejecutar la calculadora.](#ejecutar-la-calculadora)
  - [Instalación](#instalación)
    - [Utilizando `docker build` y `docker run`](#utilizando-docker-build-y-docker-run)


## Instalación 
Para usar este proyecto es necesario contar con Docker, mismo que puede obtenerse de manera gratuita en la siguiente dirección:

[Inicia docker] (https://www.docker.com/)

### Utilizando `docker build` y `docker run`

Se puede correr el programa de la calculadora utilizando los comandos de `docker build` y `docker run` de la siguiente manera: 


``` sh 
docker build -t calculadora-app .
```

Ejecutar el servidor utilizando `docker run`
```sh
docker run -it calculadora-app .
```
