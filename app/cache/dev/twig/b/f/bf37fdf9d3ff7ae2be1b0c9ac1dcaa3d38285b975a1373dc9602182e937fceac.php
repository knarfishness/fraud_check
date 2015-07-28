<?php

/* receipt.html.twig */
class __TwigTemplate_bf37fdf9d3ff7ae2be1b0c9ac1dcaa3d38285b975a1373dc9602182e937fceac extends Twig_Template
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
        $__internal_6ef0b4977dac2709d1683c059d766ce00280e17c7af10063638ec5907957dee0 = $this->env->getExtension("native_profiler");
        $__internal_6ef0b4977dac2709d1683c059d766ce00280e17c7af10063638ec5907957dee0->enter($__internal_6ef0b4977dac2709d1683c059d766ce00280e17c7af10063638ec5907957dee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "receipt.html.twig"));

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
        <div class=\"rectangle\"><h2>Your Receipt</h2></div>
        <div class=\"triangle-l\"></div>
        <div class=\"triangle-r\"></div>
        <div class=\"info\">
            <form method=\"post\">
                <div align=\"center\">
                    <span id=\"datas\">
                        ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datas"]) ? $context["datas"] : $this->getContext($context, "datas")));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 26
            echo "                            <p>";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</p>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                    </span>

                     <span id=\"errors\">
                        ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 32
            echo "                            <p>";
            echo twig_escape_filter($this->env, $context["error"], "html", null, true);
            echo "</p>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                    </span>

                    <span class=\"result\">";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "html", null, true);
        echo "</span>
                    <br /><br />

                    <a href=\"/\"> <button id=\"back\" type=\"button\" class=\"btn btn-primary\">Back to Form</button> </a>

                </div>
            </form>
        </div>
    </div>
</div>";
        
        $__internal_6ef0b4977dac2709d1683c059d766ce00280e17c7af10063638ec5907957dee0->leave($__internal_6ef0b4977dac2709d1683c059d766ce00280e17c7af10063638ec5907957dee0_prof);

    }

    public function getTemplateName()
    {
        return "receipt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  85 => 34,  76 => 32,  72 => 31,  67 => 28,  58 => 26,  54 => 25,  35 => 9,  28 => 5,  22 => 1,);
    }
}
