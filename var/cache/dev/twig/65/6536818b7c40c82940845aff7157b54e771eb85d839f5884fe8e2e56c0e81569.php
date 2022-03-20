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

/* cleat/show.html.twig */
class __TwigTemplate_2bdf50c2821f799b207aa76b9a27fe2d80c7e377834fa5c15c377c19cd832c05 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cleat/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cleat/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cleat/show.html.twig", 1);
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
        echo "<img class=\"header_page_logo\" src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cleat"]) || array_key_exists("cleat", $context) ? $context["cleat"] : (function () { throw new RuntimeError('Variable "cleat" does not exist.', 4, $this->source); })()), "marque", [], "any", false, false, false, 4), "logo", [], "any", false, false, false, 4), "html", null, true);
        echo "\">
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
<a class=\"back_page\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cleat_index");
        echo "\">retour à la liste</a>
<div class=\"produit\">
    <div class=\"produit_images\">
        <div class=\"produits_box_img\">
            <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cleat"]) || array_key_exists("cleat", $context) ? $context["cleat"] : (function () { throw new RuntimeError('Variable "cleat" does not exist.', 13, $this->source); })()), "image1", [], "any", false, false, false, 13), "html", null, true);
        echo "\">
        </div>
        <div class=\"produits_box_img\">
            <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cleat"]) || array_key_exists("cleat", $context) ? $context["cleat"] : (function () { throw new RuntimeError('Variable "cleat" does not exist.', 16, $this->source); })()), "image2", [], "any", false, false, false, 16), "html", null, true);
        echo "\">
        </div>
        <div class=\"produits_box_img\">
            <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cleat"]) || array_key_exists("cleat", $context) ? $context["cleat"] : (function () { throw new RuntimeError('Variable "cleat" does not exist.', 19, $this->source); })()), "image3", [], "any", false, false, false, 19), "html", null, true);
        echo "\">
        </div>
        <div class=\"produits_box_img\">
            <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cleat"]) || array_key_exists("cleat", $context) ? $context["cleat"] : (function () { throw new RuntimeError('Variable "cleat" does not exist.', 22, $this->source); })()), "image4", [], "any", false, false, false, 22), "html", null, true);
        echo "\">
        </div>
    </div>
    <div class=\"produit_droite\">
        <div class=\"produit_info\">
            <div class=\"produit_info_title\">
                <h2><b><span>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cleat"]) || array_key_exists("cleat", $context) ? $context["cleat"] : (function () { throw new RuntimeError('Variable "cleat" does not exist.', 28, $this->source); })()), "marque", [], "any", false, false, false, 28), "name", [], "any", false, false, false, 28), "html", null, true);
        echo "</span> - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cleat"]) || array_key_exists("cleat", $context) ? $context["cleat"] : (function () { throw new RuntimeError('Variable "cleat" does not exist.', 28, $this->source); })()), "name", [], "any", false, false, false, 28), "html", null, true);
        echo "</b></h2>
            </div>
            <div class=\"produit_info_info\">
                <p><b>Prix : </b>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cleat"]) || array_key_exists("cleat", $context) ? $context["cleat"] : (function () { throw new RuntimeError('Variable "cleat" does not exist.', 31, $this->source); })()), "prix", [], "any", false, false, false, 31), "html", null, true);
        echo " €</p>
                <p><b>Type de terrain : </b>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cleat"]) || array_key_exists("cleat", $context) ? $context["cleat"] : (function () { throw new RuntimeError('Variable "cleat" does not exist.', 32, $this->source); })()), "terrain", [], "any", false, false, false, 32), "name", [], "any", false, false, false, 32), "html", null, true);
        echo "</p>
                <div class=\"produit_info_info_couleurs\">
                    <h3>Couleurs : </h3>
                    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["cleat"]) || array_key_exists("cleat", $context) ? $context["cleat"] : (function () { throw new RuntimeError('Variable "cleat" does not exist.', 35, $this->source); })()), "couleurs", [], "any", false, false, false, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["couleur"]) {
            // line 36
            echo "                    <p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["couleur"], "name", [], "any", false, false, false, 36), "html", null, true);
            echo "</p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['couleur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                </div>
            </div>
            <div class=\"produit_info_panier\">
                ";
        // line 41
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 42
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_add_cleat", ["id1" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42), "panier", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42), "id2" => twig_get_attribute($this->env, $this->source, (isset($context["cleat"]) || array_key_exists("cleat", $context) ? $context["cleat"] : (function () { throw new RuntimeError('Variable "cleat" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\">
                    <button>Ajouter au panier</button>
                </a>
                ";
        } else {
            // line 46
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"><button>Connectez-vous pour acheter ce produit</button></a>
                ";
        }
        // line 48
        echo "            </div>
        </div>

        ";
        // line 51
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 52
            echo "        <div class=\"produit_btns_admin\">
            <a class=\"produit_btn_admin\" href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cleat_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["cleat"]) || array_key_exists("cleat", $context) ? $context["cleat"] : (function () { throw new RuntimeError('Variable "cleat" does not exist.', 53, $this->source); })()), "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\"><button
                    class=\"produit_btn_admin_modifier\">Modifier</button></a>
            ";
            // line 55
            echo twig_include($this->env, $context, "cleat/_delete_form.html.twig");
            echo "
        </div>
        ";
        }
        // line 58
        echo "    </div>
</div>
";
        // line 67
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cleat/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 67,  202 => 58,  196 => 55,  191 => 53,  188 => 52,  186 => 51,  181 => 48,  175 => 46,  167 => 42,  165 => 41,  160 => 38,  151 => 36,  147 => 35,  141 => 32,  137 => 31,  129 => 28,  120 => 22,  114 => 19,  108 => 16,  102 => 13,  95 => 9,  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
<img class=\"header_page_logo\" src=\"{{ cleat.marque.logo }}\">
{% endblock %}

{% block body %}

<a class=\"back_page\" href=\"{{ path('app_cleat_index') }}\">retour à la liste</a>
<div class=\"produit\">
    <div class=\"produit_images\">
        <div class=\"produits_box_img\">
            <img src=\"{{ cleat.image1 }}\">
        </div>
        <div class=\"produits_box_img\">
            <img src=\"{{ cleat.image2 }}\">
        </div>
        <div class=\"produits_box_img\">
            <img src=\"{{ cleat.image3 }}\">
        </div>
        <div class=\"produits_box_img\">
            <img src=\"{{ cleat.image4 }}\">
        </div>
    </div>
    <div class=\"produit_droite\">
        <div class=\"produit_info\">
            <div class=\"produit_info_title\">
                <h2><b><span>{{ cleat.marque.name }}</span> - {{ cleat.name }}</b></h2>
            </div>
            <div class=\"produit_info_info\">
                <p><b>Prix : </b>{{ cleat.prix }} €</p>
                <p><b>Type de terrain : </b>{{ cleat.terrain.name }}</p>
                <div class=\"produit_info_info_couleurs\">
                    <h3>Couleurs : </h3>
                    {% for couleur in cleat.couleurs %}
                    <p>{{ couleur.name }}</p>
                    {% endfor %}
                </div>
            </div>
            <div class=\"produit_info_panier\">
                {% if is_granted('ROLE_USER') %}
                <a href=\"{{ path('panier_add_cleat', {id1:app.user.panier.id, id2:cleat.id}) }}\">
                    <button>Ajouter au panier</button>
                </a>
                {% else %}
                <a href=\"{{ path('app_login') }}\"><button>Connectez-vous pour acheter ce produit</button></a>
                {% endif %}
            </div>
        </div>

        {% if is_granted('ROLE_ADMIN') %}
        <div class=\"produit_btns_admin\">
            <a class=\"produit_btn_admin\" href=\"{{ path('app_cleat_edit', {'id': cleat.id}) }}\"><button
                    class=\"produit_btn_admin_modifier\">Modifier</button></a>
            {{ include('cleat/_delete_form.html.twig') }}
        </div>
        {% endif %}
    </div>
</div>
{# <div class=\"form_compte_box popup\">
        <h1>Connectez-vous pour acheter ce produit !</h1>

        <a href=\"{{ path('app_login') }}\"><button class=\"form_compte_box_btn\">
            Se connecter
        </button></a>
    </div> #}


{% endblock %}", "cleat/show.html.twig", "C:\\Users\\wizardcybob\\Desktop\\Moi\\Travail\\IUT\\S4\\INFO4\\TEST SYMFONY\\FootyCleats\\templates\\cleat\\show.html.twig");
    }
}
