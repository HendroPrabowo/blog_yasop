# Blog Yayasan Soposurung
![](https://pbs.twimg.com/profile_images/3559272665/3f899c272f3f036a5c1631b8b4f228f6_400x400.png)

# How to use
- Clone the project
- Composer install or composer update
- BEFORE MIGRATE COMMENT ISI FUNSGI BOOT DALAM app/Providers/AppServiceProvider.php
- Migrate the db with php artisan migrate
- Link storage laravel with php artisan
- Create new user from register router
- Dont forget to commet register routes, so user cannot create new admin account (Can create new account if user forgot the password)
- Run

# Reference Link in URL
```sh
<h1>URL : {{ url("/home") }}</h1>
<h1>Route : {{ route('post.index') }}</h1>
<h1>Route : {{ route('post.show', ['id' => 1]) }}</h1>
<h1>Action : {{ action('PostController@home') }}</h1>
<a href='{{ action("TentangAsramaController@visimisi") }}'>Link</a>
```

##### To do
Delete fasilitas menu, controller, model, database table

## Notes
Kalau error waktu menjalankan `php artisan serve` atau `php artisan migrate`, comment dulu fungsi di `app\Providers\AppServiceProvider` di fungsi ini :
```
public function boot()
    {
        // Comment ini
        // $fasilitas_menu = FasilitasMenu::all();
        // View::share('fasilitas_menu', $fasilitas_menu);
    }
```
