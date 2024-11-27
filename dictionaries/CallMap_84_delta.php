<?php // phpcs:ignoreFile
/**
 * This contains the information needed to convert the function signatures for php 8.4 to php 8.3 (and vice versa)
 *
 * This file has three sections.
 * The 'added' section contains function/method names from FunctionSignatureMap (And alternates, if applicable) that do not exist in php 8.3
 * The 'removed' section contains the signatures that were removed in php 8.4
 * The 'changed' section contains functions for which the signature has changed for php 8.4.
 *     Each function in the 'changed' section has an 'old' and a 'new' section,
 *     representing the function as it was in PHP 8.3 and in PHP 8.4, respectively
 *
 * @see CallMap.php
 * @see https://php.watch/versions/8.4
 *
 * @phan-file-suppress PhanPluginMixedKeyNoKey (read by Phan when analyzing this file)
 */
return [
  'added' => [
    
  ],
  'changed' => [
    'domdocument::registernodeclass' => [
      'old' => ['bool', 'baseClass'=>'string', 'extendedClass'=>'?string'],
      'new' => ['true', 'baseClass'=>'string', 'extendedClass'=>'?string'],
    ],
    'phardata::delmetadata' => [
      'old' => ['bool'],
      'new' => ['true'],
    ],
    'user_error' => [
      'old' => ['bool', 'message'=>'string', 'error_level='=>'int'],
      'new' => ['true', 'message'=>'string', 'error_level='=>'int'],
    ],
  ],
  'removed' => [
    
  ]
];
