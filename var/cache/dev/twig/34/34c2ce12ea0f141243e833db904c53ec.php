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

/* order/slips.html.twig */
class __TwigTemplate_d6082e77391000bc6a4dc725a0f16235 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/slips.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/slips.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <style>
             * {
                    font-family: Arial, Helvetica, sans-serif;
                    font-size: 12px;
                    font-weight: bold;
               }
             td {
                    text-align: center;
                }
             table,tr,th,td {
                    border: 2px solid black;
                }

        </style>
</head>
<body class=\"bg-light\">
    ";
        // line 25
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25)) {
            // line 26
            echo "        ";
            $context["types_order"] = [0 => "Produits Nouveaux", 1 => "Fugirine Postale"];
            // line 27
            echo "    <div class=\"container mt-2\">
        <div class=\"row\">
            <div class=\"col-lg-7 col-md-7 pr-5\" style=\"border-right: 1px dashed black; color: black;\">
                <!-- en-tete -->
                <div class=\"row\">
                    <div class=\"col-lg-3 col-md-3\">
                        <div style=\"color: black;\">
                            <u>N.H 3-1</u><sup>ère</sup><u>Partie</u>
                        </div>
                        <div>
                            <span style=\"font-size: 11px;\">A joindre en fin de mois <br />au compte G58 \"C\"</span>
                        </div>
                    </div> 
                    <div class=\"col-lg-9 col-md-9 text-center\">
                        <div>PAOSITRA MALAGASY</div>
                            <center><hr style=\"width:150px;background-color:black;\"></center>
                        <div>
                            <span style=\"font-size: 11px;\" class=\"text-uppercase\">
                                LETTRE D'ENVOI DE ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["types_order"]) || array_key_exists("types_order", $context) ? $context["types_order"] : (function () { throw new RuntimeError('Variable "types_order" does not exist.', 45, $this->source); })()), ((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 45, $this->source); })()) - 1), [], "array", false, false, false, 45), "html", null, true);
            echo " 
                            </span>
                            <br>
                            <span style=\"font-size: 11px;\">
                            ";
            // line 49
            echo twig_escape_filter($this->env, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 49, $this->source); })()), "html", null, true);
            echo "
                            </span>
                            <center><hr style=\"width:150px;background-color:black;\"></center>
                        </div>
                    </div>
                        
                    <div class=\"row\">
                        <div class=\"col-lg-8 col-md-8\">
                            <div class=\"row\">
                                <div class=\"col-lg-12 col-md-12\">
                                    <span style=\"font-size: 11px;\">(1) Ce chiffre doit etre conforme à celui de la prise en charge</span>
                                </div>
                                <div class=\"col-lg-12 col-md-12 mt-3\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-2 col-md-2\">
                                            <div class=\"text-center\" style=\"width: 60px;height:60px;border:1px dashed black;border-radius:50px;display:flex;align-items:center;flex-direction:column;justify-content:center;transform:rotate(-25deg);\">
                                                <div style=\"border-bottom:1px solid black;\">N° ";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dispo"]) || array_key_exists("dispo", $context) ? $context["dispo"] : (function () { throw new RuntimeError('Variable "dispo" does not exist.', 65, $this->source); })()), 0, [], "any", false, false, false, 65), "numero", [], "any", false, false, false, 65), "html", null, true);
            echo "</div>
                                                <div>1</div>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-7 col-md-7\">
                                            <span style=\"font-size: 11px;\">Envoi du <u style=\"font-weight: bold;\"> ";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dispo"]) || array_key_exists("dispo", $context) ? $context["dispo"] : (function () { throw new RuntimeError('Variable "dispo" does not exist.', 70, $this->source); })()), 0, [], "any", false, false, false, 70), "numero", [], "any", false, false, false, 70), "html", null, true);
            echo "</u>&nbsp;<u style=\"font-weight: bold;\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
            echo "</u></span>
                                            <br>
                                            <span style=\"font-size: 11px;\">au bureau d' <u style=\"font-weight:bold\">";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dispo"]) || array_key_exists("dispo", $context) ? $context["dispo"] : (function () { throw new RuntimeError('Variable "dispo" does not exist.', 72, $this->source); })()), 0, [], "any", false, false, false, 72), "bureau", [], "any", false, false, false, 72), "html", null, true);
            echo "</u></span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12 col-md-12\">
                                    <div class=\"row\">
                                        <h5 id=\"repartitions\" class=\"col-lg-12 col-md-12 text-center\" style=\"font-size: 11px;\">Tableau  N° 1</h4>
                                        <table class=\"table table-bordered border-dark table-sm col-lg-12 col-md-12\" data-toggle=\"table\">
                                            <thead>
                                                <tr>
                                                    <th style=\"font-size: 11px;\">Désignation des catégories et des valeurs</th>
                                                    <th style=\"font-size: 11px;\">Nombre de feuille de timbres entières</th>
                                                    <th style=\"font-size: 11px;\">Nombre de feuille de timbres Fractions</th>
                                                    <th style=\"font-size: 11px;\">Nombre de figurines de chaque catégorie</th>
                                                    <th style=\"font-size: 11px;\">Prix de figurines</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                ";
            // line 90
            $context["somme"] = 0;
            // line 91
            echo "                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dispo"]) || array_key_exists("dispo", $context) ? $context["dispo"] : (function () { throw new RuntimeError('Variable "dispo" does not exist.', 91, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
                // line 92
                echo "                                                    <tr>
                                                        <td style=\"font-size: 11px;\">";
                // line 93
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "categorie", [], "any", false, false, false, 93), "html", null, true);
                echo "</td> 
                                                        <td style=\"font-size: 11px;\">";
                // line 94
                echo twig_escape_filter($this->env, abs(twig_get_attribute($this->env, $this->source, $context["pro"], "quantite", [], "any", false, false, false, 94)), "html", null, true);
                echo "</td>
                                                        <td style=\"font-size: 11px;\">";
                // line 95
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["pro"], "tpParPl", [], "any", false, false, false, 95) * abs(twig_get_attribute($this->env, $this->source, $context["pro"], "quantite", [], "any", false, false, false, 95))), "html", null, true);
                echo "</td>
                                                        <td style=\"font-size: 11px;\">";
                // line 96
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["pro"], "tpParPl", [], "any", false, false, false, 96) * abs(twig_get_attribute($this->env, $this->source, $context["pro"], "quantite", [], "any", false, false, false, 96))), "html", null, true);
                echo "</td>
                                                        ";
                // line 97
                if (((twig_get_attribute($this->env, $this->source, $context["pro"], "vf", [], "any", false, false, false, 97) == 0) || (null === twig_get_attribute($this->env, $this->source, $context["pro"], "vf", [], "any", false, false, false, 97)))) {
                    // line 98
                    echo "                                                            ";
                    $context["prix"] = ((twig_get_attribute($this->env, $this->source, $context["pro"], "tpParPl", [], "any", false, false, false, 98) * abs(twig_get_attribute($this->env, $this->source, $context["pro"], "quantite", [], "any", false, false, false, 98))) * 1);
                    // line 99
                    echo "                                                            <td style=\"font-size: 11px;\">";
                    echo twig_escape_filter($this->env, (isset($context["prix"]) || array_key_exists("prix", $context) ? $context["prix"] : (function () { throw new RuntimeError('Variable "prix" does not exist.', 99, $this->source); })()), "html", null, true);
                    echo "</td>
                                                        ";
                } else {
                    // line 101
                    echo "                                                            ";
                    $context["prix"] = ((twig_get_attribute($this->env, $this->source, $context["pro"], "tpParPl", [], "any", false, false, false, 101) * abs(twig_get_attribute($this->env, $this->source, $context["pro"], "quantite", [], "any", false, false, false, 101))) * twig_get_attribute($this->env, $this->source, $context["pro"], "vf", [], "any", false, false, false, 101));
                    // line 102
                    echo "                                                            <td style=\"font-size: 11px;\">";
                    echo twig_escape_filter($this->env, (isset($context["prix"]) || array_key_exists("prix", $context) ? $context["prix"] : (function () { throw new RuntimeError('Variable "prix" does not exist.', 102, $this->source); })()), "html", null, true);
                    echo "</td>
                                                        ";
                }
                // line 104
                echo "                                                        ";
                $context["somme"] = ((isset($context["somme"]) || array_key_exists("somme", $context) ? $context["somme"] : (function () { throw new RuntimeError('Variable "somme" does not exist.', 104, $this->source); })()) + (isset($context["prix"]) || array_key_exists("prix", $context) ? $context["prix"] : (function () { throw new RuntimeError('Variable "prix" does not exist.', 104, $this->source); })()));
                // line 105
                echo "                                                    </tr>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dispo"]) || array_key_exists("dispo", $context) ? $context["dispo"] : (function () { throw new RuntimeError('Variable "dispo" does not exist.', 107, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
                // line 108
                echo "                                                    <tr>
                                                        <td style=\"font-size: 11px;\">.........</td>
                                                        <td style=\"font-size: 11px;\">.........</td>
                                                        <td style=\"font-size: 11px;\">.........</td>
                                                        <td style=\"font-size: 11px;\">.........</td>
                                                        <td style=\"font-size: 11px;\">.........</td>
                                                    </tr>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "                                                
                                                ";
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dispo"]) || array_key_exists("dispo", $context) ? $context["dispo"] : (function () { throw new RuntimeError('Variable "dispo" does not exist.', 117, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
                // line 118
                echo "                                                    <tr>
                                                        <td style=\"font-size: 11px;\">.........</td>
                                                        <td style=\"font-size: 11px;\">.........</td>
                                                        <td style=\"font-size: 11px;\">.........</td>
                                                        <td style=\"font-size: 11px;\">.........</td>
                                                        <td style=\"font-size: 11px;\">.........</td>
                                                    </tr>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 126
            echo "                                                 <tr>
                                                    <th colspan=\"4\" class=\"text-right pr-3\" style=\"font-size: 11px;\"> Totaux(Valeur) </th>
                                                    <td style=\"font-size: 11px;\">
                                                        
                                                        ";
            // line 130
            echo twig_escape_filter($this->env, (isset($context["somme"]) || array_key_exists("somme", $context) ? $context["somme"] : (function () { throw new RuntimeError('Variable "somme" does not exist.', 130, $this->source); })()), "html", null, true);
            echo "
                                                    </td>
                                                </tr>
                                            <tbody>
                                        </table>
                                        <div class=\"col-lg-12 col-md-12\">
                                            <div class=\"row\">
                                                <div class=\"col-lg-8 col-md-8\">
                                                    <div class=\"row\">
                                                        <div class=\"col-lg-12 col-md-12\">
                                                                <span style=\"font-size: 11px;font-weight:bold;\">Cadre à remplir sur la lettre du dernier envoi toutes les fois qu'il a eu plusieurs envois dans le mois</span>
                                                        </div>
                                                        <h5 class=\"col-lg-12 col-md-12\" style=\"font-weight: bold;font-size:10px;\">RECAPITULATION DES ENVOIS DU MOIS</h5>
                                                        <table class=\"col-lg-12 col-md-12 table table-sm table-bordered border-dark\">
                                                            <tr>
                                                                <th style=\"font-size: 11px;\">Numéros des envois</th>
                                                                <th style=\"font-size: 11px;\">Prix total de chaque envoi</th>
                                                            </tr>
                                                            ";
            // line 148
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dispo"]) || array_key_exists("dispo", $context) ? $context["dispo"] : (function () { throw new RuntimeError('Variable "dispo" does not exist.', 148, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
                // line 149
                echo "                                                                <tr>
                                                                    <td style=\"font-size: 11px;\">.........</td>
                                                                    <td style=\"font-size: 11px;\">.........</td>
                                                                </tr>
                                                             ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "                                                             
                                                            ";
            // line 155
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dispo"]) || array_key_exists("dispo", $context) ? $context["dispo"] : (function () { throw new RuntimeError('Variable "dispo" does not exist.', 155, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
                // line 156
                echo "                                                                <tr>
                                                                    <td style=\"font-size: 11px;\">.........</td>
                                                                    <td style=\"font-size: 11px;\">.........</td>
                                                                </tr>
                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            echo "                                                        </table>
                                                        <div class=\"col-lg-12 col-md-12\">
                                                            <span style=\"font-size: 11px;font-weight:bold\">(1) Ce chiffre doit etre conforme à celui de la prise en charge</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col-lg-4 col-md-4\">
                                                    <div class=\"row\">
                                                        <span class=\"col-lg-12 col-md-12\" style=\"font-size: 11px;\">Le chef du centre d'Approvisionement en Valeurs Postales</span>
                                                        <br><br>
                                                        <br><br>
                                                        <br><br>
                                                        <div class=\"col-lg-12 col-md-12 text-right\">
                                                            <span style=\"font-size: 11px;\">Les agents de controle</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-4 col-md-4\">
                            <div class=\"row\">
                            <h5 class=\"col-lg-12 text-center\" style=\"font-weight: bold;font-size:10px\">TABLEAU N° 2</h5>
                                <h6 class=\"col-lg-12 text-center\" style=\"font-weight: bold;font-size:10px\">Procès-verbal et accusé de récéption</h6>
                                <span style=\"font-size: 10px;font-weight:bold;font-size:11px\" class=\"col-lg-12 col-md-11\">
                                    Nous, soussignés, déclarons avoir compté les figurines accompagnant la lettre d'envoi ci-contre, et reconnaissons que leur nombre, dans chaque catégorie est conforme à celui énoncé, sauf les differences décrites ci-dessous
                                </span>
                            </div>
                            <div class=\"row ml-1\">
                                <h5 class=\"col-lg-12 col-md-12 text-center\" style=\"font-weight: bold;font-size:10px\">Différences constatées</h5>
                                <table class=\"col-lg-12 col-md-11 table  table-bordered border-dark table-sm\">
                                    <tr>
                                        <th style=\"font-size: 11px;\">Catégorie</th>
                                        <th style=\"font-size: 11px;\">Nombre de figurine réellement reçues(En toutes lettres)</th>
                                    </tr>
                                    
                                    ";
            // line 200
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dispo"]) || array_key_exists("dispo", $context) ? $context["dispo"] : (function () { throw new RuntimeError('Variable "dispo" does not exist.', 200, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
                // line 201
                echo "                                        <tr>
                                            <td style=\"font-size: 11px;\"> ";
                // line 202
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "categorie", [], "any", false, false, false, 202), "html", null, true);
                echo " </td>
                                            <td style=\"font-size: 11px;\">.........</td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 206
            echo "                                    
                                        ";
            // line 207
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dispo"]) || array_key_exists("dispo", $context) ? $context["dispo"] : (function () { throw new RuntimeError('Variable "dispo" does not exist.', 207, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
                // line 208
                echo "                                            <tr>
                                                <td style=\"font-size: 11px;\">.........</td>
                                                <td style=\"font-size: 11px;\">.........</td>
                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 213
            echo "                                            <tr>
                                                <td colspan=\"2\">
                                                    <span style=\"font-size:11px\">
                                                        NOTA-Toutes les fois qu'il n'as pas été constaté de différence, inscrire dans le cadre ci-dessus \"Néant\"
                                                    </span>
                                                </td>
                                            </tr>
                                </table>
                                <div class=\"col-lg-12 col-md-12\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-8 col-md-8\">
                                            <div class=\"row\">
                                                <span class=\"col-lg-12 col-md-12 text-center mb-4\" style=\"font-size:11px\">Timbre du bureau destinataire</span>
                                                <div class=\"col-lg-12 col-md-12\">
                                                    <div class=\"rond\">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-4 col-md-4\">
                                            <span class=\"text-right\" style=\"font-size:11px\">Le receveur,</span>
                                            <br><br>
                                            <br><br>
                                            <span class=\"text-right\" style=\"font-size:11px\">L'Agent,</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-8 col-md-8\">

                        </div>
                        <div class=\"col-lg-4 col-md-4\">
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-5 col-md-5\" style=\"color:black;\">
                <div class=\"row\">
                    <div class=\"col-lg-5 col-md-5\">
                        <div>
                            <u>N.H 3-2</u><sup>eme</sup><u>Partie</u>
                        </div>
                    </div>
                    <div class=\"col-lg-7 col-md-7 text-center\">
                        <span style=\"font-size:10px\">
                            A rènvoyer sans le délai au Chef du Centre d'Approvisionnement en Valeurs Postales à Antananarivo
                        </span>
                    </div>
                </div>
                <div class=\"row mt-3\">
                    <h5 class=\"col-lg-12 col-md-12 text-center\" style=\"font-weight: bold;font-size:10px;\">PROCES-VERBAL ET ACCUSE DE RECEPTION</h5>
                    <div class=\"col-lg-12 col-md-12\">
                        <div class=\"row\">
                            <div class=\"col-lg-2 col-md-2\">
                                <div class=\"text-center\" style=\"width: 60px;height:60px;border:1px dashed black;border-radius:50px;display:flex;align-items:center;flex-direction:column;justify-content:center;transform:rotate(-25deg);\">
                                    <div style=\"border-bottom:1px solid black;\">N°  ";
            // line 273
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dispo"]) || array_key_exists("dispo", $context) ? $context["dispo"] : (function () { throw new RuntimeError('Variable "dispo" does not exist.', 273, $this->source); })()), 0, [], "any", false, false, false, 273), "numero", [], "any", false, false, false, 273), "html", null, true);
            echo "</div>
                                    <div>1</div>
                                </div>
                            </div>
                            <div class=\"col-lg-7 col-md-7\" style=\"font-size:11px;display:flex;align-items:center;justify-content:flex-start;\">Bureau d'&nbsp;<u style=\"font-weight:bold\">";
            // line 277
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dispo"]) || array_key_exists("dispo", $context) ? $context["dispo"] : (function () { throw new RuntimeError('Variable "dispo" does not exist.', 277, $this->source); })()), 0, [], "any", false, false, false, 277), "bureau", [], "any", false, false, false, 277), "html", null, true);
            echo "</u></div>
                            <div class=\"col-lg-12 mt-3 text-center\">
                            </div>
                        </div>  
                        <div class=\"col-lg-12 col-md-12 mt-3 text-center\">
                            <span style=\"font-size:11px\">Nous, soussignés, déclarons avoir compté les timbres-poste et autres figurines accompagnent la lettre ci-contre, et reconnaissons que leur nombre, dans chaque catégorie, est conforme à celui énoncé dans le tableau ci-dessous (2)</span>
                        </div> 
                        <div class=\"col-lg-12 col-md-12 pl-3 mt-4\">
                           <center> <h4 id=\"repartitions\" style=\"font-size: 11px;\">Proches-Verbal et accusés de reception</h4></center>
                            <table class=\"table table-bordered border-dark table-sm\">
                                <tr>
                                    <th style=\"font-size: 11px;\">Désignation des catégories</th>
                                    <th style=\"font-size: 11px;\">Nombre de feuilles de timbres entières</th>
                                    <th style=\"font-size: 11px;\">Nombre de feuilles de timbres Fractions</th>
                                    <th style=\"font-size: 11px;\">Nombre de figurines</td>
                                    <th style=\"font-size: 11px;\" >Prix</th>
                                </tr>
                                
                                 ";
            // line 295
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dispo"]) || array_key_exists("dispo", $context) ? $context["dispo"] : (function () { throw new RuntimeError('Variable "dispo" does not exist.', 295, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
                // line 296
                echo "                                    <tr>
                                        <td style=\"font-size: 11px;\">.........</td>
                                        <td style=\"font-size: 11px;\">.........</td>
                                        <td style=\"font-size: 11px;\">.........</td>
                                        <td style=\"font-size: 11px;\">.........</td>
                                        <td style=\"font-size: 11px;\">.........</td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 304
            echo "                                <tr>
                                    <td >............</td>
                                    <td >............</td>
                                    <td >............</td>
                                    <td >............</td>
                                    <td >............</td>
                                </tr>
                            </table>
                        </div>
                        <div class=\"col-lg-12 col-md-12 mt-3\">
                            <div class=\"row\">
                                <div class=\"col-lg-6 col-md-6\">
                                    <div class=\"row\">
                                        <span class=\"col-lg-12 col-md-12 text-center mb-4\" style=\"font-size:11px\">Timbre à date du bureau</span>
                                        <div class=\"col-lg-12 col-md-12 pl-5\">
                                            <div class=\"rond\">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 col-md-6\">
                                    <div class=\"row\">
                                        <span class=\"col-lg-12 col-md-12\" style=\"font-size:11px\">Reçus le ...............................</span>
                                        <span class=\"col-lg-12 col-md-12\" style=\"font-size:11px\">Le Receveur &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; L'Agent</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-12 col-md-12 mt-4\">
                            <span style=\"font-size:11px\">(2)Toute différences, soit en plus, soit en moins, doit etre constatée conformément aux dispositions de l'article 33, tome V, de l'instruction générale</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-12 col-md-12 mt-5 mb-5\">
                <button style=\"font-family:poppins;\" id=\"to-hide-while-printing\" class=\"btn btn-outline-danger btn-lg float-right col-lg-3\">Imprimer</button>
            </div>
        
        </div>    
    </div>
    ";
            // line 346
            $this->displayBlock('javascripts', $context, $blocks);
            // line 349
            echo "                       
    ";
        } else {
            // line 351
            echo "        <h1>Page not found 404 </h1>

        <p>
            The requested page couldn't be located. Checkout for any URL
            misspelling or <a href=\"";
            // line 355
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">return to the authentification </a>.
        </p>
    ";
        }
        // line 357
        echo " 
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 346
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 347
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "order/slips.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  600 => 347,  590 => 346,  577 => 7,  567 => 6,  555 => 357,  549 => 355,  543 => 351,  539 => 349,  537 => 346,  493 => 304,  480 => 296,  476 => 295,  455 => 277,  448 => 273,  386 => 213,  376 => 208,  372 => 207,  369 => 206,  359 => 202,  356 => 201,  352 => 200,  311 => 161,  301 => 156,  297 => 155,  294 => 154,  284 => 149,  280 => 148,  259 => 130,  253 => 126,  240 => 118,  236 => 117,  233 => 116,  220 => 108,  215 => 107,  208 => 105,  205 => 104,  199 => 102,  196 => 101,  190 => 99,  187 => 98,  185 => 97,  181 => 96,  177 => 95,  173 => 94,  169 => 93,  166 => 92,  161 => 91,  159 => 90,  138 => 72,  131 => 70,  123 => 65,  104 => 49,  97 => 45,  77 => 27,  74 => 26,  72 => 25,  54 => 9,  52 => 6,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
        {% endblock %}
        <style>
             * {
                    font-family: Arial, Helvetica, sans-serif;
                    font-size: 12px;
                    font-weight: bold;
               }
             td {
                    text-align: center;
                }
             table,tr,th,td {
                    border: 2px solid black;
                }

        </style>
</head>
<body class=\"bg-light\">
    {% if app.user %}
        {% set types_order = ['Produits Nouveaux','Fugirine Postale']  %}
    <div class=\"container mt-2\">
        <div class=\"row\">
            <div class=\"col-lg-7 col-md-7 pr-5\" style=\"border-right: 1px dashed black; color: black;\">
                <!-- en-tete -->
                <div class=\"row\">
                    <div class=\"col-lg-3 col-md-3\">
                        <div style=\"color: black;\">
                            <u>N.H 3-1</u><sup>ère</sup><u>Partie</u>
                        </div>
                        <div>
                            <span style=\"font-size: 11px;\">A joindre en fin de mois <br />au compte G58 \"C\"</span>
                        </div>
                    </div> 
                    <div class=\"col-lg-9 col-md-9 text-center\">
                        <div>PAOSITRA MALAGASY</div>
                            <center><hr style=\"width:150px;background-color:black;\"></center>
                        <div>
                            <span style=\"font-size: 11px;\" class=\"text-uppercase\">
                                LETTRE D'ENVOI DE {{ types_order[types - 1] }} 
                            </span>
                            <br>
                            <span style=\"font-size: 11px;\">
                            {{ categorie }}
                            </span>
                            <center><hr style=\"width:150px;background-color:black;\"></center>
                        </div>
                    </div>
                        
                    <div class=\"row\">
                        <div class=\"col-lg-8 col-md-8\">
                            <div class=\"row\">
                                <div class=\"col-lg-12 col-md-12\">
                                    <span style=\"font-size: 11px;\">(1) Ce chiffre doit etre conforme à celui de la prise en charge</span>
                                </div>
                                <div class=\"col-lg-12 col-md-12 mt-3\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-2 col-md-2\">
                                            <div class=\"text-center\" style=\"width: 60px;height:60px;border:1px dashed black;border-radius:50px;display:flex;align-items:center;flex-direction:column;justify-content:center;transform:rotate(-25deg);\">
                                                <div style=\"border-bottom:1px solid black;\">N° {{ dispo.0.numero }}</div>
                                                <div>1</div>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-7 col-md-7\">
                                            <span style=\"font-size: 11px;\">Envoi du <u style=\"font-weight: bold;\"> {{ dispo.0.numero }}</u>&nbsp;<u style=\"font-weight: bold;\">{{ 'now' | date('Y') }}</u></span>
                                            <br>
                                            <span style=\"font-size: 11px;\">au bureau d' <u style=\"font-weight:bold\">{{  dispo.0.bureau }}</u></span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12 col-md-12\">
                                    <div class=\"row\">
                                        <h5 id=\"repartitions\" class=\"col-lg-12 col-md-12 text-center\" style=\"font-size: 11px;\">Tableau  N° 1</h4>
                                        <table class=\"table table-bordered border-dark table-sm col-lg-12 col-md-12\" data-toggle=\"table\">
                                            <thead>
                                                <tr>
                                                    <th style=\"font-size: 11px;\">Désignation des catégories et des valeurs</th>
                                                    <th style=\"font-size: 11px;\">Nombre de feuille de timbres entières</th>
                                                    <th style=\"font-size: 11px;\">Nombre de feuille de timbres Fractions</th>
                                                    <th style=\"font-size: 11px;\">Nombre de figurines de chaque catégorie</th>
                                                    <th style=\"font-size: 11px;\">Prix de figurines</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {% set somme = 0 %}
                                                {% for pro in dispo %}
                                                    <tr>
                                                        <td style=\"font-size: 11px;\">{{ pro.categorie }}</td> 
                                                        <td style=\"font-size: 11px;\">{{ pro.quantite|abs}}</td>
                                                        <td style=\"font-size: 11px;\">{{ pro.tpParPl * pro.quantite|abs }}</td>
                                                        <td style=\"font-size: 11px;\">{{ pro.tpParPl * pro.quantite|abs }}</td>
                                                        {% if pro.vf == 0 or pro.vf is null  %}
                                                            {% set prix = pro.tpParPl * pro.quantite|abs * 1 %}
                                                            <td style=\"font-size: 11px;\">{{ prix }}</td>
                                                        {% else %}
                                                            {% set prix = pro.tpParPl * pro.quantite|abs * pro.vf  %}
                                                            <td style=\"font-size: 11px;\">{{ prix }}</td>
                                                        {% endif %}
                                                        {% set somme = somme + prix %}
                                                    </tr>
                                                {% endfor %}
                                                {% for pro in dispo %}
                                                    <tr>
                                                        <td style=\"font-size: 11px;\">.........</td>
                                                        <td style=\"font-size: 11px;\">.........</td>
                                                        <td style=\"font-size: 11px;\">.........</td>
                                                        <td style=\"font-size: 11px;\">.........</td>
                                                        <td style=\"font-size: 11px;\">.........</td>
                                                    </tr>
                                                {% endfor %}
                                                
                                                {% for pro in dispo %}
                                                    <tr>
                                                        <td style=\"font-size: 11px;\">.........</td>
                                                        <td style=\"font-size: 11px;\">.........</td>
                                                        <td style=\"font-size: 11px;\">.........</td>
                                                        <td style=\"font-size: 11px;\">.........</td>
                                                        <td style=\"font-size: 11px;\">.........</td>
                                                    </tr>
                                                {% endfor %}
                                                 <tr>
                                                    <th colspan=\"4\" class=\"text-right pr-3\" style=\"font-size: 11px;\"> Totaux(Valeur) </th>
                                                    <td style=\"font-size: 11px;\">
                                                        
                                                        {{ somme }}
                                                    </td>
                                                </tr>
                                            <tbody>
                                        </table>
                                        <div class=\"col-lg-12 col-md-12\">
                                            <div class=\"row\">
                                                <div class=\"col-lg-8 col-md-8\">
                                                    <div class=\"row\">
                                                        <div class=\"col-lg-12 col-md-12\">
                                                                <span style=\"font-size: 11px;font-weight:bold;\">Cadre à remplir sur la lettre du dernier envoi toutes les fois qu'il a eu plusieurs envois dans le mois</span>
                                                        </div>
                                                        <h5 class=\"col-lg-12 col-md-12\" style=\"font-weight: bold;font-size:10px;\">RECAPITULATION DES ENVOIS DU MOIS</h5>
                                                        <table class=\"col-lg-12 col-md-12 table table-sm table-bordered border-dark\">
                                                            <tr>
                                                                <th style=\"font-size: 11px;\">Numéros des envois</th>
                                                                <th style=\"font-size: 11px;\">Prix total de chaque envoi</th>
                                                            </tr>
                                                            {% for pro in dispo %}
                                                                <tr>
                                                                    <td style=\"font-size: 11px;\">.........</td>
                                                                    <td style=\"font-size: 11px;\">.........</td>
                                                                </tr>
                                                             {% endfor %}
                                                             
                                                            {% for pro in dispo %}
                                                                <tr>
                                                                    <td style=\"font-size: 11px;\">.........</td>
                                                                    <td style=\"font-size: 11px;\">.........</td>
                                                                </tr>
                                                            {% endfor %}
                                                        </table>
                                                        <div class=\"col-lg-12 col-md-12\">
                                                            <span style=\"font-size: 11px;font-weight:bold\">(1) Ce chiffre doit etre conforme à celui de la prise en charge</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col-lg-4 col-md-4\">
                                                    <div class=\"row\">
                                                        <span class=\"col-lg-12 col-md-12\" style=\"font-size: 11px;\">Le chef du centre d'Approvisionement en Valeurs Postales</span>
                                                        <br><br>
                                                        <br><br>
                                                        <br><br>
                                                        <div class=\"col-lg-12 col-md-12 text-right\">
                                                            <span style=\"font-size: 11px;\">Les agents de controle</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-4 col-md-4\">
                            <div class=\"row\">
                            <h5 class=\"col-lg-12 text-center\" style=\"font-weight: bold;font-size:10px\">TABLEAU N° 2</h5>
                                <h6 class=\"col-lg-12 text-center\" style=\"font-weight: bold;font-size:10px\">Procès-verbal et accusé de récéption</h6>
                                <span style=\"font-size: 10px;font-weight:bold;font-size:11px\" class=\"col-lg-12 col-md-11\">
                                    Nous, soussignés, déclarons avoir compté les figurines accompagnant la lettre d'envoi ci-contre, et reconnaissons que leur nombre, dans chaque catégorie est conforme à celui énoncé, sauf les differences décrites ci-dessous
                                </span>
                            </div>
                            <div class=\"row ml-1\">
                                <h5 class=\"col-lg-12 col-md-12 text-center\" style=\"font-weight: bold;font-size:10px\">Différences constatées</h5>
                                <table class=\"col-lg-12 col-md-11 table  table-bordered border-dark table-sm\">
                                    <tr>
                                        <th style=\"font-size: 11px;\">Catégorie</th>
                                        <th style=\"font-size: 11px;\">Nombre de figurine réellement reçues(En toutes lettres)</th>
                                    </tr>
                                    
                                    {% for pro in dispo %}
                                        <tr>
                                            <td style=\"font-size: 11px;\"> {{ pro.categorie }} </td>
                                            <td style=\"font-size: 11px;\">.........</td>
                                        </tr>
                                    {% endfor %}
                                    
                                        {% for pro in dispo %}
                                            <tr>
                                                <td style=\"font-size: 11px;\">.........</td>
                                                <td style=\"font-size: 11px;\">.........</td>
                                            </tr>
                                        {% endfor %}
                                            <tr>
                                                <td colspan=\"2\">
                                                    <span style=\"font-size:11px\">
                                                        NOTA-Toutes les fois qu'il n'as pas été constaté de différence, inscrire dans le cadre ci-dessus \"Néant\"
                                                    </span>
                                                </td>
                                            </tr>
                                </table>
                                <div class=\"col-lg-12 col-md-12\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-8 col-md-8\">
                                            <div class=\"row\">
                                                <span class=\"col-lg-12 col-md-12 text-center mb-4\" style=\"font-size:11px\">Timbre du bureau destinataire</span>
                                                <div class=\"col-lg-12 col-md-12\">
                                                    <div class=\"rond\">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-4 col-md-4\">
                                            <span class=\"text-right\" style=\"font-size:11px\">Le receveur,</span>
                                            <br><br>
                                            <br><br>
                                            <span class=\"text-right\" style=\"font-size:11px\">L'Agent,</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-8 col-md-8\">

                        </div>
                        <div class=\"col-lg-4 col-md-4\">
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-5 col-md-5\" style=\"color:black;\">
                <div class=\"row\">
                    <div class=\"col-lg-5 col-md-5\">
                        <div>
                            <u>N.H 3-2</u><sup>eme</sup><u>Partie</u>
                        </div>
                    </div>
                    <div class=\"col-lg-7 col-md-7 text-center\">
                        <span style=\"font-size:10px\">
                            A rènvoyer sans le délai au Chef du Centre d'Approvisionnement en Valeurs Postales à Antananarivo
                        </span>
                    </div>
                </div>
                <div class=\"row mt-3\">
                    <h5 class=\"col-lg-12 col-md-12 text-center\" style=\"font-weight: bold;font-size:10px;\">PROCES-VERBAL ET ACCUSE DE RECEPTION</h5>
                    <div class=\"col-lg-12 col-md-12\">
                        <div class=\"row\">
                            <div class=\"col-lg-2 col-md-2\">
                                <div class=\"text-center\" style=\"width: 60px;height:60px;border:1px dashed black;border-radius:50px;display:flex;align-items:center;flex-direction:column;justify-content:center;transform:rotate(-25deg);\">
                                    <div style=\"border-bottom:1px solid black;\">N°  {{ dispo.0.numero }}</div>
                                    <div>1</div>
                                </div>
                            </div>
                            <div class=\"col-lg-7 col-md-7\" style=\"font-size:11px;display:flex;align-items:center;justify-content:flex-start;\">Bureau d'&nbsp;<u style=\"font-weight:bold\">{{  dispo.0.bureau }}</u></div>
                            <div class=\"col-lg-12 mt-3 text-center\">
                            </div>
                        </div>  
                        <div class=\"col-lg-12 col-md-12 mt-3 text-center\">
                            <span style=\"font-size:11px\">Nous, soussignés, déclarons avoir compté les timbres-poste et autres figurines accompagnent la lettre ci-contre, et reconnaissons que leur nombre, dans chaque catégorie, est conforme à celui énoncé dans le tableau ci-dessous (2)</span>
                        </div> 
                        <div class=\"col-lg-12 col-md-12 pl-3 mt-4\">
                           <center> <h4 id=\"repartitions\" style=\"font-size: 11px;\">Proches-Verbal et accusés de reception</h4></center>
                            <table class=\"table table-bordered border-dark table-sm\">
                                <tr>
                                    <th style=\"font-size: 11px;\">Désignation des catégories</th>
                                    <th style=\"font-size: 11px;\">Nombre de feuilles de timbres entières</th>
                                    <th style=\"font-size: 11px;\">Nombre de feuilles de timbres Fractions</th>
                                    <th style=\"font-size: 11px;\">Nombre de figurines</td>
                                    <th style=\"font-size: 11px;\" >Prix</th>
                                </tr>
                                
                                 {% for pro in dispo %}
                                    <tr>
                                        <td style=\"font-size: 11px;\">.........</td>
                                        <td style=\"font-size: 11px;\">.........</td>
                                        <td style=\"font-size: 11px;\">.........</td>
                                        <td style=\"font-size: 11px;\">.........</td>
                                        <td style=\"font-size: 11px;\">.........</td>
                                    </tr>
                                {% endfor %}
                                <tr>
                                    <td >............</td>
                                    <td >............</td>
                                    <td >............</td>
                                    <td >............</td>
                                    <td >............</td>
                                </tr>
                            </table>
                        </div>
                        <div class=\"col-lg-12 col-md-12 mt-3\">
                            <div class=\"row\">
                                <div class=\"col-lg-6 col-md-6\">
                                    <div class=\"row\">
                                        <span class=\"col-lg-12 col-md-12 text-center mb-4\" style=\"font-size:11px\">Timbre à date du bureau</span>
                                        <div class=\"col-lg-12 col-md-12 pl-5\">
                                            <div class=\"rond\">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 col-md-6\">
                                    <div class=\"row\">
                                        <span class=\"col-lg-12 col-md-12\" style=\"font-size:11px\">Reçus le ...............................</span>
                                        <span class=\"col-lg-12 col-md-12\" style=\"font-size:11px\">Le Receveur &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; L'Agent</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-12 col-md-12 mt-4\">
                            <span style=\"font-size:11px\">(2)Toute différences, soit en plus, soit en moins, doit etre constatée conformément aux dispositions de l'article 33, tome V, de l'instruction générale</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-12 col-md-12 mt-5 mb-5\">
                <button style=\"font-family:poppins;\" id=\"to-hide-while-printing\" class=\"btn btn-outline-danger btn-lg float-right col-lg-3\">Imprimer</button>
            </div>
        
        </div>    
    </div>
    {% block javascripts %}
        {{ encore_entry_script_tags('app') }}
    {% endblock %}
                       
    {% else %}
        <h1>Page not found 404 </h1>

        <p>
            The requested page couldn't be located. Checkout for any URL
            misspelling or <a href=\"{{ path('app_login') }}\">return to the authentification </a>.
        </p>
    {% endif %} 
</body>
</html>", "order/slips.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\order\\slips.html.twig");
    }
}
