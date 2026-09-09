.PHONY: bash up down test

up:
	docker compose up -d

down:
	docker compose down -v

bash:
	docker compose exec web bash

test:
	docker compose exec web ./vendors/bin/phpunit --stderr --verbose lib/Cake/Test/Case/AllTestsTest.php
