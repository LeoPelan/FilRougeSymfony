<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5c8aeb38914b1c308d7a4839db9da2a5b1a8499207221505a79ed737af9140e1 extends Twig_Template
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
        $__internal_1b4572b689ac8b6112caf178ab557fbd71226fcf1ed3df7ac919b5306c2739d1 = $this->env->getExtension("native_profiler");
        $__internal_1b4572b689ac8b6112caf178ab557fbd71226fcf1ed3df7ac919b5306c2739d1->enter($__internal_1b4572b689ac8b6112caf178ab557fbd71226fcf1ed3df7ac919b5306c2739d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b4572b689ac8b6112caf178ab557fbd71226fcf1ed3df7ac919b5306c2739d1->leave($__internal_1b4572b689ac8b6112caf178ab557fbd71226fcf1ed3df7ac919b5306c2739d1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_756fe6dd0c08313e004a58f9f4fc584605a0af2e9abd43283c9f84a476647257 = $this->env->getExtension("native_profiler");
        $__internal_756fe6dd0c08313e004a58f9f4fc584605a0af2e9abd43283c9f84a476647257->enter($__internal_756fe6dd0c08313e004a58f9f4fc584605a0af2e9abd43283c9f84a476647257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_756fe6dd0c08313e004a58f9f4fc584605a0af2e9abd43283c9f84a476647257->leave($__internal_756fe6dd0c08313e004a58f9f4fc584605a0af2e9abd43283c9f84a476647257_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_70e8c4e3dd2d96562dbd4066f20bcd2f9d77c0844b47e30a35e6fe6c8d34f05a = $this->env->getExtension("native_profiler");
        $__internal_70e8c4e3dd2d96562dbd4066f20bcd2f9d77c0844b47e30a35e6fe6c8d34f05a->enter($__internal_70e8c4e3dd2d96562dbd4066f20bcd2f9d77c0844b47e30a35e6fe6c8d34f05a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_70e8c4e3dd2d96562dbd4066f20bcd2f9d77c0844b47e30a35e6fe6c8d34f05a->leave($__internal_70e8c4e3dd2d96562dbd4066f20bcd2f9d77c0844b47e30a35e6fe6c8d34f05a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9da0d18cfc9fa4b783dde394955df60c5623d9901331248e49debe31baa4e5ea = $this->env->getExtension("native_profiler");
        $__internal_9da0d18cfc9fa4b783dde394955df60c5623d9901331248e49debe31baa4e5ea->enter($__internal_9da0d18cfc9fa4b783dde394955df60c5623d9901331248e49debe31baa4e5ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_9da0d18cfc9fa4b783dde394955df60c5623d9901331248e49debe31baa4e5ea->leave($__internal_9da0d18cfc9fa4b783dde394955df60c5623d9901331248e49debe31baa4e5ea_prof);

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
