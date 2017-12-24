<?php
class Stack
{
    private $capacity;
    private $values = [];

    public function __construct($capacity = 10)
    {
        $this->capacity = $capacity;
    }

    public function capacity()
    {
        return $this->capacity;
    }

    public function size()
    {
        return count($this->values);
    }

    public function push($value)
    {
        if ($this->isFull()) {
            throw new OverflowException();
        }
        $this->values[] = $value;
    }

    public function pop()
    {
        if ($this->isEmpty())
        {
            throw new OutOfBoundsException();
        }

        return array_pop($this->values);
    }

    private function isEmpty()
    {
        return count($this->values) == 0;
    }

    public function isFull()
    {
        return $this->capacity <= $this->size();
    }

    public function __toString()
    {
        if ($this->isEmpty()) {
            return "[]";
        }
        $s = '[';
        $s .= $this->values[0];
        for ($i = 1; $i < count($this->values); $i++) {
            $s .= ',';
            $s .= $this->values[$i];
        }
        $s .= ']';
        return $s;

    }
}
