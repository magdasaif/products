===============================================================================
# this package used to handle product bascis details

===============================================================================
# to use it you can follow this steps
    1- install package through this command
        composer require magdasaif/products:dev-dev

    2- add provider to config/app.php providers array (in laravel version less than 11)
        Magdasaif\Products\app\providers\ProductServiceProvider::class,
        

then you can 
    - access any route in this package
    - migrate any files in package
    - publish migration files to able to edit on them  
===============================================================================
you can publish package files through this command
    php artisan vendor:publish 
    
===============================================================================