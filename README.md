
# Ejecutar la calculadora.

Utilizar docker para crear contenedores web con php, además de poner en práctica el README.

>table en buscador

- [Ejecutar la calculadora.](#ejecutar-la-calculadora)
  - [Instalación](#instalación)
    - [Utilizando `docker build` y `docker run`](#utilizando-docker-build-y-docker-run)
    - [Utilizando el comando `docker-compose`](#utilizando-el-comando-docker-compose)
      - [Dar de alta servicios](#dar-de-alta-servicios)
      - [Detener servicios de ejecución](#detener-servicios-de-ejecución)
      - [Iniciar los servicios](#iniciar-los-servicios)
      - [Desistalar los contenedores de los servicios](#desistalar-los-contenedores-de-los-servicios)
  - [Otros comandos utiles docker](#otros-comandos-utiles-docker)
    - [Listar contenedores](#listar-contenedores)
    - [Listar las imagenes](#listar-las-imagenes)
    - [Ver información de bajo nivel](#ver-información-de-bajo-nivel)
    - [Acceder a la línea de comandos de un contenedor](#acceder-a-la-línea-de-comandos-de-un-contenedor)


## Instalación 
Para usar este proyecto es necesario contar con Docker, mismo que puede obtenerse de manera gratuita en la siguiente dirección:

[Inicia docker] (https://www.docker.com/)

### Utilizando `docker build` y `docker run`

Se puede instalar la imagen directamente utilizando los comandos de `docker build` y `docker run` de la siguiente manera: 

``` sh 
docker build -t demo-docker:M11 .
```

Ejecutar el servidor utilizando `docker run`
```sh
docker run -p 8080:80 demo-docker:M11 .
```

> **Nota**  
> Esto solo iniciará el servidor de `nginx`, para iniciar el servidor de `PHP`, utilizar el comando `docker-compose`.

### Utilizando el comando `docker-compose`
Utilizando el comando `docker-compose` se inicializarán todos los servicios definicdos en archivo **docker-compose.yaml**, por ejemplo, los servicios: *web* y *php*. ~~No xampp~~

#### Dar de alta servicios
```sh
docker-compose up -d
```

#### Detener servicios de ejecución
```sh
docker-compose stop
```

#### Iniciar los servicios
```sh
docker-compose start
```

#### Desistalar los contenedores de los servicios
```sh
docker-compose down
```

## Otros comandos utiles docker

### Listar contenedores
Se pueden listar de forma tabular los contenedores activos en el engine de docker utilizando el comando `docker ps`.

Para listar también de forma tabular todos los contenedores, independientemente de que estén activos o no, se puede utilizar el comando `docker ps -la`.

### Listar las imagenes 
Las imagenes disponibles en el engine de Docker se pueden enlistar utilizando el comando `docker images`.

### Ver información de bajo nivel 
Se pueden obtener acceso a información detallada de los objetos controlados por docker en formato de arreglo de JSON utilizando el comando `docker inspect <nombre o ID>`.

### Acceder a la línea de comandos de un contenedor
Se puede acceder a la interfaz de linea de comandos de un contenedor utilizando el comando `docker exec` de la siguiente manera: 
```sh
docker exec -it nombre-contenedor sh 
```




