<?php

function flash($message, $level)
{
   session()->flash('flash_message', $message);
   session()->flash('level', $level);
}
