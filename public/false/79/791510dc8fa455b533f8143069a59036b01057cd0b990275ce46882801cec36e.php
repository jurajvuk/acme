<?php

/* home.php */
class __TwigTemplate_5ddeaa33b5061b0a2e9aab7604a049b9dc25d5b592f73ec2adca9b799af5e153 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"utf-8\" />
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" /> 
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
\t<title>Acme</title>
\t<link rel=\"stylesheet\" src=\"//normalize-css.googlecode.com/svn/trunk/normalize.css\" />
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
\t<style type=\"text/css\">
\t\t.carousel-inner {
\t\t\twidth: 80%;
\t\t\tmargin: auto;
\t\t}

\t\t.empty-well {
\t\t\tbackground: transparent;
\t\t}

\t\t.bigger {
\t\t\tfont-size: 4.5em;
\t\t}

\t\t.footer-background{
\t\t\tbackground: black;
\t\t\tcolor: white;
\t\t}
\t</style>
</head>
<body>
\t
\t<nav class=\"navbar navbar-inverse navbar-fixed-top\">
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
            <li><a href=\"/login\">Login</a></li>
            <li><a href=\"/register\">Register</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


\t<div class=\"cointaner\">
\t\t<div class=\"row\">
\t\t\t<br><br>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t\t  <!-- Indicators -->
\t\t\t\t  <ol class=\"carousel-indicators\">
\t\t\t\t    <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t    <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
\t\t\t\t    <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
\t\t\t\t  </ol>

\t\t\t\t  <!-- Wrapper for slides -->
\t\t\t\t  <div class=\"carousel-inner\" role=\"listbox\">
\t\t\t\t    <div class=\"item active\">
\t\t\t\t      <img src=\"/assets/slider/1.jpg\" alt=\"image 1\">
\t\t\t\t      <div class=\"carousel-caption\">
\t\t\t\t        Acme Nature Tours
\t\t\t\t      </div>
\t\t\t\t    </div>
\t\t\t\t    <div class=\"item\">
\t\t\t\t      <img src=\"/assets/slider/2.jpg\" alt=\"image 2\">
\t\t\t\t      <div class=\"carousel-caption\">
\t\t\t\t        Experience Nature
\t\t\t\t      </div>
\t\t\t\t    </div>
\t\t\t\t    <div class=\"item\">
\t\t\t\t      <img src=\"/assets/slider/3.jpg\" alt=\"image 3\">
\t\t\t\t      <div class=\"carousel-caption\">
\t\t\t\t        Register Now!
\t\t\t\t      </div>
\t\t\t\t    </div>
\t\t\t\t    <div class=\"item\">
\t\t\t\t      <img src=\"/assets/slider/4.jpg\" alt=\"image 4\">
\t\t\t\t      <div class=\"carousel-caption\">
\t\t\t\t        ...
\t\t\t\t      </div>
\t\t\t\t    </div>
\t\t\t\t  </div>

\t\t\t\t  <!-- Controls -->
\t\t\t\t  <a class=\"left carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">
\t\t\t\t    <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
\t\t\t\t    <span class=\"sr-only\">Previous</span>
\t\t\t\t  </a>
\t\t\t\t  <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">
\t\t\t\t    <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
\t\t\t\t    <span class=\"sr-only\">Next</span>
\t\t\t\t  </a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4 well text-center\">
\t\t\t\t<h3>About</h3>
\t\t\t\t<span class=\"glyphicon glyphicon-question-sign bigger\" aria-hidden=\"true\"></span>
\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae quisquam, tempore eius cum pariatur debitis ullam sapiente obcaecati tempora, fuga ratione. Voluptas culpa animi recusandae nulla nihil a, in nostrum.</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 well empty-well text-center\">
\t\t\t\t<h3>Tours</h3>
\t\t\t\t<span class=\"glyphicon glyphicon-eye-open bigger\" aria-hidden=\"true\"></span>
\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae quisquam, tempore eius cum pariatur debitis ullam sapiente obcaecati tempora, fuga ratione. Voluptas culpa animi recusandae nulla nihil a, in nostrum.</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 well text-center\">
\t\t\t\t<h3>Contact</h3>
\t\t\t\t<span class=\"glyphicon glyphicon-earphone bigger\" aria-hidden=\"true\"></span>
\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae quisquam, tempore eius cum pariatur debitis ullam sapiente obcaecati tempora, fuga ratione. Voluptas culpa animi recusandae nulla nihil a, in nostrum.</p>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12 footer-background\">
\t\t\t\tFooter Background
\t\t\t</div>
\t\t</div>
\t</div>
\t<script src=\"//code.jquery.com/jquery-1.11.3.min.js\"></script>
\t<script src=\"//code.jquery.com/jquery-migrate-1.2.1.min.js\"></script>
\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" ></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "home.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/* 	<meta charset="utf-8" />*/
/* 	<meta http-equiv="X-UA-Compatible" content="IE=edge" /> */
/* 	<meta name="viewport" content="width=device-width, initial-scale=1" />*/
/* 	<title>Acme</title>*/
/* 	<link rel="stylesheet" src="//normalize-css.googlecode.com/svn/trunk/normalize.css" />*/
/* 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/* 	<style type="text/css">*/
/* 		.carousel-inner {*/
/* 			width: 80%;*/
/* 			margin: auto;*/
/* 		}*/
/* */
/* 		.empty-well {*/
/* 			background: transparent;*/
/* 		}*/
/* */
/* 		.bigger {*/
/* 			font-size: 4.5em;*/
/* 		}*/
/* */
/* 		.footer-background{*/
/* 			background: black;*/
/* 			color: white;*/
/* 		}*/
/* 	</style>*/
/* </head>*/
/* <body>*/
/* 	*/
/* 	<nav class="navbar navbar-inverse navbar-fixed-top">*/
/*       <div class="container">*/
/*         <div class="navbar-header">*/
/*           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*             <span class="sr-only">Toggle navigation</span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*           </button>*/
/*           <a class="navbar-brand" href="/">Acme</a>*/
/*         </div>*/
/*         <div id="navbar" class="collapse navbar-collapse">*/
/*           <ul class="nav navbar-nav">*/
/*             <li class="active"><a href="/">Home</a></li>*/
/*             <li><a href="/login">Login</a></li>*/
/*             <li><a href="/register">Register</a></li>*/
/*           </ul>*/
/*         </div><!--/.nav-collapse -->*/
/*       </div>*/
/*     </nav>*/
/* */
/* */
/* 	<div class="cointaner">*/
/* 		<div class="row">*/
/* 			<br><br>*/
/* 		</div>*/
/* 		<div class="row">*/
/* 			<div class="col-md-12">*/
/* 				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">*/
/* 				  <!-- Indicators -->*/
/* 				  <ol class="carousel-indicators">*/
/* 				    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>*/
/* 				    <li data-target="#carousel-example-generic" data-slide-to="1"></li>*/
/* 				    <li data-target="#carousel-example-generic" data-slide-to="2"></li>*/
/* 				  </ol>*/
/* */
/* 				  <!-- Wrapper for slides -->*/
/* 				  <div class="carousel-inner" role="listbox">*/
/* 				    <div class="item active">*/
/* 				      <img src="/assets/slider/1.jpg" alt="image 1">*/
/* 				      <div class="carousel-caption">*/
/* 				        Acme Nature Tours*/
/* 				      </div>*/
/* 				    </div>*/
/* 				    <div class="item">*/
/* 				      <img src="/assets/slider/2.jpg" alt="image 2">*/
/* 				      <div class="carousel-caption">*/
/* 				        Experience Nature*/
/* 				      </div>*/
/* 				    </div>*/
/* 				    <div class="item">*/
/* 				      <img src="/assets/slider/3.jpg" alt="image 3">*/
/* 				      <div class="carousel-caption">*/
/* 				        Register Now!*/
/* 				      </div>*/
/* 				    </div>*/
/* 				    <div class="item">*/
/* 				      <img src="/assets/slider/4.jpg" alt="image 4">*/
/* 				      <div class="carousel-caption">*/
/* 				        ...*/
/* 				      </div>*/
/* 				    </div>*/
/* 				  </div>*/
/* */
/* 				  <!-- Controls -->*/
/* 				  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">*/
/* 				    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>*/
/* 				    <span class="sr-only">Previous</span>*/
/* 				  </a>*/
/* 				  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">*/
/* 				    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>*/
/* 				    <span class="sr-only">Next</span>*/
/* 				  </a>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="row">*/
/* 			<div class="col-md-4 well text-center">*/
/* 				<h3>About</h3>*/
/* 				<span class="glyphicon glyphicon-question-sign bigger" aria-hidden="true"></span>*/
/* 				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae quisquam, tempore eius cum pariatur debitis ullam sapiente obcaecati tempora, fuga ratione. Voluptas culpa animi recusandae nulla nihil a, in nostrum.</p>*/
/* 			</div>*/
/* 			<div class="col-md-4 well empty-well text-center">*/
/* 				<h3>Tours</h3>*/
/* 				<span class="glyphicon glyphicon-eye-open bigger" aria-hidden="true"></span>*/
/* 				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae quisquam, tempore eius cum pariatur debitis ullam sapiente obcaecati tempora, fuga ratione. Voluptas culpa animi recusandae nulla nihil a, in nostrum.</p>*/
/* 			</div>*/
/* 			<div class="col-md-4 well text-center">*/
/* 				<h3>Contact</h3>*/
/* 				<span class="glyphicon glyphicon-earphone bigger" aria-hidden="true"></span>*/
/* 				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae quisquam, tempore eius cum pariatur debitis ullam sapiente obcaecati tempora, fuga ratione. Voluptas culpa animi recusandae nulla nihil a, in nostrum.</p>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div class="row">*/
/* 			<div class="col-md-12 footer-background">*/
/* 				Footer Background*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>*/
/* 	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>*/
/* 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" ></script>*/
/* </body>*/
/* </html>*/
