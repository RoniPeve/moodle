<?php

class __Mustache_b8e7fa30bc6cac4e2a4583765d58d0b2 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="section-group" id="accordion" role="tablist" aria-multiselectable="true">
';
        $value = $context->find('sections');
        $buffer .= $this->section9d4b6d0d1ce8fc6d55c0cd3a0050d9b7($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section86e41fa839aef99fd6acea8c105dd3bd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <a href="{{{url}}}">{{{title}}}</a>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3e7bf0f5a4a1c5820414138171431f14(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <a href="{{{url}}}">{{{title}}}</a>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE2b9b4c58c488bf8695a7635bbbba980(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <a class="expand-arrow" role="button" data-toggle="collapse"
                                       data-parent="#accordion" href="#collapse{{number}}" aria-expanded="true"
                                       aria-controls="collapse{{number}}">
                                    </a>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <a class="expand-arrow" role="button" data-toggle="collapse"
';
                $buffer .= $indent . '                                       data-parent="#accordion" href="#collapse';
                $value = $this->resolveValue($context->find('number'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" aria-expanded="true"
';
                $buffer .= $indent . '                                       aria-controls="collapse';
                $value = $this->resolveValue($context->find('number'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                                    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD6f3579e690f007b309396379cd77c07(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <li class="arrowaccordion">
                                {{#hasmodules}}
                                    <a class="expand-arrow" role="button" data-toggle="collapse"
                                       data-parent="#accordion" href="#collapse{{number}}" aria-expanded="true"
                                       aria-controls="collapse{{number}}">
                                    </a>
                                {{/hasmodules}}
                            </li>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <li class="arrowaccordion">
';
                $value = $context->find('hasmodules');
                $buffer .= $this->sectionE2b9b4c58c488bf8695a7635bbbba980($context, $indent, $value);
                $buffer .= $indent . '                            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section14c724f5a6859d4cc56d9befdffaeac5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'show';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'show';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section74970569e8202443e2bbd2e024fdc39b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'modulenavigationlabel';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'modulenavigationlabel';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF15b6c5ed2f375fbbe25d7c30c54dc0f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <div class="completionbox">
                                                <div class="completioncheck {{completeclass}}">
                                                </div>
                                            </div>
                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                            <div class="completionbox">
';
                $buffer .= $indent . '                                                <div class="completioncheck ';
                $value = $this->resolveValue($context->find('completeclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF94d4d2e2c7fc72a97bd0bf885fbfee3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{^onlytitles}}
                                <li>
                                    <a href="{{{url}}}" class="{{active}} {{#label}}modulenavigationlabel{{/label}}" onclick="{{{onclick}}}">
                                        {{#completionon}}
                                            <div class="completionbox">
                                                <div class="completioncheck {{completeclass}}">
                                                </div>
                                            </div>
                                        {{/completionon}}
                                        <div class="activityname">
                                            {{{name}}}
                                        </div>
                                    </a>
                                </li>
                            {{/onlytitles}}
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('onlytitles');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                <li>
';
                    $buffer .= $indent . '                                    <a href="';
                    $value = $this->resolveValue($context->find('url'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '" class="';
                    $value = $this->resolveValue($context->find('active'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= ' ';
                    $value = $context->find('label');
                    $buffer .= $this->section74970569e8202443e2bbd2e024fdc39b($context, $indent, $value);
                    $buffer .= '" onclick="';
                    $value = $this->resolveValue($context->find('onclick'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '">
';
                    $value = $context->find('completionon');
                    $buffer .= $this->sectionF15b6c5ed2f375fbbe25d7c30c54dc0f($context, $indent, $value);
                    $buffer .= $indent . '                                        <div class="activityname">
';
                    $buffer .= $indent . '                                            ';
                    $value = $this->resolveValue($context->find('name'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                                        </div>
';
                    $buffer .= $indent . '                                    </a>
';
                    $buffer .= $indent . '                                </li>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9d4b6d0d1ce8fc6d55c0cd3a0050d9b7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="section section-default">
            <div class="module-navigation-section-heading" role="tab" id="heading{{number}}">
                <div class="section-title">
                    <ul class="allpagination">
                        <li class="allsectionnames">
                            {{#collapse}}
                            <a href="{{{url}}}">{{{title}}}</a>
                            {{/collapse}}
                            {{^collapse}}
                                {{#onlytitles}}
                                    <a href="{{{url}}}">{{{title}}}</a>
                                {{/onlytitles}}
                                {{^onlytitles}}
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{number}}"
                                   aria-expanded="true" aria-controls="collapse{{number}}">{{{title}}}</a>
                                {{/onlytitles}}
                            {{/collapse}}
                        </li>
                        {{#collapse}}
                            <li class="arrowaccordion">
                                {{#hasmodules}}
                                    <a class="expand-arrow" role="button" data-toggle="collapse"
                                       data-parent="#accordion" href="#collapse{{number}}" aria-expanded="true"
                                       aria-controls="collapse{{number}}">
                                    </a>
                                {{/hasmodules}}
                            </li>
                        {{/collapse}}
                    </ul>
                </div>
            </div>
            <div id="collapse{{number}}" class="section-collapse collapse {{#selected}}show{{/selected}}"
                 role="tabsection" aria-labelledby="heading{{number}}">
                <div class="section-body">
                    <ul class="activities">
                        {{#modules}}
                            {{^onlytitles}}
                                <li>
                                    <a href="{{{url}}}" class="{{active}} {{#label}}modulenavigationlabel{{/label}}" onclick="{{{onclick}}}">
                                        {{#completionon}}
                                            <div class="completionbox">
                                                <div class="completioncheck {{completeclass}}">
                                                </div>
                                            </div>
                                        {{/completionon}}
                                        <div class="activityname">
                                            {{{name}}}
                                        </div>
                                    </a>
                                </li>
                            {{/onlytitles}}
                        {{/modules}}
                    </ul>
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
                
                $buffer .= $indent . '        <div class="section section-default">
';
                $buffer .= $indent . '            <div class="module-navigation-section-heading" role="tab" id="heading';
                $value = $this->resolveValue($context->find('number'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                <div class="section-title">
';
                $buffer .= $indent . '                    <ul class="allpagination">
';
                $buffer .= $indent . '                        <li class="allsectionnames">
';
                $value = $context->find('collapse');
                $buffer .= $this->section86e41fa839aef99fd6acea8c105dd3bd($context, $indent, $value);
                $value = $context->find('collapse');
                if (empty($value)) {
                    
                    $value = $context->find('onlytitles');
                    $buffer .= $this->section3e7bf0f5a4a1c5820414138171431f14($context, $indent, $value);
                    $value = $context->find('onlytitles');
                    if (empty($value)) {
                        
                        $buffer .= $indent . '                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse';
                        $value = $this->resolveValue($context->find('number'), $context);
                        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                        $buffer .= '"
';
                        $buffer .= $indent . '                                   aria-expanded="true" aria-controls="collapse';
                        $value = $this->resolveValue($context->find('number'), $context);
                        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                        $buffer .= '">';
                        $value = $this->resolveValue($context->find('title'), $context);
                        $buffer .= ($value === null ? '' : $value);
                        $buffer .= '</a>
';
                    }
                }
                $buffer .= $indent . '                        </li>
';
                $value = $context->find('collapse');
                $buffer .= $this->sectionD6f3579e690f007b309396379cd77c07($context, $indent, $value);
                $buffer .= $indent . '                    </ul>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div id="collapse';
                $value = $this->resolveValue($context->find('number'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="section-collapse collapse ';
                $value = $context->find('selected');
                $buffer .= $this->section14c724f5a6859d4cc56d9befdffaeac5($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                 role="tabsection" aria-labelledby="heading';
                $value = $this->resolveValue($context->find('number'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                <div class="section-body">
';
                $buffer .= $indent . '                    <ul class="activities">
';
                $value = $context->find('modules');
                $buffer .= $this->sectionF94d4d2e2c7fc72a97bd0bf885fbfee3($context, $indent, $value);
                $buffer .= $indent . '                    </ul>
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

}
