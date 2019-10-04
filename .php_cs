<?php

return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules(array(
        '@Symfony' => true,
        '@PHP70Migration' => true,
        '@PHP71Migration' => true,
        '@Symfony:risky' => true,
        'array_syntax' => array('syntax' => 'short'),
        'blank_line_after_opening_tag' => true,
        'concat_space' => false,
        'linebreak_after_opening_tag' => true,
        'no_extra_consecutive_blank_lines' => false,
        'no_multiline_whitespace_before_semicolons' => true,
        'no_mixed_echo_print' => array('use' => 'print'),
        'ordered_imports' => true,
        'phpdoc_align' => false,
        'phpdoc_summary' => false,
        'simplified_null_return' => false,
        'self_accessor' => false,
        'declare_strict_types' => true,
        'ordered_class_elements' => true,
    ))
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in('src/')
    )
    ;
