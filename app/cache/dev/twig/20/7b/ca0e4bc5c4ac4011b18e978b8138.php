<?php

/* ggPartyBundle:Default:index.html.twig */
class __TwigTemplate_207bca0e4bc5c4ac4011b18e978b8138 extends Twig_Template
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
        return "ggPartyBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
