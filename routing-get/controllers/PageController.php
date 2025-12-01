<?php

class PageController
{
    public function home()
    {
        $route = "home";
        require_once "templates/layout.phtml";
    }

    public function about()
    {
        $route = "about";
        require_once "templates/layout.phtml";
    }

    public function contact(): void
    {
        $route = "contact";
        require_once "templates/layout.phtml";
    }

    public function notFound(): void
    {
        $route = "notFound";
        require_once "templates/layout.phtml";
    }
}

?>