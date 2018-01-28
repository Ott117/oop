<?php
/**
 * Created by PhpStorm.
 * User: 96hro
 * Date: 28/01/2018
 * Time: 16:07
 */
class template
{
    // klassi muutujad
    var $file = ''; // HTML faili nimi
    var $content = false; // HTML malli sisu
    var $vars = array(); // HTML malli elementide nimetuste ja reaalväärtuste paarid
    /**
     * template constructor.
     * @param string $file
     */
    public function __construct($file)
    {
        $this->file = $file; // määrame kasutatava faili nime
        $this->loadFile(); // faili isu
    }

    function loadFile(){
        if(!is_dir(VIEW_DIR)){
            echo 'Ei ole leitud '.VIEW_DIR.' kataloogi<br />';
            exit;
        }
        $file = $this->file; // abiasendus
        if(file_exists($file) and is_file($file) and is_readable($file)){
            $this->readFile($file);
        }

        $file = VIEW_DIR.$this->file; // abiasendus
        if(file_exists($file) and is_file($file) and is_readable($file)){
            $this->readFile($file);
        }

        $file = VIEW_DIR.$this->file.'.html'; // abiasendus
        if(file_exists($file) and is_file($file) and is_readable($file)){
            $this->readFile($file);
        }

        $file = VIEW_DIR.str_replace('.', '/', $this->file).'.html'; // abiasendus
        if(file_exists($file) and is_file($file) and is_readable($file)){
            $this->readFile($file);
        }

        if($this->content === false){
            echo 'Ei suutnud lugeda '.$this->file.' sisu <br />';
            exit;
        }
    }

    function readFile($file){

        $this->content = file_get_contents($file);
    }

    function set($name, $value){
        $this->vars[$name] = $value;
    }

    function add($name, $value){
        if(!isset($this->vars[$name])){
            $this->set($name, $value);
        } else {
            $this->vars[$name] = $this->vars[$name].$value;
        }
    }

    function parse(){
        $str = $this->content; // algv22rtus
        foreach ($this->vars as $name=>$value){
            $str = str_replace('{'.$name.'}', $value, $str);
        }
        return $str;
    }
}