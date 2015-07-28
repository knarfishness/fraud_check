<?php

/* fraudcheck.html.twig */
class __TwigTemplate_6b62f197f1eb0a5ea427a5f13b235783f4e7c6818da4dd4ab734f5c35a2467b2 extends Twig_Template
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
        $__internal_38cd6ce28d995b1fa98bbd2464f1241e193b15d6bb343a2c4319698a3674c239 = $this->env->getExtension("native_profiler");
        $__internal_38cd6ce28d995b1fa98bbd2464f1241e193b15d6bb343a2c4319698a3674c239->enter($__internal_38cd6ce28d995b1fa98bbd2464f1241e193b15d6bb343a2c4319698a3674c239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fraudcheck.html.twig"));

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
        <div class=\"rectangle\"><h2>Fraud Checker</h2></div>
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

                    <input autocomplete=\"off\" autofocus=\"autofocus\" type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" placeholder=\"Business Name\">
                    <br />

                    <input autocomplete=\"off\" type=\"text\" id=\"amount\" name=\"amount\" class=\"form-control\" placeholder=\"123.45\">
                    <br />

                    <input autocomplete=\"off\" type=\"text\" id=\"address\" name=\"address\" class=\"form-control\" placeholder=\"123 Main Street\">
                    <br />

                    <input autocomplete=\"off\" type=\"text\" id=\"city\" name=\"city\" class=\"form-control\" placeholder=\"Faketown\">
                    <input autocomplete=\"off\" type=\"text\" id=\"state\" name=\"state\" class=\"form-control\" placeholder=\"MI\">
                    <input autocomplete=\"off\" type=\"text\" id=\"zip\" name=\"zip\" class=\"form-control\" placeholder=\"48240\">
                    <br /><br />

                    <input type=\"submit\" class=\"btn btn-primary\" name=\"submit\" value=\"Submit\">
                    <br /><br />

                    <span class=\"result\">";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "html", null, true);
        echo "</span>
                    <br /><br />

                </div>
            </form>
        </div>
    </div>
</div>";
        
        $__internal_38cd6ce28d995b1fa98bbd2464f1241e193b15d6bb343a2c4319698a3674c239->leave($__internal_38cd6ce28d995b1fa98bbd2464f1241e193b15d6bb343a2c4319698a3674c239_prof);

    }

    public function getTemplateName()
    {
        return "fraudcheck.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 48,  67 => 28,  58 => 26,  54 => 25,  35 => 9,  28 => 5,  22 => 1,);
    }
}
