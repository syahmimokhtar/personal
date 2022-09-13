<?php


interface BuilderIQueuable{
    public function enqueue($item);
    public function dequeue();
    public function getQueue();
    public function size();
}

//FIFO
class BuilderQueue implements BuilderIQueuable{

    public $queue = array();
 
 
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
        $removed= array_shift($this->queue);
        echo $removed." is removed from the queue.<br>";
  
    }
  
    public function getQueue() {
        
      $imploded=implode(',', $this->queue);
       echo 'current queue is ' .$imploded."<br>" ;
  
        
     
    }
    
    public function printFIFO(){
      echo "<br><strong>this is FIFO</strong>";
    }
  
    
}



//LIFO
class BuilderStack implements BuilderIQueuable{   

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
        echo $removed." is removed from the queue.<br>";
  
    }
  
    public function getQueue() {
        
      $imploded=implode(',', $this->queue);
       echo 'current queue is ' .$imploded."<br>" ;
  
        
     
    }
    
    public function printLIFO(){
        echo "<br><strong>this is LIFO</strong>";
    }
  
    
  }
