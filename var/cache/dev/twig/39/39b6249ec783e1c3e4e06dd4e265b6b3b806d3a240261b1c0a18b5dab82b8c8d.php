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

/* base.html.twig */
class __TwigTemplate_650d3d43844d2884a3503a922d77493ee28ab7946dee2d36d94674572dfb3f7a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'btn_page' => [$this, 'block_btn_page'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\">
    <title>FootyCleats</title>
    <link rel=\"icon\"
        href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    <!--pour avoir les icônes de font awesome (les étoiles)-->
    ";
        // line 12
        echo "</head>

<body>
    <nav>
        <ul>
            <li><a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cleat_index");
        echo "\">Accueil</a></li> <!--ou home-->
            ";
        // line 19
        echo "            <li class=\"item_compte\">Compte
                <ul class=\"sous_menu\">
                    ";
        // line 21
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 22
            echo "                    <li>
                        <p class=\"sous_menu_texte\">Welcome ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "pseudo", [], "any", false, false, false, 23), "html", null, true);
            echo " !</p>
                    </li>
                    <li>
                        <a href=\"";
            // line 26
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("compte");
            echo "\"><p>Mon compte</p></a>
                    </li>
                    ";
        } else {
            // line 29
            echo "                    <li>
                        <p class=\"sous_menu_texte\">Connectez-vous pour ajouter des items dans votre panier !</p>
                    </li>
                    ";
        }
        // line 33
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33)) {
            // line 34
            echo "                    <li class=\"sous_menu_btn\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"><button>Se déconnecter</button></a></li>
                    ";
        } else {
            // line 36
            echo "                    <li class=\"sous_menu_btn\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"><button>Se connecter</button></a></li>
                    ";
        }
        // line 38
        echo "                </ul>
            </li>
        </ul>
    </nav>
    <div class=\"header_page\">
        ";
        // line 43
        $this->displayBlock('title', $context, $blocks);
        // line 45
        echo "    </div>
    <div class=\"main\">
        ";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "    </div>
    <footer>
        <p>Made by <a href=\"instagram.com/wizardcybob\">@wizardcybob</a></p>
    </footer>

    <script type=\"text/javascript\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 43
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 44
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 47
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 48
        echo "            ";
        $this->displayBlock('btn_page', $context, $blocks);
        // line 50
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 48
    public function block_btn_page($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "btn_page"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "btn_page"));

        // line 49
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 49,  193 => 48,  183 => 50,  180 => 48,  170 => 47,  160 => 44,  150 => 43,  136 => 56,  129 => 51,  127 => 47,  123 => 45,  121 => 43,  114 => 38,  108 => 36,  102 => 34,  99 => 33,  93 => 29,  87 => 26,  81 => 23,  78 => 22,  76 => 21,  72 => 19,  68 => 17,  61 => 12,  56 => 9,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\">
    <title>FootyCleats</title>
    <link rel=\"icon\"
        href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
    <!--pour avoir les icônes de font awesome (les étoiles)-->
    {# <script src=\"https://kit.fontawesome.com/2143efebef.js\" crossorigin=\"anonymous\"></script> #}
</head>

<body>
    <nav>
        <ul>
            <li><a href=\"{{ path('app_cleat_index') }}\">Accueil</a></li> <!--ou home-->
            {# <a>Panier</a> #}
            <li class=\"item_compte\">Compte
                <ul class=\"sous_menu\">
                    {% if is_granted('ROLE_USER') %}
                    <li>
                        <p class=\"sous_menu_texte\">Welcome {{ app.user.pseudo }} !</p>
                    </li>
                    <li>
                        <a href=\"{{ path('compte') }}\"><p>Mon compte</p></a>
                    </li>
                    {% else %}
                    <li>
                        <p class=\"sous_menu_texte\">Connectez-vous pour ajouter des items dans votre panier !</p>
                    </li>
                    {% endif %}
                    {% if app.user %}
                    <li class=\"sous_menu_btn\"><a href=\"{{ path('app_logout') }}\"><button>Se déconnecter</button></a></li>
                    {% else %}
                    <li class=\"sous_menu_btn\"><a href=\"{{ path('app_login') }}\"><button>Se connecter</button></a></li>
                    {% endif %}
                </ul>
            </li>
        </ul>
    </nav>
    <div class=\"header_page\">
        {% block title %}
        {% endblock %}
    </div>
    <div class=\"main\">
        {% block body %}
            {% block btn_page %}
            {% endblock %}
        {% endblock %}
    </div>
    <footer>
        <p>Made by <a href=\"instagram.com/wizardcybob\">@wizardcybob</a></p>
    </footer>

    <script type=\"text/javascript\" src=\"{{ asset('js/main.js') }}\"></script>
</body>

</html>", "base.html.twig", "C:\\Users\\wizardcybob\\Desktop\\Moi\\Travail\\IUT\\S4\\INFO4\\TEST SYMFONY\\FootyCleats\\templates\\base.html.twig");
    }
}
