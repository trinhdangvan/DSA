<?php
class ReadingList
{
    protected $stack;
    protected $limit;

    public function __construct($limit = 10) {
        // initialize the stack
        $this->stack = array();
        // stack can only contain this many items
        $this->limit = $limit;
    }

    public function push($item) {
        // trap for stack overflow
        if (count($this->stack) < $this->limit) {
            // prepend item to the start of the array
            array_unshift($this->stack, $item);
        } else {
            throw new RunTimeException('Stack is full!');
        }
    }

    public function pop() {
        if ($this->isEmpty()) {
            // trap for stack underflow
            throw new RunTimeException('Stack is empty!');
        } else {
            // pop item from the start of the array
            return array_shift($this->stack);
        }
    }

    public function top() {
        return current($this->stack);
    }

    public function isEmpty() {
        return empty($this->stack);
    }
}
$myBooks =new ReadingList();

$myBooks->push('one book');
$myBooks->push('two book');
$myBooks->push('three book');
$myBooks->push('four book');
$myBooks->push('five book');

echo $myBooks->pop().'<br>';
echo $myBooks->pop().'<br>';
echo $myBooks->pop().'<br>';

$myBooks->push('six book');
$myBooks->push('seven book');

$myBooks->isEmpty();
var_dump($myBooks->isEmpty());

$myBooks->pop().'<br>';
$myBooks->pop().'<br>';
$myBooks->pop().'<br>';
$myBooks->pop().'<br>';
$myBooks->pop().'<br>';

$myBooks->isEmpty();
var_dump($myBooks->isEmpty());
print("<pre>" . print_r($myBooks, true) . "</pre>");

