# symfony api

```bash
composer create-project symfony/skeleton server
# Enter the project folder
cd server
# Install the API Platform's server component in this skeleton
composer req api
```

in `.env`

```bash
DATABASE_URL=pgsql://postgres:password@127.0.0.1:5432/symfony
```

```bash
bin/console doctrine:database:create
bin/console doctrine:schema:create
composer req server --dev
bin/console server:run
composer require symfony/orm-pack
composer require symfony/maker-bundle --dev
php bin/console make:entity
php bin/console make:migration
bin/console doctrine:migration:migrate
```


```php
use Symfony\Component\Serializer\Annotation\Groups;

@Groups("photo_collection")
```

Then create the User Entity and the UserController to hash passwords
```bash
composer require "lexik/jwt-authentication-bundle"
mkdir -p config/jwt
openssl genrsa -out config/jwt/private.pem -aes256 4096
openssl rsa -pubout -in config/jwt/private.pem -out config/jwt/public.pem

composer require symfony/var-dumper --dev
```
