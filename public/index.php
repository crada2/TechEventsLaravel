<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Check If The Application Is Under Maintenance
|--------------------------------------------------------------------------
|
| If the application is in maintenance / demo mode via the "down" command
| we will load this file so that any pre-rendered content can be shown
| instead of starting the framework, which could cause an exception.
|
*/

if (file_exists(__DIR__.'/../storage/framework/maintenance.php')) {
    require __DIR__.'/../storage/framework/maintenance.php';
}

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| this application. We just need to utilize it! We'll simply require it
| into the script here so we don't need to manually load our classes.
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request using
| the application's HTTP kernel. Then, we will send the response back
| to this client's browser, allowing them to enjoy our application.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);




//investigando paquete Carbon
use Carbon\Carbon;
//echo"<pre>";
//var_dump(DateTimeZone::listIdentifiers());
  date_default_timezone_set("Europe/Andorra");
  Carbon::setLocale ('es'); 

  //echo Carbon::now()-> toDateTimeString(); 

  $fecha = Carbon::now()->toFormattedDateString(); //https://ulaav.com/blog/desarrollo-web/manipulacin-de-fechas-con-carbon
  echo $fecha;
  //echo '  .otra funcion de fecha creada manual:    ';

  //$prueba = new Carbon ('2016-10-12 09:45:32 ');
  
  //echo $prueba->diffForHumans(); //funcion: hace tanto tiempo


