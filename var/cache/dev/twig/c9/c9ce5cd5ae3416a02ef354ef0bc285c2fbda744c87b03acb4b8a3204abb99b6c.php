<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_05c675fbdfb49a052cb5ce133271eca023ace22c43429e5dba605e0b95730305 extends Twig_Template
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
        $__internal_660871ae5905a5613f557aa63b4795aff9b3d8b538c47999fdb706402a186b22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_660871ae5905a5613f557aa63b4795aff9b3d8b538c47999fdb706402a186b22->enter($__internal_660871ae5905a5613f557aa63b4795aff9b3d8b538c47999fdb706402a186b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_140814a85e160621387ecf91b917b5bd9cf9a7752e57a62c41b25733df39110e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_140814a85e160621387ecf91b917b5bd9cf9a7752e57a62c41b25733df39110e->enter($__internal_140814a85e160621387ecf91b917b5bd9cf9a7752e57a62c41b25733df39110e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_660871ae5905a5613f557aa63b4795aff9b3d8b538c47999fdb706402a186b22->leave($__internal_660871ae5905a5613f557aa63b4795aff9b3d8b538c47999fdb706402a186b22_prof);

        
        $__internal_140814a85e160621387ecf91b917b5bd9cf9a7752e57a62c41b25733df39110e->leave($__internal_140814a85e160621387ecf91b917b5bd9cf9a7752e57a62c41b25733df39110e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
