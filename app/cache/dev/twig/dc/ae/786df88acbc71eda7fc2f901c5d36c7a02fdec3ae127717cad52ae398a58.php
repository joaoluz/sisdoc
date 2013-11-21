<?php

/* ModulesLayoutBundle::main.html.twig */
class __TwigTemplate_dcae786df88acbc71eda7fc2f901c5d36c7a02fdec3ae127717cad52ae398a58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pt-br\">
    <head> ";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 23
        echo "    </head>
    <body>
        <div class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container\">
                    <div class=\"nav-collapse collapse\">
                        <a class=\"brand menu\" href=\"#\">Usuario</a>
                        <a class=\"brand menu\" href=\"#\">Documento</a>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <br><br><br>
        <div class=\"container\" id=\"content\">
            <div class=\"container-fluid\">
                <div class=\"row-fluid\">
                    <div class=\"span3\">
                    </div>
                    <div class=\"span9\">
                        ";
        // line 42
        $this->displayBlock('content', $context, $blocks);
        // line 43
        echo "                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </body>
</html>
";
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "        <title>SisDoc</title>

        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "        ";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moduleslayout/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moduleslayout/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moduleslayout/css/estilo.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        // line 12
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moduleslayout/js/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moduleslayout/js/angular/angular.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moduleslayout/js/angular/angular-scenario.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moduleslayout/js/autocomplete/jquery.autocomplete.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moduleslayout/js/default/single_page.js"), "html", null, true);
        echo "\"></script>

            <script type=\"text/javascript\" src=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>

        ";
    }

    // line 42
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "ModulesLayoutBundle::main.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  132 => 42,  125 => 19,  120 => 17,  116 => 16,  112 => 15,  108 => 14,  104 => 13,  99 => 12,  96 => 11,  90 => 9,  86 => 8,  81 => 7,  78 => 6,  74 => 22,  71 => 11,  69 => 6,  65 => 4,  62 => 3,  52 => 43,  50 => 42,  27 => 3,  23 => 1,  29 => 23,  26 => 2,);
    }
}
