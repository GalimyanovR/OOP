<?php
class LeftParagraph {
    private $width;
    private $current_line;
    private $current_length;
    
    public function __construct($width) {
        $this->width = $width;
        $this->current_line = array();
        $this->current_length = 0;
    }
    
    public function add_word($word) {
        $space_needed = $this->current_length > 0 ? 1 : 0;
        if ($this->current_length + strlen($word) + $space_needed <= $this->width) {
            if ($this->current_length > 0) {
                $this->current_line[] = ' ';
                $this->current_length += 1;
            }
            $this->current_line[] = $word;
            $this->current_length += strlen($word);
        } else {
            $this->end();
            $this->current_line = array($word);
            $this->current_length = strlen($word);
        }
    }
    
    public function end() {
        if (!empty($this->current_line)) {
            echo implode('', $this->current_line) . "\n";
            $this->current_line = array();
            $this->current_length = 0;
        }
    }
}

class RightParagraph {
    private $width;
    private $current_line;
    private $current_length;
    
    public function __construct($width) {
        $this->width = $width;
        $this->current_line = array();
        $this->current_length = 0;
    }
    
    public function add_word($word) {
        $space_needed = $this->current_length > 0 ? 1 : 0;
        if ($this->current_length + strlen($word) + $space_needed <= $this->width) {
            if ($this->current_length > 0) {
                $this->current_line[] = ' ';
                $this->current_length += 1;
            }
            $this->current_line[] = $word;
            $this->current_length += strlen($word);
        } else {
            $this->end();
            $this->current_line = array($word);
            $this->current_length = strlen($word);
        }
    }
    
    public function end() {
        if (!empty($this->current_line)) {
            $line = implode('', $this->current_line);
            $spaces = str_repeat(' ', $this->width - strlen($line));
            echo $spaces . $line . "\n";
            $this->current_line = array();
            $this->current_length = 0;
        }
    }
}

$lp = new LeftParagraph(8);
$lp->add_word('abc');
$lp->add_word('defg');
$lp->add_word('hi');
$lp->add_word('jklmnopq');
$lp->add_word('r');
$lp->add_word('stuv');
$lp->end();
echo "\n";

$rp = new RightParagraph(8);
$rp->add_word('abc');
$rp->add_word('defg');
$rp->add_word('hi');
$rp->add_word('jklmnopq');
$rp->add_word('r');
$rp->add_word('stuv');
$rp->end();
?>