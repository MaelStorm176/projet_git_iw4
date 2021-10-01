<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/vendor/laravel/lumen-framework/src/Exceptions/Handler.php-1630686510',
   'data' => 
  array (
    'e5574e96759d6dbdc9bc1587b3c7202e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Laravel\\Lumen\\Exceptions',
         'uses' => 
        array (
          'exception' => 'Exception',
          'authorizationexception' => 'Illuminate\\Auth\\Access\\AuthorizationException',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'modelnotfoundexception' => 'Illuminate\\Database\\Eloquent\\ModelNotFoundException',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'response' => 'Illuminate\\Http\\Response',
          'arr' => 'Illuminate\\Support\\Arr',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'consoleapplication' => 'Symfony\\Component\\Console\\Application',
          'htmlerrorrenderer' => 'Symfony\\Component\\ErrorHandler\\ErrorRenderer\\HtmlErrorRenderer',
          'httpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
          'throwable' => 'Throwable',
        ),
         'className' => 'Laravel\\Lumen\\Exceptions\\Handler',
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
    '0c4496613dad40db9098b3ce7a4def22' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Report or log an exception.
     *
     * @param  \\Throwable  $e
     * @return void
     *
     * @throws \\Exception
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Laravel\\Lumen\\Exceptions',
         'uses' => 
        array (
          'exception' => 'Exception',
          'authorizationexception' => 'Illuminate\\Auth\\Access\\AuthorizationException',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'modelnotfoundexception' => 'Illuminate\\Database\\Eloquent\\ModelNotFoundException',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'response' => 'Illuminate\\Http\\Response',
          'arr' => 'Illuminate\\Support\\Arr',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'consoleapplication' => 'Symfony\\Component\\Console\\Application',
          'htmlerrorrenderer' => 'Symfony\\Component\\ErrorHandler\\ErrorRenderer\\HtmlErrorRenderer',
          'httpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
          'throwable' => 'Throwable',
        ),
         'className' => 'Laravel\\Lumen\\Exceptions\\Handler',
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
    '4e69fe535772c6a7a4a6a828b484d86e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Determine if the exception should be reported.
     *
     * @param  \\Throwable  $e
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Laravel\\Lumen\\Exceptions',
         'uses' => 
        array (
          'exception' => 'Exception',
          'authorizationexception' => 'Illuminate\\Auth\\Access\\AuthorizationException',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'modelnotfoundexception' => 'Illuminate\\Database\\Eloquent\\ModelNotFoundException',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'response' => 'Illuminate\\Http\\Response',
          'arr' => 'Illuminate\\Support\\Arr',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'consoleapplication' => 'Symfony\\Component\\Console\\Application',
          'htmlerrorrenderer' => 'Symfony\\Component\\ErrorHandler\\ErrorRenderer\\HtmlErrorRenderer',
          'httpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
          'throwable' => 'Throwable',
        ),
         'className' => 'Laravel\\Lumen\\Exceptions\\Handler',
         'functionName' => 'shouldReport',
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
    '7566cc6c559a4abea8dc740a4eec9c6e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Determine if the exception is in the "do not report" list.
     *
     * @param  \\Throwable  $e
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Laravel\\Lumen\\Exceptions',
         'uses' => 
        array (
          'exception' => 'Exception',
          'authorizationexception' => 'Illuminate\\Auth\\Access\\AuthorizationException',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'modelnotfoundexception' => 'Illuminate\\Database\\Eloquent\\ModelNotFoundException',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'response' => 'Illuminate\\Http\\Response',
          'arr' => 'Illuminate\\Support\\Arr',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'consoleapplication' => 'Symfony\\Component\\Console\\Application',
          'htmlerrorrenderer' => 'Symfony\\Component\\ErrorHandler\\ErrorRenderer\\HtmlErrorRenderer',
          'httpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
          'throwable' => 'Throwable',
        ),
         'className' => 'Laravel\\Lumen\\Exceptions\\Handler',
         'functionName' => 'shouldntReport',
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
    'b5cbb1a6f719ca0ed1cd0a48659d9893' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Render an exception into an HTTP response.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @param  \\Throwable  $e
     * @return \\Symfony\\Component\\HttpFoundation\\Response
     *
     * @throws \\Throwable
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Laravel\\Lumen\\Exceptions',
         'uses' => 
        array (
          'exception' => 'Exception',
          'authorizationexception' => 'Illuminate\\Auth\\Access\\AuthorizationException',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'modelnotfoundexception' => 'Illuminate\\Database\\Eloquent\\ModelNotFoundException',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'response' => 'Illuminate\\Http\\Response',
          'arr' => 'Illuminate\\Support\\Arr',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'consoleapplication' => 'Symfony\\Component\\Console\\Application',
          'htmlerrorrenderer' => 'Symfony\\Component\\ErrorHandler\\ErrorRenderer\\HtmlErrorRenderer',
          'httpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
          'throwable' => 'Throwable',
        ),
         'className' => 'Laravel\\Lumen\\Exceptions\\Handler',
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
    '208ddda7886ab229696f30c24c68290d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Prepare a JSON response for the given exception.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @param  \\Throwable  $e
     * @return \\Illuminate\\Http\\JsonResponse
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Laravel\\Lumen\\Exceptions',
         'uses' => 
        array (
          'exception' => 'Exception',
          'authorizationexception' => 'Illuminate\\Auth\\Access\\AuthorizationException',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'modelnotfoundexception' => 'Illuminate\\Database\\Eloquent\\ModelNotFoundException',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'response' => 'Illuminate\\Http\\Response',
          'arr' => 'Illuminate\\Support\\Arr',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'consoleapplication' => 'Symfony\\Component\\Console\\Application',
          'htmlerrorrenderer' => 'Symfony\\Component\\ErrorHandler\\ErrorRenderer\\HtmlErrorRenderer',
          'httpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
          'throwable' => 'Throwable',
        ),
         'className' => 'Laravel\\Lumen\\Exceptions\\Handler',
         'functionName' => 'prepareJsonResponse',
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
    '6048c2f311f657238da51cbb4d5dc942' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Convert the given exception to an array.
     *
     * @param  \\Throwable  $e
     * @return array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Laravel\\Lumen\\Exceptions',
         'uses' => 
        array (
          'exception' => 'Exception',
          'authorizationexception' => 'Illuminate\\Auth\\Access\\AuthorizationException',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'modelnotfoundexception' => 'Illuminate\\Database\\Eloquent\\ModelNotFoundException',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'response' => 'Illuminate\\Http\\Response',
          'arr' => 'Illuminate\\Support\\Arr',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'consoleapplication' => 'Symfony\\Component\\Console\\Application',
          'htmlerrorrenderer' => 'Symfony\\Component\\ErrorHandler\\ErrorRenderer\\HtmlErrorRenderer',
          'httpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
          'throwable' => 'Throwable',
        ),
         'className' => 'Laravel\\Lumen\\Exceptions\\Handler',
         'functionName' => 'convertExceptionToArray',
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
    '29913c250b701234255ab78df1563404' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Prepare a response for the given exception.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @param  \\Throwable  $e
     * @return \\Illuminate\\Http\\Response
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Laravel\\Lumen\\Exceptions',
         'uses' => 
        array (
          'exception' => 'Exception',
          'authorizationexception' => 'Illuminate\\Auth\\Access\\AuthorizationException',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'modelnotfoundexception' => 'Illuminate\\Database\\Eloquent\\ModelNotFoundException',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'response' => 'Illuminate\\Http\\Response',
          'arr' => 'Illuminate\\Support\\Arr',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'consoleapplication' => 'Symfony\\Component\\Console\\Application',
          'htmlerrorrenderer' => 'Symfony\\Component\\ErrorHandler\\ErrorRenderer\\HtmlErrorRenderer',
          'httpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
          'throwable' => 'Throwable',
        ),
         'className' => 'Laravel\\Lumen\\Exceptions\\Handler',
         'functionName' => 'prepareResponse',
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
    '9101838e3fa7d89447e8fea08c3cc29e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Render an exception to a string using Symfony.
     *
     * @param  \\Throwable  $e
     * @param  bool  $debug
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Laravel\\Lumen\\Exceptions',
         'uses' => 
        array (
          'exception' => 'Exception',
          'authorizationexception' => 'Illuminate\\Auth\\Access\\AuthorizationException',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'modelnotfoundexception' => 'Illuminate\\Database\\Eloquent\\ModelNotFoundException',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'response' => 'Illuminate\\Http\\Response',
          'arr' => 'Illuminate\\Support\\Arr',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'consoleapplication' => 'Symfony\\Component\\Console\\Application',
          'htmlerrorrenderer' => 'Symfony\\Component\\ErrorHandler\\ErrorRenderer\\HtmlErrorRenderer',
          'httpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
          'throwable' => 'Throwable',
        ),
         'className' => 'Laravel\\Lumen\\Exceptions\\Handler',
         'functionName' => 'renderExceptionWithSymfony',
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
    '5016a5bd9c76fbf95e2853a4fd2f688a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Render an exception to the console.
     *
     * @param  \\Symfony\\Component\\Console\\Output\\OutputInterface  $output
     * @param  \\Throwable  $e
     * @return void
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Laravel\\Lumen\\Exceptions',
         'uses' => 
        array (
          'exception' => 'Exception',
          'authorizationexception' => 'Illuminate\\Auth\\Access\\AuthorizationException',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'modelnotfoundexception' => 'Illuminate\\Database\\Eloquent\\ModelNotFoundException',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'response' => 'Illuminate\\Http\\Response',
          'arr' => 'Illuminate\\Support\\Arr',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'consoleapplication' => 'Symfony\\Component\\Console\\Application',
          'htmlerrorrenderer' => 'Symfony\\Component\\ErrorHandler\\ErrorRenderer\\HtmlErrorRenderer',
          'httpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
          'throwable' => 'Throwable',
        ),
         'className' => 'Laravel\\Lumen\\Exceptions\\Handler',
         'functionName' => 'renderForConsole',
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
    '1dd5e24d4b2cd4b42353aaed9914dcc9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Determine if the given exception is an HTTP exception.
     *
     * @param  \\Throwable  $e
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Laravel\\Lumen\\Exceptions',
         'uses' => 
        array (
          'exception' => 'Exception',
          'authorizationexception' => 'Illuminate\\Auth\\Access\\AuthorizationException',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'modelnotfoundexception' => 'Illuminate\\Database\\Eloquent\\ModelNotFoundException',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'response' => 'Illuminate\\Http\\Response',
          'arr' => 'Illuminate\\Support\\Arr',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'consoleapplication' => 'Symfony\\Component\\Console\\Application',
          'htmlerrorrenderer' => 'Symfony\\Component\\ErrorHandler\\ErrorRenderer\\HtmlErrorRenderer',
          'httpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
          'throwable' => 'Throwable',
        ),
         'className' => 'Laravel\\Lumen\\Exceptions\\Handler',
         'functionName' => 'isHttpException',
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