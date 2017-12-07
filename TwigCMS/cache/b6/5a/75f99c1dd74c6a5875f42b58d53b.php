<?php

/* main.html */
class __TwigTemplate_b65a75f99c1dd74c6a5875f42b58d53b extends Twig_Template
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
        echo "  

    <div id=\"books\">
    \t<p>Главная страница</p>

<!-- *********************** -->


<!-- ************************* -->


    </div>
";
    }

    // line 20
    public function block_sidebar($context, array $blocks = array())
    {
        // line 21
        echo "
<div class=\"col-lg-4 panel panel-default\">
                <h2 class=\"panel-heading\">Sidebar</h2>
                

    <ul>
    ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 28
            echo "        <li><div class=\"col-lg-4\"><a href=\"catalogclass?url=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "url"), "html", null, true);
            echo " \">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name"), "html", null, true);
            echo "</a> 
            </div>
        </li>
    </ul>  
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 33
        echo "                
</div>


";
    }

    public function getTemplateName()
    {
        return "main.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 33,  63 => 28,  59 => 27,  51 => 21,  48 => 20,  32 => 5,  29 => 4,);
    }
}
