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

/* compte.html.twig */
class __TwigTemplate_54057baf0c91c09675e7c5daa2bbcd9c2591924b548670999ad30db974366dfb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "compte.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "compte.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "compte.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "<h1>Mon compte</h1>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $this->displayBlock('btn_page', $context, $blocks);
        // line 23
        echo "

";
        // line 25
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 26
            echo "



<div class=\"pannel_produits\">
    ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cleats"]) || array_key_exists("cleats", $context) ? $context["cleats"] : (function () { throw new RuntimeError('Variable "cleats" does not exist.', 31, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["cleat"]) {
                // line 32
                echo "    <div class=\"pannel_produits_box\">
        <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cleat_show", ["id" => twig_get_attribute($this->env, $this->source, $context["cleat"], "id", [], "any", false, false, false, 33)]), "html", null, true);
                echo "\">
            <div class=\"pannel_produits_box_img\">
                <img src=\"";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cleat"], "image1", [], "any", false, false, false, 35), "html", null, true);
                echo "\">
            </div>
            <div class=\"pannel_produits_box_info\">
                <p><b><span>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cleat"], "marque", [], "any", false, false, false, 38), "name", [], "any", false, false, false, 38), "html", null, true);
                echo "</span> - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cleat"], "name", [], "any", false, false, false, 38), "html", null, true);
                echo "</b></p>
                <p>";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cleat"], "prix", [], "any", false, false, false, 39), "html", null, true);
                echo " €</p><!--nom BDD + champs-->
                ";
                // line 41
                echo "            </div>
        </a>
        <a class=\"pannel_produits_edit\" href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cleat_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["cleat"], "id", [], "any", false, false, false, 43)]), "html", null, true);
                echo "\">Modifier</a>
        ";
                // line 44
                echo twig_include($this->env, $context, "cleat/_delete_form.html.twig");
                echo "
    </div>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cleat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "</div>

";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 50
            echo "<div class=\"panier\">
    <div class=\"panier_header\">
        <p>Votre panier ";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "pseudo", [], "any", false, false, false, 52), "html", null, true);
            echo " !</p>
    </div>
    <div class=\"panier_info\">
        ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 55, $this->source); })()), "name", [], "any", false, false, false, 55));
            foreach ($context['_seq'] as $context["_key"] => $context["cleat"]) {
                echo " <!--name pcq faute frappe-->
        <div class=\"panier_info_item\">
            <div class=\"panier_info_item_image\">
                <img src=\"";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cleat"], "image1", [], "any", false, false, false, 58), "html", null, true);
                echo "\">
            </div>
            <div class=\"panier_info_item_info\">
                <p>";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cleat"], "marque", [], "any", false, false, false, 61), "name", [], "any", false, false, false, 61), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cleat"], "name", [], "any", false, false, false, 61), "html", null, true);
                echo "</p>
                <p><span class=\"panier_info_item_info_prix\">";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cleat"], "prix", [], "any", false, false, false, 62), "html", null, true);
                echo "</span> €</p>
            </div>
            <div class=\"panier_info_item_delete\">
                <a href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_delete_cleat", ["id1" => twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 65, $this->source); })()), "id", [], "any", false, false, false, 65), "id2" => twig_get_attribute($this->env, $this->source, $context["cleat"], "id", [], "any", false, false, false, 65)]), "html", null, true);
                echo "\"><b
                        class=\"delete_croix\">X</b></a>
            </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cleat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "        <p>Prix du panier : <span class=\"prix_panier\"></span> €</p>
    </div>
</div>
";
        } else {
            // line 74
            echo "<p>Vous n'êtes pas connecté...</p>
";
        }
        // line 76
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_btn_page($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "btn_page"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "btn_page"));

        // line 11
        echo "        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 12
            echo "        <div class=\"div_back_page\">
            <a class=\"back_page\" href=\"";
            // line 13
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cleat_index");
            echo "\">retour à la liste</a>
        </div>
        ";
        }
        // line 16
        echo "        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 17
            echo "        <div class=\"btn_header_admin\">
            <a href=\"";
            // line 18
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_index");
            echo "\"><button>Voir les paniers</button></a>
            <a href=\"";
            // line 19
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cleat_new");
            echo "\"><button>Ajouter un crampon</button></a>
        </div>
        ";
        }
        // line 22
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "compte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 22,  279 => 19,  275 => 18,  272 => 17,  269 => 16,  263 => 13,  260 => 12,  257 => 11,  247 => 10,  235 => 76,  231 => 74,  225 => 70,  214 => 65,  208 => 62,  202 => 61,  196 => 58,  188 => 55,  182 => 52,  178 => 50,  173 => 47,  156 => 44,  152 => 43,  148 => 41,  144 => 39,  138 => 38,  132 => 35,  127 => 33,  124 => 32,  107 => 31,  100 => 26,  98 => 25,  94 => 23,  91 => 10,  81 => 9,  70 => 5,  60 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}
<h1>Mon compte</h1>
{% endblock %}


{% block body %}
    {% block btn_page %}
        {% if is_granted('ROLE_USER') %}
        <div class=\"div_back_page\">
            <a class=\"back_page\" href=\"{{ path('app_cleat_index') }}\">retour à la liste</a>
        </div>
        {% endif %}
        {% if is_granted('ROLE_ADMIN') %}
        <div class=\"btn_header_admin\">
            <a href=\"{{ path('app_panier_index') }}\"><button>Voir les paniers</button></a>
            <a href=\"{{ path('app_cleat_new') }}\"><button>Ajouter un crampon</button></a>
        </div>
        {% endif %}
    {% endblock %}


{% if is_granted('ROLE_ADMIN') %}




<div class=\"pannel_produits\">
    {% for cleat in cleats %}
    <div class=\"pannel_produits_box\">
        <a href=\"{{ path('app_cleat_show', {'id': cleat.id}) }}\">
            <div class=\"pannel_produits_box_img\">
                <img src=\"{{ cleat.image1 }}\">
            </div>
            <div class=\"pannel_produits_box_info\">
                <p><b><span>{{ cleat.marque.name }}</span> - {{ cleat.name }}</b></p>
                <p>{{ cleat.prix }} €</p><!--nom BDD + champs-->
                {# <p>nombre de fois commandé</p> #}
            </div>
        </a>
        <a class=\"pannel_produits_edit\" href=\"{{ path('app_cleat_edit', {'id': cleat.id}) }}\">Modifier</a>
        {{ include('cleat/_delete_form.html.twig') }}
    </div>
    {% endfor %}
</div>

{% elseif is_granted('ROLE_USER') %}
<div class=\"panier\">
    <div class=\"panier_header\">
        <p>Votre panier {{ app.user.pseudo }} !</p>
    </div>
    <div class=\"panier_info\">
        {% for cleat in panier.name %} <!--name pcq faute frappe-->
        <div class=\"panier_info_item\">
            <div class=\"panier_info_item_image\">
                <img src=\"{{ cleat.image1 }}\">
            </div>
            <div class=\"panier_info_item_info\">
                <p>{{ cleat.marque.name }} - {{ cleat.name }}</p>
                <p><span class=\"panier_info_item_info_prix\">{{ cleat.prix }}</span> €</p>
            </div>
            <div class=\"panier_info_item_delete\">
                <a href=\"{{ path('panier_delete_cleat', {id1:panier.id, id2:cleat.id}) }}\"><b
                        class=\"delete_croix\">X</b></a>
            </div>
        </div>
        {% endfor %}
        <p>Prix du panier : <span class=\"prix_panier\"></span> €</p>
    </div>
</div>
{% else %}
<p>Vous n'êtes pas connecté...</p>
{% endif %}


{% endblock %}", "compte.html.twig", "C:\\Users\\wizardcybob\\Desktop\\Moi\\Travail\\IUT\\S4\\INFO4\\TEST SYMFONY\\FootyCleats\\templates\\compte.html.twig");
    }
}
