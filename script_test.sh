#!/bin/bash
echo "Running PHPUnit tests..."
docker compose exec php bin/phpunit
echo "All tests are executed !"