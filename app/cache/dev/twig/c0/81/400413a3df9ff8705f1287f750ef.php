<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_c081400413a3df9ff8705f1287f750ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig");
        // line 43
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = array_merge(
            $_trait_0_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'actions' => array($this, 'block_actions'),
                'side_menu' => array($this, 'block_side_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getContext($context, "base_template"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        if ($this->getAttribute($this->getContext($context, "admin"), "id", array($this->getContext($context, "object"), ), "method")) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_edit", array("%name%" => $this->getAttribute($this->getContext($context, "admin"), "toString", array($this->getContext($context, "object"), ), "method")), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
    }

    // line 22
    public function block_actions($context, array $blocks = array())
    {
        // line 23
        echo "    <div class=\"sonata-actions\">
        <ul>
            ";
        // line 25
        if (((($this->getAttribute($this->getContext($context, "admin"), "hasroute", array("show", ), "method") && $this->getAttribute($this->getContext($context, "admin"), "id", array($this->getContext($context, "object"), ), "method")) && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array("VIEW", $this->getContext($context, "object"), ), "method")) && (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "show")) > 0))) {
            // line 26
            echo "                <li class=\"btn sonata-action-element\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateObjectUrl", array("show", $this->getContext($context, "object"), ), "method"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("link_action_show", array(), "SonataAdminBundle");
            echo "</a></li>
            ";
        }
        // line 28
        echo "            ";
        if ((($this->getAttribute($this->getContext($context, "admin"), "hasroute", array("history", ), "method") && $this->getAttribute($this->getContext($context, "admin"), "id", array($this->getContext($context, "object"), ), "method")) && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array("EDIT", $this->getContext($context, "object"), ), "method"))) {
            // line 29
            echo "                <li class=\"btn sonata-action-element\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateObjectUrl", array("history", $this->getContext($context, "object"), ), "method"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("link_action_history", array(), "SonataAdminBundle");
            echo "</a></li>
            ";
        }
        // line 31
        echo "            ";
        if ((($this->getAttribute($this->getContext($context, "admin"), "hasroute", array("create", ), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array("CREATE", ), "method")) && $this->getAttribute($this->getContext($context, "admin"), "id", array($this->getContext($context, "object"), ), "method"))) {
            // line 32
            echo "                <li class=\"btn sonata-action-element\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array("create", ), "method"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("link_action_create", array(), "SonataAdminBundle");
            echo "</a></li>
            ";
        }
        // line 34
        echo "            ";
        if (($this->getAttribute($this->getContext($context, "admin"), "hasroute", array("list", ), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array("LIST", ), "method"))) {
            // line 35
            echo "                <li class=\"btn sonata-action-element\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array("list", ), "method"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("link_action_list", array(), "SonataAdminBundle");
            echo "</a></li>
            ";
        }
        // line 37
        echo "        </ul>
    </div>
";
    }

    // line 41
    public function block_side_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute($this->getContext($context, "admin"), "sidemenu", array($this->getContext($context, "action"), ), "method"), array(), "list");
    }

    // line 45
    public function block_form($context, array $blocks = array())
    {
        // line 46
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
