
<?php

interface IQueuable{
    public function enqueue($item);
    public function dequeue();
    public function getQueue();
    public function size();
}

class Stack implements IQueuable{

  public $queue = array();

 

  //create a function to return size of the queue 
  public function size() {
     echo 'size of array is '.(count($this->queue));
  }

  public function enqueue($item) {
    array_unshift($this->queue, $item);
    $imploded=implode(',', $this->queue);
    echo $item." is added into the queue. \n";
    echo " new  queue is :".$imploded."\n\n";

  }

  public function dequeue() {
      $removed= array_shift($this->queue);
      echo $removed." is removed into the queue. \n";

  }

  public function getQueue() {
      
    $imploded=implode(',', $this->queue);
     echo 'current queue is ' .$imploded."\n" ;

      
   
  }
  
  public function printLIFO(){
      echo "\n".'this is LIFO';
  }

  
}


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
