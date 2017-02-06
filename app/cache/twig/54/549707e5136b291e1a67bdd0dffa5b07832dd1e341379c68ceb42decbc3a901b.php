<?php

/* index.html.twig */
class __TwigTemplate_c8edac06e8307df6ddbeb054d41917fe9c049e429093b6b3794013a6234f48b5 extends Twig_Template
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
      Lorem
    </h2>
    <p class=\"sec__description\">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus pariatur ut, quos nesciunt dolorum. Quidem, dolores. Natus obcaecati iste aut quibusdam velit possimus temporibus, deserunt architecto numquam. Eligendi, unde dicta.
    </p>
  </div>
</div>

<div class=\"rgb__sec\" id=\"rgb__target\">
  <div class=\"container\">
    <h2 class=\"sec__title\">
      Lorem
    </h2>
    <p class=\"sec__description\">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus pariatur ut, quos nesciunt dolorum. Quidem, dolores. Natus obcaecati iste aut quibusdam velit possimus temporibus, deserunt architecto numquam. Eligendi, unde dicta.
    </p>
  </div>
</div>

<div class=\"hdr__sec\" id=\"hdr__target\">
  <div class=\"container\">
    <h2 class=\"sec__title\">
      Lorem
    </h2>
    <p class=\"sec__description\">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus pariatur ut, quos nesciunt dolorum. Quidem, dolores. Natus obcaecati iste aut quibusdam velit possimus temporibus, deserunt architecto numquam. Eligendi, unde dicta.
    </p>
  </div>
</div>

<div class=\"uhd__sec\" id=\"uhd__target\">
  <div class=\"container\">
    <h2 class=\"sec__title\">
      Lorem
    </h2>
    <p class=\"sec__description\">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus pariatur ut, quos nesciunt dolorum. Quidem, dolores. Natus obcaecati iste aut quibusdam velit possimus temporibus, deserunt architecto numquam. Eligendi, unde dicta.
    </p>
  </div>
  <div class=\"container\">
    <h2 class=\"sec__title text-center\" id=\"smarthub__target\">
      Lorem
    </h2>
    <p class=\"sec__description\">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus pariatur ut, quos nesciunt dolorum. Quidem, dolores. Natus obcaecati iste aut quibusdam velit possimus temporibus, deserunt architecto numquam. Eligendi, unde dicta.
    </p>
  </div>
</div>

<div class=\"one__remote--sec\" id=\"oneremote__target\">
  <div class=\"container\">
    <h2 class=\"sec__title\">
      Lorem
    </h2>
    <p class=\"sec__description\">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus pariatur ut, quos nesciunt dolorum. Quidem, dolores. Natus obcaecati iste aut quibusdam velit possimus temporibus, deserunt architecto numquam. Eligendi, unde dicta.
    </p>
  </div>
  <div class=\"container custom__container\">
    <h2 class=\"sec__title custom__title\">
      Lorem
    </h2>
    <p class=\"sec__description\">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus pariatur ut, quos nesciunt dolorum. Quidem, dolores. Natus obcaecati iste aut quibusdam velit possimus temporibus, deserunt architecto numquam. Eligendi, unde dicta.
    </p>
  </div>
</div>

<div class=\"smart__view\">
  <div class=\"container\">
    <h2 class=\"sec__title text-center smart__custom--title\">
      Lorem
    </h2>
    <p class=\"sec__description\">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus pariatur ut, quos nesciunt dolorum. Quidem, dolores. Natus obcaecati iste aut quibusdam velit possimus temporibus, deserunt architecto numquam. Eligendi, unde dicta.
    </p>
  </div>
</div>

<div class=\"rotate__sec\" id=\"rotate__target\">
  <div class=\"container\">
    <h2 class=\"sec__title\">
      Lorem
      <span>diseño 360</span>
    </h2>
    <p class=\"sec__description\">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus pariatur ut, quos nesciunt dolorum. Quidem, dolores. Natus obcaecati iste aut quibusdam velit possimus temporibus, deserunt architecto numquam. Eligendi, unde dicta.
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
/*       Lorem*/
/*     </h2>*/
/*     <p class="sec__description">*/
/*       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus pariatur ut, quos nesciunt dolorum. Quidem, dolores. Natus obcaecati iste aut quibusdam velit possimus temporibus, deserunt architecto numquam. Eligendi, unde dicta.*/
/*     </p>*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="rgb__sec" id="rgb__target">*/
/*   <div class="container">*/
/*     <h2 class="sec__title">*/
/*       Lorem*/
/*     </h2>*/
/*     <p class="sec__description">*/
/*       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus pariatur ut, quos nesciunt dolorum. Quidem, dolores. Natus obcaecati iste aut quibusdam velit possimus temporibus, deserunt architecto numquam. Eligendi, unde dicta.*/
/*     </p>*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="hdr__sec" id="hdr__target">*/
/*   <div class="container">*/
/*     <h2 class="sec__title">*/
/*       Lorem*/
/*     </h2>*/
/*     <p class="sec__description">*/
/*       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus pariatur ut, quos nesciunt dolorum. Quidem, dolores. Natus obcaecati iste aut quibusdam velit possimus temporibus, deserunt architecto numquam. Eligendi, unde dicta.*/
/*     </p>*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="uhd__sec" id="uhd__target">*/
/*   <div class="container">*/
/*     <h2 class="sec__title">*/
/*       Lorem*/
/*     </h2>*/
/*     <p class="sec__description">*/
/*       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus pariatur ut, quos nesciunt dolorum. Quidem, dolores. Natus obcaecati iste aut quibusdam velit possimus temporibus, deserunt architecto numquam. Eligendi, unde dicta.*/
/*     </p>*/
/*   </div>*/
/*   <div class="container">*/
/*     <h2 class="sec__title text-center" id="smarthub__target">*/
/*       Lorem*/
/*     </h2>*/
/*     <p class="sec__description">*/
/*       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus pariatur ut, quos nesciunt dolorum. Quidem, dolores. Natus obcaecati iste aut quibusdam velit possimus temporibus, deserunt architecto numquam. Eligendi, unde dicta.*/
/*     </p>*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="one__remote--sec" id="oneremote__target">*/
/*   <div class="container">*/
/*     <h2 class="sec__title">*/
/*       Lorem*/
/*     </h2>*/
/*     <p class="sec__description">*/
/*       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus pariatur ut, quos nesciunt dolorum. Quidem, dolores. Natus obcaecati iste aut quibusdam velit possimus temporibus, deserunt architecto numquam. Eligendi, unde dicta.*/
/*     </p>*/
/*   </div>*/
/*   <div class="container custom__container">*/
/*     <h2 class="sec__title custom__title">*/
/*       Lorem*/
/*     </h2>*/
/*     <p class="sec__description">*/
/*       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus pariatur ut, quos nesciunt dolorum. Quidem, dolores. Natus obcaecati iste aut quibusdam velit possimus temporibus, deserunt architecto numquam. Eligendi, unde dicta.*/
/*     </p>*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="smart__view">*/
/*   <div class="container">*/
/*     <h2 class="sec__title text-center smart__custom--title">*/
/*       Lorem*/
/*     </h2>*/
/*     <p class="sec__description">*/
/*       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus pariatur ut, quos nesciunt dolorum. Quidem, dolores. Natus obcaecati iste aut quibusdam velit possimus temporibus, deserunt architecto numquam. Eligendi, unde dicta.*/
/*     </p>*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="rotate__sec" id="rotate__target">*/
/*   <div class="container">*/
/*     <h2 class="sec__title">*/
/*       Lorem*/
/*       <span>diseño 360</span>*/
/*     </h2>*/
/*     <p class="sec__description">*/
/*       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus pariatur ut, quos nesciunt dolorum. Quidem, dolores. Natus obcaecati iste aut quibusdam velit possimus temporibus, deserunt architecto numquam. Eligendi, unde dicta.*/
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
