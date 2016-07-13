<?php
    // src/AppBundle/Validator/Constraints/ContainsAlphanumericValidator.php
    namespace AppBundle\Validator\Constraints;

    use Symfony\Component\Validator\Constraint;
    use Symfony\Component\Validator\ConstraintValidator;

    class ContainsAlphanumericValidator extends ConstraintValidator
    {
        public function validate($value, Constraint $constraint)
        {
            if (!empty($value)){
                if (!preg_match('/^[a-zA-Z0-9]+$/', $value, $matches)) {
                    $this->context->addViolation($constraint->message, array(
                        '{{ value }}' => $this->formatValue($value)));
                }
            }
        }
    }
?>