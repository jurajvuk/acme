<?php 

namespace Acme\Controllers;
//use duncan3dc\Laravel\BladeInstance;


class PageController extends BaseController
{

	public function getShowHomePage()
    {
        //include(__DIR__ . "/../../views/home.php");
        echo $this->blade->render("home", ["title" => "Acme"]);
    }

}
