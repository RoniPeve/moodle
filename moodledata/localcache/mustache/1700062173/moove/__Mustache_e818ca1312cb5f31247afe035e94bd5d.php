<?php

class __Mustache_e818ca1312cb5f31247afe035e94bd5d extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="card mb-3" data-region="page" data-id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '    <div class="card-header p-0" id="page-';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-heading">
';
        $buffer .= $indent . '        <div class="mb-0 d-flex">
';
        $buffer .= $indent . '            <button class="btn btn-link text-left ws-toggle nomargin ml-1" data-toggle="collapse" data-target="#page-';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" aria-expanded="true" aria-controls="page-';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '                <span class="togglesectionicon collapsed-icon-container">
';
        $buffer .= $indent . '                    ';
        $value = $context->find('pix');
        $buffer .= $this->sectionAd5fbad29ac58280a390ed48db46f09f($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </span>
';
        $buffer .= $indent . '                <span class="togglesectionicon expanded-icon-container">
';
        $buffer .= $indent . '                    ';
        $value = $context->find('pix');
        $buffer .= $this->section97f183123ca1f54b03565f4ff5b132c5($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </span>
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('title'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '
';
        $buffer .= $indent . '            </button>
';
        $buffer .= $indent . '            <span class="ml-auto my-auto">
';
        $value = $context->find('moveupurl');
        $buffer .= $this->section6674b16a6da01711f40e74ca2959dea0($context, $indent, $value);
        $value = $context->find('movedownurl');
        $buffer .= $this->section53e8751cdbe389b177287af513c3f44c($context, $indent, $value);
        $buffer .= $indent . '                <a class="btn btn-link p-0" data-action="editpage" href="#" data-id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-pagenumber="';
        $value = $this->resolveValue($context->find('pagenumber'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" title="';
        $value = $context->find('str');
        $buffer .= $this->sectionFb0fbdc2ab0cd43b72b687965ba8fab5($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                    ';
        $value = $context->find('pix');
        $buffer .= $this->section7680c9ab48e1615ec8d80b97eeaa59cd($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </a>
';
        $value = $context->find('deleteurl');
        $buffer .= $this->section9911ca8fc80ec244f44caad416c8d4eb($context, $indent, $value);
        $buffer .= $indent . '            </span>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div id="page-';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="collapse show" aria-labelledby="page-';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-heading">
';
        $buffer .= $indent . '        <div class="card-body p-3">
';
        $buffer .= $indent . '            <div class="d-flex">
';
        $buffer .= $indent . '                <div>
';
        if ($partial = $this->mustache->loadPartial('tool_certificate/edit_layout_elementlist')) {
            $buffer .= $partial->renderInternal($context, $indent . '                    ');
        }
        $buffer .= $indent . '                    <div class="dropdown">
';
        $buffer .= $indent . '                        <button id="addelement';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="btn btn-primary iconlarge nomargin" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
';
        $buffer .= $indent . '                            ';
        $value = $context->find('str');
        $buffer .= $this->sectionF758cf7e0c01d7530ea5fe01446fe1e7($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                        </button>
';
        $buffer .= $indent . '                        <div class="dropdown-menu" aria-labelledby="addelement';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-region="elementtypeslist">
';
        $value = $context->find('elementtypes');
        $buffer .= $this->section33757ca5a4f303ba61042d8d4ab1167e($context, $indent, $value);
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="ml-4" data-region="pagelayout" data-id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        if ($partial = $this->mustache->loadPartial('tool_certificate/edit_layout_pdf')) {
            $buffer .= $partial->renderInternal($context, $indent . '                    ');
        }
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section5596ad50b2da10c525233a43ff664b7f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' expand, moodle ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' expand, moodle ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAd5fbad29ac58280a390ed48db46f09f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/collapsedcaret, core, {{#str}} expand, moodle {{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' t/collapsedcaret, core, ';
                $value = $context->find('str');
                $buffer .= $this->section5596ad50b2da10c525233a43ff664b7f($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE8dc7851b91f2661d2d2573516ec138d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' collapse, moodle ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' collapse, moodle ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section97f183123ca1f54b03565f4ff5b132c5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/expanded, core, {{#str}} collapse, moodle {{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' t/expanded, core, ';
                $value = $context->find('str');
                $buffer .= $this->sectionE8dc7851b91f2661d2d2573516ec138d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section620e7d879dadcbebf8d55b61edb38674(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'moveup';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'moveup';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section83c88cb2ae607e2aa5551ad9550fd853(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/up, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/up, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6674b16a6da01711f40e74ca2959dea0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a class="btn btn-link p-0" data-action="moveup" href="{{moveupurl}}" data-id="{{id}}" title="{{#str}}moveup{{/str}}">
                    {{#pix}} i/up, core {{/pix}}
                </a>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <a class="btn btn-link p-0" data-action="moveup" href="';
                $value = $this->resolveValue($context->find('moveupurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" title="';
                $value = $context->find('str');
                $buffer .= $this->section620e7d879dadcbebf8d55b61edb38674($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    ';
                $value = $context->find('pix');
                $buffer .= $this->section83c88cb2ae607e2aa5551ad9550fd853($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7d4bab31d51544d1336a0b23972d18c4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'movedown';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'movedown';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section17f80681b72387b9d62f2ec0d5e63db2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/down, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/down, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section53e8751cdbe389b177287af513c3f44c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a class="btn btn-link p-0" data-action="movedown" href="{{movedownurl}}" data-id="{{id}}" title="{{#str}}movedown{{/str}}">
                    {{#pix}} i/down, core {{/pix}}
                </a>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <a class="btn btn-link p-0" data-action="movedown" href="';
                $value = $this->resolveValue($context->find('movedownurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" title="';
                $value = $context->find('str');
                $buffer .= $this->section7d4bab31d51544d1336a0b23972d18c4($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    ';
                $value = $context->find('pix');
                $buffer .= $this->section17f80681b72387b9d62f2ec0d5e63db2($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFb0fbdc2ab0cd43b72b687965ba8fab5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'editpage, tool_certificate, {{pagenumber}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'editpage, tool_certificate, ';
                $value = $this->resolveValue($context->find('pagenumber'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7680c9ab48e1615ec8d80b97eeaa59cd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/settings, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/settings, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2fbfed967d3db67eecf7ac9e4dce9566(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'deletepage, tool_certificate';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'deletepage, tool_certificate';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0601b851dc2d09e2cc0679821ca5710a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/trash, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/trash, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9911ca8fc80ec244f44caad416c8d4eb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a class="btn btn-link p-0" data-action="deletepage" href="{{deleteurl}}" data-id="{{id}}" title="{{#str}}deletepage, tool_certificate{{/str}}">
                    {{#pix}} i/trash, core {{/pix}}
                </a>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <a class="btn btn-link p-0" data-action="deletepage" href="';
                $value = $this->resolveValue($context->find('deleteurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" title="';
                $value = $context->find('str');
                $buffer .= $this->section2fbfed967d3db67eecf7ac9e4dce9566($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    ';
                $value = $context->find('pix');
                $buffer .= $this->section0601b851dc2d09e2cc0679821ca5710a($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF758cf7e0c01d7530ea5fe01446fe1e7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'addelement, tool_certificate';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'addelement, tool_certificate';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section33757ca5a4f303ba61042d8d4ab1167e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <a class="dropdown-item" data-action="addelement" data-pageid="{{id}}" data-element="{{type}}" href="#">{{{name}}}</a>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <a class="dropdown-item" data-action="addelement" data-pageid="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-element="';
                $value = $this->resolveValue($context->find('type'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" href="#">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
