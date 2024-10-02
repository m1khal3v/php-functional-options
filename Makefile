build: ## build image
	docker compose build

phpunit: ## run phpunit
	docker compose run app phpunit

phpstan: ## run phpstan
	docker compose run app phpstan
