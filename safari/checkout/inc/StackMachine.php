<?php

include 'stack.php';

class StackMachine
{
	function StackMachine()
	{
		$this->stack = new Stack();
		
		$this->tag = '';
		$this->type = '';
		
		$this->newfunction = false;
		
		$this->constants = array();
		
		$this->variable = '';
		$this->member = '';
		$this->method = '';
		$this->function = '';
		
		$this->openBegin = 0;
	}
	function callIf($label)
	{
		$string = 'if ( ';
		$string .= $this->callMethod();
		while($this->stack->getSize() != 0)
			if($this->stack->getSize() == 1)
				$string .= ' "'.$this->stack->pop().'"';
			else
				$string .= ' '.$this->stack->pop();
		$string .= ' ) { //'.$label.'<br/>';
		return $string;
	}
	function callMethod()
	{
		$string = $this->method;
		$this->method = '';
		return $string;
	}
	function callStop()
	{
		return 'stop();<br/>';
	}
	function callURL()
	{
		return '<i style="color: red;">getURL( '.$this->variable.', "'.$this->stack->pop().'");<br/></i>';
	}
	function close()
	{
		$string = '';
		if($this->newfunction == true)
		{
			$this->newfunction = false;
			$string = '}<br/>';
		}
		$this->openBegin--;
		return $string;
	}
	function createFunction($name)
	{
		$string = 'function '.$name.'() {<br/>';
		
		$this->newfunction = true;
		$this->openBegin++;
		
		return $string;
	}
	function getMember()
	{
		$this->member = $this->stack->pop();
	}
	function getVariable()
	{
		$this->variable = $this->stack->pop();
	}
	function push($args) 
	{
		error_reporting('0');
		for($i = 0; $i < sizeof($args); $i++)
			if(substr_compare($args[$i], "c:", 0, 2) == 0)
				$this->stack->push($this->constants[$args[$i]]);
			else
				$this->stack->push($args[$i]);
	}
	function setFunction()
	{
		$this->function = $this->stack->pop()."(";
	
		$number_of_args = (int)$this->stack->pop();
	
		for($k=0;$k<$number_of_args;$k++)
			if($k == 0)
				$this->function = $this->function.'"'.$this->stack->pop().'"';
			else
				$this->function = $this->function.', "'.$this->stack->pop().'"';
	
		$this->function = $this->function.');';
	}
	function setMethod()
	{
		$method = $this->stack->pop();
	
		$this->method = $this->variable;
	
		if($this->member != '')
		$this->method = $this->method.'.'.$this->member;
	
		$this->method = $this->method.'.'.$method.'(';
	
		$number_of_args = (int)$this->stack->pop();
	
		for($k=0;$k<$number_of_args;$k++)
			if($k == 0)
				$this->method = $this->method.'"'.$this->stack->pop().'"';
			else
				$this->method = $this->method.', "'.$this->stack->pop().'"';
	
		$this->method = $this->method.');';
	
		$this->variable = '';
		$this->member = '';
	}
	
	function setConstants($constants)
	{
		$this->constants = array();
		for($new = 0; $new < sizeof($constants); $new++)
			$this->constants['c:'.$new] = $constants[$new];
	}
	function setTag($tag,$type='sprite')
	{
		$this->tag = $tag;
		$this->type = $type;
		
		$this->openBegin++;
	}
	function setVar()
	{
		$string = 'var '.$this->stack->pop().' = '.$this->function.'<br/>';
		$this->function = '';
		return $string;
	}
	function trigger($name,$type='frame')
	{
		$string = '</p><h4>Trigger by ';
		switch ($type)
		{
			case 'frame':
				$string .= 'EnterFrame frame #'.$name;
				break;
			case 'on':
				$string .= 'on('.$name.')';
				break;
		}
		$string .= ' on Tag #'.$this->tag.' ('.$this->type.')</h4><p>';
		return $string;
	}
}

?>