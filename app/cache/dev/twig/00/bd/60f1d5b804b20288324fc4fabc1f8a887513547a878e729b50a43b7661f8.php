<?php

/* ModulesAuthenticateBundle:Authenticate:login.html.twig */
class __TwigTemplate_00bd60f1d5b804b20288324fc4fabc1f8a887513547a878e729b50a43b7661f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>Entrar no Sistema</title>
    ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "</head>

<body>
<div class=\"container\">

    <form class=\"form-signin\" action=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
        <h2 class=\"form-signin-heading\">Entrar no Sistema</h2>
        ";
        // line 29
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 30
            echo "                Login ou senha inválidos
        ";
        }
        // line 32
        echo "        <input type=\"text\" placeholder=\"CPF\" name=\"_username\" class=\"span4\">
        <input type=\"password\" placeholder=\"Senha\" name=\"_password\" class=\"span4\">
        <label class=\"checkbox\">
            <input type=\"checkbox\"> Lembre-me
        </label>
        <button type=\"submit\" class=\"btn btn-primary\"\">&nbsp&nbsp&nbsp&nbsp&nbsp Logar &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
        <button type=\"button\" class=\"btn btn-primary\" ng-click=\"logar()\">&nbsp&nbsp&nbsp Lembrar Senha &nbsp&nbsp&nbsp</button>
    </form>

</div> <!-- /container -->
</body>
</html>";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moduleslayout/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moduleslayout/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moduleslayout/css/estilo.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moduleslayout/css/signin.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        // line 12
        echo "        <script type=\"text/javascript\" src=\"";
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moduleslayout/js/comum/single_page.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/modulesauthenticate/js/authenticate/login.js"), "html", null, true);
        echo "\"></script>

        <script type=\"text/javascript\" src=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>

    ";
    }

    public function getTemplateName()
    {
        return "ModulesAuthenticateBundle:Authenticate:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 19,  111 => 17,  107 => 16,  103 => 15,  99 => 14,  95 => 13,  90 => 12,  87 => 11,  81 => 9,  77 => 8,  73 => 7,  68 => 6,  65 => 5,  50 => 32,  46 => 30,  44 => 29,  39 => 27,  32 => 22,  29 => 11,  27 => 5,  21 => 1,);
    }
}
