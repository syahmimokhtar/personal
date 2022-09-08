<?php


abstract class Creator{
    abstract public function factoryMethod():IQueuable;

    public function someOperation(): string
    {
        // Call the factory method to create a Product object.
        $product = $this->factoryMethod();
        // Now, use the product.
        $result = "Creator: The same creator's code has just worked with " .
        $product-> dequeue();
        $product-> getQueue();
        $product-> size();

        return $result;
    }
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


function clientCode(Creator $creator)
{
    echo "Client: I'm not aware of the creator's class, but it still works.\n";
    // . $creator->dequeue();
}




echo "App: Launched with the ConcreteCreator1.\n";
clientCode(new QueueCreator());
echo "\n\n";

?>