<?php

namespace MewesK\TwigExcelBundle\Twig\Node;
use Twig_Compiler;
use Twig_Node;
use Twig_Node_Expression;

class XlsDocumentNode extends Twig_Node
{
    public function __construct(Twig_Node_Expression $properties, Twig_Node $body, $line, $tag = 'xlsdocument')
    {
        parent::__construct(array('properties' => $properties, 'body' => $body), array(), $line, $tag);
    }

    public function compile(Twig_Compiler $compiler)
    {
        $compiler
            ->addDebugInfo($this)

            ->write('$documentProperties = ')
            ->subcompile($this->getNode('properties'))
            ->raw(';'.PHP_EOL)

            ->write('$phpExcel = new MewesK\TwigExcelBundle\Twig\PhpExcelWrapper($context);'.PHP_EOL)
            ->write('$phpExcel->startDocument($documentProperties);'.PHP_EOL)
            ->write('unset($documentProperties);'.PHP_EOL)

            ->subcompile($this->getNode('body'))

            ->addDebugInfo($this)

            ->write('$phpExcel->endDocument();'.PHP_EOL)
            ->write('unset($phpExcel);'.PHP_EOL);

    }
}