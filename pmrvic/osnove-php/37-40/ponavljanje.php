<?php

class A
{
    const NAME = 'A';
    public static function test() {
        $args = func_get_args();
        echo static::NAME, " ".join(',', $args)." \n";
    }
}
A::test();
$a1=new A();
$a1->test();

class boo
{
  public static function something()
  {
    echo"<hr>".  __CLASS__." "; // foo
   // var_dump($this);
  }
}
boo::something();

class foo
{
  public function something()
  {
    echo"<hr>".  __CLASS__." "; // foo
    var_dump($this);
  }
}

class foo_bar extends foo
{
  public function something()
  {
    echo"<hr>".  __CLASS__." "; // foo_bar
    var_dump($this);
  }
    public function call()
  {
    echo self::something(); // self
    echo parent::something(); // parent
    echo boo::something(); // grandparent any class..
  }
}

class foo_bar_baz extends foo_bar
{
  public function something()
  {
    echo "<hr>". __CLASS__." "; // foo_bar_baz
    var_dump($this);
  }

  public function call()
  {
    echo self::something(); // self
    echo parent::something(); // parent
    echo foo::something(); // grandparent
  }
}

///error_reporting(-1);

$obj = new foo_bar();
$obj->call();

// Output similar to:
// foo_bar_baz
// object(foo_bar_baz)[1]
// foo_bar
// object(foo_bar_baz)[1]
// foo
// object(foo_bar_baz)[1]

