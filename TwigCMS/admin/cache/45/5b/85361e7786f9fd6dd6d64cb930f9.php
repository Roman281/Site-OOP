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
    <a href=\"/admin/product/\">Добавить товар</a>


    <div class=\"col-lg-12\">
    \t<table>
    \t\t<thead>
    \t\t\t<tr>
    \t\t\t<!-- \t<td>image</td> -->
\t\t         \t<td><b>id</b></td>
\t\t            <td><b>name</b></td>
\t\t            <td><b>description</b></td>
\t\t            <td><b>price</b></td>
\t            </b>
\t            </tr>
            </thead>
        ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 23
            echo "        \t
           \t<tr> 
\t      <!--      <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "image"), "html", null, true);
            echo "</td> -->
\t           \t<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
            echo "</td>
\t            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), "html", null, true);
            echo "</td>
\t            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description"), "html", null, true);
            echo "</td>
\t            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price"), "html", null, true);
            echo "</td>

\t           <!--  <div class=\"col-lg-1\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
            echo "</div>
\t            <div class=\"col-lg-4\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), "html", null, true);
            echo "</div>
\t            <div class=\"col-lg-7\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description"), "html", null, true);
            echo "</div>
\t            <div class=\"col-lg-7\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price"), "html", null, true);
            echo "</div> -->
        \t</tr>
       
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 38
        echo "        </table>
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
        return array (  103 => 38,  93 => 34,  89 => 33,  85 => 32,  81 => 31,  76 => 29,  72 => 28,  68 => 27,  64 => 26,  60 => 25,  56 => 23,  52 => 22,  31 => 5,  28 => 4,);
    }
}
