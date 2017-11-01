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
        echo "<h1>";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "</h1>
<div class=\"col-lg-12\">
    <form name = 'product' method=\"post\">
        <h3>Добавить товар</h3>
        <input type=\"hidden\" name=\"id\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
        echo "\">
        <div class=\"form-group\">
            <label>Название</label>
            <input class=\"form-control\" type=\"text\" name=\"name\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label>URL</label>
            <input class=\"form-control\" type=\"text\" name=\"url\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "url"), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label>Видимость</label>
            <input class=\"form-control\" type=\"checkbox\" name=\"visible\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "visible"), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label>Картинка</label>
            <input class=\"form-control\" type=\"file\" name=\"image\" value=\"\">
        </div>
        <div class=\"form-group\">
            <label>Цена</label>
            <input class=\"form-control\" type=\"text\" name=\"price\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price"), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label>Описание</label>
            <textarea class=\"form-control\" name=\"description\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description"), "html", null, true);
        echo "</textarea>
        </div>

        <input type=\"submit\" name=\"save\" value=\"Сохранить\">
    </form>
</div>
<hr>
<!--//////////////////////////////////////////////////////////////////////////// 
 -->
<div class=\"col-lg-12\">
    <form name = 'categories' method=\"post\">
        <h3>Добавить категорию товара</h3>
        <input type=\"hidden\" name=\"id\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), "id"), "html", null, true);
        echo "\">
        <div class=\"form-group\">
            <label>Название</label>
            <input class=\"form-control\" type=\"text\" name=\"name\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), "name"), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label>URL</label>
            <input class=\"form-control\" type=\"text\" name=\"url\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), "url"), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label>Видимость</label>
            <input class=\"form-control\" type=\"checkbox\" name=\"visible\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), "visible"), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label>Картинка</label>
            <input class=\"form-control\" type=\"file\" name=\"image\" value=\"\">
        </div>
        <div class=\"form-group\">
            <label>Код категории</label>
            <input class=\"form-control\" type=\"text\" name=\"part_id\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), "part_id"), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label>Описание</label>
            <textarea class=\"form-control\" name=\"description\">";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), "description"), "html", null, true);
        echo "</textarea>
        </div>

        <input type=\"submit\" name=\"save1\" value=\"Сохранить\">
    </form>
</div>
<hr>

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
        return array (  130 => 67,  123 => 63,  112 => 55,  105 => 51,  98 => 47,  92 => 44,  77 => 32,  70 => 28,  59 => 20,  52 => 16,  45 => 12,  39 => 9,  31 => 5,  28 => 4,);
    }
}
