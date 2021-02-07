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

/* navbar.html.twig */
class __TwigTemplate_3f38857ccaea2c1f76b2b6392db65bafea93a7182a3fa6983e293f79027db5e6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        // line 1
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 2
        echo "<nav class=\"flex items-center justify-between flex-wrap bg-gray-900 p-6 mb-6\">
  <div class=\"flex items-center flex-no-shrink text-white mr-6\">
    <svg class=\"fill-current h-8 w-8 mr-2\" width=\"54\" height=\"54\" viewBox=\"0 0 54 54\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z\"/></svg>
    <span class=\"font-semibold text-xl tracking-tight\">G3Exercise</span>
  </div>
  <div class=\"block lg:hidden\">
    <button class=\"flex items-center px-3 py-2 border rounded text-white border-teal-light hover:text-white hover:border-white\">
      <svg class=\"fill-current h-3 w-3\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><title>Menu</title><path d=\"M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z\"/></svg>
    </button>
  </div>
  <div class=\"w-full block flex-grow lg:flex lg:items-center lg:w-auto\">
    <div class=\"text-sm lg:flex-grow\">
      <a href=\"/\" class=\"no-underline block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4\">
        Home
      </a>
      ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17)) {
            // line 18
            echo "        <a href=\"/dashboard\" class=\"no-underline block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4\">
          Dashboard
        </a>
      ";
        } else {
            // line 22
            echo "        <a href=\"/register\" class=\"no-underline block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4\">
          Sign Up
        </a>
      ";
        }
        // line 26
        echo "    </div>
  </div>
</nav>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  94 => 26,  88 => 22,  82 => 18,  80 => 17,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block content %}
<nav class=\"flex items-center justify-between flex-wrap bg-gray-900 p-6 mb-6\">
  <div class=\"flex items-center flex-no-shrink text-white mr-6\">
    <svg class=\"fill-current h-8 w-8 mr-2\" width=\"54\" height=\"54\" viewBox=\"0 0 54 54\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z\"/></svg>
    <span class=\"font-semibold text-xl tracking-tight\">G3Exercise</span>
  </div>
  <div class=\"block lg:hidden\">
    <button class=\"flex items-center px-3 py-2 border rounded text-white border-teal-light hover:text-white hover:border-white\">
      <svg class=\"fill-current h-3 w-3\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><title>Menu</title><path d=\"M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z\"/></svg>
    </button>
  </div>
  <div class=\"w-full block flex-grow lg:flex lg:items-center lg:w-auto\">
    <div class=\"text-sm lg:flex-grow\">
      <a href=\"/\" class=\"no-underline block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4\">
        Home
      </a>
      {% if app.user %}
        <a href=\"/dashboard\" class=\"no-underline block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4\">
          Dashboard
        </a>
      {% else %}
        <a href=\"/register\" class=\"no-underline block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4\">
          Sign Up
        </a>
      {% endif %}
    </div>
  </div>
</nav>
{% endblock %}", "navbar.html.twig", "C:\\Users\\Austin\\Desktop\\G3Excercise\\templates\\navbar.html.twig");
    }
}
