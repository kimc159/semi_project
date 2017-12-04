<? header('Content-Type: text/html; charset=UTF-8'); ?>
<?
    /** 공통 함수 인클루드 */
    include_once('inc/helper.php');

    /** 파라미터 받기 */
    $sender = post('sender', false);
    $sender_name = post('sender_name', false);
    $receiver = post('receiver', false);
    $receiver_name = post('receiver_name', false);
    $subject = post('subject', false);
    $content = post('content', false);

    /** 파라미터 값의 입력 여부 검사 */
    if (!$sender)   { redirect(false, '보내는 사람의 메일 주소를 입력하세요.');   }
    if (!$receiver) { redirect(false, '받는 사람의 메일 주소를 입력하세요.');    }
    if (!$subject)  { redirect(false, '메일 제목을 입력하세요.');   }
    if (!$content)  { redirect(false, '메일 내용을 입력하세요.');   }

    /** 메일보내기 */
    $is_mail_send_ok = send_mail($sender, $sender_name, $receiver, $receiver_name,$subject, $content);

    if (!$is_mail_send_ok)  {   redirect(FALSE, "메일발송에 실패했습니다."); }
    else                    {   redirect("mail_write.php", "메일이 발송되었습니다."); }
?>
