<?php
    defined('_JEXEC') or die;

class modQouickContactHelper
{
    function sendMail($params)
    {
        $input= new JInput;
        $name =$input->get('name',null);
        $email =$input->get('email',null);
        $message =$input->get('message',null);
        if($name == null || $email == null || $message==null)
            return false;

        $message ="Name : ".$name." E-mail : ".$email."<br/>".$message;


        $mailer = & JFactory::getMailer();
        $mailer->setSender('durub@blabla.com');
        $mailer->addRecipient('durub@durub.db');
        $mailer->setSubject('Mail from Quick Contact Form');
        $mailer->setBody($message);
        $send=  & $mailer->Send();
        if($send != true)
        {
            echo "Error Sending Email:".$send->message;
            return false;
        }
        else
        {
            echo "Mail sent!";
            return true;
        }

    }

}
