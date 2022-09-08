
<?php

interface IQueuable{
    public function enqueue($item);
    public function dequeue();
    public function getQueue();
    public function size();
}



///FIFO
class Queue implements IQueuable{

  public $queue = array();
  public $firstElement;
  public $lastElement;

  function __construct()
  {
    $this->firstElement=-1;
    $this->lastElement=-1;

  }
 

  //create a function to return size of the queue 
  public function size() {
     echo 'size of array is '.($this->lastElement-$this->firstElement);
  }

  public function enqueue($item) {
    $this->queue[++$this->lastElement]=$item  ;
    $imploded=implode(',', $this->queue);
    echo $item." is added into the queue. <br>";
    echo " new  queue is :".$imploded."<br><br>";

  }

  public function dequeue() {
      $item= $this->queue[++$this->firstElement];
      echo $item." is removed from the queue.<br>";

  }

  public function getQueue() {

    $arr=[];

    for ($x = $this->firstElement+1; $x<=$this->lastElement; $x++) {
      $arr[]=$this->queue[$x];
    }
    $imploded=implode(',', $arr);
    echo 'current array is '.$imploded.'<br>' ;

   
  }
  
  public function printFIFO(){
    echo "<br><strong>this is FIFO</strong>";
  }

  
}



$MyQueue = new Queue();
$MyQueue->enqueue(1);
$MyQueue->enqueue(2);
$MyQueue->enqueue(3);
$MyQueue->enqueue(4);
$MyQueue->enqueue(5);

$MyQueue->dequeue();
$MyQueue->getQueue();
$MyQueue->size();
$MyQueue->printFIFO();




///FIFO
class Stack implements IQueuable{

  public $queue = array();
  public $firstElement;
  public $lastElement;

  function __construct()
  {
    $this->firstElement=-1;
    $this->lastElement=-1;

  }
 

  //create a function to return size of the queue 
  public function size() {
     echo 'size of array is '.($this->lastElement-1);
  }

  public function enqueue($item) {
    $this->queue[++$this->lastElement]=$item  ;
    $imploded=implode(',', $this->queue);
    echo $item." is added into the queue. <br>";
    echo " new  queue is :".$imploded."<br><br>";

  }

  public function dequeue() {
      $item= $this->queue[$this->lastElement++];
      echo $item." is removed from the queue.<br>";

  }

  public function getQueue() {

    $arr=[];

    for ($x = $this->firstElement+1; $x<$this->lastElement-1; $x++) {
      $arr[]=$this->queue[$x];
    }

    $imploded=implode(',', $arr);
    echo 'current array is '.$imploded.'<br>' ;

   
  }

  
  public function printLIFO(){
    echo "<br><strong>this is LIFO</strong>";
  }

  
}


echo '<br><br>';
$MyQueue = new Stack();
$MyQueue->enqueue(1);
$MyQueue->enqueue(2);
$MyQueue->enqueue(3);
$MyQueue->enqueue(4);
$MyQueue->enqueue(5);

$MyQueue->dequeue();
$MyQueue->getQueue();
$MyQueue->size();
$MyQueue->printLIFO();






?>
