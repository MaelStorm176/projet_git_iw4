<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/vendor/phpunit/phpunit/src/Framework/TestCase.php-1632555531',
   'data' => 
  array (
    '5fac4613df121f2bb8a86b644e719f01' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
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
    '8325962d52ea3b4f3a2348ec95e47a1c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var ?bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
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
    '3c6f7d412dc1e10bbdc411f88f593024' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var string[]
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
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
    '4ec0cbaa886c4fc47e0661362179c123' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var string[]
     *
     * @deprecated Use $backupGlobalsExcludeList instead
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
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
    'ac69dd286f9bcf7b207e4f17cc01a55c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
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
    '1a2fd99df8d9d818a60ef3db526acea2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var array<string,array<int,string>>
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
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
    '876f80c162d62b0f883843c787a5b27d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var array<string,array<int,string>>
     *
     * @deprecated Use $backupStaticAttributesExcludeList instead
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
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
    '325a286c05fb21f4e249a908a3eecb2a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var list<ExecutionOrderDependency>
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
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
    '68550e8944439bd9463125819e535e4f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
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
    '2e8f45bf5e0b20acaba183b75acd5c23' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var int|string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
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
    '9e7d187a850049531ed1489b518456af' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var null|string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
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
    'f1da6985e5119ad6a450d0f93ef00204' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var null|int|string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
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
    'a2a58d57ff384fe0b192c2639150847b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
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
    '6e4fe9776638d2348c83aa8390d78855' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var array<string,string>
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
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
    'cfe763439596bb6324f29acc9c13384f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var MockObject[]
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
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
    '6b55998744bb38ba7a6cc047b404dbd2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var MockGenerator
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
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
    'e7ba80c1c1cd3fc7992319633a537ef1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var int
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
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
    '27b330e66e2493ec28fc031ff5b9586b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var TestResult
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
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
    'c7193011529c877b551bb2bd815ac1b4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var mixed
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
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
    '09651d102a3c84700c7b610b3660779d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var ?string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
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
    '3ad9430dc3ab252df6b52ad776342a35' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var ?Snapshot
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
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
    '416a7fed21978efd62422029aa645bd1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var \\Prophecy\\Prophet
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
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
    'd05824b973efa2ea7f32275c1880e499' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var Comparator[]
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
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
    'fb80f398754f7cacbf2908e96e5b676e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a matcher that matches when the method is executed
     * zero or more times.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'any',
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
    '40d115283d372fb8f7d9517807640cf7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a matcher that matches when the method is never executed.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'never',
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
    '7e0dbc7ccaddf6713b73b8da2ba16949' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a matcher that matches when the method is executed
     * at least N times.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'atLeast',
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
    '0f45db0b45f479ac340d6b21242d6e8a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a matcher that matches when the method is executed at least once.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'atLeastOnce',
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
    'cc09a7984d6b51147a2821a9fe83af03' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a matcher that matches when the method is executed exactly once.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'once',
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
    '35b5fb9eeff81cd5c1366167fd2e8de9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a matcher that matches when the method is executed
     * exactly $count times.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'exactly',
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
    '0c8759fba124302414e02bf6a792d44a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a matcher that matches when the method is executed
     * at most N times.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'atMost',
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
    'ebf66f016621876bd4365695df9de9ea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a matcher that matches when the method is executed
     * at the given index.
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/4297
     * @codeCoverageIgnore
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'at',
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
    'efe812984735ab7e2b137302d3fab635' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the current object.
     *
     * This method is useful when mocking a fluent interface.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'returnSelf',
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
    '27f47b5e9dd75a139b11a8f92ac27860' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param int|string $dataName
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => '__construct',
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
    '64b4d6e9f12236c1eb2926ff3e012fa9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * This method is called before the first test of this test class is run.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'setUpBeforeClass',
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
    '90f00fe21ddd98fb3a179b5e49a253a2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * This method is called after the last test of this test class is run.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'tearDownAfterClass',
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
    '59fd218b1b15f03ef9a505c21b5bedd9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * This method is called before each test.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'setUp',
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
    'd5fb64cae3272416a6adba8e2862085a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * This method is called after each test.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'tearDown',
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
    '265689ee2589477f4ffe6fb27d70a908' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a string representation of the test case.
     *
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     * @throws Exception
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'toString',
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
    'bb14e8cceea4fa23934bd5e931dc6ef6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @psalm-param class-string<\\Throwable> $exception
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'expectException',
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
    '51ec38528a897c649b75e45eddfaa543' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param int|string $code
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'expectExceptionCode',
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
    '42ace98b1301317fe288b1bcb6b9c784' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets up an expectation for an exception to be raised by the code under test.
     * Information for expected exception class, expected exception message, and
     * expected exception code are retrieved from a given Exception object.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'expectExceptionObject',
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
    'dd32f738b24a5dec5216500558370389' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Runs the test case and collects the results in a TestResult object.
     * If no TestResult object is passed a new one will be created.
     *
     * @throws \\SebastianBergmann\\CodeCoverage\\InvalidArgumentException
     * @throws \\SebastianBergmann\\CodeCoverage\\UnintentionallyCoveredCodeException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     * @throws CodeCoverageException
     * @throws UtilException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'run',
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
    '5c6aeec776553c7ec75c71700b69c57d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a builder object to create mock objects using a fluent interface.
     *
     * @psalm-template RealInstanceType of object
     * @psalm-param class-string<RealInstanceType> $className
     * @psalm-return MockBuilder<RealInstanceType>
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'getMockBuilder',
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
    '282e8d88f759ab70136adec87e150f73' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @return string[]
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'doubledTypes',
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
    'b36ff44d65327f87ac45559ad4a76260' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'getGroups',
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
    '410118effe016ff3030d90692e19f8ec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'setGroups',
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
    '04e93f83cf0e6e672d890157d651665e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'getName',
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
    'eb556a5a693bb96cf430648a2de2b855' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the size of the test.
     *
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'getSize',
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
    'e9f7accd08acb938cd2d62520b91d6bf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'hasSize',
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
    '2abdab94ac7566df40bfa98b1dd4cd72' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'isSmall',
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
    '00408c4655beb5b3bf816dec39fa67da' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'isMedium',
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
    'b1a817fa7b080ded9d91627457fcaf83' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'isLarge',
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
    '12aa19d437fc9a3e0178f032edb1fc17' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'getActualOutput',
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
    '17bae81821ea46d339340bf80afcf096' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'hasOutput',
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
    'cbc8c8e23c581861ce7d53006da16edb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'doesNotPerformAssertions',
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
    'f4b2ac7634fd47604b04f8a55ae2b117' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'hasExpectationOnOutput',
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
    '08ff5c9ffe87600a246ab389962267a4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'getExpectedException',
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
    'f979677480adcb82895f6de268069c50' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @return null|int|string
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'getExpectedExceptionCode',
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
    '6623584a2f13fa92f5b075728ff747d4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'getExpectedExceptionMessage',
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
    'eec331e22259fd33afe28594e01b1c66' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'getExpectedExceptionMessageRegExp',
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
    '24540cc31c69757dfc59928641dad7d8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'setRegisterMockObjectsFromTestArgumentsRecursively',
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
    '9ca92743a36d7bcc17d228b87dbbcb4f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @throws Throwable
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'runBare',
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
    'a581f2a8544517adbf1d86e5d7ff70a4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'setName',
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
    'd6cb51e96a581a6893f7988a3fc29007' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param list<ExecutionOrderDependency> $dependencies
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'setDependencies',
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
    'd0ef3b32f306ba6ddc27704a8e052734' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'setDependencyInput',
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
    'd5d981211a420fce0d232c7886009fee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'setBeStrictAboutChangesToGlobalState',
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
    'b6d3cb95003525b4264f7116d6fcaf5c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'setBackupGlobals',
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
    '1b3615b8428f49ecbcb06e9cd0d45c60' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'setBackupStaticAttributes',
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
    '3e586c5680c99fe5f0e7517f20686ad7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'setRunTestInSeparateProcess',
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
    '935d278f6dcd954303cc55a9731d8a7d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'setRunClassInSeparateProcess',
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
    '8f324e75332850a837dcf88289f51ae2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'setPreserveGlobalState',
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
    'c771ce96a83db85f2c730bbefa788c9f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'setInIsolation',
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
    'bd507c8888ca6580ceb15e0627c4598e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'isInIsolation',
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
    'bcab6b9201110e6e8a0a67cf165098b4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'getResult',
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
    '42017175318fbc3564d490833213c95b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'setResult',
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
    '06655f6319131c84032d3f22c87482fb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'setOutputCallback',
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
    '6272023579cc76287537d785de5879ec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'getTestResultObject',
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
    '87cbb6bac44dbfaed9260b8f5a23ca2a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'setTestResultObject',
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
    '6e07881ca69d505cfdb15e19e9634be1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'registerMockObject',
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
    '8cb5b098c3aef49a9c71de1341583702' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'addToAssertionCount',
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
    'b116ddc6ce74507901126fbc9f56e54b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the number of assertions performed by this test.
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'getNumAssertions',
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
    '4aaf1588ba3e9009b75dc729c51c2b43' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'usesDataProvider',
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
    'e3fd3381186ff8912a8edf941d1b607f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @return int|string
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'dataName',
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
    '51d742b7968ad9061d50dc59e55b3d0f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'getDataSetAsString',
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
    'a3316a631ae8bec9148590cfb498fc41' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the data set of a TestCase.
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'getProvidedData',
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
    'd558c639b954ca6cba436a4f0458a5b6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'addWarning',
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
    '8ee928836dfeda0558b39c00b753245d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the normalized test name as class::method.
     *
     * @return list<ExecutionOrderDependency>
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'provides',
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
    'f8372320c8331bd951834dfba4e2586c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a list of normalized dependency names, class::method.
     *
     * This list can differ from the raw dependencies as the resolver has
     * no need for the [!][shallow]clone prefix that is filtered out
     * during normalization.
     *
     * @return list<ExecutionOrderDependency>
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'requires',
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
    '352cbffb64b33f62061ec62904e736ec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Override to run the test and assert its state.
     *
     * @throws \\SebastianBergmann\\ObjectEnumerator\\InvalidArgumentException
     * @throws AssertionFailedError
     * @throws Exception
     * @throws ExpectationFailedException
     * @throws Throwable
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'runTest',
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
    '2aa0b90f42c72065b9e4dafa6033ed5a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * This method is a wrapper for the ini_set() function that automatically
     * resets the modified php.ini setting to its original value after the
     * test is run.
     *
     * @throws Exception
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'iniSet',
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
    '6d9e868c77c57eb991cdf386e0c4143a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * This method is a wrapper for the setlocale() function that automatically
     * resets the locale to its original value after the test is run.
     *
     * @throws Exception
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'setLocale',
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
    '4d4844a6195f93a8d25d76a8432fba35' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Makes configurable stub for the specified class.
     *
     * @psalm-template RealInstanceType of object
     * @psalm-param    class-string<RealInstanceType> $originalClassName
     * @psalm-return   Stub&RealInstanceType
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'createStub',
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
    'f535acfbc9665aa0377ce84688412e99' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a mock object for the specified class.
     *
     * @psalm-template RealInstanceType of object
     * @psalm-param class-string<RealInstanceType> $originalClassName
     * @psalm-return MockObject&RealInstanceType
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'createMock',
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
    '866e2db270d8cfaf82dfd41d49ad2b7b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a configured mock object for the specified class.
     *
     * @psalm-template RealInstanceType of object
     * @psalm-param class-string<RealInstanceType> $originalClassName
     * @psalm-return MockObject&RealInstanceType
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'createConfiguredMock',
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
    '9b5fbe6c2de4fdf01f1c735bb05b8f89' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a partial mock object for the specified class.
     *
     * @param string[] $methods
     *
     * @psalm-template RealInstanceType of object
     * @psalm-param class-string<RealInstanceType> $originalClassName
     * @psalm-return MockObject&RealInstanceType
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'createPartialMock',
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
    'e04480adc4dc8b1fa27cb490f8f5c289' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a test proxy for the specified class.
     *
     * @psalm-template RealInstanceType of object
     * @psalm-param class-string<RealInstanceType> $originalClassName
     * @psalm-return MockObject&RealInstanceType
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'createTestProxy',
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
    'f90339b29aeab8fb3bf9a85c5fc90699' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Mocks the specified class and returns the name of the mocked class.
     *
     * @param null|array $methods $methods
     *
     * @psalm-template RealInstanceType of object
     * @psalm-param class-string<RealInstanceType>|string $originalClassName
     * @psalm-return class-string<MockObject&RealInstanceType>
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'getMockClass',
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
    '43301de9e05bd190411d17f27da7ce80' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a mock object for the specified abstract class with all abstract
     * methods of the class mocked. Concrete methods are not mocked by default.
     * To mock concrete methods, use the 7th parameter ($mockedMethods).
     *
     * @psalm-template RealInstanceType of object
     * @psalm-param class-string<RealInstanceType> $originalClassName
     * @psalm-return MockObject&RealInstanceType
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'getMockForAbstractClass',
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
    '537fe81bbc20bb1a135be2fce8210d35' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a mock object based on the given WSDL file.
     *
     * @psalm-template RealInstanceType of object
     * @psalm-param class-string<RealInstanceType>|string $originalClassName
     * @psalm-return MockObject&RealInstanceType
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'getMockFromWsdl',
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
    'e480b0c886a605276d5ef73c5bcba441' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a mock object for the specified trait with all abstract methods
     * of the trait mocked. Concrete methods to mock can be specified with the
     * `$mockedMethods` parameter.
     *
     * @psalm-param trait-string $traitName
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'getMockForTrait',
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
    '85a6dca070e440a0336e5ec646d09b38' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns an object for the specified trait.
     *
     * @psalm-param trait-string $traitName
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'getObjectForTrait',
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
    'd8128c652b9b20ae00e26e7ec245de85' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @throws \\Prophecy\\Exception\\Doubler\\ClassNotFoundException
     * @throws \\Prophecy\\Exception\\Doubler\\DoubleException
     * @throws \\Prophecy\\Exception\\Doubler\\InterfaceNotFoundException
     *
     * @psalm-param class-string|null $classOrInterface
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'prophesize',
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
    'a92622efbe5a366c04bcfccc03e6a992' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Creates a default TestResult object.
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'createResult',
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
    '874b65b1e012058b65d4570be70bfff3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Performs assertions shared by all tests of a test case.
     *
     * This method is called between setUp() and test.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'assertPreConditions',
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
    '40d9afe766dfabdd23fbe805084383b0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Performs assertions shared by all tests of a test case.
     *
     * This method is called between test and tearDown().
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'assertPostConditions',
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
    '393952ac56316b3969b0ba34f4c4a41d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * This method is called when a test method did not execute successfully.
     *
     * @throws Throwable
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'onNotSuccessfulTest',
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
    'fd2f320cfd1af43da92fb4871b00f26e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @throws Throwable
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'verifyMockObjects',
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
    'ee02e98a3c77750b7108cdb62d9680e3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @throws SkippedTestError
     * @throws SyntheticSkippedError
     * @throws Warning
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'checkRequirements',
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
    'ee38c277225031dc8dd3ef306120d3ce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the mock object generator, creating it if it doesn\'t exist.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'getMockObjectGenerator',
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
    'b517f4c87935357533290d8284bb4ea0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @throws RiskyTestError
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'stopOutputBuffering',
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
    '53ba99a2aeb42e6ea3d473bebc67520e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     * @throws RiskyTestError
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'restoreGlobalState',
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
    'fcc4551853ed3403a7664a052f8b8242' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     * @throws RiskyTestError
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'compareGlobalStateSnapshots',
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
    'b2f3375956af3cd9eb7e1010aa8c19dc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @throws RiskyTestError
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'compareGlobalStateSnapshotPart',
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
    'b3575f171542fd473c3c802a06f7f44c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @throws \\SebastianBergmann\\ObjectEnumerator\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'shouldInvocationMockerBeReset',
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
    '0484f27578e260436a709aaaeb8b3af2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @throws \\SebastianBergmann\\ObjectEnumerator\\InvalidArgumentException
     * @throws \\SebastianBergmann\\ObjectReflector\\InvalidArgumentException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'registerMockObjectsFromTestArguments',
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
    '8d4eaa7b53868d7cc31b247823187247' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @throws Exception
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'checkExceptionExpectations',
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
    '1a4a8a196677b7847b60da42c1b1f4f3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @psalm-template RealInstanceType of object
     * @psalm-param class-string<RealInstanceType> $originalClassName
     * @psalm-return MockObject&RealInstanceType
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
          'error' => 'PHPUnit\\Framework\\Error\\Error',
          'notice' => 'PHPUnit\\Framework\\Error\\Notice',
          'warningerror' => 'PHPUnit\\Framework\\Error\\Warning',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Rule\\InvokedCount',
          'stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'utilexception' => 'PHPUnit\\Util\\Exception',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'testutil' => 'PHPUnit\\Util\\Test',
          'type' => 'PHPUnit\\Util\\Type',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'excludelist' => 'SebastianBergmann\\GlobalState\\ExcludeList',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'template' => 'SebastianBergmann\\Template\\Template',
          'soapclient' => 'SoapClient',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'createMockObject',
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