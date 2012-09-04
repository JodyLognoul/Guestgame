<?php

/* ggDiscussionBundle:Default:index.html.twig */
class __TwigTemplate_ad9de71a822cb8eca8ad334765b1d3ea extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "ggDiscussionBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
