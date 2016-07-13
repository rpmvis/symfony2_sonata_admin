<?php
// src/AppBundle/Validator/Constraints/ContainsAlphanumeric.php
namespace AppBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraints\Email;

/**
 * @Annotation
 */
class CustomEmail extends Email{
    public $message = "{{ property }} {{ value }} is not a valid email.";

}