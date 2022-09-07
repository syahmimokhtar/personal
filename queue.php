
<?php

interface IQueuable{
    public function enqueue($item);
    public function dequeue();
    public function getQueue();
    public function size();
}

class Queue implements IQueuable{

  public $queue = array();

 

  //create a function to return size of the queue 
  public function size() {
     echo 'size of array is '.(count($this->queue));
  }

  public function enqueue($item) {
    array_push($this->queue, $item);
    $imploded=implode(',', $this->queue);
    echo $item." is added into the queue. <br>";
    echo " new  queue is :".$imploded."<br><br>";

  }

  public function dequeue() {
      $removed= array_pop($this->queue);
      echo $removed." is removed into the queue.<br>";

  }

  public function getQueue() {
      
    $imploded=implode(',', $this->queue);
     echo 'current queue is ' .$imploded."<br>" ;

      
   
  }
  
  public function printFIFO(){
      echo "<strong>this is FIFO</strong>";
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

?>
