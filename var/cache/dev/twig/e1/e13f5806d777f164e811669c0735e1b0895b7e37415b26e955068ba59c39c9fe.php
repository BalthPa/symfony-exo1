<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* users/user.html.twig */
class __TwigTemplate_b7704c9eda8ef0ebdeff0adfff4d3acf9a8bd248f062bdb990f3c6f4e1d1fb7c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/user.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/user.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "users/user.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <ul class=\"nav justify-content-center\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" href=\"/tasks\">Taches</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"../\" active>Utilisateurs</a>
                </li>
    </ul>

    <div class=\"container\">
        <div class=\"jumbotron\">
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUpdate"]) || array_key_exists("formUpdate", $context) ? $context["formUpdate"] : (function () { throw new RuntimeError('Variable "formUpdate" does not exist.', 16, $this->source); })()), 'form_start');
        echo "
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUpdate"]) || array_key_exists("formUpdate", $context) ? $context["formUpdate"] : (function () { throw new RuntimeError('Variable "formUpdate" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), 'row');
        echo "
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUpdate"]) || array_key_exists("formUpdate", $context) ? $context["formUpdate"] : (function () { throw new RuntimeError('Variable "formUpdate" does not exist.', 18, $this->source); })()), "firstname", [], "any", false, false, false, 18), 'row');
        echo "
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUpdate"]) || array_key_exists("formUpdate", $context) ? $context["formUpdate"] : (function () { throw new RuntimeError('Variable "formUpdate" does not exist.', 19, $this->source); })()), "mail", [], "any", false, false, false, 19), 'row');
        echo "
            ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUpdate"]) || array_key_exists("formUpdate", $context) ? $context["formUpdate"] : (function () { throw new RuntimeError('Variable "formUpdate" does not exist.', 20, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "users/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 20,  94 => 19,  90 => 18,  86 => 17,  82 => 16,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <ul class=\"nav justify-content-center\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" href=\"/tasks\">Taches</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"../\" active>Utilisateurs</a>
                </li>
    </ul>

    <div class=\"container\">
        <div class=\"jumbotron\">
            {{ form_start(formUpdate) }}
            {{form_row(formUpdate.name)}}
            {{form_row(formUpdate.firstname)}}
            {{form_row(formUpdate.mail)}}
            {{ form_end(formUpdate) }}
        </div>
    </div>



{% endblock body %}
", "users/user.html.twig", "/Applications/MAMP/htdocs/A2/symfony-exo1/templates/users/user.html.twig");
    }
}
