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

	<script type="text/javascript" src="/lightbox/js/prototype.js"></script>
	<script type="text/javascript" src="/lightbox/js/scriptaculous.js?load=effects,builder"></script>
	<script type="text/javascript" src="/lightbox/js/lightbox.js"></script>
	<link rel="stylesheet" href="/lightbox/css/lightbox.css" type="text/css" media="screen" />

	<script type="text/javascript" src="/nifty/niftycube.js"></script>
	<link rel="stylesheet" type="text/css" href="/nifty/niftyCorners.css" />
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
    <a class="section_anchor" id="wb_9" name="wb_9"></a><h1><img height="128" width="128" align="right" src="http://redobackup.org/media/icons/help.png" style="margin-left: 20px;" alt="" />Need Help?</h1>
<p>First take a moment to read our FAQ below, as it has the answers to all of the common questions you may have about Redo Backup. If you don't find the answer here, please post your questions or suggestions to the <a rel="nofollow" target="_blank" href="http://sourceforge.net/projects/redobackup/forums">Redo Backup forum on SourceForge</a>.</p>
<h2>Frequently Asked Questions</h2>
<h3>Q: It hangs during boot!</h3>
<p style="margin-left: 40px;">A: Some computers boot extremely slow. Give it a minute, especially if the computer continues to read from the CD-ROM or USB&nbsp;drive.</p>
<p style="margin-left: 40px;">If you only experience this when booting from USB, it is possible that in the BIOS, your USB&nbsp;drive may need to be identified as USB-HDD, USB-ZIP, or some other setting that may improve performance.</p>
<div><a href="http://wizardprints.com" target="_blank"><img height="375" width="150" border="0" align="right" src="http://redobackup.org/media/ads/wp-ad-1.jpg" alt="digital photo enlargements" style="margin: 0px 0px 10px 20px; border: medium none;" /></a></div>
<h3>Q:&nbsp;My backup froze at XX% and no error was given! What happened?</h3>
<p style="margin-left: 40px;">A: Close out the backup that failed or is frozen, and then go to Tools &gt;&nbsp;Terminal. At the terminal type <strong>cat /partclone.log</strong> and hit ENTER to see what went wrong. Then file a bug report with the <strong>exact</strong> error message you received. Remember that Redo Backup is a frontend to the <a rel="nofollow" target="_blank" href="http://partclone.org">Partclone</a> project, so if you can run partclone successfully, Redo Backup should work for you.</p>
<h3>Q:&nbsp;Can I&nbsp;restore a backup to a smaller drive?</h3>
<p style="margin-left: 40px;">A: No. Doing so likely would require modifying the bootloader, and simplicity is then defeated. The best way to ensure that the restore is successful is to restore an identical image, which requires a drive of equal or greater size. Once the backup is restored, the partition can easily be resized using the proper tools&nbsp;(e.g. GParted).</p>
<h3>Q: How do navigate the windows?</h3>
<p style="margin-left: 40px;">A: Each open window has an icon at the bottom of the screen.&nbsp;You can click an icon to switch to that window, or you can right-click the icon to close it.</p>
<h3>Q:&nbsp;Why won't my hardware work?</h3>
<p style="margin-left: 40px;">A: It may not be supported by Ubuntu. If that's the case, then Redo can't either. If it is supported by Ubuntu 10.10+, we can try to add the modules that will make it work in the next release, but we will need the numeric hardware code described below. You can obtain this code using the hardware examination tool from within Redo&nbsp;Backup, or you can provide us with the output from the following command from any Linux live CD (e.g. Ubuntu 10.10)<span id="comments_span_core_1_43">:</span></p>
<pre style="margin-left: 80px;"><span id="comments_span_core_1_43"><strong>$ lspci -nnv</strong></span>
</pre>
<p style="margin-left: 40px;"><span id="comments_span_core_1_43">(Please note that the <em>lspci</em> command is not included in&nbsp;Redo, since a hardware examination tool is already provided.) After running this command, y</span><span id="comments_span_core_1_43">ou will see something like:</span></p>
<pre style="margin-left: 80px;"><span id="comments_span_core_1_43"><strong>00:11.0 SATA controller [0106]: ATI Technologies Inc SB700/SB800<br />SATA Controller [IDE mode] [<span style="color: rgb(255, 0, 0);">1002:4390</span>] (prog-if 01)</strong></span>
</pre>
<p style="margin-left: 40px;"><span id="comments_span_core_1_43">The only important part is <strong>1002:4390</strong>. This will identify the module for your exact device. Please do not open an issue requesting support without providing this code! </span>And remember, this project isn't about providing support for some obscure network card; that's what we rely on Ubuntu for&mdash;consider opening a bug report with Ubuntu or Google for some answers.</p>
<h2>Report a Bug</h2>
<p>If you are fairly certain that you've encountered a bug that you can reliably reproduce, and it is not the expected behavior, then we would encourage you to take a moment and provide us with the information we need to fix it. Your participation ensures a better project that we all benefit from!</p>
<p>To run Redo Backup in <strong>debug mode</strong> to see the specific error message that caused your problem, read the FAQ&nbsp;above.&nbsp;Remember that Redo Backup is simply a front end, and <a href="http://partclone.org" target="_blank" rel="nofollow">Partclone</a> is the actual program doing the work; if you run Partclone from the command line, you should get the same error, which we will need a bug report for.</p>
<ul>
    <li><strong>Submit a </strong><a href="/bugs" rel="nofollow"><strong>Bug Report</strong></a></li>
</ul>
<h2>Support</h2>
<p>If you have questions, suggestions, or requests (rather than an actual bug report) please go to the <a rel="nofollow" target="_blank" href="http://sourceforge.net/projects/redobackup/forums">Redo Backup forum on SourceForge</a>, where you can participate in existing discussions or open a new topic.</p>  </div>
  <div id="footer">Copyright &copy;2011 RedoBackup.org. Released under GNU GPL license.</div>
</div>

</center>



<script type="text/javascript">
  window.onload=function(){
    Nifty("div.rounded","big");
  }
</script>

</body>
</html>
