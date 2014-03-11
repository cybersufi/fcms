<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?>test block<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>