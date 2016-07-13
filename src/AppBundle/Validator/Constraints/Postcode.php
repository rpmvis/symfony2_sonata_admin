<?php
// src/AppBundle/Validator/Constraints/ContainsAlphanumeric.php
namespace AppBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class Postcode extends Constraint
{
    public $message = 'String {{ value }} is not a valid postcode.';
}