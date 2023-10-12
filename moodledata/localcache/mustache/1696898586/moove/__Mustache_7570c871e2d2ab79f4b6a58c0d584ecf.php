<?php

class __Mustache_7570c871e2d2ab79f4b6a58c0d584ecf extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('competencycount');
        $buffer .= $this->section9e666f960518601bc19ae8946d721d56($context, $indent, $value);

        return $buffer;
    }

    private function sectionAbee49c427ef59303f760c27eb9fe51e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'xcompetenciesproficientoutofyincourse, tool_lp, { "x": "{{proficientcompetencycount}}", "y": "{{competencycount}}" } ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'xcompetenciesproficientoutofyincourse, tool_lp, { "x": "';
                $value = $this->resolveValue($context->find('proficientcompetencycount'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '", "y": "';
                $value = $this->resolveValue($context->find('competencycount'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" } ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC14a95a0de84ccc94b61124d38c9f837(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{< tool_lp/progress_bar}}
            {{$progresstext}}
                {{#str}}xcompetenciesproficientoutofyincourse, tool_lp, { "x": "{{proficientcompetencycount}}", "y": "{{competencycount}}" } {{/str}}
            {{/progresstext}}
            {{$percentage}}{{proficientcompetencypercentage}}{{/percentage}}
            {{$percentlabel}}{{proficientcompetencypercentageformatted}}&nbsp;%{{/percentlabel}}
        {{/tool_lp/progress_bar}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        ';
                if ($parent = $this->mustache->loadPartial('tool_lp/progress_bar')) {
                    $context->pushBlockContext(array(
                        'progresstext' => array($this, 'blockB42f75d29c63bcd9ebfb8f8c9aadb3d8'),
                        'percentage' => array($this, 'block1b82bac63a2cb6a2917b31d2be2edb5f'),
                        'percentlabel' => array($this, 'blockB89927fa8fd22000937699b705acbc11'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section99630888f48fb1a71fef2aba23a7f491(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'competenciesmostoftennotproficientincourse, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'competenciesmostoftennotproficientincourse, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFae5ed775f100e67944179c4f698dd5d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a href="#competency-info-link-{{id}}">
                <div><p>{{{shortname}}} <em>{{idnumber}}</em></p></div>
                </a>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <a href="#competency-info-link-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                <div><p>';
                $value = $this->resolveValue($context->find('shortname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' <em>';
                $value = $this->resolveValue($context->find('idnumber'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</em></p></div>
';
                $buffer .= $indent . '                </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2fbdfbb344d06c2ad3749850da5f0d33(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div>
        <div>
            <p>{{#str}}competenciesmostoftennotproficientincourse, tool_lp{{/str}}</p>
        </div>
        <div>
            {{#leastproficient}}
                <a href="#competency-info-link-{{id}}">
                <div><p>{{{shortname}}} <em>{{idnumber}}</em></p></div>
                </a>
            {{/leastproficient}}
        </div>
    </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '    <div>
';
                $buffer .= $indent . '        <div>
';
                $buffer .= $indent . '            <p>';
                $value = $context->find('str');
                $buffer .= $this->section99630888f48fb1a71fef2aba23a7f491($context, $indent, $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <div>
';
                $value = $context->find('leastproficient');
                $buffer .= $this->sectionFae5ed775f100e67944179c4f698dd5d($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section19ce414d02f113a841450cfed5a702df(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#leastproficientcount}}
    <div>
        <div>
            <p>{{#str}}competenciesmostoftennotproficientincourse, tool_lp{{/str}}</p>
        </div>
        <div>
            {{#leastproficient}}
                <a href="#competency-info-link-{{id}}">
                <div><p>{{{shortname}}} <em>{{idnumber}}</em></p></div>
                </a>
            {{/leastproficient}}
        </div>
    </div>
    {{/leastproficientcount}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('leastproficientcount');
                $buffer .= $this->section2fbdfbb344d06c2ad3749850da5f0d33($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9e666f960518601bc19ae8946d721d56(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div data-region="coursecompetencystatistics" class="border p-2 mb-2">
    {{#canbegradedincourse}}
        {{< tool_lp/progress_bar}}
            {{$progresstext}}
                {{#str}}xcompetenciesproficientoutofyincourse, tool_lp, { "x": "{{proficientcompetencycount}}", "y": "{{competencycount}}" } {{/str}}
            {{/progresstext}}
            {{$percentage}}{{proficientcompetencypercentage}}{{/percentage}}
            {{$percentlabel}}{{proficientcompetencypercentageformatted}}&nbsp;%{{/percentlabel}}
        {{/tool_lp/progress_bar}}
    {{/canbegradedincourse}}
    {{#canmanagecoursecompetencies}}
    {{#leastproficientcount}}
    <div>
        <div>
            <p>{{#str}}competenciesmostoftennotproficientincourse, tool_lp{{/str}}</p>
        </div>
        <div>
            {{#leastproficient}}
                <a href="#competency-info-link-{{id}}">
                <div><p>{{{shortname}}} <em>{{idnumber}}</em></p></div>
                </a>
            {{/leastproficient}}
        </div>
    </div>
    {{/leastproficientcount}}
    {{/canmanagecoursecompetencies}}
</div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div data-region="coursecompetencystatistics" class="border p-2 mb-2">
';
                $value = $context->find('canbegradedincourse');
                $buffer .= $this->sectionC14a95a0de84ccc94b61124d38c9f837($context, $indent, $value);
                $value = $context->find('canmanagecoursecompetencies');
                $buffer .= $this->section19ce414d02f113a841450cfed5a702df($context, $indent, $value);
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function blockB42f75d29c63bcd9ebfb8f8c9aadb3d8($context)
    {
        $indent = $buffer = '';
        $buffer .= '                ';
        $value = $context->find('str');
        $buffer .= $this->sectionAbee49c427ef59303f760c27eb9fe51e($context, $indent, $value);
        $buffer .= '
';
    
        return $buffer;
    }

    public function block1b82bac63a2cb6a2917b31d2be2edb5f($context)
    {
        $indent = $buffer = '';
        $value = $this->resolveValue($context->find('proficientcompetencypercentage'), $context);
        $buffer .= $indent . ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
    
        return $buffer;
    }

    public function blockB89927fa8fd22000937699b705acbc11($context)
    {
        $indent = $buffer = '';
        $value = $this->resolveValue($context->find('proficientcompetencypercentageformatted'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '&nbsp;%';
    
        return $buffer;
    }
}
