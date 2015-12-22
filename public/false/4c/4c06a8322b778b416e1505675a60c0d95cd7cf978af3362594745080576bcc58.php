<?php

/* login.html */
class __TwigTemplate_7cc3037f9a26ad248d70ee0ca167185aa60640ba7b2ccac6b2a77ea4f42d1b3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html", "login.html", 1);
        $this->blocks = array(
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-2\">
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<h1>Log In</h1>
\t\t\t\t<hr/>
\t\t\t\t<form class=\"form-horizontal\">
\t\t\t\t  <div class=\"form-group\">
\t\t\t\t    <label for=\"username\" class=\"col-sm-2 control-label\">Email</label>
\t\t\t\t    <div class=\"col-sm-10\">
\t\t\t\t      <input type=\"email\" class=\"form-control\" id=\"username\" placeholder=\"Email\">
\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t\t  <div class=\"form-group\">
\t\t\t\t    <label for=\"password\" class=\"col-sm-2 control-label\">Password</label>
\t\t\t\t    <div class=\"col-sm-10\">
\t\t\t\t      <input type=\"password\" class=\"form-control\" id=\"password\" placeholder=\"Password\">
\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t\t  <hr/>
\t\t\t\t  <div class=\"form-group\">
\t\t\t\t    <div class=\"col-sm-offset-2 col-sm-10\">
\t\t\t\t      <button type=\"submit\" class=\"btn btn-primary\">Sign in</button>
\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<div class=\"col-md-2\">
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t\t";
    }

    public function getTemplateName()
    {
        return "login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "base.html" %}*/
/* */
/* 		{% block content %}*/
/* 		<div class="row">*/
/* 			<div class="col-md-2">*/
/* 				*/
/* 			</div>*/
/* 			<div class="col-md-8">*/
/* 				<h1>Log In</h1>*/
/* 				<hr/>*/
/* 				<form class="form-horizontal">*/
/* 				  <div class="form-group">*/
/* 				    <label for="username" class="col-sm-2 control-label">Email</label>*/
/* 				    <div class="col-sm-10">*/
/* 				      <input type="email" class="form-control" id="username" placeholder="Email">*/
/* 				    </div>*/
/* 				  </div>*/
/* 				  <div class="form-group">*/
/* 				    <label for="password" class="col-sm-2 control-label">Password</label>*/
/* 				    <div class="col-sm-10">*/
/* 				      <input type="password" class="form-control" id="password" placeholder="Password">*/
/* 				    </div>*/
/* 				  </div>*/
/* 				  <hr/>*/
/* 				  <div class="form-group">*/
/* 				    <div class="col-sm-offset-2 col-sm-10">*/
/* 				      <button type="submit" class="btn btn-primary">Sign in</button>*/
/* 				    </div>*/
/* 				  </div>*/
/* 				</form>*/
/* 			</div>*/
/* 			<div class="col-md-2">*/
/* 				*/
/* 			</div>*/
/* 		</div>*/
/* 		{% endblock %}*/
