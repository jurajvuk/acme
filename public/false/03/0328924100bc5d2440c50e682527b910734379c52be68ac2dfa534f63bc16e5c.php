<?php

/* home.html */
class __TwigTemplate_817fda735ed78f71dff07c1146f9a37aa9dd25e339a59c78784e26aa4363441c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html", "home.html", 1);
        $this->blocks = array(
            'outsidecontainer' => array($this, 'block_outsidecontainer'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_outsidecontainer($context, array $blocks = array())
    {
        // line 5
        echo "\t\t<div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
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
\t\t";
    }

    // line 53
    public function block_content($context, array $blocks = array())
    {
        // line 54
        echo "\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t
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
\t\t";
    }

    public function getTemplateName()
    {
        return "home.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 54,  82 => 53,  32 => 5,  29 => 4,  11 => 1,);
    }
}
/* {% extends "base.html" %}*/
/* */
/* */
/* 		{% block outsidecontainer %}*/
/* 		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">*/
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
/* 		{% endblock %}*/
/* */
/* 		{% block content %}*/
/* 		<div class="row">*/
/* 			<div class="col-md-12">*/
/* 				*/
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
/* 		{% endblock %}*/
