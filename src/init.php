<?php

/**
 * @return \Faker\Generator
 */
function faker_rus() {
    return Faker\Factory::create('ru_RU');
}

\Larakit\Twig::register_function('faker_digit', function () {
    return faker_rus()->randomDigit;
});
\Larakit\Twig::register_function('faker_name', function () {
    return faker_rus()->name;
});
\Larakit\Twig::register_function('faker_address', function () {
    return faker_rus()->address;
});
\Larakit\Twig::register_function('faker_word', function () {
    return faker_rus()->word;
});
\Larakit\Twig::register_function('faker_sentence', function ($nbWords = 6, $variableNbWords = true) {
    return faker_rus()->sentence($nbWords, $variableNbWords);
});
\Larakit\Twig::register_function('faker_paragraph', function ($nbSentences = 3, $variableNbSentences = true) {
    return faker_rus()->paragraph($nbSentences, $variableNbSentences);
});
\Larakit\Twig::register_function('faker_text', function ($maxNbChars = 200) {
    return faker_rus()->text($maxNbChars);
});
\Larakit\Twig::register_function('faker_phone', function () {
    return faker_rus()->phoneNumber;
});
\Larakit\Twig::register_function('faker_company', function () {
    return faker_rus()->company;
});
\Larakit\Twig::register_function('faker_date', function ($start = '-30 years') {
    return faker_rus()->dateTimeBetween($start);
});
\Larakit\Twig::register_function('faker_email', function () {
    return faker_rus()->email;
});
\Larakit\Twig::register_function('faker_domain', function () {
    return faker_rus()->domainName;
});
\Larakit\Twig::register_function('faker_ip', function () {
    return faker_rus()->ipv4;
});
\Larakit\Twig::register_function('faker_user_agent', function () {
    return faker_rus()->userAgent;
});
