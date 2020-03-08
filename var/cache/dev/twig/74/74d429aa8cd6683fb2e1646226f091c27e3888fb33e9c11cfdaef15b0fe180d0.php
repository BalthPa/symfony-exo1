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

/* tasks/index.html.twig */
class __TwigTemplate_eda97a25f5c31ab04d3eebcb40353882d5255ee9c619441f4a71ca48631cf012 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tasks/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tasks/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tasks/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello TachesController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<ul class=\"nav justify-content-center\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" href=\"#\">Taches</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"../\" active>Utilisateurs</a>
                </li>
</ul>

<div class='container'>
    <div class='jumbotron'>
        <h1>Toutes les taches</h1>
    
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 20
            echo "            <div class=\"card-body bg-light m-5\">
                    <h5 class=\"card-title\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "name", [], "any", false, false, false, 21), "html", null, true);
            echo "</h5>
                    <p class='card-text'>Deadline : ";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "deadline", [], "any", false, false, false, 22), "d/m/Y"), "html", null, true);
            echo "</p>
                    ";
            // line 23
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["task"], "status", [], "any", false, false, false, 23), 0)) {
                // line 24
                echo "                        <p>A Faire</p>
                    ";
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 25
$context["task"], "status", [], "any", false, false, false, 25), 1)) {
                // line 26
                echo "                        <p>Fait</p>
                    ";
            }
            // line 28
            echo "                    <a href=\"task/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "\" class=\"btn btn-primary\">Modifier</a>
                    <a href=\"/";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "\" class=\"btn btn-danger\">Supprimer</a>
                    
                </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        
    </div>

    <div class='jumbotron'>
        <h1>Ajouter une tache</h1>

        ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formTasks"]) || array_key_exists("formTasks", $context) ? $context["formTasks"] : (function () { throw new RuntimeError('Variable "formTasks" does not exist.', 39, $this->source); })()), 'form_start');
        echo "
        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formTasks"]) || array_key_exists("formTasks", $context) ? $context["formTasks"] : (function () { throw new RuntimeError('Variable "formTasks" does not exist.', 40, $this->source); })()), "name", [], "any", false, false, false, 40), 'row');
        echo "
        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formTasks"]) || array_key_exists("formTasks", $context) ? $context["formTasks"] : (function () { throw new RuntimeError('Variable "formTasks" does not exist.', 41, $this->source); })()), "deadline", [], "any", false, false, false, 41), 'row');
        echo "
            <select name=\"userId\" id=\"\">
                    <option selected disabled>Choisissez un utilisateur</option>
                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 45
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 45), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 45), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 45), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            </select>
            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formTasks"]) || array_key_exists("formTasks", $context) ? $context["formTasks"] : (function () { throw new RuntimeError('Variable "formTasks" does not exist.', 48, $this->source); })()), "status", [], "any", false, false, false, 48), 'row');
        echo "
            <button type=\"submit\">Envoyer</button>
        ";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formTasks"]) || array_key_exists("formTasks", $context) ? $context["formTasks"] : (function () { throw new RuntimeError('Variable "formTasks" does not exist.', 50, $this->source); })()), 'form_end');
        echo "

    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "tasks/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 50,  186 => 48,  183 => 47,  170 => 45,  166 => 44,  160 => 41,  156 => 40,  152 => 39,  144 => 33,  134 => 29,  129 => 28,  125 => 26,  123 => 25,  120 => 24,  118 => 23,  114 => 22,  110 => 21,  107 => 20,  103 => 19,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello TachesController!{% endblock %}

{% block body %}
<ul class=\"nav justify-content-center\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" href=\"#\">Taches</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"../\" active>Utilisateurs</a>
                </li>
</ul>

<div class='container'>
    <div class='jumbotron'>
        <h1>Toutes les taches</h1>
    
            {% for task in tasks %}
            <div class=\"card-body bg-light m-5\">
                    <h5 class=\"card-title\">{{task.name}}</h5>
                    <p class='card-text'>Deadline : {{task.deadline | date('d/m/Y')}}</p>
                    {% if task.status == 0 %}
                        <p>A Faire</p>
                    {% elseif task.status == 1 %}
                        <p>Fait</p>
                    {% endif %}
                    <a href=\"task/{{task.id}}\" class=\"btn btn-primary\">Modifier</a>
                    <a href=\"/{{task.id}}\" class=\"btn btn-danger\">Supprimer</a>
                    
                </div>
        {% endfor %}
        
    </div>

    <div class='jumbotron'>
        <h1>Ajouter une tache</h1>

        {{ form_start(formTasks) }}
        {{form_row(formTasks.name)}}
        {{form_row(formTasks.deadline)}}
            <select name=\"userId\" id=\"\">
                    <option selected disabled>Choisissez un utilisateur</option>
                {% for user in users %}
                    <option value=\"{{user.id}}\">{{user.name}} {{user.firstname}}</option>
                {% endfor %}
            </select>
            {{form_row(formTasks.status)}}
            <button type=\"submit\">Envoyer</button>
        {{ form_end(formTasks) }}

    </div>
</div>
{% endblock %}
", "tasks/index.html.twig", "/Applications/MAMP/htdocs/A2/symfony-exo1/templates/tasks/index.html.twig");
    }
}
