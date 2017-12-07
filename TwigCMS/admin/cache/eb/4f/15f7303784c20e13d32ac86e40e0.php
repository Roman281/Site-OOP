<?php

/* listcategories.html */
class __TwigTemplate_eb4f15f7303784c20e13d32ac86e40e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("index.html");

        $this->blocks = array(
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
    public function block_sidebar($context, array $blocks = array())
    {
        // line 5
        echo "<h1>";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "</h1>
<div class=\"row\">
    
    
   \t<div class=\"col-lg-12\">
\t\t\t\t<div class=\"col-lg-2\"><b>id</b></div>
          \t\t<div class=\"col-lg-4\"><b>Name category</b></div>
\t          \t<div class=\"col-lg-2\"><b>Part_id category</b></div><br>
        ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 14
            echo "        \t
\t          \t <div class=\"col-lg-2\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id"), "html", null, true);
            echo "</div>
\t          \t <div class=\"col-lg-4\"><a href=\"\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name"), "html", null, true);
            echo "</a></div>
\t          \t <div class=\"col-lg-2\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "part_id"), "html", null, true);
            echo "</div><br>
                         


        \t
       
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 24
        echo "
    </div>
     <div class=\"form-group\">
                        <label>Категория </label>
                        <select name=\"parent_id\" class=\"selectpicker form-control\">                            
                            
                            ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["categ"]) {
            // line 31
            echo "                            <option>
                                ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categ"]) ? $context["categ"] : null), "name"), "html", null, true);
            echo "
                            </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categ'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 35
        echo "                            
                            
                            
                        </select>
      </div>

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
        return array (  95 => 35,  86 => 32,  83 => 31,  79 => 30,  71 => 24,  58 => 17,  54 => 16,  50 => 15,  47 => 14,  43 => 13,  31 => 5,  28 => 4,);
    }
}
