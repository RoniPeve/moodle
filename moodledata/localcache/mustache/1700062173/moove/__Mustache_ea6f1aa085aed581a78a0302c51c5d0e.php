<?php

class __Mustache_ea6f1aa085aed581a78a0302c51c5d0e extends Mustache_Template
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
        $value = $context->find('addsection');
        $buffer .= $this->sectionCb8cd96916634c45bcdf7cf18f3136f7($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('addsection');
        if (empty($value)) {
            
            $buffer .= $indent . '<li id="section-';
            $value = $this->resolveValue($context->find('index'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '" class="section main clearfix"
';
            $buffer .= $indent . '    aria-labelledby="section-';
            $value = $this->resolveValue($context->find('index'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= ' .content .sectionname"
';
            $buffer .= $indent . '    data-sectionid="';
            $value = $this->resolveValue($context->find('id'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '"
';
            $buffer .= $indent . '    data-sectionreturnid="';
            $value = $this->resolveValue($context->find('sectionreturnid'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '"
';
            $buffer .= $indent . '    data-for="section"
';
            $buffer .= $indent . '    data-number="';
            $value = $this->resolveValue($context->find('num'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '">
';
            $buffer .= $indent . '    <div class="single-card d-flex flex-column justify-content-between ';
            $value = $this->resolveValue($context->find('remuinewthemecolor'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= ' ';
            $value = $context->find('sectionfirstimage');
            $buffer .= $this->section02bb0d127d75132b515e5847739874fc($context, $indent, $value);
            $buffer .= '"
';
            $buffer .= $indent . '        ';
            $value = $context->find('sectionfirstimage');
            $buffer .= $this->section85eb4f06bfc7ba2a9d01614cd2cad33c($context, $indent, $value);
            $buffer .= '>
';
            $value = $context->find('highlighted');
            $buffer .= $this->sectionF8f779c7d96c4cffa783a994b9a92378($context, $indent, $value);
            $buffer .= $indent . '        <div class="editing-actions d-flex  justify-content-between align-items-center">
';
            $buffer .= $indent . '            <div class="left side mt-0">
';
            $buffer .= $indent . '                ';
            $value = $this->resolveValue($context->find('leftside'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '            <div class=\'right side mt-0 d-flex flex-gap-8\'>
';
            $buffer .= $indent . '                ';
            $value = $this->resolveValue($context->find('addnewsection'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '                ';
            $value = $this->resolveValue($context->find('optionmenu'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '        </div>
';
            $buffer .= $indent . '        <div class="content h-100">
';
            $buffer .= $indent . '            <div class="summary d-none">
';
            $buffer .= $indent . '            </div>
';
            $value = $context->find('addnewsection');
            $buffer .= $this->section3bd5ebf935a56c682dce2144e0fb84a4($context, $indent, $value);
            $value = $context->find('addnewsection');
            if (empty($value)) {
                
                $buffer .= $indent . '                <div class="section-header d-inline">
';
                $value = $context->find('hidden');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                        <a href="';
                    $value = $this->resolveValue($context->find('singlepageurl'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '" class="align-middle">
';
                }
                $buffer .= $indent . '                        <h2 class="sectionname m-0 d-inline bg-transparent text-clamp text-clamp-3" style="-webkit-box-orient: vertical;">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h2>
';
                $value = $context->find('hidden');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                        </a>
';
                }
                $buffer .= $indent . '                </div>
';
            }
            $value = $context->find('summary');
            $buffer .= $this->sectionF746df11044b86804d9ff86068ca95fc($context, $indent, $value);
            $buffer .= $indent . '            <div class="section-activities-summary">
';
            $value = $context->find('activityinfo');
            $buffer .= $this->section2a2d442f6dc70161004224d2998605ed($context, $indent, $value);
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '            <ul class="section">
';
            $buffer .= $indent . '            </ul>
';
            $value = $context->find('editsectionurl');
            $buffer .= $this->sectionFfd09553d3142166410db2a017ae241b($context, $indent, $value);
            $value = $context->find('hiddenmessage');
            $buffer .= $this->section26b06b9b47aacc63ca001a175d44219c($context, $indent, $value);
            $buffer .= $indent . '        </div>
';
            $buffer .= $indent . '        <div class="section-action-container  progress-bar-warpper card-bottom d-flex ';
            $value = $context->find('hidden');
            if (empty($value)) {
                
                $buffer .= 'text-primary';
            }
            $value = $context->find('hidden');
            $buffer .= $this->section84abb2ca392375a862f0cffdc8fe21b3($context, $indent, $value);
            $buffer .= '">
';
            $value = $context->find('progressinfo');
            $buffer .= $this->section8c89f7c9c6c999b9a46ef7ed50c6609f($context, $indent, $value);
            $buffer .= $indent . '        </div>
';
            $buffer .= $indent . '    </div>
';
            $buffer .= $indent . '</li>
';
        }

        return $buffer;
    }

    private function section57742138bdef30be2374d7f833a76e1e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a href="{{{removeurl}}}" class="{{removeurlclass}}">{{{removeicon}}} {{{strremovesection}}}</a>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->find('removeurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="';
                $value = $this->resolveValue($context->find('removeurlclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('removeicon'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('strremovesection'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE8821f813b283b300fd52213603d2a29(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a href="{{{addurl}}}" class="{{addurlclass}}">{{{addicon}}} {{{straddsection}}}</a>

            {{#strremovesection}}
            <a href="{{{removeurl}}}" class="{{removeurlclass}}">{{{removeicon}}} {{{strremovesection}}}</a>
            {{/strremovesection}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->find('addurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="';
                $value = $this->resolveValue($context->find('addurlclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('addicon'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('straddsection'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '
';
                $value = $context->find('strremovesection');
                $buffer .= $this->section57742138bdef30be2374d7f833a76e1e($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCb8cd96916634c45bcdf7cf18f3136f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div id="{{divid}}" class=" col-lg-4 col-md-6 col-sm-6 section main clearfix">
    <div class="single-card d-flex align-items-center">
        {{#numsections}}
            <a href="{{{addurl}}}" class="{{addurlclass}}">{{{addicon}}} {{{straddsection}}}</a>

            {{#strremovesection}}
            <a href="{{{removeurl}}}" class="{{removeurlclass}}">{{{removeicon}}} {{{strremovesection}}}</a>
            {{/strremovesection}}
        {{/numsections}}

        {{^numsections}}
            <a href="{{{url}}}" data-add-sections="{{{straddsections}}}">{{{icon}}} {{{straddsections}}}</a>
        {{/numsections}}
    </div>
</div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div id="';
                $value = $this->resolveValue($context->find('divid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class=" col-lg-4 col-md-6 col-sm-6 section main clearfix">
';
                $buffer .= $indent . '    <div class="single-card d-flex align-items-center">
';
                $value = $context->find('numsections');
                $buffer .= $this->sectionE8821f813b283b300fd52213603d2a29($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('numsections');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            <a href="';
                    $value = $this->resolveValue($context->find('url'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '" data-add-sections="';
                    $value = $this->resolveValue($context->find('straddsections'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '">';
                    $value = $this->resolveValue($context->find('icon'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= ' ';
                    $value = $this->resolveValue($context->find('straddsections'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '</a>
';
                }
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section02bb0d127d75132b515e5847739874fc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'sectionfirstimage';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'sectionfirstimage';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section85eb4f06bfc7ba2a9d01614cd2cad33c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'style="background: linear-gradient({{remuidefaultsectionoverlay}}),url({{sectionfirstimage}});
                background-repeat: no-repeat;
                background-size: cover;"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'style="background: linear-gradient(';
                $value = $this->resolveValue($context->find('remuidefaultsectionoverlay'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '),url(';
                $value = $this->resolveValue($context->find('sectionfirstimage'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ');
';
                $buffer .= $indent . '                background-repeat: no-repeat;
';
                $buffer .= $indent . '                background-size: cover;"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF8f779c7d96c4cffa783a994b9a92378(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="highlight text-primary"></div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="highlight text-primary"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3bd5ebf935a56c682dce2144e0fb84a4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <h2 class="sectionname m-0 d-inline bg-transparent text-clamp text-clamp-3" style="-webkit-box-orient: vertical;">{{{ title }}}
                    <div data-region="sectionbadges" class="sectionbadges d-inline mt-2">
                        {{> core_courseformat/local/content/section/badges }}
                    </div>
                </h2>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <h2 class="sectionname m-0 d-inline bg-transparent text-clamp text-clamp-3" style="-webkit-box-orient: vertical;">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                    <div data-region="sectionbadges" class="sectionbadges d-inline mt-2">
';
                if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/section/badges')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                        ');
                }
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF2b9acb9a95f8abcb628d6b23f8157ed(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'summary-muted';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'summary-muted';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF746df11044b86804d9ff86068ca95fc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="wdm-section-summary {{#hidden}}summary-muted{{/hidden}}">
                {{{ summary }}}
            </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="wdm-section-summary ';
                $value = $context->find('hidden');
                $buffer .= $this->sectionF2b9acb9a95f8abcb628d6b23f8157ed($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('summary'), $context);
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

    private function section2a2d442f6dc70161004224d2998605ed(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <span class="item {{#hidden}}text-muted{{/hidden}}">{{ . }}</span>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <span class="item ';
                $value = $context->find('hidden');
                $buffer .= $this->section84abb2ca392375a862f0cffdc8fe21b3($context, $indent, $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFfd09553d3142166410db2a017ae241b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a class="text-muted" href="{{ editsectionurl }}"><span><i class="fa fa-cog font-size-20" aria-hidden="true"></i></span></a>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <a class="text-muted" href="';
                $value = $this->resolveValue($context->find('editsectionurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"><span><i class="fa fa-cog font-size-20" aria-hidden="true"></i></span></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section26b06b9b47aacc63ca001a175d44219c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{{hiddenmessage}}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('hiddenmessage'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDcdfa22662763cd80f8d8c16df203158(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{percentage}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('percentage'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5b27c426f945a08deaa273fd578a4a7e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' Complete, format_remuiformat ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' Complete, format_remuiformat ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8bfeba1022fae8a2b3a27661bb3361db(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="progress progress-xs bg-grey-300 w-100">
                <div class="progress-bar bg-green-600"
                    style="width: {{#progressinfo}}{{{percentage}}}{{/progressinfo}}{{^progressinfo}}0{{/progressinfo}}%;"
                    role="progressbar">
                </div>
            </div>
            <div class="text-right progress-text  w-100">
                {{! progress }}
                <span>{{#progressinfo}}{{{percentage}}}{{/progressinfo}}{{^progressinfo}}0{{/progressinfo}}% {{#str}} Complete, format_remuiformat {{/str}}
                </span>
            </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="progress progress-xs bg-grey-300 w-100">
';
                $buffer .= $indent . '                <div class="progress-bar bg-green-600"
';
                $buffer .= $indent . '                    style="width: ';
                $value = $context->find('progressinfo');
                $buffer .= $this->sectionDcdfa22662763cd80f8d8c16df203158($context, $indent, $value);
                $value = $context->find('progressinfo');
                if (empty($value)) {
                    
                    $buffer .= '0';
                }
                $buffer .= '%;"
';
                $buffer .= $indent . '                    role="progressbar">
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="text-right progress-text  w-100">
';
                $buffer .= $indent . '                <span>';
                $value = $context->find('progressinfo');
                $buffer .= $this->sectionDcdfa22662763cd80f8d8c16df203158($context, $indent, $value);
                $value = $context->find('progressinfo');
                if (empty($value)) {
                    
                    $buffer .= '0';
                }
                $buffer .= '% ';
                $value = $context->find('str');
                $buffer .= $this->section5b27c426f945a08deaa273fd578a4a7e($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                </span>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8c89f7c9c6c999b9a46ef7ed50c6609f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#percentage}}
            <div class="progress progress-xs bg-grey-300 w-100">
                <div class="progress-bar bg-green-600"
                    style="width: {{#progressinfo}}{{{percentage}}}{{/progressinfo}}{{^progressinfo}}0{{/progressinfo}}%;"
                    role="progressbar">
                </div>
            </div>
            <div class="text-right progress-text  w-100">
                {{! progress }}
                <span>{{#progressinfo}}{{{percentage}}}{{/progressinfo}}{{^progressinfo}}0{{/progressinfo}}% {{#str}} Complete, format_remuiformat {{/str}}
                </span>
            </div>
            {{/percentage}}
                {{^percentage}}
                    {{{progress}}}
                {{/percentage}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('percentage');
                $buffer .= $this->section8bfeba1022fae8a2b3a27661bb3361db($context, $indent, $value);
                $value = $context->find('percentage');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                    ';
                    $value = $this->resolveValue($context->find('progress'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
