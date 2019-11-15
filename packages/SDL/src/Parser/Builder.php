<?php

/**
 * This file is part of Railt package and has been autogenerated.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see https://github.com/railt/sdl/blob/2.0.x-dev/LICENSE.md
 * @see https://github.com/phplrt/parser/blob/2.2.3/LICENSE.md
 * @see https://github.com/phplrt/lexer/blob/2.2.3/LICENSE.md
 */

declare(strict_types=1);

namespace Railt\SDL\Parser;

use Phplrt\Contracts\Ast\NodeInterface;
use Phplrt\Contracts\Lexer\TokenInterface;
use Phplrt\Contracts\Source\ReadableInterface;
use Phplrt\Parser\Builder\BuilderInterface;
use Phplrt\Parser\Rule\RuleInterface;
use Railt\SDL\Exception\SyntaxErrorException;

/**
 * @internal This class is generated by railt/parser, specifically by Railt\SDL\Parser\Generator\Generator
 */
final class Builder implements BuilderInterface
{
    /**
     * {@inheritDoc}
     * @throws SyntaxErrorException
     * @throws \Throwable
     */
    public function build(ReadableInterface $file, RuleInterface $rule, TokenInterface $token, $state, $children)
    {
        try {
            return $this->reduce($state, $children);
        } catch (SyntaxErrorException $e) {
            throw $e;
        } catch (\Exception $e) {
            throw new SyntaxErrorException($e->getMessage(), $file, $token->getOffset());
        }
    }

    /**
     * @param int|string $state
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    private function reduce($state, $children)
    {
        switch ($state) {
            case 20:
                return $this->reduce20($children);
            case 21:
                return $this->reduce21($children);
            case 23:
                return $this->reduce23($children);
            case 22:
                return $this->reduce22($children);
            case 24:
                return $this->reduce24($children);
            case 32:
                return $this->reduce32($children);
            case 33:
                return $this->reduce33($children);
            case 37:
                return $this->reduce37($children);
            case 34:
                return $this->reduce34($children);
            case 42:
                return $this->reduce42($children);
            case 43:
                return $this->reduce43($children);
            case 46:
                return $this->reduce46($children);
            case 50:
                return $this->reduce50($children);
            case 47:
                return $this->reduce47($children);
            case 51:
                return $this->reduce51($children);
            case 55:
                return $this->reduce55($children);
            case 56:
                return $this->reduce56($children);
            case 59:
                return $this->reduce59($children);
            case 58:
                return $this->reduce58($children);
            case 61:
                return $this->reduce61($children);
            case 63:
                return $this->reduce63($children);
            case 70:
                return $this->reduce70($children);
            case 74:
                return $this->reduce74($children);
            case 85:
                return $this->reduce85($children);
            case 87:
                return $this->reduce87($children);
            case 84:
                return $this->reduce84($children);
            case 105:
                return $this->reduce105($children);
            case 104:
                return $this->reduce104($children);
            case 92:
                return $this->reduce92($children);
            case 115:
                return $this->reduce115($children);
            case 124:
                return $this->reduce124($children);
            case 123:
                return $this->reduce123($children);
            case 133:
                return $this->reduce133($children);
            case 132:
                return $this->reduce132($children);
            case 138:
                return $this->reduce138($children);
            case 148:
                return $this->reduce148($children);
            case 158:
                return $this->reduce158($children);
            case 162:
                return $this->reduce162($children);
            case 177:
                return $this->reduce177($children);
            case 188:
                return $this->reduce188($children);
            case 193:
                return $this->reduce193($children);
            case 199:
                return $this->reduce199($children);
            case 67:
                return $this->reduce67($children);
            case 207:
                return $this->reduce207($children);
            case 208:
                return $this->reduce208($children);
            case 211:
                return $this->reduce211($children);
            case 220:
                return $this->reduce220($children);
            case 222:
                return $this->reduce222($children);
            case 224:
                return $this->reduce224($children);
            case 226:
                return $this->reduce226($children);
            case 228:
                return $this->reduce228($children);
            case 230:
                return $this->reduce230($children);
            case 232:
                return $this->reduce232($children);
        }

        return null;
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce20($children)
    {
        return new \Railt\SDL\Ast\Name\IdentifierNode($children->getValue());
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce21($children)
    {
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce23($children)
    {
        return new \Railt\SDL\Ast\Type\ListTypeNode($children[0]);
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce22($children)
    {
        return new \Railt\SDL\Ast\Type\NonNullTypeNode($children[0]);
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce24($children)
    {
        return new \Railt\SDL\Ast\Type\NamedTypeNode($children[0]);
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce32($children)
    {
        return \Railt\SDL\Ast\Value\BooleanValueNode::parse($children->getValue());
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce33($children)
    {
        $first = $children[0];

        switch (true) {
            case $first instanceof \Railt\SDL\Ast\Value\ValueNode:
            case $first instanceof \Railt\SDL\Ast\Name\IdentifierNode:
                return new \Railt\SDL\Ast\Value\EnumValueNode($first->value);

            default:
                throw new \InvalidArgumentException('Unrecognized Enum value type: ' . \gettype($first));
        }
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce37($children)
    {
        return new \Railt\SDL\Ast\Value\ListValueNode($children[0]);
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce34($children)
    {
        return new \Railt\SDL\Ast\Generic\ValueCollection($children);
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce42($children)
    {
        return new \Railt\SDL\Ast\Value\NullValueNode();
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce43($children)
    {
        return \Railt\SDL\Ast\Value\IntValueNode::parse($children->getValue());
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce46($children)
    {
        return \Railt\SDL\Ast\Value\FloatValueNode::parse($children->getValue());
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce50($children)
    {
        return new \Railt\SDL\Ast\Value\ObjectValueNode($children[0]);
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce47($children)
    {
        return new \Railt\SDL\Ast\Generic\ObjectFieldCollection($children);
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce51($children)
    {
        return new \Railt\SDL\Ast\Value\ObjectFieldNode($children[0], $children[1]);
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce55($children)
    {
        return \Railt\SDL\Ast\Value\StringValueNode::parse($children[0]->getValue(), true);
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce56($children)
    {
        return \Railt\SDL\Ast\Value\StringValueNode::parse($children[0]->getValue(), false);
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce59($children)
    {
        return new \Railt\SDL\Ast\Value\VariableNode($children[0]);
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce58($children)
    {
        return new \Railt\SDL\Ast\Name\IdentifierNode($children[0]->getValue());
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce61($children)
    {
        return new \Railt\SDL\Ast\Description($children ?: null);
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce63($children)
    {
        $operations = \array_filter($children, static function ($child): bool {
            return $child instanceof \Railt\SDL\Ast\Generic\OperationTypeDefinitionCollection;
        });

        $schema = new \Railt\SDL\Ast\Definition\SchemaDefinitionNode(
            \reset($operations) ?: new \Railt\SDL\Ast\Generic\OperationTypeDefinitionCollection([])
        );

        foreach ($children as $child) {
            switch (true) {
                case $child instanceof \Railt\SDL\Ast\Description:
                    $schema->description = $child->value;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\DirectiveCollection:
                    $schema->directives = $child;
                    break;
            }
        }

        return $schema;
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce70($children)
    {
        return new \Railt\SDL\Ast\Generic\OperationTypeDefinitionCollection($children);
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce74($children)
    {
        return new \Railt\SDL\Ast\Definition\OperationTypeDefinitionNode(
            $children[0]->getValue(),
            $children[1]
        );
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce85($children)
    {
        $directive = new \Railt\SDL\Ast\Definition\DirectiveDefinitionNode(
            $children[1],
            \end($children)
        );

        foreach ($children as $child) {
            switch (true) {
                case $child instanceof \Railt\SDL\Ast\Description:
                    $directive->description = $child->value;
                    break;

                case \is_bool($child):
                    $directive->repeatable = true;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\ArgumentDefinitionCollection:
                    $directive->arguments = $child;
                    break;
            }
        }

        return $directive;
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce87($children)
    {
        return ! \is_array($children);
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce84($children)
    {
        return new \Railt\SDL\Ast\Generic\DirectiveLocationCollection($children);
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce105($children)
    {
        return new \Railt\SDL\Ast\Generic\FieldDefinitionCollection($children);
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce104($children)
    {
        $field = new \Railt\SDL\Ast\Definition\FieldDefinitionNode(
            $children[1],
            \Railt\SDL\Ast\Type\TypeNode::resolve($children)
        );

        foreach ($children as $child) {
            switch (true) {
                case $child instanceof \Railt\SDL\Ast\Generic\DirectiveCollection:
                    $field->directives = $child;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\ArgumentDefinitionCollection:
                    $field->arguments = $child;
                    break;
            }
        }

        return $field;
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce92($children)
    {
        return new \Railt\SDL\Ast\Generic\ArgumentDefinitionCollection($children);
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce115($children)
    {
        $value = new \Railt\SDL\Ast\Definition\ArgumentDefinitionNode(
            $children[1],
            $children[2]
        );

        foreach ($children as $child) {
            switch (true) {
                case $child instanceof \Railt\SDL\Ast\Description:
                    $value->description = $child->value;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\DirectiveCollection:
                    $value->directives = $child;
                    break;

                case $child instanceof \Railt\SDL\Ast\Value\ValueNode:
                    $value->defaultValue = $child;
                    break;
            }
        }

        return $value;
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce124($children)
    {
        return new \Railt\SDL\Ast\Generic\InputFieldDefinitionCollection($children);
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce123($children)
    {
        $value = new \Railt\SDL\Ast\Definition\InputFieldDefinitionNode(
            $children[1],
            $children[2]
        );

        foreach ($children as $child) {
            switch (true) {
                case $child instanceof \Railt\SDL\Ast\Description:
                    $value->description = $child->value;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\DirectiveCollection:
                    $value->directives = $child;
                    break;

                case $child instanceof \Railt\SDL\Ast\Value\ValueNode:
                    $value->defaultValue = $child;
                    break;
            }
        }

        return $value;
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce133($children)
    {
        return new \Railt\SDL\Ast\Generic\EnumValueDefinitionCollection($children);
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce132($children)
    {
        $value = new \Railt\SDL\Ast\Definition\EnumValueDefinitionNode(
            $children[1]
        );

        foreach ($children as $child) {
            switch (true) {
                case $child instanceof \Railt\SDL\Ast\Description:
                    $value->description = $child->value;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\DirectiveCollection:
                    $value->directives = $child;
                    break;
            }
        }

        return $value;
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce138($children)
    {
        $enum = new \Railt\SDL\Ast\Definition\EnumTypeDefinitionNode(
            $children[1]
        );

        foreach ($children as $child) {
            switch (true) {
                case $child instanceof \Railt\SDL\Ast\Description:
                    $enum->description = $child->value;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\DirectiveCollection:
                    $enum->directives = $child;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\EnumValueDefinitionCollection:
                    $enum->values = $child;
                    break;
            }
        }

        return $enum;
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce148($children)
    {
        $input = new \Railt\SDL\Ast\Definition\InputObjectTypeDefinitionNode(
            $children[1]
        );

        foreach ($children as $child) {
            switch (true) {
                case $child instanceof \Railt\SDL\Ast\Description:
                    $input->description = $child->value;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\DirectiveCollection:
                    $input->directives = $child;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\InputFieldDefinitionCollection:
                    $input->fields = $child;
                    break;
            }
        }

        return $input;
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce158($children)
    {
        $interface = new \Railt\SDL\Ast\Definition\InterfaceTypeDefinitionNode(
            $children[1]
        );

        foreach ($children as $child) {
            switch (true) {
                case $child instanceof \Railt\SDL\Ast\Description:
                    $interface->description = $child->value;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\FieldDefinitionCollection:
                    $interface->fields = $child;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\DirectiveCollection:
                    $interface->directives = $child;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\InterfaceImplementsCollection:
                    $interface->interfaces = $child;
                    break;
            }
        }

        return $interface;
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce162($children)
    {
        return new \Railt\SDL\Ast\Generic\InterfaceImplementsCollection($children);
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce177($children)
    {
        $object = new \Railt\SDL\Ast\Definition\ObjectTypeDefinitionNode($children[1]);

        foreach ($children as $child) {
            switch (true) {
                case $child instanceof \Railt\SDL\Ast\Description:
                    $object->description = $child->value;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\FieldDefinitionCollection:
                    $object->fields = $child;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\DirectiveCollection:
                    $object->directives = $child;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\InterfaceImplementsCollection:
                    $object->interfaces = $child;
                    break;
            }
        }

        return $object;
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce188($children)
    {
        $scalar = new \Railt\SDL\Ast\Definition\ScalarTypeDefinitionNode(
            $children[1]
        );

        foreach ($children as $child) {
            switch (true) {
                case $child instanceof \Railt\SDL\Ast\Description:
                    $scalar->description = $child->value;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\DirectiveCollection:
                    $scalar->directives = $child;
                    break;
            }
        }

        return $scalar;
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce193($children)
    {
        $union = new \Railt\SDL\Ast\Definition\UnionTypeDefinitionNode($children[1]);

        foreach ($children as $child) {
            switch (true) {
                case $child instanceof \Railt\SDL\Ast\Description:
                    $union->description = $child->value;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\DirectiveCollection:
                    $union->directives = $child;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\UnionTypesCollection:
                    $union->types = $child;
                    break;
            }
        }

        return $union;
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce199($children)
    {
        return new \Railt\SDL\Ast\Generic\UnionTypesCollection($children);
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce67($children)
    {
        return new \Railt\SDL\Ast\Generic\DirectiveCollection($children);
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce207($children)
    {
        $directive = new \Railt\SDL\Ast\Executable\DirectiveNode($children[0]);

        if (isset($children[1])) {
            $directive->arguments = $children[1];
        }

        return $directive;
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce208($children)
    {
        return new \Railt\SDL\Ast\Generic\ArgumentCollection($children);
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce211($children)
    {
        return new \Railt\SDL\Ast\Executable\ArgumentNode(...$children);
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce220($children)
    {
        $enum = new \Railt\SDL\Ast\Extension\EnumTypeExtensionNode(
            $children[1]
        );

        foreach ($children as $child) {
            switch (true) {
                case $child instanceof \Railt\SDL\Ast\Description:
                    $enum->description = $child->value;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\DirectiveCollection:
                    $enum->directives = $child;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\EnumValueDefinitionCollection:
                    $enum->values = $child;
                    break;
            }
        }

        return $enum;
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce222($children)
    {
        $input = new \Railt\SDL\Ast\Extension\InputObjectTypeExtensionNode(
            $children[1]
        );

        foreach ($children as $child) {
            switch (true) {
                case $child instanceof \Railt\SDL\Ast\Description:
                    $input->description = $child->value;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\DirectiveCollection:
                    $input->directives = $child;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\InputFieldDefinitionCollection:
                    $input->fields = $child;
                    break;
            }
        }

        return $input;
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce224($children)
    {
        $interface = new \Railt\SDL\Ast\Extension\InterfaceTypeExtensionNode(
            $children[1]
        );

        foreach ($children as $child) {
            switch (true) {
                case $child instanceof \Railt\SDL\Ast\Description:
                    $interface->description = $child->value;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\FieldDefinitionCollection:
                    $interface->fields = $child;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\DirectiveCollection:
                    $interface->directives = $child;
                    break;
            }
        }

        return $interface;
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce226($children)
    {
        $object = new \Railt\SDL\Ast\Extension\ObjectTypeExtensionNode(
            $children[1]
        );

        foreach ($children as $child) {
            switch (true) {
                case $child instanceof \Railt\SDL\Ast\Description:
                    $object->description = $child->value;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\FieldDefinitionCollection:
                    $object->fields = $child;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\DirectiveCollection:
                    $object->directives = $child;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\InterfaceTypeDefinitionCollection:
                    $object->interfaces = $child;
                    break;
            }
        }

        return $object;
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce228($children)
    {
        $scalar = new \Railt\SDL\Ast\Extension\ScalarTypeExtensionNode(
            $children[1]
        );

        foreach ($children as $child) {
            switch (true) {
                case $child instanceof \Railt\SDL\Ast\Description:
                    $scalar->description = $child->value;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\DirectiveCollection:
                    $scalar->directives = $child;
                    break;
            }
        }

        return $scalar;
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce230($children)
    {
        $schema = new \Railt\SDL\Ast\Extension\SchemaExtensionNode();

        foreach ($children as $child) {
            switch (true) {
                case $child instanceof \Railt\SDL\Ast\Description:
                    $schema->description = $child->value;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\DirectiveCollection:
                    $schema->directives = $child;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\OperationTypeDefinitionCollection:
                    $schema->operationTypes = $child;
                    break;
            }
        }

        return $schema;
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduce232($children)
    {
        $union = new \Railt\SDL\Ast\Extension\UnionTypeExtensionNode($children[1]);

        foreach ($children as $child) {
            switch (true) {
                case $child instanceof \Railt\SDL\Ast\Description:
                    $union->description = $child->value;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\DirectiveCollection:
                    $union->directives = $child;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\TypeDefinitionCollection:
                    $union->types = $child;
                    break;
            }
        }

        return $union;
    }
}