<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html><head><meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1">
<title>aeTerrMan class Reference</title>
<link href="doxygen.css" rel="stylesheet" type="text/css">
</head><body>
<!-- Generated by Doxygen 1.3-rc2 -->
<center>
<a class="qindex" href="index.php">Main Page</a> &nbsp; <a class="qindex" href="modules.php">Modules</a> &nbsp; <a class="qindex" href="hierarchy.php">Class Hierarchy</a> &nbsp; <a class="qindex" href="classes.php">Alphabetical List</a> &nbsp; <a class="qindex" href="annotated.php">Compound List</a> &nbsp; <a class="qindex" href="files.php">File List</a> &nbsp; <a class="qindex" href="functions.php">Compound Members</a> &nbsp; </center>
<hr><h1>aeTerrMan Class Reference</h1>Interface to the terrain plugin. 
<a href="#_details">More...</a>
<p>
<code>#include &lt;<a class="el" href="terrman_8h-source.php">terrman.h</a>&gt;</code>
<p>
<p>Inheritance diagram for aeTerrMan:
<p><center><img src="classaeTerrMan.png" usemap="#aeTerrMan_map" border="0" alt=""></center>
<map name="aeTerrMan_map">
<area href="classaePlugin.php" alt="aePlugin" shape="rect" coords="0,56,75,80">
<area href="classaeBase.php" alt="aeBase" shape="rect" coords="0,0,75,24">
</map>
<a href="classaeTerrMan-members.php">List of all members.</a><table border=0 cellpadding=0 cellspacing=0>
<tr><td></td></tr>
<tr><td colspan=2><br><h2>Public Methods</h2></td></tr>
<tr><td nowrap align=right valign=top><a name="a0" doxytag="aeTerrMan::aeTerrMan"></a>
&nbsp;</td><td valign=bottom><b>aeTerrMan</b> (<a class="el" href="classaeRegistry.php">aeRegistry</a> *aeReg)</td></tr>
<tr><td nowrap align=right valign=top>virtual <a class="el" href="classaeTriangle.php">aeTriangle</a> *&nbsp;</td><td valign=bottom><a class="el" href="classaeTerrMan.php#a2">GetObject</a> () const</td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>Get the terrain object.</em> <a href="#a2"></a><em></em></font><br><br></td></tr>
<tr><td nowrap align=right valign=top>virtual void&nbsp;</td><td valign=bottom><a class="el" href="classaeTerrMan.php#a3">SetOrigin</a> (float x, float y, float z)</td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>Set the terrain's origin.</em> <a href="#a3"></a><em></em></font><br><br></td></tr>
<tr><td nowrap align=right valign=top>virtual void&nbsp;</td><td valign=bottom><a class="el" href="classaeTerrMan.php#a4">SetOrigin</a> (<a class="el" href="classaeVector3.php">aeVector3</a>)</td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>Set the terrain's origin.</em> <a href="#a4"></a><em></em></font><br><br></td></tr>
<tr><td nowrap align=right valign=top>virtual void&nbsp;</td><td valign=bottom><a class="el" href="classaeTerrMan.php#a5">SetMaterial</a> (<a class="el" href="classaeMaterial.php">aeMaterial</a> *)</td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>Set a material for the terrain.</em> <a href="#a5"></a><em></em></font><br><br></td></tr>
<tr><td nowrap align=right valign=top>virtual bool&nbsp;</td><td valign=bottom><a class="el" href="classaeTerrMan.php#a6">LoadHeightMap</a> (char *filename)</td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>Load a heightmap to generate terrain from.</em> <a href="#a6"></a><em></em></font><br><br></td></tr>
</table>
<hr><a name="_details"></a><h2>Detailed Description</h2>
Interface to the terrain plugin.
<p>

<p>
Definition at line <a class="el" href="terrman_8h-source.php#l00036">36</a> of file <a class="el" href="terrman_8h-source.php">terrman.h</a>.<hr><h2>Member Function Documentation</h2>
<a name="a2" doxytag="aeTerrMan::GetObject"></a><p>
<table width="100%" cellpadding="2" cellspacing="0" border="0">
  <tr>
    <td class="md">
      <table cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td class="md" nowrap valign="top"> virtual <a class="el" href="classaeTriangle.php">aeTriangle</a>* aeTerrMan::GetObject </td>
          <td class="md" valign="top">(&nbsp;</td>
          <td class="mdname1" valign="top" nowrap>&nbsp;          </td>
          <td class="md" valign="top">)&nbsp;</td>
          <td class="md" nowrap> const<code> [inline, virtual]</code></td>
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
Get the terrain object.
<p>
You can then add the object to the engine using <a class="el" href="classaeEngine.php#a10">aeEngine::AddObject()</a>.
<p>
<dl compact><dt><b>Returns:</b></dt><dd>The terrain object (as <a class="el" href="classaeTriangle.php">aeTriangle</a>).</dd></dl>

<p>
Definition at line <a class="el" href="terrman_8h-source.php#l00062">62</a> of file <a class="el" href="terrman_8h-source.php">terrman.h</a>.    </td>
  </tr>
</table>
<a name="a6" doxytag="aeTerrMan::LoadHeightMap"></a><p>
<table width="100%" cellpadding="2" cellspacing="0" border="0">
  <tr>
    <td class="md">
      <table cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td class="md" nowrap valign="top"> virtual bool aeTerrMan::LoadHeightMap </td>
          <td class="md" valign="top">(&nbsp;</td>
          <td class="md" nowrap valign="top">char *&nbsp;</td>
          <td class="mdname1" valign="top" nowrap>&nbsp; <em>filename</em>          </td>
          <td class="md" valign="top">)&nbsp;</td>
          <td class="md" nowrap><code> [virtual]</code></td>
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
Load a heightmap to generate terrain from.
<p>
<dl compact><dt><b>Parameters:</b></dt><dd>
  <table border="0" cellspacing="2" cellpadding="0">
    <tr><td valign=top><em>filename</em>&nbsp;</td><td>Path to a raw filename containing heightmap data.</td></tr>
  </table>
</dl>
<dl compact><dt><b>Returns:</b></dt><dd>true if the heightmap was loaded succesfully.</dd></dl>
    </td>
  </tr>
</table>
<a name="a5" doxytag="aeTerrMan::SetMaterial"></a><p>
<table width="100%" cellpadding="2" cellspacing="0" border="0">
  <tr>
    <td class="md">
      <table cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td class="md" nowrap valign="top"> virtual void aeTerrMan::SetMaterial </td>
          <td class="md" valign="top">(&nbsp;</td>
          <td class="md" nowrap valign="top"><a class="el" href="classaeMaterial.php">aeMaterial</a> *&nbsp;</td>
          <td class="mdname1" valign="top" nowrap>&nbsp;          </td>
          <td class="md" valign="top">)&nbsp;</td>
          <td class="md" nowrap><code> [virtual]</code></td>
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
Set a material for the terrain.
<p>
<dl compact><dt><b>Parameters:</b></dt><dd>
  <table border="0" cellspacing="2" cellpadding="0">
    <tr><td valign=top><em>aeMaterial</em>&nbsp;</td><td>* The material.</td></tr>
  </table>
</dl>
    </td>
  </tr>
</table>
<a name="a4" doxytag="aeTerrMan::SetOrigin"></a><p>
<table width="100%" cellpadding="2" cellspacing="0" border="0">
  <tr>
    <td class="md">
      <table cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td class="md" nowrap valign="top"> virtual void aeTerrMan::SetOrigin </td>
          <td class="md" valign="top">(&nbsp;</td>
          <td class="md" nowrap valign="top"><a class="el" href="classaeVector3.php">aeVector3</a>&nbsp;</td>
          <td class="mdname1" valign="top" nowrap>&nbsp;          </td>
          <td class="md" valign="top">)&nbsp;</td>
          <td class="md" nowrap><code> [virtual]</code></td>
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
Set the terrain's origin.
<p>
<dl compact><dt><b>Parameters:</b></dt><dd>
  <table border="0" cellspacing="2" cellpadding="0">
    <tr><td valign=top><em>aeVector3</em>&nbsp;</td><td>Vector specifying the origin.</td></tr>
  </table>
</dl>
    </td>
  </tr>
</table>
<a name="a3" doxytag="aeTerrMan::SetOrigin"></a><p>
<table width="100%" cellpadding="2" cellspacing="0" border="0">
  <tr>
    <td class="md">
      <table cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td class="md" nowrap valign="top"> virtual void aeTerrMan::SetOrigin </td>
          <td class="md" valign="top">(&nbsp;</td>
          <td class="md" nowrap valign="top">float&nbsp;</td>
          <td class="mdname" nowrap>&nbsp; <em>x</em>, </td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td class="md" nowrap>float&nbsp;</td>
          <td class="mdname" nowrap>&nbsp; <em>y</em>, </td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td class="md" nowrap>float&nbsp;</td>
          <td class="mdname" nowrap>&nbsp; <em>z</em></td>
        </tr>
        <tr>
          <td></td>
          <td class="md">)&nbsp;</td>
          <td class="md" colspan="2"><code> [virtual]</code></td>
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
Set the terrain's origin.
<p>
<dl compact><dt><b>Parameters:</b></dt><dd>
  <table border="0" cellspacing="2" cellpadding="0">
    <tr><td valign=top><em>x</em>&nbsp;</td><td>X origin. </td></tr>
    <tr><td valign=top><em>y</em>&nbsp;</td><td>Y origin. </td></tr>
    <tr><td valign=top><em>z</em>&nbsp;</td><td>Z origin.</td></tr>
  </table>
</dl>
    </td>
  </tr>
</table>
<hr>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="terrman_8h-source.php">terrman.h</a></ul>
<hr><address style="align: right;"><small>Generated on Sun Mar 2 01:14:23 2003 for AE Engine by
<a href="http://www.doxygen.org/index.html">
<img src="doxygen.png" alt="doxygen" align="middle" border=0 
width=110 height=53></a>1.3-rc2 </small></address>
</body>
</html>