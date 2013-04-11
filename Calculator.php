<?php
class Calculator
{
    private $result;

    public function calculate($a, $b, $op)
    {
        if ($op === '+') {
            $this->result = $a + $b;
        }

        return $this->result;
    }
}
