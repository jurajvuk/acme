<?php

/* topnav.html */
class __TwigTemplate_6b0cb9a6daefc580855b6486ccc1de4b5418cf7aacff59cd11bc1dbe0aa61712 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<nav class=\"navbar navbar-inverse navbar-fixed-top\">
  <div class=\"container\">
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"/\">Acme</a>
    </div>
    <div id=\"navbar\" class=\"collapse navbar-collapse\">
      <ul class=\"nav navbar-nav\">
        <li class=\"active\"><a href=\"/\">Home</a></li>
        <li><a href=\"#\">About</a></li>
        <li><a href=\"/login\">Login</a></li>
        <li><a href=\"/register\">Register</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "topnav.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <nav class="navbar navbar-inverse navbar-fixed-top">*/
/*   <div class="container">*/
/*     <div class="navbar-header">*/
/*       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*         <span class="sr-only">Toggle navigation</span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*       </button>*/
/*       <a class="navbar-brand" href="/">Acme</a>*/
/*     </div>*/
/*     <div id="navbar" class="collapse navbar-collapse">*/
/*       <ul class="nav navbar-nav">*/
/*         <li class="active"><a href="/">Home</a></li>*/
/*         <li><a href="#">About</a></li>*/
/*         <li><a href="/login">Login</a></li>*/
/*         <li><a href="/register">Register</a></li>*/
/*       </ul>*/
/*     </div><!--/.nav-collapse -->*/
/*   </div>*/
/* </nav>*/
