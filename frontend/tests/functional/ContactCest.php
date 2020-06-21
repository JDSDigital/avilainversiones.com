<?php
namespace frontend\tests\functional;

use frontend\tests\FunctionalTester;

/* @var $scenario \Codeception\Scenario */

class ContactCest
{
    public function _before(FunctionalTester $I)
    {
        $I->amOnPage(['site/contact']);
    }

    public function checkContact(FunctionalTester $I)
    {
        $I->see('Contacto', 'h2');
    }

    public function checkContactSubmitNoData(FunctionalTester $I)
    {
        $I->submitForm('#contact-form', []);
        $I->see('Contacto', 'h2');
        $I->see('Nombre no puede estar vacío.', '.invalid-feedback');
        $I->see('Correo no puede estar vacío.', '.invalid-feedback');
        $I->see('Asunto no puede estar vacío.', '.invalid-feedback');
        $I->see('Mensaje no puede estar vacío.', '.invalid-feedback');
        // $I->seeValidationError('The verification code is incorrect');
    }

    public function checkContactSubmitNotCorrectEmail(FunctionalTester $I)
    {
        $I->submitForm('#contact-form', [
            'ContactForm[name]' => 'tester',
            'ContactForm[email]' => 'tester.email',
            'ContactForm[subject]' => 'test subject',
            'ContactForm[body]' => 'test content',
            'ContactForm[verifyCode]' => 'testme',
        ]);
        $I->see('Correo no es una dirección de correo válida.', '.invalid-feedback');
        $I->dontSee('Nombre no puede estar vacío.', '.invalid-feedback');
        $I->dontSee('Asunto no puede estar vacío.', '.invalid-feedback');
        $I->dontSee('Mensaje no puede estar vacío.', '.invalid-feedback');
        // $I->dontSeeValidationError('The verification code is incorrect');
    }

    public function checkContactSubmitCorrectData(FunctionalTester $I)
    {
        $I->submitForm('#contact-form', [
            'ContactForm[name]' => 'tester',
            'ContactForm[email]' => 'tester@example.com',
            'ContactForm[subject]' => 'test subject',
            'ContactForm[body]' => 'test content',
            'ContactForm[verifyCode]' => 'testme',
        ]);
        $I->seeEmailIsSent();
        $I->see('Thank you for contacting us. We will respond to you as soon as possible.');
    }
}
