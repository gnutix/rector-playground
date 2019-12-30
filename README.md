# Rector Playground

## How to play with it

1. Clone the repository
2. Install PHP and Docker on your machine
3. Run `./RUN_ME`

## How to help ?

Run this playground and report in the issues tracker your results.

## Here's what I got

```
Run through rector.phar inside Docker
sha256:455b7084ae0e0593ce4b46e906fdb6c0b28b059461a071b3dead1b690ec26fd6
Rector 0.6.x-dev@c2f76f5
Config file: rector.yaml

[parsing] src/Bar.php
[parsing] src/Baz.php
[parsing] src/Foo.php
[refactoring] src/Bar.php

In StaticTypeMapper.php line 514:
                                                                               
  [Rector\Exception\NotImplementedException]                                   
  Rector\NodeTypeResolver\StaticTypeMapper::mapPHPStanPhpDocTypeNodeToPHPStan  
  Type for Rector\BetterPhpDocParser\Attributes\Ast\PhpDoc\Type\AttributeAwar  
  eGenericTypeNode                                                             
                                                                               

Exception trace:
  at phar:///usr/bin/rector/packages/NodeTypeResolver/src/StaticTypeMapper.php:514
 Rector\NodeTypeResolver\StaticTypeMapper->mapPHPStanPhpDocTypeNodeToPHPStanType() at phar:///usr/bin/rector/packages/NodeTypeResolver/src/StaticTypeMapper.php:377
 Rector\NodeTypeResolver\StaticTypeMapper->mapPHPStanPhpDocTypeToPHPStanType() at phar:///usr/bin/rector/packages/BetterPhpDocParser/src/PhpDocInfo/PhpDocInfo.php:147
 Rector\BetterPhpDocParser\PhpDocInfo\PhpDocInfo->getVarType() at phar:///usr/bin/rector/packages/NodeTypeResolver/src/PhpDoc/NodeAnalyzer/DocBlockManipulator.php:263
 Rector\NodeTypeResolver\PhpDoc\NodeAnalyzer\DocBlockManipulator->getVarType() at phar:///usr/bin/rector/packages/TypeDeclaration/src/Rector/Property/PropertyTypeDeclarationRector.php:47
 Rector\TypeDeclaration\Rector\Property\PropertyTypeDeclarationRector->refactor() at phar:///usr/bin/rector/src/Rector/AbstractRector.php:95
 Rector\Rector\AbstractRector->enterNode() at phar:///usr/bin/rector/vendor/nikic/php-parser/lib/PhpParser/NodeTraverser.php:176
 PhpParser\NodeTraverser->traverseArray() at phar:///usr/bin/rector/vendor/nikic/php-parser/lib/PhpParser/NodeTraverser.php:105
 PhpParser\NodeTraverser->traverseNode() at phar:///usr/bin/rector/vendor/nikic/php-parser/lib/PhpParser/NodeTraverser.php:196
 PhpParser\NodeTraverser->traverseArray() at phar:///usr/bin/rector/vendor/nikic/php-parser/lib/PhpParser/NodeTraverser.php:105
 PhpParser\NodeTraverser->traverseNode() at phar:///usr/bin/rector/vendor/nikic/php-parser/lib/PhpParser/NodeTraverser.php:196
 PhpParser\NodeTraverser->traverseArray() at phar:///usr/bin/rector/vendor/nikic/php-parser/lib/PhpParser/NodeTraverser.php:85
 PhpParser\NodeTraverser->traverse() at phar:///usr/bin/rector/src/PhpParser/NodeTraverser/RectorNodeTraverser.php:53
 Rector\PhpParser\NodeTraverser\RectorNodeTraverser->traverse() at phar:///usr/bin/rector/src/Application/FileProcessor.php:100
 Rector\Application\FileProcessor->refactor() at phar:///usr/bin/rector/src/Application/RectorApplication.php:123
 Rector\Application\RectorApplication->Rector\Application\{closure}() at phar:///usr/bin/rector/src/Application/RectorApplication.php:176
 Rector\Application\RectorApplication->tryCatchWrapper() at phar:///usr/bin/rector/src/Application/RectorApplication.php:124
 Rector\Application\RectorApplication->runOnFileInfos() at phar:///usr/bin/rector/src/Console/Command/ProcessCommand.php:116
 Rector\Console\Command\ProcessCommand->execute() at phar:///usr/bin/rector/vendor/symfony/console/Command/Command.php:228
 _HumbugBox6d9e4e45d575\Symfony\Component\Console\Command\Command->run() at phar:///usr/bin/rector/src/Console/Command/AbstractCommand.php:30
 Rector\Console\Command\AbstractCommand->run() at phar:///usr/bin/rector/vendor/symfony/console/Application.php:858
 _HumbugBox6d9e4e45d575\Symfony\Component\Console\Application->doRunCommand() at phar:///usr/bin/rector/vendor/symfony/console/Application.php:236
 _HumbugBox6d9e4e45d575\Symfony\Component\Console\Application->doRun() at phar:///usr/bin/rector/src/Console/Application.php:76
 Rector\Console\Application->doRun() at phar:///usr/bin/rector/vendor/symfony/console/Application.php:137
 _HumbugBox6d9e4e45d575\Symfony\Component\Console\Application->run() at phar:///usr/bin/rector/bin/rector:41
 require() at /usr/bin/rector:6

process [-n|--dry-run] [-a|--autoload-file AUTOLOAD-FILE] [-e|--hide-autoload-errors] [--match-git-diff] [-r|--rule RULE] [-o|--output-format [OUTPUT-FORMAT]] [--] [<source>...]

Run through rector.phar on your machine
Rector 0.6.x-dev@f4bfaeb
Config file: rector.yaml

[parsing] src/Bar.php
[parsing] src/Baz.php
[parsing] src/Foo.php
[refactoring] src/Bar.php
[refactoring] src/Baz.php
[refactoring] src/Foo.php
[printing] src/Bar.php
[printing] src/Baz.php
[printing] src/Foo.php


                                                                                                                        
 [OK] Rector is done! 0 changed files                                                                                                                                                                                                       
```

So it seems to be alright when it executes rector.phar on the machine, but fails from within the Docker container.
A mystery to me, for sure...
