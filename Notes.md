# Symfony

### Create new Symfony project
	
`composer create-project symfony/website-skeleton projectName`
	
- Create new project specifying framework version:

`composer create-project symfony/website-skeleton projectName "4.2.*"`

---

### Create new controller using maker recipe

[maker-bundle package](https://packagist.org/packages/symfony/maker-bundle)

- Create new controller:

    ```php bin/console make:controller NewController```

    A new controller and a view (template) will be created.

---

### PHP built-in web server

php -S localhost:8000 -t folder

``` 
-S -> Server
-t -> index folder
```

- Symfony example:

``` 
cd projectName
php -S localhost:8000 -t public	
```

---
