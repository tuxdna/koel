
WAIT_SEC=5

echo Wait for database to come up for $WAIT_SEC seconds

sleep $WAIT_SEC

php artisan koel:init && php artisan serve --host=0.0.0.0

