<?php

class __Mustache_75eadd2bfa920ce8d10a06ce90000adf extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div
';
        $buffer .= $indent . '        id="message-index-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '        class="message-app main bg-light border flex-row"
';
        $buffer .= $indent . '        aria-expanded="false"
';
        $buffer .= $indent . '        aria-hidden="true"
';
        $buffer .= $indent . '        data-region="message-index"
';
        $buffer .= $indent . '        role="region"
';
        $buffer .= $indent . '>
';
        $buffer .= $indent . '    <div class="container-fluid">
';
        $buffer .= $indent . '        <div class="row h-100 no-gutters">
';
        $buffer .= $indent . '            <div class="col-4 d-flex flex-column conversationcontainer">
';
        $buffer .= $indent . '                <div class="border-right h-100">
';
        $buffer .= $indent . '                    <div class="panel-header-container" data-region="panel-header-container">
';
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_overview_header')) {
            $buffer .= $partial->renderInternal($context, $indent . '                        ');
        }
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_search_header')) {
            $buffer .= $partial->renderInternal($context, $indent . '                        ');
        }
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <div class="panel-body-container" data-region="panel-body-container">
';
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_overview_body')) {
            $buffer .= $partial->renderInternal($context, $indent . '                        ');
        }
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_search_body')) {
            $buffer .= $partial->renderInternal($context, $indent . '                        ');
        }
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="col-8 d-flex flex-column">
';
        $buffer .= $indent . '                <div class="header-container position-relative" data-region="header-container">
';
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_contacts_header')) {
            $buffer .= $partial->renderInternal($context, $indent . '                    ');
        }
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_conversation_header')) {
            $buffer .= $partial->renderInternal($context, $indent . '                    ');
        }
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_settings_header')) {
            $buffer .= $partial->renderInternal($context, $indent . '                    ');
        }
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="body-container position-relative" data-region="body-container">
';
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_contact_body')) {
            $buffer .= $partial->renderInternal($context, $indent . '                    ');
        }
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_contacts_body')) {
            $buffer .= $partial->renderInternal($context, $indent . '                    ');
        }
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_conversation_body')) {
            $buffer .= $partial->renderInternal($context, $indent . '                    ');
        }
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_group_info_body')) {
            $buffer .= $partial->renderInternal($context, $indent . '                    ');
        }
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_settings_body')) {
            $buffer .= $partial->renderInternal($context, $indent . '                    ');
        }
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="footer-container position-relative" data-region="footer-container">
';
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_conversation_footer')) {
            $buffer .= $partial->renderInternal($context, $indent . '                    ');
        }
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_overview_footer')) {
            $buffer .= $partial->renderInternal($context, $indent . '                    ');
        }
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->sectionAdcc35e2fdd5b03bfcb4b8be5943d983($context, $indent, $value);

        return $buffer;
    }

    private function sectionAdcc35e2fdd5b03bfcb4b8be5943d983(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'jquery\', \'core_message/message_drawer\'], function($, MessageDrawer) {
    var root = $(\'#message-index-{{uniqid}}\');
    MessageDrawer.init(root, \'{{uniqid}}\', true, {{{route}}});
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require([\'jquery\', \'core_message/message_drawer\'], function($, MessageDrawer) {
';
                $buffer .= $indent . '    var root = $(\'#message-index-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\');
';
                $buffer .= $indent . '    MessageDrawer.init(root, \'';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\', true, ';
                $value = $this->resolveValue($context->find('route'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ');
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
