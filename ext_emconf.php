<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "filefill".
 *
 * Auto generated 12-09-2018 22:55
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'File Fill',
  'description' => 'Find and fetch missing local files from different remotes',
  'category' => 'misc',
  'author' => 'Nicole Cordes',
  'author_email' => 'typo3@cordes.co',
  'author_company' => 'biz-design',
  'state' => 'stable',
  'uploadfolder' => 0,
  'createDirs' => '',
  'clearCacheOnLoad' => 0,
  'version' => '0.6.0',
  'constraints' =>
  array (
    'depends' =>
    array (
      'typo3' => '6.2.0-6.2.99',
    ),
    'conflicts' =>
    array (
    ),
    'suggests' =>
    array (
    ),
  ),
  '_md5_values_when_last_written' => 'a:23:{s:9:"ChangeLog";s:4:"81ab";s:7:"LICENSE";s:4:"b234";s:9:"README.md";s:4:"cecd";s:13:"composer.json";s:4:"cc85";s:12:"ext_icon.png";s:4:"970b";s:17:"ext_localconf.php";s:4:"ff94";s:14:"ext_tables.sql";s:4:"29ed";s:16:"phpunit.xml.dist";s:4:"7d0d";s:24:"sonar-project.properties";s:4:"88f7";s:35:"Classes/Hooks/ResetMissingFiles.php";s:4:"01cb";s:45:"Classes/Resource/RemoteResourceCollection.php";s:4:"0030";s:52:"Classes/Resource/RemoteResourceCollectionFactory.php";s:4:"4da3";s:44:"Classes/Resource/RemoteResourceInterface.php";s:4:"1d87";s:42:"Classes/Resource/Domain/DomainResource.php";s:4:"b6b9";s:52:"Classes/Resource/Domain/DomainResourceRepository.php";s:4:"f4c7";s:42:"Classes/Resource/Driver/FileFillDriver.php";s:4:"1830";s:52:"Classes/Resource/Placeholder/PlaceholderResource.php";s:4:"a4f8";s:42:"Classes/Slot/FileProcessingServiceSlot.php";s:4:"9fd3";s:36:"Classes/Slot/ResourceFactorySlot.php";s:4:"30df";s:38:"Classes/UserFunc/CheckMissingFiles.php";s:4:"84d3";s:37:"Configuration/FlexForms/Resources.xml";s:4:"bdd1";s:48:"Configuration/TCA/Overrides/sys_file_storage.php";s:4:"3c9d";s:43:"Resources/Private/Language/locallang_db.xlf";s:4:"508c";}',
);

