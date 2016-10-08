#!/bin/sh

# Our working directory
ACCOUNT_NAME=dan-powell.uk
ACCOUNT_DIR=/home/celestial/${ACCOUNT_NAME}
WEB_DIR=${ACCOUNT_DIR}/public

# Swap to our working dir
cd $WEB_DIR

# If we don't have composer.phar
if [ ! -f  composer.phar ];
  then
    # Download composer
    echo "Composer missing, downloading..."
    php -r "eval('?>'.file_get_contents('https://getcomposer.org/installer'));"
    echo "Downloaded Composer..."
  # We have composer already
  else
    # Update composer
    echo "Composer present, updating..."
    php composer.phar self-update
    echo "Updated Composer..."
fi

if [ ! -f  $ACCOUNT_DIR/.composer/auth.json ];
  then
    echo "Copying auth.json"
    cp $WEB_DIR/hooks/stubs/auth.json $ACCOUNT_DIR/.composer/auth.json
  else
    echo "The auth.json exists!"
fi

# Install any new deps and remove any unused ones (no dev)
php composer.phar install --no-dev --no-scripts --profile

# Optimize
php composer.phar dump-autoload --optimize

# Run our migrations
php artisan migrate --env=production

# Publish Admin Assets
php artisan vendor:publish --tag=public --force