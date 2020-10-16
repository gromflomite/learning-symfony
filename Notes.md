# Symfony

### Create new Symfony project
	
`composer create-project symfony/website-skeleton projectName`
	
- Create new project specifying framework version:

`composer create-project symfony/website-skeleton projectName "4.2.*"`

### PHP built-in web server

php -S localhost:8000 -t foo

``` 
-S -> Server
-t -> index folder
```

- Symfony example:

``` 
cd projectName
php -S localhost:8000 -t public	
```
