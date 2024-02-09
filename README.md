<h2 class="code-line" data-line-start=0 data-line-end=1 ><a id="Installation_0"></a>Installation</h2>
<p class="has-line-data" data-line-start="2" data-line-end="3">Ikuti langkah berikut ini untuk instalasi project test :</p>
<pre><code class="has-line-data" data-line-start="5" data-line-end="16" class="language-sh"> Git <span class="hljs-built_in">clone</span> [Dhimas46](https://github.com/Dhimas46/sprint_1.git) 
 <span class="hljs-built_in">cd</span> sprint_1
 composer install
 cp .env.example .env 
 php artisan key:generate
 php artisan migrate (melakukan migrasi database secara otomatis)
 php artisan fetch:fetchdata (menjalankan perintah atau <span class="hljs-built_in">exec</span> fetch data province dan city kemudian insert ke dalam database, tunggu hingga proses selesai)
 jalankan project menggunakan perintah : php artisan serve
 buka url http://<span class="hljs-number">127.0</span>.<span class="hljs-number">0.1</span>:<span class="hljs-number">8000</span>/
 jalankan API menggunakan dokumentasi yang telah disediakan atau dapat menggunakan postman
</code></pre>
<h2 class="code-line" data-line-start=17 data-line-end=18 ><a id="URL_17"></a>URL</h2>
<p class="has-line-data" data-line-start="19" data-line-end="20">Akses url</p>
<table class="table table-striped table-bordered">
<thead>
<tr>
<th>METHOD</th>
<th>URL</th>
</tr>
</thead>
<tbody>
<tr>
<td>GET</td>
<td>[<a href="http://127.0.0.1:8000/search/provinces?id=%7Bprovince_id%7D">http://127.0.0.1:8000/search/provinces?id={province_id}</a>][PlDb]</td>
</tr>
<tr>
<td>GET</td>
<td>[<a href="http://127.0.0.1:8000/search/cities?id=%7Bcity_id%7D">http://127.0.0.1:8000/search/cities?id={city_id}</a>][PlGh]</td>
</tr>
</tbody>
</table>