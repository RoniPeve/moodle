<?php

class __Mustache_fd294528baaab822ef692f61447eee28 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<!--<div class="slider-container">
';
        $buffer .= $indent . '    <div class="slider">
';
        $buffer .= $indent . '      <div class="slide"><img src="../Assets/Images/fondo_logo.jpg" alt="Image 1"></div>
';
        $buffer .= $indent . '      <div class="slide"><img src="../Assets/Images/fondo_logo.jpg" alt="Image 2"></div>
';
        $buffer .= $indent . '      <div class="slide"><img src="../Assets/Images/fondo_logo.jpg" alt="Image 3"></div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '    <script>
';
        $buffer .= $indent . '        const slider = document.querySelector(\'.slider\');
';
        $buffer .= $indent . 'const slides = document.querySelectorAll(\'.slide\');
';
        $buffer .= $indent . 'let currentSlide = 0;
';
        $buffer .= $indent . '
';
        $buffer .= $indent . 'function nextSlide() {
';
        $buffer .= $indent . '  currentSlide = (currentSlide + 1) % slides.length;
';
        $buffer .= $indent . '  updateSlider();
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . 'function updateSlider() {
';
        $buffer .= $indent . '  const translateXValue = `translateX(-${currentSlide * 100}%)`;
';
        $buffer .= $indent . '  slider.style.transform = translateXValue;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . 'setInterval(nextSlide, 3000); // Cambia de diapositiva cada 3 segundos
';
        $buffer .= $indent . '
';
        $buffer .= $indent . 'updateSlider(); // Inicializa el slider
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    </script>-->
';
        $value = $context->find('slidercount');
        $buffer .= $this->sectionEafe8bb51865218a89b656b0cf876750($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="loginform row ';
        $value = $context->find('hastwocolumns');
        $buffer .= $this->section1831ec93a455edb6208a4d5438e8a9c0($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <div class="';
        $value = $context->find('hastwocolumns');
        $buffer .= $this->section13b44ac94167f3136edfaf1435af46a2($context, $indent, $value);
        $value = $context->find('hastwocolumns');
        if (empty($value)) {
            
            $buffer .= 'col';
        }
        $buffer .= '">
';
        $value = $context->find('logourl');
        $buffer .= $this->section4586160e8598afcccfae1783bf614c06($context, $indent, $value);
        $value = $context->find('logourl');
        if (empty($value)) {
            
            $buffer .= $indent . '            <h1 class="login-heading mb-4">';
            $value = $context->find('str');
            $buffer .= $this->section80a4d1690ff171d23b2097c3acda60e4($context, $indent, $value);
            $buffer .= '</h1>
';
        }
        $value = $context->find('maintenance');
        $buffer .= $this->section1cf63b27ccb2be3de813663749f881e8($context, $indent, $value);
        $value = $context->find('error');
        $buffer .= $this->section95c4731475080da294871d426d99e078($context, $indent, $value);
        $value = $context->find('cansignup');
        $buffer .= $this->sectionE15e5206aba289674968c6fcbf45d288($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <form class="login-form" action="';
        $value = $this->resolveValue($context->find('loginurl'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" method="post" id="login">
';
        $buffer .= $indent . '            <input type="hidden" name="logintoken" value="';
        $value = $this->resolveValue($context->find('logintoken'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '            <div class="login-form-username form-group">
';
        $buffer .= $indent . '                <label for="username" class="sr-only">
';
        $value = $context->find('canloginbyemail');
        if (empty($value)) {
            
            $buffer .= $indent . '                        ';
            $value = $context->find('str');
            $buffer .= $this->section27e9419edc620e0e1872d2a6521f1533($context, $indent, $value);
            $buffer .= '
';
        }
        $value = $context->find('canloginbyemail');
        $buffer .= $this->section95688399ea76ca26a40ecb6df9ae7e86($context, $indent, $value);
        $buffer .= $indent . '                </label>
';
        $buffer .= $indent . '                <input type="text" name="username" id="username" ';
        $buffer .= 'class="form-control form-control-lg" ';
        $buffer .= 'value="';
        $value = $this->resolveValue($context->find('username'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" ';
        $buffer .= 'placeholder="';
        $value = $context->find('canloginbyemail');
        if (empty($value)) {
            
            $value = $context->find('cleanstr');
            $buffer .= $this->sectionFea69428308e6a733cfeebf7670bdc01($context, $indent, $value);
        }
        $value = $context->find('canloginbyemail');
        $buffer .= $this->section118ece6c412804f669c845b43ecc9a01($context, $indent, $value);
        $buffer .= '" ';
        $buffer .= 'autocomplete="username">
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="login-form-password form-group">
';
        $buffer .= $indent . '                <label for="password" class="sr-only">';
        $value = $context->find('str');
        $buffer .= $this->sectionE056be559d6d01a9bd2bf6f760f8e3e3($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '                <input type="password" name="password" id="password" value="" ';
        $buffer .= 'class="form-control form-control-lg" ';
        $buffer .= 'placeholder="';
        $value = $context->find('cleanstr');
        $buffer .= $this->section4e50d9b1632f258e8c10be3e2ed759be($context, $indent, $value);
        $buffer .= '" ';
        $buffer .= 'autocomplete="current-password">
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="login-form-submit form-group">
';
        $buffer .= $indent . '                <button class="btn btn-primary btn-block btn-lg" type="submit" id="loginbtn">';
        $value = $context->find('str');
        $buffer .= $this->sectionB15dee8971ab065bf4d6402b60d852be($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="login-form-forgotpassword form-group text-center">
';
        $buffer .= $indent . '                <a href="';
        $value = $this->resolveValue($context->find('forgotpasswordurl'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">';
        $value = $context->find('str');
        $buffer .= $this->sectionE3afea308016df7243ba8871f7081e79($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '            </div>
';
        $value = $context->find('cansignup');
        $buffer .= $this->section66437f68645703527477a094d32797a1($context, $indent, $value);
        $buffer .= $indent . '        </form>
';
        $value = $context->find('hastwocolumns');
        if (empty($value)) {
            
            $value = $context->find('canloginasguest');
            $buffer .= $this->section60181e9e680d57c51829c72f906bcca8($context, $indent, $value);
            $buffer .= $indent . '            <div class="d-flex mt-2">
';
            $value = $context->find('languagemenu');
            $buffer .= $this->sectionE214a907e01fe1d6546eff0cd32f33f3($context, $indent, $value);
            $buffer .= $indent . '                <button type="button" class="ml-auto btn btn-link" ';
            $buffer .= ' data-modal="alert"';
            $buffer .= ' data-modal-title-str=\'["cookiesenabled", "core"]\' ';
            $buffer .= ' data-modal-content-str=\'["cookiesenabled_help_html", "core"]\'';
            $buffer .= '><i class="fa fa-question-circle"></i> ';
            $value = $context->find('str');
            $buffer .= $this->sectionFcb729cc74d31bce5e3746aa60b79a2e($context, $indent, $value);
            $buffer .= '</button>
';
            $buffer .= $indent . '            </div>
';
        }
        $buffer .= $indent . '    </div>
';
        $value = $context->find('hastwocolumns');
        $buffer .= $this->section18522c82ffe1081e4e644c4cd27698a9($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section471fa31d7c6c0bfa9cd0565d027f3fb3($context, $indent, $value);

        return $buffer;
    }

    private function section39fafbade5b4daabdb3367e1272d1046(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'class="active"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'class="active"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6638b978bf77256fc9eb71801e8b224a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <li data-target="#carousel-indicators" data-slide-to="{{{ key }}}" {{#active}}class="active"{{/active}}></li>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <li data-target="#carousel-indicators" data-slide-to="';
                $value = $this->resolveValue($context->find('key'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" ';
                $value = $context->find('active');
                $buffer .= $this->section39fafbade5b4daabdb3367e1272d1046($context, $indent, $value);
                $buffer .= '></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5749c750acb0d7477dd5257d00cc6d53(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'active';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'active';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA36cdb3e2aec67314c28515896867b65(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <h5 class="title">{{.}}</h5>
                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                            <h5 class="title">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h5>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3eacdc25cb00b19ec20e4f8b997438a1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <div class="caption">
                                                {{{.}}}
                                            </div>
                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                            <div class="caption">
';
                $buffer .= $indent . '                                                ';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section69d158a7e316a8bb243173fa127ef272(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div class="carousel-caption d-none d-md-block">
                                        {{#title}}
                                            <h5 class="title">{{.}}</h5>
                                        {{/title}}
                                        {{#caption}}
                                            <div class="caption">
                                                {{{.}}}
                                            </div>
                                        {{/caption}}
                                    </div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <div class="carousel-caption d-none d-md-block">
';
                $value = $context->find('title');
                $buffer .= $this->sectionA36cdb3e2aec67314c28515896867b65($context, $indent, $value);
                $value = $context->find('caption');
                $buffer .= $this->section3eacdc25cb00b19ec20e4f8b997438a1($context, $indent, $value);
                $buffer .= $indent . '                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section61354bce65becaf3d96c585a72c9382c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="carousel-item {{#active}}active{{/active}}">
                                <img src="{{image}}" alt="{{slidertitle}}" class="w-100">
                                {{#hascaption}}
                                    <div class="carousel-caption d-none d-md-block">
                                        {{#title}}
                                            <h5 class="title">{{.}}</h5>
                                        {{/title}}
                                        {{#caption}}
                                            <div class="caption">
                                                {{{.}}}
                                            </div>
                                        {{/caption}}
                                    </div>
                                {{/hascaption}}
                            </div>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <div class="carousel-item ';
                $value = $context->find('active');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                <img src="';
                $value = $this->resolveValue($context->find('image'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('slidertitle'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="w-100">
';
                $value = $context->find('hascaption');
                $buffer .= $this->section69d158a7e316a8bb243173fa127ef272($context, $indent, $value);
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6082c1f5941a12f77083512a9a2e6a62(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'previous';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'previous';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBa8bb7b1bb267b8cc98d38fe4bf9f047(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'next';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'next';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEafe8bb51865218a89b656b0cf876750(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div id="mooveslideshow" class="container-fluid">
                <div id="carousel-indicators" class="carousel slide carousel-fade" data-ride="carousel">
                    {{^slidersingleslide}}
                    <ol class="carousel-indicators">
                        {{#slides}}
                            <li data-target="#carousel-indicators" data-slide-to="{{{ key }}}" {{#active}}class="active"{{/active}}></li>
                        {{/slides}}
                    </ol>
                    {{/slidersingleslide}}
                    <div class="carousel-inner">
                        {{#slides}}
                            <div class="carousel-item {{#active}}active{{/active}}">
                                <img src="{{image}}" alt="{{slidertitle}}" class="w-100">
                                {{#hascaption}}
                                    <div class="carousel-caption d-none d-md-block">
                                        {{#title}}
                                            <h5 class="title">{{.}}</h5>
                                        {{/title}}
                                        {{#caption}}
                                            <div class="caption">
                                                {{{.}}}
                                            </div>
                                        {{/caption}}
                                    </div>
                                {{/hascaption}}
                            </div>
                        {{/slides}}
                    </div>
                    {{^slidersingleslide}}
                    <a class="carousel-control-prev" href="#carousel-indicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">{{#str}}previous{{/str}}</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-indicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">{{#str}}next{{/str}}</span>
                    </a>
                    {{/slidersingleslide}}
                </div>
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div id="mooveslideshow" class="container-fluid">
';
                $buffer .= $indent . '                <div id="carousel-indicators" class="carousel slide carousel-fade" data-ride="carousel">
';
                $value = $context->find('slidersingleslide');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                    <ol class="carousel-indicators">
';
                    $value = $context->find('slides');
                    $buffer .= $this->section6638b978bf77256fc9eb71801e8b224a($context, $indent, $value);
                    $buffer .= $indent . '                    </ol>
';
                }
                $buffer .= $indent . '                    <div class="carousel-inner">
';
                $value = $context->find('slides');
                $buffer .= $this->section61354bce65becaf3d96c585a72c9382c($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $value = $context->find('slidersingleslide');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                    <a class="carousel-control-prev" href="#carousel-indicators" role="button" data-slide="prev">
';
                    $buffer .= $indent . '                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
';
                    $buffer .= $indent . '                        <span class="sr-only">';
                    $value = $context->find('str');
                    $buffer .= $this->section6082c1f5941a12f77083512a9a2e6a62($context, $indent, $value);
                    $buffer .= '</span>
';
                    $buffer .= $indent . '                    </a>
';
                    $buffer .= $indent . '                    <a class="carousel-control-next" href="#carousel-indicators" role="button" data-slide="next">
';
                    $buffer .= $indent . '                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
';
                    $buffer .= $indent . '                        <span class="sr-only">';
                    $value = $context->find('str');
                    $buffer .= $this->sectionBa8bb7b1bb267b8cc98d38fe4bf9f047($context, $indent, $value);
                    $buffer .= '</span>
';
                    $buffer .= $indent . '                    </a>
';
                }
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1831ec93a455edb6208a4d5438e8a9c0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'hastwocolumns';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'hastwocolumns';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section13b44ac94167f3136edfaf1435af46a2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'col-lg-6 col-md-12 left-column';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'col-lg-6 col-md-12 left-column';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section80a4d1690ff171d23b2097c3acda60e4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' loginto, core, {{sitename}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' loginto, core, ';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4586160e8598afcccfae1783bf614c06(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div id="loginlogo" class="login-logo">
                <img id="logoimage" src="{{logourl}}" class="img-fluid" alt="{{sitename}}"/>
                <h1 class="login-heading sr-only">{{#str}} loginto, core, {{sitename}} {{/str}}</h1>
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div id="loginlogo" class="login-logo">
';
                $buffer .= $indent . '                <img id="logoimage" src="';
                $value = $this->resolveValue($context->find('logourl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="img-fluid" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"/>
';
                $buffer .= $indent . '                <h1 class="login-heading sr-only">';
                $value = $context->find('str');
                $buffer .= $this->section80a4d1690ff171d23b2097c3acda60e4($context, $indent, $value);
                $buffer .= '</h1>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1cf63b27ccb2be3de813663749f881e8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="alert alert-danger login-maintenance">
                {{{maintenance}}}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="alert alert-danger login-maintenance">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('maintenance'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section95c4731475080da294871d426d99e078(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a href="#" id="loginerrormessage" class="sr-only">{{error}}</a>
            <div class="alert alert-danger" role="alert">{{error}}</div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a href="#" id="loginerrormessage" class="sr-only">';
                $value = $this->resolveValue($context->find('error'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a>
';
                $buffer .= $indent . '            <div class="alert alert-danger" role="alert">';
                $value = $this->resolveValue($context->find('error'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section78c7558fe34a1190743ac70d6d336ab2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' tocreatenewaccount ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' tocreatenewaccount ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE15e5206aba289674968c6fcbf45d288(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a href="{{signupurl}}" class="sr-only">{{#str}} tocreatenewaccount {{/str}}</a>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->find('signupurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="sr-only">';
                $value = $context->find('str');
                $buffer .= $this->section78c7558fe34a1190743ac70d6d336ab2($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section27e9419edc620e0e1872d2a6521f1533(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' username ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' username ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section22141a6741c33f407ef6171795337eec(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' usernameemail ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' usernameemail ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section95688399ea76ca26a40ecb6df9ae7e86(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{#str}} usernameemail {{/str}}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        ';
                $value = $context->find('str');
                $buffer .= $this->section22141a6741c33f407ef6171795337eec($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFea69428308e6a733cfeebf7670bdc01(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'username';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'username';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section983b6843353faa33a83a9ec3069863a3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'usernameemail';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'usernameemail';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section118ece6c412804f669c845b43ecc9a01(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#cleanstr}}usernameemail{{/cleanstr}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('cleanstr');
                $buffer .= $this->section983b6843353faa33a83a9ec3069863a3($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE056be559d6d01a9bd2bf6f760f8e3e3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' password ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' password ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4e50d9b1632f258e8c10be3e2ed759be(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'password';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'password';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB15dee8971ab065bf4d6402b60d852be(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'login';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'login';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE3afea308016df7243ba8871f7081e79(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'forgotaccount';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'forgotaccount';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDea9bf2c9eca7d7f3de299469841cbc4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'donthaveanaccount, theme_moove';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'donthaveanaccount, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section47f819a53e4575a4e7767be1939ab3bf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'startsignup';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'startsignup';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section66437f68645703527477a094d32797a1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="login-signup text-center">
                    {{#str}}donthaveanaccount, theme_moove{{/str}} <a href="{{signupurl}}">{{#str}}startsignup{{/str}}</a>
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="login-signup text-center">
';
                $buffer .= $indent . '                    ';
                $value = $context->find('str');
                $buffer .= $this->sectionDea9bf2c9eca7d7f3de299469841cbc4($context, $indent, $value);
                $buffer .= ' <a href="';
                $value = $this->resolveValue($context->find('signupurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->section47f819a53e4575a4e7767be1939ab3bf($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section017c9686023b74877131737c59ff1162(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'loginguest';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'loginguest';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section60181e9e680d57c51829c72f906bcca8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <form action="{{loginurl}}" method="post" id="guestlogin" class="mt-2">
                    <input type="hidden" name="logintoken" value="{{logintoken}}">
                    <input type="hidden" name="username" value="guest" />
                    <input type="hidden" name="password" value="guest" />
                    <button class="btn btn-secondary btn-block" type="submit">{{#str}}loginguest{{/str}}</button>
                </form>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <form action="';
                $value = $this->resolveValue($context->find('loginurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" method="post" id="guestlogin" class="mt-2">
';
                $buffer .= $indent . '                    <input type="hidden" name="logintoken" value="';
                $value = $this->resolveValue($context->find('logintoken'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                    <input type="hidden" name="username" value="guest" />
';
                $buffer .= $indent . '                    <input type="hidden" name="password" value="guest" />
';
                $buffer .= $indent . '                    <button class="btn btn-secondary btn-block" type="submit">';
                $value = $context->find('str');
                $buffer .= $this->section017c9686023b74877131737c59ff1162($context, $indent, $value);
                $buffer .= '</button>
';
                $buffer .= $indent . '                </form>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE214a907e01fe1d6546eff0cd32f33f3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="login-languagemenu">
                        {{>core/action_menu}}
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="login-languagemenu">
';
                if ($partial = $this->mustache->loadPartial('core/action_menu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                        ');
                }
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFcb729cc74d31bce5e3746aa60b79a2e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'cookiesnotice';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'cookiesnotice';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDd9ed34c6dd39813508d9521f7e89580(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'signinwith, theme_moove';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'signinwith, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC0b3a7992901bf8d7dda10e1e2f3e368(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'facebook';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'facebook';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section70a15876597de1523d91a60e8444ed79(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <img src="{{iconurl}}" alt="" width="24" height="24"/>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <img src="';
                $value = $this->resolveValue($context->find('iconurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="" width="24" height="24"/>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7eca06ccff62a81b109d8b2fe8c59a65(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <a class="btn login-identityprovider-btn btn-block {{#isfacebook}}facebook{{/isfacebook}}" href="{{url}}">
                                {{#iconurl}}
                                    <img src="{{iconurl}}" alt="" width="24" height="24"/>
                                {{/iconurl}}
                                {{name}}
                            </a>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <a class="btn login-identityprovider-btn btn-block ';
                $value = $context->find('isfacebook');
                $buffer .= $this->sectionC0b3a7992901bf8d7dda10e1e2f3e368($context, $indent, $value);
                $buffer .= '" href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $value = $context->find('iconurl');
                $buffer .= $this->section70a15876597de1523d91a60e8444ed79($context, $indent, $value);
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                            </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB0683ddc387b539740ea0aadbb3134b3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="login-identityproviders">
                        <p class="login-heading text-center">{{#str}}signinwith, theme_moove{{/str}}</p>
                        {{#identityproviders}}
                            <a class="btn login-identityprovider-btn btn-block {{#isfacebook}}facebook{{/isfacebook}}" href="{{url}}">
                                {{#iconurl}}
                                    <img src="{{iconurl}}" alt="" width="24" height="24"/>
                                {{/iconurl}}
                                {{name}}
                            </a>
                        {{/identityproviders}}
                    </div>

                    <div class="login-divider"></div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="login-identityproviders">
';
                $buffer .= $indent . '                        <p class="login-heading text-center">';
                $value = $context->find('str');
                $buffer .= $this->sectionDd9ed34c6dd39813508d9521f7e89580($context, $indent, $value);
                $buffer .= '</p>
';
                $value = $context->find('identityproviders');
                $buffer .= $this->section7eca06ccff62a81b109d8b2fe8c59a65($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                    <div class="login-divider"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC3f28f64f02789df0e5e1d7df08ec246(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{{instructions}}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('instructions'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBc5e6199e4b7f928ae8a3a1f0140d194(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <form action="{{loginurl}}" method="post" id="guestlogin">
                        <input type="hidden" name="logintoken" value="{{logintoken}}">
                        <input type="hidden" name="username" value="guest" />
                        <input type="hidden" name="password" value="guest" />
                        <button class="btn btn-secondary btn-block" type="submit">{{#str}}loginguest{{/str}}</button>
                    </form>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <form action="';
                $value = $this->resolveValue($context->find('loginurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" method="post" id="guestlogin">
';
                $buffer .= $indent . '                        <input type="hidden" name="logintoken" value="';
                $value = $this->resolveValue($context->find('logintoken'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                        <input type="hidden" name="username" value="guest" />
';
                $buffer .= $indent . '                        <input type="hidden" name="password" value="guest" />
';
                $buffer .= $indent . '                        <button class="btn btn-secondary btn-block" type="submit">';
                $value = $context->find('str');
                $buffer .= $this->section017c9686023b74877131737c59ff1162($context, $indent, $value);
                $buffer .= '</button>
';
                $buffer .= $indent . '                    </form>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0941019ebba80b75e747f197ee8007fc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="login-languagemenu">
                            {{>core/action_menu}}
                        </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="login-languagemenu">
';
                if ($partial = $this->mustache->loadPartial('core/action_menu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                            ');
                }
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section18522c82ffe1081e4e644c4cd27698a9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="col-lg-6 col-md-12 right-column">
            <div class="column-content">
                {{#hasidentityproviders}}
                    <div class="login-identityproviders">
                        <p class="login-heading text-center">{{#str}}signinwith, theme_moove{{/str}}</p>
                        {{#identityproviders}}
                            <a class="btn login-identityprovider-btn btn-block {{#isfacebook}}facebook{{/isfacebook}}" href="{{url}}">
                                {{#iconurl}}
                                    <img src="{{iconurl}}" alt="" width="24" height="24"/>
                                {{/iconurl}}
                                {{name}}
                            </a>
                        {{/identityproviders}}
                    </div>

                    <div class="login-divider"></div>
                {{/hasidentityproviders}}
                {{#hasinstructions}}
                    {{{instructions}}}
                {{/hasinstructions}}
                {{#canloginasguest}}
                    <form action="{{loginurl}}" method="post" id="guestlogin">
                        <input type="hidden" name="logintoken" value="{{logintoken}}">
                        <input type="hidden" name="username" value="guest" />
                        <input type="hidden" name="password" value="guest" />
                        <button class="btn btn-secondary btn-block" type="submit">{{#str}}loginguest{{/str}}</button>
                    </form>
                {{/canloginasguest}}

                <div class="d-flex mt-2">
                    {{#languagemenu}}
                        <div class="login-languagemenu">
                            {{>core/action_menu}}
                        </div>
                    {{/languagemenu}}
                    <button type="button" class="ml-auto btn btn-link" {{!
                    }} data-modal="alert"{{!
                    }} data-modal-title-str=\'["cookiesenabled", "core"]\' {{!
                    }} data-modal-content-str=\'["cookiesenabled_help_html", "core"]\'{{!
                    }}><i class="fa fa-question-circle"></i> {{#str}}cookiesnotice{{/str}}</button>
                </div>
            </div>
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="col-lg-6 col-md-12 right-column">
';
                $buffer .= $indent . '            <div class="column-content">
';
                $value = $context->find('hasidentityproviders');
                $buffer .= $this->sectionB0683ddc387b539740ea0aadbb3134b3($context, $indent, $value);
                $value = $context->find('hasinstructions');
                $buffer .= $this->sectionC3f28f64f02789df0e5e1d7df08ec246($context, $indent, $value);
                $value = $context->find('canloginasguest');
                $buffer .= $this->sectionBc5e6199e4b7f928ae8a3a1f0140d194($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '                <div class="d-flex mt-2">
';
                $value = $context->find('languagemenu');
                $buffer .= $this->section0941019ebba80b75e747f197ee8007fc($context, $indent, $value);
                $buffer .= $indent . '                    <button type="button" class="ml-auto btn btn-link" ';
                $buffer .= ' data-modal="alert"';
                $buffer .= ' data-modal-title-str=\'["cookiesenabled", "core"]\' ';
                $buffer .= ' data-modal-content-str=\'["cookiesenabled_help_html", "core"]\'';
                $buffer .= '><i class="fa fa-question-circle"></i> ';
                $value = $context->find('str');
                $buffer .= $this->sectionFcb729cc74d31bce5e3746aa60b79a2e($context, $indent, $value);
                $buffer .= '</button>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6662a8724609460b77c047b6cc42a301(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            var userNameField = document.getElementById(\'username\');
            if (userNameField.value.length == 0) {
                userNameField.focus();
            } else {
                document.getElementById(\'password\').focus();
            }
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            var userNameField = document.getElementById(\'username\');
';
                $buffer .= $indent . '            if (userNameField.value.length == 0) {
';
                $buffer .= $indent . '                userNameField.focus();
';
                $buffer .= $indent . '            } else {
';
                $buffer .= $indent . '                document.getElementById(\'password\').focus();
';
                $buffer .= $indent . '            }
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA27fab6ee4b61211a54cfd483fbddf96(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        document.getElementById(\'loginerrormessage\').focus();
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        document.getElementById(\'loginerrormessage\').focus();
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section471fa31d7c6c0bfa9cd0565d027f3fb3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{^error}}
        {{#autofocusform}}
            var userNameField = document.getElementById(\'username\');
            if (userNameField.value.length == 0) {
                userNameField.focus();
            } else {
                document.getElementById(\'password\').focus();
            }
        {{/autofocusform}}
    {{/error}}
    {{#error}}
        document.getElementById(\'loginerrormessage\').focus();
    {{/error}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('error');
                if (empty($value)) {
                    
                    $value = $context->find('autofocusform');
                    $buffer .= $this->section6662a8724609460b77c047b6cc42a301($context, $indent, $value);
                }
                $value = $context->find('error');
                $buffer .= $this->sectionA27fab6ee4b61211a54cfd483fbddf96($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
