<?php

namespace App\Helpers\Composite;

/**
 * Composite Design Pattern
 *
 * Intent: Lets you compose objects into tree structures and then work with
 * these structures as if they were individual objects.
 *
 * Example: The Composite pattern can streamline the work with any tree-like
 * recursive structures. The HTML DOM tree is an example of such a structure.
 * For instance, while the various input elements can act as leaves, the complex
 * elements like forms and fieldsets play the role of composites.
 *
 * Bearing that in mind, you can use the Composite pattern to apply various
 * behaviors to the whole HTML tree in the same way as to its inner elements
 * without coupling your code to concrete classes of the DOM tree. Examples of
 * such behaviors might be rendering the DOM elements, exporting it into various
 * formats, validating its parts, etc.
 *
 * With the Composite pattern, you don't need to check whether it's the simple
 * or complex type of element before executing the behavior. Depending on the
 * element's type, it either gets executed right away or passed all the way down
 * to all element's children.
 */

/**
 * The base Component class declares an interface for all concrete components,
 * both simple and complex.
 *
 * In our example, we'll be focusing on the rendering behavior of DOM elements.
 */

abstract class FormElement
{
    private $data;

    public function __construct(
        protected string $name,
        protected string $title
    ) {}

    public function getName(): string
    {
        return $this->name;
    }

    public function setData($data): void
    {
        $this->data = $data;
    }

    public function getData(): array
    {
        return $this->data;
    }

    abstract public function render(): string;
}