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

/* tasks/task.html.twig */
class __TwigTemplate_f8e3b1372f9e4e4622748fe86f72a497d1a235785850199e0d480806b6d1300a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tasks/task.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tasks/task.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tasks/task.html.twig", 1);
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
        echo "<ul class=\"nav justify-content-center\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" href=\"../tasks\">Taches</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"../\" active>Utilisateurs</a>
                </li>
</ul>

    <div class=\"container\">
        <div class=\"jumbotron\">
            ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["taskUpdate"]) || array_key_exists("taskUpdate", $context) ? $context["taskUpdate"] : (function () { throw new RuntimeError('Variable "taskUpdate" does not exist.', 15, $this->source); })()), 'form_start');
        echo "
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["taskUpdate"]) || array_key_exists("taskUpdate", $context) ? $context["taskUpdate"] : (function () { throw new RuntimeError('Variable "taskUpdate" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), 'row');
        echo "
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["taskUpdate"]) || array_key_exists("taskUpdate", $context) ? $context["taskUpdate"] : (function () { throw new RuntimeError('Variable "taskUpdate" does not exist.', 17, $this->source); })()), "deadline", [], "any", false, false, false, 17), 'row');
        echo "
            <select name=\"userId\" id=\"\">
                    <option selected disabled>Changer d'utilisateur</option>
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 21
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 21), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 21), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "            </select>
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["taskUpdate"]) || array_key_exists("taskUpdate", $context) ? $context["taskUpdate"] : (function () { throw new RuntimeError('Variable "taskUpdate" does not exist.', 24, $this->source); })()), "status", [], "any", false, false, false, 24), 'row');
        echo "
            <button type=\"submit\">Envoyer</button>
        ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["taskUpdate"]) || array_key_exists("taskUpdate", $context) ? $context["taskUpdate"] : (function () { throw new RuntimeError('Variable "taskUpdate" does not exist.', 26, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "tasks/task.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 26,  115 => 24,  112 => 23,  99 => 21,  95 => 20,  89 => 17,  85 => 16,  81 => 15,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<ul class=\"nav justify-content-center\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" href=\"../tasks\">Taches</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"../\" active>Utilisateurs</a>
                </li>
</ul>

    <div class=\"container\">
        <div class=\"jumbotron\">
            {{ form_start(taskUpdate) }}
            {{form_row(taskUpdate.name)}}
            {{form_row(taskUpdate.deadline)}}
            <select name=\"userId\" id=\"\">
                    <option selected disabled>Changer d'utilisateur</option>
                {% for user in users %}
                    <option value=\"{{user.id}}\">{{user.name}} {{user.firstname}}</option>
                {% endfor %}
            </select>
            {{form_row(taskUpdate.status)}}
            <button type=\"submit\">Envoyer</button>
        {{ form_end(taskUpdate) }}
        </div>
    </div>

{% endblock body %}
", "tasks/task.html.twig", "/Applications/MAMP/htdocs/A2/symfony-exo1/templates/tasks/task.html.twig");
    }
}
