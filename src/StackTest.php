<?php

require_once 'Stack.php';

/**
 * Stack test case.
 */
class StackTest extends PHPUnit_Framework_TestCase
{

    public function testInit()
    {
        // Stackのインスタンスを生成した時に
        // size()メソッドが0を返すかを確認する
        // capacity()メソッドが10を返すかを確認する
        $stack = new Stack();
        $this->assertEquals(10, $stack->capacity());
    }

    public function testCapacity()
    {
        // Stackのインスタンスを生成する際に
        // 整数を渡した時に、capacity()メソッドが
        // スタックの容量を返すかを確認する
    }

    public function testPushPushPop()
    {
        // push()メソッドを2回、pop()メソッドを1回行った時に
        // スタックの状態が期待通りかを確認する
    }

    public function testPopWhenEmpty()
    {
        // スタックが空の状態で、pop()メソッドを実行した時に
        // OutOfBoundsException例外が発生するかを確認する
    }

    public function testPushWhenMaxLimit()
    {
        // スタックに最大数の値が積まれている状態で、
        // push()メソッドを実行した時に
        // OverflowException例外が発生するかを確認する
    }

    public function testIsFull()
    {
        // スタックに最大数の値が積まれているかどうかを
        // 確認する。
        $stack = new Stack(1);
        $this->assertFalse($stack->isFull());
    }
}
