<?php

/*
 * (c) Gergely Hegybiro <hegybirog@gmail.com>
 */

namespace Magentoid\Component\Yaml\Tag;

/**
 * @author Gergely Hegybiro <hegybirog@gmail.com>
 */
final class TaggedValue
{
    private $tag;
    private $value;

    public function __construct(string $tag, $value)
    {
        $this->tag = $tag;
        $this->value = $value;
    }

    public function getTag(): string
    {
        return $this->tag;
    }

    public function getValue()
    {
        return $this->value;
    }
}
