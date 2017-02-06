<?php

/* base.html.twig */
class __TwigTemplate_0308920c547a1f2c03bbd4ad729a138b36781007d1a9f39a8a27253338012cee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'scripts' => array($this, 'block_scripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["title_config"] = "Titulo";
        // line 2
        $context["description"] = "Descripcion del sitio";
        // line 3
        $context["url"] = "http://urldelsitio.com/";
        // line 4
        $context["locale"] = "es_CR";
        // line 5
        echo "
<!doctype html>
<html class=\"no-js\" lang=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "_"), 0, array(), "array"), "html", null, true);
        echo "\">

  <head>
    <meta charset=\"utf-8\">
    <meta content=\"ie=edge\" http-equiv=\"x-ua-compatible\">
    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta content=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : $this->getContext($context, "description")), "html", null, true);
        echo "\" name=\"description\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\">
    <!--  -->
    <meta content=\"#286577\" name=\"apple-mobile-web-app-status-bar-style\">
    <meta content=\"#286577\" name=\"theme-color\">
    <meta content=\"#286577\" name=\"msapplication-TileColor\">
    <meta content=\"#286577\" name=\"msapplication-navbutton-color\"/>
    <!-- Meta de idioma -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\" hreflang=\"es\" rel=\"alternate\"/>

    <!-- Social share -->
    <meta content=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["title_config"]) ? $context["title_config"] : $this->getContext($context, "title_config")), "html", null, true);
        echo "\" property=\"og:site_name\"/>
    <meta content=\"website\" property=\"og:type\"/>
    <meta content=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
        echo "\" property=\"og:locale\"/>
    <meta content=\"https://www.facebook.com/lumenup\" property=\"article:author\"/>
    <meta content=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "/img/social/social.jpg\" property=\"og:image\"/>
    <meta content=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : $this->getContext($context, "description")), "html", null, true);
        echo "\" property=\"og:description\"/>
    <!-- Place favicon.ico in the root directory -->
    <link href=\"/apple-touch-icon.png\" rel=\"apple-touch-icon\">
    <link href=\"/apple-icon-57x57.png\" rel=\"apple-touch-icon\" sizes=\"57x57\">
    <link href=\"/apple-icon-60x60.png\" rel=\"apple-touch-icon\" sizes=\"60x60\">
    <link href=\"/apple-icon-72x72.png\" rel=\"apple-touch-icon\" sizes=\"72x72\">
    <link href=\"/apple-icon-76x76.png\" rel=\"apple-touch-icon\" sizes=\"76x76\">
    <link href=\"/apple-icon-114x114.png\" rel=\"apple-touch-icon\" sizes=\"114x114\">
    <link href=\"/apple-icon-120x120.png\" rel=\"apple-touch-icon\" sizes=\"120x120\">
    <link href=\"/apple-icon-144x144.png\" rel=\"apple-touch-icon\" sizes=\"144x144\">
    <link href=\"/apple-icon-152x152.png\" rel=\"apple-touch-icon\" sizes=\"152x152\">
    <link href=\"/apple-icon-180x180.png\" rel=\"apple-touch-icon\" sizes=\"180x180\">
    <meta content=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["title_config"]) ? $context["title_config"] : $this->getContext($context, "title_config")), "html", null, true);
        echo "\" name=\"apple-mobile-web-app-title_config\">
    <link href=\"/android-icon-192x192.png\" rel=\"icon\" sizes=\"192x192\" type=\"image/png\">
    <link href=\"/favicon-32x32.png\" rel=\"icon\" sizes=\"32x32\" type=\"image/png\">
    <link href=\"/favicon-96x96.png\" rel=\"icon\" sizes=\"96x96\" type=\"image/png\">
    <link href=\"/favicon-16x16.png\" rel=\"icon\" sizes=\"16x16\" type=\"image/png\">
    <meta content=\"";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["title_config"]) ? $context["title_config"] : $this->getContext($context, "title_config")), "html", null, true);
        echo "\" name=\"application-name\"/>
    <link href=\"/manifest.json\" rel=\"manifest\">
    <meta content=\"/ms-icon-144x144.png\" name=\"msapplication-TileImage\">

    <link href=\"/css/main.css\" rel=\"stylesheet\">
    <link href=\"/css/tablets.css\" media=\"screen and (min-width:768px)\" rel=\"stylesheet\">
    <link href=\"/css/desktop.css\" media=\"screen and (min-width:992px)\" rel=\"stylesheet\">
    <link href=\"/css/large.css\" media=\"screen and (min-width:1200px)\" rel=\"stylesheet\">
    ";
        // line 54
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 56
        echo "    <script src=\"/js/vendor/modernizr-2.8.3.min.js\"></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
    <script>
      window.jQuery || document.write('<script src=\"/js/vendor/jquery-1.11.3.min.js\"><\\/script>')
    </script>
    <script src=\"/js/vendor/threesixty.min.js\"></script>
    <script src=\"/js/plugins.js\"></script>
    <script src=\"/js/main.js\"></script>
    ";
        // line 64
        $this->displayBlock('scripts', $context, $blocks);
        // line 66
        echo "    <script>
      var URLBase = \"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "\";
    </script>
  </head>
  <body class=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), "html", null, true);
        echo "\">
    <!--[if lt IE 8]> <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p> <![endif]-->
    <!-- Add your site or application content here -->

    <header class=\"clearfix\">
      <img src=\"/img/blue-logo.png\" alt=\"\" class=\"header__logo\">
      <div class=\"header__ham--menu\">
        <a class=\"js--show_menu\">
          <span></span>
        </a>
      </div>
      <div class=\"header__menu\">
        <ul>
          <li><a href=\"#quamtum__target\" class=\"trigger__link\">Quantum Dot</a></li>
          <li><a href=\"#rgb__target\" class=\"trigger__link\">RGB</a></li>
          <li><a href=\"#hdr__target\" class=\"trigger__link\">HDR</a></li>
          <li><a href=\"#uhd__target\" class=\"trigger__link\">UHD 4K</a></li>
          <li><a href=\"#smarthub__target\" class=\"trigger__link\">Smart Hub</a></li>
          <li><a href=\"#oneremote__target\" class=\"trigger__link\">One Remote</a></li>
          <li><a href=\"#curved__target\" class=\"trigger__link\">Curved</a></li>
          <li><a href=\"#rotate__target\" class=\"trigger__link no-padding\">Diseño <span>sin límite</span></a></li>
        </ul>
      </div>
    </header>

    <div class=\"global__wrap\">
      ";
        // line 96
        $this->displayBlock('body', $context, $blocks);
        // line 98
        echo "    </div>

    <footer class=\"text-center\">
      <div class=\"container-fluid footer__menu\">
        <div class=\"row\">
          <div class=\"col-md-12 footer__col\">
            <a href=\"\">QUANTUM DOT</a>
          </div>
          <div class=\"col-md-12 footer__col\">
            <a href=\"\">RGB</a>
          </div>
          <div class=\"col-md-12 footer__col\">
            <a href=\"\">HDR</a>
          </div>
          <div class=\"col-md-12 footer__col\">
            <a href=\"\">UHD 4K</a>
          </div>
          <div class=\"col-md-12 footer__col\">
            <a href=\"\">SMART HUB</a>
          </div>
          <div class=\"col-md-12 footer__col\">
            <a href=\"\">ONE REMOTE</a>
          </div>
          <div class=\"col-md-12 footer__col\">
            <a href=\"\">CURVED</a>
          </div>
          <div class=\"col-md-12 footer__col\">
            <a href=\"\">DISEÑO SIN LÍMITE</a>
          </div>
        </div>
      </div>
      <div class=\"footer__social\">
        <a href=\"\">
          <img src=\"/img/social/fb.png\" alt=\"\">
        </a>
        <a href=\"\">
          <img src=\"/img/social/ig.png\" alt=\"\">
        </a>
        <a href=\"\">
          <img src=\"/img/social/tw.png\" alt=\"\">
        </a>
        <a href=\"\">
          <img src=\"/img/social/yt.png\" alt=\"\">
        </a>
        <a href=\"\">
          <img src=\"/img/social/share.png\" alt=\"\">
        </a>
      </div>
      <div class=\"footer__logo\">
        <img src=\"/img/white-logo.png\" alt=\"\">
      </div>
    </footer>

  </body>
</html>
";
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
    }

    // line 54
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 55
        echo "    ";
    }

    // line 64
    public function block_scripts($context, array $blocks = array())
    {
        // line 65
        echo "    ";
    }

    // line 96
    public function block_body($context, array $blocks = array())
    {
        // line 97
        echo "      ";
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
        return array (  247 => 97,  244 => 96,  240 => 65,  237 => 64,  233 => 55,  230 => 54,  225 => 12,  166 => 98,  164 => 96,  135 => 70,  129 => 67,  126 => 66,  124 => 64,  114 => 56,  112 => 54,  101 => 46,  93 => 41,  78 => 29,  74 => 28,  69 => 26,  64 => 24,  58 => 21,  47 => 13,  43 => 12,  35 => 7,  31 => 5,  29 => 4,  27 => 3,  25 => 2,  23 => 1,);
    }
}
/* {% set title_config = "Titulo" %}*/
/* {% set description = "Descripcion del sitio" %}*/
/* {% set url = "http://urldelsitio.com/" %}*/
/* {% set locale = "es_CR" %}{# localizacion #}*/
/* */
/* <!doctype html>*/
/* <html class="no-js" lang="{{ app.request.locale|split('_')[0] }}">*/
/* */
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta content="ie=edge" http-equiv="x-ua-compatible">*/
/*     <title>{% block title %}{% endblock %}</title>*/
/*     <meta content="{{ description }}" name="description">*/
/*     <meta content="width=device-width, initial-scale=1" name="viewport">*/
/*     <!--  -->*/
/*     <meta content="#286577" name="apple-mobile-web-app-status-bar-style">*/
/*     <meta content="#286577" name="theme-color">*/
/*     <meta content="#286577" name="msapplication-TileColor">*/
/*     <meta content="#286577" name="msapplication-navbutton-color"/>*/
/*     <!-- Meta de idioma -->*/
/*     <link href="{{ url }}" hreflang="es" rel="alternate"/>*/
/* */
/*     <!-- Social share -->*/
/*     <meta content="{{ title_config }}" property="og:site_name"/>*/
/*     <meta content="website" property="og:type"/>*/
/*     <meta content="{{ locale }}" property="og:locale"/>*/
/*     <meta content="https://www.facebook.com/lumenup" property="article:author"/>*/
/*     <meta content="{{ url }}/img/social/social.jpg" property="og:image"/>*/
/*     <meta content="{{ description }}" property="og:description"/>*/
/*     <!-- Place favicon.ico in the root directory -->*/
/*     <link href="/apple-touch-icon.png" rel="apple-touch-icon">*/
/*     <link href="/apple-icon-57x57.png" rel="apple-touch-icon" sizes="57x57">*/
/*     <link href="/apple-icon-60x60.png" rel="apple-touch-icon" sizes="60x60">*/
/*     <link href="/apple-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">*/
/*     <link href="/apple-icon-76x76.png" rel="apple-touch-icon" sizes="76x76">*/
/*     <link href="/apple-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">*/
/*     <link href="/apple-icon-120x120.png" rel="apple-touch-icon" sizes="120x120">*/
/*     <link href="/apple-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">*/
/*     <link href="/apple-icon-152x152.png" rel="apple-touch-icon" sizes="152x152">*/
/*     <link href="/apple-icon-180x180.png" rel="apple-touch-icon" sizes="180x180">*/
/*     <meta content="{{ title_config }}" name="apple-mobile-web-app-title_config">*/
/*     <link href="/android-icon-192x192.png" rel="icon" sizes="192x192" type="image/png">*/
/*     <link href="/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png">*/
/*     <link href="/favicon-96x96.png" rel="icon" sizes="96x96" type="image/png">*/
/*     <link href="/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png">*/
/*     <meta content="{{ title_config }}" name="application-name"/>*/
/*     <link href="/manifest.json" rel="manifest">*/
/*     <meta content="/ms-icon-144x144.png" name="msapplication-TileImage">*/
/* */
/*     <link href="/css/main.css" rel="stylesheet">*/
/*     <link href="/css/tablets.css" media="screen and (min-width:768px)" rel="stylesheet">*/
/*     <link href="/css/desktop.css" media="screen and (min-width:992px)" rel="stylesheet">*/
/*     <link href="/css/large.css" media="screen and (min-width:1200px)" rel="stylesheet">*/
/*     {% block stylesheets %}*/
/*     {% endblock %}*/
/*     <script src="/js/vendor/modernizr-2.8.3.min.js"></script>*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/*     <script>*/
/*       window.jQuery || document.write('<script src="/js/vendor/jquery-1.11.3.min.js"><\/script>')*/
/*     </script>*/
/*     <script src="/js/vendor/threesixty.min.js"></script>*/
/*     <script src="/js/plugins.js"></script>*/
/*     <script src="/js/main.js"></script>*/
/*     {% block scripts %}*/
/*     {% endblock %}*/
/*     <script>*/
/*       var URLBase = "{{ app.request.getBaseURL() }}";*/
/*     </script>*/
/*   </head>*/
/*   <body class="{{ app.request.attributes.get('_route') }}">*/
/*     <!--[if lt IE 8]> <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p> <![endif]-->*/
/*     <!-- Add your site or application content here -->*/
/* */
/*     <header class="clearfix">*/
/*       <img src="/img/blue-logo.png" alt="" class="header__logo">*/
/*       <div class="header__ham--menu">*/
/*         <a class="js--show_menu">*/
/*           <span></span>*/
/*         </a>*/
/*       </div>*/
/*       <div class="header__menu">*/
/*         <ul>*/
/*           <li><a href="#quamtum__target" class="trigger__link">Quantum Dot</a></li>*/
/*           <li><a href="#rgb__target" class="trigger__link">RGB</a></li>*/
/*           <li><a href="#hdr__target" class="trigger__link">HDR</a></li>*/
/*           <li><a href="#uhd__target" class="trigger__link">UHD 4K</a></li>*/
/*           <li><a href="#smarthub__target" class="trigger__link">Smart Hub</a></li>*/
/*           <li><a href="#oneremote__target" class="trigger__link">One Remote</a></li>*/
/*           <li><a href="#curved__target" class="trigger__link">Curved</a></li>*/
/*           <li><a href="#rotate__target" class="trigger__link no-padding">Diseño <span>sin límite</span></a></li>*/
/*         </ul>*/
/*       </div>*/
/*     </header>*/
/* */
/*     <div class="global__wrap">*/
/*       {% block body %}*/
/*       {% endblock %}*/
/*     </div>*/
/* */
/*     <footer class="text-center">*/
/*       <div class="container-fluid footer__menu">*/
/*         <div class="row">*/
/*           <div class="col-md-12 footer__col">*/
/*             <a href="">QUANTUM DOT</a>*/
/*           </div>*/
/*           <div class="col-md-12 footer__col">*/
/*             <a href="">RGB</a>*/
/*           </div>*/
/*           <div class="col-md-12 footer__col">*/
/*             <a href="">HDR</a>*/
/*           </div>*/
/*           <div class="col-md-12 footer__col">*/
/*             <a href="">UHD 4K</a>*/
/*           </div>*/
/*           <div class="col-md-12 footer__col">*/
/*             <a href="">SMART HUB</a>*/
/*           </div>*/
/*           <div class="col-md-12 footer__col">*/
/*             <a href="">ONE REMOTE</a>*/
/*           </div>*/
/*           <div class="col-md-12 footer__col">*/
/*             <a href="">CURVED</a>*/
/*           </div>*/
/*           <div class="col-md-12 footer__col">*/
/*             <a href="">DISEÑO SIN LÍMITE</a>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <div class="footer__social">*/
/*         <a href="">*/
/*           <img src="/img/social/fb.png" alt="">*/
/*         </a>*/
/*         <a href="">*/
/*           <img src="/img/social/ig.png" alt="">*/
/*         </a>*/
/*         <a href="">*/
/*           <img src="/img/social/tw.png" alt="">*/
/*         </a>*/
/*         <a href="">*/
/*           <img src="/img/social/yt.png" alt="">*/
/*         </a>*/
/*         <a href="">*/
/*           <img src="/img/social/share.png" alt="">*/
/*         </a>*/
/*       </div>*/
/*       <div class="footer__logo">*/
/*         <img src="/img/white-logo.png" alt="">*/
/*       </div>*/
/*     </footer>*/
/* */
/*   </body>*/
/* </html>*/
/* */
