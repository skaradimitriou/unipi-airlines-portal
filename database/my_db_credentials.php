<?php
    /*
     * This file is used when the program needs to connect to the postgresql db.
     * It contains the nessessary data to connect to the db without polluting the other files.
     */


    /* DEV

        //db login data
        define('DB_PASS','postgres');
        define('DB_USER','postgres'); 

        //db name defined in postgresql
        define('DB_BASE','airlinesFinal');

        //db server
        define('DB_SERVER','localhost');

    */

    /* PROD (Heroku server for portfolio) */

        //db login data
        define('DB_PASS','1d36b5d84c3c00e0e9079bad870ad35b7a80d122bfc707ff8b9a78f59ef8b6dc');
        define('DB_USER','sxffoiehwbwffg'); 

        //db name defined in postgresql
        define('DB_BASE','d63v7k8v3bvjgo');

        //db server
        define('DB_SERVER','ec2-52-30-159-47.eu-west-1.compute.amazonaws.com');

?>
