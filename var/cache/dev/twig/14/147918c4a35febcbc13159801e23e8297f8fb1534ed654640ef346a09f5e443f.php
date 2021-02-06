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

/* dashboard/index.html.twig */
class __TwigTemplate_ca3d05676d3154b79144914ca2064e808e17f9d4517c964254d9d3ee423b5f28 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/index.html.twig", 1);
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

        // line 4
        echo "Homepage
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
<div class=\"w-full m-8\">
\t<div class=\"max-w-sm rounded overflow-hidden shadow-lg mr-8\">
\t  <div class=\"px-6 py-4\">
\t    <div class=\"font-bold text-xl mb-2 inline-block mr-32\">Welcome back!</div>
\t    ";
        // line 13
        $this->loadTemplate("security/login.html.twig", "dashboard/index.html.twig", 13)->display($context);
        // line 14
        echo "\t  </div>
\t</div>
</div>

";
        // line 18
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18)) {
            // line 19
            echo "\t<div class=\"w-full m-8\">
\t<h1>Post News</h1>

\t";
            // line 22
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 22, $this->source); })()), 'form_start');
            echo "
\t    ";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 23, $this->source); })()), "title", [], "any", false, false, false, 23), 'row');
            echo "
\t    ";
            // line 24
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 24, $this->source); })()), "text", [], "any", false, false, false, 24), 'row');
            echo "

\t    <button type=\"submit\" class=\"btn\">Post</button>
\t";
            // line 27
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 27, $this->source); })()), 'form_end');
            echo "
\t</div>

\t<div class=\"w-3/5 m-8\">
\t\t<h1>Recent News Posts</h1>
\t\t<div class=\"table w-full\">
\t    \t<div class=\"table-header-group bg-gray-300\">
\t    \t\t<div class=\"table-cell text-gray-700 px-4 py-2 text-md font-bold\">Date</div>
\t    \t\t<div class=\"table-cell text-gray-700 px-4 py-2 text-md font-bold\">Author</div>
\t    \t\t<div class=\"table-cell text-gray-700 px-4 py-2 text-md font-bold\">Title</div>
\t    \t\t<div class=\"table-cell text-gray-700 px-4 py-2 text-md font-bold\">Text</div>
\t    \t</div>
\t    \t";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 39, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 40
                echo "\t  \t\t<div class=\"table-row-group bg-gray-300 hover:bg-gray-200\">
\t\t  \t\t<div class=\"table-cell text-gray-700 px-4 py-2 text-sm\">";
                // line 41
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "date", [], "any", false, false, false, 41), "d/m/Y"), "html", null, true);
                echo "</div>
\t\t\t    <div class=\"table-cell text-gray-700 px-4 py-2 text-sm\"></div>
\t\t\t    <div class=\"table-cell text-gray-700 px-4 py-2 text-sm\">";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 43), "html", null, true);
                echo "</div>
\t\t\t    <div class=\"table-cell text-gray-700 px-4 py-2 text-sm\">";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "text", [], "any", false, false, false, 44), "html", null, true);
                echo "</div>
\t\t  \t</div>
\t\t  \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "\t  \t</div>
\t</div>
";
        }
        // line 50
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 50,  166 => 47,  157 => 44,  153 => 43,  148 => 41,  145 => 40,  141 => 39,  126 => 27,  120 => 24,  116 => 23,  112 => 22,  107 => 19,  105 => 18,  99 => 14,  97 => 13,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}
Homepage
{% endblock %}

{% block body %}

<div class=\"w-full m-8\">
\t<div class=\"max-w-sm rounded overflow-hidden shadow-lg mr-8\">
\t  <div class=\"px-6 py-4\">
\t    <div class=\"font-bold text-xl mb-2 inline-block mr-32\">Welcome back!</div>
\t    {% include \"security/login.html.twig\" %}
\t  </div>
\t</div>
</div>

{% if app.user %}
\t<div class=\"w-full m-8\">
\t<h1>Post News</h1>

\t{{ form_start(postForm) }}
\t    {{ form_row(postForm.title) }}
\t    {{ form_row(postForm.text) }}

\t    <button type=\"submit\" class=\"btn\">Post</button>
\t{{ form_end(postForm) }}
\t</div>

\t<div class=\"w-3/5 m-8\">
\t\t<h1>Recent News Posts</h1>
\t\t<div class=\"table w-full\">
\t    \t<div class=\"table-header-group bg-gray-300\">
\t    \t\t<div class=\"table-cell text-gray-700 px-4 py-2 text-md font-bold\">Date</div>
\t    \t\t<div class=\"table-cell text-gray-700 px-4 py-2 text-md font-bold\">Author</div>
\t    \t\t<div class=\"table-cell text-gray-700 px-4 py-2 text-md font-bold\">Title</div>
\t    \t\t<div class=\"table-cell text-gray-700 px-4 py-2 text-md font-bold\">Text</div>
\t    \t</div>
\t    \t{% for post in posts %}
\t  \t\t<div class=\"table-row-group bg-gray-300 hover:bg-gray-200\">
\t\t  \t\t<div class=\"table-cell text-gray-700 px-4 py-2 text-sm\">{{ post.date|date(\"d/m/Y\") }}</div>
\t\t\t    <div class=\"table-cell text-gray-700 px-4 py-2 text-sm\"></div>
\t\t\t    <div class=\"table-cell text-gray-700 px-4 py-2 text-sm\">{{ post.title }}</div>
\t\t\t    <div class=\"table-cell text-gray-700 px-4 py-2 text-sm\">{{ post.text }}</div>
\t\t  \t</div>
\t\t  \t{% endfor %}
\t  \t</div>
\t</div>
{% endif %}

{% endblock %}", "dashboard/index.html.twig", "C:\\Users\\Austin\\Desktop\\G3Excercise\\templates\\dashboard\\index.html.twig");
    }
}
