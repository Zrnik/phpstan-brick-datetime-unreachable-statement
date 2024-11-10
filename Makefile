composer-update:
	docker run -v $(shell pwd):/app -w /app composer update

phpstan:
	docker run -v $(shell pwd):/app -w /app php vendor/bin/phpstan analyse example.php example2.php --level 4

run1:
	docker run -v $(shell pwd):/app -w /app php php example.php

run2:
	docker run -v $(shell pwd):/app -w /app php php example2.php
