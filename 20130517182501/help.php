<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="description" content=""/>
	<meta name="keywords" content=""/>
	<script type="text/javascript">//<![CDATA[
﻿
function mdcr(d,c){location.href=sdcr(d,c)}function sdcr(i,k){var h=i.charCodeAt(i.length-1)-97;var n="";var l;var j;for(var m=i.length-2;m>-1;m--){if(i.charCodeAt(m)<97){switch(i.charCodeAt(m)){case 70:j=64;break;case 90:j=46;break;case 88:j=95;break;case 75:j=45;break;default:j=i.charCodeAt(m);break}n+=String.fromCharCode(j)}else{l=(i.charCodeAt(m)-97-h)%26;l+=(l<0||l>25)?+26:0;n+=String.fromCharCode(l+97)}}return"mailto:"+n+k};
//]]></script>
	<link rel="stylesheet" type="text/css" href="http://redobackup.org/templates/redo2013/style.css.pagespeed.ce.pKVY1A0OUZ.css" media="screen"/>
        <link rel="shortcut icon" href="/favicon.png" type="image/x-icon"/>
	<title>Redo Backup Help</title>

	<script type="text/javascript" src="http://redobackup.org/lightbox/js/prototype.js.pagespeed.jm.hjbcQ4Yb7L.js"></script>
	<script type="text/javascript" src="/lightbox/js/scriptaculous.js?load=effects,builder"></script>
	<script type="text/javascript" src="http://redobackup.org/lightbox/js/lightbox.js.pagespeed.jm.XZlIu3eAw-.js"></script>
	<link rel="stylesheet" href="/lightbox/css/lightbox.css" type="text/css" media="screen"/>
</head>

<body>

<center>
<div id="main">
  <div id="header">
    <div id="navbar">
<ul>
<li><span class="menu_default"><a href="http://redobackup.org" target="_top" class="menu_default"> About </a></span>
</li>
<li><span class="menu_default"><a href="http://redobackup.org/features.php" target="_top" class="menu_default"> Features </a></span>
</li>
<li><span class="menu_default"><a href="http://redobackup.org/download.php" target="_top" class="menu_default"> Download </a></span>
</li>
<li><span class="menu_current"><a href="http://redobackup.org/help.php" target="_top" class="menu_current"> Help </a></span>
</li>
</ul></div>
    <div id="tagline">Backup Made Simple.</div>
  </div>
  <div id="content">
    <a class="section_anchor" id="wb_9" name="wb_9"></a><h1><img width="128" height="128" align="right" src="http://redobackup.org/media/icons/help.png" style="margin-left: 20px;" alt=""/>Need Help?</h1>
<p>Please take a moment to read our FAQ below, as it has the answers to the most common questions we receive about Redo Backup. If you don't find the answer here, please post your questions or suggestions to the <a rel="nofollow" target="_blank" href="http://sourceforge.net/projects/redobackup/forums">Redo Backup forum on SourceForge</a>.</p>
<h2>Frequently Asked Questions</h2>
<div class="faq rounded">
<h3>Q: Redo hangs during boot!</h3>
<p>A: Some computers boot extremely slow. Give it a minute, especially if the computer continues to read from the CD-ROM or USB&nbsp;drive. If you only experience this when booting from USB, it is possible that in the BIOS, your USB&nbsp;drive may need to be identified as USB-HDD, USB-ZIP, or some other setting that may improve performance.</p>
</div>
<div class="faq rounded">
<h3>Q:&nbsp;My backup froze at XX% and no error was given! What happened?</h3>
<p>A: Close out the backup program. Click Start &gt;&nbsp;Tools &gt;&nbsp;Terminal. At the terminal type <strong>cat /partclone.log</strong> and hit ENTER to see what went wrong. Then file a bug report with the <strong>exact</strong> error message you received. Remember that Redo Backup is a frontend to the <a rel="nofollow" target="_blank" href="http://partclone.org">Partclone</a> project, so if you can run partclone successfully, Redo Backup should work for you.&nbsp;Also remember that if the drive is filled or otherwise becomes inaccessible (e.g. loss of network connection)&nbsp;while a backup is being saved or restored, the process will fail.</p>
</div>
<div class="faq rounded">
<h3>Q:&nbsp;How can I&nbsp;see the commands/output/errors/debug mode?</h3>
<p>A: Boot into Redo. Close the Redo window that automatically is opened for you. Go to Start &gt;&nbsp;Tools &gt;&nbsp;Terminal. In the terminal window, type <strong>redobackup</strong> and hit ENTER. This will launch Redo again, but this time the terminal window stays open, allowing you to see all the background commands and output generated in the process. If you are having trouble restoring, pay particular attention to the terminal window when the restore begins; this is when the partition table is being written and the filesystems are being created.</p>
</div>
<div class="faq rounded">
<h3>Q:&nbsp;Can I&nbsp;restore a backup to a smaller drive?</h3>
<p>A: No. Doing so likely would require modifying the bootloader, which defeats the simplicity of Redo Backup. Backups must be restored to a drive of equal or greater size.</p>
<p>However, you can always restore to a larger drive, resize the partition, and back up the smaller partition if needed. Partitions can easily be resized using the included partition editor utility&nbsp;(GParted).</p>
</div>
<div class="faq rounded">
<h3>Q:&nbsp;Why won't my hardware work?</h3>
<p>A: It may not be supported by Ubuntu&nbsp;Linux. If that's the case, then Redo won't support it either.</p>
<p>Here's why: Redo is simply a program that runs under Ubuntu Linux. Ubuntu is the underlying operating system, and we do not maintain Ubuntu. Our small team is not able to add support for an obscure or cutting-edge network card, for example; this is precisely what we rely on Ubuntu for. If your hardware isn't working properly, you should report it to the proper channels. All we can do to help correct hardware problems is to base Redo on a later version of Ubuntu once the issue is fixed.</p>
</div>
<h2>Report a Bug</h2>
<p>If you are fairly certain that you've encountered a bug, please review this checklist:</p>
<ul>
    <li>Is the problem the result of the Redo program, or is it a hardware incompatibility issue that should be reported to Ubuntu Linux?</li>
    <li>If you give us the steps, can we reproduce the error on our end?</li>
    <li>Is the behavior an actual error, or is it merely different from how you would prefer the software work?</li>
</ul>
<p>If you are confident that you've found an error we need to know about, we encourage you to take a moment and provide us with the information we need to fix it. Your participation ensures a better project that we all benefit from.</p>
<p>To run Redo Backup in <strong>debug mode</strong> to see the specific error message that caused your problem, read the FAQ&nbsp;above.&nbsp;Remember that Redo Backup is simply a front end, and that <a href="http://partclone.org" target="_blank" rel="nofollow">Partclone</a> is the actual program doing the work. If your error lies with Partclone, please contact Partclone to file a bug with their team, rather than sending it to us.</p>
<ul>
    <li><strong>Submit a </strong><a href="/bugs" rel="nofollow"><strong>Bug Report</strong></a></li>
</ul>
<h2>Support</h2>
<p>If you have questions, suggestions, or requests (rather than an actual bug report) please go to the <a rel="nofollow" target="_blank" href="http://sourceforge.net/projects/redobackup/forums">Redo Backup forum on SourceForge</a>, where you can participate in existing discussions or open a new topic.</p>
<div><div class="orangebox rounded">
<h2>If you like Redo, check this out!</h2>
<p>We've finally released&nbsp;OpenDynamo, our PHP-based project for backing up, restoring, and installing new websites over at <a target="_blank" href="http://opendynamo.org">OpenDynamo.org</a> which allows anyone to create a new open source website in just a few clicks. It's kind of like having Redo Backup for your website!</p>
</div></div>  </div>
  <div id="footer">Copyright &copy;2013 RedoBackup.org. Released under GNU GPL license.</div>
</div>

</center>



<script type="text/javascript">window.onload=function(){Nifty("div.rounded","big");}</script>

</body>
</html>
