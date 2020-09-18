<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $subject;
    public $body;
    public $verifyCode;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'subject', 'body'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Nombre',
            'email' => 'Correo',
            'subject' => 'Asunto',
            'body' => 'Mensaje',
            'verifyCode' => 'Código de verificación',
        ];
    }

    public function init()
    {
        parent::init();

        if (Yii::$app->request->get()) {
            // TODO
            switch (Yii::$app->request->get('id')) {
                case 1:
                    $this->subject = 'Deseo arrendar mi propiedad';
                    break;
                case 2:
                    $this->subject = 'Gestionamos tu crédito hipotecario';
                    break;
                case 3:
                    $this->subject = 'Departamento legal online';
                    break;
                case 4:
                    $this->subject = 'Administración de propiedades';
                    break;
                case 5:
                    $this->subject = 'Estoy interesado en una consulta gratuita';
                    $this->body = 'Escribe tus datos de contacto aquí';
                    break;
                default:
                    break;
            }
        }
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param string $email the target email address
     * @return bool whether the email was sent
     */
    public function sendEmail($email)
    {
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
            ->setReplyTo([$this->email => $this->name])
            ->setSubject($this->subject)
            ->setTextBody($this->body)
            ->send();
    }
}
