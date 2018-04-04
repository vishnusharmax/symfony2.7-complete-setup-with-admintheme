<?php

namespace MewesK\TwigExcelBundle\Twig\TokenParser;

use MewesK\TwigExcelBundle\Twig\Node\XlsSheetNode;
use Twig_Node_Expression_Array;
use Twig_Token;
use Twig_TokenParser;

class XlsSheetTokenParser extends Twig_TokenParser
{
    public function parse(Twig_Token $token)
    {
        $title = $this->parser->getExpressionParser()->parseExpression();

        $properties = new Twig_Node_Expression_Array(array(), $token->getLine());
        if (!$this->parser->getStream()->test(Twig_Token::BLOCK_END_TYPE)) {
            $properties = $this->parser->getExpressionParser()->parseExpression();
        }

        $this->parser->getStream()->expect(Twig_Token::BLOCK_END_TYPE);
        $tokenParser = $this; // PHP 5.3 fix
        $body = $this->parser->subparse(function(Twig_Token $token) use ($tokenParser) { return $token->test('end'.$tokenParser->getTag()); }, true);
        $this->parser->getStream()->expect(Twig_Token::BLOCK_END_TYPE);

        return new XlsSheetNode($title, $properties, $body, $token->getLine(), $this->getTag());
    }

    public function getTag()
    {
        return 'xlssheet';
    }
}