<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');
$I->amOnPage('/');
$I->maximizeWindow();
$I->click(['link' => 'Да, я тут']);
$I->amOnPage('goods/id230912');
$I->wait(2);
$I->see('С этим товаром покупают');
$I->click(['xpath' => '//div[2]/div/div[2]/div/div/a[2]']);
$I->see('В корзине', ['xpath' => '//div[2]/div/div']);
$itemalso = $I->grabTextFrom('//div[2]/div/div[2]/div/div/a');
$I->click(['css' => 'a.header-basket.header--cart.is-active.animated']);
$I->wait(2);
$I->see($itemalso, '//div[@id=\'cart\']/div/div/div/div[2]/a');
$I->wait(2);
$I->click(['css' => 'a.sec-cart__table-clean.btn.grey.showPopup']);
$I->click(['css' => 'a.btn.yellow.left.popups__close']);
$I->wait(2);
$I->see('Ваша корзина пуста');
$I->wait(2);