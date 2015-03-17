<?php

function parseContacts($filename)
{
    // $contacts = array();

    // todo - read file and parse contacts
    $filename = 'contacts.txt';
    $handle = fopen($filename, 'r');
    $contents = fread($handle, filesize($filename));
    $contentsArray = explode("\n", trim($contents));
    foreach ($contentsArray as $key => $content) {
    	$contactsArray = explode("|", $content);
    	$eachContactsArray [$key] ['name'] = $contactsArray[0];
    	
    	$eachContactsArray [$key] ['phone'] = $contactsArray[1];


}
    fclose($handle);
    
    return $eachContactsArray;
}

var_dump(parseContacts('contacts.txt'));
