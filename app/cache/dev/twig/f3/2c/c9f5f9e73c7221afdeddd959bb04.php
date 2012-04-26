<?php

/* ggPartyBundle::layout.html.twig */
class __TwigTemplate_f32cc9f5f9e73c7221afdeddd959bb04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "ggPartyBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
