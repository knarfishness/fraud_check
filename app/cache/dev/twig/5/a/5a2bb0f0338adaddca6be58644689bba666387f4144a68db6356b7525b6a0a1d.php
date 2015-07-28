<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5a2bb0f0338adaddca6be58644689bba666387f4144a68db6356b7525b6a0a1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a8a6752394150dc29c23e56e270812f9038de546c4a413b89468b0c15a1a3e2 = $this->env->getExtension("native_profiler");
        $__internal_9a8a6752394150dc29c23e56e270812f9038de546c4a413b89468b0c15a1a3e2->enter($__internal_9a8a6752394150dc29c23e56e270812f9038de546c4a413b89468b0c15a1a3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a8a6752394150dc29c23e56e270812f9038de546c4a413b89468b0c15a1a3e2->leave($__internal_9a8a6752394150dc29c23e56e270812f9038de546c4a413b89468b0c15a1a3e2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_232165f7b784f4ff2d3d67dd8dcfd308b5590f2dd306c69417c65707634f1f11 = $this->env->getExtension("native_profiler");
        $__internal_232165f7b784f4ff2d3d67dd8dcfd308b5590f2dd306c69417c65707634f1f11->enter($__internal_232165f7b784f4ff2d3d67dd8dcfd308b5590f2dd306c69417c65707634f1f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_232165f7b784f4ff2d3d67dd8dcfd308b5590f2dd306c69417c65707634f1f11->leave($__internal_232165f7b784f4ff2d3d67dd8dcfd308b5590f2dd306c69417c65707634f1f11_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_72d704b0762a50513ea81f40db699e061c487d3a1b1e7d9017aeebf9ecd224cf = $this->env->getExtension("native_profiler");
        $__internal_72d704b0762a50513ea81f40db699e061c487d3a1b1e7d9017aeebf9ecd224cf->enter($__internal_72d704b0762a50513ea81f40db699e061c487d3a1b1e7d9017aeebf9ecd224cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_72d704b0762a50513ea81f40db699e061c487d3a1b1e7d9017aeebf9ecd224cf->leave($__internal_72d704b0762a50513ea81f40db699e061c487d3a1b1e7d9017aeebf9ecd224cf_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8982d07fbb4d80c2d0ddabe3b671e37f46d5513001f090ad1f215e130255724d = $this->env->getExtension("native_profiler");
        $__internal_8982d07fbb4d80c2d0ddabe3b671e37f46d5513001f090ad1f215e130255724d->enter($__internal_8982d07fbb4d80c2d0ddabe3b671e37f46d5513001f090ad1f215e130255724d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_8982d07fbb4d80c2d0ddabe3b671e37f46d5513001f090ad1f215e130255724d->leave($__internal_8982d07fbb4d80c2d0ddabe3b671e37f46d5513001f090ad1f215e130255724d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
