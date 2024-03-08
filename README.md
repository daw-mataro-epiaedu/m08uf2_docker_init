# Exemple docker init

Exemple de com empaquetar una aplicació `php` en un contenidor Docker.

## Docker init

El primer pas serà executar la comanda `docker init`. A continuació, quan ens pregunti quin tipus d'aplicació volem crear, seleccionarem `php`:

```bash
docker init
```

```bash
Welcome to the Docker Init CLI!

This utility will walk you through creating the following files with sensible defaults for your project:
  - .dockerignore
  - Dockerfile
  - compose.yaml
  - README.Docker.md

Let's get started!

? What application platform does your project use?  [Use arrows to move, type to filter]
> PHP with Apache - (detected) suitable for a PHP web application
  Go - suitable for a Go server application
  Python - suitable for a Python server application
  Node - suitable for a Node server application
  Rust - suitable for a Rust server application
  ASP.NET Core - suitable for an ASP.NET Core application
  Java - suitable for a Java application that uses Maven and packages as an uber jar
  Other - general purpose starting point for containerizing your application
  Don't see something you need? Let us know!
  Quit
```

Ens preguntarà quina versió de PHP volem utilitzar, per exemple, podem posar la versió `8.1`:

```bash
? What version of PHP does your project use?  [Use arrows to move, type to filter]
```

Després, necessita saber la ruta de l'aplicació, en aquest cas `src`:

```bash
? What's the relative directory (with a leading .) for your app?  [Use arrows to move, type to filter]
> ./src
  other
```

Per poder usar l'aplicació localment, ens demana a quin port de l'ordinador volem que escolti el contenidor. En aquest cas, seleccionarem el port `9000`:

```bash
? What port do you want to use to access your app? (9000)
```

Amb això, crearà tots els arxius necessaris:

```bash
CREATED: .dockerignore
CREATED: Dockerfile
CREATED: compose.yaml
CREATED: README.Docker.md

✔ Your Docker files are ready! You can now build and run your app with the following commands:

  cd src
  docker compose up --build
```

### Aixecar el contenidor

Per aixecar el contenidor, només cal executar la comanda `docker compose up --build`:

### Deploying your application to the cloud

First, build your image, e.g.: `docker build -t myapp .`.
If your cloud uses a different CPU architecture than your development
machine (e.g., you are on a Mac M1 and your cloud provider is amd64),
you'll want to build the image for that platform, e.g.:
`docker build --platform=linux/amd64 -t myapp .`.

Then, push it to your registry, e.g. `docker push myregistry.com/myapp`.

Consult Docker's [getting started](https://docs.docker.com/go/get-started-sharing/)
docs for more detail on building and pushing.