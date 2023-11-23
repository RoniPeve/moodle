<?php

class __Mustache_71b0ce4ddbb079be7460468edce9dc85 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $value = $context->find('hiddensection');
        $buffer .= $this->section283e32a2ff84873b64213b90d85ae107($context, $indent, $value);
        $value = $context->find('hiddensection');
        if (empty($value)) {
            
            $buffer .= $indent . '
';
            $buffer .= $indent . '<div id="card-editing-container" class="remui-format-card single-section-format row ">
';
            $value = $context->find('headerdata');
            $buffer .= $this->sectionA64bdc0a47fa8c4aa686cdb359ca00a8($context, $indent, $value);
            $buffer .= $indent . '    <ul class="sections">
';
            $buffer .= $indent . '        <li id="section-';
            $value = $this->resolveValue($context->find('section'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '" class="section main" aria-labelledby="';
            $value = $this->resolveValue($context->find('uniqid'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '" data-sectionid="';
            $value = $this->resolveValue($context->find('section'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '"
';
            $buffer .= $indent . '            data-courseid="';
            $value = $this->resolveValue($context->find('courseid'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '">
';
            $buffer .= $indent . '            <div class="section-details d-flex flex-column justify-content-between flex-wrap">
';
            $buffer .= $indent . '                <div class=" general-single-card p-0 d-flex">
';
            $buffer .= $indent . '                    <div class="d-flex header-progresbar-wrapper">
';
            $buffer .= $indent . '                        <h2 class="section-title m-0 d-flex">
';
            $buffer .= $indent . '                            <span class="sno ';
            $value = $context->find('hidden');
            $buffer .= $this->section84abb2ca392375a862f0cffdc8fe21b3($context, $indent, $value);
            $buffer .= '">
';
            $buffer .= $indent . '                                ';
            $value = $this->resolveValue($context->find('section'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '&#46;
';
            $buffer .= $indent . '                            </span>
';
            $buffer .= $indent . '                            <span id="';
            $value = $this->resolveValue($context->find('uniqid'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '"
';
            $buffer .= $indent . '                                class="single-section-title d-inline ';
            $value = $context->find('hidden');
            $buffer .= $this->section84abb2ca392375a862f0cffdc8fe21b3($context, $indent, $value);
            $buffer .= '">
';
            $buffer .= $indent . '                                ';
            $value = $this->resolveValue($context->find('title'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '                                <div data-region="sectionbadges "
';
            $buffer .= $indent . '                                    class="sectionbadges d-inline ">
';
            if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/section/badges')) {
                $buffer .= $partial->renderInternal($context, $indent . '                                    ');
            }
            $buffer .= $indent . '                                </div>
';
            $buffer .= $indent . '                            </span>
';
            $buffer .= $indent . '                        </h2>
';
            $buffer .= $indent . '                        <div class="progress-bar-warpper">
';
            $buffer .= $indent . '                            <div class="progress progress-xs bg-grey-300 m-b-1">
';
            $buffer .= $indent . '                                <div class="progress-bar bg-green-600"
';
            $buffer .= $indent . '                                    style="width:';
            $value = $context->find('progressinfo');
            $buffer .= $this->section31696a9dc2aaf707950a710a87eadcbe($context, $indent, $value);
            $value = $context->find('progressinfo');
            if (empty($value)) {
                
                $buffer .= '0';
            }
            $buffer .= '%;"
';
            $buffer .= $indent . '                                    role="progressbar">
';
            $buffer .= $indent . '                                </div>
';
            $buffer .= $indent . '                            </div>
';
            $buffer .= $indent . '                            <div class="text-right progress-text">
';
            $value = $context->find('progressinfo');
            $buffer .= $this->sectionCc23d0b6094e611e66819aa3535c2930($context, $indent, $value);
            $buffer .= $indent . '                                <span>';
            $value = $context->find('progressinfo');
            $buffer .= $this->sectionA42285ce16ac8844e4b4d2f9c283f915($context, $indent, $value);
            $value = $context->find('progressinfo');
            if (empty($value)) {
                
                $buffer .= '0';
            }
            $buffer .= '%</span>
';
            $buffer .= $indent . '                            </div>
';
            $buffer .= $indent . '                        </div>
';
            $buffer .= $indent . '                    </div>
';
            $buffer .= $indent . '                    <div class="d-flex justify-content-between flex-gap-16">
';
            $buffer .= $indent . '                        <!-- next/prev sections -->
';
            $buffer .= $indent . '                        <div class="d-flex no-wrap flex-gap-8">
';
            $buffer .= $indent . '                            <div class=" p-0 wdm-card-section m-0 text-nowrap align-items-center">
';
            $buffer .= $indent . '                                <div class="card-section-leftnav">
';
            $buffer .= $indent . '                                    ';
            $value = $this->resolveValue($context->find('leftnav'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '                                </div>
';
            $buffer .= $indent . '                                <div class="card-section-rightnav">
';
            $buffer .= $indent . '                                    ';
            $value = $this->resolveValue($context->find('rightnav'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '                                </div>
';
            $buffer .= $indent . '                            </div>
';
            $value = $context->find('editing');
            $buffer .= $this->section628fdd11aa599930957f0b8f1d8ed962($context, $indent, $value);
            $buffer .= $indent . '                        </div>
';
            $buffer .= $indent . '                    </div>
';
            $buffer .= $indent . '                </div>
';
            $value = $context->find('summary');
            $buffer .= $this->section15ba6fec399d1457d04074858d4a8c83($context, $indent, $value);
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '            <div class="content">
';
            $buffer .= $indent . '                <div class="summary">
';
            $buffer .= $indent . '                </div>
';
            $buffer .= $indent . '                <ul class="activity-cards section yui3-dd-drop">
';
            $value = $context->find('activities');
            $buffer .= $this->section63ecb00a476262aa7dc71fb44d633392($context, $indent, $value);
            $buffer .= $indent . '                </ul>
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '            ';
            $value = $this->resolveValue($context->find('addnewactivity'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '        </li>
';
            $value = $context->find('sections');
            $buffer .= $this->section4558449983c5c914748189f6482435db($context, $indent, $value);
            $buffer .= $indent . '    </ul>
';
            $buffer .= $indent . '</div>
';
            $buffer .= $indent . '
';
            $buffer .= $indent . '<!-- next/prev sections -->
';
            $buffer .= $indent . '<div class="col-md-12 p-0 wdm-card-section">
';
            $buffer .= $indent . '    <div class="card-section-leftnav">
';
            $buffer .= $indent . '        ';
            $value = $this->resolveValue($context->find('leftnav'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '    </div>
';
            $buffer .= $indent . '    <div class="card-section-rightnav">
';
            $buffer .= $indent . '        ';
            $value = $this->resolveValue($context->find('rightnav'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '    </div>
';
            $buffer .= $indent . '</div>
';
        }

        return $buffer;
    }

    private function section283e32a2ff84873b64213b90d85ae107(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{{ hiddensection }}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    ';
                $value = $this->resolveValue($context->find('hiddensection'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA64bdc0a47fa8c4aa686cdb359ca00a8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{>format_remuiformat/optional_secheader}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('format_remuiformat/optional_secheader')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section84abb2ca392375a862f0cffdc8fe21b3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'text-muted';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'text-muted';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section31696a9dc2aaf707950a710a87eadcbe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{ percentage }}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('percentage'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCc23d0b6094e611e66819aa3535c2930(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                {{! progress }}
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA42285ce16ac8844e4b4d2f9c283f915(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{ percentage
                                    }}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('percentage'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section628fdd11aa599930957f0b8f1d8ed962(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="right side mt-0">
                                {{{ optionmenu }}}
                            </div>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <div class="right side mt-0">
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('optionmenu'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section15ba6fec399d1457d04074858d4a8c83(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <p>{{{ summary }}}</p>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <p>';
                $value = $this->resolveValue($context->find('summary'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9b3f566a77c0c121abe78d9fcc1f799e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'col-activity';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'col-activity';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDb6eb7848b1d256ff586ce0a983abf90(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'row-activity fullwidth-grid-item';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'row-activity fullwidth-grid-item';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7385ba48fb937c5893799feb20642b23(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                {{{move}}}
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('move'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section40edc8faff45f33174889d383d0c7cac(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' showincard, format_remuiformat ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' showincard, format_remuiformat ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB0dcc610768a47ed59bf19141c560ec2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            ecf-cols, format_remuiformat,
                                            {{# str }} showincard, format_remuiformat {{/ str }}
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                            ecf-cols, format_remuiformat,
';
                $buffer .= $indent . '                                            ';
                $value = $context->find('str');
                $buffer .= $this->section40edc8faff45f33174889d383d0c7cac($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCa292fcec3a5dffa2b6a2316eadb5eb4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' showinrow, format_remuiformat ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' showinrow, format_remuiformat ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0bc0e5646c07999949b9d52b535a86ae(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            ecf-rows, format_remuiformat,
                                            {{# str }} showinrow, format_remuiformat {{/ str }}
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                            ecf-rows, format_remuiformat,
';
                $buffer .= $indent . '                                            ';
                $value = $context->find('str');
                $buffer .= $this->sectionCa292fcec3a5dffa2b6a2316eadb5eb4($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section341c6991ab658b6771036fcbbfc80af7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="actions d-inline-flex actions flex-gap-8">
                                    <span class="toggle-row-column btn btn-inverse" data-activityid="{{ id }}">
                                        <span class=\'type-col\'>
                                            {{# pix }}
                                            ecf-cols, format_remuiformat,
                                            {{# str }} showincard, format_remuiformat {{/ str }}
                                            {{/ pix }}
                                        </span>
                                        <span class=\'type-row\'>
                                            {{# pix }}
                                            ecf-rows, format_remuiformat,
                                            {{# str }} showinrow, format_remuiformat {{/ str }}
                                            {{/ pix }}
                                        </span>
                                    </span>
                                    {{{ modicons }}}
                                </div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="actions d-inline-flex actions flex-gap-8">
';
                $buffer .= $indent . '                                    <span class="toggle-row-column btn btn-inverse" data-activityid="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                                        <span class=\'type-col\'>
';
                $value = $context->find('pix');
                $buffer .= $this->sectionB0dcc610768a47ed59bf19141c560ec2($context, $indent, $value);
                $buffer .= $indent . '                                        </span>
';
                $buffer .= $indent . '                                        <span class=\'type-row\'>
';
                $value = $context->find('pix');
                $buffer .= $this->section0bc0e5646c07999949b9d52b535a86ae($context, $indent, $value);
                $buffer .= $indent . '                                        </span>
';
                $buffer .= $indent . '                                    </span>
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('modicons'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0a071135502ba3f510046b2eb89448a0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'hiddenoncoursepage';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'hiddenoncoursepage';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section62f23d823376a28cbd47360005a8931f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="mt-2 d-flex align-items-center">
                                    <span
                                        class="badge badge-pill badge-warning">{{#str}}hiddenoncoursepage{{/str}}</span>
                                </div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="mt-2 d-flex align-items-center">
';
                $buffer .= $indent . '                                    <span
';
                $buffer .= $indent . '                                        class="badge badge-pill badge-warning">';
                $value = $context->find('str');
                $buffer .= $this->section0a071135502ba3f510046b2eb89448a0($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section83720021dae71cd52c627a5a00e313de(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    {{{ fullcontent }}}
                                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('fullcontent'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section23f690b2e0adcfd214f6df9d3f83e39d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    {{#label}}
                                    {{{ fullcontent }}}
                                    {{/label}}
                                    {{^label}}
                                    {{{ summary }}}
                                    {{/label}}
                                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('label');
                $buffer .= $this->section83720021dae71cd52c627a5a00e313de($context, $indent, $value);
                $value = $context->find('label');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                    ';
                    $value = $this->resolveValue($context->find('summary'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section42b290374a1444a56d2eb1d528464d7b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <div>
                                            <strong>{{label}}</strong> {{timestamp}}
                                        </div>
                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                        <div>
';
                $buffer .= $indent . '                                            <strong>';
                $value = $this->resolveValue($context->find('label'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</strong> ';
                $value = $this->resolveValue($context->find('timestamp'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section33912a32935229752c1db1654c33f2a9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="description text-left">
                                <div data-region="activity-dates" class="activity-dates small course-description-item">
                                    <div class="description-inner">
                                        {{#opendue}}
                                        <div>
                                            <strong>{{label}}</strong> {{timestamp}}
                                        </div>
                                        {{/opendue}}
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
                
                $buffer .= $indent . '                            <div class="description text-left">
';
                $buffer .= $indent . '                                <div data-region="activity-dates" class="activity-dates small course-description-item">
';
                $buffer .= $indent . '                                    <div class="description-inner">
';
                $value = $context->find('opendue');
                $buffer .= $this->section42b290374a1444a56d2eb1d528464d7b($context, $indent, $value);
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA01d7acab701196c3c2de59f23e347b8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'manual-completion';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'manual-completion';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section68f4cd5f35b8fb515b77ec4d74ebda52(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div
                                class="completion-container {{#manualcompletion}}manual-completion{{/manualcompletion}} align-items-center pr-15 p-r-1 {{^completed}}text-muted{{/completed}}">
                                <div class="completion-check-{{id}}">
                                    {{{ completion }}}
                                </div>
                            </div>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <div
';
                $buffer .= $indent . '                                class="completion-container ';
                $value = $context->find('manualcompletion');
                $buffer .= $this->sectionA01d7acab701196c3c2de59f23e347b8($context, $indent, $value);
                $buffer .= ' align-items-center pr-15 p-r-1 ';
                $value = $context->find('completed');
                if (empty($value)) {
                    
                    $buffer .= 'text-muted';
                }
                $buffer .= '">
';
                $buffer .= $indent . '                                <div class="completion-check-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('completion'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section63ecb00a476262aa7dc71fb44d633392(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '

                    <li class="activity {{#layouttypecol}}col-activity{{/layouttypecol}} {{#layouttyperow}}row-activity fullwidth-grid-item{{/layouttyperow}} modtype_{{{modulename}}}"
                        id="module-{{id}}" data-id="{{ id }}" data-section="{{ section }}"
                        aria-labelledby="module-{{id}}-title">
                        <div class="single-card">
                            <div class="d-flex flex-column single-card-child-wrapper">
                                {{#editing}}
                                {{{move}}}
                                {{/editing}}
                                <!-- <div class="wdm-mod-name {{#hidden}}text-muted{{/hidden}}">{{ modulefullname }}</div> -->
                                {{#editing}}
                                <div class="actions d-inline-flex actions flex-gap-8">
                                    <span class="toggle-row-column btn btn-inverse" data-activityid="{{ id }}">
                                        <span class=\'type-col\'>
                                            {{# pix }}
                                            ecf-cols, format_remuiformat,
                                            {{# str }} showincard, format_remuiformat {{/ str }}
                                            {{/ pix }}
                                        </span>
                                        <span class=\'type-row\'>
                                            {{# pix }}
                                            ecf-rows, format_remuiformat,
                                            {{# str }} showinrow, format_remuiformat {{/ str }}
                                            {{/ pix }}
                                        </span>
                                    </span>
                                    {{{ modicons }}}
                                </div>
                                {{/editing}}

                                <h4 id="module-{{id}}-title" class="title {{^summary}}nosummary{{/summary}} m-0">
                                    {{{ title }}}
                                </h4>
                                <div data-region="sectionbadges"
                                    class="sectionbadges d-flex align-items-center {{^editing}}{{/editing}}">
                                    {{> core_courseformat/local/content/section/badges }}
                                </div>
                                {{#modstealth}}
                                <div class="mt-2 d-flex align-items-center">
                                    <span
                                        class="badge badge-pill badge-warning">{{#str}}hiddenoncoursepage{{/str}}</span>
                                </div>
                                {{/modstealth}}
                                <div class="activity-content">
                                    {{#summary}}
                                    {{#label}}
                                    {{{ fullcontent }}}
                                    {{/label}}
                                    {{^label}}
                                    {{{ summary }}}
                                    {{/label}}
                                    {{/summary}}
                                </div>
                            </div>
                            {{#hasopenduedata}}
                            <div class="description text-left">
                                <div data-region="activity-dates" class="activity-dates small course-description-item">
                                    <div class="description-inner">
                                        {{#opendue}}
                                        <div>
                                            <strong>{{label}}</strong> {{timestamp}}
                                        </div>
                                        {{/opendue}}
                                    </div>
                                </div>
                            </div>
                            {{/hasopenduedata}}
                            {{#completion}}
                            <div
                                class="completion-container {{#manualcompletion}}manual-completion{{/manualcompletion}} align-items-center pr-15 p-r-1 {{^completed}}text-muted{{/completed}}">
                                <div class="completion-check-{{id}}">
                                    {{{ completion }}}
                                </div>
                            </div>
                            {{/completion}}
                            <div class="{{^summary}}nosummary{{/summary}}">{{{ availstatus }}}</div>

                        </div>
                    </li>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '
';
                $buffer .= $indent . '                    <li class="activity ';
                $value = $context->find('layouttypecol');
                $buffer .= $this->section9b3f566a77c0c121abe78d9fcc1f799e($context, $indent, $value);
                $buffer .= ' ';
                $value = $context->find('layouttyperow');
                $buffer .= $this->sectionDb6eb7848b1d256ff586ce0a983abf90($context, $indent, $value);
                $buffer .= ' modtype_';
                $value = $this->resolveValue($context->find('modulename'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                        id="module-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-section="';
                $value = $this->resolveValue($context->find('section'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                        aria-labelledby="module-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-title">
';
                $buffer .= $indent . '                        <div class="single-card">
';
                $buffer .= $indent . '                            <div class="d-flex flex-column single-card-child-wrapper">
';
                $value = $context->find('editing');
                $buffer .= $this->section7385ba48fb937c5893799feb20642b23($context, $indent, $value);
                $buffer .= $indent . '                                <!-- <div class="wdm-mod-name ';
                $value = $context->find('hidden');
                $buffer .= $this->section84abb2ca392375a862f0cffdc8fe21b3($context, $indent, $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('modulefullname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</div> -->
';
                $value = $context->find('editing');
                $buffer .= $this->section341c6991ab658b6771036fcbbfc80af7($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '                                <h4 id="module-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-title" class="title ';
                $value = $context->find('summary');
                if (empty($value)) {
                    
                    $buffer .= 'nosummary';
                }
                $buffer .= ' m-0">
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                </h4>
';
                $buffer .= $indent . '                                <div data-region="sectionbadges"
';
                $buffer .= $indent . '                                    class="sectionbadges d-flex align-items-center ';
                $value = $context->find('editing');
                if (empty($value)) {
                    
                }
                $buffer .= '">
';
                if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/section/badges')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                    ');
                }
                $buffer .= $indent . '                                </div>
';
                $value = $context->find('modstealth');
                $buffer .= $this->section62f23d823376a28cbd47360005a8931f($context, $indent, $value);
                $buffer .= $indent . '                                <div class="activity-content">
';
                $value = $context->find('summary');
                $buffer .= $this->section23f690b2e0adcfd214f6df9d3f83e39d($context, $indent, $value);
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $value = $context->find('hasopenduedata');
                $buffer .= $this->section33912a32935229752c1db1654c33f2a9($context, $indent, $value);
                $value = $context->find('completion');
                $buffer .= $this->section68f4cd5f35b8fb515b77ec4d74ebda52($context, $indent, $value);
                $buffer .= $indent . '                            <div class="';
                $value = $context->find('summary');
                if (empty($value)) {
                    
                    $buffer .= 'nosummary';
                }
                $buffer .= '">';
                $value = $this->resolveValue($context->find('availstatus'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4558449983c5c914748189f6482435db(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <li id="section-{{index}}" class="section hide">
            <div class="content">
                <div class="sectionname">
                    <h2>
                        {{name}}
                    </h2>
                </div>
                <div class="summary">

                </div>
            </div>
        </li>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <li id="section-';
                $value = $this->resolveValue($context->find('index'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="section hide">
';
                $buffer .= $indent . '            <div class="content">
';
                $buffer .= $indent . '                <div class="sectionname">
';
                $buffer .= $indent . '                    <h2>
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                    </h2>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div class="summary">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
