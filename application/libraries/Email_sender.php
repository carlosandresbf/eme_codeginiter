<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class email_sender{
    
 public function send_email($ema_destino,$asunto, $mensaje, $adjunto=''){//
 	 $CI = & get_instance();
     $CI->load->library('MY_PHPMailer');

$out_put_[0]=true;
$out_put_[1]=true;

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = "a2plcpnl0208.prod.iad2.secureserver.net";
$mail->SMTPAuth = true;
$mail->Username = 'no_reply@lafinca.com.co';
$mail->Password =  'N0_r3p1y_L4_F1nc4*c0m*C0'; 
$mail->SMTPSecure = 'ssl';
$mail->Port = 465; 
//$mail->SMTPDebug = 2;
 
$mail->AddReplyTo('no_reply@lafinca.com.co') ;
$mail->From = 'no_reply@lafinca.com.co';
$mail->FromName = "EME Propiedad Raiz - No Responder";
$mail->Subject = $asunto;
$mail->Body = $mensaje;
$mail->AltBody = $mensaje;
$mail->MsgHTML($mensaje);
foreach($ema_destino as $destino){
$mail->AddAddress($destino['email'], $destino['nombre']);
								}

if(!empty($adjunto) & file_exists($adjunto)){
$mail->AddAttachment($adjunto); // attachment
}

$mail->IsHTML(true);
$correcto=$mail->Send();
$intentos=1; 
while ((!$correcto) && ($intentos < 2)) {
sleep(3);
$correcto = $mail->Send();
$intentos++;
}

if(!$correcto) {
 
 $out_put_[0]=false;
 $out_put_[1]="Mailer Error: " . $mail->ErrorInfo;;
//exit();
}
$mail->SmtpClose();
return $out_put_;
}



    }
 