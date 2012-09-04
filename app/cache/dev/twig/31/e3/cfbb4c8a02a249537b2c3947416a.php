<?php

/* ggDiscussionBundle::layout.html.twig */
class __TwigTemplate_31e3cfbb4c8a02a249537b2c3947416a extends Twig_Template
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "ggDiscussionBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
