<?php
/****************************************************************/
/* ATalker													*/
/****************************************************************/
/* Copyright (c) 2002-2005 by Greg Gay 				        */
/* Adaptive Technology Resource Centre / University of Toronto  */
/* http://atutor.ca												*/
/*                                                              */
/* This program is free software. You can redistribute it and/or*/
/* modify it under the terms of the GNU General Public License  */
/* as published by the Free Software Foundation.				*/
/****************************************************************/
// $Id: reader_controls.php 5123 2005-07-12 14:59:03Z greg

// insert a require statement into a script to calling this file to display ATker controls


if($_GET['atalker_on'] == '1'){ 
	$_SESSION['atalker_on'] = '1';
// 	$feedback =  VOICE_ON;
// 	$msg->addFeedback($feedback);
	header("Location: ".$_SERVER['PHP_SELF']);

}else if($_GET['atalker_on'] == '2'){

	session_unregister('atalker_on');
// 	$feedback =  VOICE_OFF;
// 	$msg->addFeedback($feedback);
	header("Location: ".$_SERVER['PHP_SELF']);

}
echo '<div style="text-align:right;">';
if( $_SESSION['atalker_on'] == '1'){ 

	echo '<small>( '._AT('voice').'<strong>'._AT('on1').'</strong> / <a href="'.$_base_href.$_SERVER['PHP_SELF'].'?atalker_on=2">'._AT('off').'</a></small> ';

}else if(!$_SESSION['atalker_on']){

	echo '<small>( '._AT('voice').'<a href="'.$_base_href.$_SERVER['PHP_SELF'].'?atalker_on=1">'._AT('on1').'</a> / <strong>'._AT('off').'</strong></small>';

}

if($_GET['messages_on'] == '1'){ 
	$_SESSION['messages_on'] = '1';
// 	$feedback =  MESSAGE_ON;
// 	$msg->addFeedback($feedback);
	header("Location: ".$_SERVER['PHP_SELF']);


}else if($_GET['messages_on'] == '2'){

	session_unregister('messages_on');
// 	$feedback =  MESSAGE_OFF;
// 	$msg->addFeedback($feedback);
	header("Location: ".$_SERVER['PHP_SELF']);

}

if( $_SESSION['messages_on'] == '1'){ 
	require(AT_INCLUDE_PATH."../mods/atalker/message_reader.php");
	echo ' <small> -- '._AT('messages').'<strong>'._AT('on1').'</strong> / <a href="'.$_base_href.$_SERVER['PHP_SELF'].'?messages_on=2">'._AT('off').'</a> )</small> ';

}else if(!$_SESSION['messages_on']){

	echo ' <small>-- '._AT('messages').'<a href="'.$_base_href.$_SERVER['PHP_SELF'].'?messages_on=1">'._AT('on1').'</a> / <strong>'._AT('off').'</strong> )</small>';

}

echo '</div>';
?>