<?php

/* product.html */
class __TwigTemplate_a45abed27b4bf41c05eb31f143be9c89 extends Twig_Template
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
        echo "<div class=\"col-lg-8 panel panel-default\">
<h1>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "</h1>
<div class=\"col-lg-8\">
    <form name = 'product' method=\"post\">
        <h3>Добавить товар</h3>
        <input type=\"hidden\" name=\"id\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
        echo "\">
        <div class=\"form-group\">
            <label>Название</label>
            <input class=\"form-control\" type=\"text\" name=\"name\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label>URL</label>
            <input class=\"form-control\" type=\"text\" name=\"url\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "url"), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label>Видимость</label>
            <input class=\"form-control\" type=\"checkbox\" name=\"visible\" value=\"1\" ";
        // line 21
        if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "visible") == 1)) {
            echo "checked";
        }
        echo ">
        </div>
        <div class=\"form-group\">
            <label>Картинка</label>
            <input class=\"form-control\" type=\"file\" name=\"image\" value=\"\">
        </div>
        <div class=\"form-group\">
        <label>Выберете id категории  </label>
            <select name=\"<b>category_id</b>\" class=\"selectpicker form-control\">
            ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["category"]) ? $context["category"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["categ"]) {
            // line 31
            echo "                <optgroup label=\"category\">
                    <option name=\"category_id\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categ"]) ? $context["categ"] : null), "category_id"), "html", null, true);
            echo "</option>
                    <option>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categ"]) ? $context["categ"] : null), "name"), "html", null, true);
            echo "</option>
                </optgroup>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categ'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 36
        echo "            </select>
        </div>
        
        <div class=\"form-group\">
            <label>Цена</label>
            <input class=\"form-control\" type=\"text\" name=\"price\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price"), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label>Описание</label>
            <textarea class=\"form-control\" name=\"description\">";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description"), "html", null, true);
        echo "</textarea>
        </div>
      <!--    <div class=\"form-group\">
            <label>Part_id</label>
            <input class=\"form-control\" type=\"text\" name=\"category_id\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "category_id"), "html", null, true);
        echo "\">
        </div>
 -->
        <input type=\"submit\" name=\"save\" value=\"Сохранить\">
    </form>
</div>
<hr>
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
        return array (  116 => 49,  109 => 45,  102 => 41,  95 => 36,  86 => 33,  82 => 32,  79 => 31,  75 => 30,  61 => 21,  54 => 17,  47 => 13,  41 => 10,  34 => 6,  31 => 5,  28 => 4,);
    }
}
