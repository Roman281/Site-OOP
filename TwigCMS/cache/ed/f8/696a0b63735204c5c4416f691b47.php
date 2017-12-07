<?php

/* pay.html */
class __TwigTemplate_edf8696a0b63735204c5c4416f691b47 extends Twig_Template
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
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title"), "html", null, true);
        echo "</h2>
                <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "description"), "html", null, true);
        echo " </p>            
    </div>
";
    }

    public function getTemplateName()
    {
        return "pay.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  35 => 7,  31 => 5,  28 => 4,);
    }
}
