<?php

/* ModulesLayoutBundle:Home:index.html.twig */
class __TwigTemplate_2791900583ee1c5765e9c5fb90ff46e2a89eedd4a9d758d885052464a2b05f10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["main_layout"]) ? $context["main_layout"] : $this->getContext($context, "main_layout")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "
<h1>Seja Bem Vindo ao SisDoc</h1>

";
    }

    public function getTemplateName()
    {
        return "ModulesLayoutBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  26 => 2,);
    }
}
