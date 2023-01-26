<?php

class __Mustache_fd637ba05fbbfeadb6a20bb5d7e9ba01 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('core_form/element-text')) {
            $buffer .= $partial->renderInternal($context);
        }

        return $buffer;
    }
}
