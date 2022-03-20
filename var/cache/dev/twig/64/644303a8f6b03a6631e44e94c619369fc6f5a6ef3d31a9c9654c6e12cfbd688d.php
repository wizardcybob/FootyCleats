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

/* cleat/index.html.twig */
class __TwigTemplate_a2f2fc8dcb5a4b4bcb7145761d88d7d369b19f54b5963484dbe77f4f721dc4a7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cleat/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cleat/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cleat/index.html.twig", 1);
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
        echo "    <h1>Cleats</h1>
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
        echo "<div>
    ";
        // line 9
        $this->loadTemplate("cleat/_filter.html.twig", "cleat/index.html.twig", 9)->display(twig_to_array(["form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })())]));
        // line 10
        echo "</div>

<div class=\"produits\">
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cleats"]) || array_key_exists("cleats", $context) ? $context["cleats"] : (function () { throw new RuntimeError('Variable "cleats" does not exist.', 13, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cleat"]) {
            // line 14
            echo "    <div class=\"produits_box\">
        <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cleat_show", ["id" => twig_get_attribute($this->env, $this->source, $context["cleat"], "id", [], "any", false, false, false, 15)]), "html", null, true);
            echo "\">
            <div class=\"produits_box_header\">
                <img src=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cleat"], "marque", [], "any", false, false, false, 17), "logo", [], "any", false, false, false, 17), "html", null, true);
            echo "\">
            </div>
            <div class=\"produits_box_img\">
                <img src=\"";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cleat"], "image1", [], "any", false, false, false, 20), "html", null, true);
            echo "\">
            </div>
            <div class=\"produits_box_info\">
                <p><b><span>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cleat"], "marque", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23), "html", null, true);
            echo "</span> - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cleat"], "name", [], "any", false, false, false, 23), "html", null, true);
            echo "</b></p>
                <p>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cleat"], "prix", [], "any", false, false, false, 24), "html", null, true);
            echo " €</p> <!--nom BDD + champs-->
            </div>
        </a>
        ";
            // line 27
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 28
                echo "        <div class=\"produits_box_footer\">
            <a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cleat_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["cleat"], "id", [], "any", false, false, false, 29)]), "html", null, true);
                echo "\">Modifier</a>
        </div>
        ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 32
                echo "        <div class=\"produits_box_footer\">
            <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_add_cleat", ["id1" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), "panier", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33), "id2" => twig_get_attribute($this->env, $this->source, $context["cleat"], "id", [], "any", false, false, false, 33)]), "html", null, true);
                echo "\">Ajouter au panier</a>
        </div>
        ";
            }
            // line 36
            echo "    </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "    <p>Aucun produit trouvé...</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cleat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cleat/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 40,  163 => 38,  157 => 36,  151 => 33,  148 => 32,  142 => 29,  139 => 28,  137 => 27,  131 => 24,  125 => 23,  119 => 20,  113 => 17,  108 => 15,  105 => 14,  100 => 13,  95 => 10,  93 => 9,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    <h1>Cleats</h1>
{% endblock %}

{% block body %}
<div>
    {% include 'cleat/_filter.html.twig' with {form: form} only %}
</div>

<div class=\"produits\">
    {% for cleat in cleats %}
    <div class=\"produits_box\">
        <a href=\"{{ path('app_cleat_show', {'id': cleat.id}) }}\">
            <div class=\"produits_box_header\">
                <img src=\"{{ cleat.marque.logo }}\">
            </div>
            <div class=\"produits_box_img\">
                <img src=\"{{ cleat.image1 }}\">
            </div>
            <div class=\"produits_box_info\">
                <p><b><span>{{ cleat.marque.name }}</span> - {{ cleat.name }}</b></p>
                <p>{{ cleat.prix }} €</p> <!--nom BDD + champs-->
            </div>
        </a>
        {% if is_granted('ROLE_ADMIN') %}
        <div class=\"produits_box_footer\">
            <a href=\"{{ path('app_cleat_edit', {'id': cleat.id}) }}\">Modifier</a>
        </div>
        {% elseif is_granted('ROLE_USER') %}
        <div class=\"produits_box_footer\">
            <a href=\"{{ path('panier_add_cleat', {id1:app.user.panier.id, id2:cleat.id}) }}\">Ajouter au panier</a>
        </div>
        {% endif %}
    </div>
    {% else %}
    <p>Aucun produit trouvé...</p>
    {% endfor %}
</div>

{% endblock %}", "cleat/index.html.twig", "C:\\Users\\wizardcybob\\Desktop\\Moi\\Travail\\IUT\\S4\\INFO4\\TEST SYMFONY\\FootyCleats\\templates\\cleat\\index.html.twig");
    }
}
