composer-update:
	docker run -v $(shell pwd):/app -w /app composer update

phpstan:
	docker run -v $(shell pwd):/app -w /app php vendor/bin/phpstan analyse example.php --level 4

run:
	chmod +x ./example.php
	docker run -v $(shell pwd):/app -w /app php php example.php
