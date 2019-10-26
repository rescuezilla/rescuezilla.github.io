<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<script src="http://redobackup.org/modules/droplets/js/mdcr.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="http://redobackup.org/templates/redo/template.css" media="screen" />
        <link rel="shortcut icon" href="/favicon.png" type="image/x-icon" />
	<title>Help</title>
</head>

<body>

<center>
<div id="main">
  <div id="navbar">
<ul>
<li><span class="menu_default"><a href="http://redobackup.org" target="_top"  class="menu_default"> About </a></span>
</li>
<li><span class="menu_default"><a href="http://redobackup.org/features.php" target="_top"  class="menu_default"> Features </a></span>
</li>
<li><span class="menu_default"><a href="http://redobackup.org/download.php" target="_top"  class="menu_default"> Download </a></span>
</li>
<li><span class="menu_current"><a href="http://redobackup.org/help.php" target="_top"  class="menu_current"> Help </a></span>
</li>
</ul></div>
  <div id="content">
    <a class="section_anchor" id="wb_9" name="wb_9"></a><h1><img align="right" width="128" height="128" src="http://redobackup.org/media/icons/help.png" style="margin-left: 20px;" alt="" />Need Help?</h1>
<p>First take a moment to read our FAQ below, as it has the answers to all of the common questions you may have about Redo Backup.</p>
<h2>Frequently Asked Questions</h2>
<h3>Q: It hangs after the language selection screen!</h3>
<p style="margin-left: 40px;">A: Some computers boot extremely slow. Give it a minute, especially if the computer continues to read from the CD-ROM or USB&nbsp;drive.</p>
<p style="margin-left: 40px;">If you only experience this when booting from USB, it is possible that in the BIOS, your USB&nbsp;drive may need to be identified as USB-HDD, USB-ZIP, or some other setting that may improve performance.</p>
<h3>Q:&nbsp;My backup froze at XX% and no error was given! What happened?</h3>
<p style="margin-left: 40px;">A: Close out the backup that failed or is frozen, and then go to Tools &gt;&nbsp;Terminal. At the terminal type <strong>cat /partclone.log</strong> and hit ENTER to see what went wrong. Then file a bug report with the <strong>exact</strong> error message you received. Remember that Redo Backup is a frontend to the <a rel="nofollow" target="_blank" href="http://partclone.org">Partclone</a> project, so if you can run partclone successfully, Redo Backup should work for you.</p>
<h3>Q:&nbsp;Can I&nbsp;restore a backup to a smaller drive?</h3>
<p style="margin-left: 40px;">A: No. Doing so likely would require modifying the bootloader, and simplicity is then defeated. The best way to ensure that the restore is successful is to restore an identical image, which requires a drive of equal or greater size.</p>
<h3>Q:&nbsp;Why do I&nbsp;only see a white screen after the backup is finished, or when I exit a program?</h3>
<p style="margin-left: 40px;">A:&nbsp;After you exit a program you may need to move the mouse cursor to the top right corner of your screen, where it looks like a page corner. When you do, the page will &quot;peel back,&quot; exposing maximize, minimize and close buttons which will allow you to navigate through the windows of each application you wish to run. (And yes, you can maximize the browser window!)</p>
<h3>Q: How do I&nbsp;find a window that I&nbsp;already opened?</h3>
<p style="margin-left: 40px;">A:&nbsp;Any applications that are already running will appear in the menus with a small blue stamp on the icon. When you click an already-running application in the menu, it will open the existing window.</p>
<h3>Q:&nbsp;Why won't my wireless card / display / keyboard work?</h3>
<p style="margin-left: 40px;">A: It may not be supported by the Ubuntu-based operating system (xPUD). Our focus is geared towards the front end for partclone, and we are not experts in hardware support. We recommend downloading the latest build of xPUD&nbsp;and trying it, and if it works, let us know so we can try to identify the kernel module (driver)&nbsp;that allowed it to work, and then include it in the Redo Backup ISO. For best results, try posting to the <a rel="nofollow" target="_blank" href="http://www.xpud.org/forum/">xPUD&nbsp;developer forum</a>, as they are much more knowledgable about this type of thing than we are.</p>
<h2>Report a Bug</h2>
<p>If you are fairly certain that you've encountered a bug that you can reliably reproduce, and it is not the expected behavior, then we would encourage you to take a moment and provide us with the information we need to fix it. Your participation ensures a better project that we all benefit from!</p>
<p>To run Redo Backup in <strong>debug mode</strong> to see the specific error message that caused your problem, read the FAQ&nbsp;above.&nbsp;Remember that Redo Backup is simply a front end, and <a href="http://partclone.org" target="_blank" rel="nofollow">Partclone</a> is the actual program doing the work; if you run Partclone from the command line, you should get the same error, which we will need a bug report for.</p>
<ul>
    <li><strong>Submit a </strong><a href="/bugs" rel="nofollow"><strong>Bug Report</strong></a></li>
</ul>  </div>
  <div id="footer">Copyright &copy;2010 RedoBackup.org. Released under GNU GPL license.</div>
</div>

</center>


</body>
</html>
