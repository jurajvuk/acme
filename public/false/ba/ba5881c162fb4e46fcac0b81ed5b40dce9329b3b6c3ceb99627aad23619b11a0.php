<?php

/* errormessages.html */
class __TwigTemplate_822b0b5ed677753b0c5382b4931905dc4cc7978c992279ee213d038b50cca14f extends Twig_Template
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
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 2
            echo "\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t<ul>
\t\t";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 5
                echo "\t\t\t<li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "\t\t</ul>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "errormessages.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if errors|length > 0 %}*/
/* 	<div class="alert alert-danger" role="alert">*/
/* 		<ul>*/
/* 		{% for error in errors %}*/
/* 			<li>{{ error }}</li>*/
/* 		{% endfor %}*/
/* 		</ul>*/
/* </div>*/
/* {% endif %}*/
