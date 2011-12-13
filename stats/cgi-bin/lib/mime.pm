# AWSTATS MIME DATABASE
#-------------------------------------------------------
# If you want to add MIME types,
# you must add an entry in MimeFamily and may be MimeHashLib
#-------------------------------------------------------
# $Revision: 1.20 $ - $Author: eldy $ - $Date: 2005/01/21 22:49:05 $


#package AWSMIME;


# MimeHashLib
# List of mime's label ("mime id in lower case", "mime text")
#---------------------------------------------------------------
%MimeHashLib = (
'text',      'Text file',
'page',      'HTML&nbsp;or&nbsp;XML&nbsp;static&nbsp;page',
'script',    'Dynamic&nbsp;Html&nbsp;page&nbsp;or&nbsp;Script&nbsp;file',
'image',     'Image',
'document',  'Document',
'package',   'Package',
'archive',   'Archive',
'audio',     'Audio',
'video',     'Video',
'javascript','Javascript file',
'vbs',       'Visual Basic script',
'conf',      'Config file',
'css',       'Cascading Style Sheet file',
'xsl',       'Extensible&nbsp;Stylesheet&nbsp;Language&nbsp;file',
'runtime',   'HTML&nbsp;dynamic&nbsp;page&nbsp;or&nbsp;Binary&nbsp;runtime',
'library',   'Binary library',
'swf',       'Macromedia Flash Animation',
'dtd',       'Document Type Definition',
'csv',       'Comma Separated Value file',
'jnlp',      'Java Web Start launch file',
);

# MimeHashIcon
# Each Mime ID is associated to a string that is the name of icon
# file for this Mime type.
#---------------------------------------------------------------------------
%MimeHashIcon = (
# Text file
'txt','text',
# HTML Static page
'html','html',
'htm','html',
'hdml','html',
'wml','html',
'wmlp','html',
'xml','html',
# HTML Dynamic pages or script
'asp','script',
'aspx','script', 
'asmx','script', 
'cfm','script',
'jsp','script',
'cgi','script',
'ksh','script',
'php','script',
'php3','script',
'php4','script',
'pl','script',
'py','script',
'sh','script',
'shtml','html',
'tcl','script',
'xsp','script',
# Image
'gif','image',
'png','image',
'bmp','image',
'jpg','image',
'jpeg','image',
# Document
'doc','doc',
'pdf','pdf',
'xls','other',
'ppt','other',
'pps','other',
'sxw','other',
'sxc','other',
'sxi','other',
'sxd','other',
'csv','other',
'xsl','html',
# Package
'rpm',($LogType eq 'S'?'audio':'archive'),
'deb','archive',
'msi','archive',
# Archive
'7z','archive',
'ace','archive',
'bz2','archive',
'gz','archive',
'jar','archive',
'rar','archive',
'tar','archive',
'tgz','archive',
'tbz2','archive',
'z','archive',
'zip','archive',
# Audio
'mp3','audio',
'ogg','audio',
'wma','audio',
'wav','audio',
# Video
'avi','video',
'divx','video',
'mp4','video',
'mpeg','video',
'mpg','video',
'rm','video',
'swf','video',
# Web scripts
'js','other',
'vbs','other',
# Config
'cf','other',
'conf','other',
'css','other',
'ini','other',
'dtd','other',
# Program
'exe','script',
'dll','script',
'jnlp','jnlp',
);


%MimeHashFamily=(
# Text file
'txt','page',
# HTML Static page
'html','page',
'htm','page',
'wml','page',
'wmlp','page',
'xml','page',
# HTML Dynamic pages or script
'asp','script',
'aspx','script', 
'asmx','script', 
'cfm','script',
'jsp','script',
'cgi','script',
'ksh','script',
'php','script',
'php3','script',
'php4','script',
'pl','script',
'py','script',
'sh','script',
'shtml','script',
'tcl','script',
'xsp','script',
# Image
'gif','image',
'png','image',
'bmp','image',
'jpg','image',
'jpeg','image',
# Document
'doc','document',
'pdf','document',
'xls','document',
'ppt','document',
'pps','document',
'sxw','document',
'sxc','document',
'sxi','document',
'sxd','document',
'csv','csv',
'xsl','xsl',
# Package
'rpm',($LogType eq 'S'?'audio':'package'),
'deb','package',
'msi','package',
# Archive
'7z','archive',
'ace','archive',
'bz2','archive',
'gz','archive',
'jar','archive',
'rar','archive',
'tar','archive',
'tgz','archive',
'tbz2','archive',
'z','archive',
'zip','archive',
# Audio
'mp3','audio',
'ogg','audio',
'wav','audio',
'wma','audio',
# Video
'avi','video',
'divx','video',
'mp4','video',
'mpeg','video',
'mpg','video',
'rm','video',
'swf','swf',
# Web scripts
'js','javascript',
'vbs','vbs',
# Config
'cf','conf',
'conf','conf',
'css','css',
'ini','conf',
'dtd','dtd',
# Program
'exe','runtime',
'jnlp','jnlp',
'dll','library',
);


1;
