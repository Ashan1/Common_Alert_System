<?php
set_time_limit(4000);

// Connect to gmail
$imapPath = '{imap.gmail.com:993/imap/ssl}INBOX';
$username = 'commonalertsystem@gmail.com';
$password = 'password123$%^789';

// try to connect
$inbox = imap_open($imapPath,$username,$password) or die('Cannot connect to Gmail: ' . imap_last_error());

/* ALL - return all messages matching the rest of the criteria
 ANSWERED - match messages with the \\ANSWERED flag set
 BCC "string" - match messages with "string" in the Bcc: field
 BEFORE "date" - match messages with Date: before "date"
 BODY "string" - match messages with "string" in the body of the message
 CC "string" - match messages with "string" in the Cc: field
 DELETED - match deleted messages
 FLAGGED - match messages with the \\FLAGGED (sometimes referred to as Important or Urgent) flag set
 FROM "string" - match messages with "string" in the From: field
 KEYWORD "string" - match messages with "string" as a keyword
 NEW - match new messages
 OLD - match old messages
 ON "date" - match messages with Date: matching "date"
 RECENT - match messages with the \\RECENT flag set
 SEEN - match messages that have been read (the \\SEEN flag is set)
 SINCE "date" - match messages with Date: after "date"
 SUBJECT "string" - match messages with "string" in the Subject:
 TEXT "string" - match messages with text "string"
 TO "string" - match messages with "string" in the To:
 UNANSWERED - match messages that have not been answered
 UNDELETED - match messages that are not deleted
 UNFLAGGED - match messages that are not flagged
 UNKEYWORD "string" - match messages that do not have the keyword "string"
 UNSEEN - match messages which have not been read yet*/

// search and get unseen emails, function will return email ids

echo  "<div class='noti success'>You have ".imap_num_msg($inbox). " messages in your inbox</div></br>\n\r";

$emails = imap_search($inbox,'ALL');

$output = '';
/*$tot=imap_num_msg($inbox);
for($i=$tot;$i>0;$i--) {

    $header = imap_header($inbox,$i);
    echo "<br>";
    echo $header->Subject." (".$header->Date.")";
    $body = imap_fetchbody($inbox, $i,'1');
    $emailStructure = imap_fetchstructure($inbox,$i);
    if($emailStructure->encoding == 3) {
        $body = imap_base64($body);
    } else if($emailStructure->encoding == 4) {
        $body = imap_qprint($body);
    }


    echo "<div class='faq-tile'>$body</div>";
}*/

foreach($emails as $mail) {
    $headerInfo = imap_headerinfo($inbox,$mail);
    $output .= $headerInfo->subject.'<br/>';
    $output .= $headerInfo->toaddress.'<br/>';
    $output .= $headerInfo->date.'<br/>';
    $output .= $headerInfo->fromaddress.'<br/>';
    //$output .= $headerInfo->reply_toaddress.'<br/>';
    $emailStructure = imap_fetchstructure($inbox,$mail);
    if(!isset($emailStructure->parts)) {
        $output .= imap_fetchbody($inbox, $mail, FT_PEEK).'<br/>';
    } else {
        //
    }
    //echo $output;
    echo $output;
    echo '<br/>';
    $output = '';
}

// close the connection
imap_expunge($inbox);
imap_close($inbox);
