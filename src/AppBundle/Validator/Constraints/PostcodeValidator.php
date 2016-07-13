<?php
    // src/AppBundle/Validator/Constraints/ContainsAlphanumericValidator.php
    namespace AppBundle\Validator\Constraints;

    use Symfony\Component\Validator\Constraint;
    use Symfony\Component\Validator\ConstraintValidator;

    class PostcodeValidator extends ConstraintValidator
    {
        public function validate($value, Constraint $constraint)
        {
            if (!empty($value)){
                if (!preg_match('/^[1-9]{1}[0-9]{3}[\s]{0,1}[a-z]{2}$/i', $value, $matches)) {
                    // $constraint->message = str_replace()
                    $this->context->addViolation($constraint->message, array(
                        '{{ value }}' => $this->formatValue($value)));
                }
            }
        }
    }
?>