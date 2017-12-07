<?php

/* listcategories.html */
class __TwigTemplate_c2c7493ff33692b44208d58d13e1a4a8 extends Twig_Template
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
    \t<p>Проверка  Категории</p>
    </div>
    <div class=\"row\">
    
    
   \t<div class=\"col-lg-12\">
\t\t\t\t<div class=\"col-lg-2\"><b>id</b></div>
          \t\t<div class=\"col-lg-4\"><b>Name category</b></div>
\t          \t<div class=\"col-lg-2\"><b>Part_id category</b></div><br>
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 18
            echo "        \t
\t          \t <div class=\"col-lg-2\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id"), "html", null, true);
            echo "</div>
\t          \t <div class=\"col-lg-4\"><a href=\"\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name"), "html", null, true);
            echo "</a></div>
\t          \t <div class=\"col-lg-2\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "part_id"), "html", null, true);
            echo "</div><br>
                <div class=\"col-lg-2\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["products"]) ? $context["products"] : null), "name"), "html", null, true);
            echo "</div><br>
                         


        \t
       
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 29
        echo "
    </div>


</div>
";
    }

    // line 37
    public function block_sidebar($context, array $blocks = array())
    {
        // line 38
        echo "
<div class=\"col-lg-4 panel panel-default\">
                <h2 class=\"panel-heading\">Sidebar</h2>
                
    <h1>Sidebr Users</h1>
    <ul>;
     ";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 45
            echo "        <li> <div class=\"col-lg-4\"><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["product"]) ? $context["product"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name"), "html", null, true);
            echo "</a> 
        </div> </li>
      </ul>  
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 49
        echo "
</div>


";
    }

    public function getTemplateName()
    {
        return "listcategories.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 49,  104 => 45,  100 => 44,  92 => 38,  89 => 37,  80 => 29,  67 => 22,  63 => 21,  59 => 20,  55 => 19,  52 => 18,  48 => 17,  32 => 5,  29 => 4,);
    }
}
