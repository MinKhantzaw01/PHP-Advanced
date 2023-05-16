<?php
namespace App\Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Mail
{
    private $mail;

    public function __construct()
    {
        $this->mail=new PHPMailer();
        $this->setUp();
    }

    public function setUp()
    {
        if(getenv("APP_LOCAL")=="local")
        {
        $this->mail->SMTPDebug=2;
        }
        $this->mail->isSMTP();
        $this->mail->Host=getenv("SMTP_HOST");
        $this->mail->SMTPAuth=true;
        $this->mail->Username=getenv("EMAIL_USERNAME");
        $this->mail->Password=getenv("EMAIL_PASSWORD");
        $this->mail->Port=getenv("SMTP_PORT");

        $this->mail->isHTML(true);
        $this->mail->SingleTo=true;

        $this->mail->From=getenv("ADMIN_EMAIL");
        $this->mail->FromName="Min Khant";

    }

    public function send()
    {
        $body="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde dolorum autem atque, officiis in eligendi qui aperiam possimus necessitatibus blanditiis molestiae illo sit? Nemo sunt, voluptatum officiis repellendus id explicabo?";

        $this->mail->addAddress("minmin1.mm347@gmail.com","min min");
        $this->mail->Subject= "New Mail Testing For E-commerce Project";
        $this->mail->Body=$body;
        
        return $this->mail->send();

    }
}

?>
