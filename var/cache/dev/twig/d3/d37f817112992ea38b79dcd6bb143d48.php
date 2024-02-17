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

/* admin/profile.html.twig */
class __TwigTemplate_712e242ea63fb4e683f42f6f42289aa0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/profile.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<!-- ***** Preloader Start ***** -->
  <div id=\"js-preloader\" class=\"js-preloader\">
    <div class=\"preloader-inner\">
      <span class=\"dot\"></span>
      <div class=\"dots\">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class=\"header-area header-sticky\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <nav class=\"main-nav\">
                    <!-- ***** Logo Start ***** -->
                    <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        echo "\" class=\"logo\">
                        <img src=\"assets/images/logo.png\" alt=\"\">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Search End ***** -->
                    <div class=\"search-input\">
                      <form id=\"search\" action=\"#\">
                        <input type=\"text\" placeholder=\"Type Something\" id='searchText' name=\"searchKeyword\" onkeypress=\"handle\" />
                        <i class=\"fa fa-search\"></i>
                      </form>
                    </div>
                    <!-- ***** Search End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class=\"nav\">
                        <li><a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        echo "\">Home</a></li>
                        <li><a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_browse");
        echo "\">Browse</a></li>
                        <li><a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_details");
        echo "\">Details</a></li>
                        <li><a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_streams");
        echo "\">Streams</a></li>
                        <li><a href=\"profile.html\" class=\"active\">Profile <img src=\"assets/images/profile-header.jpg\" alt=\"\"></a></li>
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"page-content\">

          <!-- ***** Banner Start ***** -->
          <div class=\"row\">
            <div class=\"col-lg-12\">
              <div class=\"main-profile \">
                <div class=\"row\">
                  <div class=\"col-lg-4\">
                    <img src=\"assets/images/profile.jpg\" alt=\"\" style=\"border-radius: 23px;\">
                  </div>
                  <div class=\"col-lg-4 align-self-center\">
                    <div class=\"main-info header-text\">
                      <span>Offline</span>
                      <h4>Alan Smithee</h4>
                      <p>You Haven't Gone Live yet. Go Live By Touching The Button Below.</p>
                      <div class=\"main-border-button\">
                        <a href=\"#\">Start Live Stream</a>
                      </div>
                    </div>
                  </div>
                  <div class=\"col-lg-4 align-self-center\">
                    <ul>
                      <li>Games Downloaded <span>3</span></li>
                      <li>Friends Online <span>16</span></li>
                      <li>Live Streams <span>None</span></li>
                      <li>Clips <span>29</span></li>
                    </ul>
                  </div>
                </div>
                <div class=\"row\">
                  <div class=\"col-lg-12\">
                    <div class=\"clips\">
                      <div class=\"row\">
                        <div class=\"col-lg-12\">
                          <div class=\"heading-section\">
                            <h4><em>Your Most Popular</em> Clips</h4>
                          </div>
                        </div>
                        <div class=\"col-lg-3 col-sm-6\">
                          <div class=\"item\">
                            <div class=\"thumb\">
                              <img src=\"assets/images/clip-01.jpg\" alt=\"\" style=\"border-radius: 23px;\">
                              <a href=\"https://www.youtube.com/watch?v=r1b03uKWk_M\" target=\"_blank\"><i class=\"fa fa-play\"></i></a>
                            </div>
                            <div class=\"down-content\">
                              <h4>First Clip</h4>
                              <span><i class=\"fa fa-eye\"></i> 250</span>
                            </div>
                          </div>
                        </div>
                        <div class=\"col-lg-3 col-sm-6\">
                          <div class=\"item\">
                            <div class=\"thumb\">
                              <img src=\"assets/images/clip-02.jpg\" alt=\"\" style=\"border-radius: 23px;\">
                              <a href=\"https://www.youtube.com/watch?v=r1b03uKWk_M\" target=\"_blank\"><i class=\"fa fa-play\"></i></a>
                            </div>
                            <div class=\"down-content\">
                              <h4>Second Clip</h4>
                              <span><i class=\"fa fa-eye\"></i> 183</span>
                            </div>
                          </div>
                        </div>
                        <div class=\"col-lg-3 col-sm-6\">
                          <div class=\"item\">
                            <div class=\"thumb\">
                              <img src=\"assets/images/clip-03.jpg\" alt=\"\" style=\"border-radius: 23px;\">
                              <a href=\"https://www.youtube.com/watch?v=r1b03uKWk_M\" target=\"_blank\"><i class=\"fa fa-play\"></i></a>
                            </div>
                            <div class=\"down-content\">
                              <h4>Third Clip</h4>
                              <span><i class=\"fa fa-eye\"></i> 141</span>
                            </div>
                          </div>
                        </div>
                        <div class=\"col-lg-3 col-sm-6\">
                          <div class=\"item\">
                            <div class=\"thumb\">
                              <img src=\"assets/images/clip-04.jpg\" alt=\"\" style=\"border-radius: 23px;\">
                              <a href=\"https://www.youtube.com/watch?v=r1b03uKWk_M\" target=\"_blank\"><i class=\"fa fa-play\"></i></a>
                            </div>
                            <div class=\"down-content\">
                              <h4>Fourth Clip</h4>
                              <span><i class=\"fa fa-eye\"></i> 91</span>
                            </div>
                          </div>
                        </div>
                        <div class=\"col-lg-12\">
                          <div class=\"main-button\">
                            <a href=\"#\">Load More Clips</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Banner End ***** -->

          <!-- ***** Gaming Library Start ***** -->
          <div class=\"gaming-library profile-library\">
            <div class=\"col-lg-12\">
              <div class=\"heading-section\">
                <h4><em>Your Gaming</em> Library</h4>
              </div>
              <div class=\"item\">
                <ul>
                  <li><img src=\"assets/images/game-01.jpg\" alt=\"\" class=\"templatemo-item\"></li>
                  <li><h4>Dota 2</h4><span>Sandbox</span></li>
                  <li><h4>Date Added</h4><span>24/08/2036</span></li>
                  <li><h4>Hours Played</h4><span>634 H 22 Mins</span></li>
                  <li><h4>Currently</h4><span>Downloaded</span></li>
                  <li><div class=\"main-border-button border-no-active\"><a href=\"#\">Donwloaded</a></div></li>
                </ul>
              </div>
              <div class=\"item\">
                <ul>
                  <li><img src=\"assets/images/game-02.jpg\" alt=\"\" class=\"templatemo-item\"></li>
                  <li><h4>Fortnite</h4><span>Sandbox</span></li>
                  <li><h4>Date Added</h4><span>22/06/2036</span></li>
                  <li><h4>Hours Played</h4><span>745 H 22 Mins</span></li>
                  <li><h4>Currently</h4><span>Downloaded</span></li>
                  <li><div class=\"main-border-button border-no-active\"><a href=\"#\">Donwloaded</a></div></li>
                </ul>
              </div>
              <div class=\"item last-item\">
                <ul>
                  <li><img src=\"assets/images/game-03.jpg\" alt=\"\" class=\"templatemo-item\"></li>
                  <li><h4>CS-GO</h4><span>Sandbox</span></li>
                  <li><h4>Date Added</h4><span>21/04/2022</span></li>
                  <li><h4>Hours Played</h4><span>632 H 46 Mins</span></li>
                  <li><h4>Currently</h4><span>Downloaded</span></li>
                  <li><div class=\"main-border-button border-no-active\"><a href=\"#\">Donwloaded</a></div></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- ***** Gaming Library End ***** -->
        </div>
      </div>
    </div>
  </div>
  
  <footer>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <p>Copyright © 2036 <a href=\"#\">Cyborg Gaming</a> Company. All rights reserved. 
          
          <br>Design: <a href=\"https://templatemo.com\" target=\"_blank\" title=\"free CSS templates\">TemplateMo</a>  Distributed By <a href=\"https://themewagon.com\" target=\"_blank\" >ThemeWagon</a></p>
        </div>
      </div>
    </div>
  </footer>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/profile.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  120 => 42,  116 => 41,  112 => 40,  108 => 39,  91 => 25,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<!-- ***** Preloader Start ***** -->
  <div id=\"js-preloader\" class=\"js-preloader\">
    <div class=\"preloader-inner\">
      <span class=\"dot\"></span>
      <div class=\"dots\">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class=\"header-area header-sticky\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <nav class=\"main-nav\">
                    <!-- ***** Logo Start ***** -->
                    <a href=\"{{ path('app_index') }}\" class=\"logo\">
                        <img src=\"assets/images/logo.png\" alt=\"\">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Search End ***** -->
                    <div class=\"search-input\">
                      <form id=\"search\" action=\"#\">
                        <input type=\"text\" placeholder=\"Type Something\" id='searchText' name=\"searchKeyword\" onkeypress=\"handle\" />
                        <i class=\"fa fa-search\"></i>
                      </form>
                    </div>
                    <!-- ***** Search End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class=\"nav\">
                        <li><a href=\"{{ path('app_index')}}\">Home</a></li>
                        <li><a href=\"{{ path('app_browse') }}\">Browse</a></li>
                        <li><a href=\"{{ path('app_details') }}\">Details</a></li>
                        <li><a href=\"{{ path('app_streams') }}\">Streams</a></li>
                        <li><a href=\"profile.html\" class=\"active\">Profile <img src=\"assets/images/profile-header.jpg\" alt=\"\"></a></li>
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"page-content\">

          <!-- ***** Banner Start ***** -->
          <div class=\"row\">
            <div class=\"col-lg-12\">
              <div class=\"main-profile \">
                <div class=\"row\">
                  <div class=\"col-lg-4\">
                    <img src=\"assets/images/profile.jpg\" alt=\"\" style=\"border-radius: 23px;\">
                  </div>
                  <div class=\"col-lg-4 align-self-center\">
                    <div class=\"main-info header-text\">
                      <span>Offline</span>
                      <h4>Alan Smithee</h4>
                      <p>You Haven't Gone Live yet. Go Live By Touching The Button Below.</p>
                      <div class=\"main-border-button\">
                        <a href=\"#\">Start Live Stream</a>
                      </div>
                    </div>
                  </div>
                  <div class=\"col-lg-4 align-self-center\">
                    <ul>
                      <li>Games Downloaded <span>3</span></li>
                      <li>Friends Online <span>16</span></li>
                      <li>Live Streams <span>None</span></li>
                      <li>Clips <span>29</span></li>
                    </ul>
                  </div>
                </div>
                <div class=\"row\">
                  <div class=\"col-lg-12\">
                    <div class=\"clips\">
                      <div class=\"row\">
                        <div class=\"col-lg-12\">
                          <div class=\"heading-section\">
                            <h4><em>Your Most Popular</em> Clips</h4>
                          </div>
                        </div>
                        <div class=\"col-lg-3 col-sm-6\">
                          <div class=\"item\">
                            <div class=\"thumb\">
                              <img src=\"assets/images/clip-01.jpg\" alt=\"\" style=\"border-radius: 23px;\">
                              <a href=\"https://www.youtube.com/watch?v=r1b03uKWk_M\" target=\"_blank\"><i class=\"fa fa-play\"></i></a>
                            </div>
                            <div class=\"down-content\">
                              <h4>First Clip</h4>
                              <span><i class=\"fa fa-eye\"></i> 250</span>
                            </div>
                          </div>
                        </div>
                        <div class=\"col-lg-3 col-sm-6\">
                          <div class=\"item\">
                            <div class=\"thumb\">
                              <img src=\"assets/images/clip-02.jpg\" alt=\"\" style=\"border-radius: 23px;\">
                              <a href=\"https://www.youtube.com/watch?v=r1b03uKWk_M\" target=\"_blank\"><i class=\"fa fa-play\"></i></a>
                            </div>
                            <div class=\"down-content\">
                              <h4>Second Clip</h4>
                              <span><i class=\"fa fa-eye\"></i> 183</span>
                            </div>
                          </div>
                        </div>
                        <div class=\"col-lg-3 col-sm-6\">
                          <div class=\"item\">
                            <div class=\"thumb\">
                              <img src=\"assets/images/clip-03.jpg\" alt=\"\" style=\"border-radius: 23px;\">
                              <a href=\"https://www.youtube.com/watch?v=r1b03uKWk_M\" target=\"_blank\"><i class=\"fa fa-play\"></i></a>
                            </div>
                            <div class=\"down-content\">
                              <h4>Third Clip</h4>
                              <span><i class=\"fa fa-eye\"></i> 141</span>
                            </div>
                          </div>
                        </div>
                        <div class=\"col-lg-3 col-sm-6\">
                          <div class=\"item\">
                            <div class=\"thumb\">
                              <img src=\"assets/images/clip-04.jpg\" alt=\"\" style=\"border-radius: 23px;\">
                              <a href=\"https://www.youtube.com/watch?v=r1b03uKWk_M\" target=\"_blank\"><i class=\"fa fa-play\"></i></a>
                            </div>
                            <div class=\"down-content\">
                              <h4>Fourth Clip</h4>
                              <span><i class=\"fa fa-eye\"></i> 91</span>
                            </div>
                          </div>
                        </div>
                        <div class=\"col-lg-12\">
                          <div class=\"main-button\">
                            <a href=\"#\">Load More Clips</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Banner End ***** -->

          <!-- ***** Gaming Library Start ***** -->
          <div class=\"gaming-library profile-library\">
            <div class=\"col-lg-12\">
              <div class=\"heading-section\">
                <h4><em>Your Gaming</em> Library</h4>
              </div>
              <div class=\"item\">
                <ul>
                  <li><img src=\"assets/images/game-01.jpg\" alt=\"\" class=\"templatemo-item\"></li>
                  <li><h4>Dota 2</h4><span>Sandbox</span></li>
                  <li><h4>Date Added</h4><span>24/08/2036</span></li>
                  <li><h4>Hours Played</h4><span>634 H 22 Mins</span></li>
                  <li><h4>Currently</h4><span>Downloaded</span></li>
                  <li><div class=\"main-border-button border-no-active\"><a href=\"#\">Donwloaded</a></div></li>
                </ul>
              </div>
              <div class=\"item\">
                <ul>
                  <li><img src=\"assets/images/game-02.jpg\" alt=\"\" class=\"templatemo-item\"></li>
                  <li><h4>Fortnite</h4><span>Sandbox</span></li>
                  <li><h4>Date Added</h4><span>22/06/2036</span></li>
                  <li><h4>Hours Played</h4><span>745 H 22 Mins</span></li>
                  <li><h4>Currently</h4><span>Downloaded</span></li>
                  <li><div class=\"main-border-button border-no-active\"><a href=\"#\">Donwloaded</a></div></li>
                </ul>
              </div>
              <div class=\"item last-item\">
                <ul>
                  <li><img src=\"assets/images/game-03.jpg\" alt=\"\" class=\"templatemo-item\"></li>
                  <li><h4>CS-GO</h4><span>Sandbox</span></li>
                  <li><h4>Date Added</h4><span>21/04/2022</span></li>
                  <li><h4>Hours Played</h4><span>632 H 46 Mins</span></li>
                  <li><h4>Currently</h4><span>Downloaded</span></li>
                  <li><div class=\"main-border-button border-no-active\"><a href=\"#\">Donwloaded</a></div></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- ***** Gaming Library End ***** -->
        </div>
      </div>
    </div>
  </div>
  
  <footer>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <p>Copyright © 2036 <a href=\"#\">Cyborg Gaming</a> Company. All rights reserved. 
          
          <br>Design: <a href=\"https://templatemo.com\" target=\"_blank\" title=\"free CSS templates\">TemplateMo</a>  Distributed By <a href=\"https://themewagon.com\" target=\"_blank\" >ThemeWagon</a></p>
        </div>
      </div>
    </div>
  </footer>

{% endblock %}", "admin/profile.html.twig", "C:\\Users\\lenovo\\Desktop\\PIDEV\\GAMI\\web\\front\\templates\\admin\\profile.html.twig");
    }
}
