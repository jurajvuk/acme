<?php

/* register.html */
class __TwigTemplate_9341c59b17c9372d791553efad34868b787a6bbb1e3f13cc13cdc1b33158f8eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html", "register.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'bottomjs' => array($this, 'block_bottomjs'),
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
\t\t\t\t<h1>Register</h1>
\t\t\t\t<hr/>
\t\t\t\t

\t\t\t\t";
        // line 13
        $this->loadTemplate("errormessages.html", "register.html", 13)->display($context);
        // line 14
        echo "
\t\t\t\t<form id=\"registerform\" name=\"registerform\" class=\"form-horizontal\" action=\"/register\" method=\"post\" novalidate>
\t\t\t\t  \t
\t\t\t\t  <div class=\"form-group\">
\t\t\t\t    <label for=\"first_name\" class=\"col-sm-2 control-label\">First Name</label>
\t\t\t\t    <div class=\"col-sm-10\">
\t\t\t\t      <input type=\"text\" class=\"form-control required\" name=\"first_name\" id=\"first_name\" placeholder=\"First name\" >
\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t\t  
\t\t\t\t  <div class=\"form-group\">
\t\t\t\t    <label for=\"last_name\" class=\"col-sm-2 control-label\">Last Name</label>
\t\t\t\t    <div class=\"col-sm-10\">
\t\t\t\t      <input type=\"text\" class=\"form-control required\" name=\"last_name\" id=\"last_name\" placeholder=\"Last name\" >
\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t\t  
\t\t\t\t  <div class=\"form-group\">
\t\t\t\t    <label for=\"email\" class=\"col-sm-2 control-label\">Email</label>
\t\t\t\t    <div class=\"col-sm-10\">
\t\t\t\t      <input type=\"email\" class=\"form-control required\" name=\"email\" id=\"email\" placeholder=\"user@example.com\"  >
\t\t\t\t    </div>
\t\t\t\t  </div>

\t\t\t\t  <div class=\"form-group\">
\t\t\t\t    <label for=\"verify_username\" class=\"col-sm-2 control-label\">Verify Email</label>
\t\t\t\t    <div class=\"col-sm-10\">
\t\t\t\t      <input type=\"email\" class=\"form-control required\" name=\"verify_email\" id=\"verify_email\" placeholder=\"user@example.com\"  >
\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t\t  \t
\t\t\t\t  <div class=\"form-group\">
\t\t\t\t    <label for=\"password\" class=\"col-sm-2 control-label\">Password</label>
\t\t\t\t    <div class=\"col-sm-10\">
\t\t\t\t      <input type=\"password\" class=\"form-control required\" name=\"password\" id=\"password\" placeholder=\"Password\" >
\t\t\t\t    </div>
\t\t\t\t  </div>

\t\t\t\t  <div class=\"form-group\">
\t\t\t\t    <label for=\"verify_password\" class=\"col-sm-2 control-label\">Verify Password</label>
\t\t\t\t    <div class=\"col-sm-10\">
\t\t\t\t      <input type=\"password\" class=\"form-control required\" name=\"verify_password\" id=\"verify_password\" placeholder=\"Verify password\" >
\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t\t  
\t\t\t\t  <hr/>
\t\t\t\t  <div class=\"form-group\">
\t\t\t\t    <div class=\"col-sm-offset-2 col-sm-10\">
\t\t\t\t      <button type=\"submit\" class=\"btn btn-primary\">Register</button>
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

    // line 73
    public function block_bottomjs($context, array $blocks = array())
    {
        // line 74
        echo "\t\t
\t\t<script type=\"text/javascript\">
\t\t\$(document).ready(function() {
\t\t\t\$('#registerform').validate({
\t\t\t\trules: {
\t\t\t\t\tverify_email: {
\t\t\t\t\t\trequired: true,
\t\t\t\t\t\temail: true.
\t\t\t\t\t\tequalTo: \"#email\"
\t\t\t\t\t},
\t\t\t\t\tverify_password: {
\t\t\t\t\t\trequired: true,
\t\t\t\t\t\tequalTo: \"#password\"
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t});
\t\t</script>

\t\t";
    }

    public function getTemplateName()
    {
        return "register.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 74,  106 => 73,  45 => 14,  43 => 13,  32 => 4,  29 => 3,  11 => 1,);
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
/* 				<h1>Register</h1>*/
/* 				<hr/>*/
/* 				*/
/* */
/* 				{% include 'errormessages.html' %}*/
/* */
/* 				<form id="registerform" name="registerform" class="form-horizontal" action="/register" method="post" novalidate>*/
/* 				  	*/
/* 				  <div class="form-group">*/
/* 				    <label for="first_name" class="col-sm-2 control-label">First Name</label>*/
/* 				    <div class="col-sm-10">*/
/* 				      <input type="text" class="form-control required" name="first_name" id="first_name" placeholder="First name" >*/
/* 				    </div>*/
/* 				  </div>*/
/* 				  */
/* 				  <div class="form-group">*/
/* 				    <label for="last_name" class="col-sm-2 control-label">Last Name</label>*/
/* 				    <div class="col-sm-10">*/
/* 				      <input type="text" class="form-control required" name="last_name" id="last_name" placeholder="Last name" >*/
/* 				    </div>*/
/* 				  </div>*/
/* 				  */
/* 				  <div class="form-group">*/
/* 				    <label for="email" class="col-sm-2 control-label">Email</label>*/
/* 				    <div class="col-sm-10">*/
/* 				      <input type="email" class="form-control required" name="email" id="email" placeholder="user@example.com"  >*/
/* 				    </div>*/
/* 				  </div>*/
/* */
/* 				  <div class="form-group">*/
/* 				    <label for="verify_username" class="col-sm-2 control-label">Verify Email</label>*/
/* 				    <div class="col-sm-10">*/
/* 				      <input type="email" class="form-control required" name="verify_email" id="verify_email" placeholder="user@example.com"  >*/
/* 				    </div>*/
/* 				  </div>*/
/* 				  	*/
/* 				  <div class="form-group">*/
/* 				    <label for="password" class="col-sm-2 control-label">Password</label>*/
/* 				    <div class="col-sm-10">*/
/* 				      <input type="password" class="form-control required" name="password" id="password" placeholder="Password" >*/
/* 				    </div>*/
/* 				  </div>*/
/* */
/* 				  <div class="form-group">*/
/* 				    <label for="verify_password" class="col-sm-2 control-label">Verify Password</label>*/
/* 				    <div class="col-sm-10">*/
/* 				      <input type="password" class="form-control required" name="verify_password" id="verify_password" placeholder="Verify password" >*/
/* 				    </div>*/
/* 				  </div>*/
/* 				  */
/* 				  <hr/>*/
/* 				  <div class="form-group">*/
/* 				    <div class="col-sm-offset-2 col-sm-10">*/
/* 				      <button type="submit" class="btn btn-primary">Register</button>*/
/* 				    </div>*/
/* 				  </div>*/
/* 				</form>*/
/* 			</div>*/
/* 			<div class="col-md-2">*/
/* 				*/
/* 			</div>*/
/* 		</div>*/
/* 		{% endblock %}*/
/* */
/* 		{% block bottomjs %}*/
/* 		*/
/* 		<script type="text/javascript">*/
/* 		$(document).ready(function() {*/
/* 			$('#registerform').validate({*/
/* 				rules: {*/
/* 					verify_email: {*/
/* 						required: true,*/
/* 						email: true.*/
/* 						equalTo: "#email"*/
/* 					},*/
/* 					verify_password: {*/
/* 						required: true,*/
/* 						equalTo: "#password"*/
/* 					}*/
/* 				}*/
/* 			});*/
/* 		});*/
/* 		</script>*/
/* */
/* 		{% endblock %}*/
/* 	*/
