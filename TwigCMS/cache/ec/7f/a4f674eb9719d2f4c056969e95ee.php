<?php

/* menu.html */
class __TwigTemplate_ec7fa4f674eb9719d2f4c056969e95ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("index.html");

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
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
    public function block_menu($context, array $blocks = array())
    {
        // line 5
        echo "  
  <!--  <header class=\"header-navbar clearfix\">
        <nav class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"container\">
                <div class=\"collapse navbar-collapse navbar-main-collapse\">
                    <ul class=\"nav navbar-nav navbar-right\"> -->
                        
                        ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menunav"]) ? $context["menunav"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["menun"]) {
            // line 13
            echo "                           <li>
                                <a href=\"/";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["main"]) ? $context["main"] : null), "url"), "html", null, true);
            echo "\" class=\"\">
                                    ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menun"]) ? $context["menun"] : null), "name"), "html", null, true);
            echo "
                                </a>
                            </li> 
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menun'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 18
        echo " 

                        <li class=\"dropdown\" >
                            <a href=\"/cart\">
                                <img src=\"/theme/assets/images/basket1.png\" width=\"40\">                        
                                <p>Ваша корзина </p> 
                            </a>
                        </li>
                        <li class=\"dropdown\" >
                            <a href=\"/cart\">
                                <input class = 'bask' type=\"namber\" name=\"basketnum\" size=\"1*8\" value = \"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "total_amount"), "html", null, true);
        echo "\" > 
                                товаров на сумму ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "total_price"), "html", null, true);
        echo " грн.
                            </a>
                        </li>
    <!--                 </ul>
                </div>
            </div>
        </nav>    -->
    
";
    }

    public function getTemplateName()
    {
        return "menu.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 29,  73 => 28,  61 => 18,  51 => 15,  47 => 14,  44 => 13,  40 => 12,  31 => 5,  28 => 4,);
    }
}
