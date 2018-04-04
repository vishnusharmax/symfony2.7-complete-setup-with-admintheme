<?php

namespace MewesK\TwigExcelBundle\Twig\TokenParser;

use MewesK\TwigExcelBundle\Twig\Node\XlsRowNode;
use Twig_Node_Expression_Constant;
use Twig_Token;
use Twig_TokenParser;

class XlsRowTokenParser extends Twig_TokenParser
{
    public function parse(Twig_Token $token)
    {
        $index = new Twig_Node_Expression_Constant(null, $token->getLine());
        if (!$this->parser->getStream()->test(Twig_Token::BLOCK_END_TYPE)) {
            $index = $this->parser->getExpressionParser()->parseExpression();
        }

        $this->parser->getStream()->expect(Twig_Token::BLOCK_END_TYPE);
        $tokenParser = $this; // PHP 5.3 fix
        $body = $this->parser->subparse(function(Twig_Token $token) use ($tokenParser) { return $token->test('end'.$tokenParser->getTag()); }, true);
        $this->parser->getStream()->expect(Twig_Token::BLOCK_END_TYPE);

        return new XlsRowNode($index, $body, $token->getLine(), $this->getTag());
    }

    public function getTag()
    {
        return 'xlsrow';
    }
}