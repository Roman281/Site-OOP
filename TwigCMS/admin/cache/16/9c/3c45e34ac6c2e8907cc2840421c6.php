<?php

/* deliv.html */
class __TwigTemplate_169c3c45e34ac6c2e8907cc2840421c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("index.html");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
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
        echo "    <h1>";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "</h1>
    <div id=\"books\">
 <h1>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["prod"]) ? $context["prod"] : null), "html", null, true);
        echo "</h1>
    </div>
";
    }

    // line 12
    public function block_sidebar($context, array $blocks = array())
    {
        // line 13
        echo "<!-- <h1>Sidebar  ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "</h1>
 -->
";
    }

    public function getTemplateName()
    {
        return "deliv.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 13,  45 => 12,  38 => 7,  32 => 5,  29 => 4,);
    }
}
