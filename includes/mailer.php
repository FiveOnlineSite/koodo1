<?php

require_once __DIR__ . '/../lib/PHPMailer/src/Exception.php';
require_once __DIR__ . '/../lib/PHPMailer/src/PHPMailer.php';
require_once __DIR__ . '/../lib/PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception as PHPMailerException;

/**
 * Send a notification email to the site's configured recipients.
 *
 * @param string $subject
 * @param string $htmlBody
 * @param string $replyToEmail Sender's own email, used as Reply-To so replies go straight to them.
 * @param string $replyToName
 * @param array<int,array{path:string,name:string}> $attachments
 * @return bool
 */
function koodo_send_mail($subject, $htmlBody, $replyToEmail, $replyToName, $attachments = [])
{
    $config = require __DIR__ . '/smtp-config.php';

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = $config['host'];
        $mail->SMTPAuth = true;
        $mail->Username = $config['username'];
        $mail->Password = $config['password'];
        $mail->SMTPSecure = $config['secure'];
        $mail->Port = $config['port'];

        $mail->setFrom($config['from_email'], $config['from_name']);
        foreach ($config['recipients'] as $recipient) {
            $mail->addAddress($recipient);
        }
        if ($replyToEmail) {
            $mail->addReplyTo($replyToEmail, $replyToName ?: $replyToEmail);
        }

        foreach ($attachments as $attachment) {
            if (!empty($attachment['path']) && is_file($attachment['path'])) {
                $mail->addAttachment($attachment['path'], $attachment['name'] ?? '');
            }
        }

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $htmlBody;
        $mail->AltBody = strip_tags(str_replace(['<br>', '<br/>', '<br />'], "\n", $htmlBody));

        $mail->send();
        return true;
    } catch (PHPMailerException $e) {
        error_log('Koodo mail send failed: ' . $mail->ErrorInfo);
        return false;
    }
}

/**
 * Build a simple label/value HTML table for an email body.
 *
 * @param array<string,string> $fields
 */
function koodo_mail_table($fields)
{
    $rows = '';
    foreach ($fields as $label => $value) {
        $value = nl2br(htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8'));
        $label = htmlspecialchars((string) $label, ENT_QUOTES, 'UTF-8');
        $rows .= '<tr><td style="padding:6px 12px;font-weight:bold;vertical-align:top;white-space:nowrap;">' . $label . '</td><td style="padding:6px 12px;">' . $value . '</td></tr>';
    }
    return '<table cellpadding="0" cellspacing="0" style="font-family:Arial,sans-serif;font-size:14px;color:#111;">' . $rows . '</table>';
}
