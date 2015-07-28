<?php

/* calculator.html.twig */
class __TwigTemplate_67a42e8a4e3d754a2b5dbfc6e5c39d6f4834bc309dfb065ef5e86a81d627e073 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_421452b9c7dcd3aaf7e835e7f3c51b69c82a9f7b5859ccf55af2f020c6a79136 = $this->env->getExtension("native_profiler");
        $__internal_421452b9c7dcd3aaf7e835e7f3c51b69c82a9f7b5859ccf55af2f020c6a79136->enter($__internal_421452b9c7dcd3aaf7e835e7f3c51b69c82a9f7b5859ccf55af2f020c6a79136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "calculator.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css\">
<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" />

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>
<script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>

<div id=\"container\">

    <div class=\"menu\">
        <span>Frank Avery 2015</span>
    </div>

    <div class=\"bubble\">
        <div class=\"rectangle\"><h2>SymfonyCalc</h2></div>
        <div class=\"triangle-l\"></div>
        <div class=\"triangle-r\"></div>
        <div class=\"info\">
            <form method=\"post\">
                <div align=\"center\">
                    <span id=\"errors\">
                        ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 26
            echo "                            <p>";
            echo twig_escape_filter($this->env, $context["error"], "html", null, true);
            echo "</p>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                    </span>
                    <br />

                    <input autocomplete=\"off\" autofocus=\"autofocus\" type=\"text\" id=\"n1\" name=\"n1\" class=\"form-control\" placeholder=\"First Value\">
                    <br />

                    <div id=\"operator_buttons\" class=\"btn-group\" data-toggle=\"buttons\" data-toggle-name=\"hidden_ipt\">
                        <label class=\"btn btn-default\">
                            <input type=\"radio\" name=\"operator\" value=\"+\" />
                            <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span>
                        </label>
                        <label class=\"btn btn-default\">
                            <input type=\"radio\" name=\"operator\" value=\"-\" />
                            <span class=\"glyphicon glyphicon-minus\" aria-hidden=\"true\"></span>
                        </label>
                        <label class=\"btn btn-default\">
                            <input type=\"radio\" name=\"operator\" value=\"*\" />
                            <span class=\"glyphicon glyphicon-asterisk\" aria-hidden=\"true\"></span>
                        </label>
                        <label class=\"btn btn-default\">
                            <input type=\"radio\" name=\"operator\" value=\"/\" />
                            <b>&nbsp;/&nbsp;</b>
                        </label>
                    </div>
                    <select style=\"display:none\" name=\"op\" id=\"hidden_ipt\">
                        <option value=\"+\">+</option>
                        <option value=\"-\">-</option>
                        <option value=\"*\">*</option>
                        <option value=\"/\">/</option>
                    </select>
                    <br /><br />

                    <input autocomplete=\"off\" type=\"text\" id=\"n2\" name=\"n2\" class=\"form-control\" placeholder=\"Second Value\">
                    <br />

                    <input type=\"submit\" class=\"bigsubmit\" name=\"submit\" value=\"                =                \">
                    <br /><br />

                    <span class=\"calcresult\">";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "html", null, true);
        echo "</span>
                    <br /><br />

                    <button id=\"clear\" type=\"button\" class=\"btn btn-primary\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Clear</button>

                </div>
            </form>
        </div>
    </div>
</div>";
        
        $__internal_421452b9c7dcd3aaf7e835e7f3c51b69c82a9f7b5859ccf55af2f020c6a79136->leave($__internal_421452b9c7dcd3aaf7e835e7f3c51b69c82a9f7b5859ccf55af2f020c6a79136_prof);

    }

    public function getTemplateName()
    {
        return "calculator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 66,  67 => 28,  58 => 26,  54 => 25,  35 => 9,  28 => 5,  22 => 1,);
    }
}
