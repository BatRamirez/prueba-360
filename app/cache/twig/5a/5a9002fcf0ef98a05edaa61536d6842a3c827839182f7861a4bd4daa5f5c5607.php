<?php

/* index.html.twig */
class __TwigTemplate_dd518cb10cdb18bf6842a9731ba4d701bf46c1768bdd8be64b015c989a3e4c03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Inicio";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"quamtum__dot\" id=\"quamtum__target\">
  <div class=\"container\">
    <h2 class=\"sec__title\">
      Quantum dot
      <span>Realismo Redefinido</span>
    </h2>
    <p class=\"sec__description\">
      La avanzada tecnología Quantum dot produce un espectro de mil millones de tonalidades que te ofrece escenas llenas de color.
    </p>
    <img src=\"/img/quantum-dot.png\" alt=\"\" class=\"sec__product quamtum__dot--img\">
  </div>
</div>

<div class=\"rgb__sec\" id=\"rgb__target\">
  <div class=\"container\">
    <h2 class=\"sec__title\">
      RGB
      <span>8.3 Millones de Pixeles de Color</span>
    </h2>
    <p class=\"sec__description\">
      La avanzada tecnología Quantum dot produce un espectro de mil millones de tonalidades que te ofrece escenas llenas de color.
    </p>
    <img src=\"/img/rgb.png\" alt=\"\" class=\"sec__product rgb--img\">
  </div>
</div>

<div class=\"hdr__sec\" id=\"hdr__target\">
  <div class=\"container\">
    <h2 class=\"sec__title\">
      HDR
      <span>8.3 Millones de Pixeles de Color</span>
    </h2>
    <p class=\"sec__description\">
      Deleita tus ojos con una gama de un millón de colores. Desde aguas azul claro hasta ardientes tonalidades de una puesta de sol.
      Desde las sombras más oscuras al blanco esponjoso de las nubes.
    </p>
    <img src=\"/img/hdr.png\" alt=\"\" class=\"sec__product hdr__img\">
  </div>
</div>

<div class=\"uhd__sec\" id=\"uhd__target\">
  <div class=\"container\">
    <h2 class=\"sec__title\">
      UHD 4K
      <span>8.3 Millones de Pixeles de Color</span>
    </h2>
    <p class=\"sec__description\">
      Desde las 800 líneas de los primeros televisores SD, pasando por los primeros HD con 1080 px o la tecnología actual Full HD con 1920 px, con 3.840 x 2.160 pixeles logramos imágenes mucho mas detalladas.
    </p>
  </div>
  <img src=\"/img/uhd.png\" alt=\"\" class=\"uhd__custom--img\">
  <div class=\"container\">
    <h2 class=\"sec__title text-center\" id=\"smarthub__target\">
      <span>Busca menos, disfruta más</span>
      Smart Hub
    </h2>
    <p class=\"sec__description\">
      Diseñado para usarse con facilidad, incluso configurar la televisión no podría ser más sencillo.
    </p>
  </div>
</div>

<div class=\"one__remote--sec\" id=\"oneremote__target\">
  <img src=\"/img/oneremote-sites.png\" alt=\"\" class=\"oneremote--sites\">
  <div class=\"container\">
    <h2 class=\"sec__title\">
      <span>Adiós a los multiples controles</span>
    </h2>
    <p class=\"sec__description\">
      Los días de cambiar los controles remotos para tus diferentes dispositivos conectados quedaron atrás, el One Remote de Samsung es lo único que necesitas para ir hacia atrás y hacia adelante
    </p>
  </div>
  <img src=\"/img/oneromte-hand.png\" alt=\"\" class=\"oneremote--hand\">
  <div class=\"container custom__container\">
    <h2 class=\"sec__title custom__title\">
      One Remote
      <span>Deja de Adivinar</span>
    </h2>
    <p class=\"sec__description\">
      Al conectar un dispositivo por HDMI, tu Smart TV detecta automáticamente el dispositivo y te indica qué es mediante íconos y nombres.
    </p>
  </div>
</div>

<div class=\"smart__view\">
  <div class=\"container\">
    <img src=\"/img/smart-view.png\" alt=\"\" class=\"smart__view--img\">
    <h2 class=\"sec__title text-center smart__custom--title\">
      <span>COMPARTE FÁCILMENTE</span>
    </h2>
    <p class=\"sec__description\">
      Con Smart View, compartir contenido directamente desde tu dispositivo es tan simple como tocar dos veces la pantalla de tu smartphone, tablet o PC y disfrutar fotos, videos y música en tu TV.
    </p>
  </div>
</div>

<div class=\"curved__sec\" id=\"curved__target\">
  <div class=\"container\">
    <h2 class=\"sec__title curved__title\">
      Curved
      <span>Experiencia de visión envolvente</span>
    </h2>
    <p class=\"sec__description\">
      La avanzada tecnología Quantum dot produce un espectro de mil millones de tonalidades que te ofrece escenas llenas de color.
    </p>
    <img src=\"/img/curved-1.png\" alt=\"\" class=\"sec__product curved--img\">
    <h2 class=\"sec__title curved__title\">
      <span>adiós al 3d</span>
    </h2>
    <p class=\"sec__description\">
      Los días de cambiar los controles remotos para tus diferentes dispositivos conectados quedaron atrás, el One Remote de Samsung es lo único que necesitas para ir hacia atrás y hacia adelante
    </p>
    <img src=\"/img/curved-2.png\" alt=\"\" class=\"sec__product curved--img\">
    <p class=\"sec__description\">
      Con una pantalla curva, los ojos tienen una distancia de visión uniforme que ajusta la distancia del ojo a la pantalla en tu campo de visión completo. El resultado es una visión más cómoda para tus ojos en comparación con una pantalla plana.
    </p>
    <img src=\"/img/curved-3.png\" alt=\"\" class=\"sec__product curved--img__second\">
  </div>
</div>

<div class=\"rotate__sec\" id=\"rotate__target\">
  <div class=\"container\">
    <h2 class=\"sec__title\">
      Diseño sin Límite
      <span>diseño 360</span>
    </h2>
    <p class=\"sec__description\">
      Su discreta base apenas puede verse, creando la sensación de una pantalla que flota. Al eliminar materiales innecesarios alrededor del borde de la pantalla e incorporar un soporte delgado y resistente, Samsung creó un atractivo televisor que deleita visualmente a todos.
    </p>
    <div class=\"threesixty product1\">
        <div class=\"spinner\">
            <span>0%</span>
        </div>
        <ol class=\"threesixty_images\"></ol>
        <img src=\"/img/360.png\" alt=\"\" class=\"img__rotate\">
    </div>
  </div>
</div>


";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "base.html.twig"%}*/
/* {% block title %}Inicio{% endblock %}*/
/* {% block body %}*/
/* */
/* <div class="quamtum__dot" id="quamtum__target">*/
/*   <div class="container">*/
/*     <h2 class="sec__title">*/
/*       Quantum dot*/
/*       <span>Realismo Redefinido</span>*/
/*     </h2>*/
/*     <p class="sec__description">*/
/*       La avanzada tecnología Quantum dot produce un espectro de mil millones de tonalidades que te ofrece escenas llenas de color.*/
/*     </p>*/
/*     <img src="/img/quantum-dot.png" alt="" class="sec__product quamtum__dot--img">*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="rgb__sec" id="rgb__target">*/
/*   <div class="container">*/
/*     <h2 class="sec__title">*/
/*       RGB*/
/*       <span>8.3 Millones de Pixeles de Color</span>*/
/*     </h2>*/
/*     <p class="sec__description">*/
/*       La avanzada tecnología Quantum dot produce un espectro de mil millones de tonalidades que te ofrece escenas llenas de color.*/
/*     </p>*/
/*     <img src="/img/rgb.png" alt="" class="sec__product rgb--img">*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="hdr__sec" id="hdr__target">*/
/*   <div class="container">*/
/*     <h2 class="sec__title">*/
/*       HDR*/
/*       <span>8.3 Millones de Pixeles de Color</span>*/
/*     </h2>*/
/*     <p class="sec__description">*/
/*       Deleita tus ojos con una gama de un millón de colores. Desde aguas azul claro hasta ardientes tonalidades de una puesta de sol.*/
/*       Desde las sombras más oscuras al blanco esponjoso de las nubes.*/
/*     </p>*/
/*     <img src="/img/hdr.png" alt="" class="sec__product hdr__img">*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="uhd__sec" id="uhd__target">*/
/*   <div class="container">*/
/*     <h2 class="sec__title">*/
/*       UHD 4K*/
/*       <span>8.3 Millones de Pixeles de Color</span>*/
/*     </h2>*/
/*     <p class="sec__description">*/
/*       Desde las 800 líneas de los primeros televisores SD, pasando por los primeros HD con 1080 px o la tecnología actual Full HD con 1920 px, con 3.840 x 2.160 pixeles logramos imágenes mucho mas detalladas.*/
/*     </p>*/
/*   </div>*/
/*   <img src="/img/uhd.png" alt="" class="uhd__custom--img">*/
/*   <div class="container">*/
/*     <h2 class="sec__title text-center" id="smarthub__target">*/
/*       <span>Busca menos, disfruta más</span>*/
/*       Smart Hub*/
/*     </h2>*/
/*     <p class="sec__description">*/
/*       Diseñado para usarse con facilidad, incluso configurar la televisión no podría ser más sencillo.*/
/*     </p>*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="one__remote--sec" id="oneremote__target">*/
/*   <img src="/img/oneremote-sites.png" alt="" class="oneremote--sites">*/
/*   <div class="container">*/
/*     <h2 class="sec__title">*/
/*       <span>Adiós a los multiples controles</span>*/
/*     </h2>*/
/*     <p class="sec__description">*/
/*       Los días de cambiar los controles remotos para tus diferentes dispositivos conectados quedaron atrás, el One Remote de Samsung es lo único que necesitas para ir hacia atrás y hacia adelante*/
/*     </p>*/
/*   </div>*/
/*   <img src="/img/oneromte-hand.png" alt="" class="oneremote--hand">*/
/*   <div class="container custom__container">*/
/*     <h2 class="sec__title custom__title">*/
/*       One Remote*/
/*       <span>Deja de Adivinar</span>*/
/*     </h2>*/
/*     <p class="sec__description">*/
/*       Al conectar un dispositivo por HDMI, tu Smart TV detecta automáticamente el dispositivo y te indica qué es mediante íconos y nombres.*/
/*     </p>*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="smart__view">*/
/*   <div class="container">*/
/*     <img src="/img/smart-view.png" alt="" class="smart__view--img">*/
/*     <h2 class="sec__title text-center smart__custom--title">*/
/*       <span>COMPARTE FÁCILMENTE</span>*/
/*     </h2>*/
/*     <p class="sec__description">*/
/*       Con Smart View, compartir contenido directamente desde tu dispositivo es tan simple como tocar dos veces la pantalla de tu smartphone, tablet o PC y disfrutar fotos, videos y música en tu TV.*/
/*     </p>*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="curved__sec" id="curved__target">*/
/*   <div class="container">*/
/*     <h2 class="sec__title curved__title">*/
/*       Curved*/
/*       <span>Experiencia de visión envolvente</span>*/
/*     </h2>*/
/*     <p class="sec__description">*/
/*       La avanzada tecnología Quantum dot produce un espectro de mil millones de tonalidades que te ofrece escenas llenas de color.*/
/*     </p>*/
/*     <img src="/img/curved-1.png" alt="" class="sec__product curved--img">*/
/*     <h2 class="sec__title curved__title">*/
/*       <span>adiós al 3d</span>*/
/*     </h2>*/
/*     <p class="sec__description">*/
/*       Los días de cambiar los controles remotos para tus diferentes dispositivos conectados quedaron atrás, el One Remote de Samsung es lo único que necesitas para ir hacia atrás y hacia adelante*/
/*     </p>*/
/*     <img src="/img/curved-2.png" alt="" class="sec__product curved--img">*/
/*     <p class="sec__description">*/
/*       Con una pantalla curva, los ojos tienen una distancia de visión uniforme que ajusta la distancia del ojo a la pantalla en tu campo de visión completo. El resultado es una visión más cómoda para tus ojos en comparación con una pantalla plana.*/
/*     </p>*/
/*     <img src="/img/curved-3.png" alt="" class="sec__product curved--img__second">*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="rotate__sec" id="rotate__target">*/
/*   <div class="container">*/
/*     <h2 class="sec__title">*/
/*       Diseño sin Límite*/
/*       <span>diseño 360</span>*/
/*     </h2>*/
/*     <p class="sec__description">*/
/*       Su discreta base apenas puede verse, creando la sensación de una pantalla que flota. Al eliminar materiales innecesarios alrededor del borde de la pantalla e incorporar un soporte delgado y resistente, Samsung creó un atractivo televisor que deleita visualmente a todos.*/
/*     </p>*/
/*     <div class="threesixty product1">*/
/*         <div class="spinner">*/
/*             <span>0%</span>*/
/*         </div>*/
/*         <ol class="threesixty_images"></ol>*/
/*         <img src="/img/360.png" alt="" class="img__rotate">*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
