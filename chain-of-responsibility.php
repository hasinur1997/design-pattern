<?php
abstract class HomeChecker {
    public $successor;

    public abstract function check(HomeStatus $home);

    public function succedWith(HomeChecker $successor) 
    {
        $this->successor = $successor;
    }

    public function next(HomeStatus $home) 
    {
        if ( $this->successor ) 
        {
            $this->successor->check($home);
        }
    } 
}


class Lock  extends HomeChecker {

    public function check(HomeStatus $home) {

        if ( ! $home->locked ) {
            throw new Exception('The door are not locked !');
        }
        echo "Lock" . '<br>';
        $this->next($home);
    }
}

class Light extends HomeChecker 
{
    public function check(HomeStatus $home)
    {
        if ( ! $home->lightOff ) 
        {
            throw new Exception('Light is still on.');
        }
        echo "Light" . '<br>';
        $this->next($home);
    }
}

class Alarm extends HomeChecker
{
    public function check(HomeStatus $home) 
    {
        if ( ! $home->alarmOn ) 
        {
            throw new Exception('Alarm has not been set.');
        }
        echo "Alarm" . '<br>';
        $this->next($home);
    }
}

class HomeStatus {
    public $locked = true;
    public $alarmOn = true;
    public $lightOff = true;
}

$lock = new Lock;
$light = new Light;
$alarm = new Alarm;


$light->succedWith($alarm);
$lock->succedWith($light);
$lock->check(new HomeStatus);

