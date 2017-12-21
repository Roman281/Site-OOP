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
       <div class=\"col-lg-8\">
        <a href=\"/admin/product\">Добавить товар</a><br>
        <a href=\"/admin/categories\">Добавить категорию товара</a>

        </div>
        <div class=\"col-lg-8\">
            <table>
                <thead>
                    <tr>
                        
                        <td><b>id</b></td>
                        <td><b>name</b></td>
                        <td><b>description</b></td>
                        <td><b>price</b></td>
                        <td><b>image</b></td>
                        <td><b>category</b></td>  
                    
                    </tr>
                </thead>
            ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 28
            echo "                
                <tr> 
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
            echo "</td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), "html", null, true);
            echo "</td>
                    <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description"), "html", null, true);
            echo "</td>
                    <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price"), "html", null, true);
            echo "</td>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "image"), "html", null, true);
            echo "</td>
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), "name"), "html", null, true);
            echo "</td>

                   <!--  <div class=\"col-lg-1\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
            echo "</div>
                    <div class=\"col-lg-4\">";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), "html", null, true);
            echo "</div>
                    <div class=\"col-lg-7\">";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description"), "html", null, true);
            echo "</div>
                    <div class=\"col-lg-7\">";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price"), "html", null, true);
            echo "</div> -->
                </tr>
                 
           
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 45
        echo "            </table>



    </div>
    

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
        return array (  113 => 45,  102 => 40,  98 => 39,  94 => 38,  90 => 37,  85 => 35,  81 => 34,  77 => 33,  73 => 32,  69 => 31,  65 => 30,  61 => 28,  57 => 27,  31 => 5,  28 => 4,);
    }
}
