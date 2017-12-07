<?php

/* catalogclass.html */
class __TwigTemplate_b9fbb9b16a2f826ee35da411dfc70f6d extends Twig_Template
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
        echo "   <!--  <h1>";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "</h1> -->

 <div class=\"col-lg-8 panel panel-default\">
        <h2 class=\"panel-heading\">Content</h2>

       

<!-- //////////////////////////////////////////// -->

<div class=\"col-lg-12\">
     ";
        // line 15
        if ((isset($context["category1"]) ? $context["category1"] : null)) {
            // line 16
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["category1"]) ? $context["category1"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 17
                echo "         <div class=\"col-lg-4\">
            <div class=\"panel panel-info\">
                <div class=\"image text-center\">
                    <img src=\"/assets/images/product.jpg\" width=\"100px\">
                </div>
                <div class=\"name text-center\">
                   <a href=\"product/";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "url"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), "html", null, true);
                echo "</a>
                </div>
                <div class=\"price\">                     
                    <span class=\"label label-info\"> ";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price"), "html", null, true);
                echo " грн.</span>                    
                </div>  
            </div>
         </div>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 32
            echo "    ";
        }
        // line 33
        echo "
</div>

<!-- ///////////////////////// -->

</div>

    <div id=\"books\">
    \t<!-- <p>Проверка Главная страница</p> -->
    </div>
";
    }

    // line 48
    public function block_sidebar($context, array $blocks = array())
    {
        // line 49
        echo "<div class=\"col-lg-4 panel panel-default\">
                <h2 class=\"panel-heading\">Sidebar</h2>
                

    <ul>
    ";
        // line 54
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 55
            echo "        <li><div class=\"col-lg-4\"><a href=\"catalogclass/";
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
        // line 60
        echo "                
</div>



";
    }

    public function getTemplateName()
    {
        return "catalogclass.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 60,  112 => 55,  108 => 54,  101 => 49,  98 => 48,  84 => 33,  81 => 32,  69 => 26,  61 => 23,  53 => 17,  48 => 16,  46 => 15,  32 => 5,  29 => 4,);
    }
}
