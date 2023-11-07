<?php

class __Mustache_56f0afbfe1e5cfc082ee10e3f5d4d9c1 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('theme_moove/head')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<body ';
        $value = $this->resolveValue($context->find('bodyattributes'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '>
';
        if ($partial = $this->mustache->loadPartial('core/local/toast/wrapper')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="page-wrapper">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.standard_top_of_body_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    <div class="slider-container">
';
        $buffer .= $indent . '        <div class="slider">
';
        $buffer .= $indent . '            <div class="slide"><img src="../Assets/Images/Banner.png" alt="Image 1"></div>
';
        $buffer .= $indent . '            <div class="slide"><img src="../Assets/Images/Banner02.png" alt="Image 2"></div>
';
        $buffer .= $indent . '            <div class="slide"><img src="../Assets/Images/Banner02.png" alt="Image 3"></div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="slider-nav">
';
        $buffer .= $indent . '            <div class="dot" data-slide="0"></div>
';
        $buffer .= $indent . '            <div class="dot" data-slide="1"></div>
';
        $buffer .= $indent . '            <div class="dot" data-slide="2"></div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div id="page" class="container-fluid mt-0">
';
        $buffer .= $indent . '        <div id="page-content" class="row">
';
        $buffer .= $indent . '            <div id="region-main-box" class="col-12">
';
        $buffer .= $indent . '                <section id="region-main" class="col-12 h-100" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section6b403a6a78537640b9e04a931aeb6463($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                    <div class="login-wrapper inicio_sesion">
';
        $buffer .= $indent . '                        <div class="login-container">
';
        $buffer .= $indent . '                            ';
        $value = $this->resolveValue($context->findDot('output.main_content'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </section>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="d-none">
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.standard_footer_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<script>
';
        $buffer .= $indent . 'document.addEventListener(\'DOMContentLoaded\', function() {
';
        $buffer .= $indent . '  const slider = document.querySelector(\'.slider\');
';
        $buffer .= $indent . '  const slides = document.querySelectorAll(\'.slide\');
';
        $buffer .= $indent . '  const dots = document.querySelectorAll(\'.dot\');
';
        $buffer .= $indent . '  let currentIndex = 0;
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  const updateSlider = () => {
';
        $buffer .= $indent . '    slides.forEach((slide, index) => {
';
        $buffer .= $indent . '      if (index === currentIndex) {
';
        $buffer .= $indent . '        slide.classList.add(\'active\');
';
        $buffer .= $indent . '      } else {
';
        $buffer .= $indent . '        slide.classList.remove(\'active\');
';
        $buffer .= $indent . '      }
';
        $buffer .= $indent . '    });
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    dots.forEach((dot, index) => {
';
        $buffer .= $indent . '      if (index === currentIndex) {
';
        $buffer .= $indent . '        dot.classList.add(\'active\');
';
        $buffer .= $indent . '      } else {
';
        $buffer .= $indent . '        dot.classList.remove(\'active\');
';
        $buffer .= $indent . '      }
';
        $buffer .= $indent . '    });
';
        $buffer .= $indent . '  };
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  const goToSlide = (index) => {
';
        $buffer .= $indent . '    currentIndex = index;
';
        $buffer .= $indent . '    updateSlider();
';
        $buffer .= $indent . '  };
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  dots.forEach((dot, index) => {
';
        $buffer .= $indent . '    dot.addEventListener(\'click\', () => {
';
        $buffer .= $indent . '      goToSlide(index);
';
        $buffer .= $indent . '    });
';
        $buffer .= $indent . '  });
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  // Función para cambiar automáticamente cada 3 segundos
';
        $buffer .= $indent . '  const autoChangeSlide = () => {
';
        $buffer .= $indent . '    currentIndex = (currentIndex + 1) % slides.length;
';
        $buffer .= $indent . '    updateSlider();
';
        $buffer .= $indent . '  };
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  // Detener el cambio automático cuando se hace clic en un punto
';
        $buffer .= $indent . '  dots.forEach((dot) => {
';
        $buffer .= $indent . '    dot.addEventListener(\'click\', () => {
';
        $buffer .= $indent . '      clearInterval(autoChangeInterval);
';
        $buffer .= $indent . '    });
';
        $buffer .= $indent . '  });
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  // Iniciar cambio automático
';
        $buffer .= $indent . '  const autoChangeInterval = setInterval(autoChangeSlide, 3000);
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  updateSlider();
';
        $buffer .= $indent . '});
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</script>
';
        $buffer .= $indent . '</body>
';
        $buffer .= $indent . '</html>
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section810f69c2305a96b05f4212134ed6fa2e($context, $indent, $value);

        return $buffer;
    }

    private function section6b403a6a78537640b9e04a931aeb6463(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'content';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'content';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section810f69c2305a96b05f4212134ed6fa2e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    M.util.js_pending(\'theme_boost/loader\');
    require([\'theme_boost/loader\'], function() {
      M.util.js_complete(\'theme_boost/loader\');
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    M.util.js_pending(\'theme_boost/loader\');
';
                $buffer .= $indent . '    require([\'theme_boost/loader\'], function() {
';
                $buffer .= $indent . '      M.util.js_complete(\'theme_boost/loader\');
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
