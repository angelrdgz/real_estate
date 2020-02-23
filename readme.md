# Real Estate
### Installation

1.- You need to add node_modules to project, this for adding all the node libraries that the project needs.

Run the next command on your terminal.
```sh
$ npm install
```

2.- After that, you need to add the Laravel dependencies.

Run next command on yout terminal.
```sh
$ composer install
```

### Env Configurations

- Create a new file on the root project called: .env.
- Copy all the environment variables on the file: .env.example
- Set the values that project need to run (Database, AWS, Etc).
- Run the next command on your terminal to create a new app key

```sh
$ php artisan key:generate
```

### Run project

To watch the project just run the next command on your terminal:

```sh
$ php artisan server
```

### Compile SCSS Files

To convert SCSS into CSS code, just run the next command:

```sh
$ npm run dev
```


