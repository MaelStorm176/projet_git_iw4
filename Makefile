APP_NAME=projet_git_iw4

# Build and run the container
up: ## Spin up the project
	docker-compose up --build

# Build the container
build: ## Build the release and develoment container. The development
	docker-compose build --no-cache
	
run:
	docker run -i --env-file=./.env.example --name="$(APP_NAME)"
	
down:
	docker-compose down
	