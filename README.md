Install backend api using sanctum
php artisan install:api
pusblish the provides
php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
migrate the files
php artisan migrate



created articles 
php artisan make:model article -a --api

php astisan migrate
apiResource('articles', ArticleControllers::class);

registration

password reset
 php artisan make:model ResetCodePassword -m

auth add and retrive article data

filterable trait

//get news api from 3rd party

https://newsapi.org/v2/top-headlines?country=us&apiKey=2b887d99be8949f6ad396a56c617eb4b

creted cron job and set daily 
app:online-articles
