<?php

class __Mustache_3cd699d75e1e4b6283898c5bc8abff12 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<h2>';
        $value = $context->find('str');
        $buffer .= $this->sectionA9fa3cea452fcbc9c330a142ca6222c1($context, $indent, $value);
        $buffer .= '</h2>
';
        $buffer .= $indent . '<p>';
        $value = $context->find('str');
        $buffer .= $this->sectionA60367ab87a21cc3a9d64f34c6e3a090($context, $indent, $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '<div>
';
        $value = $context->find('contexts');
        $buffer .= $this->sectionD08780ad388336fc3f3f9621de14f835($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionA9fa3cea452fcbc9c330a142ca6222c1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'dataretentionsummary, tool_dataprivacy';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'dataretentionsummary, tool_dataprivacy';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA60367ab87a21cc3a9d64f34c6e3a090(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'dataretentionexplanation, tool_dataprivacy';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'dataretentionexplanation, tool_dataprivacy';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEcc3ba95b075a3e338ee32c4f33d175a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'category, tool_dataprivacy';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'category, tool_dataprivacy';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD9f562cf2996188427d955203fb3915c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <h4>{{#str}}category, tool_dataprivacy{{/str}}</h4>
                <dl>
                    <dt>{{category.name}}</dt>
                    <dd>{{{category.description}}}</dd>
                </dl>
                <hr />
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <h4>';
                $value = $context->find('str');
                $buffer .= $this->sectionEcc3ba95b075a3e338ee32c4f33d175a($context, $indent, $value);
                $buffer .= '</h4>
';
                $buffer .= $indent . '                <dl>
';
                $buffer .= $indent . '                    <dt>';
                $value = $this->resolveValue($context->findDot('category.name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</dt>
';
                $buffer .= $indent . '                    <dd>';
                $value = $this->resolveValue($context->findDot('category.description'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</dd>
';
                $buffer .= $indent . '                </dl>
';
                $buffer .= $indent . '                <hr />
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6c429800acb53201e1b06c550900c95a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'purpose, tool_dataprivacy';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'purpose, tool_dataprivacy';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC04f08d64cb07854afda0f41d784ff57(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'retentionperiod, tool_dataprivacy';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'retentionperiod, tool_dataprivacy';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6360cedfa4c657a6a9c7ee41b86ea091(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'lawfulbases, tool_dataprivacy';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'lawfulbases, tool_dataprivacy';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB1709b0002a49fbf13bb6247c9d4593e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <tr>
                            <td>{{name}}</td>
                            <td>{{description}}</td>
                        </tr>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <tr>
';
                $buffer .= $indent . '                            <td>';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</td>
';
                $buffer .= $indent . '                            <td>';
                $value = $this->resolveValue($context->find('description'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</td>
';
                $buffer .= $indent . '                        </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section021f446c29ad7765bc272b90425b717f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <table class="table table-bordered">
                    <thead><tr><th colspan="2">{{#str}}lawfulbases, tool_dataprivacy{{/str}}</th></tr></thead>
                    <tbody>
                    {{#purpose.formattedlawfulbases}}
                        <tr>
                            <td>{{name}}</td>
                            <td>{{description}}</td>
                        </tr>
                    {{/purpose.formattedlawfulbases}}
                    </tbody>
                </table>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <table class="table table-bordered">
';
                $buffer .= $indent . '                    <thead><tr><th colspan="2">';
                $value = $context->find('str');
                $buffer .= $this->section6360cedfa4c657a6a9c7ee41b86ea091($context, $indent, $value);
                $buffer .= '</th></tr></thead>
';
                $buffer .= $indent . '                    <tbody>
';
                $value = $context->findDot('purpose.formattedlawfulbases');
                $buffer .= $this->sectionB1709b0002a49fbf13bb6247c9d4593e($context, $indent, $value);
                $buffer .= $indent . '                    </tbody>
';
                $buffer .= $indent . '                </table>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5f8bfc38baba54d719675dcad6a1b595(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'sensitivedatareasons, tool_dataprivacy';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'sensitivedatareasons, tool_dataprivacy';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD7506dd6e198900226a8166efe90f786(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <table class="table table-bordered">
                    <thead><tr><th colspan="2">{{#str}}sensitivedatareasons, tool_dataprivacy{{/str}}</th></tr></thead>
                    <tbody>
                    {{#purpose.formattedsensitivedatareasons}}
                        <tr>
                            <td>{{name}}</td>
                            <td>{{description}}</td>
                        </tr>
                    {{/purpose.formattedsensitivedatareasons}}
                    </tbody>
                </table>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <table class="table table-bordered">
';
                $buffer .= $indent . '                    <thead><tr><th colspan="2">';
                $value = $context->find('str');
                $buffer .= $this->section5f8bfc38baba54d719675dcad6a1b595($context, $indent, $value);
                $buffer .= '</th></tr></thead>
';
                $buffer .= $indent . '                    <tbody>
';
                $value = $context->findDot('purpose.formattedsensitivedatareasons');
                $buffer .= $this->sectionB1709b0002a49fbf13bb6247c9d4593e($context, $indent, $value);
                $buffer .= $indent . '                    </tbody>
';
                $buffer .= $indent . '                </table>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD08780ad388336fc3f3f9621de14f835(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="card mb-3">
            <div class="card-header"><h3>{{contextname}}</h3></div>
            <div class="card-body pl-5 pr-5">

                {{#category.name}}
                <h4>{{#str}}category, tool_dataprivacy{{/str}}</h4>
                <dl>
                    <dt>{{category.name}}</dt>
                    <dd>{{{category.description}}}</dd>
                </dl>
                <hr />
                {{/category.name}}
                <h4>{{#str}}purpose, tool_dataprivacy{{/str}}</h4>
                <dl>
                    <dt>{{purpose.name}}</dt>
                    <dd>{{{purpose.description}}}</dd>
                    <dt>{{#str}}retentionperiod, tool_dataprivacy{{/str}}</dt>
                    <dd>{{purpose.formattedretentionperiod}}</dd>
                </dl>
                {{#purpose.lawfulbases}}
                <table class="table table-bordered">
                    <thead><tr><th colspan="2">{{#str}}lawfulbases, tool_dataprivacy{{/str}}</th></tr></thead>
                    <tbody>
                    {{#purpose.formattedlawfulbases}}
                        <tr>
                            <td>{{name}}</td>
                            <td>{{description}}</td>
                        </tr>
                    {{/purpose.formattedlawfulbases}}
                    </tbody>
                </table>
                {{/purpose.lawfulbases}}
                {{#purpose.sensitivedatareasons}}
                <table class="table table-bordered">
                    <thead><tr><th colspan="2">{{#str}}sensitivedatareasons, tool_dataprivacy{{/str}}</th></tr></thead>
                    <tbody>
                    {{#purpose.formattedsensitivedatareasons}}
                        <tr>
                            <td>{{name}}</td>
                            <td>{{description}}</td>
                        </tr>
                    {{/purpose.formattedsensitivedatareasons}}
                    </tbody>
                </table>
                {{/purpose.sensitivedatareasons}}
            </div>
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="card mb-3">
';
                $buffer .= $indent . '            <div class="card-header"><h3>';
                $value = $this->resolveValue($context->find('contextname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h3></div>
';
                $buffer .= $indent . '            <div class="card-body pl-5 pr-5">
';
                $buffer .= $indent . '
';
                $value = $context->findDot('category.name');
                $buffer .= $this->sectionD9f562cf2996188427d955203fb3915c($context, $indent, $value);
                $buffer .= $indent . '                <h4>';
                $value = $context->find('str');
                $buffer .= $this->section6c429800acb53201e1b06c550900c95a($context, $indent, $value);
                $buffer .= '</h4>
';
                $buffer .= $indent . '                <dl>
';
                $buffer .= $indent . '                    <dt>';
                $value = $this->resolveValue($context->findDot('purpose.name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</dt>
';
                $buffer .= $indent . '                    <dd>';
                $value = $this->resolveValue($context->findDot('purpose.description'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</dd>
';
                $buffer .= $indent . '                    <dt>';
                $value = $context->find('str');
                $buffer .= $this->sectionC04f08d64cb07854afda0f41d784ff57($context, $indent, $value);
                $buffer .= '</dt>
';
                $buffer .= $indent . '                    <dd>';
                $value = $this->resolveValue($context->findDot('purpose.formattedretentionperiod'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</dd>
';
                $buffer .= $indent . '                </dl>
';
                $value = $context->findDot('purpose.lawfulbases');
                $buffer .= $this->section021f446c29ad7765bc272b90425b717f($context, $indent, $value);
                $value = $context->findDot('purpose.sensitivedatareasons');
                $buffer .= $this->sectionD7506dd6e198900226a8166efe90f786($context, $indent, $value);
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
