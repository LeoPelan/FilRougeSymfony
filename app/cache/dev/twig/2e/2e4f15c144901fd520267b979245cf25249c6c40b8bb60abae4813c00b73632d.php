<?php

/* base.html.twig */
class __TwigTemplate_c4067cb9a62ee613e51cb6076835b7e1cd91a5801e70560ce3e7a6ffef96d7cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d70ebed6ef049e0f3292a3fde5e1b86c7a1b69b00b180bb09ccb6926539cfc3e = $this->env->getExtension("native_profiler");
        $__internal_d70ebed6ef049e0f3292a3fde5e1b86c7a1b69b00b180bb09ccb6926539cfc3e->enter($__internal_d70ebed6ef049e0f3292a3fde5e1b86c7a1b69b00b180bb09ccb6926539cfc3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_d70ebed6ef049e0f3292a3fde5e1b86c7a1b69b00b180bb09ccb6926539cfc3e->leave($__internal_d70ebed6ef049e0f3292a3fde5e1b86c7a1b69b00b180bb09ccb6926539cfc3e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b30cfb3c4c84882b3f00d78f33a0b652fe1ef87c14172162ccbda548a83b916 = $this->env->getExtension("native_profiler");
        $__internal_4b30cfb3c4c84882b3f00d78f33a0b652fe1ef87c14172162ccbda548a83b916->enter($__internal_4b30cfb3c4c84882b3f00d78f33a0b652fe1ef87c14172162ccbda548a83b916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4b30cfb3c4c84882b3f00d78f33a0b652fe1ef87c14172162ccbda548a83b916->leave($__internal_4b30cfb3c4c84882b3f00d78f33a0b652fe1ef87c14172162ccbda548a83b916_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_869d2cef75705e9c51531b50a6bcd913368ea283265720dea1a65a3b4951e1e4 = $this->env->getExtension("native_profiler");
        $__internal_869d2cef75705e9c51531b50a6bcd913368ea283265720dea1a65a3b4951e1e4->enter($__internal_869d2cef75705e9c51531b50a6bcd913368ea283265720dea1a65a3b4951e1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_869d2cef75705e9c51531b50a6bcd913368ea283265720dea1a65a3b4951e1e4->leave($__internal_869d2cef75705e9c51531b50a6bcd913368ea283265720dea1a65a3b4951e1e4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c3ad34b1e3c4c0f47c62fd181ae436974466cc6cce822cb8c4b1688639ee308 = $this->env->getExtension("native_profiler");
        $__internal_6c3ad34b1e3c4c0f47c62fd181ae436974466cc6cce822cb8c4b1688639ee308->enter($__internal_6c3ad34b1e3c4c0f47c62fd181ae436974466cc6cce822cb8c4b1688639ee308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6c3ad34b1e3c4c0f47c62fd181ae436974466cc6cce822cb8c4b1688639ee308->leave($__internal_6c3ad34b1e3c4c0f47c62fd181ae436974466cc6cce822cb8c4b1688639ee308_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e425945d3ef04986eced953c5f8f8ad82c314ef57bd8e5b8fd396b99a69d431a = $this->env->getExtension("native_profiler");
        $__internal_e425945d3ef04986eced953c5f8f8ad82c314ef57bd8e5b8fd396b99a69d431a->enter($__internal_e425945d3ef04986eced953c5f8f8ad82c314ef57bd8e5b8fd396b99a69d431a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e425945d3ef04986eced953c5f8f8ad82c314ef57bd8e5b8fd396b99a69d431a->leave($__internal_e425945d3ef04986eced953c5f8f8ad82c314ef57bd8e5b8fd396b99a69d431a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
