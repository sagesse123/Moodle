<?php

class __Mustache_79878c8e91d3541cd230f535121b6d05 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('core_form/element-template')) {
            $context->pushBlockContext(array(
                'element' => array($this, 'blockDde91e178c5ae518ea1bba340ce1fe8a'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }


    public function blockDde91e178c5ae518ea1bba340ce1fe8a($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('element.html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
    
        return $buffer;
    }
}
