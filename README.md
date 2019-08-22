<h1 align="center"> junit-laravel </h1>

<p align="center"> A simplified version of the laravel framework unit test.</p>


## Installing

```shell
$ composer require chenshuai1993/junit-laravel -vvv
```

## Usage

然后在浏览器中直接访问路由
```$xslt
Route::get('/', 'SJunitController@index');
Route::post('/', 'SJunitController@store')->name('junit.store');
```

## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/chenshuai1993/junit-laravel/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/chenshuai1993/junit-laravel/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

## License

MIT
