<?php
 
    // here is the root namespace : App\
    //we must call to vendor wich is in Src on level higher

    require  './../vendor/autoload.php';

    // now we can call to class hello in App\Wcs 
    // because we have taken the root namespace from autoload.php

    use App\Wcs\Hello;

    // First : we can call to talk directly via namespace 
    // and because talk is a static function
    
    echo App\Wcs\Hello::talk(), "<br />\n";

    //Another way, is to instantiate the class via namespace with "new" and call method
    
    $hello = new App\Wcs\Hello();
    echo $hello->talk(), "<br />\n";

    //If we have a longer namespace, we can make an alias of namespace like this :
    
    use App\Wcs\Hello as Ola;
    echo Ola::talk(), "<br />\n";

    // ... And after install ehime\helloworld we can instantiate another object with it ... :)
    use HelloWorld\SayHello;
    echo SayHello::world(), "<br />\n";
