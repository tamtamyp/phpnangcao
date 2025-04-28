<?php
    interface Shape{
        public function Perimter() : float;
        public function Area():float;
    }
    class Rectangle implements Shape{
        private $a, $b;
        public function __construct($a, $b)
        {
            $this->a = $a;
            $this->b = $b;
        }
        function Area(): float
        {
            return $this->a*$this->b;
        }
        function Perimter(): float
        {
            return 2*($this->a + $this->b);
        }
    }
    class Circle implements Shape{
        private $r;
        public function __construct($r)
        {
            $this->r = $r;
        }
        function Area(): float
        {
            return pi()*pow($this->r, 2);
        }
        function Perimter(): float
        {
            return 2*pi()*$this->r;
        }
    }