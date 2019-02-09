<?php
/**
 * This file is part of Railt package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types=1);

namespace Railt\Json\Json5\Decoder;

use Railt\Lexer\Driver\NativeRegex;
use Railt\Lexer\LexerInterface;
use Railt\Parser\Grammar;
use Railt\Parser\GrammarInterface;
use Railt\Parser\Parser;
use Railt\Parser\Rule\Alternation;
use Railt\Parser\Rule\Concatenation;
use Railt\Parser\Rule\Repetition;
use Railt\Parser\Rule\Terminal;

/**
 * --- DO NOT EDIT THIS FILE ---
 *
 * Class BaseParser has been auto-generated.
 * Generated at: 09-02-2019 15:38:24
 *
 * --- DO NOT EDIT THIS FILE ---
 */
class BaseParser extends Parser
{
    public const T_COMMENT = 'T_COMMENT';
    public const T_DOC_COMMENT = 'T_DOC_COMMENT';
    public const T_BRACKET_OPEN = 'T_BRACKET_OPEN';
    public const T_BRACKET_CLOSE = 'T_BRACKET_CLOSE';
    public const T_BRACE_OPEN = 'T_BRACE_OPEN';
    public const T_BRACE_CLOSE = 'T_BRACE_CLOSE';
    public const T_COLON = 'T_COLON';
    public const T_COMMA = 'T_COMMA';
    public const T_BOOL_TRUE = 'T_BOOL_TRUE';
    public const T_BOOL_FALSE = 'T_BOOL_FALSE';
    public const T_NULL = 'T_NULL';
    public const T_INF = 'T_INF';
    public const T_NAN = 'T_NAN';
    public const T_HEX_NUMBER = 'T_HEX_NUMBER';
    public const T_FLOAT = 'T_FLOAT';
    public const T_INT = 'T_INT';
    public const T_DOUBLE_QUOTED_STRING = 'T_DOUBLE_QUOTED_STRING';
    public const T_SINGLE_QUOTED_STRING = 'T_SINGLE_QUOTED_STRING';
    public const T_IDENTIFIER = 'T_IDENTIFIER';
    public const T_HORIZONTAL_TAB = 'T_HORIZONTAL_TAB';
    public const T_LINE_FEED = 'T_LINE_FEED';
    public const T_VERTICAL_TAB = 'T_VERTICAL_TAB';
    public const T_FORM_FEED = 'T_FORM_FEED';
    public const T_CARRIAGE_RETURN = 'T_CARRIAGE_RETURN';
    public const T_WHITESPACE = 'T_WHITESPACE';
    public const T_NON_BREAKING_SPACE = 'T_NON_BREAKING_SPACE';
    public const T_LINE_SEPARATOR = 'T_LINE_SEPARATOR';
    public const T_PARAGRAPH_SEPARATOR = 'T_PARAGRAPH_SEPARATOR';
    public const T_UTF32BE_BOM = 'T_UTF32BE_BOM';
    public const T_UTF32LE_BOM = 'T_UTF32LE_BOM';
    public const T_UTF16BE_BOM = 'T_UTF16BE_BOM';
    public const T_UTF16LE_BOM = 'T_UTF16LE_BOM';
    public const T_UTF8_BOM = 'T_UTF8_BOM';
    public const T_UTF7_BOM = 'T_UTF7_BOM';

    /**
     * Lexical tokens list.
     *
     * @var string[]
     */
    protected const LEXER_TOKENS = [
        self::T_COMMENT              => '//[^\\n]*\\n',
        self::T_DOC_COMMENT          => '/\\*.*?\\*/',
        self::T_BRACKET_OPEN         => '\\[',
        self::T_BRACKET_CLOSE        => '\\]',
        self::T_BRACE_OPEN           => '{',
        self::T_BRACE_CLOSE          => '}',
        self::T_COLON                => ':',
        self::T_COMMA                => ',',
        self::T_BOOL_TRUE            => 'true\\b',
        self::T_BOOL_FALSE           => 'false\\b',
        self::T_NULL                 => 'null\\b',
        self::T_INF                  => '([\\+\\-]?)Infinity\\b',
        self::T_NAN                  => '([\\+\\-]?)NaN\\b',
        self::T_HEX_NUMBER           => '([\\+\\-]?)0x([0-9a-fA-F]+)',
        self::T_FLOAT                => '[\\+\\-]?(?:[1-9][0-9]*)?\\.[0-9]*(?:[eE][\\+\\-]?[0-9]+)?',
        self::T_INT                  => '[\\+\\-]?[1-9][0-9]*(?:[eE][\\+\\-]?[0-9]+)?',
        self::T_DOUBLE_QUOTED_STRING => '"([^"\\\\]*(\\\\.[^"\\\\]*)*)"',
        self::T_SINGLE_QUOTED_STRING => '\'([^\'\\\\]*(\\\\.[^\'\\\\]*)*)\'',
        self::T_IDENTIFIER           => '[A-Za-z][_0-9A-Za-z]*',
        self::T_HORIZONTAL_TAB       => '\\x09',
        self::T_LINE_FEED            => '\\x0A',
        self::T_VERTICAL_TAB         => '\\x0B',
        self::T_FORM_FEED            => '\\x0C',
        self::T_CARRIAGE_RETURN      => '\\x0D',
        self::T_WHITESPACE           => '\\x20',
        self::T_NON_BREAKING_SPACE   => '\\xA0',
        self::T_LINE_SEPARATOR       => '\\x2028',
        self::T_PARAGRAPH_SEPARATOR  => '\\x2029',
        self::T_UTF32BE_BOM          => '^\\x00\\x00\\xFE\\xFF',
        self::T_UTF32LE_BOM          => '^\\xFE\\xFF\\x00\\x00',
        self::T_UTF16BE_BOM          => '^\\xFE\\xFF',
        self::T_UTF16LE_BOM          => '^\\xFF\\xFE',
        self::T_UTF8_BOM             => '^\\xEF\\xBB\\xBF',
        self::T_UTF7_BOM             => '^\\x2B\\x2F\\x76\\x38\\x2B\\x2F\\x76\\x39\\x2B\\x2F\\x76\\x2B\\x2B\\x2F\\x76\\x2F',
    ];

    /**
     * List of skipped tokens.
     *
     * @var string[]
     */
    protected const LEXER_SKIPPED_TOKENS = [
        'T_COMMENT',
        'T_DOC_COMMENT',
        'T_HORIZONTAL_TAB',
        'T_LINE_FEED',
        'T_VERTICAL_TAB',
        'T_FORM_FEED',
        'T_CARRIAGE_RETURN',
        'T_WHITESPACE',
        'T_NON_BREAKING_SPACE',
        'T_LINE_SEPARATOR',
        'T_PARAGRAPH_SEPARATOR',
        'T_UTF32BE_BOM',
        'T_UTF32LE_BOM',
        'T_UTF16BE_BOM',
        'T_UTF16LE_BOM',
        'T_UTF8_BOM',
        'T_UTF7_BOM',
    ];

    /**
     * List of rule delegates.
     *
     * @var string[]
     */
    protected const PARSER_DELEGATES = [
        'Json'       => \Railt\Json\Json5\Decoder\Ast\Json5Node::class,
        'Object'     => \Railt\Json\Json5\Decoder\Ast\ObjectNode::class,
        'Array'      => \Railt\Json\Json5\Decoder\Ast\ArrayNode::class,
        'String'     => \Railt\Json\Json5\Decoder\Ast\StringNode::class,
        'Boolean'    => \Railt\Json\Json5\Decoder\Ast\BoolNode::class,
        'Null'       => \Railt\Json\Json5\Decoder\Ast\NullNode::class,
        'Inf'        => \Railt\Json\Json5\Decoder\Ast\InfNode::class,
        'NaN'        => \Railt\Json\Json5\Decoder\Ast\NaNNode::class,
        'Float'      => \Railt\Json\Json5\Decoder\Ast\NumberNode::class,
        'Int'        => \Railt\Json\Json5\Decoder\Ast\NumberNode::class,
        'Hex'        => \Railt\Json\Json5\Decoder\Ast\HexNode::class,
        'Identifier' => \Railt\Json\Json5\Decoder\Ast\IdentifierNode::class,
    ];

    /**
     * Parser root rule name.
     *
     * @var string
     */
    protected const PARSER_ROOT_RULE = 'Json';

    /**
     * BaseParser constructor.
     */
    public function __construct()
    {
        parent::__construct($this->createLexer(), $this->createGrammar());
    }

    /**
     * @return LexerInterface
     */
    protected function createLexer(): LexerInterface
    {
        return new NativeRegex(static::LEXER_TOKENS, static::LEXER_SKIPPED_TOKENS);
    }

    /**
     * @return GrammarInterface
     */
    protected function createGrammar(): GrammarInterface
    {
        return new Grammar($this->createGrammarRules(), static::PARSER_ROOT_RULE, static::PARSER_DELEGATES);
    }

    /**
     * @return array|\Railt\Parser\Rule\Rule[]
     */
    protected function createGrammarRules(): array
    {
        return [
            new Concatenation(0, ['Value'], null),
            (new Concatenation('Json', [0], 'Json'))->setDefaultId('Json'),
            new Concatenation(2, ['Int'], null),
            new Alternation('Value', ['Object', 'Array', 'String', 'Boolean', 'Null', 'Inf', 'NaN', 'Hex', 'Float', 2], null),
            new Terminal(4, 'T_BRACE_OPEN', false),
            new Terminal(5, 'T_COMMA', false),
            new Concatenation(6, ['ObjectPair', 5], 'Object'),
            new Repetition(7, 0, -1, 6, null),
            new Terminal(8, 'T_COMMA', false),
            new Repetition(9, 0, 1, 8, null),
            new Concatenation(10, ['ObjectPair', 9], null),
            new Repetition(11, 0, 1, 10, null),
            new Terminal(12, 'T_BRACE_CLOSE', false),
            (new Concatenation('Object', [4, 7, 11, 12], null))->setDefaultId('Object'),
            new Terminal(14, 'T_COLON', false),
            new Concatenation(15, ['ObjectValue'], null),
            (new Concatenation('ObjectPair', ['ObjectKey', 14, 15], 'ObjectPair'))->setDefaultId('ObjectPair'),
            new Concatenation(17, ['Identifier'], null),
            new Alternation('ObjectKey', ['String', 17], null),
            new Concatenation('ObjectValue', ['Value'], null),
            new Terminal(20, 'T_BRACKET_OPEN', false),
            new Terminal(21, 'T_COMMA', false),
            new Concatenation(22, ['Value', 21], 'Array'),
            new Repetition(23, 0, -1, 22, null),
            new Terminal(24, 'T_COMMA', false),
            new Repetition(25, 0, 1, 24, null),
            new Concatenation(26, ['Value', 25], null),
            new Repetition(27, 0, 1, 26, null),
            new Terminal(28, 'T_BRACKET_CLOSE', false),
            (new Concatenation('Array', [20, 23, 27, 28], null))->setDefaultId('Array'),
            new Terminal(30, 'T_DOUBLE_QUOTED_STRING', true),
            new Concatenation(31, [30], 'String'),
            new Terminal(32, 'T_SINGLE_QUOTED_STRING', true),
            new Concatenation(33, [32], 'String'),
            (new Alternation('String', [31, 33], null))->setDefaultId('String'),
            new Terminal(35, 'T_BOOL_TRUE', true),
            new Concatenation(36, [35], 'Boolean'),
            new Terminal(37, 'T_BOOL_FALSE', true),
            new Concatenation(38, [37], 'Boolean'),
            (new Alternation('Boolean', [36, 38], null))->setDefaultId('Boolean'),
            new Terminal(40, 'T_NULL', false),
            (new Concatenation('Null', [40], 'Null'))->setDefaultId('Null'),
            new Terminal(42, 'T_INF', true),
            (new Concatenation('Inf', [42], 'Inf'))->setDefaultId('Inf'),
            new Terminal(44, 'T_NAN', true),
            (new Concatenation('NaN', [44], 'NaN'))->setDefaultId('NaN'),
            new Terminal(46, 'T_FLOAT', true),
            (new Concatenation('Float', [46], 'Float'))->setDefaultId('Float'),
            new Terminal(48, 'T_INT', true),
            (new Concatenation('Int', [48], 'Int'))->setDefaultId('Int'),
            new Terminal(50, 'T_HEX_NUMBER', true),
            (new Concatenation('Hex', [50], 'Hex'))->setDefaultId('Hex'),
            new Terminal(52, 'T_IDENTIFIER', true),
            (new Concatenation('Identifier', [52], 'Identifier'))->setDefaultId('Identifier'),
        ];
    }
}
