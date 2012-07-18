<?php

/* SonataAdminBundle:CRUD:base_edit_form.html.twig */
class __TwigTemplate_c56c1a18be3890a589607083127a08b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_pre_fieldsets' => array($this, 'block_sonata_pre_fieldsets'),
            'sonata_post_fieldsets' => array($this, 'block_sonata_post_fieldsets'),
            'formactions' => array($this, 'block_formactions'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form', $context, $blocks);
        // line 73
        echo "    ";
    }

    // line 17
    public function block_sonata_pre_fieldsets($context, array $blocks = array())
    {
    }

    // line 39
    public function block_sonata_post_fieldsets($context, array $blocks = array())
    {
    }

    // line 43
    public function block_formactions($context, array $blocks = array())
    {
        // line 44
        echo "            <div class=\"actions\">
                ";
        // line 45
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "isxmlhttprequest")) {
            // line 46
            echo "                    ";
            if ($this->getAttribute($this->getContext($context, "admin"), "id", array($this->getContext($context, "object"), ), "method")) {
                // line 47
                echo "                        <input type=\"submit\" class=\"btn primary\" name=\"btn_update\" value=\"";
                echo $this->env->getExtension('translator')->getTranslator()->trans("btn_update", array(), "SonataAdminBundle");
                echo "\"/>
                    ";
            } else {
                // line 49
                echo "                        <input type=\"submit\" class=\"btn\" name=\"btn_create\" value=\"";
                echo $this->env->getExtension('translator')->getTranslator()->trans("btn_create", array(), "SonataAdminBundle");
                echo "\"/>
                    ";
            }
            // line 51
            echo "                ";
        } else {
            // line 52
            echo "                    ";
            if ($this->getAttribute($this->getContext($context, "admin"), "supportsPreviewMode")) {
                // line 53
                echo "                        <input class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\" value=\"";
                echo $this->env->getExtension('translator')->getTranslator()->trans("btn_preview", array(), "SonataAdminBundle");
                echo "\"/>
                    ";
            }
            // line 55
            echo "                    ";
            if ($this->getAttribute($this->getContext($context, "admin"), "id", array($this->getContext($context, "object"), ), "method")) {
                // line 56
                echo "                        <input type=\"submit\" class=\"btn primary\" name=\"btn_update_and_edit\" value=\"";
                echo $this->env->getExtension('translator')->getTranslator()->trans("btn_update_and_edit_again", array(), "SonataAdminBundle");
                echo "\"/>
                        <input type=\"submit\" class=\"btn\" name=\"btn_update_and_list\" value=\"";
                // line 57
                echo $this->env->getExtension('translator')->getTranslator()->trans("btn_update_and_return_to_list", array(), "SonataAdminBundle");
                echo "\"/>

                        ";
                // line 59
                if (($this->getAttribute($this->getContext($context, "admin"), "hasroute", array("delete", ), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array("DELETE", $this->getContext($context, "object"), ), "method"))) {
                    // line 60
                    echo "                            ";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("delete_or", array(), "SonataAdminBundle");
                    // line 61
                    echo "                            <a class=\"btn danger\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateObjectUrl", array("delete", $this->getContext($context, "object"), ), "method"), "html", null, true);
                    echo "\">";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("link_delete", array(), "SonataAdminBundle");
                    echo "</a>
                        ";
                }
                // line 63
                echo "                    ";
            } else {
                // line 64
                echo "                        <input class=\"btn primary\" type=\"submit\" name=\"btn_create_and_edit\" value=\"";
                echo $this->env->getExtension('translator')->getTranslator()->trans("btn_create_and_edit_again", array(), "SonataAdminBundle");
                echo "\"/>
                        <input class=\"btn\" type=\"submit\" name=\"btn_create_and_create\" value=\"";
                // line 65
                echo $this->env->getExtension('translator')->getTranslator()->trans("btn_create_and_create_a_new_one", array(), "SonataAdminBundle");
                echo "\"/>
                    ";
            }
            // line 67
            echo "                ";
        }
        // line 68
        echo "            </div>
            ";
    }

    // line 1
    public function block_form($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["url"] = (($this->getAttribute($this->getContext($context, "admin"), "id", array($this->getContext($context, "object"), ), "method")) ? ("edit") : ("create"));
        // line 3
        echo "
    ";
        // line 4
        if ((!$this->getAttribute($this->getContext($context, "admin"), "hasRoute", array($this->getContext($context, "url"), ), "method"))) {
            // line 5
            echo "        <div>
            ";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form_not_available", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </div>
    ";
        } else {
            // line 9
            echo "        <form action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array($this->getContext($context, "url"), array("id" => $this->getAttribute($this->getContext($context, "admin"), "id", array($this->getContext($context, "object"), ), "method"), "uniqid" => $this->getAttribute($this->getContext($context, "admin"), "uniqid")), ), "method"), "html", null, true);
            echo "\" ";
            echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
            echo " method=\"POST\">

            ";
            // line 11
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "form"), "vars"), "errors")) > 0)) {
                // line 12
                echo "                <div class=\"sonata-ba-form-error\">
                    ";
                // line 13
                echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
                echo "
                </div>
            ";
            }
            // line 16
            echo "
            ";
            // line 17
            $this->displayBlock('sonata_pre_fieldsets', $context, $blocks);
            // line 18
            echo "
            ";
            // line 19
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin"), "formgroups"));
            foreach ($context['_seq'] as $context["name"] => $context["form_group"]) {
                // line 20
                echo "                <fieldset ";
                if ($this->getAttribute($this->getContext($context, "form_group"), "collapsed")) {
                    echo "class=\"sonata-ba-fielset-collapsed\"";
                }
                echo ">
                    <legend>
                        ";
                // line 22
                if ($this->getAttribute($this->getContext($context, "form_group"), "collapsed")) {
                    // line 23
                    echo "                            <a href=\"\" class=\"sonata-ba-collapsed\" title=\"";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("link_expand", array(), "SonataAdminBundle");
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "name"), array(), $this->getAttribute($this->getContext($context, "admin"), "translationdomain")), "html", null, true);
                    echo "</a>
                        ";
                } else {
                    // line 25
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "name"), array(), $this->getAttribute($this->getContext($context, "admin"), "translationdomain")), "html", null, true);
                    echo "
                        ";
                }
                // line 27
                echo "                    </legend>

                    <div class=\"sonata-ba-collapsed-fields\">
                        ";
                // line 30
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form_group"), "fields"));
                foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                    // line 31
                    echo "                            ";
                    if ($this->getAttribute($this->getAttribute($this->getContext($context, "admin", true), "formfielddescriptions", array(), "any", false, true), $this->getContext($context, "field_name"), array(), "array", true, true)) {
                        // line 32
                        echo "                                ";
                        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), $this->getContext($context, "field_name"), array(), "array"));
                        echo "
                            ";
                    }
                    // line 34
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 35
                echo "                    </div>
                </fieldset>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_group'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 38
            echo "
            ";
            // line 39
            $this->displayBlock('sonata_post_fieldsets', $context, $blocks);
            // line 40
            echo "
            ";
            // line 41
            echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
            echo "

            ";
            // line 43
            $this->displayBlock('formactions', $context, $blocks);
            // line 70
            echo "        </form>
    ";
        }
        // line 72
        echo "    
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit_form.html.twig";
    }

}
