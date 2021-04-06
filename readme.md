# SomatikSoundSystem PHP Version site

## Usage

### Cloning:
```shell script
git clone --recurse-submodules -j8 git@github.com:somatik-web/php.git
```

### Running:
```shell script
docker-compose up
```
or (in case of rebuild)
```shell script
docker-compose up --build
```

### Restart single service:
```shell script
docker-compose restart <service name>
```

### Exec Composer command
```shell script
docker-compose run composer <command>
```

### Deploy
```shell
php vendor/bin/dep deploy
```

## Links
- https://github.com/ineat/docker-php-nginx-postgres-composer
- https://www.php.net/password_hash
-  https://www.nginx.com/resources/wiki/start/topics/tutorials/config_pitfalls/
