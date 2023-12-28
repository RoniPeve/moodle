<?php

class __Mustache_09ddf2ad021e565564f7a01b94bb45f9 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<head>
';
        $buffer .= $indent . '    <style>
';
        $buffer .= $indent . '        .table {
';
        $buffer .= $indent . '            font-size: 18px;
';
        $buffer .= $indent . '            margin-bottom: 20px;
';
        $buffer .= $indent . '            width: 40%;
';
        $buffer .= $indent . '            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '        .alert {
';
        $buffer .= $indent . '            position: relative;
';
        $buffer .= $indent . '            padding: 0.75rem 1.25rem;
';
        $buffer .= $indent . '            margin-bottom: 1rem;
';
        $buffer .= $indent . '            border: 0 solid transparent;
';
        $buffer .= $indent . '            border-radius: 0.5rem;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '        .alert-warning {
';
        $buffer .= $indent . '            color: #7d5a29;
';
        $buffer .= $indent . '            background-color: #fcefdc;
';
        $buffer .= $indent . '            border-color: #fbe8cd;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        .subject {
';
        $buffer .= $indent . '            background-color: #f8f9fa;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    </style>
';
        $buffer .= $indent . '</head>
';
        $buffer .= $indent . '<body>
';
        $buffer .= $indent . '<table class="table">
';
        $buffer .= $indent . '    <tr>
';
        $buffer .= $indent . '        <td class="subject"><br /><b>';
        $value = $context->find('str');
        $buffer .= $this->section411daaea8315a7bb9c406184e5f09e10($context, $indent, $value);
        $buffer .= ':</b> ';
        $value = $this->resolveValue($context->find('subject'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '<br /><br /></td>
';
        $buffer .= $indent . '    </tr>
';
        $buffer .= $indent . '    <tr>
';
        $buffer .= $indent . '        <td>
';
        $buffer .= $indent . '            <table style="width: 100%;">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <thead>
';
        $buffer .= $indent . '                <tr>
';
        $value = $context->find('notloggedinuser');
        $buffer .= $this->sectionF1bf8522fe17c7412aadd74b4226dd79($context, $indent, $value);
        $buffer .= $indent . '                </tr>
';
        $buffer .= $indent . '                </thead>
';
        $buffer .= $indent . '                <tbody>
';
        $buffer .= $indent . '                <tr>
';
        $buffer .= $indent . '                    <td colspan="2"><br /></td>
';
        $buffer .= $indent . '                </tr>
';
        $buffer .= $indent . '                <tr>
';
        $buffer .= $indent . '                    <td>&nbsp;<b>';
        $value = $context->find('str');
        $buffer .= $this->section8111cbf56118aa58f390da519737a980($context, $indent, $value);
        $buffer .= '</b></td>
';
        $buffer .= $indent . '                    <td>';
        $value = $this->resolveValue($context->find('name'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</td>
';
        $buffer .= $indent . '                </tr>
';
        $buffer .= $indent . '                <tr>
';
        $buffer .= $indent . '                    <td colspan="2"><hr></td>
';
        $buffer .= $indent . '                </tr>
';
        $buffer .= $indent . '                <tr style="border-top: 10px" >
';
        $buffer .= $indent . '                    <td >&nbsp;<b>';
        $value = $context->find('str');
        $buffer .= $this->section9b01e301d72d5046cc7d35b0c7a88526($context, $indent, $value);
        $buffer .= '</b></td>
';
        $buffer .= $indent . '                    <td>';
        $value = $this->resolveValue($context->find('email'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</td>
';
        $buffer .= $indent . '                </tr>
';
        $buffer .= $indent . '                <tr>
';
        $buffer .= $indent . '                    <td colspan="2"><hr></td>
';
        $buffer .= $indent . '                </tr>
';
        $buffer .= $indent . '                <tr>
';
        $buffer .= $indent . '                    <td>&nbsp;<b>';
        $value = $context->find('str');
        $buffer .= $this->section1dee8adaf405bfc6db6cbb048fef1653($context, $indent, $value);
        $buffer .= '</b></td>
';
        $buffer .= $indent . '                    <td>';
        $value = $this->resolveValue($context->find('message'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</td>
';
        $buffer .= $indent . '                </tr>
';
        $buffer .= $indent . '                </tbody>
';
        $buffer .= $indent . '            </table>
';
        $buffer .= $indent . '        </td>
';
        $buffer .= $indent . '    </tr>
';
        $buffer .= $indent . '</table>
';
        $buffer .= $indent . '</body>
';

        return $buffer;
    }

    private function section411daaea8315a7bb9c406184e5f09e10(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'subject';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'subject';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBfd41fbd5e86e2eee5ee1e1dd30a0e94(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'supportmessagesentforloggedoutuser, user';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'supportmessagesentforloggedoutuser, user';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF1bf8522fe17c7412aadd74b4226dd79(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <td class="alert alert-warning" colspan="2">
                        {{#str}}supportmessagesentforloggedoutuser, user{{/str}}
                    </td>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <td class="alert alert-warning" colspan="2">
';
                $buffer .= $indent . '                        ';
                $value = $context->find('str');
                $buffer .= $this->sectionBfd41fbd5e86e2eee5ee1e1dd30a0e94($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </td>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8111cbf56118aa58f390da519737a980(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'name';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'name';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9b01e301d72d5046cc7d35b0c7a88526(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'email';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'email';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1dee8adaf405bfc6db6cbb048fef1653(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'description';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'description';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
