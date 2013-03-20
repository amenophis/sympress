Sympress
========================

1) Installation
----------------------------------

### Use Composer (*recommended*)

As Symfony uses [Composer][1] to manage its dependencies, the recommended way
to create a new project is to use it.

If you don't have Composer yet, download it following the instructions on
http://getcomposer.org/ or just run the following command:

    curl -s http://getcomposer.org/installer | php

Then, use the `create-project` command to generate a new Symfony application:

    php composer.phar create-project amenophis/sympress path/to/install

Composer will install Symfony and all its dependencies under the
`path/to/install` directory.

2) Checking your System Configuration
-------------------------------------

Before starting coding, make sure that your local system is properly
configured for Symfony.

Execute the `check.php` script from the command line:

    php app/check.php

Access the `config.php` script from a browser:

    http://localhost/path/to/sympress/app/web/config.php

If you get any warnings or recommendations, fix them before moving on.

Enjoy!

[1]:  http://getcomposer.org/