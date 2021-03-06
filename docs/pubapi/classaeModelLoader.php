<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html><head><meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1">
<title>aeModelLoader class Reference</title>
<link href="doxygen.css" rel="stylesheet" type="text/css">
</head><body>
<!-- Generated by Doxygen 1.3-rc2 -->
<center>
<a class="qindex" href="index.php">Main Page</a> &nbsp; <a class="qindex" href="modules.php">Modules</a> &nbsp; <a class="qindex" href="hierarchy.php">Class Hierarchy</a> &nbsp; <a class="qindex" href="classes.php">Alphabetical List</a> &nbsp; <a class="qindex" href="annotated.php">Compound List</a> &nbsp; <a class="qindex" href="files.php">File List</a> &nbsp; <a class="qindex" href="functions.php">Compound Members</a> &nbsp; </center>
<hr><h1>aeModelLoader Class Reference</h1>Interface to the model loader plugin. 
<a href="#_details">More...</a>
<p>
<code>#include &lt;<a class="el" href="mdlldr_8h-source.php">mdlldr.h</a>&gt;</code>
<p>
<p>Inheritance diagram for aeModelLoader:
<p><center><img src="classaeModelLoader.png" usemap="#aeModelLoader_map" border="0" alt=""></center>
<map name="aeModelLoader_map">
<area href="classaePlugin.php" alt="aePlugin" shape="rect" coords="0,56,101,80">
<area href="classaeBase.php" alt="aeBase" shape="rect" coords="0,0,101,24">
</map>
<a href="classaeModelLoader-members.php">List of all members.</a><table border=0 cellpadding=0 cellspacing=0>
<tr><td></td></tr>
<tr><td colspan=2><br><h2>Public Methods</h2></td></tr>
<tr><td nowrap align=right valign=top><a name="a0" doxytag="aeModelLoader::aeModelLoader"></a>
&nbsp;</td><td valign=bottom><b>aeModelLoader</b> (<a class="el" href="classaeRegistry.php">aeRegistry</a> *aeReg)</td></tr>
<tr><td nowrap align=right valign=top>virtual <a class="el" href="classaeModel.php">aeModel</a> *&nbsp;</td><td valign=bottom><a class="el" href="classaeModelLoader.php#a2">LoadModel</a> (char *mdlname, char *mdlfile, <a class="el" href="classaeMaterial.php">aeMaterial</a> *mat)</td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>Load a model given a name, model file, and a material.</em> <a href="#a2"></a><em></em></font><br><br></td></tr>
</table>
<hr><a name="_details"></a><h2>Detailed Description</h2>
Interface to the model loader plugin.
<p>

<p>
Definition at line <a class="el" href="mdlldr_8h-source.php#l00051">51</a> of file <a class="el" href="mdlldr_8h-source.php">mdlldr.h</a>.<hr><h2>Member Function Documentation</h2>
<a name="a2" doxytag="aeModelLoader::LoadModel"></a><p>
<table width="100%" cellpadding="2" cellspacing="0" border="0">
  <tr>
    <td class="md">
      <table cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td class="md" nowrap valign="top"> virtual <a class="el" href="classaeModel.php">aeModel</a>* aeModelLoader::LoadModel </td>
          <td class="md" valign="top">(&nbsp;</td>
          <td class="md" nowrap valign="top">char *&nbsp;</td>
          <td class="mdname" nowrap>&nbsp; <em>mdlname</em>, </td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td class="md" nowrap>char *&nbsp;</td>
          <td class="mdname" nowrap>&nbsp; <em>mdlfile</em>, </td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td class="md" nowrap><a class="el" href="classaeMaterial.php">aeMaterial</a> *&nbsp;</td>
          <td class="mdname" nowrap>&nbsp; <em>mat</em></td>
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
Load a model given a name, model file, and a material.
<p>
<dl compact><dt><b>Parameters:</b></dt><dd>
  <table border="0" cellspacing="2" cellpadding="0">
    <tr><td valign=top><em>mdlname</em>&nbsp;</td><td>The name of the model. </td></tr>
    <tr><td valign=top><em>mdlfile</em>&nbsp;</td><td>The model file. </td></tr>
    <tr><td valign=top><em>mat</em>&nbsp;</td><td>The model's material</td></tr>
  </table>
</dl>
<dl compact><dt><b>Returns:</b></dt><dd>An <a class="el" href="classaeModel.php">aeModel</a> instance ready to be used.</dd></dl>
    </td>
  </tr>
</table>
<hr>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="mdlldr_8h-source.php">mdlldr.h</a></ul>
<hr><address style="align: right;"><small>Generated on Sun Mar 2 01:14:23 2003 for AE Engine by
<a href="http://www.doxygen.org/index.html">
<img src="doxygen.png" alt="doxygen" align="middle" border=0 
width=110 height=53></a>1.3-rc2 </small></address>
</body>
</html>
