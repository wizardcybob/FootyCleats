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

/* panier/show.html.twig */
class __TwigTemplate_8dd39df301c35dae54b297495bccce36a43a2e749ae47c238a6905bda61bf18b extends Template
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
            'btn_page' => [$this, 'block_btn_page'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "panier/show.html.twig", 1);
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
        echo "    <h1>Panier n°: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4), "html", null, true);
        echo "</h1>
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
        echo "    ";
        $this->displayBlock('btn_page', $context, $blocks);
        // line 11
        echo "

<div class=\"panier\">
    <div class=\"panier_header\">
        <p><b>Panier de : </b>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "pseudo", [], "any", false, false, false, 15), "html", null, true);
        echo "</p>
    </div>
    <div class=\"panier_info\">
        <div class=\"panier_info_items\"><!--notre entity user à une variable \$cleats qui réccupère tous les crampons (par name) de la table cleat_user (relation plusieurs à plusieurs)-->
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["cleat"]) {
            echo " 
            <div class=\"panier_info_item\">
                <div class=\"panier_info_item_image\">
                    <img src=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cleat"], "image1", [], "any", false, false, false, 22), "html", null, true);
            echo "\">
                </div>
                <div class=\"panier_info_item_info\">
                    <p>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cleat"], "marque", [], "any", false, false, false, 25), "name", [], "any", false, false, false, 25), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cleat"], "name", [], "any", false, false, false, 25), "html", null, true);
            echo "</p>
                    <p><span class=\"panier_info_item_info_prix\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cleat"], "prix", [], "any", false, false, false, 26), "html", null, true);
            echo "</span> €</p>
                </div>
                <div class=\"panier_info_item_delete\">
                    <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_delete_cleat", ["id1" => twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29), "id2" => twig_get_attribute($this->env, $this->source, $context["cleat"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\"><b class=\"delete_croix\">X</b></a>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cleat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "            <p>Prix du panier : <span class=\"prix_panier\"></span> €</p>
        </div>
    </div>

    ";
        // line 37
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 38
            echo "    <div class=\"panier_btns_admin\">
        <a class=\"panier_btn_admin\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\"><button class=\"produit_btn_admin_modifier\">Modifier</button></a>
        ";
            // line 41
            echo "    </div>
    ";
        }
        // line 43
        echo "</div>

    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_btn_page($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "btn_page"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "btn_page"));

        // line 9
        echo "    <a class=\"back_page\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_index");
        echo "\">retour à la liste</a> <!--des paniers-->
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "panier/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 9,  177 => 8,  164 => 43,  160 => 41,  156 => 39,  153 => 38,  151 => 37,  145 => 33,  135 => 29,  129 => 26,  123 => 25,  117 => 22,  109 => 19,  102 => 15,  96 => 11,  93 => 8,  83 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    <h1>Panier n°: {{ panier.id }}</h1>
{% endblock %}

{% block body %}
    {% block btn_page %}
    <a class=\"back_page\" href=\"{{ path('app_panier_index') }}\">retour à la liste</a> <!--des paniers-->
    {% endblock %}


<div class=\"panier\">
    <div class=\"panier_header\">
        <p><b>Panier de : </b>{{ panier.user.pseudo }}</p>
    </div>
    <div class=\"panier_info\">
        <div class=\"panier_info_items\"><!--notre entity user à une variable \$cleats qui réccupère tous les crampons (par name) de la table cleat_user (relation plusieurs à plusieurs)-->
            {% for cleat in panier.name %} 
            <div class=\"panier_info_item\">
                <div class=\"panier_info_item_image\">
                    <img src=\"{{ cleat.image1 }}\">
                </div>
                <div class=\"panier_info_item_info\">
                    <p>{{ cleat.marque.name }} - {{ cleat.name }}</p>
                    <p><span class=\"panier_info_item_info_prix\">{{ cleat.prix }}</span> €</p>
                </div>
                <div class=\"panier_info_item_delete\">
                    <a href=\"{{ path('panier_delete_cleat', {id1:panier.id, id2:cleat.id}) }}\"><b class=\"delete_croix\">X</b></a>
                </div>
            </div>
            {% endfor %}
            <p>Prix du panier : <span class=\"prix_panier\"></span> €</p>
        </div>
    </div>

    {% if is_granted('ROLE_ADMIN') %}
    <div class=\"panier_btns_admin\">
        <a class=\"panier_btn_admin\" href=\"{{ path('app_panier_edit', {'id': panier.id}) }}\"><button class=\"produit_btn_admin_modifier\">Modifier</button></a>
        {# {{ include('panier/_delete_form.html.twig') }} #}
    </div>
    {% endif %}
</div>

    
{% endblock %}
", "panier/show.html.twig", "C:\\Users\\wizardcybob\\Desktop\\Moi\\Travail\\IUT\\S4\\INFO4\\TEST SYMFONY\\FootyCleats\\templates\\panier\\show.html.twig");
    }
}
