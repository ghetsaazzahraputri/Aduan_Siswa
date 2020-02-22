### requirement
kebutuhan untuk menjalankan program ini:
-PHP
-visual studio
-Open folder
-command line
-Xampp
-composer

### cara memasang program

ketika berada directory web serve(htdocs,http,www,etc.)
...
git clone htttps://github.com/yaelahno/newsproject.git
...
masukan ke folder yang baru di git clone
...
cd ./newsproject
...
dan jalankan perintah
...
lalu composer install
...
lalu buatlah filr.env baru,dan copy semua kode yang berada di .env.example lalu sesuaikan dengan bentuk wujud gambaran atau benda pc anda
...
lalu jalankan perintah
...
php artisan key;generate
php artisan migrate
...
untuk memulai program dengan data yang sudah disediakan,import file newsproject yang sudah dilampirkan

### untuk menjalakan program

php artisan serve
...
Laravel development server started: <http://127.0.0.1:8000>
...
lalu buka goggle, lalu buka http://127.0.0.1:8000
