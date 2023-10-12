<?php

class __Mustache_05857cc93dd47cab67d03054f317b629 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('moveicon');
        $buffer .= $this->section2e7d3cdfffee27291ffca5f384d8d23d($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '<div class="activity-basis d-flex align-items-center">
';
        $buffer .= $indent . '    <div class="d-flex flex-column flex-md-row w-100 align-self-start">
';
        $value = $context->find('hasname');
        if (empty($value)) {
            
            $blockFunction = $context->findInBlock('core_courseformat/local/content/cm/badges');
            if (is_callable($blockFunction)) {
                $buffer .= call_user_func($blockFunction, $context);
            } else {
                if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/cm/badges')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
            }
        }
        $value = $context->find('cmname');
        $buffer .= $this->section0464ab0f2c2189000ac9f82c87d0ba52($context, $indent, $value);
        $value = $context->find('afterlink');
        $buffer .= $this->section0a04216c0fcdcce444e96d9e4eafbbd0($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('activityinfo');
        $buffer .= $this->section15734771dfd5a29d994a2fcb9c1dcf09($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $value = $context->find('controlmenu');
        $buffer .= $this->section464bfe3be32158f4b5316348344a3812($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $value = $context->find('hasname');
        $buffer .= $this->section985e52f7d7241ddca1032562fdb55ed3($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="description">
';
        $value = $context->find('activityinfo');
        $buffer .= $this->section10da1fa4520d29d13be0b367ef5178aa($context, $indent, $value);
        $value = $context->find('altcontent');
        $buffer .= $this->section321ad334974d0ba89d2701b48d9f8c3f($context, $indent, $value);
        $value = $context->find('modavailability');
        $buffer .= $this->section40e5ff1584bce762eb1b8f1bd5366ec3($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section2e7d3cdfffee27291ffca5f384d8d23d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{{moveicon}}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . ' ';
                $value = $this->resolveValue($context->find('moveicon'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0464ab0f2c2189000ac9f82c87d0ba52(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{$ core_courseformat/local/content/cm/cmname }}
                {{> core_courseformat/local/content/cm/cmname }}
            {{/ core_courseformat/local/content/cm/cmname }}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $blockFunction = $context->findInBlock('core_courseformat/local/content/cm/cmname');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/cm/cmname')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                ');
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0a04216c0fcdcce444e96d9e4eafbbd0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="afterlink d-flex align-items-center ml-3">
                {{{afterlink}}}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="afterlink d-flex align-items-center ml-3">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('afterlink'), $context);
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

    private function section15734771dfd5a29d994a2fcb9c1dcf09(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="activity-info mt-1 mt-md-0">
                {{$ core_courseformat/local/content/cm/activity_info}}
                    {{> core_courseformat/local/content/cm/activity_info}}
                {{/ core_courseformat/local/content/cm/activity_info}}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="activity-info mt-1 mt-md-0">
';
                $blockFunction = $context->findInBlock('core_courseformat/local/content/cm/activity_info');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/cm/activity_info')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                    ');
                    }
                }
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section464bfe3be32158f4b5316348344a3812(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="activity-actions bulk-hidden align-self-start">
            {{$ core_courseformat/local/content/cm/controlmenu }}
                {{> core_courseformat/local/content/cm/controlmenu }}
            {{/ core_courseformat/local/content/cm/controlmenu }}
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="activity-actions bulk-hidden align-self-start">
';
                $blockFunction = $context->findInBlock('core_courseformat/local/content/cm/controlmenu');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/cm/controlmenu')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                ');
                    }
                }
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section985e52f7d7241ddca1032562fdb55ed3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{$ core_courseformat/local/content/cm/badges }}
        {{> core_courseformat/local/content/cm/badges }}
    {{/ core_courseformat/local/content/cm/badges }}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $blockFunction = $context->findInBlock('core_courseformat/local/content/cm/badges');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/cm/badges')) {
                        $buffer .= $partial->renderInternal($context, $indent . '        ');
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section67e83a65d8a92f83c7b5347c2d6d3e12(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{$core_course/activity_date}}
                        {{>core_course/activity_date}}
                    {{/core_course/activity_date}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $blockFunction = $context->findInBlock('core_course/activity_date');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    if ($partial = $this->mustache->loadPartial('core_course/activity_date')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                        ');
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC7078378afda3e88ff48b4dce3432f1b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div data-region="activity-dates" class="activity-dates small course-description-item">
            <div class="description-inner">
                {{#activitydates}}
                    {{$core_course/activity_date}}
                        {{>core_course/activity_date}}
                    {{/core_course/activity_date}}
                {{/activitydates}}
            </div>
        </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div data-region="activity-dates" class="activity-dates small course-description-item">
';
                $buffer .= $indent . '            <div class="description-inner">
';
                $value = $context->find('activitydates');
                $buffer .= $this->section67e83a65d8a92f83c7b5347c2d6d3e12($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section10da1fa4520d29d13be0b367ef5178aa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#hasdates}}
        <div data-region="activity-dates" class="activity-dates small course-description-item">
            <div class="description-inner">
                {{#activitydates}}
                    {{$core_course/activity_date}}
                        {{>core_course/activity_date}}
                    {{/core_course/activity_date}}
                {{/activitydates}}
            </div>
        </div>
        {{/hasdates}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('hasdates');
                $buffer .= $this->sectionC7078378afda3e88ff48b4dce3432f1b($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section69c91652e95c0b61f64743c564ab74e2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'course-description-item small';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'course-description-item small';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section321ad334974d0ba89d2701b48d9f8c3f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="activity-altcontent {{#hasname}}course-description-item small{{/hasname}}{{^hasname}}contentwithoutlink{{/hasname}} d-flex">
            <div class="flex-fill description-inner text-break">
                {{{altcontent}}}
            </div>
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="activity-altcontent ';
                $value = $context->find('hasname');
                $buffer .= $this->section69c91652e95c0b61f64743c564ab74e2($context, $indent, $value);
                $value = $context->find('hasname');
                if (empty($value)) {
                    
                    $buffer .= 'contentwithoutlink';
                }
                $buffer .= ' d-flex">
';
                $buffer .= $indent . '            <div class="flex-fill description-inner text-break">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('altcontent'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
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

    private function section40e5ff1584bce762eb1b8f1bd5366ec3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{$ core_courseformat/local/content/cm/availability }}
            {{> core_courseformat/local/content/cm/availability }}
        {{/ core_courseformat/local/content/cm/availability }}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $blockFunction = $context->findInBlock('core_courseformat/local/content/cm/availability');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/cm/availability')) {
                        $buffer .= $partial->renderInternal($context, $indent . '            ');
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
