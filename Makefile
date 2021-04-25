DOCKER=docker
DCOMPOSE=docker-compose
GIT=git
MYSQL=mysql

all: build push

start-all:
	${DCOMPOSE} up -d

stop-all:
	${DCOMPOSE} down

mysql-connect:
	${MYSQL} -h 0.0.0.0 -u root -p