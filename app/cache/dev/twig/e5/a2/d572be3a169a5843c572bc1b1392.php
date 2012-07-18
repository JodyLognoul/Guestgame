<?php

/* SonataAdminBundle:CRUD:preview.html.twig */
class __TwigTemplate_e5a2d572be3a169a5843c572bc1b1392 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'formactions' => array($this, 'block_formactions'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
    }

    // line 17
    public function block_side_menu($context, array $blocks = array())
    {
    }

    // line 20
    public function block_formactions($context, array $blocks = array())
    {
        // line 21
        echo "    <input class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\" value=\"";
        echo $this->env->getExtension('translator')->getTranslator()->trans("btn_preview_approve", array(), "SonataAdminBundle");
        echo "\"/>
    <input class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\" value=\"";
        // line 22
        echo $this->env->getExtension('translator')->getTranslator()->trans("btn_preview_decline", array(), "SonataAdminBundle");
        echo "\"/>
";
    }

    // line 25
    public function block_preview($context, array $blocks = array())
    {
        // line 26
        echo "    <div class=\"sonata-ba-view\">
        ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin"), "showgroups"));
        foreach ($context['_seq'] as $context["name"] => $context["view_group"]) {
            // line 28
            echo "            <table class=\"table table-bordered\">
                ";
            // line 29
            if ($this->getContext($context, "name")) {
                // line 30
                echo "                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            ";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "trans", array($this->getContext($context, "name"), ), "method"), "html", null, true);
                echo "
                        </td>
                    </tr>
                ";
            }
            // line 36
            echo "
                ";
            // line 37
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "view_group"), "fields"));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 38
                echo "                    <tr class=\"sonata-ba-view-container\">
                        ";
                // line 39
                if ($this->getAttribute($this->getAttribute($this->getContext($context, "admin", true), "show", array(), "any", false, true), $this->getContext($context, "field_name"), array(), "array", true, true)) {
                    // line 40
                    echo "                            ";
                    echo $this->env->getExtension('sonata_admin')->renderViewElement($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "show"), $this->getContext($context, "field_name"), array(), "array"), $this->getContext($context, "object"));
                    echo "
                        ";
                }
                // line 42
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 44
            echo "            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['view_group'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 46
        echo "    </div>
";
    }

    // line 49
    public function block_form($context, array $blocks = array())
    {
        // line 50
        echo "    <div class=\"sonata-preview-form-container\">
        ";
        // line 51
        $this->displayParentBlock("form", $context, $blocks);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
