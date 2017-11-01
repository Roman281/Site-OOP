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
    </head>
    <body>

        <div id=\"content\">
            ";
        // line 10
        $this->displayBlock('content', $context, $blocks);
        // line 13
        echo "        </div>

        <div id=\"sidebar\">
            ";
        // line 16
        $this->displayBlock('sidebar', $context, $blocks);
        // line 19
        echo "        </div>

    </body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "
            ";
    }

    // line 16
    public function block_sidebar($context, array $blocks = array())
    {
        // line 17
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function getDebugInfo()
    {
        return array (  68 => 17,  65 => 16,  60 => 11,  57 => 10,  52 => 4,  45 => 19,  38 => 13,  36 => 10,  27 => 4,  22 => 1,  46 => 14,  43 => 16,  32 => 5,  29 => 4,);
    }
}
