<?php

class __Mustache_ecfb3d95b34b36b096420608cc8335d3 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('core_form/element-group')) {
            $buffer .= $partial->renderInternal($context);
        }

        return $buffer;
    }
}
