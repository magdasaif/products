===============================================================================
# this package used to handle product bascis details

===============================================================================
# to use it you can follow this steps
    1- install package through this command
        composer require magdasaif/products:dev-dev

    2- if you need to publish migrations files do 
        php artisan vendor:publish --tag=product-migrations

    3- if you need to publish blade views do 
        php artisan vendor:publish --tag=product-views

    4- if you need to publish route file do 
        php artisan vendor:publish --tag=product-routes

    5- if you deal with images , put below disk to filesystem
        'product-images' => [
            'driver'        => 'local',
            'root'          => storage_path('app/public/product-images'),  //storage-app-public-product-images
            'url'           => env('APP_URL') . '/storage/product-images',
            'visibility'    => 'public',
        ],


    [//]: # 3- if you need to publish all package folders do   
    [//]: #    php artisan vendor:publish --tag=product-module  

    <!-- 4- if you do changes in published routes files , you must do php artisan optimize command  -->


then you can 
    - access any route in this package
    - migrate any files in package
    - publish migration files to able to edit on them  
    - publish blade files to able to edit on them  
    - publish route files to able to edit on them  
    <!-- - publish all package folders -->
===============================================================================
you can publish package files through this command
    php artisan vendor:publish 
    
===============================================================================