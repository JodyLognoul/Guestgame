<?php

/* SonataAdminBundle:CRUD:list__action_delete.html.twig */
class __TwigTemplate_8786d1b1e04cfb5c8777ca0dfb1ec2ee extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (($this->getAttribute($this->getContext($context, "admin"), "isGranted", array("DELETE", $this->getContext($context, "object"), ), "method") && $this->getAttribute($this->getContext($context, "admin"), "hasRoute", array("delete", ), "method"))) {
            // line 2
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateObjectUrl", array("delete", $this->getContext($context, "object"), ), "method"), "html", null, true);
            echo "\" class=\"delete_link\" title=\"";
            echo $this->env->getExtension('translator')->getTranslator()->trans("action_delete", array(), "SonataAdminBundle");
            echo "\">
        <img src=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/famfamfam/delete.png"), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('translator')->getTranslator()->trans("action_delete", array(), "SonataAdminBundle");
            echo "\" />
    </a>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__action_delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
