
## Instalation

  

Ikuti langkah berikut ini untuk instalasi project test :

  
 1. Git clone [Dhimas46](https://github.com/Dhimas46/sprint_1.git)

 2. cd sprint_1

 3. composer install

 4. cp .env.example .env

 5. php artisan key:generate

 6. php artisan migrate (melakukan migrasi database secara otomatis)

 7. php artisan fetch:fetch-data (menjalankan perintah atau exec fetch data province dan city kemudian insert ke dalam database, tunggu hingga proses selesai)

 8. jalankan project menggunakan perintah : php artisan serve

 9. buka url http://127.0.0.1:8000/

 10. jalankan API menggunakan dokumentasi yang telah disediakan atau dapat menggunakan postman

 11. url : 

 12. |Method| URL |
|GET| {{url}}/search/provinces?id={province_id} |
|GET  | {{url}}/search/cities?id={city_id} |

