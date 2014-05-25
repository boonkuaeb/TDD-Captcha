<?php
class Range
{
    private $input;

    public function __construct($input)
    {
        $this->input = $input;
    }

    public function getResult()
    {
        $output = '';
        for ($i=$this->getLeftStart();$i<=$this->getRightStart();$i++)
        {
            $output = $output.$i.',';
        }

        if(strlen($output) ==0)
        {
            $output = ',';
        }

        return  '{'.substr($output, 0, -1).'}';
    }

    public function getLeftStart()
    {
        $str_left_operator = substr($this->input, 0, 1);
        $output = substr($this->input, 1, 1);

        if($str_left_operator == '(')
        {
            $output = $output +1;
        }
        return $output;
    }

    public function getRightStart()
    {
        $str_right_operator = substr($this->input, -1);
        $output = substr($this->input, -2, 1);

        if($str_right_operator == ')')
        {
            $output = $output -1;
        }
        return $output;
    }


}