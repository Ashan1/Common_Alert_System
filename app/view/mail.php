

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

$output = "";
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

if($emails) {
    $output = '';
    rsort($emails);

    foreach($emails as $email_number) {
        $overview = imap_fetch_overview($inbox,$email_number,0);
        $structure = imap_fetchstructure($inbox, $email_number);

        if(isset($structure->parts) && is_array($structure->parts) && isset($structure->parts[1])) {
            $part = $structure->parts[1];
            $message = imap_fetchbody($inbox,$email_number,2);

            if($part->encoding == 3) {
                $message = imap_base64($message);
            } else if($part->encoding == 1) {
                $message = imap_8bit($message);
            } else {
                $message = imap_qprint($message);
            }
        }

        $output.= '<div class="toggle'.($overview[0]->seen ? 'read' : 'unread').'">';
        $output.= '<span class="from">From: '.utf8_decode(imap_utf8($overview[0]->from)).'</span>';
        $output.= '<span class="date">on '.utf8_decode(imap_utf8($overview[0]->date)).'</span>';
        $output.= '<br /><span class="subject">Subject('.$part->encoding.'): '.utf8_decode(imap_utf8($overview[0]->subject)).'</span> ';
        $output.= '</div>';

        $output.= '<div class="body">'.$message.'</div><hr />';
    }

    echo $output;
}

imap_close($inbox);
?>
