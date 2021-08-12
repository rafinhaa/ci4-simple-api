<h4 align="center">
    <br><br>
    <p align="center">
      <a href="#-about">About</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
      <a href="#-technologies">Technologies</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
      <a href="#-how-to-run-the-project">Run</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
      <a href="#-info">Info</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
      <a href="#-changelog">Changelog</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
      <a href="#-license">License</a>
  </p>
</h4>

## 🔖 About
Api RESTful, made with codeigniter 4 framework. Allows you to make a CRUD using as an example employees.

## 🚀 Technologies

- [PHP](https://php.net/)
- [CodeIgniter](https://codeigniter.com/)

## 🏁 How to run the project

#### Clone the repository

```bash
git clone https://github.com/rafinhaa/ci4-simple-api.git
cd ci4-simple-api
```

#### Install dependencies

```bash
composer install
```

#### Create and edit env file

```bash
cp env .env
vi .env
```

#### Set permissions to writable folder

```bash
chmod -R 777 writable
```

#### Execute migrations

```bash
php spark migrate -all
```

#### Execute seeders

```bash
php spark db:seed EmpregadosSeeder
```

## ℹ️ Info

#### Api usage
```php
$routes->get('empregados/new',             'empregados::new');
$routes->post('empregados',                'empregados::create');
$routes->get('empregados',                 'empregados::index');
$routes->get('empregados/(:segment)',      'empregados::show/$1');
$routes->get('empregados/(:segment)/edit', 'empregados::edit/$1');
$routes->put('empregados/(:segment)',      'empregados::update/$1');
$routes->patch('empregados/(:segment)',    'empregados::update/$1');
$routes->delete('empregados/(:segment)',   'empregados::delete/$1');
```

Get all employees. Method: GET
http://localhost:8080/empregados

Get single employee. Method: GET
http://localhost:8080/empregados/2

Create an employee. POST multipart with name and email.
http://localhost:8080/empregados

Update an employee. Verb HTTP PUT with name and email.
http://localhost:8080/employee/4

Delete an employee. Verb HTTP DELETE.
http://localhost:8080/employee/4

## 📄 Changelog

[See here](docs/changelog.md)

## 📝 License

[MIT](LICENSE)

**Free Software, Hell Yeah!**
