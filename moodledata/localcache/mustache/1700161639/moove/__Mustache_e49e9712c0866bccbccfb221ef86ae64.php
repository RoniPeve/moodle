<?php

class __Mustache_e49e9712c0866bccbccfb221ef86ae64 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="flex-fill description-inner text-break">
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('intro'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $value = $context->find('hasbuttons');
        $buffer .= $this->section8958218a2389dbd05f118a66724de96f($context, $indent, $value);
        $buffer .= $indent . '    <div class="box generalbox pt-0 pb-3 foldertree">
';
        $buffer .= $indent . '        <div id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" class="filemanager">
';
        $value = $context->find('dir');
        $buffer .= $this->sectionBddb3f02e86e2a0d07675b131a1f5315($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->sectionD95e1276eaaebbbb6bc8ce06ace790e9($context, $indent, $value);

        return $buffer;
    }

    private function sectionC0a7a31fe8f3d761f2df8d39b4d04247(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{>core/single_button}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/single_button')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8958218a2389dbd05f118a66724de96f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="container-fluid">
            <div class="row">
                {{#edit_button}}
                    {{>core/single_button}}
                {{/edit_button}}
                {{#download_button}}
                    {{>core/single_button}}
                {{/download_button}}
            </div>
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="container-fluid">
';
                $buffer .= $indent . '            <div class="row">
';
                $value = $context->find('edit_button');
                $buffer .= $this->sectionC0a7a31fe8f3d761f2df8d39b4d04247($context, $indent, $value);
                $value = $context->find('download_button');
                $buffer .= $this->sectionC0a7a31fe8f3d761f2df8d39b4d04247($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBddb3f02e86e2a0d07675b131a1f5315(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <ul>
                    <li>
                        {{>mod_folder/tree}}
                    </li>
                </ul>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <ul>
';
                $buffer .= $indent . '                    <li>
';
                if ($partial = $this->mustache->loadPartial('mod_folder/tree')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                        ');
                }
                $buffer .= $indent . '                    </li>
';
                $buffer .= $indent . '                </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD95e1276eaaebbbb6bc8ce06ace790e9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    // Init tree JS.
    require([\'mod_folder/folder\'], function(Folder) {
        Folder.initTree(\'{{{id}}}\', \'{{{showexpanded}}}\');
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    // Init tree JS.
';
                $buffer .= $indent . '    require([\'mod_folder/folder\'], function(Folder) {
';
                $buffer .= $indent . '        Folder.initTree(\'';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '\', \'';
                $value = $this->resolveValue($context->find('showexpanded'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '\');
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
