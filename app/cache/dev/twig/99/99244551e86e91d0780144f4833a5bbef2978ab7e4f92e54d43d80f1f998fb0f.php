<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_c03052055dd0eff94b90955e003dabad490403df616f7ac93d96d8f386716c8a extends Twig_Template
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
        $__internal_6035c77e0b54b027fcb5d93d53e0e11367e069189cee544853879687f1d715ff = $this->env->getExtension("native_profiler");
        $__internal_6035c77e0b54b027fcb5d93d53e0e11367e069189cee544853879687f1d715ff->enter($__internal_6035c77e0b54b027fcb5d93d53e0e11367e069189cee544853879687f1d715ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6035c77e0b54b027fcb5d93d53e0e11367e069189cee544853879687f1d715ff->leave($__internal_6035c77e0b54b027fcb5d93d53e0e11367e069189cee544853879687f1d715ff_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cecf4cc3773ab7c96dfcbb15cb38c77ce0f08c822aaa8dbad591b4e10dba9ae3 = $this->env->getExtension("native_profiler");
        $__internal_cecf4cc3773ab7c96dfcbb15cb38c77ce0f08c822aaa8dbad591b4e10dba9ae3->enter($__internal_cecf4cc3773ab7c96dfcbb15cb38c77ce0f08c822aaa8dbad591b4e10dba9ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_cecf4cc3773ab7c96dfcbb15cb38c77ce0f08c822aaa8dbad591b4e10dba9ae3->leave($__internal_cecf4cc3773ab7c96dfcbb15cb38c77ce0f08c822aaa8dbad591b4e10dba9ae3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ff2c1f1d06ee4b7afb8be43ff5ca20278eae2ccde08283d10209e17b41728d5 = $this->env->getExtension("native_profiler");
        $__internal_0ff2c1f1d06ee4b7afb8be43ff5ca20278eae2ccde08283d10209e17b41728d5->enter($__internal_0ff2c1f1d06ee4b7afb8be43ff5ca20278eae2ccde08283d10209e17b41728d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0ff2c1f1d06ee4b7afb8be43ff5ca20278eae2ccde08283d10209e17b41728d5->leave($__internal_0ff2c1f1d06ee4b7afb8be43ff5ca20278eae2ccde08283d10209e17b41728d5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c5c428fa33aeba626aa13d067d250ec5f451ceb58b3073f66cf699d405a5191 = $this->env->getExtension("native_profiler");
        $__internal_4c5c428fa33aeba626aa13d067d250ec5f451ceb58b3073f66cf699d405a5191->enter($__internal_4c5c428fa33aeba626aa13d067d250ec5f451ceb58b3073f66cf699d405a5191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4c5c428fa33aeba626aa13d067d250ec5f451ceb58b3073f66cf699d405a5191->leave($__internal_4c5c428fa33aeba626aa13d067d250ec5f451ceb58b3073f66cf699d405a5191_prof);

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
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
