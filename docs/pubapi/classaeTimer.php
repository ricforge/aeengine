<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html><head><meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1">
<title>aeTimer class Reference</title>
<link href="doxygen.css" rel="stylesheet" type="text/css">
</head><body>
<!-- Generated by Doxygen 1.3-rc2 -->
<center>
<a class="qindex" href="index.php">Main Page</a> &nbsp; <a class="qindex" href="modules.php">Modules</a> &nbsp; <a class="qindex" href="hierarchy.php">Class Hierarchy</a> &nbsp; <a class="qindex" href="classes.php">Alphabetical List</a> &nbsp; <a class="qindex" href="annotated.php">Compound List</a> &nbsp; <a class="qindex" href="files.php">File List</a> &nbsp; <a class="qindex" href="functions.php">Compound Members</a> &nbsp; </center>
<hr><h1>aeTimer Class Reference</h1>This is a general virtual/system timer class. 
<a href="#_details">More...</a>
<p>
<code>#include &lt;<a class="el" href="timer_8h-source.php">timer.h</a>&gt;</code>
<p>
<p>Inheritance diagram for aeTimer:
<p><center><img src="classaeTimer.png" usemap="#aeTimer_map" border="0" alt=""></center>
<map name="aeTimer_map">
<area href="classaeBase.php" alt="aeBase" shape="rect" coords="0,0,57,24">
</map>
<a href="classaeTimer-members.php">List of all members.</a><table border=0 cellpadding=0 cellspacing=0>
<tr><td></td></tr>
<tr><td colspan=2><br><h2>Public Methods</h2></td></tr>
<tr><td nowrap align=right valign=top>float&nbsp;</td><td valign=bottom><a class="el" href="classaeTimer.php#a2">GetFPS</a> () const</td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>Get the current FPS.</em> <a href="#a2"></a><em></em></font><br><br></td></tr>
<tr><td nowrap align=right valign=top>float&nbsp;</td><td valign=bottom><a class="el" href="classaeTimer.php#a3">GetFrameInterval</a> () const</td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>Get the interval between two frames.</em> <a href="#a3"></a><em></em></font><br><br></td></tr>
<tr><td nowrap align=right valign=top>void&nbsp;</td><td valign=bottom><a class="el" href="classaeTimer.php#a4">CalculateFrameRate</a> ()</td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>Calculate the current frame rate.</em> <a href="#a4"></a><em></em></font><br><br></td></tr>
</table>
<hr><a name="_details"></a><h2>Detailed Description</h2>
This is a general virtual/system timer class.
<p>

<p>
Definition at line <a class="el" href="timer_8h-source.php#l00034">34</a> of file <a class="el" href="timer_8h-source.php">timer.h</a>.<hr><h2>Member Function Documentation</h2>
<a name="a4" doxytag="aeTimer::CalculateFrameRate"></a><p>
<table width="100%" cellpadding="2" cellspacing="0" border="0">
  <tr>
    <td class="md">
      <table cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td class="md" nowrap valign="top"> void aeTimer::CalculateFrameRate </td>
          <td class="md" valign="top">(&nbsp;</td>
          <td class="mdname1" valign="top" nowrap>&nbsp;          </td>
          <td class="md" valign="top">)&nbsp;</td>
          <td class="md" nowrap></td>
        </tr>

      </table>
    </td>
  </tr>
</table>
<table cellspacing=5 cellpadding=0 border=0>
  <tr>
    <td>
      &nbsp;
    </td>
    <td>

<p>
Calculate the current frame rate.
<p>
    </td>
  </tr>
</table>
<a name="a2" doxytag="aeTimer::GetFPS"></a><p>
<table width="100%" cellpadding="2" cellspacing="0" border="0">
  <tr>
    <td class="md">
      <table cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td class="md" nowrap valign="top"> float aeTimer::GetFPS </td>
          <td class="md" valign="top">(&nbsp;</td>
          <td class="mdname1" valign="top" nowrap>&nbsp;          </td>
          <td class="md" valign="top">)&nbsp;</td>
          <td class="md" nowrap> const<code> [inline]</code></td>
        </tr>

      </table>
    </td>
  </tr>
</table>
<table cellspacing=5 cellpadding=0 border=0>
  <tr>
    <td>
      &nbsp;
    </td>
    <td>

<p>
Get the current FPS.
<p>
<dl compact><dt><b>Returns:</b></dt><dd>Current FPS.</dd></dl>

<p>
Definition at line <a class="el" href="timer_8h-source.php#l00055">55</a> of file <a class="el" href="timer_8h-source.php">timer.h</a>.
<p>
Referenced by <a class="el" href="camera_8h-source.php#l00148">aeCamera::GetFPS()</a>.    </td>
  </tr>
</table>
<a name="a3" doxytag="aeTimer::GetFrameInterval"></a><p>
<table width="100%" cellpadding="2" cellspacing="0" border="0">
  <tr>
    <td class="md">
      <table cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td class="md" nowrap valign="top"> float aeTimer::GetFrameInterval </td>
          <td class="md" valign="top">(&nbsp;</td>
          <td class="mdname1" valign="top" nowrap>&nbsp;          </td>
          <td class="md" valign="top">)&nbsp;</td>
          <td class="md" nowrap> const<code> [inline]</code></td>
        </tr>

      </table>
    </td>
  </tr>
</table>
<table cellspacing=5 cellpadding=0 border=0>
  <tr>
    <td>
      &nbsp;
    </td>
    <td>

<p>
Get the interval between two frames.
<p>
This is used by <a class="el" href="classaeCamera.php">aeCamera</a> to create time based movement.
<p>
<dl compact><dt><b>Returns:</b></dt><dd>The interval.</dd></dl>

<p>
Definition at line <a class="el" href="timer_8h-source.php#l00064">64</a> of file <a class="el" href="timer_8h-source.php">timer.h</a>.    </td>
  </tr>
</table>
<hr>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="timer_8h-source.php">timer.h</a></ul>
<hr><address style="align: right;"><small>Generated on Sun Mar 2 01:14:23 2003 for AE Engine by
<a href="http://www.doxygen.org/index.html">
<img src="doxygen.png" alt="doxygen" align="middle" border=0 
width=110 height=53></a>1.3-rc2 </small></address>
</body>
</html>
