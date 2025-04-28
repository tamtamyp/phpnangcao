<?php
    abstract class MobileNetwork{
        protected $name;
        function __construct($name)
        {
            $this->name = $name;
        }
        abstract function slogan() : string;
    }
    class Viettel extends MobileNetwork{
        function slogan(): string{
            return $this->name.'-Hãy nói theo casch của bạn!';
        }
    }
    class Vinaphone extends MobileNetwork{
        function slogan(): string{
            return $this->name.'- Không ngừng  vươn xa!';
        }
    }
    class MobiFone extends MobileNetwork{
        function slogan(): string{
            return $this->name.'- Kết nối giá trị - Khơi dậy tiềm năng!';
        }
    }