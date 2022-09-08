<?php


abstract class Creator{
    abstract public function factoryMethod():IQueuable;

    
}

interface IQueuable{

    public function enqueue($item);
    public function dequeue();
    public function getQueue();
    public function size();
}


class QueueCreator extends Creator{

    public function factoryMethod(): IQueuable
    {
        return new Queue;
    }
}

class StackCreator extends Creator{

    public function factoryMethod(): IQueuable
    {
        return new Stack;
    }
}

class Queue implements IQueuable{


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

}

?>