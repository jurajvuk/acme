<?php

/* base.html */
class __TwigTemplate_25780433c19d2902f8259d05a3592c21a240def3e5cffd1343a4239dc43de9f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'outsidecontainer' => array($this, 'block_outsidecontainer'),
            'content' => array($this, 'block_content'),
            'bottomjs' => array($this, 'block_bottomjs'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"utf-8\" />
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" /> 
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
\t<title>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</title>
\t<link rel=\"stylesheet\" src=\"//normalize-css.googlecode.com/svn/trunk/normalize.css\" />
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/styles.css\">
</head>
<body>

\t";
        // line 14
        $this->loadTemplate("topnav.html", "base.html", 14)->display($context);
        // line 15
        echo "\t

\t";
        // line 17
        $this->displayBlock('outsidecontainer', $context, $blocks);
        // line 19
        echo "\t<div class=\"cointaner\">
\t\t<div class=\"row\">
\t\t\t<br><br>
\t\t</div>
\t\t";
        // line 23
        $this->displayBlock('content', $context, $blocks);
        // line 25
        echo "\t</div>
\t<div class=\"row footer-background\">
\t\t<div class=\"col-md-3\">
\t\t\t<div class=\"contact\">
\t\t\t\t<h4>Contact Us</h4>
\t\t\t\t123 Main St.<br>
\t\t\t\tUnionville, PA<br>
\t\t\t\t76543<br>
\t\t\t\t+1 (555) 555-2121
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-6\">
\t\t\t
\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t\t<img src=\"/assets/map-small.png\" class=\"pull-right\">
\t\t</div>
\t</div>
\t<script src=\"http://code.jquery.com/jquery-1.11.3.min.js\"></script>
\t<script src=\"http://code.jquery.com/jquery-migrate-1.2.1.min.js\"></script>
\t<script src=\"http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js\"></script>
\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" ></script>
\t";
        // line 47
        $this->displayBlock('bottomjs', $context, $blocks);
        // line 49
        echo "</body>
</html>";
    }

    // line 17
    public function block_outsidecontainer($context, array $blocks = array())
    {
        // line 18
        echo "\t";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "\t\t";
    }

    // line 47
    public function block_bottomjs($context, array $blocks = array())
    {
        // line 48
        echo "\t";
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 48,  101 => 47,  97 => 24,  94 => 23,  90 => 18,  87 => 17,  82 => 49,  80 => 47,  56 => 25,  54 => 23,  48 => 19,  46 => 17,  42 => 15,  40 => 14,  30 => 7,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/* 	<meta charset="utf-8" />*/
/* 	<meta http-equiv="X-UA-Compatible" content="IE=edge" /> */
/* 	<meta name="viewport" content="width=device-width, initial-scale=1" />*/
/* 	<title>{{ title }}</title>*/
/* 	<link rel="stylesheet" src="//normalize-css.googlecode.com/svn/trunk/normalize.css" />*/
/* 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/* 	<link rel="stylesheet" type="text/css" href="/assets/styles.css">*/
/* </head>*/
/* <body>*/
/* */
/* 	{% include 'topnav.html' %}*/
/* 	*/
/* */
/* 	{% block outsidecontainer %}*/
/* 	{% endblock %}*/
/* 	<div class="cointaner">*/
/* 		<div class="row">*/
/* 			<br><br>*/
/* 		</div>*/
/* 		{% block content %}*/
/* 		{% endblock %}*/
/* 	</div>*/
/* 	<div class="row footer-background">*/
/* 		<div class="col-md-3">*/
/* 			<div class="contact">*/
/* 				<h4>Contact Us</h4>*/
/* 				123 Main St.<br>*/
/* 				Unionville, PA<br>*/
/* 				76543<br>*/
/* 				+1 (555) 555-2121*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="col-md-6">*/
/* 			*/
/* 		</div>*/
/* 		<div class="col-md-3">*/
/* 			<img src="/assets/map-small.png" class="pull-right">*/
/* 		</div>*/
/* 	</div>*/
/* 	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>*/
/* 	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>*/
/* 	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>*/
/* 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" ></script>*/
/* 	{% block bottomjs %}*/
/* 	{% endblock %}*/
/* </body>*/
/* </html>*/
