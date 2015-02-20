# Portugal Postal Codes / Códigos Postais de Portugal

## MySql / CSV / Laravel 4

Updated Jan 2015

* Countries
* Distritos
* Concelhos
* Códigos Postais

Address fields *not included*

### MySql / CSV

Just import the table dumps to Database or CSV files to your project

### Laravel 4

1) Extract migration files to the migrations folder in your Laravel Project

2) Run Migrations

```
	php artisan migrate
```

3) Open DatabaseSeeder.php and add the following lines:

```
	$this->call('CodigosPostaisTableSeeder');
	$this->call('ConcelhosTableSeeder');
	$this->call('DistritosTableSeeder');
	$this->call('CountriesTableSeeder');
```

4) Seed Tables

	Open DatabaseSeeder.php

```
	php artisan db:seed
```

5) Extract model files to the models folder in your Laravel Project

#License
Open Source software under [MIT License](http://opensource.org/licenses/MIT)