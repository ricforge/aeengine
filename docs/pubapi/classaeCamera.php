<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html><head><meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1">
<title>aeCamera class Reference</title>
<link href="doxygen.css" rel="stylesheet" type="text/css">
</head><body>
<!-- Generated by Doxygen 1.3-rc2 -->
<center>
<a class="qindex" href="index.php">Main Page</a> &nbsp; <a class="qindex" href="modules.php">Modules</a> &nbsp; <a class="qindex" href="hierarchy.php">Class Hierarchy</a> &nbsp; <a class="qindex" href="classes.php">Alphabetical List</a> &nbsp; <a class="qindex" href="annotated.php">Compound List</a> &nbsp; <a class="qindex" href="files.php">File List</a> &nbsp; <a class="qindex" href="functions.php">Compound Members</a> &nbsp; </center>
<hr><h1>aeCamera Class Reference</h1>This is a single camera object that can be attached to the engine. 
<a href="#_details">More...</a>
<p>
<code>#include &lt;<a class="el" href="camera_8h-source.php">camera.h</a>&gt;</code>
<p>
<p>Inheritance diagram for aeCamera:
<p><center><img src="classaeCamera.png" usemap="#aeCamera_map" border="0" alt=""></center>
<map name="aeCamera_map">
<area href="classaeBase.php" alt="aeBase" shape="rect" coords="0,0,70,24">
</map>
<a href="classaeCamera-members.php">List of all members.</a><table border=0 cellpadding=0 cellspacing=0>
<tr><td></td></tr>
<tr><td colspan=2><br><h2>Public Methods</h2></td></tr>
<tr><td nowrap align=right valign=top><a class="el" href="classaeVector3.php">aeVector3</a>&nbsp;</td><td valign=bottom><a class="el" href="classaeCamera.php#a2">GetPosition</a> () const</td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>Get the position vector of the camera.</em> <a href="#a2"></a><em></em></font><br><br></td></tr>
<tr><td nowrap align=right valign=top><a class="el" href="classaeVector3.php">aeVector3</a>&nbsp;</td><td valign=bottom><a class="el" href="classaeCamera.php#a3">GetView</a> () const</td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>Get the view vector of the camera.</em> <a href="#a3"></a><em></em></font><br><br></td></tr>
<tr><td nowrap align=right valign=top><a class="el" href="classaeVector3.php">aeVector3</a>&nbsp;</td><td valign=bottom><a class="el" href="classaeCamera.php#a4">GetUpVector</a> () const</td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>Get the up vector of the camera.</em> <a href="#a4"></a><em></em></font><br><br></td></tr>
<tr><td nowrap align=right valign=top><a class="el" href="classaeVector3.php">aeVector3</a>&nbsp;</td><td valign=bottom><a class="el" href="classaeCamera.php#a5">GetStrafe</a> () const</td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>Get the strafe vector of the camera.</em> <a href="#a5"></a><em></em></font><br><br></td></tr>
<tr><td nowrap align=right valign=top>void&nbsp;</td><td valign=bottom><a class="el" href="classaeCamera.php#a6">PositionCamera</a> (float pos_x, float pos_y, float pos_z, float view_x, float view_y, float view_z, float upvec_x, float upvec_y, float upvec_z)</td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>Set the camera position.</em> <a href="#a6"></a><em></em></font><br><br></td></tr>
<tr><td nowrap align=right valign=top>void&nbsp;</td><td valign=bottom><a class="el" href="classaeCamera.php#a7">PositionCamera</a> (<a class="el" href="classaeVector3.php">aeVector3</a> posVec, <a class="el" href="classaeVector3.php">aeVector3</a> viewVec, <a class="el" href="classaeVector3.php">aeVector3</a> upVec)</td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>Set the camera position.</em> <a href="#a7"></a><em></em></font><br><br></td></tr>
<tr><td nowrap align=right valign=top>void&nbsp;</td><td valign=bottom><a class="el" href="classaeCamera.php#a8">Update</a> ()</td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>Update the camera.</em> <a href="#a8"></a><em></em></font><br><br></td></tr>
<tr><td nowrap align=right valign=top>float&nbsp;</td><td valign=bottom><a class="el" href="classaeCamera.php#a9">GetFPS</a> () const</td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>Get FPS.</em> <a href="#a9"></a><em></em></font><br><br></td></tr>
<tr><td nowrap align=right valign=top><a name="a10" doxytag="aeCamera::Look"></a>
void&nbsp;</td><td valign=bottom><b>Look</b> ()</td></tr>
<tr><td colspan=2><br><h2>Public Attributes</h2></td></tr>
<tr><td nowrap align=right valign=top><a name="m0" doxytag="aeCamera::upPressed"></a>
bool&nbsp;</td><td valign=bottom><b>upPressed</b></td></tr>
<tr><td nowrap align=right valign=top><a name="m1" doxytag="aeCamera::downPressed"></a>
bool&nbsp;</td><td valign=bottom><b>downPressed</b></td></tr>
<tr><td nowrap align=right valign=top><a name="m2" doxytag="aeCamera::rightPressed"></a>
bool&nbsp;</td><td valign=bottom><b>rightPressed</b></td></tr>
<tr><td nowrap align=right valign=top><a name="m3" doxytag="aeCamera::leftPressed"></a>
bool&nbsp;</td><td valign=bottom><b>leftPressed</b></td></tr>
</table>
<hr><a name="_details"></a><h2>Detailed Description</h2>
This is a single camera object that can be attached to the engine.
<p>
Use engine-&gt;AttachCamera() to attach the camera.
<p>
<dl compact><dt><b>See also:</b></dt><dd><a class="el" href="classaeEngine.php#a12">aeEngine::AttachCamera()</a> </dd></dl>

<p>

<p>
Definition at line <a class="el" href="camera_8h-source.php#l00041">41</a> of file <a class="el" href="camera_8h-source.php">camera.h</a>.<hr><h2>Member Function Documentation</h2>
<a name="a9" doxytag="aeCamera::GetFPS"></a><p>
<table width="100%" cellpadding="2" cellspacing="0" border="0">
  <tr>
    <td class="md">
      <table cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td class="md" nowrap valign="top"> float aeCamera::GetFPS </td>
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
Get FPS.
<p>
<dl compact><dt><b>Returns:</b></dt><dd>Current FPS.</dd></dl>

<p>
Definition at line <a class="el" href="camera_8h-source.php#l00148">148</a> of file <a class="el" href="camera_8h-source.php">camera.h</a>.
<p>
References <a class="el" href="timer_8h-source.php#l00055">aeTimer::GetFPS()</a>.    </td>
  </tr>
</table>
<a name="a2" doxytag="aeCamera::GetPosition"></a><p>
<table width="100%" cellpadding="2" cellspacing="0" border="0">
  <tr>
    <td class="md">
      <table cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td class="md" nowrap valign="top"> <a class="el" href="classaeVector3.php">aeVector3</a> aeCamera::GetPosition </td>
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
Get the position vector of the camera.
<p>
<dl compact><dt><b>Returns:</b></dt><dd>Camera The camera's position.</dd></dl>

<p>
Definition at line <a class="el" href="camera_8h-source.php#l00079">79</a> of file <a class="el" href="camera_8h-source.php">camera.h</a>.    </td>
  </tr>
</table>
<a name="a5" doxytag="aeCamera::GetStrafe"></a><p>
<table width="100%" cellpadding="2" cellspacing="0" border="0">
  <tr>
    <td class="md">
      <table cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td class="md" nowrap valign="top"> <a class="el" href="classaeVector3.php">aeVector3</a> aeCamera::GetStrafe </td>
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
Get the strafe vector of the camera.
<p>
<dl compact><dt><b>Returns:</b></dt><dd>The camera's strafe vector.</dd></dl>

<p>
Definition at line <a class="el" href="camera_8h-source.php#l00103">103</a> of file <a class="el" href="camera_8h-source.php">camera.h</a>.    </td>
  </tr>
</table>
<a name="a4" doxytag="aeCamera::GetUpVector"></a><p>
<table width="100%" cellpadding="2" cellspacing="0" border="0">
  <tr>
    <td class="md">
      <table cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td class="md" nowrap valign="top"> <a class="el" href="classaeVector3.php">aeVector3</a> aeCamera::GetUpVector </td>
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
Get the up vector of the camera.
<p>
<dl compact><dt><b>Returns:</b></dt><dd>The camera's up vector.</dd></dl>

<p>
Definition at line <a class="el" href="camera_8h-source.php#l00095">95</a> of file <a class="el" href="camera_8h-source.php">camera.h</a>.    </td>
  </tr>
</table>
<a name="a3" doxytag="aeCamera::GetView"></a><p>
<table width="100%" cellpadding="2" cellspacing="0" border="0">
  <tr>
    <td class="md">
      <table cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td class="md" nowrap valign="top"> <a class="el" href="classaeVector3.php">aeVector3</a> aeCamera::GetView </td>
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
Get the view vector of the camera.
<p>
<dl compact><dt><b>Returns:</b></dt><dd>The camera's view vector.</dd></dl>

<p>
Definition at line <a class="el" href="camera_8h-source.php#l00087">87</a> of file <a class="el" href="camera_8h-source.php">camera.h</a>.    </td>
  </tr>
</table>
<a name="a7" doxytag="aeCamera::PositionCamera"></a><p>
<table width="100%" cellpadding="2" cellspacing="0" border="0">
  <tr>
    <td class="md">
      <table cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td class="md" nowrap valign="top"> void aeCamera::PositionCamera </td>
          <td class="md" valign="top">(&nbsp;</td>
          <td class="md" nowrap valign="top"><a class="el" href="classaeVector3.php">aeVector3</a>&nbsp;</td>
          <td class="mdname" nowrap>&nbsp; <em>posVec</em>, </td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td class="md" nowrap><a class="el" href="classaeVector3.php">aeVector3</a>&nbsp;</td>
          <td class="mdname" nowrap>&nbsp; <em>viewVec</em>, </td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td class="md" nowrap><a class="el" href="classaeVector3.php">aeVector3</a>&nbsp;</td>
          <td class="mdname" nowrap>&nbsp; <em>upVec</em></td>
        </tr>
        <tr>
          <td></td>
          <td class="md">)&nbsp;</td>
          <td class="md" colspan="2"></td>
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
Set the camera position.
<p>
This (re)places the camera based on position vector, view vector, and the 'up' vector.
<p>
<dl compact><dt><b>Parameters:</b></dt><dd>
  <table border="0" cellspacing="2" cellpadding="0">
    <tr><td valign=top><em>posVec</em>&nbsp;</td><td>Position vector. </td></tr>
    <tr><td valign=top><em>viewVec</em>&nbsp;</td><td>View vector. </td></tr>
    <tr><td valign=top><em>upVec</em>&nbsp;</td><td>Up vector.</td></tr>
  </table>
</dl>
    </td>
  </tr>
</table>
<a name="a6" doxytag="aeCamera::PositionCamera"></a><p>
<table width="100%" cellpadding="2" cellspacing="0" border="0">
  <tr>
    <td class="md">
      <table cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td class="md" nowrap valign="top"> void aeCamera::PositionCamera </td>
          <td class="md" valign="top">(&nbsp;</td>
          <td class="md" nowrap valign="top">float&nbsp;</td>
          <td class="mdname" nowrap>&nbsp; <em>pos_x</em>, </td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td class="md" nowrap>float&nbsp;</td>
          <td class="mdname" nowrap>&nbsp; <em>pos_y</em>, </td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td class="md" nowrap>float&nbsp;</td>
          <td class="mdname" nowrap>&nbsp; <em>pos_z</em>, </td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td class="md" nowrap>float&nbsp;</td>
          <td class="mdname" nowrap>&nbsp; <em>view_x</em>, </td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td class="md" nowrap>float&nbsp;</td>
          <td class="mdname" nowrap>&nbsp; <em>view_y</em>, </td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td class="md" nowrap>float&nbsp;</td>
          <td class="mdname" nowrap>&nbsp; <em>view_z</em>, </td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td class="md" nowrap>float&nbsp;</td>
          <td class="mdname" nowrap>&nbsp; <em>upvec_x</em>, </td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td class="md" nowrap>float&nbsp;</td>
          <td class="mdname" nowrap>&nbsp; <em>upvec_y</em>, </td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td class="md" nowrap>float&nbsp;</td>
          <td class="mdname" nowrap>&nbsp; <em>upvec_z</em></td>
        </tr>
        <tr>
          <td></td>
          <td class="md">)&nbsp;</td>
          <td class="md" colspan="2"></td>
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
Set the camera position.
<p>
This (re)places the camera based on position, view (where it is looking at), and the 'up' vector.
<p>
<dl compact><dt><b>Parameters:</b></dt><dd>
  <table border="0" cellspacing="2" cellpadding="0">
    <tr><td valign=top><em>pos_x</em>&nbsp;</td><td>Camera x position. </td></tr>
    <tr><td valign=top><em>pos_y</em>&nbsp;</td><td>Camera y position. </td></tr>
    <tr><td valign=top><em>pos_z</em>&nbsp;</td><td>Camera z position. </td></tr>
    <tr><td valign=top><em>view_x</em>&nbsp;</td><td>Camera view x. </td></tr>
    <tr><td valign=top><em>view_y</em>&nbsp;</td><td>Camera view y. </td></tr>
    <tr><td valign=top><em>view_z</em>&nbsp;</td><td>Camera view z. </td></tr>
    <tr><td valign=top><em>upvec_x</em>&nbsp;</td><td>Camera up vector x. </td></tr>
    <tr><td valign=top><em>upvec_y</em>&nbsp;</td><td>Camera up vector y. </td></tr>
    <tr><td valign=top><em>upvec_z</em>&nbsp;</td><td>Camera up vector z.</td></tr>
  </table>
</dl>
    </td>
  </tr>
</table>
<a name="a8" doxytag="aeCamera::Update"></a><p>
<table width="100%" cellpadding="2" cellspacing="0" border="0">
  <tr>
    <td class="md">
      <table cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td class="md" nowrap valign="top"> void aeCamera::Update </td>
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
Update the camera.
<p>
This should be called each frame.    </td>
  </tr>
</table>
<hr>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="camera_8h-source.php">camera.h</a></ul>
<hr><address style="align: right;"><small>Generated on Sun Mar 2 01:14:23 2003 for AE Engine by
<a href="http://www.doxygen.org/index.html">
<img src="doxygen.png" alt="doxygen" align="middle" border=0 
width=110 height=53></a>1.3-rc2 </small></address>
</body>
</html>
