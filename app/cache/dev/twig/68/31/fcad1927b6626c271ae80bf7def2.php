<?php

/* SonataAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_6831fcad1927b6626c271ae80bf7def2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'generic_label' => array($this, 'block_generic_label'),
            'widget_container_attributes_choice_widget' => array($this, 'block_widget_container_attributes_choice_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'label' => array($this, 'block_label'),
            'field_row' => array($this, 'block_field_row'),
            'collection_widget_row' => array($this, 'block_collection_widget_row'),
            'collection_widget' => array($this, 'block_collection_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 13
        $this->displayBlock('generic_label', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('widget_container_attributes_choice_widget', $context, $blocks);
        // line 49
        echo "
";
        // line 50
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('field_row', $context, $blocks);
        // line 109
        echo "
";
        // line 110
        $this->displayBlock('collection_widget_row', $context, $blocks);
        // line 120
        echo "
";
        // line 121
        $this->displayBlock('collection_widget', $context, $blocks);
    }

    // line 13
    public function block_generic_label($context, array $blocks = array())
    {
        // line 14
        ob_start();
        // line 15
        echo "    ";
        if ($this->getContext($context, "required")) {
            // line 16
            echo "        ";
            $context["attr"] = twig_array_merge($this->getContext($context, "attr"), array("class" => ((($this->getAttribute($this->getContext($context, "attr", true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "attr", true), "class"), "")) : ("")) . " required")));
            // line 17
            echo "    ";
        }
        // line 18
        echo "    ";
        if (((array_key_exists("in_list_checkbox", $context) && $this->getContext($context, "in_list_checkbox")) && array_key_exists("widget", $context))) {
            // line 19
            echo "        <label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "attr"));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "attrvalue"), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            echo ">
            ";
            // line 20
            echo $this->getContext($context, "widget");
            echo "
            <span>
                ";
            // line 22
            if ((!$this->getAttribute($this->getContext($context, "sonata_admin"), "admin"))) {
                // line 23
                echo twig_escape_filter($this->env, $this->getContext($context, "label"), "html", null, true);
            } else {
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label"), array(), $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "translationDomain")), "html", null, true);
            }
            // line 27
            echo "            </span>
        </label>
    ";
        } else {
            // line 30
            echo "        <label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "attr"));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "attrvalue"), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            echo ">
            ";
            // line 31
            if ((!$this->getAttribute($this->getContext($context, "sonata_admin"), "admin"))) {
                // line 32
                echo "                ";
                echo twig_escape_filter($this->env, $this->getContext($context, "label"), "html", null, true);
                echo "
            ";
            } else {
                // line 34
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label"), array(), $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "translationDomain")), "html", null, true);
                echo "
            ";
            }
            // line 36
            echo "            ";
            echo (($this->getContext($context, "required")) ? ("*") : (""));
            echo "
        </label>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 42
    public function block_widget_container_attributes_choice_widget($context, array $blocks = array())
    {
        // line 43
        echo "    ";
        ob_start();
        // line 44
        echo "        id=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "\"
        ";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "attr"));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
            echo "=\"";
            if (($this->getContext($context, "attrname") == "class")) {
                echo "inputs-list ";
            }
            echo twig_escape_filter($this->env, $this->getContext($context, "attrvalue"), "html", null, true);
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 46
        echo "        ";
        if (!twig_in_filter("class", twig_get_array_keys_filter($this->getContext($context, "attr")))) {
            echo "class=\"inputs-list\"";
        }
        // line 47
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 50
    public function block_choice_widget($context, array $blocks = array())
    {
        // line 51
        ob_start();
        // line 52
        echo "    ";
        if ($this->getContext($context, "expanded")) {
            // line 53
            echo "        <ul ";
            $this->displayBlock("widget_container_attributes_choice_widget", $context, $blocks);
            echo ">
        ";
            // line 54
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 55
                echo "            <li>
                ";
                // line 56
                echo $this->env->getExtension('form')->renderLabel($this->getContext($context, "child"), null, array("in_list_checkbox" => true, "widget" => $this->env->getExtension('form')->renderWidget($this->getContext($context, "child"))));
                echo "
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 59
            echo "        </ul>
    ";
        } else {
            // line 61
            echo "    <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if ($this->getContext($context, "multiple")) {
                echo " multiple=\"multiple\"";
            }
            echo ">
        ";
            // line 62
            if ((!(null === $this->getContext($context, "empty_value")))) {
                // line 63
                echo "            <option value=\"\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "empty_value")), "html", null, true);
                echo "</option>
        ";
            }
            // line 65
            echo "        ";
            if ((twig_length_filter($this->env, $this->getContext($context, "preferred_choices")) > 0)) {
                // line 66
                echo "            ";
                $context["options"] = $this->getContext($context, "preferred_choices");
                // line 67
                echo "            ";
                $this->displayBlock("widget_choice_options", $context, $blocks);
                echo "
            ";
                // line 68
                if ((twig_length_filter($this->env, $this->getContext($context, "choices")) > 0)) {
                    // line 69
                    echo "                <option disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "separator"), "html", null, true);
                    echo "</option>
            ";
                }
                // line 71
                echo "        ";
            }
            // line 72
            echo "        ";
            $context["options"] = $this->getContext($context, "choices");
            // line 73
            echo "        ";
            $this->displayBlock("widget_choice_options", $context, $blocks);
            echo "
    </select>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 84
    public function block_label($context, array $blocks = array())
    {
        // line 85
        echo "                ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin", true), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 86
            echo "                    ";
            echo $this->env->getExtension('form')->renderLabel($this->getContext($context, "form"), $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "options"), "name"));
            echo "
                ";
        } else {
            // line 88
            echo "                    ";
            echo $this->env->getExtension('form')->renderLabel($this->getContext($context, "form"));
            echo "
                ";
        }
        // line 90
        echo "            ";
    }

    // line 79
    public function block_field_row($context, array $blocks = array())
    {
        // line 80
        echo "    ";
        if ((((!array_key_exists("sonata_admin", $context)) || (!$this->getContext($context, "sonata_admin_enabled"))) || (!$this->getAttribute($this->getContext($context, "sonata_admin"), "field_description")))) {
            // line 81
            echo "        ";
            echo $this->env->getExtension('form')->renderRow($this->getContext($context, "form"));
            echo "
    ";
        } else {
            // line 83
            echo "        <div class=\"clearfix";
            if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
                echo " error";
            }
            echo "\" id=\"sonata-ba-field-container-";
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\">
            ";
            // line 84
            $this->displayBlock('label', $context, $blocks);
            // line 91
            echo "
            <div class=\"input sonata-ba-field sonata-ba-field-";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sonata_admin"), "edit"), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sonata_admin"), "inline"), "html", null, true);
            echo " ";
            if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
                echo "sonata-ba-field-error";
            }
            echo "\">

                ";
            // line 94
            echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
            echo "

                ";
            // line 96
            if ($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "help")) {
                // line 97
                echo "                    <span class=\"help-block sonata-ba-field-help\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "help"), "html", null, true);
                echo "</span>
                ";
            }
            // line 99
            echo "
                ";
            // line 100
            if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
                // line 101
                echo "                    <div class=\"sonata-ba-field-error-messages\">
                        ";
                // line 102
                echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
                echo "
                    </div>
                ";
            }
            // line 105
            echo "            </div>
        </div>
    ";
        }
    }

    // line 110
    public function block_collection_widget_row($context, array $blocks = array())
    {
        // line 111
        ob_start();
        // line 112
        echo "    <div class=\"sonata-collection-row\">
        ";
        // line 113
        if ($this->getContext($context, "allow_delete")) {
            // line 114
            echo "            <a href=\"#\" class=\"sonata-collection-delete\"></a>
        ";
        }
        // line 116
        echo "        ";
        echo $this->env->getExtension('form')->renderRow($this->getContext($context, "child"));
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 121
    public function block_collection_widget($context, array $blocks = array())
    {
        // line 122
        ob_start();
        // line 123
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 124
            echo "        ";
            $context["child"] = $this->getContext($context, "prototype");
            // line 125
            echo "        ";
            $context["attr"] = twig_array_merge($this->getContext($context, "attr"), array("data-prototype" => $this->renderBlock("collection_widget_row", $context, $blocks)));
            // line 126
            echo "    ";
        }
        // line 127
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 128
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "
        ";
        // line 129
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 130
            echo "            ";
            $this->displayBlock("collection_widget_row", $context, $blocks);
            echo "
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 132
        echo "        ";
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "
        ";
        // line 133
        if ($this->getContext($context, "allow_add")) {
            // line 134
            echo "            <div><a href=\"#\" class=\"sonata-collection-add\"></a></div>
        ";
        }
        // line 136
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:form_admin_fields.html.twig";
    }

}
