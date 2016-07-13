<?php
    // src/AppBundle/Validator/Constraints/ContainsAlphanumericValidator.php
    namespace AppBundle\Validator\Constraints;

    use Symfony\Component\Validator\Constraint;
    use Symfony\Component\Validator\Constraints\EmailValidator;
    use Symfony\Component\Validator\Exception\UnexpectedTypeException;
    use Symfony\Component\Validator\ConstraintValidator;


    class CustomEmailValidator extends EmailValidator
    {
        public function validate($value, Constraint $constraint)
        {
            if (null === $value || '' === $value) {
                return;
            }

            if (!is_scalar($value) && !(is_object($value) && method_exists($value, '__toString'))) {
                throw new UnexpectedTypeException($value, 'string');
            }

            $value = (string) $value;
            $valid = filter_var($value, FILTER_VALIDATE_EMAIL);

//            if ($valid) {
//                to customize: use regex to validate email address
//                $valid = preg_match('/^[a-zA-Z0-9]+$/', $value, $matches)
//            }
            if (!$valid) {
//                $vis = $this->context->getViolations();
//                if (count($vis) > 0) {
//                    $vi = $vis->get($vis->count()-1);
//                    echo $vi->getMessage();
//                }
                $this->context->addViolation($constraint->message, array(
                    '{{ property }}' => $this->context->getPropertyName(),
                    '{{ value }}' => $this->formatValue($value)));
            }
        }
    }
?>