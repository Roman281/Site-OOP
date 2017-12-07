<?php

/* delivery.html */
class __TwigTemplate_528f4be907ef1002e78ef2c894ffbbbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("index.html");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "index.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "  
    
    <div class=\"col-lg-8 panel panel-default\">
                <h2 class=\"panel-heading\"> ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title"), "html", null, true);
        echo "</h2>
                <p>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "description"), "html", null, true);
        echo " </p>
                ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "            
    </div>

";
    }

    public function getTemplateName()
    {
        return "delivery.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 10,  40 => 9,  36 => 8,  31 => 5,  28 => 4,);
    }
}
