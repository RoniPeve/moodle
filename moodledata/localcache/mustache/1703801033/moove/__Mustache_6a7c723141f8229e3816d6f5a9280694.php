<?php

class __Mustache_6a7c723141f8229e3816d6f5a9280694 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="event-filter-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="calendar_filters mt-2">
';
        $buffer .= $indent . '    <ul>
';
        $value = $context->find('eventtypes');
        $buffer .= $this->section0854f77ec03edf5fdab2d34d3318c0d8($context, $indent, $value);
        $buffer .= $indent . '    </ul>
';
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->section786bbd7fc879fac95136523e4bc9ca0f($context, $indent, $value);

        return $buffer;
    }

    private function section0854f77ec03edf5fdab2d34d3318c0d8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <li>
                {{> core_calendar/event_filter_key }}
            </li>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <li>
';
                if ($partial = $this->mustache->loadPartial('core_calendar/event_filter_key')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section786bbd7fc879fac95136523e4bc9ca0f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'jquery\', \'core_calendar/calendar_filter\'], function($, CalendarFilter) {
    CalendarFilter.init($("#event-filter-{{uniqid}}"));
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'jquery\', \'core_calendar/calendar_filter\'], function($, CalendarFilter) {
';
                $buffer .= $indent . '    CalendarFilter.init($("#event-filter-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"));
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
