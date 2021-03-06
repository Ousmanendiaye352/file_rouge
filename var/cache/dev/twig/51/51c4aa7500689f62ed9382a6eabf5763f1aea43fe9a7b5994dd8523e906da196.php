<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_b5d43fe3e85ca92b0ff46e869f5e860176ac738f3de27fed1fd1a33b641008e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8f9bcb101460eb519fba4b0796ca19cced10a470ef5d0b0679c3b562cb51b61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8f9bcb101460eb519fba4b0796ca19cced10a470ef5d0b0679c3b562cb51b61->enter($__internal_f8f9bcb101460eb519fba4b0796ca19cced10a470ef5d0b0679c3b562cb51b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_a25533d0466dbd2337a3117d73300876a09c216f568217c47dbe29b416cec1f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a25533d0466dbd2337a3117d73300876a09c216f568217c47dbe29b416cec1f4->enter($__internal_a25533d0466dbd2337a3117d73300876a09c216f568217c47dbe29b416cec1f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8f9bcb101460eb519fba4b0796ca19cced10a470ef5d0b0679c3b562cb51b61->leave($__internal_f8f9bcb101460eb519fba4b0796ca19cced10a470ef5d0b0679c3b562cb51b61_prof);

        
        $__internal_a25533d0466dbd2337a3117d73300876a09c216f568217c47dbe29b416cec1f4->leave($__internal_a25533d0466dbd2337a3117d73300876a09c216f568217c47dbe29b416cec1f4_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_351e74083ce556553b44cc6a5259b7da712a004a8ed287c0033d91e08e35175a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_351e74083ce556553b44cc6a5259b7da712a004a8ed287c0033d91e08e35175a->enter($__internal_351e74083ce556553b44cc6a5259b7da712a004a8ed287c0033d91e08e35175a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_ab58eb7ec1a61f0cf5afdc78aa1942751babbe7a2a0aed8e39285b18456bcf91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab58eb7ec1a61f0cf5afdc78aa1942751babbe7a2a0aed8e39285b18456bcf91->enter($__internal_ab58eb7ec1a61f0cf5afdc78aa1942751babbe7a2a0aed8e39285b18456bcf91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_ab58eb7ec1a61f0cf5afdc78aa1942751babbe7a2a0aed8e39285b18456bcf91->leave($__internal_ab58eb7ec1a61f0cf5afdc78aa1942751babbe7a2a0aed8e39285b18456bcf91_prof);

        
        $__internal_351e74083ce556553b44cc6a5259b7da712a004a8ed287c0033d91e08e35175a->leave($__internal_351e74083ce556553b44cc6a5259b7da712a004a8ed287c0033d91e08e35175a_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bf13b7b4bd87402052dcf0c21aac45cb536e508aa8a2afc3c76d4566888f95a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf13b7b4bd87402052dcf0c21aac45cb536e508aa8a2afc3c76d4566888f95a8->enter($__internal_bf13b7b4bd87402052dcf0c21aac45cb536e508aa8a2afc3c76d4566888f95a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a828fc6704f951f2adea77926049d176aba0aec8cc44f0526d95d99083771c25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a828fc6704f951f2adea77926049d176aba0aec8cc44f0526d95d99083771c25->enter($__internal_a828fc6704f951f2adea77926049d176aba0aec8cc44f0526d95d99083771c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_a828fc6704f951f2adea77926049d176aba0aec8cc44f0526d95d99083771c25->leave($__internal_a828fc6704f951f2adea77926049d176aba0aec8cc44f0526d95d99083771c25_prof);

        
        $__internal_bf13b7b4bd87402052dcf0c21aac45cb536e508aa8a2afc3c76d4566888f95a8->leave($__internal_bf13b7b4bd87402052dcf0c21aac45cb536e508aa8a2afc3c76d4566888f95a8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
