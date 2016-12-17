# Linker

[![StyleCI](https://styleci.io/repos/76742350/shield?branch=master)](https://styleci.io/repos/76742350)
[![GitHub license](https://img.shields.io/github/license/24aitor/linker.svg?style=flat-square)](https://raw.githubusercontent.com/24aitor/linker/master/LICENSE)

Simple Laravel package to ensure that links are under https when it's needed.

## Getting Started

Include the line below to config/app.php inside array ``'aliases' => [ :``

```php
'Linker'   => Aitor24\Linker\Facades\Linker::class,
```


## Functions

### isSecure()

Returns true if your website is under https.

### asset()

Check if your site is under https to return a secure link to asset or not.

### url()

Check if your site is under https to return a secure link to url or not.

### route()

Check if your site is under https to return a secure link to route name or not.

## Using Linker

In your view use as example below:

```php
{{ Linker::route('yourRouteName') }}
```

In your controller use as example below:

```php
namespace App\Http\Controllers;

use Linker;

class yourController extends Controller
{

    public function index()
    {
        return redirect(Linker::route('yourRouteName'));
    }

}
```
