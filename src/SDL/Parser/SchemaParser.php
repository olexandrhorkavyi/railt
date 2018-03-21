<?php
/**
 * This file is part of Parser package.
 *
 * For the full copyright and license information, please view the
 * LICENSE file that was distributed with this source code.
 */
declare(strict_types=1);

namespace Railt\SDL\Parser;

use Railt\Compiler\Parser\Runtime as SchemaParserRuntime;

/**
 * This class has been auto-generated by the Railt\Compiler\Generator
 */
final class SchemaParser extends SchemaParserRuntime
{
    public function __construct()
    {
        $lexer = new \Railt\SDL\Parser\SchemaLexer();

        parent::__construct($lexer, $this->getRules());
    }

    /**
     * @return \Railt\Compiler\Parser\Rule\Rule[]
     */
    public function getRules(): array
    {
        return [
            0 =>
new \Railt\Compiler\Parser\Rule\Repetition(0, 0, 1, 'NamespaceDefinition', null),
            1 =>
new \Railt\Compiler\Parser\Rule\Repetition(1, 0, -1, 'DocumentImports', null),
            2 =>
new \Railt\Compiler\Parser\Rule\Repetition(2, 0, -1, 'DocumentDefinitions', null),
            'Document' =>
new \Railt\Compiler\Parser\Rule\Concatenation('Document', [0, 1, 2], '#Document'),
            'DocumentImports' =>
new \Railt\Compiler\Parser\Rule\Choice('DocumentImports', ['ImportDefinition', 'Invocation'], null),
            'DocumentDefinitions' =>
new \Railt\Compiler\Parser\Rule\Concatenation('DocumentDefinitions', ['Definition'], null),
            6 =>
new \Railt\Compiler\Parser\Rule\Terminal(6, 'T_NAME', null, -1, true),
            'NameWithoutReserved' =>
new \Railt\Compiler\Parser\Rule\Concatenation('NameWithoutReserved', [6], '#Name'),
            8 =>
new \Railt\Compiler\Parser\Rule\Terminal(8, 'T_NAME', null, -1, true),
            9 =>
new \Railt\Compiler\Parser\Rule\Terminal(9, 'T_TRUE', null, -1, true),
            10 =>
new \Railt\Compiler\Parser\Rule\Terminal(10, 'T_FALSE', null, -1, true),
            11 =>
new \Railt\Compiler\Parser\Rule\Terminal(11, 'T_NULL', null, -1, true),
            12 =>
new \Railt\Compiler\Parser\Rule\Terminal(12, 'T_NAMESPACE', null, -1, true),
            13 =>
new \Railt\Compiler\Parser\Rule\Terminal(13, 'T_IMPORT', null, -1, true),
            14 =>
new \Railt\Compiler\Parser\Rule\Terminal(14, 'T_IMPORT_FROM', null, -1, true),
            15 =>
new \Railt\Compiler\Parser\Rule\Terminal(15, 'T_EXTENDS', null, -1, true),
            16 =>
new \Railt\Compiler\Parser\Rule\Terminal(16, 'T_IMPLEMENTS', null, -1, true),
            17 =>
new \Railt\Compiler\Parser\Rule\Terminal(17, 'T_ON', null, -1, true),
            18 =>
new \Railt\Compiler\Parser\Rule\Terminal(18, 'T_TYPE', null, -1, true),
            19 =>
new \Railt\Compiler\Parser\Rule\Terminal(19, 'T_ENUM', null, -1, true),
            20 =>
new \Railt\Compiler\Parser\Rule\Terminal(20, 'T_UNION', null, -1, true),
            21 =>
new \Railt\Compiler\Parser\Rule\Terminal(21, 'T_INPUT_UNION', null, -1, true),
            22 =>
new \Railt\Compiler\Parser\Rule\Terminal(22, 'T_INTERFACE', null, -1, true),
            23 =>
new \Railt\Compiler\Parser\Rule\Terminal(23, 'T_SCHEMA', null, -1, true),
            24 =>
new \Railt\Compiler\Parser\Rule\Terminal(24, 'T_SCALAR', null, -1, true),
            25 =>
new \Railt\Compiler\Parser\Rule\Terminal(25, 'T_DIRECTIVE', null, -1, true),
            26 =>
new \Railt\Compiler\Parser\Rule\Terminal(26, 'T_INPUT', null, -1, true),
            27 =>
new \Railt\Compiler\Parser\Rule\Terminal(27, 'T_EXTEND', null, -1, true),
            28 =>
new \Railt\Compiler\Parser\Rule\Terminal(28, 'T_FRAGMENT', null, -1, true),
            29 =>
new \Railt\Compiler\Parser\Rule\Choice(29, [8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28], null),
            'NameWithReserved' =>
new \Railt\Compiler\Parser\Rule\Concatenation('NameWithReserved', [29], '#Name'),
            31 =>
new \Railt\Compiler\Parser\Rule\Terminal(31, 'T_NAME', null, -1, true),
            32 =>
new \Railt\Compiler\Parser\Rule\Terminal(32, 'T_NAMESPACE', null, -1, true),
            33 =>
new \Railt\Compiler\Parser\Rule\Terminal(33, 'T_IMPORT', null, -1, true),
            34 =>
new \Railt\Compiler\Parser\Rule\Terminal(34, 'T_IMPORT_FROM', null, -1, true),
            35 =>
new \Railt\Compiler\Parser\Rule\Terminal(35, 'T_EXTENDS', null, -1, true),
            36 =>
new \Railt\Compiler\Parser\Rule\Terminal(36, 'T_IMPLEMENTS', null, -1, true),
            37 =>
new \Railt\Compiler\Parser\Rule\Terminal(37, 'T_ON', null, -1, true),
            38 =>
new \Railt\Compiler\Parser\Rule\Terminal(38, 'T_TYPE', null, -1, true),
            39 =>
new \Railt\Compiler\Parser\Rule\Terminal(39, 'T_ENUM', null, -1, true),
            40 =>
new \Railt\Compiler\Parser\Rule\Terminal(40, 'T_UNION', null, -1, true),
            41 =>
new \Railt\Compiler\Parser\Rule\Terminal(41, 'T_INPUT_UNION', null, -1, true),
            42 =>
new \Railt\Compiler\Parser\Rule\Terminal(42, 'T_INTERFACE', null, -1, true),
            43 =>
new \Railt\Compiler\Parser\Rule\Terminal(43, 'T_SCHEMA', null, -1, true),
            44 =>
new \Railt\Compiler\Parser\Rule\Terminal(44, 'T_SCALAR', null, -1, true),
            45 =>
new \Railt\Compiler\Parser\Rule\Terminal(45, 'T_DIRECTIVE', null, -1, true),
            46 =>
new \Railt\Compiler\Parser\Rule\Terminal(46, 'T_INPUT', null, -1, true),
            47 =>
new \Railt\Compiler\Parser\Rule\Terminal(47, 'T_EXTEND', null, -1, true),
            48 =>
new \Railt\Compiler\Parser\Rule\Terminal(48, 'T_FRAGMENT', null, -1, true),
            'NameExceptValues' =>
new \Railt\Compiler\Parser\Rule\Choice('NameExceptValues', [31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48], null),
            50 =>
new \Railt\Compiler\Parser\Rule\Terminal(50, 'T_VARIABLE', null, -1, true),
            'Variable' =>
new \Railt\Compiler\Parser\Rule\Concatenation('Variable', [50], '#Variable'),
            52 =>
new \Railt\Compiler\Parser\Rule\Repetition(52, 0, 1, 'TypeNamespace', null),
            'TypeName' =>
new \Railt\Compiler\Parser\Rule\Concatenation('TypeName', [52, 'NameWithReserved'], '#TypeName'),
            54 =>
new \Railt\Compiler\Parser\Rule\Terminal(54, 'T_NAMESPACE_SEPARATOR', null, -1, false),
            55 =>
new \Railt\Compiler\Parser\Rule\Concatenation(55, ['NameWithReserved', 54], '#TypeNamespace'),
            'TypeNamespace' =>
new \Railt\Compiler\Parser\Rule\Repetition('TypeNamespace', 1, -1, 55, null),
            57 =>
new \Railt\Compiler\Parser\Rule\Terminal(57, 'T_FALSE', null, -1, true),
            58 =>
new \Railt\Compiler\Parser\Rule\Terminal(58, 'T_TRUE', null, -1, true),
            59 =>
new \Railt\Compiler\Parser\Rule\Concatenation(59, [58], '#Boolean'),
            'Boolean' =>
new \Railt\Compiler\Parser\Rule\Choice('Boolean', [57, 59], null),
            61 =>
new \Railt\Compiler\Parser\Rule\Terminal(61, 'T_NUMBER', null, -1, true),
            'Number' =>
new \Railt\Compiler\Parser\Rule\Concatenation('Number', [61], '#Number'),
            63 =>
new \Railt\Compiler\Parser\Rule\Terminal(63, 'T_BLOCK_STRING', null, -1, true),
            64 =>
new \Railt\Compiler\Parser\Rule\Terminal(64, 'T_STRING', null, -1, true),
            65 =>
new \Railt\Compiler\Parser\Rule\Concatenation(65, [64], '#String'),
            'String' =>
new \Railt\Compiler\Parser\Rule\Choice('String', [63, 65], null),
            67 =>
new \Railt\Compiler\Parser\Rule\Terminal(67, 'T_NULL', null, -1, true),
            'Null' =>
new \Railt\Compiler\Parser\Rule\Concatenation('Null', [67], '#Null'),
            69 =>
new \Railt\Compiler\Parser\Rule\Terminal(69, 'T_BRACE_OPEN', null, -1, false),
            70 =>
new \Railt\Compiler\Parser\Rule\Repetition(70, 0, -1, '__inputPair', null),
            71 =>
new \Railt\Compiler\Parser\Rule\Terminal(71, 'T_BRACE_CLOSE', null, -1, false),
            'Input' =>
new \Railt\Compiler\Parser\Rule\Concatenation('Input', [69, 70, 71], '#Input'),
            73 =>
new \Railt\Compiler\Parser\Rule\Terminal(73, 'T_COLON', null, -1, false),
            '__inputPair' =>
new \Railt\Compiler\Parser\Rule\Concatenation('__inputPair', ['NameWithReserved', 73, 'Value'], '#Pair'),
            75 =>
new \Railt\Compiler\Parser\Rule\Terminal(75, 'T_BRACKET_OPEN', null, -1, false),
            76 =>
new \Railt\Compiler\Parser\Rule\Repetition(76, 0, -1, 'Value', null),
            77 =>
new \Railt\Compiler\Parser\Rule\Terminal(77, 'T_BRACKET_CLOSE', null, -1, false),
            'List' =>
new \Railt\Compiler\Parser\Rule\Concatenation('List', [75, 76, 77], '#List'),
            79 =>
new \Railt\Compiler\Parser\Rule\Choice(79, ['NameWithReserved', 'Boolean', 'Number', 'String', 'Input', 'Null', 'List'], null),
            'Value' =>
new \Railt\Compiler\Parser\Rule\Concatenation('Value', [79], '#Value'),
            'Documentation' =>
new \Railt\Compiler\Parser\Rule\Concatenation('Documentation', ['String'], '#Description'),
            82 =>
new \Railt\Compiler\Parser\Rule\Concatenation(82, ['__returnListDefinition'], '#ReturnTypeDefinition'),
            83 =>
new \Railt\Compiler\Parser\Rule\Concatenation(83, ['__returnTypeDefinition'], '#ReturnTypeDefinition'),
            'ReturnTypeDefinition' =>
new \Railt\Compiler\Parser\Rule\Choice('ReturnTypeDefinition', [82, 83], null),
            85 =>
new \Railt\Compiler\Parser\Rule\Terminal(85, 'T_NON_NULL', null, -1, true),
            '__returnTypeNonNullModifier' =>
new \Railt\Compiler\Parser\Rule\Concatenation('__returnTypeNonNullModifier', [85], '#NonNull'),
            87 =>
new \Railt\Compiler\Parser\Rule\Terminal(87, 'T_BRACKET_OPEN', null, -1, false),
            88 =>
new \Railt\Compiler\Parser\Rule\Terminal(88, 'T_BRACKET_CLOSE', null, -1, false),
            89 =>
new \Railt\Compiler\Parser\Rule\Repetition(89, 0, 1, '__returnTypeNonNullModifier', null),
            '__returnListDefinition' =>
new \Railt\Compiler\Parser\Rule\Concatenation('__returnListDefinition', [87, '__returnTypeDefinition', 88, 89], '#List'),
            91 =>
new \Railt\Compiler\Parser\Rule\Repetition(91, 0, 1, '__returnTypeDefinitionArguments', null),
            92 =>
new \Railt\Compiler\Parser\Rule\Concatenation(92, ['TypeName', 91], null),
            93 =>
new \Railt\Compiler\Parser\Rule\Choice(93, [92, 'Variable'], null),
            94 =>
new \Railt\Compiler\Parser\Rule\Repetition(94, 0, 1, '__returnTypeNonNullModifier', null),
            '__returnTypeDefinition' =>
new \Railt\Compiler\Parser\Rule\Concatenation('__returnTypeDefinition', [93, 94], '#Type'),
            96 =>
new \Railt\Compiler\Parser\Rule\Terminal(96, 'T_PARENTHESIS_OPEN', null, -1, false),
            97 =>
new \Railt\Compiler\Parser\Rule\Repetition(97, 0, -1, 'ArgumentDefinition', null),
            98 =>
new \Railt\Compiler\Parser\Rule\Terminal(98, 'T_PARENTHESIS_CLOSE', null, -1, false),
            '__returnTypeDefinitionArguments' =>
new \Railt\Compiler\Parser\Rule\Concatenation('__returnTypeDefinitionArguments', [96, 97, 98], '#TypeArguments'),
            100 =>
new \Railt\Compiler\Parser\Rule\Terminal(100, 'T_IMPLEMENTS', null, -1, false),
            101 =>
new \Railt\Compiler\Parser\Rule\Terminal(101, 'T_AND', null, -1, false),
            102 =>
new \Railt\Compiler\Parser\Rule\Concatenation(102, [101, 'TypeName'], null),
            103 =>
new \Railt\Compiler\Parser\Rule\Repetition(103, 0, -1, 102, null),
            'TypeDefinitionImplements' =>
new \Railt\Compiler\Parser\Rule\Concatenation('TypeDefinitionImplements', [100, 'TypeName', 103], null),
            105 =>
new \Railt\Compiler\Parser\Rule\Terminal(105, 'T_PARENTHESIS_OPEN', null, -1, false),
            106 =>
new \Railt\Compiler\Parser\Rule\Repetition(106, 0, -1, '__genericArgumentDefinition', null),
            107 =>
new \Railt\Compiler\Parser\Rule\Terminal(107, 'T_PARENTHESIS_CLOSE', null, -1, false),
            'GenericArgumentsDefinition' =>
new \Railt\Compiler\Parser\Rule\Concatenation('GenericArgumentsDefinition', [105, 106, 107], null),
            109 =>
new \Railt\Compiler\Parser\Rule\Terminal(109, 'T_COLON', null, -1, false),
            '__genericArgumentDefinition' =>
new \Railt\Compiler\Parser\Rule\Concatenation('__genericArgumentDefinition', ['Variable', 109, 'TypeName'], '#GenericArgument'),
            111 =>
new \Railt\Compiler\Parser\Rule\Repetition(111, 0, 1, 'Documentation', null),
            112 =>
new \Railt\Compiler\Parser\Rule\Terminal(112, 'T_COLON', null, -1, false),
            113 =>
new \Railt\Compiler\Parser\Rule\Repetition(113, 0, 1, '__argumentDefinitionDefaultValue', null),
            'ArgumentDefinition' =>
new \Railt\Compiler\Parser\Rule\Concatenation('ArgumentDefinition', [111, 'NameWithReserved', 112, 'ReturnTypeDefinition', 113], '#ArgumentDefinition'),
            115 =>
new \Railt\Compiler\Parser\Rule\Terminal(115, 'T_EQUAL', null, -1, false),
            '__argumentDefinitionDefaultValue' =>
new \Railt\Compiler\Parser\Rule\Concatenation('__argumentDefinitionDefaultValue', [115, 'Value'], null),
            117 =>
new \Railt\Compiler\Parser\Rule\Repetition(117, 0, 1, 'Documentation', null),
            118 =>
new \Railt\Compiler\Parser\Rule\Repetition(118, 0, 1, '__fieldDefinitionArguments', null),
            119 =>
new \Railt\Compiler\Parser\Rule\Terminal(119, 'T_COLON', null, -1, false),
            120 =>
new \Railt\Compiler\Parser\Rule\Repetition(120, 0, -1, 'Directive', null),
            'FieldDefinition' =>
new \Railt\Compiler\Parser\Rule\Concatenation('FieldDefinition', [117, 'NameWithReserved', 118, 119, 'ReturnTypeDefinition', 120], '#FieldDefinition'),
            122 =>
new \Railt\Compiler\Parser\Rule\Terminal(122, 'T_PARENTHESIS_OPEN', null, -1, false),
            123 =>
new \Railt\Compiler\Parser\Rule\Repetition(123, 0, -1, '__fieldDefinitionArgument', null),
            124 =>
new \Railt\Compiler\Parser\Rule\Terminal(124, 'T_PARENTHESIS_CLOSE', null, -1, false),
            '__fieldDefinitionArguments' =>
new \Railt\Compiler\Parser\Rule\Concatenation('__fieldDefinitionArguments', [122, 123, 124], null),
            126 =>
new \Railt\Compiler\Parser\Rule\Repetition(126, 0, -1, 'Directive', null),
            '__fieldDefinitionArgument' =>
new \Railt\Compiler\Parser\Rule\Concatenation('__fieldDefinitionArgument', ['ArgumentDefinition', 126], null),
            128 =>
new \Railt\Compiler\Parser\Rule\Terminal(128, 'T_NAMESPACE', null, -1, false),
            'NamespaceDefinition' =>
new \Railt\Compiler\Parser\Rule\Concatenation('NamespaceDefinition', [128, 'TypeName'], '#NamespaceDefinition'),
            130 =>
new \Railt\Compiler\Parser\Rule\Terminal(130, 'T_IMPORT', null, -1, false),
            'ImportDefinition' =>
new \Railt\Compiler\Parser\Rule\Concatenation('ImportDefinition', [130, '__importTypeNames', '__importDefinitionFrom'], '#ImportDefinition'),
            132 =>
new \Railt\Compiler\Parser\Rule\Terminal(132, 'T_AND', null, -1, false),
            133 =>
new \Railt\Compiler\Parser\Rule\Concatenation(133, [132, 'TypeName'], null),
            134 =>
new \Railt\Compiler\Parser\Rule\Repetition(134, 0, -1, 133, null),
            '__importTypeNames' =>
new \Railt\Compiler\Parser\Rule\Concatenation('__importTypeNames', ['TypeName', 134], '#ImportTarget'),
            136 =>
new \Railt\Compiler\Parser\Rule\Terminal(136, 'T_IMPORT_FROM', null, -1, false),
            '__importDefinitionFrom' =>
new \Railt\Compiler\Parser\Rule\Concatenation('__importDefinitionFrom', [136, 'TypeName'], '#ImportFrom'),
            138 =>
new \Railt\Compiler\Parser\Rule\Terminal(138, 'T_SCHEMA', null, -1, true),
            139 =>
new \Railt\Compiler\Parser\Rule\Repetition(139, 0, 1, 'TypeName', null),
            140 =>
new \Railt\Compiler\Parser\Rule\Terminal(140, 'T_BRACE_OPEN', null, -1, false),
            141 =>
new \Railt\Compiler\Parser\Rule\Repetition(141, 0, -1, '__schemaField', null),
            142 =>
new \Railt\Compiler\Parser\Rule\Terminal(142, 'T_BRACE_CLOSE', null, -1, false),
            'SchemaDefinition' =>
new \Railt\Compiler\Parser\Rule\Concatenation('SchemaDefinition', [138, 139, 140, 141, 142], '#SchemaDefinition'),
            144 =>
new \Railt\Compiler\Parser\Rule\Terminal(144, 'T_COLON', null, -1, false),
            '__schemaField' =>
new \Railt\Compiler\Parser\Rule\Concatenation('__schemaField', ['NameWithReserved', 144, 'TypeName'], '#SchemaField'),
            146 =>
new \Railt\Compiler\Parser\Rule\Repetition(146, 0, 1, 'Documentation', null),
            147 =>
new \Railt\Compiler\Parser\Rule\Terminal(147, 'T_TYPE', null, -1, false),
            148 =>
new \Railt\Compiler\Parser\Rule\Repetition(148, 0, 1, 'GenericArgumentsDefinition', null),
            149 =>
new \Railt\Compiler\Parser\Rule\Repetition(149, 0, 1, 'TypeDefinitionImplements', null),
            150 =>
new \Railt\Compiler\Parser\Rule\Repetition(150, 0, -1, 'Directive', null),
            151 =>
new \Railt\Compiler\Parser\Rule\Terminal(151, 'T_BRACE_OPEN', null, -1, false),
            152 =>
new \Railt\Compiler\Parser\Rule\Repetition(152, 0, -1, 'FieldDefinition', null),
            153 =>
new \Railt\Compiler\Parser\Rule\Terminal(153, 'T_BRACE_CLOSE', null, -1, false),
            'ObjectDefinition' =>
new \Railt\Compiler\Parser\Rule\Concatenation('ObjectDefinition', [146, 147, 'TypeName', 148, 149, 150, 151, 152, 153], '#ObjectDefinition'),
            155 =>
new \Railt\Compiler\Parser\Rule\Repetition(155, 0, 1, 'Documentation', null),
            156 =>
new \Railt\Compiler\Parser\Rule\Terminal(156, 'T_INTERFACE', null, -1, false),
            157 =>
new \Railt\Compiler\Parser\Rule\Repetition(157, 0, 1, 'GenericArgumentsDefinition', null),
            158 =>
new \Railt\Compiler\Parser\Rule\Repetition(158, 0, 1, 'TypeDefinitionImplements', null),
            159 =>
new \Railt\Compiler\Parser\Rule\Repetition(159, 0, -1, 'Directive', null),
            160 =>
new \Railt\Compiler\Parser\Rule\Terminal(160, 'T_BRACE_OPEN', null, -1, false),
            161 =>
new \Railt\Compiler\Parser\Rule\Repetition(161, 0, -1, 'FieldDefinition', null),
            162 =>
new \Railt\Compiler\Parser\Rule\Terminal(162, 'T_BRACE_CLOSE', null, -1, false),
            'InterfaceDefinition' =>
new \Railt\Compiler\Parser\Rule\Concatenation('InterfaceDefinition', [155, 156, 'TypeName', 157, 158, 159, 160, 161, 162], '#InterfaceDefinition'),
            164 =>
new \Railt\Compiler\Parser\Rule\Repetition(164, 0, 1, 'Documentation', null),
            165 =>
new \Railt\Compiler\Parser\Rule\Terminal(165, 'T_SCALAR', null, -1, false),
            166 =>
new \Railt\Compiler\Parser\Rule\Repetition(166, 0, 1, '__scalarExtends', null),
            167 =>
new \Railt\Compiler\Parser\Rule\Repetition(167, 0, -1, 'Directive', null),
            'ScalarDefinition' =>
new \Railt\Compiler\Parser\Rule\Concatenation('ScalarDefinition', [164, 165, 'TypeName', 166, 167], '#ScalarDefinition'),
            169 =>
new \Railt\Compiler\Parser\Rule\Terminal(169, 'T_EXTENDS', null, -1, false),
            '__scalarExtends' =>
new \Railt\Compiler\Parser\Rule\Concatenation('__scalarExtends', [169, 'TypeName'], '#Extends'),
            171 =>
new \Railt\Compiler\Parser\Rule\Repetition(171, 0, 1, 'Documentation', null),
            172 =>
new \Railt\Compiler\Parser\Rule\Terminal(172, 'T_ENUM', null, -1, false),
            173 =>
new \Railt\Compiler\Parser\Rule\Repetition(173, 0, -1, 'Directive', null),
            174 =>
new \Railt\Compiler\Parser\Rule\Terminal(174, 'T_BRACE_OPEN', null, -1, false),
            175 =>
new \Railt\Compiler\Parser\Rule\Repetition(175, 1, -1, '__enumDefinitionValue', null),
            176 =>
new \Railt\Compiler\Parser\Rule\Terminal(176, 'T_BRACE_CLOSE', null, -1, false),
            'EnumDefinition' =>
new \Railt\Compiler\Parser\Rule\Concatenation('EnumDefinition', [171, 172, 'TypeName', 173, 174, 175, 176], '#EnumDefinition'),
            178 =>
new \Railt\Compiler\Parser\Rule\Repetition(178, 0, 1, 'Documentation', null),
            179 =>
new \Railt\Compiler\Parser\Rule\Repetition(179, 0, -1, 'Directive', null),
            '__enumDefinitionValue' =>
new \Railt\Compiler\Parser\Rule\Concatenation('__enumDefinitionValue', [178, 'NameExceptValues', 179], '#EnumValue'),
            181 =>
new \Railt\Compiler\Parser\Rule\Repetition(181, 0, 1, 'Documentation', null),
            182 =>
new \Railt\Compiler\Parser\Rule\Terminal(182, 'T_UNION', null, -1, false),
            183 =>
new \Railt\Compiler\Parser\Rule\Repetition(183, 0, -1, 'Directive', null),
            184 =>
new \Railt\Compiler\Parser\Rule\Terminal(184, 'T_EQUAL', null, -1, false),
            185 =>
new \Railt\Compiler\Parser\Rule\Terminal(185, 'T_OR', null, -1, false),
            186 =>
new \Railt\Compiler\Parser\Rule\Repetition(186, 0, 1, 185, null),
            187 =>
new \Railt\Compiler\Parser\Rule\Repetition(187, 1, -1, '__unionDefinitionTargets', null),
            'UnionDefinition' =>
new \Railt\Compiler\Parser\Rule\Concatenation('UnionDefinition', [181, 182, 'TypeName', 183, 184, 186, 187], '#UnionDefinition'),
            189 =>
new \Railt\Compiler\Parser\Rule\Terminal(189, 'T_OR', null, -1, false),
            190 =>
new \Railt\Compiler\Parser\Rule\Concatenation(190, [189, 'TypeName'], null),
            191 =>
new \Railt\Compiler\Parser\Rule\Repetition(191, 0, -1, 190, null),
            '__unionDefinitionTargets' =>
new \Railt\Compiler\Parser\Rule\Concatenation('__unionDefinitionTargets', ['TypeName', 191], null),
            193 =>
new \Railt\Compiler\Parser\Rule\Terminal(193, 'T_INPUT', null, -1, false),
            194 =>
new \Railt\Compiler\Parser\Rule\Repetition(194, 0, -1, 'Directive', null),
            195 =>
new \Railt\Compiler\Parser\Rule\Terminal(195, 'T_BRACE_OPEN', null, -1, false),
            196 =>
new \Railt\Compiler\Parser\Rule\Repetition(196, 0, -1, '__inputDefinitionField', null),
            197 =>
new \Railt\Compiler\Parser\Rule\Terminal(197, 'T_BRACE_CLOSE', null, -1, false),
            'InputDefinition' =>
new \Railt\Compiler\Parser\Rule\Concatenation('InputDefinition', [193, 'TypeName', 194, 195, 196, 197], '#InputDefinition'),
            199 =>
new \Railt\Compiler\Parser\Rule\Repetition(199, 0, -1, 'Directive', null),
            '__inputDefinitionField' =>
new \Railt\Compiler\Parser\Rule\Concatenation('__inputDefinitionField', ['ArgumentDefinition', 199], '#InputField'),
            201 =>
new \Railt\Compiler\Parser\Rule\Repetition(201, 0, 1, 'Documentation', null),
            202 =>
new \Railt\Compiler\Parser\Rule\Terminal(202, 'T_DIRECTIVE', null, -1, false),
            203 =>
new \Railt\Compiler\Parser\Rule\Terminal(203, 'T_DIRECTIVE_AT', null, -1, false),
            204 =>
new \Railt\Compiler\Parser\Rule\Repetition(204, 0, 1, '__directiveDefinitionArguments', null),
            205 =>
new \Railt\Compiler\Parser\Rule\Terminal(205, 'T_ON', null, -1, false),
            'DirectiveDefinition' =>
new \Railt\Compiler\Parser\Rule\Concatenation('DirectiveDefinition', [201, 202, 203, 'TypeName', 204, 205, '__directiveDefinitionLocations'], '#DirectiveDefinition'),
            207 =>
new \Railt\Compiler\Parser\Rule\Terminal(207, 'T_PARENTHESIS_OPEN', null, -1, false),
            208 =>
new \Railt\Compiler\Parser\Rule\Repetition(208, 0, -1, '__directiveDefinitionArgument', null),
            209 =>
new \Railt\Compiler\Parser\Rule\Terminal(209, 'T_PARENTHESIS_CLOSE', null, -1, false),
            '__directiveDefinitionArguments' =>
new \Railt\Compiler\Parser\Rule\Concatenation('__directiveDefinitionArguments', [207, 208, 209], null),
            '__directiveDefinitionArgument' =>
new \Railt\Compiler\Parser\Rule\Concatenation('__directiveDefinitionArgument', ['ArgumentDefinition'], '#DirectiveArgument'),
            212 =>
new \Railt\Compiler\Parser\Rule\Terminal(212, 'T_OR', null, -1, false),
            213 =>
new \Railt\Compiler\Parser\Rule\Repetition(213, 0, 1, 212, null),
            214 =>
new \Railt\Compiler\Parser\Rule\Repetition(214, 1, -1, '__directiveDefinitionLocation', null),
            '__directiveDefinitionLocations' =>
new \Railt\Compiler\Parser\Rule\Concatenation('__directiveDefinitionLocations', [213, 214], '#DirectiveLocations'),
            216 =>
new \Railt\Compiler\Parser\Rule\Terminal(216, 'T_OR', null, -1, false),
            217 =>
new \Railt\Compiler\Parser\Rule\Concatenation(217, [216, 'NameWithReserved'], null),
            218 =>
new \Railt\Compiler\Parser\Rule\Repetition(218, 0, -1, 217, null),
            '__directiveDefinitionLocation' =>
new \Railt\Compiler\Parser\Rule\Concatenation('__directiveDefinitionLocation', ['NameWithReserved', 218], null),
            'Definition' =>
new \Railt\Compiler\Parser\Rule\Choice('Definition', ['SchemaDefinition', 'ScalarDefinition', 'ObjectDefinition', 'InterfaceDefinition', 'EnumDefinition', 'UnionDefinition', 'DirectiveDefinition', 'InputDefinition'], null),
            221 =>
new \Railt\Compiler\Parser\Rule\Terminal(221, 'T_COLON', null, -1, false),
            'ArgumentInvocation' =>
new \Railt\Compiler\Parser\Rule\Concatenation('ArgumentInvocation', ['NameWithReserved', 221, 'Value'], null),
            223 =>
new \Railt\Compiler\Parser\Rule\Terminal(223, 'T_DIRECTIVE_AT', null, -1, false),
            224 =>
new \Railt\Compiler\Parser\Rule\Repetition(224, 0, 1, '__directiveInvocationArguments', null),
            'Directive' =>
new \Railt\Compiler\Parser\Rule\Concatenation('Directive', [223, 'TypeName', 224], '#Directive'),
            226 =>
new \Railt\Compiler\Parser\Rule\Terminal(226, 'T_PARENTHESIS_OPEN', null, -1, false),
            227 =>
new \Railt\Compiler\Parser\Rule\Repetition(227, 0, -1, '__directiveInvocationArgument', null),
            228 =>
new \Railt\Compiler\Parser\Rule\Terminal(228, 'T_PARENTHESIS_CLOSE', null, -1, false),
            '__directiveInvocationArguments' =>
new \Railt\Compiler\Parser\Rule\Concatenation('__directiveInvocationArguments', [226, 227, 228], null),
            '__directiveInvocationArgument' =>
new \Railt\Compiler\Parser\Rule\Concatenation('__directiveInvocationArgument', ['ArgumentInvocation'], '#DirectiveArgument'),
            'Invocation' =>
new \Railt\Compiler\Parser\Rule\Concatenation('Invocation', ['Directive'], null),
                    ];
    }

    /**
     * @return string Returns the lexer compilation date and time in RFC3339 format
     */
    public function getBuiltDate(): string
    {
        return '2018-03-21UTC00:09:04.017+00:00';
    }
}
