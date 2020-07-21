# CS-4443 Web-Based Software Development Group Project
## Troy University - Term 5 2020
Richard Dohney  
Michael McAuliffe  
Ralph Sison  
Mike Brady

## Requirements
* [Docker](https://www.docker.com/)
* [Docker Compose](https://docs.docker.com/compose/)

## Setup
Make a copy of [`.app.env.sample`](app/.app.env.sample) and [`.db.env.sample`](database/.db.env.sample) and rename them, removing ".sample" from the end of the filename.

In `.db.env` fill in a password for `MYSQL_ROOT_PASSWORD` and a separate password `MYSQL_PASSWORD`.

In `.app.env` set `DB_PASS` to the same password you used for `MYSQL_PASSWORD` in `.db.env`.

`docker-compose up --build`
