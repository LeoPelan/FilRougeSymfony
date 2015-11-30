<?php

/* base.html.twig */
class __TwigTemplate_97567eb1b1b21e3cb735b723138fe1865c52c6eb98619c803928c5f46726eeb1 extends Twig_Template
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
        $__internal_2e05da19be2e9ad89d89aa0e26c6de7fababff9ec523a6e84e97858f03ace59f = $this->env->getExtension("native_profiler");
        $__internal_2e05da19be2e9ad89d89aa0e26c6de7fababff9ec523a6e84e97858f03ace59f->enter($__internal_2e05da19be2e9ad89d89aa0e26c6de7fababff9ec523a6e84e97858f03ace59f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_2e05da19be2e9ad89d89aa0e26c6de7fababff9ec523a6e84e97858f03ace59f->leave($__internal_2e05da19be2e9ad89d89aa0e26c6de7fababff9ec523a6e84e97858f03ace59f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b3eb94d5d10cf9ebe54d6535a647f95babdaec66db957f66666ea25d5856fae8 = $this->env->getExtension("native_profiler");
        $__internal_b3eb94d5d10cf9ebe54d6535a647f95babdaec66db957f66666ea25d5856fae8->enter($__internal_b3eb94d5d10cf9ebe54d6535a647f95babdaec66db957f66666ea25d5856fae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b3eb94d5d10cf9ebe54d6535a647f95babdaec66db957f66666ea25d5856fae8->leave($__internal_b3eb94d5d10cf9ebe54d6535a647f95babdaec66db957f66666ea25d5856fae8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a934ba7c998cfbbec007c81b8b5b72a3e17e8c6435cd674a7221de30256e78fc = $this->env->getExtension("native_profiler");
        $__internal_a934ba7c998cfbbec007c81b8b5b72a3e17e8c6435cd674a7221de30256e78fc->enter($__internal_a934ba7c998cfbbec007c81b8b5b72a3e17e8c6435cd674a7221de30256e78fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a934ba7c998cfbbec007c81b8b5b72a3e17e8c6435cd674a7221de30256e78fc->leave($__internal_a934ba7c998cfbbec007c81b8b5b72a3e17e8c6435cd674a7221de30256e78fc_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_63b15c8448965cb200a247040d3853f3fc7c513c728b8c7f4d4f008eb3682002 = $this->env->getExtension("native_profiler");
        $__internal_63b15c8448965cb200a247040d3853f3fc7c513c728b8c7f4d4f008eb3682002->enter($__internal_63b15c8448965cb200a247040d3853f3fc7c513c728b8c7f4d4f008eb3682002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_63b15c8448965cb200a247040d3853f3fc7c513c728b8c7f4d4f008eb3682002->leave($__internal_63b15c8448965cb200a247040d3853f3fc7c513c728b8c7f4d4f008eb3682002_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_02a560fce1135bb016022ae3320d75f69bda9066a516db5e6f6c831ba2f2d2e8 = $this->env->getExtension("native_profiler");
        $__internal_02a560fce1135bb016022ae3320d75f69bda9066a516db5e6f6c831ba2f2d2e8->enter($__internal_02a560fce1135bb016022ae3320d75f69bda9066a516db5e6f6c831ba2f2d2e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_02a560fce1135bb016022ae3320d75f69bda9066a516db5e6f6c831ba2f2d2e8->leave($__internal_02a560fce1135bb016022ae3320d75f69bda9066a516db5e6f6c831ba2f2d2e8_prof);

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
