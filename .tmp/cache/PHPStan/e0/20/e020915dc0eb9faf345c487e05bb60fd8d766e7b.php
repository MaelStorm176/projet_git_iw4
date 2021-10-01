<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/app/Exceptions/Handler.php-1633089774',
   'data' => 
  array (
    '6ee8bb5ecca50682f51f346145895f62' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'App\\Exceptions',
         'uses' => 
        array (
          'exception' => 'Exception',
          'throwable' => 'Throwable',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
          'authorizationexception' => 'Illuminate\\Auth\\Access\\AuthorizationException',
          'modelnotfoundexception' => 'Illuminate\\Database\\Eloquent\\ModelNotFoundException',
          'exceptionhandler' => 'Laravel\\Lumen\\Exceptions\\Handler',
          'httpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpException',
        ),
         'className' => 'App\\Exceptions\\Handler',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '78dc16ea8f0a2b3e60d447cef032fcd2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \\Exception  $e
     * @return void
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'App\\Exceptions',
         'uses' => 
        array (
          'exception' => 'Exception',
          'throwable' => 'Throwable',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
          'authorizationexception' => 'Illuminate\\Auth\\Access\\AuthorizationException',
          'modelnotfoundexception' => 'Illuminate\\Database\\Eloquent\\ModelNotFoundException',
          'exceptionhandler' => 'Laravel\\Lumen\\Exceptions\\Handler',
          'httpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpException',
        ),
         'className' => 'App\\Exceptions\\Handler',
         'functionName' => 'report',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'c89fc55136ba289440e7839675521a1d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Render an exception into an HTTP response.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @param  \\Exception  $e
     * @return \\Illuminate\\Http\\Response
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'App\\Exceptions',
         'uses' => 
        array (
          'exception' => 'Exception',
          'throwable' => 'Throwable',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
          'authorizationexception' => 'Illuminate\\Auth\\Access\\AuthorizationException',
          'modelnotfoundexception' => 'Illuminate\\Database\\Eloquent\\ModelNotFoundException',
          'exceptionhandler' => 'Laravel\\Lumen\\Exceptions\\Handler',
          'httpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpException',
        ),
         'className' => 'App\\Exceptions\\Handler',
         'functionName' => 'render',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
  ),
));