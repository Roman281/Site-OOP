<?php

/* index.html */
class __TwigTemplate_b1b427ff80900a6a54b0405c7f97c31c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE>
<html>
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta http-equiv=\"Content-Type\" content=\"text/html;charset=UTF-8\"/>
        <link href=\"/admin/theme/assets/css/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"/admin/theme/assets/css/flat-ui.min.css\" rel=\"stylesheet\">
        <link href=\"/admin/theme/assets/css/css.css\" rel=\"stylesheet\">
        <link rel=\"shortcut icon\" href=\"../assets/img/favicon.ico\">
        <link rel=\"stylesheet\" href=\"css/bootstrap.css\">
        <link rel=\"stylesheet\" href=\"css/bootstrap-theme.css\">
        <link rel=\"stylesheet\" href=\"css/menu.css\">
        <link rel=\"stylesheet\" href=\"css/product.css\">

    </head>
    <body>
    <header class=\"header-navbar clearfix\">
        <nav class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"container\">
                <div class=\"collapse navbar-collapse navbar-main-collapse\">
                    <ul class=\"nav navbar-nav navbar-right\">
        ";
        // line 22
        $this->displayBlock('menu', $context, $blocks);
        // line 45
        echo "                    </ul>
                </div>
            </div>
        </nav>   
    </header>

        <div id=\"content\">
            ";
        // line 52
        $this->displayBlock('content', $context, $blocks);
        // line 55
        echo "        </div>

        <div id=\"sidebar\">
            ";
        // line 58
        $this->displayBlock('sidebar', $context, $blocks);
        // line 61
        echo "        </div>

    </body>
    <script src=\"/admin/theme/assets/js/vendor/jquery.min.js\"></script>
    <script src=\"/admin/theme/assets/js/flat-ui.min.js\"></script>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
    }

    // line 22
    public function block_menu($context, array $blocks = array())
    {
        // line 23
        echo "         
                        ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menunav"]) ? $context["menunav"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["menun"]) {
            // line 25
            echo "                           <li>
                                <a href=\"/";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menun"]) ? $context["menun"] : null), "url"), "html", null, true);
            echo "\" class=\"\">
                                    ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menun"]) ? $context["menun"] : null), "name"), "html", null, true);
            echo "
                                </a>
                            </li> 
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menun'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 30
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
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "total_amount"), "html", null, true);
        echo "\" > 
                                товаров на сумму ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "total_price"), "html", null, true);
        echo " грн.
                            </a>
                        </li>
        ";
    }

    // line 52
    public function block_content($context, array $blocks = array())
    {
        // line 53
        echo "
            ";
    }

    // line 58
    public function block_sidebar($context, array $blocks = array())
    {
        // line 59
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function getDebugInfo()
    {
        return array (  145 => 59,  142 => 58,  137 => 53,  134 => 52,  126 => 41,  122 => 40,  110 => 30,  100 => 27,  96 => 26,  93 => 25,  89 => 24,  86 => 23,  83 => 22,  78 => 4,  69 => 61,  67 => 58,  62 => 55,  60 => 52,  51 => 45,  49 => 22,  28 => 4,  23 => 1,);
    }
}
