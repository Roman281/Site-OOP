<?php

/* catalog.html */
class __TwigTemplate_455b85361e7786f9fd6dd6d64cb930f9 extends Twig_Template
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
        echo "<h1>";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "</h1>
<div class=\"row\">
    <a href=\"/admin/product\">Добавить товар</a><br>
    <a href=\"/admin/categories\">Добавить категорию товара</a>


    <div class=\"col-lg-12\">
    \t<table>
    \t\t<thead>
    \t\t\t<tr>
    \t\t\t\t
\t\t         \t<td><b>id</b></td>
\t\t            <td><b>name</b></td>
\t\t            <td><b>description</b></td>
\t\t            <td><b>price</b></td>
\t\t            <td><b>image</b></td>
\t\t            <td><b>category</b></td>  
\t            
\t            </tr>
            </thead>
        ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 26
            echo "        \t
           \t<tr> 
\t           \t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
            echo "</td>
\t            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), "html", null, true);
            echo "</td>
\t            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description"), "html", null, true);
            echo "</td>
\t            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price"), "html", null, true);
            echo "</td>
\t            <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "image"), "html", null, true);
            echo "</td>
\t            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), "name"), "html", null, true);
            echo "</td>

\t           <!--  <div class=\"col-lg-1\">";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
            echo "</div>
\t            <div class=\"col-lg-4\">";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), "html", null, true);
            echo "</div>
\t            <div class=\"col-lg-7\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description"), "html", null, true);
            echo "</div>
\t            <div class=\"col-lg-7\">";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price"), "html", null, true);
            echo "</div> -->
        \t</tr>
        \t 
       
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 43
        echo "        </table>

<div class=\"row\">
    <div class=\"col-lg-12\">
    \t";
        // line 47
        if (((isset($context["id"]) ? $context["id"] : null) == $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"))) {
            // line 48
            echo "        <div class=\"col-lg-4\">
            <div class=\"image text-center\">
                <img src=\"files/images/product.jpg\" width=\"200px\">
            </div>
        </div>
        <div class=\"col-lg-8\">
            

          <div class=\"price\">

            <span class=\"label label-info\">  ";
            // line 58
            echo twig_escape_filter($this->env, (isset($context["namePrice"]) ? $context["namePrice"] : null), "html", null, true);
            echo "   
                     ";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price"), "html", null, true);
            echo " грн.</span> 

          </div>  
          <h4> ";
            // line 62
            echo twig_escape_filter($this->env, (isset($context["discriptionProduct"]) ? $context["discriptionProduct"] : null), "html", null, true);
            echo " </h4>
                <div class=\"bg-info\">
                    ";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description"), "html", null, true);
            echo "
                </div>
          
        </div>
        
        ";
        }
        // line 70
        echo "    </div>
   

</div>

    </div>
   \t

</div>
";
    }

    // line 83
    public function block_sidebar($context, array $blocks = array())
    {
        // line 84
        echo "
<div class=\"col-lg-4 panel panel-default\">
                <h2 class=\"panel-heading\">Sidebar</h2>
                

    <ul>
    ";
        // line 90
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 91
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
        // line 96
        echo "                
</div>


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
        return array (  198 => 96,  184 => 91,  180 => 90,  172 => 84,  169 => 83,  156 => 70,  147 => 64,  142 => 62,  136 => 59,  132 => 58,  120 => 48,  118 => 47,  112 => 43,  101 => 38,  97 => 37,  93 => 36,  89 => 35,  84 => 33,  80 => 32,  76 => 31,  72 => 30,  68 => 29,  64 => 28,  60 => 26,  56 => 25,  32 => 5,  29 => 4,);
    }
}
