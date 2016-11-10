<?php

class Stack
{
	function Stack()
	{
		$this->array = array();
	}
	function getSize()
	{
		return count($this->array);
	}
	function push($command)
	{
		$this->array[] = $command;
	}
	function pop()
	{
		return array_pop($this->array);
	}
}

?>