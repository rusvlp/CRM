UNAME := $(shell uname -s)

setup:
ifeq ($(UNAME),Linux)
	curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -
	sudo add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/ubuntu focal stable"
	sudo apt update && sudo apt install docker-ce
	sudo curl -L "https://github.com/docker/compose/releases/download/2.17.2/docker-compose-Linux-x86_64" -o /usr/local/bin/docker-compose
endif

ifeq ($(UNAME),Darwin)
	brew install docker-compose
endif
	sudo chmod +x /usr/local/bin/docker-compose
	
runserver:
	docker-compose build
	docker start crm_app
	docker exec -it crm_app bash -c 'composer install; php artisan key:generate'
	docker-compose up
