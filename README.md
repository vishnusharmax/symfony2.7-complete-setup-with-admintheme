Symfony Standard Edition
========================

Welcome to the Symfony Standard Edition - a fully-functional Symfony
application that you can use as the skeleton for your new applications.

For details on how to download and get started with Symfony, see the
[Installation][1] chapter of the Symfony Documentation.

There's no need to configure anything to run the application. Just execute this command to run the built-in web server and access the application in your browser at http://127.0.0.1:8000/secure/login
![alt text](http://laxmiclothes.com/SymfonyDesktop.png)
![alt text](http://laxmiclothes.com/SymfonyLogin.png)


<pre>
$ cd symfony2.7-complete-setup-with-admintheme/
$ php app/console doctrine:database:create
$ php app/console doctrine:schema:update --force
$ php app/console server:run</pre>

Now Open database folder and goto your phpmyadmin and import database file that present in database folder

Every thing is done now open url http://127.0.0.1:8000/secure/login

What's inside?
--------------

The Symfony Standard Edition is configured with the following defaults:

  * An AdminBundle you can use to start coding for admin panel;
  * An DBBundle you can use to start coding for Database;
  * An ServiceBundle you can use to start coding for Rest Api;
  * An CommonBundle you can use to start coding for Common helper;
  * An SiteBundle you can use to start coding for your front end website;


  * Twig as the only configured template engine;

  * Doctrine ORM/DBAL;

  * Swiftmailer;

  * Annotations enabled for everything.

It comes pre-configured with the following bundles:

  * **FrameworkBundle** - The core Symfony framework bundle
  
  * **VlabBundle** - Adds support for image uploadation
  
  * **meweskBundle/twig-excel-bundle** - Adds support for csv,pdf,excle file export.
  
  * **beberlei/DoctrineExtensions** - Adds support for doctrine custom query helper.


  * [**SensioFrameworkExtraBundle**][6] - Adds several enhancements, including
    template and routing annotation capability

  * [**DoctrineBundle**][7] - Adds support for the Doctrine ORM

  * [**TwigBundle**][8] - Adds support for the Twig templating engine

  * [**SecurityBundle**][9] - Adds security by integrating Symfony's security
    component

  * [**SwiftmailerBundle**][10] - Adds support for Swiftmailer, a library for
    sending emails

  * [**MonologBundle**][11] - Adds support for Monolog, a logging library

  * [**AsseticBundle**][12] - Adds support for Assetic, an asset processing
    library

  * **WebProfilerBundle** (in dev/test env) - Adds profiling functionality and
    the web debug toolbar

  * **SensioDistributionBundle** (in dev/test env) - Adds functionality for
    configuring and working with Symfony distributions

  * [**SensioGeneratorBundle**][13] (in dev/test env) - Adds code generation
    capabilities

  * **DebugBundle** (in dev/test env) - Adds Debug and VarDumper component
    integration

All libraries and bundles included in the Symfony Standard Edition are
released under the MIT or BSD license.

Enjoy!

[1]:  https://symfony.com/doc/2.7/setup.html
[6]:  https://symfony.com/doc/current/bundles/SensioFrameworkExtraBundle/index.html
[7]:  https://symfony.com/doc/2.7/doctrine.html
[8]:  https://symfony.com/doc/2.7/templating.html
[9]:  https://symfony.com/doc/2.7/security.html
[10]: https://symfony.com/doc/2.7/email.html
[11]: https://symfony.com/doc/2.7/logging.html
[12]: https://symfony.com/doc/2.7/assetic/asset_management.html
[13]: https://symfony.com/doc/current/bundles/SensioGeneratorBundle/index.html
