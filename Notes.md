# Symfony

## Basics

Symfony MVC:

- M -> Entity
- V -> Template
- C -> Controller

Check Symfony requirements:

```symfony check:req```

---

### Create new Symfony project

```symfony new projectName``` -> It's a shortcut for:

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

### Twig

If rendering a template in a controller:

Extend the class with AbstractController -> ```class ControllerName extends AbstractController``` 
And import ->  ```use Symfony\Bundle\FrameworkBundle\Controller\AbstractController```

---

### Web server

Symfony:

```symfony serve```

PHP built-in:

```php -S localhost:8000 -t folder```

``` 
-S -> Server
-t -> index folder (usually, "public")
```

- Example for Symfony project:

``` 
cd projectName
php -S localhost:8000 -t public	
```

---

### Doctrine and DB



Install Docrtrine (using Symfony ORM pack https://github.com/symfony/orm-pack):

```composer require orm```

Create DB (DB credentials located into file  ```.env```)

```php bin/console doctrine:database:create```

Create an Entity Class

```php bin/console make:entity``` -> Will create a new file: ```src/Entity/EntityClassName.php```

Create a Migration

```php bin/console make:migration```


