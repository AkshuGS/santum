Install backend api using sanctum<br>
php artisan install:api<br><br>
pusblish the provides<br>
php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"<br><br>
migrate the files<br>
php artisan migrate<br><br>



created articles <br>
php artisan make:model article -a --api<br><br>

php astisan migrate<br>
apiResource('articles', ArticleControllers::class);<br><br>

registration<br>

password reset<br>
 php artisan make:model ResetCodePassword -m<br><br>

auth add and retrive article data<br>

filterable trait<br>

//get news api from 3rd party<br>

https://newsapi.org/v2/top-headlines?country=us&apiKey=2b887d99be8949f6ad396a56c617eb4b<br><br>

creted cron job and set daily <br>
app:online-articles
