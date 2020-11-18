<?php
class Dancer{
    public $name;
    public $gender;

    public function __construct($name,$gender){
        $this->name=$name;
        $this->gender=$gender;
    }
}
$queue1 =new SplQueue();
$queue2 =new SplQueue();

$dancer1 =new Dancer('yasuo','Male');
$dancer2 =new Dancer('leesin','Male');
$dancer3 =new Dancer('zed','Male');
$dancer4 =new Dancer('jax','Male');

$dancer5 =new Dancer('mina','Female');
$dancer6 =new Dancer('lux','Female');
$dancer7 =new Dancer('vane','Female');

$queue1->enqueue($dancer1);
$queue1->enqueue($dancer2);
$queue1->enqueue($dancer3);
$queue1->enqueue($dancer4);

$queue2->enqueue($dancer5);
$queue2->enqueue($dancer6);
$queue2->enqueue($dancer7);
function check($queue1,$queue2){
    if($queue1->count()==0 || $queue2->count()==0){
        echo 'co nguoi phai doi';
    }
    else{
        echo '<br>';
        echo ($queue1->dequeue()->name). ' and ' .($queue2->dequeue()->name);
    }
}
function countWait($queue1,$queue2){
    return($queue1->count() + $queue2->count());
}
 check($queue1,$queue2);
echo '<br>';
 check($queue1,$queue2);
 echo '<br>';
 echo '<br>';
 echo countWait($queue1,$queue2);

