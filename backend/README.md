# Api-platform

> how to make an efficient backend super easily :ok_woman:

You can find the Api-platform doc [here](https://api-platform.com/docs/core/).

## Re-create the boilerplate

With just a few commands we have just what we need :tada: :
```bash
composer create-project symfony/skeleton backend
# Enter the project folder
cd backend
# Install the API Platform's server component in this skeleton
composer req api
```

in `.env`

```bash
DATABASE_URL=pgsql://postgres:password@127.0.0.1:5432/toutescultur
```

```bash
# create the databse
bin/console doctrine:database:create
bin/console doctrine:schema:create

# use server commands
composer req server --dev

# use the make command
composer require symfony/orm-pack
composer require symfony/maker-bundle --dev

# easily debug with dd()
composer require symfony/var-dumper --dev

# use jwt
composer require "lexik/jwt-authentication-bundle"
mkdir -p config/jwt
openssl genrsa -out config/jwt/private.pem -aes256 4096
openssl rsa -pubout -in config/jwt/private.pem -out config/jwt/public.pem


bin/console make:migration
bin/console doctrine:migration:migrate
```

## Launch the server

```bash
# this will start the server on http://127.0.0.1:8000
bin/console server:run
# or
bin/console s:start localhost:8000
```

Then you can go to the admin panel page on the `/api` route and see how wonderful this is :rainbow: .

## Stop the server

```bash
# ctrl+c with server:run
# or this with server:start :
bin/console s:stop
```

## Make entities or models

:fire: THIS COMMAND ACTUALLY SAVES LIVES :
```bash
bin/console make:entity
```

Run this whenever you want to create or update an Entity.

See the [doc](https://symfony.com/doc/current/doctrine/associations.html) for more information about relationships between entities.

## How to get only the fields we want on certain operations (routes)

See [here](https://api-platform.com/docs/core/serialization/)

```php
use Symfony\Component\Serializer\Annotation\Groups;

@Groups("photo_collection")
```

## Security on certain routes

See [here](https://api-platform.com/docs/core/security/)

## Filters (where clauses)

See [here](https://api-platform.com/docs/core/filters/)

## Changing default order 

See [here](https://api-platform.com/docs/core/default-order/)