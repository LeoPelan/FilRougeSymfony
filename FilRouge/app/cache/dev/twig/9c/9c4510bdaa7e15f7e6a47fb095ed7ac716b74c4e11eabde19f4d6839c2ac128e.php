<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_47735afb07ec9af934a0ebab1662893fccee80d64bd5d8f6c60a9687068c26d9 extends Twig_Template
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
        $__internal_99db4b299f8fbe3fd45f01967fba73415b30c2b9c4fc7f8e21e729f3f14aac2b = $this->env->getExtension("native_profiler");
        $__internal_99db4b299f8fbe3fd45f01967fba73415b30c2b9c4fc7f8e21e729f3f14aac2b->enter($__internal_99db4b299f8fbe3fd45f01967fba73415b30c2b9c4fc7f8e21e729f3f14aac2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99db4b299f8fbe3fd45f01967fba73415b30c2b9c4fc7f8e21e729f3f14aac2b->leave($__internal_99db4b299f8fbe3fd45f01967fba73415b30c2b9c4fc7f8e21e729f3f14aac2b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_591a325fbf676a168bac40afd47f39404247c72f5badc3fd901295e0221aa993 = $this->env->getExtension("native_profiler");
        $__internal_591a325fbf676a168bac40afd47f39404247c72f5badc3fd901295e0221aa993->enter($__internal_591a325fbf676a168bac40afd47f39404247c72f5badc3fd901295e0221aa993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_591a325fbf676a168bac40afd47f39404247c72f5badc3fd901295e0221aa993->leave($__internal_591a325fbf676a168bac40afd47f39404247c72f5badc3fd901295e0221aa993_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_110cc1f19b0a11d1fc3627c46854be9e25ef87b48d23623b512d2deadcbea348 = $this->env->getExtension("native_profiler");
        $__internal_110cc1f19b0a11d1fc3627c46854be9e25ef87b48d23623b512d2deadcbea348->enter($__internal_110cc1f19b0a11d1fc3627c46854be9e25ef87b48d23623b512d2deadcbea348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_110cc1f19b0a11d1fc3627c46854be9e25ef87b48d23623b512d2deadcbea348->leave($__internal_110cc1f19b0a11d1fc3627c46854be9e25ef87b48d23623b512d2deadcbea348_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_76e7cbe7b6cc877cebda87a430dff87bef90b5e21f0a21d26953b133927936a0 = $this->env->getExtension("native_profiler");
        $__internal_76e7cbe7b6cc877cebda87a430dff87bef90b5e21f0a21d26953b133927936a0->enter($__internal_76e7cbe7b6cc877cebda87a430dff87bef90b5e21f0a21d26953b133927936a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_76e7cbe7b6cc877cebda87a430dff87bef90b5e21f0a21d26953b133927936a0->leave($__internal_76e7cbe7b6cc877cebda87a430dff87bef90b5e21f0a21d26953b133927936a0_prof);

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
