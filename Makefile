build: ## build image
	docker compose build

composer-install: ## run composer install
	docker compose run app composer install -n

phpunit: composer-install ## run phpunit
	docker compose run app phpunit

phpstan: composer-install ## run phpstan
	docker compose run app phpstan
