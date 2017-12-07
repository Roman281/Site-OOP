<?php

/* product.html */
class __TwigTemplate_a19c76e98da7d62b6d7170288ba1b664 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), "html", null, true);
        echo "</h1>

 <div class=\"col-lg-8 panel panel-default\">


<!-- //////////////////////////////////////////// -->

    <div class=\"row\">
    <div class=\"col-lg-12\">
        <div class=\"col-lg-4\">
            <div class=\"image text-center\">
                <img src=\"files/images/product.image\" width=\"200px\">
            </div>
        </div>
        <div class=\"col-lg-8\">
            

          <div class=\"price\">

            <span class=\"label label-info\">  ";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["namePrice"]) ? $context["namePrice"] : null), "html", null, true);
        echo "   
                     ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price"), "html", null, true);
        echo " грн.</span> 

          </div>  
          <h4> ";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["discriptionProduct"]) ? $context["discriptionProduct"] : null), "html", null, true);
        echo " </h4>
                <div class=\"bg-info\">
                    ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), "html", null, true);
        echo "
                    ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description"), "html", null, true);
        echo "
                </div>
          
        </div>
        <div class = 'form-basket'>
                    <form  name = 'basket' method=\"post\">
                        <label>Количество</label>
                        <input type=\"number\" name=\"amount\" value = '1' min=\"1\" max=\"50\">           
                        <input type=\"hidden\" name=\"idid\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
        echo "\">
                        <input type=\"submit\"  name=\"bay\"  value=\"Добавить в корзину\" style=\"background: #ed710b;\">
                    </form>            
        </div>

    </div>


    </div>

    

<!-- ///////////////////////// -->

</div>

   
";
    }

    // line 60
    public function block_sidebar($context, array $blocks = array())
    {
        // line 61
        echo "
<div class=\"col-lg-4 panel panel-default\">
                <h2 class=\"panel-heading\">Sidebar</h2>
                

    <ul>
    ";
        // line 67
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 68
            echo "         <li><div class=\"col-lg-4\"><a href=\"catalogclass?url=";
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
        // line 73
        echo "                
</div>



";
    }

    public function getTemplateName()
    {
        return "product.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 73,  122 => 68,  118 => 67,  110 => 61,  107 => 60,  85 => 39,  74 => 31,  70 => 30,  65 => 28,  59 => 25,  55 => 24,  32 => 5,  29 => 4,);
    }
}
