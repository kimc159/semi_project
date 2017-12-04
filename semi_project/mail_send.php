<? header('Content-Type: text/html; charset=UTF-8'); ?>
<?
    /** 공통 함수 및 PHPMailer 인클루드 */
    include_once('inc/helper.php');
    include_once('inc/PHPMailer/PHPMailerAutoload.php');

    /** 파라미터 받기 */
    $sender = post('sender', false);
    $sender_name = post('sender_name', false);
    $receiver = post('receiver', false);
    $receiver_name = post('receiver_name', false);
    $subject = post('subject', false);
    $content = post('content', false);

    /** 파라미터 값의 입력 여부 검사 */
    // 보내는 사람과 받는 사람의 이름은 미필수 항목으로 처리함
    if (!$sender) {
        redirect(false, '보내는 사람의 메일 주소를 입력하세요.');
    }

    if (!$receiver) {
        redirect(false, '받는 사람의 메일 주소를 입력하세요.');
    }

    if (!$subject) {
        redirect(false, '메일 제목을 입력하세요.');
    }

    if (!$content) {
        redirect(false, '메일 내용을 입력하세요.');
    }

    /** 메일 발송 기능 초기화 */
    $mail = new PHPMailer();
    //$mail->SMTPDebug = 3;
    $mail->CharSet = "utf-8";
    $mail->Encoding = "base64";
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = '';
    $mail->Password = '';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->isHTML(true);

    /** 보내는 사람 정보 설정 */
    $mail->From = $sender;
    $mail->FromName = $sender_name;

    /** 받는 사람 정보 설정 */
    $mail->addAddress($receiver, $receiver_name);

    /** 제목과 내용 */
    $mail->Subject = $subject;
    $mail->Body = $content;

    /** 발송 및 발송 결과 처리 */
    $is_mail_send_ok = $mail->send();

    if (!$is_mail_send_ok) {
        echo '메일 발송에 실패했습니다.<br />';
        echo 'Mailer Error: '.$mail->ErrorInfo;
    } else {
        echo '메일이 발송되었습니다.';
    }
?>
