<?php

namespace frontend\tests\functional;

use frontend\tests\FunctionalTester;

class HomeCest
{
    public function checkOpen(FunctionalTester $I)
    {
        $I->amOnPage(\Yii::$app->homeUrl);
        $I->see('¿Deseas invertir en bienes raíces?', 'h2');

        $I->seeLink('Asesorías');
        $I->click('Asesorías');
        $I->see('¿Deseas saber que tipo de asesoría necesitas?', 'p');

        $I->seeLink('Cursos');
        $I->click('Cursos');
        $I->see('El conocimiento es tu mejor inversión.', 'p');

        $I->seeLink('Eventos');
        $I->click('Eventos');
        $I->see('There is not time to go slow.', 'p');

        $I->seeLink('Propiedades');
        $I->click('Propiedades');
        $I->see('Buscar Propiedades', 'h3');

        $I->seeLink('Empresa');
        $I->click('Empresa');
        $I->see('Empresa', 'h2');

        $I->seeLink('Contacto');
        $I->click('Contacto');
        $I->see('Contacto', 'h2');
        
        $I->seeLink('Blog');
        $I->click('Blog');
        $I->see('Blog', 'h2');
    }
}
