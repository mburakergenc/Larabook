<?php 
$I = new FunctionalTester($scenario);
$I -> am('a guest');
$I->wantTo('sign up for a LaraBook account');

$I-> amOnPage('/');
$I-> click('Sign Up!');
$I-> seeCurrentUrlEquals('/register');

$I-> fillField('username', 'JohnDoe');
$I-> fillField('email', 'john@example.com');
$I-> fillField('password', 'demo');
$I-> fillField('password_confirmation', 'demo');

$I-> click('Sign Up');

$I-> seeCurrentUrlEquals('');
$I->see('Welcome to Larabook');









