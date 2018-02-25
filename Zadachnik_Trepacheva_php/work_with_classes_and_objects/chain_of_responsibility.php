<?php
/*abstract class AbstractHandler
{
    /**
     * @var AbstractHandler
     */
   /* protected $_next;
    /**
     * Send request by
     *
     * @param mixed $message
     */
   /* abstract public function sendRequest($message);
    /**
     * @param \AbstractHandler $next
     */
   /* public function setNext($next)
    {
        $this->_next = $next;
    }
    /**
     * @return \AbstractHandler
     */
    /*public function getNext()
    {
        return $this->_next;
    }
}


class ConcreteHandlerA extends AbstractHandler
{
    /**
     * @param mixed $message
     */
    /*public function sendRequest($message)
    {
        if ($message == 1) {
            echo __CLASS__ . " process this message".'<br>';
        }
        else {
            if ($this->getNext()) {
                $this->getNext()->sendRequest($message);
            }
        }
    }
}


class ConcreteHandlerB extends AbstractHandler
{
   
   /* public function sendRequest($message)
    {
        if ($message == 2) {
            echo __CLASS__ . " process this message".'<br>';
        }
        else {
            if ($this->getNext()) {
                $this->getNext()->sendRequest($message);
            }
        }
    }
}


$handler = new ConcreteHandlerA();
$handler->setNext(new ConcreteHandlerB());
$handler->sendRequest(1);
$handler->sendRequest(3);*/

abstract class Logger
{
    const DEBUG = 1;
    const CRITICAL = 2;
    const NOTICE = 4;
    protected $mask = 0;
    /**
     * @var Logger
     */
    protected $next;
    /**
     * @param $mask
     */
    public function __construct($mask)
    {
        
        $this->mask = $mask;
        var_dump($mask);
    }
    /**
     * @param string $message
     * @param int $priority
     */
    public function message($message, $priority)
    {
        if ($this->mask & $priority) {
           // echo $this->mask;
            $this->_writeMessage($message);
        }
        if ($this->getNext()) {
            $this->getNext()->message($message, $priority);
        }
    }
    abstract protected function _writeMessage($message);
    /**
     * @param Logger $next
     */
    public function setNext(Logger $next)
    {
        $this->next = $next;
    }
    
    public function getNext()
    {
        return $this->next;
    }
}


class ConsoleLogger extends Logger
{
    protected function _writeMessage($message)
    {
        echo $message . PHP_EOL . '<br>';
    }
}


class FileLogger extends Logger
{
    protected function _writeMessage($message)
    {
        $f = fopen("error.log", "a");
        fwrite($f, $message . PHP_EOL);
        fclose($f);
    }
}



$logger = new ConsoleLogger(Logger::NOTICE);
$file = new FileLogger(Logger::CRITICAL | Logger::DEBUG | Logger::NOTICE);
$logger->setNext($file);
$logger->message("Notice message", Logger::NOTICE);
$logger->message("Debug message", Logger::DEBUG);
$logger->message("Critical error", Logger::CRITICAL);