<?php

/**
 * Description of Controller
 *
 * @author lorenzo
 */
abstract class Controller {

    /** @var string template name */
    protected $template;


    /**
     * 
     */
    public function run() {
        return $this->display();
    }
    
    public function fetch() {
        $file = 'templates/'.$this->template.'.php';
        if(file_exists($file)) {
            $html = eval('?>'.file_get_contents($file).'');
        }
        return $html;
    }
    
    public function display() {
        
        echo $this->fetch();
    }

}
