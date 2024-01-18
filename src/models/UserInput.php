<?php
class UserInput
{
    // Validate login input
    // input: @param string $user_email
    // input: @param string $user_pwd
    // output: @return array
    public static function validateLoginInput($user_email, $user_pwd)
    {
        $validatedEmail = self::validateEmail($user_email);
        $validatedPassword = self::validatePassword($user_pwd);

        return [
            'user_email' => $validatedEmail,
            'user_pwd' => $validatedPassword,
        ];
    }

    // Validate registration input
    // input: @param string $user_firstname
    // input: @param string $user_lastname
    // input: @param string $user_job
    // input: @param string $user_email
    // input: @param string $user_birth_date
    // input: @param string $user_pwd
    // output: @return array
    public static function validateRegistrationInput($user_firstname, $user_lastname, $user_job, $user_email, $user_birth_date, $user_pwd)
    {
        $validatedFirstname = self::validateStringLength($user_firstname, 50);
        $validatedLastname = self::validateStringLength($user_lastname, 50);
        $validatedJob = self::validateStringLength($user_job, 60);
        $validatedEmail = self::validateEmail($user_email);
        $validatedBirthDate = self::validateDate($user_birth_date);
        $validatedPassword = self::validatePassword($user_pwd);

        return [
            'user_firstname' => $validatedFirstname,
            'user_lastname' => $validatedLastname,
            'user_job' => $validatedJob,
            'user_email' => $validatedEmail,
            'user_birth_date' => $validatedBirthDate,
            'user_pwd' => $validatedPassword,
        ];
    }

    // Validate email
    // input: @param string $email
    // output: @return array
    private static function validateEmail($email)
    {
        // Validate email using filter_var
        $validatedEmail = filter_var($email, FILTER_VALIDATE_EMAIL);

        if (!$validatedEmail) {
            throw new InvalidArgumentException('Invalid email address');
        }

        return $validatedEmail;
    }

    // Validate password
    // input: @param string $password
    // output: @return array
    private static function validatePassword($password)
    {
        // Validate password using string manipulation and criteria
        // Adjust the password validation criteria as needed
        $length = strlen($password);
        if ($length < 8 || $length > 60 || !preg_match('/[a-z]/', $password) || !preg_match('/[A-Z]/', $password) || !preg_match('/[0-9]/', $password) || !preg_match('/[^a-zA-Z0-9]/', $password)) {
            throw new InvalidArgumentException('Invalid password');
        }

        return $password;
    }

    // Validate string length
    // input: @param string $value
    // input: @param int $maxLength
    // output: @return array
    private static function validateStringLength($value, $maxLength)
    {
        // Validate string length
        $length = strlen($value);

        if ($length > $maxLength) {
            throw new InvalidArgumentException('String exceeds maximum length');
        }

        return $value;
    }

    // Validate date
    // input: @param string $date
    // output: @return array
    private static function validateDate($date)
    {
        // Validate date format and components
        $dateComponents = explode('-', $date);

        if (count($dateComponents) !== 3) {
            throw new InvalidArgumentException('Invalid date format');
        }

        list($dd, $mm, $yyyy) = $dateComponents;

        $dd = str_pad($dd, 2, '0', STR_PAD_LEFT);
        $mm = str_pad($mm, 2, '0', STR_PAD_LEFT);

        $currentYear = date('Y');
        $isLeapYear = date('L', strtotime($date));

        // Check year
        if ($yyyy > $currentYear || $yyyy < 0) {
            throw new InvalidArgumentException('Invalid year');
        }

        // Check month
        if ($mm > 12 || $mm < 1) {
            throw new InvalidArgumentException('Invalid month');
        }

        // Check day
        $daysInMonth = [
            1 => 31, 2 => ($isLeapYear ? 29 : 28), 3 => 31, 4 => 30, 5 => 31, 6 => 30,
            7 => 31, 8 => 31, 9 => 30, 10 => 31, 11 => 30, 12 => 31,
        ];

        if ($dd < 1 || $dd > $daysInMonth[$mm]) {
            throw new InvalidArgumentException('Invalid day');
        }

        return "$yyyy-$mm-$dd";
    }
}
