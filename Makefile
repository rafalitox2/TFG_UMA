DOCKER=docker
DCOMPOSE=docker-compose
GIT=git
MYSQL=mysql

start-all:
	@echo "First of all run these commands as sudo: \
	sysctl -w vm.max_map_count=262144; \
	sysctl -w fs.file-max=65536; \
	ulimit -n 65536; \
	ulimit -u 4096"
	sleep 30
	${DCOMPOSE} up -d
	${DCOMPOSE} exec -d balancer bash -c "confd -interval 2 -backend etcd -node=http://etcd-tfg:2379"
	${DCOMPOSE} -f docker-compose-etcd.yml up -d
	${DCOMPOSE} -f docker-compose-elk.yml up -d

stop-all:
	${DCOMPOSE} down
	${DCOMPOSE} -f docker-compose-etcd.yml down
	${DCOMPOSE} -f docker-compose-elk.yml down

mysql-connect:
	${MYSQL} -h 0.0.0.0 -u root -p

exec-app: start-all
	${DOCKER} exec -it vgweb bash

start-etcd:
	${DCOMPOSE} -f docker-compose-etcd.yml up -d

start-elk:
	${DCOMPOSE} -f docker-compose-elk.yml up -d
