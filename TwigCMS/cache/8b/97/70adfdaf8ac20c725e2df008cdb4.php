<?php

/* catalog.html */
class __TwigTemplate_8b9770adfdaf8ac20c725e2df008cdb4 extends Twig_Template
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
    \t<p>Проверка  Каталог</p>
    </div>
";
    }

    // line 13
    public function block_sidebar($context, array $blocks = array())
    {
        // line 14
        echo "<h1>Sidebasd Users</h1>

";
    }

    public function getTemplateName()
    {
        return "catalog.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 14,  43 => 13,  32 => 5,  29 => 4,);
    }
}
