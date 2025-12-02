<?php

class PageController
{
    public function home()
    {
        require "templates/home.phtml";
    }

    public function princing(): void
    {
        require "templates/pricing.phtml";
    }

}

?>