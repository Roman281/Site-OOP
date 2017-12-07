<?php

/* cart.html */
class __TwigTemplate_096eb3be32f603e0badd11d2312ae9aa extends Twig_Template
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
        echo "     <h1>";
        echo twig_escape_filter($this->env, (isset($context["Cart"]) ? $context["Cart"] : null), "html", null, true);
        echo "</h1>
     <h1>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "</h1>

    <div class=\"col-lg-11 panel panel-default\">
    ";
        // line 9
        if ($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "items")) {
            // line 10
            echo "    
    <div class=\"row text-center text-primary\">
        <div class=\"col-lg-2\">Фото</div>
        <div class=\"col-lg-4\">Наименование </div>
        <div class=\"col-lg-2\">Цена , грн</div>
        <div class=\"col-lg-2\">Кол-во</div>
        <div class=\"col-lg-2\">Сумма </div>
    </div>
    ";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "items"), "product"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 19
                echo "        <div class=\"row\">
            <div class=\"col-lg-2\">
                <img src=\"files/images/product.jpg\" width=\"75px\">
            </div>
            <div class=\"col-lg-4\">";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "items"), "product"), "name"), "html", null, true);
                echo "</div>
            <div class=\"col-lg-2\">";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "items"), "product"), "price"), "html", null, true);
                echo "</div>
            <div class=\"col-lg-2\">
                <input class=\"form-control\" type=\"number\" value=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "items"), "product"), "amount"), "html", null, true);
                echo "\">
            </div>
            <div class=\"col-lg-2\">
                ";
                // line 29
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "items"), "product"), "price") * $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "items"), "product"), "amount")), "html", null, true);
                echo "
            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 33
            echo "        <div class=\"row text-right bg-info\">
            <div>Итого: ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "total_price"), "html", null, true);
            echo " грн.</div>
        </div>
        <div class=\"row\">
        <div class=\"col-lg-12\">
            <h3>Контактные данные</h3>
            <form method=\"post\" action=\"\">

                <div class=\"form-group\">
                    <label>Имя</label>
                    <input class=\"form-control\" type=\"text\" name=\"name\" value=\"\" required>
                </div>
                <div class=\"form-group\">
                    <label>Фамилия</label>
                    <input class=\"form-control\" type=\"text\" name=\"last_name\" value=\"\" required>
                </div>
                <div class=\"form-group\">
                    <label>Email</label>
                    <input class=\"form-control\" type=\"email\" name=\"email\" value=\"\" required>
                </div>
                <div class=\"form-group\">
                    <label>Телефон</label>
                    <input class=\"form-control\" type=\"tel\" name=\"phone\" value=\"\" required>
                </div>
                <div class=\"form-group\">
                    <label>Адрес доставки</label>
                    <input class=\"form-control\" type=\"text\" name=\"address\" value=\"\" >
                </div>
                <div class=\"form-group\">
                    <label>Комментарий</label>
                    <textarea class=\"form-control\" name=\"comment\"></textarea>
                </div>

                <div class=\"form-group\">
                    <input class=\"btn\" type=\"submit\" name=\"make_order\" value=\"Купить\">
                </div>
                <div class = \"clean-cart\" >
                    <input type=\"submit\" style=\"background: #86b0f4;\" name =\"clear\" value= 'Очистить'>
                </div>
            </form>
        </div>
    </div>
    
    ";
        } else {
            // line 77
            echo "        <h3>Корзина пуста</h3>
    ";
        }
        // line 79
        echo "<!-- <div class = \"clean-cart\" >
     <form  method=\"post\">
        <input type=\"hidden\" name=\"clean\" value=\"\">
        <input type=\"submit\" style=\"background: #86b0f4;\" name =\"clear\" value= 'Очистить'>
    </form>
</div>   -->       
    </div>
";
    }

    public function getTemplateName()
    {
        return "cart.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 79,  138 => 77,  92 => 34,  89 => 33,  79 => 29,  73 => 26,  68 => 24,  64 => 23,  58 => 19,  54 => 18,  44 => 10,  42 => 9,  36 => 6,  31 => 5,  28 => 4,);
    }
}
