<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_652c6f5da4d22f130958983ebeea86daebc195a5a376933eae19786aaffdeeb3 extends Twig_Template
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
        $__internal_8e34cc5b4f93498d04fff616ab43b9372954a48a622e7b979c456f01f591eb76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e34cc5b4f93498d04fff616ab43b9372954a48a622e7b979c456f01f591eb76->enter($__internal_8e34cc5b4f93498d04fff616ab43b9372954a48a622e7b979c456f01f591eb76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_f06b7f7a19504c74950521f9da923ed7c2be731b5467a891f7159ce97f6f586d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f06b7f7a19504c74950521f9da923ed7c2be731b5467a891f7159ce97f6f586d->enter($__internal_f06b7f7a19504c74950521f9da923ed7c2be731b5467a891f7159ce97f6f586d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_8e34cc5b4f93498d04fff616ab43b9372954a48a622e7b979c456f01f591eb76->leave($__internal_8e34cc5b4f93498d04fff616ab43b9372954a48a622e7b979c456f01f591eb76_prof);

        
        $__internal_f06b7f7a19504c74950521f9da923ed7c2be731b5467a891f7159ce97f6f586d->leave($__internal_f06b7f7a19504c74950521f9da923ed7c2be731b5467a891f7159ce97f6f586d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
