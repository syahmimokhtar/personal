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
    class Stack implements IQueuable{

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


    class Factory{
        public static function  createPattern($type){

            switch($type){
                case 'Queue':
                    $obj=new Queue();
                    break;
                case 'Stack':
                    $obj=new Stack();
                    break;
                default :
                    $obj= 'wrong pattern';
                    break;
            }

            return $obj;


        }
    }


    $MyQueue=Factory::createPattern('Queue');
    $MyQueue->enqueue(1);
    $MyQueue->enqueue(2);
    $MyQueue->enqueue(3);
    $MyQueue->enqueue(4);
    $MyQueue->enqueue(5);
    $MyQueue->dequeue();
    $MyQueue->getQueue();
    $MyQueue->size();
    $MyQueue->printFIFO();

    echo '<br><br><br>';

    $MyStack=Factory::createPattern('Stack');
    $MyStack->enqueue(1);
    $MyStack->enqueue(2);
    $MyStack->enqueue(3);
    $MyStack->enqueue(4);
    $MyStack->enqueue(5);
    $MyStack->dequeue();
    $MyStack->getQueue();
    $MyStack->size();
    $MyStack->printLIFO();
    

    
    
    

?>