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
class __TwigTemplate_bd47478614f012cf8dda308f0997d1b4 extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 25)) {
            // line 26
            echo "        ";
            $context["types_order"] = [0 => "Produits Nouveaux", 1 => "Fugirine Postale"];
            // line 27
            echo "    <div class=\"main ms-5\">
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
            echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["types_order"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[(($context["types"] ?? null) - 1)] ?? null) : null), "html", null, true);
            echo " 
                            </span>
                            <br>
                            <span style=\"font-size: 11px;\">
                            ";
            // line 49
            echo twig_escape_filter($this->env, ($context["categorie"] ?? null), "html", null, true);
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dispo"] ?? null), 0, [], "any", false, false, false, 65), "numero", [], "any", false, false, false, 65), "html", null, true);
            echo "</div>
                                                <div>";
            // line 66
            echo twig_escape_filter($this->env, ($context["bureau"] ?? null), "html", null, true);
            echo "</div>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-7 col-md-7\">
                                            <span style=\"font-size: 11px;\">Envoi du <u style=\"font-weight: bold;\"> ";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dispo"] ?? null), 0, [], "any", false, false, false, 70), "numero", [], "any", false, false, false, 70), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, ($context["bureau"] ?? null), "html", null, true);
            echo "</u>&nbsp;<u style=\"font-weight: bold;\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
            echo "</u></span>
                                            <br>
                                            <span style=\"font-size: 11px;\">au bureau d' <u style=\"font-weight:bold\">";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dispo"] ?? null), 0, [], "any", false, false, false, 72), "bureau", [], "any", false, false, false, 72), "html", null, true);
            echo "</u></span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12 col-md-12\">
                                    <div class=\"row\">
                                        <h5 id=\"repartitions\" class=\"col-lg-12 col-md-12 text-center ms-5\" style=\"font-size: 11px;\">Tableau  N° 1</h4>
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
            $context['_seq'] = twig_ensure_traversable(($context["dispo"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
                // line 92
                echo "                                                    <tr>
                                                        <td style=\"font-size: 11px;\">";
                // line 93
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "categorie", [], "any", false, false, false, 93), "html", null, true);
                echo "</td> 
                                                        <td style=\"font-size: 11px;\">
                                                            ";
                // line 95
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, abs(twig_get_attribute($this->env, $this->source, $context["pro"], "quantite", [], "any", false, false, false, 95)), 0, ",", " "), "html", null, true);
                echo "
                                                        </td>
                                                        <td style=\"font-size: 11px;\">
                                                            ";
                // line 98
                $context["mu"] = (twig_get_attribute($this->env, $this->source, $context["pro"], "tpParPl", [], "any", false, false, false, 98) * abs(twig_get_attribute($this->env, $this->source, $context["pro"], "quantite", [], "any", false, false, false, 98)));
                // line 99
                echo "                                                            ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["mu"] ?? null), 0, ",", " "), "html", null, true);
                echo "
                                                        </td>
                                                        <td style=\"font-size: 11px;\">
                                                            ";
                // line 102
                $context["var"] = (twig_get_attribute($this->env, $this->source, $context["pro"], "tpParPl", [], "any", false, false, false, 102) * abs(twig_get_attribute($this->env, $this->source, $context["pro"], "quantite", [], "any", false, false, false, 102)));
                // line 103
                echo "                                                            ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["var"] ?? null), 0, ",", " "), "html", null, true);
                echo "
                                                        </td>
                                                        ";
                // line 105
                if (((twig_get_attribute($this->env, $this->source, $context["pro"], "vf", [], "any", false, false, false, 105) == 0) || (null === twig_get_attribute($this->env, $this->source, $context["pro"], "vf", [], "any", false, false, false, 105)))) {
                    // line 106
                    echo "                                                            ";
                    $context["prix"] = ((twig_get_attribute($this->env, $this->source, $context["pro"], "tpParPl", [], "any", false, false, false, 106) * abs(twig_get_attribute($this->env, $this->source, $context["pro"], "quantite", [], "any", false, false, false, 106))) * 1);
                    // line 107
                    echo "                                                            <td style=\"font-size: 11px;\">";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prix"] ?? null), 0, ",", " "), "html", null, true);
                    echo "</td>
                                                        ";
                } else {
                    // line 109
                    echo "                                                            ";
                    $context["prix"] = ((twig_get_attribute($this->env, $this->source, $context["pro"], "tpParPl", [], "any", false, false, false, 109) * abs(twig_get_attribute($this->env, $this->source, $context["pro"], "quantite", [], "any", false, false, false, 109))) * twig_get_attribute($this->env, $this->source, $context["pro"], "vf", [], "any", false, false, false, 109));
                    // line 110
                    echo "                                                            <td style=\"font-size: 11px;\">";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prix"] ?? null), 0, ",", " "), "html", null, true);
                    echo "</td>
                                                        ";
                }
                // line 112
                echo "                                                        ";
                $context["somme"] = (($context["somme"] ?? null) + ($context["prix"] ?? null));
                // line 113
                echo "                                                    </tr>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["dispo"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
                // line 116
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
            // line 124
            echo "                                                
                                                ";
            // line 125
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["dispo"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
                // line 126
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
            // line 134
            echo "                                                 <tr>
                                                    <th colspan=\"4\" class=\"text-right pr-3\" style=\"font-size: 11px;\"> Totaux(Valeur) </th>
                                                    <td style=\"font-size: 11px;\">
                                                        ";
            // line 137
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["somme"] ?? null), 0, ",", " "), "html", null, true);
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
                                                            <tr>
                                                                <td style=\"font-size: 11px;\"> ";
            // line 156
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dispo"] ?? null), 0, [], "any", false, false, false, 156), "numero", [], "any", false, false, false, 156), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, ($context["bureau"] ?? null), "html", null, true);
            echo "</td>
                                                                <td style=\"font-size: 11px;\"> ";
            // line 157
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["somme"] ?? null), 0, ",", " "), "html", null, true);
            echo " </td>
                                                            </tr>
                                                            ";
            // line 159
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["dispo"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
                // line 160
                echo "                                                                <tr>
                                                                    <td style=\"font-size: 11px;\">.........</td>
                                                                    <td style=\"font-size: 11px;\">.........</td>
                                                                </tr>
                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
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
            // line 204
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["dispo"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
                // line 205
                echo "                                        <tr>
                                            <td style=\"font-size: 11px;\"> ";
                // line 206
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "categorie", [], "any", false, false, false, 206), "html", null, true);
                echo " </td>
                                            <td style=\"font-size: 11px;\">.........</td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 210
            echo "                                    
                                        ";
            // line 211
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["dispo"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
                // line 212
                echo "                                            <tr>
                                                <td style=\"font-size: 11px;\">.........</td>
                                                <td style=\"font-size: 11px;\">.........</td>
                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 217
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
            // line 277
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dispo"] ?? null), 0, [], "any", false, false, false, 277), "numero", [], "any", false, false, false, 277), "html", null, true);
            echo "</div>
                                    <div>";
            // line 278
            echo twig_escape_filter($this->env, ($context["bureau"] ?? null), "html", null, true);
            echo "</div>
                                </div>
                            </div>
                            <div class=\"col-lg-7 col-md-7\" style=\"font-size:11px;display:flex;align-items:center;justify-content:flex-start;\">Bureau d'&nbsp;<u style=\"font-weight:bold\">";
            // line 281
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dispo"] ?? null), 0, [], "any", false, false, false, 281), "bureau", [], "any", false, false, false, 281), "html", null, true);
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
            // line 299
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["dispo"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
                // line 300
                echo "                                    <tr>
                                        <td style=\"font-size: 11px;\"> ";
                // line 301
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "categorie", [], "any", false, false, false, 301), "html", null, true);
                echo "</td>
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
            // line 308
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
            // line 350
            $this->displayBlock('javascripts', $context, $blocks);
            // line 353
            echo "                       
    ";
        } else {
            // line 355
            echo "        <h1>Page not found 404 </h1>

        <p>
            The requested page couldn't be located. Checkout for any URL
            misspelling or <a href=\"";
            // line 359
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">return to the authentification </a>.
        </p>
    ";
        }
        // line 361
        echo " 
</body>
</html>";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
        ";
    }

    // line 350
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 351
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
    ";
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
        return array (  587 => 351,  583 => 350,  576 => 7,  572 => 6,  566 => 361,  560 => 359,  554 => 355,  550 => 353,  548 => 350,  504 => 308,  491 => 301,  488 => 300,  484 => 299,  463 => 281,  457 => 278,  453 => 277,  391 => 217,  381 => 212,  377 => 211,  374 => 210,  364 => 206,  361 => 205,  357 => 204,  316 => 165,  306 => 160,  302 => 159,  297 => 157,  291 => 156,  269 => 137,  264 => 134,  251 => 126,  247 => 125,  244 => 124,  231 => 116,  226 => 115,  219 => 113,  216 => 112,  210 => 110,  207 => 109,  201 => 107,  198 => 106,  196 => 105,  190 => 103,  188 => 102,  181 => 99,  179 => 98,  173 => 95,  168 => 93,  165 => 92,  160 => 91,  158 => 90,  137 => 72,  128 => 70,  121 => 66,  117 => 65,  98 => 49,  91 => 45,  71 => 27,  68 => 26,  66 => 25,  48 => 9,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "order/slips.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\order\\slips.html.twig");
    }
}
